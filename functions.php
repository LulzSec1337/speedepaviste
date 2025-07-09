
<?php
/**
 * Speed Épaviste functions and definitions
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
    $version = '3.4.0';
    
    // Critical CSS inline for above-the-fold content
    $critical_css = '
    * { box-sizing: border-box; }
    body { font-family: Inter, system-ui, sans-serif; margin: 0; background: #f9fafb; line-height: 1.6; }
    .hero-section { background: linear-gradient(135deg, #fbbf24, #f59e0b); padding: 4rem 1.5rem; text-align: center; }
    .hero-section h1 { font-size: 2.5rem; font-weight: 700; color: white; margin-bottom: 1rem; }
    @media (min-width: 768px) { .hero-section h1 { font-size: 3rem; } }
    .prose { max-width: none; }
    .prose p { margin-bottom: 1rem; }
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
    wp_enqueue_style('speed-epaviste-responsive', get_template_directory_uri() . '/css/responsive.css', array(), $version, 'all');
    
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
    
    // Add defer attribute to all theme scripts for better performance
    add_filter('script_loader_tag', 'speed_epaviste_add_defer_attribute', 10, 2);
}
add_action('wp_enqueue_scripts', 'speed_epaviste_enqueue_assets');

// Add defer attribute to scripts for better PageSpeed
function speed_epaviste_add_defer_attribute($tag, $handle) {
    if (strpos($handle, 'speed-epaviste') !== false) {
        return str_replace(' src', ' defer src', $tag);
    }
    return $tag;
}

// Include refactored function files
$function_files = array(
    'inc/seo-functions.php',
    'inc/performance-functions.php',
    'inc/template-functions.php',
    'inc/template-tags.php'
);

foreach ($function_files as $file) {
    $full_path = get_template_directory() . '/' . $file;
    if (file_exists($full_path)) {
        require $full_path;
    }
}

// Contact form handler
function speed_epaviste_handle_contact_form() {
    if (!isset($_POST['contact_form_nonce']) || !wp_verify_nonce($_POST['contact_form_nonce'], 'contact_form_action')) {
        wp_die('Security check failed');
    }
    
    $name = sanitize_text_field($_POST['name']);
    $email = sanitize_email($_POST['email']);
    $phone = sanitize_text_field($_POST['phone']);
    $address = sanitize_textarea_field($_POST['address']);
    $vehicle_info = sanitize_textarea_field($_POST['vehicle_info']);
    $message = sanitize_textarea_field($_POST['message']);
    
    // Save to database or send email
    $contact_data = array(
        'name' => $name,
        'email' => $email,
        'phone' => $phone,
        'address' => $address,
        'vehicle_info' => $vehicle_info,
        'message' => $message,
        'date' => current_time('mysql')
    );
    
    // You can add email sending or database saving logic here
    
    wp_redirect(add_query_arg('contact_sent', '1', wp_get_referer()));
    exit;
}
add_action('admin_post_contact_form', 'speed_epaviste_handle_contact_form');
add_action('admin_post_nopriv_contact_form', 'speed_epaviste_handle_contact_form');

// Remove unnecessary WordPress features for better performance
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'start_post_rel_link');
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'adjacent_posts_rel_link');
remove_action('wp_head', 'wp_shortlink_wp_head');

// Disable emoji scripts for better performance
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
