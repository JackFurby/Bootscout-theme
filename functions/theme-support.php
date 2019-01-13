<?php

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

add_theme_support( 'align-wide' );

add_theme_support( 'align-full' );

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

add_theme_support('editor-styles');

add_editor_style( get_stylesheet_directory_uri() . '/theme/css/bootstrap_override.css' );

add_editor_style( get_stylesheet_directory_uri() . '/theme/css/b4st.css' );

add_editor_style( get_stylesheet_directory_uri() . '/theme/css/editor.css' );


add_theme_support( 'wp-block-styles' );

add_theme_support( 'responsive-embeds' );
