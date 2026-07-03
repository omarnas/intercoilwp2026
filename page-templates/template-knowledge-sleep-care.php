<?php
/**
 * Template Name: Knowledge Hub — Sleep Products Care
 *
 * @package Intercoil
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<div class="intercoil-inner-page knowledge-page knowledge-page--sleep-care">

	<?php
	get_template_part( 'template-parts/knowledge/hero', null, array(
		'hero_image' => 'images/photography/general/bedroom-interior-with-pillows-and-white-bedding-2026-03-10-04-01-53-utc.jpg',
		'title'      => 'Sleep Products Care',
		'tagline'    => 'Caring for Your Sleep Investment',
	) );
	?>

	<section class="knowledge-opening" aria-labelledby="care-opening-heading">
		<div class="container">
			<h2 class="inner-visually-hidden" id="care-opening-heading">Caring for Your Sleep Investment</h2>

			<p class="knowledge-opening__statement reveal-up">A truly restorative night does not end at the mattress.</p>

			<div class="knowledge-opening__columns">
				<p class="knowledge-opening__prose reveal-up delay-1">How you care for every element of your sleep environment, from bedding to furniture, determines how long that environment continues to perform for you.</p>
			</div>
		</div>
	</section>

	<section class="knowledge-split" aria-labelledby="care-bedding-heading">
		<div class="container knowledge-split__layout">
			<div class="knowledge-split__media">
				<figure class="knowledge-split__figure reveal-mask">
					<img class="reveal-mask__target" src="<?php echo esc_url( intercoil_asset_uri( 'images/photography/general/woman-making-bed-in-bright-airy-bedroom-2026-03-25-07-04-37-utc.jpg' ) ); ?>" alt="" loading="lazy" decoding="async" />
				</figure>
				<figure class="knowledge-split__figure-accent reveal-mask">
					<img class="reveal-mask__target" src="<?php echo esc_url( intercoil_asset_uri( 'images/photography/hospitality/cleaning-service-in-hotel-room-2026-03-16-22-58-10-utc.jpg' ) ); ?>" alt="" loading="lazy" decoding="async" />
				</figure>
			</div>

			<div class="knowledge-split__body">
				<h2 class="knowledge-split__title reveal-up" id="care-bedding-heading">Bedding &amp; Accessories Care</h2>
				<p class="knowledge-split__text reveal-up delay-1">Pillows are a core part of your sleep system. Over time, they accumulate dust, allergens, and moisture. Washing them regularly and replacing them every one to two years maintains both hygiene and the support your neck deserves.</p>
				<p class="knowledge-split__text reveal-up delay-2">The same applies to linens and duvets: gentle washing preserves their softness, breathability, and comfort. In warmer climates, lightweight cotton storage protects against humidity; in cooler ones, airtight storage prevents dampness.</p>
			</div>
		</div>
	</section>

	<section class="knowledge-split knowledge-split--reverse" aria-labelledby="care-furniture-heading">
		<div class="container knowledge-split__layout">
			<div class="knowledge-split__media">
				<figure class="knowledge-split__figure reveal-mask">
					<img class="reveal-mask__target" src="<?php echo esc_url( intercoil_asset_uri( 'images/photography/general/contemporary-bedroom-interior-with-mint-green-head-2026-03-16-05-10-13-utc.jpg' ) ); ?>" alt="" loading="lazy" decoding="async" />
				</figure>
			</div>

			<div class="knowledge-split__body">
				<h2 class="knowledge-split__title reveal-up" id="care-furniture-heading">Furniture Care</h2>
				<p class="knowledge-split__text reveal-up delay-1">Your headboard, base, and nightstand are not simply aesthetic choices. They contribute directly to the structural integrity and comfort of your sleep space.</p>
				<p class="knowledge-split__text reveal-up delay-2">Clean and care for wooden and upholstered headboards with appropriate products to preserve their finish. Inspect your bed base regularly to ensure it continues to support your mattress evenly. Upholstered furniture benefits from periodic vacuuming and protection from direct sunlight.</p>
			</div>
		</div>
	</section>

	<section class="knowledge-statement" aria-labelledby="care-habits-heading">
		<div class="inner-glow inner-glow--a" aria-hidden="true"></div>
		<div class="inner-glow inner-glow--b" aria-hidden="true"></div>

		<div class="container">
			<div class="knowledge-statement__inner">
				<h2 class="knowledge-statement__title reveal-up" id="care-habits-heading">Healthy Sleep Habits</h2>
				<p class="knowledge-statement__text reveal-up delay-1">A clean, well-maintained sleep environment is not a small thing. Fresh pillows, crisp linens, and a well-kept room create the kind of calm that allows the mind to settle and sleep to truly restore.</p>
			</div>
		</div>
	</section>

	<?php
	get_template_part( 'template-parts/knowledge/closing', null, array(
		'quote'             => 'Healthy sleep is as much about care and maintenance as it is about the products you choose.',
		'image'             => 'images/photography/hospitality/cozy-bedroom-setup-with-pillows-and-plant-2026-01-11-11-00-10-utc.jpg',
		'cta_primary_label' => 'Explore Intercoil’s Products',
		'cta_primary_url'   => intercoil_page_url( 'our-brands' ),
		'cta_ghost_label'   => 'Mattress Guide',
		'cta_ghost_url'     => intercoil_page_url( 'mattress-guide' ),
	) );
	?>

</div>

<?php
get_footer();
