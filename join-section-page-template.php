<?php /* Template Name: section page */ ?>
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
        if (trim($options['beaver-page-link']) != '') {
            $is_beaver = true;
        } else {
            $is_beaver = false;
        }
        if (trim($options['cub-page-link']) != '') {
            $is_cub = true;
        } else {
            $is_cub = false;
        }
        if (trim($options['scout-page-link']) != '') {
            $is_scout = true;
        } else {
            $is_scout = false;
        }
        if (trim($options['explorer-page-link']) != '') {
            $is_explorer = true;
        } else {
            $is_explorer = false;
        }
        if (trim($options['network-page-link']) != '') {
            $is_network = true;
        } else {
            $is_network = false;
        }

        if ($is_beaver || $is_cub || $is_scout || $is_explorer || $is_network) {
            echo"<ul id=\"sectionList\">";
            if ($is_beaver) {
                echo"<li>
                    <a href=\"".$options['beaver-page-link']."\">
                        <ol id=\"bevMainBtn\" class=\"sectionItm\">
                            <li><img class=\"alignnone wp-image-743\" src=\"";?><?php bloginfo('template_directory'); ?><?php echo"/img/Beaver_PNG.png\" /></li>
                            <li class=\"joinAge\">6 - 8</li>
                        </ol>
                    </a>
                </li>";
            }
            if ($is_cub) {
                echo"<li>
                    <a href=\"".$options['cub-page-link']."\">
                        <ol id=\"cubMainBtn\" class=\"sectionItm\">
                            <li><img class=\"alignnone wp-image-743\" src=\"";?><?php bloginfo('template_directory'); ?><?php echo"/img/Cub_PNG.png\" /></li>
                            <li class=\"joinAge\">8 - 10.5</li>
                        </ol>
                    </a>
                </li>";
            }
            if ($is_scout) {
                echo"<li>
                    <a href=\"".$options['scout-page-link']."\">
                        <ol id=\"scoMainBtn\" class=\"sectionItm\">
                            <li><img class=\"alignnone wp-image-743\" src=\"";?><?php bloginfo('template_directory'); ?><?php echo"/img/Scouts_PNG.png\" /></li>
                            <li class=\"joinAge\">10.5 - 14</li>
                        </ol>
                    </a>
                </li>";
            }
            if ($is_explorer) {
                echo"<li>
                    <a href=\"".$options['explorer-page-link']."\">
                        <ol id=\"expMainBtn\" class=\"sectionItm\">
                            <li><img class=\"alignnone wp-image-743\" src=\"";?><?php bloginfo('template_directory'); ?><?php echo"/img/Explorers_PNG.png\" /></li>
                            <li class=\"joinAge\">14 - 18</li>
                        </ol>
                    </a>
                </li>";
            }
            if ($is_network) {
                echo"<li>
                    <a href=\"".$options['network-page-link']."\">
                        <ol id=\"netMainBtn\" class=\"sectionItm\">
                            <li><img class=\"alignnone wp-image-743\" src=\"";?><?php bloginfo('template_directory'); ?><?php echo"/img/Network_PNG.png\" /></li>
                            <li class=\"joinAge\">18 - 25</li>
                        </ol>
                    </a>
                </li>";
            }
            echo"</ul>";
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
