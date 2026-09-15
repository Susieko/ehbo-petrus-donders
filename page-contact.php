<?php
/*
Template Name: Contact
Template Post Type: page
*/

get_header();


/* ========================================
   PRESELECT SUBJECT
======================================== */

$selected_subject = '';

if (isset($_GET['onderwerp'])) {

    $selected_subject = sanitize_key(
        wp_unslash($_GET['onderwerp'])
    );
}


$allowed_subjects = [
    'opleiding',
    'lidmaatschap',
    'oefenavonden',
    'hercertificering',
    'hulpverlening',
    'vrijwilliger',
    'anders',
];


if (
    !in_array(
        $selected_subject,
        $allowed_subjects,
        true
    )
) {
    $selected_subject = '';
}


/* ========================================
   FORM STATUS
======================================== */

$form_status = '';

if (isset($_GET['contact_status'])) {

    $form_status = sanitize_key(
        wp_unslash($_GET['contact_status'])
    );
}
?>


<main
    id="main-content"
    class="inner-page contact-page"
>


    <!-- ========================================
         HERO + FORM
    ========================================= -->

    <section class="contact-page__hero">

        <div class="container contact-page__hero-inner">


            <!-- INTRO -->
            <div class="contact-page__intro reveal">

                <span class="section-eyebrow">
                    Contact
                </span>

                <h1>
                    Waar kunnen we
                    <span>je mee helpen?</span>
                </h1>

                <p class="contact-page__lead">
                    Heb je een vraag over een opleiding,
                    lidmaatschap, oefenavond, hercertificering
                    of hulpverlening bij een evenement?
                    Stuur ons gerust een bericht.
                </p>


                <!-- CONTACT ROUTES -->
                <div class="contact-page__topics">


                    <a
                        class="contact-page__topic"
                        href="<?php echo esc_url(
    home_url('/inschrijven/?type=opleiding')
); ?>"
                    >

                        <span class="contact-page__topic-icon">

                            <svg
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="1.8"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                aria-hidden="true"
                            >
                                <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H11V5H6.5A2.5 2.5 0 0 0 4 7.5z"/>
                                <path d="M20 19.5A2.5 2.5 0 0 0 17.5 17H13V5h4.5A2.5 2.5 0 0 1 20 7.5z"/>
                            </svg>

                        </span>

                        <div>

                            <strong>
                                Opleidingen
                            </strong>

                            <p>
                                Direct aanmelden voor een cursus.
                            </p>

                        </div>

                        <span
                            class="contact-page__topic-arrow"
                            aria-hidden="true"
                        >
                            →
                        </span>

                    </a>



                    <a
                        class="contact-page__topic"
                        href="<?php echo esc_url(
    home_url('/hulpverlening-aanvragen/')
); ?>"
                    >

                        <span
                            class="
                                contact-page__topic-icon
                                contact-page__topic-icon--red
                            "
                        >

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
                                    x="3"
                                    y="7"
                                    width="18"
                                    height="14"
                                    rx="2"
                                />
                                <path d="M8 7V5a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/>
                                <path d="M12 11v6"/>
                                <path d="M9 14h6"/>
                            </svg>

                        </span>

                        <div>

                            <strong>
                                Hulpverlening
                            </strong>

                            <p>
                                EHBO-ondersteuning aanvragen voor een evenement.
                            </p>

                        </div>

                        <span
                            class="contact-page__topic-arrow"
                            aria-hidden="true"
                        >
                            →
                        </span>

                    </a>



                    <a
                        class="contact-page__topic"
