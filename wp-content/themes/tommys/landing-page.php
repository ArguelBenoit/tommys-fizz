
<?php /* Template Name: Landing-page */
	get_header();
?>

<div id="landing-page">
	<div class="container-rellax">
		<section class="rellax" data-rellax-speed="-10" id="homepage" style="background-image: url('<?php echo get_bloginfo( 'template_directory' ); ?>/img/landing-page/background.jpg');">
			<div class="rellax" data-rellax-speed="10" id="content-homepage">
				<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/logo/logo-white.png" width="400px" alt="">
				<h1>L'art du cocktail</h1>
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
			<h1>Nos prestations</h1>
			<div class="row">
				<div class="columns six">
					<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/landing-page/cocktail2.jpg" width="400px" alt="">
				</div>
				<div class="columns six">
					<p>Afin de répondre à vos envies nous vous proposons un bar mobile, complètement autonome qui nous suit partout. Élément décoratif et lieu de convivialité autour d’un de nos fabuleux cocktails, il rendra votre événement inoubliable.</p>
					<p><b>Afficher les prestations :</b></p>
					<button id="button-prestations-particuliers" class="button-primary" style="background: #ff8877">Particuliers</button>
					<button id="button-prestations-professionnels" class="button-primary" style="background: #ff8877">Professionnels</button>
				</div>
			</div>
		</div>
	</section>
	<!--  -->
	<section class="" id="prestations-particuliers" style="height: 0px; overflow: hidden; transition-duration: 500ms">
		<div class="container">
			<h1>Pour vos événements</h1>
			<div class="row">
				<div class="columns six">
					<p>
						Nous vous proposons un bar mobile et des cocktails sur mesures mais aussi une prestation événementielle complète.<br/><br/>
						Parce que tous vos évènements, célébrations, PACS, anniversaires, mariages… méritent le meilleur, nous mettons tout en œuvre pour faire de cette journée une parenthèse enchantée.<br/><br/>
						Du bar à cocktails transportable dirigé par une équipe de professionnels en passant par le traiteur choisi avec soin, au lieu qui fera la différence, à la décoration soignée, vous n’aurez plus qu’à vous laisser porter.
					</p>
				</div>
				<div class="columns six">
					<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/landing-page/prestation-prive.jpg" width="400px" alt="">
				</div>
			</div>
			<div class="row">
				<h3>Cette prestation vous permet de respirer.</h3>
				<div class="row">
					<p>
						Nos produits et nos partenaires sont choisis avec le plus grand soin et nous leur faisons confiance. Nous travaillons local, naturel et avec du fait maison pour vous offrir une entière satisfaction.<br/><br/>
						Prêt à être éblouis ?
					</p>
				</div>
			</div>
		</div>
	</section>
	<!--  -->
	<section class="" id="prestations-professionnels" style="height: 0px; overflow: hidden; transition-duration: 750ms">
		<div class="container">
			<h1>Pour votre entreprise</h1>
			<div class="row">
				<div class="columns six">
					<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/landing-page/prestation-entreprise.jpg" width="400px" alt="">
				</div>
				<div class="columns six">
					<p>
						Un besoin pour une soirée de lancement de produits, une rencontre entre collaborateurs ou toute autre occasion à célébrer dans votre entreprise ?<br/><br/>
						Nous sommes là pour répondre à vos envies. Une prestation haut de gamme de création de cocktails adaptés à vos besoins, personnalisables à l’infini afin de respecter votre cahier des charges. Des produits de grande qualité sélectionnés par nos soins, des préparations maisons afin de vous offrir le meilleur des ingrédients. Vos cocktails reflèteront votre entreprise, pour mettre en avant votre marque, votre positionnement, pour un petit plus original dans votre stratégie de communication.<br/><br/>
						Cette prestation peut inclure un service traiteur haut de gamme adapté à votre soirée grâce à notre solide connaissance des chefs et traiteurs de la région.<br/>
						<i>Maximum 500 personnes</i>
					</p>
				</div>
			</div>
			<div class="row">
				<h2>Team building</h2>
				<div class="row">
					<div class="columns six">
						<p>
							Notre équipe se déplace pour vous proposer des ateliers de mixologie en groupe de vingt personnes maximums. Une activité originale et conviviale entre collègues.<br/><br/>
							Les ingrédients et les préparations sont de grande qualité et sélectionnés avec soins afin d'offrir le meilleur à vos équipes. Le but est d’élaborer un ou deux cocktails comme nos professionnels, ou dans un style Top Chef avec un buffet où vous aurez tous les ingrédients nécessaires pour réaliser vos propres créations plus surprenantes les unes que les autres.
						</p>
					</div>
					<div class="columns six">
						<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/landing-page/team-building.jpg" width="400px" alt="">
					</div>
				</div>
			</div>
			<h2>Consulting</h2>
			<div class="row">
				<p>
					Notre expertise à votre service.<br/>Nous nous déplaçons dans votre établissement afin de former vos équipes, créer une nouvelle carte des cocktails et vous conseiller sur une méthode de travail la plus efficace possible. Les cocktails préparés par vos équipes s’adapteront au mieux à l’image de votre lieu et surprendront vos clients.
				</p>
			</div>
		</div>
	</section>
	<!--  -->
	<section id="team" style="background: url('<?php echo get_bloginfo( 'template_directory' ); ?>/img/landing-page/background2.jpg');">
		<div class="container">
			<h1>L'équipe</h1>
			<div class="row">
				<div class="columns two">
					<br/>
				</div>
				<div class="columns four">
					<div class="people-container">
						<div class="img" style="background: url('<?php echo get_bloginfo( 'template_directory' ); ?>/img/team/1.png')" /></div>
						<div class="name">
							<b>Tom Albani Brun</b><br/>
							Fondateur et chef barman
						</div>
					</div>
				</div>
				<div class="columns four">
					<div class="people-container">
						<div class="img" style="background: url('<?php echo get_bloginfo( 'template_directory' ); ?>/img/team/3.png')" /></div>
						<div class="name">
							<b>Luc Dribault</b><br/>
							Directeur général et chef de projet
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="columns two">
					<br/>
				</div>
				<div class="columns four">
					<div class="people-container">
						<div class="img" style="background: url('<?php echo get_bloginfo( 'template_directory' ); ?>/img/team/4.png')" /></div>
						<div class="name">
							<b>Zoé Vappereau</b><br/>
							Chargée de communication et marketing
						</div>
					</div>
				</div>
				<div class="columns four">
					<div class="people-container">
						<div class="img" style="background: url('<?php echo get_bloginfo( 'template_directory' ); ?>/img/team/2.png')" /></div>
						<div class="name">
							<b>Benjamin Robert</b><br/>
							Barman
						</div>
					</div>
				</div>
			</div>
			<div class="row" style="margin-top: 60px;">
				<div class="columns two">
					&nbsp;
				</div>
				<div class="columns eight">
					<img width="100%" style="border-radius: 6px;" src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/team/all.jpg" alt="">
				</div>
				<div class="columns two">
					&nbsp;
				</div>
			</div>
		</div>
	</section>
	<!--  -->
	<section id="partenaires">
			<h2>Ils nous ont fait confiance</h2>
			<div class="container">
				<div class="arrow-nav prev" id="landingpage-prev"><i class="icon-prev fa fa-arrow-left"></i></div>
				<div class="container-img" id="container-img">
					<div class="container-img-wrapper" id="container-img-wrapper">
						<img width="100%" src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/logo-ext/0.png" alt="">
						<img width="100%" src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/logo-ext/1.png" alt="">
						<img width="100%" src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/logo-ext/5.png" alt="">
						<img width="100%" src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/logo-ext/2.png" alt="">
						<img width="100%" src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/logo-ext/3.png" alt="">
						<img width="100%" src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/logo-ext/4.png" alt="">
						<img width="100%" src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/logo-ext/6.png" alt="">
						<img width="100%" src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/logo-ext/7.png" alt="">
						<img width="100%" src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/logo-ext/8.png" alt="">
						<img width="100%" src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/logo-ext/9.png" alt="">
						<img width="100%" src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/logo-ext/10.png" alt="">
						<img width="100%" src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/logo-ext/11.png" alt="">
						<img width="100%" src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/logo-ext/12.png" alt="">
						<img width="100%" src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/logo-ext/13.png" alt="">
						<img width="100%" src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/logo-ext/14.png" alt="">
						<img width="100%" src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/logo-ext/15.png" alt="">
						<img width="100%" src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/logo-ext/16.png" alt="">
						<img width="100%" src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/logo-ext/17.png" alt="">
						<img width="100%" src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/logo-ext/18.png" alt="">
						<img width="100%" src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/logo-ext/19.png" alt="">
						<img width="100%" src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/logo-ext/20.png" alt="">
						<img width="100%" src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/logo-ext/21.png" alt="">
					</div>
				</div>
				<div class="arrow-nav next" id="landingpage-next"><i class="icon-next fa fa-arrow-right"></i></div>
			</div>
	</section>
	<!--  -->
</div>

<?php
	get_footer();
?>
