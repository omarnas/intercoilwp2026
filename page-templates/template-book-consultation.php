<?php
/**
 * Template Name: Book a Consultation
 *
 * @package Intercoil
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$categories = array(
	array(
		'title' => 'Home Consultation',
		'image' => 'images/photography/general/relaxing-bedroom-interior-with-bed-and-pillows-2026-03-10-04-02-05-utc.jpg',
	),
	array(
		'title' => 'Hospitality Projects',
		'image' => 'images/photography/hospitality/luxury-resort-room-2026-03-20-01-01-12-utc.jpg',
	),
	array(
		'title' => 'Corporate & Government',
		'image' => 'images/photography/hospitality/3d-rendering-beautiful-luxury-bedroom-suite-in-hot-2026-03-17-04-32-19-utc.jpg',
	),
	array(
		'title' => 'Tailored Manufacturing',
		'image' => 'images/photography/manufacturing/man-working-at-industrial-machine-in-factory-2026-03-20-02-19-47-utc.jpg',
	),
);

$interests = array(
	'Home Mattress Consultation',
	'Bedroom Furniture',
	'Hospitality Solutions',
	'Corporate & Government',
	'Wholesale & Distribution',
	'Tailored Manufacturing',
	'Other',
);

$preferred_modes = array(
	'in-showroom' => 'In Showroom',
	'phone-call'  => 'Phone Call',
	'video-call'  => 'Video Call',
	'at-location' => 'At My Business Location',
);

$journey_steps = array(
	'Submit Request',
	'Our Sleep Specialist Contacts You',
	'Personalized Recommendation',
);

get_header();
?>

<div class="intercoil-inner-page consultation-page">

	<header class="inner-hero inner-hero--compact consultation-hero" aria-labelledby="consultation-hero-heading">
		<div class="inner-hero__bg" aria-hidden="true">
			<img
				class="inner-hero__img"
				src="<?php echo esc_url( intercoil_asset_uri( 'images/photography/general/view-of-assortment-of-decor-for-interior-shop-in-s-2026-03-19-07-58-26-utc.jpg' ) ); ?>"
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
			<h1 class="inner-hero__title inner-hero__title--simple" id="consultation-hero-heading">Book a Consultation</h1>
			<p class="inner-hero__tagline consultation-hero__tagline">Every person sleeps differently. Every home is unique. Our sleep specialists are here to guide you, whether you are a family looking for the perfect mattress or a business requiring a tailored sleep solution. Book a consultation and discover options designed precisely around your comfort, your space, and the way you live.</p>
		</div>

		<div class="inner-hero__scroll" aria-hidden="true"><span></span></div>
		<div class="inner-hero__fade" aria-hidden="true"></div>
	</header>

	<section class="consultation-categories" aria-labelledby="consultation-categories-heading">
		<div class="container">
			<span class="section-label consultation-categories__label" id="consultation-categories-heading">Consultation Categories</span>

			<div class="consultation-categories__grid">
				<?php foreach ( $categories as $i => $cat ) : ?>
					<article class="consultation-category reveal-up<?php echo $i > 0 ? ' delay-' . (int) min( $i, 4 ) : ''; ?>">
						<div class="consultation-category__media">
							<img src="<?php echo esc_url( intercoil_asset_uri( $cat['image'] ) ); ?>" alt="" loading="lazy" decoding="async" />
						</div>
						<p class="consultation-category__caption"><?php echo esc_html( $cat['title'] ); ?></p>
					</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="consultation-booking" aria-labelledby="consultation-booking-heading">
		<div class="container consultation-booking__layout">
			<span class="section-label consultation-booking__label" id="consultation-booking-heading">Consultation Booking</span>

			<form class="consultation-form" method="post" action="">
				<div class="consultation-form__grid">
					<div class="consultation-field">
						<label class="consultation-label" for="consult-name">Full Name</label>
						<input class="consultation-input" type="text" id="consult-name" name="full_name" autocomplete="name" required />
					</div>

					<div class="consultation-field">
						<label class="consultation-label" for="consult-email">Email Address</label>
						<input class="consultation-input" type="email" id="consult-email" name="email" autocomplete="email" required />
					</div>

					<div class="consultation-field">
						<label class="consultation-label" for="consult-mobile">Mobile Number</label>
						<input class="consultation-input" type="tel" id="consult-mobile" name="mobile" autocomplete="tel" required />
					</div>

					<div class="consultation-field">
						<label class="consultation-label" for="consult-company">Company <span class="consultation-label__optional">(Optional)</span></label>
						<input class="consultation-input" type="text" id="consult-company" name="company" autocomplete="organization" />
					</div>

					<div class="consultation-field">
						<label class="consultation-label" for="consult-interest">Interested In</label>
						<select class="consultation-input consultation-select" id="consult-interest" name="interested_in" required>
							<option value="" disabled selected>Select an option</option>
							<?php foreach ( $interests as $interest ) : ?>
								<option value="<?php echo esc_attr( $interest ); ?>"><?php echo esc_html( $interest ); ?></option>
							<?php endforeach; ?>
						</select>
					</div>

					<div class="consultation-field">
						<label class="consultation-label" for="consult-date">Preferred Date</label>
						<input class="consultation-input" type="date" id="consult-date" name="preferred_date" />
					</div>

					<div class="consultation-field">
						<label class="consultation-label" for="consult-time">Preferred Time</label>
						<input class="consultation-input" type="time" id="consult-time" name="preferred_time" />
					</div>

					<fieldset class="consultation-field consultation-field--full consultation-radio-field">
						<legend class="consultation-label">Preferred Consultation</legend>
						<div class="consultation-radio-group">
							<?php foreach ( $preferred_modes as $value => $label ) : ?>
								<label class="consultation-radio-pill">
									<input type="radio" name="preferred_consultation" value="<?php echo esc_attr( $value ); ?>" />
									<span><?php echo esc_html( $label ); ?></span>
								</label>
							<?php endforeach; ?>
						</div>
					</fieldset>

					<div class="consultation-field consultation-field--full">
						<label class="consultation-label" for="consult-message">Message / Requirements</label>
						<textarea class="consultation-input consultation-textarea" id="consult-message" name="message" rows="5"></textarea>
					</div>
				</div>

				<div class="consultation-form__actions">
					<button type="submit" class="form-btn form-btn--primary">
						Book Consultation
						<span class="form-btn__arrow" aria-hidden="true">&rarr;</span>
					</button>
				</div>
			</form>
		</div>
	</section>

	<section class="consultation-journey" aria-labelledby="consultation-journey-heading">
		<div class="container">
			<span class="section-label consultation-journey__label" id="consultation-journey-heading">Consultation Journey</span>

			<ol class="consultation-journey__list" role="list">
				<?php foreach ( $journey_steps as $i => $step ) : ?>
					<?php if ( $i > 0 ) : ?>
						<li class="consultation-journey__connector" aria-hidden="true">&rarr;</li>
					<?php endif; ?>
					<li class="consultation-journey__step reveal-up<?php echo $i > 0 ? ' delay-' . (int) $i : ''; ?>">
						<span class="consultation-journey__num" aria-hidden="true"><?php echo esc_html( str_pad( (string) ( $i + 1 ), 2, '0', STR_PAD_LEFT ) ); ?></span>
						<p class="consultation-journey__text"><?php echo esc_html( $step ); ?></p>
					</li>
				<?php endforeach; ?>
			</ol>
		</div>
	</section>

	<section class="legacy-closing consultation-closing" aria-labelledby="consultation-closing-heading">
		<div class="legacy-closing__media" aria-hidden="true">
			<img
				class="legacy-closing__img"
				src="<?php echo esc_url( intercoil_asset_uri( 'images/photography/general/bedroom-interior-with-bed-plants-and-gold-frame-2026-03-10-04-03-45-utc.jpg' ) ); ?>"
				alt=""
				loading="lazy"
				decoding="async"
			/>
			<div class="legacy-closing__overlay"></div>
		</div>

		<div class="container legacy-closing__inner">
			<blockquote class="legacy-closing__quote consultation-closing__quote" id="consultation-closing-heading">
				Every great night&#8217;s sleep begins with the right conversation.
			</blockquote>
		</div>
	</section>

</div>

<?php
get_footer();
