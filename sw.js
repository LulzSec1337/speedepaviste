
// Speed Épaviste Pro - Service Worker for Enhanced Performance
const CACHE_NAME = 'speed-epaviste-v3.0.1';
const urlsToCache = [
  '/',
  '/css/base.css',
  '/css/header.css',
  '/css/components.css',
  '/css/responsive.css',
  '/css/animations.css',
  '/js/core.js',
  '/js/animations.js',
  '/js/performance.js',
  '/main.js',
  '/style.css'
];

// Install event - cache resources
self.addEventListener('install', event => {
  event.waitUntil(
    caches.open(CACHE_NAME)
      .then(cache => {
        console.log('Opened cache');
        return cache.addAll(urlsToCache);
      })
  );
});

// Fetch event - serve from cache, fallback to network
self.addEventListener('fetch', event => {
  event.respondWith(
    caches.match(event.request)
      .then(response => {
        // Return cached version or fetch from network
        return response || fetch(event.request);
      }
    )
  );
});

// Activate event - clean up old caches
self.addEventListener('activate', event => {
  event.waitUntil(
    caches.keys().then(cacheNames => {
      return Promise.all(
        cacheNames.map(cacheName => {
          if (cacheName !== CACHE_NAME) {
            console.log('Deleting old cache:', cacheName);
            return caches.delete(cacheName);
          }
        })
      );
    })
  );
});

// Background sync for offline form submissions
self.addEventListener('sync', event => {
  if (event.tag === 'contact-form-sync') {
    event.waitUntil(syncContactForms());
  }
});

function syncContactForms() {
  // Handle offline form submissions when back online
  return new Promise((resolve, reject) => {
    // Implementation for syncing forms
    console.log('Syncing contact forms...');
    resolve();
  });
}

// Push notifications support
self.addEventListener('push', event => {
  const options = {
    body: event.data ? event.data.text() : 'Nouvelle notification Speed Épaviste',
    icon: '/icon-192x192.png',
    badge: '/badge-72x72.png',
    vibrate: [100, 50, 100],
    data: {
      dateOfArrival: Date.now(),
      primaryKey: 1
    },
    actions: [
      {
        action: 'explore',
        title: 'Voir le site',
        icon: '/icon-128x128.png'
      },
      {
        action: 'close',
        title: 'Fermer',
        icon: '/icon-128x128.png'
      }
    ]
  };

  event.waitUntil(
    self.registration.showNotification('Speed Épaviste Pro', options)
  );
});

// Handle notification clicks
self.addEventListener('notificationclick', event => {
  event.notification.close();

  if (event.action === 'explore') {
    event.waitUntil(
      clients.openWindow('/')
    );
  }
});
