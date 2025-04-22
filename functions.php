
<?php
/**
 * Speed Epaviste functions and definitions
 */

// Add theme support
function speed_epaviste_setup() {
  // Add default posts and comments RSS feed links to head
  add_theme_support('automatic-feed-links');

  // Let WordPress manage the document title
  add_theme_support('title-tag');

  // Enable support for Post Thumbnails on posts and pages
  add_theme_support('post-thumbnails');

  // Add support for custom logo
  add_theme_support('custom-logo', array(
    'height'      => 250,
    'width'       => 250,
    'flex-width'  => true,
    'flex-height' => true,
  ));

  // Register nav menus
  register_nav_menus(array(
    'primary' => esc_html__('Primary', 'speed-epaviste'),
    'footer-services' => esc_html__('Footer Services', 'speed-epaviste'),
    'footer-zones' => esc_html__('Footer Zones', 'speed-epaviste'),
  ));
}
add_action('after_setup_theme', 'speed_epaviste_setup');

// Enqueue scripts and styles
function speed_epaviste_scripts() {
  wp_enqueue_style('speed-epaviste-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'speed_epaviste_scripts');

// Create a custom widget area
function speed_epaviste_widgets_init() {
  register_sidebar(array(
    'name'          => esc_html__('Sidebar', 'speed-epaviste'),
    'id'            => 'sidebar-1',
    'description'   => esc_html__('Add widgets here.', 'speed-epaviste'),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
  ));
}
add_action('widgets_init', 'speed_epaviste_widgets_init');
