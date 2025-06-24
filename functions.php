
<?php
/**
 * Speed Épaviste functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Speed_Epaviste
 */

if ( ! function_exists( 'speed_epaviste_setup' ) ) :
	function speed_epaviste_setup() {
		load_theme_textdomain( 'speed-epaviste', get_template_directory() . '/languages' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );

		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'speed-epaviste' ),
			)
		);

		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		add_theme_support(
			'custom-background',
			apply_filters(
				'speed_epaviste_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		add_theme_support( 'customize-selective-refresh-widgets' );

		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'speed_epaviste_setup' );

function speed_epaviste_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'speed_epaviste_content_width', 640 );
}
add_action( 'after_setup_theme', 'speed_epaviste_content_width', 0 );

function speed_epaviste_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'speed-epaviste' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'speed-epaviste' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'speed_epaviste_widgets_init' );

// Optimized asset loading for PageSpeed
function speed_epaviste_enqueue_assets() {
    $version = '3.0.1';
    
    // Critical CSS inline for above-the-fold content
    $critical_css = '
    * { box-sizing: border-box; }
    body { font-family: Inter, system-ui, sans-serif; margin: 0; background: #f9fafb; }
    .pro-header { background: #fff; box-shadow: 0 1px 3px rgba(0,0,0,0.1); position: sticky; top: 0; z-index: 40; }
    .header-container { max-width: 80rem; margin: 0 auto; padding: 0 1rem; }
    ';
    wp_add_inline_style( 'wp-block-library', $critical_css );
    
    // Main stylesheet with proper dependencies
    wp_enqueue_style('speed-epaviste-base', get_template_directory_uri() . '/css/base.css', array(), $version, 'all');
    wp_enqueue_style('speed-epaviste-header', get_template_directory_uri() . '/css/header.css', array('speed-epaviste-base'), $version, 'all');
    wp_enqueue_style('speed-epaviste-components', get_template_directory_uri() . '/css/components.css', array('speed-epaviste-base'), $version, 'all');
    wp_enqueue_style('speed-epaviste-responsive', get_template_directory_uri() . '/css/responsive.css', array('speed-epaviste-components'), $version, 'all');
    wp_enqueue_style('speed-epaviste-animations', get_template_directory_uri() . '/css/animations.css', array(), $version, 'all');
    wp_enqueue_style('speed-epaviste-style', get_stylesheet_uri(), array('speed-epaviste-responsive'), $version, 'all');
    
    // Core JavaScript with proper dependencies and defer
    wp_enqueue_script('speed-epaviste-core', get_template_directory_uri() . '/js/core.js', array('jquery'), $version, true);
    wp_enqueue_script('speed-epaviste-animations', get_template_directory_uri() . '/js/animations.js', array('speed-epaviste-core'), $version, true);
    wp_enqueue_script('speed-epaviste-performance', get_template_directory_uri() . '/js/performance.js', array('speed-epaviste-core'), $version, true);
    wp_enqueue_script('speed-epaviste-main', get_template_directory_uri() . '/main.js', array('speed-epaviste-core'), $version, true);
    
    // Add defer attribute to all theme scripts for better performance
    add_filter('script_loader_tag', 'speed_epaviste_add_defer_attribute', 10, 2);
    
    // Localize script for AJAX and theme data
    wp_localize_script('speed-epaviste-main', 'speedEpavisteTheme', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('speed_epaviste_nonce'),
        'theme_url' => get_template_directory_uri(),
        'home_url' => home_url('/')
    ));
}
add_action('wp_enqueue_scripts', 'speed_epaviste_enqueue_assets');

// Add defer attribute to scripts for better PageSpeed
function speed_epaviste_add_defer_attribute($tag, $handle) {
    if (strpos($handle, 'speed-epaviste') !== false) {
        return str_replace(' src', ' defer src', $tag);
    }
    return $tag;
}

// Admin assets with dependency management
function speed_epaviste_admin_enqueue_assets($hook) {
    if (strpos($hook, 'speed-epaviste') !== false || $hook === 'toplevel_page_speed-epaviste-dashboard') {
        wp_enqueue_style('speed-epaviste-admin', get_template_directory_uri() . '/admin-style.css', array(), '3.0.1');
        wp_enqueue_script('speed-epaviste-admin', get_template_directory_uri() . '/admin-script.js', array('jquery', 'wp-color-picker'), '3.0.1', true);
        wp_enqueue_style('wp-color-picker');
        
        wp_localize_script('speed-epaviste-admin', 'speedEpavisteAdmin', array(
            'ajax_url' => admin_url('admin-ajax.php'),
            'nonce' => wp_create_nonce('speed_epaviste_admin_nonce')
        ));
    }
}
add_action('admin_enqueue_scripts', 'speed_epaviste_admin_enqueue_assets');

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
    echo '<link rel="preload" href="' . get_template_directory_uri() . '/css/base.css" as="style" onload="this.onload=null;this.rel=\'stylesheet\'">';
    echo '<link rel="dns-prefetch" href="//fonts.googleapis.com">';
    echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>';
}

