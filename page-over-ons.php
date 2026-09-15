<?php
/*
Template Name: Over ons
Template Post Type: page
*/

get_header();
?>

<main
    id="main-content"
    class="inner-page about-page"
>


    <!-- ========================================
         HERO
    ========================================= -->

    <section class="page-hero about-page__hero">

        <div class="container page-hero__inner">

            <div class="page-hero__content reveal">

                <span class="section-eyebrow">
                    Over Petrus Donders
                </span>

                <h1>
                    Al sinds 1929
                    <span>klaar om te helpen.</span>
                </h1>

                <p class="page-hero__lead">
                    EHBO-vereniging Petrus Donders zet zich al bijna
                    een eeuw in voor eerste hulp in Tilburg en omgeving.
                    Met opleidingen, oefenavonden en evenementenhulpverlening
                    zorgen we dat mensen weten wat ze moeten doen wanneer
                    het erop aankomt.
                </p>

                <div class="page-hero__actions">

                    <a
                        class="page-button page-button--primary"
                        href="#onze-vereniging"
                    >
                        Ontdek onze vereniging
                        <span aria-hidden="true">↓</span>
                    </a>

                    <a
                        class="page-text-link"
                        href="<?php echo esc_url(
                            home_url('/contact/')
                        ); ?>"
                    >
                        Neem contact op
                        <span aria-hidden="true">→</span>
                    </a>

                </div>

            </div>


            <div class="page-hero__visual">

                <div class="about-hero-image reveal-image">

                    <img
                        src="<?php echo esc_url(
                            get_stylesheet_directory_uri() .
                            '/assets/images/hero-team.png'
                        ); ?>"
                        alt="Vrijwilligers van EHBO Petrus Donders"
                    >

                    <div
                        class="about-hero-image__dots"
                        aria-hidden="true"
                    >
                        <?php for ($i = 0; $i < 48; $i++) : ?>
                            <span></span>
                        <?php endfor; ?>
                    </div>


                    <div class="about-hero-year">

                        <span>
                            Sinds
                        </span>

                        <strong>
                            1929
                        </strong>

                    </div>

                </div>

            </div>

        </div>

    </section>



    <!-- ========================================
         ONZE VERENIGING
    ========================================= -->

    <section
        class="about-story page-section"
        id="onze-vereniging"
    >

        <div class="container about-story__inner">

            <div class="about-story__heading reveal">

                <span class="section-eyebrow">
                    Onze vereniging
                </span>

                <h2>
                    Eerste hulp leer je
                    samen.
                </h2>

            </div>


            <div class="about-story__content reveal">

                <p class="about-story__intro">
                    Goede eerste hulp draait niet alleen om kennis.
                    Het gaat ook om vertrouwen, blijven oefenen en
                    weten dat je kunt handelen wanneer het nodig is.
                </p>

                <p>
                    Daarom brengt Petrus Donders opleidingen,
                    les- en oefenavonden, hercertificering en
                    hulpverlening bij evenementen samen binnen
                    één vereniging.
                </p>

                <p>
                    Of je nu voor het eerst een EHBO-cursus volgt,
                    je vaardigheden op peil wilt houden of je als
                    vrijwilliger wilt inzetten: binnen de vereniging
                    kun je blijven leren én praktijkervaring opdoen.
                </p>

            </div>

        </div>


        <div class="container">

            <div class="about-pillars reveal-stagger">


                <!-- OPLEIDEN -->
                <article class="about-pillar">

                    <span class="about-pillar__number">
                        01
                    </span>

                    <div class="about-pillar__icon">

                        <svg
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.8"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            aria-hidden="true"
                        >
                            <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/>
                            <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/>
                        </svg>

                    </div>

                    <h3>
                        Opleiden
                    </h3>

                    <p>
                        Praktische eerstehulpopleidingen waarmee
                        deelnemers kennis, vaardigheden én vertrouwen
                        opbouwen.
                    </p>

                    <a
                        href="<?php echo esc_url(
                            home_url('/opleidingen/')
                        ); ?>"
                    >
                        Bekijk opleidingen
                        <span aria-hidden="true">→</span>
                    </a>

                </article>



                <!-- OEFENEN -->
                <article class="about-pillar">

                    <span class="about-pillar__number">
                        02
                    </span>

                    <div class="about-pillar__icon">

                        <svg
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.8"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            aria-hidden="true"
                        >
                            <path d="M12 2v4"/>
                            <path d="M12 18v4"/>
                            <path d="M4.93 4.93l2.83 2.83"/>
                            <path d="M16.24 16.24l2.83 2.83"/>
                            <path d="M2 12h4"/>
                            <path d="M18 12h4"/>
                            <path d="M4.93 19.07l2.83-2.83"/>
                            <path d="M16.24 7.76l2.83-2.83"/>
                            <circle cx="12" cy="12" r="3"/>
                        </svg>

                    </div>

                    <h3>
                        Blijven oefenen
                    </h3>

                    <p>
                        Tijdens les- en oefenavonden blijven kennis,
                        vaardigheden en competenties actueel.
                    </p>

                    <a
                        href="<?php echo esc_url(
                            home_url('/informatie/#oefenavonden')
                        ); ?>"
                    >
                        Over oefenavonden
                        <span aria-hidden="true">→</span>
                    </a>

                </article>



                <!-- HULP VERLENEN -->
                <article class="about-pillar">

                    <span class="about-pillar__number">
                        03
                    </span>

                    <div class="about-pillar__icon">

                        <svg
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.8"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            aria-hidden="true"
                        >
                            <path d="M12 21s-7-4.35-7-10a4 4 0 0 1 7-2.65A4 4 0 0 1 19 11c0 5.65-7 10-7 10z"/>
                            <path d="M8.5 12h2l1-2.5 1.5 5 1-2.5h2"/>
                        </svg>

                    </div>

                    <h3>
                        Hulp verlenen
                    </h3>

                    <p>
                        Getrainde vrijwilligers ondersteunen
                        evenementen in Tilburg en omgeving met
                        eerstehulpverlening.
                    </p>

                    <a
                        href="<?php echo esc_url(
                            home_url('/hulpverlening/')
                        ); ?>"
                    >
                        Bekijk hulpverlening
                        <span aria-hidden="true">→</span>
                    </a>

                </article>


            </div>

        </div>

    </section>



    <!-- ========================================
         VERENIGING IN HET KORT
    ========================================= -->

    <section class="about-facts page-section">

        <div class="container about-facts__inner">

            <div class="about-facts__content reveal">

                <span class="section-eyebrow">
                    Petrus Donders in het kort
                </span>

                <h2>
                    Een Tilburgse vereniging
                    met een lange geschiedenis.
                </h2>

                <p>
                    Officieel heet de vereniging de Katholieke
                    Vereniging voor Eerste Hulp Bij Ongelukken
                    Petrus Donders. Vanuit Tilburg zetten leden
                    en vrijwilligers zich in voor opleiding,
                    oefening en eerstehulpverlening.
                </p>

            </div>


            <div class="about-facts__grid reveal-stagger">


                <div class="about-fact">

                    <span>
                        Opgericht
                    </span>

                    <strong>
                        1929
                    </strong>

                    <small>
                        23 maart
                    </small>

                </div>


                <div class="about-fact">

                    <span>
                        Thuisbasis
                    </span>

                    <strong>
                        Tilburg
                    </strong>

                    <small>
                        en omgeving
                    </small>

                </div>


                <div class="about-fact">

                    <span>
                        KvK
                    </span>

                    <strong>
                        40258335
                    </strong>

                    <small>
                        vereniging
                    </small>

                </div>


                <div class="about-fact">

                    <span>
                        ANBI
                    </span>

                    <strong>
                        816504295
                    </strong>

                    <small>
                        geregistreerd
                    </small>

                </div>


            </div>

        </div>

    </section>



    <!-- ========================================
         GESCHIEDENIS
    ========================================= -->

    <section
        class="about-history page-section page-section--soft"
        id="geschiedenis"
    >

        <div class="container about-history__inner">


            <div class="about-history__visual reveal-image">

                <div class="about-history__image">

                    <img
                        src="<?php echo esc_url(
                            get_stylesheet_directory_uri() .
                            '/assets/images/gallery-jubilaris.jpg'
                        ); ?>"
                        alt="Leden en jubilarissen van Petrus Donders"
                        loading="lazy"
                    >

                </div>


                <div class="about-history__date">

                    <span>
                        Opgericht
                    </span>

                    <strong>
                        23.03
                    </strong>

                    <span>
                        1929
                    </span>

                </div>

            </div>


            <div class="about-history__content reveal">

                <span class="section-eyebrow">
                    Geschiedenis
                </span>

                <h2>
                    Bijna een eeuw
                    eerste hulp in Tilburg.
                </h2>

                <p class="about-history__intro">
                    Petrus Donders werd op 23 maart 1929 opgericht.
                    Sindsdien is eerste hulp voortdurend veranderd,
                    maar het doel van de vereniging is hetzelfde
                    gebleven: mensen voorbereiden om te kunnen
                    helpen wanneer het nodig is.
                </p>

                <p>
                    Richtlijnen, opleidingen en hulpmiddelen zijn
                    in de loop der jaren veranderd. De vereniging
                    beweegt daarin mee door kennis actueel te houden,
                    regelmatig te oefenen en leden te blijven scholen.
                </p>

                <p>
                    Zo combineren we een lange verenigingstraditie
                    met moderne eerstehulpverlening.
                </p>


                <div class="about-history__line">

                    <div class="about-history__moment">

                        <span>
                            1929
                        </span>

                        <strong>
                            Oprichting
                        </strong>

                        <p>
                            De start van EHBO-vereniging
                            Petrus Donders in Tilburg.
                        </p>

                    </div>


                    <div
                        class="about-history__connector"
                        aria-hidden="true"
                    ></div>


                    <div class="about-history__moment">

                        <span>
                            Vandaag
                        </span>

                        <strong>
                            Nog altijd actief
                        </strong>

                        <p>
                            Opleidingen, oefenavonden,
                            hercertificering en hulpverlening.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>



    <!-- ========================================
         SAMEN LEREN
    ========================================= -->

    <section class="about-community page-section">

        <div class="container about-community__inner">


            <div class="about-community__content reveal">

                <span class="section-eyebrow">
                    Vereniging
                </span>

                <h2>
                    Meer dan alleen
                    een cursus volgen.
                </h2>

                <p class="about-community__lead">
                    Een EHBO-diploma is een begin. Vaardigheden
                    blijven betrouwbaar wanneer je ze blijft
                    oefenen en gebruiken.
                </p>

                <p>
                    Binnen Petrus Donders ontmoeten cursisten,
                    leden, instructeurs en vrijwilligers elkaar
                    tijdens lessen, oefenmomenten en activiteiten.
                    Zo blijft eerste hulp niet alleen theorie.
                </p>


                <div class="about-community__points">

                    <div>
                        <span aria-hidden="true">✓</span>
                        Regelmatige les- en oefenavonden
                    </div>

                    <div>
                        <span aria-hidden="true">✓</span>
                        Praktijkervaring op evenementen
                    </div>

                    <div>
                        <span aria-hidden="true">✓</span>
                        Hercertificering en bijscholing
                    </div>

                    <div>
                        <span aria-hidden="true">✓</span>
                        Samen kennis onderhouden
                    </div>

                </div>

            </div>


            <div class="about-community__visual reveal-image">

                <img
                    src="<?php echo esc_url(
                        get_stylesheet_directory_uri() .
                        '/assets/images/gallery-geslaagden.jpg'
                    ); ?>"
                    alt="Geslaagde deelnemers bij Petrus Donders"
                    loading="lazy"
                >

                <div class="about-community__badge">

                    <span>
                        Samen leren
                    </span>

                    <strong>
                        Samen groeien.
                    </strong>

                </div>

            </div>

        </div>

    </section>



    <!-- ========================================
         VRIJWILLIGER / LID WORDEN
    ========================================= -->

    <section
        class="about-volunteer page-section"
        id="vrijwilliger"
    >

        <div class="container about-volunteer__inner">

            <div class="about-volunteer__content reveal">

                <span class="section-eyebrow">
                    Zelf betrokken worden?
                </span>

                <h2>
                    Jouw EHBO-kennis
                    kan ergens écht nodig zijn.
                </h2>

                <p>
                    Een vereniging leeft door de mensen die zich
                    ervoor inzetten. Als lid of vrijwilliger kun je
                    jouw kennis blijven ontwikkelen, ervaring opdoen
                    en samen met anderen bijdragen aan veilige
                    evenementen.
                </p>


                <div class="about-volunteer__actions">

                    <a
                        class="page-button page-button--yellow"
                        href="<?php echo esc_url(
    home_url(
        '/inschrijven/?type=lidmaatschap'
    )
); ?>"
                    >
                        Interesse in lidmaatschap
                        <span aria-hidden="true">→</span>
                    </a>

                    <a
                        class="page-text-link page-text-link--light"
                        href="<?php echo esc_url(
                            home_url('/contact/?onderwerp=vrijwilliger')
                        ); ?>"
                    >
                        Vrijwilliger worden
                        <span aria-hidden="true">→</span>
                    </a>

                </div>

            </div>


            <div class="about-volunteer__visual reveal-image">

                <img
                    src="<?php echo esc_url(
                        get_stylesheet_directory_uri() .
                        '/assets/images/gallery-oefenen.jpg'
                    ); ?>"
                    alt="EHBO'ers oefenen samen"
                    loading="lazy"
                >

                <div class="about-volunteer__badge">

                    <span>
                        Samen leren
                    </span>

                    <strong>
                        Samen helpen.
                    </strong>

                </div>

            </div>

        </div>

    </section>



    <!-- ========================================
         NEXT STEP
    ========================================= -->

    <section class="about-next">

        <div class="container">

            <div class="about-next__card reveal">

                <div>

                    <span>
                        Zelf leren helpen?
                    </span>

                    <h2>
                        Ontdek wat jij bij
                        Petrus Donders kunt leren.
                    </h2>

                    <p>
                        Bekijk onze opleidingen en vind een cursus
                        die past bij jouw kennis en ervaring.
                    </p>

                </div>


                <a
                    class="page-button page-button--primary"
                    href="<?php echo esc_url(
                        home_url('/opleidingen/')
                    ); ?>"
                >
                    Bekijk opleidingen
                    <span aria-hidden="true">→</span>
                </a>

            </div>

        </div>

    </section>


</main>

<?php get_footer(); ?>