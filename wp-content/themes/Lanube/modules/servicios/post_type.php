<?php
global $config_services;

$config_services = array(
  'version' => '1.0.0',
  'post_type' => "services",
  'slug' => 'servicios',
  'name' => 'Servicios',
  'menu_name' => 'Servicios',
  'singular_name' => 'Servicio',
  'taxonomies' => array('servicios' => 'Categoría'),
  'module_path' => get_template_directory() . '/modules/servicios',
  'module_uri' => get_theme_file_uri('modules/servicios'),
  'tax_servicios' => 'servicios',
);

// Register Custom Post Type
function customPostTypeServices()
{
  global $config_services;

  $labels = array(
    'name' => _x($config_services['name'], 'Post Type General Name', 'text_domain'),
    'singular_name' => _x($config_services['singular_name'], 'Post Type Singular Name', 'text_domain'),
    'menu_name' => __($config_services['menu_name'], 'text_domain'),
    'name_admin_bar' => __($config_services['menu_name'], 'text_domain'),
    'archives' => __('Item Archives', 'text_domain'),
    'attributes' => __('Item Attributes', 'text_domain'),
    'parent_item_colon' => __('Parent Item:', 'text_domain'),
    'all_items' => __('Todos los servicios', 'text_domain'),
    'add_new_item' => __('Nuevo servicio', 'text_domain'),
    'add_new' => __('Agregar Nuevo', 'text_domain'),
    'new_item' => __('New Item', 'text_domain'),
    'edit_item' => __('Edit Item', 'text_domain'),
    'update_item' => __('Update Item', 'text_domain'),
    'view_item' => __('View Item', 'text_domain'),
    'view_items' => __('View Items', 'text_domain'),
    'search_items' => __('Search Item', 'text_domain'),
    'not_found' => __('Not found', 'text_domain'),
    'not_found_in_trash' => __('Not found in Trash', 'text_domain'),
    'featured_image' => __('Featured Image', 'text_domain'),
    'set_featured_image' => __('Set featured image', 'text_domain'),
    'remove_featured_image' => __('Remove featured image', 'text_domain'),
    'use_featured_image' => __('Use as featured image', 'text_domain'),
    'insert_into_item' => __('Insert into item', 'text_domain'),
    'uploaded_to_this_item' => __('Uploaded to this item', 'text_domain'),
    'items_list' => __('Items list', 'text_domain'),
    'items_list_navigation' => __('Items list navigation', 'text_domain'),
    'filter_items_list' => __('Filter items list', 'text_domain'),
  );

  $rewrite = array(
    'slug' => $config_services['slug'],
    'with_front' => true,
    'pages' => true,
    'feeds' => true,
  );

  $args = array(
    'label' => __($config_services['menu_name'], 'text_domain'),
    'description' => __($config_services['name'], 'text_domain'),
    'labels' => $labels,
    'supports' => array('title','editor','thumbnail','revisions','custom-fields','post-formats','page-attributes'),
    'show_in_rest' => true,
    'hierarchical' => false,
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'menu_position' => 3,
    'menu_icon' => 'dashicons-index-card',
    'show_in_admin_bar' => true,
    'show_in_nav_menus' => true,
    'can_export' => true,
    'has_archive' => true,
    'exclude_from_search' => false,
    'publicly_queryable' => true,
    'rewrite' => $rewrite,
    'capability_type' => 'post',
    'taxonomies' => ['servicios'],
  );
  register_post_type($config_services['post_type'], $args);

  //Taxonomias--------------------------
  foreach ($config_services['taxonomies'] as $taxonomy_id => $taxonomy_name) {
    $labels = array(
      'name' => _x($taxonomy_name, 'taxonomy general name', 'textdomain'),
      'singular_name' => _x($taxonomy_name, 'taxonomy singular name', 'textdomain'),
      'search_items' => __('Buscar ' . $taxonomy_name, 'textdomain'),
      'all_items' => __($taxonomy_name, 'textdomain'),
      'parent_item' => __('Parent ' . $taxonomy_name, 'textdomain'),
      'parent_item_colon' => __('Parent ' . $taxonomy_name . ':', 'textdomain'),
      'edit_item' => __('Editar ' . $taxonomy_name, 'textdomain'),
      'update_item' => __('Actualizar ' . $taxonomy_name, 'textdomain'),
      'add_new_item' => __('Agregar nueva ' . $taxonomy_name, 'textdomain'),
      'new_item_name' => __('Nueva ' . $taxonomy_name . ' Name', 'textdomain'),
      'menu_name' => __($taxonomy_name, 'textdomain'),
    );
    $args = array(
      'hierarchical' => true,
      'labels' => $labels,
      'show_ui' => true,
      'show_admin_column' => true,
      'query_var' => true,
      'rewrite' => array('slug' => $taxonomy_id),
      'show_in_rest' => true
    );
    register_taxonomy($taxonomy_id, array($config_services['post_type']), $args);
  }
}
add_action('init', 'customPostTypeServices', 43);
