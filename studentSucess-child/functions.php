<?php
function sshub_enqueue_styles() {
    // Parent theme CSS (Twenty Twenty-Five).
    wp_enqueue_style(
        'parent-style',
        get_template_directory_uri() . '/style.css'
    );

    // Child theme CSS (your style.css with header above).
    wp_enqueue_style(
        'student-success-child',
        get_stylesheet_uri(),
        array( 'parent-style' ),
        wp_get_theme()->get( 'Version' )
    );
}
add_action( 'wp_enqueue_scripts', 'sshub_enqueue_styles' );


function sshub_logged_in_css() {
    if ( is_user_logged_in() ) {
        wp_enqueue_style(
            'student-success-logged-in',
            get_stylesheet_directory_uri() . '/logged-in.css',
            array( 'student-success-child' ),
            wp_get_theme()->get( 'Version' )
        );
    }
}
add_action( 'wp_enqueue_scripts', 'sshub_logged_in_css' );


if ( ! defined( 'DISALLOW_FILE_EDIT' ) ) {
    define( 'DISALLOW_FILE_EDIT', true );
}
