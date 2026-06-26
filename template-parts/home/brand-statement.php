<?php
/**
 * Homepage brand statement section.
 *
 * @package Intercoil
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$section_label = get_field( 'brand_statement_section_label' ) ?: 'Our Promise';
$heading       = get_field( 'brand_statement_heading' ) ?: "Sleep, Crafted\nto Perfection.";
$lead          = get_field( 'brand_statement_lead' ) ?: "For over five decades, we have pursued a promise from the UAE to the world's finest hotel suites, where every stitch, coil, and layer reflects a legacy of craftsmanship, restoring sleep with comfort and technology.";
$visual        = get_field( 'brand_statement_visual' ) ?: intercoil_asset_uri( 'images/photography/general/relaxing-bedroom-interior-with-bed-and-pillows-2026-03-10-04-02-05-utc.jpg' );

$heading_lines = array_values(
	array_filter(
		array_map( 'trim', preg_split( '/\r\n|\r|\n/', $heading ) ),
		'strlen'
	)
);
?>

<!-- ══════════════════════════════════════════
     SECTION 3 — BRAND STATEMENT
══════════════════════════════════════════ -->
<section class="brand-statement" id="about" aria-labelledby="brand-statement-heading">
	<div class="brand-statement__visual" aria-hidden="true">
		<img
			src="<?php echo esc_url( $visual ); ?>"
			alt=""
			loading="lazy"
		/>
		<div class="brand-statement__visual-overlay"></div>
	</div>
	<div class="container brand-statement__inner">
		<span class="section-label section-label--light"><?php echo esc_html( $section_label ); ?></span>
		<h2 class="brand-statement__heading fade-up" id="brand-statement-heading">
			<?php if ( ! empty( $heading_lines[0] ) ) : ?>
				<?php echo esc_html( $heading_lines[0] ); ?>
				<?php if ( isset( $heading_lines[1] ) ) : ?>
					<br><em><?php echo esc_html( $heading_lines[1] ); ?></em>
				<?php endif; ?>
			<?php endif; ?>
		</h2>
		<p class="brand-statement__lead fade-up delay-1">
			<?php echo esc_html( $lead ); ?>
		</p>
		<div class="brand-statement__accent fade-up delay-2" aria-hidden="true">
			<span class="brand-statement__line"></span>
			<span class="brand-statement__since">Est. 1974</span>
			<span class="brand-statement__line"></span>
		</div>
	</div>
</section>
