/* ============================================================
   DigitalU - Home prototype JS
   ============================================================ */

(() => {
  'use strict';

  const reduceMotion = matchMedia('(prefers-reduced-motion: reduce)').matches;

  /* ---------- 1. Sticky header: hide on scroll down, show on up ---------- */
  const header = document.getElementById('siteHeader');
  if (header) {
    let lastY = 0;
    const onScroll = () => {
      const y = window.scrollY;
      if (y > lastY && y > 200) header.classList.add('is-hidden');
      else header.classList.remove('is-hidden');
      lastY = y;
    };
    window.addEventListener('scroll', onScroll, { passive: true });
  }

  /* ---------- 2. Mobile menu ---------- */
  const menuBtn = document.getElementById('menuToggle');
  const nav = document.getElementById('mainNav');
  if (menuBtn && nav) {
    menuBtn.addEventListener('click', () => {
      const open = nav.classList.toggle('is-open');
      menuBtn.setAttribute('aria-expanded', open ? 'true' : 'false');
    });
  }

  /* ---------- 3. Submenu toggle (mobile + hover desktop) ---------- */
  document.querySelectorAll('.submenu-toggle').forEach(btn => {
    btn.addEventListener('click', e => {
      // En mobile, abre/cierra. En desktop el hover ya lo hace.
      if (matchMedia('(max-width: 767px)').matches) {
        e.preventDefault();
        const open = btn.getAttribute('aria-expanded') === 'true';
        btn.setAttribute('aria-expanded', open ? 'false' : 'true');
      }
    });
  });
  // wp_nav_menu: en mobile, primer click en padre con hijos abre submenú;
  // segundo click sigue al href real.
  document.querySelectorAll('.menu-item-has-children > a').forEach(a => {
    a.addEventListener('click', e => {
      if (!matchMedia('(max-width: 767px)').matches) return;
      const li = a.parentElement;
      if (!li.classList.contains('is-open')) {
        e.preventDefault();
        li.classList.add('is-open');
      }
    });
  });

  /* ---------- 4. Animated headline rotator ---------- */
  document.querySelectorAll('.rotator').forEach(el => {
    const words = (el.dataset.words || '').split('|').filter(Boolean);
    if (words.length < 2) return;
    let i = 0;
    setInterval(() => {
      if (reduceMotion) {
        i = (i + 1) % words.length;
        el.textContent = words[i];
        return;
      }
      el.classList.add('swap');
      setTimeout(() => {
        i = (i + 1) % words.length;
        el.textContent = words[i];
        el.classList.remove('swap');
      }, 350);
    }, 2500);
  });

  /* ---------- 5. Wave text (cada letra con delay) ---------- */
  document.querySelectorAll('.wave-text').forEach(el => {
    if (reduceMotion) return;
    // Solo aplicamos a texto en líneas cortas para no romper layout
    const walk = node => {
      if (node.nodeType === 3) {
        const frag = document.createDocumentFragment();
        node.textContent.split('').forEach((ch, i) => {
          if (ch === ' ') {
            frag.appendChild(document.createTextNode(' '));
          } else {
            const span = document.createElement('span');
            span.className = 'letter';
            span.style.animationDelay = (i * 60) + 'ms';
            span.textContent = ch;
            frag.appendChild(span);
          }
        });
        node.parentNode.replaceChild(frag, node);
      } else if (node.nodeType === 1 && !node.classList.contains('letter')) {
        Array.from(node.childNodes).forEach(walk);
      }
    };
    walk(el);
  });

  /* ---------- 6. Reveal on scroll ---------- */
  const reveals = document.querySelectorAll('.reveal');
  if (reveals.length) {
    const io = new IntersectionObserver(entries => {
      entries.forEach(e => {
        if (e.isIntersecting) {
          const delay = e.target.dataset.delay || 0;
          setTimeout(() => e.target.classList.add('is-visible'), delay);
          io.unobserve(e.target);
        }
      });
    }, { rootMargin: '0px 0px -10% 0px' });
    reveals.forEach(el => io.observe(el));
  }

  /* ---------- 7. Particles canvas (hero) ---------- */
  const canvas = document.querySelector('.hero-particles');
  if (canvas && !reduceMotion) {
    const ctx = canvas.getContext('2d');
    const isTouch = matchMedia('(hover:none)').matches;
    let W = 0, H = 0, raf = 0, particles = [];
    const mouse = { x: null, y: null, r: 220 };

    const resize = () => {
      const dpr = window.devicePixelRatio || 1;
      const rect = canvas.getBoundingClientRect();
      W = canvas.width = Math.floor(rect.width * dpr);
      H = canvas.height = Math.floor(rect.height * dpr);
      canvas.style.width = rect.width + 'px';
      canvas.style.height = rect.height + 'px';
      ctx.setTransform(dpr, 0, 0, dpr, 0, 0);
      build();
    };

    const build = () => {
      const density = isTouch ? 16000 : 9000;
      const rect = canvas.getBoundingClientRect();
      const count = Math.min(isTouch ? 30 : 60, Math.floor((rect.width * rect.height) / density));
      particles = Array.from({ length: count }, () => ({
        x: Math.random() * rect.width,
        y: Math.random() * rect.height,
        vx: (Math.random() - .5) * 0.5,
        vy: (Math.random() - .5) * 0.5,
        s: Math.random() * 2 + 0.8,
        o: Math.random() * 0.3 + 0.1
      }));
    };

    const draw = () => {
      const rect = canvas.getBoundingClientRect();
      ctx.clearRect(0, 0, rect.width, rect.height);

      for (const p of particles) {
        p.x += p.vx;
        p.y += p.vy;
        if (p.x < 0 || p.x > rect.width)  p.vx *= -1;
        if (p.y < 0 || p.y > rect.height) p.vy *= -1;

        if (mouse.x !== null) {
          const dx = p.x - mouse.x, dy = p.y - mouse.y;
          const d = Math.hypot(dx, dy);
          if (d < mouse.r && d > .01) {
            const f = (mouse.r - d) / mouse.r;
            p.x += (dx / d) * f * 1.8;
            p.y += (dy / d) * f * 1.8;
          }
        }

        ctx.beginPath();
        ctx.arc(p.x, p.y, p.s, 0, Math.PI * 2);
        ctx.fillStyle = `rgba(46,230,255,${p.o})`;
        ctx.fill();
      }

      // lines
      for (let i = 0; i < particles.length; i++) {
        for (let j = i + 1; j < particles.length; j++) {
          const a = particles[i], b = particles[j];
          const dx = a.x - b.x, dy = a.y - b.y;
          const d2 = dx * dx + dy * dy;
          if (d2 < 155 * 155) {
            const alpha = (1 - Math.sqrt(d2) / 155) * 0.18;
            ctx.beginPath();
            ctx.moveTo(a.x, a.y);
            ctx.lineTo(b.x, b.y);
            ctx.strokeStyle = `rgba(46,230,255,${alpha})`;
            ctx.lineWidth = 0.7;
            ctx.stroke();
          }
        }
      }

      raf = requestAnimationFrame(draw);
    };

    canvas.parentElement.addEventListener('mousemove', e => {
      const rect = canvas.getBoundingClientRect();
      mouse.x = e.clientX - rect.left;
      mouse.y = e.clientY - rect.top;
    }, { passive: true });
    canvas.parentElement.addEventListener('mouseleave', () => {
      mouse.x = mouse.y = null;
    }, { passive: true });
    window.addEventListener('resize', resize, { passive: true });
    window.addEventListener('beforeunload', () => cancelAnimationFrame(raf));

    resize();
    draw();
  }

  /* ---------- 8. Click-to-flip support (touch) ---------- */
  document.querySelectorAll('.flip-card').forEach(card => {
    card.addEventListener('click', () => {
      if (matchMedia('(hover:none)').matches) {
        card.classList.toggle('is-flipped');
      }
    });
    card.addEventListener('keydown', e => {
      if (e.key === 'Enter' || e.key === ' ') {
        e.preventDefault();
        card.classList.toggle('is-flipped');
      }
    });
    card.setAttribute('tabindex', '0');
  });
})();
