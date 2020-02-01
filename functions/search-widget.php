<?php
/*
* Search form in widget
*/

if ( ! function_exists('b4st_search_form') ) {

	function b4st_search_form( $form ) {
		$options = get_option('scout_theme_options');
		$bg_colour = get_navbar_search_bg_colour($options['navColour']);
		$btn_colour = get_navbar_search_btn_colour($options['navColour']);
		$form = '<form class="form-inline" role="search" method="get" id="searchform" action="' . home_url('/') . '" >
			<div class="input-group w-100">
				<input class="bg-scout-' . $bg_colour . ' form-control" type="text" value="' . get_search_query() . '" placeholder="' . esc_attr_x('Search', 'b4st') . '..." name="s" id="s">
				<div class="input-group-append">
					<button type="submit" id="searchsubmit" value="'. esc_attr_x('Search', 'b4st') .'" class="btn btn-scout-' . $btn_colour . ' border">
						<i class="fas fa-search"></i>
					</button>
				</div>
			</div>
		</form>';
		return $form;
	}
}
add_filter( 'get_search_form', 'b4st_search_form' );
