<?php
  function social_section($wp_customize){
    $wp_customize->add_section('section-1', array(
      'title'   => __('Panel Media', 'news_theme'),
      'description' => sprintf(__('Dostosuj media społecznościowe','news_theme')),
      'priority'    => 130
    ));
    $wp_customize->add_setting('s1-social-1', array(
      'default'   => _x('http://www.facebook.com', 'news_theme'),
      'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('s1-social-1', array(
      'label'   => __('Adres do Facebooka', 'news_theme'),
      'section' => 'section-1',
      'priority'  => 30
    ));
    $wp_customize->add_setting('s1-social-2', array(
      'default'   => _x('http://www.google.com', 'news_theme'),
      'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('s1-social-2', array(
      'label'   => __('Adres do Google+', 'news_theme'),
      'section' => 'section-1',
      'priority'  => 30
    ));
    $wp_customize->add_setting('s1-social-3', array(
      'default'   => _x('http://www.youtube.com', 'news_theme'),
      'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('s1-social-3', array(
      'label'   => __('Adres do YouTube', 'news_theme'),
      'section' => 'section-1',
      'priority'  => 40
    ));
}
  add_action('customize_register', 'social_section');
