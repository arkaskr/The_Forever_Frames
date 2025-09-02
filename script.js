// script.js
(function () {
  const easeOutCubic = (t) => 1 - Math.pow(1 - t, 3);

  function animateCounter(el) {
    const to = parseFloat(el.dataset.target || '0');
    const from = parseFloat(el.dataset.from || '0');
    const duration = parseInt(el.dataset.duration || '2000', 10);
    const suffix = el.dataset.suffix || "+";

    if (!isFinite(to)) return;

    let start = null;
    const formatter = (value) => Math.round(value).toString() + suffix;

    function frame(ts) {
      if (start === null) start = ts;
      const progress = Math.min((ts - start) / duration, 1);
      const eased = easeOutCubic(progress);
      const current = from + (to - from) * eased;
      el.textContent = formatter(current);
      if (progress < 1) {
        requestAnimationFrame(frame);
      } else {
        el.textContent = formatter(to);
      }
    }

    el.textContent = formatter(from);
    requestAnimationFrame(frame);
  }

  function init() {
    const counters = Array.from(document.querySelectorAll('.counter'));
    if (!counters.length) return;

    if ('IntersectionObserver' in window) {
      const io = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            animateCounter(entry.target);
            observer.unobserve(entry.target);
          }
        });
      }, { threshold: 0.4 });

      counters.forEach(el => {
        if (!el.textContent.trim()) el.textContent = '0' + (el.dataset.suffix || '+');
        io.observe(el);
      });
    } else {
      counters.forEach(el => animateCounter(el));
    }
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }
})();
