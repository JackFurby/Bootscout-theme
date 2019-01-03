<?php /* Template Name: Contact template */ ?>

<?php
	get_header();
	b4st_main_before();
?>

<?php get_template_part('loops/banner'); ?>

<main class="container-responsive mt-5">
	<div class="row">

		<div class="col-sm">
			<div id="content" role="main">
				<header>
					<h1><?php wp_title(''); ?></h1>
				</header>
				<?php
				if (trim($options['fb_link']) != '') {
					echo"<a href=\"".$options['fb_link']."\" class=\"ml-1\"><i id=\"social-fb\" class=\"fab fa-facebook-square fa-3x\"></i></a>";
				}
				if (trim($options['twitter_link']) != '') {
					echo"<a href=\"".$options['twitter_link']."\" class=\"ml-1\"><i id=\"social-tw\" class=\"fab fa-twitter-square fa-3x\"></i></a>";
				}
				?>
				<?php get_template_part('loops/page-content-no-title');?>
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
