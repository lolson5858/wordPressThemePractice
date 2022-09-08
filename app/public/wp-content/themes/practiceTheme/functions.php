<?php 

function luke_register_styles(){
  wp_enqueue_style('luke-css', "/wp-content/themes/practiceTheme/themeTemplate/css/style.css", array(), '1.0', 'all');
}

add_action( 'wp_enqueue_scripts', 'luke_register_styles');

?>