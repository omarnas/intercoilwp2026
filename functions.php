<?php
/**
 * Intercoil theme functions and definitions.
 *
 * @package Intercoil
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'INTERCOIL_VERSION', '1.0.1' );

require_once get_template_directory() . '/inc/helpers.php';
require_once get_template_directory() . '/inc/post-types.php';
require_once get_template_directory() . '/inc/hero.php';
require_once get_template_directory() . '/inc/stats.php';
require_once get_template_directory() . '/inc/nav-walker.php';
require_once get_template_directory() . '/inc/default-nav.php';
require_once get_template_directory() . '/inc/comfort-collections.php';
require_once get_template_directory() . '/inc/brands.php';
require_once get_template_directory() . '/inc/industries.php';

/**
 * Theme setup.
 */
function intercoil_setup() {
	load_theme_textdomain( 'intercoil', get_template_directory() . '/languages' );

	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 32,
			'width'       => 140,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);

	register_nav_menus(
		array(
			'primary' => esc_html__( 'Primary Menu', 'intercoil' ),
		)
	);
}
add_action( 'after_setup_theme', 'intercoil_setup' );




// Save ACF JSON inside the theme.
add_filter('acf/settings/save_json', function ($path) {
    return get_stylesheet_directory() . '/acf-json';
});

// Load ACF JSON from the theme.
add_filter('acf/settings/load_json', function ($paths) {
    $paths[] = get_stylesheet_directory() . '/acf-json';
    return $paths;
});


/**
 * Enqueue theme styles and scripts.
 */
function intercoil_enqueue_assets() {
	$theme_dir = get_template_directory();
	$theme_uri = get_template_directory_uri();

	wp_enqueue_style(
		'intercoil-style',
		get_stylesheet_uri(),
		array(),
		intercoil_file_version( $theme_dir . '/style.css' )
	);

	wp_enqueue_style(
		'intercoil-main',
		$theme_uri . '/assets/css/main.css',
		array( 'intercoil-style' ),
		intercoil_file_version( $theme_dir . '/assets/css/main.css' )
	);

	wp_enqueue_style(
		'intercoil-motion',
		$theme_uri . '/assets/css/motion.css',
		array( 'intercoil-main' ),
		intercoil_file_version( $theme_dir . '/assets/css/motion.css' )
	);

	wp_enqueue_script(
		'gsap',
		'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js',
		array(),
		'3.12.5',
		true
	);

	wp_enqueue_script(
		'gsap-scrolltrigger',
		'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js',
		array( 'gsap' ),
		'3.12.5',
		true
	);

	wp_enqueue_script(
		'intercoil-main',
		$theme_uri . '/assets/js/main.js',
		array(),
		intercoil_file_version( $theme_dir . '/assets/js/main.js' ),
		true
	);

	wp_enqueue_script(
		'intercoil-hero-carousel',
		$theme_uri . '/assets/js/hero-carousel.js',
		array( 'intercoil-main' ),
		intercoil_file_version( $theme_dir . '/assets/js/hero-carousel.js' ),
		true
	);

	if ( is_front_page() ) {
		wp_enqueue_script(
			'intercoil-timeline-story',
			$theme_uri . '/assets/js/timeline-story.js',
			array( 'gsap', 'gsap-scrolltrigger' ),
			intercoil_file_version( $theme_dir . '/assets/js/timeline-story.js' ),
			true
		);
	}

	wp_enqueue_script(
		'intercoil-motion',
		$theme_uri . '/assets/js/motion.js',
		array( 'gsap', 'gsap-scrolltrigger', 'intercoil-main' ),
		intercoil_file_version( $theme_dir . '/assets/js/motion.js' ),
		true
	);

	if ( is_page_template( array_merge(
		array(
			'page-templates/template-our-legacy.php',
			'page-templates/template-sustainability.php',
			'page-templates/template-iso-certificates.php',
		),
		intercoil_comfort_collection_templates()
	) ) ) {
		wp_enqueue_style(
			'intercoil-inner-pages',
			$theme_uri . '/assets/css/inner-pages.css',
			array( 'intercoil-main' ),
			intercoil_file_version( $theme_dir . '/assets/css/inner-pages.css' )
		);
	}

	if ( is_page_template( intercoil_brand_page_templates() ) ) {
		wp_enqueue_style(
			'intercoil-inner-pages',
			$theme_uri . '/assets/css/inner-pages.css',
			array( 'intercoil-main' ),
			intercoil_file_version( $theme_dir . '/assets/css/inner-pages.css' )
		);

		wp_enqueue_style(
			'intercoil-brands',
			$theme_uri . '/assets/css/brands.css',
			array( 'intercoil-inner-pages' ),
			intercoil_file_version( $theme_dir . '/assets/css/brands.css' )
		);
	}

	if ( is_page_template( intercoil_knowledge_page_templates() ) ) {
		wp_enqueue_style(
			'intercoil-inner-pages',
			$theme_uri . '/assets/css/inner-pages.css',
			array( 'intercoil-main' ),
			intercoil_file_version( $theme_dir . '/assets/css/inner-pages.css' )
		);

		wp_enqueue_style(
			'intercoil-knowledge',
			$theme_uri . '/assets/css/knowledge.css',
			array( 'intercoil-inner-pages' ),
			intercoil_file_version( $theme_dir . '/assets/css/knowledge.css' )
		);
	}

	if ( is_page_template( intercoil_industry_page_templates() ) ) {
		wp_enqueue_style(
			'intercoil-inner-pages',
			$theme_uri . '/assets/css/inner-pages.css',
			array( 'intercoil-main' ),
			intercoil_file_version( $theme_dir . '/assets/css/inner-pages.css' )
		);

		wp_enqueue_style(
			'intercoil-industries',
			$theme_uri . '/assets/css/industries.css',
			array( 'intercoil-inner-pages' ),
			intercoil_file_version( $theme_dir . '/assets/css/industries.css' )
		);
	}
}
add_action( 'wp_enqueue_scripts', 'intercoil_enqueue_assets' );

