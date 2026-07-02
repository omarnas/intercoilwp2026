<?php
/**
 * Comfort Collections inner pages — static content (CMS later).
 *
 * @package Intercoil
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Default slugs for Comfort Collection pages (create WP pages with these slugs).
 *
 * @return array<string, string>
 */
function intercoil_comfort_collection_slugs() {
	return array(
		'beds'    => 'beds-bedroom-furniture',
		'mattresses' => 'mattresses',
		'bedding' => 'bedding-accessories',
		'foam'    => 'foam-industrial-solutions',
	);
}

/**
 * Permalink for a comfort collection page, or homepage fallback.
 *
 * @param string $key Collection key.
 */
function intercoil_comfort_collection_url( $key ) {
	$slugs = intercoil_comfort_collection_slugs();
	if ( empty( $slugs[ $key ] ) ) {
		return home_url( '/' );
	}
	$page = get_page_by_path( $slugs[ $key ] );
	return $page ? get_permalink( $page ) : home_url( '/' );
}

/**
 * Mattress brands for the Mattresses collection page.
 *
 * @return array<int, array<string, string>>
 */
function intercoil_get_mattress_brands() {
	return array(
		array(
			'name'         => 'Intercoil',
			'image'        => 'images/photography/brands/intercoil-brand-new.jpg',
			'logo'         => 'logos/brands/intercoil.png',
			'logo_class'   => '',
			'panel_class'  => 'mattress-panel--intercoil',
			'tagline'      => 'THE ORIGINAL',
			'desc'         => 'Premium mattress craftsmanship, designed to deliver exceptional comfort and restorative sleep.',
		),
		array(
			'name'         => 'Beautyrest by Simmons',
			'image'        => 'images/photography/brands/beautyrestnew.jpg',
			'logo'         => 'logos/brands/beautyrest.png',
			'logo_class'   => 'mattress-panel__logo-wrap--beautyrest',
			'reverse'      => true,
			'tagline'      => 'The World Standard in Premium Sleep',
			'desc'         => 'Now crafted by Intercoil — luxury hospitality heritage trusted by leading hotel groups globally.',
		),
		array(
			'name'         => 'Therapedic',
			'image'        => 'images/photography/brands/therapedicnew2.jpg',
			'logo'         => 'logos/brands/therapedic.png',
			'logo_class'   => '',
			'tagline'      => 'Over 50 Years of Sleep Innovation',
			'desc'         => 'Engineered to support the way your body truly rests.',
		),
		array(
			'name'         => 'Ghalya by Intercoil',
			'image'        => 'images/photography/brands/ghalya.jpg',
			'logo'         => 'logos/brands/ghalyanewlogo2.png',
			'logo_class'   => 'mattress-panel__logo-wrap--ghalya',
			'reverse'      => true,
			'tagline'      => 'Created Exclusively for Children',
			'desc'         => 'The first sleep brand for children — designed to support every stage of growing up.',
		),
		array(
			'name'         => 'Dolidol',
			'image'        => 'images/photography/brands/dolidol-newbanner.jpg',
			'logo'         => 'logos/brands/dolidol.png',
			'logo_class'   => 'mattress-panel__logo-wrap--dolidol',
			'tagline'      => 'Quality Sleep, Within Reach',
			'desc'         => 'Accessible comfort and dependable value for every home.',
		),
	);
}

/**
 * Static content for each Comfort Collection page.
 *
 * @param string $key Page key: beds|mattresses|bedding|foam.
 * @return array<string, mixed>|null
 */
