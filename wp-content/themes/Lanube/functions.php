<?php

//styles y scrips
include "constans.php";
function lanube_styles_scripts(){
    wp_enqueue_style('style', get_stylesheet_uri(),array(),ASSETS_VERSION);

    wp_register_style('lanube-style', get_template_directory_uri() . '/assets/css/main.css', array(), ASSETS_VERSION, 'all');
    wp_enqueue_style('lanube-style');
}
add_action("wp_enqueue_scripts","lanube_styles_scripts");

/* Menu de navegacion */
function lanube_menus()
{
    register_nav_menus(array(
        'menu-principal' => __('Menu principal', 'lanube')
    ));
}
add_action('init', 'lanube_menus');