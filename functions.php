<?php

function my_theme_enqueue_styles() {
    wp_enqueue_style('main-styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');



// Enregistre un menu de navigation
function register_my_menu() {
    register_nav_menu('header-menu', __('Header Menu'));
}
add_action('init', 'register_my_menu');

function custom_cursor_scripts() {
    // Enregistre le fichier JavaScript pour le curseur
    wp_enqueue_script('custom-cursor-js', get_template_directory_uri() . '/js/custom-cursor.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'custom_cursor_scripts');


