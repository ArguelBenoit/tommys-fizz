<?php

  add_action('init', 'add_main_menu');
  function add_main_menu() {
    register_nav_menu('main_menu', 'menu principale');
  }

  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'custom-logo' );

?>
