<?php
/**
 * Template Name: Brand — Ghalya's Bedding Collection
 *
 * @package Intercoil
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<div class="intercoil-inner-page brand-page brand-page--ghalya">

	<?php
	get_template_part( 'template-parts/brand/hero', null, array(
		'hero_image' => 'images/photography/brands/ghalya.jpg',
		'logo'       => 'logos/brands/ghalyanewlogo2.png',
		'logo_class' => 'brand-hero__logo-wrap--tall',
		'name'       => "Ghalya's Bedding Collection",
		'kicker'     => 'The First Sleep Brand Created Exclusively for Children.',
		'headline'   => 'Designed to Support Every Stage of Growing Up.',
	) );
	?>

	<section class="brand-manifesto" aria-labelledby="brand-manifesto-heading">
		<div class="brand-manifesto__watermark" aria-hidden="true">Grow</div>

		<div class="container brand-manifesto__layout">
			<div class="brand-manifesto__copy">
				<h2 class="inner-visually-hidden" id="brand-manifesto-heading">Ghalya&#8217;s Bedding Collection</h2>
				<p class="brand-manifesto__statement reveal-up">Children do not simply sleep. They grow, develop, and restore in ways that are fundamentally different from adults.</p>

				<p class="brand-manifesto__prose reveal-up delay-1">Their bodies are forming. Their minds are processing. Their sleep needs are specific, and the products that support them should be too.</p>
				<p class="brand-manifesto__prose reveal-up delay-2">Ghalya&#8217;s Bedding Collection was created with precisely that understanding. Developed by Intercoil in consultation with physicians from Medcare Hospital, Dubai, Ghalya&#8217;s is a first of its kind: a sleep brand built entirely around the science of how children rest, recover, and grow.</p>
			</div>

			<div class="brand-manifesto__visual">
				<div class="brand-manifesto__panel" aria-hidden="true"></div>
				<figure class="brand-manifesto__figure brand-manifesto__figure--primary reveal-mask">
					<img class="reveal-mask__target" src="<?php echo esc_url( intercoil_asset_uri( 'images/photography/hospitality/cozy-bedroom-setup-with-pillows-and-plant-2026-01-11-11-00-10-utc.jpg' ) ); ?>" alt="" loading="lazy" decoding="async" />
				</figure>
				<figure class="brand-manifesto__figure brand-manifesto__figure--accent reveal-mask">
					<img class="reveal-mask__target" src="<?php echo esc_url( intercoil_asset_uri( 'images/photography/general/bedroom-interior-with-pillows-and-white-bedding-2026-03-10-04-01-53-utc.jpg' ) ); ?>" alt="" loading="lazy" decoding="async" />
				</figure>
			</div>
		</div>
	</section>

	<section class="brand-facts" aria-label="Ghalya's Bedding Collection at a glance">
		<div class="container">
			<dl class="brand-facts__row">
				<div class="brand-facts__item reveal-up delay-1">
					<dt class="brand-facts__value">First</dt>
					<dd class="brand-facts__label">Sleep brand created exclusively for children</dd>
				</div>
				<div class="brand-facts__item reveal-up delay-2">
					<dt class="brand-facts__value">Medcare</dt>
					<dd class="brand-facts__label">Developed with physicians from Medcare Hospital, Dubai</dd>
				</div>
				<div class="brand-facts__item reveal-up delay-3">
					<dt class="brand-facts__value">Every stage</dt>
					<dd class="brand-facts__label">From infancy through adolescence</dd>
				</div>
			</dl>
		</div>
	</section>

	<section class="brand-chapter" aria-labelledby="chapter-1-heading">
		<div class="container brand-chapter__layout">
			<div class="brand-chapter__media">
				<figure class="brand-chapter__figure reveal-mask">
					<img class="reveal-mask__target" src="<?php echo esc_url( intercoil_asset_uri( 'images/photography/general/bedroom-interior-with-bed-plants-and-gold-frame-2026-03-10-04-03-45-utc.jpg' ) ); ?>" alt="" loading="lazy" decoding="async" />
				</figure>
				<figure class="brand-chapter__figure-accent reveal-mask">
					<img class="reveal-mask__target" src="<?php echo esc_url( intercoil_asset_uri( 'images/photography/general/woman-making-bed-in-bright-airy-bedroom-2026-03-25-07-04-37-utc.jpg' ) ); ?>" alt="" loading="lazy" decoding="async" />
				</figure>
			</div>

			<div class="brand-chapter__body">
				<span class="ghost-index" aria-hidden="true">01</span>
				<h2 class="brand-chapter__title reveal-up" id="chapter-1-heading">Built on Medical Expertise</h2>
				<p class="brand-chapter__text reveal-up delay-1">Ghalya&#8217;s was not designed by trend. It was designed by science, in direct collaboration with medical professionals who understand child development from the inside out. Every product in the collection reflects clinical insight translated into thoughtful, tangible design, ensuring that what surrounds a child during sleep actively supports their physical and cognitive wellbeing.</p>
				<p class="brand-chapter__text reveal-up delay-2">From infancy through adolescence, the body&#8217;s sleep requirements evolve significantly. Ghalya&#8217;s evolves with them, offering products calibrated to the specific support, comfort, and safety needs of children at every stage of their growth.</p>
			</div>
		</div>
	</section>

	<section class="brand-grid" aria-labelledby="chapter-2-heading">
		<div class="inner-glow inner-glow--b" aria-hidden="true"></div>

		<div class="container">
			<div class="brand-grid__head">
				<h2 class="brand-grid__title reveal-up" id="chapter-2-heading">A Complete Sleep Environment, Designed for Children</h2>
				<p class="brand-grid__lead reveal-up delay-1">Ghalya&#8217;s goes beyond the mattress.</p>
			</div>

			<div class="brand-grid__items">
				<article class="brand-grid__item reveal-up delay-1">
					<span class="ghost-index" aria-hidden="true">01</span>
					<h3 class="brand-grid__item-title">Mattresses</h3>
					<p class="brand-grid__item-text">Engineered for growing spines.</p>
				</article>
				<article class="brand-grid__item reveal-up delay-2">
					<span class="ghost-index" aria-hidden="true">02</span>
					<h3 class="brand-grid__item-title">Bedding Accessories</h3>
					<p class="brand-grid__item-text">Crafted from safe and certified materials.</p>
				</article>
				<article class="brand-grid__item reveal-up delay-3">
					<span class="ghost-index" aria-hidden="true">03</span>
					<h3 class="brand-grid__item-title">Headboards</h3>
					<p class="brand-grid__item-text">Designed with children&#8217;s safety in mind.</p>
				</article>
				<article class="brand-grid__item reveal-up delay-4">
					<span class="ghost-index" aria-hidden="true">04</span>
					<h3 class="brand-grid__item-title">Nightstands</h3>
					<p class="brand-grid__item-text">Built to complement a nurturing sleep space.</p>
				</article>
			</div>

			<div class="brand-grid__after">
				<p class="brand-grid__after-text reveal-up delay-1">Every single piece is developed with one guiding question: will this help this child sleep better?</p>
				<p class="brand-grid__after-text reveal-up delay-2">It is a simple question. But answering it well requires expertise, care, and an unwillingness to treat children&#8217;s sleep as an afterthought.</p>
			</div>
		</div>
	</section>

	<section class="brand-panorama" aria-labelledby="chapter-3-heading">
		<div class="brand-panorama__media" aria-hidden="true">
			<img class="brand-panorama__img" src="<?php echo esc_url( intercoil_asset_uri( 'images/photography/general/relaxing-bedroom-interior-with-bed-and-pillows-2026-03-10-04-02-05-utc.jpg' ) ); ?>" alt="" loading="lazy" decoding="async" />
			<div class="brand-panorama__overlay"></div>
		</div>

		<div class="container brand-panorama__inner">
			<h2 class="brand-panorama__title reveal-up" id="chapter-3-heading">Sleep That Supports a Lifetime</h2>
			<p class="brand-panorama__text reveal-up delay-1">The quality of sleep in childhood shapes everything that follows. Concentration, emotional balance, physical development, and long-term health are all rooted in the rest a child receives during their earliest and most formative years.</p>
			<p class="brand-panorama__text reveal-up delay-2">Ghalya&#8217;s exists because those years deserve more than a standard mattress. They deserve a sleep environment designed with the same precision, care, and commitment to wellbeing that Intercoil has brought to sleep for over fifty years, now focused entirely on the children who need it most.</p>
		</div>
	</section>

	<?php
	get_template_part( 'template-parts/brand/closing', null, array(
		'quote'     => 'Healthy sleep in childhood is the foundation for everything that follows. Ghalya’s is where that foundation is built.',
		'image'     => 'images/photography/brands/ghalya.jpg',
		'cta_label' => "Explore Ghalya's Bedding Collection",
		'cta_url'   => intercoil_comfort_collection_url( 'bedding' ),
	) );
	?>

</div>

<?php
get_footer();
