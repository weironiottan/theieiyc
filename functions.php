<?php

function load_stylesheets() {

    wp_register_style('BulmaCDN', 'https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css', array(), 1, 'all');
    wp_enqueue_style('BulmaCDN');
    wp_register_style('indexCss', get_template_directory_uri . '/css/index.css', array(), 1, 'all');
    wp_enqueue_style('indexCss');
}

add_action('wp_enqueue_scripts',  'load_stylesheets');
