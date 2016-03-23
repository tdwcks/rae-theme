<?php get_header(); ?>

  <body>
    <?php get_template_part('header-menu'); ?>
    <main id="front-page" class="main">
      <section id="introduction">
<!--         <div class="ribbon-box">
  <div class="ribbon-wrapper">
        <a href="https://www.crowdcube.com/investment/run-an-empire-20682" target="_blank"> <p> we are crowdfunding<br>invest in run an empire now!<br>capital at risk</p></a>
  </div>
</div> -->
        <div class="container">
          <div class="g--third">
            <!-- <div class="logo">
             <img src="http://runanempire.com/wp-content/themes/rae-theme/images/svg/logo-run-an-empire-white.svg" alt="Run an Empire logo">
            </div> -->
            <h1>A real world <br/> strategy running game</h1>
            <p class="explanation">Race against others to control the most territory in your local environment</p>
            <div class="buttons-holder">
              <?php echo do_shortcode('[CBC show="n" country="us"]<a class="link-app-store" href="http://www.google.com"></a>[/CBC]'); ?>
              <a href="https://twitter.com/RunAnEmpire" class="link-twitter"></a>
              <a href="https://www.facebook.com/RunAnEmpire/" class="link-facebook"></a>
            <!-- <div class="centered mobilehide"><a class="button-link button-green" href="#newsletter">Keep me updated</a></div> -->
            </div>
          </div>
          <div class="g--third g--last">
            <div class="iphone-bg">
                <div class="image"></div>
            </div>
          </div>
          <div class="clearfix"></div>
        </div>
      </section>
      <section id="game-features" class="slide-small mobile">
        <div class="container">
          <h1 class="centered mobilehide">Walk, jog or run <br /> around an area to capture it</h1>
          <div class="mobile-slider">
            <div class="g--third">
              <div class="feature">
                <div class="hexagon">
                  <img src="http://runanempire.com/wp-content/themes/rae-theme/images/svg/icon-scout.svg" alt="Scout" id="scout">
                </div>
                <h2>Scout</h2>
                <p>Claim new land <br /> in the name of your empire</p>
              </div>
            </div>
            <div class="g--third">
              <div class="feature">
                <div class="hexagon">
                  <img src="http://runanempire.com/wp-content/themes/rae-theme/images/svg/icon-skirmish.svg" alt="Skirmish" id="skirmish">
                </div>
                <h2>Skirmish</h2>
                <p>Invade neighbouring lands <br /> to expand your own borders</p>
              </div>
            </div>
            <div class="g--third g--last">
              <div class="feature last-feature">
                <div class="hexagon">
                  <img src="http://runanempire.com/wp-content/themes/rae-theme/images/svg/icon-secure.svg" alt="Secure" id="secure">
                </div>
                <h2>Secure</h2>
                <p>Keep opponents from stealing <br /> your territory by reinforcing it</p>
              </div>
            </div>
          </div>
          <div class="mobile-nav">
            <div class="mobile-nav-prev"><img src="<?php echo get_bloginfo('template_url') ?>/images/svg/ui-arrow-prev.svg" alt="Previous"></div>
            <div class="mobile-nav-next"><img src="<?php echo get_bloginfo('template_url') ?>/images/svg/ui-arrow-next.svg" alt="Next"></div>
          </div>
          <div class="clearfix"></div>
        </div>
      </section>
      <section id="demos" class="mobile">
        <div id="map"></div>
        <div class="hex-map"></div>
        <div class="mobile-slider">
          <section id="demo1" class="demo slide-large">
            <div class="phone-screenshots" id="screenshot-1">
              <div class="container">
                <div class="prettyfit-content">
                  <div class="g--third demo-text-left wow fadeInLeft" data-wow-offset="300">
                    <h2>Real Strategy</h2>
                    <p>All the careful planning of a strategy game...</p>
                  </div>
                  <div class="g--third"></div>
                  <div class="g--third g--last demo-text-right wow fadeInRight" data-wow-offset="300">
                    <h2>Real World</h2>
                    <p>...played through physical activity in the real world.</p>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>
          </section>
          <section id="demo2" class="demo slide-large">
            <div class="phone-screenshots" id="screenshot-2">
              <div class="container">
                <div class="prettyfit-content">
                  <div class="g--third demo-text-left wow fadeInLeft" data-wow-offset="400">
                    <h2>Accessible</h2>
                    <p>Not just for gifted athletes - determination wins against natural ability</p>
                  </div>
                  <div class="g--third"></div>
                  <div class="g--third g--last demo-text-right wow fadeInRight" data-wow-offset="400">
                    <h2>Simple</h2>
                    <p>Pure fun - no fiddly controls, no convoluted rules</p>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>
          </section>
          <section id="demo3" class="demo slide-large">
            <div class="phone-screenshots" id="screenshot-3">
              <div class="container">
                <div class="prettyfit-content">
                  <div class="g--third demo-text-left wow fadeInLeft" data-wow-offset="300">
                    <h2>Compete Against Others</h2>
                    <p>Take on your friends and neighbours</p>
                  </div>
                  <div class="g--third"></div>
                  <div class="g--third g--last demo-text-right wow fadeInRight" data-wow-offset="300">
                    <h2>Upgrade Your Crest</h2>
                    <p>Celebrate your victories and show the world what you can do</p>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>
          </section>
        </div>
        <div class="mobile-nav">
          <div class="mobile-nav-prev"><img src="<?php echo get_bloginfo('template_url') ?>/images/svg/ui-arrow-prev-white.svg" alt="Previous"></div>
          <div class="mobile-nav-next"><img src="<?php echo get_bloginfo('template_url') ?>/images/svg/ui-arrow-next-white.svg" alt="Next"></div>
        </div>
      </section>
      <!-- <section id="build-status" class="slide-medium">
        <div class="container">
          <div class="g--two--third g--centered">
            <h1>Build status</h1>
            <ul>
              <li>
                <h3>Concept</h3>
                <div class="build-status-hexagon build-status-complete">
                  <img src="http://runanempire.com/wp-content/themes/rae-theme/images/svg/buildstatus-complete.svg">
                </div>
              </li>
              <li>
                <h3>Design</h3>
                <div class="build-status-hexagon build-status-complete">
                  <img src="http://runanempire.com/wp-content/themes/rae-theme/images/svg/buildstatus-complete.svg">
                </div>
              </li>
              <li>
                <h3>Build</h3>
                <div class="build-status-hexagon build-status-complete">
		<img src="http://runanempire.com/wp-content/themes/rae-theme/images/svg/buildstatus-complete.svg">
               </div>
	      </li>
              <li>
                <h3>Test</h3>
                <div class="build-status-hexagon build-status-building">
                </div>
              </li>
              <li>
                <h3>Deploy</h3>
                <div class="build-status-hexagon build-status-cross">
                  <img src="http://runanempire.com/wp-content/themes/rae-theme/images/svg/buildstatus-cross.svg">
                </div>
              </li>
            </ul>
            <h3>Key dates</h3>
            <p><strong>Private Beta</strong></p>
            <p>iPhone - Live</p>
            <p>Android - TBA</p>
            <p class="publiclaunch"><strong>Public Launch</strong></p>
            <p>iPhone - Spring 2016</p>
            <p>Android - TBA</p>
          </div>
        </div>
      </section> -->

      <section id="blog" class="slide-large mobile">
        <div class="container">
          <h1>Latest news</h1>
          <div class="mobile-slider">
            <?php
              // The Query
              $query_args = array(
                'post_type'=>'blogpost',
                'posts_per_page' => 3
              );

              $the_query = new WP_Query( $query_args );

              $count;

              // The Loop
              if ( $the_query->have_posts() ) {
                while ( $the_query->have_posts() ) {
                  $the_query->the_post();

                  $count++;

              ?>
                <div class="g--third <?php if ($count == 3) {echo 'g--last';}?>">
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
              /* Restore original Post Data */
              wp_reset_postdata();
            ?>
          </div>
          <div class="mobile-nav">
            <div class="mobile-nav-prev"><img src="<?php echo get_bloginfo('template_url') ?>/images/svg/ui-arrow-prev-white.svg" alt="Previous"></div>
            <div class="mobile-nav-next"><img src="<?php echo get_bloginfo('template_url') ?>/images/svg/ui-arrow-next-white.svg" alt="Next"></div>
          </div>
          <div class="clearfix"></div>
          <div class="centered push-up"><a class="button-link button-red" href="<?php echo Site_url(); ?>/blog">View the blog</a></div>
        </div>
      </section>

      <section id="newsletter" class="slide-large">
        <div class="container">
          <div class="g--third g--centered form">
            <div id="mc_embed_signup">
              <form action="//panstudio.us6.list-manage.com/subscribe/post?u=0d85845f04d5157c053fc34f9&amp;id=a22c631190" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate="">
                <div class="newsletter-box">
                  <fieldset>
                    <h2>Sign up</h2>
                    <div class="indicates-required">* Required field</div>
                    <div class="mc-field-group">
                      <label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
                      </label>
                      <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" required>
                    </div>
                    <div class="mc-field-group">
                      <label for="mce-NAME">Name </label>
                      <input type="text" value="" name="NAME" id="mce-NAME">
                    </div>
                    <div class="mc-field-group">
                      <label for="mce-MMERGE2">Device </label>
                      <input type="text" value="" name="MMERGE2" id="mce-MMERGE2">
                    </div>
                    <div class="mc-field-group">
                      <label for="mce-MMERGE3">Town </label>
                      <input type="text" value="" name="MMERGE3" id="mce-MMERGE3">
                    </div>
                    <div class="mc-field-group">
                      <label for="mce-MMERGE4">Country </label>
                      <input type="text" value="" name="MMERGE4" id="mce-MMERGE4">
                    </div>
                    <div id="mce-responses" class="clear">
                      <div class="response" id="mce-error-response" style="display:none"></div>
                      <div class="response" id="mce-success-response" style="display:none"></div>
                    </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                    <div style="position: absolute; left: -5000px;"><input type="text" name="b_0d85845f04d5157c053fc34f9_a22c631190" tabindex="-1" value=""></div>
                  </fieldset>
                  <div class="centered">
                    <input type="submit" value="Submit" name="subscribe" id="mc-embedded-subscribe" class="button-link button-green">
                  </div>
                </div>
                <div class="clearfix"></div>
              </form>
            </div>
          </div>
          <div class="g--third g--centered">
              <ul class="social">
                <li>
                 <a href="https://twitter.com/RunAnEmpire" class="link-twitter"></a>
                </li>
                <li>
                 <a href="https://www.instagram.com/runanempire/" class="link-instagram"></a>
                </li>
                <li>
                  <a href="https://www.facebook.com/RunAnEmpire/" class="link-facebook"></a>
                </li>
              </ul>
          </div>
        </div>
      </section>
      <section id="testimonies" class="slide-medium mobile">
        <div class="container">
          <h1>What people are saying</h1>
          <div class="mobile-slider">
            <div class="g--third">
              <div class="post-container">
                <a href="http://www.fastcodesign.com/3028503/alternate-reality-game-will-turn-you-into-a-fitness-maniac" target="_blank">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/logo/logo-fast-company.png" alt="Fast Company"></img>
                </a>
                <p>“Run an Empire challenges you to conquer territory and defend it from rivals, rather like the classic strategy game Risk”</p>
              </div>
            </div>
            <div class="g--third">
              <div class="post-container">
                <a href="http://www.polygon.com/2014/4/15/5594332/mobile-ar-game-run-an-empire-brings-strategy-to-the-streets" target="_blank">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/logo/logo-polygon.png" alt="Polygon"></img>
                </a>
                <p>“Run An Empire offers mobile gamers the opportunity to turn their local neighborhood into their own fiefdom”</p>
              </div>
            </div>
            <div class="g--third g--last">
              <div class="post-container">
                <a href="http://www.runnersworld.com/electronics/first-look-at-run-an-empire" target="_blank">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/logo/logo-runners.png" alt="Runners"></img>
                </a>
                <p>“Level up your running with a new app that brings tactical gaming to the real world”</p>
              </div>
            </div>
          </div>
          <div class="mobile-nav">
            <div class="mobile-nav-prev"><img src="<?php echo get_bloginfo('template_url') ?>/images/svg/ui-arrow-prev-white.svg" alt="Previous"></div>
            <div class="mobile-nav-next"><img src="<?php echo get_bloginfo('template_url') ?>/images/svg/ui-arrow-next-white.svg" alt="Next"></div>
          </div>
        </div>
      </section>
      <!-- <section id="faq" class="slide-large">
        <div class="container">
          <h1>FAQ</h1>
          <div class="g--third g--last g--centered">
            <ul class="dynamic-list">
              
                // The Query
                $args_faq = array(
                  'post_type' => 'faq',
                  'posts_per_page' => 6
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

                    
                      <li>
                        <h4> echo get_the_title();</h4>
                        <p> echo get_the_content();</p>
                      </li>
                    
                  }

                } else {
                  // no posts found
                }
                /* Restore original Post Data */
                wp_reset_postdata(); 
              
            </ul>
          </div>
          <div class="clearfix"></div>
          <div class="centered push-up"><a class="button-link button-red" href="<?php echo Site_url(); ?>/faq">View all FAQ</a></div>
        </div>
      </section>
      -->
      <section id="team" class="slide-small mobile">
        <div class="container">
          <h1>Brought to you by</h1>
          <div class="g--fifth">
            <div class="post-container">
              <a href="http://panstudio.co.uk/">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo/logo-pan.svg" alt="PAN Studio"></img>
              </a>
            </div>
          </div>
          <div class="g--fifth">
            <div class="post-container">
              <a href="https://www.crowdcube.com">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo/logo-crowd.png" alt="Crowd Cube"></img>
              </a>
            </div>
          </div>
          <div class="g--fifth">
            <div class="post-container">
              <a href="http://www.tseffect.com/">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo/logo-tse.png" alt="Tom Sawyer Effect"></img>
              </a>
            </div>
          </div>
          <div class="g--fifth">
            <div class="post-container">
              <a href="https://www.geovation.org.uk/">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo/logo-geovation.png" alt="Geovaction"></img>
              </a>
            </div>
          </div>
          <div class="g--fifth g--last">
            <div class="post-container">
              <a href="https://www.kickstarter.com">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo/logo-kickstarter.png" alt="Kickstarter"></img>
              </a>
            </div>
          </div>
          <div class="clearfix"></div>
        </div>
      </section>

      <script>
    L.mapbox.accessToken = 'pk.eyJ1IjoicnVuYW5lbXBpcmUiLCJhIjoiQURYc3gyVSJ9.e1_Z7yOMvCAnPNm7SkBWKQ';
    var map = L.mapbox.map('map', 'runanempire.jepgcln5')
        .setView([51.51, -0.12], 17);

        // Disable drag and zoom handlers.
        map.dragging.disable();
        map.touchZoom.disable();
        map.doubleClickZoom.disable();
        map.scrollWheelZoom.disable();
        map.keyboard.disable();

        // Disable tap handler, if present.
        if (map.tap) map.tap.disable();
    </script>

<?php get_footer(); ?>