/**
 * Output font and hero image preload links in the document head.
 */
function intercoil_preload_assets() {
	if ( ! is_front_page() ) {
		return;
	}
	?>
	<link rel="preload" href="<?php echo esc_url( intercoil_asset_uri_versioned( 'images/photography/showroom/DSC_7919-1080x675-1.png' ) ); ?>" as="image" />
	<link rel="preload" href="<?php echo esc_url( intercoil_asset_uri_versioned( 'fonts/AvenirNextArabic-Regular.woff2' ) ); ?>" as="font" type="font/woff2" crossorigin />
	<link rel="preload" href="<?php echo esc_url( intercoil_asset_uri_versioned( 'fonts/AvenirNextArabic-Bold.woff2' ) ); ?>" as="font" type="font/woff2" crossorigin />
	<?php
}
add_action( 'wp_head', 'intercoil_preload_assets', 1 );

/**
 * Output homepage meta description and Open Graph tags.
 */
function intercoil_home_meta_tags() {
	if ( ! is_front_page() ) {
		return;
	}
	?>
	<meta name="description" content="Intercoil International — Premium sleep manufacturer since 1974. Trusted across 28+ countries and the sleep partner behind the world's finest hospitality properties." />
	<meta property="og:title" content="Intercoil International — Sleep, Crafted to Perfection." />
	<meta property="og:description" content="A portfolio of trusted sleep and bedroom brands, crafted for every home, every lifestyle, and every standard of comfort." />
	<meta property="og:type" content="website" />
	<?php
}
add_action( 'wp_head', 'intercoil_home_meta_tags', 1 );

/**
 * Render the site logo markup for header/footer contexts.
 *
 * @param array $args Logo image attributes.
 */
function intercoil_the_logo( $args = array() ) {
	$defaults = array(
		'class'  => '',
		'width'  => '140',
		'height' => '32',
		'alt'    => 'Intercoil',
	);
	$args     = wp_parse_args( $args, $defaults );

	if ( has_custom_logo() ) {
		$logo_id = get_theme_mod( 'custom_logo' );
		echo wp_get_attachment_image(
			$logo_id,
			'full',
			false,
			array(
				'class' => $args['class'],
				'alt'   => $args['alt'],
				'width' => $args['width'],
			)
		);
		return;
	}

	printf(
		'<img class="%1$s" src="%2$s" alt="%3$s" width="%4$s" height="%5$s" />',
		esc_attr( $args['class'] ),
		esc_url( intercoil_asset_uri( 'logos/intercoil-logo-white.svg' ) ),
		esc_attr( $args['alt'] ),
		esc_attr( $args['width'] ),
		esc_attr( $args['height'] )
	);
}
