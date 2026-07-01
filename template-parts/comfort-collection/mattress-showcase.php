<?php
/**
 * Mattresses page — full-width brand showcase (homepage panel style).
 *
 * @package Intercoil
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$collection = get_query_var( 'intercoil_comfort_collection' );
$brands     = intercoil_get_mattress_brands();
$home_url   = home_url( '/' );

if ( empty( $brands ) ) {
	return;
}
?>

<section class="mattress-showcase" aria-labelledby="mattress-showcase-heading">
	<header class="mattress-showcase__header">
		<div class="container mattress-showcase__header-inner">
			<span class="section-label section-label--light">Mattresses by Brand</span>
			<h2 class="mattress-showcase__heading" id="mattress-showcase-heading">
				<?php echo esc_html( $collection['brands_heading'] ?? 'Mattresses by Brand' ); ?>
			</h2>
			<?php if ( ! empty( $collection['brands_subheading'] ) ) : ?>
				<p class="mattress-showcase__subheading"><?php echo esc_html( $collection['brands_subheading'] ); ?></p>
			<?php endif; ?>
		</div>
	</header>

	<div class="mattress-showcase__panels">
		<?php foreach ( $brands as $index => $brand ) : ?>
			<?php
			$panel_classes = array( 'mattress-panel' );
			if ( ! empty( $brand['reverse'] ) ) {
				$panel_classes[] = 'mattress-panel--reverse';
			}
			if ( ! empty( $brand['panel_class'] ) ) {
				$panel_classes[] = $brand['panel_class'];
			}
			?>
			<article class="<?php echo esc_attr( implode( ' ', $panel_classes ) ); ?>" aria-label="<?php echo esc_attr( $brand['name'] ); ?>">
				<div
					class="mattress-panel__bg"
					style="background-image: url('<?php echo esc_url( intercoil_asset_uri( $brand['image'] ) ); ?>');"
					aria-hidden="true"
				></div>
				<div class="mattress-panel__overlay" aria-hidden="true"></div>
				<span class="mattress-panel__index" aria-hidden="true"><?php echo esc_html( sprintf( '%02d', $index + 1 ) ); ?></span>

				<div class="mattress-panel__inner">
					<div class="mattress-panel__content">
						<div class="mattress-panel__logo-wrap <?php echo esc_attr( $brand['logo_class'] ?? '' ); ?>">
							<img
								class="mattress-panel__logo"
								src="<?php echo esc_url( intercoil_asset_uri( $brand['logo'] ) ); ?>"
								alt="<?php echo esc_attr( $brand['name'] ); ?>"
								loading="lazy"
								decoding="async"
							/>
						</div>

						<?php if ( ! empty( $brand['tagline'] ) ) : ?>
							<p class="mattress-panel__tagline"><?php echo esc_html( $brand['tagline'] ); ?></p>
						<?php endif; ?>

						<?php if ( ! empty( $brand['desc'] ) ) : ?>
							<p class="mattress-panel__desc"><?php echo esc_html( $brand['desc'] ); ?></p>
						<?php endif; ?>

						<a href="<?php echo esc_url( $home_url . '#brands' ); ?>" class="mattress-panel__cta" aria-label="<?php echo esc_attr( sprintf( __( 'Explore %s', 'intercoil' ), $brand['name'] ) ); ?>">
							Explore Brand
							<svg viewBox="0 0 18 18" fill="none" aria-hidden="true">
								<path d="M3 9h12M9 3l6 6-6 6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</a>
					</div>
				</div>
			</article>
		<?php endforeach; ?>
	</div>
</section>
