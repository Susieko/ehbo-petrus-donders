<?php
/*
Template Name: Hulpverlening aanvragen
Template Post Type: page
*/

get_header();


/* ========================================
   FORM STATUS
======================================== */

$form_status = isset($_GET['hulpverlening_status'])
    ? sanitize_key(
        wp_unslash($_GET['hulpverlening_status'])
    )
    : '';
?>


<main
    id="main-content"
    class="inner-page event-request-page"
>


    <!-- ========================================
         HERO
    ========================================= -->

    <section class="page-hero event-request-hero">

        <div class="container page-hero__inner">


            <div class="page-hero__content reveal">

                <span class="section-eyebrow">
                    Hulpverlening aanvragen
                </span>

                <h1>
                    Goede voorbereiding
                    <span>begint hier.</span>
                </h1>

                <p class="page-hero__lead">
                    Organiseer je een evenement en heb je
                    eerstehulpverlening nodig? Vertel ons
                    wat je organiseert, wanneer het plaatsvindt
                    en welke inzet je verwacht.
                </p>


                <div class="page-hero__actions">

                    <a
                        class="page-button page-button--primary"
                        href="#aanvraagformulier"
                    >
                        Start aanvraag
                        <span aria-hidden="true">↓</span>
                    </a>

                    <a
                        class="page-text-link"
                        href="<?php echo esc_url(
                            home_url('/hulpverlening/')
                        ); ?>"
                    >
                        Eerst meer informatie
                        <span aria-hidden="true">→</span>
                    </a>

                </div>

            </div>



            <div class="page-hero__visual">

                <div class="event-request-hero__panel reveal">

                    <span>
                        Evenementenzorg
                    </span>

                    <strong>
                        Van aanvraag
                        <b>naar inzet.</b>
                    </strong>

                    <div class="event-request-hero__steps">

                        <div>
                            <span>01</span>
                            <p>Vertel wat je organiseert</p>
                        </div>

                        <div>
                            <span>02</span>
                            <p>We bekijken wat nodig is</p>
                        </div>

 <div>
    <span>03</span>
    <p>We nemen contact met je op</p>
