<?php
/*
Template Name: Hulpverlening
Template Post Type: page
*/

get_header();
?>

<main
    id="main-content"
    class="inner-page assistance-page"
>


    <!-- ========================================
         HERO
    ========================================= -->

    <section class="page-hero assistance-hero">

        <div class="container page-hero__inner">

            <div class="page-hero__content reveal">

                <span class="section-eyebrow">
                    Hulpverlening
                </span>

                <h1>
                    Goede hulp
                    <span>wanneer het nodig is.</span>
                </h1>

                <p class="page-hero__lead">
                    Organiseer je een evenement in Tilburg of omgeving?
                    Petrus Donders verzorgt eerstehulpverlening met
                    getrainde vrijwilligers die voorbereid zijn op
                    kleine én onverwachte medische situaties.
                </p>

                <div class="page-hero__actions">

                    <a
                        class="page-button page-button--primary"
                        href="#aanvragen"
                    >
                        Hulpverlening aanvragen
                        <span aria-hidden="true">↓</span>
                    </a>

                    <a
                        class="page-text-link"
                        href="#werkwijze"
                    >
                        Bekijk onze werkwijze
                        <span aria-hidden="true">→</span>
                    </a>

                </div>

            </div>


            <div class="page-hero__visual">

                <div class="assistance-hero__image reveal-image">

                    <img
                        src="<?php echo esc_url(
                            get_stylesheet_directory_uri() .
                            '/assets/images/hero-hulpverlening.png'
                        ); ?>"
                        alt="Eerste hulp tijdens een evenement"
                    >

                    <div class="assistance-hero__badge">

                        <span>
                            Evenementenzorg
                        </span>

                        <strong>
                            Rust, overzicht
                            en eerste hulp.
                        </strong>

                    </div>

                </div>

            </div>

        </div>

    </section>



    <!-- ========================================
         INTRO STRIP
    ========================================= -->

    <section class="assistance-strip">

        <div class="container assistance-strip__inner">

            <div>

                <strong>
                    Evenement
                </strong>

                <span>
                    sport, buurt, cultuur of vereniging
                </span>

            </div>


            <span
                class="assistance-strip__arrow"
                aria-hidden="true"
            >
                →
            </span>


            <div>

                <strong>
                    Voorbereiding
                </strong>

                <span>
                    samen bekijken wat nodig is
                </span>

            </div>


            <span
                class="assistance-strip__arrow"
                aria-hidden="true"
            >
                →
            </span>


            <div>

                <strong>
                    Hulpverlening
                </strong>

                <span>
                    aanwezig wanneer het telt
                </span>

            </div>

        </div>

    </section>



    <!-- ========================================
         INTRO
    ========================================= -->

    <section class="assistance-intro page-section">

        <div class="container assistance-intro__inner">

            <div class="assistance-intro__heading reveal">

                <span class="section-eyebrow">
                    Eerste hulp op locatie
                </span>

                <h2>
                    Een veilig evenement
                    begint met voorbereiding.
                </h2>

            </div>


            <div class="assistance-intro__content reveal">

                <p class="assistance-intro__lead">
                    Van een kleine verwonding tot iemand die plotseling
                    onwel wordt: tijdens een evenement wil je kunnen
                    rekenen op mensen die weten wat ze moeten doen.
                </p>

                <p>
                    Petrus Donders ondersteunt evenementen in Tilburg
                    en omgeving met vrijwillige eerstehulpverleners.
                    Zij verlenen eerste hulp aan bezoekers en deelnemers
                    en schakelen professionele zorg in wanneer dat nodig is.
                </p>

                <p>
                    Vooraf bespreken we de aard van het evenement,
                    de locatie, het bezoekers- of deelnemersaantal
                    en eventuele bijzonderheden. Zo kan de inzet worden
                    afgestemd op wat er daadwerkelijk nodig is.
                </p>

            </div>

        </div>

    </section>



    <!-- ========================================
         TYPE EVENEMENTEN
    ========================================= -->

    <section class="assistance-types page-section page-section--soft">

        <div class="container">

            <div class="assistance-types__header reveal">

                <div>

                    <span class="section-eyebrow">
                        Waar we bij helpen
                    </span>

                    <h2>
                        Van buurtactiviteit
                        tot sportevenement.
                    </h2>

                </div>


                <p>
                    Geen evenement is hetzelfde. Daarom kijken we
                    samen naar de activiteit, bezoekers en omgeving
                    om een passende inzet te bepalen.
                </p>

            </div>


            <div class="assistance-types__grid reveal-stagger">


                <!-- SPORT -->
                <article class="assistance-type">

                    <span class="assistance-type__number">
                        01
                    </span>

                    <div class="assistance-type__icon">

                        <svg
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.8"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            aria-hidden="true"
                        >
                            <circle cx="12" cy="5" r="2"/>
                            <path d="M9 22l1-7 3-3 2 3 4 1"/>
                            <path d="M5 12l4-3 3 2"/>
                        </svg>

                    </div>

                    <h3>
                        Sport & beweging
                    </h3>

                    <p>
                        Eerste hulp tijdens sporttoernooien,
                        wedstrijden, wandeltochten, sportdagen
                        en andere actieve evenementen.
                    </p>

                </article>


                <!-- BUURT -->
                <article class="assistance-type">

                    <span class="assistance-type__number">
                        02
                    </span>

                    <div class="assistance-type__icon assistance-type__icon--red">

                        <svg
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.8"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            aria-hidden="true"
                        >
                            <path d="M3 21h18"/>
                            <path d="M5 21V10l7-5 7 5v11"/>
                            <path d="M9 21v-6h6v6"/>
                        </svg>

                    </div>

                    <h3>
                        Buurt & vereniging
                    </h3>

                    <p>
                        Ondersteuning bij buurtactiviteiten,
                        verenigingsdagen, open dagen en andere
                        lokale evenementen.
                    </p>

                </article>


                <!-- PUBLIEK -->
                <article class="assistance-type">

                    <span class="assistance-type__number">
                        03
                    </span>

                    <div class="assistance-type__icon assistance-type__icon--yellow">

                        <svg
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.8"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            aria-hidden="true"
                        >
                            <path d="M4 18v-7"/>
                            <path d="M8 18V6"/>
                            <path d="M12 18v-9"/>
                            <path d="M16 18V4"/>
                            <path d="M20 18v-5"/>
                            <path d="M2 21h20"/>
                        </svg>

                    </div>

                    <h3>
                        Publiek & cultuur
                    </h3>

                    <p>
                        Eerste hulp bij markten, braderieën,
                        beurzen, optredens en andere
                        publieksactiviteiten.
                    </p>

                </article>

            </div>

        </div>

    </section>



    <!-- ========================================
         KWALITEIT / EVENEMENTENZORG
    ========================================= -->

    <section class="assistance-quality page-section">

        <div class="container assistance-quality__inner">


            <div class="assistance-quality__visual reveal-image">

                <img
                    src="<?php echo esc_url(
                        get_stylesheet_directory_uri() .
                        '/assets/images/gallery-oefenen.jpg'
                    ); ?>"
                    alt="Eerste hulp oefenen bij Petrus Donders"
                    loading="lazy"
                >

                <div class="assistance-quality__visual-label">

                    <span>
                        Praktijk & training
                    </span>

                    <strong>
                        Voorbereid op de praktijk.
                    </strong>

                </div>

            </div>


            <div class="assistance-quality__content reveal">

                <span class="section-eyebrow">
                    Evenementenzorg
                </span>

                <h2>
                    Meer dan alleen
                    aanwezig zijn.
                </h2>

                <p class="assistance-quality__lead">
                    Onze hulpverleners worden regelmatig bijgeschoold
                    zodat zij tijdens evenementen rustig, veilig
                    en doelgericht kunnen handelen.
                </p>


                <div class="assistance-quality__features">


                    <!-- TRAINING -->
                    <article class="assistance-quality__feature">

                        <span class="assistance-quality__feature-number">
                            01
                        </span>

                        <div>

                            <h3>
                                Goed voorbereid
                            </h3>

                            <p>
                                Onze hulpverleners krijgen aanvullende
                                training in onder andere reanimatie,
                                Eerste Hulp aan Kinderen, sport- en
                                wandelletsels en alcohol- en
                                drugsgerelateerde incidenten.
                            </p>

                        </div>

                    </article>


                    <!-- PROFESSIONEEL -->
                    <article class="assistance-quality__feature">

                        <span class="assistance-quality__feature-number">
                            02
                        </span>

                        <div>

                            <h3>
                                Professioneel handelen
                            </h3>

                            <p>
                                Tijdens evenementen is er aandacht voor
                                communicatie, samenwerking, methodisch
                                handelen en het veilig overdragen of
                                vervoeren van een zorgvrager.
                            </p>

                        </div>

                    </article>


                    <!-- VOG -->
                    <article class="assistance-quality__feature">

                        <span class="assistance-quality__feature-number">
                            03
                        </span>

                        <div>

                            <h3>
                                Gedragscode & VOG
                            </h3>

                            <p>
                                Eerstehulpverleners volgen de gedragscode
                                voor evenementenzorgverleners en beschikken
                                over een Verklaring Omtrent Gedrag.
                            </p>

                        </div>

                    </article>


                    <!-- PRIVACY -->
                    <article class="assistance-quality__feature">

                        <span class="assistance-quality__feature-number">
                            04
                        </span>

                        <div>

                            <h3>
                                Privacy & veiligheid
                            </h3>

                            <p>
                                Zorg wordt waar mogelijk verleend vanuit
                                een geschikte EHBO-post of ruimte waarin
                                de privacy van de zorgvrager en de veiligheid
                                van de hulpverleners kunnen worden gewaarborgd.
                            </p>

                        </div>

                    </article>

                </div>

            </div>

        </div>

    </section>



    <!-- ========================================
         WERKWIJZE
    ========================================= -->

    <section
        class="assistance-process page-section page-section--soft"
        id="werkwijze"
    >

        <div class="container assistance-process__inner">

            <div class="assistance-process__content reveal">

                <span class="section-eyebrow">
                    Onze werkwijze
                </span>

                <h2>
                    Van aanvraag
                    naar inzet.
                </h2>

                <p>
                    Hoe eerder we weten wat je organiseert,
                    hoe beter we de hulpverlening kunnen voorbereiden.
                    Dien een aanvraag daarom bij voorkeur minimaal
                    zes weken voor het evenement in.
                </p>

                <a
                    class="page-text-link"
                    href="<?php echo esc_url(
    home_url(
        '/hulpverlening-aanvragen/'
    )
); ?>"
                >
                    Start een aanvraag
                    <span aria-hidden="true">→</span>
                </a>

            </div>


            <div class="assistance-process__steps reveal-stagger">


                <!-- STEP 1 -->
                <article class="assistance-step">

                    <span class="assistance-step__number">
                        01
                    </span>

                    <div>

                        <h3>
                            Vertel ons wat je organiseert
                        </h3>

                        <p>
                            Geef onder andere de datum, locatie,
                            tijden, organisatie, het soort evenement
                            en het verwachte aantal bezoekers of
                            deelnemers door.
                        </p>

                    </div>

                </article>


                <!-- STEP 2 -->
                <article class="assistance-step">

                    <span class="assistance-step__number">
                        02
                    </span>

                    <div>

                        <h3>
                            We bekijken wat nodig is
                        </h3>

                        <p>
                            De coördinator bekijkt de aanvraag en
                            beoordeelt welke inzet past bij het
                            evenement en de omstandigheden.
                        </p>

                    </div>

                </article>


                <!-- STEP 3 -->
                <article class="assistance-step">

                    <span class="assistance-step__number">
                        03
                    </span>

                    <div>

                        <h3>
                            We maken praktische afspraken
                        </h3>

                        <p>
                            We bespreken onder andere de inzet,
                            EHBO-post of behandelruimte, bereikbaarheid
                            en andere praktische voorwaarden.
                        </p>

                    </div>

                </article>


                <!-- STEP 4 -->
                <article class="assistance-step">

                    <span class="assistance-step__number">
                        04
                    </span>

                    <div>

                        <h3>
                            Je ontvangt bevestiging
                        </h3>

                        <p>
                            Een aanvraag is definitief zodra deze
                            door Petrus Donders is bevestigd en
                            de gemaakte afspraken zijn vastgelegd.
                        </p>

                    </div>

                </article>


                <!-- STEP 5 -->
                <article class="assistance-step">

                    <span class="assistance-step__number">
                        05
                    </span>

                    <div>

                        <h3>
                            Klaar voor het evenement
                        </h3>

                        <p>
                            Onze eerstehulpverleners zijn op het
                            afgesproken moment aanwezig, herkenbaar
                            en voorbereid op hun taak.
                        </p>

                    </div>

                </article>

            </div>

        </div>

    </section>



    <!-- ========================================
         ORGANISATOR
    ========================================= -->

    <section class="assistance-organiser page-section">

        <div class="container assistance-organiser__inner">

            <div class="reveal">

                <span class="section-eyebrow">
                    Goed om te weten
                </span>

                <h2>
                    Samen zorgen we
                    voor een veilige inzet.
                </h2>

                <p>
                    Goede evenementenzorg vraagt ook iets van de
                    organisator. Daarom maken we vooraf duidelijke
                    afspraken over de plek waar hulp wordt verleend
                    en de omstandigheden waarin onze vrijwilligers werken.
                </p>

            </div>


            <div class="assistance-organiser__cards reveal-stagger">


                <article class="assistance-organiser__card">

                    <span>
                        01
                    </span>

                    <h3>
                        EHBO-post of ruimte
                    </h3>

                    <p>
                        De organisator zorgt voor een geschikte,
                        herkenbare en bereikbare plek waar eerste hulp
                        kan worden verleend.
                    </p>

                </article>


                <article class="assistance-organiser__card">

                    <span>
                        02
                    </span>

                    <h3>
                        Privacy
                    </h3>

                    <p>
                        De ruimte moet voldoende mogelijkheid bieden
                        om een zorgvrager zo veel mogelijk buiten
                        het zicht van publiek te behandelen.
                    </p>

                </article>


                <article class="assistance-organiser__card">

                    <span>
                        03
                    </span>

                    <h3>
                        Veilig werken
                    </h3>

                    <p>
                        De organisator staat garant voor een veilige
                        werkomgeving voor de eerstehulpverleners
                        tijdens het evenement.
                    </p>

                </article>


                <article class="assistance-organiser__card">

                    <span>
                        04
                    </span>

                    <h3>
                        Minimaal twee hulpverleners
                    </h3>

                    <p>
                        Bij evenementenhulpverlening wordt uitgegaan
                        van een minimale inzet van twee
                        eerstehulpverleners.
                    </p>

                </article>

            </div>

        </div>

    </section>



    <!-- ========================================
         REQUEST
    ========================================= -->

    <section
        class="assistance-request page-section"
        id="aanvragen"
    >

        <div class="container assistance-request__inner">

            <div class="assistance-request__content reveal">

                <span class="section-eyebrow">
                    Hulpverlening aanvragen
                </span>

                <h2>
                    Vertel ons wat
                    je organiseert.
                </h2>

                <p>
                    Heb je eerstehulpverlening nodig voor een evenement?
                    Geef zoveel mogelijk informatie door. Daarmee kunnen
                    we beoordelen wat mogelijk is en welke inzet
                    passend is.
                </p>


                <div class="assistance-request__details">

                    <div>

                        <strong>
                            Handig om alvast door te geven
                        </strong>

                        <ul>

                            <li>
                                Naam van de organisatie
                            </li>

                            <li>
                                Contactpersoon
                            </li>

                            <li>
                                Datum en tijden
                            </li>

                            <li>
                                Locatie van het evenement
                            </li>

                            <li>
                                Aantal bezoekers of deelnemers
                            </li>

                            <li>
                                Soort evenement
                            </li>

                            <li>
                                Gewenste inzet
                            </li>

                            <li>
                                Eventuele bijzonderheden
                            </li>

                        </ul>

                    </div>

                </div>

            </div>


            <div class="assistance-request__card">

                <span class="assistance-request__card-label">
                    Aanvraag starten
                </span>

                <h3>
                    We denken graag
                    met je mee.
                </h3>

                <p>
                    Via ons aanvraagformulier kun je alle gegevens
    over jouw evenement aan ons doorgeven.
    Wil je eerst overleggen over de mogelijkheden?
    Neem dan gerust contact met ons op.
                </p>

                <a
                    class="page-button page-button--yellow"
                    href="<?php echo esc_url(
    home_url(
        '/hulpverlening-aanvragen/'
    )
); ?>"
                >
                    Hulpverlening aanvragen
                    <span aria-hidden="true">→</span>
                </a>

                <small>
                    Dien je aanvraag bij voorkeur minimaal zes weken
                    voor het evenement in. Een aanvraag is definitief
                    nadat deze door Petrus Donders is bevestigd.
                </small>

            </div>

        </div>

    </section>



    <!-- ========================================
         VRIJWILLIGER WORDEN
    ========================================= -->

    <section class="assistance-volunteer page-section">

        <div class="container assistance-volunteer__inner">


            <div class="assistance-volunteer__content reveal">

                <span class="section-eyebrow">
                    Zelf meehelpen?
                </span>

                <h2>
                    Sta eens aan
                    de andere kant.
                </h2>

                <p class="assistance-volunteer__lead">
                    Lijkt het je leuk om tijdens evenementen zelf
                    eerste hulp te verlenen? Nieuwe vrijwilligers
                    zijn welkom — ook wanneer je nog geen
                    EHBO-diploma hebt.
                </p>

                <p>
                    Als nieuw lid begin je als stagiair en werk je
                    onder begeleiding samen met een ervaren
                    eerstehulpverlener. Zo doe je praktijkervaring
                    op terwijl je stap voor stap leert hoe
                    evenementenzorg werkt.
                </p>


                <div class="assistance-volunteer__points">

                    <div>
                        <span aria-hidden="true">
                            ✓
                        </span>

                        Met of zonder EHBO-diploma
                    </div>

                    <div>
                        <span aria-hidden="true">
                            ✓
                        </span>

                        Starten onder begeleiding
                    </div>

                    <div>
                        <span aria-hidden="true">
                            ✓
                        </span>

                        Ervaring op echte evenementen
                    </div>

                    <div>
                        <span aria-hidden="true">
                            ✓
                        </span>

                        Regelmatige training en bijscholing
                    </div>

                </div>


                <a
                    class="page-button page-button--primary"
                    href="<?php echo esc_url(
                        home_url('/contact/?onderwerp=vrijwilliger')
                    ); ?>"
                >
                    Ik heb interesse
                    <span aria-hidden="true">→</span>
                </a>

            </div>


            <div class="assistance-volunteer__visual reveal-image">

                <img
                    src="<?php echo esc_url(
                        get_stylesheet_directory_uri() .
                        '/assets/images/hero-team.png'
                    ); ?>"
                    alt="Vrijwilligers van EHBO Petrus Donders"
                    loading="lazy"
                >

                <div class="assistance-volunteer__badge">

                    <span>
                        Samen leren
                    </span>

                    <strong>
                        Ervaring doe je
                        in de praktijk op.
                    </strong>

                </div>

            </div>

        </div>

    </section>



    <!-- ========================================
         FINAL CTA
    ========================================= -->

    <section class="assistance-next">

        <div class="container">

            <div class="assistance-next__card reveal">

                <div>

                    <span>
                        Zelf leren helpen?
                    </span>

                    <h2>
                        Vergroot je kennis
                        met een EHBO-opleiding.
                    </h2>

                    <p>
                        Van het volledige Diploma Eerste Hulp
                        tot reanimatie, EHAK en specialistische
                        cursussen.
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