<?php
/**
 * Brand statement section helpers.
 *
 * @package Intercoil
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Return approved default brand statement content.
 *
 * @return array<string, string>
 */
function intercoil_get_default_brand_statement() {
	return array(
		'section_label'           => 'Our Promise',
		'brand_statement_heading' => "Sleep, Crafted\nto Perfection.",
		'statement_lead'          => "For over five decades, we have pursued a promise from the UAE to the world's finest hotel suites, where every stitch, coil, and layer reflects a legacy of craftsmanship, restoring sleep with comfort and technology.",
		'brand_statement_visual'  => intercoil_asset_uri( 'images/photography/general/relaxing-bedroom-interior-with-bed-and-pillows-2026-03-10-04-02-05-utc.jpg' ),
	);
}

/**
 * Retrieve brand statement content from ACF with defaults as fallback.
 *
 * @return array<string, string>
 */
function intercoil_get_brand_statement() {
	$defaults = intercoil_get_default_brand_statement();
	$group    = function_exists( 'get_field' ) ? get_field( 'brand_satement' ) : null;

	if ( empty( $group ) || ! is_array( $group ) ) {
		return $defaults;
	}

	return array(
		'section_label'           => ! empty( $group['section_label'] ) ? (string) $group['section_label'] : $defaults['section_label'],
		'brand_statement_heading' => ! empty( $group['brand_statement_heading'] ) ? (string) $group['brand_statement_heading'] : $defaults['brand_statement_heading'],
		'statement_lead'          => ! empty( $group['statement_lead'] ) ? (string) $group['statement_lead'] : $defaults['statement_lead'],
		'brand_statement_visual'  => ! empty( $group['brand_statement_visual'] ) ? (string) $group['brand_statement_visual'] : $defaults['brand_statement_visual'],
	);
}

/**
 * Render brand statement heading with the second line wrapped in <em>.
 *
 * @param string $heading Raw heading value.
 * @return string
 */
function intercoil_brand_statement_heading_html( $heading ) {
	$lines = array_values(
		array_filter(
			array_map( 'trim', preg_split( '/\r\n|\r|\n/', (string) $heading ) ),
			'strlen'
		)
	);

	if ( empty( $lines ) ) {
		return '';
	}

	$html = esc_html( $lines[0] );

	if ( isset( $lines[1] ) ) {
		$html .= '<br><em>' . esc_html( $lines[1] ) . '</em>';
	}

	return $html;
}