</div>

                    </div>


                    <div
                        class="event-request-hero__plus"
                        aria-hidden="true"
                    >
                        +
                    </div>

                </div>

            </div>


        </div>

    </section>



    <!-- ========================================
         INFO STRIP
    ========================================= -->

    <section class="event-request-strip">

        <div class="container event-request-strip__inner">


            <div>

                <strong>
                    Organisatie
                </strong>

                <span>
                    Wie organiseert het evenement?
                </span>

            </div>


            <div>

                <strong>
                    Evenement
                </strong>

                <span>
                    Waar, wanneer en voor hoeveel mensen?
                </span>

            </div>


            <div>

                <strong>
                    EHBO-inzet
                </strong>

                <span>
                    Welke ondersteuning verwacht je?
                </span>

            </div>


            <div>

                <strong>
                    Zorgpost
                </strong>

                <span>
                    Maak vooraf praktische afspraken.
                </span>

            </div>


        </div>

    </section>



    <!-- ========================================
         FORM
    ========================================= -->

    <section
        class="event-request-form-section page-section"
        id="aanvraagformulier"
    >

        <div class="container event-request-form-layout">


            <!-- ========================================
                 SIDEBAR
            ========================================= -->

            <aside class="event-request-sidebar reveal">

                <span class="section-eyebrow">
                    Aanvraagformulier
                </span>

                <h2>
                    Vertel ons
                    over je evenement.
                </h2>

                <p>
                    Hoe completer de aanvraag, hoe beter
                    Petrus Donders kan beoordelen welke
                    eerstehulpverlening nodig is.
                </p>


                <div class="event-request-sidebar__note">

                    <strong>
                        Houd alvast bij de hand
                    </strong>

                    <ul>
                        <li>datum en tijden;</li>
                        <li>verwacht bezoekersaantal;</li>
                        <li>adres en locatie;</li>
                        <li>informatie over de zorgpost.</li>
                    </ul>

                </div>


                <a
                    class="page-text-link"
                    href="<?php echo esc_url(
                        home_url('/hulpverlening/')
                    ); ?>"
                >
                    Voorwaarden bekijken
                    <span aria-hidden="true">→</span>
                </a>

            </aside>



            <!-- ========================================
                 FORM CARD
            ========================================= -->

            <div class="event-request-form-card reveal">


                <?php if ($form_status === 'success') : ?>

                    <div
                        class="
                            event-request-notice
                            event-request-notice--success
                        "
                        role="status"
                    >

                        <strong>
                            Aanvraag ontvangen!
                        </strong>

                        <p>
                            Bedankt. Petrus Donders bekijkt
                            de aanvraag en neemt contact op
                            over de mogelijkheden.
                        </p>

                    </div>


                <?php elseif ($form_status === 'invalid') : ?>

                    <div
                        class="
                            event-request-notice
                            event-request-notice--error
                        "
                        role="alert"
                    >

                        <strong>
                            Controleer de aanvraag.
                        </strong>

                        <p>
                            Niet alle verplichte gegevens
                            zijn correct ingevuld.
                        </p>

                    </div>


                <?php elseif ($form_status === 'error') : ?>

                    <div
                        class="
                            event-request-notice
                            event-request-notice--error
                        "
                        role="alert"
                    >

                        <strong>
                            Verzenden is niet gelukt.
                        </strong>

                        <p>
                            Probeer het opnieuw of neem
                            contact op via de contactpagina.
                        </p>

                    </div>

                <?php endif; ?>



                <form
                    class="event-request-form"
                    method="post"
                    action="<?php echo esc_url(
                        admin_url('admin-post.php')
                    ); ?>"
                >


                    <input
                        type="hidden"
                        name="action"
                        value="ehbo_event_request_form"
                    >


                    <?php wp_nonce_field(
                        'ehbo_event_request_form',
                        'ehbo_event_request_nonce'
                    ); ?>


                    <!-- Honeypot -->
                    <div
                        class="event-request-honeypot"
                        aria-hidden="true"
                    >

                        <label for="event-website">
                            Website
                        </label>

                        <input
                            id="event-website"
                            type="text"
                            name="event_website"
                            tabindex="-1"
                            autocomplete="off"
                        >

                    </div>



                    <!-- ========================================
                         01 - ORGANISATION
                    ========================================= -->

                    <fieldset class="event-form-block">

                        <legend>

                            <span>
                                01
                            </span>

                            Organisatie & contact

                        </legend>


                        <div class="event-field">

                            <label for="event-organisation">

                                Naam organisatie

                                <span>*</span>

                            </label>

                            <input
                                id="event-organisation"
                                type="text"
                                name="event_organisation"
                                autocomplete="organization"
                                required
                            >

                        </div>


                        <div class="event-fields event-fields--2">


                            <div class="event-field">

                                <label for="event-contact-name">

                                    Contactpersoon

                                    <span>*</span>

                                </label>

                                <input
                                    id="event-contact-name"
                                    type="text"
                                    name="event_contact_name"
                                    autocomplete="name"
                                    required
                                >

                            </div>


                            <div class="event-field">

                                <label for="event-contact-phone">

                                    Telefoonnummer

                                    <span>*</span>

                                </label>

                                <input
                                    id="event-contact-phone"
                                    type="tel"
                                    name="event_contact_phone"
                                    autocomplete="tel"
                                    required
                                >

                            </div>


                        </div>


                        <div class="event-field">

                            <label for="event-contact-email">

                                E-mailadres

                                <span>*</span>

                            </label>

                            <input
                                id="event-contact-email"
                                type="email"
                                name="event_contact_email"
                                autocomplete="email"
                                required
                            >

                        </div>


                        <div class="event-field">

                            <label for="event-contact-address">

                                Adres contactpersoon

                                <span>*</span>

                            </label>

                            <input
                                id="event-contact-address"
                                type="text"
                                name="event_contact_address"
                                autocomplete="street-address"
                                required
                            >

                        </div>


                        <div class="event-fields event-fields--2">


                            <div class="event-field">

                                <label for="event-contact-postcode">

                                    Postcode

                                    <span>*</span>

                                </label>

                                <input
                                    id="event-contact-postcode"
                                    type="text"
                                    name="event_contact_postcode"
                                    autocomplete="postal-code"
                                    required
                                >

                            </div>


                            <div class="event-field">

                                <label for="event-contact-city">

                                    Woonplaats

                                    <span>*</span>

                                </label>

                                <input
                                    id="event-contact-city"
                                    type="text"
                                    name="event_contact_city"
                                    autocomplete="address-level2"
                                    required
                                >

                            </div>


                        </div>

                    </fieldset>



                    <!-- ========================================
                         02 - EVENT
                    ========================================= -->

                    <fieldset class="event-form-block">

                        <legend>

                            <span>
                                02
                            </span>

                            Gegevens van het evenement

                        </legend>


                        <div class="event-field">

                            <label for="event-name">

                                Naam evenement

                                <span>*</span>

                            </label>

                            <input
                                id="event-name"
                                type="text"
                                name="event_name"
                                required
                            >

                        </div>


                        <div class="event-fields event-fields--2">


                            <div class="event-field">

                                <label for="event-day-contact">

                                    Contactpersoon tijdens evenement

                                    <span>*</span>

                                </label>

                                <input
                                    id="event-day-contact"
                                    type="text"
                                    name="event_day_contact"
                                    required
                                >

                            </div>


                            <div class="event-field">

                                <label for="event-day-phone">

                                    Telefoon tijdens evenement

                                    <span>*</span>

                                </label>

                                <input
                                    id="event-day-phone"
                                    type="tel"
                                    name="event_day_phone"
                                    required
                                >

                            </div>


                        </div>


                        <div class="event-field">

                            <label for="event-location">

                                Naam locatie

                                <span>*</span>

                            </label>

                            <input
                                id="event-location"
                                type="text"
                                name="event_location"
                                placeholder="Bijvoorbeeld sportpark, wijkcentrum of festivalterrein"
                                required
                            >

                        </div>


                        <div class="event-field">

                            <label for="event-address">

                                Adres evenement

                                <span>*</span>

                            </label>

                            <input
                                id="event-address"
                                type="text"
                                name="event_address"
                                required
                            >

                        </div>


                        <div class="event-fields event-fields--2">


                            <div class="event-field">

                                <label for="event-postcode">

                                    Postcode

                                    <span>*</span>

                                </label>

                                <input
                                    id="event-postcode"
                                    type="text"
                                    name="event_postcode"
                                    required
                                >

                            </div>


                            <div class="event-field">

                                <label for="event-city">

                                    Plaats

                                    <span>*</span>

                                </label>

                                <input
                                    id="event-city"
                                    type="text"
                                    name="event_city"
                                    required
                                >

                            </div>


                        </div>


                        <div class="event-field">

                            <label for="event-description">

                                Omschrijving evenement

                                <span>*</span>

                            </label>

                            <textarea
                                id="event-description"
                                name="event_description"
                                rows="5"
                                placeholder="Wat voor evenement organiseer je en wat kunnen bezoekers of deelnemers verwachten?"
                                required
                            ></textarea>

                        </div>

                    </fieldset>



                    <!-- ========================================
                         03 - PLANNING
                    ========================================= -->

                    <fieldset class="event-form-block">

                        <legend>

                            <span>
                                03
                            </span>

                            Datum, tijd & omvang

                        </legend>


                        <div class="event-duration-choice">

                            <label>

                                <input
                                    type="radio"
                                    name="event_duration"
                                    value="eendaags"
                                    checked
                                >

                                <span>
                                    <strong>
                                        Eendaags
                                    </strong>

                                    <small>
                                        Eén evenementdatum
                                    </small>
                                </span>

                            </label>


                            <label>

                                <input
                                    type="radio"
                                    name="event_duration"
                                    value="meerdaags"
                                >

                                <span>
                                    <strong>
                                        Meerdaags
                                    </strong>

                                    <small>
                                        Meerdere dagen
                                    </small>
                                </span>

                            </label>

                        </div>


                        <div class="event-fields event-fields--2">


                            <div class="event-field">

                                <label for="event-start-date">

                                    Startdatum

                                    <span>*</span>

                                </label>

                                <input
                                    id="event-start-date"
                                    type="date"
                                    name="event_start_date"
                                    required
                                >

                            </div>


                            <div
                                class="event-field"
                                data-event-end-date
                                hidden
                            >

                                <label for="event-end-date">

                                    Einddatum

                                    <span>*</span>

                                </label>

                                <input
                                    id="event-end-date"
                                    type="date"
                                    name="event_end_date"
                                >

                            </div>


                        </div>


                        <div class="event-fields event-fields--2">


                            <div class="event-field">

                                <label for="event-start-time">

                                    Starttijd

                                    <span>*</span>

                                </label>

                                <input
                                    id="event-start-time"
                                    type="time"
                                    name="event_start_time"
                                    required
                                >

                            </div>


                            <div class="event-field">

                                <label for="event-end-time">

                                    Eindtijd

                                    <span>*</span>

                                </label>

                                <input
                                    id="event-end-time"
                                    type="time"
                                    name="event_end_time"
                                    required
                                >

                            </div>


                        </div>


                        <div
                            class="event-field"
                            data-event-different-times
                            hidden
                        >

                            <label for="event-different-times">
                                Afwijkende tijden per dag
                            </label>

                            <textarea
                                id="event-different-times"
                                name="event_different_times"
                                rows="4"
                                placeholder="Bijvoorbeeld: zaterdag 10:00–22:00, zondag 09:00–18:00."
                            ></textarea>

                        </div>


                        <div class="event-fields event-fields--2">


                            <div class="event-field">

                                <label for="event-visitors">

                                    Verwacht aantal bezoekers/deelnemers per dag

                                    <span>*</span>

                                </label>

                                <input
                                    id="event-visitors"
                                    type="number"
                                    name="event_visitors"
                                    min="1"
                                    step="1"
                                    required
                                >

                            </div>


                            <div class="event-field">

                                <label for="event-alcohol">

                                    Wordt er alcohol gebruikt/verstrekt?

                                    <span>*</span>

                                </label>

                                <select
                                    id="event-alcohol"
                                    name="event_alcohol"
                                    required
                                >
                                    <option value="">
                                        Kies
                                    </option>

                                    <option value="ja">
                                        Ja
                                    </option>

                                    <option value="nee">
                                        Nee
                                    </option>

                                    <option value="onbekend">
                                        Nog onbekend
                                    </option>
                                </select>

                            </div>


                        </div>


                        <div class="event-field">

                            <label for="event-public-role">
                                Aanwezigheid / rol van publiek
                            </label>

                            <input
                                id="event-public-role"
                                type="text"
                                name="event_public_role"
                                placeholder="Bijvoorbeeld bezoekers, deelnemers, sporters of toeschouwers"
                            >

                        </div>

                    </fieldset>



                    <!-- ========================================
                         04 - FIRST AID
                    ========================================= -->

                    <fieldset class="event-form-block">

                        <legend>

                            <span>
                                04
                            </span>

                            Gewenste eerstehulpverlening

                        </legend>


                        <div class="event-field">

                            <label for="event-first-aiders">

                                Gewenst aantal EHBO’ers

                                <span>*</span>

                            </label>

                            <input
                                id="event-first-aiders"
                                type="number"
                                name="event_first_aiders"
                                min="1"
                                step="1"
                                required
                            >

                            <small class="event-field__help">
                                Weet je het aantal nog niet?
                                Vul je beste inschatting in.
                                Petrus Donders kan de benodigde inzet
                                daarna met je bespreken.
                            </small>

                        </div>


                        <div class="event-field">

                            <label for="event-extra-notes">
                                Opmerkingen / toelichting
                            </label>

                            <textarea
                                id="event-extra-notes"
                                name="event_extra_notes"
                                rows="5"
                                placeholder="Bijzonderheden, risico’s, aanvullende wensen of andere informatie."
                            ></textarea>

                        </div>

                    </fieldset>



                    <!-- ========================================
                         05 - CARE POST / CONDITIONS
                    ========================================= -->

                    <fieldset class="event-form-block">

                        <legend>

                            <span>
                                05
                            </span>

                            Zorgpost & afspraken

                        </legend>


                        <div class="event-care-info">

                            <span>
                                Zorgpost
                            </span>

                            <h3>
                                De organisatie zorgt
                                voor een geschikte ruimte.
                            </h3>

                            <p>
                                De zorgpost is een vaste, tijdelijke
                                of mobiele ruimte waar evenementenzorg
                                kan worden geleverd.
                            </p>

                        </div>


                        <div class="event-field">

                            <label for="event-care-post">

                                Zorgt de organisatie voor een zorgpost?

                                <span>*</span>

                            </label>

                            <select
                                id="event-care-post"
                                name="event_care_post"
                                required
                            >

                                <option value="">
                                    Kies
                                </option>

                                <option value="ja">
                                    Ja
                                </option>

                                <option value="nog-te-regelen">
                                    Nog te regelen
                                </option>

                            </select>

                        </div>


                        <div class="event-field">

                            <label for="event-map-info">
                                Indelingsplattegrond / situering zorgpost
                            </label>

                            <textarea
                                id="event-map-info"
                                name="event_map_info"
                                rows="3"
                                placeholder="Beschrijf waar de zorgpost komt of vermeld wanneer de plattegrond beschikbaar is."
                            ></textarea>

                        </div>



                        <div class="event-confirmations">


                            <label class="event-confirmation">

                                <input
                                    type="checkbox"
                                    name="event_confirm_care_post"
                                    value="1"
                                    required
                                >

                                <span>

                                    <strong>
                                        Zorgpost bevestigd *
                                    </strong>

                                    <small>
                                        Ik heb gelezen dat de organisatie
                                        verantwoordelijk is voor het
                                        beschikbaar stellen van een
                                        geschikte zorgpost.
                                    </small>

                                </span>

                            </label>



                            <label class="event-confirmation">

                                <input
                                    type="checkbox"
                                    name="event_confirm_conditions"
                                    value="1"
                                    required
                                >

                                <span>

                                    <strong>
                                        Voorwaarden hulpverlening *
                                    </strong>

                                    <small>
                                        Ik heb kennisgenomen van de
                                        voorwaarden rondom hulpverlening
                                        bij evenementen en de geldende
                                        richtlijnen voor evenementenzorg.
                                    </small>

                                </span>

                            </label>


                        </div>


                        <p class="event-form-conditions-link">

                            Bekijk voor verzending ook onze

                            <a
                                href="<?php echo esc_url(
                                    home_url('/hulpverlening/')
                                ); ?>"
                            >
                                informatie over hulpverlening
                            </a>.

                        </p>

                    </fieldset>



                    <!-- ========================================
                         SUBMIT
                    ========================================= -->

                    <div class="event-form-submit">

                        <button
                            type="submit"
                            class="event-form-submit__button"
                        >
                            Aanvraag versturen
                            <span aria-hidden="true">
                                →
                            </span>
                        </button>


                        <p>
                            Een aanvraag is nog geen definitieve
                            bevestiging van de EHBO-inzet.
                            Petrus Donders neemt eerst contact op.
                        </p>

                    </div>


                </form>

            </div>

        </div>

    </section>


</main>

<?php get_footer(); ?>