<?php
/*
 * Setup
 */

if ( ! function_exists('b4st_setup') ) {
	function b4st_setup() {

		remove_theme_support( 'widgets-block-editor' );

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

		add_theme_support( 'editor-color-palette', array(
			array(
				'name' => __( 'scout purple', 'bootscout' ),
				'slug' => 'scout-purple',
				'color' => '#7413dc',
			),
			array(
				'name' => __( 'scout teal', 'bootscout' ),
				'slug' => 'scout-teal',
				'color' => '#00a794',
			),
			array(
				'name' => __( 'scout red', 'bootscout' ),
				'slug' => 'scout-red',
				'color' => '#e22e12',
			),
			array(
				'name' => __( 'scout pink', 'bootscout' ),
				'slug' => 'scout-pink',
				'color' => '#ffb4e5',
			),
			array(
				'name' => __( 'scout green', 'bootscout' ),
				'slug' => 'scout-green',
				'color' => '#23a950',
			),
			array(
				'name' => __( 'scout section green', 'bootscout' ),
				'slug' => 'scout-section-green',
				'color' => '#004851',
			),
			array(
				'name' => __( 'scout navy', 'bootscout' ),
				'slug' => 'scout-navy',
				'color' => '#003982',
			),
			array(
				'name' => __( 'scout blue', 'bootscout' ),
				'slug' => 'scout-blue',
				'color' => '#006ddf',
			),
			array(
				'name' => __( 'scout yellow', 'bootscout' ),
				'slug' => 'scout-yellow',
				'color' => '#ffe627',
			),
			array(
				'name' => __( 'white', 'bootscout' ),
				'slug' => 'white',
				'color' => '#ffffff',
			),
			array(
				'name' => __( 'grey 5%', 'bootscout' ),
				'slug' => 'grey-5',
				'color' => '#F2F2F2',
			),
			array(
				'name' => __( 'grey 20%', 'bootscout' ),
				'slug' => 'grey-20',
				'color' => '#CCCCCC',
			),
			array(
				'name' => __( 'grey 40%', 'bootscout' ),
				'slug' => 'grey-40',
				'color' => '#999999',
			),
			array(
				'name' => __( 'grey 60%', 'bootscout' ),
				'slug' => 'grey-60',
				'color' => '#666666',
			),
			array(
				'name' => __( 'grey 80%', 'bootscout' ),
				'slug' => 'grey-80',
				'color' => '#333333',
			),
			array(
				'name' => __( 'black', 'bootscout' ),
				'slug' => 'black',
				'color' => '#000000',
			),
		) );

		add_theme_support( 'editor-font-sizes', array(
			array(
				'name' => __( 'text', 'bootscout' ),
				'size' => 16,
				'slug' => 'p'
			),
			array(
				'name' => __( 'smallest', 'bootscout' ),
				'size' => 16,
				'slug' => 'h6'
			),
			array(
				'name' => __( 'small', 'bootscout' ),
				'size' => 20,
				'slug' => 'h5'
			),
			array(
				'name' => __( 'medium', 'bootscout' ),
				'size' => 24,
				'slug' => 'h4'
			),
			array(
				'name' => __( 'large', 'bootscout' ),
				'size' => 28,
				'slug' => 'h3'
			),
			array(
				'name' => __( 'larger', 'bootscout' ),
				'size' => 32,
				'slug' => 'h2'
			),
			array(
				'name' => __( 'largest', 'bootscout' ),
				'size' => 40,
				'slug' => 'h1'
			)
		) );

		update_option('thumbnail_size_w', 285); /* internal max-width of col-3 */
		update_option('small_size_w', 350); /* internal max-width of col-4 */
		update_option('medium_size_w', 730); /* internal max-width of col-8 */
		update_option('large_size_w', 1110); /* internal max-width of col-12 */

		if ( ! isset($content_width) ) {
			$content_width = 1100;
		}

		add_theme_support( 'post-formats', array(
			'aside',
			'gallery',
			'link',
			'image',
			'quote',
			'status',
			'video',
			'audio',
			'chat'
		) );

		add_theme_support('automatic-feed-links');

		add_theme_support( 'custom-logo', array(
			'height'      => 142,
			'width'       => 312,
			'flex-height' => true,
			'flex-width'  => true,
			'header-text' => array( 'site-title', 'site-description' ),
		) );
	}
}
add_action('init', 'b4st_setup');

if ( ! function_exists( 'b4st_avatar_attributes' ) ) {
	function b4st_avatar_attributes($avatar_attributes) {
		$display_name = get_the_author_meta( 'display_name' );
		$avatar_attributes = str_replace('alt=\'\'', 'alt=\'Avatar for '.$display_name.'\' title=\'Gravatar for '.$display_name.'\'',$avatar_attributes);
		return $avatar_attributes;
	}
}
add_filter('get_avatar','b4st_avatar_attributes');

if ( ! function_exists( 'b4st_author_avatar' ) ) {
	function b4st_author_avatar() {

		echo get_avatar('', $size = '96');
	}
}

if ( ! function_exists( 'b4st_author_description' ) ) {
	function b4st_author_description() {
		echo get_the_author_meta('user_description');
	}
}

if ( ! function_exists( 'b4st_post_date' ) ) {
	function b4st_post_date() {
		if ( in_array( get_post_type(), array( 'post', 'attachment' ) ) ) {
			$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time>';

			if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
				$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time> <time class="updated" datetime="%3$s">(updated %4$s)</time>';
			}

			$time_string = sprintf( $time_string,
				esc_attr( get_the_date( 'c' ) ),
				get_the_date(),
				esc_attr( get_the_modified_date( 'c' ) ),
				get_the_modified_date()
			);

			echo $time_string;
		}
	}
}

//edit theme-options
$options = get_option('scout_theme_options');
