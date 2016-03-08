<?php
	add_theme_support( 'post-thumbnails' );

  add_image_size( 'blog-featured-image', 1150, 575, true );
  add_image_size( 'blog-image', 720, 720, false );
  add_image_size( 'blog-thumbnail-image', 370, 240, true );

  add_filter( 'image_size_names_choose', 'my_custom_sizes' );

  function my_custom_sizes( $sizes ) {
      return array_merge( $sizes, array(
          'blog-image' => __( 'Blog image' ),
      ) );
  }

  /**
 * Filter the except length to 20 characters.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 28;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

  update_option('image_default_link_type', 'none' );
  update_option( 'image_default_size', 'blog-image' );


	function register_my_menu() {
		register_nav_menu('header-menu',__( 'Header Menu' ));
    register_nav_menu('footer-menu',__( 'Footer Menu' ));
	}
	add_action( 'init', 'register_my_menu' );

  function myfeed_request($qv) {
    if (isset($qv['feed']) && !isset($qv['post_type']))
      $qv['post_type'] = array('blogpost', 'press');
    return $qv;
  }
  add_filter('request', 'myfeed_request');
 

?>