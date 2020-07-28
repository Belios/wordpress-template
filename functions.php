<?php

add_theme_support('title-tag');

/* Style Functions */

function add_theme_scripts() {
wp_enqueue_style( 'style', get_stylesheet_uri() );
wp_enqueue_style( 'bs_css', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css");
wp_enqueue_script( 'script', "https://kit.fontawesome.com/5e89759967.js");
wp_enqueue_script( 'script', "https://code.jquery.com/jquery-3.4.1.slim.min.js");
wp_enqueue_script( 'script', "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.jss");
wp_enqueue_script( 'script', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js");
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

 ?>
