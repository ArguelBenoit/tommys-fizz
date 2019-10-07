<?php /* Template Name: Landing-page */
	get_header();
?>

<div id="landing-page">
	<div class="container-rellax">
		<section class="rellax" data-rellax-speed="-10" id="homepage" style="background-image: url('<?php echo get_bloginfo( 'template_directory' ); ?>/img/background.jpg');">
			<div class="rellax" data-rellax-speed="10" id="content-homepage">
				<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/logo-white.png" width="400px" alt="">
				<h1>Ici il y aura un super petit slogan !</h1>
			</div>
		</section>
	</div>
	<!--  -->
	<section id="apropos" style="background: #f0efef;">
		<div class="container">
			<div class="row" style="padding: 50px 0;">
				<h1>À propos</h1>
				<p>Créée par Tom Albani, Tommy’s Fizz vous offre des prestations haut de gamme autour du cocktail. Passionné par la création et les produits il met avec son équipe, son talent au service de tous vos événements pour leur apporter une touche originale. Toutes les formules sont personnalisables pour répondre au mieux à vos besoins. N’hésitez pas et vivez une expérience gustative unique à travers nos cocktails.</p>
			</div>
		</div>
	</section>
	<!--  -->
	<section class="" id="prestations">
		<div class="container">
			<h1>Nos préstations</h1>
			<div class="row">
				<div class="columns six">
					<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/cocktail.jpg" width="400px" alt="">
				</div>
				<div class="columns six">
					<p>Afin de répondre à vos envies nous vous proposons un bar mobile, complètement autonome qui nous suit partout. Élément décoratif et lieu de convivialité autour d’un de nos fabuleux cocktails, il rendra votre événement inoubliable.</p>
					<p><b>Afficher les préstations :</b></p>
					<button class="button-primary" style="background: #ff8877">Particuliers</button>
					<button class="button-primary" style="background: #ff8877">Professionnels</button>
				</div>
			</div>
		</div>
	</section>
	<!--  -->
	<section id="team" style="background: url('<?php echo get_bloginfo( 'template_directory' ); ?>/img/background2.jpg');">
		<div class="container">
			<h1>_ THE _ TEAM _</h1>
			<div class="row">
				<div class="columns four">
					<div class="people-container">
						<div class="img" style="background: url('<?php echo get_bloginfo( 'template_directory' ); ?>/img/team/3.jpg')" /></div>
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
						<div class="img" style="background: url('<?php echo get_bloginfo( 'template_directory' ); ?>/img/team/1.jpg')" /></div>
						<div class="name">Prénom nom : son job</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--  -->
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
	<!--  -->
</div>

<?php
	get_footer();
?>
