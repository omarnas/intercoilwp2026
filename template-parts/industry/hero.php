<?php
/**
 * Industry page hero — reused across all industry pages, content passed as args.
 *
 * Usage:
 * get_template_part( 'template-parts/industry/hero', null, array(
 *     'hero_image' => 'images/...',
 *     'title'      => 'Hero headline.',
 *     'tagline'    => 'Optional supporting line.', // optional
 * ) );
 *
 * @package Intercoil
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

extract( $args );
?>
<header class="inner-hero inner-hero--tall industry-hero" aria-labelledby="industry-hero-heading">
	<div class="inner-hero__bg" aria-hidden="true">
		<img
			class="inner-hero__img"
			src="<?php echo esc_url( intercoil_asset_uri( $hero_image ) ); ?>"
			alt=""
			loading="eager"
			decoding="async"
		/>
		<div class="inner-hero__overlay"></div>
		<div class="inner-hero__glow inner-hero__glow--left"></div>
		<div class="inner-hero__glow inner-hero__glow--right"></div>
		<div class="inner-hero__grain"></div>
	</div>

	<div class="inner-hero__vignette" aria-hidden="true"></div>

	<div class="container inner-hero__content industry-hero__content">
		<span class="section-label section-label--light inner-hero__eyebrow">Industries We Serve</span>
		<h1 class="inner-hero__title inner-hero__title--simple industry-hero__title" id="industry-hero-heading"><?php echo esc_html( $title ); ?></h1>
		<?php if ( ! empty( $tagline ) ) : ?>
			<p class="inner-hero__tagline"><?php echo esc_html( $tagline ); ?></p>
		<?php endif; ?>
	</div>

	<div class="inner-hero__scroll" aria-hidden="true"><span></span></div>
	<div class="inner-hero__fade" aria-hidden="true"></div>
</header>
