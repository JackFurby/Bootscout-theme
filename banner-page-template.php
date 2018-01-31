<?php /* Template Name: banner */ ?>
<?php
	get_header();
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
						<?php
						if ( has_post_thumbnail() ) {
							echo"<div id=\"banner-img\" class=\"img-responsive center-block w-100 overflow-hide mt-3\" style=\"height:400px\">";
							the_post_thumbnail('full', array( 'class' => 'm-0 w-100' ));
							echo"</div>";
						}  ?>
					</header>
					<?php get_template_part('loops/page-content'); ?>
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
