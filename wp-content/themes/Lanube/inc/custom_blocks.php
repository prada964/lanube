<?php
define('VS_BLOCK_CATEGORY', 'ln-blocks');
function lanube_category($categories)
{
    return array_merge(
        $categories,
        array(
            array(
                'slug' => VS_BLOCK_CATEGORY,
                'title' => __('La nube', VS_BLOCK_CATEGORY),
            )
        )
    );
}
add_filter('block_categories', 'lanube_category', 10, 2);

function register_acf_block_types()
{
    acf_register_block_type(
        array(
            'name' => 'Sliders',
            'title' => __('Slider de iconos'),
            'description' => __('Podrás crear un slider de iconos'),
            'render_template' => 'templates/blocks/sliders/slider.php',
            'category' => VS_BLOCK_CATEGORY,
            'icon' => 'feedback',
            'align' => 'full',
            'post_types' => array('post', 'page'),
        )
    );
    acf_register_block_type(
        array(
            'name' => 'title_a',
            'title' => __('Block - Titulos: A '),
            'description' => __('Podras crear un titulo'),
            'render_template' => 'templates/blocks/titles/title_a.php',
            'category' => VS_BLOCK_CATEGORY,
            'icon' => 'feedback',
            'align' => 'full',
            'post_types' => array('post', 'page'),
        )
    );
    acf_register_block_type(
        array(
            'name' => 'Servicios',
            'title' => __('Bloque de servicios '),
            'description' => __('Podras LLamar post tipo servicio'),
            'render_template' => 'templates/blocks/Services/services.php',
            'category' => VS_BLOCK_CATEGORY,
            'icon' => 'feedback',
            'align' => 'full',
            'post_types' => array('post', 'page'),
        )
    );


}

add_theme_support('align-wide');

// Check if function exists and hook into setup.
if (function_exists('acf_register_block_type')) {
    add_action('acf/init', 'register_acf_block_types');
}