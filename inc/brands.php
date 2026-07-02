<?php
/**
 * Our Brands — landing + brand inner pages, static content (CMS later).
 *
 * Every brand entry below maps 1:1 onto the planned `intercoil_brand` CPT:
 * swap `intercoil_get_brands()` for a WP_Query + ACF field reads and the
 * templates keep working unchanged.
 *
 * @package Intercoil
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Slug of the Our Brands landing page.
 *
 * @return string
 */
function intercoil_brands_landing_slug() {
	return 'our-brands';
}

/**
 * Permalink for the Our Brands landing page, or homepage fallback.
 *
 * @return string
 */
function intercoil_brands_landing_url() {
	$page = get_page_by_path( intercoil_brands_landing_slug() );
	return $page ? get_permalink( $page ) : home_url( '/' );
}

/**
 * Permalink for a brand page (child of the landing page), or landing fallback.
 *
 * @param string $key Brand key.
 * @return string
 */
function intercoil_brand_page_url( $key ) {
	$brand = intercoil_get_brand( $key );
	if ( ! $brand ) {
		return intercoil_brands_landing_url();
	}

	$page = get_page_by_path( intercoil_brands_landing_slug() . '/' . $brand['page_slug'] );
	return $page ? get_permalink( $page ) : intercoil_brands_landing_url();
}

/**
 * A single brand definition.
 *
 * @param string $key Brand key.
 * @return array<string, mixed>|null
 */
function intercoil_get_brand( $key ) {
	$brands = intercoil_get_brands();
	return isset( $brands[ $key ] ) ? $brands[ $key ] : null;
}

/**
 * Static content for the brand portfolio. Copy sourced verbatim from the
 * approved "Our Brands" document — do not reword here.
 *
 * Chapter variants understood by template-parts/brand/layout.php:
 *   split    — editorial image/text row, alternates sides automatically
 *   panorama — full-bleed image band with centered copy
 *   stat     — oversized single-fact feature
 *   grid     — lead copy plus a set of short titled items
 *
 * @return array<string, array<string, mixed>>
 */
