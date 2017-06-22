<?php /* Template Name: no title (no sidebar) */ ?>
<?php get_header(); ?>

<div class="container">
  <div class="row">
    <div class="col-sm-12">
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
         </header>
        <?php get_template_part('loops/content', 'page'); ?>
      </div><!-- /#content -->
    </div>
  </div><!-- /.row -->
</div><!-- /.container -->

<?php get_footer(); ?>
