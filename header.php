
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
    
    <!-- Critical resource hints -->
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
    <link rel="dns-prefetch" href="//cdnjs.cloudflare.com">
    
    <?php wp_head(); ?>
</head>

<body <?php body_class('min-h-screen flex flex-col bg-gray-50'); ?>>
    <?php wp_body_open(); ?>
    
    <!-- Skip link for accessibility -->
    <a class="sr-only focus:not-sr-only focus:absolute focus:top-0 focus:left-0 bg-yellow-400 text-black p-2 z-50" href="#primary">
        Aller au contenu principal
    </a>

    <!-- Header -->
    <header class="header-container" itemscope itemtype="https://schema.org/WPHeader">
        <div class="header-inner">
            <div class="header-content">
                <!-- Logo -->
                <div class="logo-container" itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="logo-link" aria-label="Speed Épaviste - Accueil">
                        <div class="logo-icon">
                            <svg fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M19 7h-3V6a4 4 0 0 0-8 0v1H5a1 1 0 0 0-1 1v11a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3V8a1 1 0 0 0-1-1zM10 6a2 2 0 0 1 4 0v1h-4V6zm8 13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V9h2v1a1 1 0 0 0 2 0V9h4v1a1 1 0 0 0 2 0V9h2v10z"/>
                            </svg>
                        </div>
                        <div>
                            <div class="logo-text">Speed Épaviste</div>
                            <div class="logo-subtext">Agréé VHU</div>
                        </div>
                    </a>
                </div>

                <!-- Desktop Navigation -->
                <nav class="desktop-nav" aria-label="Navigation principale" itemscope itemtype="https://schema.org/SiteNavigationElement">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="nav-link" itemprop="url">
                        <span itemprop="name">Accueil</span>
                    </a>
                    <a href="#services" class="nav-link" itemprop="url">
                        <span itemprop="name">Services</span>
                    </a>
                    <a href="#faq" class="nav-link" itemprop="url">
                        <span itemprop="name">FAQ</span>
                    </a>
                    <a href="#contact" class="nav-link" itemprop="url">
                        <span itemprop="name">Contact</span>
                    </a>
                </nav>

                <!-- CTA Button -->
                <a href="tel:0607380194" 
                   class="cta-button"
                   itemprop="telephone"
                   aria-label="Appeler Speed Épaviste">
                    <svg fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
                    </svg>
                    06 07 38 01 94
                </a>

                <!-- Mobile menu button -->
                <button type="button" 
                        id="mobile-menu-toggle"
                        class="mobile-toggle"
                        aria-controls="mobile-menu"
                        aria-expanded="false"
                        aria-label="Menu de navigation">
                    <svg id="menu-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg id="close-icon" class="hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Navigation -->
        <div class="mobile-nav" id="mobile-menu">
            <div class="mobile-menu-items hidden" id="mobile-menu-items">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="mobile-nav-link">Accueil</a>
                <a href="#services" class="mobile-nav-link">Services</a>
                <a href="#faq" class="mobile-nav-link">FAQ</a>
                <a href="#contact" class="mobile-nav-link">Contact</a>
                <div class="mobile-cta-container">
                    <a href="tel:0607380194" class="mobile-cta-button">
                        <svg fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
                        </svg>
                        06 07 38 01 94
                    </a>
                </div>
            </div>
        </div>
    </header>
