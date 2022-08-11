<?php
include "constans.php";



function lanube_setup()
{
    //habilitar imagenes destacadas
    add_theme_support('post-thumbnails');

    //titulos SEO
    add_theme_support('title-tag');

    //agregar imagenes de tamaño personalizado
    add_image_size('square', 350, 350, true);
    add_image_size('portrait', 350, 724, true);
    add_image_size('cajas', 400, 375, true);
    add_image_size('mediano', 700, 400, true);
    add_image_size('blog', 966, 644, true);
}
add_action('after_setup_theme', 'lanube_setup');

//styles y scrips

function lanube_styles_scripts(){
    wp_enqueue_style('normalize',get_template_directory_uri().'/assets/css/normalize.css',array(),'8.0.1 ');

    wp_enqueue_style('style', get_stylesheet_uri(),array('normalize'),ASSETS_VERSION);

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

add_filter( 'wp_image_editors', 'change_graphic_lib' );

 function change_graphic_lib($array) {
     return array( 'WP_Image_Editor_GD', 'WP_Image_Editor_Imagick' );
     }
/**
 * Modules
 */
require_once get_template_directory() . '/modules/modules.php';