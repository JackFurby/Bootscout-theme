<!DOCTYPE html>
<html class="no-js">
<head>
	<title><?php wp_title('•', true, 'right'); bloginfo('name'); ?></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Expires" content="30">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<nav class="navbar navbar-expand-md navbar-dark bg-scout-purple">

	<a class="navbar-brand" href="<?php echo esc_url( home_url('/') ); ?>">
		<img src="<?php bloginfo('template_directory'); ?>/img/Fleur_de_lis_White.png" class="d-inline-block align-top" style="height:30px;">
		<?php bloginfo('name'); ?>
	</a>

	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarNavDropdown">
		<?php
		wp_nav_menu( array(
			'theme_location'  => 'navbar',
			'container'       => false,
			'menu_class'      => '',
			'fallback_cb'     => '__return_false',
			'items_wrap'      => '<ul id="%1$s" class="nav-main navbar-nav mr-auto mt-2 mt-lg-0 %2$s">%3$s</ul>',
			'depth'           => 2,
			'walker'          => new b4st_walker_nav_menu()
		) );
		?>
		<?php get_template_part('navbar-search'); ?>
	</div>
</nav>
