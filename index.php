<?php
    get_header();
    b4st_main_before();
?>

<main id="site-main" class="container mt-5">
  <div class="row">

		<?php get_template_part('content-column'); ?>

    <div id="content" role="main">

      <?php get_template_part('loops/index-loop'); ?>

    </div><!-- /#content -->

	</div>

	<?php if ((isset($options['sidebar']) ? $options['sidebar'] : false) != true) {
		get_sidebar();
	}
	?>

  </div><!-- /.row -->
</main><!-- /.container -->

<?php
    b4st_main_after();
    get_footer();
?>
