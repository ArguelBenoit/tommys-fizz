<?php
	get_header();

	if (have_posts()) :
		while (have_posts()) : the_post(); ?>
		<div class="day-article"><?php the_time('d') ?></div>
			<div class="container padding first single">
				<section>
					<h1>
						<?php the_title(); ?>
					</h1>
					<div class="post">
						<div class="post-content">
							<?php the_content(); ?>
						</div>
					</div>
				</section>
			</div>
			<?php
			previous_post_link('<div class="arrow-nav prev">%link</div>', '<i class="icon-prev fas fa-arrow-left"></i>', TRUE);
			next_post_link('<div class="arrow-nav next">%link</div>', '<i class="icon-next fas fa-arrow-right"></i>', TRUE);
		endwhile;
	endif;

	get_footer();
?>
