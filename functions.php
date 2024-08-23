<?php

/**
 * Theme functions and definitions
 * 
 * @package Aquila
 */


function aquila_enqueue_scripts()
{
    wp_register_style('style-css', get_stylesheet_uri(), [], filemtime(get_template_directory() . '/style.css'), 'all');
    wp_register_style('main-css', get_template_directory_uri() . '/assets/src/library/css/main.css', [], filemtime(get_template_directory() . '/assets/src/library/css/main.css'), 'all');
    wp_register_style('bootstrap-min-css', get_template_directory_uri() . '/assets/src/library/css/bootstrap.min.css', [], false, 'all');
    wp_register_script('main-js', get_template_directory_uri() . '/assets/src/library/js/main.js', [], filemtime(get_template_directory() . '/assets/src/library/js/main.js'), 'all');
    wp_register_script('bootstrap-min-js', get_template_directory_uri() . '/assets/src/library/js/bootstrap.min.js', ['jquery'], false, 'all');

    wp_enqueue_style('style-css');
    wp_enqueue_style('main-css');
    wp_enqueue_style('bootstrap-min-css');
    wp_enqueue_script('main-js');
    wp_enqueue_script('bootstrap-min-js');
}

add_action('wp_enqueue_scripts', 'aquila_enqueue_scripts');
