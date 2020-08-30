<?php 
/*This file is part of Blog Bank child theme.

All functions of this file will be loaded before of parent theme functions.
Learn more at https://codex.wordpress.org/Child_Themes.

Note: this function loads the parent stylesheet before, then child theme stylesheet
(leave it in place unless you know what you are doing.)
*/
function blog_bank_classic_fonts_url() {
	$fonts_url = '';

		$font_families = array();

		$font_families[] = 'Roboto:400,600,700';
		$font_families[] = 'Crimson Pro:400';

		$query_args = array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => urlencode( 'latin,latin-ext' ),
		);

		$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );


	return esc_url_raw( $fonts_url );
}


function blog_bank_classic_enqueue_child_styles() {
	wp_enqueue_style( 'blog-bank-classic-google-font', blog_bank_classic_fonts_url(), array(), null );
	wp_enqueue_style( 'blog-bank-classic-parent-style', get_template_directory_uri() . '/style.css',array('bootstrap','owl.carousel','blog-bank-default','blog-bank-default', 'blog-bank-style'), '', 'all');
   wp_enqueue_style( 'blog-bank-classic-main',get_stylesheet_directory_uri() . '/assets/css/main.css',array(), '1.0.4', 'all');
  
}
add_action( 'wp_enqueue_scripts', 'blog_bank_classic_enqueue_child_styles');


/**
 * Customizer additions.
 */
require get_stylesheet_directory() . '/inc/customizer.php';

