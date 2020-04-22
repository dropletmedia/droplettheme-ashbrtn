<?php
/**
 * Droplet child theme functions
 * Author: Phil Picton
 */

/**
 * Enqueues the stylesheet.
 *
 */
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
if (!function_exists('theme_enqueue_styles')) {
    function theme_enqueue_styles()
    {
        wp_enqueue_style(
            'droplettheme',
            get_stylesheet_directory_uri() . '/style.css',
            [
            'hello-elementor'
        ],
            '1.0.0'
        );
        // wp_enqueue_script('three', 'https://cdnjs.cloudflare.com/ajax/libs/three.js/r61/three.min.js');
        
        // wp_enqueue_script(
        //     'dropletscript',
        //     get_stylesheet_directory_uri() . '/dropletscript.js',
        //     array( 'jquery', 'three' )
        // );
    }
}
