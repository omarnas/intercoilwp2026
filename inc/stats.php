<?php
/**
 * Homepage statistics helpers.
 *
 * @package Intercoil
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Return approved default stats when ACF data is empty.
 *
 * @return array<int, array<string, string>>
 */
function intercoil_get_default_stats() {
	return array(
		array(
			'stat_number' => '50',
			'stat_suffix' => '+',
			'stat_label'  => "Years of\nCraftsmanship",
		),
		array(
			'stat_number' => '10',
			'stat_suffix' => 'M+',
			'stat_label'  => "Mattresses\nProduced",
		),
		array(
			'stat_number' => '500',
			'stat_suffix' => '+',
			'stat_label'  => "Employees\nWorldwide",
		),
		array(
			'stat_number' => '100',
			'stat_suffix' => '+',
			'stat_label'  => "Distributors\nWorldwide",
		),
	);
}

/**
 * Retrieve stats from ACF with approved defaults as fallback.
 *
 * @return array<int, array<string, string>>
 */
function intercoil_get_stats() {
	$stats = function_exists( 'get_field' ) ? get_field( 'stats' ) : null;

	if ( empty( $stats ) || ! is_array( $stats ) ) {
		return intercoil_get_default_stats();
	}

	$normalized = array();

	foreach ( $stats as $stat ) {
		$number = isset( $stat['stat_number'] ) ? trim( (string) $stat['stat_number'] ) : '';
		$label  = isset( $stat['stat_label'] ) ? trim( (string) $stat['stat_label'] ) : '';

		if ( '' === $number && '' === $label ) {
			continue;
		}

		$normalized[] = array(
			'stat_number' => $number,
			'stat_suffix' => isset( $stat['stat_suffix'] ) ? (string) $stat['stat_suffix'] : '',
			'stat_label'  => $label,
		);
	}

	return ! empty( $normalized ) ? $normalized : intercoil_get_default_stats();
}

/**
 * Sanitize the numeric portion of a stat for digit rendering.
 *
 * @param string $number Raw stat number value.
 * @return string
 */
function intercoil_sanitize_stat_number( $number ) {
	return preg_replace( '/\D/', '', (string) $number );
}

/**
 * Render the stat value element used for count-up animation.
 *
 * @param string $number Raw stat number value.
 * @return string
 */
function intercoil_stat_digits_html( $number ) {
	$sanitized = intercoil_sanitize_stat_number( $number );

	if ( '' === $sanitized ) {
		return '';
	}

	return '<span class="stats__digits"><span class="stats__value" data-stat-value="' . esc_attr( $sanitized ) . '">0</span></span>';
}

/**
 * Render a stat label with line breaks converted to <br>.
 *
 * @param string $label Raw stat label value.
 * @return string
 */
function intercoil_stat_label_html( $label ) {
	$parts = array_filter(
		array_map( 'trim', preg_split( '/\r\n|\r|\n/', (string) $label ) ),
		'strlen'
	);

	if ( empty( $parts ) ) {
		return '';
	}

	return implode( '<br>', array_map( 'esc_html', $parts ) );
}

/**
 * Build the screen-reader-friendly stat value.
 *
 * @param string $number Raw stat number value.
 * @param string $suffix Stat suffix value.
 * @return string
 */
function intercoil_stat_accessible_text( $number, $suffix ) {
	return intercoil_sanitize_stat_number( $number ) . (string) $suffix;
}

/**
 * Render a stat suffix with unit letters at full figure size.
 *
 * @param string $suffix Raw stat suffix value.
 * @return string
 */
function intercoil_stat_suffix_html( $suffix ) {
	$suffix = (string) $suffix;

	if ( '' === $suffix ) {
		return '';
	}

	if ( preg_match( '/^([A-Za-z]+)(.*)$/u', $suffix, $matches ) ) {
		$html = '<span class="stats__suffix stats__suffix--unit">' . esc_html( $matches[1] ) . '</span>';

		if ( '' !== $matches[2] ) {
			$html .= '<span class="stats__suffix stats__suffix--symbol">' . esc_html( $matches[2] ) . '</span>';
		}

		return $html;
	}

	return '<span class="stats__suffix stats__suffix--symbol">' . esc_html( $suffix ) . '</span>';
}
