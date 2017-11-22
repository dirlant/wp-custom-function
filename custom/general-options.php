<?php 

if (function_exists('acf_add_options_page')) {
  $parent = acf_add_options_page(array(
    'page_title' => 'Configuracion',
    'menu_title' => 'General',
    'menu_slug' => 'general',
    'capability' => 'edit_posts',
    'position' => false,
    'icon_url' => false,
    'redirect' => false
  ));
}

?>