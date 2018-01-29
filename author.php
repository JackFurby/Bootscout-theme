<?php
$userInfo = get_userdata( get_query_var('author'));
$isAuthor = true;
if (
	!in_array('contributor', $userInfo -> roles) &&
	!in_array('administrator', $userInfo -> roles) &&
	!in_array('author', $userInfo -> roles) &&
	!in_array('editor', $userInfo -> roles)
) {
	$isAuthor = false;
	wp_redirect(get_bloginfo('url').'/404', 404);
}
?>
	<?php get_header(); ?>

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
					<header>
						<?php if ($isAuthor === true): ?>
							<h1>
								<?php echo sprintf(__('Author: %s', 'b4st'), get_the_author_meta('user_nicename', $userInfo -> data -> ID)); ?>
								<hr/>
								<?php echo $curauth->display_name; ?>
								<hr/>
							</h1>
						<?php endif; ?>
					</header>
					<?php if(have_posts()): ?>
						<?php get_template_part('loops/index-loop'); ?>
					<?php else: ?>
						<?php get_template_part('loops/index-none'); ?>
					<?php endif; ?>

				</div><!-- /#content -->
			</div>

			<?php if ($options['sidebar'] != true) {
				echo"
				<div class=\"col-sm-4\" id=\"sidebar\" role=\"navigation\">";
				get_sidebar();
				echo"</div>";
			}
			?>

		</div>
		<!-- /.row -->
	</div>
	<!-- /.container -->

<?php get_footer(); ?>
