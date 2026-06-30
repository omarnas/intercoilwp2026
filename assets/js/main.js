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
        item.classList.add('is-counted');
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
          item.classList.add('is-counted');
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
        item.classList.add('is-revealed', 'is-counted');
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
     BOOT
  ───────────────────────────────────────── */
  function init() {
    initNav();
    initFadeUp();
    initStatsReveal();
    initSmoothScroll();
    initBrandPanels();
    initHospitalityMarquee();
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }
}());
