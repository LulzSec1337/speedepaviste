
<?php
/**
 * WordPress optimization functions
 * 
 * @package Speed_Epaviste
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Remove unnecessary WordPress features for better performance
 */
function speed_epaviste_remove_unnecessary_features() {
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
}
add_action('init', 'speed_epaviste_remove_unnecessary_features');
