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



    <!-- ========================================
         LESLOCATIES
    ========================================= -->

    <section
        class="information-locations page-section page-section--soft"
        id="leslocaties"
    >

        <div class="container">

            <div class="information-locations__header reveal">

                <div>

                    <span class="section-eyebrow">
                        Leslocaties
                    </span>

                    <h2>
                        Leren bij jou
                        in de buurt.
                    </h2>

                </div>

                <p>
                    Onze cursussen, oefenavonden en
                    competentielessen vinden plaats op
                    wijklocaties in Tilburg.
                </p>

            </div>


            <div class="information-locations__grid reveal-stagger">


                <article class="information-location">

                    <span class="information-location__number">
                        01
                    </span>

                    <div>

                        <span class="information-location__label">
                            Wijkcentrum
                        </span>

                        <h3>
                            De Spijkerbeemden
                        </h3>

                        <address>
                            Don Sartostraat 4<br>
                            5022 HA Tilburg
                        </address>

                    </div>

                    <div class="information-location__time">

                        <span>
                            Lesavond
                        </span>

                        <strong>
                            Woensdag
                        </strong>

                        <small>
                            19:30 – 21:30
                        </small>

                    </div>

                </article>


                <article class="information-location">

                    <span class="information-location__number">
                        02
                    </span>

                    <div>

                        <span class="information-location__label">
                            Wijkcentrum
                        </span>

                        <h3>
                            't Sant
                        </h3>

                        <address>
                            Beneluxlaan 74<br>
                            5042 WS Tilburg
                        </address>

                    </div>

                    <div class="information-location__time">

                        <span>
                            Lesavond
                        </span>

                        <strong>
                            Dinsdag
                        </strong>

                        <small>
                            19:30 – 21:30
                        </small>

                    </div>

                </article>

            </div>


            <div class="information-locations__note reveal">

                <strong>
                    Goed om te weten
                </strong>

                <p>
                    Op beide locaties worden cursussen,
                    oefenavonden en competentielessen verzorgd.
                    Controleer altijd het actuele lesrooster
                    voordat je naar een lesavond komt.
                </p>

                <a
                    class="page-text-link"
                    href="<?php echo esc_url(
                        home_url('/stempelkaart-lesavonden/')
                    ); ?>"
                >
                    Bekijk het lesrooster
                    <span aria-hidden="true">→</span>
                </a>

            </div>

        </div>

    </section>



    <!-- ========================================
         OEFENAVONDEN
    ========================================= -->

    <section
        class="information-lessons page-section"
        id="oefenavonden"
    >

        <div class="container information-lessons__inner">


            <div class="information-lessons__content reveal">

                <span class="section-eyebrow">
                    Les- & oefenavonden
                </span>

                <h2>
                    EHBO leer je
                    door te blijven doen.
                </h2>

                <p class="information-lessons__lead">
                    Tijdens les- en oefenavonden onderhoud je
                    kennis en praktische vaardigheden aan de hand
                    van verschillende EHBO-thema's.
                </p>

                <p>
                    Door regelmatig te oefenen blijft handelen
                    in een noodsituatie vertrouwd. De behandelde
                    onderwerpen wisselen volgens het lesrooster.
                </p>


                <div class="information-checks">

                    <div>
                        <span>✓</span>
                        Praktijksituaties
                    </div>

                    <div>
                        <span>✓</span>
                        Reanimatie
                    </div>

                    <div>
                        <span>✓</span>
                        Letsels & ziektebeelden
                    </div>

                    <div>
                        <span>✓</span>
                        EHAK
                    </div>

                    <div>
                        <span>✓</span>
                        Competenties
                    </div>

                    <div>
                        <span>✓</span>
                        Samen oefenen
                    </div>

                </div>


                <a
                    class="page-button page-button--primary"
                    href="<?php echo esc_url(
                        home_url('/stempelkaart-lesavonden/')
                    ); ?>"
                >
                    Bekijk lesavonden
                    <span aria-hidden="true">→</span>
                </a>

            </div>


            <div class="information-lessons__card reveal">

                <span class="information-lessons__card-label">
                    Presentiekaart
                </span>

                <h3>
                    Houd zelf bij
                    wat je hebt gevolgd.
                </h3>

                <p>
                    Deelname aan les- en oefenavonden wordt
                    geregistreerd. Met de presentiekaart kun je
                    zelf volgen welke thema's en competenties
                    je al hebt behandeld.
                </p>

                <div class="information-lessons__stamps">

                    <span>01</span>
                    <span>02</span>
                    <span>03</span>
                    <span>04</span>
                    <span>05</span>
                    <span>06</span>

                </div>

                <a
                    class="page-text-link"
                    href="<?php echo esc_url(
                        home_url('/stempelkaart-lesavonden/')
                    ); ?>"
                >
                    Naar stempelkaart & lesavonden
                    <span aria-hidden="true">→</span>
                </a>

            </div>

        </div>

    </section>



    <!-- ========================================
         HERCERTIFICERING
    ========================================= -->

    <section
        class="information-recertification page-section"
        id="hercertificering"
    >

        <div class="container">

            <div class="information-recertification__header reveal">

                <div>

                    <span class="section-eyebrow">
                        Hercertificering
                    </span>

                    <h2>
                        Houd je diploma
                        geldig.
                    </h2>

                </div>

                <div>

                    <strong>
                        2 jaar
                    </strong>

                    <span>
                        geldigheid van diploma's en certificaten
                        van Het Oranje Kruis
                    </span>

                </div>

            </div>


            <div class="information-recertification__intro reveal">

                <p>
                    Om een diploma of certificaat geldig te houden,
                    moet je jouw kennis en vaardigheden blijven
                    onderhouden. Tijdens de lesavonden worden
                    verschillende competenties geregistreerd.
                </p>

            </div>


            <div class="information-competencies">

                <span>
                    Bewustzijn
                </span>

                <span>
                    Reanimatie volwassenen
                </span>

                <span>
                    Stop de bloeding
                </span>

                <span>
                    EHAK
                </span>

                <span>
                    Kinderreanimatie
                </span>

                <span>
                    Ademhaling
                </span>

                <span>
                    Circulatie
                </span>

                <span>
                    Warmte & koude
                </span>

                <span>
                    Bewegingsapparaat
                </span>

                <span>
                    Steken & beten
                </span>

                <span>
                    Ziekteklachten
                </span>

            </div>


            <div class="information-recertification__steps reveal-stagger">


                <article>

                    <span>
                        01
                    </span>

                    <h3>
                        Aanmelden
                    </h3>

                    <p>
                        Voor het verlopen van je diploma of certificaat
                        ontvang je informatie over hercertificering.
                    </p>

                </article>


                <article>

                    <span>
                        02
                    </span>

                    <h3>
                        Competenties controleren
                    </h3>

                    <p>
                        De opleidingenadministratie controleert
                        welke competenties tijdens lesavonden
                        zijn behaald.
                    </p>

                </article>


                <article>

                    <span>
                        03
                    </span>

                    <h3>
                        Aanvullen indien nodig
                    </h3>

                    <p>
                        Ontbreken nog competenties? Dan kan in
                        overleg een extra les- of toetsmoment
                        worden gepland.
                    </p>

                </article>


                <article>

                    <span>
                        04
                    </span>

                    <h3>
                        Hercertificeren
                    </h3>

                    <p>
                        Zijn de vereiste competenties compleet,
                        dan kan het diploma of certificaat
                        worden verlengd.
                    </p>

                </article>

            </div>


            <a
                class="page-button page-button--yellow"
                href="<?php echo esc_url(
    home_url(
        '/inschrijven/?type=hercertificering'
    )
); ?>"
            >
                Inschrijven voor hercertificering
                <span aria-hidden="true">→</span>
            </a>

        </div>

    </section>



    <!-- ========================================
         PRICES
    ========================================= -->

    <section
        class="information-prices page-section"
        id="prijzen"
    >

        <div class="container">

            <div class="information-prices__header reveal">

                <div>

                    <span class="section-eyebrow">
                        Cursusprijzen
                    </span>

                    <h2>
                        Duidelijk vooraf.
                    </h2>

                </div>

                <p>
                    Hieronder vind je de huidige tarieven voor
                    opleidingen en certificering. Voor maatwerk
                    en In Company-trainingen maken we graag
                    een passende offerte.
                </p>

            </div>


            <div class="information-price-table reveal">


                <div class="information-price-row">
                    <strong>Diploma Eerste Hulp</strong>
                    <span>€ 240,- / € 195,-</span>
                </div>

                <div class="information-price-row">
                    <strong>Levensreddend Handelen</strong>
                    <span>€ 150,-</span>
                </div>

                <div class="information-price-row">
                    <strong>Eerste Hulp aan Kinderen</strong>
                    <span>€ 75,-</span>
                </div>

                <div class="information-price-row">
                    <strong>EHAK voor leden</strong>
                    <span>€ 40,-</span>
                </div>

                <div class="information-price-row">
                    <strong>Reanimatie & AED</strong>
                    <span>€ 75,-</span>
                </div>

                <div class="information-price-row">
                    <strong>Stop de bloeding</strong>
                    <span>€ 75,-</span>
                </div>

                <div class="information-price-row">
                    <strong>Sportletsels</strong>
                    <span>€ 175,-</span>
                </div>

                <div class="information-price-row">
                    <strong>Wandelletsels</strong>
                    <span>€ 75,-</span>
                </div>

                <div class="information-price-row">
                    <strong>Hercertificering diploma / certificaat</strong>
                    <span>€ 16,75</span>
                </div>

                <div class="information-price-row">
                    <strong>Lidmaatschap Petrus Donders</strong>
                    <span>€ 17,50 / jaar</span>
                </div>

                <div class="information-price-row">
                    <strong>Workshop / In Company</strong>
                    <span>Op aanvraag</span>
                </div>

            </div>


            <div class="information-prices__notes reveal-stagger">

                <div>

                    <strong>
                        Vergoeding zorgverzekering
                    </strong>

                    <p>
                        Sommige zorgverzekeraars vergoeden een
                        EHBO-cursus geheel of gedeeltelijk.
                        Controleer hiervoor altijd jouw eigen polis.
                    </p>

                </div>


                <div>

                    <strong>
                        Lidmaatschap bij cursus
                    </strong>

                    <p>
                        Bij deelname aan een cursus Diploma Eerste Hulp
                        of EHAK is het eerste jaar lidmaatschap
                        inbegrepen in de cursusprijs.
                    </p>

                </div>

            </div>

        </div>

    </section>



    <!-- ========================================
         SAFETY / PRIVACY
    ========================================= -->

    <section
        class="information-safety page-section page-section--soft"
        id="veiligheid"
    >

        <div class="container">

            <div class="information-safety__header reveal">

                <div>

                    <span class="section-eyebrow">
                        Veilig & vertrouwd
                    </span>

                    <h2>
                        Respect staat
                        voorop.
                    </h2>

                </div>

                <p>
                    Eerste hulp draait niet alleen om vaardigheden.
                    Een veilige, respectvolle omgeving en zorgvuldige
                    omgang met persoonsgegevens horen daar net zo bij.
                </p>

            </div>


            <div class="information-safety__grid reveal-stagger">


                <article class="information-safety__card">

                    <span>
                        01
                    </span>

                    <h3>
                        Gedragscode
                    </h3>

                    <p>
                        Petrus Donders streeft naar een open,
                        veilige en respectvolle omgeving.
                        Ongewenst gedrag wordt niet geaccepteerd.
                    </p>

                </article>


                <article class="information-safety__card">

                    <span>
                        02
                    </span>

                    <h3>
                        Vertrouwenscontactpersoon
                    </h3>

                    <p>
                        Bij ongewenst gedrag zoals pesten,
                        discriminatie, intimidatie of agressie
                        kan in vertrouwen contact worden opgenomen
                        met een vertrouwenscontactpersoon.
                    </p>

                </article>


                <article class="information-safety__card">

                    <span>
                        03
                    </span>

                    <h3>
                        Verklaring Omtrent Gedrag
                    </h3>

                    <p>
                        Voor bestuursleden, instructeurs,
                        LOTUS-slachtoffers en actieve
                        evenementenhulpverleners wordt een VOG
                        aangevraagd.
                    </p>

                </article>


                <article class="information-safety__card">

                    <span>
                        04
                    </span>

                    <h3>
                        Privacy
                    </h3>

                    <p>
                        Persoonsgegevens van leden en slachtoffers
                        worden zorgvuldig behandeld en niet zonder
                        noodzaak met anderen gedeeld.
                    </p>

                </article>

            </div>

        </div>

    </section>



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
