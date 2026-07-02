<?php
/**
 * Template Name: Brand — Dolidol
 *
 * @package Intercoil
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<div class="intercoil-inner-page brand-page brand-page--dolidol">

	<?php
	get_template_part( 'template-parts/brand/hero', null, array(
		'hero_image' => 'images/photography/brands/dolidol-newbanner.jpg',
		'logo'       => 'logos/brands/dolidol.png',
		'logo_class' => 'brand-hero__logo-wrap--compact',
		'name'       => 'Dolidol',
		'kicker'     => 'Five Decades of Sleep,',
		'headline'   => 'Now Crafted in the UAE.',
	) );
	?>

	<section class="brand-manifesto" aria-labelledby="brand-manifesto-heading">
		<div class="brand-manifesto__watermark" aria-hidden="true">Home</div>

		<div class="container brand-manifesto__layout">
			<div class="brand-manifesto__copy">
				<h2 class="inner-visually-hidden" id="brand-manifesto-heading">Dolidol</h2>
				<p class="brand-manifesto__statement reveal-up">Dolidol began with a simple conviction: that quality sleep belongs in every home.</p>

				<p class="brand-manifesto__prose reveal-up delay-1">Over more than 50 years, it grew into one of the most trusted names in mattresses, earning its place not through claims but through comfort that families came back to, night after night. Through Intercoil&#8217;s licence, that same heritage is now manufactured here in the UAE.</p>
			</div>

			<div class="brand-manifesto__visual">
				<div class="brand-manifesto__panel" aria-hidden="true"></div>
				<figure class="brand-manifesto__figure brand-manifesto__figure--primary reveal-mask">
					<img class="reveal-mask__target" src="<?php echo esc_url( intercoil_asset_uri( 'images/photography/general/pillow-fight-fun-in-the-bedroom-at-home-2026-01-08-05-41-51-utc.jpg' ) ); ?>" alt="" loading="lazy" decoding="async" />
				</figure>
				<figure class="brand-manifesto__figure brand-manifesto__figure--accent reveal-mask">
					<img class="reveal-mask__target" src="<?php echo esc_url( intercoil_asset_uri( 'images/photography/general/bed-with-blue-striped-sheets-against-brick-wall-2026-03-19-07-09-29-utc.jpg' ) ); ?>" alt="" loading="lazy" decoding="async" />
				</figure>
			</div>
		</div>
	</section>

	<section class="brand-facts" aria-label="Dolidol at a glance">
		<div class="container">
			<dl class="brand-facts__row">
				<div class="brand-facts__item reveal-up delay-1">
					<dt class="brand-facts__value">50+</dt>
					<dd class="brand-facts__label">Years of trusted comfort</dd>
				</div>
				<div class="brand-facts__item reveal-up delay-2">
					<dt class="brand-facts__value">Millions</dt>
					<dd class="brand-facts__label">Of nights of proven sleep engineering</dd>
				</div>
				<div class="brand-facts__item reveal-up delay-3">
					<dt class="brand-facts__value">UAE</dt>
					<dd class="brand-facts__label">Now manufactured here, by Intercoil</dd>
				</div>
			</dl>
		</div>
	</section>

	<section class="brand-chapter" aria-labelledby="chapter-1-heading">
		<div class="container brand-chapter__layout">
			<div class="brand-chapter__media">
				<figure class="brand-chapter__figure reveal-mask">
					<img class="reveal-mask__target" src="<?php echo esc_url( intercoil_asset_uri( 'images/photography/general/woman-making-bed-in-bright-airy-bedroom-2026-03-25-07-04-37-utc.jpg' ) ); ?>" alt="" loading="lazy" decoding="async" />
				</figure>
				<figure class="brand-chapter__figure-accent reveal-mask">
					<img class="reveal-mask__target" src="<?php echo esc_url( intercoil_asset_uri( 'images/photography/mattresses/comfortable-mattress-and-soft-touch-for-good-sleep-2026-03-23-23-01-57-utc.jpg' ) ); ?>" alt="" loading="lazy" decoding="async" />
				</figure>
			</div>

			<div class="brand-chapter__body">
				<span class="ghost-index" aria-hidden="true">01</span>
				<h2 class="brand-chapter__title reveal-up" id="chapter-1-heading">A Mattress Heritage Built on Trust</h2>
				<p class="brand-chapter__text reveal-up delay-1">Mattresses are where Dolidol made its name. Five decades of craft have gone into how a Dolidol mattress supports the body, holds its comfort, and lasts through years of nightly use. It is sleep engineering proven across millions of nights, refined over generations, and now brought to the region with the manufacturing strength of Intercoil behind it.</p>
			</div>
		</div>
	</section>

	<section class="brand-panorama" aria-labelledby="chapter-2-heading">
		<div class="brand-panorama__media" aria-hidden="true">
			<img class="brand-panorama__img" src="<?php echo esc_url( intercoil_asset_uri( 'images/photography/general/bedroom-interior-with-bed-and-flowers-on-nightstan-2026-01-05-06-10-41-utc.jpg' ) ); ?>" alt="" loading="lazy" decoding="async" />
			<div class="brand-panorama__overlay"></div>
		</div>

		<div class="container brand-panorama__inner">
			<h2 class="brand-panorama__title reveal-up" id="chapter-2-heading">Quality Rest, Within Reach</h2>
			<p class="brand-panorama__text reveal-up delay-1">Dolidol holds a clear place in the market: dependable, high-quality mattresses made genuinely accessible. It is built for families who want rest they can count on without overreaching, delivering honest comfort and lasting support at a price that makes sense. That balance of quality and value is what made the brand a leader, and it is what defines every Dolidol mattress today.</p>
		</div>
	</section>

	<?php
	get_template_part( 'template-parts/brand/closing', null, array(
		'quote'     => 'Quality sleep belongs in every home.',
		'image'     => 'images/photography/general/bed-with-blue-striped-sheets-against-brick-wall-2026-03-19-07-09-29-utc.jpg',
		'cta_label' => 'Explore Dolidol Products',
		'cta_url'   => intercoil_comfort_collection_url( 'mattresses' ),
	) );
	?>

</div>

<?php
get_footer();
