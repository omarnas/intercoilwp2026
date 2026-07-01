<?php
/**
 * Comfort Collection shared page layout.
 *
 * @package Intercoil
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$collection = get_query_var( 'intercoil_comfort_collection' );
$key        = get_query_var( 'intercoil_comfort_collection_key' );

if ( empty( $collection ) || ! is_array( $collection ) ) {
	return;
}

$home_url       = home_url( '/' );
$hero_id        = 'comfort-hero-' . sanitize_html_class( (string) $key );
$has_prose      = ! empty( $collection['prose'] );
$has_pillars    = ! empty( $collection['pillars'] );
$show_brands    = ! empty( $collection['show_brands'] );
$brands         = $show_brands ? intercoil_get_mattress_brands() : array();
?>

<div class="intercoil-inner-page comfort-page comfort-page--<?php echo esc_attr( $key ); ?>">

	<header class="inner-hero inner-hero--tall comfort-hero" aria-labelledby="<?php echo esc_attr( $hero_id ); ?>">
		<div class="inner-hero__bg" aria-hidden="true">
			<img
				class="inner-hero__img"
				src="<?php echo esc_url( intercoil_asset_uri( $collection['hero_image'] ) ); ?>"
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

		<div class="container inner-hero__content">
			<span class="section-label section-label--light inner-hero__eyebrow">Comfort Collections</span>
			<h1 class="inner-hero__title inner-hero__title--simple" id="<?php echo esc_attr( $hero_id ); ?>"><?php echo esc_html( $collection['title'] ); ?></h1>
			<p class="inner-hero__tagline"><?php echo esc_html( $collection['tagline'] ); ?></p>
		</div>

		<div class="inner-hero__fade" aria-hidden="true"></div>
	</header>

	<section class="comfort-intro" aria-labelledby="<?php echo esc_attr( 'comfort-intro-' . $key ); ?>">
		<?php if ( ! empty( $collection['watermark'] ) ) : ?>
			<div class="comfort-intro__watermark" aria-hidden="true"><?php echo esc_html( $collection['watermark'] ); ?></div>
		<?php endif; ?>

		<div class="container comfort-intro__layout">
			<div class="comfort-intro__visual">
				<figure class="comfort-intro__figure comfort-intro__figure--primary">
					<img
						src="<?php echo esc_url( intercoil_asset_uri( $collection['intro_primary'] ) ); ?>"
						alt=""
						loading="lazy"
						decoding="async"
					/>
				</figure>
				<figure class="comfort-intro__figure comfort-intro__figure--accent">
					<img
						src="<?php echo esc_url( intercoil_asset_uri( $collection['intro_accent'] ) ); ?>"
						alt=""
						loading="lazy"
						decoding="async"
					/>
				</figure>
			</div>

			<div class="comfort-intro__copy">
				<h2 class="inner-visually-hidden" id="<?php echo esc_attr( 'comfort-intro-' . $key ); ?>"><?php echo esc_html( $collection['title'] ); ?></h2>
				<p class="comfort-intro__lead"><?php echo esc_html( $collection['lead'] ); ?></p>
				<?php if ( $has_prose ) : ?>
					<p class="comfort-intro__prose"><?php echo esc_html( $collection['prose'] ); ?></p>
				<?php endif; ?>
			</div>
		</div>
	</section>

	<?php if ( 'mattresses' === $key && ! empty( $collection['gallery'] ) ) : ?>
		<section class="mattress-gallery" aria-label="<?php esc_attr_e( 'Mattress craftsmanship', 'intercoil' ); ?>">
			<div class="mattress-gallery__layout">
				<?php foreach ( $collection['gallery'] as $gallery_index => $gallery_image ) : ?>
					<figure class="mattress-gallery__item<?php echo 0 === $gallery_index ? ' mattress-gallery__item--hero' : ''; ?>">
						<img
							src="<?php echo esc_url( intercoil_asset_uri( $gallery_image ) ); ?>"
							alt=""
							loading="lazy"
							decoding="async"
						/>
					</figure>
				<?php endforeach; ?>
			</div>
		</section>
	<?php endif; ?>

	<?php if ( $show_brands && ! empty( $brands ) ) : ?>
		<?php if ( 'mattresses' === $key ) : ?>
			<?php get_template_part( 'template-parts/comfort-collection/mattress', 'showcase' ); ?>
		<?php else : ?>
		<section class="comfort-brands" aria-labelledby="<?php echo esc_attr( 'comfort-brands-' . $key ); ?>">
			<div class="inner-glow inner-glow--a" aria-hidden="true"></div>

			<div class="container">
				<h2 class="comfort-section-title comfort-section-title--center" id="<?php echo esc_attr( 'comfort-brands-' . $key ); ?>">
					<?php echo esc_html( $collection['brands_heading'] ?? 'Mattresses by Brand' ); ?>
				</h2>

				<div class="comfort-brands__grid">
					<?php foreach ( $brands as $index => $brand ) : ?>
						<article class="comfort-brand">
							<div class="comfort-brand__media">
								<img
									src="<?php echo esc_url( intercoil_asset_uri( $brand['image'] ) ); ?>"
									alt=""
									loading="lazy"
									decoding="async"
								/>
								<div class="comfort-brand__shade" aria-hidden="true"></div>
								<span class="comfort-brand__index" aria-hidden="true"><?php echo esc_html( sprintf( '%02d', $index + 1 ) ); ?></span>
							</div>
							<div class="comfort-brand__body">
								<div class="comfort-brand__logo-wrap <?php echo esc_attr( $brand['logo_class'] ?? '' ); ?>">
									<img
										class="comfort-brand__logo"
										src="<?php echo esc_url( intercoil_asset_uri( $brand['logo'] ) ); ?>"
										alt="<?php echo esc_attr( $brand['name'] ); ?>"
										loading="lazy"
										decoding="async"
									/>
								</div>
								<h3 class="comfort-brand__name"><?php echo esc_html( $brand['name'] ); ?></h3>
							</div>
						</article>
					<?php endforeach; ?>
				</div>
			</div>
		</section>
		<?php endif; ?>
	<?php endif; ?>

	<?php if ( $has_pillars ) : ?>
		<section class="comfort-pillars" aria-label="<?php echo esc_attr( $collection['title'] ); ?>">
			<div class="inner-glow inner-glow--b" aria-hidden="true"></div>

			<div class="container">
				<div class="comfort-pillars__grid">
					<?php foreach ( $collection['pillars'] as $index => $pillar ) : ?>
						<article class="comfort-pillar">
							<div class="comfort-pillar__media">
								<img
									src="<?php echo esc_url( intercoil_asset_uri( $pillar['image'] ) ); ?>"
									alt=""
									loading="lazy"
									decoding="async"
								/>
								<div class="comfort-pillar__shade" aria-hidden="true"></div>
								<span class="comfort-pillar__index" aria-hidden="true"><?php echo esc_html( sprintf( '%02d', $index + 1 ) ); ?></span>
							</div>
							<div class="comfort-pillar__body">
								<h3 class="comfort-pillar__title"><?php echo esc_html( $pillar['title'] ); ?></h3>
								<p class="comfort-pillar__text"><?php echo esc_html( $pillar['text'] ); ?></p>
							</div>
						</article>
					<?php endforeach; ?>
				</div>
			</div>
		</section>
	<?php endif; ?>

	<section class="comfort-closing" aria-labelledby="<?php echo esc_attr( 'comfort-closing-' . $key ); ?>">
		<div class="comfort-closing__media" aria-hidden="true">
			<img
				class="comfort-closing__img"
				src="<?php echo esc_url( intercoil_asset_uri( $collection['closing_image'] ) ); ?>"
				alt=""
				loading="lazy"
				decoding="async"
			/>
			<div class="comfort-closing__overlay"></div>
		</div>

		<div class="container comfort-closing__inner">
			<blockquote class="comfort-closing__quote" id="<?php echo esc_attr( 'comfort-closing-' . $key ); ?>">
				<?php echo esc_html( $collection['closing_quote'] ); ?>
			</blockquote>
			<div class="comfort-closing__actions">
				<a href="<?php echo esc_url( $home_url . '#collections' ); ?>" class="comfort-btn comfort-btn--primary">
					Explore Collections
					<span class="comfort-btn__arrow" aria-hidden="true">&rarr;</span>
				</a>
				<a href="<?php echo esc_url( $home_url . '#contact' ); ?>" class="comfort-btn comfort-btn--ghost">
					Get in Touch
				</a>
			</div>
		</div>
	</section>

</div>
