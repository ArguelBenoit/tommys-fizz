
<!doctype html>
<html>
	<head>
		<meta charset="utf-8"/>
		<meta name='viewport' content='initial-scale=1,maximum-scale=1' />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
		<link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
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

	<div class="main-container">
