<?php

function Bulpress_Register_styles()
{
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('bulpress-bulma', 'https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css', array(), '1.0.2');
    wp_enqueue_style('bulpress-styles', get_template_directory_uri() . "/assets/css/style.css", array('bulpress-bulma'), $version);
}

add_action('wp_enqueue_scripts', 'Bulpress_Register_styles');

function Bulpress_Register_scripts()
{
    wp_enqueue_script('bulpress-fontawesome', 'https://kit.fontawesome.com/cbef3dd862.js', array(), '6.0', false);
    wp_enqueue_script('bulpress-js', get_template_directory_uri() . "/assets/js/index.js", array(), '1.0', true);
}

add_action('wp_enqueue_scripts', 'Bulpress_Register_scripts');

?>