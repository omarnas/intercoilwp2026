<?php
/**
 * Template Name: Our Legacy
 *
 * @package Intercoil
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$home_url = home_url( '/' );

get_header();
?>

<div class="intercoil-inner-page legacy-page">

	<header class="inner-hero inner-hero--tall legacy-hero" aria-labelledby="legacy-hero-heading">
		<div class="inner-hero__bg" aria-hidden="true">
			<img
				class="inner-hero__img"
				src="<?php echo esc_url( intercoil_asset_uri( 'images/photography/hospitality/luxury-resort-room-2026-03-20-01-01-12-utc.jpg' ) ); ?>"
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
			<span class="section-label section-label--light inner-hero__eyebrow">Founded in 1974</span>
			<h1 class="inner-hero__title inner-hero__title--simple" id="legacy-hero-heading">Our Legacy</h1>
			<p class="inner-hero__tagline">Half a century of excellence. Built to last.</p>
		</div>

		<div class="inner-hero__fade" aria-hidden="true"></div>
	</header>

	<section class="legacy-intro" aria-labelledby="legacy-intro-heading">
		<div class="legacy-intro__watermark" aria-hidden="true">1974</div>

		<div class="container legacy-intro__layout">
			<div class="legacy-intro__visual">
				<figure class="legacy-intro__figure legacy-intro__figure--primary">
					<img
						src="<?php echo esc_url( intercoil_asset_uri( 'images/photography/brands/intercoil-brand-new.jpg' ) ); ?>"
						alt=""
						loading="lazy"
						decoding="async"
					/>
				</figure>
				<figure class="legacy-intro__figure legacy-intro__figure--accent">
					<img
						src="<?php echo esc_url( intercoil_asset_uri( 'images/photography/mattresses/close-up-of-a-hand-on-a-quilted-surface-2026-03-17-14-42-08-utc.jpg' ) ); ?>"
						alt=""
						loading="lazy"
						decoding="async"
					/>
				</figure>
			</div>

			<div class="legacy-intro__copy">
				<h2 class="legacy-intro__title" id="legacy-intro-heading">Our Legacy</h2>

				<p class="legacy-intro__lead">Founded in 1974, Intercoil International began as a family-owned business with a single mission: to build something enduring.</p>

				<div class="legacy-intro__prose">
					<p>Five decades later, that mission has shaped a multinational presence across 28+ countries, designing and crafting premium bedroom products held to the highest international standards.</p>
					<p>Under dedicated family leadership, the company continues to expand its footprint, deepen its partnerships, and grow its influence across global markets.</p>
				</div>

				<ul class="legacy-stats" role="list">
					<li class="legacy-stats__item">
						<strong class="legacy-stats__value">50+</strong>
						<span class="legacy-stats__label">Years</span>
					</li>
					<li class="legacy-stats__item">
						<strong class="legacy-stats__value">28+</strong>
						<span class="legacy-stats__label">Countries</span>
					</li>
					<li class="legacy-stats__item">
						<strong class="legacy-stats__value">Family&#8209;led</strong>
						<span class="legacy-stats__label">Leadership</span>
					</li>
					<li class="legacy-stats__item">
						<strong class="legacy-stats__value">Premium</strong>
						<span class="legacy-stats__label">Craftsmanship</span>
					</li>
				</ul>
			</div>
		</div>
	</section>

	<section class="legacy-promise" aria-labelledby="legacy-promise-heading">
		<div class="inner-glow inner-glow--a" aria-hidden="true"></div>

		<div class="container">
			<h2 class="legacy-section-title" id="legacy-promise-heading">Our Promise</h2>

			<div class="legacy-pillars">
				<article class="legacy-pillar">
					<div class="legacy-pillar__media">
						<img
							src="<?php echo esc_url( intercoil_asset_uri( 'images/photography/showroom/DSC_7919-1080x675-1.png' ) ); ?>"
							alt=""
							loading="lazy"
							decoding="async"
						/>
						<div class="legacy-pillar__shade" aria-hidden="true"></div>
						<span class="legacy-pillar__index" aria-hidden="true">01</span>
					</div>
					<div class="legacy-pillar__body">
						<h3 class="legacy-pillar__title">Mission</h3>
						<p class="legacy-pillar__text">To manufacture and deliver world-class sleep solutions across MENA through operational excellence, trusted partnerships, and a deep understanding of the markets we serve.</p>
					</div>
				</article>

				<article class="legacy-pillar">
					<div class="legacy-pillar__media">
						<img
							src="<?php echo esc_url( intercoil_asset_uri( 'images/photography/fine.jpg' ) ); ?>"
							alt=""
							loading="lazy"
							decoding="async"
						/>
						<div class="legacy-pillar__shade" aria-hidden="true"></div>
						<span class="legacy-pillar__index" aria-hidden="true">02</span>
					</div>
					<div class="legacy-pillar__body">
						<h3 class="legacy-pillar__title">Vision</h3>
						<p class="legacy-pillar__text">To lead the region's sleep industry through world-class manufacturing, an unrivalled brand portfolio, and partnerships built to last, from MENA to the world.</p>
					</div>
				</article>
			</div>
		</div>
	</section>

	<section class="legacy-values" aria-labelledby="legacy-values-heading">
		<div class="container">
			<h2 class="legacy-section-title legacy-section-title--center" id="legacy-values-heading">Values</h2>

			<div class="legacy-values__grid">
				<article class="legacy-value">
					<span class="legacy-value__num" aria-hidden="true">01</span>
					<h3 class="legacy-value__title">Excellence</h3>
					<p class="legacy-value__text">We hold every product, process, and partnership to the highest standard. No shortcuts. No compromise.</p>
				</article>
				<article class="legacy-value">
					<span class="legacy-value__num" aria-hidden="true">02</span>
					<h3 class="legacy-value__title">Integrity</h3>
					<p class="legacy-value__text">We operate with transparency and honesty in everything we do: with our partners, our customers, and ourselves.</p>
				</article>
				<article class="legacy-value">
					<span class="legacy-value__num" aria-hidden="true">03</span>
					<h3 class="legacy-value__title">Partnership</h3>
					<p class="legacy-value__text">Our relationships are built for the long term. We grow when our partners grow, and we invest in that success unconditionally.</p>
				</article>
				<article class="legacy-value">
					<span class="legacy-value__num" aria-hidden="true">04</span>
					<h3 class="legacy-value__title">Innovation</h3>
					<p class="legacy-value__text">We respect our legacy but never stand still. Continuous improvement in materials, design, and manufacturing keeps us ahead.</p>
				</article>
				<article class="legacy-value">
					<span class="legacy-value__num" aria-hidden="true">05</span>
					<h3 class="legacy-value__title">Legacy</h3>
					<p class="legacy-value__text">Five decades of earned trust shape everything we build. Our history is our foundation, and it drives us forward.</p>
				</article>
				<article class="legacy-value">
					<span class="legacy-value__num" aria-hidden="true">06</span>
					<h3 class="legacy-value__title">Responsibility</h3>
					<p class="legacy-value__text">We take accountability seriously: to our workforce, our communities, and the environment we operate within.</p>
				</article>
			</div>
		</div>
	</section>

	<section class="legacy-closing" aria-labelledby="legacy-closing-heading">
		<div class="legacy-closing__media" aria-hidden="true">
			<img
				class="legacy-closing__img"
				src="<?php echo esc_url( intercoil_asset_uri( 'images/photography/general/elegant-bedroom-interior-with-bed-and-decoration-2026-03-10-03-05-55-utc.jpg' ) ); ?>"
				alt=""
				loading="lazy"
				decoding="async"
			/>
			<div class="legacy-closing__overlay"></div>
		</div>

		<div class="container legacy-closing__inner">
			<blockquote class="legacy-closing__quote" id="legacy-closing-heading">
				Half a century of excellence. Built to last.
			</blockquote>
			<div class="legacy-closing__actions">
				<a href="<?php echo esc_url( $home_url . '#brands' ); ?>" class="legacy-btn legacy-btn--primary">
					Explore Our Brands
					<span class="legacy-btn__arrow" aria-hidden="true">&rarr;</span>
				</a>
				<a href="<?php echo esc_url( $home_url . '#manufacturing' ); ?>" class="legacy-btn legacy-btn--ghost">
					Discover Our Craftsmanship
				</a>
			</div>
		</div>
	</section>

</div>

<?php
get_footer();
