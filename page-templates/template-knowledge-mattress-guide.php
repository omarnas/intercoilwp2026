<?php
/**
 * Template Name: Knowledge Hub — Mattress Guide
 *
 * @package Intercoil
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<div class="intercoil-inner-page knowledge-page knowledge-page--mattress-guide">

	<?php
	get_template_part( 'template-parts/knowledge/hero', null, array(
		'hero_image' => 'images/photography/mattresses/beds-mattresses-and-pillows-store-2026-01-09-08-12-13-utc.jpg',
		'title'      => 'Mattress Guide',
		'tagline'    => 'Your Guide to the Perfect Mattress',
	) );
	?>

	<section class="knowledge-opening" aria-labelledby="guide-opening-heading">
		<div class="container">
			<h2 class="inner-visually-hidden" id="guide-opening-heading">Your Guide to the Perfect Mattress</h2>

			<p class="knowledge-opening__statement reveal-up">Your mattress is the foundation of everything that follows: the energy you wake with, the clarity you carry through the day, the recovery your body deserves each night.</p>

			<div class="knowledge-opening__columns">
				<p class="knowledge-opening__prose reveal-up delay-1">At Intercoil, we believe premium sleep should be informed sleep. Our Mattress Guide is here to help you make a choice built around your body, your lifestyle, and your standards.</p>
			</div>
		</div>
	</section>

	<section class="knowledge-guide" aria-labelledby="guide-considerations-heading">
		<div class="container">
			<div class="knowledge-guide__head">
				<h2 class="knowledge-guide__title reveal-up" id="guide-considerations-heading">What to Consider When Buying a Mattress</h2>
			</div>

			<div class="media-row media-row--cinematic">
				<div class="media-row__media reveal-mask">
					<img class="reveal-mask__target" src="<?php echo esc_url( intercoil_asset_uri( 'images/photography/mattresses/beds-mattresses-and-pillows-store-2026-01-09-12-22-28-utc.jpg' ) ); ?>" alt="" loading="lazy" decoding="async" />
				</div>

				<div class="media-row__body knowledge-guide__entries">
					<article class="knowledge-guide__entry reveal-up">
						<span class="ghost-index" aria-hidden="true">01</span>
						<h3 class="knowledge-guide__entry-title">Support &amp; Durability</h3>
						<p class="knowledge-guide__entry-text">A premium mattress holds its quality over time. Look for a model that delivers reliable support across the lumbar region and major joints. Our orthopedic and hybrid designs use carefully engineered combinations of pocket springs, coils, and foam, built to maintain their form and function long after the first night.</p>
					</article>

					<article class="knowledge-guide__entry reveal-up">
						<span class="ghost-index" aria-hidden="true">02</span>
						<h3 class="knowledge-guide__entry-title">Materials &amp; Construction</h3>
						<p class="knowledge-guide__entry-text">The difference between good sleep and extraordinary sleep often lies in what&#8217;s inside. Foam quality, coil count, quilting depth, and fabric breathability all shape your experience. Understanding what terms like &#8220;pocket coil,&#8221; &#8220;hybrid,&#8221; and &#8220;high-resilience foam&#8221; really mean ensures you invest with confidence.</p>
					</article>

					<article class="knowledge-guide__entry reveal-up">
						<span class="ghost-index" aria-hidden="true">03</span>
						<h3 class="knowledge-guide__entry-title">Size &amp; Sleep Behavior</h3>
						<p class="knowledge-guide__entry-text">How many people share the bed? Do you move during sleep? If you share your mattress or are a restless sleeper, a larger size with motion isolation can make a profound difference to the quality of rest for both of you.</p>
					</article>

					<article class="knowledge-guide__entry reveal-up">
						<span class="ghost-index" aria-hidden="true">04</span>
						<h3 class="knowledge-guide__entry-title">Health &amp; Orthopedic Needs</h3>
						<p class="knowledge-guide__entry-text">If you experience back pain, joint discomfort, or need targeted pressure relief, support is everything. Our orthopedic range is designed to preserve natural spine alignment and reduce pressure points, so you wake without the aches that shouldn&#8217;t be there.</p>
					</article>

					<article class="knowledge-guide__entry reveal-up">
						<span class="ghost-index" aria-hidden="true">05</span>
						<h3 class="knowledge-guide__entry-title">Trial &amp; Testing</h3>
						<p class="knowledge-guide__entry-text">Choosing a premium mattress deserves more than a moment&#8217;s consideration. Our showrooms are designed for private, unhurried testing. Lying on a mattress for at least 15 minutes gives you a far more accurate sense of how it will perform across a full night&#8217;s sleep.</p>
					</article>

					<article class="knowledge-guide__entry reveal-up">
						<span class="ghost-index" aria-hidden="true">06</span>
						<h3 class="knowledge-guide__entry-title">Care &amp; Accessories</h3>
						<p class="knowledge-guide__entry-text">A quality mattress protector, the right bed base, and regular maintenance protect your investment and extend its life and sustain the sleep experience you paid for. These small commitments make a lasting difference.</p>
					</article>
				</div>
			</div>
		</div>
	</section>

	<section class="knowledge-mosaic" aria-hidden="true">
		<div class="container knowledge-mosaic__layout">
			<figure class="knowledge-mosaic__item knowledge-mosaic__item--1 reveal-mask">
				<img class="reveal-mask__target" src="<?php echo esc_url( intercoil_asset_uri( 'images/photography/manufacturing/handsome-male-customer-sitting-on-new-bed-at-furni-2026-01-06-08-58-01-utc.jpg' ) ); ?>" alt="" loading="lazy" decoding="async" />
			</figure>
			<figure class="knowledge-mosaic__item knowledge-mosaic__item--2 reveal-mask">
				<img class="reveal-mask__target" src="<?php echo esc_url( intercoil_asset_uri( 'images/photography/mattresses/close-up-of-a-hand-on-a-quilted-surface-2026-03-17-14-42-08-utc.jpg' ) ); ?>" alt="" loading="lazy" decoding="async" />
			</figure>
			<figure class="knowledge-mosaic__item knowledge-mosaic__item--3 reveal-mask">
				<img class="reveal-mask__target" src="<?php echo esc_url( intercoil_asset_uri( 'images/photography/mattresses/young-woman-shopper-choosing-new-bed-at-modern-fur-2026-01-06-09-17-00-utc.jpg' ) ); ?>" alt="" loading="lazy" decoding="async" />
			</figure>
		</div>
	</section>

	<?php
	get_template_part( 'template-parts/knowledge/closing', null, array(
		'quote'             => 'The right mattress does not just change how you sleep. It changes how you live.',
		'image'             => 'images/photography/hospitality/bedroom-inside-modern-luxurious-hotel-2026-03-24-04-04-23-utc.JPG',
		'cta_primary_label' => 'Explore Our Products',
		'cta_primary_url'   => intercoil_page_url( 'mattresses' ),
		'cta_ghost_label'   => 'Healthy Sleep Tips',
		'cta_ghost_url'     => intercoil_page_url( 'healthy-sleep-tips' ),
	) );
	?>

</div>

<?php
get_footer();
