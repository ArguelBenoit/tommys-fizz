

<div id="header" class="">

  <!-- logo -->
  <?php
    $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
    $custom_logo_id = get_theme_mod( 'custom_logo' );
    $logo_url = wp_get_attachment_image_src( $custom_logo_id , 'full' );
    if ( !empty($logo_url[0])) {
      ?>
        <img id="logo-header" src=<?php echo esc_url( $logo_url[0] ); ?> alt="" height="70px"/>
      <?php
    }
  ?>

  <!-- menu -->
  <div id="menu-header">
    <?php wp_nav_menu(array('theme_location' => 'main_menu')); ?>
  </div>

</div>
