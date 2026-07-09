<?php
/**
 * Template Name: Become a Partner
 *
 * @package Intercoil
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$partner_mailto = 'mailto:info@intercoil.com?subject=Partnership%20Enquiry';

$pillars = array(
	array(
		'title' => 'Brand & Market Power',
		'text'  => 'Access to the Intercoil International name, trusted by families, hotels, and institutions across 28 countries, alongside a market-leading portfolio that includes our own premium product lines and globally licensed brands such as Simmons and Therapedic.',
	),
	array(
		'title' => 'Comprehensive Support',
		'text'  => 'From launch through ongoing operations, we provide complete support: store design, marketing, operational systems, sales and staff training, distribution access, and quality control. Our franchise model is built to help partners succeed from day one.',
	),
	array(
		'title' => 'Manufacturing License Option',
		'text'  => 'For partners with existing or planned manufacturing capacity, our licensing option allows local production under the Intercoil International license, benefiting from our R&D, intellectual property, and established methodology for success.',
	),
	array(
		'title' => 'A Proven Business Formula',
		'text'  => 'Decades of expertise, strong R&D, state-of-the-art production technology, and highly efficient distribution. Our model is designed to reduce risk and maximize returns, for partners who are serious about building something that lasts.',
	),
);

$steps = array(
	'Submit the partner enquiry form to receive the full prospectus.',
	'Discuss territory, retail, or manufacturing options and financial structure.',
	'Receive complete guidance on setup, merchandising, staff training, and go-to-market strategy.',
);

get_header();
?>

<div class="intercoil-inner-page partner-page">

	<header class="inner-hero inner-hero--compact partner-hero" aria-labelledby="partner-hero-heading">
		<div class="inner-hero__bg" aria-hidden="true">
			<img
				class="inner-hero__img partner-hero__img"
				src="<?php echo esc_url( intercoil_asset_uri( 'images/photography/hospitality/modern-hotel-room-interior-with-wood-and-light-2026-03-17-05-02-46-utc.jpg' ) ); ?>"
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
			<span class="section-label section-label--light inner-hero__eyebrow">Intercoil International</span>
			<h1 class="inner-hero__title inner-hero__title--simple" id="partner-hero-heading">Become a Partner</h1>
			<p class="inner-hero__tagline partner-hero__tagline">Half a century of manufacturing excellence. 28 countries. A portfolio built on trust, craftsmanship, and proven results. If you are looking for a partnership with genuine depth, Intercoil International invites you to grow with us.</p>
			<div class="partner-hero__actions">
				<a href="<?php echo esc_url( $partner_mailto ); ?>" class="legacy-btn legacy-btn--primary">
					Apply Now to Become a Partner
					<span class="legacy-btn__arrow" aria-hidden="true">&rarr;</span>
				</a>
			</div>
		</div>

		<div class="inner-hero__fade" aria-hidden="true"></div>
	</header>

	<section class="partner-intro" aria-labelledby="partner-intro-heading">
		<div class="container partner-intro__layout">
			<div class="partner-intro__copy">
				<h2 class="inner-visually-hidden" id="partner-intro-heading">Partnership with Intercoil International</h2>
				<p class="partner-intro__statement reveal-up">We welcome driven entrepreneurs and investors through retail franchises and international manufacturing licenses, offering a model that is proven, scalable, and backed by five decades of expertise.</p>
			</div>

			<div class="partner-intro__visual">
				<figure class="partner-intro__figure partner-intro__figure--primary reveal-mask">
					<img class="reveal-mask__target" src="<?php echo esc_url( intercoil_asset_uri( 'images/photography/manufacturing/female-factory-worker-preparing-textile-for-machin-2026-01-09-09-13-45-utc.jpg' ) ); ?>" alt="" loading="lazy" decoding="async" />
				</figure>
				<figure class="partner-intro__figure partner-intro__figure--accent reveal-mask">
					<img class="reveal-mask__target" src="<?php echo esc_url( intercoil_asset_uri( 'images/photography/mattresses/beds-mattresses-and-pillows-store-2026-01-09-12-22-28-utc.jpg' ) ); ?>" alt="" loading="lazy" decoding="async" />
				</figure>
			</div>
		</div>
	</section>

	<section class="partner-pillars" aria-labelledby="partner-pillars-heading">
		<div class="container">
			<h2 class="partner-pillars__heading reveal-up" id="partner-pillars-heading">What You Receive as a Partner</h2>

			<div class="partner-pillars__grid">
				<?php foreach ( $pillars as $i => $pillar ) : ?>
					<article class="partner-pillar reveal-up<?php echo $i > 0 ? ' delay-' . (int) $i : ''; ?>">
						<h3 class="partner-pillar__title"><?php echo esc_html( $pillar['title'] ); ?></h3>
						<p class="partner-pillar__text"><?php echo esc_html( $pillar['text'] ); ?></p>
					</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="partner-steps" aria-labelledby="partner-steps-heading">
		<div class="container partner-steps__layout">
			<h2 class="partner-steps__heading reveal-up" id="partner-steps-heading">How to Get Started</h2>

			<ol class="partner-steps__list" role="list">
				<?php foreach ( $steps as $i => $step ) : ?>
					<li class="partner-step reveal-up<?php echo $i > 0 ? ' delay-' . (int) $i : ''; ?>">
						<span class="partner-step__num" aria-hidden="true"><?php echo esc_html( str_pad( (string) ( $i + 1 ), 2, '0', STR_PAD_LEFT ) ); ?></span>
						<p class="partner-step__text"><?php echo esc_html( $step ); ?></p>
					</li>
				<?php endforeach; ?>
			</ol>
		</div>
	</section>

	<section class="legacy-closing partner-closing" aria-labelledby="partner-closing-heading">
		<div class="legacy-closing__media" aria-hidden="true">
			<img
				class="legacy-closing__img"
				src="<?php echo esc_url( intercoil_asset_uri( 'images/photography/general/bedroom-interior-with-bed-plants-and-gold-frame-2026-03-10-04-03-45-utc.jpg' ) ); ?>"
				alt=""
				loading="lazy"
				decoding="async"
			/>
			<div class="legacy-closing__overlay"></div>
		</div>

		<div class="container legacy-closing__inner">
			<p class="legacy-closing__quote partner-closing__statement" id="partner-closing-heading">
				Join Intercoil International not simply as a retailer or licensed manufacturer, but as a strategic partner in shaping premium bedroom products across global markets.
			</p>
			<div class="legacy-closing__actions">
				<a href="<?php echo esc_url( $partner_mailto ); ?>" class="legacy-btn legacy-btn--primary">
					Apply Now to Become a Partner
					<span class="legacy-btn__arrow" aria-hidden="true">&rarr;</span>
				</a>
			</div>
		</div>
	</section>

</div>

<?php
get_footer();
