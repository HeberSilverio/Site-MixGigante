<?php

function load_scripts(){ //
    wp_enqueue_script( 'bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js', array(), '5.0.0', true);

    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css', array(), '5.0.0', 'all'); // adiciona css
    wp_enqueue_style('template', get_template_directory_uri() . '/css/template.css', array(), '1.0','all'); // adiciona css
    // wp_enqueue_style('id-do-arquivo-css',get_stylesheet_uri(), array(), '1.0', false); // adiciona o style.css
}
add_action( 'wp_enqueue_scripts', 'load_scripts');