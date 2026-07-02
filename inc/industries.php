<?php
/**
 * Industries We Serve — routing and URL helpers.
 *
 * Page content lives directly in the page templates (page-templates/template-
 * industry-*.php); this file only knows how to find those pages by slug and
 * resolve nav labels. Once an `intercoil_industry` CPT is wired up, swap
 * intercoil_industry_page_url() for get_permalink( $post ) and drop the
 * routes table below.
 *
 * @package Intercoil
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Industry key => { slug, nav_label }. The only thing routing needs to know
 * about each industry until the CPT is in place.
 *
 * @return array<string, array<string, string>>
 */
function intercoil_industry_routes() {
	return array(
		'hospitality'   => array( 'slug' => 'hospitality-solutions', 'nav_label' => 'Hospitality Solutions' ),
		'corporate'     => array( 'slug' => 'corporate-government', 'nav_label' => 'Corporate & Government' ),
		'wholesale'     => array( 'slug' => 'wholesale-distribution', 'nav_label' => 'Wholesale & Distribution' ),
		'manufacturing' => array( 'slug' => 'tailored-manufacturing', 'nav_label' => 'Tailored Manufacturing' ),
	);
}

/**
 * Permalink for an industry page, or homepage fallback.
 *
 * @param string $key Industry key.
 * @return string
 */
function intercoil_industry_page_url( $key ) {
	$routes = intercoil_industry_routes();
	if ( ! isset( $routes[ $key ] ) ) {
		return home_url( '/' );
	}

	$page = get_page_by_path( $routes[ $key ]['slug'] );
	return $page ? get_permalink( $page ) : home_url( '/' );
}

/**
 * Nav label => industry key map, for fallback menu URL resolution.
 *
 * @return array<string, string>
 */
function intercoil_industry_nav_labels() {
	$map = array();
	foreach ( intercoil_industry_routes() as $key => $route ) {
		$map[ $route['nav_label'] ] = $key;
	}

	return $map;
}

/**
 * Industry page template slugs for asset enqueue.
 *
 * @return array<int, string>
 */
function intercoil_industry_page_templates() {
	return array(
		'page-templates/template-industry-hospitality.php',
		'page-templates/template-industry-corporate.php',
		'page-templates/template-industry-wholesale.php',
		'page-templates/template-industry-manufacturing.php',
	);
}
