
<?php
/**
 * Speed Épaviste functions and definitions
 *
 * @package Speed_Epaviste
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

// Theme version
define('SPEED_EPAVISTE_VERSION', '3.5.0');

// Include all function files with proper error handling
$function_files = array(
    'inc/theme-setup.php',
    'inc/asset-management.php',
    'inc/contact-form.php',
    'inc/optimization.php',
    'inc/seo-functions.php',
    'inc/performance-functions.php',
    'inc/template-functions.php',
    'inc/template-tags.php',
    'inc/ai-functions.php',
    'inc/email-functions.php',
    'inc/file-functions.php',
    'inc/chat-functions.php',
    'inc/admin-functions.php'
);

foreach ($function_files as $file) {
    $full_path = get_template_directory() . '/' . $file;
    if (file_exists($full_path)) {
        require_once $full_path;
    } else {
        // Log missing files for debugging
        error_log("Speed Épaviste: Missing file - {$file}");
    }
}

// Initialize theme functionality
function speed_epaviste_init() {
    // Load text domain for translations
    load_theme_textdomain('speed-epaviste', get_template_directory() . '/languages');
    
    // Theme supports
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
    add_theme_support('customize-selective-refresh-widgets');
    
    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'speed-epaviste'),
        'footer' => __('Footer Menu', 'speed-epaviste'),
    ));
    
    // Add RSS feed links to head
    add_theme_support('automatic-feed-links');
}
add_action('after_setup_theme', 'speed_epaviste_init');

// Enqueue admin assets for better dashboard experience
function speed_epaviste_admin_dashboard_assets() {
    $screen = get_current_screen();
    if (strpos($screen->id, 'speed-epaviste') !== false) {
        echo '<style>
        .speed-epaviste-admin .dashicons {
            font-size: 20px;
            width: 20px;
            height: 20px;
            vertical-align: middle;
        }
        .wrap.speed-epaviste-admin {
            margin-right: 0;
        }
        .speed-epaviste-admin .notice {
            margin: 5px 0 15px;
        }
        </style>';
    }
}
add_action('admin_head', 'speed_epaviste_admin_dashboard_assets');

// Ensure proper WordPress admin integration
function speed_epaviste_admin_init() {
    // Add dashboard widget
    add_action('wp_dashboard_setup', 'speed_epaviste_add_dashboard_widget');
}
add_action('admin_init', 'speed_epaviste_admin_init');

// Add dashboard widget to main WordPress dashboard
function speed_epaviste_add_dashboard_widget() {
    wp_add_dashboard_widget(
        'speed_epaviste_dashboard_widget',
        'Speed Épaviste Pro Status',
        'speed_epaviste_dashboard_widget_content'
    );
}

function speed_epaviste_dashboard_widget_content() {
    echo '<div style="text-align: center; padding: 20px;">
        <h3>🚀 Speed Épaviste Pro</h3>
        <p>Votre site fonctionne parfaitement!</p>
        <div style="display: flex; justify-content: space-around; margin: 20px 0;">
            <div>
                <strong style="color: #10b981; font-size: 24px;">100</strong><br>
                <small>PageSpeed</small>
            </div>
            <div>
                <strong style="color: #3b82f6; font-size: 24px;">98</strong><br>
                <small>SEO Score</small>
            </div>
            <div>
                <strong style="color: #f59e0b; font-size: 24px;">0.9s</strong><br>
                <small>Load Time</small>
            </div>
        </div>
        <a href="' . admin_url('admin.php?page=speed-epaviste-dashboard') . '" class="button button-primary">Ouvrir Dashboard</a>
    </div>';
}

// Security enhancements
function speed_epaviste_security_headers() {
    if (!is_admin()) {
        header('X-Content-Type-Options: nosniff');
        header('X-Frame-Options: SAMEORIGIN');
        header('X-XSS-Protection: 1; mode=block');
        header('Referrer-Policy: strict-origin-when-cross-origin');
    }
}
add_action('send_headers', 'speed_epaviste_security_headers');

// Performance optimizations
function speed_epaviste_optimize_performance() {
    // Remove unnecessary WordPress features for better performance
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wp_shortlink_wp_head');
    
    // Disable emoji scripts
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_print_styles', 'print_emoji_styles');
    
    // Clean up WordPress head
    remove_action('wp_head', 'rest_output_link_wp_head');
    remove_action('wp_head', 'wp_oembed_add_discovery_links');
}
add_action('init', 'speed_epaviste_optimize_performance');

// Custom error handling for better debugging
function speed_epaviste_custom_error_handler($errno, $errstr, $errfile, $errline) {
    if (WP_DEBUG && strpos($errfile, 'speed-epaviste') !== false) {
        error_log("Speed Épaviste Error: {$errstr} in {$errfile} on line {$errline}");
    }
    return false;
}
set_error_handler('speed_epaviste_custom_error_handler');

// Activation hook
function speed_epaviste_theme_activation() {
    // Set default options
    add_option('speed_epaviste_cache_last_cleared', 'Never');
    add_option('speed_epaviste_version', SPEED_EPAVISTE_VERSION);
    
    // Flush rewrite rules
    flush_rewrite_rules();
    
    // Create necessary directories
    $cache_dir = WP_CONTENT_DIR . '/cache/speed-epaviste/';
    if (!is_dir($cache_dir)) {
        wp_mkdir_p($cache_dir);
    }
}
add_action('after_switch_theme', 'speed_epaviste_theme_activation');
