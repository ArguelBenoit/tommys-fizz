
<?php
  if (have_posts()) :
    ?> <div class="row"> <?php
    while (have_posts()) :
      the_post(); ?>

				<div class="article four columns">
					<div class="thumbnail">
            <?php
              if(has_post_thumbnail()) {
                the_post_thumbnail('medium');
              }
            ?>
					</div>
					<div class="content">
						<a class="title-article" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            <span>&nbsp;<?php the_time('d/m/Y') ?></span>
					</div>
				</div>

    	<?php
  	endwhile;
    ?> </div> <?php
	endif;
?>
