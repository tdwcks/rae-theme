<?php get_header(); ?>
  <body>
    <?php get_template_part('header-menu'); ?>

    <main id="blog-main" class="main">
      <header class="header">
        <div class="container">
          <h1>Blog</h1>
        </div>
      </header>
      <div class="container">
        <?php
          // The Query
          $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
          $query_args = array(
            'post_type'=>'blogpost',
            'posts_per_page' => 5,
            'paged' => $paged
          );

          $the_query = new WP_Query( $query_args );

          // The Loop
          if ( $the_query->have_posts() ) {
            while ( $the_query->have_posts() ) {
              $the_query->the_post();
        ?>
          <div class="blog-post">

            <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
            <h3><?php the_date(); ?> Posted By: <?php the_author_meta('nickname'); ?></h3>
            <div class="blog-post-image green-divider">
              <?php 
                if ( has_post_thumbnail() ) { 
                  the_post_thumbnail('blog-featured-image'); 
                }
              ?>
              <div class="clearfix"></div>
            </div>
            <div class="blog-content">
              <div class="blog-post-text g--two--third">
                <?php the_content(); ?>                
                <a href="<?php the_permalink(); ?>#comments">Comments</a>
              </div>
              <div class="blog-post-social g--third g--last">
                <h3>Share</h3>
                <div class="social-btns">
                  <ul>
                    <li>
                      <a href="http://twitter.com/home?status=<?php the_title(); ?>+<?php the_permalink(); ?>" id="btn-twitter">
                        <img src="http://runanempire.com/wp-content/themes/rae-theme/images/svg/icon-twitter.svg" alt="Run An Empire twitter">
                      </a>
                    </li>
                    <li>
                      <a href="http://www.facebook.com/share.php?u=<?php the_permalink(); ?>" id="btn-facebook">
                        <img src="http://runanempire.com/wp-content/themes/rae-theme/images/svg/icon-facebook.svg" alt="Run An Empire facebook">
                      </a>
                    </li>
                    <li>
                      <a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" id="btn-googleplus">
                        <img src="http://runanempire.com/wp-content/themes/rae-theme/images/svg/icon-googleplus.svg" alt="Run An Empire google +">
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
            <?php
              }
            ?>
            <div class="blog-nav">
            <?php

                $big = 999999999; // need an unlikely integer

                echo paginate_links( array(
                  'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                  'format' => '?paged=%#%',
                  'current' => max( 1, get_query_var('paged') ),
                  'total' => $the_query->max_num_pages
                ) );

              } else {
                // no posts found
              }
              /* Restore original Post Data */
              wp_reset_postdata();
            ?>
          </div>
        </div>
      </main>

      <?php get_footer(); ?>
