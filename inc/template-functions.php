<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package another-koncept
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function another_koncept_body_classes( $classes ) {
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
add_filter( 'body_class', 'another_koncept_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function another_koncept_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'another_koncept_pingback_header' );


if( function_exists('acf_add_options_page') ) {
	
	// Add parent.
	$parent = acf_add_options_page(array(
		'page_title' 	=> 'Site Options',
		'menu_title'	=> 'Site Options',
		'menu_slug' 	=> 'theme-settings-site',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
		)
	);
	// Add sub page.
	$child = acf_add_options_sub_page(array(
		'page_title'  => __('Clients'),
		'menu_title'  => __('Clients'),
		'parent_slug' => $parent['menu_slug'],
	));
	$child = acf_add_options_sub_page(array(
		'page_title'  => __('Instructions'),
		'menu_title'  => __('Instructions'),
		'parent_slug' => $parent['menu_slug'],
	));		
}