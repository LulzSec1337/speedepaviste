// Speed Épaviste Service Worker
// Enhanced caching strategy for optimal performance

const CACHE_NAME = 'speed-epaviste-v3.0';
const STATIC_CACHE = 'static-v3.0';
const DYNAMIC_CACHE = 'dynamic-v3.0';

// Assets to cache immediately
const STATIC_ASSETS = [
    '/',
    '/style.css',
    '/main.js',
    'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap',
    'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css'
];

// Install event - cache static assets
self.addEventListener('install', event => {
    event.waitUntil(
        caches.open(STATIC_CACHE)
            .then(cache => {
                console.log('Caching static assets');
                return cache.addAll(STATIC_ASSETS);
            })
            .then(() => {
                return self.skipWaiting();
            })
    );
});

// Activate event - clean up old caches
self.addEventListener('activate', event => {
    event.waitUntil(
        caches.keys()
            .then(cacheNames => {
                return Promise.all(
                    cacheNames
                        .filter(cacheName => cacheName !== STATIC_CACHE && cacheName !== DYNAMIC_CACHE)
                        .map(cacheName => caches.delete(cacheName))
                );
            })
            .then(() => {
                return self.clients.claim();
            })
    );
});

// Fetch event - serve from cache, fallback to network
self.addEventListener('fetch', event => {
    const { request } = event;
    const url = new URL(request.url);

    // Skip non-GET requests
    if (request.method !== 'GET') {
        return;
    }

    // Skip admin and preview URLs
    if (url.pathname.includes('/wp-admin/') || url.pathname.includes('/preview/')) {
        return;
    }

    // Handle different types of requests
    if (STATIC_ASSETS.some(asset => request.url.includes(asset))) {
        // Static assets - cache first
        event.respondWith(cacheFirst(request));
    } else if (request.headers.get('accept').includes('text/html')) {
        // HTML pages - network first with cache fallback
        event.respondWith(networkFirst(request));
    } else if (request.headers.get('accept').includes('image')) {
        // Images - cache first with network fallback
        event.respondWith(cacheFirst(request));
    } else {
        // Other resources - network first
        event.respondWith(networkFirst(request));
    }
});

// Cache first strategy
async function cacheFirst(request) {
    try {
        const cachedResponse = await caches.match(request);
        if (cachedResponse) {
            return cachedResponse;
        }

        const networkResponse = await fetch(request);
        if (networkResponse.ok) {
            const cache = await caches.open(DYNAMIC_CACHE);
            cache.put(request, networkResponse.clone());
        }
        return networkResponse;
    } catch (error) {
        console.log('Cache first failed:', error);
        // Return offline page or cached version
        return caches.match('/');
    }
}

// Network first strategy
async function networkFirst(request) {
    try {
        const networkResponse = await fetch(request);
        if (networkResponse.ok) {
            const cache = await caches.open(DYNAMIC_CACHE);
            cache.put(request, networkResponse.clone());
        }
        return networkResponse;
    } catch (error) {
        console.log('Network first failed:', error);
        const cachedResponse = await caches.match(request);
        return cachedResponse || caches.match('/');
    }
}

// Background sync for form submissions
self.addEventListener('sync', event => {
    if (event.tag === 'contact-form') {
        event.waitUntil(sendPendingForms());
    }
});

// Handle pending form submissions
async function sendPendingForms() {
    // Implementation for offline form handling
    console.log('Sending pending forms...');
}

// Push notifications (for future use)
self.addEventListener('push', event => {
    if (event.data) {
        const data = event.data.json();
        const options = {
            body: data.body,
            icon: '/icon-192x192.png',
            badge: '/badge-72x72.png',
            actions: [
                {
                    action: 'view',
                    title: 'View',
                    icon: '/action-view.png'
                }
            ]
        };

        event.waitUntil(
            self.registration.showNotification(data.title, options)
        );
    }
});

// Handle notification clicks
self.addEventListener('notificationclick', event => {
    event.notification.close();

    if (event.action === 'view') {
        event.waitUntil(
            clients.openWindow('/')
        );
    }
});
