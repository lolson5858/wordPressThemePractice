<?php 

function luke_register_styles(){
  wp_enqueue_style('luke-bootstrap', get_template_directory_uri() ."themeTemplate\css\style.css", array(), '1.0', 'all');
}

add_action( 'wp_enqueue_scripts', 'luke_register_styles');

?>