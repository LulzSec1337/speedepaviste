
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- SEO Meta Tags -->
    <?php if (is_front_page()): ?>
    <meta name="description" content="Speed Épaviste - Enlèvement d'épave gratuit 7j/7 en Île-de-France. Épaviste agréé VHU pour recyclage écologique de votre voiture, camionnette ou moto. Certificat de destruction immédiat.">
    <meta name="keywords" content="enlèvement épave gratuit, épaviste Paris, recyclage voiture, enlèvement voiture hors d'usage, destruction auto, certificat de destruction, épaviste agréé Île-de-France, vhu gratuit, enlèvement épave 92, 93, 94, 75, 78, 77, 91, 95">
    <meta name="author" content="Speed Épaviste">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    
    <!-- Open Graph -->
    <meta property="og:title" content="Enlèvement Épave Gratuit Île-de-France | Speed Épaviste Agréé">
    <meta property="og:description" content="Service professionnel d'enlèvement d'épaves gratuit 7j/7 dans toute l'Île-de-France. Épaviste agréé VHU avec certificat de destruction immédiat.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo esc_url(home_url('/')); ?>">
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/images/speed-epaviste-og.jpg">
    <meta property="og:site_name" content="Speed Épaviste">
    <meta property="og:locale" content="fr_FR">
    
    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Speed Épaviste - Enlèvement d'épave gratuit">
    <meta name="twitter:description" content="Service d'enlèvement d'épave gratuit 7j/7 en Île-de-France">
    <meta name="twitter:image" content="<?php echo get_template_directory_uri(); ?>/assets/images/speed-epaviste-og.jpg">
    
    <!-- Canonical URL -->
    <link rel="canonical" href="<?php echo esc_url(home_url('/')); ?>">
    <?php endif; ?>
    
    <!-- Performance optimizations -->
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
    <link rel="preconnect" href="https://images.unsplash.com" crossorigin>
    <link rel="dns-prefetch" href="//cdnjs.cloudflare.com">
    
    <?php wp_head(); ?>
    
    <!-- Critical CSS inline for performance -->
    <style>
        /* Critical above-the-fold styles */
        body { 
            font-family: 'Inter', system-ui, -apple-system, sans-serif; 
            margin: 0; 
            line-height: 1.6;
            color: #111827;
        }
        
        /* Animation styles */
        .animate-fade-in { animation: fadeIn 1s ease-out forwards; opacity: 0; }
        .animate-fade-in-up { animation: fadeInUp 1s ease-out forwards; opacity: 0; }
        .animate-fade-in-left { animation: fadeInLeft 1s ease-out forwards; opacity: 0; }
        .animate-fade-in-right { animation: fadeInRight 1s ease-out forwards; opacity: 0; }
        .animate-float { animation: float 8s ease-in-out infinite; }
        .delay-100 { animation-delay: 0.1s; }
        .delay-200 { animation-delay: 0.2s; }
        .delay-300 { animation-delay: 0.3s; }
        .delay-400 { animation-delay: 0.4s; }
        
        @keyframes fadeIn { to { opacity: 1; } }
        @keyframes fadeInUp { 
            to { opacity: 1; transform: translateY(0); } 
            from { opacity: 0; transform: translateY(30px); } 
        }
        @keyframes fadeInLeft { 
            to { opacity: 1; transform: translateX(0); } 
            from { opacity: 0; transform: translateX(-30px); } 
        }
        @keyframes fadeInRight { 
            to { opacity: 1; transform: translateX(0); } 
            from { opacity: 0; transform: translateX(30px); } 
        }
        @keyframes float { 
            0%, 100% { transform: translateY(0); } 
            50% { transform: translateY(-20px); } 
        }
        
        /* Hero section minimum height to prevent CLS */
        .hero-section { min-height: 520px; }
        
        /* Critical layout styles */
        .bg-gradient-to-b { background-image: linear-gradient(to bottom, var(--tw-gradient-stops)); }
        .from-white { --tw-gradient-from: #fff; --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to, rgba(255, 255, 255, 0)); }
        .via-yellow-100 { --tw-gradient-stops: var(--tw-gradient-from), #fef3c7, var(--tw-gradient-to, rgba(254, 243, 199, 0)); }
        .to-yellow-400 { --tw-gradient-to: #fbbf24; }
        
        /* Typography */
        .text-3xl { font-size: 1.875rem; line-height: 2.25rem; }
        .font-bold { font-weight: 700; }
        .text-gray-900 { color: #111827; }
        .mb-6 { margin-bottom: 1.5rem; }
        
        /* Transitions */
        .transition-all { transition-property: all; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-duration: 150ms; }
        .duration-300 { transition-duration: 300ms; }
        
        @media (min-width: 768px) {
            .md\\:text-4xl { font-size: 2.25rem; line-height: 2.5rem; }
        }
        @media (min-width: 1024px) {
            .lg\\:text-5xl { font-size: 3rem; line-height: 1; }
        }
    </style>
    
    <!-- Async CSS loading for non-critical styles -->
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"></noscript>
    
    <!-- Service Worker for caching -->
    <script>
        if ('serviceWorker' in navigator) {
            window.addEventListener('load', function() {
                navigator.serviceWorker.register('/sw.js').then(function(registration) {
                    console.log('SW registered: ', registration);
                }).catch(function(registrationError) {
                    console.log('SW registration failed: ', registrationError);
                });
            });
        }
    </script>
</head>

<body <?php body_class('min-h-screen flex flex-col bg-gray-50'); ?>>
    <?php wp_body_open(); ?>
    
    <!-- Skip link for accessibility -->
    <a class="sr-only focus:not-sr-only focus:absolute focus:top-0 focus:left-0 bg-yellow-400 text-black p-2 z-50" href="#primary">
        <?php esc_html_e('Aller au contenu principal', 'speed-epaviste'); ?>
    </a>

    <!-- Optimized Header -->
    <header class="bg-white shadow-md sticky top-0 z-40" itemscope itemtype="https://schema.org/WPHeader">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex-shrink-0" itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center" aria-label="Speed Épaviste - Accueil">
                        <div class="flex items-center">
                            <div class="w-10 h-10 bg-yellow-400 rounded-full flex items-center justify-center mr-3">
                                <i class="fas fa-truck text-white text-lg"></i>
                            </div>
                            <div>
                                <div class="font-bold text-xl text-gray-900">Speed Épaviste</div>
                                <div class="text-xs text-gray-600">Agréé VHU</div>
                            </div>
                        </div>
                    </a>
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

                <!-- Desktop Navigation -->
                <nav class="hidden md:flex space-x-8" aria-label="Navigation principale" itemscope itemtype="https://schema.org/SiteNavigationElement">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="inline-flex items-center px-1 pt-1 text-sm font-medium text-gray-700 hover:text-yellow-500 transition-colors duration-200" itemprop="url">
                        <span itemprop="name">Accueil</span>
                    </a>
                    <a href="#services" class="inline-flex items-center px-1 pt-1 text-sm font-medium text-gray-700 hover:text-yellow-500 transition-colors duration-200" itemprop="url">
                        <span itemprop="name">Services</span>
                    </a>
                    <a href="#faq" class="inline-flex items-center px-1 pt-1 text-sm font-medium text-gray-700 hover:text-yellow-500 transition-colors duration-200" itemprop="url">
                        <span itemprop="name">FAQ</span>
                    </a>
                    <a href="#contact" class="inline-flex items-center px-1 pt-1 text-sm font-medium text-gray-700 hover:text-yellow-500 transition-colors duration-200" itemprop="url">
                        <span itemprop="name">Contact</span>
                    </a>
                </nav>

                <!-- CTA Button -->
                <div class="hidden md:flex items-center">
                    <a href="tel:0607380194" 
                       class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-full text-black bg-yellow-400 hover:bg-yellow-500 transition-all duration-200 hover:shadow-md"
                       itemprop="telephone"
                       aria-label="Appeler Speed Épaviste">
                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
                        </svg>
                        06 07 38 01 94
                    </a>
                </div>
            </div>
        </div>

        <!-- Mobile Navigation -->
        <div class="md:hidden" id="mobile-menu">
            <div class="px-2 pt-2 pb-3 space-y-1 hidden bg-white shadow-lg border-t" id="mobile-menu-items">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50 transition-colors duration-200">Accueil</a>
                <a href="#services" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50 transition-colors duration-200">Services</a>
                <a href="#faq" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50 transition-colors duration-200">FAQ</a>
                <a href="#contact" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50 transition-colors duration-200">Contact</a>
                <div class="px-3 py-2">
                    <a href="tel:0607380194" class="flex items-center w-full px-3 py-2 text-base font-medium text-black bg-yellow-400 hover:bg-yellow-500 rounded-md transition-colors duration-200">
                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
                        </svg>
                        06 07 38 01 94
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- Mobile menu toggle script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const toggleButton = document.getElementById('mobile-menu-toggle');
            const mobileMenu = document.getElementById('mobile-menu-items');
            const menuIcon = document.getElementById('menu-icon');
            const closeIcon = document.getElementById('close-icon');
            
            if (toggleButton && mobileMenu && menuIcon && closeIcon) {
                toggleButton.addEventListener('click', function() {
                    const expanded = toggleButton.getAttribute('aria-expanded') === 'true';
                    toggleButton.setAttribute('aria-expanded', !expanded);
                    
                    if (expanded) {
                        mobileMenu.classList.add('hidden');
                    } else {
                        mobileMenu.classList.remove('hidden');
                    }
                    
                    menuIcon.classList.toggle('hidden');
                    closeIcon.classList.toggle('hidden');
                });
            }
            
            // Smooth scrolling for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    const href = this.getAttribute('href');
                    if (href !== '#') {
                        e.preventDefault();
                        const target = document.querySelector(href);
                        if (target) {
                            target.scrollIntoView({
                                behavior: 'smooth',
                                block: 'start'
                            });
                            // Close mobile menu if open
                            if (mobileMenu && !mobileMenu.classList.contains('hidden')) {
                                mobileMenu.classList.add('hidden');
                                toggleButton.setAttribute('aria-expanded', 'false');
                                menuIcon.classList.remove('hidden');
                                closeIcon.classList.add('hidden');
                            }
                        }
                    }
                });
            });
            
            // Back to top button functionality
            const backToTopButton = document.getElementById('back-to-top');
            if (backToTopButton) {
                window.addEventListener('scroll', function() {
                    if (window.pageYOffset > 300) {
                        backToTopButton.classList.remove('opacity-0', 'invisible');
                        backToTopButton.classList.add('opacity-100', 'visible');
                    } else {
                        backToTopButton.classList.add('opacity-0', 'invisible');
                        backToTopButton.classList.remove('opacity-100', 'visible');
                    }
                });
                
                backToTopButton.addEventListener('click', function() {
                    window.scrollTo({
                        top: 0,
                        behavior: 'smooth'
                    });
                });
            }
        });
    </script>
