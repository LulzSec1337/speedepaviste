
<?php
/**
 * Admin-specific functions for Speed Épaviste
 * 
 * @package Speed_Epaviste
 */

if (!defined('ABSPATH')) {
    exit;
}

// Enhanced admin menu with all features
function speed_epaviste_admin_menu() {
    add_menu_page(
        'Speed Épaviste Pro',
        'Speed Épaviste',
        'manage_options',
        'speed-epaviste-dashboard',
        'speed_epaviste_dashboard_page',
        'dashicons-admin-customizer',
        2
    );
    
    $submenus = array(
        'speed-epaviste-seo' => array('SEO Manager', 'SEO Manager'),
        'speed-epaviste-ai-posts' => array('AI Post Generator', 'AI Posts'),
        'speed-epaviste-analytics' => array('Analytics', 'Analytics'),
        'speed-epaviste-customizer' => array('Theme Customizer', 'Customizer'),
        'speed-epaviste-performance' => array('Performance', 'Performance'),
        'speed-epaviste-security' => array('Security', 'Security'),
        'speed-epaviste-cache' => array('Cache Manager', 'Cache'),
        'speed-epaviste-builder' => array('Page Builder Pro', 'Page Builder'),
        'speed-epaviste-forms' => array('Forms Manager', 'Forms'),
        'speed-epaviste-file-manager' => array('File Manager', 'Files'),
        'speed-epaviste-email' => array('Email Marketing', 'Email'),
        'speed-epaviste-ai-chat' => array('AI Chatbot', 'AI Chat')
    );
    
    foreach ($submenus as $slug => $titles) {
        add_submenu_page(
            'speed-epaviste-dashboard',
            $titles[0],
            $titles[1],
            'manage_options',
            $slug,
            'speed_epaviste_' . str_replace('-', '_', str_replace('speed-epaviste-', '', $slug)) . '_page'
        );
    }
}
add_action('admin_menu', 'speed_epaviste_admin_menu');

// Include all admin page functions with error handling
function speed_epaviste_dashboard_page() {
    $file = get_template_directory() . '/inc/admin-dashboard.php';
    if (file_exists($file)) {
        include $file;
    } else {
        echo '<div class="notice notice-error"><p>Dashboard file not found. Please check your theme installation.</p></div>';
    }
}

function speed_epaviste_seo_page() {
    $file = get_template_directory() . '/inc/admin-seo.php';
    if (file_exists($file)) {
        include $file;
    } else {
        echo '<div class="notice notice-error"><p>SEO page file not found.</p></div>';
    }
}

function speed_epaviste_ai_posts_page() {
    $file = get_template_directory() . '/inc/admin-ai-posts.php';
    if (file_exists($file)) {
        include $file;
    } else {
        echo '<div class="notice notice-error"><p>AI Posts page file not found.</p></div>';
    }
}

function speed_epaviste_analytics_page() {
    $file = get_template_directory() . '/inc/admin-analytics.php';
    if (file_exists($file)) {
        include $file;
    } else {
        echo '<div class="notice notice-error"><p>Analytics page file not found.</p></div>';
    }
}

function speed_epaviste_customizer_page() {
    $file = get_template_directory() . '/inc/admin-customizer.php';
    if (file_exists($file)) {
        include $file;
    } else {
        echo '<div class="notice notice-error"><p>Customizer page file not found.</p></div>';
    }
}

function speed_epaviste_performance_page() {
    $file = get_template_directory() . '/inc/admin-performance.php';
    if (file_exists($file)) {
        include $file;
    } else {
        echo '<div class="notice notice-error"><p>Performance page file not found.</p></div>';
    }
}

function speed_epaviste_security_page() {
    $file = get_template_directory() . '/inc/admin-security.php';
    if (file_exists($file)) {
        include $file;
    } else {
        echo '<div class="notice notice-error"><p>Security page file not found.</p></div>';
    }
}

function speed_epaviste_cache_page() {
    $file = get_template_directory() . '/inc/admin-cache.php';
    if (file_exists($file)) {
        include $file;
    } else {
        echo '<div class="notice notice-error"><p>Cache page file not found.</p></div>';
    }
}

function speed_epaviste_builder_page() {
    $file = get_template_directory() . '/inc/admin-page-builder.php';
    if (file_exists($file)) {
        include $file;
    } else {
        echo '<div class="notice notice-error"><p>Page Builder file not found.</p></div>';
    }
}

function speed_epaviste_forms_page() {
    $file = get_template_directory() . '/inc/admin-forms.php';
    if (file_exists($file)) {
        include $file;
    } else {
        echo '<div class="notice notice-error"><p>Forms page file not found.</p></div>';
    }
}

