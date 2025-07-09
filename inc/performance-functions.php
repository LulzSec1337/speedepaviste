
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
    if (strpos($src, '?ver=')) {
        $parts = explode('?ver=', $src);
        return $parts[0];
    }
    return $src;
}

function speed_epaviste_add_preload_links() {
    echo '<link rel="dns-prefetch" href="//fonts.googleapis.com">';
    echo '<link rel="dns-prefetch" href="//cdnjs.cloudflare.com">';
    echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>';
}

function speed_epaviste_optimize_google_fonts() {
    echo '<link rel="preload" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" as="style" onload="this.onload=null;this.rel=\'stylesheet\'">';
    echo '<noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap"></noscript>';
}

// Enhanced cache management functions
function speed_epaviste_clear_cache() {
    // Verify nonce for security
    if (!wp_verify_nonce($_POST['nonce'], 'speed_epaviste_admin_nonce')) {
        wp_send_json_error('Security check failed');
        return;
    }
    
    $cleared_items = array();
    
    try {
        // Clear WordPress object cache
        if (function_exists('wp_cache_flush')) {
            wp_cache_flush();
            $cleared_items[] = 'Object Cache';
        }
        
        // Clear transients
        global $wpdb;
        $transients_deleted = $wpdb->query("DELETE FROM {$wpdb->options} WHERE option_name LIKE '_transient_%'");
        $site_transients_deleted = $wpdb->query("DELETE FROM {$wpdb->options} WHERE option_name LIKE '_site_transient_%'");
        
        if ($transients_deleted > 0 || $site_transients_deleted > 0) {
            $cleared_items[] = 'Transients (' . ($transients_deleted + $site_transients_deleted) . ' items)';
        }
        
        // Clear rewrite rules cache
        flush_rewrite_rules();
        $cleared_items[] = 'Rewrite Rules';
        
        // Clear any custom cache directory
        $cache_dir = WP_CONTENT_DIR . '/cache/speed-epaviste/';
        if (is_dir($cache_dir)) {
            $files_deleted = speed_epaviste_delete_directory_contents($cache_dir);
            if ($files_deleted > 0) {
                $cleared_items[] = 'Cache Files (' . $files_deleted . ' files)';
            }
        }
        
        // Update last cleared timestamp
        update_option('speed_epaviste_cache_last_cleared', current_time('mysql'));
        
        // Clear opcache if available
        if (function_exists('opcache_reset')) {
            opcache_reset();
            $cleared_items[] = 'OPCache';
        }
        
        $message = 'Cache cleared successfully! Items cleared: ' . implode(', ', $cleared_items);
        wp_send_json_success($message);
        
    } catch (Exception $e) {
        wp_send_json_error('Error clearing cache: ' . $e->getMessage());
    }
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
    wp_send_json_success('Cache settings saved successfully');
}

function speed_epaviste_get_cache_stats() {
    if (!wp_verify_nonce($_POST['nonce'], 'speed_epaviste_admin_nonce')) {
        wp_send_json_error('Security check failed');
        return;
    }
    
    global $wpdb;
    
    // Get real statistics
    $transient_count = $wpdb->get_var("SELECT COUNT(*) FROM {$wpdb->options} WHERE option_name LIKE '_transient_%'");
    $cache_size = speed_epaviste_get_cache_size();
    
    $stats = array(
        'cached_pages' => $transient_count ?: 0,
        'cache_size' => speed_epaviste_format_bytes($cache_size),
        'cache_hits' => get_option('speed_epaviste_cache_hits', 0),
        'cache_misses' => get_option('speed_epaviste_cache_misses', 0),
        'last_cleared' => get_option('speed_epaviste_cache_last_cleared', 'Never')
    );
    
    wp_send_json_success($stats);
}

function speed_epaviste_delete_directory_contents($dir) {
    if (!is_dir($dir)) {
        return 0;
    }
    
    $files_deleted = 0;
    $files = array_diff(scandir($dir), array('.', '..'));
    
    foreach ($files as $file) {
        $path = $dir . '/' . $file;
        if (is_dir($path)) {
            $files_deleted += speed_epaviste_delete_directory_contents($path);
            @rmdir($path);
        } else {
            if (@unlink($path)) {
                $files_deleted++;
            }
        }
    }
    
    return $files_deleted;
}

function speed_epaviste_get_cache_size() {
    $size = 0;
    
    // Calculate WordPress uploads cache size
    $upload_dir = wp_upload_dir();
    if (is_dir($upload_dir['basedir'])) {
        $size += speed_epaviste_get_directory_size($upload_dir['basedir'] . '/cache');
    }
    
    // Calculate custom cache size
    $cache_dir = WP_CONTENT_DIR . '/cache/speed-epaviste/';
    if (is_dir($cache_dir)) {
        $size += speed_epaviste_get_directory_size($cache_dir);
    }
    
    return $size;
}

function speed_epaviste_get_directory_size($directory) {
    if (!is_dir($directory)) {
        return 0;
    }
    
    $size = 0;
    $files = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator($directory, RecursiveDirectoryIterator::SKIP_DOTS)
    );
    
    foreach ($files as $file) {
        if ($file->isFile()) {
            $size += $file->getSize();
        }
    }
    
    return $size;
}

function speed_epaviste_format_bytes($size, $precision = 2) {
    if ($size == 0) return '0 B';
    
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
add_action('wp_ajax_speed_epaviste_clear_cache', 'speed_epaviste_clear_cache');
add_action('wp_ajax_save_cache_settings', 'speed_epaviste_save_cache_settings');
add_action('wp_ajax_get_cache_stats', 'speed_epaviste_get_cache_stats');

// Add cache headers for better performance
function speed_epaviste_add_cache_headers() {
    if (!is_admin()) {
        header('Cache-Control: public, max-age=3600');
        header('Expires: ' . gmdate('D, d M Y H:i:s', time() + 3600) . ' GMT');
        header('Vary: Accept-Encoding');
    }
}
add_action('template_redirect', 'speed_epaviste_add_cache_headers');

// Compress HTML output
function speed_epaviste_compress_html($buffer) {
    if (!is_admin()) {
        $buffer = preg_replace('/\s+/', ' ', $buffer);
        $buffer = str_replace(array("\r\n", "\r", "\n", "\t"), '', $buffer);
    }
    return $buffer;
}

function speed_epaviste_start_compression() {
    if (!is_admin() && !defined('DOING_AJAX')) {
        ob_start('speed_epaviste_compress_html');
    }
}
add_action('init', 'speed_epaviste_start_compression');
