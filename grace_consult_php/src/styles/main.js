/* Grace Consult – main.js (PHP version)
   Replaces React/motion interactivity with vanilla JS */

document.addEventListener('DOMContentLoaded', () => {

  /* ── Smooth scroll for all nav links ── */
  document.querySelectorAll('.nav-link[data-target]').forEach(link => {
    link.addEventListener('click', e => {
      const target = link.dataset.target;
      const el = document.querySelector(target);
      if (el) {
        e.preventDefault();
        el.scrollIntoView({ behavior: 'smooth' });
        // close mobile menu if open
        document.getElementById('mobile-menu')?.classList.add('hidden');
        document.getElementById('icon-menu')?.classList.remove('hidden');
        document.getElementById('icon-close')?.classList.add('hidden');
      }
    });
  });

  /* ── Navbar: scroll shadow ── */
  const nav = document.getElementById('main-nav');
  if (nav) {
    window.addEventListener('scroll', () => {
      nav.classList.toggle('scrolled', window.scrollY > 20);
    }, { passive: true });
  }

  /* ── Mobile menu toggle ── */
  const btn        = document.getElementById('mobile-menu-btn');
  const mobileMenu = document.getElementById('mobile-menu');
  const iconMenu   = document.getElementById('icon-menu');
  const iconClose  = document.getElementById('icon-close');

  if (btn && mobileMenu) {
    btn.addEventListener('click', () => {
      const isOpen = !mobileMenu.classList.contains('hidden');
      mobileMenu.classList.toggle('hidden', isOpen);
      iconMenu?.classList.toggle('hidden', !isOpen);
      iconClose?.classList.toggle('hidden', isOpen);
    });
  }

  /* ── Scroll-reveal animations ── */
  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.12 });

  document.querySelectorAll('.scroll-animate').forEach(el => observer.observe(el));

  /* ── Testimonials carousel ── */
  const slides = document.querySelectorAll('.testimonial-slide');
  const dots   = document.querySelectorAll('.testimonial-dot');

  function showSlide(index) {
    slides.forEach((s, i) => {
      s.classList.toggle('hidden', i !== index);
    });
    dots.forEach((d, i) => {
      if (i === index) {
        d.classList.add('w-8', 'bg-primary');
        d.classList.remove('w-3', 'bg-primary/30');
        d.style.backgroundColor = 'var(--primary)';
        d.style.width = '2rem';
      } else {
        d.classList.remove('w-8', 'bg-primary');
        d.classList.add('w-3');
        d.style.backgroundColor = 'oklch(0.60 0.10 280 / 0.3)';
        d.style.width = '.75rem';
      }
    });
  }

  dots.forEach((dot, i) => {
    dot.addEventListener('click', () => showSlide(i));
  });

  // Auto-advance every 5 s
  let current = 0;
  if (slides.length > 1) {
    setInterval(() => {
      current = (current + 1) % slides.length;
      showSlide(current);
    }, 5000);
  }

  /* ── Set min date on appointment date input ── */
  const dateInput = document.getElementById('date');
  if (dateInput) {
    const today = new Date().toISOString().split('T')[0];
    dateInput.setAttribute('min', today);
  }
});
