<?php /* Template Name: banner */ ?>
<?php
    get_header();
    // get theme options
    $options = get_option('scout_theme_options');
?>

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
                      <div>
                          <?php if ( function_exists( 'the_custom_logo' ) ) {
                              $custom_logo_id = get_theme_mod( 'custom_logo' );
                              $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                              $link = esc_url( home_url('/') );
                              echo"<a href=\"$link\"><img class=\"site-logo\" src=\"$image[0]\" alt=\"\"></a>";
           	              }?>
                      </div>
                      <?php
                      if ( has_post_thumbnail() ) {
                          echo"<div id=\"banner-img\" class=\"img-responsive center-block\">";
                          the_post_thumbnail();
                          echo"</div>";
                      }  ?>
                      <h2><?php the_title()?></h2>
                  </header>
                  <?php get_template_part('loops/content', 'page'); ?>
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
