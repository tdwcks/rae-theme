<!doctype html>
<html lang="">

  <head>
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title( '', true, 'right' ); ?></title>
    <!-- Minimized css -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/h5bp.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/animate.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <!--[if lt IE 10]>
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/iefixes.css" />
    <![endif]-->
    <!-- For IE 9 and below. ICO should be 32x32 pixels in size -->
    <!--[if IE]><link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon/favicon32x32.ico"><![endif]-->

    <?php wp_head(); ?>
  </head>
