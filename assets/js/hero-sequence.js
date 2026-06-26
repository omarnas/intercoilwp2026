/**
 * Intercoil Hero — Scroll-Driven Image Sequence
 * 30 frames: frame_0016.webp → frame_0045.webp
 *
 * Strategy:
 *  - Preload all frames into Image objects on DOMContentLoaded
 *  - Draw to <canvas> on every GSAP ScrollTrigger update
 *  - Four text messages change at scroll progress checkpoints
 *  - prefers-reduced-motion: show final frame statically, skip animation
 */

(function () {
  'use strict';

  /* ── Config ── */
  const FRAME_DIR   = 'assets/images/hero-sequence/';
  const FIRST_FRAME = 16;
  const LAST_FRAME  = 45;
  const TOTAL       = LAST_FRAME - FIRST_FRAME + 1; // 30

  const MESSAGES = [
    'Sleep, Crafted<br>to Perfection.',
    'Over 50 Years of<br>Craftsmanship.',
    'Trusted Across<br>28+ Countries.',
    'Partner to Finest<br>Properties.',
  ];

  /* ── DOM refs (populated in init) ── */
  let canvas, ctx, heroSticky, headingWrap, progressBar;
  let frames = [];
  let loaded  = 0;
  let currentMsg = -1;
  let gsapCtx;
  let viewWidth  = 0;
  let viewHeight = 0;
  let currentFrame = 0;

  /* ── Zero-pad helper ── */
  function pad(n) {
    return String(n).padStart(4, '0');
  }

  /* ── Frame path builder ── */
  function frameSrc(index) {
    return FRAME_DIR + 'frame_' + pad(FIRST_FRAME + index) + '.webp';
  }

  /* ── Fit image to viewport — always cover, no letterboxing ── */
  function getDrawMetrics(cw, ch, iw, ih) {
    const scale = Math.max(cw / iw, ch / ih);
    const sw = iw * scale;
    const sh = ih * scale;
    return {
      sx: (cw - sw) / 2,
      sy: (ch - sh) / 2,
      sw: sw,
      sh: sh,
    };
  }

  /* ── Draw a frame index to canvas ── */
  function drawFrame(index) {
    const img = frames[index];
    if (!img || !img.complete || !ctx) return;

    const cw = viewWidth;
    const ch = viewHeight;
    const iw = img.naturalWidth  || img.width;
    const ih = img.naturalHeight || img.height;

    if (!cw || !ch || !iw || !ih) return;

    currentFrame = index;
    const m = getDrawMetrics(cw, ch, iw, ih);

    ctx.fillStyle = '#000838';
    ctx.fillRect(0, 0, cw, ch);
    ctx.drawImage(img, m.sx, m.sy, m.sw, m.sh);
  }

  /* ── Resize canvas to match display pixel density ── */
  function resizeCanvas() {
    if (!canvas || !ctx || !heroSticky) return;

    const w = Math.max(Math.round(heroSticky.clientWidth), 1);
    const h = Math.max(Math.round(heroSticky.clientHeight), 1);

    if (w === viewWidth && h === viewHeight && canvas.width > 0) {
      drawFrame(currentFrame);
      return;
    }

    viewWidth  = w;
    viewHeight = h;

    const dpr = Math.min(window.devicePixelRatio || 1, 2);

    // Lock CSS display size BEFORE setting backing-store attributes.
    // Setting canvas.width/height resets attrs and can blow up layout to
    // the pixel-buffer size (e.g. 2606px instead of 1303px on Retina).
    canvas.style.width  = w + 'px';
    canvas.style.height = h + 'px';

    canvas.width  = Math.round(w * dpr);
    canvas.height = Math.round(h * dpr);

    // Re-apply display size — some browsers reset inline styles when attrs change
    canvas.style.width  = w + 'px';
    canvas.style.height = h + 'px';

    ctx.setTransform(dpr, 0, 0, dpr, 0, 0);

    drawFrame(currentFrame);

    if (typeof ScrollTrigger !== 'undefined') {
      ScrollTrigger.refresh();
    }
  }

  function scheduleResize() {
    requestAnimationFrame(resizeCanvas);
  }

  /* ── Update hero message based on progress (0–1) ── */
  function updateMessage(progress) {
    const msgIndex = Math.min(
      Math.floor(progress * MESSAGES.length),
      MESSAGES.length - 1
    );
    if (msgIndex === currentMsg) return;
    currentMsg = msgIndex;

    const items = headingWrap.querySelectorAll('.hero__message');
    items.forEach((el, i) => {
      el.classList.toggle('is-active', i === msgIndex);
    });
  }

  /* ── Preload all frames, then init GSAP ── */
  function preload(onComplete) {
    frames = new Array(TOTAL);

    // Show first available frame immediately as placeholder
    const firstImg = new Image();
    firstImg.onload = function () {
      frames[0] = firstImg;
      if (canvas && ctx) drawFrame(0);
    };
    firstImg.src = frameSrc(0);

    let loadedCount = 0;

    for (let i = 0; i < TOTAL; i++) {
      const img = new Image();
      img.decoding = 'async';

      img.onload = function () {
        loadedCount++;
        if (loadedCount === TOTAL) onComplete();
      };

      img.onerror = function () {
        loadedCount++;
        if (loadedCount === TOTAL) onComplete();
      };

      frames[i] = img;
      img.src = frameSrc(i);
    }
  }

  /* ── Wire GSAP ScrollTrigger ── */
  function initGSAP() {
    if (typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined') {
      console.warn('Intercoil: GSAP / ScrollTrigger not available');
      drawFrame(TOTAL - 1);
      return;
    }

    gsap.registerPlugin(ScrollTrigger);

    const frameObj = { frame: 0 };
    window.gsapFrameObj = frameObj; // expose for resize handler

    gsapCtx = gsap.to(frameObj, {
      frame: TOTAL - 1,
      snap: 'frame',
      ease: 'none',
      scrollTrigger: {
        trigger: '.hero',
        start: 'top top',
        end: 'bottom bottom',
        scrub: 0.8,
        onUpdate: function (self) {
          drawFrame(Math.round(frameObj.frame));
          updateMessage(self.progress);

          // Update progress bar
          if (progressBar) {
            progressBar.style.width = (self.progress * 100) + '%';
          }
        },
        onLeave: function () {
          // Ensure final frame stays drawn when section is passed
          drawFrame(TOTAL - 1);
          updateMessage(1);
        },
      },
    });
  }

  /* ── Reduced-motion fallback ── */
  function staticFallback() {
    drawFrame(TOTAL - 1);
    updateMessage(1);
  }

  /* ── Build the heading HTML ── */
  function buildHeadings() {
    if (!headingWrap) return;
    headingWrap.innerHTML = '';
    MESSAGES.forEach(function (msg, i) {
      const span = document.createElement('span');
      span.className = 'hero__message' + (i === 0 ? ' is-active' : '');
      span.innerHTML = msg;
      headingWrap.appendChild(span);
    });
  }

  /* ── Fade in hero content after first frame loads ── */
  function revealContent() {
    document.querySelector('.hero__eyebrow')?.classList.add('is-loaded');
    document.querySelector('.hero__body')?.classList.add('is-loaded');
    document.querySelector('.hero__ctas')?.classList.add('is-loaded');
  }

  /* ── Entry point ── */
  function init() {
    canvas       = document.getElementById('hero-canvas');
    heroSticky   = document.querySelector('.hero__sticky');
    headingWrap  = document.querySelector('.hero__heading');
    progressBar  = document.querySelector('.hero__progress');

    if (!canvas || !heroSticky) return;

    ctx = canvas.getContext('2d', { willReadFrequently: false });

    buildHeadings();

    resizeCanvas();
    scheduleResize();
    window.addEventListener('resize', debounce(scheduleResize, 100));
    window.visualViewport?.addEventListener('resize', debounce(scheduleResize, 100));

    if (typeof ResizeObserver !== 'undefined') {
      new ResizeObserver(debounce(scheduleResize, 50)).observe(heroSticky);
    }

    window.addEventListener('load', scheduleResize);

    // Reduced motion — skip animation
    if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
      staticFallback();
      revealContent();
      return;
    }

    preload(function () {
      initGSAP();
      scheduleResize();
      revealContent();
    });

    setTimeout(revealContent, 400);
  }

  /* ── Debounce ── */
  function debounce(fn, delay) {
    let t;
    return function () {
      clearTimeout(t);
      t = setTimeout(fn, delay);
    };
  }

  /* ── Boot ── */
  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }
}());
