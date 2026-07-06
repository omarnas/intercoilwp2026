<?php
/**
 * News / Press Releases — routing helpers.
 *
 * @package Intercoil
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Suggested slug for the Press Releases page.
 *
 * @return string
 */
function intercoil_news_page_slug() {
	return 'press-releases';
}

/**
 * Permalink for the news archive page.
 *
 * @return string
 */
function intercoil_news_page_url() {
	$page = get_page_by_path( intercoil_news_page_slug() );

	return $page ? get_permalink( $page ) : home_url( '/' );
}

/**
 * News archive page template slugs.
 *
 * @return array<int, string>
 */
function intercoil_news_page_templates() {
	return array(
		'page-templates/template-news.php',
	);
}

/**
 * Posts per page on the news archive.
 *
 * @return int
 */
function intercoil_news_posts_per_page() {
	return (int) apply_filters( 'intercoil_news_posts_per_page', 9 );
}

/**
 * Fallback image when a post has no featured image.
 *
 * @return string Theme asset path.
 */
function intercoil_news_fallback_image() {
	return 'images/photography/showroom/DSC_7919-1080x675-1.png';
}

/**
 * Current paged value for a Page template running a custom query.
 *
 * @return int
 */
function intercoil_news_current_page() {
	$paged = (int) get_query_var( 'page' );

	if ( $paged < 1 ) {
		$paged = (int) get_query_var( 'paged' );
	}

	return max( 1, $paged );
}

/**
 * Featured image URL for a post, with theme fallback.
 *
 * @param int|null $post_id Post ID.
 * @return string
 */
function intercoil_news_post_image_url( $post_id = null ) {
	$post_id = $post_id ? (int) $post_id : get_the_ID();
	$image   = get_the_post_thumbnail_url( $post_id, 'large' );

	if ( $image ) {
		return $image;
	}

	return intercoil_asset_uri( intercoil_news_fallback_image() );
}

/**
 * Short excerpt for news cards.
 *
 * @param int|null $post_id Post ID.
 * @return string
 */
function intercoil_news_post_excerpt( $post_id = null ) {
	$post_id = $post_id ? (int) $post_id : get_the_ID();
	$post    = get_post( $post_id );

	if ( ! $post ) {
		return '';
	}

	if ( $post->post_excerpt ) {
		return wp_strip_all_tags( $post->post_excerpt );
	}

	return wp_trim_words( wp_strip_all_tags( $post->post_content ), 28, '…' );
}

/**
 * Formatted post date for news templates.
 *
 * @param int|null $post_id Post ID.
 * @return string
 */
function intercoil_news_post_date( $post_id = null ) {
	$post_id = $post_id ? (int) $post_id : get_the_ID();

	return get_the_date( 'j F Y', $post_id );
}
