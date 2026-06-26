<?php
/**
 * Homepage statistics section.
 *
 * @package Intercoil
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$stats = intercoil_get_stats();
?>

<!-- ══════════════════════════════════════════
     SECTION 2 — STATISTICS
══════════════════════════════════════════ -->
<section class="stats" id="stats" aria-labelledby="stats-title">
	<div class="stats__ambient" aria-hidden="true"></div>
	<div class="container">
		<h2 id="stats-title" class="sr-only"><?php esc_html_e( 'Key Statistics', 'intercoil' ); ?></h2>
		<div class="stats__grid">
			<?php foreach ( $stats as $index => $stat ) : ?>
				<div class="stats__item" data-stat-reveal style="--stat-delay: <?php echo esc_attr( $index * 140 ); ?>ms">
					<div class="stats__divider" aria-hidden="true"></div>
					<div class="stats__number">
						<span class="stats__figure" aria-hidden="true">
							<?php echo intercoil_stat_digits_html( $stat['stat_number'] ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
							<?php if ( ! empty( $stat['stat_suffix'] ) ) : ?>
								<span class="stats__suffix"><?php echo esc_html( $stat['stat_suffix'] ); ?></span>
							<?php endif; ?>
						</span>
						<span class="sr-only"><?php echo esc_html( intercoil_stat_accessible_text( $stat['stat_number'], $stat['stat_suffix'] ) ); ?></span>
					</div>
					<?php if ( ! empty( $stat['stat_label'] ) ) : ?>
						<p class="stats__label stats__label--reveal"><?php echo intercoil_stat_label_html( $stat['stat_label'] ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
					<?php endif; ?>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
