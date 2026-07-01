<?php
/**
 * Template Name: Mattresses
 *
 * @package Intercoil
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
intercoil_render_comfort_collection_page( 'mattresses' );
get_footer();
