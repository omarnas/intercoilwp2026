<?php
/**
 * Theme header.
 *
 * @package Intercoil
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> dir="ltr">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="nav" role="banner">
	<div class="nav__inner">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="nav__logo" aria-label="<?php esc_attr_e( 'Intercoil International — Home', 'intercoil' ); ?>">
			<?php intercoil_the_logo(); ?>
		</a>

		<nav class="nav__links" aria-label="<?php esc_attr_e( 'Primary navigation', 'intercoil' ); ?>">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'primary',
					'container'      => false,
					'items_wrap'     => '%3$s',
					'depth'          => 2,
					'fallback_cb'    => 'intercoil_primary_menu_fallback',
					'walker'         => new Intercoil_Desktop_Nav_Walker(),
				)
			);
			?>
		</nav>

		<div class="nav__actions">
			<span class="nav__lang" aria-label="<?php esc_attr_e( 'Switch language to Arabic', 'intercoil' ); ?>">AR</span>
			<button class="nav__hamburger" aria-label="<?php esc_attr_e( 'Open menu', 'intercoil' ); ?>" aria-expanded="false" aria-controls="mobile-nav">
				<span></span><span></span><span></span>
			</button>
		</div>
	</div>
</header>

<nav class="nav__mobile" id="mobile-nav" aria-label="<?php esc_attr_e( 'Mobile navigation', 'intercoil' ); ?>">
	<?php
	wp_nav_menu(
		array(
			'theme_location' => 'primary',
			'container'      => false,
			'items_wrap'     => '%3$s',
			'depth'          => 2,
			'fallback_cb'    => 'intercoil_mobile_menu_fallback',
			'walker'         => new Intercoil_Mobile_Nav_Walker(),
		)
	);
	?>
</nav>

<main>
