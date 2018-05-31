<?php
// get most recent posts (limit 3)
$args = array( 'numberposts' => '3' );
$recent_posts = wp_get_recent_posts( $args );
$banner_count = 0; //sets banners to 0
foreach( $recent_posts as $recent ){
	$banner_count++; //adds 1 to banner count
}
wp_reset_query();

if ($banner_count > 0) {

	//makes carousel with recent posts

	echo"
	<div id=\"carouselIndicators\" class=\"carousel slide\" data-ride=\"carousel\" data-interval=\"5000\">
	<ol class=\"carousel-indicators\">";
	//creats slides
	for ( $i = 0; $i<$banner_count; $i++ ) { //makes banner Indicators for number of banners created from posts
		if ($i == 0) {
			echo"<li data-target=\"#carouselIndicators\" data-slide-to=\"$i\" class=\"active\"></li>";
		} else {
			echo"<li data-target=\"#carouselIndicators\" data-slide-to=\"$i\"></li>";
		}
	}
	echo"
	</ol>
	<div class=\"carousel-inner\" role=\"listbox\">";
	// get most recent posts (limit 3)
	$args = array(
		'numberposts' => '3',
		'post_status' =>'publish'
	);
	$recent_posts = wp_get_recent_posts( $args );
	$j = 0; //set content of slide
	foreach( $recent_posts as $recent ){
		$current_post_title = $recent["post_title"];
		$current_post_link = get_post_permalink( $recent["ID"] );
		$current_post_img = wp_get_attachment_url( get_post_thumbnail_id( $recent["ID"] ) );
		if ($j == 0) {
			echo"<div class=\"carousel-item active\">";
			$j++;
			echo"<a href=\"$current_post_link\">
			<div>";
			if ($current_post_img != false) {
				echo "<img class=\"d-block img-fluid carousel_background\" src=\"$current_post_img\" style=\"filter:brightness(75%);\">";
			} else {
				echo "<div class=\"d-block img-fluid bg-scout-purple\"></div>";
			}
			echo "<h3 class=\"carousel-caption\">$current_post_title</h3>
			</div>
			</a>
			</div>";
		} else {
			echo"<div class=\"carousel-item\">";
			$j++;
			echo"<a href=\"$current_post_link\">
			<div>";
			if ($current_post_img != false) {
				echo"<img class=\"d-block img-fluid carousel_background\" src=\"$current_post_img\" style=\"filter:brightness(75%);\">";
			} else {
				echo "<div class=\"d-block img-fluid bg-scout-purple\"></div>";
			}
			echo "<h3 class=\"carousel-caption\">$current_post_title</h3>
			</div>
			</a>
			</div>";
		}
	}
	wp_reset_query();

	//banner buttons
	echo"
	</div>
	<a class=\"carousel-control-prev\" href=\"#carouselIndicators\" role=\"button\" data-slide=\"prev\">
	<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
	<span class=\"sr-only\">Previous</span>
	</a>
	<a class=\"carousel-control-next\" href=\"#carouselIndicators\" role=\"button\" data-slide=\"next\">
	<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
	<span class=\"sr-only\">Next</span>
	</a>
	</div>";
}
