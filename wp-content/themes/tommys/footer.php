


    <div class="container-footer">
      <div class="menu-sn">
        <div class="container social-network-menu">
        	<?php wp_nav_menu(array('theme_location' => 'social_network_menu')); ?>
        </div>
      </div>
      <div class="footer">
        <div class="container">
          <div class="row">
            <div class="columns four">
               <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/logo-white.png" width="100%" alt="">
            </div>
            <div class="columns three">
              <h4>Site map</h4>
              <?php wp_nav_menu(array('theme_location' => 'footer_menu')); ?>
            </div>
            <div class="columns five bars">
              <h4>Nos établissements</h4>
              <?php wp_nav_menu(array('theme_location' => 'bar_menu')); ?>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php wp_footer(); ?>
  </body>
</html>
