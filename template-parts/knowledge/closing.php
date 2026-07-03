<?php
/**
 * Knowledge Hub page closing CTA — reused across all Knowledge Hub pages, content passed as args.
 *
 * Usage:
 * get_template_part( 'template-parts/knowledge/closing', null, array(
 *     'quote'             => 'Closing line.',
 *     'tagline'           => 'Optional supporting line.', // optional
 *     'image'             => 'images/...',
 *     'cta_primary_label' => 'Explore Our Products',
 *     'cta_primary_url'   => home_url( '/' ),
 *     'cta_ghost_label'   => 'Mattress Guide',
 *     'cta_ghost_url'     => home_url( '/' ),
 * ) );
 *
 * @package Intercoil
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

extract( $args );
?>
<section class="knowledge-closing" aria-labelledby="knowledge-closing-heading">
	<div class="knowledge-closing__media" aria-hidden="true">
		<img
			class="knowledge-closing__img"
			src="<?php echo esc_url( intercoil_asset_uri( $image ) ); ?>"
			alt=""
			loading="lazy"
			decoding="async"
		/>
		<div class="knowledge-closing__overlay"></div>
	</div>

	<div class="container knowledge-closing__inner">
		<blockquote class="knowledge-closing__quote" id="knowledge-closing-heading">
			<?php echo esc_html( $quote ); ?>
		</blockquote>

		<?php if ( ! empty( $tagline ) ) : ?>
			<p class="knowledge-closing__tagline"><?php echo esc_html( $tagline ); ?></p>
		<?php endif; ?>

		<div class="knowledge-closing__actions">
			<a href="<?php echo esc_url( $cta_primary_url ); ?>" class="knowledge-btn knowledge-btn--primary">
				<?php echo esc_html( $cta_primary_label ); ?>
				<span class="knowledge-btn__arrow" aria-hidden="true">&rarr;</span>
			</a>
			<a href="<?php echo esc_url( $cta_ghost_url ); ?>" class="knowledge-btn knowledge-btn--ghost">
				<?php echo esc_html( $cta_ghost_label ); ?>
			</a>
		</div>
	</div>
</section>
