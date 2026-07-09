<?php
/**
 * Theme helper functions.
 *
 * @package Intercoil
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Return a versioned theme asset URI.
 *
 * @param string $path Path relative to the theme assets directory.
 * @return string
 */
function intercoil_asset_uri( $path ) {
	return get_template_directory_uri() . '/assets/' . ltrim( $path, '/' );
}

/**
 * Echo an escaped theme asset URI.
 *
 * @param string $path Path relative to the theme assets directory.
 */
function intercoil_asset( $path ) {
	echo esc_url( intercoil_asset_uri( $path ) );
}

/**
 * Return a cache-busting version string for a theme file.
 *
 * Combines the theme release version with the file modification time so
 * browsers fetch fresh CSS/JS after deploys without manual query strings.
 *
 * @param string $file Absolute file path.
 * @return string
 */
function intercoil_file_version( $file ) {
	$base = defined( 'INTERCOIL_VERSION' ) ? INTERCOIL_VERSION : '1.0.0';

	if ( $file && file_exists( $file ) ) {
		return $base . '.' . filemtime( $file );
	}

	return $base;
}

/**
 * Return a versioned theme asset URI.
 *
 * @param string $path Path relative to the theme assets directory.
 * @return string
 */
function intercoil_asset_uri_versioned( $path ) {
	$relative = ltrim( $path, '/' );
	$file     = get_template_directory() . '/assets/' . $relative;
	$version  = intercoil_file_version( $file );

	return add_query_arg( 'ver', rawurlencode( $version ), intercoil_asset_uri( $path ) );
}

/**
 * Return a page permalink by its slug, falling back to the homepage.
 *
 * @param string $slug Page path slug.
 * @return string
 */
function intercoil_page_url( $slug ) {
	$page = get_page_by_path( $slug );

	return $page ? get_permalink( $page ) : home_url( '/' );
}

/**
 * Locate a Store page permalink — the CTA destination for
 * The Bedroom by Intercoil.
 *
 * @return string
 */
function intercoil_locate_store_url() {
	return intercoil_page_url( 'locate-a-store' );
}

/**
 * Google Maps API key — configurable from the backend.
 *
 * Override with the `intercoil_google_maps_api_key` option
 * (e.g. `wp option update intercoil_google_maps_api_key <key>`)
 * or the filter of the same name.
 *
 * @return string
 */
function intercoil_google_maps_api_key() {
	$key = get_option( 'intercoil_google_maps_api_key', '' );

	if ( ! $key ) {
		$key = 'AIzaSyDmg24vIZkIiZ3Uku28aYByJPSRBO_Wg2k';
	}

	return (string) apply_filters( 'intercoil_google_maps_api_key', $key );
}

/**
 * Knowledge Hub page template slugs for asset enqueue.
 *
 * @return array<int, string>
 */
function intercoil_knowledge_page_templates() {
	return array(
		'page-templates/template-knowledge-sleep-tips.php',
		'page-templates/template-knowledge-mattress-guide.php',
		'page-templates/template-knowledge-sleep-care.php',
	);
}
