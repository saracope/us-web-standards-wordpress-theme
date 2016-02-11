<?php
/**
 * Jetpack Compatibility File
 * See: https://jetpack.me/
 *
 * @package US_Web_Standards
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function us_web_standards_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'us_web_standards_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function us_web_standards_jetpack_setup
add_action( 'after_setup_theme', 'us_web_standards_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function us_web_standards_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function us_web_standards_infinite_scroll_render

/**
* Add theme support for Responsive Videos.
*/
add_theme_support( 'jetpack-responsive-videos' );

/**
 * Add support for the Site Logo
 */
function us_web_standards_site_logo_init() {
	add_image_size( 'component-s-logo', 200, 200 );
	add_theme_support( 'site-logo', array( 'size' => 'component-s-logo' ) );
}
add_action( 'after_setup_theme', 'us_web_standards_site_logo_init' );

/**
 * Return early if Site Logo is not available.
 */
function us_web_standards_the_site_logo() {
	if ( ! function_exists( 'jetpack_the_site_logo' ) ) {
		return;
	} else {
		jetpack_the_site_logo();
	}
}

/**
* Add theme support for Testimonial CPT.
*/
add_theme_support( 'jetpack-testimonial' );
