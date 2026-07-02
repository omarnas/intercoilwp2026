<?php
/**
 * Brand inner page shared layout.
 *
 * Driven entirely by the brand array from inc/brands.php so the markup can
 * later read from the `intercoil_brand` CPT without structural changes.
 *
 * @package Intercoil
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$brand = get_query_var( 'intercoil_brand' );

if ( empty( $brand ) || ! is_array( $brand ) ) {
	return;
}

$brand_key   = $brand['key'];
$hero_id     = 'brand-hero-' . sanitize_html_class( $brand_key );
$cta_url     = intercoil_brand_cta_url( $brand );
$landing_url = intercoil_brands_landing_url();
$split_count = 0;
?>

<div class="intercoil-inner-page brand-page brand-page--<?php echo esc_attr( $brand_key ); ?>">

	<header class="inner-hero inner-hero--tall brand-hero" aria-labelledby="<?php echo esc_attr( $hero_id ); ?>">
		<div class="inner-hero__bg" aria-hidden="true">
			<img
				class="inner-hero__img"
				src="<?php echo esc_url( intercoil_asset_uri( $brand['hero_image'] ) ); ?>"
				alt=""
				loading="eager"
				decoding="async"
			/>
			<div class="inner-hero__overlay"></div>
			<div class="brand-hero__tint"></div>
			<div class="inner-hero__glow inner-hero__glow--left"></div>
			<div class="inner-hero__grain"></div>
		</div>

		<div class="inner-hero__vignette" aria-hidden="true"></div>

		<div class="container inner-hero__content brand-hero__content">
			<a class="brand-hero__back" href="<?php echo esc_url( $landing_url ); ?>">
				<span class="brand-hero__back-arrow" aria-hidden="true">&larr;</span>
				Our Brands
			</a>

			<div class="brand-hero__logo-wrap <?php echo esc_attr( $brand['logo_class'] ); ?>">
				<img
					class="brand-hero__logo"
					src="<?php echo esc_url( intercoil_asset_uri( $brand['logo'] ) ); ?>"
					alt="<?php echo esc_attr( $brand['name'] ); ?>"
					loading="eager"
					decoding="async"
				/>
			</div>

			<h1 class="inner-hero__title inner-hero__title--display brand-hero__title" id="<?php echo esc_attr( $hero_id ); ?>">
				<span class="inner-hero__title-line inner-hero__title-line--light brand-hero__kicker"><?php echo esc_html( $brand['hero_kicker'] ); ?></span>
				<span class="inner-hero__title-line inner-hero__title-line--bold brand-hero__headline"><?php echo esc_html( $brand['hero_title'] ); ?></span>
			</h1>

			<?php if ( ! empty( $brand['category'] ) ) : ?>
				<p class="brand-hero__category"><?php echo esc_html( $brand['category'] ); ?></p>
			<?php endif; ?>
		</div>

		<div class="inner-hero__scroll" aria-hidden="true"><span></span></div>
		<div class="inner-hero__fade" aria-hidden="true"></div>
	</header>

	<section class="brand-manifesto" aria-labelledby="<?php echo esc_attr( 'brand-manifesto-' . $brand_key ); ?>">
		<?php if ( ! empty( $brand['watermark'] ) ) : ?>
			<div class="brand-manifesto__watermark" aria-hidden="true"><?php echo esc_html( $brand['watermark'] ); ?></div>
		<?php endif; ?>

		<div class="container brand-manifesto__layout">
			<div class="brand-manifesto__copy">
				<h2 class="inner-visually-hidden" id="<?php echo esc_attr( 'brand-manifesto-' . $brand_key ); ?>"><?php echo esc_html( $brand['name'] ); ?></h2>
				<p class="brand-manifesto__statement reveal-up"><?php echo esc_html( $brand['manifesto'] ); ?></p>

				<?php foreach ( $brand['intro'] as $intro_index => $intro_para ) : ?>
					<p class="brand-manifesto__prose reveal-up delay-<?php echo esc_attr( min( $intro_index + 1, 4 ) ); ?>"><?php echo esc_html( $intro_para ); ?></p>
				<?php endforeach; ?>
			</div>

			<div class="brand-manifesto__visual">
				<div class="brand-manifesto__panel" aria-hidden="true"></div>
				<figure class="brand-manifesto__figure brand-manifesto__figure--primary reveal-mask">
					<img
						class="reveal-mask__target"
						src="<?php echo esc_url( intercoil_asset_uri( $brand['intro_primary'] ) ); ?>"
						alt=""
						loading="lazy"
						decoding="async"
					/>
				</figure>
				<figure class="brand-manifesto__figure brand-manifesto__figure--accent reveal-mask">
					<img
						class="reveal-mask__target"
						src="<?php echo esc_url( intercoil_asset_uri( $brand['intro_accent'] ) ); ?>"
						alt=""
						loading="lazy"
						decoding="async"
					/>
				</figure>
			</div>
		</div>
	</section>

	<?php if ( ! empty( $brand['facts'] ) ) : ?>
		<section class="brand-facts" aria-label="<?php echo esc_attr( $brand['name'] . ' at a glance' ); ?>">
			<div class="container">
				<dl class="brand-facts__row">
					<?php foreach ( $brand['facts'] as $fact_index => $fact ) : ?>
						<div class="brand-facts__item reveal-up delay-<?php echo esc_attr( min( $fact_index + 1, 4 ) ); ?>">
							<dt class="brand-facts__value"><?php echo esc_html( $fact['value'] ); ?></dt>
							<dd class="brand-facts__label"><?php echo esc_html( $fact['label'] ); ?></dd>
						</div>
					<?php endforeach; ?>
				</dl>
			</div>
		</section>
	<?php endif; ?>

	<?php foreach ( $brand['chapters'] as $chapter_index => $chapter ) : ?>
		<?php
		$chapter_id = 'brand-chapter-' . $brand_key . '-' . $chapter_index;
		$variant    = isset( $chapter['variant'] ) ? $chapter['variant'] : 'split';
		?>

		<?php if ( 'split' === $variant ) : ?>
			<?php
			$is_reverse = isset( $chapter['reverse'] ) ? (bool) $chapter['reverse'] : ( 1 === $split_count % 2 );
			$split_count++;
			?>
			<section class="brand-chapter<?php echo $is_reverse ? ' brand-chapter--reverse' : ''; ?>" aria-labelledby="<?php echo esc_attr( $chapter_id ); ?>">
				<div class="container brand-chapter__layout">
					<div class="brand-chapter__media">
						<figure class="brand-chapter__figure reveal-mask">
							<img
								class="reveal-mask__target"
								src="<?php echo esc_url( intercoil_asset_uri( $chapter['image'] ) ); ?>"
								alt=""
								loading="lazy"
								decoding="async"
							/>
						</figure>
						<?php if ( ! empty( $chapter['image_accent'] ) ) : ?>
							<figure class="brand-chapter__figure-accent reveal-mask">
								<img
									class="reveal-mask__target"
									src="<?php echo esc_url( intercoil_asset_uri( $chapter['image_accent'] ) ); ?>"
									alt=""
									loading="lazy"
									decoding="async"
								/>
							</figure>
						<?php endif; ?>
					</div>

					<div class="brand-chapter__body">
						<span class="ghost-index" aria-hidden="true"><?php echo esc_html( sprintf( '%02d', $chapter_index + 1 ) ); ?></span>
						<h2 class="brand-chapter__title reveal-up" id="<?php echo esc_attr( $chapter_id ); ?>"><?php echo esc_html( $chapter['title'] ); ?></h2>
						<?php foreach ( $chapter['paras'] as $para_index => $para ) : ?>
							<p class="brand-chapter__text reveal-up delay-<?php echo esc_attr( min( $para_index + 1, 4 ) ); ?>"><?php echo esc_html( $para ); ?></p>
						<?php endforeach; ?>
					</div>
				</div>
			</section>

		<?php elseif ( 'panorama' === $variant ) : ?>
			<section class="brand-panorama" aria-labelledby="<?php echo esc_attr( $chapter_id ); ?>">
				<div class="brand-panorama__media" aria-hidden="true">
					<img
						class="brand-panorama__img"
						src="<?php echo esc_url( intercoil_asset_uri( $chapter['image'] ) ); ?>"
						alt=""
						loading="lazy"
						decoding="async"
					/>
					<div class="brand-panorama__overlay"></div>
				</div>

				<div class="container brand-panorama__inner">
					<h2 class="brand-panorama__title reveal-up" id="<?php echo esc_attr( $chapter_id ); ?>"><?php echo esc_html( $chapter['title'] ); ?></h2>
					<?php foreach ( $chapter['paras'] as $para_index => $para ) : ?>
						<p class="brand-panorama__text reveal-up delay-<?php echo esc_attr( min( $para_index + 1, 4 ) ); ?>"><?php echo esc_html( $para ); ?></p>
					<?php endforeach; ?>
				</div>
			</section>

		<?php elseif ( 'stat' === $variant ) : ?>
			<section class="brand-stat" aria-labelledby="<?php echo esc_attr( $chapter_id ); ?>">
				<div class="inner-glow inner-glow--a" aria-hidden="true"></div>

				<div class="container brand-stat__inner">
					<?php if ( ! empty( $chapter['lead'] ) ) : ?>
						<p class="brand-stat__lead reveal-up"><?php echo esc_html( $chapter['lead'] ); ?></p>
					<?php endif; ?>

					<p class="brand-stat__figure reveal-up delay-1" aria-hidden="true">
						<span class="brand-stat__value"><?php echo esc_html( $chapter['value'] ); ?></span>
						<?php if ( ! empty( $chapter['suffix'] ) ) : ?>
							<span class="brand-stat__suffix"><?php echo esc_html( $chapter['suffix'] ); ?></span>
						<?php endif; ?>
					</p>

					<h2 class="brand-stat__title reveal-up delay-2" id="<?php echo esc_attr( $chapter_id ); ?>"><?php echo esc_html( $chapter['title'] ); ?></h2>
					<?php foreach ( $chapter['paras'] as $para ) : ?>
						<p class="brand-stat__text reveal-up delay-3"><?php echo esc_html( $para ); ?></p>
					<?php endforeach; ?>
				</div>
			</section>

		<?php elseif ( 'grid' === $variant ) : ?>
			<section class="brand-grid" aria-labelledby="<?php echo esc_attr( $chapter_id ); ?>">
				<div class="inner-glow inner-glow--b" aria-hidden="true"></div>

				<div class="container">
					<div class="brand-grid__head">
						<h2 class="brand-grid__title reveal-up" id="<?php echo esc_attr( $chapter_id ); ?>"><?php echo esc_html( $chapter['title'] ); ?></h2>
						<?php if ( ! empty( $chapter['lead'] ) ) : ?>
							<p class="brand-grid__lead reveal-up delay-1"><?php echo esc_html( $chapter['lead'] ); ?></p>
						<?php endif; ?>
					</div>

					<div class="brand-grid__items">
						<?php foreach ( $chapter['items'] as $item_index => $item ) : ?>
							<article class="brand-grid__item reveal-up delay-<?php echo esc_attr( min( $item_index + 1, 4 ) ); ?>">
								<span class="ghost-index" aria-hidden="true"><?php echo esc_html( sprintf( '%02d', $item_index + 1 ) ); ?></span>
								<h3 class="brand-grid__item-title"><?php echo esc_html( $item['title'] ); ?></h3>
								<p class="brand-grid__item-text"><?php echo esc_html( $item['text'] ); ?></p>
							</article>
						<?php endforeach; ?>
					</div>

					<?php if ( ! empty( $chapter['paras'] ) ) : ?>
						<div class="brand-grid__after">
							<?php foreach ( $chapter['paras'] as $para_index => $para ) : ?>
								<p class="brand-grid__after-text reveal-up delay-<?php echo esc_attr( min( $para_index + 1, 4 ) ); ?>"><?php echo esc_html( $para ); ?></p>
							<?php endforeach; ?>
						</div>
					<?php endif; ?>
				</div>
			</section>
		<?php endif; ?>
	<?php endforeach; ?>

	<section class="brand-closing" aria-labelledby="<?php echo esc_attr( 'brand-closing-' . $brand_key ); ?>">
		<div class="brand-closing__media" aria-hidden="true">
			<img
				class="brand-closing__img"
				src="<?php echo esc_url( intercoil_asset_uri( $brand['closing_image'] ) ); ?>"
				alt=""
				loading="lazy"
				decoding="async"
			/>
			<div class="brand-closing__overlay"></div>
		</div>

		<div class="container brand-closing__inner">
			<blockquote class="brand-closing__quote" id="<?php echo esc_attr( 'brand-closing-' . $brand_key ); ?>">
				<?php echo esc_html( $brand['closing_line'] ); ?>
			</blockquote>

			<div class="brand-closing__actions">
				<a href="<?php echo esc_url( $cta_url ); ?>" class="brand-btn brand-btn--primary">
					<?php echo esc_html( $brand['cta_label'] ); ?>
					<span class="brand-btn__arrow" aria-hidden="true">&rarr;</span>
				</a>
				<a href="<?php echo esc_url( $landing_url ); ?>" class="brand-btn brand-btn--ghost">
					View All Brands
				</a>
			</div>
		</div>
	</section>

</div>
