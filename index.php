<?php get_header(); ?>

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
					<?php get_template_part('loops/index-loop'); ?>
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