function intercoil_get_comfort_collection( $key ) {
	$collections = array(
		'beds' => array(
			'title'           => 'Beds & Bedroom Furniture',
			'tagline'         => 'The bedroom is where the day ends and restoration begins.',
			'hero_image'      => 'images/photography/general/elegant-bedroom-interior-with-bed-and-decoration-2026-03-10-03-05-55-utc.jpg',
			'intro_primary'   => 'images/photography/general/contemporary-bedroom-interior-with-mint-green-head-2026-03-16-05-10-13-utc.jpg',
			'intro_accent'    => 'images/photography/general/relaxing-bedroom-interior-with-bed-and-pillows-2026-03-10-04-02-05-utc.jpg',
			'watermark'       => 'Rest',
			'lead'            => 'The bedroom is where the day ends and restoration begins. Every piece in our collection is designed with that moment in mind.',
			'prose'           => 'From statement headboards and complete bedroom sets to custom-designed furniture, each piece is crafted with intention, built from quality materials, and finished to a standard that is felt the moment you enter the room. Elegance that endures. Comfort that is simply lived in.',
			'closing_quote'   => 'Elegance that endures. Comfort that is simply lived in.',
			'closing_image'   => 'images/photography/hospitality/3d-rendering-beautiful-luxury-bedroom-suite-in-hot-2026-03-17-04-32-19-utc.jpg',
			'pillars'         => array(
				array(
					'title' => 'Statement Headboards',
					'text'  => 'Each piece is crafted with intention, built from quality materials, and finished to a standard that is felt the moment you enter the room.',
					'image' => 'images/photography/general/bedroom-interior-with-bed-plants-and-gold-frame-2026-03-10-04-03-45-utc.jpg',
				),
				array(
					'title' => 'Complete Bedroom Sets',
					'text'  => 'From statement headboards and complete bedroom sets to custom-designed furniture, each piece is crafted with intention.',
					'image' => 'images/photography/general/elegant-bedroom-interior-with-bed-and-decoration-2026-03-10-03-05-55-utc.jpg',
				),
				array(
					'title' => 'Custom-Designed Furniture',
					'text'  => 'Built from quality materials, and finished to a standard that is felt the moment you enter the room.',
					'image' => 'images/photography/brands/bedroom.jpg',
				),
			),
		),
		'mattresses' => array(
			'title'           => 'Mattresses',
			'tagline'         => 'Sleep begins here.',
			'hero_image'      => 'images/photography/mattresses/comfortable-mattress-and-soft-touch-for-good-sleep-2026-03-23-23-01-57-utc.jpg',
			'intro_primary'   => 'images/photography/mattresses/close-up-of-a-hand-on-a-quilted-surface-2026-03-17-14-42-08-utc.jpg',
			'intro_accent'    => 'images/photography/mattresses/beds-mattresses-and-pillows-store-2026-03-24-15-20-22-utc.jpg',
			'watermark'       => 'Sleep',
			'lead'            => 'Sleep begins here. Every mattress in our range is built on decades of sleep science and refined craftsmanship, engineered to support the body, relieve pressure, and deliver rest that genuinely restores.',
			'prose'           => '',
			'closing_quote'   => 'Engineered to support the body, relieve pressure, and deliver rest that genuinely restores.',
			'closing_image'   => 'images/photography/mattresses/comfortable-mattress-and-soft-touch-for-good-sleep-2026-03-23-23-01-57-utc.jpg',
			'show_brands'     => true,
			'brands_heading'  => 'Mattresses by Brand',
			'brands_subheading' => 'Every mattress in our range is built on decades of sleep science and refined craftsmanship.',
			'gallery'         => array(
				'images/photography/mattresses/comfortable-mattress-and-soft-touch-for-good-sleep-2026-03-23-23-01-57-utc.jpg',
				'images/photography/mattresses/close-up-of-a-hand-on-a-quilted-surface-2026-03-17-14-42-08-utc.jpg',
				'images/photography/mattresses/beds-mattresses-and-pillows-store-2026-03-24-15-28-33-utc.jpg',
			),
			'pillars'         => array(),
		),
		'bedding' => array(
			'title'           => 'Bedding Accessories',
			'tagline'         => 'The finest sleep experience extends beyond the mattress.',
			'hero_image'      => 'images/photography/general/folded-grey-bedding-with-cotton-bolls-on-a-white-b-2026-05-13-23-43-57-utc.jpg',
			'intro_primary'   => 'images/photography/general/bedroom-interior-with-pillows-and-white-bedding-2026-03-10-04-01-53-utc.jpg',
			'intro_accent'    => 'images/photography/general/woman-making-bed-in-bright-airy-bedroom-2026-03-25-07-04-37-utc.jpg',
			'watermark'       => 'Rest',
			'lead'            => 'The finest sleep experience extends beyond the mattress. Our collection of pillows, linens, protectors, duvets, and toppers are crafted from certified materials, designed to complement your sleep system and keep you feeling refreshed, night after night.',
			'prose'           => '',
			'closing_quote'   => 'Designed to complement your sleep system and keep you feeling refreshed, night after night.',
			'closing_image'   => 'images/photography/general/folded-grey-bedding-with-cotton-bolls-on-a-white-b-2026-05-13-23-43-57-utc.jpg',
			'pillars'         => array(
				array(
					'title' => 'Pillows & Linens',
					'text'  => 'Crafted from certified materials, designed to complement your sleep system.',
					'image' => 'images/photography/general/bedroom-interior-with-pillows-and-white-bedding-2026-03-10-04-01-53-utc.jpg',
				),
				array(
					'title' => 'Protectors & Toppers',
					'text'  => 'Our collection of protectors and toppers are crafted from certified materials.',
					'image' => 'images/photography/mattresses/close-up-of-a-hand-on-a-quilted-surface-2026-03-17-14-42-08-utc.jpg',
				),
				array(
					'title' => 'Duvets',
					'text'  => 'Designed to complement your sleep system and keep you feeling refreshed, night after night.',
					'image' => 'images/photography/general/folded-grey-bedding-with-cotton-bolls-on-a-white-b-2026-05-13-23-43-57-utc.jpg',
				),
			),
		),
		'foam' => array(
			'title'           => 'Foam & Industrial Solutions',
			'tagline'         => 'As pioneers in foam manufacturing, we deliver precision-engineered solutions across both residential and industrial applications.',
			'hero_image'      => 'images/photography/manufacturing/foamsmall.jpg',
			'intro_primary'   => 'images/photography/manufacturing/cutting-pink-foam-with-an-electric-foam-cutter-2026-03-19-23-08-59-utc.jpg',
			'intro_accent'    => 'images/photography/manufacturing/mattressfoamfull.jpg',
			'watermark'       => 'Foam',
			'lead'            => 'As pioneers in foam manufacturing, we deliver precision-engineered solutions across both residential and industrial applications. Our portfolio spans mattresses, seating, polyurethane, memory, and latex foams, all produced in state-of-the-art facilities, certified to international standards, and tested to the highest benchmarks of quality and safety.',
			'prose'           => '',
			'closing_quote'   => 'Certified to international standards, and tested to the highest benchmarks of quality and safety.',
			'closing_image'   => 'images/photography/manufacturing/a-focused-worker-is-operating-a-foam-cutter-at-his-2026-03-25-01-47-21-utc.jpg',
			'pillars'         => array(
				array(
					'title' => 'Mattresses & Seating',
					'text'  => 'Our portfolio spans mattresses, seating, polyurethane, memory, and latex foams.',
					'image' => 'images/photography/manufacturing/man-s-hands-on-new-mattress-in-home-2026-03-27-01-39-20-utc.jpg',
				),
				array(
					'title' => 'Polyurethane, Memory & Latex',
					'text'  => 'Precision-engineered solutions across both residential and industrial applications.',
					'image' => 'images/photography/manufacturing/cutting-pink-foam-with-an-electric-foam-cutter-2026-03-19-23-08-59-utc.jpg',
				),
				array(
					'title' => 'State-of-the-Art Facilities',
					'text'  => 'All produced in state-of-the-art facilities, certified to international standards.',
					'image' => 'images/photography/manufacturing/man-working-at-industrial-machine-in-factory-2026-03-20-02-19-47-utc.jpg',
				),
			),
		),
	);

	return isset( $collections[ $key ] ) ? $collections[ $key ] : null;
}

