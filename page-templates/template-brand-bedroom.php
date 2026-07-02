<?php
/**
 * Template Name: Brand — The Bedroom by Intercoil
 *
 * @package Intercoil
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<div class="intercoil-inner-page brand-page brand-page--bedroom">

	<?php
	get_template_part( 'template-parts/brand/hero', null, array(
		'hero_image' => 'images/photography/brands/showroom.jpg',
		'logo'       => 'logos/brands/newbedroomlogo.png',
		'logo_class' => 'brand-hero__logo-wrap--wide',
		'name'       => 'The Bedroom by Intercoil',
		'kicker'     => 'Where Premium Sleep Becomes an Experience',
		'headline'   => 'You Can See, Feel, and Take Home.',
	) );
	?>

	<section class="brand-manifesto" aria-labelledby="brand-manifesto-heading">
		<div class="brand-manifesto__watermark" aria-hidden="true">Gallery</div>

		<div class="container brand-manifesto__layout">
			<div class="brand-manifesto__copy">
				<h2 class="inner-visually-hidden" id="brand-manifesto-heading">The Bedroom by Intercoil</h2>
				<p class="brand-manifesto__statement reveal-up">The products that shape how you sleep deserve more than a shelf and a price tag.</p>

				<p class="brand-manifesto__prose reveal-up delay-1">They deserve a space that reflects their quality, a setting that allows you to truly experience them, and guidance from people who understand sleep as well as the products themselves.</p>
				<p class="brand-manifesto__prose reveal-up delay-2">That is what The Bedroom was created to be.</p>
			</div>

			<div class="brand-manifesto__visual">
				<div class="brand-manifesto__panel" aria-hidden="true"></div>
				<figure class="brand-manifesto__figure brand-manifesto__figure--primary reveal-mask">
					<img class="reveal-mask__target" src="<?php echo esc_url( intercoil_asset_uri( 'images/photography/showroom/DSC_7919-1080x675-1.png' ) ); ?>" alt="" loading="lazy" decoding="async" />
				</figure>
				<figure class="brand-manifesto__figure brand-manifesto__figure--accent reveal-mask">
					<img class="reveal-mask__target" src="<?php echo esc_url( intercoil_asset_uri( 'images/photography/brands/bedroom.jpg' ) ); ?>" alt="" loading="lazy" decoding="async" />
				</figure>
			</div>
		</div>
	</section>

	<section class="brand-facts" aria-label="The Bedroom by Intercoil at a glance">
		<div class="container">
			<dl class="brand-facts__row">
				<div class="brand-facts__item reveal-up delay-1">
					<dt class="brand-facts__value">UAE &amp; KSA</dt>
					<dd class="brand-facts__label">Multiple locations across key markets, and beyond</dd>
				</div>
				<div class="brand-facts__item reveal-up delay-2">
					<dt class="brand-facts__value">One roof</dt>
					<dd class="brand-facts__label">Mattresses, bedding, and bedroom furniture together</dd>
				</div>
				<div class="brand-facts__item reveal-up delay-3">
					<dt class="brand-facts__value">Specialists</dt>
					<dd class="brand-facts__label">Personalized guidance from sleep specialists</dd>
				</div>
			</dl>
		</div>
	</section>

	<section class="brand-chapter" aria-labelledby="chapter-1-heading">
		<div class="container brand-chapter__layout">
			<div class="brand-chapter__media">
				<figure class="brand-chapter__figure reveal-mask">
					<img class="reveal-mask__target" src="<?php echo esc_url( intercoil_asset_uri( 'images/photography/showroom/DSC_7919-1080x675-1.png' ) ); ?>" alt="" loading="lazy" decoding="async" />
				</figure>
				<figure class="brand-chapter__figure-accent reveal-mask">
					<img class="reveal-mask__target" src="<?php echo esc_url( intercoil_asset_uri( 'images/photography/mattresses/beds-mattresses-and-pillows-store-2026-01-09-08-12-13-utc.jpg' ) ); ?>" alt="" loading="lazy" decoding="async" />
				</figure>
			</div>

			<div class="brand-chapter__body">
				<span class="ghost-index" aria-hidden="true">01</span>
				<h2 class="brand-chapter__title reveal-up" id="chapter-1-heading">A New Kind of Sleep Destination</h2>
				<p class="brand-chapter__text reveal-up delay-1">The Bedroom is Intercoil&#8217;s dedicated retail concept: a premium sleep gallery where mattresses, bedding, and bedroom furniture come together in one thoughtfully designed space. Every element of the store is built to reflect the same standard as the products within it. Clean, considered, and calm, it is an environment that invites you to slow down, explore, and make a choice you will feel the benefit of every single night.</p>
				<p class="brand-chapter__text reveal-up delay-2">This is not a showroom in the conventional sense. It is a destination for people who understand that the bedroom is the most important room in any home, and who approach furnishing it with the care that understanding demands.</p>
			</div>
		</div>
	</section>

	<section class="brand-chapter brand-chapter--reverse" aria-labelledby="chapter-2-heading">
		<div class="container brand-chapter__layout">
			<div class="brand-chapter__media">
				<figure class="brand-chapter__figure reveal-mask">
					<img class="reveal-mask__target" src="<?php echo esc_url( intercoil_asset_uri( 'images/photography/manufacturing/handsome-male-customer-sitting-on-new-bed-at-furni-2026-01-06-08-58-01-utc.jpg' ) ); ?>" alt="" loading="lazy" decoding="async" />
				</figure>
			</div>

			<div class="brand-chapter__body">
				<span class="ghost-index" aria-hidden="true">02</span>
				<h2 class="brand-chapter__title reveal-up" id="chapter-2-heading">Personalized Guidance at Every Step</h2>
				<p class="brand-chapter__text reveal-up delay-1">Sleep is personal. No two bodies rest the same way, and no two households have identical needs. The Bedroom is staffed by sleep specialists who take the time to understand yours: your sleep behavior, your comfort preferences, your space, and your lifestyle.</p>
				<p class="brand-chapter__text reveal-up delay-2">Whether you are selecting a single mattress or furnishing an entire bedroom from scratch, every consultation is tailored, unhurried, and built around finding the right solution for you specifically.</p>
			</div>
		</div>
	</section>

	<section class="brand-panorama" aria-labelledby="chapter-3-heading">
		<div class="brand-panorama__media" aria-hidden="true">
			<img class="brand-panorama__img" src="<?php echo esc_url( intercoil_asset_uri( 'images/photography/mattresses/beds-mattresses-and-pillows-store-2026-03-24-15-20-22-utc.jpg' ) ); ?>" alt="" loading="lazy" decoding="async" />
			<div class="brand-panorama__overlay"></div>
		</div>

		<div class="container brand-panorama__inner">
			<h2 class="brand-panorama__title reveal-up" id="chapter-3-heading">Everything in One Space</h2>
			<p class="brand-panorama__text reveal-up delay-1">From the mattress that forms the foundation of your sleep to the bedding that completes it, and the furniture that frames the entire environment, The Bedroom brings the full Intercoil sleep ecosystem together under one roof. Explore the complete range of mattresses, test them properly, pair them with the right accessories, and leave with a sleep setup that was chosen with genuine intention.</p>
		</div>
	</section>

	<section class="brand-chapter" aria-labelledby="chapter-4-heading">
		<div class="container brand-chapter__layout">
			<div class="brand-chapter__media">
				<figure class="brand-chapter__figure reveal-mask">
					<img class="reveal-mask__target" src="<?php echo esc_url( intercoil_asset_uri( 'images/photography/brands/bedroom.jpg' ) ); ?>" alt="" loading="lazy" decoding="async" />
				</figure>
			</div>

			<div class="brand-chapter__body">
				<span class="ghost-index" aria-hidden="true">04</span>
				<h2 class="brand-chapter__title reveal-up" id="chapter-4-heading">Present Across Key Markets</h2>
				<p class="brand-chapter__text reveal-up delay-1">With multiple locations across the UAE, KSA, and beyond, The Bedroom brings the Intercoil premium sleep experience within reach. Each location is designed to the same standard, offering the same level of expertise and the same quality of experience, wherever you find us.</p>
			</div>
		</div>
	</section>

	<?php
	get_template_part( 'template-parts/brand/closing', null, array(
		'quote'     => 'Premium sleep is something you live with every day. The Bedroom is where that life begins.',
		'image'     => 'images/photography/general/elegant-bedroom-interior-with-bed-and-decoration-2026-03-10-03-05-55-utc.jpg',
		'cta_label' => 'Discover The Bedroom Products',
		'cta_url'   => intercoil_comfort_collection_url( 'beds' ),
	) );
	?>

</div>

<?php
get_footer();
