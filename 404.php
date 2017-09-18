<?php get_header(); ?>

<!-- /#contaner and #wrap used for sticky footer -->
<div id="container">
    <div id="wrap">
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
                <div class="alert alert-warning">
                  <h1><i class="glyphicon glyphicon-warning-sign"></i> <?php _e('Error', 'b4st'); ?> 404</h1>
                  <p><?php _e('The page you were looking for does not exist.', 'b4st'); ?></p>
                </div>
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
