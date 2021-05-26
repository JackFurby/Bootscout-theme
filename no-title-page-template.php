<?php /* Template Name: No title template */ ?>

<?php
	get_header();
	b4st_main_before();
?>

<?php get_template_part('loops/banner'); ?>

<main id="main" class="container mt-5">
  <div class="row">

		<?php get_template_part('content-column'); ?>

		<div class="col-lg">
			<div id="content" role="main">
				<?php get_template_part('loops/no-title-page-content'); ?>
			</div><!-- /#content -->
		</div>

	</div>

	<?php if ((isset($options['sidebar']) ? $options['sidebar'] : false)) {
		get_sidebar();
	}
	?>

  </div><!-- /.row -->
</main><!-- /.container -->

<?php
	b4st_main_after();
	get_footer();
?>
