

<div id="header" class="">

  <!-- logo -->
  <?php
    $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
    $custom_logo_id = get_theme_mod( 'custom_logo' );
    $logo_url = wp_get_attachment_image_src( $custom_logo_id , 'full' );
    if ( !empty($logo_url[0])) {
      ?>
        <a href="/#anchor">
          <img id="logo-header" src=<?php echo esc_url( $logo_url[0] ); ?> alt="" height="54px"/>
        </a>
      <?php
    }
  ?>

  <!-- sandwich -->
  <div id="sandwich">
    <div class="child child1"></div>
    <div class="child child2"></div>
    <div class="child child3"></div>
  </div>

  <!-- menu -->
  <div id="menu-header">
    <?php wp_nav_menu(array('theme_location' => 'main_menu')); ?>
  </div>

</div>
