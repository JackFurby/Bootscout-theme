<?php

function current_year() {
	return date('Y');
}

add_shortcode('current-year', 'current_year');
