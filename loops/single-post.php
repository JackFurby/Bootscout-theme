<?php
/*
 * The Single Post
 */
?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>
  <article role="article" id="post_<?php the_ID()?>" <?php post_class()?>>
    <header class="mb-5">
      <h1><?php the_title()?></h1>
      <div class="header-meta text-muted">
        <?php
          _e('By ', 'b4st');
          the_author_posts_link();
          _e(' on ', 'b4st');
          b4st_post_date();
        ?><br>
        <?php
          _e('In ', 'b4st');
          the_category(', ');
          _e(' / ', 'b4st');

          if (has_tag()) {
            the_tags('Tags: ', ', ');
            _e(' / ', 'b4st');
          };
        ?><a href="#post-comments"><?php
          $comment_count = get_comments_number();
          printf(
            /* translators: 1: comment count number. */
            esc_html( _nx( '%1$s comment', '%1$s comments', $comment_count, 'b4st' ) ),
            number_format_i18n( $comment_count )
          );
        ?></a>
      </div>
    </header>
    <section class="entry-content clearfix">
      <?php
        the_post_thumbnail();
        the_content();
        wp_link_pages();
      ?>
    </section>

    <?php wp_link_pages(); ?>

    <footer class="container mt-5 border-top pt-3">

      <div class="author-bio media mt-5 bg-white rounded p-3 mb-2 shadow-sm">
        <?php b4st_author_avatar(); ?>
        <div class="media-body ml-3">
          <p class="h4 author-name"><?php _e('Author: ', 'b4st'); the_author_posts_link(); ?></p>
          <?php if (b4st_author_description()) {
            ?>
            <div class="author-description"><?php b4st_author_description(); ?></div>
            <?php
          } ?>
          <p class="author-other-posts mb-0"><?php _e('Other posts by ', 'b4st'); the_author_posts_link(); ?></p>
        </div>
      </div><!-- /.author-bio -->

      <div class="row mt-5 border-top pt-3 pb-5">
        <div class="col">
          <?php previous_post_link('%link', '<i class="fas fa-fw fa-angle-left"></i>Previous post: '.'%title'); ?>
        </div>
        <div class="col text-right">
          <?php next_post_link('%link', 'Next post: '.'%title'.'<i class="fas fa-fw fa-angle-right"></i>'); ?>
        </div>
      </div>

    </footer>
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
