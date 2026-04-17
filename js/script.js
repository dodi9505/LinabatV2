document.addEventListener('DOMContentLoaded', function () {
    // Sticky header
    const header = document.getElementById('mainHeader');
    window.addEventListener('scroll', () => {
        header.classList.toggle('scrolled', window.scrollY > 20);
    }, { passive: true });

    // Theme toggle
    const html = document.documentElement;
    const themeBtn = document.getElementById('themeToggle');
    html.setAttribute('data-theme', localStorage.getItem('linabat-theme') || 'light');
    themeBtn.addEventListener('click', () => {
        const next = html.getAttribute('data-theme') === 'light' ? 'dark' : 'light';
        html.setAttribute('data-theme', next);
        localStorage.setItem('linabat-theme', next);
    });

    // Mobile nav
    const menuBtn = document.getElementById('menuBtn');
    const mobileNav = document.getElementById('mobileNav');
    menuBtn.addEventListener('click', () => mobileNav.classList.toggle('open'));
    function closeMobileNav() { mobileNav.classList.remove('open'); }

    // Scroll reveal
    const io = new IntersectionObserver(entries => {
        entries.forEach(e => { if (e.isIntersecting) { e.target.classList.add('visible'); io.unobserve(e.target) } });
    }, { threshold: 0.1 });
    document.querySelectorAll('.reveal').forEach(el => io.observe(el));
});