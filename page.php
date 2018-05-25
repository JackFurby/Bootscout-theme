<?php
	get_header();

	if ( has_post_thumbnail() ) {
		$caption = esc_attr( get_post_meta( get_the_ID(), "featured_image_caption", true ) );
		echo "<div class='d-flex text-center banner'>";
		if (!empty($caption) || trim($caption) != "") { // If caption exists and is not an empty string
			echo "<div class=\"align-self-center w-100 position-absolute\" style='z-index:10;'>
				<h3 class=\"banner-caption h1 text-white text-truncate pr-3 pl-3\">$caption</h3>
			</div>
			<div class=\"center-block position-absolute w-100 banner\" style=\"filter:brightness(75%);overflow:hidden;\">";
		} else {
			echo"<div class=\"center-block position-absolute w-100 banner\" style=\"overflow:hidden;\">";
		}
		the_post_thumbnail('full', array( 'class' => 'banner-img img-responsive' ));
		echo"</div>";
		echo"</div>";
	}
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
