<?php
/**
 * AuralWorth functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package AuralWorth
 */

/**
 * Enqueue styles and scripts
 */
function aural_worth_enqueue_assets() {
  /* theme's primary style.css file (root) */
  wp_enqueue_style( 'main-css' , get_stylesheet_uri() );

  /* template's primary css file */
  wp_enqueue_style( 'aural-worth-styling' , get_template_directory_uri() . '/assets/css/style.css' );
  wp_enqueue_style( 'aural-worth-styling' , get_template_directory_uri() . '/assets/css/custom-style.css' );
  wp_enqueue_style( 'font-awesome' , 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );

	wp_enqueue_script('jquery');
	wp_enqueue_script( 'jquery-dropotron' , get_template_directory_uri() . '/assets/js/jquery.dropotron.min.js' );
	wp_enqueue_script( 'jquery-scrollex' , get_template_directory_uri() . '/assets/js/jquery.scrollex.min.js' );
	wp_enqueue_script( 'jquery-scrolly' , get_template_directory_uri() . '/assets/js/jquery.scrolly.min.js' );
  wp_enqueue_script( 'skel' , get_template_directory_uri() . '/assets/js/skel.min.js' );
  wp_enqueue_script( 'util' , get_template_directory_uri() . '/assets/js/util.js' );
  wp_enqueue_script( 'aural-worth-js' , get_template_directory_uri() . '/assets/js/main.js' );
}
function revcon_change_post_label() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'Services';
    $submenu['edit.php'][5][0] = 'Services';
    $submenu['edit.php'][10][0] = 'Add Service';
    $submenu['edit.php'][16][0] = 'Service Tags';
}
function revcon_change_post_object() {
    global $wp_post_types;
    $labels = &$wp_post_types['post']->labels;
    $labels->name = 'Services';
    $labels->singular_name = 'Service';
    $labels->add_new = 'Add Service';
    $labels->add_new_item = 'Add Service';
    $labels->edit_item = 'Edit Service';
    $labels->new_item = 'Service';
    $labels->view_item = 'View Service';
    $labels->search_items = 'Search Service';
    $labels->not_found = 'No Service found';
    $labels->not_found_in_trash = 'No Service found in Trash';
    $labels->all_items = 'All Service';
    $labels->menu_name = 'Service';
    $labels->name_admin_bar = 'Service';
}

/**
 * Custom Post Type Creation
 */
function create_posttypes() {
  // Team Members Custome Post Type
  register_post_type( 'members',
    // CPT Options
    array(
      'labels' => array(
          'name' => __( 'Members' ),
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

// Theme setup
add_action( 'init', 'create_posttypes' );
add_action( 'wp_enqueue_scripts' , 'aural_worth_enqueue_assets' );
add_action( 'admin_menu', 'revcon_change_post_label' );
add_action( 'init', 'revcon_change_post_object' );

// Theme support
add_theme_support( 'post-thumbnails' );

//
