<?php
/**
 * Theme bootstrap functions.
 *
 * @package Royce
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! defined( 'ROYCE_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'ROYCE_VERSION', '1.0.0' );
}

if ( ! function_exists( 'royce_asset_url' ) ) {
	/**
	 * Return royce theme folder asset url
	 * 
	 * @param mixed $path
	 * @return string
	 */
	function royce_asset_url( $path ) {
		return trailingslashit( get_stylesheet_directory_uri() ) . 'assets/' . $path;
	}

}

if ( ! function_exists( 'royce_the_asset_url' ) ) {
	/**
	 * Echo royce theme folder asset url
	 * 
	 * @param mixed $path
	 * @return void
	 */
	function royce_the_asset_url( $path ) {
		echo esc_url( royce_asset_url( $path ) );
	}

}

if ( ! function_exists( 'royce_register_block_pattern_category' ) ) {
	/**
	 * Register royce pattern category
	 * 
	 * @return void
	 */
	function royce_register_block_pattern_category() {
		if ( function_exists( 'register_block_pattern_category' ) ) {
			register_block_pattern_category( 'royce', array(
				'label' => __( 'Royce Theme', 'royce' )
			) );
		}
	}

}

add_action( 'init', 'royce_register_block_pattern_category' );


//
// Theme dashboard hook
//
if ( ! function_exists( 'royce_theme_screenshot' ) ) {
	function royce_theme_screenshot() {
		return trailingslashit( get_stylesheet_directory_uri() ) . 'screenshot.png';
	}

}
add_filter( 'plover_welcome_theme_screenshot', 'royce_theme_screenshot' );

if ( ! function_exists( 'royce_support_forum_url' ) ) {
	function royce_support_forum_url() {
		return 'https://wordpress.org/support/theme/royce/';
	}

}
add_filter( 'plover_theme_support_forum_url', 'royce_support_forum_url' );

if ( ! function_exists( 'royce_rate_us_url' ) ) {
	function royce_rate_us_url() {
		return 'https://wordpress.org/support/theme/royce/reviews/?rate=5#new-post';
	}

}
add_filter( 'plover_theme_rate_us_url', 'royce_rate_us_url' );

if ( ! function_exists( 'royce_default_color_mode' ) ) {
	function royce_default_color_mode() {
		return 'light';
	}
}
add_filter( 'plover_theme_default_color_mode', 'royce_default_color_mode' );

if ( ! function_exists( 'royce_enqueue_main_style' ) ) {
	function royce_enqueue_main_style() {
		wp_enqueue_style( 'royce-style', get_stylesheet_uri(), array(), ROYCE_VERSION );
	}
}
add_action( 'wp_enqueue_scripts', 'royce_enqueue_main_style' );
add_action( 'enqueue_block_assets', 'royce_enqueue_main_style' );

if ( ! function_exists( 'royce_theme_icons' ) ) {
	function royce_theme_icons( $icons ) {
		$icons = array_merge( array(
			array(
				'name' => __( 'Paper Plane', 'royce' ),
				'slug' => 'royce-paper-plane',
				'svg'  => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M16.1 260.2c-22.6 12.9-20.5 47.3 3.6 57.3L160 376l0 103.3c0 18.1 14.6 32.7 32.7 32.7c9.7 0 18.9-4.3 25.1-11.8l62-74.3 123.9 51.6c18.9 7.9 40.8-4.5 43.9-24.7l64-416c1.9-12.1-3.4-24.3-13.5-31.2s-23.3-7.5-34-1.4l-448 256zm52.1 25.5L409.7 90.6 190.1 336l1.2 1L68.2 285.7zM403.3 425.4L236.7 355.9 450.8 116.6 403.3 425.4z"/></svg>',
				'tags' => [ 'paper', 'plane' ],
			),
			array(
				'name' => __( 'Clock', 'royce' ),
				'slug' => 'royce-clock',
				'svg'  => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M464 256A208 208 0 1 1 48 256a208 208 0 1 1 416 0zM0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM232 120l0 136c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2 280 120c0-13.3-10.7-24-24-24s-24 10.7-24 24z"/></svg>',
				'tags' => [ 'clock', 'time' ],
			),
			array(
				'name' => __( 'Phone', 'royce' ),
				'slug' => 'royce-phone',
				'svg'  => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/></svg>',
				'tags' => [ 'phone' ],
			),
		), $icons );

		return $icons;
	}
}
add_action( 'plover_core_icon_collection', 'royce_theme_icons' );
