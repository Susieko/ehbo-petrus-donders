<?php
/*
Template Name: Inschrijven
Template Post Type: page
*/

get_header();


/* ========================================
   PRESELECT FROM URL
======================================== */

$selected_type = isset($_GET['type'])
    ? sanitize_key(wp_unslash($_GET['type']))
    : '';

$allowed_types = [
    'lidmaatschap',
    'opleiding',
    'hercertificering',
];

if (!in_array($selected_type, $allowed_types, true)) {
    $selected_type = '';
}


$selected_course = isset($_GET['opleiding'])
    ? sanitize_key(wp_unslash($_GET['opleiding']))
    : '';

$allowed_courses = [
    'diploma-eerste-hulp',
    'ehak',
    'reanimatie-aed',
    'stop-de-bloeding',
    'wandelletsels',
    'sportletsels',
    'in-company',
];

if (!in_array($selected_course, $allowed_courses, true)) {
    $selected_course = '';
}


/* ========================================
   FORM STATUS
======================================== */

$form_status = isset($_GET['inschrijving_status'])
    ? sanitize_key(wp_unslash($_GET['inschrijving_status']))
    : '';
?>


<main
    id="main-content"
    class="inner-page registration-page"
>


    <!-- ========================================
         HERO
    ========================================= -->

    <section class="page-hero registration-hero">

        <div class="container page-hero__inner">


            <div class="page-hero__content reveal">

                <span class="section-eyebrow">
                    Inschrijven
                </span>

                <h1>
                    Klaar om
                    <span>mee te doen?</span>
                </h1>

                <p class="page-hero__lead">
                    Meld je aan voor een opleiding,
                    vraag hercertificering aan of word lid
                    van EHBO-vereniging Petrus Donders.
                </p>

                <div class="page-hero__actions">

                    <a
                        class="page-button page-button--primary"
                        href="#inschrijfformulier"
                    >
                        Start inschrijving
                        <span aria-hidden="true">↓</span>
                    </a>

                    <a
                        class="page-text-link"
                        href="<?php echo esc_url(
                            home_url('/opleidingen/')
                        ); ?>"
                    >
                        Eerst opleidingen bekijken
                        <span aria-hidden="true">→</span>
                    </a>

                </div>

            </div>


            <div class="page-hero__visual">

                <div class="registration-hero__panel reveal">

                    <span class="registration-hero__label">
                        Eén formulier
                    </span>

                    <div class="registration-hero__options">

                        <div>
                            <span>01</span>
                            <strong>Lidmaatschap</strong>
                        </div>

                        <div>
                            <span>02</span>
                            <strong>Opleiding</strong>
                        </div>

                        <div>
                            <span>03</span>
                            <strong>Hercertificering</strong>
                        </div>

                    </div>

                    <div
                        class="registration-hero__plus"
                        aria-hidden="true"
                    >
                        +
                    </div>

                </div>

            </div>


        </div>

    </section>



    <!-- ========================================
         BEFORE FORM
    ========================================= -->

    <section class="registration-intro">

        <div class="container registration-intro__inner">

            <div>
                <strong>
                    Kies waarvoor je komt
                </strong>

                <span>
                    Het formulier past zich aan je keuze aan.
                </span>
            </div>

            <div>
                <strong>
                    Vul je gegevens in
                </strong>

                <span>
                    Alleen wat nodig is voor je aanmelding.
                </span>
            </div>

            <div>
                <strong>
                    Verstuur je aanvraag
                </strong>

                <span>
                    Petrus Donders neemt daarna contact met je op.
                </span>
            </div>

        </div>

    </section>



    <!-- ========================================
         FORM
    ========================================= -->

    <section
        class="registration-form-section page-section"
        id="inschrijfformulier"
    >

        <div class="container registration-form-layout">


            <!-- ========================================
                 SIDEBAR
            ========================================= -->

            <aside class="registration-form-sidebar reveal">

                <span class="section-eyebrow">
                    Inschrijfformulier
                </span>

                <h2>
                    Vertel ons
                    waarvoor je komt.
                </h2>

                <p>
                    Vul het formulier zo volledig mogelijk in.
                    Velden met een sterretje zijn verplicht.
                </p>


                <div class="registration-sidebar-note">

                    <strong>
                        Al lid of gediplomeerd?
                    </strong>

                    <p>
                        Houd je lidcode of diplomanummer
                        bij de hand als je die hebt.
                    </p>

                </div>


                <a
                    class="page-text-link"
                    href="<?php echo esc_url(
                        home_url('/contact/')
                    ); ?>"
                >
                    Eerst een vraag stellen
                    <span aria-hidden="true">→</span>
                </a>

            </aside>



            <!-- ========================================
                 FORM CARD
            ========================================= -->

            <div class="registration-form-card reveal">


                <?php if ($form_status === 'success') : ?>

                    <div
                        class="
                            registration-notice
                            registration-notice--success
                        "
                        role="status"
                    >
                        <strong>
                            Inschrijving ontvangen!
                        </strong>

                        <p>
                            Bedankt. Petrus Donders neemt
                            contact met je op over het vervolg.
                        </p>
                    </div>

                <?php elseif ($form_status === 'invalid') : ?>

                    <div
                        class="
                            registration-notice
                            registration-notice--error
                        "
                        role="alert"
                    >
                        <strong>
                            Controleer het formulier.
                        </strong>

                        <p>
                            Niet alle verplichte gegevens
                            zijn correct ingevuld.
                        </p>
                    </div>

                <?php elseif ($form_status === 'error') : ?>

                    <div
                        class="
                            registration-notice
                            registration-notice--error
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
                    class="registration-form"
                    method="post"
                    action="<?php echo esc_url(
                        admin_url('admin-post.php')
                    ); ?>"
                >

                    <input
                        type="hidden"
                        name="action"
                        value="ehbo_registration_form"
                    >

                    <?php wp_nonce_field(
                        'ehbo_registration_form',
                        'ehbo_registration_nonce'
                    ); ?>


                    <!-- Honeypot -->
                    <div
                        class="registration-honeypot"
                        aria-hidden="true"
                    >
                        <label for="registration-website">
                            Website
                        </label>

                        <input
                            id="registration-website"
                            type="text"
                            name="registration_website"
                            tabindex="-1"
                            autocomplete="off"
                        >
                    </div>



                    <!-- ========================================
                         01 - TYPE
                    ========================================= -->

                    <fieldset class="registration-section">

                        <legend>

                            <span>
                                01
                            </span>

                            Waarvoor wil je je aanmelden?

                        </legend>


                        <div class="registration-choice-grid">


                            <label class="registration-choice">

                                <input
                                    type="radio"
                                    name="registration_type"
                                    value="lidmaatschap"
                                    <?php checked(
                                        $selected_type,
                                        'lidmaatschap'
                                    ); ?>
                                    required
                                >

                                <span class="registration-choice__box">

                                    <strong>
                                        Lidmaatschap
                                    </strong>

                                    <small>
                                        Lid worden van
                                        Petrus Donders.
                                    </small>

                                </span>

                            </label>



                            <label class="registration-choice">

                                <input
                                    type="radio"
                                    name="registration_type"
                                    value="opleiding"
                                    <?php checked(
                                        $selected_type,
                                        'opleiding'
                                    ); ?>
                                >

                                <span class="registration-choice__box">

                                    <strong>
                                        Opleiding
                                    </strong>

                                    <small>
                                        Aanmelden voor
                                        een cursus.
                                    </small>

                                </span>

                            </label>



                            <label class="registration-choice">

                                <input
                                    type="radio"
                                    name="registration_type"
                                    value="hercertificering"
                                    <?php checked(
                                        $selected_type,
                                        'hercertificering'
                                    ); ?>
                                >

                                <span class="registration-choice__box">

                                    <strong>
                                        Hercertificering
                                    </strong>

                                    <small>
                                        Diploma of certificaat
                                        verlengen.
                                    </small>

                                </span>

                            </label>


                        </div>



                        <!-- COURSE -->
                        <div
                            class="registration-course-field"
                            data-course-field
                        >

                            <label for="registration-course">

                                Opleiding of certificaat

                                <span aria-hidden="true">
                                    *
                                </span>

                            </label>

                            <select
    id="registration-course"
    name="registration_course"
