
<?php
/**
 * Speed Épaviste Theme Customizer
 *
 * @package Speed_Epaviste
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function speed_epaviste_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'speed_epaviste_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'speed_epaviste_customize_partial_blogdescription',
			)
		);
	}

	// Theme Colors Section
	$wp_customize->add_section(
		'speed_epaviste_colors',
		array(
			'title'    => __( 'Theme Colors', 'speed-epaviste' ),
			'priority' => 30,
		)
	);

	// Primary Color
	$wp_customize->add_setting(
		'primary_color',
		array(
			'default'           => '#0066cc',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'primary_color',
			array(
				'label'    => __( 'Primary Color', 'speed-epaviste' ),
				'section'  => 'speed_epaviste_colors',
				'settings' => 'primary_color',
			)
		)
	);
}
add_action( 'customize_register', 'speed_epaviste_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function speed_epaviste_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function speed_epaviste_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function speed_epaviste_customize_preview_js() {
	wp_enqueue_script( 'speed-epaviste-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'speed_epaviste_customize_preview_js' );
