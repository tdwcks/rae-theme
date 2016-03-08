<?php get_header(); ?>

  <?php get_template_part('header-menu'); ?>
  <main id="faq-main" class="main">
    <header class="header">
      <div class="container">
        <h1>Careers</h1>
      </div>
    </header>
    <div class="container">
      <div class="g--two--third g--centered g--last">
        <ul class="dynamic-list">
          <?php
            // The Query
            $args_faq = array(
              'post_type' => 'careers',
              'posts_per_page' => 10
            );

            $query_faq = new WP_Query( $args_faq );

            $oddRow = array();
            $evenRow = array();

            $count = 0;

            // The Loop
            if ( $query_faq->have_posts() ) {
              while ( $query_faq->have_posts() ) {
                $query_faq->the_post();
                $count++;

                ?>
                  <li>
                    <h4><?php echo get_the_title(); ?></h4>
                    <p><?php echo get_the_content(); ?></p>
                  </li>
                <?php
              }

            } else {
              // no posts found
            }
            /* Restore original Post Data */
            wp_reset_postdata();
          ?>
        </ul>
        <h3 class="centered push-up">To respond to any of the above opportunites or for more details please <a href="mailto:ben.barker@runanempire.com"><strong>email us here</strong></a> </h3>
        
      </div>
    </div>
  </main>

<?php get_footer(); ?>

