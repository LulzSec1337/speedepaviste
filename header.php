
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- Dynamic SEO Meta Tags -->
    <?php 
    $seo_title = get_option('seo_title', 'Speed Épaviste - Enlèvement d\'épave gratuit');
    $seo_description = get_option('seo_description', 'Service professionnel d\'enlèvement d\'épaves gratuit 7j/7 en France. Épaviste agréé VHU pour recyclage écologique.');
    $seo_keywords = get_option('seo_keywords', 'épaviste, enlèvement épave gratuit, destruction auto, certificat destruction, VHU agréé');
    ?>
    
    <title><?php echo esc_html($seo_title); ?></title>
    <meta name="description" content="<?php echo esc_attr($seo_description); ?>">
    <meta name="keywords" content="<?php echo esc_attr($seo_keywords); ?>">
    <meta name="author" content="<?php echo esc_attr(get_option('site_author', 'Speed Épaviste')); ?>">
    <meta name="robots" content="<?php echo esc_attr(get_option('robots_meta', 'index, follow, max-snippet:-1, max-image-preview:large')); ?>">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="<?php echo esc_attr($seo_title); ?>">
    <meta property="og:description" content="<?php echo esc_attr($seo_description); ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo esc_url(home_url('/')); ?>">
    <meta property="og:image" content="<?php echo esc_url(get_option('og_image', get_template_directory_uri() . '/assets/images/og-image.jpg')); ?>">
    <meta property="og:site_name" content="<?php echo esc_attr(get_bloginfo('name')); ?>">
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo esc_attr($seo_title); ?>">
    <meta name="twitter:description" content="<?php echo esc_attr($seo_description); ?>">
    <meta name="twitter:image" content="<?php echo esc_url(get_option('og_image', get_template_directory_uri() . '/assets/images/og-image.jpg')); ?>">
    
    <!-- Canonical URL -->
    <link rel="canonical" href="<?php echo esc_url(home_url('/')); ?>">
    
    <!-- Performance optimization -->
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
    <link rel="dns-prefetch" href="//cdnjs.cloudflare.com">
    
    <!-- Custom CSS Variables from Panel -->
    <style>
    :root {
        --primary-color: <?php echo esc_html(get_option('primary_color', '#facc15')); ?>;
        --secondary-color: <?php echo esc_html(get_option('secondary_color', '#eab308')); ?>;
        --text-color: <?php echo esc_html(get_option('text_color', '#111827')); ?>;
        --header-bg: <?php echo esc_html(get_option('header_bg_color', '#ffffff')); ?>;
        --header-text: <?php echo esc_html(get_option('header_text_color', '#111827')); ?>;
    }
    </style>
    
    <?php wp_head(); ?>
</head>

