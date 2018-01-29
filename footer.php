<?php
	// get theme options
	$options = get_option('scout_theme_options');
?>

<footer class="container">
	<div class="row">
		<div class="col">
			<div id="ceop">
				<a href='http://www.ceop.police.uk/reportabuse/' target='_blank'><img src='<?php bloginfo('template_directory'); ?>/img/CEOPReportBtn.gif' alt='Click CEOP' height='51' width='143' /></a>
			</div>
			<ul id="footer-content" class="float-none">
				<li class="float-left">
					<h4 class="menu-footer-title">Information</h4>
					<?php
					if (trim($options['charity_number']) != '') {
						echo"<p>Registered Charity: ".$options['charity_number']."</p>";
					}
					?>
					<?php
					wp_nav_menu( array(
						'theme_location'		=> 'footer_menu',
						'container'				=> false,
						'menu_class'			=> '',
						'fallback_cb'			=> '__return_false',
						'items_wrap'			=> '<ul id="%1$s" class="navbar-nav mr-auto mt-2 mt-lg-0 menu-footer %2$s">%3$s</ul>',
						'depth'					=> 2,
						'walker'				=> new b4st_walker_nav_menu()
					) );
					?>
				</li>
				<?php
				if (trim($options['fb_link']) != '') {
					$got_fb = true;
				} else {
					$got_fb = false;
				}
				if (trim($options['twitter_link']) != '') {
					$got_twitter = true;
				} else {
					$got_twitter = false;
				}
				# get page id of pages with contact page tempate
				$args = [
					'post_type'		=> 'page',
					'fields'		=> 'ids',
					'nopaging'		=> true,
					'meta_key'		=> '_wp_page_template',
					'meta_value'	=> 'contact-page-template.php'
				];
				$contactPages = get_posts( $args );
				if(sizeof($contactPages) >= 1) {
					$got_contact = true;
				} else {
					$got_contact = false;
				}

				if ($is_twitter || $is_fb || $got_contact) {
					echo"<li class=\"float-none\">
					<h4 class=\"menu-footer-title\">Contact</h4>
					<ul class=\"navbar-nav mr-auto mt-2 mt-lg-0 menu-footer d-inline\">";

					if ($got_fb) {
						echo"<li data-toggle=\"tooltip\" title=\"Facebook\"><a href=\"".$options['fb_link']."\" class=\"ml-1 social-link\"><i id=\"social-fb\" class=\"fab fa-facebook-square fa-3x\"></i></a></li>";
					}
					if ($got_twitter) {
						echo"<li data-toggle=\"tooltip\" title=\"Twitter\"><a href=\"".$options['twitter_link']."\" class=\"ml-1 social-link\"><i id=\"social-tw\" class=\"fab fa-twitter-square fa-3x\"></i></a></li>";
					}
					if($got_contact) {
						$contactPageLink = get_page_link($contactPages[0]);
						echo"<li data-toggle=\"tooltip\" title=\"Contact Us\"><a href=\"$contactPageLink\" class=\"ml-1 social-link\"><i class=\"fas fa-envelope-square fa-3x\" aria-hidden=\"true\"></i></a></li>";
					}
					echo"</ul>
					</li>";
				}
				?>
				<li class="float-right">
					<h4 class="menu-footer-title">Useful links</h4>
					<ul class="navbar-nav mr-auto mt-2 mt-lg-0 menu-footer">
						<li><a class="nav-link" href="http://scouts.org.uk/home/">scouts.org.uk</a></li>
						<li><a class="nav-link" href="https://www.onlinescoutmanager.co.uk/">Online Scout Manager</a></li>
					</ul>
				</li>
			</ul>
			<p id="copyright">Copyright © <?php echo $options['group_name']; ?> <?php echo date("Y"); ?>, All Rights Reserved.</p>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
