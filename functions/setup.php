<?php

if ( ! function_exists( 'bootscout_theme_support' ) ) :
	function bootscout_theme_support()  {

		// Gutenberg
		add_theme_support( 'wp-block-styles' );
		add_theme_support( 'align-wide' );
		add_theme_support( 'align-full' );

		add_theme_support( 'responsive-embeds' );
		// Theme
		add_theme_support('title-tag');
		add_theme_support('post-thumbnails');

		// Add support for custom units.
		add_theme_support( 'custom-units' );

		// plugins
		add_theme_support( 'woocommerce' );
		remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
		remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

		add_action('woocommerce_before_main_content', 'bootscout_woocommerce_output_content_wrapper', 10);
		add_action('woocommerce_after_main_content', 'bootscout_woocommerce_output_content_wrapper_end', 10);
	}
	add_action( 'after_setup_theme', 'bootscout_theme_support' );
endif;

add_action('init', 'bootscout_theme_support');


function bootscout_woocommerce_output_content_wrapper() {
	echo '<main id="wp-block-group site-main is-layout-constrained" class="wc-main">';
}

function bootscout_woocommerce_output_content_wrapper_end() {
	echo '</main>';
}
