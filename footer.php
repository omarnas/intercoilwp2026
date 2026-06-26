<?php
/**
 * Theme footer.
 *
 * @package Intercoil
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$home_url = home_url( '/' );
?>
</main>

<footer class="footer" role="contentinfo">
	<div class="container">
		<div class="footer__top">

			<div>
				<img
					class="footer__brand-logo"
					src="<?php intercoil_asset( 'logos/intercoil-logo-white.svg' ); ?>"
					alt="<?php esc_attr_e( 'Intercoil International', 'intercoil' ); ?>"
					width="130"
					height="28"
					loading="lazy"
				/>
				<p class="footer__tagline">
					Crafting premium sleep solutions from the UAE for the world.
					A family-owned group since 1974.
				</p>
				<div class="footer__social">
					<a href="#" aria-label="<?php esc_attr_e( 'Intercoil on Instagram', 'intercoil' ); ?>">
						<svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<rect x="2" y="2" width="20" height="20" rx="5" stroke="currentColor" stroke-width="1.8" fill="none" style="stroke:rgba(255,255,255,0.5)"/>
							<circle cx="12" cy="12" r="4" stroke="currentColor" stroke-width="1.8" fill="none" style="stroke:rgba(255,255,255,0.5)"/>
							<circle cx="17.5" cy="6.5" r="1" fill="rgba(255,255,255,0.5)"/>
						</svg>
					</a>
					<a href="#" aria-label="<?php esc_attr_e( 'Intercoil on LinkedIn', 'intercoil' ); ?>">
						<svg viewBox="0 0 24 24" fill="none">
							<path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z" stroke="rgba(255,255,255,0.5)" stroke-width="1.8" fill="none" stroke-linejoin="round"/>
							<circle cx="4" cy="4" r="2" stroke="rgba(255,255,255,0.5)" stroke-width="1.8" fill="none"/>
						</svg>
					</a>
					<a href="#" aria-label="<?php esc_attr_e( 'Intercoil on Facebook', 'intercoil' ); ?>">
						<svg viewBox="0 0 24 24" fill="none">
							<path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z" stroke="rgba(255,255,255,0.5)" stroke-width="1.8" fill="none" stroke-linejoin="round"/>
						</svg>
					</a>
				</div>
			</div>

			<div>
				<p class="footer__col-title"><?php esc_html_e( 'Our Brands', 'intercoil' ); ?></p>
				<ul class="footer__links" role="list">
					<li><a href="#" class="footer__link">Intercoil</a></li>
					<li><a href="#" class="footer__link">Beautyrest by Simmons</a></li>
					<li><a href="#" class="footer__link">Therapedic</a></li>
					<li><a href="#" class="footer__link">Ghalya by Intercoil</a></li>
					<li><a href="#" class="footer__link">The Bedroom by Intercoil</a></li>
					<li><a href="#" class="footer__link">Dolidol</a></li>
				</ul>
			</div>

			<div>
				<p class="footer__col-title"><?php esc_html_e( 'Business', 'intercoil' ); ?></p>
				<ul class="footer__links" role="list">
					<li><a href="<?php echo esc_url( $home_url . '#hospitality' ); ?>" class="footer__link">Hospitality Solutions</a></li>
					<li><a href="#" class="footer__link">Corporate &amp; Government</a></li>
					<li><a href="#" class="footer__link">Wholesale &amp; Distribution</a></li>
					<li><a href="<?php echo esc_url( $home_url . '#manufacturing' ); ?>" class="footer__link">Tailored Manufacturing</a></li>
					<li><a href="<?php echo esc_url( $home_url . '#contact' ); ?>" class="footer__link">Become a Partner</a></li>
				</ul>
			</div>

			<div>
				<p class="footer__col-title"><?php esc_html_e( 'Company', 'intercoil' ); ?></p>
				<ul class="footer__links" role="list">
					<li><a href="<?php echo esc_url( $home_url . '#about' ); ?>" class="footer__link">About Intercoil</a></li>
					<li><a href="<?php echo esc_url( $home_url . '#why' ); ?>" class="footer__link">Our Standards</a></li>
					<li><a href="<?php echo esc_url( $home_url . '#manufacturing' ); ?>" class="footer__link">Manufacturing</a></li>
					<li><a href="<?php echo esc_url( $home_url . '#contact' ); ?>" class="footer__link">Contact Us</a></li>
					<li><a href="#" class="footer__link">Careers</a></li>
				</ul>
			</div>

		</div>

		<div class="footer__bottom">
			<p class="footer__copy">&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> Intercoil International. <?php esc_html_e( 'All rights reserved.', 'intercoil' ); ?></p>
			<nav class="footer__legal" aria-label="<?php esc_attr_e( 'Legal links', 'intercoil' ); ?>">
				<a href="#"><?php esc_html_e( 'Privacy Policy', 'intercoil' ); ?></a>
				<a href="#"><?php esc_html_e( 'Terms of Use', 'intercoil' ); ?></a>
			</nav>
		</div>
	</div>
</footer>

<style>
	.sr-only {
		position: absolute;
		width: 1px; height: 1px;
		padding: 0; margin: -1px;
		overflow: hidden;
		clip: rect(0,0,0,0);
		white-space: nowrap;
		border: 0;
	}
	a.skip-link {
		position: absolute;
		top: -100%;
		left: 16px;
		background: var(--color-accent);
		color: white;
		padding: 10px 20px;
		border-radius: 0 0 8px 8px;
		font-weight: 600;
		z-index: 9999;
		transition: top 0.2s;
	}
	a.skip-link:focus { top: 0; }
</style>
<a class="skip-link" href="#brands"><?php esc_html_e( 'Skip to main content', 'intercoil' ); ?></a>

<?php wp_footer(); ?>
</body>
</html>
