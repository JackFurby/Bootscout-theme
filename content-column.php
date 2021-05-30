<?php
/*
	This will create the correct div based on if there is a sidebar or not displayed
*/

$options = get_option('scout_theme_options');

if ((isset($options['sidebar']) ? $options['sidebar'] : false)) {
	if (is_active_sidebar('sidebar-widget-area')) {
		echo"<div class=col-lg-8>";
	} else {
		echo"<div class=col-lg-12>";
	}
} else {
	echo"<div class=col-lg-12>";
}

?>
