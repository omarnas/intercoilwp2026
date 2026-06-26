<?php
/**
 * Custom navigation walkers.
 *
 * @package Intercoil
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Desktop primary navigation walker.
 */
class Intercoil_Desktop_Nav_Walker extends Walker_Nav_Menu {

	/**
	 * Current top-level menu item.
	 *
	 * @var WP_Post|null
	 */
	private $current_parent_item = null;

	/**
	 * Start the list before the elements are added.
	 *
	 * @param string   $output Used to append additional content.
	 * @param int      $depth  Depth of menu item.
	 * @param stdClass $args   An object of wp_nav_menu() arguments.
	 */
	public function start_lvl( &$output, $depth = 0, $args = null ) {
		if ( 0 !== (int) $depth ) {
			return;
		}

		$classes = 'nav__dropdown';

		if ( $this->current_parent_item && in_array( 'nav__dropdown--brands', (array) $this->current_parent_item->classes, true ) ) {
			$classes .= ' nav__dropdown--brands';
		}

		$output .= '<ul class="' . esc_attr( $classes ) . '" role="menu">';
	}

	/**
	 * End the list after the elements are added.
	 *
	 * @param string   $output Used to append additional content.
	 * @param int      $depth  Depth of menu item.
	 * @param stdClass $args   An object of wp_nav_menu() arguments.
	 */
	public function end_lvl( &$output, $depth = 0, $args = null ) {
		if ( 0 === (int) $depth ) {
			$output .= '</ul>';
		}
	}

	/**
	 * Start the element output.
	 *
	 * @param string   $output Used to append additional content.
	 * @param WP_Post  $item   Menu item data object.
	 * @param int      $depth  Depth of menu item.
	 * @param stdClass $args   An object of wp_nav_menu() arguments.
	 * @param int      $id     Current item ID.
	 */
	public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
		if ( 0 === (int) $depth ) {
			$this->current_parent_item = $item;
			$output                   .= '<div class="nav__item">';
			$output                   .= '<button type="button" class="nav__link nav__trigger" aria-expanded="false" aria-haspopup="true">';
			$output                   .= esc_html( $item->title );
			$output                   .= '</button>';
			return;
		}

		$output .= '<li role="none"><a href="' . esc_url( $item->url ) . '" class="nav__dropdown-link" role="menuitem">';
		$output .= esc_html( $item->title );
		$output .= '</a></li>';
	}

	/**
	 * End the element output.
	 *
	 * @param string   $output Used to append additional content.
	 * @param WP_Post  $item   Menu item data object.
	 * @param int      $depth  Depth of menu item.
	 * @param stdClass $args   An object of wp_nav_menu() arguments.
	 */
	public function end_el( &$output, $item, $depth = 0, $args = null ) {
		if ( 0 === (int) $depth ) {
			$output .= '</div>';
		}
	}
}

/**
 * Mobile primary navigation walker.
 */
class Intercoil_Mobile_Nav_Walker extends Walker_Nav_Menu {

	/**
	 * Start the list before the elements are added.
	 *
	 * @param string   $output Used to append additional content.
	 * @param int      $depth  Depth of menu item.
	 * @param stdClass $args   An object of wp_nav_menu() arguments.
	 */
	public function start_lvl( &$output, $depth = 0, $args = null ) {
		if ( 0 === (int) $depth ) {
			$output .= '<ul class="nav__mobile-sub">';
		}
	}

	/**
	 * End the list after the elements are added.
	 *
	 * @param string   $output Used to append additional content.
	 * @param int      $depth  Depth of menu item.
	 * @param stdClass $args   An object of wp_nav_menu() arguments.
	 */
	public function end_lvl( &$output, $depth = 0, $args = null ) {
		if ( 0 === (int) $depth ) {
			$output .= '</ul>';
		}
	}

	/**
	 * Start the element output.
	 *
	 * @param string   $output Used to append additional content.
	 * @param WP_Post  $item   Menu item data object.
	 * @param int      $depth  Depth of menu item.
	 * @param stdClass $args   An object of wp_nav_menu() arguments.
	 * @param int      $id     Current item ID.
	 */
	public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
		if ( 0 === (int) $depth ) {
			$output .= '<div class="nav__mobile-group">';
			$output .= '<button type="button" class="nav__mobile-trigger" aria-expanded="false">';
			$output .= esc_html( $item->title );
			$output .= '</button>';
			return;
		}

		$output .= '<li><a href="' . esc_url( $item->url ) . '" class="nav__mobile-sublink">';
		$output .= esc_html( $item->title );
		$output .= '</a></li>';
	}

	/**
	 * End the element output.
	 *
	 * @param string   $output Used to append additional content.
	 * @param WP_Post  $item   Menu item data object.
	 * @param int      $depth  Depth of menu item.
	 * @param stdClass $args   An object of wp_nav_menu() arguments.
	 */
	public function end_el( &$output, $item, $depth = 0, $args = null ) {
		if ( 0 === (int) $depth ) {
			$output .= '</div>';
		}
	}
}
