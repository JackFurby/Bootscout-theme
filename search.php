<?php get_header(); ?>

<!-- /#contaner and #wrap used for sticky footer -->
<div id="container">
    <div id="wrap">
        <div class="container">
          <div class="row">

            <div class="<?php if(is_active_sidebar('sidebar-widget-area')): ?>col-sm-8<?php else: ?>col-sm-12<?php endif; ?>">
              <div id="content" role="main">
                <h1><?php _e('Search Results for', 'b4st'); ?> &ldquo;<?php the_search_query(); ?>&rdquo;</h1>
                <hr/>
                <?php get_template_part('loops/content', 'search'); ?>
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
    </div><!-- /#wrap -->
</div><!-- /#container -->

<?php get_footer(); ?>
