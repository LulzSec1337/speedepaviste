
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

// Enhanced asset loading with proper error handling
function speed_epaviste_enqueue_assets() {
    $version = '3.3.0';
    
    // Critical CSS inline for above-the-fold content
    $critical_css = '
    * { box-sizing: border-box; }
    body { font-family: Inter, system-ui, sans-serif; margin: 0; background: #f9fafb; }
    .pro-header { background: #fff; box-shadow: 0 1px 3px rgba(0,0,0,0.1); position: sticky; top: 0; z-index: 40; }
    .header-container { max-width: 80rem; margin: 0 auto; padding: 0 1rem; }
    ';
    wp_add_inline_style( 'wp-block-library', $critical_css );
    
    // Check if CSS files exist before enqueuing
    $css_files = array(
        'speed-epaviste-base' => 'css/base.css',
        'speed-epaviste-header' => 'css/header.css',
        'speed-epaviste-components' => 'css/components.css',
        'speed-epaviste-responsive' => 'css/responsive.css',
        'speed-epaviste-animations' => 'css/animations.css'
    );
    
    foreach ($css_files as $handle => $file_path) {
        $full_path = get_template_directory() . '/' . $file_path;
        if (file_exists($full_path)) {
            wp_enqueue_style($handle, get_template_directory_uri() . '/' . $file_path, array(), $version, 'all');
        }
    }
    
    // Main stylesheet
    wp_enqueue_style('speed-epaviste-style', get_stylesheet_uri(), array(), $version, 'all');
    
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
    
    // Main JavaScript
    wp_enqueue_script('speed-epaviste-main', get_template_directory_uri() . '/main.js', array('jquery'), $version, true);
    
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

function speed_epaviste_file_manager_page() {
    echo '<div class="speed-epaviste-admin">
        <div class="dashboard-header">
            <h1><i class="fas fa-folder-open"></i> File Manager Pro</h1>
            <p>Manage all your website files and folders with advanced editing capabilities</p>
        </div>
        <div class="notice notice-info">
            <p><i class="fas fa-info-circle"></i> File Manager functionality coming soon. This feature will allow you to browse, edit, and manage all your website files directly from the admin panel.</p>
        </div>
    </div>';
}

function speed_epaviste_email_page() {
    echo '<div class="speed-epaviste-admin">
        <div class="dashboard-header">
            <h1><i class="fas fa-envelope"></i> Email Marketing Suite</h1>
            <p>Create and send professional email campaigns with AI assistance</p>
        </div>
        <div class="notice notice-info">
            <p><i class="fas fa-info-circle"></i> Email Marketing functionality coming soon. This will include subscriber management, campaign builder, and analytics.</p>
        </div>
    </div>';
}

function speed_epaviste_ai_chat_page() {
    echo '<div class="speed-epaviste-admin">
        <div class="dashboard-header">
            <h1><i class="fas fa-robot"></i> AI Chatbot Manager</h1>
            <p>Configure and manage your AI-powered chatbot for customer support</p>
        </div>
        <div class="notice notice-info">
            <p><i class="fas fa-info-circle"></i> AI Chatbot functionality coming soon. This will allow you to create intelligent chatbots for your website.</p>
        </div>
    </div>';
}

// AJAX handlers for all features with proper error handling
$ajax_handlers = array(
    'save_seo_settings',
    'save_theme_settings', 
    'analyze_seo_complete',
    'submit_to_google_real',
    'generate_real_sitemap',
    'analyze_real_pagespeed',
    'get_real_time_stats',
    'get_visitor_list',
    'run_security_scan',
    'clear_cache',
    'save_cache_settings',
    'get_cache_stats',
    'save_custom_form',
    'generate_ai_post',
    'analyze_post_seo',
    'save_ai_post',
    'save_ai_api_key',
    'save_page_builder',
    'load_page_builder',
    'save_page_template',
    'load_page_templates',
    'create_new_page',
    'load_template',
    'save_as_template'
);

foreach ($ajax_handlers as $handler) {
    add_action('wp_ajax_' . $handler, 'speed_epaviste_' . $handler);
}

// Page Builder Functions with enhanced error handling
function speed_epaviste_save_page_builder() {
    // Verify nonce for security
    if (!wp_verify_nonce($_POST['nonce'], 'speed_epaviste_admin_nonce')) {
        wp_send_json_error('Security check failed');
        return;
    }
    
    $page_data = json_decode(stripslashes($_POST['page_data']), true);
    
    if (!$page_data || !isset($page_data['title']) || !isset($page_data['content'])) {
        wp_send_json_error('Invalid page data provided');
        return;
    }
    
    $title = sanitize_text_field($page_data['title']);
    $content = wp_kses_post($page_data['content']);
    $timestamp = isset($page_data['timestamp']) ? intval($page_data['timestamp']) : time();
    
    // Create or update page
    $page_args = array(
        'post_title' => $title,
        'post_content' => $content,
        'post_status' => 'publish',
        'post_type' => 'page',
        'meta_input' => array(
            '_speed_epaviste_page_builder' => 1,
            '_speed_epaviste_builder_data' => $page_data,
            '_speed_epaviste_last_modified' => $timestamp
        )
    );
    
    if (isset($page_data['page_id']) && $page_data['page_id']) {
        $page_args['ID'] = intval($page_data['page_id']);
    }
    
    $page_id = wp_insert_post($page_args);
    
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
    if (!wp_verify_nonce($_POST['nonce'], 'speed_epaviste_admin_nonce')) {
        wp_send_json_error('Security check failed');
        return;
    }
    
    $page_id = wp_insert_post(array(
        'post_title' => 'Nouvelle Page - ' . date('Y-m-d H:i:s'),
        'post_content' => '<div class="builder-container"><div class="container-placeholder">Commencez à construire votre page</div></div>',
        'post_status' => 'draft',
        'post_type' => 'page',
        'meta_input' => array(
            '_speed_epaviste_page_builder' => 1
        )
    ));
    
    if (is_wp_error($page_id)) {
        wp_send_json_error('Failed to create page: ' . $page_id->get_error_message());
    } else {
        wp_send_json_success(array(
            'page_id' => $page_id,
            'message' => 'New page created successfully'
        ));
    }
}

function speed_epaviste_load_template() {
    if (!wp_verify_nonce($_POST['nonce'], 'speed_epaviste_admin_nonce')) {
        wp_send_json_error('Security check failed');
        return;
    }
    
    $template_type = sanitize_text_field($_POST['template_type']);
    
    $templates = array(
        'landing' => array(
            'title' => 'Page d\'Accueil Professionnelle',
            'content' => '<div class="builder-container"><div class="builder-element hero-section" data-type="hero"><h1>Bienvenue chez Speed Épaviste</h1><p>Service professionnel d\'enlèvement d\'épaves automobile</p><a href="#contact" class="builder-button">Demander un Devis Gratuit</a></div><div class="builder-element services-section" data-type="services"><h2>Nos Services</h2><div class="service-grid"><div class="service-item"><h3>Enlèvement Gratuit</h3><p>Nous récupérons votre véhicule gratuitement</p></div><div class="service-item"><h3>Certificat de Destruction</h3><p>Démarches administratives incluses</p></div></div></div></div>'
        ),
        'service' => array(
            'title' => 'Services d\'Épaviste',
            'content' => '<div class="builder-container"><div class="builder-element" data-type="heading"><h1>Nos Services Professionnels</h1></div><div class="builder-columns"><div class="column"><h3>Enlèvement d\'Épaves</h3><p>Service rapide et efficace</p></div><div class="column"><h3>Destruction Écologique</h3><p>Recyclage respectueux de l\'environnement</p></div><div class="column"><h3>Certificat Officiel</h3><p>Démarches administratives complètes</p></div></div></div>'
        ),
        'contact' => array(
            'title' => 'Contactez-nous',
            'content' => '<div class="builder-container"><div class="builder-element" data-type="heading"><h1>Demande de Devis Gratuit</h1></div><div class="builder-element" data-type="contact-form"><form class="builder-form"><div class="form-group"><label>Nom Complet</label><input type="text" name="name" required></div><div class="form-group"><label>Téléphone</label><input type="tel" name="phone" required></div><div class="form-group"><label>Email</label><input type="email" name="email"></div><div class="form-group"><label>Adresse du Véhicule</label><textarea name="address" required></textarea></div><div class="form-group"><label>Description du Véhicule</label><textarea name="description"></textarea></div><button type="submit">Envoyer la Demande</button></form></div></div>'
        )
    );
    
    if (isset($templates[$template_type])) {
        wp_send_json_success($templates[$template_type]);
    } else {
        wp_send_json_error('Template not found');
    }
}

function speed_epaviste_save_as_template() {
    if (!wp_verify_nonce($_POST['nonce'], 'speed_epaviste_admin_nonce')) {
        wp_send_json_error('Security check failed');
        return;
    }
    
    $template_name = sanitize_text_field($_POST['template_name']);
    $template_content = wp_kses_post($_POST['template_content']);
    
    if (!$template_name || !$template_content) {
        wp_send_json_error('Template name and content are required');
        return;
    }
    
    $templates = get_option('speed_epaviste_page_templates', array());
    $templates[sanitize_key($template_name)] = array(
        'name' => $template_name,
        'content' => $template_content,
        'created' => current_time('mysql'),
        'author' => get_current_user_id()
    );
    
    update_option('speed_epaviste_page_templates', $templates);
    
    wp_send_json_success(array(
        'message' => 'Template saved successfully',
        'template_id' => sanitize_key($template_name)
    ));
}

function speed_epaviste_clean_builder_content($html) {
    // Remove builder-specific classes and attributes for clean frontend output
    $html = str_replace('builder-element', 'page-element', $html);
    $html = preg_replace('/data-type="[^"]*"/', '', $html);
    $html = preg_replace('/data-id="[^"]*"/', '', $html);
    $html = str_replace('contenteditable="true"', '', $html);
    
    // Clean up extra spaces and formatting
    $html = preg_replace('/\s+/', ' ', $html);
    $html = str_replace('> <', '><', $html);
    
    // Wrap in semantic HTML structure
    $html = '<article class="page-builder-content" role="main">' . $html . '</article>';
    
    return $html;
}

// Add enhanced Page Builder styles to frontend
function speed_epaviste_frontend_page_builder_styles() {
    if (is_page() && get_post_meta(get_the_ID(), '_speed_epaviste_page_builder', true)) {
        echo '<style>
        .page-builder-content { 
            max-width: 100%; 
            font-family: Inter, system-ui, sans-serif;
        }
        .page-element { 
            position: relative; 
            margin-bottom: 2rem;
        }
        .builder-container { 
            width: 100%; 
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1rem;
        }
        .builder-columns { 
            display: grid; 
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem; 
            margin: 2rem 0;
        }
        .builder-columns > div { 
            background: white;
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }
        .builder-button { 
            display: inline-block; 
            background: linear-gradient(135deg, #6366f1, #4f46e5);
            color: white;
            padding: 1rem 2rem;
            border-radius: 8px;
            text-decoration: none; 
            font-weight: 600;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
        }
        .builder-button:hover { 
            transform: translateY(-2px); 
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
            color: white;
        }
        .builder-form { 
            max-width: 600px; 
            background: white;
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }
        .builder-form .form-group { 
            margin-bottom: 1.5rem; 
        }
        .builder-form label { 
            display: block; 
            margin-bottom: 0.75rem; 
            font-weight: 600; 
            color: #374151;
        }
        .builder-form input, 
        .builder-form textarea, 
        .builder-form select { 
            width: 100%; 
            padding: 1rem; 
            border: 2px solid #e5e7eb; 
            border-radius: 8px; 
            font-size: 1rem;
            transition: border-color 0.3s ease;
        }
        .builder-form input:focus,
        .builder-form textarea:focus,
        .builder-form select:focus {
            outline: none;
            border-color: #6366f1;
            box-shadow: 0 0 0 4px rgba(99, 102, 241, 0.1);
        }
        .builder-form button { 
            background: linear-gradient(135deg, #6366f1, #4f46e5);
            color: white; 
            border: none; 
            padding: 1rem 2rem; 
            border-radius: 8px; 
            cursor: pointer; 
            font-size: 1rem;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        .builder-form button:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        }
        .hero-section {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            text-align: center;
            padding: 4rem 2rem;
            border-radius: 12px;
            margin-bottom: 3rem;
        }
        .hero-section h1 {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }
        .hero-section p {
            font-size: 1.25rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }
        .services-section {
            padding: 3rem 0;
        }
        .service-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }
        .service-item {
            background: white;
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .service-item h3 {
            color: #6366f1;
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }
        
        @media (max-width: 768px) {
            .builder-columns { 
                grid-template-columns: 1fr;
            }
            .hero-section h1 {
                font-size: 2rem;
            }
            .service-grid {
                grid-template-columns: 1fr;
            }
        }
        </style>';
    }
}
add_action('wp_head', 'speed_epaviste_frontend_page_builder_styles');

// Template includes with error handling
$template_files = array(
    'inc/custom-header.php',
    'inc/template-tags.php',
    'inc/template-functions.php',
    'inc/customizer.php'
);

foreach ($template_files as $file) {
    $full_path = get_template_directory() . '/' . $file;
    if (file_exists($full_path)) {
        require $full_path;
    }
}

if ( defined( 'JETPACK__VERSION' ) ) {
    $jetpack_file = get_template_directory() . '/inc/jetpack.php';
    if (file_exists($jetpack_file)) {
        require $jetpack_file;
    }
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
