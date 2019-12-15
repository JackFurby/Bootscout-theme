<?php
/*
 * b4st Hooks
 * Designed to be used by a child theme.
 */

// Navbar (in `header.php`)

function b4st_navbar_before() {
  do_action('navbar_before');
}

function b4st_navbar_after() {
  do_action('navbar_after');
}
function b4st_navbar_brand() {
  if ( ! has_action('navbar_brand') ) {
    ?>
    <a class="navbar-brand" href="<?php echo esc_url( home_url('/') ); ?>"><?php bloginfo('name'); ?></a>
    <?php
  } else {
		do_action('navbar_brand');
	}
}
function b4st_navbar_search() {
	if ( ! has_action('navbar_search') ) {
		$options = get_option('scout_theme_options');
		$bg_colour = get_navbar_search_bg_colour($options['navColour']);
		$btn_colour = get_navbar_search_btn_colour($options['navColour']);
		?>
		<form class="form-inline ml-auto pt-2 pt-md-0" role="search" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
			<div class="input-group">
				<input class="bg-scout-<?php echo $bg_colour ?> form-control border-<?php echo $bg_colour ?>" type="text" value="<?php echo get_search_query(); ?>" placeholder="Search..." name="s" id="s">
				<div class="input-group-append">
					<button type="submit" id="searchsubmit" value="<?php esc_attr_x('Search', 'b4st') ?>" class="btn btn-scout-<?php echo $btn_colour ?> text-white">
						<i class="fas fa-search"></i>
					</button>
				</div>
			</div>
		</form>
		<?php
	} else {
		do_action('navbar_search');
	}
}


// Main

function b4st_main_before() {
  do_action('main_before');
}
function b4st_main_after() {
  do_action('main_after');
}

// Sidebar (in `sidebar.php` -- only displayed when sidebar has 1 widget or more)

function b4st_sidebar_before() {
  do_action('sidebar_before');
}
function b4st_sidebar_after() {
  do_action('sidebar_after');
}

// Footer (in `footer.php`)

function b4st_footer_before() {
  do_action('footer_before');
}
function b4st_footer_after() {
  do_action('footer_after');
}
function b4st_bottomline() {
	if ( ! has_action('bottomline') ) {
		?>

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
		<footer class="container mw-100 bg-scout-<?php echo (!empty($options['footerColour']) ? $options['footerColour'] : 'teal') ?> ml-0 mr-0 mb-0">
			<div class="row m-auto p-3">
				<div class="container">

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

		<?php
	} else {
		do_action('bottomline');
	}
}

function get_navbar_search_bg_colour($navColour) {
	if ($navColour == 'teal') {
		return 'white';
	} else if ($navColour == 'red') {
		return 'white';
	} else if ($navColour == 'pink') {
		return 'white';
	} else if ($navColour == 'green') {
		return 'white';
	} else if ($navColour == 'navy') {
		return 'white';
	} else if ($navColour == 'blue') {
		return 'white';
	} else if ($navColour == 'yellow') {
		return 'grey-5';
	} else if ($navColour == 'white') {
		return 'grey-5';
	} else if ($navColour == 'black') {
		return 'grey-5';
	} else {  // navbar colour is either not set or purple
		return 'white';
	}
}

function get_navbar_search_btn_colour($navColour) {
	if ($navColour == 'teal') {
		return 'white';
	} else if ($navColour == 'red') {
		return 'pink';
	} else if ($navColour == 'pink') {
		return 'red';
	} else if ($navColour == 'green') {
		return 'navy';
	} else if ($navColour == 'navy') {
		return 'green';
	} else if ($navColour == 'blue') {
		return 'yellow';
	} else if ($navColour == 'yellow') {
		return 'blue';
	} else if ($navColour == 'white') {
		return 'black';
	} else if ($navColour == 'black') {
		return 'white';
	} else {  // navbar colour is either not set or purple
		return 'teal';
	}
}
