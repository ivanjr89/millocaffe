const menuToggle = document.querySelector('.menu-toggle');
const siteNav = document.querySelector('.site-nav');
const siteHeader = document.querySelector('.site-header');
const yearSpan = document.getElementById('year');
const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)');

function toggleMenu(force) {
  if (!menuToggle || !siteNav) return;
  const nextState = typeof force === 'boolean' ? force : !siteNav.classList.contains('is-open');
  siteNav.classList.toggle('is-open', nextState);
  menuToggle.setAttribute('aria-expanded', String(nextState));
}

if (menuToggle && siteNav) {
  menuToggle.addEventListener('click', () => toggleMenu());
  siteNav.querySelectorAll('a').forEach((link) => {
    link.addEventListener('click', () => toggleMenu(false));
  });
}

if (siteHeader) {
  const handleScroll = () => {
    siteHeader.classList.toggle('scrolled', window.scrollY > 20);
  };
  handleScroll();
  window.addEventListener('scroll', handleScroll, { passive: true });
}

if (yearSpan) {
  yearSpan.textContent = new Date().getFullYear();
}

if (prefersReducedMotion.matches) {
  document.documentElement.style.scrollBehavior = 'auto';
}
