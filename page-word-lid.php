<?php
/*
Template Name: Word lid
Template Post Type: page
*/

get_header();
?>

<main
    id="main-content"
    class="inner-page join-page"
>


    <!-- ========================================
         HERO
    ========================================= -->

    <section class="page-hero join-hero">

        <div class="container page-hero__inner">


            <div class="page-hero__content reveal">

                <span class="section-eyebrow">
                    Word lid
                </span>

                <h1>
                    Samen helpen begint
                    <span>bij mensen zoals jij.</span>
                </h1>

                <p class="page-hero__lead">
                    Petrus Donders draait op leden en vrijwilligers
                    die hun kennis, tijd en ervaring willen inzetten.
                    Van eerste hulp verlenen tot meedenken in het bestuur:
                    er zijn verschillende manieren om betrokken te worden.
                </p>


                <div class="page-hero__actions">

                    <a
                        class="page-button page-button--primary"
                        href="#mogelijkheden"
                    >
                        Bekijk mogelijkheden
                        <span aria-hidden="true">↓</span>
                    </a>

                    <a
                        class="page-text-link"
                        href="<?php echo esc_url(
    home_url(
        '/inschrijven/?type=lidmaatschap'
    )
); ?>"
                    >
                        Ik wil lid worden
                        <span aria-hidden="true">→</span>
                    </a>

                </div>

            </div>



            <div class="page-hero__visual">

                <div class="join-hero__visual reveal-image">

                    <img
                        src="<?php echo esc_url(
                            get_stylesheet_directory_uri() .
                            '/assets/images/hero-team.png'
                        ); ?>"
                        alt="Vrijwilligers van EHBO Petrus Donders"
                    >


                    <div class="join-hero__badge">

                        <span>
                            Samen doen
                        </span>

                        <strong>
                            Jouw inzet
                            maakt verschil.
                        </strong>

                    </div>


                    <div class="join-hero__plus" aria-hidden="true">
                        +
                    </div>

                </div>

            </div>


        </div>

    </section>



    <!-- ========================================
         INTRO STRIP
    ========================================= -->

    <section class="join-strip">

        <div class="container join-strip__inner">


            <div>

                <strong>
                    Lid worden
                </strong>

                <span>
                    Blijven leren en betrokken blijven
                </span>

            </div>


            <div>

                <strong>
                    Vrijwilliger worden
                </strong>

                <span>
                    Praktisch iets betekenen
                </span>

            </div>


            <div>

                <strong>
                    Bestuur
                </strong>

                <span>
                    Meedenken over de vereniging
                </span>

            </div>


            <div>

                <strong>
                    Evenementenzorg
                </strong>

                <span>
                    EHBO inzetten in de praktijk
                </span>

            </div>


        </div>

    </section>



    <!-- ========================================
         WHY JOIN
    ========================================= -->

    <section class="join-intro page-section">

        <div class="container join-intro__inner">


            <div class="reveal">

                <span class="section-eyebrow">
                    Samen sterk
                </span>

                <h2>
                    Een vereniging leeft
                    door haar mensen.
                </h2>

            </div>


            <div class="join-intro__content reveal">

                <p class="join-intro__lead">
                    Eerste hulp leer je niet alleen voor jezelf.
                    Met jouw kennis en betrokkenheid kun je op
                    onverwachte momenten echt iets betekenen.
                </p>

                <p>
                    Binnen Petrus Donders kun je blijven oefenen,
                    nieuwe vaardigheden ontwikkelen en andere
                    mensen ontmoeten die eerste hulp belangrijk vinden.
                </p>

                <p>
                    Niet iedereen hoeft op dezelfde manier bij te dragen.
                    Daarom zoeken we mensen voor praktische hulpverlening,
                    verenigingsactiviteiten én bestuurlijke functies.
                </p>

            </div>


        </div>

    </section>



    <!-- ========================================
         BENEFITS
    ========================================= -->

    <section class="join-benefits page-section page-section--soft">

        <div class="container">

            <div class="join-benefits__header reveal">

                <div>

                    <span class="section-eyebrow">
                        Waarom aansluiten?
                    </span>

                    <h2>
                        Leren, helpen
                        en betrokken blijven.
                    </h2>

                </div>

                <p>
                    Of je nu actief hulp wilt verlenen of vooral
                    onderdeel wilt zijn van de vereniging:
                    jouw betrokkenheid telt.
                </p>

            </div>


            <div class="join-benefits__grid reveal-stagger">


                <article class="join-benefit">

                    <span>
                        01
                    </span>

                    <h3>
                        Blijf oefenen
                    </h3>

                    <p>
                        Houd je kennis en vaardigheden actueel
                        tijdens les- en oefenavonden.
                    </p>

                </article>


                <article class="join-benefit">

                    <span>
                        02
                    </span>

                    <h3>
                        Doe ervaring op
                    </h3>

                    <p>
                        Gebruik je EHBO-kennis tijdens activiteiten
                        en evenementen in Tilburg en omgeving.
                    </p>

                </article>


                <article class="join-benefit">

                    <span>
                        03
                    </span>

                    <h3>
                        Ontwikkel jezelf
                    </h3>

                    <p>
                        Leer nieuwe vaardigheden en krijg ruimte
                        om verantwoordelijkheid op je te nemen.
                    </p>

                </article>


                <article class="join-benefit">

                    <span>
                        04
                    </span>

                    <h3>
                        Doe het samen
                    </h3>

                    <p>
                        Maak deel uit van een lokale vereniging
                        waarin mensen elkaar helpen en kennis delen.
                    </p>

                </article>


            </div>

        </div>

    </section>



    <!-- ========================================
         VACANCIES
    ========================================= -->

    <section
        class="join-vacancies page-section"
        id="mogelijkheden"
    >

        <div class="container">

            <div class="join-vacancies__header reveal">

                <div>

                    <span class="section-eyebrow">
                        We zoeken versterking
                    </span>

                    <h2>
                        Waar kun jij
                        iets betekenen?
                    </h2>

                </div>


                <p>
                    Op dit moment zoekt Petrus Donders versterking
                    voor verschillende rollen binnen de vereniging.
                </p>

            </div>



            <div class="join-vacancies__grid reveal-stagger">


                <!-- ========================================
                     VOORZITTER
                ========================================= -->

                <article class="join-vacancy join-vacancy--board">

                    <div class="join-vacancy__top">

                        <span class="join-vacancy__type">
                            Bestuur & organisatie
                        </span>

                        <span class="join-vacancy__number">
                            01
                        </span>

                    </div>


                    <div class="join-vacancy__icon">

                        <svg
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.8"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            aria-hidden="true"
                        >
                            <circle cx="12" cy="7" r="4"/>
                            <path d="M5.5 21v-2a6.5 6.5 0 0 1 13 0v2"/>
                            <path d="M18 8l2 2 3-3"/>
                        </svg>

                    </div>


                    <h3>
                        Voorzitter
                    </h3>

                    <p>
                        We zoeken een voorzitter die samen met
                        het bestuur richting geeft aan de vereniging.
                        Enige ervaring of kennis op bestuurlijk niveau
                        is daarbij welkom.
                    </p>


                    <div class="join-vacancy__meta">

                        <span>
                            Structureel
                        </span>

                        <span>
                            Bestuurlijke rol
                        </span>

                    </div>


                    <a
                        href="<?php echo esc_url(
                            home_url('/contact/?onderwerp=vrijwilliger')
                        ); ?>"
                    >
                        Interesse in deze rol
                        <span aria-hidden="true">→</span>
                    </a>

                </article>



                <!-- ========================================
                     PENNINGMEESTER
                ========================================= -->

                <article class="join-vacancy join-vacancy--board">

                    <div class="join-vacancy__top">

                        <span class="join-vacancy__type">
                            Bestuur & organisatie
                        </span>

                        <span class="join-vacancy__number">
                            02
                        </span>

                    </div>


                    <div class="join-vacancy__icon">

                        <svg
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.8"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            aria-hidden="true"
                        >
                            <path d="M4 6h16v13H4z"/>
                            <path d="M4 9h16"/>
                            <path d="M16 13h2"/>
                            <path d="M7 3h10"/>
                        </svg>

                    </div>


                    <h3>
                        Penningmeester
                    </h3>

                    <p>
                        Vind je het leuk om overzicht te houden
                        over financiën? We zoeken iemand die de
                        financiële administratie van de vereniging
                        wil verzorgen.
                    </p>


                    <div class="join-vacancy__meta">

                        <span>
                            Structureel
                        </span>

                        <span>
                            Financiële administratie
                        </span>

                    </div>


                    <a
                        href="<?php echo esc_url(
                            home_url('/contact/?onderwerp=vrijwilliger')
                        ); ?>"
                    >
                        Interesse in deze rol
                        <span aria-hidden="true">→</span>
                    </a>

                </article>



                <!-- ========================================
                     EERSTE HULPVERLENER
                ========================================= -->

                <article class="join-vacancy join-vacancy--ehbo">

                    <div class="join-vacancy__top">

                        <span class="join-vacancy__type">
                            Training & scholing
                        </span>

                        <span class="join-vacancy__number">
                            03
                        </span>

                    </div>


                    <div class="
                        join-vacancy__icon
                        join-vacancy__icon--red
                    ">

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
                        Eerste hulpverlener
                    </h3>

                    <p>
                        Kun jij helpen wanneer het nodig is,
                        of wil je dat graag leren? Als eerste
                        hulpverlener kun je ervaring opdoen en
                        je inzetten tijdens activiteiten en evenementen.
                    </p>


                    <div class="join-vacancy__meta">

                        <span>
                            Structureel
                        </span>

                        <span>
                            Praktijkervaring
                        </span>

                    </div>


                    <a
                        href="<?php echo esc_url(
                            home_url('/contact/?onderwerp=vrijwilliger')
                        ); ?>"
                    >
                        Ik wil helpen
                        <span aria-hidden="true">→</span>
                    </a>

                </article>



                <!-- ========================================
                     EHBO'ER
                ========================================= -->

                <article class="join-vacancy join-vacancy--ehbo">

                    <div class="join-vacancy__top">

                        <span class="join-vacancy__type">
                            Vereniging
                        </span>

                        <span class="join-vacancy__number">
                            04
                        </span>

                    </div>


                    <div class="
                        join-vacancy__icon
                        join-vacancy__icon--yellow
                    ">

                        <svg
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.8"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            aria-hidden="true"
                        >
                            <rect
                                x="4"
                                y="4"
                                width="16"
                                height="16"
                                rx="3"
                            />
                            <path d="M12 8v8"/>
                            <path d="M8 12h8"/>
                        </svg>

                    </div>


                    <h3>
                        EHBO’er met diploma
                    </h3>

                    <p>
                        Heb je al een EHBO-diploma en lijkt het
                        je leuk om actief te worden binnen een
                        gezellige vereniging? Petrus Donders
                        zoekt gemotiveerde EHBO’ers die willen meedoen.
                    </p>


                    <div class="join-vacancy__meta">

                        <span>
                            Structureel
                        </span>

                        <span>
                            EHBO-diploma
                        </span>

                    </div>


                    <a
                        href="<?php echo esc_url(
                            home_url('/contact/?onderwerp=vrijwilliger')
                        ); ?>"
                    >
                        Ik heb interesse
                        <span aria-hidden="true">→</span>
                    </a>

                </article>


            </div>



            <!-- EXTERNAL LINK -->
            <div class="join-vacancies__external reveal">

                <div>

                    <span>
                        Ook te vinden op VrijwilligersTilburg
                    </span>

                    <strong>
                        Bekijk onze actuele vrijwilligersvacatures.
                    </strong>

                </div>


                <a
                    class="page-text-link"
                    href="https://www.vrijwilligerstilburg.nl/profiel/210450"
                    target="_blank"
                    rel="noopener noreferrer"
                >
                    Naar VrijwilligersTilburg
                    <span aria-hidden="true">↗</span>
                </a>

            </div>


        </div>

    </section>



    <!-- ========================================
         MEMBERSHIP
    ========================================= -->

    <section class="join-membership page-section">

        <div class="container join-membership__inner">


            <div class="join-membership__visual reveal-image">

                <img
                    src="<?php echo esc_url(
                        get_stylesheet_directory_uri() .
                        '/assets/images/gallery-oefenen.jpg'
                    ); ?>"
                    alt="Leden van Petrus Donders oefenen samen"
                    loading="lazy"
                >


                <div class="join-membership__badge">

                    <span>
                        Lidmaatschap
                    </span>

                    <strong>
                        €17,50
                    </strong>

                    <small>
                        per jaar
                    </small>

                </div>

            </div>



            <div class="join-membership__content reveal">

                <span class="section-eyebrow">
                    Lid worden
                </span>

                <h2>
                    Blijf leren.
                    Blijf betrokken.
                </h2>

                <p class="join-membership__lead">
                    Je hoeft geen bestuursfunctie of vaste
                    vrijwilligersrol te hebben om onderdeel
                    te worden van Petrus Donders.
                </p>

                <p>
                    Als lid blijf je betrokken bij de vereniging
                    en kun je deelnemen aan activiteiten en
                    les- en oefenavonden.
                </p>


                <div class="join-membership__points">

                    <div>
                        <span>✓</span>
                        Deelname aan les- en oefenavonden
                    </div>

                    <div>
                        <span>✓</span>
                        EHBO-kennis onderhouden
                    </div>

                    <div>
                        <span>✓</span>
                        Betrokken bij de vereniging
                    </div>

                    <div>
                        <span>✓</span>
                        Mogelijkheid om actief mee te helpen
                    </div>

                </div>


                <a
                    class="page-button page-button--primary"
