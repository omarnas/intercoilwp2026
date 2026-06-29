<?php
/**
 * Custom post types.
 *
 * @package Intercoil
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register theme custom post types.
 */
function intercoil_register_post_types() {
	$labels = array(
		'name'                  => _x( 'Brands', 'post type general name', 'intercoil' ),
		'singular_name'         => _x( 'Brand', 'post type singular name', 'intercoil' ),
		'menu_name'             => _x( 'Brands', 'admin menu', 'intercoil' ),
		'name_admin_bar'        => _x( 'Brand', 'add new on admin bar', 'intercoil' ),
		'add_new'               => _x( 'Add New', 'brand', 'intercoil' ),
		'add_new_item'          => __( 'Add New Brand', 'intercoil' ),
		'new_item'              => __( 'New Brand', 'intercoil' ),
		'edit_item'             => __( 'Edit Brand', 'intercoil' ),
		'view_item'             => __( 'View Brand', 'intercoil' ),
		'all_items'             => __( 'All Brands', 'intercoil' ),
		'search_items'          => __( 'Search Brands', 'intercoil' ),
		'parent_item_colon'     => __( 'Parent Brands:', 'intercoil' ),
		'not_found'             => __( 'No brands found.', 'intercoil' ),
		'not_found_in_trash'    => __( 'No brands found in Trash.', 'intercoil' ),
		'featured_image'        => __( 'Brand Image', 'intercoil' ),
		'set_featured_image'    => __( 'Set brand image', 'intercoil' ),
		'remove_featured_image' => __( 'Remove brand image', 'intercoil' ),
		'use_featured_image'    => __( 'Use as brand image', 'intercoil' ),
	);

	register_post_type(
		'intercoil_brand',
		array(
			'labels'       => $labels,
			'public'       => true,
			'has_archive'  => false,
			'show_in_rest' => true,
			'menu_position'=> 21,
			'menu_icon'    => 'dashicons-awards',
			'supports'     => array( 'title', 'editor', 'thumbnail', 'page-attributes', 'excerpt' ),
			'rewrite'      => array(
				'slug' => 'brands',
			),
		)
	);
}
add_action( 'init', 'intercoil_register_post_types' );

/**
 * Brand admin list columns.
 *
 * @param array $columns Existing columns.
 * @return array
 */
function intercoil_brand_admin_columns( $columns ) {
	$new_columns = array();

	if ( isset( $columns['cb'] ) ) {
		$new_columns['cb'] = $columns['cb'];
	}

	$new_columns['title']           = __( 'Title', 'intercoil' );
	$new_columns['featured_image']  = __( 'Featured Image', 'intercoil' );
	$new_columns['menu_order']      = __( 'Order', 'intercoil' );
	$new_columns['date']            = __( 'Date', 'intercoil' );

	return $new_columns;
}
add_filter( 'manage_intercoil_brand_posts_columns', 'intercoil_brand_admin_columns' );

/**
 * Render brand admin list column content.
 *
 * @param string $column  Column key.
 * @param int    $post_id Post ID.
 */
function intercoil_brand_admin_column_content( $column, $post_id ) {
	if ( 'featured_image' === $column ) {
		if ( has_post_thumbnail( $post_id ) ) {
			echo get_the_post_thumbnail( $post_id, array( 60, 60 ) );
		} else {
			echo '—';
		}
		return;
	}

	if ( 'menu_order' === $column ) {
		echo esc_html( (string) get_post_field( 'menu_order', $post_id ) );
	}
}
add_action( 'manage_intercoil_brand_posts_custom_column', 'intercoil_brand_admin_column_content', 10, 2 );

/**
 * Make brand Order column sortable.
 *
 * @param array $columns Sortable columns.
 * @return array
 */
function intercoil_brand_sortable_columns( $columns ) {
	$columns['menu_order'] = 'menu_order';

	return $columns;
}
add_filter( 'manage_edit-intercoil_brand_sortable_columns', 'intercoil_brand_sortable_columns' );

/**
 * Sort brands by menu order in admin.
 *
 * @param WP_Query $query Query instance.
 */
function intercoil_brand_admin_orderby( $query ) {
	if ( ! is_admin() || ! $query->is_main_query() ) {
		return;
	}

	if ( 'intercoil_brand' !== $query->get( 'post_type' ) ) {
		return;
	}

	if ( 'menu_order' === $query->get( 'orderby' ) ) {
		$query->set( 'orderby', 'menu_order' );
		$query->set( 'order', $query->get( 'order' ) ? $query->get( 'order' ) : 'ASC' );
	}
}
add_action( 'pre_get_posts', 'intercoil_brand_admin_orderby' );
