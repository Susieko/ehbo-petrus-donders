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

    <?php
while (have_posts()) :
    the_post();

    the_content();

endwhile;
?>

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