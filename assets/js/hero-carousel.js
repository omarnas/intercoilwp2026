/**
 * Intercoil Hero — Premium fade carousel
 * Side navigation, autoplay progress, keyboard + mobile swipe
 */

(function () {
  'use strict';

  function init() {
    const hero = document.querySelector('.hero-carousel');
    if (!hero) return;

    const slides      = hero.querySelectorAll('.hero-carousel__slide');
    const dots        = hero.querySelectorAll('.hero-carousel__dot');
    const prev        = hero.querySelector('.hero-carousel__arrow--prev');
    const next        = hero.querySelector('.hero-carousel__arrow--next');
    const contentWrap = hero.querySelector('.hero__content');
    const eyebrow     = hero.querySelector('.hero__eyebrow');
    const heading     = hero.querySelector('.hero__heading');
    const body        = hero.querySelector('.hero__body');

    if (!slides.length) return;

    const AUTOPLAY_MS   = 4500;
    const TEXT_OUT_MS   = 420;
    const SWIPE_MIN     = 48;
    const reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    const touchEnabled  = window.matchMedia('(pointer: coarse)').matches;

    let current             = 0;
    let autoplayTimer       = null;
    let textTimer           = null;
    let hasInitialized      = false;
    let isPaused            = false;
    let heroInView          = true;
    let touchStartX         = 0;
    let firstCycleComplete  = false;
    let observerInitialized = false;

    hero.style.setProperty('--hero-autoplay-ms', AUTOPLAY_MS + 'ms');

    function formatHeading(text) {
      return (text || '').split('|').map(function (line) {
        return line.trim();
      }).join('<br>');
    }

    function updateNavState() {
      hero.classList.toggle('is-first-slide', current === 0);
    }

    function stopAutoplay() {
      if (autoplayTimer) {
        clearTimeout(autoplayTimer);
        autoplayTimer = null;
      }
    }

    function resetDotProgress() {
      dots.forEach(function (dot, i) {
        const fill = dot.querySelector('.hero-carousel__dot-fill');
        if (!fill) return;

        fill.style.animation = 'none';
        fill.style.width = '0';

        if (i === current) {
          fill.offsetHeight;

          if (reducedMotion) {
            fill.style.width = '100%';
          } else if (!isPaused) {
            fill.style.animation = '';
          }
        }
      });
    }

    function scheduleAutoplay() {
      stopAutoplay();

      if (reducedMotion || isPaused || !heroInView) return;

      resetDotProgress();

      autoplayTimer = setTimeout(function () {
        firstCycleComplete = true;
        goTo(current + 1);
      }, AUTOPLAY_MS);
    }

    function setPaused(paused) {
      isPaused = paused;
      hero.classList.toggle('is-paused', paused);

      if (paused) {
        stopAutoplay();
      } else {
        scheduleAutoplay();
      }
    }

    function updateHeroText(index, animate) {
      const slide = slides[index];
      if (!slide || !contentWrap || !heading || !body) return;

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
        contentWrap.classList.remove('is-changing');
        return;
      }

      contentWrap.classList.add('is-changing');

      textTimer = setTimeout(function () {
        applyText();
        contentWrap.classList.remove('is-changing');
      }, TEXT_OUT_MS);
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

      if (changed) {
        updateHeroText(current, hasInitialized);
      }

      hasInitialized = true;
      updateNavState();

      const activeWrap = slides[current].querySelector('.reveal-mask');
      if (activeWrap) activeWrap.classList.add('is-revealed');

      scheduleAutoplay();
    }

    function userGoTo(index) {
      stopAutoplay();
      goTo(index);
    }

    dots.forEach(function (dot, i) {
      dot.addEventListener('click', function () {
        userGoTo(i);
      });
    });

    if (prev) {
      prev.addEventListener('click', function () {
        userGoTo(current - 1);
      });
    }

    if (next) {
      next.addEventListener('click', function () {
        userGoTo(current + 1);
      });
    }

    hero.addEventListener('mouseenter', function () {
      if (!firstCycleComplete) return;
      setPaused(true);
    });
    hero.addEventListener('mouseleave', function () { setPaused(false); });

    hero.addEventListener('focusin', function () {
      if (!firstCycleComplete) return;
      setPaused(true);
    });
    hero.addEventListener('focusout', function (e) {
      if (!hero.contains(e.relatedTarget)) setPaused(false);
    });

    if (touchEnabled) {
      hero.addEventListener('touchstart', function (e) {
        if (!e.changedTouches || !e.changedTouches.length) return;
        touchStartX = e.changedTouches[0].screenX;
        setPaused(true);
      }, { passive: true });

      hero.addEventListener('touchend', function (e) {
        if (!e.changedTouches || !e.changedTouches.length) return;

        const diff = touchStartX - e.changedTouches[0].screenX;

        if (Math.abs(diff) >= SWIPE_MIN) {
          stopAutoplay();
          isPaused = false;
          hero.classList.remove('is-paused');
          goTo(diff > 0 ? current + 1 : current - 1);
        } else {
          setPaused(false);
        }
      }, { passive: true });

      hero.addEventListener('touchcancel', function () {
        setPaused(false);
      }, { passive: true });
    }

    document.addEventListener('keydown', function (e) {
      if (!heroInView) return;

      if (e.key === 'ArrowLeft') {
        e.preventDefault();
        userGoTo(current - 1);
      }

      if (e.key === 'ArrowRight') {
        e.preventDefault();
        userGoTo(current + 1);
      }
    });

    const heroObserver = new IntersectionObserver(function (entries) {
      heroInView = entries[0].isIntersecting;

      // Skip the initial callback — goTo(0) already started the timer.
      if (!observerInitialized) {
        observerInitialized = true;
        if (!heroInView) stopAutoplay();
        return;
      }

      if (heroInView && !isPaused) {
        scheduleAutoplay();
      } else if (!heroInView) {
        stopAutoplay();
      }
    }, { threshold: 0.35 });

    heroObserver.observe(hero);

    requestAnimationFrame(function () {
      hero.querySelector('.hero__eyebrow')?.classList.add('is-loaded');
      hero.querySelector('.hero__heading')?.classList.add('is-loaded');
      hero.querySelector('.hero__body')?.classList.add('is-loaded');
      hero.querySelector('.hero__ctas')?.classList.add('is-loaded');
    });

    goTo(0);
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }
}());
