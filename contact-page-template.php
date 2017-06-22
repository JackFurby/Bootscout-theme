<?php /* Template Name: Contact template (including sidebar) */ ?>
<?php get_header(); ?>
<?php
    // get theme options
    $options = get_option('scout_theme_options');
?>

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

        <?php
        if (trim($options['fb_link']) != '') {
            $is_facebook_link = true;
        } else {
            $is_facebook_link = false;
        }
        if (trim($options['twitter_link']) != '') {
            $is_twitter_link = true;
        } else {
            $is_twitter_link = false;
        }

        if ($is_facebook_link || $is_twitter_link) {
            echo"<ul class=\"list-unstyled list-inline list-social-icons\">";
            if ($is_facebook_link) {
                echo"<li><a href=\"".$options['fb_link']."\"><i class=\"fa fa-facebook-square fa-2x\"></i></a></li>";
            }
            if ($is_twitter_link) {
                echo"<li><a href=\"".$options['twitter_link']."\"><i class=\"fa fa-twitter-square fa-2x\"></i></a></li>";
            }
            echo"</ul>";
        }
        ?>

      </div><!-- /#content -->
    </div>

    <div class="col-sm-4" id="sidebar" role="navigation">
       <?php get_sidebar(); ?>
    </div>

  </div><!-- /.row -->
</div><!-- /.container -->

<?php get_footer(); ?>
