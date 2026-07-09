<?php
/**
 * Template Name: Awards & Guinness Records
 *
 * @package Intercoil
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$awards = array(
	array(
		'year'  => '2015',
		'month' => 'June',
		'title' => 'Dubai Service Excellence (DSES) Best Performance Outlets Winner',
		'text'  => 'Best Service Performance Outlet for the 2014 cycle.',
	),
	array(
		'year'  => '2014',
		'month' => 'November',
		'title' => 'Mohammed Bin Rashid Al Maktoum Business Award',
		'text'  => 'For exceptional business performance, an initiative of the Dubai Chamber of Commerce and Industry.',
	),
	array(
		'year'  => '2011&#8211;14',
		'month' => 'Four consecutive years',
		'title' => 'Dubai Chamber CSR Label',
		'text'  => 'One of only three companies in the UAE to receive this recognition for four consecutive years: 2011, 2012, 2013, and 2014.',
	),
	array(
		'year'  => '2014',
		'month' => 'June',
		'title' => 'Dubai Human Development Appreciation Award (DHDAA)',
		'text'  => 'An initiative of the Department of Economic Development, under the patronage of H.H. Sheikh Mohammed bin Rashid Al Maktoum.',
	),
	array(
		'year'  => '2012',
		'month' => 'March',
		'title' => '4th in Dubai SME 100',
		'text'  => 'Top Performing Small and Medium Enterprises in Dubai, under the patronage of H.H. Sheikh Hamdan Bin Mohammed Bin Rashid Al Maktoum.',
	),
	array(
		'year'  => '2012',
		'month' => 'April',
		'title' => 'Dubai Quality Appreciation Award',
		'text'  => 'Part of the Dubai Quality Appreciation Programme.',
	),
);

$records = array(
	array(
		'year'  => '2010',
		'title' => 'World&#8217;s Largest Human Mattress Dominos',
	),
	array(
		'year'  => '2007',
		'title' => 'World&#8217;s Largest Bed Set',
	),
	array(
		'year'  => '2000',
		'title' => 'World&#8217;s Largest Mattress',
	),
);

get_header();
?>

<div class="intercoil-inner-page awards-page">

	<header class="inner-hero inner-hero--tall awards-hero" aria-labelledby="awards-hero-heading">
		<div class="inner-hero__bg" aria-hidden="true">
			<img
				class="inner-hero__img awards-hero__img"
				src="<?php echo esc_url( intercoil_asset_uri( 'images/photography/awards/guinness-worlds-largest-mattress.jpg' ) ); ?>"
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
			<span class="section-label section-label--light inner-hero__eyebrow">Media Center</span>
			<h1 class="inner-hero__title inner-hero__title--simple" id="awards-hero-heading">Awards &amp; Guinness Records</h1>
			<p class="inner-hero__tagline">Recognition earned over five decades of manufacturing excellence, community commitment, and business leadership.</p>
		</div>

		<div class="inner-hero__fade" aria-hidden="true"></div>
	</header>

	<section class="awards-timeline" aria-labelledby="awards-timeline-heading">
		<div class="container">
			<h2 class="awards-timeline__heading reveal-up" id="awards-timeline-heading">Awards</h2>

			<ol class="awards-timeline__list" role="list">
				<?php foreach ( $awards as $award ) : ?>
					<li class="awards-timeline__item reveal-up">
						<div class="awards-timeline__date">
							<span class="awards-timeline__month"><?php echo esc_html( $award['month'] ); ?></span>
							<span class="awards-timeline__year"><?php echo wp_kses_post( $award['year'] ); ?></span>
						</div>
						<div class="awards-timeline__body">
							<h3 class="awards-timeline__title"><?php echo esc_html( $award['title'] ); ?></h3>
							<p class="awards-timeline__text"><?php echo esc_html( $award['text'] ); ?></p>
						</div>
					</li>
				<?php endforeach; ?>
			</ol>
		</div>
	</section>

	<section class="awards-records" aria-labelledby="awards-records-heading">
		<div class="container awards-records__head">
			<h2 class="awards-records__heading reveal-up" id="awards-records-heading">Guinness World Records</h2>
		</div>

		<figure class="awards-records__scene reveal-mask" aria-hidden="true">
			<img
				class="reveal-mask__target"
				src="<?php echo esc_url( intercoil_asset_uri( 'images/photography/awards/guinness-worlds-largest-bed-set.jpg' ) ); ?>"
				alt=""
				loading="lazy"
				decoding="async"
			/>
			<div class="awards-records__scene-shade"></div>
		</figure>

		<div class="container">
			<ol class="awards-records__list" role="list">
				<?php foreach ( $records as $i => $record ) : ?>
					<li class="awards-records__item reveal-up<?php echo $i > 0 ? ' delay-' . (int) $i : ''; ?>">
						<span class="awards-records__year"><?php echo esc_html( $record['year'] ); ?></span>
						<h3 class="awards-records__title"><?php echo wp_kses_post( $record['title'] ); ?></h3>
					</li>
				<?php endforeach; ?>
			</ol>
		</div>
	</section>

	<section class="awards-next" aria-label="<?php esc_attr_e( 'Continue exploring the Media Center', 'intercoil' ); ?>">
		<div class="container awards-next__inner reveal-up">
			<p class="awards-next__lead">More from the Media Center</p>
			<a href="<?php echo esc_url( intercoil_news_page_url() ); ?>" class="inner-link awards-next__link">
				Press Releases
				<span class="inner-link__arrow" aria-hidden="true">&rarr;</span>
			</a>
		</div>
	</section>

</div>

<?php
get_footer();
