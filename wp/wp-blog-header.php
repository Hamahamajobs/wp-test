<?php
/**
 * Loads the WordPress environment and template.
 *
 * @package WordPress
 */

if ( ! isset( $wp_did_header ) ) {

	$wp_did_header = true;

	// Load the WordPress library.
	// ここでwpの基礎的なファイルをまず読み込んでいる
	require_once __DIR__ . '/wp-load.php';

	// Set up the WordPress query.
	/**
	 * hama wp() は 
	 */
	wp();

	// Load the theme template.
	require_once ABSPATH . WPINC . '/template-loader.php';

}
