<?php
/**
 * Template Name: Join Our Family
 *
 * @package Intercoil
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$why_blocks = array(
	array(
		'title' => '50+ Years of Legacy',
		'image' => 'images/photography/historybanner.png',
	),
	array(
		'title' => 'Craftsmanship & Quality',
		'image' => 'images/photography/manufacturing/cutting-pink-foam-with-an-electric-foam-cutter-2026-03-19-23-08-59-utc.jpg',
	),
	array(
		'title' => 'Career Growth',
		'image' => 'images/photography/manufacturing/male-and-female-factory-workers-marking-textile-in-2026-01-09-09-38-42-utc.jpg',
	),
	array(
		'title' => 'People First',
		'image' => 'images/photography/manufacturing/female-factory-worker-preparing-textile-for-machin-2026-01-09-09-13-45-utc.jpg',
	),
);

get_header();
?>

<div class="intercoil-inner-page join-family-page">

	<header class="inner-hero inner-hero--compact join-hero" aria-labelledby="join-hero-heading">
		<div class="inner-hero__bg" aria-hidden="true">
			<img
				class="inner-hero__img"
				src="<?php echo esc_url( intercoil_asset_uri( 'images/photography/manufacturing/man-working-at-industrial-machine-in-factory-2026-03-20-02-19-47-utc.jpg' ) ); ?>"
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
			<span class="section-label section-label--light inner-hero__eyebrow">Careers</span>
			<h1 class="inner-hero__title inner-hero__title--simple" id="join-hero-heading">Join Our Family</h1>
			<p class="inner-hero__tagline join-hero__tagline">At Intercoil International, our greatest strength has always been our people. Since 1974, we have built more than premium products. We have built a culture rooted in craftsmanship, trust, and a shared purpose: delivering exceptional sleep to millions of people, every day.</p>
			<p class="inner-hero__tagline join-hero__tagline join-hero__tagline--second">If you are driven by quality, motivated by growth, and ready to be part of something with genuine legacy, we want to hear from you.</p>

			<div class="join-hero__actions">
				<a href="#join-apply" class="legacy-btn legacy-btn--primary">
					Explore Current Career Opportunities
					<span class="legacy-btn__arrow" aria-hidden="true">&rarr;</span>
				</a>
			</div>
		</div>

		<div class="inner-hero__fade" aria-hidden="true"></div>
	</header>

	<section class="join-why" aria-labelledby="join-why-heading">
		<div class="container">
			<span class="section-label join-why__label" id="join-why-heading">Why Join Intercoil</span>

			<div class="join-why__grid">
				<?php foreach ( $why_blocks as $i => $block ) : ?>
					<article class="join-why-block reveal-up<?php echo $i > 0 ? ' delay-' . (int) min( $i, 4 ) : ''; ?>">
						<div class="join-why-block__media">
							<img src="<?php echo esc_url( intercoil_asset_uri( $block['image'] ) ); ?>" alt="" loading="lazy" decoding="async" />
						</div>
						<p class="join-why-block__caption"><?php echo esc_html( $block['title'] ); ?></p>
					</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="legacy-closing join-statement" aria-labelledby="join-statement-heading">
		<div class="legacy-closing__media" aria-hidden="true">
			<img
				class="legacy-closing__img"
				src="<?php echo esc_url( intercoil_asset_uri( 'images/photography/manufacturing/a-focused-worker-is-operating-a-foam-cutter-at-his-2026-03-25-01-47-21-utc.jpg' ) ); ?>"
				alt=""
				loading="lazy"
				decoding="async"
			/>
			<div class="legacy-closing__overlay"></div>
		</div>

		<div class="container legacy-closing__inner">
			<blockquote class="legacy-closing__quote join-statement__quote" id="join-statement-heading">
				Build products that improve how millions of people sleep.
			</blockquote>
		</div>
	</section>

	<section class="join-apply" id="join-apply" aria-labelledby="join-apply-heading">
		<div class="container join-apply__layout">
			<span class="section-label join-apply__label">Careers</span>
			<h2 class="join-apply__title" id="join-apply-heading">Apply Now</h2>

			<form class="join-form" method="post" action="" enctype="multipart/form-data">

				<fieldset class="join-fieldset">
					<legend class="join-fieldset__legend">Personal Information</legend>
					<div class="join-fieldset__grid">
						<div class="join-field">
							<label class="join-label" for="join-first-name">First Name <span class="join-required" aria-hidden="true">*</span></label>
							<input class="join-input" type="text" id="join-first-name" name="first_name" autocomplete="given-name" required aria-required="true" />
						</div>

						<div class="join-field">
							<label class="join-label" for="join-last-name">Last Name <span class="join-required" aria-hidden="true">*</span></label>
							<input class="join-input" type="text" id="join-last-name" name="last_name" autocomplete="family-name" required aria-required="true" />
						</div>

						<div class="join-field">
							<label class="join-label" for="join-email">Email Address <span class="join-required" aria-hidden="true">*</span></label>
							<input class="join-input" type="email" id="join-email" name="email" autocomplete="email" required aria-required="true" />
						</div>

						<div class="join-field">
							<label class="join-label" for="join-mobile">Mobile Number <span class="join-required" aria-hidden="true">*</span></label>
							<input class="join-input" type="tel" id="join-mobile" name="mobile" autocomplete="tel" required aria-required="true" />
						</div>

						<div class="join-field">
							<label class="join-label" for="join-country">Country</label>
							<input class="join-input" type="text" id="join-country" name="country" autocomplete="country-name" />
						</div>

						<div class="join-field">
							<label class="join-label" for="join-city">City</label>
							<input class="join-input" type="text" id="join-city" name="city" autocomplete="address-level2" />
						</div>

						<div class="join-field join-field--full">
							<label class="join-label" for="join-nationality">Nationality</label>
							<input class="join-input" type="text" id="join-nationality" name="nationality" autocomplete="off" />
						</div>
					</div>
				</fieldset>

				<fieldset class="join-fieldset">
					<legend class="join-fieldset__legend">Professional Information</legend>
					<div class="join-fieldset__grid">
						<div class="join-field join-field--full">
							<label class="join-label" for="join-position">Position Applying For <span class="join-required" aria-hidden="true">*</span></label>
							<input class="join-input" type="text" id="join-position" name="position" required aria-required="true" />
						</div>
					</div>
				</fieldset>

				<fieldset class="join-fieldset">
					<legend class="join-fieldset__legend">Documents</legend>
					<div class="join-fieldset__grid">
						<div class="join-field">
							<label class="join-label" for="join-cv">Upload CV <span class="join-required" aria-hidden="true">*</span></label>
							<input class="join-input join-file" type="file" id="join-cv" name="cv" accept=".pdf,.doc,.docx" required aria-required="true" />
						</div>

						<div class="join-field">
							<label class="join-label" for="join-cover-letter">Upload Cover Letter <span class="join-label__optional">(Optional)</span></label>
							<input class="join-input join-file" type="file" id="join-cover-letter" name="cover_letter" accept=".pdf,.doc,.docx" />
						</div>
					</div>
				</fieldset>

				<div class="join-consent">
					<input type="checkbox" id="join-consent" name="privacy_consent" required aria-required="true" />
					<label for="join-consent">I consent to Intercoil International processing my personal data for the purpose of this job application and future recruitment opportunities.</label>
				</div>

				<div class="join-form__actions">
					<button type="submit" class="form-btn form-btn--primary">
						Submit Application
						<span class="form-btn__arrow" aria-hidden="true">&rarr;</span>
					</button>
				</div>
			</form>
		</div>
	</section>

	<section class="join-cta" aria-labelledby="join-cta-heading">
		<div class="join-cta__glow join-cta__glow--left" aria-hidden="true"></div>
		<div class="join-cta__glow join-cta__glow--right" aria-hidden="true"></div>

		<div class="container join-cta__inner">
			<span class="section-label section-label--light join-cta__eyebrow">Open Applications</span>
			<h2 class="join-cta__heading" id="join-cta-heading">Can&#8217;t find the right role?</h2>
			<p class="join-cta__body">We&#8217;re always looking for talented people. Submit your CV and we&#8217;ll keep it on file for future opportunities.</p>

			<div class="join-cta__actions">
				<a href="#join-apply" class="legacy-btn legacy-btn--primary">
					Submit Your CV
					<span class="legacy-btn__arrow" aria-hidden="true">&rarr;</span>
				</a>
			</div>
		</div>
	</section>

</div>

<?php
get_footer();
