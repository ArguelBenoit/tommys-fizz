<?php

  add_action('init', 'add_main_menu');
  function add_main_menu() {
    register_nav_menu('main_menu', 'menu principale');
  }
  register_nav_menus( array(
  	'category_menu' => 'menu des catégories',
  	'social_network_menu' => 'menu des réseaux sociaux',
  	'footer_menu' => 'menu du footer',
    'contacts_menu' => 'menu contacts',
  ) );
  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'custom-logo' );

?>
