<?php
    get_header();
    b4st_main_before();
?>

<main id="site-main" class="container mt-5">
  <div class="row">

	<?php
		if ((isset($options['sidebar']) ? $options['sidebar'] : false) != true) {
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
        <header class="mb-4 border-bottom">
          <h1>
            <?php _e('Search Results for', 'b4st'); ?> &ldquo;<?php the_search_query(); ?>&rdquo;
          </h1>
        </header>
        <?php get_template_part('loops/search-results'); ?>
      </div><!-- /#content -->
    </div>

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
