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

// Enhanced asset loading for PageSpeed with all files including page builder
function speed_epaviste_enqueue_assets() {
    $version = '3.2.0';
    
    // Critical CSS inline for above-the-fold content
    $critical_css = '
    * { box-sizing: border-box; }
    body { font-family: Inter, system-ui, sans-serif; margin: 0; background: #f9fafb; }
    .pro-header { background: #fff; box-shadow: 0 1px 3px rgba(0,0,0,0.1); position: sticky; top: 0; z-index: 40; }
    .header-container { max-width: 80rem; margin: 0 auto; padding: 0 1rem; }
    ';
    wp_add_inline_style( 'wp-block-library', $critical_css );
    
    // Main stylesheets with proper dependencies
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

// Enhanced admin assets with page builder support
function speed_epaviste_admin_enqueue_assets($hook) {
    if (strpos($hook, 'speed-epaviste') !== false || $hook === 'toplevel_page_speed-epaviste-dashboard') {
        wp_enqueue_style('speed-epaviste-admin', get_template_directory_uri() . '/admin-style-velonic.css', array(), '3.1.0');
        wp_enqueue_script('speed-epaviste-admin', get_template_directory_uri() . '/admin-script-enhanced.js', array('jquery', 'wp-color-picker'), '3.1.0', true);
        wp_enqueue_style('wp-color-picker');
        
        // Page Builder specific assets
        if (isset($_GET['page']) && $_GET['page'] === 'speed-epaviste-builder') {
            wp_enqueue_style('speed-epaviste-page-builder', get_template_directory_uri() . '/css/page-builder.css', array(), '3.2.0', 'all');
            wp_enqueue_script('speed-epaviste-page-builder', get_template_directory_uri() . '/js/page-builder.js', array('jquery', 'jquery-ui-sortable', 'jquery-ui-draggable', 'jquery-ui-droppable'), '3.2.0', true);
            
            // Add Font Awesome for icons
            wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css', array(), '6.0.0');
        }
        
        // Enqueue Chart.js for analytics
        wp_enqueue_script('chartjs', 'https://cdn.jsdelivr.net/npm/chart.js', array(), '3.9.1', true);
        
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
        'AI Post Generator',
        'AI Post Generator',
        'manage_options',
        'speed-epaviste-ai-posts',
        'speed_epaviste_ai_posts_page'
    );
    
    add_submenu_page(
        'speed-epaviste-dashboard',
        'Analytics',
        'Analytics',
        'manage_options',
        'speed-epaviste-analytics',
        'speed_epaviste_analytics_page'
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
        'Security',
        'Security',
        'manage_options',
        'speed-epaviste-security',
        'speed_epaviste_security_page'
    );
    
    add_submenu_page(
        'speed-epaviste-dashboard',
        'Cache Manager',
        'Cache Manager',
        'manage_options',
        'speed-epaviste-cache',
        'speed_epaviste_cache_page'
    );
    
    add_submenu_page(
        'speed-epaviste-dashboard',
        'Page Builder Pro',
        'Page Builder Pro',
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

// Include all admin page functions
function speed_epaviste_dashboard_page() {
    include get_template_directory() . '/inc/admin-dashboard.php';
}

function speed_epaviste_seo_page() {
    include get_template_directory() . '/inc/admin-seo.php';
}

function speed_epaviste_ai_posts_page() {
    include get_template_directory() . '/inc/admin-ai-posts.php';
}

function speed_epaviste_analytics_page() {
    include get_template_directory() . '/inc/admin-analytics.php';
}

function speed_epaviste_customizer_page() {
    include get_template_directory() . '/inc/admin-customizer.php';
}

function speed_epaviste_performance_page() {
    include get_template_directory() . '/inc/admin-performance.php';
}

function speed_epaviste_security_page() {
    include get_template_directory() . '/inc/admin-security.php';
}

function speed_epaviste_cache_page() {
    include get_template_directory() . '/inc/admin-cache.php';
}

function speed_epaviste_builder_page() {
    include get_template_directory() . '/inc/admin-page-builder.php';
}

function speed_epaviste_forms_page() {
    include get_template_directory() . '/inc/admin-forms.php';
}

// AJAX handlers for all features
add_action('wp_ajax_save_seo_settings', 'speed_epaviste_save_seo_settings');
add_action('wp_ajax_save_theme_settings', 'speed_epaviste_save_theme_settings');
add_action('wp_ajax_analyze_seo_complete', 'speed_epaviste_analyze_seo_complete');
add_action('wp_ajax_submit_to_google_real', 'speed_epaviste_submit_to_google_real');
add_action('wp_ajax_generate_real_sitemap', 'speed_epaviste_generate_real_sitemap');
add_action('wp_ajax_analyze_real_pagespeed', 'speed_epaviste_analyze_real_pagespeed');
add_action('wp_ajax_get_real_time_stats', 'speed_epaviste_get_real_time_stats');
add_action('wp_ajax_get_visitor_list', 'speed_epaviste_get_visitor_list');
add_action('wp_ajax_run_security_scan', 'speed_epaviste_run_security_scan');
add_action('wp_ajax_clear_cache', 'speed_epaviste_clear_cache');
add_action('wp_ajax_save_cache_settings', 'speed_epaviste_save_cache_settings');
add_action('wp_ajax_get_cache_stats', 'speed_epaviste_get_cache_stats');
add_action('wp_ajax_save_custom_form', 'speed_epaviste_save_custom_form');

// AI Post Generator AJAX handlers
add_action('wp_ajax_generate_ai_post', 'speed_epaviste_generate_ai_post');
add_action('wp_ajax_analyze_post_seo', 'speed_epaviste_analyze_post_seo');
add_action('wp_ajax_save_ai_post', 'speed_epaviste_save_ai_post');
add_action('wp_ajax_save_ai_api_key', 'speed_epaviste_save_ai_api_key');

// Page Builder AJAX handlers
add_action('wp_ajax_save_page_builder', 'speed_epaviste_save_page_builder');
add_action('wp_ajax_load_page_builder', 'speed_epaviste_load_page_builder');
add_action('wp_ajax_save_page_template', 'speed_epaviste_save_page_template');
add_action('wp_ajax_load_page_templates', 'speed_epaviste_load_page_templates');
add_action('wp_ajax_create_new_page', 'speed_epaviste_create_new_page');
add_action('wp_ajax_load_template', 'speed_epaviste_load_template');
add_action('wp_ajax_save_as_template', 'speed_epaviste_save_as_template');

// Page Builder Functions
function speed_epaviste_save_page_builder() {
    check_ajax_referer('speed_epaviste_admin_nonce', 'nonce');
    
    $page_data = json_decode(stripslashes($_POST['page_data']), true);
    
    if (!$page_data) {
        wp_send_json_error('Invalid page data');
        return;
    }
    
    $title = sanitize_text_field($page_data['title']);
    $content = wp_kses_post($page_data['content']);
    $timestamp = intval($page_data['timestamp']);
    
    // Create or update page
    $page_id = wp_insert_post(array(
        'post_title' => $title,
        'post_content' => $content,
        'post_status' => 'publish',
        'post_type' => 'page',
        'meta_input' => array(
            '_speed_epaviste_page_builder' => 1,
            '_speed_epaviste_builder_data' => $page_data,
            '_speed_epaviste_last_modified' => $timestamp
        )
    ));
    
    if (is_wp_error($page_id)) {
        wp_send_json_error('Failed to save page: ' . $page_id->get_error_message());
    } else {
        // Generate clean HTML for frontend
        $clean_content = speed_epaviste_clean_builder_content($content);
        wp_update_post(array(
            'ID' => $page_id,
            'post_content' => $clean_content
        ));
        
        wp_send_json_success(array(
            'page_id' => $page_id,
            'edit_url' => admin_url('post.php?post=' . $page_id . '&action=edit'),
            'view_url' => get_permalink($page_id),
            'message' => 'Page saved successfully'
        ));
    }
}

function speed_epaviste_create_new_page() {
    check_ajax_referer('speed_epaviste_admin_nonce', 'nonce');
    
    $page_id = wp_insert_post(array(
        'post_title' => 'Nouvelle Page',
        'post_content' => '<div class="builder-container"><div class="container-placeholder">Commencez à construire votre page</div></div>',
        'post_status' => 'draft',
        'post_type' => 'page',
        'meta_input' => array(
            '_speed_epaviste_page_builder' => 1
        )
    ));
    
    if (is_wp_error($page_id)) {
        wp_send_json_error('Failed to create page');
    } else {
        wp_send_json_success(array(
            'page_id' => $page_id,
            'message' => 'New page created successfully'
        ));
    }
}

function speed_epaviste_load_template() {
    check_ajax_referer('speed_epaviste_admin_nonce', 'nonce');
    
    $template_type = sanitize_text_field($_POST['template_type']);
    
    $templates = array(
        'landing' => array(
            'title' => 'Page d\'Accueil',
            'content' => '<div class="builder-container"><div class="builder-element" data-type="heading"><h1>Bienvenue sur notre site</h1></div><div class="builder-element" data-type="text"><p>Découvrez nos services exceptionnels</p></div><div class="builder-element" data-type="button"><a href="#contact" class="builder-button">Nous Contacter</a></div></div>'
        ),
        'service' => array(
            'title' => 'Nos Services',
            'content' => '<div class="builder-container"><div class="builder-element" data-type="heading"><h1>Nos Services</h1></div><div class="builder-columns"><div class="column"><h3>Service 1</h3><p>Description du service</p></div><div class="column"><h3>Service 2</h3><p>Description du service</p></div></div></div>'
        ),
        'contact' => array(
            'title' => 'Contact',
            'content' => '<div class="builder-container"><div class="builder-element" data-type="heading"><h1>Contactez-nous</h1></div><div class="builder-element" data-type="contact-form"><form class="builder-form"><div class="form-group"><label>Nom</label><input type="text" name="name"></div><div class="form-group"><label>Email</label><input type="email" name="email"></div><div class="form-group"><label>Message</label><textarea name="message"></textarea></div><button type="submit">Envoyer</button></form></div></div>'
        )
    );
    
    if (isset($templates[$template_type])) {
        wp_send_json_success($templates[$template_type]);
    } else {
        wp_send_json_error('Template not found');
    }
}

function speed_epaviste_save_as_template() {
    check_ajax_referer('speed_epaviste_admin_nonce', 'nonce');
    
    $template_name = sanitize_text_field($_POST['template_name']);
    $template_content = wp_kses_post($_POST['template_content']);
    
    if (!$template_name || !$template_content) {
        wp_send_json_error('Template name and content are required');
        return;
    }
    
    $templates = get_option('speed_epaviste_page_templates', array());
    $templates[$template_name] = array(
        'name' => $template_name,
        'content' => $template_content,
        'created' => current_time('mysql'),
        'author' => get_current_user_id()
    );
    
    update_option('speed_epaviste_page_templates', $templates);
    
    wp_send_json_success(array(
        'message' => 'Template saved successfully',
        'template_id' => $template_name
    ));
}

function speed_epaviste_clean_builder_content($html) {
    // Remove builder-specific classes and attributes
    $html = str_replace('builder-element', 'page-element', $html);
    $html = preg_replace('/data-type="[^"]*"/', '', $html);
    $html = preg_replace('/data-id="[^"]*"/, '', $html);
    $html = str_replace('contenteditable="true"', '', $html);
    
    // Clean up extra spaces
    $html = preg_replace('/\s+/', ' ', $html);
    $html = str_replace('> <', '><', $html);
    
    // Wrap in semantic HTML
    $html = '<article class="page-builder-content">' . $html . '</article>';
    
    return $html;
}

// Add Page Builder styles to frontend
function speed_epaviste_frontend_page_builder_styles() {
    if (is_page() && get_post_meta(get_the_ID(), '_speed_epaviste_page_builder', true)) {
        echo '<style>
        .page-builder-content { max-width: 100%; }
        .page-element { position: relative; }
        .builder-container { width: 100%; }
        .builder-columns { display: flex; gap: 1rem; flex-wrap: wrap; }
        .builder-columns > div { flex: 1; min-width: 250px; }
        .builder-button { 
            display: inline-block; 
            text-decoration: none; 
            transition: all 0.2s ease;
        }
        .builder-button:hover { 
            transform: translateY(-2px); 
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .builder-form { max-width: 600px; }
        .builder-form .form-group { margin-bottom: 1rem; }
        .builder-form label { 
            display: block; 
            margin-bottom: 0.5rem; 
            font-weight: 500; 
        }
        .builder-form input, 
        .builder-form textarea, 
        .builder-form select { 
            width: 100%; 
            padding: 0.75rem; 
            border: 1px solid #dee2e6; 
            border-radius: 4px; 
            font-size: 1rem;
        }
        .builder-form button { 
            background: #007bff; 
            color: white; 
            border: none; 
            padding: 0.75rem 1.5rem; 
            border-radius: 4px; 
            cursor: pointer; 
            font-size: 1rem;
        }
        .builder-spacer { height: var(--spacer-height, 50px); }
        .builder-list { margin: 0; padding-left: 1.5rem; }
        .builder-list li { margin-bottom: 0.5rem; }
        
        @media (max-width: 768px) {
            .builder-columns { flex-direction: column; }
            .builder-columns > div { min-width: 100%; }
        }
        </style>';
    }
}
add_action('wp_head', 'speed_epaviste_frontend_page_builder_styles');

// Template includes
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
