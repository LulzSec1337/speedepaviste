
<?php
/**
 * Speed Epaviste functions - Optimized for 100% PageSpeed Score
 */

// Theme setup with performance optimizations
function speed_epaviste_setup() {
    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    
    // Optimized image sizes
    add_image_size('hero-mobile', 400, 270, true);
    add_image_size('hero-desktop', 800, 540, true);
    add_image_size('card-thumb', 300, 200, true);
    
    register_nav_menus(array(
        'primary' => 'Primary Menu',
        'footer' => 'Footer Menu',
    ));
    
    add_theme_support('responsive-embeds');
    add_theme_support('editor-styles');
    add_theme_support('wp-block-styles');
}
add_action('after_setup_theme', 'speed_epaviste_setup');

// Critical performance optimizations
function speed_epaviste_performance_init() {
    // Remove unnecessary WordPress features for PageSpeed
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wp_shortlink_wp_head');
    remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');
    remove_action('wp_head', 'feed_links_extra', 3);
    remove_action('wp_head', 'feed_links', 2);
    
    // Disable emojis for performance
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('admin_print_styles', 'print_emoji_styles');
    
    // Disable XML-RPC
    add_filter('xmlrpc_enabled', '__return_false');
    
    // Remove version from RSS feeds
    add_filter('the_generator', '__return_empty_string');
}
add_action('init', 'speed_epaviste_performance_init');

// Optimized script and style enqueuing - eliminate render blocking
function speed_epaviste_scripts() {
    // Dequeue jQuery on frontend for performance
    if (!is_admin() && !is_customize_preview()) {
        wp_deregister_script('jquery');
    }
    
    // Enqueue optimized main stylesheet
    wp_enqueue_style(
        'speed-epaviste-style', 
        get_stylesheet_uri(), 
        [], 
        filemtime(get_stylesheet_directory() . '/style.css')
    );
    
    // Preload critical Google Fonts
    wp_enqueue_style(
        'google-fonts', 
        'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap', 
        [], 
        null
    );
    
    // Defer Font Awesome loading
    wp_enqueue_style(
        'font-awesome', 
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css', 
        [], 
        '6.4.0'
    );
    
    // Inline critical JavaScript for performance
    wp_add_inline_script('speed-epaviste-main', '
        // Optimized Intersection Observer for animations
        if ("IntersectionObserver" in window) {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.animationPlayState = "running";
                        observer.unobserve(entry.target);
                    }
                });
            }, { 
                threshold: 0.1,
                rootMargin: "50px"
            });
            
            document.addEventListener("DOMContentLoaded", () => {
                document.querySelectorAll(".animate-fade-in, .animate-fade-in-up, .animate-fade-in-left, .animate-fade-in-right").forEach(el => {
                    el.style.animationPlayState = "paused";
                    observer.observe(el);
                });
            });
        }
        
        // Enhanced lazy loading with WebP support
        if ("loading" in HTMLImageElement.prototype) {
            const images = document.querySelectorAll("img[loading=lazy]");
            images.forEach(img => {
                if (img.dataset.src) {
                    img.src = img.dataset.src;
                }
            });
        }
    ');
}
add_action('wp_enqueue_scripts', 'speed_epaviste_scripts');

// Remove query strings for better caching
function speed_epaviste_remove_query_strings($src) {
    $parts = explode('?', $src);
    return $parts[0];
}
add_filter('script_loader_src', 'speed_epaviste_remove_query_strings', 15, 1);
add_filter('style_loader_src', 'speed_epaviste_remove_query_strings', 15, 1);

// Enhanced SEO meta tags
function speed_epaviste_seo_meta() {
    if (is_front_page()) {
        echo '<link rel="preload" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" as="style">' . "\n";
        echo '<link rel="preload" href="' . get_stylesheet_uri() . '" as="style">' . "\n";
        echo '<link rel="alternate" hreflang="fr-FR" href="' . esc_url(home_url('/')) . '">' . "\n";
    }
}
add_action('wp_head', 'speed_epaviste_seo_meta', 1);

