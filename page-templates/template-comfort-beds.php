<?php
/**
 * Template Name: Beds & Bedroom Furniture
 *
 * @package Intercoil
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
intercoil_render_comfort_collection_page( 'beds' );
get_footer();
