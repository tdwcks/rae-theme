<?php get_header(); ?>
  <body>
    <?php get_template_part('header-menu'); ?>
    <main id="blog-main" class="main">
    <header class="header">
      <div class="container">
        <h1>Blog</h1>
      </div>
    </header>
    <section id="blog-index">
      </header>
        <div class="container">
            <?php
              // The Query
              $query_args = array(
                'post_type'=>'blogpost',
                'posts_per_page' => 1000, 
                'paged' => $paged
              );

              $the_query = new WP_Query( $query_args );
              $count;

              // The Loop
              if ( $the_query->have_posts() ) {
                while ( $the_query->have_posts() ) {
                  $the_query->the_post();
                  $count++;
              ?>
                <div class="g--third <?php if( $count == 3 || $count == 6 || $count == 9 || $count == 12 || $count == 15 || $count == 18 || $count == 21 || $count == 24 || $count == 27 || $count == 30 || $count == 33 || $count == 36 || $count == 39 || $count == 39 || $count == 42 || $count == 45 || $count == 48 || $count == 51 || $count == 54 || $count == 57 || $count == 60 || $count == 63 || $count == 66 || $count == 69 || $count == 72 || $count == 75 || $count == 78 || $count == 81 || $count == 84 || $count == 87 || $count == 90 || $count == 93 || $count == 96 || $count == 99) {echo 'g--last';}?>">
                  <div class="post-container">
                    <a href="<?php the_permalink(); ?>">
                      <?php 
                        if ( has_post_thumbnail() ) { 
                          the_post_thumbnail('blog-thumbnail-image'); 
                        }
                      ?>
                    </a>
                      <div class="post-text">
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <p><?php echo get_the_excerpt(20); ?></p>
                        <a href="<?php the_permalink(); ?>" class="full-post-link">Read more</a>
                      </div>
                    </div>
                  </div>
                <?php
                  }
              } else {
                // no posts found
              }
            ?>
          <div class="clearfix"></div>
            
        </div>
      </section>
    </main>
    <?php get_footer(); ?>
