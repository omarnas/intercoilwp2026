/**
 * Intercoil — Milestones vertical editorial timeline (GSAP ScrollTrigger)
 */
(function () {
  'use strict';

  var ctx;

  function enableStatic(section) {
    if (section) {
      section.classList.add('is-static');
    }
  }

  function setActiveIndex(chapters, railDots, index) {
    chapters.forEach(function (chapter, i) {
      var isActive = i === index;
      chapter.classList.toggle('is-active', isActive);
      chapter.setAttribute('aria-hidden', isActive ? 'false' : 'true');
    });

    railDots.forEach(function (dot, i) {
      dot.classList.toggle('is-active', i <= index);
      dot.classList.toggle('is-current', i === index);
    });
  }

  function destroyTimeline() {
    if (ctx) {
      ctx.revert();
      ctx = null;
    }
  }

  function initTimelineStory() {
    var story = document.querySelector('[data-timeline-story]');
    if (!story) return;

    var section = story.closest('.timeline');
    var pin = story.querySelector('.timeline__pin');
    var chapters = Array.prototype.slice.call(story.querySelectorAll('[data-timeline-chapter]'));
    var railDots = Array.prototype.slice.call(story.querySelectorAll('[data-timeline-rail-dot]'));
    var railFill = story.querySelector('[data-timeline-rail-fill]');
    var reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    var mobileQuery = window.matchMedia('(max-width: 900px)');

    destroyTimeline();

    if (!chapters.length || !pin) return;

    if (reducedMotion || mobileQuery.matches || typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined') {
      enableStatic(section);
      return;
    }

    section.classList.remove('is-static');
    gsap.registerPlugin(ScrollTrigger);

    var chapterCount = chapters.length;
    var segmentCount = Math.max(chapterCount - 1, 1);

    chapters.forEach(function (chapter) {
      var year = chapter.querySelector('[data-timeline-year]');
      var axisLine = chapter.querySelector('[data-timeline-axis-line]');
      var axisDot = chapter.querySelector('[data-timeline-axis-dot]');
      var title = chapter.querySelector('.timeline__title');
      var copy = chapter.querySelector('.timeline__copy');

      gsap.set(chapter, { autoAlpha: 0 });
      if (year) gsap.set(year, { y: 24, scale: 1.03 });
      if (axisLine) gsap.set(axisLine, { scaleY: 0, transformOrigin: 'top center' });
      if (axisDot) gsap.set(axisDot, { scale: 0.6 });
      if (title) gsap.set(title, { y: 20, autoAlpha: 0 });
      if (copy) gsap.set(copy, { y: 16, autoAlpha: 0 });
    });

    var first = chapters[0];
    gsap.set(first, { autoAlpha: 1 });
    gsap.set(first.querySelector('[data-timeline-year]'), { y: 0, scale: 1 });
    gsap.set(first.querySelector('[data-timeline-axis-line]'), { scaleY: 1 });
    gsap.set(first.querySelector('[data-timeline-axis-dot]'), { scale: 1, backgroundColor: '#001F8C' });
    gsap.set(first.querySelector('.timeline__title'), { y: 0, autoAlpha: 1 });
    gsap.set(first.querySelector('.timeline__copy'), { y: 0, autoAlpha: 1 });
    if (railFill) gsap.set(railFill, { scaleY: 0, transformOrigin: 'top center' });

    setActiveIndex(chapters, railDots, 0);

    ctx = gsap.context(function () {
      var master = gsap.timeline({
        scrollTrigger: {
          trigger: story,
          start: 'top top',
          end: function () {
            return '+=' + (segmentCount * window.innerHeight);
          },
          pin: pin,
          scrub: 1,
          anticipatePin: 1,
          invalidateOnRefresh: true,
          snap: chapterCount > 1 ? {
            snapTo: 1 / segmentCount,
            duration: { min: 0.4, max: 0.9 },
            delay: 0.04,
            ease: 'power2.inOut'
          } : false,
          onUpdate: function (self) {
            var index = chapterCount <= 1 ? 0 : Math.round(self.progress * segmentCount);
            setActiveIndex(chapters, railDots, index);
            if (railFill) {
              gsap.set(railFill, { scaleY: self.progress });
            }
          }
        }
      });

      if (railFill) {
        master.to(railFill, {
          scaleY: 1,
          ease: 'none',
          duration: segmentCount
        }, 0);
      }

      for (var i = 1; i < chapterCount; i++) {
        var prev = chapters[i - 1];
        var next = chapters[i];
        var prevYear = prev.querySelector('[data-timeline-year]');
        var prevLine = prev.querySelector('[data-timeline-axis-line]');
        var prevDot = prev.querySelector('[data-timeline-axis-dot]');
        var prevTitle = prev.querySelector('.timeline__title');
        var prevCopy = prev.querySelector('.timeline__copy');
        var nextYear = next.querySelector('[data-timeline-year]');
        var nextLine = next.querySelector('[data-timeline-axis-line]');
        var nextDot = next.querySelector('[data-timeline-axis-dot]');
        var nextTitle = next.querySelector('.timeline__title');
        var nextCopy = next.querySelector('.timeline__copy');
        var t = i - 1;

        master
          .to(prev, { autoAlpha: 0, duration: 0.55, ease: 'power2.inOut' }, t)
          .to(prevYear, { y: -20, scale: 0.96, autoAlpha: 0, duration: 0.5, ease: 'power2.in' }, t)
          .to(prevLine, { scaleY: 0, duration: 0.35, ease: 'power2.in' }, t + 0.05)
          .to(prevTitle, { y: -12, autoAlpha: 0, duration: 0.45, ease: 'power2.in' }, t)
          .to(prevCopy, { y: -8, autoAlpha: 0, duration: 0.4, ease: 'power2.in' }, t + 0.02)
          .set(next, { autoAlpha: 1 }, t + 0.08)
          .fromTo(nextYear, { y: 28, scale: 1.04, autoAlpha: 0 }, { y: 0, scale: 1, autoAlpha: 1, duration: 0.65, ease: 'power3.out' }, t + 0.1)
          .fromTo(nextLine, { scaleY: 0 }, { scaleY: 1, duration: 0.55, ease: 'power2.out' }, t + 0.22)
          .fromTo(nextDot, { scale: 0.5, backgroundColor: 'var(--color-white)' }, { scale: 1, backgroundColor: 'var(--color-royal)', duration: 0.45, ease: 'power2.out' }, t + 0.38)
          .fromTo(nextTitle, { y: 24, autoAlpha: 0 }, { y: 0, autoAlpha: 1, duration: 0.6, ease: 'power3.out' }, t + 0.32)
          .fromTo(nextCopy, { y: 18, autoAlpha: 0 }, { y: 0, autoAlpha: 1, duration: 0.55, ease: 'power3.out' }, t + 0.42);
      }
    }, story);

    function handleBreakpoint() {
      if (mobileQuery.matches) {
        destroyTimeline();
        enableStatic(section);
        ScrollTrigger.refresh();
      }
    }

    if (mobileQuery.addEventListener) {
      mobileQuery.addEventListener('change', handleBreakpoint);
    } else {
      mobileQuery.addListener(handleBreakpoint);
    }
  }

  function boot() {
    if (document.readyState === 'loading') {
      document.addEventListener('DOMContentLoaded', boot);
      return;
    }

    if (typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined') {
      initTimelineStory();
      return;
    }

    var attempts = 0;
    var timer = setInterval(function () {
      attempts += 1;

      if (typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined') {
        clearInterval(timer);
        initTimelineStory();
      } else if (attempts > 40) {
        clearInterval(timer);
        initTimelineStory();
      }
    }, 50);
  }

  boot();
})();