<body <?php body_class('min-h-screen flex flex-col bg-gray-50'); ?>>
    <?php wp_body_open(); ?>
    
    <!-- Skip link for accessibility -->
    <a class="sr-only focus:not-sr-only focus:absolute focus:top-0 focus:left-0 bg-yellow-400 text-black p-2 z-50" href="#primary">
        Aller au contenu principal
    </a>

    <!-- Professional Header -->
    <header class="pro-header" itemscope itemtype="https://schema.org/WPHeader">
        <div class="header-container">
            <div class="header-inner">
                <!-- Top Bar with Contact Info -->
                <div class="header-top-bar">
                    <div class="header-top-content">
                        <div class="contact-info">
                            <div class="contact-item">
                                <svg class="contact-icon" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
                                </svg>
                                <span><?php echo esc_html(get_option('contact_phone', '06 07 38 01 94')); ?></span>
                            </div>
                            <div class="contact-item">
                                <svg class="contact-icon" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 12.713l-11.985-9.713h23.971l-11.986 9.713zm-5.425-1.822l-6.575-5.329v12.501l6.575-7.172zm10.85 0l6.575 7.172v-12.501l-6.575 5.329zm-1.557 1.261l-3.868 3.135-3.868-3.135-8.11 8.848h23.956l-8.11-8.848z"/>
                                </svg>
                                <span><?php echo esc_html(get_option('contact_email', 'contact@speedepaviste.fr')); ?></span>
                            </div>
                            <div class="contact-item">
                                <svg class="contact-icon" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
                                </svg>
                                <span>Service 7j/7 - Île-de-France</span>
                            </div>
                        </div>
                        <div class="social-links">
                            <?php if (get_option('facebook_url')): ?>
                                <a href="<?php echo esc_url(get_option('facebook_url')); ?>" class="social-link" target="_blank" rel="noopener">
                                    <svg fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                    </svg>
                                </a>
                            <?php endif; ?>
                            <?php if (get_option('instagram_url')): ?>
                                <a href="<?php echo esc_url(get_option('instagram_url')); ?>" class="social-link" target="_blank" rel="noopener">
                                    <svg fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 6.618 5.367 11.986 11.988 11.986 6.618 0 11.986-5.368 11.986-11.986C24.003 5.367 18.635.001 12.017.001zM8.449 16.988c-1.297 0-2.348-1.051-2.348-2.348 0-1.297 1.051-2.348 2.348-2.348 1.297 0 2.348 1.051 2.348 2.348 0 1.297-1.051 2.348-2.348 2.348zm7.718 0c-1.297 0-2.348-1.051-2.348-2.348 0-1.297 1.051-2.348 2.348-2.348 1.297 0 2.348 1.051 2.348 2.348 0 1.297-1.051 2.348-2.348 2.348z"/>
                                    </svg>
                                </a>
                            <?php endif; ?>
                            <?php if (get_option('linkedin_url')): ?>
                                <a href="<?php echo esc_url(get_option('linkedin_url')); ?>" class="social-link" target="_blank" rel="noopener">
                                    <svg fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                    </svg>
                                </a>
                            <?php endif; ?>
                            <?php if (get_option('youtube_url')): ?>
                                <a href="<?php echo esc_url(get_option('youtube_url')); ?>" class="social-link" target="_blank" rel="noopener">
                                    <svg fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                                    </svg>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

                <!-- Main Header -->
                <div class="header-main">
                    <div class="header-content">
                        <!-- Professional Logo -->
                        <div class="logo-container-pro" itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
                            <a href="<?php echo esc_url(home_url('/')); ?>" class="logo-link-pro" aria-label="Speed Épaviste - Accueil">
                                <div class="logo-icon-pro">
                                    <svg fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path d="M19 16.9A7 7 0 0 0 12 10a7 7 0 0 0-7 6.9v1a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-1zM12 2a3 3 0 1 0 0 6 3 3 0 0 0 0-6z"/>
                                        <path d="M7 8a1 1 0 0 1 1-1h8a1 1 0 0 1 0 2H8a1 1 0 0 1-1-1z"/>
                                    </svg>
                                </div>
                                <div class="logo-text-container">
                                    <div class="logo-text-pro">Speed Épaviste</div>
                                    <div class="logo-subtext-pro">Agréé VHU - Service 7j/7</div>
                                </div>
                            </a>
                        </div>

                        <!-- Desktop Navigation -->
                        <nav class="desktop-nav-pro" aria-label="Navigation principale" itemscope itemtype="https://schema.org/SiteNavigationElement">
                            <a href="<?php echo esc_url(home_url('/')); ?>" class="nav-link-pro" itemprop="url">
                                <svg class="nav-icon" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/>
                                </svg>
                                <span itemprop="name">Accueil</span>
                            </a>
                            <a href="#services" class="nav-link-pro" itemprop="url">
                                <svg class="nav-icon" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                                </svg>
                                <span itemprop="name">Services</span>
                            </a>
                            <a href="#zones" class="nav-link-pro" itemprop="url">
                                <svg class="nav-icon" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
                                </svg>
                                <span itemprop="name">Zones</span>
                            </a>
                            <a href="#faq" class="nav-link-pro" itemprop="url">
                                <svg class="nav-icon" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 17h-2v-2h2v2zm2.07-7.75l-.9.92C13.45 12.9 13 13.5 13 15h-2v-.5c0-1.1.45-2.1 1.17-2.83l1.24-1.26c.37-.36.59-.86.59-1.41 0-1.1-.9-2-2-2s-2 .9-2 2H8c0-2.21 1.79-4 4-4s4 1.79 4 4c0 .88-.36 1.68-.93 2.25z"/>
                                </svg>
                                <span itemprop="name">FAQ</span>
                            </a>
                            <a href="#contact" class="nav-link-pro" itemprop="url">
                                <svg class="nav-icon" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                                </svg>
                                <span itemprop="name">Contact</span>
                            </a>
                        </nav>

                        <!-- Call to Action Button -->
                        <a href="tel:<?php echo esc_attr(str_replace(' ', '', get_option('contact_phone', '0607380194'))); ?>" 
                           class="cta-button-pro"
                           itemprop="telephone"
                           aria-label="Appeler Speed Épaviste">
                            <svg class="cta-icon" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
                            </svg>
                            <span class="cta-text">
                                <span class="cta-label">Appelez-nous</span>
                                <span class="cta-number"><?php echo esc_html(get_option('contact_phone', '06 07 38 01 94')); ?></span>
                            </span>
                        </a>

                        <!-- Mobile menu button -->
                        <button type="button" 
                                id="mobile-menu-toggle"
                                class="mobile-toggle-pro"
                                aria-controls="mobile-menu"
                                aria-expanded="false"
                                aria-label="Menu de navigation">
                            <span class="hamburger-line"></span>
                            <span class="hamburger-line"></span>
                            <span class="hamburger-line"></span>
                        </button>
                    </div>
                </div>

                <!-- Mobile Navigation -->
                <div class="mobile-nav-pro" id="mobile-menu">
                    <div class="mobile-menu-items-pro hidden" id="mobile-menu-items">
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="mobile-nav-link-pro">
                            <svg class="nav-icon" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/>
                            </svg>
                            Accueil
                        </a>
                        <a href="#services" class="mobile-nav-link-pro">
                            <svg class="nav-icon" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                            </svg>
                            Services
                        </a>
                        <a href="#zones" class="mobile-nav-link-pro">
                            <svg class="nav-icon" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
                            </svg>
                            Zones d'intervention
                        </a>
                        <a href="#faq" class="mobile-nav-link-pro">
                            <svg class="nav-icon" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 17h-2v-2h2v2zm2.07-7.75l-.9.92C13.45 12.9 13 13.5 13 15h-2v-.5c0-1.1.45-2.1 1.17-2.83l1.24-1.26c.37-.36.59-.86.59-1.41 0-1.1-.9-2-2-2s-2 .9-2 2H8c0-2.21 1.79-4 4-4s4 1.79 4 4c0 .88-.36 1.68-.93 2.25z"/>
                            </svg>
                            Questions fréquentes
                        </a>
                        <a href="#contact" class="mobile-nav-link-pro">
                            <svg class="nav-icon" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                            </svg>
                            Contact
                        </a>
                        <div class="mobile-cta-container-pro">
                            <a href="tel:<?php echo esc_attr(str_replace(' ', '', get_option('contact_phone', '0607380194'))); ?>" class="mobile-cta-button-pro">
                                <svg class="cta-icon" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
                                </svg>
                                <?php echo esc_html(get_option('contact_phone', '06 07 38 01 94')); ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
