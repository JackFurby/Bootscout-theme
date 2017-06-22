<?php
    // get theme options
    $options = get_option('scout_theme_options');
?>
<footer class="container">
    <hr>
    <div class="row">
        <div class="col">
            <ul id="footer-content">
                <li>
                    <div id="ceop">
                        <a href='http://www.ceop.police.uk/reportabuse/' target='_blank'><img src='<?php bloginfo('template_directory'); ?>/img/CEOPReportBtn.gif' alt='Click CEOP' height='51' width='143' /></a>
                    </div>
                </li>
                <li>
                    <h4 class="menu-footer-title">Information</h4>
                    <?php
                    if (trim($options['charity_number']) != '') {
                        echo"<p>Registered Charity: ".$options['charity_number']."</p>";
                    }
                    ?>
                    <?php
              		wp_nav_menu( array(
                      'theme_location'		=> 'footer_menu',
                      'container'         => false,
                      'menu_class'				=> '',
                      'fallback_cb'				=> '__return_false',
                    	'items_wrap'				=> '<ul id="%1$s" class="navbar-nav mr-auto mt-2 mt-lg-0 menu-footer %2$s">%3$s</ul>',
                      'depth'							=> 2,
              				'walker'            => new b4st_walker_nav_menu()
                    	) );
                  	?>
                </li>
            </ul>
            <hr>
            <p id="copyright">Copyright © <?php echo $options['group_name']; ?> <?php echo date("Y"); ?>, All Rights Reserved.</p>
        </div>
    </div>

</footer>

<?php wp_footer(); ?>
</body>
</html>
