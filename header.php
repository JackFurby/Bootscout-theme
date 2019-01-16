<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php b4st_navbar_before();?>

<nav id="navbar" class="navbar navbar-expand-md navbar-dark bg-scout-purple solid-shadow">
	<div class="container">

		<?php if ( function_exists( 'the_custom_logo' ) ) {
			$custom_logo_id = get_theme_mod( 'custom_logo' );
			$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
			$link = esc_url( home_url('/') );
			if ( has_custom_logo() ) {
				echo"<div><a href=\"$link\"><img class=\"navbar-brand\" src=\"$image[0]\" style=\"height:65px\"></a></div>";
			} else {
				echo"<a class=\"navbar-brand\" href=\""; echo esc_url( home_url('/') ); echo"\">";
					bloginfo('name');
					echo"</a>";
			}
		}?>

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarDropdown" aria-controls="navbarDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarDropdown">
			<?php
				wp_nav_menu( array(
					'theme_location'  => 'navbar',
					'container'       => false,
					'menu_class'      => '',
					'fallback_cb'     => '__return_false',
					'items_wrap'      => '<ul id="%1$s" class="navbar-nav mr-auto mt-2 mt-lg-0 %2$s">%3$s</ul>',
					'depth'           => 0,
					'walker'          => new b4st_walker_nav_menu()
				) );
			?>

			<?php b4st_navbar_search();?>
		</div>

	</div>
</nav>

<?php b4st_navbar_after();?>
