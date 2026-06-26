/**
 * Intercoil Hero — Full-width image carousel
 * Fade transitions, autoplay, pause on hover, keyboard accessible
 */

(function () {
  'use strict';

  function init() {
    const hero = document.querySelector('.hero-carousel');
    if (!hero) return;

    const slides = hero.querySelectorAll('.hero-carousel__slide');
    const dots   = hero.querySelectorAll('.hero-carousel__dot');
    const prev   = hero.querySelector('.hero-carousel__arrow--prev');
    const next   = hero.querySelector('.hero-carousel__arrow--next');
    const textWrap = hero.querySelector('.hero__text');
    const eyebrow  = hero.querySelector('.hero__eyebrow');
    const heading  = hero.querySelector('.hero__heading');
    const body     = hero.querySelector('.hero__body');

    if (!slides.length) return;

    let current = 0;
    let timer   = null;
    let textTimer = null;
    let hasInitialized = false;
    const INTERVAL = 6000;
    const reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    function formatHeading(text) {
      return (text || '').split('|').map(function (line) {
        return line.trim();
      }).join('<br>');
    }

    function updateHeroText(index, animate) {
      const slide = slides[index];
      if (!slide || !textWrap || !heading || !body) return;

      if (textTimer) clearTimeout(textTimer);

      const applyText = function () {
        const eyebrowText = slide.dataset.heroEyebrow || '';

        if (eyebrow) {
          eyebrow.classList.toggle(
            'hero__eyebrow--category',
            slide.dataset.heroEyebrowVariant === 'category'
          );

          if (eyebrowText) {
            eyebrow.textContent = eyebrowText;
            eyebrow.classList.add('is-visible');
            eyebrow.setAttribute('aria-hidden', 'false');
          } else {
            eyebrow.classList.remove('is-visible');
            eyebrow.setAttribute('aria-hidden', 'true');
          }
        }

        heading.innerHTML = formatHeading(slide.dataset.heroHeading || '');
        body.textContent = slide.dataset.heroBody || '';
      };

      if (!animate || reducedMotion) {
        applyText();
        textWrap.classList.remove('is-changing');
        return;
      }

      textWrap.classList.add('is-changing');

      textTimer = setTimeout(function () {
        applyText();
        textWrap.classList.remove('is-changing');
      }, 320);
    }

    function goTo(index) {
      const changed = index !== current || !hasInitialized;
      current = (index + slides.length) % slides.length;

      slides.forEach(function (slide, i) {
        slide.classList.toggle('is-active', i === current);
        slide.setAttribute('aria-hidden', i === current ? 'false' : 'true');
      });

      dots.forEach(function (dot, i) {
        dot.classList.toggle('is-active', i === current);
        dot.setAttribute('aria-selected', i === current ? 'true' : 'false');
      });

      if (changed) updateHeroText(current, hasInitialized);
      hasInitialized = true;

      var activeWrap = slides[current].querySelector('.reveal-mask');
      if (activeWrap) activeWrap.classList.add('is-revealed');
    }

    function nextSlide() { goTo(current + 1); }
    function prevSlide() { goTo(current - 1); }

    function startAutoplay() {
      if (reducedMotion) return;
      stopAutoplay();
      timer = setInterval(nextSlide, INTERVAL);
    }

    function stopAutoplay() {
      if (timer) {
        clearInterval(timer);
        timer = null;
      }
    }

    dots.forEach(function (dot, i) {
      dot.addEventListener('click', function () {
        goTo(i);
        startAutoplay();
      });
    });

    if (prev) prev.addEventListener('click', function () { prevSlide(); startAutoplay(); });
    if (next) next.addEventListener('click', function () { nextSlide(); startAutoplay(); });

    hero.addEventListener('mouseenter', stopAutoplay);
    hero.addEventListener('mouseleave', startAutoplay);
    hero.addEventListener('focusin', stopAutoplay);
    hero.addEventListener('focusout', function (e) {
      if (!hero.contains(e.relatedTarget)) startAutoplay();
    });

    document.addEventListener('keydown', function (e) {
      if (!hero.matches(':hover') && document.activeElement && !hero.contains(document.activeElement)) return;
      if (e.key === 'ArrowLeft') { prevSlide(); startAutoplay(); }
      if (e.key === 'ArrowRight') { nextSlide(); startAutoplay(); }
    });

    requestAnimationFrame(function () {
      hero.querySelector('.hero__eyebrow')?.classList.add('is-loaded');
      hero.querySelector('.hero__heading')?.classList.add('is-loaded');
      hero.querySelector('.hero__body')?.classList.add('is-loaded');
      hero.querySelector('.hero__ctas')?.classList.add('is-loaded');
    });

    goTo(0);
    startAutoplay();
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }
}());
