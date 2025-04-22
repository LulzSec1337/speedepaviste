
<?php
/**
 * Speed Epaviste functions and definitions, SEO-ready
 */

// Theme support
function speed_epaviste_setup() {
  add_theme_support('automatic-feed-links');
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('custom-logo', array(
    'height'      => 250,
    'width'       => 250,
    'flex-width'  => true,
    'flex-height' => true,
  ));
  register_nav_menus(array(
    'primary' => esc_html__('Primary', 'speed-epaviste'),
    'footer-services' => esc_html__('Footer Services', 'speed-epaviste'),
    'footer-zones' => esc_html__('Footer Zones', 'speed-epaviste'),
  ));
}
add_action('after_setup_theme', 'speed_epaviste_setup');

// Enqueue scripts and styles
function speed_epaviste_scripts() {
  wp_enqueue_style('speed-epaviste-style', get_stylesheet_uri(), [], filemtime(get_stylesheet_directory() . '/style.css'));
  // Prefetch Google Fonts for SEO (example: add your fonts as desired)
  wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap', false);
}
add_action('wp_enqueue_scripts', 'speed_epaviste_scripts');

// Widget area
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

// Add meta description tag for SEO
function speed_epaviste_meta_description() {
  if (is_singular()) {
    global $post;
    $desc = '';
    if (has_excerpt($post->ID)) {
      $desc = get_the_excerpt($post->ID);
    } elseif (!empty($post->post_content)) {
      $desc = wp_trim_words(strip_shortcodes(strip_tags($post->post_content)), 25);
    }
    if ($desc) {
      echo '<meta name="description" content="' . esc_attr($desc) . '">' . "\n";
    }
  }
}
add_action('wp_head', 'speed_epaviste_meta_description', 1);

