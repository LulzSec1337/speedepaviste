
<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Speed_Epaviste
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function speed_epaviste_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'speed_epaviste_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function speed_epaviste_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'speed_epaviste_pingback_header' );

/**
 * Add SEO meta tags to head
 */
function speed_epaviste_seo_meta_tags() {
	// Get SEO options
	$seo_title = get_option('seo_title', get_bloginfo('name'));
	$seo_description = get_option('seo_description', get_bloginfo('description'));
	$seo_keywords = get_option('seo_keywords', 'épaviste, enlèvement épave, destruction automobile');
	
	// Basic SEO meta tags
	if (is_front_page()) {
		echo '<meta name="description" content="' . esc_attr($seo_description) . '">' . "\n";
		echo '<meta name="keywords" content="' . esc_attr($seo_keywords) . '">' . "\n";
	}
	
	// Open Graph tags
	echo '<meta property="og:title" content="' . esc_attr(is_front_page() ? $seo_title : wp_get_document_title()) . '">' . "\n";
	echo '<meta property="og:description" content="' . esc_attr($seo_description) . '">' . "\n";
	echo '<meta property="og:type" content="website">' . "\n";
	echo '<meta property="og:url" content="' . esc_url(get_permalink()) . '">' . "\n";
	echo '<meta property="og:site_name" content="' . esc_attr(get_bloginfo('name')) . '">' . "\n";
	
	// Twitter Card tags
	echo '<meta name="twitter:card" content="summary_large_image">' . "\n";
	echo '<meta name="twitter:title" content="' . esc_attr(is_front_page() ? $seo_title : wp_get_document_title()) . '">' . "\n";
	echo '<meta name="twitter:description" content="' . esc_attr($seo_description) . '">' . "\n";
}
add_action('wp_head', 'speed_epaviste_seo_meta_tags');
