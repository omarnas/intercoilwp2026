<?php
/**
 * Template Name: Sustainability & Social Responsibility
 *
 * @package Intercoil
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$home_url = home_url( '/' );

get_header();
?>

<div class="intercoil-inner-page sustainability-page">

	<header class="inner-hero inner-hero--tall sustainability-hero" aria-labelledby="sustainability-hero-heading">
		<div class="inner-hero__bg" aria-hidden="true">
			<img
				class="inner-hero__img"
				src="<?php echo esc_url( intercoil_asset_uri( 'images/photography/general/woman-making-bed-in-bright-airy-bedroom-2026-03-25-07-04-37-utc.jpg' ) ); ?>"
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
			<span class="section-label section-label--light inner-hero__eyebrow">Dubai Chamber CSR Label &middot; 2014</span>
			<h1 class="inner-hero__title inner-hero__title--simple" id="sustainability-hero-heading">Sustainability &amp; Social Responsibility</h1>
			<p class="inner-hero__tagline">Creating a positive impact on people, communities, and the environment.</p>
		</div>

		<div class="inner-hero__fade" aria-hidden="true"></div>
	</header>

	<section class="sustainability-intro" aria-labelledby="sustainability-intro-heading">
		<div class="container sustainability-intro__layout">
			<div class="sustainability-intro__visual">
				<figure class="sustainability-intro__figure sustainability-intro__figure--primary">
					<img
						src="<?php echo esc_url( intercoil_asset_uri( 'images/photography/general/relaxing-bedroom-interior-with-bed-and-pillows-2026-03-10-04-02-05-utc.jpg' ) ); ?>"
						alt=""
						loading="lazy"
						decoding="async"
					/>
				</figure>
				<figure class="sustainability-intro__figure sustainability-intro__figure--accent">
					<img
						src="<?php echo esc_url( intercoil_asset_uri( 'images/photography/manufacturing/man-working-on-solar-panels-in-factory-2026-03-26-08-57-41-utc.jpg' ) ); ?>"
						alt=""
						loading="lazy"
						decoding="async"
					/>
				</figure>
			</div>

			<div class="sustainability-intro__copy">
				<h2 class="inner-visually-hidden" id="sustainability-intro-heading">Sustainability &amp; Social Responsibility</h2>
				<p class="sustainability-intro__lead">At Intercoil International, Responsibility is embedded in how we operate. Awarded the Dubai Chamber CSR Label in 2014, we are committed to creating a positive impact on people, communities, and the environment across every market we serve.</p>
			</div>
		</div>
	</section>

	<section class="sustainability-pillars" aria-label="<?php esc_attr_e( 'Sustainability initiatives', 'intercoil' ); ?>">
		<div class="inner-glow inner-glow--a" aria-hidden="true"></div>

		<div class="container">
			<div class="sustainability-pillars__grid">
				<article class="sustainability-pillar">
					<div class="sustainability-pillar__media">
						<img
							src="<?php echo esc_url( intercoil_asset_uri( 'images/photography/general/contemporary-bedroom-interior-with-mint-green-head-2026-03-16-05-10-13-utc.jpg' ) ); ?>"
							alt=""
							loading="lazy"
							decoding="async"
						/>
						<div class="sustainability-pillar__shade" aria-hidden="true"></div>
						<span class="sustainability-pillar__index" aria-hidden="true">01</span>
					</div>
					<div class="sustainability-pillar__body">
						<h3 class="sustainability-pillar__title">Sleep Matters</h3>
						<p class="sustainability-pillar__text">In March 2014, Intercoil International launched Sleep Matters, a community initiative dedicated to improving lives across the UAE and Arab countries by promoting the importance of healthy sleep. This pioneering platform unites lifestyle experts and the public around a single mission: better sleep for better wellbeing.</p>
					</div>
				</article>

				<article class="sustainability-pillar">
					<div class="sustainability-pillar__media">
						<img
							src="<?php echo esc_url( intercoil_asset_uri( 'images/photography/manufacturing/detailed-view-of-dressmaker-woman-sews-clothes-on-2026-03-24-04-56-46-utc.jpg' ) ); ?>"
							alt=""
							loading="lazy"
							decoding="async"
						/>
						<div class="sustainability-pillar__shade" aria-hidden="true"></div>
						<span class="sustainability-pillar__index" aria-hidden="true">02</span>
					</div>
					<div class="sustainability-pillar__body">
						<h3 class="sustainability-pillar__title">Partnerships &amp; Collaborations</h3>
						<p class="sustainability-pillar__text">Since 1974, Intercoil International has extended its commitment beyond manufacturing. Through wellness workshops, collaborations with experts in nutrition and psychology, and partnerships with medical institutions, we develop products that support real health outcomes. In collaboration with Medcare Hospital, we became the first bedding company in the Middle East to create beds and mattresses that support children's growth and development.</p>
					</div>
				</article>

				<article class="sustainability-pillar">
					<div class="sustainability-pillar__media">
						<img
							src="<?php echo esc_url( intercoil_asset_uri( 'images/photography/manufacturing/a-focused-worker-is-operating-a-foam-cutter-at-his-2026-03-25-01-47-21-utc.jpg' ) ); ?>"
							alt=""
							loading="lazy"
							decoding="async"
						/>
						<div class="sustainability-pillar__shade" aria-hidden="true"></div>
						<span class="sustainability-pillar__index" aria-hidden="true">03</span>
					</div>
					<div class="sustainability-pillar__body">
						<h3 class="sustainability-pillar__title">Environmental Responsibility</h3>
						<p class="sustainability-pillar__text">We implement recycling and energy conservation programs across all divisions. Rigorous waste management practices, regular air quality testing, and ongoing noise-level monitoring ensure our operations are safe, efficient, and environmentally responsible.</p>
					</div>
				</article>

				<article class="sustainability-pillar">
					<div class="sustainability-pillar__media">
						<img
							src="<?php echo esc_url( intercoil_asset_uri( 'images/photography/manufacturing/male-and-female-factory-workers-marking-textile-in-2026-01-09-09-38-42-utc.jpg' ) ); ?>"
							alt=""
							loading="lazy"
							decoding="async"
						/>
						<div class="sustainability-pillar__shade" aria-hidden="true"></div>
						<span class="sustainability-pillar__index" aria-hidden="true">04</span>
					</div>
					<div class="sustainability-pillar__body">
						<h3 class="sustainability-pillar__title">Community Involvement</h3>
						<p class="sustainability-pillar__text">From internship programs for UAE and international students, to supporting initiatives like Business for a Cause and volunteering with organizations such as ENGAGE Dubai, Intercoil's community engagement reflects a genuine spirit of purpose beyond profit.</p>
					</div>
				</article>
			</div>
		</div>
	</section>

	<section class="sustainability-closing" aria-labelledby="sustainability-closing-heading">
		<div class="sustainability-closing__media" aria-hidden="true">
			<img
				class="sustainability-closing__img"
				src="<?php echo esc_url( intercoil_asset_uri( 'images/photography/manufacturing/man-working-on-solar-panels-in-factory-2026-03-26-08-57-41-utc.jpg' ) ); ?>"
				alt=""
				loading="lazy"
				decoding="async"
			/>
			<div class="sustainability-closing__overlay"></div>
		</div>

		<div class="container sustainability-closing__inner">
			<blockquote class="sustainability-closing__quote" id="sustainability-closing-heading">
				Responsibility is embedded in how we operate.
			</blockquote>
			<div class="sustainability-closing__actions">
				<a href="<?php echo esc_url( $home_url . '#contact' ); ?>" class="sustainability-btn sustainability-btn--primary">
					Get in Touch
					<span class="sustainability-btn__arrow" aria-hidden="true">&rarr;</span>
				</a>
				<a href="<?php echo esc_url( $home_url ); ?>" class="sustainability-btn sustainability-btn--ghost">
					Explore Intercoil
				</a>
			</div>
		</div>
	</section>

</div>

<?php
get_footer();
