<?php
/*
 * The Page Content Loop
 */
?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>
  <article role="article" id="post_<?php the_ID()?>" <?php post_class()?>>
    <?php if (!empty(get_the_title())) { ?>
      <header>
        <h1 class="mb-5">
          <?php the_title() ?>
        </h1>
      </header>
    <?php } ?>
    <section class="after-content">
      <?php the_content()?>
    </section>
		<?php wp_link_pages(); ?>
  </article>
<?php
// This continues in the single post loop
	if ( comments_open() || get_comments_number() ) :
		//comments_template();
		comments_template('/loops/single-post-comments.php');
	endif;
endwhile; else :
	get_template_part('loops/404');
endif;
?>
