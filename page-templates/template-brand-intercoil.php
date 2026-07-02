<?php
/**
 * Template Name: Brand — Intercoil
 *
 * @package Intercoil
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<div class="intercoil-inner-page brand-page brand-page--intercoil">

	<?php
	get_template_part( 'template-parts/brand/hero', null, array(
		'hero_image' => 'images/photography/brands/intercoil-brand-new.jpg',
		'logo'       => 'logos/brands/intercoil.png',
		'name'       => 'Intercoil',
		'kicker'     => 'Some things are built to simply function.',
		'headline'   => 'Intercoil was built to restore.',
		'category'   => 'Mattresses',
	) );
	?>

	<section class="brand-manifesto" aria-labelledby="brand-manifesto-heading">
		<div class="brand-manifesto__watermark" aria-hidden="true">1974</div>

		<div class="container brand-manifesto__layout">
			<div class="brand-manifesto__copy">
				<h2 class="inner-visually-hidden" id="brand-manifesto-heading">Intercoil</h2>
				<p class="brand-manifesto__statement reveal-up">Intercoil is our original mattress brand, the name the company was founded on and the place our journey began.</p>

				<p class="brand-manifesto__prose reveal-up delay-1">It has been refined and elevated over the years into a premium offering, carrying five decades of craftsmanship into mattresses built to a standard that holds from the first night to the thousandth.</p>
				<p class="brand-manifesto__prose reveal-up delay-2">Since 1974, every mattress we have made has started with the same question: what does this person truly need to sleep well? The answer shapes everything. The materials we select. The technologies we combine. The way each layer is designed to work with the body, through the night, across years of use.</p>
			</div>

			<div class="brand-manifesto__visual">
				<div class="brand-manifesto__panel" aria-hidden="true"></div>
				<figure class="brand-manifesto__figure brand-manifesto__figure--primary reveal-mask">
					<img class="reveal-mask__target" src="<?php echo esc_url( intercoil_asset_uri( 'images/photography/mattresses/close-up-of-a-hand-on-a-quilted-surface-2026-03-17-14-42-08-utc.jpg' ) ); ?>" alt="" loading="lazy" decoding="async" />
				</figure>
				<figure class="brand-manifesto__figure brand-manifesto__figure--accent reveal-mask">
					<img class="reveal-mask__target" src="<?php echo esc_url( intercoil_asset_uri( 'images/photography/manufacturing/mattressfoamfull.jpg' ) ); ?>" alt="" loading="lazy" decoding="async" />
				</figure>
			</div>
		</div>
	</section>

	<section class="brand-facts" aria-label="Intercoil at a glance">
		<div class="container">
			<dl class="brand-facts__row">
				<div class="brand-facts__item reveal-up delay-1">
					<dt class="brand-facts__value">1974</dt>
					<dd class="brand-facts__label">Where our journey began</dd>
				</div>
				<div class="brand-facts__item reveal-up delay-2">
					<dt class="brand-facts__value">Five decades</dt>
					<dd class="brand-facts__label">Of craftsmanship in every mattress</dd>
				</div>
				<div class="brand-facts__item reveal-up delay-3">
					<dt class="brand-facts__value">First</dt>
					<dd class="brand-facts__label">Accredited mattress testing laboratory in the Middle East</dd>
				</div>
			</dl>
		</div>
	</section>

	<section class="brand-chapter" aria-labelledby="chapter-1-heading">
		<div class="container brand-chapter__layout">
			<div class="brand-chapter__media">
				<figure class="brand-chapter__figure reveal-mask">
					<img class="reveal-mask__target" src="<?php echo esc_url( intercoil_asset_uri( 'images/photography/mattresses/young-woman-shopper-choosing-new-bed-at-modern-fur-2026-01-06-09-17-00-utc.jpg' ) ); ?>" alt="" loading="lazy" decoding="async" />
				</figure>
				<figure class="brand-chapter__figure-accent reveal-mask">
					<img class="reveal-mask__target" src="<?php echo esc_url( intercoil_asset_uri( 'images/photography/mattresses/beds-mattresses-and-pillows-store-2026-03-24-15-20-22-utc.jpg' ) ); ?>" alt="" loading="lazy" decoding="async" />
				</figure>
			</div>

			<div class="brand-chapter__body">
				<span class="ghost-index" aria-hidden="true">01</span>
				<h2 class="brand-chapter__title reveal-up" id="chapter-1-heading">Made for Everybody. Every Stage of Life.</h2>
				<p class="brand-chapter__text reveal-up delay-1">Our iconic Evolution Series brings together open coil, pocket coil, and advanced foam technologies in fully customizable configurations, because no two people sleep the same way, and no great mattress pretends otherwise.</p>
			</div>
		</div>
	</section>

	<section class="brand-panorama" aria-labelledby="chapter-2-heading">
		<div class="brand-panorama__media" aria-hidden="true">
			<img class="brand-panorama__img" src="<?php echo esc_url( intercoil_asset_uri( 'images/photography/manufacturing/man-working-at-industrial-machine-in-factory-2026-03-20-02-19-47-utc.jpg' ) ); ?>" alt="" loading="lazy" decoding="async" />
			<div class="brand-panorama__overlay"></div>
		</div>

		<div class="container brand-panorama__inner">
			<h2 class="brand-panorama__title reveal-up" id="chapter-2-heading">Trusted by Science. Felt from the First Night.</h2>
			<p class="brand-panorama__text reveal-up delay-1">Every Intercoil mattress is tested in the Middle East&#8217;s first accredited mattress testing laboratory and held to international human ecological standards. What you feel on the first night is what you will feel on the thousandth.</p>
		</div>
	</section>

	<?php
	get_template_part( 'template-parts/brand/closing', null, array(
		'quote'     => 'Sleep well. Live better.',
		'image'     => 'images/photography/general/relaxing-bedroom-interior-with-bed-and-pillows-2026-03-10-04-02-05-utc.jpg',
		'cta_label' => 'Explore Intercoil Products',
		'cta_url'   => intercoil_comfort_collection_url( 'mattresses' ),
	) );
	?>

</div>

<?php
get_footer();