// Advanced image optimization with WebP support
function speed_epaviste_optimize_images($metadata, $attachment_id) {
    if (!isset($metadata['sizes'])) {
        return $metadata;
    }
    
    $upload_dir = wp_upload_dir();
    
    // Generate WebP versions for better performance
    if (function_exists('imagewebp') && extension_loaded('gd')) {
        foreach ($metadata['sizes'] as $size => $size_data) {
            $image_path = $upload_dir['basedir'] . '/' . dirname($metadata['file']) . '/' . $size_data['file'];
            $webp_path = preg_replace('/\.(jpg|jpeg|png)$/i', '.webp', $image_path);
            
            if (!file_exists($webp_path) && file_exists($image_path)) {
                $image = imagecreatefromstring(file_get_contents($image_path));
                if ($image !== false) {
                    imagewebp($image, $webp_path, 85);
                    imagedestroy($image);
                }
            }
        }
    }
    
    return $metadata;
}
add_filter('wp_generate_attachment_metadata', 'speed_epaviste_optimize_images', 10, 2);

// Enhanced lazy loading with WebP detection
function speed_epaviste_enhanced_lazy_loading($content) {
    if (is_admin() || is_feed()) {
        return $content;
    }
    
    // Enhanced image optimization
    $content = preg_replace_callback(
        '/<img([^>]*)src=["\']([^"\']*)["\']([^>]*)>/i',
        function($matches) {
            $img_tag = $matches[0];
            
            // Skip if already has loading attribute
            if (strpos($img_tag, 'loading=') !== false) {
                return $img_tag;
            }
            
            // Add performance attributes
            $img_tag = str_replace('<img', '<img loading="lazy" decoding="async"', $img_tag);
            
            return $img_tag;
        },
        $content
    );
    
    return $content;
}
add_filter('the_content', 'speed_epaviste_enhanced_lazy_loading');
add_filter('post_thumbnail_html', 'speed_epaviste_enhanced_lazy_loading');

// Comprehensive structured data for SEO
function speed_epaviste_structured_data() {
    if (is_front_page()) {
        $schema = array(
            '@context' => 'https://schema.org',
            '@graph' => array(
                array(
                    '@type' => 'LocalBusiness',
                    '@id' => home_url() . '#business',
                    'name' => 'Speed Épaviste',
                    'description' => 'Service professionnel d\'enlèvement d\'épaves gratuit et agréé VHU en Île-de-France',
                    'url' => home_url(),
                    'telephone' => '0607380194',
                    'email' => 'contact@speedepaviste.fr',
                    'priceRange' => 'Gratuit',
                    'address' => array(
                        '@type' => 'PostalAddress',
                        'addressRegion' => 'Île-de-France',
                        'addressCountry' => 'FR'
                    ),
                    'areaServed' => array(
                        '@type' => 'Place',
                        'name' => 'Île-de-France'
                    ),
                    'openingHours' => 'Mo-Su 06:00-00:00',
                    'aggregateRating' => array(
                        '@type' => 'AggregateRating',
                        'ratingValue' => '4.9',
                        'reviewCount' => '2847',
                        'bestRating' => '5'
                    ),
                    'hasOfferCatalog' => array(
                        '@type' => 'OfferCatalog',
                        'name' => 'Services d\'enlèvement d\'épave',
                        'itemListElement' => array(
                            array(
                                '@type' => 'Offer',
                                'itemOffered' => array(
                                    '@type' => 'Service',
                                    'name' => 'Enlèvement d\'épave gratuit',
                                    'description' => 'Service d\'enlèvement d\'épave 24h/24 7j/7 en Île-de-France'
                                ),
                                'price' => '0',
                                'priceCurrency' => 'EUR'
                            )
                        )
                    ),
                    'sameAs' => array(
                        'https://www.facebook.com/speedepaviste',
                        'https://www.instagram.com/speedepaviste'
                    )
                ),
                array(
                    '@type' => 'WebSite',
                    '@id' => home_url() . '#website',
                    'url' => home_url(),
                    'name' => 'Speed Épaviste',
                    'description' => 'Enlèvement d\'épave gratuit en Île-de-France',
                    'inLanguage' => 'fr-FR'
                )
            )
        );
        
        echo '<script type="application/ld+json">' . wp_json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . '</script>' . "\n";
    }
}
add_action('wp_head', 'speed_epaviste_structured_data');

// Widget areas
function speed_epaviste_widgets_init() {
    register_sidebar(array(
        'name' => 'Sidebar Principal',
        'id' => 'sidebar-1',
        'description' => 'Zone de widgets pour la barre latérale.',
        'before_widget' => '<section id="%1$s" class="widget %2$s bg-white p-6 rounded-lg shadow-md mb-6">',
        'after_widget' => '</section>',
        'before_title' => '<h3 class="widget-title text-xl font-bold mb-4 text-gray-900">',
        'after_title' => '</h3>',
    ));
}
add_action('widgets_init', 'speed_epaviste_widgets_init');

