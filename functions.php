<?php



// load custom css and js
function load_all_custom_scripts_and_stylesheets() {
    wp_enqueue_style('BulmaCDN', 'https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css', array(), "1", 'all');
    wp_enqueue_style('indexCss', get_template_directory_uri() . '/css/index.css', array(), "1", 'all');
    wp_enqueue_script('fontAwesome', 'https://use.fontawesome.com/releases/v5.14.0/js/all.js', array(), 1, true);
    wp_enqueue_script('indexJs', get_template_directory_uri() . '/js/index.js', array(), 1, true);
}

add_action('wp_enqueue_scripts',  'load_all_custom_scripts_and_stylesheets');

//Menu Support
add_theme_support('menus');

//Register Menus
register_nav_menus( 

    array(
        'top-menu' => __('Top menu', 'theme'),


    )
    );
