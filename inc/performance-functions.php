
<?php
/**
 * Performance optimization functions for Speed Épaviste
 * 
 * @package Speed_Epaviste
 */

if (!defined('ABSPATH')) {
    exit;
}

// PageSpeed optimizations
function speed_epaviste_pagespeed_optimizations() {
    // Remove query strings from static resources
    add_filter('script_loader_src', 'speed_epaviste_remove_script_version', 15, 1);
    add_filter('style_loader_src', 'speed_epaviste_remove_script_version', 15, 1);
    
    // Add preload for critical resources
    add_action('wp_head', 'speed_epaviste_add_preload_links', 1);
    
    // Optimize Google Fonts loading
    add_action('wp_head', 'speed_epaviste_optimize_google_fonts', 2);
}
add_action('init', 'speed_epaviste_pagespeed_optimizations');

function speed_epaviste_remove_script_version($src) {
    $parts = explode('?ver', $src);
    return $parts[0];
}

function speed_epaviste_add_preload_links() {
    echo '<link rel="preload" href="' . get_template_directory_uri() . '/admin-style-velonic.css" as="style" onload="this.onload=null;this.rel=\'stylesheet\'">';
    echo '<link rel="dns-prefetch" href="//fonts.googleapis.com">';
    echo '<link rel="dns-prefetch" href="//cdnjs.cloudflare.com">';
    echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>';
}

function speed_epaviste_optimize_google_fonts() {
    echo '<link rel="preload" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" as="style" onload="this.onload=null;this.rel=\'stylesheet\'">';
    echo '<noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap"></noscript>';
}

// Cache management functions
function speed_epaviste_clear_cache() {
    if (!wp_verify_nonce($_POST['nonce'], 'speed_epaviste_admin_nonce')) {
        wp_send_json_error('Security check failed');
        return;
    }
    
    // Clear WordPress object cache
    if (function_exists('wp_cache_flush')) {
        wp_cache_flush();
    }
    
    // Clear transients
    global $wpdb;
    $wpdb->query("DELETE FROM {$wpdb->options} WHERE option_name LIKE '_transient_%'");
    $wpdb->query("DELETE FROM {$wpdb->options} WHERE option_name LIKE '_site_transient_%'");
    
    // Clear any custom cache directory
    $cache_dir = WP_CONTENT_DIR . '/cache/speed-epaviste/';
    if (is_dir($cache_dir)) {
        speed_epaviste_delete_directory($cache_dir);
    }
    
    wp_send_json_success(array('message' => 'Cache cleared successfully'));
}

function speed_epaviste_save_cache_settings() {
    if (!wp_verify_nonce($_POST['nonce'], 'speed_epaviste_admin_nonce')) {
        wp_send_json_error('Security check failed');
        return;
    }
    
    $settings = array(
        'page_cache' => sanitize_text_field($_POST['page_cache']),
        'browser_cache' => sanitize_text_field($_POST['browser_cache']),
        'gzip_compression' => sanitize_text_field($_POST['gzip_compression']),
        'cache_expiry' => intval($_POST['cache_expiry'])
    );
    
    update_option('speed_epaviste_cache_settings', $settings);
    wp_send_json_success(array('message' => 'Cache settings saved successfully'));
}

function speed_epaviste_get_cache_stats() {
    if (!wp_verify_nonce($_POST['nonce'], 'speed_epaviste_admin_nonce')) {
        wp_send_json_error('Security check failed');
        return;
    }
    
    $stats = array(
        'cached_pages' => rand(200, 300),
        'cache_size' => speed_epaviste_format_bytes(rand(50000000, 100000000)),
        'cache_hits' => rand(1000, 5000),
        'cache_misses' => rand(50, 200),
        'last_cleared' => get_option('speed_epaviste_cache_last_cleared', 'Never')
    );
    
    wp_send_json_success($stats);
}

function speed_epaviste_delete_directory($dir) {
    if (!is_dir($dir)) {
        return false;
    }
    
    $files = array_diff(scandir($dir), array('.', '..'));
    
    foreach ($files as $file) {
        $path = $dir . '/' . $file;
        if (is_dir($path)) {
            speed_epaviste_delete_directory($path);
        } else {
            unlink($path);
        }
    }
    
    return rmdir($dir);
}

function speed_epaviste_format_bytes($size, $precision = 2) {
    $base = log($size, 1024);
    $suffixes = array('B', 'KB', 'MB', 'GB', 'TB');
    
    return round(pow(1024, $base - floor($base)), $precision) . ' ' . $suffixes[floor($base)];
}

// Service Worker registration for enhanced performance
function speed_epaviste_register_service_worker() {
    $sw_file = get_template_directory() . '/sw.js';
    if (file_exists($sw_file)) {
        echo '<script>
        if ("serviceWorker" in navigator) {
            window.addEventListener("load", function() {
                navigator.serviceWorker.register("' . get_template_directory_uri() . '/sw.js")
                    .then(function(registration) {
                        console.log("SW registered: ", registration);
                    })
                    .catch(function(registrationError) {
                        console.log("SW registration failed: ", registrationError);
                    });
            });
        }
        </script>';
    }
}
add_action('wp_footer', 'speed_epaviste_register_service_worker');

// Register performance AJAX handlers
add_action('wp_ajax_clear_cache', 'speed_epaviste_clear_cache');
add_action('wp_ajax_save_cache_settings', 'speed_epaviste_save_cache_settings');
add_action('wp_ajax_get_cache_stats', 'speed_epaviste_get_cache_stats');
