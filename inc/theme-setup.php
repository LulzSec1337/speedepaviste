
<?php
/**
 * Theme setup and initialization functions
 * 
 * @package Speed_Epaviste
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Theme setup function
 */
if (!function_exists('speed_epaviste_setup')) :
    function speed_epaviste_setup() {
        load_theme_textdomain('speed-epaviste', get_template_directory() . '/languages');
        add_theme_support('automatic-feed-links');
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');

        register_nav_menus(
            array(
                'menu-1' => esc_html__('Primary', 'speed-epaviste'),
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

        add_theme_support('customize-selective-refresh-widgets');

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
add_action('after_setup_theme', 'speed_epaviste_setup');

/**
 * Set content width
 */
function speed_epaviste_content_width() {
    $GLOBALS['content_width'] = apply_filters('speed_epaviste_content_width', 640);
}
add_action('after_setup_theme', 'speed_epaviste_content_width', 0);

/**
 * Register widget area
 */
function speed_epaviste_widgets_init() {
    register_sidebar(
        array(
            'name'          => esc_html__('Sidebar', 'speed-epaviste'),
            'id'            => 'sidebar-1',
            'description'   => esc_html__('Add widgets here.', 'speed-epaviste'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
}
add_action('widgets_init', 'speed_epaviste_widgets_init');
