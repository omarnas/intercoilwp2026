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
