document.addEventListener('DOMContentLoaded', () => {
    const header = document.getElementById('site-header');

    if (!header) {
        return;
    }

    const updateHeader = () => {
        header.classList.toggle('is-scrolled', window.scrollY > 20);
    };

    updateHeader();

    window.addEventListener('scroll', updateHeader, {
        passive: true
    });
});

document.addEventListener('DOMContentLoaded', () => {

    const slides = document.querySelectorAll('.hero-slide');
    const dots = document.querySelectorAll('.hero-slider__dot');

    if (slides.length <= 1) {
        return;
    }

    let currentSlide = 0;

    const showSlide = (index) => {

        slides.forEach((slide, slideIndex) => {
            slide.classList.toggle(
                'is-active',
                slideIndex === index
            );
        });

        dots.forEach((dot, dotIndex) => {
            dot.classList.toggle(
                'is-active',
                dotIndex === index
            );
        });
    };


    const nextSlide = () => {

        currentSlide =
            (currentSlide + 1) % slides.length;

        showSlide(currentSlide);
    };


    setInterval(nextSlide, 6500);

});

const yearCounter = document.querySelector('.year-counter');
const yearStripText = document.querySelector('.year-strip__text');
const anniversaryHeartbeat = document.querySelector(
    '.anniversary-ribbon__heartbeat'
);

if (anniversaryHeartbeat) {
    const heartbeatPath = anniversaryHeartbeat.querySelector('path');

    if (heartbeatPath) {
        const heartbeatLength = heartbeatPath.getTotalLength();

        heartbeatPath.style.setProperty(
            '--heartbeat-length',
            `${heartbeatLength}px`
        );
    }
}

if (yearCounter) {
    const finalYear = Number(yearCounter.dataset.year);
    const startYear = 1900;
    const duration = 1400;

    let hasAnimated = false;

    const animateYear = () => {
        if (hasAnimated) return;

        hasAnimated = true;

        if (yearStripText) {
    yearStripText.classList.add('is-visible');
}

if (anniversaryHeartbeat) {
    anniversaryHeartbeat.classList.add('is-drawing');
}
        const startTime = performance.now();

        const updateYear = (currentTime) => {
            const elapsed = currentTime - startTime;
            const progress = Math.min(elapsed / duration, 1);

            // Ease out: fast at first, slower near 1929
            const easedProgress = 1 - Math.pow(1 - progress, 3);

            const currentYear = Math.round(
                startYear + (finalYear - startYear) * easedProgress
            );

            yearCounter.textContent = currentYear;

            if (progress < 1) {
                requestAnimationFrame(updateYear);
            } else {
                yearCounter.textContent = finalYear;
            }
        };

        requestAnimationFrame(updateYear);
    };

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    animateYear();
                    observer.unobserve(yearCounter);
                }
            });
        },
        {
            threshold: 0.6,
        }
    );

    observer.observe(yearCounter);
}

function setHeroViewportHeight() {
    const hero = document.querySelector('.hero');
    const ribbon = document.querySelector('.anniversary-ribbon');
    const header = document.querySelector('.site-header, header');

    if (!hero || !ribbon || !header) {
        return;
    }

    const desktopLayout = window.matchMedia(
        '(min-width: 900px) and (min-height: 700px)'
    );

    if (!desktopLayout.matches) {
        hero.style.removeProperty('--hero-fit-height');
        return;
    }

    const viewportHeight = window.innerHeight;
    const headerHeight = header.getBoundingClientRect().height;
    const ribbonHeight = ribbon.getBoundingClientRect().height;

    const heroHeight =
        viewportHeight -
        headerHeight -
        ribbonHeight;

    hero.style.setProperty(
        '--hero-fit-height',
        `${heroHeight}px`
    );
}

setHeroViewportHeight();

window.addEventListener('resize', setHeroViewportHeight);

const revealSections = document.querySelectorAll('.reveal-section');

if (revealSections.length) {

    const prefersReducedMotion = window.matchMedia(
        '(prefers-reduced-motion: reduce)'
    ).matches;

    if (prefersReducedMotion) {

        revealSections.forEach((section) => {
            section.classList.add('is-revealed');
        });

    } else {

        const revealObserver = new IntersectionObserver(
            (entries, observer) => {

                entries.forEach((entry) => {

                    if (!entry.isIntersecting) {
                        return;
                    }

                    entry.target.classList.add('is-revealed');

                    observer.unobserve(entry.target);
                });

            },
            {
                threshold: 0.12,
                rootMargin: '0px 0px -60px 0px'
            }
        );

        revealSections.forEach((section) => {
            revealObserver.observe(section);
        });

    }

}

document.addEventListener('DOMContentLoaded', () => {

    const menuToggle = document.querySelector('.mobile-menu-toggle');
    const mobileNavigation = document.querySelector('.mobile-navigation');

    if (!menuToggle || !mobileNavigation) {
        return;
    }


    const closeMobileMenu = () => {
        menuToggle.classList.remove('is-open');
        mobileNavigation.classList.remove('is-open');

        menuToggle.setAttribute('aria-expanded', 'false');
        menuToggle.setAttribute('aria-label', 'Menu openen');
    };


    menuToggle.addEventListener('click', () => {

        const isOpen =
            menuToggle.getAttribute('aria-expanded') === 'true';

        if (isOpen) {
            closeMobileMenu();
            return;
        }

        menuToggle.classList.add('is-open');
        mobileNavigation.classList.add('is-open');

        menuToggle.setAttribute('aria-expanded', 'true');
        menuToggle.setAttribute('aria-label', 'Menu sluiten');

    });


    /*
     * Close menu after choosing a destination
     */
    mobileNavigation.querySelectorAll('a').forEach((link) => {

        link.addEventListener('click', () => {
            closeMobileMenu();
        });

    });


    /*
     * Reset mobile state if browser becomes desktop-sized
     */
    window.addEventListener('resize', () => {

        if (window.innerWidth > 1100) {
            closeMobileMenu();
        }

    });

});

/* ========================================
   INNER PAGE REVEALS
======================================== */

const revealElements = document.querySelectorAll(
    '.reveal, .reveal-image, .reveal-stagger'
);

if (revealElements.length) {

    if (
        window.matchMedia(
            '(prefers-reduced-motion: reduce)'
        ).matches
    ) {

        revealElements.forEach((element) => {
            element.classList.add('is-visible');
        });

    } else {

        const revealObserver =
            new IntersectionObserver(
                (entries, observer) => {

                    entries.forEach((entry) => {

                        if (!entry.isIntersecting) {
                            return;
                        }

                        entry.target.classList.add(
                            'is-visible'
                        );

                        observer.unobserve(
                            entry.target
                        );

                    });

                },
                {
                    threshold: 0.14,
                    rootMargin:
                        '0px 0px -50px 0px'
                }
            );


        revealElements.forEach((element) => {
            revealObserver.observe(element);
        });

    }

}
