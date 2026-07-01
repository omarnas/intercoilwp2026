<?php
/**
 * Template Name: ISO Certificates
 *
 * @package Intercoil
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$home_url = home_url( '/' );

get_header();
?>

<div class="intercoil-inner-page iso-page">

	<header class="inner-hero inner-hero--tall iso-hero" aria-labelledby="iso-hero-heading">
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
			<h1 class="inner-hero__title inner-hero__title--simple" id="iso-hero-heading">ISO Certificates</h1>
			<p class="inner-hero__tagline">Earned recognition across quality, business excellence, and industry leadership over five decades of operation.</p>
		</div>

		<div class="inner-hero__fade" aria-hidden="true"></div>
	</header>

	<section class="iso-intro" aria-labelledby="iso-intro-heading">
		<div class="iso-intro__watermark" aria-hidden="true">50+</div>

		<div class="container iso-intro__layout">
			<div class="iso-intro__visual">
				<figure class="iso-intro__figure iso-intro__figure--primary">
					<img
						src="<?php echo esc_url( intercoil_asset_uri( 'images/photography/manufacturing/a-focused-worker-is-operating-a-foam-cutter-at-his-2026-03-25-01-47-21-utc.jpg' ) ); ?>"
						alt=""
						loading="lazy"
						decoding="async"
					/>
				</figure>
				<figure class="iso-intro__figure iso-intro__figure--accent">
					<img
						src="<?php echo esc_url( intercoil_asset_uri( 'images/photography/showroom/DSC_7919-1080x675-1.png' ) ); ?>"
						alt=""
						loading="lazy"
						decoding="async"
					/>
				</figure>
				<div class="iso-intro__seal" aria-hidden="true">
					<img src="<?php echo esc_url( intercoil_asset_uri( 'images/certficates/9001-2015.png' ) ); ?>" alt="" loading="lazy" decoding="async" />
				</div>
			</div>

			<div class="iso-intro__copy">
				<h2 class="iso-intro__title" id="iso-intro-heading">ISO Certificates</h2>
				<p class="iso-intro__lead">Intercoil International has earned recognition across quality, business excellence, and industry leadership over five decades of operation:</p>

				<ul class="iso-stats" role="list">
					<li class="iso-stats__item">
						<strong class="iso-stats__value">5</strong>
						<span class="iso-stats__label">Business Awards</span>
					</li>
					<li class="iso-stats__item">
						<strong class="iso-stats__value">4</strong>
						<span class="iso-stats__label">Certifications</span>
					</li>
					<li class="iso-stats__item">
						<strong class="iso-stats__value">3</strong>
						<span class="iso-stats__label">World Records</span>
					</li>
					<li class="iso-stats__item">
						<strong class="iso-stats__value">50+</strong>
						<span class="iso-stats__label">Years</span>
					</li>
				</ul>
			</div>
		</div>
	</section>

	<section class="iso-awards" aria-labelledby="iso-awards-heading">
		<div class="inner-glow inner-glow--b" aria-hidden="true"></div>

		<div class="container">
			<h2 class="iso-section-title" id="iso-awards-heading">Business Excellence Awards</h2>

			<ol class="iso-awards__list" role="list">
				<li class="iso-awards__item">
					<span class="iso-awards__index" aria-hidden="true">01</span>
					<p class="iso-awards__name">Mohammed Bin Rashid Al Maktoum Business Excellence Award</p>
				</li>
				<li class="iso-awards__item">
					<span class="iso-awards__index" aria-hidden="true">02</span>
					<p class="iso-awards__name">Dubai Chamber CSR Label, seven consecutive years: 2011 and 2017</p>
				</li>
				<li class="iso-awards__item">
					<span class="iso-awards__index" aria-hidden="true">03</span>
					<p class="iso-awards__name">International Business Excellence Award 2017</p>
				</li>
				<li class="iso-awards__item">
					<span class="iso-awards__index" aria-hidden="true">04</span>
					<p class="iso-awards__name">Dubai Human Development Appreciation Award</p>
				</li>
				<li class="iso-awards__item">
					<span class="iso-awards__index" aria-hidden="true">05</span>
					<p class="iso-awards__name">Dubai Service Excellence Scheme</p>
				</li>
			</ol>
		</div>
	</section>

	<section class="iso-certs" aria-labelledby="iso-certs-heading">
		<div class="iso-certs__ambient" aria-hidden="true"></div>
		<div class="inner-glow inner-glow--a" aria-hidden="true"></div>

		<div class="container iso-certs__inner">
			<div class="iso-certs__header">
				<h2 class="iso-certs__heading" id="iso-certs-heading">Certifications</h2>
			</div>

			<div class="iso-certs__grid" aria-label="<?php esc_attr_e( 'Certifications', 'intercoil' ); ?>">
				<article class="iso-certs__item">
					<figure class="iso-certs__mark">
						<img src="<?php echo esc_url( intercoil_asset_uri( 'images/certficates/9001-2015.png' ) ); ?>" alt="" loading="lazy" decoding="async" />
					</figure>
					<p class="iso-certs__text">ISO 9001:2000, the first certification of its kind in the Middle East industry</p>
				</article>

				<article class="iso-certs__item">
					<figure class="iso-certs__mark">
						<img src="<?php echo esc_url( intercoil_asset_uri( 'images/certficates/45001.png' ) ); ?>" alt="" loading="lazy" decoding="async" />
					</figure>
					<p class="iso-certs__text">OHSAS 18001, internationally recognized occupational health and safety standard</p>
				</article>

				<article class="iso-certs__item">
					<figure class="iso-certs__mark">
						<img src="<?php echo esc_url( intercoil_asset_uri( 'images/certficates/Quality Contro.png' ) ); ?>" alt="" loading="lazy" decoding="async" />
					</figure>
					<p class="iso-certs__text">Dubai Quality Appreciation Award</p>
				</article>

				<article class="iso-certs__item">
					<figure class="iso-certs__mark">
						<img src="<?php echo esc_url( intercoil_asset_uri( 'images/certficates/CertiPUR.png' ) ); ?>" alt="" loading="lazy" decoding="async" />
					</figure>
					<p class="iso-certs__text">Oeko-Tex Standard 100 Certification, reflecting our commitment to safe and responsibly produced materials</p>
				</article>
			</div>
		</div>
	</section>

	<section class="iso-records" aria-labelledby="iso-records-heading">
		<div class="container">
			<h2 class="iso-section-title iso-section-title--center" id="iso-records-heading">Guinness World Records</h2>

			<div class="iso-records__grid">
				<article class="iso-record">
					<div class="iso-record__media">
						<img
							src="<?php echo esc_url( intercoil_asset_uri( 'images/photography/mattresses/comfortable-mattress-and-soft-touch-for-good-sleep-2026-03-23-23-01-57-utc.jpg' ) ); ?>"
							alt=""
							loading="lazy"
							decoding="async"
						/>
						<div class="iso-record__shade" aria-hidden="true"></div>
						<span class="iso-record__index" aria-hidden="true">01</span>
					</div>
					<h3 class="iso-record__title">Largest Spring Mattress</h3>
				</article>

				<article class="iso-record">
					<div class="iso-record__media">
						<img
							src="<?php echo esc_url( intercoil_asset_uri( 'images/photography/general/elegant-bedroom-interior-with-bed-and-decoration-2026-03-10-03-05-55-utc.jpg' ) ); ?>"
							alt=""
							loading="lazy"
							decoding="async"
						/>
						<div class="iso-record__shade" aria-hidden="true"></div>
						<span class="iso-record__index" aria-hidden="true">02</span>
					</div>
					<h3 class="iso-record__title">Largest Bed Set</h3>
				</article>

				<article class="iso-record">
					<div class="iso-record__media">
						<img
							src="<?php echo esc_url( intercoil_asset_uri( 'images/photography/mattresses/close-up-of-a-hand-on-a-quilted-surface-2026-03-17-14-42-08-utc.jpg' ) ); ?>"
							alt=""
							loading="lazy"
							decoding="async"
						/>
						<div class="iso-record__shade" aria-hidden="true"></div>
						<span class="iso-record__index" aria-hidden="true">03</span>
					</div>
					<h3 class="iso-record__title">Longest Human Mattress Dominos</h3>
				</article>
			</div>
		</div>
	</section>

	<section class="iso-closing" aria-labelledby="iso-closing-heading">
		<div class="iso-closing__media" aria-hidden="true">
			<img
				class="iso-closing__img"
				src="<?php echo esc_url( intercoil_asset_uri( 'images/photography/hospitality/3d-rendering-beautiful-luxury-bedroom-suite-in-hot-2026-03-17-04-32-19-utc.jpg' ) ); ?>"
				alt=""
				loading="lazy"
				decoding="async"
			/>
			<div class="iso-closing__overlay"></div>
		</div>

		<div class="container iso-closing__inner">
			<blockquote class="iso-closing__quote" id="iso-closing-heading">
				Earned recognition across quality, business excellence, and industry leadership over five decades of operation.
			</blockquote>
			<div class="iso-closing__actions">
				<a href="<?php echo esc_url( $home_url . '#manufacturing' ); ?>" class="iso-btn iso-btn--primary">
					Discover Our Craftsmanship
					<span class="iso-btn__arrow" aria-hidden="true">&rarr;</span>
				</a>
				<a href="<?php echo esc_url( $home_url . '#contact' ); ?>" class="iso-btn iso-btn--ghost">
					Get in Touch
				</a>
			</div>
		</div>
	</section>

</div>

<?php
get_footer();
