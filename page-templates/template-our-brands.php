<?php
/**
 * Template Name: Our Brands
 *
 * Portfolio landing page — introduces all Intercoil brands and links to
 * each brand inner page.
 *
 * @package Intercoil
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$home_url = home_url( '/' );

get_header();
?>

<div class="intercoil-inner-page brands-landing">

	<header class="inner-hero inner-hero--tall brands-hero" aria-labelledby="brands-hero-heading">
		<div class="inner-hero__bg" aria-hidden="true">
			<div class="brands-hero__collage">
				<div class="brands-hero__tile brands-hero__tile--1">
					<img src="<?php echo esc_url( intercoil_asset_uri( 'images/photography/brands/intercoil-brand-new.jpg' ) ); ?>" alt="" loading="eager" decoding="async" />
				</div>
				<div class="brands-hero__tile brands-hero__tile--2">
					<img src="<?php echo esc_url( intercoil_asset_uri( 'images/photography/hospitality/luxury-resort-room-2026-03-20-01-01-12-utc.jpg' ) ); ?>" alt="" loading="eager" decoding="async" />
				</div>
				<div class="brands-hero__tile brands-hero__tile--3">
					<img src="<?php echo esc_url( intercoil_asset_uri( 'images/photography/brands/showroom.jpg' ) ); ?>" alt="" loading="eager" decoding="async" />
				</div>
			</div>
			<div class="inner-hero__overlay"></div>
			<div class="inner-hero__glow inner-hero__glow--left"></div>
			<div class="inner-hero__glow inner-hero__glow--right"></div>
			<div class="inner-hero__grain"></div>
		</div>

		<div class="inner-hero__vignette" aria-hidden="true"></div>

		<div class="container inner-hero__content">
			<span class="section-label section-label--light inner-hero__eyebrow">Our Brands</span>
			<h1 class="inner-hero__title inner-hero__title--display" id="brands-hero-heading">
				<span class="inner-hero__title-line inner-hero__title-line--light">Trusted Names.</span>
				<span class="inner-hero__title-line inner-hero__title-line--bold brands-hero__headline">Distinct Purpose.</span>
			</h1>
			<p class="inner-hero__tagline">A portfolio of trusted sleep and bedroom brands, designed to serve every lifestyle, every market, and every standard of comfort.</p>
		</div>

		<nav class="brands-hero__marques" aria-label="Jump to a brand">
			<div class="container brands-hero__marques-row">
				<a class="brands-hero__marque" href="#brand-intercoil">
					<img src="<?php echo esc_url( intercoil_asset_uri( 'logos/brands/intercoil.png' ) ); ?>" alt="Intercoil" loading="eager" decoding="async" />
				</a>
				<a class="brands-hero__marque" href="#brand-beautyrest">
					<img src="<?php echo esc_url( intercoil_asset_uri( 'logos/brands/beautyrest.png' ) ); ?>" alt="Beautyrest by Simmons" loading="eager" decoding="async" />
				</a>
				<a class="brands-hero__marque" href="#brand-therapedic">
					<img src="<?php echo esc_url( intercoil_asset_uri( 'logos/brands/therapedic.png' ) ); ?>" alt="THERAPEDIC" loading="eager" decoding="async" />
				</a>
				<a class="brands-hero__marque" href="#brand-dolidol">
					<img src="<?php echo esc_url( intercoil_asset_uri( 'logos/brands/dolidol.png' ) ); ?>" alt="Dolidol" loading="eager" decoding="async" />
				</a>
				<a class="brands-hero__marque" href="#brand-ghalya">
					<img src="<?php echo esc_url( intercoil_asset_uri( 'logos/brands/ghalyanewlogo2.png' ) ); ?>" alt="Ghalya's Bedding Collection" loading="eager" decoding="async" />
				</a>
				<a class="brands-hero__marque" href="#brand-bedroom">
					<img src="<?php echo esc_url( intercoil_asset_uri( 'logos/brands/newbedroomlogo.png' ) ); ?>" alt="The Bedroom by Intercoil" loading="eager" decoding="async" />
				</a>
			</div>
		</nav>

		<div class="inner-hero__fade" aria-hidden="true"></div>
	</header>

	<section class="brands-index" aria-label="The Intercoil brand portfolio">

		<?php
		get_template_part( 'template-parts/brand/index-row', null, array(
			'key'     => 'intercoil',
			'number'  => '01',
			'reverse' => false,
			'image'   => 'images/photography/brands/intercoil-brand-new.jpg',
			'logo'    => 'logos/brands/intercoil.png',
			'name'    => 'Intercoil',
			'line'    => 'Some things are built to simply function. Intercoil was built to restore.',
			'excerpt' => 'Intercoil is our original mattress brand, the name the company was founded on and the place our journey began.',
			'url'     => intercoil_brand_page_url( 'intercoil' ),
		) );

		get_template_part( 'template-parts/brand/index-row', null, array(
			'key'     => 'beautyrest',
			'number'  => '02',
			'reverse' => true,
			'image'   => 'images/photography/brands/beautyrestnew.jpg',
			'logo'    => 'logos/brands/beautyrest.png',
			'name'    => 'Beautyrest by Simmons',
			'line'    => 'The World Standard in Premium Sleep. Now Crafted by Intercoil.',
			'excerpt' => 'Beautyrest is the flagship premium line of Simmons, the storied American sleep brand.',
			'url'     => intercoil_brand_page_url( 'beautyrest' ),
		) );

		get_template_part( 'template-parts/brand/index-row', null, array(
			'key'     => 'therapedic',
			'number'  => '03',
			'reverse' => false,
			'image'   => 'images/photography/brands/therapedicnew2.jpg',
			'logo'    => 'logos/brands/therapedic.png',
			'name'    => 'THERAPEDIC',
			'line'    => 'Over 50 Years of Sleep Innovation. Engineered to Support the Way Your Body Truly Rests.',
			'excerpt' => 'Some brands are built on heritage. Therapedic is built on proof.',
			'url'     => intercoil_brand_page_url( 'therapedic' ),
		) );

		get_template_part( 'template-parts/brand/index-row', null, array(
			'key'     => 'dolidol',
			'number'  => '04',
			'reverse' => true,
			'image'   => 'images/photography/brands/dolidol-newbanner.jpg',
			'logo'    => 'logos/brands/dolidol.png',
			'name'    => 'Dolidol',
			'line'    => 'Five Decades of Sleep, Now Crafted in the UAE.',
			'excerpt' => 'Dolidol began with a simple conviction: that quality sleep belongs in every home.',
			'url'     => intercoil_brand_page_url( 'dolidol' ),
		) );

		get_template_part( 'template-parts/brand/index-row', null, array(
			'key'     => 'ghalya',
			'number'  => '05',
			'reverse' => false,
			'image'   => 'images/photography/brands/ghalya.jpg',
			'logo'    => 'logos/brands/ghalyanewlogo2.png',
			'name'    => "Ghalya's Bedding Collection",
			'line'    => 'The First Sleep Brand Created Exclusively for Children.',
			'excerpt' => "A first of its kind: a sleep brand built entirely around the science of how children rest, recover, and grow.",
			'url'     => intercoil_brand_page_url( 'ghalya' ),
		) );

		get_template_part( 'template-parts/brand/index-row', null, array(
			'key'     => 'bedroom',
			'number'  => '06',
			'reverse' => true,
			'image'   => 'images/photography/brands/showroom.jpg',
			'logo'    => 'logos/brands/newbedroomlogo.png',
			'name'    => 'The Bedroom by Intercoil',
			'line'    => 'Where Premium Sleep Becomes an Experience You Can See, Feel, and Take Home.',
			'excerpt' => 'A premium sleep gallery where mattresses, bedding, and bedroom furniture come together in one thoughtfully designed space.',
			'url'     => intercoil_brand_page_url( 'bedroom' ),
		) );
		?>

	</section>

	<section class="brands-outro" aria-labelledby="brands-outro-heading">
		<div class="brands-outro__media" aria-hidden="true">
			<img
				class="brands-outro__img"
				src="<?php echo esc_url( intercoil_asset_uri( 'images/photography/general/elegant-bedroom-interior-with-bed-and-decoration-2026-03-10-03-05-55-utc.jpg' ) ); ?>"
				alt=""
				loading="lazy"
				decoding="async"
			/>
			<div class="brands-outro__overlay"></div>
		</div>

		<div class="container brands-outro__inner">
			<blockquote class="brands-outro__quote" id="brands-outro-heading">
				Sleep, Crafted to Perfection.
			</blockquote>
			<div class="brands-outro__actions">
				<a href="<?php echo esc_url( $home_url . '#collections' ); ?>" class="brand-btn brand-btn--primary">
					Explore Collections
					<span class="brand-btn__arrow" aria-hidden="true">&rarr;</span>
				</a>
				<a href="<?php echo esc_url( $home_url . '#contact' ); ?>" class="brand-btn brand-btn--ghost">
					Get in Touch
				</a>
			</div>
		</div>
	</section>

</div>

<?php
get_footer();
