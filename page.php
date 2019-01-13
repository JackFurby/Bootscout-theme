<?php
    get_header();
    b4st_main_before();
?>

<?php get_template_part('loops/banner'); ?>

<main id="main" class="container mt-5">
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

	    <div class="col-sm">
	      <div id="content" role="main">
	        <?php get_template_part('loops/page-content'); ?>
	      </div><!-- /#content -->
	    </div>

	</div>

	<?php if ($options['sidebar'] != true) {
		get_sidebar();
	}
	?>

  </div><!-- /.row -->
</main><!-- /.container -->

<?php
    b4st_main_after();
    get_footer();
?>
