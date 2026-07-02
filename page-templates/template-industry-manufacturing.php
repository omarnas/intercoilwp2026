<?php
/**
 * Template Name: Industry — Tailored Manufacturing
 *
 * @package Intercoil
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<div class="intercoil-inner-page industry-page industry-page--manufacturing">

	<?php
	get_template_part( 'template-parts/industry/hero', null, array(
		'hero_image' => 'images/photography/manufacturing/foamsmall.jpg',
		'title'      => 'Precision-Engineered Manufacturing Solutions.',
		'tagline'    => 'Quality without compromise, at scale.',
	) );
	?>

	<section class="industry-opening" aria-labelledby="industry-opening-heading">
		<div class="container">
			<h2 class="inner-visually-hidden" id="industry-opening-heading">Tailored Manufacturing</h2>

			<p class="industry-opening__statement reveal-up">Through our state-of-the-art polyurethane foam facility in Ras Al Khaimah, Intercoil provides precision-engineered manufacturing solutions across a wide range of industries.</p>
		</div>
	</section>

	<section class="industry-mosaic" aria-hidden="true">
		<div class="container industry-mosaic__layout">
			<figure class="industry-mosaic__item industry-mosaic__item--1 reveal-mask">
				<img class="reveal-mask__target" src="<?php echo esc_url( intercoil_asset_uri( 'images/photography/manufacturing/cutting-pink-foam-with-an-electric-foam-cutter-2026-03-19-23-08-59-utc.jpg' ) ); ?>" alt="" loading="lazy" decoding="async" />
			</figure>
			<figure class="industry-mosaic__item industry-mosaic__item--2 reveal-mask">
				<img class="reveal-mask__target" src="<?php echo esc_url( intercoil_asset_uri( 'images/photography/manufacturing/mattressfoamfull.jpg' ) ); ?>" alt="" loading="lazy" decoding="async" />
			</figure>
			<figure class="industry-mosaic__item industry-mosaic__item--3 reveal-mask">
				<img class="reveal-mask__target" src="<?php echo esc_url( intercoil_asset_uri( 'images/photography/manufacturing/a-focused-worker-is-operating-a-foam-cutter-at-his-2026-03-25-01-47-21-utc.jpg' ) ); ?>" alt="" loading="lazy" decoding="async" />
			</figure>
		</div>
	</section>

	<section class="industry-scopes" aria-labelledby="section-1-heading">
		<div class="container">
			<div class="industry-scopes__head">
				<h2 class="industry-scopes__title reveal-up" id="section-1-heading">From Home Furnishings to Aerospace</h2>
			</div>

			<ol class="industry-scopes__list" role="list">
				<li class="industry-scopes__item reveal-up delay-1">
					<span class="industry-scopes__num" aria-hidden="true">01</span>
					<span class="industry-scopes__label">Home furnishings</span>
				</li>
				<li class="industry-scopes__item reveal-up delay-2">
					<span class="industry-scopes__num" aria-hidden="true">02</span>
					<span class="industry-scopes__label">Automotive</span>
				</li>
				<li class="industry-scopes__item reveal-up delay-3">
					<span class="industry-scopes__num" aria-hidden="true">03</span>
					<span class="industry-scopes__label">Apparel</span>
				</li>
				<li class="industry-scopes__item reveal-up delay-1">
					<span class="industry-scopes__num" aria-hidden="true">04</span>
					<span class="industry-scopes__label">Insulation</span>
				</li>
				<li class="industry-scopes__item reveal-up delay-2">
					<span class="industry-scopes__num" aria-hidden="true">05</span>
					<span class="industry-scopes__label">Aerospace</span>
				</li>
			</ol>
		</div>
	</section>

	<section class="industry-split" aria-labelledby="section-2-heading">
		<div class="container industry-split__layout">
			<div class="industry-split__media">
				<figure class="industry-split__figure reveal-mask">
					<img class="reveal-mask__target" src="<?php echo esc_url( intercoil_asset_uri( 'images/photography/manufacturing/detailed-view-of-dressmaker-woman-sews-clothes-on-2026-03-24-04-56-46-utc.jpg' ) ); ?>" alt="" loading="lazy" decoding="async" />
				</figure>
				<figure class="industry-split__figure-accent reveal-mask">
					<img class="reveal-mask__target" src="<?php echo esc_url( intercoil_asset_uri( 'images/photography/manufacturing/cutting-pink-foam-with-an-electric-foam-cutter-2026-03-19-23-08-59-utc.jpg' ) ); ?>" alt="" loading="lazy" decoding="async" />
				</figure>
			</div>

			<div class="industry-split__body">
				<span class="ghost-index" aria-hidden="true">02</span>
				<h2 class="industry-split__title reveal-up" id="section-2-heading">Built to Exact Specifications</h2>
				<p class="industry-split__text reveal-up delay-1">Our dedicated Research &amp; Development team works directly with clients to design and produce customized mattresses, foam products, and seating solutions built to exact specifications.</p>
				<p class="industry-split__text reveal-up delay-2">Backed by ISO, OHSAS, and Oeko-Tex certifications, and a culture of continuous improvement, every custom product we deliver reflects the same standard: quality without compromise, at scale.</p>

				<ul class="industry-marks reveal-up delay-3" role="list">
					<li class="industry-marks__item">ISO</li>
					<li class="industry-marks__item">OHSAS</li>
					<li class="industry-marks__item">Oeko-Tex</li>
				</ul>
			</div>
		</div>
	</section>

	<section class="industry-mosaic industry-mosaic--section" aria-hidden="true">
		<div class="container industry-mosaic__layout">
			<figure class="industry-mosaic__item industry-mosaic__item--1 reveal-mask">
				<img class="reveal-mask__target" src="<?php echo esc_url( intercoil_asset_uri( 'images/photography/manufacturing/man-working-at-industrial-machine-in-factory-2026-03-20-02-19-47-utc.jpg' ) ); ?>" alt="" loading="lazy" decoding="async" />
			</figure>
			<figure class="industry-mosaic__item industry-mosaic__item--2 reveal-mask">
				<img class="reveal-mask__target" src="<?php echo esc_url( intercoil_asset_uri( 'images/photography/manufacturing/a-focused-worker-is-operating-a-foam-cutter-at-his-2026-03-25-01-47-21-utc.jpg' ) ); ?>" alt="" loading="lazy" decoding="async" />
			</figure>
			<figure class="industry-mosaic__item industry-mosaic__item--3 reveal-mask">
				<img class="reveal-mask__target" src="<?php echo esc_url( intercoil_asset_uri( 'images/photography/manufacturing/female-factory-worker-preparing-textile-for-machin-2026-01-09-09-13-45-utc.jpg' ) ); ?>" alt="" loading="lazy" decoding="async" />
			</figure>
		</div>
	</section>

	<?php
	get_template_part( 'template-parts/industry/closing', null, array(
		'quote'             => 'Quality without compromise, at scale.',
		'image'             => 'images/photography/manufacturing/mattressfoamfull.jpg',
		'cta_primary_label' => 'Book a Consultation',
		'cta_primary_url'   => home_url( '/' ) . '#contact',
		'cta_ghost_label'   => 'Foam & Industrial Solutions',
		'cta_ghost_url'     => intercoil_comfort_collection_url( 'foam' ),
	) );
	?>

</div>

<?php
get_footer();
