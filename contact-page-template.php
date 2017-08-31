<?php /* Template Name: Contact template */ ?>
<?php get_header(); ?>
<?php
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
                    <?php if ( function_exists( 'the_custom_logo' ) ) {
                        $custom_logo_id = get_theme_mod( 'custom_logo' );
                        $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                        $link = esc_url( home_url('/') );
                        if ( has_custom_logo() ) {
                            echo"<div><a href=\"$link\"><img class=\"site-logo\" src=\"$image[0]\" alt=\"\"></a></div>";
                        }
               	    }?>
                <h2><?php the_title()?></h2>
            </header>
            <?php
                if (trim($options['fb_link']) != '') {
                    echo"<a href=\"".$options['fb_link']."\" class=\"ml-1\"><i id=\"social-fb\" class=\"fa fa-facebook-square fa-3x social\"></i></a>";
                }
                if (trim($options['twitter_link']) != '') {
                    echo"<a href=\"".$options['twitter_link']."\" class=\"ml-1\"><i id=\"social-tw\" class=\"fa fa-twitter-square fa-3x social\"></i></a>";
                }
            ?>
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
