<?php get_header(); ?>

<main class="container-responsive mt-5">
	<div class="row">

		<div class="col-sm">
			<div id="content" role="main">
				<header class="mb-4 border-bottom">
					<h1>
						<?php _e('Category: ', 'b4st'); echo single_cat_title(); ?>
					</h1>
				</header>
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
