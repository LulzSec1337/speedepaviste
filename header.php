
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- SEO Meta Tags -->
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?> - Enlèvement d'épave gratuit 7j/7 en Île-de-France par épaviste agréé VHU. Intervention rapide, service écologique.">
    <meta name="keywords" content="enlèvement épave, épaviste, gratuit, VHU, Île-de-France, Paris, remorquage, certificat destruction">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta name="author" content="Speed Épaviste">
    
    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="Speed Épaviste - Enlèvement d'épave gratuit en Île-de-France">
    <meta property="og:description" content="Service d'enlèvement d'épave gratuit 7j/7 par épaviste agréé VHU. Intervention rapide en Île-de-France.">
    <meta property="og:url" content="<?php echo esc_url(home_url($_SERVER['REQUEST_URI'])); ?>">
    <meta property="og:site_name" content="Speed Épaviste">
    <meta property="og:locale" content="fr_FR">
    
    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Speed Épaviste - Enlèvement d'épave gratuit">
    <meta name="twitter:description" content="Service d'enlèvement d'épave gratuit 7j/7 en Île-de-France">
    
    <!-- Canonical URL -->
    <link rel="canonical" href="<?php echo esc_url(home_url($_SERVER['REQUEST_URI'])); ?>">
    
    <!-- Preconnect for performance -->
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
    <link rel="preconnect" href="https://images.unsplash.com" crossorigin>
    
    <!-- DNS Prefetch -->
    <link rel="dns-prefetch" href="//cdnjs.cloudflare.com">
    <link rel="dns-prefetch" href="//cdn.tailwindcss.com">
    
    <?php wp_head(); ?>
    
    <!-- Critical CSS inline -->
    <style>
        /* Critical CSS for above-the-fold content */
        body { font-family: system-ui, -apple-system, sans-serif; margin: 0; }
        .bg-gradient-to-b { background: linear-gradient(to bottom, var(--tw-gradient-stops)); }
        .from-white { --tw-gradient-from: #fff; --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to, rgba(255, 255, 255, 0)); }
        .via-yellow-100 { --tw-gradient-stops: var(--tw-gradient-from), #fef3c7, var(--tw-gradient-to, rgba(254, 243, 199, 0)); }
        .to-yellow-400 { --tw-gradient-to: #fbbf24; }
        .text-3xl { font-size: 1.875rem; line-height: 2.25rem; }
        .font-bold { font-weight: 700; }
        .text-gray-900 { color: #111827; }
        .mb-6 { margin-bottom: 1.5rem; }
        .transition-all { transition-property: all; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-duration: 150ms; }
        .duration-300 { transition-duration: 300ms; }
    </style>
    
    <!-- Async CSS loading for non-critical styles -->
    <link rel="preload" href="https://cdn.tailwindcss.com" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="https://cdn.tailwindcss.com"></noscript>
    
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"></noscript>
    
    <!-- Performance optimizations -->
    <script>
        // Service Worker for caching
        if ('serviceWorker' in navigator) {
            window.addEventListener('load', function() {
                navigator.serviceWorker.register('/sw.js').then(function(registration) {
                    console.log('SW registered: ', registration);
                }).catch(function(registrationError) {
                    console.log('SW registration failed: ', registrationError);
                });
            });
        }
        
        // Preload critical resources
        const preloadLink = document.createElement('link');
        preloadLink.rel = 'preload';
        preloadLink.as = 'image';
        preloadLink.href = 'https://images.unsplash.com/photo-1580273916550-e323be2ae537?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80';
        document.head.appendChild(preloadLink);
    </script>
</head>

<body <?php body_class('min-h-screen flex flex-col bg-gray-50'); ?>>
    <?php wp_body_open(); ?>
    
    <!-- Skip link for accessibility -->
    <a class="skip-link sr-only focus:not-sr-only focus:absolute focus:top-0 focus:left-0 bg-yellow-400 text-black p-2 z-50" href="#primary">
        <?php esc_html_e('Aller au contenu principal', 'speed-epaviste'); ?>
    </a>

    <!-- Optimized Header -->
    <header class="bg-white shadow-md sticky top-0 z-40" itemscope itemtype="https://schema.org/WPHeader">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo with optimization -->
                <div class="flex-shrink-0" itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
                    <?php if(has_custom_logo()): ?>
                        <?php the_custom_logo(); ?>
                    <?php else: ?>
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center" aria-label="Speed Épaviste - Accueil">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" 
                                 alt="Speed Épaviste - Logo" 
                                 class="h-12 w-auto"
                                 width="auto"
                                 height="48"
                                 loading="eager"
                                 itemprop="url">
                        </a>
                    <?php endif; ?>
                </div>

                <!-- Mobile menu button -->
                <button type="button" 
                        id="mobile-menu-toggle"
                        class="md:hidden inline-flex items-center justify-center p-2 rounded-md text-gray-700 hover:text-gray-900 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-yellow-500 transition-colors duration-200"
                        aria-controls="mobile-menu"
                        aria-expanded="false"
                        aria-label="Toggle navigation menu">
                    <svg id="menu-icon" class="h-6 w-6 block" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg id="close-icon" class="h-6 w-6 hidden" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>

                <!-- Desktop Navigation with improved SEO -->
                <nav class="hidden md:flex space-x-8" aria-label="Navigation principale" itemscope itemtype="https://schema.org/SiteNavigationElement">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="inline-flex items-center px-1 pt-1 text-sm font-medium text-gray-700 hover:text-yellow-500 transition-colors duration-200" itemprop="url">
                        <span itemprop="name">Accueil</span>
                    </a>
                    <a href="#services" class="inline-flex items-center px-1 pt-1 text-sm font-medium text-gray-700 hover:text-yellow-500 transition-colors duration-200" itemprop="url">
                        <span itemprop="name">Services</span>
                    </a>
                    <a href="#about" class="inline-flex items-center px-1 pt-1 text-sm font-medium text-gray-700 hover:text-yellow-500 transition-colors duration-200" itemprop="url">
                        <span itemprop="name">À propos</span>
                    </a>
                    <a href="#contact" class="inline-flex items-center px-1 pt-1 text-sm font-medium text-gray-700 hover:text-yellow-500 transition-colors duration-200" itemprop="url">
                        <span itemprop="name">Contact</span>
                    </a>
                </nav>

                <!-- CTA Button with microdata -->
                <div class="hidden md:flex items-center">
                    <a href="tel:0624930536" 
                       class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-full text-black bg-yellow-400 hover:bg-yellow-500 transition-all duration-200 hover:shadow-md"
                       itemprop="telephone"
                       aria-label="Appeler Speed Épaviste">
                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
                        </svg>
                        06 24 93 05 36
                    </a>
                </div>
            </div>
        </div>

        <!-- Mobile Navigation -->
        <div class="md:hidden" id="mobile-menu">
            <div class="px-2 pt-2 pb-3 space-y-1 hidden bg-white shadow-lg" id="mobile-menu-items">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50 transition-colors duration-200">Accueil</a>
                <a href="#services" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50 transition-colors duration-200">Services</a>
                <a href="#about" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50 transition-colors duration-200">À propos</a>
                <a href="#contact" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50 transition-colors duration-200">Contact</a>
                <a href="tel:0624930536" class="flex items-center px-3 py-2 text-base font-medium text-black bg-yellow-400 hover:bg-yellow-500 rounded-md transition-colors duration-200">
                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
                    </svg>
                    06 24 93 05 36
                </a>
            </div>
        </div>
    </header>

    <!-- Optimized JavaScript with performance considerations -->
    <script>
        // Optimized mobile menu toggle with performance
        document.addEventListener('DOMContentLoaded', function() {
            const toggleButton = document.getElementById('mobile-menu-toggle');
            const mobileMenu = document.getElementById('mobile-menu-items');
            const menuIcon = document.getElementById('menu-icon');
            const closeIcon = document.getElementById('close-icon');
            
            if (toggleButton && mobileMenu && menuIcon && closeIcon) {
                toggleButton.addEventListener('click', function() {
                    const expanded = toggleButton.getAttribute('aria-expanded') === 'true';
                    toggleButton.setAttribute('aria-expanded', !expanded);
                    
                    // Toggle menu visibility with optimized animation
                    if (expanded) {
                        mobileMenu.style.animation = 'slideUp 0.2s ease-out forwards';
                        setTimeout(() => {
                            mobileMenu.classList.add('hidden');
                            mobileMenu.style.animation = '';
                        }, 200);
                    } else {
                        mobileMenu.classList.remove('hidden');
                        mobileMenu.style.animation = 'slideDown 0.2s ease-out forwards';
                    }
                    
                    // Toggle icons
                    menuIcon.classList.toggle('hidden');
                    closeIcon.classList.toggle('hidden');
                });
            }
            
            // Smooth scrolling for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            });
        });
        
        // Add CSS animations for mobile menu
        const style = document.createElement('style');
        style.textContent = `
            @keyframes slideDown {
                from { opacity: 0; transform: translateY(-10px); }
                to { opacity: 1; transform: translateY(0); }
            }
            @keyframes slideUp {
                from { opacity: 1; transform: translateY(0); }
                to { opacity: 0; transform: translateY(-10px); }
            }
        `;
        document.head.appendChild(style);
    </script>
