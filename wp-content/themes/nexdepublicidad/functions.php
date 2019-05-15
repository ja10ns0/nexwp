<?php

function nexdepublicidad_styles() {
    wp_enqueue_style('bootstrap','https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css');
    wp_enqueue_style('main', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'nexdepublicidad_styles');

?>