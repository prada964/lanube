<?php
/* Option page */

if (function_exists('acf_add_options_page')) {

    $option_page = acf_add_options_page(array(
        'page_title' => 'Opciones Principales',
        'menu_title' => 'Opciones del tema',
        'menu_slug' => 'opciones-tema',
        'capability'	=> 'edit_posts',
        'redirect' => false,

    ));
}