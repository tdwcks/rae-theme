<?php get_header(); ?>
<body>
  <?php get_template_part('header-menu'); ?>
    <main id="press-full-article-main" class="main">
      <header class="header">
        <div class="container">
          <h1><a href="<?php echo Site_url(); ?>/press">Press</a></h1>
        </div>
      </header>
      <div class="container">
        <?php
          // Start the Loop.
          while ( have_posts() ) : the_post();
        ?>
        <div class="blog-post">
          <h1><?php the_title(); ?></h1>
          <h3><?php the_date(); ?> Posted By: <?php the_author_meta('nickname'); ?></h3>
          <?php
            //show featured image - thumbnail == featured image
            if (  '' != get_the_post_thumbnail()  ) {
              $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );

              $thumbnail_id = get_post_thumbnail_id($post->ID);

              $title = get_post(get_post_thumbnail_id())->post_title;
              $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
          ?>
          <div class="blog-post-image green-divider">
            <img title="<?php echo $title; ?>" alt="<?php echo $alt; ?>" src="<?php echo $image[0]; ?>" style="width:100%; height:auto;">
          </div>
          <?php
            }
          ?>
          <div class="blog-post-text g--two--third">
            <?php the_content(); ?>
            <div id="comments">
              <?php comments_template(); ?>
            </div>
          </div>
          <div class="blog-post-social g--third g--last">
            <h3>Share</h3>
            <div class="social-btns">
              <ul>
                <li>
                  <a href="http://twitter.com/home?status=<?php the_title(); ?>+<?php the_permalink(); ?>" id="btn-twitter">
                    <img src="http://runanempire.com/wp-content/themes/rae_theme/images/svg/icon-twitter.svg" alt="Run An Empire twitter">
                  </a>
                </li>
                <li>
                  <a href="http://www.facebook.com/share.php?u=<?php the_permalink(); ?>" id="btn-facebook">
                    <img src="http://runanempire.com/wp-content/themes/rae_theme/images/svg/icon-facebook.svg" alt="Run An Empire facebook">
                  </a>
                </li>
                <li>
                  <a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" id="btn-googleplus">
                    <img src="http://runanempire.com/wp-content/themes/rae_theme/images/svg/icon-googleplus.svg" alt="Run An Empire google +">
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="clearfix"></div>
        </div>
        <?php
          endwhile;
        ?>
      </div>
    </main>
    <?php get_footer(); ?>
