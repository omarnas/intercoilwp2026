<?php
/**
 * Template Name: Our Brands
 *
 * Portfolio landing page — introduces all Intercoil brands and links to
 * each brand inner page. Content comes from inc/brands.php (CMS later).
 *
 * @package Intercoil
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$brands   = intercoil_get_brands();
$home_url = home_url( '/' );

/*
 * The hero collage cycles through the strongest portfolio imagery —
 * one tile per brand family, replaced later by CMS-managed art.
 */
$collage = array(
	'images/photography/brands/intercoil-brand-new.jpg',
	'images/photography/hospitality/luxury-resort-room-2026-03-20-01-01-12-utc.jpg',
	'images/photography/brands/showroom.jpg',
);

get_header();
?>

<div class="intercoil-inner-page brands-landing">

	<header class="inner-hero inner-hero--tall brands-hero" aria-labelledby="brands-hero-heading">
		<div class="inner-hero__bg" aria-hidden="true">
			<div class="brands-hero__collage">
				<?php foreach ( $collage as $collage_index => $collage_image ) : ?>
					<div class="brands-hero__tile brands-hero__tile--<?php echo esc_attr( $collage_index + 1 ); ?>">
						<img
							src="<?php echo esc_url( intercoil_asset_uri( $collage_image ) ); ?>"
							alt=""
							loading="eager"
							decoding="async"
						/>
					</div>
				<?php endforeach; ?>
			</div>
			<div class="inner-hero__overlay"></div>
			<div class="inner-hero__glow inner-hero__glow--left"></div>
			<div class="inner-hero__glow inner-hero__glow--right"></div>
			<div class="inner-hero__grain"></div>
		</div>

		<div class="inner-hero__vignette" aria-hidden="true"></div>

		<div class="container inner-hero__content">
			<span class="section-label section-label--light inner-hero__eyebrow">Our Brands</span>
			<h1 class="inner-hero__title inner-hero__title--display" id="brands-hero-heading">
				<span class="inner-hero__title-line inner-hero__title-line--light">Trusted Names.</span>
				<span class="inner-hero__title-line inner-hero__title-line--bold brands-hero__headline">Distinct Purpose.</span>
			</h1>
			<p class="inner-hero__tagline">A portfolio of trusted sleep and bedroom brands, designed to serve every lifestyle, every market, and every standard of comfort.</p>
		</div>

		<nav class="brands-hero__marques" aria-label="Jump to a brand">
			<div class="container brands-hero__marques-row">
				<?php foreach ( $brands as $brand ) : ?>
					<a class="brands-hero__marque" href="#brand-<?php echo esc_attr( $brand['key'] ); ?>">
						<img
							src="<?php echo esc_url( intercoil_asset_uri( $brand['logo'] ) ); ?>"
							alt="<?php echo esc_attr( $brand['name'] ); ?>"
							loading="eager"
							decoding="async"
						/>
					</a>
				<?php endforeach; ?>
			</div>
		</nav>

		<div class="inner-hero__fade" aria-hidden="true"></div>
	</header>

	<section class="brands-index" aria-label="The Intercoil brand portfolio">
		<?php $row_index = 0; ?>
		<?php foreach ( $brands as $brand ) : ?>
			<?php
			$row_index++;
			$is_reverse = 0 === $row_index % 2;
			$row_id     = 'brand-' . $brand['key'];
			?>
			<article
				class="brands-index__row brands-index__row--<?php echo esc_attr( $brand['key'] ); ?><?php echo $is_reverse ? ' brands-index__row--reverse' : ''; ?>"
				id="<?php echo esc_attr( $row_id ); ?>"
				aria-labelledby="<?php echo esc_attr( $row_id . '-name' ); ?>"
			>
				<div class="container brands-index__layout">
					<div class="brands-index__media">
						<span class="brands-index__number" aria-hidden="true"><?php echo esc_html( sprintf( '%02d', $row_index ) ); ?></span>
						<div class="brands-index__panel" aria-hidden="true"></div>
						<figure class="brands-index__figure reveal-mask">
							<img
								class="reveal-mask__target"
								src="<?php echo esc_url( intercoil_asset_uri( $brand['landing_image'] ) ); ?>"
								alt=""
								loading="lazy"
								decoding="async"
							/>
						</figure>
					</div>

					<div class="brands-index__body">
						<div class="brands-index__logo-wrap">
							<img
								class="brands-index__logo"
								src="<?php echo esc_url( intercoil_asset_uri( $brand['logo'] ) ); ?>"
								alt=""
								aria-hidden="true"
								loading="lazy"
								decoding="async"
							/>
						</div>

						<h2 class="brands-index__name reveal-up" id="<?php echo esc_attr( $row_id . '-name' ); ?>"><?php echo esc_html( $brand['name'] ); ?></h2>
						<p class="brands-index__line reveal-up delay-1"><?php echo esc_html( $brand['landing_line'] ); ?></p>
						<p class="brands-index__excerpt reveal-up delay-2"><?php echo esc_html( $brand['excerpt'] ); ?></p>

						<a class="brands-index__cta reveal-up delay-3" href="<?php echo esc_url( intercoil_brand_page_url( $brand['key'] ) ); ?>">
							Discover the Brand
							<svg viewBox="0 0 18 18" fill="none" aria-hidden="true">
								<path d="M3 9h12M9 3l6 6-6 6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</a>
					</div>
				</div>
			</article>
		<?php endforeach; ?>
	</section>

	<section class="brands-outro" aria-labelledby="brands-outro-heading">
		<div class="brands-outro__media" aria-hidden="true">
			<img
				class="brands-outro__img"
				src="<?php echo esc_url( intercoil_asset_uri( 'images/photography/general/elegant-bedroom-interior-with-bed-and-decoration-2026-03-10-03-05-55-utc.jpg' ) ); ?>"
				alt=""
				loading="lazy"
				decoding="async"
			/>
			<div class="brands-outro__overlay"></div>
		</div>

		<div class="container brands-outro__inner">
			<blockquote class="brands-outro__quote" id="brands-outro-heading">
				Sleep, Crafted to Perfection.
			</blockquote>
			<div class="brands-outro__actions">
				<a href="<?php echo esc_url( $home_url . '#collections' ); ?>" class="brand-btn brand-btn--primary">
					Explore Collections
					<span class="brand-btn__arrow" aria-hidden="true">&rarr;</span>
				</a>
				<a href="<?php echo esc_url( $home_url . '#contact' ); ?>" class="brand-btn brand-btn--ghost">
					Get in Touch
				</a>
			</div>
		</div>
	</section>

</div>

<?php
get_footer();
