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

//Image option
add_theme_support('post-thumbnails');

//Widgets
add_theme_support('widgets');

//Menus
register_nav_menus(
  array(
    'top_menu' => 'Top Menu Location',
    'mobile_menu' => 'Mobile Menu Location',
    'footer_menu' => 'Footer Menu Location'
  )

);

//Custom image sizes
add_image_size('blog-large', 800, 600, false);
add_image_size('blog-small', 300, 200, true);

//Register sidebars
function my_sidebars()
{
  register_sidebar(
             array(
              'name' => 'Page Sidebar',
              'id'=> 'page-sidebar',
              'before_title'=> '<h4 class ="widget-title">',
              'after_title'=> '</h4>'
             )
             );
  register_sidebar(
              array(
               'name' => 'Blog Sidebar',
               'id'=> 'blog-sidebar',
               'before_title'=> '<h4 class ="widget-title">',
               'after_title'=> '</h4>'
              )
              );
}
add_action('widgets_init', 'my_sidebars');

//Custom post types
function post_type()
{

  $args = array(
    'public' =>true,
    'has_archive' => true,
    'supports'=>array('title','editor','thumbnail'),
    //'rewrite'=>array('slug')

  );

  register_post_type('cars', $args);

}
//init hook:It loads before the actual website loads
add_action('init', 'post_type');