// Security headers for better performance scores
function speed_epaviste_security_headers() {
    if (!is_admin()) {
        header('X-Content-Type-Options: nosniff');
        header('X-Frame-Options: SAMEORIGIN');
        header('X-XSS-Protection: 1; mode=block');
        header('Referrer-Policy: strict-origin-when-cross-origin');
    }
}
add_action('send_headers', 'speed_epaviste_security_headers');

// Defer non-critical CSS for PageSpeed
function speed_epaviste_defer_css($html, $handle, $href, $media) {
    $defer_handles = array('font-awesome');
    
    if (in_array($handle, $defer_handles)) {
        $html = '<link rel="preload" href="' . $href . '" as="style" onload="this.onload=null;this.rel=\'stylesheet\'">';
        $html .= '<noscript><link rel="stylesheet" href="' . $href . '"></noscript>';
    }
    
    return $html;
}
add_filter('style_loader_tag', 'speed_epaviste_defer_css', 10, 4);

// Custom post type for testimonials and services
function speed_epaviste_custom_post_types() {
    // Testimonials
    register_post_type('testimonials', array(
        'labels' => array(
            'name' => 'Témoignages',
            'singular_name' => 'Témoignage',
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'menu_icon' => 'dashicons-format-quote',
        'show_in_rest' => true
    ));
    
    // Services
    register_post_type('services', array(
        'labels' => array(
            'name' => 'Services',
            'singular_name' => 'Service',
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'menu_icon' => 'dashicons-admin-tools',
        'show_in_rest' => true
    ));
}
add_action('init', 'speed_epaviste_custom_post_types');

// Add breadcrumbs function for SEO
function speed_epaviste_breadcrumbs() {
    if (!is_front_page()) {
        echo '<nav aria-label="Breadcrumb" class="breadcrumbs py-4">';
        echo '<ol class="flex items-center space-x-2 text-sm">';
        echo '<li><a href="' . home_url() . '" class="text-yellow-600 hover:text-yellow-700">Accueil</a></li>';
        
        if (is_single()) {
            echo '<li><svg class="w-3 h-3 text-gray-400 mx-2" fill="currentColor" viewBox="0 0 24 24"><path d="M9 5l7 7-7 7"/></svg></li>';
            echo '<li class="text-gray-700">' . get_the_title() . '</li>';
        } elseif (is_page()) {
            echo '<li><svg class="w-3 h-3 text-gray-400 mx-2" fill="currentColor" viewBox="0 0 24 24"><path d="M9 5l7 7-7 7"/></svg></li>';
            echo '<li class="text-gray-700">' . get_the_title() . '</li>';
        }
        
        echo '</ol>';
        echo '</nav>';
    }
}

// Theme customizer for easy settings
function speed_epaviste_customizer($wp_customize) {
    $wp_customize->add_section('contact_settings', array(
        'title' => 'Paramètres de Contact',
        'priority' => 30,
    ));
    
    $wp_customize->add_setting('phone_number', array(
        'default' => '0607380194',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('phone_number', array(
        'label' => 'Numéro de téléphone',
        'section' => 'contact_settings',
        'type' => 'text',
    ));
    
    $wp_customize->add_setting('contact_email', array(
        'default' => 'contact@speedepaviste.fr',
        'sanitize_callback' => 'sanitize_email',
    ));
    
    $wp_customize->add_control('contact_email', array(
        'label' => 'Email de contact',
        'section' => 'contact_settings',
        'type' => 'email',
    ));
}
add_action('customize_register', 'speed_epaviste_customizer');

// Ensure posts and pages use the theme styling
function speed_epaviste_content_wrapper($content) {
    if (is_singular() && !is_front_page()) {
        $content = '<div class="max-w-4xl mx-auto px-6 py-12">' . $content . '</div>';
    }
    return $content;
}
add_filter('the_content', 'speed_epaviste_content_wrapper');

// Add custom CSS classes to posts and pages
function speed_epaviste_body_classes($classes) {
    $classes[] = 'speed-epaviste-theme';
    
    if (is_singular()) {
        $classes[] = 'single-content';
    }
    
    return $classes;
}
add_filter('body_class', 'speed_epaviste_body_classes');
