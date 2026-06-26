<?php
/**
 * Homepage brands section header.
 *
 * @package Intercoil
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$header         = get_field( 'brands_header' ) ?: array();
$section_label  = $header['section_label'] ?: 'Our Brands';
$heading        = $header['brands_heading'] ?: "Trusted Names.\nDistinct Purpose.";
$subheading     = $header['brands_subheading'] ?: 'A portfolio of trusted sleep and bedroom brands, designed to serve every lifestyle, every market, and every standard of comfort.';

$heading_lines = array_values(
	array_filter(
		array_map( 'trim', preg_split( '/\r\n|\r|\n/', $heading ) ),
		'strlen'
	)
);
?>

<div class="container">
	<header class="brands__header">
		<span class="section-label section-label--light"><?php echo esc_html( $section_label ); ?></span>
		<h2 class="brands__heading fade-up" id="brands-heading">
			<?php if ( ! empty( $heading_lines[0] ) ) : ?>
				<?php echo esc_html( $heading_lines[0] ); ?>
				<?php if ( isset( $heading_lines[1] ) ) : ?>
					<br><?php echo esc_html( $heading_lines[1] ); ?>
				<?php endif; ?>
			<?php endif; ?>
		</h2>
		<p class="brands__subheading fade-up delay-1">
			<?php echo esc_html( $subheading ); ?>
		</p>
	</header>
</div>
