/**
 * Intercoil — Premium motion (GSAP + refined interactions)
 */

(function () {
  'use strict';

  var reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  function hasGsap() {
    return typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined';
  }

  function initRevealMasks() {
    var masks = document.querySelectorAll('.reveal-mask');
    if (!masks.length) return;

    var io = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (!entry.isIntersecting) return;
        entry.target.classList.add('is-revealed');
        io.unobserve(entry.target);
      });
    }, { threshold: 0.15, rootMargin: '0px 0px -6% 0px' });

    masks.forEach(function (el) { io.observe(el); });
  }

  function initRevealUp() {
    var els = document.querySelectorAll('.reveal-up');
    if (!els.length) return;

    var io = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (!entry.isIntersecting) return;
        entry.target.classList.add('is-visible');
        io.unobserve(entry.target);
      });
    }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });

    els.forEach(function (el) { io.observe(el); });
  }

  function initBrandPanels() {
    var panels = document.querySelectorAll('.brand-panel');
    if (!panels.length) return;

    var io = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (!entry.isIntersecting) return;
        entry.target.classList.add('is-revealed');
        io.unobserve(entry.target);
      });
    }, { threshold: 0.15, rootMargin: '0px 0px -5% 0px' });

    panels.forEach(function (panel) { io.observe(panel); });
  }

  function initHeroMotion() {
    if (!hasGsap() || reducedMotion) return;

    var hero = document.querySelector('.hero-carousel');
    if (!hero) return;

    gsap.registerPlugin(ScrollTrigger);

    var slides = hero.querySelector('.hero-carousel__slides');
    if (slides) {
      gsap.to(slides, {
        yPercent: 6,
        ease: 'none',
        scrollTrigger: {
          trigger: hero,
          start: 'top top',
          end: 'bottom top',
          scrub: 0.8,
        },
      });
    }
  }

  function initHospitalityMotion() {
    var section = document.querySelector('.hospitality');
    if (!section) return;

    var logoWrap = section.querySelector('.hospitality__marquee-wrap');
    var imageOuter = section.querySelector('.hospitality__image-outer');
    var content = section.querySelector('.hospitality__content');

    if (logoWrap) {
      var logoIo = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
          if (!entry.isIntersecting) return;
          entry.target.classList.add('is-logos-revealed');
          logoIo.unobserve(entry.target);
        });
      }, { threshold: 0.3 });
      logoIo.observe(logoWrap);
    }

    if (!hasGsap() || reducedMotion) return;

    gsap.registerPlugin(ScrollTrigger);

    if (imageOuter) {
      gsap.to(imageOuter, {
        y: -28,
        ease: 'none',
        scrollTrigger: {
          trigger: section,
          start: 'top bottom',
          end: 'bottom top',
          scrub: 0.7,
        },
      });
    }

    if (content) {
      gsap.to(content, {
        y: 18,
        ease: 'none',
        scrollTrigger: {
          trigger: section,
          start: 'top bottom',
          end: 'bottom top',
          scrub: 0.7,
        },
      });
    }
  }

  function initTimelineMotion() {
    var section = document.querySelector('.timeline');
    var track = document.querySelector('.timeline__track');
    if (!section || !track) return;

    var items = track.querySelectorAll('.timeline__item');
    var mobileQuery = window.matchMedia('(max-width: 680px)');

    function revealItems() {
      if (track.classList.contains('is-items-revealed')) return;
      track.classList.add('is-items-revealed', 'is-motion-ready');

      items.forEach(function (item, i) {
        setTimeout(function () {
          item.classList.add('is-entered');
        }, i * 80);
      });
    }

    var sectionIo = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (!entry.isIntersecting) return;
        revealItems();
        sectionIo.unobserve(entry.target);
      });
    }, { threshold: 0.25 });

    sectionIo.observe(section);

    function updateActiveItem() {
      if (mobileQuery.matches || !track.classList.contains('is-motion-ready')) return;

      var trackRect = track.getBoundingClientRect();
      var centerX = trackRect.left + trackRect.width * 0.42;
      var closest = null;
      var minDist = Infinity;

      items.forEach(function (item) {
        var rect = item.getBoundingClientRect();
        var itemCenter = rect.left + rect.width * 0.5;
        var dist = Math.abs(itemCenter - centerX);

        if (dist < minDist) {
          minDist = dist;
          closest = item;
        }
      });

      items.forEach(function (item) {
        item.classList.toggle('is-active', item === closest);
      });
    }

    window.IntercoilUpdateTimelineActive = updateActiveItem;

    track.addEventListener('scroll', updateActiveItem, { passive: true });
    window.addEventListener('resize', updateActiveItem);
    mobileQuery.addEventListener('change', updateActiveItem);
    updateActiveItem();
  }

  function initCollectionReveals() {
    var tiles = document.querySelectorAll('.collection-tile');
    if (!tiles.length) return;

    var io = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (!entry.isIntersecting) return;
        entry.target.classList.add('is-revealed');
        var mask = entry.target.querySelector('.reveal-mask');
        if (mask) mask.classList.add('is-revealed');
        io.unobserve(entry.target);
      });
    }, { threshold: 0.15 });

    tiles.forEach(function (tile) { io.observe(tile); });
  }

  function boot() {
    document.documentElement.classList.add('motion-ready');

    if (reducedMotion) {
      document.querySelectorAll('.reveal-mask, .brand-panel, .collection-tile').forEach(function (el) {
        el.classList.add('is-revealed');
      });
      document.querySelectorAll('.reveal-up').forEach(function (el) {
        el.classList.add('is-visible');
      });
      document.querySelectorAll('.timeline__item').forEach(function (el) {
        el.classList.add('is-entered');
      });
      var logoWrap = document.querySelector('.hospitality__marquee-wrap');
      if (logoWrap) logoWrap.classList.add('is-logos-revealed');
      return;
    }

    initRevealMasks();
    initRevealUp();
    initBrandPanels();
    initHeroMotion();
    initHospitalityMotion();
    initTimelineMotion();
    initCollectionReveals();

    if (hasGsap()) {
      ScrollTrigger.addEventListener('refresh', function () {});
    }
  }

  function waitForGsapAndBoot() {
    if (document.readyState === 'loading') {
      document.addEventListener('DOMContentLoaded', waitForGsapAndBoot);
      return;
    }

    if (!hasGsap()) {
      var attempts = 0;
      var timer = setInterval(function () {
        attempts += 1;
        if (hasGsap() || attempts > 40) {
          clearInterval(timer);
          boot();
        }
      }, 50);
      return;
    }

    boot();
  }

  waitForGsapAndBoot();
}());
