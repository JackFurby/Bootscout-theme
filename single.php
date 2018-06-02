<?php get_header(); ?>

<?php get_template_part('loops/banner'); ?>

<main class="container-responsive mt-5">
	<div class="row">
		<div class="col-sm">
			<div id="content" role="main">
				<?php get_template_part('loops/single-post', get_post_format()); ?>
			</div><!-- /#content -->
		</div>

		<?php if ($options['sidebar'] != true) {
			get_sidebar();
		}
		?>

	</div><!-- /.row -->
</main><!-- /.container-responsive -->

<?php get_footer(); ?>