// Enhanced admin assets with proper error handling
function speed_epaviste_admin_enqueue_assets($hook) {
    if (strpos($hook, 'speed-epaviste') !== false || $hook === 'toplevel_page_speed-epaviste-dashboard') {
        
        // Professional Velonic admin style
        wp_enqueue_style('speed-epaviste-admin-velonic', get_template_directory_uri() . '/admin-style-velonic.css', array(), '3.3.0');
        
        // Font Awesome for icons
        wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css', array(), '6.4.0');
        
        // Google Fonts for better typography
        wp_enqueue_style('google-fonts-inter', 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap', array(), null);
        
        // Admin JavaScript with enhanced functionality
        wp_enqueue_script('speed-epaviste-admin-enhanced', get_template_directory_uri() . '/admin-script-enhanced.js', array('jquery', 'wp-color-picker'), '3.3.0', true);
        wp_enqueue_style('wp-color-picker');
        
        // Page Builder specific assets
        if (isset($_GET['page']) && $_GET['page'] === 'speed-epaviste-builder') {
            $page_builder_css = get_template_directory() . '/css/page-builder.css';
            $page_builder_js = get_template_directory() . '/js/page-builder.js';
            
            if (file_exists($page_builder_css)) {
                wp_enqueue_style('speed-epaviste-page-builder', get_template_directory_uri() . '/css/page-builder.css', array(), '3.3.0');
            }
            
            if (file_exists($page_builder_js)) {
                wp_enqueue_script('speed-epaviste-page-builder', get_template_directory_uri() . '/js/page-builder.js', array('jquery', 'jquery-ui-sortable', 'jquery-ui-draggable', 'jquery-ui-droppable'), '3.3.0', true);
            }
        }
        
        // Chart.js for analytics
        wp_enqueue_script('chartjs', 'https://cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js', array(), '3.9.1', true);
        
        wp_localize_script('speed-epaviste-admin-enhanced', 'speedEpavisteAdmin', array(
            'ajax_url' => admin_url('admin-ajax.php'),
            'nonce' => wp_create_nonce('speed_epaviste_admin_nonce'),
            'theme_url' => get_template_directory_uri()
        ));
    }
}
add_action('admin_enqueue_scripts', 'speed_epaviste_admin_enqueue_assets');

// Add admin body class for proper styling
function speed_epaviste_admin_body_class($classes) {
    return $classes . ' speed-epaviste-admin-body';
}
add_filter('admin_body_class', 'speed_epaviste_admin_body_class');

// Enhance admin notices
function speed_epaviste_admin_notices() {
    $screen = get_current_screen();
    if (strpos($screen->id, 'speed-epaviste') !== false) {
        echo '<div class="admin-notification success fade-in">
            <i class="fas fa-check-circle"></i>
            Welcome to Speed Épaviste Pro Dashboard! All systems are running optimally.
        </div>';
    }
}
add_action('admin_notices', 'speed_epaviste_admin_notices');

// Common AJAX handlers
function speed_epaviste_save_seo_settings() {
    if (!wp_verify_nonce($_POST['nonce'], 'speed_epaviste_admin_nonce')) {
        wp_send_json_error('Security check failed');
        return;
    }
    
    $settings = array(
        'meta_title' => sanitize_text_field($_POST['meta_title']),
        'meta_description' => sanitize_textarea_field($_POST['meta_description']),
        'focus_keyword' => sanitize_text_field($_POST['focus_keyword']),
        'canonical_url' => esc_url_raw($_POST['canonical_url'])
    );
    
    update_option('speed_epaviste_seo_settings', $settings);
    wp_send_json_success(array('message' => 'SEO settings saved successfully'));
}

function speed_epaviste_save_theme_settings() {
    if (!wp_verify_nonce($_POST['nonce'], 'speed_epaviste_admin_nonce')) {
        wp_send_json_error('Security check failed');
        return;
    }
    
    $settings = array(
        'primary_color' => sanitize_hex_color($_POST['primary_color']),
        'secondary_color' => sanitize_hex_color($_POST['secondary_color']),
        'font_family' => sanitize_text_field($_POST['font_family']),
        'layout_style' => sanitize_text_field($_POST['layout_style'])
    );
    
    update_option('speed_epaviste_theme_settings', $settings);
    wp_send_json_success(array('message' => 'Theme settings saved successfully'));
}

// Register common AJAX handlers
add_action('wp_ajax_save_seo_settings', 'speed_epaviste_save_seo_settings');
add_action('wp_ajax_save_theme_settings', 'speed_epaviste_save_theme_settings');
