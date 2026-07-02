<?php
/**
 * Template Name: Industry — Wholesale & Distribution
 *
 * @package Intercoil
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<div class="intercoil-inner-page industry-page industry-page--wholesale">

	<?php
	get_template_part( 'template-parts/industry/hero', null, array(
		'hero_image' => 'images/photography/manufacturing/man-working-on-solar-panels-in-factory-2026-03-26-08-57-41-utc.jpg',
		'title'      => 'A Global Trade Network Built on Consistency and Long-Term Partnership.',
	) );
	?>

	<section class="industry-opening" aria-labelledby="industry-opening-heading">
		<div class="container">
			<h2 class="inner-visually-hidden" id="industry-opening-heading">Wholesale &amp; Distribution</h2>

			<p class="industry-opening__statement reveal-up">With over 50 distributors, vendors, and agents operating across 28 countries, Intercoil has built one of the industry&#8217;s most dependable wholesale and trade foundations.</p>

			<div class="industry-opening__columns">
				<p class="industry-opening__prose reveal-up delay-1">Our network spans the Gulf Cooperation Council, the Levant, the Indian Subcontinent, and North Africa, with active expansion underway into Africa, Central Asia, and Eastern Europe.</p>
			</div>
		</div>
	</section>

	<section class="industry-network" aria-label="Wholesale &amp; Distribution network">
		<div class="industry-network__arc" aria-hidden="true"></div>

		<div class="container industry-network__inner">
			<blockquote class="industry-network__quote reveal-up">That reach was built relationship by relationship, market by market, over five decades of delivering on what was promised.</blockquote>

			<dl class="industry-network__stats">
				<div class="industry-network__stat reveal-up delay-1">
					<dt class="industry-network__value">50+</dt>
					<dd class="industry-network__label">Distributors, vendors, and agents</dd>
				</div>
				<div class="industry-network__stat reveal-up delay-2">
					<dt class="industry-network__value">28</dt>
					<dd class="industry-network__label">Countries</dd>
				</div>
				<div class="industry-network__stat reveal-up delay-3">
					<dt class="industry-network__value">5</dt>
					<dd class="industry-network__label">Decades of delivering on what was promised</dd>
				</div>
			</dl>

			<div class="industry-network__regions">
				<div class="industry-network__region-group reveal-up delay-2">
					<h3 class="industry-network__region-title">Our network spans</h3>
					<ul class="industry-network__region-list" role="list">
						<li>Gulf Cooperation Council</li>
						<li>The Levant</li>
						<li>Indian Subcontinent</li>
						<li>North Africa</li>
					</ul>
				</div>
				<div class="industry-network__region-group industry-network__region-group--muted reveal-up delay-3">
					<h3 class="industry-network__region-title">Active expansion underway</h3>
					<ul class="industry-network__region-list" role="list">
						<li>Africa</li>
						<li>Central Asia</li>
						<li>Eastern Europe</li>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<section class="industry-split" aria-labelledby="section-1-heading">
		<div class="container industry-split__layout">
			<div class="industry-split__media">
				<figure class="industry-split__figure reveal-mask">
					<img class="reveal-mask__target" src="<?php echo esc_url( intercoil_asset_uri( 'images/photography/manufacturing/operator-working-on-printing-equipment-in-factory-2026-01-08-22-44-19-utc.jpg' ) ); ?>" alt="" loading="lazy" decoding="async" />
				</figure>
				<figure class="industry-split__figure-accent reveal-mask">
					<img class="reveal-mask__target" src="<?php echo esc_url( intercoil_asset_uri( 'images/photography/manufacturing/female-factory-worker-preparing-textile-for-machin-2026-01-09-09-13-45-utc.jpg' ) ); ?>" alt="" loading="lazy" decoding="async" />
				</figure>
			</div>

			<div class="industry-split__body">
				<span class="ghost-index" aria-hidden="true">02</span>
				<h2 class="industry-split__title reveal-up" id="section-1-heading">More Than a Supply Chain</h2>
				<p class="industry-split__text reveal-up delay-1">Intercoil&#8217;s wholesale model is built around long-term commercial partnerships. Our distributors and trade partners benefit from consistent product quality, reliable lead times, competitive terms, and after-sales support that gives their businesses a genuine foundation to grow from.</p>
				<p class="industry-split__text reveal-up delay-2">We invest in our partners&#8217; success because their performance in market is a direct reflection of the Intercoil name. That alignment is what makes our trade relationships last.</p>
			</div>
		</div>
	</section>

	<section class="industry-mosaic industry-mosaic--section" aria-hidden="true">
		<div class="container industry-mosaic__layout">
			<figure class="industry-mosaic__item industry-mosaic__item--1 reveal-mask">
				<img class="reveal-mask__target" src="<?php echo esc_url( intercoil_asset_uri( 'images/photography/manufacturing/man-working-at-industrial-machine-in-factory-2026-03-20-02-19-47-utc.jpg' ) ); ?>" alt="" loading="lazy" decoding="async" />
			</figure>
			<figure class="industry-mosaic__item industry-mosaic__item--2 reveal-mask">
				<img class="reveal-mask__target" src="<?php echo esc_url( intercoil_asset_uri( 'images/photography/manufacturing/male-and-female-factory-workers-marking-textile-in-2026-01-09-09-38-42-utc.jpg' ) ); ?>" alt="" loading="lazy" decoding="async" />
			</figure>
			<figure class="industry-mosaic__item industry-mosaic__item--3 reveal-mask">
				<img class="reveal-mask__target" src="<?php echo esc_url( intercoil_asset_uri( 'images/photography/mattresses/beds-mattresses-and-pillows-store-2026-01-09-12-22-28-utc.jpg' ) ); ?>" alt="" loading="lazy" decoding="async" />
			</figure>
		</div>
	</section>

	<?php
	get_template_part( 'template-parts/industry/closing', null, array(
		'quote'             => 'Relationship by relationship, market by market.',
		'image'             => 'images/photography/manufacturing/man-working-on-solar-panels-in-factory-2026-03-26-08-57-41-utc.jpg',
		'cta_primary_label' => 'Become a Partner',
		'cta_primary_url'   => home_url( '/' ) . '#contact',
		'cta_ghost_label'   => 'Get in Touch',
		'cta_ghost_url'     => home_url( '/' ) . '#contact',
	) );
	?>

</div>

<?php
get_footer();
