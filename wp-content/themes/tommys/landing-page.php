
<!-- <!doctype html>
<html>
	<head>
		<meta charset="utf-8"/>
		<meta name='viewport' content='initial-scale=1,maximum-scale=1' />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
		<link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
		<link rel="stylesheet" href="style.css" />
		<title>version sans php</title>
		<script type="text/javascript" src="index.js"></script>
	</head>
	<body id="anchor" style="background: linear-gradient(45deg, #dedede, #fefefe);">
	<div id="whitesail"></div> -->

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
					<button id="button-prestations-particuliers" class="button-primary" style="background: #ff8877">Particuliers</button>
					<button id="button-prestations-professionnels" class="button-primary" style="background: #ff8877">Professionnels</button>
				</div>
			</div>
		</div>
	</section>
	<!--  -->
	<section class="" id="prestations-particuliers" style="height: 0px; overflow: hidden; transition-duration: 500ms">
		<div class="container">
			<h1>Réception privées</h1>
			<div class="row">
				<div class="columns six">
					<p>
						Nous vous proposons un bar mobile et des cocktails sur mesures mais aussi une prestation événementielle complète.<br/><br/>
						Parce que tous vos évènements, célébrations, PACS, anniversaires, mariages… méritent le meilleur, nous mettons tout en œuvre pour faire de cette journée une parenthèse enchantée.<br/><br/>
						Du bar à cocktails transportable dirigé par une équipe de professionnels en passant par le traiteur choisi avec soin, au lieu qui fera la différence, à la décoration soignée, vous n’aurez plus qu’à vous laisser porter.
					</p>
				</div>
				<div class="columns six">
					<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/cocktail.jpg" width="400px" alt="">
				</div>
			</div>
			<div class="row">
				<div class="columns six">
					<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/cocktail.jpg" width="400px" alt="">
				</div>
				<div class="columns six">
					<h3>Cette prestation vous permet de respirer.</h3>
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
			<h1>Événement en entreprise</h1>
			<p>
				Un besoin pour une soirée de lancement de produits, une rencontre entre collaborateurs ou toute autre occasion à célébrer dans votre entreprise ?<br/><br/>
				Nous sommes là pour répondre à vos envies.Une prestation haut de gamme de création de cocktails adaptés à vos besoins, personnalisables à l’infini afin de respecter votre cahier des charges. Des produits de grande qualité sélectionnés par nos soins, des préparations maisons afin de vous offrir le meilleur des ingrédients. Vos cocktails reflèteront votre entreprise, pour mettre en avant votre marque, votre positionnement, pour un petit plus original dans votre stratégie de communication.<br/><br/>
				Cette prestation peut inclure un service traiteur haut de gamme adapté à votre soirée grâce à notre solide connaissance des chefs et traiteurs de la région.<br/>
				<i>Maximum 500 personnes</i>
			</p>
			<div class="row">
				<h2>Team building</h2>
				<div class="columns six">
					<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/cocktail.jpg" width="400px" alt="">
				</div>
				<div class="columns six">
					<p>
						Notre équipe se déplace pour vous proposer des ateliers de mixologie en groupe de vingt personnes maximums. Une activité originale et conviviale entre collègues.<br/><br/>
						Les ingrédients et les préparations sont de grandes qualités et sélectionnés avec soins afin d'offrir le meilleur à vos équipes. Le but est d’élaborer un ou deux cocktails comme nos professionnels, ou dans un style Top Chef avec un buffet où vous aurez tous les ingrédients nécessaires pour réaliser vos propres créations plus surprenantes les unes que les autres (Modalités exactes).
					</p>
				</div>
			</div>
			<div class="row">
				<h2>Consulting</h2>
				<p>
					Notre expertise à votre service.<br/>Nous nous déplaçons dans votre établissement afin de former vos équipes, créer une nouvelle carte des cocktails et vous conseiller sur une méthode de travail la plus efficace possible. Les cocktails préparés par vos équipes s’adapteront au mieux à l’image de votre lieu et surprendront vos clients.
				</p>
				<div class="columns six">
					<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/cocktail.jpg" width="400px" alt="">
				</div>
				<div class="columns six">
					<h3>Les Accords Éphémères (sur le blog et les events à venir)</h3>
					<p>
						Événement singulier et original, où chaque plat est accompagné d’un cocktail inédit. Venez déguster lors de ces soirées un menu de 8 plats élaborés par des chefs reconnus ou viennent se mêler 8 créations de cocktails réalisées par Tom Albani.<br/><br/>
						Du choix des produits, locaux, originaux et savoureux aux techniques culinaires inventives et peu connues, votre palais ira de découvertes en surprises.<br/><br/>
						Une expérience unique qui va mettre en émoi vos cinq sens. Tout est mis en œuvre pour que vous passiez un moment d’exception, entre les endroits magiques, l’ambiance chaleureuse, le service impeccable et les dégustations inoubliables.<br/><br/>
					</p>
				</div>
				<h3>Laissez-vous séduire…</h3>
				<p>
					Vous pouvez retrouver notre vidéo de la deuxième édition des Accords Éphémères sur le site et nos réseaux sociaux, pour vous donner l'eau à la bouche.
				</p>
			</div>
		</div>
	</section>
	<!--  -->
	<section id="team" style="background: url('<?php echo get_bloginfo( 'template_directory' ); ?>/img/background2.jpg');">
		<div class="container">
			<h1>_ THE _ TEAM _</h1>
			<div class="row">
				<div class="columns two">
					<br/>
				</div>
				<div class="columns four">
					<div class="people-container">
						<div class="img" style="background: url('<?php echo get_bloginfo( 'template_directory' ); ?>/img/team/3.jpg')" /></div>
						<div class="name">
							<b>Tom Albani Brun</b><br/>
							Fondateur et chef barman
						</div>
					</div>
				</div>
				<div class="columns four">
					<div class="people-container">
						<div class="img" style="background: url('<?php echo get_bloginfo( 'template_directory' ); ?>/img/team/2.jpg')" /></div>
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
						<div class="img" style="background: url('<?php echo get_bloginfo( 'template_directory' ); ?>/img/team/1.jpg')" /></div>
						<div class="name">
							<b>Zoé Vappereau</b><br/>
							Chargée de communication et marketing
						</div>
					</div>
				</div>
				<div class="columns four">
					<div class="people-container">
						<div class="img" style="background: url('<?php echo get_bloginfo( 'template_directory' ); ?>/img/team/2.jpg')" /></div>
						<div class="name">
							<b>Benjamin Robert</b><br/>
							Barman
						</div>
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
