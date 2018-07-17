<?php
/**
 * Created by PhpStorm.
 * User: jan
 * Date: 19.04.17
 * Time: 17:16
 */

/**
 * Cannonballtravel only works in WordPress 4.7 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '4.7-alpha', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';

	return;
}

function cannonballtravel_setup() {
	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/**
	 * enable Post Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	// Add theme support for Custom Logo.
	add_theme_support( 'custom-logo',
		array(
			'width'       => 250,
			'height'      => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats',
		array(
			'aside',
			'image',
			'video',
			'quote',
			'link',
			'gallery',
			'audio',
		) );
}

add_action( 'after_setup_theme', 'cannonballtravel_setup' );

function cannonballtravel_scripts() {

	// Theme stylesheet.
	wp_enqueue_style( 'bootstrap_css', get_theme_file_uri( 'assets/css/bootstrap.min.css' ) );
	wp_enqueue_style( 'cannonballtravel_style', get_stylesheet_uri() );
	wp_enqueue_style( 'bootstrap_css', get_theme_file_uri( 'assets/css/jquery-ui.min.css' ) );
	wp_enqueue_style( 'nav_css', get_theme_file_uri( 'assets/css/nav.css' ) );
	wp_enqueue_script( 'jquery_js', get_theme_file_uri( 'assets/js/jquery.js' ) );
	wp_enqueue_script( 'jquery-ui_js', get_theme_file_uri( 'assets/js/jquery-ui.min.js' ) );
	wp_enqueue_script( 'bootstrap_min_js', get_theme_file_uri( 'assets/js/bootstrap.min.js' ) );
}

add_action( 'wp_enqueue_scripts', 'cannonballtravel_scripts' );