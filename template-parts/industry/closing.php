<?php
/**
 * Industry page closing CTA — reused across all industry pages, content passed as args.
 *
 * Usage:
 * get_template_part( 'template-parts/industry/closing', null, array(
 *     'quote'             => 'Closing line.',
 *     'image'             => 'images/...',
 *     'cta_primary_label' => 'Book a Consultation',
 *     'cta_primary_url'   => home_url( '/' ) . '#contact',
 *     'cta_ghost_label'   => 'Get in Touch',
 *     'cta_ghost_url'     => home_url( '/' ) . '#contact',
 * ) );
 *
 * @package Intercoil
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

extract( $args );
?>
<section class="industry-closing" aria-labelledby="industry-closing-heading">
	<div class="industry-closing__media" aria-hidden="true">
		<img
			class="industry-closing__img"
			src="<?php echo esc_url( intercoil_asset_uri( $image ) ); ?>"
			alt=""
			loading="lazy"
			decoding="async"
		/>
		<div class="industry-closing__overlay"></div>
	</div>

	<div class="container industry-closing__inner">
		<blockquote class="industry-closing__quote" id="industry-closing-heading">
			<?php echo esc_html( $quote ); ?>
		</blockquote>

		<div class="industry-closing__actions">
			<a href="<?php echo esc_url( $cta_primary_url ); ?>" class="industry-btn industry-btn--primary">
				<?php echo esc_html( $cta_primary_label ); ?>
				<span class="industry-btn__arrow" aria-hidden="true">&rarr;</span>
			</a>
			<a href="<?php echo esc_url( $cta_ghost_url ); ?>" class="industry-btn industry-btn--ghost">
				<?php echo esc_html( $cta_ghost_label ); ?>
			</a>
		</div>
	</div>
</section>
