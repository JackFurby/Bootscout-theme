<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
	<?php extra_styles(); ?>
</head>

<body <?php body_class(); ?>>

<?php b4st_navbar_before();?>

<?php $options = get_option('scout_theme_options');?>

<?php $brand_colour = get_text_light_dark($options['navColour']); ?>

<nav id="site-navbar" class="navbar navbar-expand-lg navbar-<?php echo get_reverse_light_dark($brand_colour) ?> bg-scout-<?php echo (!empty($options['navColour']) ? $options['navColour'] : 'purple') ?> shadow-sm">
	<div class="container-fluid">

		<?php if ( function_exists( 'the_custom_logo' ) ) {
			$custom_logo_id = get_theme_mod( 'custom_logo' );
			$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
			$link = esc_url( home_url('/') );
			if ( has_custom_logo() ) {
				echo"<div><a href=\"$link\"><img class=\"navbar-brand-$brand_colour\" src=\"$image[0]\" style=\"max-height:65px; width:auto; height:auto;\"></a></div>";
			} else {
				echo"<a class=\"navbar-brand-$brand_colour\" href=\""; echo esc_url( home_url('/') ); echo"\">";
					bloginfo('name');
					echo"</a>";
			}
		}?>

		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDropdown" aria-controls="navbarDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse flex-wrap flex-row-reverse" id="navbarDropdown">

			<div id="nav-extras" class="d-none d-lg-flex flex-row-reverse">
				<?php b4st_navbar_search("ps-3");?>
				<?php if ((isset($options['navbarQuickLinks']) ? $options['navbarQuickLinks'] : false)) {
					// makes sure links are not empty
					if (trim($options['fb_link']) != '') {
						$got_fb = true;
					} else {
						$got_fb = false;
					}
					if (trim($options['twitter_link']) != '') {
						$got_tw = true;
					} else {
						$got_tw = false;
					}
					if (trim($options['osm_link']) != '') {
						$got_osm = true;
					} else {
						$got_osm = false;
					}
					if ($got_tw || $got_fb || $got_osm) {

						echo"<ul class=\"p-0 m-0 list-inline\">";
						if ($got_fb) {
							echo"<li data-toggle=\"tooltip\" title=\"Like us on Facebook\" class=\"list-inline-item m-0\"><a href=\"".$options['fb_link']."\" class=\"ps-1 pe-1 nav-link\" ><i id=\"social-fb\" class=\"h5 navbar-brand-$brand_colour bi-facebook\"></i></a></li>";
						}
						if ($got_tw) {
							echo"<li data-toggle=\"tooltip\" title=\"Follow us on Twitter\" class=\"list-inline-item m-0\"><a href=\"".$options['twitter_link']."\" class=\"ps-1 pe-1 nav-link\"><i id=\"social-tw\" class=\"h5 navbar-brand-$brand_colour bi-twitter\"></i></a></li>";
						}
						if ($got_osm) {
							echo"<li data-toggle=\"tooltip\" title=\"Login to Online Scout Manager\" class=\"list-inline-item m-0\"><a href=\"".$options['osm_link']."\" class=\"ps-1 pe-1 nav-link\"><i id=\"social-osm\" class=\"h5 navbar-brand-$brand_colour boots-OSM\"></i></a></li>";
						}
						echo"</ul>";
					}
				}
				?>
			</div>

			<?php
				wp_nav_menu( array(
					'theme_location'  => 'navbar',
					'container'       => false,
					'menu_class'      => '',
					'fallback_cb'     => '__return_false',
					'items_wrap'      => '<ul id="%1$s" class="navbar-nav navbar-large me-auto mt-2 mt-lg-0 d-none d-lg-flex flex-grow-1 %2$s">%3$s</ul>',
					'depth'           => 0,
					'walker'          => new b4st_walker_nav_menu()
				) );
			?>

			<?php
				wp_nav_menu( array(
					'theme_location'  => 'navbar',
					'container'       => false,
					'menu_class'      => '',
					'fallback_cb'     => '__return_false',
					'items_wrap'      => '<ul id="%1$s" class="navbar-nav navbar-small me-auto mt-2 mt-lg-0 d-flex d-lg-none %2$s">%3$s</ul>',
					'depth'           => 0,
					'walker'          => new b4st_walker_nav_menu_mobile()
				) );
				b4st_navbar_search("d-flex d-lg-none");
			?>

		</div>

	</div>
</nav>

<?php b4st_navbar_after();?>
