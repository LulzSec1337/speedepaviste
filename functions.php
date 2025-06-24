<?php
/**
 * Speed Épaviste functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Speed_Epaviste
 */

if ( ! function_exists( 'speed_epaviste_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function speed_epaviste_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Speed Épaviste, use a find and replace
		 * to change 'speed-epaviste' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'speed-epaviste', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'speed-epaviste' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
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

		// Set up the WordPress core custom background feature.
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

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
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

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function speed_epaviste_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'speed_epaviste_content_width', 640 );
}
add_action( 'after_setup_theme', 'speed_epaviste_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
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

// Enqueue styles and scripts
function speed_epaviste_enqueue_assets() {
    // Main stylesheet (imports all modular CSS)
    wp_enqueue_style('speed-epaviste-style', get_stylesheet_uri(), array(), '3.0.0');
    
    // Enqueue modular CSS files individually for better caching
    wp_enqueue_style('speed-epaviste-base', get_template_directory_uri() . '/css/base.css', array(), '3.0.0');
    wp_enqueue_style('speed-epaviste-header', get_template_directory_uri() . '/css/header.css', array(), '3.0.0');
    wp_enqueue_style('speed-epaviste-components', get_template_directory_uri() . '/css/components.css', array(), '3.0.0');
    wp_enqueue_style('speed-epaviste-responsive', get_template_directory_uri() . '/css/responsive.css', array(), '3.0.0');
    wp_enqueue_style('speed-epaviste-animations', get_template_directory_uri() . '/css/animations.css', array(), '3.0.0');
    
    // Core JavaScript (inline for critical functionality)
    wp_add_inline_script('jquery', '
        // Core mobile menu and essential functions
        (function($) {
            $(document).ready(function() {
                $("#mobile-menu-toggle").on("click", function() {
                    const expanded = $(this).attr("aria-expanded") === "true";
                    $(this).attr("aria-expanded", !expanded);
                    $("#mobile-menu-items").toggleClass("hidden");
                    $("#menu-icon").toggleClass("hidden");
                    $("#close-icon").toggleClass("hidden");
                });
            });
        })(jQuery);
    ');
    
    // Main JavaScript file
    wp_enqueue_script('speed-epaviste-main', get_template_directory_uri() . '/main.js', array('jquery'), '3.0.0', true);
    
    // Localize script for AJAX and theme data
    wp_localize_script('speed-epaviste-main', 'speedEpavisteTheme', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('speed_epaviste_nonce'),
        'theme_url' => get_template_directory_uri()
    ));
}
add_action('wp_enqueue_scripts', 'speed_epaviste_enqueue_assets');

// Enqueue admin styles and scripts
function speed_epaviste_admin_enqueue_assets($hook) {
    // Only load on our admin pages
    if (strpos($hook, 'speed-epaviste') !== false) {
        wp_enqueue_style('speed-epaviste-admin', get_template_directory_uri() . '/admin-style.css', array(), '3.0.0');
        wp_enqueue_script('speed-epaviste-admin', get_template_directory_uri() . '/admin-script.js', array('jquery'), '3.0.0', true);
        
        wp_localize_script('speed-epaviste-admin', 'speedEpavisteAdmin', array(
            'ajax_url' => admin_url('admin-ajax.php'),
            'nonce' => wp_create_nonce('speed_epaviste_admin_nonce')
        ));
    }
}
add_action('admin_enqueue_scripts', 'speed_epaviste_admin_enqueue_assets');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
