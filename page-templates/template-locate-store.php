<?php
/**
 * Template Name: Locate a Store
 *
 * @package Intercoil
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$regions = array(
	'all'     => 'All',
	'uae'     => 'UAE',
	'ksa'     => 'KSA',
	'lebanon' => 'Lebanon',
	'oman'    => 'Oman',
	'egypt'   => 'Egypt',
);

$stores = array(
	array(
		'name'    => 'Mirdif City Centre-Dubai',
		'address' => 'Mirdif City Centre, 1st Floor, Central Galleria Entrance Next to Marina Gulf, Mirdif',
		'city'    => 'Dubai, United Arab Emirates',
		'phones'  => array( '+971 4 259 1221' ),
		'lat'     => 25.217699,
		'lng'     => 55.408167,
		'region'  => 'uae',
	),
	array(
		'name'    => 'Al Barsha-Dubai',
		'address' => 'Umm Suqeim Rd, Opp. Mall of the Emirates, Behind the Traffic Dept. Al Barsha',
		'city'    => 'Dubai, United Arab Emirates',
		'phones'  => array( '+971 4 347 5505' ),
		'lat'     => 25.121007,
		'lng'     => 55.205957,
		'region'  => 'uae',
	),
	array(
		'name'    => 'Crystal Plaza Centre-Sharjah',
		'address' => 'Corniche Rd. Crystal Plaza Centre, Ground Floor, Next to Dr. Nutrition Center',
		'city'    => 'Sharjah, United Arab Emirates',
		'phones'  => array( '+971 6 5505590' ),
		'lat'     => 25.3575,
		'lng'     => 55.390833,
		'region'  => 'uae',
	),
	array(
		'name'    => 'Sahara Centre-Sharjah',
		'address' => '1st Floor, Sahara Centre, Al Nahda 1',
		'city'    => 'Sharjah, United Arab Emirates',
		'phones'  => array( '+971 6 524 6164' ),
		'lat'     => 25.298396,
		'lng'     => 55.375725,
		'region'  => 'uae',
	),
	array(
		'name'    => 'Al Ain Mall Showroom-AL Ain',
		'address' => 'Kuwaitat Rd. Al Ain Mall, Ground Floor, Next to Al Waseet, Al Ain',
		'city'    => 'United Arab Emirates',
		'phones'  => array( '+971 3 7660206', '+971 3 7660207' ),
		'lat'     => 24.222301,
		'lng'     => 55.780442,
		'region'  => 'uae',
	),
	array(
		'name'    => 'Ras Al Khaimah Showroom',
		'address' => 'Shop No.3, Al Nadhya Building, Sheikh Mohammad bin Salem Road - Ras al Khaimah',
		'city'    => 'United Arab Emirates',
		'phones'  => array( '07 235 5646' ),
		'lat'     => 25.759915,
		'lng'     => 55.915455,
		'region'  => 'uae',
	),
	array(
		'name'    => 'Al-Dammam Showroom-KSA',
		'address' => 'King Abdul Aziz Street, Facing SAAB bank, Al-Dammam',
		'city'    => 'Eastern Province, Kingdom of Saudi Arabia',
		'phones'  => array( '+966 3 8170909' ),
		'lat'     => 26.451872,
		'lng'     => 50.075228,
		'region'  => 'ksa',
	),
	array(
		'name'    => 'Al-Khobar Showroom-KSA',
		'address' => 'King Abdul Aziz Street, Crossing #10, Loukman Bldg., Al-Khobar',
		'city'    => 'Eastern Province, Kingdom of Saudi Arabia',
		'phones'  => array( '+966 3 8839729' ),
		'lat'     => 26.290472,
		'lng'     => 50.207047,
		'region'  => 'ksa',
	),
	array(
		'name'    => 'Jnah Showroom-Lebanon',
		'address' => 'Khoury Home Building, Jnah',
		'city'    => 'Beirut, Lebanon',
		'phones'  => array( '+961 1 843006' ),
		'lat'     => 33.867752,
		'lng'     => 35.4908556,
		'region'  => 'lebanon',
	),
	array(
		'name'    => 'Mekalles Showroom-Lebanon',
		'address' => 'Facing BankMED, Next to Sakff, Mekalles',
		'city'    => 'Beirut, Lebanon',
		'phones'  => array( '+961 1 696496' ),
		'lat'     => 33.865489,
		'lng'     => 35.546072,
		'region'  => 'lebanon',
	),
	array(
		'name'    => 'Salalah Showroom-Salalah',
		'address' => 'Najah Crossing, New Salalah Road',
		'city'    => 'Oman, Sultanate of Oman',
		'phones'  => array( '+968 2 3298603' ),
		'lat'     => 17.020405,
		'lng'     => 54.081917,
		'region'  => 'oman',
	),
	array(
		'name'    => 'Al Khuwair St. - Muscat',
		'address' => 'Al Khuwair Building, Al Khuwair Main Street, Muscat',
		'city'    => 'Oman',
		'phones'  => array( '+968 24 298822' ),
		'lat'     => 23.594204,
		'lng'     => 58.4352,
		'region'  => 'oman',
	),
	array(
		'name'    => 'Cairo Festival City-Egypt',
		'address' => 'Cairo Festival City',
		'city'    => 'Cairo Governorate, Egypt',
		'phones'  => array( '+20 109 919 2331' ),
		'lat'     => 30.029257,
		'lng'     => 31.408414,
		'region'  => 'egypt',
	),
);

get_header();
?>

<div class="intercoil-inner-page locate-page">

	<header class="inner-hero inner-hero--compact locate-hero" aria-labelledby="locate-hero-heading">
		<div class="inner-hero__bg" aria-hidden="true">
			<img
				class="inner-hero__img locate-hero__img"
				src="<?php echo esc_url( intercoil_asset_uri( 'images/photography/mattresses/beds-mattresses-and-pillows-store-2026-03-24-15-28-33-utc.jpg' ) ); ?>"
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
			<span class="section-label section-label--light inner-hero__eyebrow">The Bedroom by Intercoil</span>
			<h1 class="inner-hero__title inner-hero__title--simple" id="locate-hero-heading">Locate a Store</h1>
			<p class="inner-hero__tagline">Explore our full range of sleep solutions, crafted for comfort, innovation, and healthier living.</p>
		</div>

		<div class="inner-hero__fade" aria-hidden="true"></div>
	</header>

	<section class="locate-finder" aria-labelledby="locate-finder-heading">
		<div class="container">
			<h2 class="inner-visually-hidden" id="locate-finder-heading">Store finder</h2>

			<div class="locate-controls reveal-up">
				<label class="locate-search">
					<svg class="locate-search__icon" viewBox="0 0 20 20" fill="none" aria-hidden="true" focusable="false">
						<circle cx="9" cy="9" r="6.25" stroke="currentColor" stroke-width="1.5" />
						<path d="M13.75 13.75 L17.5 17.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
					</svg>
					<span class="inner-visually-hidden"><?php esc_html_e( 'Search stores', 'intercoil' ); ?></span>
					<input
						type="search"
						class="locate-search__input"
						id="locate-search"
						placeholder="<?php esc_attr_e( 'Search by store, city, or address', 'intercoil' ); ?>"
						autocomplete="off"
						spellcheck="false"
					/>
				</label>

				<div class="locate-filters" role="group" aria-label="<?php esc_attr_e( 'Filter stores by country', 'intercoil' ); ?>">
					<?php foreach ( $regions as $region_key => $region_label ) : ?>
						<button
							type="button"
							class="locate-filter<?php echo 'all' === $region_key ? ' is-active' : ''; ?>"
							data-region="<?php echo esc_attr( $region_key ); ?>"
							aria-pressed="<?php echo 'all' === $region_key ? 'true' : 'false'; ?>"
						><?php echo esc_html( $region_label ); ?></button>
					<?php endforeach; ?>
				</div>
			</div>

			<div class="locate-layout">
				<div class="locate-rail reveal-up delay-1">
					<ol class="locate-list" id="locate-list" role="list">
						<?php foreach ( $stores as $i => $store ) : ?>
							<?php
							$primary_tel    = 'tel:' . preg_replace( '/[^0-9+]/', '', $store['phones'][0] );
							$directions_url = 'https://www.google.com/maps/dir/?api=1&destination=' . rawurlencode( $store['lat'] . ',' . $store['lng'] );
							?>
							<li
								class="locate-card"
								data-store="<?php echo (int) $i; ?>"
								data-region="<?php echo esc_attr( $store['region'] ); ?>"
								data-lat="<?php echo esc_attr( $store['lat'] ); ?>"
								data-lng="<?php echo esc_attr( $store['lng'] ); ?>"
								data-phone-display="<?php echo esc_attr( implode( ' · ', $store['phones'] ) ); ?>"
							>
								<button type="button" class="locate-card__main" aria-label="<?php echo esc_attr( sprintf( __( 'Show %s on the map', 'intercoil' ), $store['name'] ) ); ?>">
									<h3 class="locate-card__name"><?php echo esc_html( $store['name'] ); ?></h3>
									<p class="locate-card__address"><?php echo esc_html( $store['address'] ); ?></p>
									<p class="locate-card__meta"><?php echo esc_html( $store['city'] ); ?></p>
									<p class="locate-card__phone"><?php echo esc_html( implode( ' · ', $store['phones'] ) ); ?></p>
								</button>
								<div class="locate-card__actions">
									<a class="locate-card__action" href="<?php echo esc_url( $primary_tel ); ?>">
										<svg viewBox="0 0 16 16" fill="none" aria-hidden="true" focusable="false">
											<path d="M3.1 1.9 4.8 1.4c.4-.1.8.1 1 .5l1 2.3c.1.3 0 .7-.2.9L5.4 6.2a9.4 9.4 0 0 0 4.4 4.4l1.1-1.2c.2-.2.6-.3.9-.2l2.3 1c.4.2.6.6.5 1l-.5 1.7c-.1.4-.5.7-.9.7C7.4 13.6 2.4 8.6 2.4 2.8c0-.4.3-.8.7-.9Z" stroke="currentColor" stroke-width="1.3" stroke-linejoin="round" />
										</svg>
										<?php esc_html_e( 'Call', 'intercoil' ); ?>
									</a>
									<a class="locate-card__action locate-card__action--directions" href="<?php echo esc_url( $directions_url ); ?>" target="_blank" rel="noopener noreferrer">
										<?php esc_html_e( 'Get Directions', 'intercoil' ); ?>
										<span class="locate-card__action-arrow" aria-hidden="true">&rarr;</span>
									</a>
								</div>
							</li>
						<?php endforeach; ?>
					</ol>

					<p class="locate-empty" id="locate-empty" hidden><?php esc_html_e( 'No stores match your search.', 'intercoil' ); ?></p>
					<p class="inner-visually-hidden" aria-live="polite" id="locate-results-status"></p>
				</div>

				<div class="locate-map-wrap reveal-up delay-2">
					<div class="locate-map" id="locate-map" aria-label="<?php esc_attr_e( 'Map of store locations', 'intercoil' ); ?>"></div>
				</div>
			</div>
		</div>
	</section>

	<section class="locate-next" aria-label="<?php esc_attr_e( 'Continue exploring The Bedroom by Intercoil', 'intercoil' ); ?>">
		<div class="container locate-next__inner reveal-up">
			<a href="<?php echo esc_url( intercoil_brand_page_url( 'bedroom' ) ); ?>" class="inner-link locate-next__link">
				The Bedroom by Intercoil
				<span class="inner-link__arrow" aria-hidden="true">&rarr;</span>
			</a>
		</div>
	</section>

</div>

<?php
get_footer();
