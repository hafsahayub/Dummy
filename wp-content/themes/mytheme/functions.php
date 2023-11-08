<?php

//load stylsheet
function load_css()
{
    /*bootstrap is name of the stylesheet ~ 
      get_temp function tells the exact location of the theme ~ 
      array() depicts an array of dependencies, stylesheets that must load before this one ~
      false is version no of stylesheet ~
      all means all media types
      wp enqueue adds the stylesheet to be loaded
    */
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), false, 'all');
    wp_enqueue_style('main');
}
add_action('wp_enqueue_scripts','load_css');

//load javascript
function load_js()
{
    wp_enqueue_script('jquery');
    /* true: This parameter specifies whether the script should be loaded in the footer of the web page (after the content) rather than in the header. 
    Loading scripts in the footer can improve page load performance. */
    wp_register_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', false, true);
    wp_enqueue_script('bootstrapjs');

}
add_action('wp_enqueue_scripts','load_js');

//Theme options
add_theme_support('menus');

//Menus
register_nav_menus(
  array(
    'top_menu' => 'Top Menu Location',
    'mobile_menu' => 'Mobile Menu Location',
    'footer_menu' => 'Footer Menu Location'
  )

);