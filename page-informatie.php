<?php
/*
Template Name: Informatie
Template Post Type: page
*/

get_header();
?>

<main
    id="main-content"
    class="inner-page information-page"
>


    <!-- ========================================
         HERO
    ========================================= -->

    <section class="page-hero information-hero">

        <div class="container page-hero__inner">

            <div class="page-hero__content reveal">

                <span class="section-eyebrow">
                    Praktische informatie
                </span>

                <h1>
                    Alles wat je
                    <span>snel wilt vinden.</span>
                </h1>

                <p class="page-hero__lead">
                    Leslocaties, oefenavonden, hercertificering,
                    cursusprijzen en informatie over onze vereniging
                    vind je hier overzichtelijk bij elkaar.
                </p>

                <div class="page-hero__actions">

                    <a
                        class="page-button page-button--primary"
                        href="#informatie-overzicht"
                    >
                        Bekijk informatie
                        <span aria-hidden="true">↓</span>
                    </a>

                    <a
                        class="page-text-link"
                        href="<?php echo esc_url(
                            home_url('/contact/')
                        ); ?>"
                    >
                        Staat je vraag er niet bij?
                        <span aria-hidden="true">→</span>
                    </a>

                </div>

            </div>


            <div class="page-hero__visual">

                <div class="information-hero__panel reveal">

                    <span class="information-hero__label">
                        Snel geregeld
                    </span>

                    <div class="information-hero__items">

                        <div>
                            <span>01</span>
                            <strong>Leslocaties</strong>
                        </div>

                        <div>
                            <span>02</span>
                            <strong>Lesavonden</strong>
                        </div>

                        <div>
                            <span>03</span>
                            <strong>Hercertificering</strong>
                        </div>

                        <div>
                            <span>04</span>
                            <strong>Cursusprijzen</strong>
                        </div>

                        <div>
                            <span>05</span>
                            <strong>Veilig & vertrouwd</strong>
                        </div>

                    </div>

                    <div
                        class="information-hero__cross"
                        aria-hidden="true"
                    >
                        +
                    </div>

                </div>

            </div>

        </div>

    </section>



    <!-- ========================================
         QUICK NAV
    ========================================= -->

    <section
        class="information-jump"
        id="informatie-overzicht"
    >

        <div class="container information-jump__inner">

            <span class="information-jump__label">
                Snel naar
            </span>

            <nav
                class="information-jump__links"
                aria-label="Praktische informatie"
            >

                <a href="#leslocaties">
                    Leslocaties
                </a>

                <a href="#oefenavonden">
                    Les- & oefenavonden
                </a>

                <a href="#hercertificering">
                    Hercertificering
                </a>

                <a href="#prijzen">
                    Prijzen
                </a>

                <a href="#veiligheid">
                    Gedragscode & privacy
                </a>

            </nav>

        </div>

    </section>

    <!-- ========================================
         OVERVIEW
    ========================================= -->

    <section class="information-overview page-section">

        <div class="container">

            <div class="information-overview__header reveal">

                <div>

                    <span class="section-eyebrow">
                        Praktisch geregeld
                    </span>

                    <h2>
                        Waar ben je
                        naar op zoek?
                    </h2>

                </div>

                <p>
                    Van het vinden van een leslocatie tot het
                    verlengen van je diploma: hieronder vind je
                    de belangrijkste praktische informatie.
                </p>

            </div>


            <div class="information-overview__grid reveal-stagger">


                <!-- LOCATIONS -->
                <a
                    class="information-card"
                    href="#leslocaties"
                >

                    <span class="information-card__number">
                        01
                    </span>

                    <div class="information-card__icon">

                        <svg
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.8"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            aria-hidden="true"
                        >
                            <path d="M20 10c0 5-8 11-8 11S4 15 4 10a8 8 0 1 1 16 0z"/>
                            <circle cx="12" cy="10" r="2.5"/>
                        </svg>

                    </div>

                    <h3>
                        Leslocaties
                    </h3>

                    <p>
                        Bekijk waar onze cursussen, lesavonden
                        en competentielessen plaatsvinden.
                    </p>

                    <span class="information-card__link">
                        Bekijk locaties →
                    </span>

                </a>


                <!-- LESSONS -->
                <a
                    class="information-card"
                    href="#oefenavonden"
                >

                    <span class="information-card__number">
                        02
                    </span>

                    <div class="information-card__icon information-card__icon--red">

                        <svg
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.8"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            aria-hidden="true"
                        >
                            <circle cx="12" cy="12" r="9"/>
                            <path d="M12 7v5l3 2"/>
                        </svg>

                    </div>

                    <h3>
                        Les- & oefenavonden
                    </h3>

                    <p>
                        Blijf je vaardigheden onderhouden
                        door regelmatig te oefenen.
                    </p>

                    <span class="information-card__link">
                        Meer informatie →
                    </span>

                </a>


                <!-- RECERTIFICATION -->
                <a
                    class="information-card"
                    href="#hercertificering"
                >

                    <span class="information-card__number">
                        03
                    </span>

                    <div class="information-card__icon information-card__icon--yellow">

                        <svg
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.8"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            aria-hidden="true"
                        >
                            <circle cx="12" cy="8" r="5"/>
                            <path d="M8.5 12l-1 9 4.5-3 4.5 3-1-9"/>
                        </svg>

                    </div>

                    <h3>
                        Hercertificering
                    </h3>

                    <p>
                        Lees hoe je jouw diploma of certificaat
                        geldig houdt en welke competenties meetellen.
                    </p>

                    <span class="information-card__link">
                        Bekijk hercertificering →
                    </span>

                </a>


                <!-- PRICES -->
                <a
                    class="information-card"
                    href="#prijzen"
                >

                    <span class="information-card__number">
                        04
                    </span>

                    <div class="information-card__icon">

                        <svg
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.8"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            aria-hidden="true"
                        >
                            <circle cx="12" cy="12" r="9"/>
                            <path d="M15.5 8.5A4 4 0 1 0 15.5 15.5"/>
                            <path d="M7 10h7"/>
                            <path d="M7 14h7"/>
                        </svg>

                    </div>

                    <h3>
                        Cursusprijzen
                    </h3>

                    <p>
                        Een overzicht van cursus-, certificerings-
                        en lidmaatschapskosten.
                    </p>

                    <span class="information-card__link">
                        Bekijk prijzen →
                    </span>

                </a>

            </div>

        </div>

    </section>