function intercoil_get_brands() {
	return array(

		'intercoil' => array(
			'key'           => 'intercoil',
			'name'          => 'Intercoil',
			'nav_label'     => 'Intercoil',
			'page_slug'     => 'intercoil',
			'template'      => 'page-templates/template-brand-intercoil.php',
			'logo'          => 'logos/brands/intercoil.png',
			'logo_class'    => '',
			'category'      => 'Mattresses',
			'hero_image'    => 'images/photography/brands/intercoil-brand-new.jpg',
			'hero_kicker'   => 'Some things are built to simply function.',
			'hero_title'    => 'Intercoil was built to restore.',
			'watermark'     => '1974',
			'manifesto'     => 'Intercoil is our original mattress brand, the name the company was founded on and the place our journey began.',
			'intro'         => array(
				'It has been refined and elevated over the years into a premium offering, carrying five decades of craftsmanship into mattresses built to a standard that holds from the first night to the thousandth.',
				'Since 1974, every mattress we have made has started with the same question: what does this person truly need to sleep well? The answer shapes everything. The materials we select. The technologies we combine. The way each layer is designed to work with the body, through the night, across years of use.',
			),
			'intro_primary' => 'images/photography/mattresses/close-up-of-a-hand-on-a-quilted-surface-2026-03-17-14-42-08-utc.jpg',
			'intro_accent'  => 'images/photography/manufacturing/mattressfoamfull.jpg',
			'facts'         => array(
				array( 'value' => '1974', 'label' => 'Where our journey began' ),
				array( 'value' => 'Five decades', 'label' => 'Of craftsmanship in every mattress' ),
				array( 'value' => 'First', 'label' => 'Accredited mattress testing laboratory in the Middle East' ),
			),
			'chapters'      => array(
				array(
					'variant' => 'split',
					'title'   => 'Made for Everybody. Every Stage of Life.',
					'paras'   => array(
						'Our iconic Evolution Series brings together open coil, pocket coil, and advanced foam technologies in fully customizable configurations, because no two people sleep the same way, and no great mattress pretends otherwise.',
					),
					'image'         => 'images/photography/mattresses/young-woman-shopper-choosing-new-bed-at-modern-fur-2026-01-06-09-17-00-utc.jpg',
					'image_accent'  => 'images/photography/mattresses/beds-mattresses-and-pillows-store-2026-03-24-15-20-22-utc.jpg',
				),
				array(
					'variant' => 'panorama',
					'title'   => 'Trusted by Science. Felt from the First Night.',
					'paras'   => array(
						'Every Intercoil mattress is tested in the Middle East\'s first accredited mattress testing laboratory and held to international human ecological standards. What you feel on the first night is what you will feel on the thousandth.',
					),
					'image'   => 'images/photography/manufacturing/man-working-at-industrial-machine-in-factory-2026-03-20-02-19-47-utc.jpg',
				),
			),
			'closing_line'  => 'Sleep well. Live better.',
			'closing_image' => 'images/photography/general/relaxing-bedroom-interior-with-bed-and-pillows-2026-03-10-04-02-05-utc.jpg',
			'cta_label'     => 'Explore Intercoil Products',
			'cta_target'    => 'mattresses',
			'excerpt'       => 'Intercoil is our original mattress brand, the name the company was founded on and the place our journey began.',
			'landing_line'  => 'Some things are built to simply function. Intercoil was built to restore.',
			'landing_image' => 'images/photography/brands/intercoil-brand-new.jpg',
		),

		'beautyrest' => array(
			'key'           => 'beautyrest',
			'name'          => 'Beautyrest by Simmons',
			'nav_label'     => 'Beautyrest by Simmons',
			'page_slug'     => 'beautyrest-by-simmons',
			'template'      => 'page-templates/template-brand-beautyrest.php',
			'logo'          => 'logos/brands/beautyrest.png',
			'logo_class'    => 'brand-hero__logo-wrap--wide',
			'category'      => '',
			'hero_image'    => 'images/photography/brands/beautyrestnew.jpg',
			'hero_kicker'   => 'The World Standard in Premium Sleep.',
			'hero_title'    => 'Now Crafted by Intercoil.',
			'watermark'     => 'Simmons',
			'manifesto'     => 'There are names that define a category. Simmons is one of them.',
			'intro'         => array(
				'Beautyrest is the flagship premium line of Simmons, the storied American sleep brand. As a US brand operating in the luxury segment, Beautyrest is recognized among the top international mattress names in the world, carrying a strong premium reputation built over a century of innovation. Through Intercoil\'s exclusive license, that same world-class specification is crafted and delivered here.',
				'For well over a century, Simmons has set the benchmark for premium sleep on a global scale, earning the trust of the world\'s most discerning hotels, resorts, and households through one consistent principle: sleep should never be compromised, regardless of where you are in the world.',
			),
			'intro_primary' => 'images/photography/hospitality/luxury-resort-room-2026-03-20-01-01-12-utc.jpg',
			'intro_accent'  => 'images/photography/hospitality/cozy-bedroom-setup-with-pillows-and-plant-2026-01-11-11-00-10-utc.jpg',
			'facts'         => array(),
			'chapters'      => array(
				array(
					'variant' => 'stat',
					'lead'    => 'That commitment is reflected in a single fact.',
					'value'   => '18',
					'suffix'  => 'of 20',
					'title'   => 'Eighteen of the world\'s top twenty hotel groups choose Simmons.',
					'paras'   => array(
						'Not because it is available, but because nothing else meets their standard.',
					),
				),
				array(
					'variant' => 'split',
					'title'   => 'Where Hospitality Excellence Meets the Home',
					'paras'   => array(
						'Simmons built its reputation in the most demanding sleep environments on earth: five-star hotel rooms where guests expect perfection and operators cannot afford anything less. Every mattress is engineered to deliver the same restorative, consistent experience night after night, across thousands of rooms, across decades of use.',
						'Through Intercoil\'s exclusive manufacturing license, that same world-class specification is now available beyond the hotel corridor. Whether you are furnishing a landmark property or creating a bedroom worthy of the rest you deserve, every Simmons product crafted here meets the identical standard as those found in the world\'s finest rooms.',
					),
					'image'         => 'images/photography/hospitality/modern-hotel-room-interior-with-wood-and-light-2026-03-17-05-02-46-utc.jpg',
					'image_accent'  => 'images/photography/hospitality/bedroom-inside-modern-luxurious-hotel-2026-03-24-04-04-23-utc.JPG',
				),
				array(
					'variant' => 'split',
					'reverse' => true,
					'title'   => 'Precision at Every Layer',
					'paras'   => array(
						'Simmons mattresses are built on advanced sleep technologies refined over generations of research and manufacturing expertise. Each product combines precision coil engineering, premium comfort layers, and rigorously tested materials to deliver support that is both immediate and enduring.',
						'No shortcuts. No concessions. The same uncompromising quality, crafted to specification, every single time.',
					),
					'image'   => 'images/photography/mattresses/close-up-of-a-hand-on-a-quilted-surface-2026-03-17-14-42-08-utc.jpg',
				),
				array(
					'variant' => 'panorama',
					'title'   => 'The World\'s Choice. Now Yours.',
					'paras'   => array(
						'When the world\'s leading hospitality brands need sleep they can stand behind, they choose Simmons. Now, through Intercoil\'s exclusive partnership, that choice is available to you.',
						'Advanced technology. Uncompromising quality. A sleep experience trusted by the world\'s finest properties, brought to life right here.',
					),
					'image'   => 'images/photography/hospitality/3d-rendering-beautiful-luxury-bedroom-suite-in-hot-2026-03-17-04-32-19-utc.jpg',
				),
			),
			'closing_line'  => 'Advanced technology. Uncompromising quality.',
			'closing_image' => 'images/photography/hospitality/bedroom-inside-modern-luxurious-hotel-2026-03-24-04-04-23-utc.JPG',
			'cta_label'     => 'Explore SIMMONS Products',
			'cta_target'    => 'mattresses',
			'excerpt'       => 'Beautyrest is the flagship premium line of Simmons, the storied American sleep brand.',
			'landing_line'  => 'The World Standard in Premium Sleep. Now Crafted by Intercoil.',
			'landing_image' => 'images/photography/brands/beautyrestnew.jpg',
		),

		'therapedic' => array(
			'key'           => 'therapedic',
			'name'          => 'THERAPEDIC',
			'nav_label'     => 'THERAPEDIC',
			'page_slug'     => 'therapedic',
			'template'      => 'page-templates/template-brand-therapedic.php',
			'logo'          => 'logos/brands/therapedic.png',
			'logo_class'    => '',
			'category'      => '',
			'hero_image'    => 'images/photography/brands/therapedicnew2.jpg',
			'hero_kicker'   => 'Over 50 Years of Sleep Innovation.',
			'hero_title'    => 'Engineered to Support the Way Your Body Truly Rests.',
			'watermark'     => 'Proof',
			'manifesto'     => 'Some brands are built on heritage. Therapedic is built on proof.',
			'intro'         => array(
				'A US brand positioned in the premium-mid segment, Therapedic delivers genuine, high-grade quality at an accessible price point. It is a name more households across the region are discovering, and one that consistently proves itself as a strong quality offering for those who want serious sleep engineering without the flagship price.',
				'Since its founding, Therapedic has dedicated itself to a single pursuit: understanding how the human body rests and engineering products that genuinely support it. Over five decades, that dedication has produced multiple patents in advanced sleep technologies and a global reputation built on one thing that cannot be faked: results.',
				'Through Intercoil\'s exclusive license for the Gulf Cooperation Council, Therapedic is crafted and delivered to the same exacting standard that has earned it trust across international markets.',
			),
			'intro_primary' => 'images/photography/mattresses/comfortable-mattress-and-soft-touch-for-good-sleep-2026-03-23-23-01-57-utc.jpg',
			'intro_accent'  => 'images/photography/manufacturing/cutting-pink-foam-with-an-electric-foam-cutter-2026-03-19-23-08-59-utc.jpg',
			'facts'         => array(
				array( 'value' => '50+', 'label' => 'Years of sleep innovation' ),
				array( 'value' => 'Multiple', 'label' => 'Patents in advanced sleep technologies' ),
				array( 'value' => 'GCC', 'label' => 'Exclusive license, crafted by Intercoil' ),
			),
			'chapters'      => array(
				array(
					'variant' => 'split',
					'title'   => 'Engineering Built Around the Body',
					'paras'   => array(
						'Therapedic products begin with science and end with sleep. Every mattress in the range is designed around a foundational principle: the body deserves support that truly works, not support that simply feels adequate in a showroom.',
						'That means durability that holds up long after the first year. Comfort that does not soften into inadequacy over time. And science-backed construction that works with the body\'s natural pressure points, weight distribution, and sleep posture to deliver deep, genuinely restorative rest.',
						'This is sleep engineering without compromise, built for people who understand the difference between a mattress and a truly supportive sleep system.',
					),
					'image'         => 'images/photography/manufacturing/man-s-hands-on-new-mattress-in-home-2026-03-27-01-39-20-utc.jpg',
					'image_accent'  => 'images/photography/mattresses/close-up-of-a-hand-on-a-quilted-surface-2026-03-17-14-42-08-utc.jpg',
				),
				array(
					'variant' => 'split',
					'reverse' => true,
					'title'   => 'Innovation With Purpose',
					'paras'   => array(
						'Behind every Therapedic product is a body of research spanning half a century. Multiple patents reflect a continuous commitment to doing better: developing smarter comfort layers, more durable support cores, and materials that perform across years of nightly use.',
						'At Intercoil, that innovation is brought to life with the same manufacturing precision and quality controls that define everything we produce. The result is a product that carries the full weight of Therapedic\'s global expertise, crafted to perform in every home it enters.',
					),
					'image'   => 'images/photography/manufacturing/a-focused-worker-is-operating-a-foam-cutter-at-his-2026-03-25-01-47-21-utc.jpg',
				),
				array(
					'variant' => 'panorama',
					'title'   => 'The Choice for Those Who Refuse to Compromise',
					'paras'   => array(
						'Therapedic is for customers who approach sleep the way they approach everything that matters: with high standards and no tolerance for cutting corners. If you expect your mattress to work as hard as you do and to last as long as you need it to, Therapedic was built for you.',
					),
					'image'   => 'images/photography/mattresses/beds-mattresses-and-pillows-store-2026-03-24-15-28-33-utc.jpg',
				),
			),
			'closing_line'  => 'Over 50 years of innovation. Science you can sleep on. Quality that endures.',
			'closing_image' => 'images/photography/mattresses/comfortable-mattress-and-soft-touch-for-good-sleep-2026-03-23-23-01-57-utc.jpg',
			'cta_label'     => 'Explore Therapedic Products',
			'cta_target'    => 'mattresses',
			'excerpt'       => 'Some brands are built on heritage. Therapedic is built on proof.',
			'landing_line'  => 'Over 50 Years of Sleep Innovation. Engineered to Support the Way Your Body Truly Rests.',
			'landing_image' => 'images/photography/brands/therapedicnew2.jpg',
		),

		'dolidol' => array(
			'key'           => 'dolidol',
			'name'          => 'Dolidol',
			'nav_label'     => 'Dolidol',
			'page_slug'     => 'dolidol',
			'template'      => 'page-templates/template-brand-dolidol.php',
			'logo'          => 'logos/brands/dolidol.png',
			'logo_class'    => 'brand-hero__logo-wrap--compact',
			'category'      => '',
			'hero_image'    => 'images/photography/brands/dolidol-newbanner.jpg',
			'hero_kicker'   => 'Five Decades of Sleep,',
			'hero_title'    => 'Now Crafted in the UAE.',
			'watermark'     => 'Home',
			'manifesto'     => 'Dolidol began with a simple conviction: that quality sleep belongs in every home.',
			'intro'         => array(
				'Over more than 50 years, it grew into one of the most trusted names in mattresses, earning its place not through claims but through comfort that families came back to, night after night. Through Intercoil\'s licence, that same heritage is now manufactured here in the UAE.',
			),
			'intro_primary' => 'images/photography/general/pillow-fight-fun-in-the-bedroom-at-home-2026-01-08-05-41-51-utc.jpg',
			'intro_accent'  => 'images/photography/general/bed-with-blue-striped-sheets-against-brick-wall-2026-03-19-07-09-29-utc.jpg',
			'facts'         => array(
				array( 'value' => '50+', 'label' => 'Years of trusted comfort' ),
				array( 'value' => 'Millions', 'label' => 'Of nights of proven sleep engineering' ),
				array( 'value' => 'UAE', 'label' => 'Now manufactured here, by Intercoil' ),
			),
			'chapters'      => array(
				array(
					'variant' => 'split',
					'title'   => 'A Mattress Heritage Built on Trust',
					'paras'   => array(
						'Mattresses are where Dolidol made its name. Five decades of craft have gone into how a Dolidol mattress supports the body, holds its comfort, and lasts through years of nightly use. It is sleep engineering proven across millions of nights, refined over generations, and now brought to the region with the manufacturing strength of Intercoil behind it.',
					),
					'image'         => 'images/photography/general/woman-making-bed-in-bright-airy-bedroom-2026-03-25-07-04-37-utc.jpg',
					'image_accent'  => 'images/photography/mattresses/comfortable-mattress-and-soft-touch-for-good-sleep-2026-03-23-23-01-57-utc.jpg',
				),
				array(
					'variant' => 'panorama',
					'title'   => 'Quality Rest, Within Reach',
					'paras'   => array(
						'Dolidol holds a clear place in the market: dependable, high-quality mattresses made genuinely accessible. It is built for families who want rest they can count on without overreaching, delivering honest comfort and lasting support at a price that makes sense. That balance of quality and value is what made the brand a leader, and it is what defines every Dolidol mattress today.',
					),
					'image'   => 'images/photography/general/bedroom-interior-with-bed-and-flowers-on-nightstan-2026-01-05-06-10-41-utc.jpg',
				),
			),
			'closing_line'  => 'Quality sleep belongs in every home.',
			'closing_image' => 'images/photography/general/bed-with-blue-striped-sheets-against-brick-wall-2026-03-19-07-09-29-utc.jpg',
			'cta_label'     => 'Explore Dolidol Products',
			'cta_target'    => 'mattresses',
			'excerpt'       => 'Dolidol began with a simple conviction: that quality sleep belongs in every home.',
			'landing_line'  => 'Five Decades of Sleep, Now Crafted in the UAE.',
			'landing_image' => 'images/photography/brands/dolidol-newbanner.jpg',
		),

		'ghalya' => array(
			'key'           => 'ghalya',
			'name'          => 'Ghalya\'s Bedding Collection',
			'nav_label'     => 'Ghalya\'s Bedding Collection',
			'page_slug'     => 'ghalyas-bedding-collection',
			'template'      => 'page-templates/template-brand-ghalya.php',
			'logo'          => 'logos/brands/ghalyanewlogo2.png',
			'logo_class'    => 'brand-hero__logo-wrap--tall',
			'category'      => '',
			'hero_image'    => 'images/photography/brands/ghalya.jpg',
			'hero_kicker'   => 'The First Sleep Brand Created Exclusively for Children.',
			'hero_title'    => 'Designed to Support Every Stage of Growing Up.',
			'watermark'     => 'Grow',
			'manifesto'     => 'Children do not simply sleep. They grow, develop, and restore in ways that are fundamentally different from adults.',
			'intro'         => array(
				'Their bodies are forming. Their minds are processing. Their sleep needs are specific, and the products that support them should be too.',
				'Ghalya\'s Bedding Collection was created with precisely that understanding. Developed by Intercoil in consultation with physicians from Medcare Hospital, Dubai, Ghalya\'s is a first of its kind: a sleep brand built entirely around the science of how children rest, recover, and grow.',
			),
			'intro_primary' => 'images/photography/hospitality/cozy-bedroom-setup-with-pillows-and-plant-2026-01-11-11-00-10-utc.jpg',
			'intro_accent'  => 'images/photography/general/bedroom-interior-with-pillows-and-white-bedding-2026-03-10-04-01-53-utc.jpg',
			'facts'         => array(
				array( 'value' => 'First', 'label' => 'Sleep brand created exclusively for children' ),
				array( 'value' => 'Medcare', 'label' => 'Developed with physicians from Medcare Hospital, Dubai' ),
				array( 'value' => 'Every stage', 'label' => 'From infancy through adolescence' ),
			),
			'chapters'      => array(
				array(
					'variant' => 'split',
					'title'   => 'Built on Medical Expertise',
					'paras'   => array(
						'Ghalya\'s was not designed by trend. It was designed by science, in direct collaboration with medical professionals who understand child development from the inside out. Every product in the collection reflects clinical insight translated into thoughtful, tangible design, ensuring that what surrounds a child during sleep actively supports their physical and cognitive wellbeing.',
						'From infancy through adolescence, the body\'s sleep requirements evolve significantly. Ghalya\'s evolves with them, offering products calibrated to the specific support, comfort, and safety needs of children at every stage of their growth.',
					),
					'image'         => 'images/photography/general/bedroom-interior-with-bed-plants-and-gold-frame-2026-03-10-04-03-45-utc.jpg',
					'image_accent'  => 'images/photography/general/woman-making-bed-in-bright-airy-bedroom-2026-03-25-07-04-37-utc.jpg',
				),
				array(
					'variant' => 'grid',
					'title'   => 'A Complete Sleep Environment, Designed for Children',
					'lead'    => 'Ghalya\'s goes beyond the mattress.',
					'items'   => array(
						array( 'title' => 'Mattresses', 'text' => 'Engineered for growing spines.' ),
						array( 'title' => 'Bedding Accessories', 'text' => 'Crafted from safe and certified materials.' ),
						array( 'title' => 'Headboards', 'text' => 'Designed with children\'s safety in mind.' ),
						array( 'title' => 'Nightstands', 'text' => 'Built to complement a nurturing sleep space.' ),
					),
					'paras'   => array(
						'Every single piece is developed with one guiding question: will this help this child sleep better?',
						'It is a simple question. But answering it well requires expertise, care, and an unwillingness to treat children\'s sleep as an afterthought.',
					),
				),
				array(
					'variant' => 'panorama',
					'title'   => 'Sleep That Supports a Lifetime',
					'paras'   => array(
						'The quality of sleep in childhood shapes everything that follows. Concentration, emotional balance, physical development, and long-term health are all rooted in the rest a child receives during their earliest and most formative years.',
						'Ghalya\'s exists because those years deserve more than a standard mattress. They deserve a sleep environment designed with the same precision, care, and commitment to wellbeing that Intercoil has brought to sleep for over fifty years, now focused entirely on the children who need it most.',
					),
					'image'   => 'images/photography/general/relaxing-bedroom-interior-with-bed-and-pillows-2026-03-10-04-02-05-utc.jpg',
				),
			),
			'closing_line'  => 'Healthy sleep in childhood is the foundation for everything that follows. Ghalya\'s is where that foundation is built.',
			'closing_image' => 'images/photography/brands/ghalya.jpg',
			'cta_label'     => 'Explore Ghalya\'s Bedding Collection',
			'cta_target'    => 'bedding',
			'excerpt'       => 'A first of its kind: a sleep brand built entirely around the science of how children rest, recover, and grow.',
			'landing_line'  => 'The First Sleep Brand Created Exclusively for Children.',
			'landing_image' => 'images/photography/brands/ghalya.jpg',
		),

		'bedroom' => array(
			'key'           => 'bedroom',
			'name'          => 'The Bedroom by Intercoil',
			'nav_label'     => 'The Bedroom by Intercoil',
			'page_slug'     => 'the-bedroom-by-intercoil',
			'template'      => 'page-templates/template-brand-bedroom.php',
			'logo'          => 'logos/brands/newbedroomlogo.png',
			'logo_class'    => 'brand-hero__logo-wrap--wide',
			'category'      => '',
			'hero_image'    => 'images/photography/brands/showroom.jpg',
			'hero_kicker'   => 'Where Premium Sleep Becomes an Experience',
			'hero_title'    => 'You Can See, Feel, and Take Home.',
			'watermark'     => 'Gallery',
			'manifesto'     => 'The products that shape how you sleep deserve more than a shelf and a price tag.',
			'intro'         => array(
				'They deserve a space that reflects their quality, a setting that allows you to truly experience them, and guidance from people who understand sleep as well as the products themselves.',
				'That is what The Bedroom was created to be.',
			),
			'intro_primary' => 'images/photography/showroom/DSC_7919-1080x675-1.png',
			'intro_accent'  => 'images/photography/brands/bedroom.jpg',
			'facts'         => array(
				array( 'value' => 'UAE & KSA', 'label' => 'Multiple locations across key markets, and beyond' ),
				array( 'value' => 'One roof', 'label' => 'Mattresses, bedding, and bedroom furniture together' ),
				array( 'value' => 'Specialists', 'label' => 'Personalized guidance from sleep specialists' ),
			),
			'chapters'      => array(
				array(
					'variant' => 'split',
					'title'   => 'A New Kind of Sleep Destination',
					'paras'   => array(
						'The Bedroom is Intercoil\'s dedicated retail concept: a premium sleep gallery where mattresses, bedding, and bedroom furniture come together in one thoughtfully designed space. Every element of the store is built to reflect the same standard as the products within it. Clean, considered, and calm, it is an environment that invites you to slow down, explore, and make a choice you will feel the benefit of every single night.',
						'This is not a showroom in the conventional sense. It is a destination for people who understand that the bedroom is the most important room in any home, and who approach furnishing it with the care that understanding demands.',
					),
					'image'         => 'images/photography/showroom/DSC_7919-1080x675-1.png',
					'image_accent'  => 'images/photography/mattresses/beds-mattresses-and-pillows-store-2026-01-09-08-12-13-utc.jpg',
				),
				array(
					'variant' => 'split',
					'reverse' => true,
					'title'   => 'Personalized Guidance at Every Step',
					'paras'   => array(
						'Sleep is personal. No two bodies rest the same way, and no two households have identical needs. The Bedroom is staffed by sleep specialists who take the time to understand yours: your sleep behavior, your comfort preferences, your space, and your lifestyle.',
						'Whether you are selecting a single mattress or furnishing an entire bedroom from scratch, every consultation is tailored, unhurried, and built around finding the right solution for you specifically.',
					),
					'image'   => 'images/photography/manufacturing/handsome-male-customer-sitting-on-new-bed-at-furni-2026-01-06-08-58-01-utc.jpg',
				),
				array(
					'variant' => 'panorama',
					'title'   => 'Everything in One Space',
					'paras'   => array(
						'From the mattress that forms the foundation of your sleep to the bedding that completes it, and the furniture that frames the entire environment, The Bedroom brings the full Intercoil sleep ecosystem together under one roof. Explore the complete range of mattresses, test them properly, pair them with the right accessories, and leave with a sleep setup that was chosen with genuine intention.',
					),
					'image'   => 'images/photography/mattresses/beds-mattresses-and-pillows-store-2026-03-24-15-20-22-utc.jpg',
				),
				array(
					'variant' => 'split',
					'title'   => 'Present Across Key Markets',
					'paras'   => array(
						'With multiple locations across the UAE, KSA, and beyond, The Bedroom brings the Intercoil premium sleep experience within reach. Each location is designed to the same standard, offering the same level of expertise and the same quality of experience, wherever you find us.',
					),
					'image'   => 'images/photography/brands/bedroom.jpg',
				),
			),
			'closing_line'  => 'Premium sleep is something you live with every day. The Bedroom is where that life begins.',
			'closing_image' => 'images/photography/general/elegant-bedroom-interior-with-bed-and-decoration-2026-03-10-03-05-55-utc.jpg',
			'cta_label'     => 'Discover The Bedroom Products',
			'cta_target'    => 'beds',
			'excerpt'       => 'A premium sleep gallery where mattresses, bedding, and bedroom furniture come together in one thoughtfully designed space.',
			'landing_line'  => 'Where Premium Sleep Becomes an Experience You Can See, Feel, and Take Home.',
			'landing_image' => 'images/photography/brands/showroom.jpg',
		),

	);
}

