<?php
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' )
     )
   );
 }
 add_action( 'init', 'register_my_menus' );
 function admin_bar(){

    if(is_user_logged_in()){
      add_filter( 'show_admin_bar', '__return_true' , 1000 );
    }
  }
  add_action('init', 'admin_bar' );
  add_theme_support( 'post-thumbnails' );
  function theme_setup() {
    add_theme_support('widgets');
}
add_action('after_setup_theme', 'theme_setup');

  function register_marine_contact_info_widget() {
    register_widget('Marine_Contact_Info_Widget');
}
include_once get_template_directory() . '/widgets/marine-contact-info-widget.php';
add_action('widgets_init', 'register_marine_contact_info_widget');

function custom_theme_widgets_init() {
  register_sidebar(array(
      'name'          => esc_html__('Custom Sidebar', 'textdomain'),
      'id'            => 'custom-sidebar',
      'description'   => esc_html__('Add widgets here.', 'textdomain'),
      'before_widget' => '<section id="%1$s" class="widget %2$s">',
      'after_widget'  => '</section>',
      'before_title'  => '<h2 class="widget-title">',
      'after_title'   => '</h2>',
  ));
}
add_action('widgets_init', 'custom_theme_widgets_init');