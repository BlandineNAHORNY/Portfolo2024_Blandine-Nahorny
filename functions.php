<?php

function my_theme_enqueue_styles() {
    wp_enqueue_style('main-styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');



// Enregistre un menu de navigation
function register_my_menus() {
    register_nav_menus(
        array(
            'main-menu' => __( 'Menu Principal' ),
            'footer-menu' => __( 'Menu Pied de Page' )
        )
    );
}
add_action( 'init', 'register_my_menus' );
