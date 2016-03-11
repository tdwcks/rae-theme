<?php /* Template Name: Legal Template */ ?>
<?php get_header(); ?>
  <body>
    <?php get_template_part('header-menu'); ?>

    <main id="legal-main" class="main">
      <header class="header">
        <div class="container">
          <h1>Legal</h1>
        </div>
      </header>
      <div class="container push-down">
          <div class="g--third">
              <?php wp_nav_menu( array( 'theme_location' => 'legal-menu' ) ); ?>
          </div>
          <div class="g--two--third g--last">
            <h2><?php echo wp_title()?></h2>
            <?php the_content(); ?>
          </div>
      </div>
    </main>

<?php get_footer(); ?>
    
