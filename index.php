<?php
	get_header();
	b4st_main_before();
?>

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

<?php
	b4st_main_after();
	get_footer(); 
?>
