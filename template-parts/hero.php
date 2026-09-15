<section class="hero" id="main-content">

    <div class="hero__content">

        <div class="hero__text">

            <h1>
                Eerste hulp.<br>
                Samen klaar<br>
                voor wat telt<span class="hero__title-dot">.</span>
            </h1>

            <p class="hero__intro">
                EHBO Petrus Donders geeft je de kennis en het vertrouwen
                om adequaat te handelen in noodsituaties.
                Want snelle hulp maakt het verschil.
            </p>

            <div class="hero__actions">

                <a
                    class="hero-button hero-button--primary"
                    href="#opleidingen"
                >
                    Bekijk opleidingen
                    <span aria-hidden="true">→</span>
                </a>

                <a
                    class="hero-button hero-button--secondary"
                    href="#praktische-informatie"
                >
                    Meer informatie
                    <span aria-hidden="true">→</span>
                </a>

            </div>

        </div>

    </div>


    <div
        class="hero__visual"
        aria-hidden="true"
    >

        <div class="hero-slider">

            <img
                class="hero-slide is-active"
                src="<?php echo esc_url(
                    get_stylesheet_directory_uri() .
                    '/assets/images/hero-hulpverlening.webp'
                ); ?>"
                alt=""
            >

            <img
                class="hero-slide"
                src="<?php echo esc_url(
                    get_stylesheet_directory_uri() .
                    '/assets/images/hero-opleidingen.webp'
                ); ?>"
                alt=""
            >

            <img
                class="hero-slide"
                src="<?php echo esc_url(
                    get_stylesheet_directory_uri() .
                    '/assets/images/hero-team.webp'
                ); ?>"
                alt=""
            >

        </div>


        <div
            class="hero-slider__dots"
            aria-hidden="true"
        >

            <span class="hero-slider__dot is-active"></span>
            <span class="hero-slider__dot"></span>
            <span class="hero-slider__dot"></span>

        </div>

    </div>


    <a
        class="hero__scroll"
        href="#praktische-informatie"
        aria-label="Scroll naar praktische informatie"
    >
        <span class="hero__scroll-text">Scroll</span>

        <svg
            class="hero__scroll-icon"
            viewBox="0 0 24 24"
            aria-hidden="true"
        >
            <path d="M6 9l6 6 6-6" />
        </svg>
    </a>

</section>