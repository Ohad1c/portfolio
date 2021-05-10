<?php

function enqueue_load_fa() {
  wp_enqueue_style( 'load-fa', 'https://use.fontawesome.com/releases/v5.5.0/css/all.css' );
}

add_action( 'wp_enqueue_scripts', 'enqueue_load_fa');  
  

/* load css */
function load_stylesheets()
{
  
  wp_register_style('style', get_template_directory_uri() . '/style.css', array(), false, 'all');
  wp_enqueue_style('style');
  
  
  wp_register_style('style-media-queries', get_template_directory_uri() . '/css/media-queries.css', array(), false, 'all');
  wp_enqueue_style('style-media-queries');
}

add_action('wp_enqueue_scripts', 'load_stylesheets');

/* load js */
function load_js()
{
  
  wp_register_script('customjs', get_template_directory_uri() . '/js/scripts.js', '', 1, true);
  wp_enqueue_script('customjs');
}
add_action('wp_enqueue_scripts', 'load_js');

/* adding nav */
add_theme_support('menus');

register_nav_menus(
  
  array (
    'top-menu' => ('Top Menu location'),
    'footer-menu' => ('Footer Menu'),
    
  )
  
);
  
  

/* adding projects post type */
function project_post_type()
{
  
  $args = array(
    
    'labels' => array(
      
      'name' => 'Projects',
      'singular_name' => 'Project'
      
     ),
    'hierarchical' => true,
    'public' => true, 
    'has_archive' => true, 
    'menu_icon' => 'dashicons-format-gallery',
    'supports' => array(''),
//    'supports' => array('title', 'editor', 'thumbnail'),
//    'rewrite' => array('slug' => 'projects'),
    
  );
  
  register_post_type('projects', $args);
      
}
add_action('init', 'project_post_type');


  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  




?>
