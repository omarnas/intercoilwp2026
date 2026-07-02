<?php
/**
 * Template Name: Brand — Beautyrest by Simmons
 *
 * @package Intercoil
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<div class="intercoil-inner-page brand-page brand-page--beautyrest">

	<?php
	get_template_part( 'template-parts/brand/hero', null, array(
		'hero_image' => 'images/photography/brands/beautyrestnew.jpg',
		'logo'       => 'logos/brands/beautyrest.png',
		'logo_class' => 'brand-hero__logo-wrap--wide',
		'name'       => 'Beautyrest by Simmons',
		'kicker'     => 'The World Standard in Premium Sleep.',
		'headline'   => 'Now Crafted by Intercoil.',
	) );
	?>

	<section class="brand-manifesto" aria-labelledby="brand-manifesto-heading">
		<div class="brand-manifesto__watermark" aria-hidden="true">Simmons</div>

		<div class="container brand-manifesto__layout">
			<div class="brand-manifesto__copy">
				<h2 class="inner-visually-hidden" id="brand-manifesto-heading">Beautyrest by Simmons</h2>
				<p class="brand-manifesto__statement reveal-up">There are names that define a category. Simmons is one of them.</p>

				<p class="brand-manifesto__prose reveal-up delay-1">Beautyrest is the flagship premium line of Simmons, the storied American sleep brand. As a US brand operating in the luxury segment, Beautyrest is recognized among the top international mattress names in the world, carrying a strong premium reputation built over a century of innovation. Through Intercoil&#8217;s exclusive license, that same world-class specification is crafted and delivered here.</p>
				<p class="brand-manifesto__prose reveal-up delay-2">For well over a century, Simmons has set the benchmark for premium sleep on a global scale, earning the trust of the world&#8217;s most discerning hotels, resorts, and households through one consistent principle: sleep should never be compromised, regardless of where you are in the world.</p>
			</div>

			<div class="brand-manifesto__visual">
				<div class="brand-manifesto__panel" aria-hidden="true"></div>
				<figure class="brand-manifesto__figure brand-manifesto__figure--primary reveal-mask">
					<img class="reveal-mask__target" src="<?php echo esc_url( intercoil_asset_uri( 'images/photography/hospitality/luxury-resort-room-2026-03-20-01-01-12-utc.jpg' ) ); ?>" alt="" loading="lazy" decoding="async" />
				</figure>
				<figure class="brand-manifesto__figure brand-manifesto__figure--accent reveal-mask">
					<img class="reveal-mask__target" src="<?php echo esc_url( intercoil_asset_uri( 'images/photography/hospitality/cozy-bedroom-setup-with-pillows-and-plant-2026-01-11-11-00-10-utc.jpg' ) ); ?>" alt="" loading="lazy" decoding="async" />
				</figure>
			</div>
		</div>
	</section>

	<section class="brand-stat" aria-labelledby="chapter-1-heading">
		<div class="inner-glow inner-glow--a" aria-hidden="true"></div>

		<div class="container brand-stat__inner">
			<p class="brand-stat__lead reveal-up">That commitment is reflected in a single fact.</p>

			<p class="brand-stat__figure reveal-up delay-1" aria-hidden="true">
				<span class="brand-stat__value">18</span>
				<span class="brand-stat__suffix">of 20</span>
			</p>

			<h2 class="brand-stat__title reveal-up delay-2" id="chapter-1-heading">Eighteen of the world&#8217;s top twenty hotel groups choose Simmons.</h2>
			<p class="brand-stat__text reveal-up delay-3">Not because it is available, but because nothing else meets their standard.</p>
		</div>
	</section>

	<section class="brand-chapter" aria-labelledby="chapter-2-heading">
		<div class="container brand-chapter__layout">
			<div class="brand-chapter__media">
				<figure class="brand-chapter__figure reveal-mask">
					<img class="reveal-mask__target" src="<?php echo esc_url( intercoil_asset_uri( 'images/photography/hospitality/modern-hotel-room-interior-with-wood-and-light-2026-03-17-05-02-46-utc.jpg' ) ); ?>" alt="" loading="lazy" decoding="async" />
				</figure>
				<figure class="brand-chapter__figure-accent reveal-mask">
					<img class="reveal-mask__target" src="<?php echo esc_url( intercoil_asset_uri( 'images/photography/hospitality/bedroom-inside-modern-luxurious-hotel-2026-03-24-04-04-23-utc.JPG' ) ); ?>" alt="" loading="lazy" decoding="async" />
				</figure>
			</div>

			<div class="brand-chapter__body">
				<span class="ghost-index" aria-hidden="true">02</span>
				<h2 class="brand-chapter__title reveal-up" id="chapter-2-heading">Where Hospitality Excellence Meets the Home</h2>
				<p class="brand-chapter__text reveal-up delay-1">Simmons built its reputation in the most demanding sleep environments on earth: five-star hotel rooms where guests expect perfection and operators cannot afford anything less. Every mattress is engineered to deliver the same restorative, consistent experience night after night, across thousands of rooms, across decades of use.</p>
				<p class="brand-chapter__text reveal-up delay-2">Through Intercoil&#8217;s exclusive manufacturing license, that same world-class specification is now available beyond the hotel corridor. Whether you are furnishing a landmark property or creating a bedroom worthy of the rest you deserve, every Simmons product crafted here meets the identical standard as those found in the world&#8217;s finest rooms.</p>
			</div>
		</div>
	</section>

	<section class="brand-chapter brand-chapter--reverse" aria-labelledby="chapter-3-heading">
		<div class="container brand-chapter__layout">
			<div class="brand-chapter__media">
				<figure class="brand-chapter__figure reveal-mask">
					<img class="reveal-mask__target" src="<?php echo esc_url( intercoil_asset_uri( 'images/photography/mattresses/close-up-of-a-hand-on-a-quilted-surface-2026-03-17-14-42-08-utc.jpg' ) ); ?>" alt="" loading="lazy" decoding="async" />
				</figure>
			</div>

			<div class="brand-chapter__body">
				<span class="ghost-index" aria-hidden="true">03</span>
				<h2 class="brand-chapter__title reveal-up" id="chapter-3-heading">Precision at Every Layer</h2>
				<p class="brand-chapter__text reveal-up delay-1">Simmons mattresses are built on advanced sleep technologies refined over generations of research and manufacturing expertise. Each product combines precision coil engineering, premium comfort layers, and rigorously tested materials to deliver support that is both immediate and enduring.</p>
				<p class="brand-chapter__text reveal-up delay-2">No shortcuts. No concessions. The same uncompromising quality, crafted to specification, every single time.</p>
			</div>
		</div>
	</section>

	<section class="brand-panorama" aria-labelledby="chapter-4-heading">
		<div class="brand-panorama__media" aria-hidden="true">
			<img class="brand-panorama__img" src="<?php echo esc_url( intercoil_asset_uri( 'images/photography/hospitality/3d-rendering-beautiful-luxury-bedroom-suite-in-hot-2026-03-17-04-32-19-utc.jpg' ) ); ?>" alt="" loading="lazy" decoding="async" />
			<div class="brand-panorama__overlay"></div>
		</div>

		<div class="container brand-panorama__inner">
			<h2 class="brand-panorama__title reveal-up" id="chapter-4-heading">The World&#8217;s Choice. Now Yours.</h2>
			<p class="brand-panorama__text reveal-up delay-1">When the world&#8217;s leading hospitality brands need sleep they can stand behind, they choose Simmons. Now, through Intercoil&#8217;s exclusive partnership, that choice is available to you.</p>
			<p class="brand-panorama__text reveal-up delay-2">Advanced technology. Uncompromising quality. A sleep experience trusted by the world&#8217;s finest properties, brought to life right here.</p>
		</div>
	</section>

	<?php
	get_template_part( 'template-parts/brand/closing', null, array(
		'quote'     => 'Advanced technology. Uncompromising quality.',
		'image'     => 'images/photography/hospitality/bedroom-inside-modern-luxurious-hotel-2026-03-24-04-04-23-utc.JPG',
		'cta_label' => 'Explore SIMMONS Products',
		'cta_url'   => intercoil_comfort_collection_url( 'mattresses' ),
	) );
	?>

</div>

<?php
get_footer();
