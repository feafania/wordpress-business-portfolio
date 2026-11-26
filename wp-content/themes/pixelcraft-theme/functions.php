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
 * Theme setup: supports and menus.
 */
function pixelcraft_setup() {
	load_theme_textdomain( 'pixelcraft', get_template_directory() . '/languages' );

	// Let WordPress manage the <title> tag.
	add_theme_support( 'title-tag' );

	// Featured images.
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'pixelcraft-card', 800, 600, true );

	// RSS feed links in <head>.
	add_theme_support( 'automatic-feed-links' );

	// HTML5 markup.
	add_theme_support(
		'html5',
		array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' )
	);

	// Logo from Appearance > Customize.
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 60,
			'width'       => 200,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);

	// Extra niceties.
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'align-wide' );

	// Menus.
	register_nav_menus(
		array(
			'primary' => __( 'Primary Menu', 'pixelcraft' ),
			'footer'  => __( 'Footer Menu', 'pixelcraft' ),
		)
	);
}
add_action( 'after_setup_theme', 'pixelcraft_setup' );

/**
 * Content width for embeds.
 */
function pixelcraft_content_width() {
	$GLOBALS['content_width'] = 1200;
}
add_action( 'after_setup_theme', 'pixelcraft_content_width', 0 );

/**
 * Enqueue styles and scripts.
 */
function pixelcraft_enqueue_assets() {
	$theme_dir = get_template_directory();
	$theme_uri = get_template_directory_uri();

	// Main stylesheet (style.css in the theme root).
	wp_enqueue_style(
		'pixelcraft-style',
		get_stylesheet_uri(),
		array(),
		filemtime( $theme_dir . '/style.css' )
	);

	// Main script, loaded in the footer with defer.
	wp_enqueue_script(
		'pixelcraft-main',
		$theme_uri . '/assets/js/main.js',
		array(),
		filemtime( $theme_dir . '/assets/js/main.js' ),
		array(
			'strategy'  => 'defer',
			'in_footer' => true,
		)
	);
}
add_action( 'wp_enqueue_scripts', 'pixelcraft_enqueue_assets' );

/**
 * Elementor compatibility: allow Elementor to take over theme areas
 * (we only use the free version, so no theme builder locations needed).
 */
function pixelcraft_elementor_support() {
	add_theme_support( 'elementor' );
}
add_action( 'after_setup_theme', 'pixelcraft_elementor_support' );