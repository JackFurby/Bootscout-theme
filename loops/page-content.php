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
    <section>
      <?php the_content()?>
      <?php wp_link_pages(); ?>
    </section>
  </article>
<?php
  endwhile;
  else :
    get_template_part('loops/404');
  endif;
?>
