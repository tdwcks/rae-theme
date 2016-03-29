<?php get_header(); ?>
  <body>
    <?php get_template_part('header-menu'); ?>

    <main id="contact" class="main">
      <header class="header">
        <div class="container">
          <h1>Contact</h1>
        </div>
      </header>
      <div class="container push-down">
        <div class="g--third">
          <h2>Careers</h2>
          <div class="green-divider">
            <a href="http://www.runanempire.com/careers/" class="button-link button-green">View here</a>
          </div>
        </div>
        <div class="g--two--third g--last">
          <h2>Enquiries</h2>
          <div class="green-divider">
            <?php 
              echo FrmFormsController::show_form(2, $key='', $title=true, $description=true);
            ?>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </main>

<?php get_footer(); ?>
    
