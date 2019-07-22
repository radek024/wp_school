<?php
  function moto_enqueue_scripts(){
    wp_enqueue_style('bootstrap', get_template_directory_uri().'/css/bootstrap.min.css', array(), 1.0, 'all');
    wp_enqueue_style('customstyle', get_template_directory_uri().'/style.css', array(), 1.0, 'all');
    wp_enqueue_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css', array(), 1.0, 'all');
    wp_enqueue_style('font', 'https://fonts.googleapis.com/css?family=Lato:400,700,900', array(), 1.0, 'all');

  	wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '3.3.4', true);
  }

  add_action('wp_enqueue_scripts', 'moto_enqueue_scripts');

  add_theme_support('post-thumbnails');
  add_theme_support('menus');

  register_nav_menus(array('top-menu' => __('Menu główne')));
  register_nav_menus(array('aside-menu' => __('Menu poboczne')));

  function add_menuclass($ulclass) {
   return preg_replace('/<a /', '<a class="link"', $ulclass);
  }

  add_filter('wp_nav_menu','add_menuclass');

    function set_excerpt_length(){
        return 20;
    }

    add_filter('excerpt_length', 'set_excerpt_length');

    add_filter('next_posts_link_attributes', 'next_page');
    add_filter('previous_posts_link_attributes', 'previous_page');

  function next_page() {
        return 'class="btn btn-lg btn-info"';
    }

  function previous_page() {
        return 'class="btn next btn-lg btn-info"';
    }

  require_once('/inc/wp_bootstrap_navwalker.php');
  require_once('/inc/custom-sidebar.php');
  require get_template_directory(). '/inc/customizer.php';
