<?php
/**
 * Homepage milestones — vertical scroll storytelling timeline.
 *
 * @package Intercoil
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$milestones = array(
	array(
		'year'  => '1974–2000',
		'title' => 'The Beginning',
		'body'  => '<p class="timeline__body">Established as International Foam factory, gradually diversified into furniture.</p>',
	),
	array(
		'year'  => '2001–2005',
		'title' => 'Growth &amp; Rebrand',
		'body'  => '<ul class="timeline__list"><li><strong>2001</strong> — ISO 9001:2000 Certification. First in the Middle East region.</li><li><strong>2002</strong> — Became licensee manufacturers of American brand Therapedic. Relocated the facility to Al Quoz area.</li><li><strong>2003</strong> — Rebranded as Intercoil International LLC.</li><li><strong>2005</strong> — Expansion beyond UAE, into Oman.</li></ul>',
	),
	array(
		'year'  => '2007',
		'title' => 'Certification &amp; Record',
		'body'  => '<ul class="timeline__list"><li>OHSAS 18001 certification.</li><li>Guinness World Record for largest bed set.</li></ul>',
	),
	array(
		'year'  => '2009',
		'title' => 'Lebanon Expansion',
		'body'  => '<p class="timeline__body">Expanded into Lebanon, first wholly owned subsidiary outside the GCC.</p>',
	),
	array(
		'year'  => '2010',
		'title' => 'Simmons &amp; Guinness Record',
		'body'  => '<ul class="timeline__list"><li>Became licensee manufacturer of Simmons, the leading American bedding company.</li><li>3rd Guinness World Record for longest human mattress dominos.</li></ul>',
	),
	array(
		'year'  => '2012–2013',
		'title' => 'Excellence &amp; Manufacturing',
		'body'  => '<ul class="timeline__list"><li><strong>2012</strong> — Mohammed Bin Rashid Al Maktoum Business Excellence Award.</li><li><strong>2013</strong> — State-of-the-art foam factory became operational in RAK, UAE.</li></ul>',
	),
	array(
		'year'  => '2014',
		'title' => 'The Bedroom &amp; Egypt',
		'body'  => '<ul class="timeline__list"><li>Launch of The Bedroom by Intercoil.</li><li>Opened the first retail store in Egypt.</li></ul>',
	),
	array(
		'year'  => '2015',
		'title' => 'Kenya &amp; Oeko-Tex',
		'body'  => '<ul class="timeline__list"><li>First licensee in Kenya.</li><li>Won the Oeko-Tex certification.</li></ul>',
	),
	array(
		'year'  => '2017',
		'title' => 'Awards &amp; Vispring',
		'body'  => '<ul class="timeline__list"><li>Dubai Service Excellence Award.</li><li>Launched the Vispring brand.</li><li>International Business Excellence Award.</li></ul>',
	),
	array(
		'year'  => '2018',
		'title' => 'Saudi Arabia',
		'body'  => '<p class="timeline__body">Started mattress production facility in Dammam, KSA.</p>',
	),
	array(
		'year'  => '2021',
		'title' => 'CertiPUR-US',
		'body'  => '<p class="timeline__body">CertiPUR-US certification.</p>',
	),
);

$milestone_count = count( $milestones );
$dot_count       = max( 1, $milestone_count - 1 );
?>

<section class="timeline" id="why" aria-labelledby="timeline-heading">
	<div class="container timeline__intro">
		<header class="timeline__header">
			<span class="section-label timeline__label">Key Milestones</span>
			<h2 class="timeline__heading fade-up" id="timeline-heading">
				Five Decades of<br><em>Defining Sleep.</em>
			</h2>
			<p class="timeline__lede fade-up delay-1">
				From a single factory in Dubai to a globally respected sleep group —
				milestones that shaped an industry.
			</p>
		</header>
	</div>

	<div class="timeline__story" data-timeline-story data-milestone-count="<?php echo esc_attr( (string) $milestone_count ); ?>">
		<div class="timeline__pin">
			<aside class="timeline__rail" aria-hidden="true">
				<div class="timeline__rail-track"></div>
				<div class="timeline__rail-fill" data-timeline-rail-fill></div>
				<ol class="timeline__rail-dots" style="--dot-count: <?php echo esc_attr( (string) $dot_count ); ?>">
					<?php foreach ( $milestones as $index => $milestone ) : ?>
						<li style="--dot-index: <?php echo esc_attr( (string) $index ); ?>">
							<span
								class="timeline__rail-dot<?php echo 0 === $index ? ' is-active is-current' : ''; ?>"
								data-timeline-rail-dot
							></span>
						</li>
					<?php endforeach; ?>
				</ol>
			</aside>

			<div class="timeline__stage">
				<ol class="timeline__chapters" data-timeline-chapters>
					<?php foreach ( $milestones as $index => $milestone ) : ?>
						<li
							class="timeline__chapter<?php echo 0 === $index ? ' is-active' : ''; ?>"
							data-timeline-chapter
							aria-hidden="<?php echo 0 === $index ? 'false' : 'true'; ?>"
						>
							<p class="timeline__year" data-timeline-year><?php echo esc_html( $milestone['year'] ); ?></p>
							<div class="timeline__axis" aria-hidden="true">
								<span class="timeline__axis-line" data-timeline-axis-line></span>
								<span class="timeline__axis-dot" data-timeline-axis-dot></span>
							</div>
							<h3 class="timeline__title"><?php echo wp_kses_post( $milestone['title'] ); ?></h3>
							<div class="timeline__copy">
								<?php echo wp_kses_post( $milestone['body'] ); ?>
							</div>
						</li>
					<?php endforeach; ?>
				</ol>
			</div>
		</div>
	</div>
</section>
