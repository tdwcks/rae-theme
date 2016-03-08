<?php get_header(); ?>
  <body>
    <?php get_template_part('header-menu'); ?>

    <main id="press-main" class="main">
      <header class="header">
        <div class="container">
          <h1>Press</h1>
        </div>
      </header>
      <div class="container push-down">
        <div class="g--third">
            <?php
              // The Query
              $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
              $query_args = array(
                'post_type'=>'press',
                'posts_per_page' => 2,
                'paged' => $paged
              );

              $the_query = new WP_Query( $query_args );

              // The Loop
              if ( $the_query->have_posts() ) {
            ?>

            <h2>Press news</h2>
            <div class="press-post-container green-divider">

            <?php
                while ( $the_query->have_posts() ) {
                  $the_query->the_post();
            ?>
            <div class="press-post">

              <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?><span><img src="http://devhok.nl/rae/ui-arrow-next.svg"></span></a></h3>
              <?php the_excerpt(); ?>

            </div>
              <?php
                }
              ?>
            </div>
            <?php
              } else {
                // no posts found
              }
              /* Restore original Post Data */
              wp_reset_postdata();
            ?>
          <h2>Press kit</h2>
          <div class="green-divider">
            <h3>RUN AN EMPIRE Press kit</h3>
            <a href="http://www.runanempire.com/wp-content/uploads/2015/11/Run-An-Empire-Press-Kit-November-2015-.pdf" class="button-link button-red">DOWNLOAD</a>
          </div>
        </div>
        <div class="g--two--third g--last">
          <h2>About the team</h2>
          <div class="green-divider">
            <p>
              Run An Empire is founded by Ben Barker and Sam Hill and based in London's Somerset House.
            </p>
            <p>
              Ben and Sam are experience designers and play-makers. They have been making playful experiences together since 2010 and have spoken internationally about the value of play, narrative, experience and memory in the urban environment and as part of every-day living.
            </p>
            <p>They have also built:</p>
            <p>
              <a href="http://hellolamppost.co.uk/">Hello Lamppost</a> - a tourable, city-wide experience that allows people to share thoughts, observations and memories in conversation with street furniture (benches, bus stops, letterboxes and parking meters etc). Hello Lamppost was commissioned for the Playable City Award and nominated for Design of The Year 2014 at the Design Museum, London.
            </p>
            <p>
              <a href="http://panstudio.co.uk/2014/09/a-fork-in-the-road/">A Fork In The Road</a> - part storytelling platform, part tour-guide, part text-adventure game, A Fork In The Road uses the pathways and road networks of the city as a framework for generating interactive narratives. The system has toured in London, Moscow and Indianapolis.
            </p>
          </div>
          <h2>Press enquiries</h2>
          <div class="green-divider">
            <p>
              For press enquiries, please contact <a href="mailto:press@runanempire.com">press@runanempire.com</a> or call 0207 0330 346
            </p>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </main>

<?php get_footer(); ?>
    