href="<?php echo esc_url(
    home_url('/word-lid/')
); ?>"
                    >

                        <span
                            class="
                                contact-page__topic-icon
                                contact-page__topic-icon--yellow
                            "
                        >

                            <svg
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="1.8"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                aria-hidden="true"
                            >
                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/>
                                <circle cx="9" cy="7" r="4"/>
                                <path d="M19 8v6"/>
                                <path d="M16 11h6"/>
                            </svg>

                        </span>

                        <div>

                            <strong>
                                Lid of vrijwilliger worden
                            </strong>

                            <p>
                                Bekijk hoe je bij de vereniging kunt aansluiten.
                            </p>

                        </div>

                        <span
                            class="contact-page__topic-arrow"
                            aria-hidden="true"
                        >
                            →
                        </span>

                    </a>


                </div>


                <!-- DIRECT EMAIL -->
                <div class="contact-page__direct">

                    <span>
                        Liever rechtstreeks mailen?
                    </span>

                    <a href="mailto:info@petrusdonders.nl">
                        info@petrusdonders.nl
                        <span aria-hidden="true">↗</span>
                    </a>

                </div>

            </div>



            <!-- ========================================
                 FORM CARD
            ========================================= -->

            <div class="contact-page__form-card reveal">


                <div class="contact-page__form-header">

                    <span>
                        Contactformulier
                    </span>

                    <h2>
                        Stuur ons een bericht.
                    </h2>

                    <p>
                        Vul je gegevens in en vertel ons
                        waar we je mee kunnen helpen.
                    </p>

                </div>



                <!-- STATUS -->
                <?php if ($form_status === 'success') : ?>

                    <div
                        class="
                            contact-page__notice
                            contact-page__notice--success
                        "
                        role="status"
                    >

                        <strong>
                            Bericht verstuurd!
                        </strong>

                        <p>
                            Bedankt voor je bericht.
                            We nemen zo snel mogelijk
                            contact met je op.
                        </p>

                    </div>


                <?php elseif ($form_status === 'error') : ?>

                    <div
                        class="
                            contact-page__notice
                            contact-page__notice--error
                        "
                        role="alert"
                    >

                        <strong>
                            Er ging iets mis.
                        </strong>

                        <p>
                            Het bericht kon niet worden verstuurd.
                            Probeer het nogmaals of mail ons
                            rechtstreeks.
                        </p>

                    </div>


                <?php elseif ($form_status === 'invalid') : ?>

                    <div
                        class="
                            contact-page__notice
                            contact-page__notice--error
                        "
                        role="alert"
                    >

                        <strong>
                            Controleer je gegevens.
                        </strong>

                        <p>
                            Niet alle verplichte velden
                            zijn correct ingevuld.
                        </p>

                    </div>

                <?php endif; ?>



                <!-- FORM -->
                <form
                    class="contact-page__form"
                    method="post"
                    action="<?php echo esc_url(
                        admin_url('admin-post.php')
                    ); ?>"
                >

                    <input
                        type="hidden"
                        name="action"
                        value="ehbo_contact_form"
                    >


                    <?php wp_nonce_field(
                        'ehbo_contact_form',
                        'ehbo_contact_nonce'
                    ); ?>


                    <!-- Honeypot -->
                    <div
                        class="contact-page__honeypot"
                        aria-hidden="true"
                    >

                        <label for="contact-website">
                            Website
                        </label>

                        <input
                            type="text"
                            id="contact-website"
                            name="contact_website"
                            tabindex="-1"
                            autocomplete="off"
                        >

                    </div>


                    <!-- NAME / EMAIL -->
                    <div class="contact-page__form-row">


                        <div class="contact-page__field">

                            <label for="contact-name">

                                Naam

                                <span aria-hidden="true">
                                    *
                                </span>

                            </label>

                            <input
                                type="text"
                                id="contact-name"
                                name="contact_name"
                                autocomplete="name"
                                placeholder="Je naam"
                                required
                            >

                        </div>


                        <div class="contact-page__field">

                            <label for="contact-email">

                                E-mailadres

                                <span aria-hidden="true">
                                    *
                                </span>

                            </label>

                            <input
                                type="email"
                                id="contact-email"
                                name="contact_email"
                                autocomplete="email"
                                placeholder="naam@email.nl"
                                required
                            >

                        </div>


                    </div>


                    <!-- PHONE -->
                    <div class="contact-page__field">

                        <label for="contact-phone">

                            Telefoonnummer

                            <small>
                                optioneel
                            </small>

                        </label>

                        <input
                            type="tel"
                            id="contact-phone"
                            name="contact_phone"
                            autocomplete="tel"
                            placeholder="06 12 34 56 78"
                        >

                    </div>


                    <!-- SUBJECT -->
                    <div class="contact-page__field">

                        <label for="contact-subject">

                            Waar gaat je vraag over?

                            <span aria-hidden="true">
                                *
                            </span>

                        </label>

                        <select
                            id="contact-subject"
                            name="contact_subject"
                            required
                        >

                            <option value="">
                                Kies een onderwerp
                            </option>


                            <option
                                value="opleiding"
                                <?php selected(
                                    $selected_subject,
                                    'opleiding'
                                ); ?>
                            >
                                Opleidingen
                            </option>


                            <option
                                value="lidmaatschap"
                                <?php selected(
                                    $selected_subject,
                                    'lidmaatschap'
                                ); ?>
                            >
                                Lidmaatschap
                            </option>


                            <option
                                value="oefenavonden"
                                <?php selected(
                                    $selected_subject,
                                    'oefenavonden'
                                ); ?>
                            >
                                Les- en oefenavonden
                            </option>


                            <option
                                value="hercertificering"
                                <?php selected(
                                    $selected_subject,
                                    'hercertificering'
                                ); ?>
                            >
                                Hercertificering
                            </option>


                            <option
                                value="hulpverlening"
                                <?php selected(
                                    $selected_subject,
                                    'hulpverlening'
                                ); ?>
                            >
                                Hulpverlening bij evenementen
                            </option>


                            <option
                                value="vrijwilliger"
                                <?php selected(
                                    $selected_subject,
                                    'vrijwilliger'
                                ); ?>
                            >
                                Vrijwilliger worden
                            </option>


                            <option
                                value="anders"
                                <?php selected(
                                    $selected_subject,
                                    'anders'
                                ); ?>
                            >
                                Anders
                            </option>

                        </select>

                    </div>


                    <!-- MESSAGE -->
                    <div class="contact-page__field">

                        <label for="contact-message">

                            Bericht

                            <span aria-hidden="true">
                                *
                            </span>

                        </label>

                        <textarea
                            id="contact-message"
                            name="contact_message"
                            rows="7"
                            placeholder="Vertel ons waar we je mee kunnen helpen..."
                            required
                        ></textarea>

                    </div>


                    <div class="contact-page__form-bottom">

                        <button
                            class="contact-page__submit"
                            type="submit"
                        >

                            Bericht versturen

                            <span aria-hidden="true">
                                →
                            </span>

                        </button>


                        <p class="contact-page__privacy">

                            Je gegevens worden alleen gebruikt
                            om op je bericht te reageren.

                            <a
                                href="<?php echo esc_url(
                                    home_url(
                                        '/informatie/#veiligheid'
                                    )
                                ); ?>"
                            >
                                Lees over privacy
                            </a>

                        </p>

                    </div>

                </form>



                <!-- DOTS -->
                <div
                    class="contact-page__dots"
                    aria-hidden="true"
                >

                    <?php for (
                        $i = 0;
                        $i < 48;
                        $i++
                    ) : ?>

                        <span></span>

                    <?php endfor; ?>

                </div>


            </div>

        </div>

    </section>



    <!-- ========================================
         QUICK HELP
    ========================================= -->

    <section class="contact-help page-section">

        <div class="container">


            <div class="contact-help__header reveal">

                <div>

                    <span class="section-eyebrow">
                        Misschien vind je het hier al
                    </span>

                    <h2>
                        Snel naar de
                        juiste informatie.
                    </h2>

                </div>

                <p>
                    Voor veel praktische vragen kun je
                    meteen verder naar de juiste pagina.
                </p>

            </div>


            <div class="contact-help__grid reveal-stagger">


                <a
                    class="contact-help__card"
                    href="<?php echo esc_url(
                        home_url('/opleidingen/')
                    ); ?>"
                >

                    <span>
                        01
                    </span>

                    <h3>
                        Opleidingen
                    </h3>

                    <p>
                        Bekijk alle EHBO-opleidingen,
                        cursussen en specialisaties.
                    </p>

                    <strong>
                        Bekijk opleidingen
                        <b aria-hidden="true">→</b>
                    </strong>

                </a>



                <a
                    class="contact-help__card"
                    href="<?php echo esc_url(
                        home_url(
                            '/informatie/#oefenavonden'
                        )
                    ); ?>"
                >

                    <span>
                        02
                    </span>

                    <h3>
                        Les- & oefenavonden
                    </h3>

                    <p>
                        Leslocaties, tijden,
                        oefenen en competenties.
                    </p>

                    <strong>
                        Bekijk informatie
                        <b aria-hidden="true">→</b>
                    </strong>

                </a>



                <a
                    class="contact-help__card"
                    href="<?php echo esc_url(
                        home_url('/hulpverlening/')
                    ); ?>"
                >

                    <span>
                        03
                    </span>

                    <h3>
                        Evenementenzorg
                    </h3>

                    <p>
                        Alles over eerstehulpverlening
                        bij evenementen.
                    </p>

                    <strong>
                        Bekijk hulpverlening
                        <b aria-hidden="true">→</b>
                    </strong>

                </a>


            </div>

        </div>

    </section>



    <!-- ========================================
         CONTACT INFO
    ========================================= -->

    <section class="contact-details page-section page-section--soft">

        <div class="container contact-details__inner">


            <div class="contact-details__content reveal">

                <span class="section-eyebrow">
                    Petrus Donders
                </span>

                <h2>
                    Gewoon even
                    contact opnemen.
                </h2>

                <p>
                    EHBO-vereniging Petrus Donders is actief
                    in Tilburg en omgeving. Voor algemene vragen
                    kun je gebruikmaken van het formulier
                    of rechtstreeks mailen.
                </p>

            </div>


            <div class="contact-details__cards reveal-stagger">


                <a
                    class="contact-detail"
                    href="mailto:info@petrusdonders.nl"
                >

                    <span>
                        E-mail
                    </span>

                    <strong>
                        info@petrusdonders.nl
                    </strong>

                    <small>
                        Algemene vragen
                    </small>

                    <b aria-hidden="true">
                        ↗
                    </b>

                </a>


                <a
                    class="contact-detail"
                    href="<?php echo esc_url(
                        home_url(
                            '/informatie/#leslocaties'
                        )
                    ); ?>"
                >

                    <span>
                        Leslocaties
                    </span>

                    <strong>
                        Tilburg
                    </strong>

                    <small>
                        De Spijkerbeemden & ’t Sant
                    </small>

                    <b aria-hidden="true">
                        →
                    </b>

                </a>


                <a
                    class="contact-detail"
                    href="<?php echo esc_url(
                        home_url(
    '/hulpverlening-aanvragen/'
)
                    ); ?>"
                >

                    <span>
                        Evenement
                    </span>

                    <strong>
                        Hulpverlening aanvragen
                    </strong>

                    <small>
                        Bij voorkeur minimaal 6 weken vooraf
                    </small>

                    <b aria-hidden="true">
                        →
                    </b>

                </a>


            </div>

        </div>

    </section>



    <!-- ========================================
         FINAL CTA
    ========================================= -->

    <section class="contact-next">

        <div class="container">

            <div class="contact-next__card reveal">


                <div>

                    <span>
                        Zelf betrokken worden?
                    </span>

                    <h2>
                        Leer helpen.
                        Blijf betrokken.
                    </h2>

                    <p>
                        Word lid, volg een opleiding of ontdek
                        hoe je als vrijwilliger kunt meedoen
                        bij Petrus Donders.
                    </p>

                </div>


                <div class="contact-next__actions">

                    <a
                        class="page-button page-button--primary"
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
                        class="page-text-link"
                        href="<?php echo esc_url(
                            home_url('/opleidingen/')
                        ); ?>"
                    >
                        Bekijk opleidingen
                        <span aria-hidden="true">→</span>
                    </a>

                </div>


            </div>

        </div>

    </section>


</main>

<?php get_footer(); ?>