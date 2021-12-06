<?php

if (!defined('_S_VERSION')) {
    // Replace the version number of the theme on each release.
    define('_S_VERSION', '1.0.0');
}

/**
 * theme setup
 */
function project_setup()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('post-formats', ['aside', 'gallery', 'slide']);
    add_theme_support('editor-styles'); // обязателен для работы следующей строки
    add_theme_support('dark-editor-style');
}
add_action('after_setup_theme', 'project_setup');



/**
 * Enqueue scripts and styles.
 */
function project_scripts()
{
    wp_enqueue_style('style', get_stylesheet_uri(), array(), _S_VERSION);

    wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', array(), _S_VERSION, true);
}
add_action('wp_enqueue_scripts', 'project_scripts');
