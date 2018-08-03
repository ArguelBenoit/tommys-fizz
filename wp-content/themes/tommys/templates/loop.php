
<?php
  if (have_posts()) :
    ?> <div class="row"> <?php
    while (have_posts()) :
      the_post(); ?>

				<div class="article four columns">
          <div class="day-article"><?php the_time('d') ?></div>
          <div class="years-article"><?php the_time('M Y') ?></div>
          <div class="thumbnail">
            <?php
              if(has_post_thumbnail()) { ?>
                <div style="background: url('<?php echo get_the_post_thumbnail_url(); ?>')" class="thumbnail"/></div>
              <?php } else { ?>
                <div style="background: url('<?php echo get_bloginfo( 'template_directory' ); ?>/img/noimage.png" class="thumbnail"></div>
              <?php }
            ?>
          </div>
					<div class="title-article">
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</div>
				</div>

    	<?php
  	endwhile;
    ?> </div> <?php
	endif;
?>