/**
 * Resolve the CTA URL for a brand ("Explore … Products").
 *
 * @param array $brand Brand definition.
 * @return string
 */
function intercoil_brand_cta_url( $brand ) {
	if ( empty( $brand['cta_target'] ) ) {
		return home_url( '/' );
	}
	return intercoil_comfort_collection_url( $brand['cta_target'] );
}

/**
 * Nav label => brand key map, for fallback menu URL resolution.
 *
 * @return array<string, string>
 */
function intercoil_brand_nav_labels() {
	$map = array();
	foreach ( intercoil_get_brands() as $key => $brand ) {
		$map[ $brand['nav_label'] ] = $key;
	}

	// Legacy label kept so older menus still resolve.
	$map['Ghalya by Intercoil'] = 'ghalya';

	return $map;
}

/**
 * Render a brand inner page.
 *
 * @param string $key Brand key.
 */
function intercoil_render_brand_page( $key ) {
	$brand = intercoil_get_brand( $key );
	if ( ! $brand ) {
		return;
	}

	set_query_var( 'intercoil_brand', $brand );
	get_template_part( 'template-parts/brand/layout' );
}

/**
 * Brand page template slugs (landing + inner pages) for asset enqueue.
 *
 * @return array<int, string>
 */
function intercoil_brand_page_templates() {
	$templates = array( 'page-templates/template-our-brands.php' );

	foreach ( intercoil_get_brands() as $brand ) {
		$templates[] = $brand['template'];
	}

	return $templates;
}
