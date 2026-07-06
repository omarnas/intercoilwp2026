<?php
/**
 * Single post — Press release article.
 *
 * @package Intercoil
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

while ( have_posts() ) :
	the_post();
	?>

<div class="intercoil-inner-page news-single">

	<header class="news-single__hero" aria-labelledby="news-single-heading">
		<div class="news-single__hero-media" aria-hidden="true">
			<img
				class="news-single__hero-img"
				src="<?php echo esc_url( intercoil_news_post_image_url() ); ?>"
				alt=""
				loading="eager"
				decoding="async"
			/>
			<div class="news-single__hero-overlay"></div>
		</div>

		<div class="container news-single__hero-inner">
			<a class="news-single__back" href="<?php echo esc_url( intercoil_news_page_url() ); ?>">
				<span aria-hidden="true">&larr;</span>
				<?php esc_html_e( 'Press Releases', 'intercoil' ); ?>
			</a>

			<div class="news-single__hero-content">
				<span class="section-label section-label--light news-single__eyebrow">Media Center</span>
				<time class="news-single__date" datetime="<?php echo esc_attr( get_the_date( DATE_W3C ) ); ?>">
					<?php echo esc_html( intercoil_news_post_date() ); ?>
				</time>
				<h1 class="news-single__title" id="news-single-heading"><?php the_title(); ?></h1>
			</div>
		</div>
	</header>

	<article class="news-article">
		<div class="container news-article__inner">
			<div class="news-article__content entry-content">
				<?php the_content(); ?>
			</div>
		</div>
	</article>

	<section class="news-single__footer">
		<div class="container news-single__footer-inner">
			<a class="news-btn news-btn--primary" href="<?php echo esc_url( intercoil_news_page_url() ); ?>">
				<?php esc_html_e( 'All Press Releases', 'intercoil' ); ?>
				<span class="news-btn__arrow" aria-hidden="true">&rarr;</span>
			</a>
			<a class="news-btn news-btn--ghost" href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<?php esc_html_e( 'Back to Home', 'intercoil' ); ?>
			</a>
		</div>
	</section>

</div>

	<?php
endwhile;

get_footer();
