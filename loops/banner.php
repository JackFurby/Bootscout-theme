<?php
	// get theme options
	$options = get_option('scout_theme_options');

	// add banner image to top of page (does not work for index.php - blog page)
	if ( has_post_thumbnail() ) {
		$caption = esc_attr( get_post_meta( get_the_ID(), "featured_image_caption", true ) );
		echo "<div class='text-center banner'>";
		echo"<div class=\"center-block w-100 banner\" style=\"overflow:hidden;\">";
		the_post_thumbnail('full', array( 'class' => 'banner-img img-fluid' ));
		echo"</div>";
		echo"</div>";
	}
?>
