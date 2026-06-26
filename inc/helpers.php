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
 * Return filemtime-based version for a theme file.
 *
 * @param string $file Absolute file path.
 * @return string|false
 */
function intercoil_file_version( $file ) {
	return file_exists( $file ) ? (string) filemtime( $file ) : false;
}
