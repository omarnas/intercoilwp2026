<?php
/**
 * Homepage brand statement section.
 *
 * @package Intercoil
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$statement     = get_field( 'brand_satement' ) ?: array();
$section_label = $statement['section_label'] ?? '';
$heading       = $statement['brand_statement_heading'] ?? '';
$lead          = $statement['statement_lead'] ?? '';

$section_label = $section_label ?: 'Our Promise';
$heading       = $heading ?: "Sleep, Crafted\nto Perfection.";
$lead          = $lead ?: "For over five decades, we have pursued a promise from the UAE to the world's finest hotel suites, where every stitch, coil, and layer reflects a legacy of craftsmanship, restoring sleep with comfort and technology.";

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
	<div class="container brand-statement__inner">
		<span class="section-label brand-statement__label"><?php echo esc_html( $section_label ); ?></span>
		<h2 class="brand-statement__heading fade-up" id="brand-statement-heading">
			<?php if ( ! empty( $heading_lines[0] ) ) : ?>
				<?php echo esc_html( $heading_lines[0] ); ?>
				<?php if ( isset( $heading_lines[1] ) ) : ?>
					<br><?php echo esc_html( $heading_lines[1] ); ?>
				<?php endif; ?>
			<?php endif; ?>
		</h2>
		<p class="brand-statement__lead fade-up delay-1">
			<?php echo esc_html( $lead ); ?>
		</p>
		<div class="brand-statement__accent fade-up delay-2">
			<span class="brand-statement__since">Est. 1974</span>
		</div>
	</div>
</section>
