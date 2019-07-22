<?php get_header(); ?>
      <main class="wrapper row">
        <div class="news col-md-9 col-md-push-3">
          <?php  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <section class="latest-news">
            <?php if ( has_post_thumbnail() ) { ?>
              <div class="thumbnail-img" style="background-image:url(<?php the_post_thumbnail_url( 'full' ); ?>)">
                <h2 class="news-title"><?php the_title(); ?></h2>
              </div>
            <?php }
            else { ?>
              <h2 class="news-title"><?php the_title(); ?></h2>
              <?php } ?>
            <div class="meta">
              <small class="category"><?php the_category(); ?></small>
              <small class="date"><?php the_time('j F, Y g:i'); ?></small>
            </div>
            <?php
            the_content();
          endwhile; ?>
          <div class="pagination">
            <?php next_posts_link( '<< Starsze wpisy' ); ?>
            <?php previous_posts_link( 'Nowsze wpisy >>' ); ?>
          </div>
          <?php
          endif; ?>
          </section>
          <hr>
          <section class="about-auth row">
            <div class="col-sm-3 avatar">
              <?php echo get_avatar( get_the_author_meta('ID'), 128); ?>
            </div>
            <div class="col-sm-9">
              <h2 class="auth-name"><?php the_author(); ?></h2>
              <p class="auth-desc"><?php echo get_the_author_meta('description'); ?></p>
            </div>
          </section>
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
