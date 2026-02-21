/**
 * AltSource Software - Script (Vibrant Tech & Effects)
 */

document.addEventListener('DOMContentLoaded', () => {

    /* --- Complex Navigation Scrolled State --- */
    const header = document.getElementById('header');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    });

    /* --- Mobile Menu Toggle --- */
    const navToggle = document.getElementById('navToggle');
    const nav = document.getElementById('nav');

    if (navToggle && nav) {
        navToggle.addEventListener('click', () => {
            navToggle.classList.toggle('active');
            nav.classList.toggle('active');
        });
    }

    /* --- Magnetic Hover Effect for Buttons --- */
    const magneticBtns = document.querySelectorAll('.magnetic-btn, .magnetic-icon');

    magneticBtns.forEach(btn => {
        btn.addEventListener('mousemove', function (e) {
            const position = btn.getBoundingClientRect();
            const x = e.clientX - position.left - position.width / 2;
            const y = e.clientY - position.top - position.height / 2;

            // Move button slightly towards cursor
            btn.style.transform = `translate(${x * 0.3}px, ${y * 0.3}px)`;
        });

        btn.addEventListener('mouseout', function () {
            // Reset position
            btn.style.transform = `translate(0px, 0px)`;
        });
    });

    /* --- 3D Tilt Effect on Hero Image --- */
    const tiltCard = document.getElementById('heroTilt');
    if (tiltCard) {
        document.addEventListener('mousemove', (e) => {
            if (window.innerWidth > 991) {
                const xAxis = (window.innerWidth / 2 - e.pageX) / 40;
                const yAxis = (window.innerHeight / 2 - e.pageY) / 40;
                tiltCard.style.transform = `rotateY(${xAxis}deg) rotateX(${yAxis}deg)`;
            }
        });

        // Reset tilt on leave
        document.addEventListener('mouseleave', () => {
            tiltCard.style.transform = `rotateY(0deg) rotateX(0deg)`;
        });
    }

    /* --- ScrollReveal Initialization --- */
    if (typeof ScrollReveal !== 'undefined') {
        const sr = ScrollReveal({
            distance: '40px',
            duration: 1000,
            delay: 100,
            reset: false,
            easing: 'cubic-bezier(0.16, 1, 0.3, 1)'
        });

        sr.reveal('.reveal-bottom', { origin: 'bottom' });
        sr.reveal('.reveal-top', { origin: 'top' });
        sr.reveal('.reveal-left', { origin: 'left' });
        sr.reveal('.reveal-right', { origin: 'right' });

        // Delays for staggered animations
        sr.reveal('.delay-1', { delay: 200 });
        sr.reveal('.delay-2', { delay: 300 });
        sr.reveal('.delay-3', { delay: 400 });
    }
});
