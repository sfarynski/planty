<?php

// Action qui permet de charger des scripts dans notre thème
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles(){
    // Chargement du style.css du thème parent Twenty Twenty
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    // Chargement du css/theme.css pour nos personnalisations
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
}


// Different menus to logged in users
function md_nav_menu_args( $args = '' ) {
    if( is_user_logged_in() ) {
    // Menu for logged users
    $args['menu'] = 'loggedMenu';
     
    } else {
    // Menu for non-logged users
    $args['menu'] = 'notLoggedMenu';
    }
    return $args;
    }
add_filter( 'wp_nav_menu_args', 'md_nav_menu_args' );
?>