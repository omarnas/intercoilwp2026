<?php
/**
 * Brand page hero — reused across all brand pages, content passed as args.
 *
 * Usage:
 * get_template_part( 'template-parts/brand/hero', null, array(
 *     'hero_image' => 'images/...',
 *     'logo'       => 'logos/...',
 *     'logo_class' => 'brand-hero__logo-wrap--wide', // optional
 *     'name'       => 'Brand Name',
 *     'kicker'     => 'Light intro line.',
 *     'headline'   => 'Bold headline.',
 *     'category'   => 'Mattresses', // optional
 * ) );
 *
 * @package Intercoil
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

extract( $args );
?>
<header class="inner-hero inner-hero--tall brand-hero" aria-labelledby="brand-hero-heading">
	<div class="inner-hero__bg" aria-hidden="true">
		<img
			class="inner-hero__img"
			src="<?php echo esc_url( intercoil_asset_uri( $hero_image ) ); ?>"
			alt=""
			loading="eager"
			decoding="async"
		/>
		<div class="inner-hero__overlay"></div>
		<div class="brand-hero__tint"></div>
		<div class="inner-hero__glow inner-hero__glow--left"></div>
		<div class="inner-hero__grain"></div>
	</div>

	<div class="inner-hero__vignette" aria-hidden="true"></div>

	<div class="container inner-hero__content brand-hero__content">
		<a class="brand-hero__back" href="<?php echo esc_url( intercoil_brands_landing_url() ); ?>">
			<span class="brand-hero__back-arrow" aria-hidden="true">&larr;</span>
			Our Brands
		</a>

		<div class="brand-hero__logo-wrap <?php echo esc_attr( $logo_class ?? '' ); ?>">
			<img
				class="brand-hero__logo"
				src="<?php echo esc_url( intercoil_asset_uri( $logo ) ); ?>"
				alt="<?php echo esc_attr( $name ); ?>"
				loading="eager"
				decoding="async"
			/>
		</div>

		<h1 class="inner-hero__title inner-hero__title--display brand-hero__title" id="brand-hero-heading">
			<span class="inner-hero__title-line inner-hero__title-line--light brand-hero__kicker"><?php echo esc_html( $kicker ); ?></span>
			<span class="inner-hero__title-line inner-hero__title-line--bold brand-hero__headline"><?php echo esc_html( $headline ); ?></span>
		</h1>

		<?php if ( ! empty( $category ) ) : ?>
			<p class="brand-hero__category"><?php echo esc_html( $category ); ?></p>
		<?php endif; ?>
	</div>

	<div class="inner-hero__scroll" aria-hidden="true"><span></span></div>
	<div class="inner-hero__fade" aria-hidden="true"></div>
</header>
