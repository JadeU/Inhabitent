<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package Inhabitent_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function inhabitent_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	if ( is_singular( 'page' ) ) {
		global $post;
		$classes[] = 'page-' . $post->post_name;
	}

	return $classes;
}
add_filter( 'body_class', 'inhabitent_starter_body_classes' );


function inhabitent_custom_login() {
	   echo '<style> 
	   #login h1 a { background-image:url('.get_template_directory_uri().'/images/inhabitent-logo-text.svg) 
		!important; height:100px 
		!important; 
		width:400px !important; 
		background-size: auto auto !important;
	 }</style>';
}
add_action('login_head', 'inhabitent_custom_login'); 


function custom_inhabitent_login_url() {
	return home_url();
}
add_filter('login_headerurl', 'custom_inhabitent_login_url');