>
    <option value="">
        Kies een opleiding
    </option>

    <?php foreach (ehbo_get_courses() as $slug => $label) : ?>

        <option
            value="<?php echo esc_attr($slug); ?>"
            <?php selected(
                $selected_course,
                $slug
            ); ?>
        >
            <?php echo esc_html($label); ?>
        </option>

    <?php endforeach; ?>

</select>

                        </div>

                    </fieldset>



                    <!-- ========================================
                         02 - PERSONAL DETAILS
                    ========================================= -->

                    <fieldset class="registration-section">

                        <legend>

                            <span>
                                02
                            </span>

                            Persoonsgegevens

                        </legend>


                        <div class="registration-fields registration-fields--3">

                            <div class="registration-field">

                                <label for="registration-salutation">

                                    Aanhef

                                    <span>*</span>

                                </label>

                                <select
                                    id="registration-salutation"
                                    name="registration_salutation"
                                    required
                                >
                                    <option value="">
                                        Kies
                                    </option>

                                    <option value="dhr">
                                        Dhr.
                                    </option>

                                    <option value="mevr">
                                        Mevr.
                                    </option>

                                    <option value="anders">
                                        Anders
                                    </option>
                                </select>

                            </div>


                            <div class="registration-field">

                                <label for="registration-initials">
                                    Voorletters
                                </label>

                                <input
                                    id="registration-initials"
                                    type="text"
                                    name="registration_initials"
                                    autocomplete="additional-name"
                                >

                            </div>


                            <div class="registration-field">

                                <label for="registration-first-name">

                                    Voornaam

                                    <span>*</span>

                                </label>

                                <input
                                    id="registration-first-name"
                                    type="text"
                                    name="registration_first_name"
                                    autocomplete="given-name"
                                    required
                                >

                            </div>

                        </div>


                        <div class="registration-fields registration-fields--2">

                            <div class="registration-field">

                                <label for="registration-prefix">
                                    Tussenvoegsel
                                </label>

                                <input
                                    id="registration-prefix"
                                    type="text"
                                    name="registration_prefix"
                                >

                            </div>


                            <div class="registration-field">

                                <label for="registration-last-name">

                                    Achternaam

                                    <span>*</span>

                                </label>

                                <input
                                    id="registration-last-name"
                                    type="text"
                                    name="registration_last_name"
                                    autocomplete="family-name"
                                    required
                                >

                            </div>

                        </div>


                        <div class="registration-fields registration-fields--2">

                            <div class="registration-field">

                                <label for="registration-birthdate">

                                    Geboortedatum

                                    <span>*</span>

                                </label>

                                <input
                                    id="registration-birthdate"
                                    type="date"
                                    name="registration_birthdate"
                                    required
                                >

                            </div>


                            <div class="registration-field">

                                <label for="registration-diploma">
                                    Lidcode of diplomanummer
                                </label>

                                <input
                                    id="registration-diploma"
                                    type="text"
                                    name="registration_diploma"
                                    placeholder="Indien van toepassing"
                                >

                            </div>

                        </div>

                    </fieldset>



                    <!-- ========================================
                         03 - CONTACT
                    ========================================= -->

                    <fieldset class="registration-section">

                        <legend>

                            <span>
                                03
                            </span>

                            Contactgegevens

                        </legend>


                        <div class="registration-fields registration-fields--2">

                            <div class="registration-field">

                                <label for="registration-email">

                                    E-mailadres

                                    <span>*</span>

                                </label>

                                <input
                                    id="registration-email"
                                    type="email"
                                    name="registration_email"
                                    autocomplete="email"
                                    required
                                >

                            </div>


                            <div class="registration-field">

                                <label for="registration-phone">

                                    Telefoonnummer

                                    <span>*</span>

                                </label>

                                <input
                                    id="registration-phone"
                                    type="tel"
                                    name="registration_phone"
                                    autocomplete="tel"
                                    required
                                >

                            </div>

                        </div>


                        <div class="registration-field">

                            <label for="registration-address">

                                Adres

                                <span>*</span>

                            </label>

                            <input
                                id="registration-address"
                                type="text"
                                name="registration_address"
                                autocomplete="street-address"
                                placeholder="Straat en huisnummer"
                                required
                            >

                        </div>


                        <div class="registration-fields registration-fields--2">

                            <div class="registration-field">

                                <label for="registration-postcode">

                                    Postcode

                                    <span>*</span>

                                </label>

                                <input
                                    id="registration-postcode"
                                    type="text"
                                    name="registration_postcode"
                                    autocomplete="postal-code"
                                    required
                                >

                            </div>


                            <div class="registration-field">

                                <label for="registration-city">

                                    Woonplaats

                                    <span>*</span>

                                </label>

                                <input
                                    id="registration-city"
                                    type="text"
                                    name="registration_city"
                                    autocomplete="address-level2"
                                    required
                                >

                            </div>

                        </div>

                    </fieldset>



                    <!-- ========================================
                         04 - EXTRA
                    ========================================= -->

                    <fieldset class="registration-section">

                        <legend>

                            <span>
                                04
                            </span>

                            Aanvullende informatie

                        </legend>


                        <div
                            class="
                                registration-field
                                registration-card-option
                            "
                        >

                            <label for="registration-physical-card">
                                Wil je indien van toepassing
                                een fysiek pasje?
                            </label>

                            <select
                                id="registration-physical-card"
                                name="registration_physical_card"
                            >
                                <option value="">
                                    Niet van toepassing / geen voorkeur
                                </option>

                                <option value="ja">
                                    Ja
                                </option>

                                <option value="nee">
                                    Nee
                                </option>
                            </select>

                        </div>


                        <div class="registration-field">

                            <label for="registration-notes">
                                Opmerkingen
                            </label>

                            <textarea
                                id="registration-notes"
                                name="registration_notes"
                                rows="5"
                                placeholder="Is er iets dat we vooraf moeten weten?"
                            ></textarea>

                        </div>

                    </fieldset>



                    <!-- ========================================
                         05 - PRIVACY
                    ========================================= -->

                    <fieldset class="registration-section">

                        <legend>

                            <span>
                                05
                            </span>

                            Privacy & toestemming

                        </legend>


                        <div class="registration-consents">


                            <label class="registration-consent">

                                <input
                                    type="checkbox"
                                    name="registration_consent_association"
                                    value="1"
                                    required
                                >

                                <span>

                                    <strong>
                                        Verenigingsadministratie *
                                    </strong>

                                    <small>
                                        Ik geef toestemming om de
                                        persoonsgegevens die nodig zijn
                                        voor mijn inschrijving te verwerken
                                        in de administratie van
                                        EHBO-vereniging Petrus Donders.
                                    </small>

                                </span>

                            </label>



                            <label
                                class="registration-consent"
                                data-orange-cross-consent
                            >

                                <input
                                    type="checkbox"
                                    name="registration_consent_orange_cross"
                                    value="1"
                                >

                                <span>

                                    <strong>
                                        Het Oranje Kruis
                                    </strong>

                                    <small>
                                        Wanneer dit voor mijn opleiding
                                        of hercertificering nodig is,
                                        geef ik toestemming voor verwerking
                                        van de benodigde gegevens bij
                                        Het Oranje Kruis.
                                    </small>

                                </span>

                            </label>



                            <label class="registration-consent">

                                <input
                                    type="checkbox"
                                    name="registration_consent_photo"
                                    value="1"
                                >

                                <span>

                                    <strong>
                                        Beeldmateriaal
                                        <em>optioneel</em>
                                    </strong>

                                    <small>
                                        Ik geef toestemming voor gebruik
                                        van foto's waarop ik herkenbaar
                                        in beeld ben voor communicatie
                                        van de vereniging.
                                    </small>

                                </span>

                            </label>


                        </div>


                        <p class="registration-privacy-note">
                            Lees meer over de verwerking van
                            persoonsgegevens in het
                            <a
                                href="<?php echo esc_url(
                                    home_url('/informatie/#veiligheid')
                                ); ?>"
                            >
                                privacygedeelte van de website
                            </a>.
                        </p>

                    </fieldset>



                    <!-- ========================================
                         SUBMIT
                    ========================================= -->

                    <div class="registration-submit">

                        <button
                            type="submit"
                            class="registration-submit__button"
                        >
                            Inschrijving versturen
                            <span aria-hidden="true">→</span>
                        </button>

                        <p>
                            Na verzending ontvang je niet automatisch
                            een definitieve plaatsing. Petrus Donders
                            neemt contact op over het vervolg.
                        </p>

                    </div>


                </form>

            </div>

        </div>

    </section>


</main>

<?php get_footer(); ?>