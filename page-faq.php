<?php get_header(); ?>

  <?php get_template_part('header-menu'); ?>
  <main id="faq-main" class="main">
    <header class="header">
      <div class="container">
        <h1>FAQ</h1>
      </div>
    </header>
    <div class="container">
      <div class="g--two--third g--centered g--last">
        <ul class="dynamic-list">
          <?php
            // The Query
            $args_faq = array(
              'post_type' => 'faq',
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
        <h3 class="centered push-up">Got a question that hasn't been answered?</h3>
        <div class="social-btns">
          <ul>
            <li>
              <a href="https://twitter.com/RunAnEmpire" id="btn-twitter">
                <img src="http://runanempire.com/wp-content/themes/rae_theme/images/svg/icon-twitter.svg" alt="Run An Empire twitter">
              </a>
              <p>
                Ask us on Twitter
              </p>
            </li>
            <li>
              <a href="https://www.facebook.com/RunAnEmpire" id="btn-facebook">
                <img src="http://runanempire.com/wp-content/themes/rae_theme/images/svg/icon-facebook.svg" alt="Run An Empire facebook">
              </a>
              <p>
                Ask us on Facebook
              </p>
            </li>
            <li>
              <a href="https://plus.google.com/108125746965500673283" id="btn-googleplus">
                <img src="http://runanempire.com/wp-content/themes/rae_theme/images/svg/icon-googleplus.svg" alt="Run An Empire google+">
              </a>
              <p>
                Ask us on Google+
              </p>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </main>

<?php get_footer(); ?>

