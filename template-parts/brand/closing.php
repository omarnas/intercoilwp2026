<?php
/**
 * Brand page closing CTA — reused across all brand pages, content passed as args.
 *
 * Usage:
 * get_template_part( 'template-parts/brand/closing', null, array(
 *     'quote'     => 'Closing line.',
 *     'image'     => 'images/...',
 *     'cta_label' => 'Explore … Products',
 *     'cta_url'   => intercoil_comfort_collection_url( 'mattresses' ),
 * ) );
 *
 * @package Intercoil
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

extract( $args );
?>
<section class="brand-closing" aria-labelledby="brand-closing-heading">
	<div class="brand-closing__media" aria-hidden="true">
		<img
			class="brand-closing__img"
			src="<?php echo esc_url( intercoil_asset_uri( $image ) ); ?>"
			alt=""
			loading="lazy"
			decoding="async"
		/>
		<div class="brand-closing__overlay"></div>
	</div>

	<div class="container brand-closing__inner">
		<blockquote class="brand-closing__quote" id="brand-closing-heading">
			<?php echo esc_html( $quote ); ?>
		</blockquote>

		<div class="brand-closing__actions">
			<a href="<?php echo esc_url( $cta_url ); ?>" class="brand-btn brand-btn--primary">
				<?php echo esc_html( $cta_label ); ?>
				<span class="brand-btn__arrow" aria-hidden="true">&rarr;</span>
			</a>
			<a href="<?php echo esc_url( intercoil_brands_landing_url() ); ?>" class="brand-btn brand-btn--ghost">
				View All Brands
			</a>
		</div>
	</div>
</section>
