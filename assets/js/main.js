/**
 * Intercoil — Main JS
 * Nav scroll state, mobile menu, stats reveal, fade-up observers
 */

(function () {
  'use strict';

  /* ─────────────────────────────────────────
     NAV — transparent → solid on scroll
  ───────────────────────────────────────── */
  function initNav() {
    const nav        = document.querySelector('.nav');
    const hamburger  = document.querySelector('.nav__hamburger');
    const mobileMenu = document.querySelector('.nav__mobile');
    const body       = document.body;

    if (!nav) return;

    // Scroll state
    function onScroll() {
      nav.classList.toggle('is-scrolled', window.scrollY > 40);
    }
    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();

    // Mobile menu
    if (hamburger && mobileMenu) {
      hamburger.addEventListener('click', function () {
        const isOpen = hamburger.classList.toggle('is-open');
        hamburger.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
        mobileMenu.classList.toggle('is-open', isOpen);
        body.style.overflow = isOpen ? 'hidden' : '';
      });

      // Mobile accordion
      mobileMenu.querySelectorAll('.nav__mobile-trigger').forEach(function (trigger) {
        trigger.addEventListener('click', function () {
          const group = trigger.closest('.nav__mobile-group');
          const isOpen = group.classList.toggle('is-open');
          trigger.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
        });
      });

      // Close on Escape
      document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape' && mobileMenu.classList.contains('is-open')) {
          hamburger.classList.remove('is-open');
          hamburger.setAttribute('aria-expanded', 'false');
          mobileMenu.classList.remove('is-open');
          body.style.overflow = '';
        }
      });
    }

    // Desktop dropdown aria state
    document.querySelectorAll('.nav__item').forEach(function (item) {
      const trigger = item.querySelector('.nav__trigger');
      if (!trigger) return;

      item.addEventListener('mouseenter', function () {
        trigger.setAttribute('aria-expanded', 'true');
      });
      item.addEventListener('mouseleave', function () {
        trigger.setAttribute('aria-expanded', 'false');
      });
      item.addEventListener('focusin', function () {
        trigger.setAttribute('aria-expanded', 'true');
      });
      item.addEventListener('focusout', function () {
        if (!item.contains(document.activeElement)) {
          trigger.setAttribute('aria-expanded', 'false');
        }
      });
    });
  }

  /* ─────────────────────────────────────────
     FADE-UP — IntersectionObserver
  ───────────────────────────────────────── */
  function initFadeUp() {
    const els = document.querySelectorAll('.fade-up');
    if (!els.length) return;

    const io = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-visible');
          io.unobserve(entry.target);
        }
      });
    }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });

    els.forEach(function (el) { io.observe(el); });
  }

  /* ─────────────────────────────────────────
     STATS — calm count-up on reveal
  ───────────────────────────────────────── */
  function initStatsReveal() {
    const section = document.querySelector('.stats');
    const items   = document.querySelectorAll('[data-stat-reveal]');
    if (!section || !items.length) return;

    section.classList.add('stats--ready');

    const reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    const COUNT_MS      = 1800;

    function setFinalValue(item) {
      const valueEl = item.querySelector('.stats__value');
      if (!valueEl) return;
      valueEl.textContent = valueEl.dataset.statValue || '0';
    }

    function animateValue(item) {
      const valueEl = item.querySelector('.stats__value');
      if (!valueEl || valueEl.dataset.counted === 'true') return;

      valueEl.dataset.counted = 'true';

      const target = parseInt(valueEl.dataset.statValue, 10);
      if (!target || reducedMotion) {
        setFinalValue(item);
        return;
      }

      const delay = parseInt(getComputedStyle(item).getPropertyValue('--stat-delay'), 10) || 0;
      const startAt = performance.now() + delay;

      function frame(now) {
        if (now < startAt) {
          requestAnimationFrame(frame);
          return;
        }

        const progress = Math.min((now - startAt) / COUNT_MS, 1);
        valueEl.textContent = String(Math.round(progress * target));

        if (progress < 1) {
          requestAnimationFrame(frame);
        } else {
          valueEl.textContent = String(target);
        }
      }

      requestAnimationFrame(frame);
    }

    function revealItem(item) {
      item.classList.add('is-revealed');
      animateValue(item);
    }

    if (reducedMotion) {
      items.forEach(function (item) {
        setFinalValue(item);
        item.classList.add('is-revealed');
      });
      return;
    }

    const io = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (!entry.isIntersecting) return;
        revealItem(entry.target);
        io.unobserve(entry.target);
      });
    }, { threshold: 0.45, rootMargin: '0px 0px -8% 0px' });

    items.forEach(function (item) { io.observe(item); });
  }

  /* ─────────────────────────────────────────
     SMOOTH SCROLL — anchor links
  ───────────────────────────────────────── */
  function initSmoothScroll() {
    document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
      anchor.addEventListener('click', function (e) {
        const target = document.querySelector(this.getAttribute('href'));
        if (!target) return;
        e.preventDefault();
        target.scrollIntoView({ behavior: 'smooth', block: 'start' });
      });
    });
  }

  /* ─────────────────────────────────────────
     BRANDS — subtle parallax on scroll
  ───────────────────────────────────────── */
  function initBrandPanels() {
    /* Brand motion handled in motion.js */
  }

  /* ─────────────────────────────────────────
     HOSPITALITY — seamless infinite logo marquee
  ───────────────────────────────────────── */
  function initHospitalityMarquee() {
    const track = document.querySelector('.hospitality__marquee-track');
    if (!track) return;
    if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;

    const originals = Array.from(track.children);
    if (!originals.length) return;

    function measureSetWidth() {
      const gap = parseFloat(getComputedStyle(track).gap) || 0;
      let width = 0;

      originals.forEach(function (item, index) {
        width += item.getBoundingClientRect().width;
        if (index < originals.length - 1) width += gap;
      });

      return width;
    }

    function cloneSet() {
      originals.forEach(function (item) {
        const clone = item.cloneNode(true);
        clone.setAttribute('aria-hidden', 'true');

        const img = clone.querySelector('img');
        if (img) img.alt = '';

        track.appendChild(clone);
      });
    }

    function setup() {
      cloneSet();

      while (track.scrollWidth < window.innerWidth * 2) {
        cloneSet();
      }

      track.style.setProperty('--marquee-set-width', measureSetWidth() + 'px');
      track.classList.add('is-ready');
    }

    const images = track.querySelectorAll('img');
    const imagePromises = Array.from(images).map(function (img) {
      if (img.complete) return Promise.resolve();
      return new Promise(function (resolve) {
        img.addEventListener('load', resolve, { once: true });
        img.addEventListener('error', resolve, { once: true });
      });
    });

    Promise.all(imagePromises).then(setup);

    let resizeTimer;
    window.addEventListener('resize', function () {
      if (!track.classList.contains('is-ready')) return;

      clearTimeout(resizeTimer);
      resizeTimer = setTimeout(function () {
        track.style.setProperty('--marquee-set-width', measureSetWidth() + 'px');
      }, 150);
    });
  }

  /* ─────────────────────────────────────────
     TIMELINE — horizontal scroll affordances
  ───────────────────────────────────────── */
  function initTimelineScroll() {
    const wrap = document.querySelector('[data-timeline-scroll]');
    if (!wrap) return;

    const track = wrap.querySelector('.timeline__track');
    const prevBtn = document.querySelector('.timeline__arrow--prev');
    const nextBtn = document.querySelector('.timeline__arrow--next');
    const progressFill = document.querySelector('.timeline__progress-fill');
    const toolbar = document.querySelector('.timeline__toolbar');
    const progress = document.querySelector('.timeline__progress');

    if (!track) return;

    const mobileQuery = window.matchMedia('(max-width: 680px)');
    const reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)');
    let hintPlayed = false;
    let hintAnimating = false;
    let hintRaf = null;
    let programmaticScroll = false;

    function cancelScrollHint() {
      if (hintRaf) {
        cancelAnimationFrame(hintRaf);
        hintRaf = null;
      }
      hintAnimating = false;
      wrap.classList.remove('is-hinting');
      track.classList.remove('is-hinting');
    }

    function animateScrollLeft(target, duration, done) {
      programmaticScroll = true;
      const start = track.scrollLeft;
      const distance = target - start;
      const startTime = performance.now();

      function step(now) {
        const progress = Math.min((now - startTime) / duration, 1);
        const eased = progress < 0.5
          ? 2 * progress * progress
          : 1 - Math.pow(-2 * progress + 2, 2) / 2;

        track.scrollLeft = start + distance * eased;

        if (progress < 1) {
          hintRaf = requestAnimationFrame(step);
        } else {
          programmaticScroll = false;
          if (done) done();
        }
      }

      hintRaf = requestAnimationFrame(step);
    }

    function playScrollHint() {
      if (hintPlayed || hintAnimating || mobileQuery.matches || reducedMotion.matches) return;

      const maxScroll = track.scrollWidth - track.clientWidth;
      if (maxScroll <= 4 || track.scrollLeft > 4) return;

      hintPlayed = true;
      hintAnimating = true;
      wrap.classList.add('is-hinting');
      track.classList.add('is-hinting');

      const nudge = Math.min(getScrollStep() * 0.45, 110);

      animateScrollLeft(nudge, 650, function () {
        setTimeout(function () {
          animateScrollLeft(0, 750, function () {
            cancelScrollHint();
            updateTimelineScroll();
          });
        }, 180);
      });
    }

    function getScrollStep() {
      const item = track.querySelector('.timeline__item');
      if (!item) return track.clientWidth * 0.75;
      return item.getBoundingClientRect().width;
    }

    function updateTimelineScroll() {
      if (mobileQuery.matches) return;

      const maxScroll = track.scrollWidth - track.clientWidth;
      const scrollable = maxScroll > 4;

      wrap.classList.toggle('is-scrollable', scrollable);
      wrap.classList.toggle('can-scroll-left', track.scrollLeft > 4);
      wrap.classList.toggle('is-at-end', track.scrollLeft >= maxScroll - 4);
      wrap.classList.toggle('is-scrolled', track.scrollLeft > 4);

      if (prevBtn) prevBtn.disabled = !scrollable || track.scrollLeft <= 4;
      if (nextBtn) nextBtn.disabled = !scrollable || track.scrollLeft >= maxScroll - 4;

      if (progressFill && scrollable) {
        progressFill.style.width = ((track.scrollLeft / maxScroll) * 100) + '%';
      } else if (progressFill) {
        progressFill.style.width = '100%';
      }

      if (toolbar) toolbar.hidden = !scrollable;
      if (progress) progress.hidden = !scrollable;

      if (typeof window.IntercoilUpdateTimelineActive === 'function') {
        window.IntercoilUpdateTimelineActive();
      }
    }

    function onUserScroll() {
      if (hintAnimating && !programmaticScroll) cancelScrollHint();
      updateTimelineScroll();
    }

    function onUserInteract() {
      cancelScrollHint();
      hintPlayed = true;
    }

    function scrollByStep(direction) {
      track.scrollBy({ left: direction * getScrollStep(), behavior: 'smooth' });
    }

    if (prevBtn) {
      prevBtn.addEventListener('click', function () {
        onUserInteract();
        scrollByStep(-1);
      });
    }

    if (nextBtn) {
      nextBtn.addEventListener('click', function () {
        onUserInteract();
        scrollByStep(1);
      });
    }

    track.addEventListener('scroll', onUserScroll, { passive: true });
    track.addEventListener('wheel', onUserInteract, { passive: true });
    track.addEventListener('touchstart', onUserInteract, { passive: true });

    track.addEventListener('keydown', function (e) {
      if (mobileQuery.matches) return;

      if (e.key === 'ArrowRight') {
        e.preventDefault();
        scrollByStep(1);
      } else if (e.key === 'ArrowLeft') {
        e.preventDefault();
        scrollByStep(-1);
      }
    });

    let isDragging = false;
    let dragStartX = 0;
    let dragStartScroll = 0;

    track.addEventListener('mousedown', function (e) {
      if (mobileQuery.matches || e.button !== 0) return;
      onUserInteract();

      isDragging = true;
      dragStartX = e.pageX;
      dragStartScroll = track.scrollLeft;
      track.classList.add('is-dragging');
    });

    window.addEventListener('mousemove', function (e) {
      if (!isDragging) return;
      track.scrollLeft = dragStartScroll - (e.pageX - dragStartX);
    });

    window.addEventListener('mouseup', function () {
      if (!isDragging) return;
      isDragging = false;
      track.classList.remove('is-dragging');
      updateTimelineScroll();
    });

    mobileQuery.addEventListener('change', updateTimelineScroll);
    window.addEventListener('resize', updateTimelineScroll);

    updateTimelineScroll();

    if ('IntersectionObserver' in window) {
      const hintObserver = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            setTimeout(playScrollHint, 700);
            hintObserver.disconnect();
          }
        });
      }, { threshold: 0.35 });

      hintObserver.observe(wrap);
    }
  }

  /* ─────────────────────────────────────────
     BOOT
  ───────────────────────────────────────── */
  function init() {
    initNav();
    initFadeUp();
    initStatsReveal();
    initSmoothScroll();
    initBrandPanels();
    initHospitalityMarquee();
    initTimelineScroll();
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }
}());
