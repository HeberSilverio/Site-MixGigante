<?php

// Carregando nossos scripts e folhas de estilos 
function load_scripts(){ //
    wp_enqueue_script( 'bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js', array(), '5.0.0', true);

    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css', array(), '5.0.0', 'all'); // adiciona css
    wp_enqueue_style('template', get_template_directory_uri() . '/css/template.css', array(), '1.0','all'); // adiciona css
    // wp_enqueue_style('id-do-arquivo-css',get_stylesheet_uri(), array(), '1.0', false); // adiciona o style.css
}
add_action( 'wp_enqueue_scripts', 'load_scripts');


// Função de configuração do tema
function wptelescopio_config(){
    // Registrando nossos menus
    register_nav_menus(
        array(
            'my_main_menu' => 'Main Menu',
            'my_rodape_menu' => 'Rodape Menu'
        )
    );

    $args = array(
        'height' => 150,
        'width' => 1920
    );
    add_theme_support( 'custom-header', $args );
    add_theme_support( 'post-thumbnails' );

}
add_action( 'after_setup_theme', 'wptelescopio_config', 0 );