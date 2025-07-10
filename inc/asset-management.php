<?php
/**
 * Asset management functions for CSS and JavaScript
 * 
 * @package Speed_Epaviste
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Enhanced asset loading with proper error handling
 */
function speed_epaviste_enqueue_assets() {
    $version = '3.6.0';
    
    // Critical CSS inline for above-the-fold content
    $critical_css = '
    * { box-sizing: border-box; }
    body { font-family: Inter, system-ui, sans-serif; margin: 0; background: #f9fafb; line-height: 1.6; color: #374151; }
    .header-container { background: #fff; box-shadow: 0 2px 10px rgba(0,0,0,0.1); position: sticky; top: 0; z-index: 1000; }
    .header-content { display: flex; justify-content: space-between; align-items: center; min-height: 70px; }
    .desktop-nav { display: none; }
    @media (min-width: 768px) { .desktop-nav { display: flex; } }
    .hero-section { background: linear-gradient(135deg, #fbbf24, #f59e0b); padding: 4rem 1.5rem; text-align: center; }
    .hero-section h1 { font-size: 2.5rem; font-weight: 700; color: #111827; margin-bottom: 1rem; }
    @media (min-width: 768px) { .hero-section h1 { font-size: 3rem; } }
    .btn-primary { background: linear-gradient(135deg, #facc15, #eab308); color: #000; padding: 0.75rem 1.5rem; border-radius: 9999px; font-weight: 600; }
    ';
    wp_add_inline_style('wp-block-library', $critical_css);
    
    // Main stylesheet first
    wp_enqueue_style('speed-epaviste-style', get_stylesheet_uri(), array(), $version, 'all');
    
    // Check if CSS files exist before enqueuing
    $css_files = array(
        'speed-epaviste-base' => 'css/base.css',
        'speed-epaviste-header' => 'css/header.css',
        'speed-epaviste-components' => 'css/components.css',
        'speed-epaviste-front-page' => 'css/front-page.css',
        'speed-epaviste-responsive' => 'css/responsive.css',
        'speed-epaviste-animations' => 'css/animations.css',
        'speed-epaviste-theme' => 'css/epaviste-theme.css'
    );
    
    foreach ($css_files as $handle => $file_path) {
        $full_path = get_template_directory() . '/' . $file_path;
        if (file_exists($full_path)) {
            wp_enqueue_style($handle, get_template_directory_uri() . '/' . $file_path, array('speed-epaviste-style'), $version, 'all');
        }
    }
    
    // Page-specific styles
    if (is_front_page()) {
        wp_enqueue_style('speed-epaviste-front-page', get_template_directory_uri() . '/css/front-page.css', array('speed-epaviste-style'), $version, 'all');
    }
    
    // JavaScript files with proper error handling
    $js_files = array(
        'speed-epaviste-core' => 'js/core.js',
        'speed-epaviste-animations' => 'js/animations.js',
        'speed-epaviste-performance' => 'js/performance.js'
    );
    
    foreach ($js_files as $handle => $file_path) {
        $full_path = get_template_directory() . '/' . $file_path;
        if (file_exists($full_path)) {
            wp_enqueue_script($handle, get_template_directory_uri() . '/' . $file_path, array('jquery'), $version, true);
        }
    }
    
    // Enhanced admin scripts
    if (is_admin()) {
        wp_enqueue_script('speed-epaviste-admin-enhanced', get_template_directory_uri() . '/js/admin-enhanced.js', array('jquery'), $version, true);
        wp_enqueue_style('speed-epaviste-admin-velonic', get_template_directory_uri() . '/admin-style-velonic.css', array(), $version, 'all');
    }
    
    // Add defer attribute to all theme scripts for better performance
    add_filter('script_loader_tag', 'speed_epaviste_add_defer_attribute', 10, 2);
}
add_action('wp_enqueue_scripts', 'speed_epaviste_enqueue_assets');

/**
 * Add defer attribute to scripts for better PageSpeed
 */
function speed_epaviste_add_defer_attribute($tag, $handle) {
    if (strpos($handle, 'speed-epaviste') !== false && !is_admin()) {
        return str_replace(' src', ' defer src', $tag);
    }
    return $tag;
}

/**
 * Preload critical assets
 */
function speed_epaviste_preload_assets() {
    echo '<link rel="preload" href="' . get_template_directory_uri() . '/css/header.css" as="style">';
    echo '<link rel="preload" href="' . get_template_directory_uri() . '/css/base.css" as="style">';
    
    // Preload front-page specific assets on homepage
    if (is_front_page()) {
        echo '<link rel="preload" href="' . get_template_directory_uri() . '/css/front-page.css" as="style">';
    }
}
add_action('wp_head', 'speed_epaviste_preload_assets', 1);

/**
 * Add schema markup for better SEO
 */
function speed_epaviste_add_schema_markup() {
    if (is_front_page()) {
        $schema = array(
            '@context' => 'https://schema.org',
            '@type' => 'LocalBusiness',
            'name' => get_bloginfo('name'),
            'description' => 'Service professionnel d\'enlèvement d\'épaves gratuit en Île-de-France',
            'telephone' => '06 24 93 05 36',
            'email' => 'contact@speed-epaviste.fr',
            'areaServed' => 'Île-de-France',
            'priceRange' => 'Gratuit',
            'openingHours' => 'Mo-Su 00:00-23:59'
        );
        
        echo '<script type="application/ld+json">' . json_encode($schema, JSON_UNESCAPED_SLASHES) . '</script>';
    }
}
add_action('wp_head', 'speed_epaviste_add_schema_markup');
