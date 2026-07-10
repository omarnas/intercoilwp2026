<?php
/**
 * Template Name: Warranty Registration
 *
 * @package Intercoil
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$why_blocks = array(
	array(
		'title' => 'Why It Matters',
		'text'  => 'Warranty registration enables us to support you more effectively: faster issue resolution, accurate repair or replacement, and eligibility for exchanges or refunds where applicable.',
	),
	array(
		'title' => 'Support You Can Count On',
		'text'  => 'We believe in transparency and genuine customer care. Whether you need guidance on product selection, care instructions, or a warranty claim, our Technical Support team is here, for as long as you need us.',
	),
);

$brand_options = array(
	'Intercoil',
	'Beautyrest by Simmons',
	'Therapedic',
	'Dolidol',
	"Ghalya's Bedding Collection",
	'The Bedroom by Intercoil',
);

get_header();
?>

<div class="intercoil-inner-page warranty-page">

	<header class="inner-hero inner-hero--compact warranty-hero" aria-labelledby="warranty-hero-heading">
		<div class="inner-hero__bg" aria-hidden="true">
			<img
				class="inner-hero__img"
				src="<?php echo esc_url( intercoil_asset_uri( 'images/photography/mattresses/close-up-of-a-hand-on-a-quilted-surface-2026-03-17-14-42-08-utc.jpg' ) ); ?>"
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
			<span class="section-label section-label--light inner-hero__eyebrow">Warranty Registration</span>
			<h1 class="inner-hero__title inner-hero__title--simple" id="warranty-hero-heading">Warranty Registration &amp; Technical Support</h1>
			<p class="inner-hero__tagline warranty-hero__tagline">Your Intercoil International product is built to last, and we stand behind it. Registering your mattress ensures you receive the full technical support you are entitled to, should any issue arise.</p>
		</div>

		<div class="inner-hero__fade" aria-hidden="true"></div>
	</header>

	<section class="warranty-why" aria-labelledby="warranty-why-heading">
		<div class="container">
			<span class="section-label warranty-why__label" id="warranty-why-heading">Why Register</span>

			<div class="warranty-why__grid">
				<?php foreach ( $why_blocks as $i => $block ) : ?>
					<div class="warranty-why__block reveal-up<?php echo $i > 0 ? ' delay-' . (int) $i : ''; ?>">
						<h2 class="warranty-why__title"><?php echo esc_html( $block['title'] ); ?></h2>
						<p class="warranty-why__text"><?php echo esc_html( $block['text'] ); ?></p>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="warranty-register" aria-labelledby="warranty-register-heading">
		<div class="container warranty-register__layout">
			<div class="warranty-register__form-wrap">
				<h2 class="warranty-register__title" id="warranty-register-heading">Technical Support &amp; Warranty Registration</h2>

				<form class="warranty-form" method="post" action="">

					<fieldset class="warranty-fieldset">
						<legend class="warranty-fieldset__legend">Customer Info</legend>
						<div class="warranty-fieldset__grid">
							<div class="warranty-field">
								<label class="warranty-label" for="warranty-first-name">First Name <span class="warranty-required" aria-hidden="true">*</span></label>
								<input class="warranty-input" type="text" id="warranty-first-name" name="first_name" autocomplete="given-name" required aria-required="true" />
							</div>

							<div class="warranty-field">
								<label class="warranty-label" for="warranty-last-name">Last Name <span class="warranty-required" aria-hidden="true">*</span></label>
								<input class="warranty-input" type="text" id="warranty-last-name" name="last_name" autocomplete="family-name" required aria-required="true" />
							</div>

							<div class="warranty-field">
								<label class="warranty-label" for="warranty-email">Email</label>
								<input class="warranty-input" type="email" id="warranty-email" name="email" autocomplete="email" />
							</div>

							<div class="warranty-field">
								<label class="warranty-label" for="warranty-address">Address</label>
								<input class="warranty-input" type="text" id="warranty-address" name="address" autocomplete="street-address" />
							</div>

							<div class="warranty-field">
								<label class="warranty-label" for="warranty-city">City</label>
								<input class="warranty-input" type="text" id="warranty-city" name="city" autocomplete="address-level2" />
							</div>

							<div class="warranty-field">
								<label class="warranty-label" for="warranty-country">Country</label>
								<input class="warranty-input" type="text" id="warranty-country" name="country" autocomplete="country-name" />
							</div>
						</div>
					</fieldset>

					<fieldset class="warranty-fieldset">
						<legend class="warranty-fieldset__legend">Purchase Info</legend>
						<div class="warranty-fieldset__grid">
							<div class="warranty-field">
								<label class="warranty-label" for="warranty-purchase-date">Date of Purchase <span class="warranty-required" aria-hidden="true">*</span></label>
								<input class="warranty-input" type="date" id="warranty-purchase-date" name="purchase_date" required aria-required="true" />
							</div>

							<div class="warranty-field">
								<label class="warranty-label" for="warranty-retailer-name">Name of Retailer you Purchased From</label>
								<input class="warranty-input" type="text" id="warranty-retailer-name" name="retailer_name" />
							</div>

							<div class="warranty-field">
								<label class="warranty-label" for="warranty-retailer-city">City of Retailer you Purchased From</label>
								<input class="warranty-input" type="text" id="warranty-retailer-city" name="retailer_city" />
							</div>

							<div class="warranty-field">
								<label class="warranty-label" for="warranty-retailer-country">Country of Retailer you Purchased From</label>
								<input class="warranty-input" type="text" id="warranty-retailer-country" name="retailer_country" />
							</div>

							<div class="warranty-field warranty-field--full">
								<label class="warranty-label" for="warranty-brand">Intercoil Brand Purchased</label>
								<select class="warranty-input warranty-select" id="warranty-brand" name="brand_purchased">
									<option value="" disabled selected>Select a brand</option>
									<?php foreach ( $brand_options as $brand ) : ?>
										<option value="<?php echo esc_attr( $brand ); ?>"><?php echo esc_html( $brand ); ?></option>
									<?php endforeach; ?>
								</select>
							</div>
						</div>
					</fieldset>

					<fieldset class="warranty-fieldset">
						<legend class="warranty-fieldset__legend">Product Info</legend>
						<div class="warranty-fieldset__grid">
							<div class="warranty-field">
								<label class="warranty-label" for="warranty-model">Model Purchased</label>
								<input class="warranty-input" type="text" id="warranty-model" name="model_purchased" />
							</div>

							<div class="warranty-field">
								<label class="warranty-label" for="warranty-size">Size of Mattress</label>
								<input class="warranty-input" type="text" id="warranty-size" name="mattress_size" />
							</div>

							<div class="warranty-field">
								<label class="warranty-label" for="warranty-foundation">Foundation Type Purchased</label>
								<input class="warranty-input" type="text" id="warranty-foundation" name="foundation_type" />
							</div>

							<div class="warranty-field">
								<label class="warranty-label" for="warranty-price">Price Paid</label>
								<input class="warranty-input" type="text" id="warranty-price" name="price_paid" inputmode="decimal" />
							</div>
						</div>
					</fieldset>

					<div class="warranty-form__actions">
						<button type="submit" class="form-btn form-btn--primary">
							Register Your Product
							<span class="form-btn__arrow" aria-hidden="true">&rarr;</span>
						</button>
					</div>
				</form>
			</div>
		</div>
	</section>

</div>

<?php
get_footer();
