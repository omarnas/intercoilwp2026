<?php
/**
 * Preview access — restrict WIP inner pages to allowed IPs or logged-in users.
 *
 * Gate is currently OFF (opened to all visitors) — every inner page listed in
 * intercoil_preview_gated_templates() is publicly reachable and its nav link
 * resolves normally for everyone, not just the allowlisted IPs / logged-in
 * admin. Re-enable with either of:
 *   - flip the default below back to true, or
 *   - add_filter( 'intercoil_preview_gate_enabled', '__return_true' );
 *
 * @package Intercoil
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Whether inner-page preview gating is active.
 *
 * @return bool
 */
function intercoil_preview_gate_enabled() {
	return (bool) apply_filters( 'intercoil_preview_gate_enabled', false );
}

/**
 * IP addresses that may preview inner pages without logging in.
 *
 * @return array<int, string>
 */
function intercoil_preview_access_ips() {
	return apply_filters(
		'intercoil_preview_access_ips',
		array(
			'213.132.47.210',
			'87.200.164.145',
		)
	);
}

/**
 * Best-effort client IP (supports common reverse-proxy headers).
 *
 * @return string
 */
function intercoil_get_client_ip() {
	$candidates = array();

	if ( ! empty( $_SERVER['HTTP_X_FORWARDED_FOR'] ) ) {
		foreach ( explode( ',', (string) wp_unslash( $_SERVER['HTTP_X_FORWARDED_FOR'] ) ) as $ip ) {
			$candidates[] = trim( $ip );
		}
	}

	if ( ! empty( $_SERVER['HTTP_X_REAL_IP'] ) ) {
		$candidates[] = trim( (string) wp_unslash( $_SERVER['HTTP_X_REAL_IP'] ) );
	}

	if ( ! empty( $_SERVER['REMOTE_ADDR'] ) ) {
		$candidates[] = trim( (string) wp_unslash( $_SERVER['REMOTE_ADDR'] ) );
	}

	foreach ( $candidates as $ip ) {
		if ( filter_var( $ip, FILTER_VALIDATE_IP ) ) {
			return $ip;
		}
	}

	return '';
}

/**
 * True when the current visitor may open WIP inner pages.
 *
 * @return bool
 */
function intercoil_can_preview_inner_pages() {
	if ( ! intercoil_preview_gate_enabled() ) {
		return true;
	}

	if ( is_user_logged_in() ) {
		return true;
	}

	$client_ip = intercoil_get_client_ip();
	if ( '' === $client_ip ) {
		return false;
	}

	return in_array( $client_ip, intercoil_preview_access_ips(), true );
}

/**
 * Page templates treated as WIP inner pages.
 *
 * @return array<int, string>
 */
function intercoil_preview_gated_templates() {
	return apply_filters(
		'intercoil_preview_gated_templates',
		array_merge(
			array(
				'page-templates/template-our-legacy.php',
				'page-templates/template-sustainability.php',
				'page-templates/template-iso-certificates.php',
				'page-templates/template-awards.php',
				'page-templates/template-locate-store.php',
				'page-templates/template-become-partner.php',
				'page-templates/template-book-consultation.php',
				'page-templates/template-warranty-registration.php',
				'page-templates/template-join-our-family.php',
			),
			intercoil_comfort_collection_templates(),
			intercoil_brand_page_templates(),
			intercoil_industry_page_templates(),
			intercoil_knowledge_page_templates(),
			intercoil_news_page_templates()
		)
	);
}

/**
 * Whether a page uses a gated inner template.
 *
 * @param int $page_id Page ID.
 * @return bool
 */
function intercoil_page_is_preview_gated( $page_id ) {
	if ( ! $page_id || 'page' !== get_post_type( $page_id ) ) {
		return false;
	}

	$template = get_page_template_slug( $page_id );

	return $template && in_array( $template, intercoil_preview_gated_templates(), true );
}

/**
 * Whether a URL resolves to a gated inner page.
 *
 * @param string $url URL to check.
 * @return bool
 */
function intercoil_url_is_preview_gated_page( $url ) {
	if ( empty( $url ) || '#' === $url ) {
		return false;
	}

	$page_id = url_to_postid( $url );

	return intercoil_page_is_preview_gated( $page_id );
}

/**
 * Whether a nav target should be disabled for the current visitor.
 *
 * @param string $url Resolved destination URL.
 * @return bool
 */
function intercoil_is_nav_link_gated( $url ) {
	if ( ! intercoil_preview_gate_enabled() || intercoil_can_preview_inner_pages() ) {
		return false;
	}

	$post_id = url_to_postid( $url );
	if ( $post_id && 'post' === get_post_type( $post_id ) ) {
		return true;
	}

	return intercoil_url_is_preview_gated_page( $url );
}

/**
 * Return a nav URL or a safe placeholder when preview is not allowed.
 *
 * @param string $url         Intended destination.
 * @param string $placeholder Fallback when gated.
 * @return string
 */
function intercoil_gated_nav_url( $url, $placeholder ) {
	if ( intercoil_is_nav_link_gated( $url ) ) {
		return $placeholder;
	}

	return $url;
}

/**
 * Gate WordPress menu items that point at WIP inner pages.
 *
 * @param array<WP_Post> $items Menu items.
 * @return array<WP_Post>
 */
function intercoil_filter_preview_gated_nav_items( $items ) {
	if ( intercoil_can_preview_inner_pages() ) {
		return $items;
	}

	$placeholder = home_url( '/#' );

	foreach ( $items as $item ) {
		if ( ! $item->menu_item_parent ) {
			continue;
		}

		if ( ! intercoil_is_nav_link_gated( $item->url ) ) {
			continue;
		}

		$item->url       = $placeholder;
		$item->classes[] = 'nav__item--preview-gated';
	}

	return $items;
}
add_filter( 'wp_nav_menu_objects', 'intercoil_filter_preview_gated_nav_items', 20 );

/**
 * Block direct access to gated inner pages for unauthorized visitors.
 */
function intercoil_block_unauthorized_inner_pages() {
	if ( ! intercoil_preview_gate_enabled() || intercoil_can_preview_inner_pages() ) {
		return;
	}

	if ( is_single() && 'post' === get_post_type() ) {
		wp_safe_redirect( home_url( '/' ), 302 );
		exit;
	}

	if ( ! is_page() ) {
		return;
	}

	if ( ! intercoil_page_is_preview_gated( get_queried_object_id() ) ) {
		return;
	}

	wp_safe_redirect( home_url( '/' ), 302 );
	exit;
}
add_action( 'template_redirect', 'intercoil_block_unauthorized_inner_pages', 0 );

/**
 * Nav link class when a fallback menu item is preview-gated.
 *
 * @param string $url         Resolved URL before gating.
 * @param string $placeholder Placeholder URL.
 * @return string
 */
function intercoil_preview_gated_nav_class( $url, $placeholder ) {
	return intercoil_is_nav_link_gated( $url ) ? ' nav__item--preview-gated' : '';
}
