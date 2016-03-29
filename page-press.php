<?php /* Template Name: Press Template */ ?>
<?php get_header(); ?>
  <body>
    <?php get_template_part('header-menu'); ?>

    <main id="press-main" class="main">
      <header class="header red">
        <div class="container">
          <h1>Press</h1>
        </div>
      </header>
      <div class="container push-down">
          <div class="g--third">
            <div class="green-divider">
                <?php wp_nav_menu( array( 'theme_location' => 'press-menu' ) ); ?>
            </div>
          </div>
          <div class="g--two--third g--last">
            <h2><?php echo wp_title()?></h2>
            <?php if ( has_post_thumbnail() ) {
            the_post_thumbnail();
            }  ?>
            <?php the_content(); ?>
          </div>
      </div>
    </main>

<?php get_footer(); ?>
    
    
