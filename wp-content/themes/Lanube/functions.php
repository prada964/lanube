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

    // Bootstrap icons
    wp_enqueue_style('bootstrap_icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css', '4.6', false);
        
    // Bootstrap style
    wp_enqueue_style('bootstrap_css','https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css', array(),'5.1.3');

    // Bootstrap scripts
    wp_enqueue_script('bootstrap_js', get_stylesheet_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js');

    // Slick slider
    wp_enqueue_script( 'slick-js', '//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js', array('jquery'), '1.8.1', true);
    wp_enqueue_script( 'slick-init-js', get_stylesheet_directory_uri() . '/assets/js/slick.js', array('jquery'), '1.8.1', false);
    wp_enqueue_style( 'slick-css-theme', '//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css', '', '1.8.1', false);
    wp_enqueue_style( 'slick-css', get_stylesheet_directory_uri() . '/assets/css/slick.css', '', '1.8.1', false);

    wp_enqueue_style('normalize',get_template_directory_uri().'/assets/css/normalize.css',array(),'8.0.1 ');

    wp_enqueue_style('slicknavCSS',get_template_directory_uri().'/assets/css/slicknav.min.css',array(),'8.0.1 ');

     /* Font awesome */
     wp_register_style('font-awesome', get_template_directory_uri() . '/assets/fontawesome/css/all.min.css', 'all');
     wp_enqueue_style('font-awesome');

    wp_enqueue_style('style', get_stylesheet_uri(),array('normalize'),ASSETS_VERSION);

    /* style */
    wp_register_style('lanube-style', get_template_directory_uri() . '/assets/css/main.css', array(), ASSETS_VERSION, 'all');
    wp_enqueue_style('lanube-style');

    wp_enqueue_script('slicknavjs', get_template_directory_uri() . '/assets/js/jquery.slicknav.min.js', array('jquery'), ASSETS_VERSION, 'all');
    wp_enqueue_script('mainJs', get_template_directory_uri() . '/assets/js/main.js', array('jquery','slicknavjs'), ASSETS_VERSION, 'all');

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
 * Custom blocks
 */
require_once get_template_directory() . '/inc/custom_blocks.php';
/**
 * Modules
 */
require_once get_template_directory() . '/modules/modules.php';