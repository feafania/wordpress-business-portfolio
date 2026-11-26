<?php
/**
 * Pixelcraft Theme functions and definitions.
 *
 * @package Pixelcraft
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'PIXELCRAFT_VERSION', '1.0.0' );

/**
 * Theme setup.
 */
function pixelcraft_setup() {
	load_theme_textdomain( 'pixelcraft', get_template_directory() . '/languages' );

	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support(
		'html5',
		array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' )
	);
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 60,
			'width'       => 200,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);

	register_nav_menus(
		array(
			'primary' => __( 'Primary Menu', 'pixelcraft' ),
			'footer'  => __( 'Footer Menu', 'pixelcraft' ),
		)
	);
}
add_action( 'after_setup_theme', 'pixelcraft_setup' );

/**
 * Enqueue styles.
 */
function pixelcraft_enqueue_assets() {
	wp_enqueue_style(
		'pixelcraft-style',
		get_stylesheet_uri(),
		array(),
		PIXELCRAFT_VERSION
	);
}
add_action( 'wp_enqueue_scripts', 'pixelcraft_enqueue_assets' );