href="<?php echo esc_url(
    home_url(
        '/inschrijven/?type=lidmaatschap'
    )
); ?>"
                >
                    Ik wil lid worden
                    <span aria-hidden="true">→</span>
                </a>

            </div>


        </div>

    </section>



    <!-- ========================================
         NO MATCH
    ========================================= -->

    <section class="join-open page-section page-section--soft">

        <div class="container join-open__inner reveal">


            <div>

                <span class="section-eyebrow">
                    Geen passende vacature?
                </span>

                <h2>
                    Misschien hebben we
                    jou toch nodig.
                </h2>

            </div>


            <div>

                <p>
                    Wil je graag iets betekenen voor Petrus Donders,
                    maar staat jouw ideale rol hier niet tussen?
                    Laat vooral weten waar je goed in bent of
                    wat je graag zou willen doen.
                </p>

                <a
                    class="page-button page-button--primary"
                    href="<?php echo esc_url(
                        home_url('/contact/?onderwerp=vrijwilliger')
                    ); ?>"
                >
                    Vertel ons hoe je wilt helpen
                    <span aria-hidden="true">→</span>
                </a>

            </div>


        </div>

    </section>



    <!-- ========================================
         FINAL CTA
    ========================================= -->

    <section class="join-next">

        <div class="container">

            <div class="join-next__card reveal">


                <div>

                    <span>
                        Klaar om mee te doen?
                    </span>

                    <h2>
                        We maken graag
                        kennis met je.
                    </h2>

                    <p>
                        Een vraag stellen verplicht tot niets.
                        Neem contact op en ontdek welke rol
                        bij jou past.
                    </p>

                </div>


                <a
                    class="page-button page-button--yellow"
                    href="<?php echo esc_url(
                        home_url('/contact/?onderwerp=vrijwilliger')
                    ); ?>"
                >
                    Neem contact op
                    <span aria-hidden="true">→</span>
                </a>


            </div>

        </div>

    </section>


</main>

<?php get_footer(); ?>