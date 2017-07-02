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
        <h1>Category: <?php echo single_cat_title(); ?></h1>
        <hr>
        <?php get_template_part('loops/content', get_post_format()); ?>
      </div><!-- /#content -->
    </div>
    <?php if ($options['sidebar'] != true) {
      echo"
        <div class=\"col-sm-4\" id=\"sidebar\" role=\"navigation\">";
            get_sidebar();
        echo"</div>";
    }
    ?>
  </div><!-- /.row -->
</div><!-- /.container -->

<?php get_footer(); ?>
