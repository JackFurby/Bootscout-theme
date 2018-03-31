<?php

function b4st_widgets_init() {

	/*
	Sidebar (one widget area)
	*/
	register_sidebar(array(
		'name'            => __( 'Sidebar', 'b4st' ),
		'id'              => 'sidebar-widget-area',
		'description'     => __( 'The sidebar widget area', 'b4st' ),
		'before_widget'   => '<section class="%1$s %2$s bg-light rounded p-3 mb-2 hover-shadow">',
		'after_widget'    => '</section>',
		'before_title'    => '<h4 class="text-scout-blue">',
		'after_title'     => '</h4>',
	));

}
add_action( 'widgets_init', 'b4st_widgets_init' );
