<?php
/**
 * Our Brands landing page — one portfolio row, content passed as args.
 *
 * Usage:
 * get_template_part( 'template-parts/brand/index-row', null, array(
 *     'key'     => 'intercoil',
 *     'number'  => '01',
 *     'reverse' => false,
 *     'image'   => 'images/...',
 *     'logo'    => 'logos/...',
 *     'name'    => 'Intercoil',
 *     'line'    => 'Some things are built to simply function...',
 *     'excerpt' => 'Intercoil is our original mattress brand...',
 *     'url'     => intercoil_brand_page_url( 'intercoil' ),
 * ) );
 *
 * @package Intercoil
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

extract( $args );

$row_id = 'brand-' . $key;
?>
<article
	class="brands-index__row brands-index__row--<?php echo esc_attr( $key ); ?><?php echo ! empty( $reverse ) ? ' brands-index__row--reverse' : ''; ?>"
	id="<?php echo esc_attr( $row_id ); ?>"
	aria-labelledby="<?php echo esc_attr( $row_id . '-name' ); ?>"
>
	<div class="container brands-index__layout">
		<div class="brands-index__media">
			<span class="brands-index__number" aria-hidden="true"><?php echo esc_html( $number ); ?></span>
			<div class="brands-index__panel" aria-hidden="true"></div>
			<figure class="brands-index__figure reveal-mask">
				<img
					class="reveal-mask__target"
					src="<?php echo esc_url( intercoil_asset_uri( $image ) ); ?>"
					alt=""
					loading="lazy"
					decoding="async"
				/>
			</figure>
		</div>

		<div class="brands-index__body">
			<div class="brands-index__logo-wrap">
				<img
					class="brands-index__logo"
					src="<?php echo esc_url( intercoil_asset_uri( $logo ) ); ?>"
					alt=""
					aria-hidden="true"
					loading="lazy"
					decoding="async"
				/>
			</div>

			<h2 class="brands-index__name reveal-up" id="<?php echo esc_attr( $row_id . '-name' ); ?>"><?php echo esc_html( $name ); ?></h2>
			<p class="brands-index__line reveal-up delay-1"><?php echo esc_html( $line ); ?></p>
			<p class="brands-index__excerpt reveal-up delay-2"><?php echo esc_html( $excerpt ); ?></p>

			<a class="brands-index__cta reveal-up delay-3" href="<?php echo esc_url( $url ); ?>">
				Discover the Brand
				<svg viewBox="0 0 18 18" fill="none" aria-hidden="true">
					<path d="M3 9h12M9 3l6 6-6 6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
				</svg>
			</a>
		</div>
	</div>
</article>
