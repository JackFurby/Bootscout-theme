<?php

if ( ! function_exists( 'bootscout_theme_support' ) ) :
	function bootscout_theme_support()  {

		add_theme_support( 'editor-styles' );
		add_editor_style('theme/css/editor.css');
		add_editor_style('theme/css/blocks.css');

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
	}
	add_action( 'after_setup_theme', 'bootscout_theme_support' );
endif;

add_action('init', 'bootscout_theme_support');
