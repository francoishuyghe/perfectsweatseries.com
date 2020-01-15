<?php

namespace App;

/**
 * Theme customizer
 */
add_action('customize_register', function (\WP_Customize_Manager $wp_customize) {
    // Add postMessage support
    $wp_customize->get_setting('blogname')->transport = 'postMessage';
    $wp_customize->selective_refresh->add_partial('blogname', [
        'selector' => '.brand',
        'render_callback' => function () {
            bloginfo('name');
        }
    ]);
});

/**
 * Customizer JS
 */
add_action('customize_preview_init', function () {
    wp_enqueue_script('sage/customizer.js', asset_path('scripts/customizer.js'), ['customize-preview'], null, true);
});

// REGISTER CUSTOM POST TYPES


add_action( 'init', function() {
    $args = array(
        'public' => true,
        'labels' => array(
            'name' => __( 'Episodes' ), // change the name
            'singular_name' => __( 'episode' ), // change the name
        ),
        'show_in_rest' => true,
        'supports' => array ( 'title', 'editor', 'custom-fields', 'thumbnail', 'excerpt' ),
        'menu_icon' => 'dashicons-editor-video',
    );
    register_post_type( 'episode', $args );
} );
