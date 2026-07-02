<?php
/**
 * Template Name: Industry — Hospitality Solutions
 *
 * @package Intercoil
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<div class="intercoil-inner-page industry-page industry-page--hospitality">

	<?php
	get_template_part( 'template-parts/industry/hero', null, array(
		'hero_image' => 'images/photography/hospitality-solution.jpg',
		'title'      => "The Sleep Partner Trusted by the World's Finest Properties.",
	) );
	?>

	<section class="industry-opening" aria-labelledby="industry-opening-heading">
		<div class="container">
			<h2 class="inner-visually-hidden" id="industry-opening-heading">Hospitality Solutions</h2>

			<p class="industry-opening__statement reveal-up">In hospitality, sleep is not an amenity, it is the experience.</p>

			<div class="industry-opening__columns">
				<p class="industry-opening__prose reveal-up delay-1">It is what guests remember long after everything else has faded, and properties that understand this choose their sleep partner with the same care they give every other signature detail.</p>
				<p class="industry-opening__prose reveal-up delay-2">For decades, Intercoil International has been that partner. From independent boutique hotels to the world&#8217;s most recognized luxury chains, our Contracts Division has built its reputation on one consistent promise: premium sleep solutions delivered with precision, at scale, and without compromise.</p>
			</div>
		</div>
	</section>

	<section class="industry-mosaic" aria-hidden="true">
		<div class="container industry-mosaic__layout">
			<figure class="industry-mosaic__item industry-mosaic__item--1 reveal-mask">
				<img class="reveal-mask__target" src="<?php echo esc_url( intercoil_asset_uri( 'images/photography/hospitality/luxury-resort-room-2026-03-20-01-01-12-utc.jpg' ) ); ?>" alt="" loading="lazy" decoding="async" />
			</figure>
			<figure class="industry-mosaic__item industry-mosaic__item--2 reveal-mask">
				<img class="reveal-mask__target" src="<?php echo esc_url( intercoil_asset_uri( 'images/photography/hospitality/cozy-bedroom-setup-with-pillows-and-plant-2026-01-11-11-00-10-utc.jpg' ) ); ?>" alt="" loading="lazy" decoding="async" />
			</figure>
			<figure class="industry-mosaic__item industry-mosaic__item--3 reveal-mask">
				<img class="reveal-mask__target" src="<?php echo esc_url( intercoil_asset_uri( 'images/photography/hospitality/cleaning-service-in-hotel-room-2026-03-16-22-58-10-utc.jpg' ) ); ?>" alt="" loading="lazy" decoding="async" />
			</figure>
		</div>
	</section>

	<section class="industry-split" aria-labelledby="section-1-heading">
		<div class="container industry-split__layout">
			<div class="industry-split__media">
				<figure class="industry-split__figure reveal-mask">
					<img class="reveal-mask__target" src="<?php echo esc_url( intercoil_asset_uri( 'images/photography/hotelroom.jpg' ) ); ?>" alt="" loading="lazy" decoding="async" />
				</figure>
				<figure class="industry-split__figure-accent reveal-mask">
					<img class="reveal-mask__target" src="<?php echo esc_url( intercoil_asset_uri( 'images/photography/hospitality/modern-hotel-room-interior-with-wood-and-light-2026-03-17-05-02-46-utc.jpg' ) ); ?>" alt="" loading="lazy" decoding="async" />
				</figure>
			</div>

			<div class="industry-split__body">
				<span class="ghost-index" aria-hidden="true">01</span>
				<h2 class="industry-split__title reveal-up" id="section-1-heading">A Footprint Across the Middle East</h2>
				<p class="industry-split__text reveal-up delay-1">Hospitality is one of Intercoil&#8217;s defining strengths. Across the Middle East, our beds are specified into landmark hotels, resorts, and serviced residences, supplied at the scale and consistency the region&#8217;s most demanding operators require. From the UAE through the wider GCC, properties return to Intercoil because every order is delivered to the same specification, on time, and built to perform through years of continuous guest use.</p>
			</div>
		</div>
	</section>

	<section class="industry-logos" aria-labelledby="section-2-heading">
		<div class="inner-glow inner-glow--a" aria-hidden="true"></div>

		<div class="container">
			<div class="industry-logos__head">
				<h2 class="industry-logos__title reveal-up" id="section-2-heading">Trusted by the World&#8217;s Leading Hotel Groups</h2>
				<p class="industry-logos__text reveal-up delay-1">Intercoil is a preferred supplier to many of the most respected names in global hospitality. Our partners include Accor, Marriott, Four Seasons, Hilton, Hyatt, IHG, Jumeirah, Kempinski, Mandarin Oriental, Rosewood, Rotana, Movenpick, Radisson, Taj, Wyndham, Banyan Tree, Anantara, Langham, Rocco Forte, Shangri-La, Dusit, Melia, Minor Hotels, Best Western, and The Address.</p>
				<p class="industry-logos__text reveal-up delay-2">These relationships span flagship properties across the region and beyond, from Four Seasons, St. Regis, and The Luxury Collection to Sheraton, Le Meridien, W, Westin, Park Hyatt, and the full Rotana and Accor portfolios. Each is delivered through the same Contracts Division, to the same standard, at the scale these operators depend on.</p>
			</div>

			<div class="industry-logos__wall" role="list" aria-label="Hotel partner logos">
				<div class="industry-logos__mark reveal-up delay-1" role="listitem"><img src="<?php echo esc_url( intercoil_asset_uri( 'logos/hospitality/white/hilton.png' ) ); ?>" alt="" loading="lazy" decoding="async" /></div>
				<div class="industry-logos__mark reveal-up delay-2" role="listitem"><img src="<?php echo esc_url( intercoil_asset_uri( 'logos/hospitality/white/jumirah.png' ) ); ?>" alt="" loading="lazy" decoding="async" /></div>
				<div class="industry-logos__mark reveal-up delay-3" role="listitem"><img src="<?php echo esc_url( intercoil_asset_uri( 'logos/hospitality/white/SHANGARALI.png' ) ); ?>" alt="" loading="lazy" decoding="async" /></div>
				<div class="industry-logos__mark reveal-up delay-4" role="listitem"><img src="<?php echo esc_url( intercoil_asset_uri( 'logos/hospitality/white/mandrian.png' ) ); ?>" alt="" loading="lazy" decoding="async" /></div>
				<div class="industry-logos__mark reveal-up delay-1" role="listitem"><img src="<?php echo esc_url( intercoil_asset_uri( 'logos/hospitality/white/minnor.png' ) ); ?>" alt="" loading="lazy" decoding="async" /></div>
				<div class="industry-logos__mark reveal-up delay-2" role="listitem"><img src="<?php echo esc_url( intercoil_asset_uri( 'logos/hospitality/white/kerz.png' ) ); ?>" alt="" loading="lazy" decoding="async" /></div>
				<div class="industry-logos__mark reveal-up delay-3" role="listitem"><img src="<?php echo esc_url( intercoil_asset_uri( 'logos/hospitality/white/hotels_1.png' ) ); ?>" alt="" loading="lazy" decoding="async" /></div>
				<div class="industry-logos__mark reveal-up delay-4" role="listitem"><img src="<?php echo esc_url( intercoil_asset_uri( 'logos/hospitality/white/hotels_2.png' ) ); ?>" alt="" loading="lazy" decoding="async" /></div>
				<div class="industry-logos__mark reveal-up delay-1" role="listitem"><img src="<?php echo esc_url( intercoil_asset_uri( 'logos/hospitality/white/hotels_3.png' ) ); ?>" alt="" loading="lazy" decoding="async" /></div>
				<div class="industry-logos__mark reveal-up delay-2" role="listitem"><img src="<?php echo esc_url( intercoil_asset_uri( 'logos/hospitality/white/hotels_4.png' ) ); ?>" alt="" loading="lazy" decoding="async" /></div>
				<div class="industry-logos__mark reveal-up delay-3" role="listitem"><img src="<?php echo esc_url( intercoil_asset_uri( 'logos/hospitality/white/hotels_5.png' ) ); ?>" alt="" loading="lazy" decoding="async" /></div>
				<div class="industry-logos__mark reveal-up delay-4" role="listitem"><img src="<?php echo esc_url( intercoil_asset_uri( 'logos/hospitality/white/hotel10.png' ) ); ?>" alt="" loading="lazy" decoding="async" /></div>
			</div>
		</div>
	</section>

	<section class="industry-split industry-split--reverse" aria-labelledby="section-3-heading">
		<div class="container industry-split__layout">
			<div class="industry-split__media">
				<figure class="industry-split__figure reveal-mask">
					<img class="reveal-mask__target" src="<?php echo esc_url( intercoil_asset_uri( 'images/photography/hospitality/bedroom-inside-modern-luxurious-hotel-2026-03-24-04-04-23-utc.JPG' ) ); ?>" alt="" loading="lazy" decoding="async" />
				</figure>
			</div>

			<div class="industry-split__body">
				<span class="ghost-index" aria-hidden="true">03</span>
				<h2 class="industry-split__title reveal-up" id="section-3-heading">A Portfolio Built for Hospitality Demands</h2>
				<p class="industry-split__text reveal-up delay-1">The hospitality sector asks more of a mattress than any other environment. Thousands of nights of use. Guests with different bodies, different sleep behaviors, and different expectations of comfort. Through our dedicated Contracts Division, we design and deliver mattresses, bedding, and furniture solutions that balance premium comfort with the long-term performance hospitality operators depend on. Every product is built to hold its quality across years of continuous use.</p>
			</div>
		</div>
	</section>

	<section class="industry-stat" aria-labelledby="section-4-heading">
		<div class="inner-glow inner-glow--a" aria-hidden="true"></div>

		<div class="container industry-stat__inner">
			<p class="industry-stat__lead reveal-up">The World&#8217;s Most Trusted Sleep Brand, Delivered by Intercoil</p>

			<p class="industry-stat__figure reveal-up delay-1" aria-hidden="true">
				<span class="industry-stat__value">18</span>
				<span class="industry-stat__suffix">of the top 20</span>
			</p>

			<h2 class="industry-stat__title reveal-up delay-2" id="section-4-heading">Simmons is the preferred bedding partner of 18 of the world&#8217;s top 20 hotel groups.</h2>
			<p class="industry-stat__text reveal-up delay-3">Intercoil holds the exclusive manufacturing license for Simmons. When the most demanding hospitality brands on earth need sleep they can guarantee to their guests, they choose Simmons. Through Intercoil, that same product, built to that same world-class specification, is available to properties here.</p>
		</div>
	</section>

	<section class="industry-panorama" aria-labelledby="section-5-heading">
		<div class="industry-panorama__media" aria-hidden="true">
			<img class="industry-panorama__img" src="<?php echo esc_url( intercoil_asset_uri( 'images/hospitalitybanner.jpg' ) ); ?>" alt="" loading="lazy" decoding="async" />
			<div class="industry-panorama__overlay"></div>
		</div>

		<div class="container industry-panorama__inner">
			<h2 class="industry-panorama__title reveal-up" id="section-5-heading">Connected to the Industry. Ahead of the Curve.</h2>
			<p class="industry-panorama__text reveal-up delay-1">Intercoil actively participates in leading hospitality platforms, including The Hotel Show Dubai and HOTEC Middle East, ensuring our partners always have access to the most advanced solutions in the market and the insights shaping the category ahead.</p>
		</div>
	</section>

	<?php
	get_template_part( 'template-parts/industry/closing', null, array(
		'quote'             => 'Premium sleep solutions delivered with precision, at scale, and without compromise.',
		'image'             => 'images/photography/hospitality/3d-rendering-beautiful-luxury-bedroom-suite-in-hot-2026-03-17-04-32-19-utc.jpg',
		'cta_primary_label' => 'Book a Consultation',
		'cta_primary_url'   => home_url( '/' ) . '#contact',
		'cta_ghost_label'   => 'Discover Beautyrest by Simmons',
		'cta_ghost_url'     => intercoil_brand_page_url( 'beautyrest' ),
	) );
	?>

</div>

<?php
get_footer();
