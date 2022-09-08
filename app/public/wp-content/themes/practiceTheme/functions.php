<?php 

function luke_register_styles(){

  $version = wp_get_theme()->get( 'Version' );
  wp_enqueue_style('luke-style', "/wp-content/themes/practiceTheme/style.css", array('luke-bootstrap'), $version, 'all');
  wp_enqueue_style('luke-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '4.4.1', 'all');
  wp_enqueue_style('luke-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all');

}

add_action( 'wp_enqueue_scripts', 'luke_register_styles');

?>