/**
 * Resolve fallback nav URL for a menu label.
 *
 * @param string $label       Menu label.
 * @param string $placeholder Default URL when no page exists.
 */
function intercoil_default_nav_link_url( $label, $placeholder ) {
	$comfort_labels = array(
		'Beds & Bedroom Furniture'   => 'beds',
		'Mattresses'                 => 'mattresses',
		'Bedding Accessories'        => 'bedding',
		'Foam & Industrial Solutions' => 'foam',
	);

	if ( isset( $comfort_labels[ $label ] ) ) {
		return intercoil_comfort_collection_url( $comfort_labels[ $label ] );
	}

	$brand_labels = intercoil_brand_nav_labels();
	if ( isset( $brand_labels[ $label ] ) ) {
		return intercoil_brand_page_url( $brand_labels[ $label ] );
	}

	$industry_labels = intercoil_industry_nav_labels();
	if ( isset( $industry_labels[ $label ] ) ) {
		return intercoil_industry_page_url( $industry_labels[ $label ] );
	}

	if ( 'Our Brands' === $label ) {
		return intercoil_brands_landing_url();
	}

	return $placeholder;
}

/**
 * Render a Comfort Collection inner page.
 *
 * @param string $key Collection key.
 */
function intercoil_render_comfort_collection_page( $key ) {
	$collection = intercoil_get_comfort_collection( $key );
	if ( ! $collection ) {
		return;
	}

	set_query_var( 'intercoil_comfort_collection', $collection );
	set_query_var( 'intercoil_comfort_collection_key', $key );
	get_template_part( 'template-parts/comfort-collection/layout' );
}

/**
 * Comfort Collection page template slugs for asset enqueue.
 *
 * @return array<int, string>
 */
function intercoil_comfort_collection_templates() {
	return array(
		'page-templates/template-comfort-beds.php',
		'page-templates/template-comfort-mattresses.php',
		'page-templates/template-comfort-bedding.php',
		'page-templates/template-comfort-foam.php',
	);
}