<?php
while (have_posts()) :
    the_post();

    the_content();

endwhile;
?>

 <!-- ========================================
     DOCUMENTS
======================================== -->

<section class="information-resources page-section">

    <div class="container">

        <div class="information-resources__header reveal">

            <div>

                <span class="section-eyebrow">
                    Reglementen & richtlijnen
                </span>

                <h2>
                    Meer lezen?
                </h2>

            </div>

            <p>
                Bekijk de officiële documenten over privacy,
                evenementenzorg en de richtlijnen waar we
                binnen onze hulpverlening mee werken.
            </p>

        </div>


        <div class="information-resources__grid reveal-stagger">


            <a
                class="information-resource"
                href="https://www.petrusdonders.nl/Privacy%20Reglement%20EHBO-ver.%20Petrus%20Donders_W18.04.2019.pdf"
                target="_blank"
                rel="noopener noreferrer"
            >

                <div class="information-resource__top">

                    <span class="information-resource__type">
                        PDF
                    </span>

                    <span
                        class="information-resource__arrow"
                        aria-hidden="true"
                    >
                        ↗
                    </span>

                </div>

                <h3>
                    Privacyreglement
                </h3>

                <p>
                    Hoe Petrus Donders omgaat met
                    persoonsgegevens en privacy.
                </p>

                <span class="information-resource__meta">
                    Privacy & AVG
                </span>

            </a>


            <a
                class="information-resource"
                href="https://www.petrusdonders.nl/algemene%20voorwaarden%20hulpverlening%20PD_v20-02-23.pdf"
                target="_blank"
                rel="noopener noreferrer"
            >

                <div class="information-resource__top">

                    <span class="information-resource__type">
                        PDF
                    </span>

                    <span
                        class="information-resource__arrow"
                        aria-hidden="true"
                    >
                        ↗
                    </span>

                </div>

                <h3>
                    Voorwaarden hulpverlening
                </h3>

                <p>
                    Afspraken en voorwaarden voor
                    eerstehulpverlening bij evenementen.
                </p>

                <span class="information-resource__meta">
                    Evenementenzorg
                </span>

            </a>


            <a
                class="information-resource"
                href="https://www.evenementenz.org"
                target="_blank"
                rel="noopener noreferrer"
            >

                <div class="information-resource__top">

                    <span class="information-resource__type">
                        WEB
                    </span>

                    <span
                        class="information-resource__arrow"
                        aria-hidden="true"
                    >
                        ↗
                    </span>

                </div>

                <h3>
                    Veldnorm Evenementenzorg
                </h3>

                <p>
                    De landelijke richtlijn voor veilige
                    en verantwoorde evenementenzorg.
                </p>

                <span class="information-resource__meta">
                    Externe richtlijn
                </span>

            </a>


        </div>

    </div>

</section>



<!-- ========================================
     CLOSING
======================================== -->

<section class="information-closing" id="lidmaatschap">

    <div class="container">

        <div class="information-closing__card reveal">


            <div class="information-closing__main">

                <span class="section-eyebrow">
                    Blijf betrokken
                </span>

                <h2>
                    Blijf leren.
                    <span>Blijf helpen.</span>
                </h2>

                <p>
                    Wil je deelnemen aan lesavonden,
                    je EHBO-kennis onderhouden en betrokken
                    blijven bij Petrus Donders? Dan ben je
                    van harte welkom als lid.
                </p>

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

            </div>


            <div class="information-closing__contact">

                <span class="information-closing__contact-label">
                    Nog een vraag?
                </span>

                <h3>
                    We helpen je
                    graag verder.
                </h3>

                <p>
                    Kun je de informatie die je zoekt
                    niet vinden? Neem gerust contact met ons op.
                </p>

                <a
                    href="<?php echo esc_url(
                        home_url('/contact/')
                    ); ?>"
                >
                    Neem contact op
                    <span aria-hidden="true">→</span>
                </a>

            </div>


            <span
                class="information-closing__cross"
                aria-hidden="true"
            >
                +
            </span>

        </div>

    </div>

</section>


</main>

<?php get_footer(); ?>
