<?php /* Template Name: Section links page */ ?>
<?php get_header(); ?>
<?php
    // get theme options
    $options = get_option('scout_theme_options');
?>

<!-- /#contaner and #wrap used for sticky footer -->
<div id="container">
	<div id="wrap">
		<div class="container">
			<div class="row">
				<?php
				if ($options['sidebar'] != true) {
					if (is_active_sidebar('sidebar-widget-area')) {
						echo"<div class=col-sm-8>";
					} else {
						echo"<div class=col-sm-12>";
					}
				} else {
					echo"<div class=col-sm-12>";
				}
				?>
				<div id="content" role="main">
					<header>
						<?php if ( function_exists( 'the_custom_logo' ) ) {
							$custom_logo_id = get_theme_mod( 'custom_logo' );
							$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
							$link = esc_url( home_url('/') );
							if ( has_custom_logo() ) {
								echo"<div><a href=\"$link\"><img class=\"site-logo pt-2\" src=\"$image[0]\" alt=\"\"></a></div>";
							}
						}?>
					</header>

					<?php get_template_part('loops/page-content'); ?>

					<?php
					if (trim($options['beaver-page-link']) != '') {
						$is_beaver = true;
					} else {
						$is_beaver = false;
					}
					if (trim($options['cub-page-link']) != '') {
						$is_cub = true;
					} else {
						$is_cub = false;
					}
					if (trim($options['scout-page-link']) != '') {
						$is_scout = true;
					} else {
						$is_scout = false;
					}
					if (trim($options['explorer-page-link']) != '') {
						$is_explorer = true;
					} else {
						$is_explorer = false;
					}
					if (trim($options['network-page-link']) != '') {
						$is_network = true;
					} else {
						$is_network = false;
					}

					if ($is_beaver || $is_cub || $is_scout || $is_explorer || $is_network) {
						echo"<ul id=\"p-0\">";
						if ($is_beaver) {
							echo"<div class=\"card text-center d-inline-block m-4\" id=\"bevMainBtn\" style=\"width: 15rem;\">
							<img class=\"card-img-top section-img\" src=\"";?><?php bloginfo('template_directory'); ?><?php echo"/img/Beaver_PNG.png\" alt=\"Card image cap\">
							<div class=\"card-block pb-3\">
							<p class=\"card-text\"><strong>Age</strong>: 6 - 8</p>
							<a href=\"".$options['beaver-page-link']."\" class=\"btn btn-primary\">View more</a>
							</div>
							</div>";
						}
						if ($is_cub) {
							echo"<div class=\"card text-center d-inline-block m-4\" id=\"cubMainBtn\" style=\"width: 15rem;\">
							<img class=\"card-img-top section-img\" src=\"";?><?php bloginfo('template_directory'); ?><?php echo"/img/Cub_PNG.png\" alt=\"Card image cap\">
							<div class=\"card-block pb-3\">
							<p class=\"card-text\"><strong>Age</strong>: 8 - 10.5</p>
							<a href=\"".$options['cub-page-link']."\" class=\"btn btn-primary\">View more</a>
							</div>
							</div>";
						}
						if ($is_scout) {
							echo"<div class=\"card text-center d-inline-block m-4\" id=\"scoMainBtn\" style=\"width: 15rem;\">
							<img class=\"card-img-top section-img\" src=\"";?><?php bloginfo('template_directory'); ?><?php echo"/img/Scouts_PNG.png\" alt=\"Card image cap\">
							<div class=\"card-block pb-3\">
							<p class=\"card-text\"><strong>Age</strong>: 10.5 - 14</p>
							<a href=\"".$options['scout-page-link']."\" class=\"btn btn-primary\">View more</a>
							</div>
							</div>";
						}
						if ($is_explorer) {
							echo"<div class=\"card text-center d-inline-block m-4\" id=\"expMainBtn\" style=\"width: 15rem;\">
							<img class=\"card-img-top section-img\" src=\"";?><?php bloginfo('template_directory'); ?><?php echo"/img/Explorers_PNG.png\" alt=\"Card image cap\">
							<div class=\"card-block pb-3\">
							<p class=\"card-text\"><strong>Age</strong>: 14 - 18</p>
							<a href=\"".$options['explorer-page-link']."\" class=\"btn btn-primary\">View more</a>
							</div>
							</div>";
						}
						if ($is_network) {
							echo"<div class=\"card text-center d-inline-block m-4\" id=\"netMainBtn\" style=\"width: 15rem;\">
							<img class=\"card-img-top section-img\" src=\"";?><?php bloginfo('template_directory'); ?><?php echo"/img/Network_PNG.png\" alt=\"Card image cap\">
							<div class=\"card-block pb-3\">
							<p class=\"card-text\"><strong>Age</strong>: 18 - 25</p>
							<a href=\"".$options['network-page-link']."\" class=\"btn btn-primary\">View more</a>
							</div>
							</div>";
						}
						echo"</ul>";
					}
					?>
				</div><!-- /#content -->
			</div>
			<?php if ($options['sidebar'] != true) {
				echo"
				<div class=\"col-sm-4\" id=\"sidebar\" role=\"navigation\">";
				get_sidebar();
				echo"</div>";
			}
			?>
			</div><!-- /.row -->
		</div><!-- /.container -->
	</div><!-- /#wrap -->
</div><!-- /#container -->

<?php get_footer(); ?>
