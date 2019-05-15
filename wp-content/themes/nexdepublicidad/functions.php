<?php

// Meta
function nexdepublicidad_meta() {
    echo '<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">';
}
add_action( 'wp_head', 'nexdepublicidad_meta' );

// Styles
function nexdepublicidad_styles() {
    wp_enqueue_style('bootstrap','https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css');
    wp_enqueue_style('main', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'nexdepublicidad_styles');

// Scripts
function nexdepublicidad_scripts() {
    wp_enqueue_script( 'jquery-3.3.1', 'https://code.jquery.com/jquery-3.3.1.slim.min.js', '','',true);
    wp_enqueue_script( 'popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', '','',true);
    wp_enqueue_script( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', '','',true);
}
add_action( 'wp_enqueue_scripts', 'nexdepublicidad_scripts' );
// TODO add integrity and crossorigin attributes to above scripts (see 'script_loader_tag')
?>