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
  wp_enqueue_style( 'font-awesome' , get_template_directory_uri() . 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );

	wp_enqueue_script('jquery');
	wp_enqueue_script( 'jquery-dropotron' , get_template_directory_uri() . '/assets/js/jquery.dropotron.min.js' );
	wp_enqueue_script( 'jquery-scrollex' , get_template_directory_uri() . '/assets/js/jquery.scrollex.min.js' );
	wp_enqueue_script( 'jquery-scrolly' , get_template_directory_uri() . '/assets/js/jquery.scrolly.min.js' );
  wp_enqueue_script( 'skel' , get_template_directory_uri() . '/assets/js/skel.min.js' );
  wp_enqueue_script( 'util' , get_template_directory_uri() . '/assets/js/util.js' );
  wp_enqueue_script( 'aural-worth-js' , get_template_directory_uri() . '/assets/js/main.js' );
}
add_action( 'wp_enqueue_scripts' , 'aural_worth_enqueue_assets' );

// Add thumbnail support for posts
add_theme_support( 'post-thumbnails' );

/**
 * Custom Post Type Creation
 */
function create_posttypes() {
  // Team Members Custome Post Type
  register_post_type( 'members',
    // CPT Options
    array(
      'labels' => array(
          'name' => __( 'Team Members' ),
          'singular_name' => __( 'Member' ),
          'description' => __( 'People who work on the AuralWorth Acoustics team.' )
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'members'),
      'supports' => array(
        'title',
        'editor',
        'excerpt',
        'thumbnail'
      )
    )
  );

  // Project Custom Post type
  register_post_type( 'projects',
    // Options
    array(
      'labels' => array(
        'name' => __( 'Projects' ),
        'singular_name' => __( 'Project' ),
        'description' => __( 'My projects' )
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'projects'),
      'supports' => array(
        'title',
        'editor',
        'excerpt',
        'thumbnail'
      )
    )
  );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttypes' );
