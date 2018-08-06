
<?php
	get_header();
?>


<div class="container first menu-category">
	<?php wp_nav_menu(array('theme_location' => 'category_menu')); ?>
</div>
<div class="container padding">
	<?php get_template_part('templates/loop'); ?>
</div>

<?php
	get_footer();
?>
