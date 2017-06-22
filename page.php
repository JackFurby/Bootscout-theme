<?php get_header(); ?>

<div class="container">
  <div class="row">

    <div class="<?php if(is_active_sidebar('sidebar-widget-area')): ?>col-sm-8<?php else: ?>col-sm-12<?php endif; ?>">
      <div id="content" role="main">
        <header>
            <div>
                <?php if ( function_exists( 'the_custom_logo' ) ) {
                    $custom_logo_id = get_theme_mod( 'custom_logo' );
                    $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                    $link = esc_url( home_url('/') );
                    echo"<a href=\"$link\"><img class=\"site-logo\" src=\"$image[0]\" alt=\"\"></a>";
       	      }?>
            </div>
            <h2><?php the_title()?></h2>
        </header>
        <?php get_template_part('loops/content', 'page'); ?>
      </div><!-- /#content -->
    </div>

    <div class="col-sm-4" id="sidebar" role="navigation">
       <?php get_sidebar(); ?>
    </div>

  </div><!-- /.row -->
</div><!-- /.container -->

<?php get_footer(); ?>
