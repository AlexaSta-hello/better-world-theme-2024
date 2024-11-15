<?php

function register_my_styles () {
    wp_enqueue_style( 'bw-main-style', get_stylesheet_uri());
    wp_enqueue_style( 'nunito-sans-font', get_template_directory_uri() . '/assets/fonts/nunito-sans/font-style.css' );
    wp_enqueue_style( 'righteous-font', get_template_directory_uri() . '/assets/fonts/righteous/font-style.css' );
    wp_get_theme()->get ('Version');
}

add_action('wp_enqueue_scripts', 'register_my_styles');


function remove_wpautop_on_pages() {
  // Wenn es eine Seite ist oder die Front-Page
  if ( is_page() || is_front_page() ) {
      remove_filter( 'the_content', 'wpautop' );
  }
}
// Hook in WordPress laden
add_action('wp', 'remove_wpautop_on_pages');

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'footer-menu' => __( 'Footer Menu' ),
      'mobile-menu' => __( 'Mobile Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

function mytheme_custom_logo_setup() {
  add_theme_support( 'custom-logo', array(
      'height'      => 100, 
      'width'       => 200, 
      'flex-height' => true, 
      'flex-width'  => true, 
  ));
}
add_action( 'after_setup_theme', 'mytheme_custom_logo_setup' );



function register_my_widgets() {

register_sidebar (array (
  'name'    => 'Footer Widgets',
  'id'      => 'footer-widgets',
  'before_widget'   => '<div>',
  'after_widget'    => '</div>',
));
  

register_sidebar (array (
  'name'    => 'Sidebar Widgets',
  'id'      => 'side-widgets'
));
}  
add_action ('widgets_init', 'register_my_widgets');


  // Beitragsbilder aktivieren
add_theme_support('post-thumbnails');




// JS Datei für Animationen einbinden
/*function enqueue_slogan_animations_script() {
  
}
add_action( 'wp_enqueue_scripts', 'enqueue_slogan_animations_script' );

function enqueue_slogan_projects_animations_script() {
  
}
add_action( 'wp_enqueue_scripts', 'enqueue_slogan_projects_animations_script' );*/

function enqueue_meine_scripts() {
  wp_enqueue_script( 'leistungen-animations', get_template_directory_uri() . '/js/leistungen-animations.js', array(), null, true );
  wp_enqueue_script ('project-slider', get_template_directory_uri() . '/js/project-slider.js', array(), null, true);
  wp_enqueue_script( 'slogan-animations', get_template_directory_uri() . '/js/slogan-animations.js', array(), null, true );
  wp_enqueue_script( 'slogan-projects-animations', get_template_directory_uri() . '/js/slogan-projects-animations.js', array(), null, true );
  wp_enqueue_script( 'leistungen-slider', get_template_directory_uri() . '/js/leistungen-slider.js', array(), null, true );
}
add_action( 'wp_enqueue_scripts', 'enqueue_meine_scripts' );

