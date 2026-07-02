<?php
/**
 * Our Brands — routing and URL helpers.
 *
 * Page content lives directly in the page templates (page-templates/template-
 * brand-*.php); this file only knows how to find those pages by slug and
 * resolve nav labels. Once the `intercoil_brand` CPT is wired up, swap
 * intercoil_brand_page_url() for get_permalink( $post ) and drop the routes
 * table below.
 *
 * @package Intercoil
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Slug of the Our Brands landing page.
 *
 * @return string
 */
function intercoil_brands_landing_slug() {
	return 'our-brands';
}

/**
 * Brand key => { slug, nav_label }. The only thing routing needs to know
 * about each brand until the CPT is in place.
 *
 * @return array<string, array<string, string>>
 */
function intercoil_brand_routes() {
	return array(
		'intercoil'  => array( 'slug' => 'intercoil', 'nav_label' => 'Intercoil' ),
		'beautyrest' => array( 'slug' => 'beautyrest-by-simmons', 'nav_label' => 'Beautyrest by Simmons' ),
		'therapedic' => array( 'slug' => 'therapedic', 'nav_label' => 'THERAPEDIC' ),
		'dolidol'    => array( 'slug' => 'dolidol', 'nav_label' => 'Dolidol' ),
		'ghalya'     => array( 'slug' => 'ghalyas-bedding-collection', 'nav_label' => 'Ghalya\'s Bedding Collection' ),
		'bedroom'    => array( 'slug' => 'the-bedroom-by-intercoil', 'nav_label' => 'The Bedroom by Intercoil' ),
	);
}

/**
 * Permalink for the Our Brands landing page, or homepage fallback.
 *
 * @return string
 */
function intercoil_brands_landing_url() {
	$page = get_page_by_path( intercoil_brands_landing_slug() );
	return $page ? get_permalink( $page ) : home_url( '/' );
}

/**
 * Permalink for a brand page (child of the landing page), or landing fallback.
 *
 * @param string $key Brand key.
 * @return string
 */
function intercoil_brand_page_url( $key ) {
	$routes = intercoil_brand_routes();
	if ( ! isset( $routes[ $key ] ) ) {
		return intercoil_brands_landing_url();
	}

	$page = get_page_by_path( intercoil_brands_landing_slug() . '/' . $routes[ $key ]['slug'] );
	return $page ? get_permalink( $page ) : intercoil_brands_landing_url();
}

/**
 * Nav label => brand key map, for fallback menu URL resolution.
 *
 * @return array<string, string>
 */
function intercoil_brand_nav_labels() {
	$map = array();
	foreach ( intercoil_brand_routes() as $key => $route ) {
		$map[ $route['nav_label'] ] = $key;
	}

	// Legacy label kept so older menus still resolve.
	$map['Ghalya by Intercoil'] = 'ghalya';

	return $map;
}

/**
 * Brand page template slugs (landing + inner pages) for asset enqueue.
 *
 * @return array<int, string>
 */
function intercoil_brand_page_templates() {
	return array(
		'page-templates/template-our-brands.php',
		'page-templates/template-brand-intercoil.php',
		'page-templates/template-brand-beautyrest.php',
		'page-templates/template-brand-therapedic.php',
		'page-templates/template-brand-dolidol.php',
		'page-templates/template-brand-ghalya.php',
		'page-templates/template-brand-bedroom.php',
	);
}
