<?php

function register_my_styles () {
    wp_enqueue_style( 
      'bw-main-style', 
      get_stylesheet_uri(),
    wp_get_theme()->get ('Version'));
}

add_action('wp_enqueue_scripts', 'register_my_styles');

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'footer-menu' => __( 'Footer Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );


function register_my_widgets() {

register_sidebar (array (
  'name'    => 'Header Widgets',
  'id'      => 'header-widgets',
  'before_widget'   => '<div>',
  'after_widget'    => '</div>',
));
  

// hier haben wir die <div>s mit "Gruppe" im WP-Backend gelöst.
register_sidebar (array (
  'name'    => 'Sidebar Widgets',
  'id'      => 'side-widgets'
));
}
  
  add_action ('widgets_init', 'register_my_widgets');


  // Beitragsbilder aktivieren
add_theme_support('post-thumbnails');
