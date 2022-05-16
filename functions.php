<?php
    add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles');
    function my_theme_enqueue_styles() {
        wp_enqueue_style( 'child-style', get_stylesheet_uri() );
    }

    // function mushroom_post_types() {
    //     //create a new post type
    // }
    // add_action('init', 'mushroom_post_types');
    
?>