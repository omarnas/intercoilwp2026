<?php
/**
 * Front page template.
 *
 * @package Intercoil
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<?php get_template_part( 'template-parts/home/hero', 'carousel' ); ?>

<?php get_template_part( 'template-parts/home/stats' ); ?>

<?php get_template_part( 'template-parts/home/brand', 'statement' ); ?>

    <!-- ══════════════════════════════════════════
         SECTION 4 — BRAND PORTFOLIO
    ══════════════════════════════════════════ -->
    <section class="brands" id="brands" aria-labelledby="brands-heading">
      <?php get_template_part( 'template-parts/home/brands', 'header' ); ?>

      <div class="brands__showcase">

        <!-- Brand 01 — Intercoil -->
        <article class="brand-panel brand-panel--intercoil fade-up" aria-label="Intercoil brand">
          <div class="brand-panel__bg"  style="background-image: url('<?php echo esc_url( intercoil_asset_uri( 'images/photography/brands/intercoil-brand-new.jpg' ) ); ?>');"></div>
          <div class="brand-panel__overlay"></div>
          <div class="brand-panel__inner">
            <div class="brand-panel__marker" aria-hidden="true">
              <span class="section-marker">
                <span class="section-marker__rule"></span>
                <span class="section-marker__text">01 — Intercoil</span>
              </span>
            </div>
            <div class="brand-panel__content">
              <div class="brand-panel__logo-wrap">
                <img
                  class="brand-panel__logo"
                  src="<?php echo esc_url( intercoil_asset_uri( 'logos/brands/intercoil.png' ) ); ?>"
                  alt="Intercoil"
                  loading="lazy"
                />
              </div>
              <p class="brand-panel__tagline">THE ORIGINAL</p>
              <p class="brand-panel__desc">
                Premium mattress craftsmanship, designed to deliver exceptional comfort and restorative sleep.
              </p>
              <a href="#" class="brand-panel__cta" aria-label="Explore Intercoil">
                Explore Brand
                <svg viewBox="0 0 18 18" fill="none" aria-hidden="true">
                  <path d="M3 9h12M9 3l6 6-6 6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </a>
            </div>
          </div>
        </article>

        <!-- Brand 02 — Beautyrest -->
        <article class="brand-panel brand-panel--reverse fade-up" aria-label="Beautyrest by Simmons brand">
          <div class="brand-panel__bg" style="background-image: url('<?php echo esc_url( intercoil_asset_uri( 'images/photography/brands/beautyrestnew.jpg?2' ) ); ?>');"></div>
          <div class="brand-panel__overlay"></div>
          <div class="brand-panel__inner">
            <div class="brand-panel__marker" aria-hidden="true">
              <span class="section-marker section-marker--reverse">
                <span class="section-marker__rule"></span>
                <span class="section-marker__text">02 — Beautyrest</span>
              </span>
            </div>
            <div class="brand-panel__content">
              <div class="brand-panel__logo-wrap brand-panel__logo-wrap--beautyrest">
                <img
                  class="brand-panel__logo"
                  src="<?php echo esc_url( intercoil_asset_uri( 'logos/brands/beautyrest.png' ) ); ?>"
                  alt="Beautyrest by Simmons"
                  loading="lazy"
                />
              </div>
              <p class="brand-panel__tagline">The World Standard in Premium Sleep</p>
              <p class="brand-panel__desc">
                Now crafted by Intercoil — luxury hospitality heritage trusted by leading hotel groups globally.
              </p>
              <a href="#" class="brand-panel__cta" aria-label="Explore Beautyrest">
                Explore Brand
                <svg viewBox="0 0 18 18" fill="none" aria-hidden="true">
                  <path d="M3 9h12M9 3l6 6-6 6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </a>
            </div>
          </div>
        </article>

        <!-- Brand 03 — Therapedic -->
        <article class="brand-panel fade-up" aria-label="Therapedic brand">
          <div class="brand-panel__bg" style="background-image: url('<?php echo esc_url( intercoil_asset_uri( 'images/photography/brands/therapedicnew2.jpg?2' ) ); ?>');"></div>
          <div class="brand-panel__overlay"></div>
          <div class="brand-panel__inner">
            <div class="brand-panel__marker" aria-hidden="true">
              <span class="section-marker">
                <span class="section-marker__rule"></span>
                <span class="section-marker__text">03 — Therapedic</span>
              </span>
            </div>
            <div class="brand-panel__content">
              <div class="brand-panel__logo-wrap">
                <img
                  class="brand-panel__logo"
                  src="<?php echo esc_url( intercoil_asset_uri( 'logos/brands/therapedic.png' ) ); ?>"
                  alt="Therapedic"
                  loading="lazy"
                />
              </div>
              <p class="brand-panel__tagline">Over 50 Years of Sleep Innovation</p>
              <p class="brand-panel__desc">
                Engineered to support the way your body truly rests.
              </p>
              <a href="#" class="brand-panel__cta" aria-label="Explore Therapedic">
                Explore Brand
                <svg viewBox="0 0 18 18" fill="none" aria-hidden="true">
                  <path d="M3 9h12M9 3l6 6-6 6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </a>
            </div>
          </div>
        </article>

        <!-- Brand 04 — Ghalya's -->
        <article class="brand-panel brand-panel--reverse fade-up" aria-label="Ghalya by Intercoil brand">
          <div class="brand-panel__bg" style="background-image: url('<?php echo esc_url( intercoil_asset_uri( 'images/photography/brands/ghalya.jpg?2' ) ); ?>');"></div>
          <div class="brand-panel__overlay"></div>
          <div class="brand-panel__inner">
            <div class="brand-panel__marker" aria-hidden="true">
              <span class="section-marker section-marker--reverse">
                <span class="section-marker__rule"></span>
                <span class="section-marker__text">04 — Ghalya&rsquo;s</span>
              </span>
            </div>
            <div class="brand-panel__content">
              <div class="brand-panel__logo-wrap brand-panel__logo-wrap--ghalya">
                <img
                  class="brand-panel__logo"
                  src="<?php echo esc_url( intercoil_asset_uri( 'logos/brands/ghalya.png' ) ); ?>"
                  alt="Ghalya by Intercoil"
                  loading="lazy"
                />
              </div>
              <p class="brand-panel__tagline">Created Exclusively for Children</p>
              <p class="brand-panel__desc">
                The first sleep brand for children — designed to support every stage of growing up.
              </p>
              <a href="#" class="brand-panel__cta" aria-label="Explore Ghalya's">
                Explore Brand
                <svg viewBox="0 0 18 18" fill="none" aria-hidden="true">
                  <path d="M3 9h12M9 3l6 6-6 6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </a>
            </div>
          </div>
        </article>

        <!-- Brand 05 — The Bedroom -->
        <article class="brand-panel fade-up" aria-label="The Bedroom by Intercoil brand">
          <div class="brand-panel__bg" style="background-image: url('<?php echo esc_url( intercoil_asset_uri( 'images/photography/brands/showroom.jpg' ) ); ?>');"></div>
          <div class="brand-panel__overlay"></div>
          <div class="brand-panel__inner">
            <div class="brand-panel__marker" aria-hidden="true">
              <span class="section-marker">
                <span class="section-marker__rule"></span>
                <span class="section-marker__text">05 — The Bedroom</span>
              </span>
            </div>
            <div class="brand-panel__content">
              <div class="brand-panel__logo-wrap">
                <img
                  class="brand-panel__logo"
                  src="<?php echo esc_url( intercoil_asset_uri( 'logos/brands/thebedroom.png' ) ); ?>"
                  alt="The Bedroom by Intercoil"
                  loading="lazy"
                />
              </div>
              <p class="brand-panel__tagline">Premium Sleep, Experienced</p>
              <p class="brand-panel__desc">
                Where premium sleep becomes an experience you can see, feel, and take home.
              </p>
              <a href="#" class="brand-panel__cta" aria-label="Explore The Bedroom">
                Explore Brand
                <svg viewBox="0 0 18 18" fill="none" aria-hidden="true">
                  <path d="M3 9h12M9 3l6 6-6 6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </a>
            </div>
          </div>
        </article>

        <!-- Brand 06 — Dolidol -->
        <article class="brand-panel brand-panel--reverse fade-up" aria-label="Dolidol brand">
          <div class="brand-panel__bg" style="background-image: url('<?php echo esc_url( intercoil_asset_uri( 'images/photography/brands/dolidolnew.jpg?2' ) ); ?>');"></div>
          <div class="brand-panel__overlay"></div>
          <div class="brand-panel__inner">
            <div class="brand-panel__marker" aria-hidden="true">
              <span class="section-marker section-marker--reverse">
                <span class="section-marker__rule"></span>
                <span class="section-marker__text">06 — Dolidol</span>
              </span>
            </div>
            <div class="brand-panel__content">
              <div class="brand-panel__logo-wrap brand-panel__logo-wrap--dolidol">
                <img
                  class="brand-panel__logo"
                  src="<?php echo esc_url( intercoil_asset_uri( 'logos/brands/dolidol.png' ) ); ?>"
                  alt="Dolidol"
                  loading="lazy"
                />
              </div>
              <p class="brand-panel__tagline">Quality Sleep, Within Reach</p>
              <p class="brand-panel__desc">
                Accessible comfort and dependable value for every home.
              </p>
              <a href="#" class="brand-panel__cta" aria-label="Explore Dolidol">
                Explore Brand
                <svg viewBox="0 0 18 18" fill="none" aria-hidden="true">
                  <path d="M3 9h12M9 3l6 6-6 6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </a>
            </div>
          </div>
        </article>

      </div>
    </section>

    <!-- ══════════════════════════════════════════
         SECTION 5 — COMFORT COLLECTIONS
    ══════════════════════════════════════════ -->
    <section class="collections" id="collections" aria-labelledby="collections-heading">
      <div class="container">
        <header class="collections__header">
          <span class="section-label" style="color: var(--color-royal);">Product Categories</span>
          <h2 class="collections__heading fade-up" id="collections-heading">
            A World of<br>Refined Rest.
          </h2>
        </header>

        <div class="collections__grid">

          <!-- Large tile — Mattresses -->
          <div class="collection-tile collection-tile--large">
            <div class="reveal-mask">
              <img
                class="collection-tile__img"
                src="<?php echo esc_url( intercoil_asset_uri( 'images/photography/mattresses/comfortable-mattress-and-soft-touch-for-good-sleep-2026-03-23-23-01-57-utc.jpg' ) ); ?>"
                alt="Premium mattress collection"
                loading="lazy"
              />
            </div>
            <div class="collection-tile__overlay"></div>
            <div class="collection-tile__content">
              <h3 class="collection-tile__name">Mattresses</h3>
              <p class="collection-tile__sub">Engineered for every sleep style</p>
            </div>
          </div>

          <!-- Beds & Bedroom Furniture -->
          <div class="collection-tile collection-tile--sm">
            <div class="reveal-mask">
              <img
                class="collection-tile__img"
                src="<?php echo esc_url( intercoil_asset_uri( 'images/photography/general/elegant-bedroom-interior-with-bed-and-decoration-2026-03-10-03-05-55-utc.jpg' ) ); ?>"
                alt="Beds and bedroom furniture"
                loading="lazy"
              />
            </div>
            <div class="collection-tile__overlay"></div>
            <div class="collection-tile__content">
              <h3 class="collection-tile__name">Beds &amp; Bedroom Furniture</h3>
              <p class="collection-tile__sub">Complete sleep environments</p>
            </div>
          </div>

          <!-- Bedding Accessories -->
          <div class="collection-tile collection-tile--sm">
            <div class="reveal-mask">
              <img
                class="collection-tile__img"
                src="<?php echo esc_url( intercoil_asset_uri( 'images/photography/general/folded-grey-bedding-with-cotton-bolls-on-a-white-b-2026-05-13-23-43-57-utc.jpg' ) ); ?>"
                alt="Premium bedding accessories"
                loading="lazy"
              />
            </div>
            <div class="collection-tile__overlay"></div>
            <div class="collection-tile__content">
              <h3 class="collection-tile__name">Bedding Accessories</h3>
              <p class="collection-tile__sub">The finishing touch</p>
            </div>
          </div>

          <!-- Foam & Industrial -->
          <div class="collection-tile collection-tile--sm">
            <div class="reveal-mask">
              <img
                class="collection-tile__img"
                src="<?php echo esc_url( intercoil_asset_uri( 'images/photography/manufacturing/foamsmall.jpg' ) ); ?>"
                alt="Industrial foam solutions"
                loading="lazy"
              />
            </div>
            <div class="collection-tile__overlay"></div>
            <div class="collection-tile__content">
              <h3 class="collection-tile__name">Industrial Foam</h3>
              <p class="collection-tile__sub">Precision materials at scale</p>
            </div>
          </div>

          <!-- Hospitality Sleep -->
          <div class="collection-tile collection-tile--sm">
            <div class="reveal-mask">
              <img
                class="collection-tile__img"
                src="<?php echo esc_url( intercoil_asset_uri( 'images/photography/hotelroom.jpg' ) ); ?>"
                alt="Hospitality sleep solutions"
                loading="lazy"
              />
            </div>
            <div class="collection-tile__overlay"></div>
            <div class="collection-tile__content">
              <h3 class="collection-tile__name">Hospitality Sleep</h3>
              <p class="collection-tile__sub">Built for the world's finest properties</p>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- ══════════════════════════════════════════
         SECTION 6 — HOSPITALITY
    ══════════════════════════════════════════ -->
    <section class="hospitality" id="hospitality" aria-labelledby="hospitality-heading">
      <div class="container">
        <div class="hospitality__inner">

          <div class="hospitality__image-outer reveal-up">
            <div class="hospitality__image-wrap reveal-mask">
              <img
                src="<?php echo esc_url( intercoil_asset_uri( 'images/photography/hospitality-solution.jpg' ) ); ?>"
                alt="Luxury hotel suite featuring Intercoil sleep solutions"
                loading="lazy"
              />
            </div>
          </div>

          <div class="hospitality__content">
            <span class="section-label section-label--light reveal-up">Hospitality Solutions</span>
            <h2 class="hospitality__heading reveal-up delay-1" id="hospitality-heading">
              The Sleep Partner Trusted<br>By The World's Finest Properties.
            </h2>
            <p class="hospitality__body reveal-up delay-2">
              For decades, Intercoil has delivered premium sleep solutions to leading hotels,
              resorts, serviced residences, and hospitality groups across the region and beyond.
              From procurement to installation, we are the partner that understands the demands
              of world-class hospitality.
            </p>

            <div class="reveal-up delay-3">
              <a href="#contact" class="btn btn--primary">
                Explore Hospitality Solutions
                <svg class="btn-arrow" viewBox="0 0 18 18" fill="none" aria-hidden="true">
                  <path d="M3 9h12M9 3l6 6-6 6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </a>
            </div>

            <div class="hospitality__marquee-wrap reveal-up delay-4" aria-label="Hotel partners">
              <div class="hospitality__marquee">
                <div class="hospitality__marquee-track">
                  <span class="hospitality__marquee-logo"><img src="<?php echo esc_url( intercoil_asset_uri( 'logos/hospitality/white/hotels_1.png' ) ); ?>" alt="Hotel partner" loading="eager" decoding="async" /></span>
                  <span class="hospitality__marquee-logo"><img src="<?php echo esc_url( intercoil_asset_uri( 'logos/hospitality/white/hotels_2.png' ) ); ?>" alt="Hotel partner" loading="eager" decoding="async" /></span>
                  <span class="hospitality__marquee-logo"><img src="<?php echo esc_url( intercoil_asset_uri( 'logos/hospitality/white/hotels_3.png' ) ); ?>" alt="Hotel partner" loading="eager" decoding="async" /></span>
                  <span class="hospitality__marquee-logo"><img src="<?php echo esc_url( intercoil_asset_uri( 'logos/hospitality/white/hotels_4.png' ) ); ?>" alt="Hotel partner" loading="eager" decoding="async" /></span>
                  <span class="hospitality__marquee-logo"><img src="<?php echo esc_url( intercoil_asset_uri( 'logos/hospitality/white/hotels_5.png' ) ); ?>" alt="Hotel partner" loading="eager" decoding="async" /></span>
                  <span class="hospitality__marquee-logo"><img src="<?php echo esc_url( intercoil_asset_uri( 'logos/hospitality/white/jumirah.png' ) ); ?>" alt="Jumeirah" loading="eager" decoding="async" /></span>
                  <span class="hospitality__marquee-logo"><img src="<?php echo esc_url( intercoil_asset_uri( 'logos/hospitality/white/hilton.png' ) ); ?>" alt="Hilton" loading="eager" decoding="async" /></span>
                  <span class="hospitality__marquee-logo"><img src="<?php echo esc_url( intercoil_asset_uri( 'logos/hospitality/white/SHANGARALI.png' ) ); ?>" alt="Shangri-La" loading="eager" decoding="async" /></span>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

    <?php get_template_part( 'template-parts/home/timeline' ); ?>

    <!-- ══════════════════════════════════════════
         SECTION 8 — MANUFACTURING
    ══════════════════════════════════════════ -->
    <section class="manufacturing" id="manufacturing" aria-labelledby="manufacturing-heading">
      <div class="container">
        <div class="manufacturing__inner">

          <div class="manufacturing__content">
            <span class="section-label section-label--light">Manufacturing Excellence</span>
            <h2 class="manufacturing__heading fade-up" id="manufacturing-heading">
              Built To The<br>Highest Standards.
            </h2>
            <p class="manufacturing__body fade-up delay-1">
              Three manufacturing facilities. Advanced research and development.
              Rigorous testing. Consistent quality at scale. We don't just meet
              international standards — we help write them.
            </p>

            <div class="fade-up delay-2">
              <a href="#contact" class="btn btn--primary" style="margin-top: 12px;">
                Learn About Our Standards
                <svg class="btn-arrow" viewBox="0 0 18 18" fill="none" aria-hidden="true">
                  <path d="M3 9h12M9 3l6 6-6 6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </a>
            </div>
          </div>

          <div class="manufacturing__certs fade-up delay-1" aria-label="Certifications and standards">
            <?php
            $certifications = array(
              array(
                'image' => 'images/certficates/9001-2015.png',
                'title' => 'QMS 9001:2015',
                'desc'  => 'Quality Management',
              ),
              array(
                'image' => 'images/certficates/45001.png',
                'title' => 'ISO 45001:2018',
                'desc'  => 'Safety Management',
              ),
              array(
                'image' => 'images/certficates/14001.png',
                'title' => 'ISO 14001:2015',
                'desc'  => 'Environmental Management',
              ),
              array(
                'image' => 'images/certficates/isofoam.png',
                'title' => 'ISO Foam',
                'desc'  => 'Certificates for Foam',
              ),
              array(
                'image' => 'images/certficates/Quality Contro.png',
                'title' => 'Quality Control',
                'desc'  => 'Management Plan',
              ),
              array(
                'image' => 'images/certficates/CertiPUR.png',
                'title' => 'CertiPUR',
                'desc'  => 'Foam Certification',
              ),
              array(
                'image' => 'images/certficates/EcoVadis.png',
                'title' => 'EcoVadis',
                'desc'  => 'Sustainability Rating',
              ),
              array(
                'image' => 'images/certficates/csr.png',
                'title' => 'CSR Award',
                'desc'  => 'Corporate Responsibility',
              ),
            );

            foreach ( $certifications as $cert ) :
              $alt = trim( $cert['title'] . ' — ' . $cert['desc'] );
              ?>
              <figure class="manufacturing__cert">
                <div class="manufacturing__cert-mark">
                  <img
                    src="<?php echo esc_url( intercoil_asset_uri( $cert['image'] ) ); ?>"
                    alt="<?php echo esc_attr( $alt ); ?>"
                    loading="lazy"
                    decoding="async"
                  />
                </div>
                <figcaption class="manufacturing__cert-caption">
                  <span class="manufacturing__cert-title"><?php echo esc_html( $cert['title'] ); ?></span>
                  <span class="manufacturing__cert-desc"><?php echo esc_html( $cert['desc'] ); ?></span>
                </figcaption>
              </figure>
            <?php endforeach; ?>
          </div>

        </div>
      </div>
    </section>

    <!-- ══════════════════════════════════════════
         SECTION 9 — FINAL CTA
    ══════════════════════════════════════════ -->
    <section class="cta-section" id="contact" aria-labelledby="cta-heading">
      <div class="cta-section__bg" style="background-image: url('<?php echo esc_url( intercoil_asset_uri( 'images/photography/hospitality/3d-rendering-beautiful-luxury-bedroom-suite-in-hot-2026-03-17-04-32-19-utc.jpg' ) ); ?>');" aria-hidden="true"></div>
      <div class="cta-section__overlay" aria-hidden="true"></div>
      <div class="cta-section__inner">
        <span class="section-label section-label--light fade-up">Let's Work Together</span>
        <h2 class="cta-section__heading fade-up delay-1" id="cta-heading">
          Build With A Name Trusted<br>Across Generations.
        </h2>
        <p class="cta-section__body fade-up delay-2">
          Whether you're a hospitality group, a distributor, or a business seeking
          a premium sleep partner — Intercoil is ready to build with you.
        </p>
        <div class="cta-section__btns fade-up delay-3">
          <a href="mailto:info@intercoil.com" class="btn btn--primary">
            Book a Consultation
            <svg class="btn-arrow" viewBox="0 0 18 18" fill="none" aria-hidden="true">
              <path d="M3 9h12M9 3l6 6-6 6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </a>
          <a href="mailto:info@intercoil.com" class="btn btn--outline">
            Become a Partner
          </a>
        </div>
      </div>
    </section>
<?php
get_footer();
