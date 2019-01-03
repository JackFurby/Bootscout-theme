<?php b4st_footer_before();?>

<?php
	// get theme options
	$options = get_option('scout_theme_options');

	// makes sure links are not empty
	if (trim($options['fb_link']) != '') {
		$got_fb = true;
	} else {
		$got_fb = false;
	}
	if (trim($options['twitter_link']) != '') {
		$got_tw = true;
	} else {
		$got_tw = false;
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
	if (trim($options['terms_link']) != '') {
		$got_terms = true;
	} else {
		$got_terms = false;
	}
	if (trim($options['privacy_link']) != '') {
		$got_privacy = true;
	} else {
		$got_privacy = false;
	}
	if (trim($options['charity_number']) != '') {
		$got_charity = true;
	} else {
		$got_charity = false;
	}
	if (trim($options['parent_link']) != '' && trim($options['parent_text']) != '') {
		$got_parent_site = true;
	} else {
		$got_parent_site = false;
	}
?>
<footer class="container mw-100 bg-scout-teal ml-0 mr-0 mb-0 mt-3">
	<div class="row m-auto p-3">
		<div class="container ">

			<div id="ceop" class="pb-3">
				<a href='http://www.ceop.police.uk/reportabuse/' target='_blank'><img src='<?php bloginfo('template_directory'); ?>/img/CEOPReportBtn.png' alt='Click CEOP' height='51' width='143' /></a>
			</div>

			<div class="w-75 d-block w-100">
				<p id="copyright" class="mb-0 text-center">© <?php echo date("Y"); ?> <?php echo $options['group_name']; ?></p>
				<?php
				if ($got_charity) {
					echo"<p class=\"mb-0 text-center\">Charity number: ".$options['charity_number']."</p>";
				}?>
				<ul id="footer-content" class="p-0 list-inline text-center">


					<?php
					if ($got_terms || $got_privacy || $got_parent_site) {

						if ($got_terms) {
							echo"<li class=\"list-inline-item\"><a class=\"nav-link footer-item\" href=\"".$options['terms_link']."\">Terms and Disclaimer</a></li>";
						}
						if ($got_privacy) {
							echo"<li class=\"list-inline-item\"><a class=\"nav-link footer-item\" href=\"".$options['privacy_link']."\">Privacy statement</a></li>";
						}

						if ($got_parent_site) {
							echo"<li class=\"list-inline-item\"><a class=\"nav-link footer-item\" href=\"".$options['parent_link']."\">".$options['parent_text']."</a></li>";
						}
					}?>

					<li class="list-inline-item"><a class="nav-link footer-item" href="http://scouts.org.uk/home/">scouts.org.uk</a></li>

					<li class="list-inline-item"><a class="nav-link footer-item" href="https://bootscout.org.uk">Powered by Bootscout</a></li>

				</ul>
			</div>

					<?php
					if ($got_fb || $got_tw || $got_contact) {
						echo"<div class=\"d-block m-auto\">
						<ul class=\"p-0 list-inline text-center\">";
						if ($got_fb) {
							echo"<li data-toggle=\"tooltip\" title=\"Facebook\" class=\"list-inline-item m-0 footer-item\"><a href=\"".$options['fb_link']."\" class=\"m-1 footer-item\"><i id=\"social-fb\" class=\"fab fa-facebook-square fa-3x\"></i></a></li>";
						}
						if ($got_tw) {
							echo"<li data-toggle=\"tooltip\" title=\"Twitter\" class=\"list-inline-item m-0 footer-item\"><a href=\"".$options['twitter_link']."\" class=\"m-1 footer-item\"><i id=\"social-tw\" class=\"fab fa-twitter-square fa-3x\"></i></a></li>";
						}
						if ($got_contact) {
							$contactPageLink = get_page_link($contactPages[0]);
							echo"<li data-toggle=\"tooltip\" title=\"Contact Us\" class=\"list-inline-item m-0 footer-item\"><a href=\"$contactPageLink\" class=\"m-1 footer-item\"><i class=\"fas fa-envelope-square fa-3x\" aria-hidden=\"true\"></i></a></li>";
						}
						echo"</ul></div>";
					}?>

		</div>
	</div>
</footer>

<?php b4st_footer_after();?>

<?php wp_footer(); ?>
</body>
</html>
