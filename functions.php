
<?php
/**
 * Speed Epaviste functions and definitions - SEO & Performance Optimized
 */

// Theme setup with performance optimizations
function speed_epaviste_setup() {
    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', array(
        'height'      => 250,
        'width'       => 250,
        'flex-width'  => true,
        'flex-height' => true,
    ));
    
    // Image sizes for optimization
    add_image_size('hero-mobile', 400, 270, true);
    add_image_size('hero-desktop', 800, 540, true);
    
    register_nav_menus(array(
        'primary' => esc_html__('Primary', 'speed-epaviste'),
        'footer-services' => esc_html__('Footer Services', 'speed-epaviste'),
        'footer-zones' => esc_html__('Footer Zones', 'speed-epaviste'),
    ));
    
    // Add theme support for responsive embeds
    add_theme_support('responsive-embeds');
    
    // Add theme support for editor styles
    add_theme_support('editor-styles');
}
add_action('after_setup_theme', 'speed_epaviste_setup');

// Optimized script and style enqueuing
function speed_epaviste_scripts() {
    // Dequeue jQuery if not needed
    if (!is_admin()) {
        wp_deregister_script('jquery');
    }
    
    // Enqueue optimized styles
    wp_enqueue_style('speed-epaviste-style', get_stylesheet_uri(), [], filemtime(get_stylesheet_directory() . '/style.css'));
    
    // Preload critical fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap', false);
}
add_action('wp_enqueue_scripts', 'speed_epaviste_scripts');

// SEO optimizations
function speed_epaviste_seo_meta() {
    if (is_front_page()) {
        echo '<meta name="description" content="Speed Épaviste - Service d\'enlèvement d\'épave gratuit 7j/7 en Île-de-France. Épaviste agréé VHU, intervention rapide, traitement écologique.">' . "\n";
        echo '<meta name="keywords" content="enlèvement épave, épaviste, gratuit, VHU, Île-de-France, Paris, remorquage, certificat destruction">' . "\n";
        echo '<link rel="preload" href="https://images.unsplash.com/photo-1580273916550-e323be2ae537?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" as="image">' . "\n";
    }
    
    if (is_singular()) {
        global $post;
        $desc = '';
        if (has_excerpt($post->ID)) {
            $desc = get_the_excerpt($post->ID);
        } elseif (!empty($post->post_content)) {
            $desc = wp_trim_words(strip_shortcodes(strip_tags($post->post_content)), 25);
        }
        if ($desc) {
            echo '<meta name="description" content="' . esc_attr($desc) . '">' . "\n";
        }
    }
}
add_action('wp_head', 'speed_epaviste_seo_meta', 1);

// Performance optimizations
function speed_epaviste_performance_optimizations() {
    // Remove unnecessary WordPress features for performance
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wp_shortlink_wp_head');
    remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');
    
    // Disable emojis for performance
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('admin_print_styles', 'print_emoji_styles');
    
    // Remove query strings for better caching
    function remove_query_strings($src) {
        $parts = explode('?', $src);
        return $parts[0];
    }
    add_filter('script_loader_src', 'remove_query_strings', 15, 1);
    add_filter('style_loader_src', 'remove_query_strings', 15, 1);
}
add_action('init', 'speed_epaviste_performance_optimizations');

// Lazy loading for images
function add_lazy_loading($content) {
    if (is_admin()) {
        return $content;
    }
    
    $content = preg_replace('/<img(.*?)src=/', '<img$1loading="lazy" src=', $content);
    return $content;
}
add_filter('the_content', 'add_lazy_loading');
add_filter('post_thumbnail_html', 'add_lazy_loading');

// Add preload links for critical resources
function speed_epaviste_preload_resources() {
    if (is_front_page()) {
        echo '<link rel="preload" href="' . get_stylesheet_uri() . '" as="style">' . "\n";
        echo '<link rel="preload" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" as="style">' . "\n";
    }
}
add_action('wp_head', 'speed_epaviste_preload_resources', 1);

// Optimize database queries
function speed_epaviste_optimize_queries() {
    // Remove unnecessary queries
    remove_action('wp_head', 'feed_links_extra', 3);
    remove_action('wp_head', 'feed_links', 2);
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'index_rel_link');
    remove_action('wp_head', 'parent_post_rel_link', 10);
    remove_action('wp_head', 'start_post_rel_link', 10);
    remove_action('wp_head', 'adjacent_posts_rel_link', 10);
}
add_action('init', 'speed_epaviste_optimize_queries');

// Add structured data for local business
function speed_epaviste_structured_data() {
    if (is_front_page()) {
        $schema = array(
            '@context' => 'https://schema.org',
            '@type' => 'LocalBusiness',
            'name' => 'Speed Épaviste',
            'description' => 'Service d\'enlèvement d\'épave gratuit et agréé VHU en Île-de-France',
            'url' => home_url(),
            'telephone' => '0624930536',
            'priceRange' => 'Gratuit',
            'address' => array(
                '@type' => 'PostalAddress',
                'addressRegion' => 'Île-de-France',
                'addressCountry' => 'FR'
            ),
            'openingHours' => 'Mo-Su 06:00-00:00',
            'aggregateRating' => array(
                '@type' => 'AggregateRating',
                'ratingValue' => '4.8',
                'reviewCount' => '2000'
            )
        );
        
        echo '<script type="application/ld+json">' . json_encode($schema, JSON_UNESCAPED_UNICODE) . '</script>' . "\n";
    }
}
add_action('wp_head', 'speed_epaviste_structured_data');

// Widget area
function speed_epaviste_widgets_init() {
    register_sidebar(array(
        'name'          => esc_html__('Sidebar', 'speed-epaviste'),
        'id'            => 'sidebar-1',
        'description'   => esc_html__('Add widgets here.', 'speed-epaviste'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init', 'speed_epaviste_widgets_init');

// Add critical CSS inline for above-the-fold content
function speed_epaviste_critical_css() {
    if (is_front_page()) {
        echo '<style id="critical-css">
        .bg-gradient-to-b{background-image:linear-gradient(to bottom,var(--tw-gradient-stops))}
        .from-white{--tw-gradient-from:#fff;--tw-gradient-stops:var(--tw-gradient-from),var(--tw-gradient-to, rgba(255, 255, 255, 0))}
        .via-yellow-100{--tw-gradient-stops:var(--tw-gradient-from),#fef3c7,var(--tw-gradient-to, rgba(254, 243, 199, 0))}
        .to-yellow-400{--tw-gradient-to:#fbbf24}
        .text-3xl{font-size:1.875rem;line-height:2.25rem}
        .font-bold{font-weight:700}
        .text-gray-900{color:#111827}
        .mb-6{margin-bottom:1.5rem}
        .transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}
        .duration-300{transition-duration:300ms}
        @media (min-width: 768px){.md\\:text-4xl{font-size:2.25rem;line-height:2.5rem}}
        @media (min-width: 1024px){.lg\\:text-5xl{font-size:3rem;line-height:1}}
        </style>' . "\n";
    }
}
add_action('wp_head', 'speed_epaviste_critical_css', 2);