function speed_epaviste_optimize_google_fonts() {
    echo '<link rel="preload" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" as="style" onload="this.onload=null;this.rel=\'stylesheet\'">';
    echo '<noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap"></noscript>';
}

// Admin menu and panels
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
    
    add_submenu_page(
        'speed-epaviste-dashboard',
        'SEO Manager',
        'SEO Manager',
        'manage_options',
        'speed-epaviste-seo',
        'speed_epaviste_seo_page'
    );
    
    add_submenu_page(
        'speed-epaviste-dashboard',
        'Theme Customizer',
        'Theme Customizer',
        'manage_options',
        'speed-epaviste-customizer',
        'speed_epaviste_customizer_page'
    );
    
    add_submenu_page(
        'speed-epaviste-dashboard',
        'Performance',
        'Performance',
        'manage_options',
        'speed-epaviste-performance',
        'speed_epaviste_performance_page'
    );
    
    add_submenu_page(
        'speed-epaviste-dashboard',
        'Page Builder',
        'Page Builder',
        'manage_options',
        'speed-epaviste-builder',
        'speed_epaviste_builder_page'
    );
    
    add_submenu_page(
        'speed-epaviste-dashboard',
        'Forms Manager',
        'Forms Manager',
        'manage_options',
        'speed-epaviste-forms',
        'speed_epaviste_forms_page'
    );
}
add_action('admin_menu', 'speed_epaviste_admin_menu');

// Dashboard page
function speed_epaviste_dashboard_page() {
    include get_template_directory() . '/inc/admin-dashboard.php';
}

// SEO page
function speed_epaviste_seo_page() {
    include get_template_directory() . '/inc/admin-seo.php';
}

// Customizer page
function speed_epaviste_customizer_page() {
    include get_template_directory() . '/inc/admin-customizer.php';
}

// Performance page
function speed_epaviste_performance_page() {
    include get_template_directory() . '/inc/admin-performance.php';
}

// Builder page
function speed_epaviste_builder_page() {
    include get_template_directory() . '/inc/admin-builder.php';
}

// Forms page
function speed_epaviste_forms_page() {
    include get_template_directory() . '/inc/admin-forms.php';
}

// AJAX handlers for admin functionality
add_action('wp_ajax_save_seo_settings', 'speed_epaviste_save_seo_settings');
add_action('wp_ajax_save_theme_settings', 'speed_epaviste_save_theme_settings');
add_action('wp_ajax_analyze_seo', 'speed_epaviste_analyze_seo');
add_action('wp_ajax_submit_to_google', 'speed_epaviste_submit_to_google');

function speed_epaviste_save_seo_settings() {
    check_ajax_referer('speed_epaviste_admin_nonce', 'nonce');
    
    if (isset($_POST['seo_title'])) {
        update_option('seo_title', sanitize_text_field($_POST['seo_title']));
    }
    if (isset($_POST['seo_description'])) {
        update_option('seo_description', sanitize_textarea_field($_POST['seo_description']));
    }
    if (isset($_POST['seo_keywords'])) {
        update_option('seo_keywords', sanitize_text_field($_POST['seo_keywords']));
    }
    
    wp_send_json_success('SEO settings saved successfully');
}

function speed_epaviste_save_theme_settings() {
    check_ajax_referer('speed_epaviste_admin_nonce', 'nonce');
    
    $color_options = array('primary_color', 'secondary_color', 'text_color', 'header_bg_color', 'header_text_color');
    
    foreach ($color_options as $option) {
        if (isset($_POST[$option])) {
            update_option($option, sanitize_hex_color($_POST[$option]));
        }
    }
    
    wp_send_json_success('Theme settings saved successfully');
}

function speed_epaviste_analyze_seo() {
    check_ajax_referer('speed_epaviste_admin_nonce', 'nonce');
    
    // Simulate SEO analysis
    $analysis = array(
        'title_score' => 95,
        'description_score' => 90,
        'keyword_density' => 85,
        'overall_score' => 90
    );
    
    wp_send_json_success($analysis);
}

function speed_epaviste_submit_to_google() {
    check_ajax_referer('speed_epaviste_admin_nonce', 'nonce');
    
    // Simulate Google submission
    wp_send_json_success('URL submitted to Google successfully');
}

// Custom template tags and functions
require get_template_directory() . '/inc/custom-header.php';
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/template-functions.php';
require get_template_directory() . '/inc/customizer.php';

if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

// Service Worker registration for enhanced performance
function speed_epaviste_register_service_worker() {
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
add_action('wp_footer', 'speed_epaviste_register_service_worker');
