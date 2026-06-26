<?php
/**
 * Homepage brand statement section.
 *
 * @package Intercoil
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$brand_statement = intercoil_get_brand_statement();
?>

<!-- ══════════════════════════════════════════
     SECTION 3 — BRAND STATEMENT
══════════════════════════════════════════ -->
<section class="brand-statement" id="about" aria-labelledby="brand-statement-heading">
	<div class="brand-statement__visual" aria-hidden="true">
		<img
			src="<?php echo esc_url( $brand_statement['brand_statement_visual'] ); ?>"
			alt=""
			loading="lazy"
		/>
		<div class="brand-statement__visual-overlay"></div>
	</div>
	<div class="container brand-statement__inner">
		<span class="section-label section-label--light"><?php echo esc_html( $brand_statement['section_label'] ); ?></span>
		<h2 class="brand-statement__heading fade-up" id="brand-statement-heading">
			<?php echo intercoil_brand_statement_heading_html( $brand_statement['brand_statement_heading'] ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
		</h2>
		<p class="brand-statement__lead fade-up delay-1">
			<?php echo esc_html( $brand_statement['statement_lead'] ); ?>
		</p>
		<div class="brand-statement__accent fade-up delay-2" aria-hidden="true">
			<span class="brand-statement__line"></span>
			<span class="brand-statement__since">Est. 1974</span>
			<span class="brand-statement__line"></span>
		</div>
	</div>
</section>
