<?php
	get_header();
	b4st_main_before();
?>

<?php get_template_part('loops/banner'); ?>

<main class="container-responsive mt-5">
	<div class="row">

		<div class="col-sm">
			<div id="content" role="main">
				<?php get_template_part('loops/page-content'); ?>
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
