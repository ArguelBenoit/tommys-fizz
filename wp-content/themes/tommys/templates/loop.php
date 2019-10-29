<div class="row">

  <?php
    if (have_posts()) :
      $index = 0;
      while (have_posts()) :
        if($index != 0 AND $index % 3 == 0) :
          ?>
            </div>
            <div class="row">
          <?php
        endif;
        $index += 1;
        the_post(); ?>

          <a class="article four columns" href="<?php the_permalink(); ?>">
    				<div >
              <div class="calendar">
                <div class="day-article"><?php the_time('d') ?></div>
                <div class="years-article"><?php the_time('M Y') ?></div>
                <div class="holl one"></div>
                <div class="holl two"></div>
              </div>
              <div class="thumbnail">
                <?php
                if(has_post_thumbnail()) { ?>
                  <div style="background: url('<?php echo get_bloginfo( 'template_directory' ); ?>/img/options/sail.png'), url('<?php echo get_the_post_thumbnail_url(); ?>')" class="thumbnail"/></div>
                <?php } else { ?>
                  <div style="background: url('<?php echo get_bloginfo( 'template_directory' ); ?>/img/options/noimage.png')"; class="thumbnail"></div>
                <?php } ?>
              </div>
    					<div class="title-article">
    						<?php the_title(); ?>
    					</div>
    				</div>
          </a>

        <?php
    	endwhile;
  	endif;
  ?>

</div>
