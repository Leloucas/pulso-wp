<?php

/**
 * Adds custom CSS files per template
 */
function wpse_enqueue_page_template_styles() {
    if ( is_page_template( 'templates/home.php' ) ) {
        wp_enqueue_style( 'page-template', get_stylesheet_directory_uri() . '/assets/css/home-template.css' );
    }
}
add_action( 'wp_enqueue_scripts', 'wpse_enqueue_page_template_styles' );