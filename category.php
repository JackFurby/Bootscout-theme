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
        <!-- left and right banner images start -->
        <?php
        if ($bootscout['banner_2_image'] != "") {
            echo "<div class=\"leftImg\">";
            $imgSrc = wp_get_attachment_image_src( $bootscout['banner_2_image'], 'full');
            $img = $imgSrc[0];
            echo "<img class=\"bannerSideImgLeft\" src=\"$img\" />";
            echo "</div>";
        }
        if ($bootscout['banner_1_image'] != "") {
            echo "<div class=\"rightImg\">";
            $imgSrc = wp_get_attachment_image_src( $bootscout['banner_1_image'], 'full');
            $img = $imgSrc[0];
            echo "<img class=\"bannerSideImgRight\" src=\"$img\" />";
            echo "</div>";
        }
         ?>
      <!-- left and right banner images end -->
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
