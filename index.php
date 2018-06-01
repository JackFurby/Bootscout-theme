<?php get_header(); ?>

<main class="container-responsive mt-5">
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
			get_sidebar();
		}
		?>

	</div><!-- /.row -->
</main><!-- /.container-responsive -->

<?php get_footer(); ?>
