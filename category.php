<?php get_header(); ?>
<main class="wrapper row">
  <div class="news col-md-9 col-md-push-3">
    <div class="label">
      <h2 class="label-title"><?php echo single_cat_title();?></h2>
    </div>
    <div class="category-descritpion"><?php echo category_description(); ?></div>
    <?php while (have_posts()) : the_post(); ?>
        <section class="latest-news">
            <h3 class="news-title"><?php the_title(); ?></h3>
          <p class="excerpt"><?php echo get_the_excerpt(); ?></p>
          <a class="btn btn-large btn-info" href="<?php the_permalink(); ?>">Czytaj dalej >></a>
        </section>
        <hr>
      <?php endwhile; ?>
<div class="pagination">
  <?php next_posts_link( '<< Starsze wpisy' ); ?>
  <?php previous_posts_link( 'Nowsze wpisy >>' ); ?>
</div>
  </div>
  <aside class="widgets col-md-3 col-md-pull-9">
    <section class="categories col-md-12 col-sm-4">
      <div class="label">
        <h3 class="label-title">Na szybko</h3>
      </div>
      <?php
       wp_nav_menu( array(
           'menu'              => 'aside-menu',
           'theme_location'    => 'aside-menu',
           'depth'             => 2,
           'container'         => '',
           'container_class'   => '',
   'container_id'      => 'navbar',
           'menu_class'        => 'links-list',
           'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
           'walker'            => new wp_bootstrap_navwalker())
       );
   ?>
    </section>
    <section class="categories col-md-12 col-sm-4">
      <div class="label">
        <h3 class="label-title">Mini info</h3>
      </div>
      <address>
              <?php dynamic_sidebar('sidebar-1') ?>
      </address>
    </section>
    <section class="categories col-md-12 col-sm-4">
      <div class="label">
        <h3 class="label-title">Media</h3>
      </div>
      <ul class="links-list socials">
        <li class="list-item"><a href="<?php echo get_theme_mod('s1-social-1', 'http://www.facebok.com'); ?>" class="link" ><i class="fa fa-3x fa-facebook-official" aria-hidden="true"></i></a></li>
        <li class="list-item"><a href="<?php echo get_theme_mod('s1-social-2', 'http://www.google.com'); ?>" class="link" ><i class="fa fa-3x fa-google-plus-square" aria-hidden="true"></i></a></li>
        <li class="list-item"><a href="<?php echo get_theme_mod('s1-social-3', 'http://www.youtube.com'); ?>" class="link" ><i class="fa fa-3x fa-youtube-square" aria-hidden="true"></i></a></li>
      </ul>
    </section>
  </aside>
</main>
<?php get_footer(); ?>
