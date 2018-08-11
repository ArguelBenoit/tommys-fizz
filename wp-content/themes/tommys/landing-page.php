<?php /* Template Name: Landing-page */
	get_header();
?>

<div id="landing-page">
	<div class="container-rellax">
		<section class="rellax" data-rellax-speed="-10" id="homepage" style="background-image: url('<?php echo get_bloginfo( 'template_directory' ); ?>/img/img-hp.jpeg');">
			<div class="rellax" data-rellax-speed="10" id="content-homepage">
				<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/logo-white.png" width="400px" alt="">
				<h1>Ici il y aura un super petit slogan !</h1>
			</div>
		</section>
	</div>
	<section class="" id="prestations">
		<div class="container">
			<h1>Nos préstations</h1>
			<div class="row">
				<div class="columns six">
					<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/ns-cocktail.jpg" width="400px" alt="">
				</div>
				<div class="columns six">
					<h3>Cocktails</h3>
					<p>
						Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.
					</p>
					<ul>
						<li>exemple 1</li>
						<li>exemple 2</li>
						<li>exemple 3</li>
						<li>exemple 4</li>
						<li>exemple 5</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<section id="consulting">
		<div class="container">
			<div class="row">
				<div class="columns six">
					<h3>Consulting</h3>
					<p>
 						Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
					</p>
					<ul>
						<li>exemple 1</li>
						<li>exemple 2</li>
						<li>exemple 3</li>
					</ul>
				</div>
				<div class="columns six">
					<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/ns-consulting.jpg" width="400px" alt="">
				</div>
			</div>
		</div>
	</section>
	<section id="team" style="background: url('<?php echo get_bloginfo( 'template_directory' ); ?>/img/bar-shot-glasses_4460x4460.jpg');">
		<div class="container">
			<h1>_ THE _ TEAM _</h1>
			<div class="row">
				<div class="columns four">
					<div class="people-container">
						<div class="img" style="background: url('<?php echo get_bloginfo( 'template_directory' ); ?>/img/team/1.jpg')" /></div>
						<div class="name">Prénom nom : son job</div>
					</div>
				</div>
				<div class="columns four">
					<div class="people-container">
						<div class="img" style="background: url('<?php echo get_bloginfo( 'template_directory' ); ?>/img/team/2.jpg')" /></div>
						<div class="name">Prénom nom : son job</div>
					</div>
				</div>
				<div class="columns four">
					<div class="people-container">
						<div class="img" style="background: url('<?php echo get_bloginfo( 'template_directory' ); ?>/img/team/3.jpg')" /></div>
						<div class="name">Prénom nom : son job</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="columns two">
					<div class="people-container"></div>
				</div>
				<div class="columns four">
					<div class="people-container">
						<div class="img" style="background: url('<?php echo get_bloginfo( 'template_directory' ); ?>/img/team/4.jpg')" /></div>
						<div class="name">Prénom nom : son job</div>
					</div>
				</div>
				<div class="columns four">
					<div class="people-container">
						<div class="img" style="background: url('<?php echo get_bloginfo( 'template_directory' ); ?>/img/team/5.png')" /></div>
						<div class="name">Prénom nom : son job</div>
					</div>
				</div>
				<div class="columns two">
					<div class="people-container"></div>
				</div>
			</div>
		</div>
	</section>
	<section id="partenaires">
		<div class="container">
			<h2>Ils nous font confiance</h2>
			<div class="row">
				<div class="columns two"><img width="100%" src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/logo-ext/1.png" alt=""></div>
				<div class="columns two"><img width="100%" src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/logo-ext/2.jpg" alt=""></div>
				<div class="columns two"><img width="100%" src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/logo-ext/3.png" alt=""></div>
				<div class="columns two"><img width="100%" src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/logo-ext/4.png" alt=""></div>
				<div class="columns two"><img width="100%" src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/logo-ext/5.png" alt=""></div>
				<div class="columns two"><img width="100%" src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/logo-ext/6.png" alt=""></div>
			</div>
		</div>
	</section>
</div>

<?php
	get_footer();
?>
