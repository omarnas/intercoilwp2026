<?php
/**
 * Template Name: Press Releases
 *
 * @package Intercoil
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$paged       = intercoil_news_current_page();
$news_query  = new WP_Query(
	array(
		'post_type'      => 'post',
		'post_status'    => 'publish',
		'posts_per_page' => intercoil_news_posts_per_page(),
		'paged'          => $paged,
	)
);

get_header();
?>

<div class="intercoil-inner-page news-page">

	<header class="inner-hero inner-hero--tall news-hero" aria-labelledby="news-hero-heading">
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
			<span class="section-label section-label--light inner-hero__eyebrow">Media Center</span>
			<h1 class="inner-hero__title inner-hero__title--simple" id="news-hero-heading">Press Releases</h1>
			<p class="inner-hero__tagline">News, announcements, and milestones from Intercoil International.</p>
		</div>

		<div class="inner-hero__fade" aria-hidden="true"></div>
	</header>

	<section class="news-archive" aria-label="<?php esc_attr_e( 'Press releases', 'intercoil' ); ?>">
		<div class="container">
			<?php if ( $news_query->have_posts() ) : ?>
				<div class="news-archive__grid">
					<?php
					$index = 0;
					while ( $news_query->have_posts() ) :
						$news_query->the_post();
						$is_featured = ( 1 === $paged && 0 === $index );
						$card_class  = $is_featured ? 'news-card news-card--featured' : 'news-card';
						++$index;
						?>
						<article <?php post_class( $card_class ); ?>>
							<a class="news-card__link" href="<?php the_permalink(); ?>">
								<div class="news-card__media">
									<img
										src="<?php echo esc_url( intercoil_news_post_image_url() ); ?>"
										alt=""
										loading="lazy"
										decoding="async"
									/>
									<div class="news-card__shade" aria-hidden="true"></div>
								</div>

								<div class="news-card__body">
									<time class="news-card__date" datetime="<?php echo esc_attr( get_the_date( DATE_W3C ) ); ?>">
										<?php echo esc_html( intercoil_news_post_date() ); ?>
									</time>
									<h2 class="news-card__title"><?php the_title(); ?></h2>
									<p class="news-card__excerpt"><?php echo esc_html( intercoil_news_post_excerpt() ); ?></p>
									<span class="news-card__cta">
										<?php esc_html_e( 'Read article', 'intercoil' ); ?>
										<span class="news-card__arrow" aria-hidden="true">&rarr;</span>
									</span>
								</div>
							</a>
						</article>
					<?php endwhile; ?>
				</div>

				<?php
				$pagination = paginate_links(
					array(
						'total'     => (int) $news_query->max_num_pages,
						'current'   => $paged,
						'type'      => 'list',
						'prev_text' => esc_html__( 'Previous', 'intercoil' ),
						'next_text' => esc_html__( 'Next', 'intercoil' ),
					)
				);

				if ( $pagination ) :
					?>
					<nav class="news-pagination" aria-label="<?php esc_attr_e( 'Press releases pagination', 'intercoil' ); ?>">
						<?php echo wp_kses_post( $pagination ); ?>
					</nav>
				<?php endif; ?>
			<?php else : ?>
				<p class="news-archive__empty"><?php esc_html_e( 'No press releases published yet.', 'intercoil' ); ?></p>
			<?php endif; ?>
		</div>
	</section>

</div>

<?php
wp_reset_postdata();
get_footer();
