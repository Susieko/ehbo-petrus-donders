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

/* =========================================================
   ACTIVE ONE-PAGE NAVIGATION
   ========================================================= */

document.addEventListener('DOMContentLoaded', () => {

    const desktopNavLinks = document.querySelectorAll(
        '.desktop-navigation .nav-link'
    );

    if (!desktopNavLinks.length) {
        return;
    }


    /*
     * Homepage sections in their actual scrolling order.
     *
     * Some sections belong to the Informatie navigation item,
     * so they deliberately point back to #praktische-informatie.
     */

    const navigationSections = [
        {
            id: 'main-content',
            navTarget: '#main-content'
        },
        {
            id: 'praktische-informatie',
            navTarget: '#praktische-informatie'
        },
        {
            id: 'over-ons',
            navTarget: '#over-ons'
        },
        {
            id: 'opleidingen',
            navTarget: '#opleidingen'
        },
        {
            id: 'oefenavonden',
            navTarget: '#praktische-informatie'
        },
        {
            id: 'hulpverlening',
            navTarget: '#hulpverlening'
        },
        {
            id: 'vrijwilliger',
            navTarget: '#hulpverlening'
        },
        {
            id: 'publicaties',
            navTarget: '#praktische-informatie'
        },
        {
            id: 'fotogalerij',
            navTarget: '#praktische-informatie'
        },
        {
            id: 'contact',
            navTarget: '#contact'
        }
    ]
        .map((item) => ({
            ...item,
            element: document.getElementById(item.id)
        }))
        .filter((item) => item.element);


    const setActiveNav = (target) => {

        desktopNavLinks.forEach((link) => {

            const isActive =
                link.getAttribute('href') === target;

            link.classList.toggle(
                'active',
                isActive
            );

        });

    };


    const updateActiveNavigation = () => {

        const header = document.getElementById('site-header');

        const headerHeight = header
            ? header.getBoundingClientRect().height
            : 0;

        /*
         * Look a little below the sticky header so the
         * navigation changes naturally as a new section
         * becomes the main section on screen.
         */
        const activationPoint =
            window.scrollY +
            headerHeight +
            90;

        let currentSection = navigationSections[0];

        navigationSections.forEach((section) => {

            if (
                section.element.offsetTop <=
                activationPoint
            ) {
                currentSection = section;
            }

        });

        if (currentSection) {
            setActiveNav(
                currentSection.navTarget
            );
        }

    };


    let ticking = false;

    const requestNavigationUpdate = () => {

        if (ticking) {
            return;
        }

        ticking = true;

        requestAnimationFrame(() => {

            updateActiveNavigation();

            ticking = false;

        });

    };


    updateActiveNavigation();

    window.addEventListener(
        'scroll',
        requestNavigationUpdate,
        {
            passive: true
        }
    );

    window.addEventListener(
        'resize',
        requestNavigationUpdate
    );

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

/* Current navigation section */

document.addEventListener('DOMContentLoaded', () => {

    const navLinks = document.querySelectorAll(
        '.desktop-navigation .nav-link'
    );

    if (!navLinks.length) return;


    const pathParts = window.location.pathname
        .split('/')
        .filter(Boolean);

    const currentSlug =
        pathParts[pathParts.length - 1] || '';


    const sectionMap = {
        'over-ons': 'over-ons',
        'opleidingen': 'opleidingen',

        'hulpverlening': 'hulpverlening',
        'hulpverlening-aanvragen': 'hulpverlening',

        'informatie': 'informatie',
        'stempelkaart-lesavonden': 'informatie',
        'lesavond-aanmelden': 'informatie',

        'publicaties': 'publicaties',
        'fotogalerij': 'fotogalerij',
        'contact': 'contact',
        'word-lid': 'word-lid'
    };


    const activeSection =
        sectionMap[currentSlug] || currentSlug;


    navLinks.forEach((link) => {

        link.classList.remove('active');
        link.removeAttribute('aria-current');

        const linkUrl = new URL(
            link.href,
            window.location.origin
        );

        const linkParts = linkUrl.pathname
            .split('/')
            .filter(Boolean);

        const linkSlug =
            linkParts[linkParts.length - 1] || '';


        if (linkSlug === activeSection) {

            link.classList.add('active');

            link.setAttribute(
                'aria-current',
                'page'
            );

        }

    });


    /* Word lid button */

    const wordLidButton =
        document.querySelector('.header-cta');

    if (wordLidButton) {

        wordLidButton.classList.toggle(
            'active',
            activeSection === 'word-lid'
        );

    }

});