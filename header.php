<!doctype html>
<html lang="en">
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php bloginfo('name'); ?></title>
        <meta name="description" content="<?php bloginfo('description'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class();?> >
    <header class="entry-header">
      <div class="wrapper">
        <img src="<?php echo get_site_icon_url() ?>" alt="" class="header-img">
        <h1 class="page-title"><?php bloginfo('name'); ?></h1>
      </div>
    </header>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <!-- <div class="collapse navbar-collapse" id="navbar">
          <ul class="nav navbar-nav wrapper">
            <li><a href="#">Start</a></li>
            <li><a href="#">Szkoła</a></li>
            <li><a href="#">Historia</a></li>
            <li><a href="#">Plan lekcji</a></li>
            <li><a href="#">Kontakt</a></li>
          </ul> -->
          <?php
           wp_nav_menu( array(
               'menu'              => 'top-menu',
               'theme_location'    => 'top-menu',
               'depth'             => 2,
               'container'         => 'div',
               'container_class'   => 'collapse navbar-collapse',
       'container_id'      => 'navbar',
               'menu_class'        => 'nav navbar-nav',
               'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
               'walker'            => new wp_bootstrap_navwalker())
           );
       ?>
        <!--</div> /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
