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


function handle_contact_form_submission() {
    if (isset($_POST['submit_contact'])) {
        // Récupérer les données du formulaire
        $name = sanitize_text_field($_POST['name']);
        $email = sanitize_email($_POST['email']);
        $subject = sanitize_text_field($_POST['subject']);  // Récupère l'objet du message
        $message = sanitize_textarea_field($_POST['message']);

        // Vérifiez si les champs sont remplis
        if (!empty($name) && !empty($email) && !empty($subject) && !empty($message)) {
            // Créer le message
            $to = 'blandinenhy@gmail.com'; // Remplacez par l'adresse email de destination
            $email_subject = 'Message de contact : ' . $subject; // Utilise l'objet du message
            $body = "Nom: $name\nEmail: $email\n\nObjet: $subject\n\nMessage:\n$message";
            $headers = array('Content-Type: text/plain; charset=UTF-8', 'From: ' . $email);

            // Envoie l'email
            wp_mail($to, $email_subject, $body, $headers);

            // Message de succès
            echo '<p>Merci pour votre message ! Nous reviendrons vers vous dès que possible.</p>';
        } else {
            // Message d'erreur si un champ est vide
            echo '<p style="color: red;">Veuillez remplir tous les champs.</p>';
        }
    }
}
add_action('wp_head', 'handle_contact_form_submission');
