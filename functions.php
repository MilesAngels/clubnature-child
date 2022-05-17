<?php
    add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles');
    function my_theme_enqueue_styles() {
        wp_enqueue_style( 'child-style', get_stylesheet_uri() );
    }

    // function add_files() {
    //     add_theme_support( 'post-thumbnails' );

    // }
    // add_action('init', 'add_files');
    
?>