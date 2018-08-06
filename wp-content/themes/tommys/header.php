
<!doctype html>
<html>
	<head>
		<meta charset="utf-8"/>
		<meta name='viewport' content='initial-scale=1,maximum-scale=1' />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css" />
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">		<link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet"/>
		<link href="https://fonts.googleapis.com/css?family=Archivo" rel="stylesheet">
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url');  ?>" />
		<title><?php the_title(); ?></title>
		<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/index.js"></script>
		<?php wp_head(); ?>
	</head>
	<body>

	<div id="whitesail"></div>

	<?php
		get_header();
		get_template_part('templates/header');
	?>
