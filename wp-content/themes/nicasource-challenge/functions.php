<?php
 /**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

// app passwords
add_filter( 'wp_is_application_passwords_available', '__return_true' );

// Nicasource challenge functions.php file
function nicasource_theme_scripts()
{
  // adding bs4 styles
  wp_enqueue_style('bs4-css', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '4.6');

  // adding nicasource theme stylesheet
  wp_enqueue_style('style', get_stylesheet_uri());

  wp_enqueue_script('popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js', array('jquery'), '1.14', true);

  wp_enqueue_script('bs4-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('popper'), '4.6');

  // custom js
  wp_enqueue_script('app-js', get_template_directory_uri() . '/js/app.js', array('bs4-js'), 1.0, true);
}
add_action('wp_enqueue_scripts', 'nicasource_theme_scripts');


function nicasource_setup(){
  
  // featured images support
  if (function_exists('add_theme_support')) {
    add_theme_support('post-thumbnails');
  }
  add_theme_support('title-tag');
}

add_action('after_setup_theme', 'nicasource_setup');

// registering sidebar
function nicasource_widgets()
{
  register_sidebar(array(
    'id' => 'nicasource-sidebar',
    'name'          => __('Right Sidebar'),
    'description'   => __('Quick rendering of widgets for right aside.'),
    'before_widget' => '<div class="card-body">',
    'after_widget' => '</div>',
    'before_title' => '<h4>',
    'after_title' => '</h4><hr>'
  ));
}
add_action('widgets_init', 'nicasource_widgets');

// registering menus
function nicasource_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' )
     )
   );
 }
 add_action( 'init', 'nicasource_menus' );