<?php get_header(); ?>

<div class="container">
  <div class="row">

    <div class="<?php if(is_active_sidebar('sidebar-widget-area')): ?>col-sm-8<?php else: ?>col-sm-12<?php endif; ?>">
      <div id="content" role="main">
        <h1><?php _e('Search Results for', 'b4st'); ?> &ldquo;<?php the_search_query(); ?>&rdquo;</h1>
        <hr/>
        <?php get_template_part('loops/content', 'search'); ?>
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
