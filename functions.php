<?php
/**
 * AuralWorth functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package AuralWorth
 */

/* Enqueue styles and scripts */
function aural_worth_enqueue_assets() {
  /* theme's primary style.css file (root) */
  wp_enqueue_style( 'main-css' , get_stylesheet_uri() );

  /* template's primary css file */
  wp_enqueue_style( 'aural-worth-styling' , get_template_directory_uri() . '/assets/css/style.css' );
  wp_enqueue_style( 'font-awesome' , get_template_directory_uri() . '/assets/css/font-awesome.min.css' );

	wp_enqueue_script('jquery');
	wp_enqueue_script( 'jquery-dropotron' , get_template_directory_uri() . '/assets/js/jquery.dropotron.min.js' );
	wp_enqueue_script( 'jquery-scrollex' , get_template_directory_uri() . '/assets/js/jquery.scrollex.min.js' );
	wp_enqueue_script( 'jquery-scrolly' , get_template_directory_uri() . '/assets/js/jquery.scrolly.min.js' );
  wp_enqueue_script( 'skel' , get_template_directory_uri() . '/assets/js/skel.min.js' );
  wp_enqueue_script( 'util' , get_template_directory_uri() . '/assets/js/util.js' );
  wp_enqueue_script( 'aural-worth-js' , get_template_directory_uri() . '/assets/js/main.js' );
}
add_action( 'wp_enqueue_scripts' , 'aural_worth_enqueue_assets' );
