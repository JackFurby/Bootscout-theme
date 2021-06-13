<?php
/*
 * The Index Post (or excerpt)
 * ===========================
 * Used by index.php, category.php and author.php
 */
?>

<?php
	if (has_post_thumbnail()) {
		$thumbnail_mt = "mt-5";
	} else {
		$thumbnail_mt = "";
	}
?>

<article role="article" id="post_<?php the_ID()?>" <?php post_class("mb-4 card shadow-sm $thumbnail_mt"); ?> >
	<?php #the_post_thumbnail("full", array("class" => "card-img-top")); ?>
	<?php the_post_thumbnail("full", array("class" => "position-relative blog-card-featured-image px-4")); ?>
	<header class="card-header bg-white">
		<h2 class="mw-100 break-word">
			<a href="<?php the_permalink(); ?>">
				<?php the_title()?>
			</a>
		</h2>
		<p class="text-muted">
			<i class="far fa-calendar-alt"></i>&nbsp;<?php b4st_post_date(); ?>&nbsp;|
			<i class="far fa-user"></i>&nbsp; <?php _e('By ', 'b4st'); the_author_posts_link(); ?>
			<?php if(comments_open()) { ?>&nbsp;|
				<i class="far fa-comment"></i>&nbsp;<a href="<?php comments_link(); ?>"><?php printf( _nx( 'One Comment', '%1$s Comments', get_comments_number(), '', 'b4st' ), number_format_i18n( get_comments_number() ) ); ?></a>
			<?php } ?>
		</p>
	</header>
	<div class="card-body">
		<a class="btn btn-circle btn-scout-blue position-relative float-end" style="top: -41px;" href="<?php the_permalink(); ?>">
			<i class="bi bi-chevron-right" style="margin-left: 2px; margin-top: 5px;"></i>
		</a>
		<?php if ( has_excerpt( $post->ID ) ) {
			the_excerpt("m-0");
		?><p><a href="<?php the_permalink(); ?>">
		<?php _e( '&hellip; ' . __('Continue reading', 'b4st' ) . ' <i class="bi bi-chevron-right"></i>', 'b4st' ) ?>
		</a></p>
		<?php } else {
			the_content( __( '&hellip; ' . __('Continue reading', 'b4st' ) . ' <i class="bi bi-chevron-right"></i>', 'b4st' ) );
		} ?>
	</div>
</article>
