<?php
/**
 * Hero carousel helper functions.
 *
 * @package Intercoil
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Normalize a hero heading for carousel data attributes.
 *
 * The carousel JS splits on "|" to insert <br> tags. Editors may use either
 * a pipe or a line break in the ACF textarea.
 *
 * @param string $heading Raw heading value.
 * @return string
 */
function intercoil_normalize_hero_heading( $heading ) {
	return str_replace( array( "\r\n", "\r", "\n" ), '|', (string) $heading );
}

/**
 * Return escaped heading for data-hero-heading attributes.
 *
 * @param string $heading Raw heading value.
 * @return string
 */
function intercoil_hero_heading_attr( $heading ) {
	return esc_attr( intercoil_normalize_hero_heading( $heading ) );
}

/**
 * Return escaped heading HTML for the initial hero <h1>.
 *
 * @param string $heading Raw heading value.
 * @return string
 */
function intercoil_hero_heading_html( $heading ) {
	$parts = array_filter(
		array_map( 'trim', explode( '|', intercoil_normalize_hero_heading( $heading ) ) ),
		'strlen'
	);

	if ( empty( $parts ) ) {
		return '';
	}

	return implode( '<br>', array_map( 'esc_html', $parts ) );
}

/**
 * Build an accessible dot label for a hero slide.
 *
 * @param string $heading Raw heading value.
 * @param int    $index   Zero-based slide index.
 * @return string
 */
function intercoil_hero_slide_dot_label( $heading, $index ) {
	$parts = array_filter(
		array_map( 'trim', explode( '|', intercoil_normalize_hero_heading( $heading ) ) ),
		'strlen'
	);

	$title = ! empty( $parts ) ? $parts[0] : sprintf(
		/* translators: %d: slide number */
		__( 'Slide %d', 'intercoil' ),
		$index + 1
	);

	return sprintf(
		/* translators: 1: slide number, 2: slide title */
		__( 'Slide %1$d — %2$s', 'intercoil' ),
		$index + 1,
		$title
	);
}

/**
 * Approved default hero slides when ACF data is empty.
 *
 * @return array<int, array<string, string>>
 */
function intercoil_get_default_hero_slides() {
	return array(
		array(
			'eyebrow'                 => 'Intercoil International · Since 1974',
			'heading'                 => "Five Decades of|Manufacturing Excellence.",
			'body'                    => 'For over 50 years, Intercoil International has been designing and crafting premium sleep from the UAE for the world. A family-led group built on five decades of manufacturing excellence, home to a portfolio of globally trusted sleep and bedroom brands.',
			'main_button_label'       => 'Discover Our Story',
			'main_button_link'        => '#about',
			'secondary_button_label'  => 'Our Brands',
			'secondary_button_link'   => '#brands',
			'slider_image'            => intercoil_asset_uri( 'images/hospitalitybanner.jpg' ),
			'image_alt'               => 'Intercoil — five decades of manufacturing excellence',
		),
		array(
			'eyebrow'                 => 'Technology',
			'heading'                 => "Designed for|Better Sleep",
			'body'                    => 'Advanced sleep technologies and innovative comfort systems engineered to support deeper, more restorative rest.',
			'main_button_label'       => 'Discover Our Story',
			'main_button_link'        => '#about',
			'secondary_button_label'  => 'Our Brands',
			'secondary_button_link'   => '#brands',
			'slider_image'            => intercoil_asset_uri( 'images/photography/mattresses/close-up-of-a-hand-on-a-quilted-surface-2026-03-17-14-42-08-utc.jpg' ),
			'image_alt'               => 'Advanced mattress technology — coils, foam layers, and comfort engineering',
		),
		array(
			'eyebrow'                 => 'Manufacturing',
			'heading'                 => 'Crafted with Care',
			'body'                    => 'Every mattress is thoughtfully made using quality materials, skilled craftsmanship, and rigorous attention to detail.',
			'main_button_label'       => 'Discover Our Story',
			'main_button_link'        => '#about',
			'secondary_button_label'  => 'Our Brands',
			'secondary_button_link'   => '#brands',
			'slider_image'            => intercoil_asset_uri( 'images/photography/manufacturing/detailed-view-of-dressmaker-woman-sews-clothes-on-2026-03-24-04-56-46-utc.jpg' ),
			'image_alt'               => 'Handcrafted mattress manufacturing — precision and care',
		),
		array(
			'eyebrow'                 => 'History',
			'heading'                 => 'The Original',
			'body'                    => 'Over 50 years of premium mattress craftsmanship, made in the UAE for the world.',
			'main_button_label'       => 'Discover Our Story',
			'main_button_link'        => '#about',
			'secondary_button_label'  => 'Our Brands',
			'secondary_button_link'   => '#brands',
			'slider_image'            => intercoil_asset_uri( 'images/photography/historybanner.png' ),
			'image_alt'               => 'Intercoil showroom — five decades of sleep heritage',
		),
		array(
			'eyebrow'                 => 'Hospitality',
			'heading'                 => "Trusted by Leading|Hotels",
			'body'                    => 'Delivering exceptional comfort and sleep experiences across luxury hotels and hospitality destinations.',
			'main_button_label'       => 'Discover Our Story',
			'main_button_link'        => '#about',
			'secondary_button_label'  => 'Our Brands',
			'secondary_button_link'   => '#brands',
			'slider_image'            => intercoil_asset_uri( 'images/photography/fine.jpg' ),
			'image_alt'               => 'Ultra-luxury hotel bedroom — premium hospitality sleep',
		),
	);
}

/**
 * Retrieve hero slides from ACF with approved defaults as fallback.
 *
 * @return array<int, array<string, string>>
 */
function intercoil_get_hero_slides() {
	$slides = function_exists( 'get_field' ) ? get_field( 'hero_slider' ) : null;

	if ( empty( $slides ) || ! is_array( $slides ) ) {
		return intercoil_get_default_hero_slides();
	}

	$normalized = array();

	foreach ( $slides as $slide ) {
		if ( empty( $slide['slider_image'] ) ) {
			continue;
		}

		$heading = $slide['heading'] ?? '';
		$eyebrow = $slide['eyebrow'] ?? '';

		$normalized[] = array(
			'eyebrow'                => $eyebrow,
			'heading'                => $heading,
			'body'                   => $slide['body'] ?? '',
			'main_button_label'      => $slide['main_button_label'] ?? '',
			'main_button_link'       => $slide['main_button_link'] ?? '',
			'secondary_button_label' => $slide['secondary_button_label'] ?? '',
			'secondary_button_link'  => $slide['secondary_button_link'] ?? '',
			'slider_image'           => $slide['slider_image'],
			'image_alt'              => $eyebrow ? $eyebrow : wp_strip_all_tags( intercoil_normalize_hero_heading( $heading ) ),
		);
	}

	return ! empty( $normalized ) ? $normalized : intercoil_get_default_hero_slides();
}
