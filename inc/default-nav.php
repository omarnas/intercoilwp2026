<?php
/**
 * Default primary navigation fallback markup.
 *
 * @package Intercoil
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Output the approved static primary navigation when no menu is assigned.
 */
function intercoil_primary_menu_fallback() {
	$placeholder = esc_url( home_url( '/' ) ) . '#';

	$groups = array(
		array(
			'title' => 'Our Story',
			'links' => array(
				'Our Legacy',
				'Our Promise',
				'Sustainability & Social Responsibility',
				'Certificates and Excellence',
			),
		),
		array(
			'title' => 'Comfort Collections',
			'links' => array(
				'Beds & Bedroom Furniture',
				'Mattresses',
				'Bedding Accessories',
				'Foam & Industrial Solutions',
				'Hospitality Sleep',
			),
		),
		array(
			'title'     => 'Our Brands',
			'brands'    => true,
			'links'     => array(
				'Intercoil',
				'Beautyrest by Simmons',
				'THERAPEDIC',
				'Dolidol',
				'Ghalya\'s Bedding Collection',
				'The Bedroom by Intercoil',
			),
		),
		array(
			'title' => 'Industries We Serve',
			'links' => array(
				'Hospitality Solutions',
				'Corporate & Government',
				'Wholesale & Distribution',
				'Tailored Manufacturing',
			),
		),
		array(
			'title' => 'Knowledge Hub',
			'links' => array(
				'Healthy Sleep Tips',
				'Mattress Guide',
				'Sleep Products Care',
				'Sleep',
			),
		),
		array(
			'title' => 'Media Center',
			'links' => array(
				'Press Releases',
				'Events & Exhibitions',
				'Awards & Guinness Records',
			),
		),
		array(
			'title' => 'Get in Touch',
			'links' => array(
				'Book a Consultation',
				'Become a Partner',
				'Warranty Registration',
				'Join Our Family',
			),
		),
	);

	foreach ( $groups as $group ) {
		$dropdown_class = ! empty( $group['brands'] ) ? ' nav__dropdown--brands' : '';
		?>
		<div class="nav__item">
			<button type="button" class="nav__link nav__trigger" aria-expanded="false" aria-haspopup="true"><?php echo esc_html( $group['title'] ); ?></button>
			<ul class="nav__dropdown<?php echo esc_attr( $dropdown_class ); ?>" role="menu">
				<?php foreach ( $group['links'] as $link ) : ?>
					<?php
					$nav_target = intercoil_resolve_default_nav_link_url( $link, $placeholder );
					$nav_href     = intercoil_default_nav_link_url( $link, $placeholder );
					$nav_class    = 'nav__dropdown-link' . intercoil_preview_gated_nav_class( $nav_target, $placeholder );
					?>
					<li role="none"><a href="<?php echo esc_url( $nav_href ); ?>" class="<?php echo esc_attr( $nav_class ); ?>" role="menuitem"<?php echo intercoil_is_nav_link_gated( $nav_target ) ? ' aria-disabled="true" tabindex="-1"' : ''; ?>><?php echo esc_html( $link ); ?></a></li>
				<?php endforeach; ?>
			</ul>
		</div>
		<?php
	}
}

/**
 * Output the approved static mobile navigation when no menu is assigned.
 */
function intercoil_mobile_menu_fallback() {
	$placeholder = esc_url( home_url( '/' ) ) . '#';

	$groups = array(
		array(
			'title' => 'Our Story',
			'links' => array(
				'Our Legacy',
				'Our Promise',
				'Sustainability & Social Responsibility',
				'Certificates and Excellence',
			),
		),
		array(
			'title' => 'Comfort Collections',
			'links' => array(
				'Beds & Bedroom Furniture',
				'Mattresses',
				'Bedding Accessories',
				'Foam & Industrial Solutions',
				'Hospitality Sleep',
			),
		),
		array(
			'title' => 'Our Brands',
			'links' => array(
				'Intercoil',
				'Beautyrest by Simmons',
				'THERAPEDIC',
				'Dolidol',
				'Ghalya\'s Bedding Collection',
				'The Bedroom by Intercoil',
			),
		),
		array(
			'title' => 'Industries We Serve',
			'links' => array(
				'Hospitality Solutions',
				'Corporate & Government',
				'Wholesale & Distribution',
				'Tailored Manufacturing',
			),
		),
		array(
			'title' => 'Knowledge Hub',
			'links' => array(
				'Healthy Sleep Tips',
				'Mattress Guide',
				'Sleep Products Care',
				'Sleep',
			),
		),
		array(
			'title' => 'Media Center',
			'links' => array(
				'Press Releases',
				'Events & Exhibitions',
				'Awards & Guinness Records',
			),
		),
		array(
			'title' => 'Get in Touch',
			'links' => array(
				'Book a Consultation',
				'Become a Partner',
				'Warranty Registration',
				'Join Our Family',
			),
		),
	);

	foreach ( $groups as $group ) {
		?>
		<div class="nav__mobile-group">
			<button type="button" class="nav__mobile-trigger" aria-expanded="false"><?php echo esc_html( $group['title'] ); ?></button>
			<ul class="nav__mobile-sub">
				<?php foreach ( $group['links'] as $link ) : ?>
					<?php
					$nav_target = intercoil_resolve_default_nav_link_url( $link, $placeholder );
					$nav_href     = intercoil_default_nav_link_url( $link, $placeholder );
					$nav_class    = 'nav__mobile-sublink' . intercoil_preview_gated_nav_class( $nav_target, $placeholder );
					?>
					<li><a href="<?php echo esc_url( $nav_href ); ?>" class="<?php echo esc_attr( $nav_class ); ?>"<?php echo intercoil_is_nav_link_gated( $nav_target ) ? ' aria-disabled="true" tabindex="-1"' : ''; ?>><?php echo esc_html( $link ); ?></a></li>
				<?php endforeach; ?>
			</ul>
		</div>
		<?php
	}
}
