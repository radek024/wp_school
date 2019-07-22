<?php
function newstheme_widget_setup(){
  register_sidebar(array(
    'name' => __('Sidebar', 'mesotheliomacircle'),
    'id' => 'sidebar-1',
    'description' => '',
    'before_widget' => '',
    'after_widget' => "",
    'before_title' => '<h2 class="widget-title">',
    'after_title' => "</h2>"
  ));


}

  add_action('widgets_init', 'newstheme_widget_setup');
