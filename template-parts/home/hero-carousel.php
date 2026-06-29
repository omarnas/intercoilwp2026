<?php
/**
 * Homepage hero carousel.
 *
 * @package Intercoil
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$hero_slides = intercoil_get_hero_slides();
$first_slide = $hero_slides[0];

$main_button_label      = $first_slide['main_button_label'] ?: 'Discover Our Story';
$main_button_link       = $first_slide['main_button_link'] ?: '#about';
$secondary_button_label = $first_slide['secondary_button_label'] ?: 'Our Brands';
$secondary_button_link  = $first_slide['secondary_button_link'] ?: '#brands';
?>

<!-- ══════════════════════════════════════════
     SECTION 1 — HERO (full-width carousel)
══════════════════════════════════════════ -->
<section class="hero hero-carousel is-first-slide" aria-label="<?php esc_attr_e( 'Hero — Sleep, Crafted to Perfection', 'intercoil' ); ?>">

	<div class="hero-carousel__slides" aria-live="polite">

		<?php foreach ( $hero_slides as $index => $slide ) : ?>
			<?php
			$is_active        = 0 === $index;
			$is_category      = $index > 0;
			$slide_key        = sanitize_title( $slide['eyebrow'] ?: 'slide-' . ( $index + 1 ) );
			$image_alt        = $slide['image_alt'] ?? '';
			$img_wrap_classes = 'reveal-mask hero-carousel__img-wrap' . ( $is_active ? ' is-revealed' : '' );
			?>
			<div
				class="hero-carousel__slide<?php echo $is_active ? ' is-active' : ''; ?>"
				data-slide="<?php echo esc_attr( $slide_key ); ?>"
				aria-hidden="<?php echo $is_active ? 'false' : 'true'; ?>"
				data-hero-eyebrow="<?php echo esc_attr( $slide['eyebrow'] ); ?>"
				<?php if ( $is_category ) : ?>
					data-hero-eyebrow-variant="category"
				<?php endif; ?>
				data-hero-heading="<?php echo intercoil_hero_heading_attr( $slide['heading'] ); ?>"
				data-hero-body="<?php echo esc_attr( $slide['body'] ); ?>"
			>
				<div class="<?php echo esc_attr( $img_wrap_classes ); ?>">
					<img
						class="hero-carousel__img"
						src="<?php echo esc_url( $slide['slider_image'] ); ?>"
						alt="<?php echo esc_attr( $image_alt ); ?>"
						<?php if ( $is_active ) : ?>
							fetchpriority="high"
						<?php else : ?>
							loading="lazy"
						<?php endif; ?>
					/>
				</div>
			</div>
		<?php endforeach; ?>

	</div>

	<div class="hero__overlay" aria-hidden="true"></div>
	<div class="hero__ambient" aria-hidden="true"></div>

	<div class="hero__content">
		<div class="hero__text">
			<p class="hero__eyebrow is-visible" aria-hidden="false"><?php echo esc_html( $first_slide['eyebrow'] ); ?></p>
			<h1 class="hero__heading"><?php echo intercoil_hero_heading_html( $first_slide['heading'] ); ?></h1>
			<p class="hero__body"><?php echo esc_html( $first_slide['body'] ); ?></p>
		</div>

		<div class="hero__ctas">
			<a href="<?php echo esc_url( $main_button_link ); ?>" class="btn btn--primary">
				<?php echo esc_html( $main_button_label ); ?>
				<svg class="btn-arrow" viewBox="0 0 18 18" fill="none" aria-hidden="true">
					<path d="M3 9h12M9 3l6 6-6 6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
				</svg>
			</a>
			<a href="<?php echo esc_url( $secondary_button_link ); ?>" class="btn btn--outline"><?php echo esc_html( $secondary_button_label ); ?></a>
		</div>
	</div>

	<div class="hero-carousel__nav" aria-hidden="false">
		<button type="button" class="hero-carousel__arrow hero-carousel__arrow--prev hero-carousel__arrow--side" aria-label="<?php esc_attr_e( 'Previous slide', 'intercoil' ); ?>">
			<svg viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M15 6l-6 6 6 6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
		</button>
		<button type="button" class="hero-carousel__arrow hero-carousel__arrow--next hero-carousel__arrow--side" aria-label="<?php esc_attr_e( 'Next slide', 'intercoil' ); ?>">
			<svg viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M9 6l6 6-6 6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
		</button>
	</div>

	<div class="hero-carousel__controls" aria-label="<?php esc_attr_e( 'Hero slide navigation', 'intercoil' ); ?>">
		<div class="hero-carousel__dots" role="tablist" aria-label="<?php esc_attr_e( 'Choose slide', 'intercoil' ); ?>">
			<?php foreach ( $hero_slides as $index => $slide ) : ?>
				<?php $is_active = 0 === $index; ?>
				<button
					type="button"
					class="hero-carousel__dot<?php echo $is_active ? ' is-active' : ''; ?>"
					role="tab"
					aria-selected="<?php echo $is_active ? 'true' : 'false'; ?>"
					aria-label="<?php echo esc_attr( intercoil_hero_slide_dot_label( $slide['heading'], $index ) ); ?>"
				>
					<span class="hero-carousel__dot-bar" aria-hidden="true">
						<span class="hero-carousel__dot-fill"></span>
					</span>
				</button>
			<?php endforeach; ?>
		</div>
	</div>

</section>
