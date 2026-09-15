<?php
/*
Template Name: Lesavond aanmelden
Template Post Type: page
*/

get_header();


/* ========================================
   PRESELECT DATE
======================================== */

$selected_date = '';

if (isset($_GET['datum'])) {

    $candidate = sanitize_text_field(
        wp_unslash($_GET['datum'])
    );

    if (
        preg_match(
            '/^\d{4}-\d{2}-\d{2}$/',
            $candidate
        )
    ) {
        $selected_date = $candidate;
    }
}


/* ========================================
   STATUS
======================================== */

$form_status = isset($_GET['lesavond_status'])
    ? sanitize_key(
        wp_unslash($_GET['lesavond_status'])
    )
    : '';
?>


<main
    id="main-content"
    class="inner-page lesson-registration-page"
>


    <!-- ========================================
         HERO
    ========================================= -->

    <section class="page-hero lesson-registration-hero">

        <div class="container page-hero__inner">


            <div class="page-hero__content reveal">

                <span class="section-eyebrow">
                    Les- & oefenavonden
                </span>

                <h1>
                    Blijf oefenen.
                    <span>Blijf scherp.</span>
                </h1>

                <p class="page-hero__lead">
                    Meld je aan voor één of meerdere
                    les- en oefenavonden van EHBO-vereniging
                    Petrus Donders.
                </p>


                <div class="page-hero__actions">

                    <a
                        class="page-button page-button--primary"
                        href="#lesavond-formulier"
                    >
                        Aanmelden
                        <span aria-hidden="true">↓</span>
                    </a>

                    <a
                        class="page-text-link"
                        href="<?php echo esc_url(
                            home_url(
                                '/informatie/#oefenavonden'
                            )
                        ); ?>"
                    >
                        Bekijk informatie
                        <span aria-hidden="true">→</span>
                    </a>

                </div>

            </div>



            <div class="page-hero__visual">

                <div class="lesson-registration-hero__panel reveal">

                    <span>
                        Voor leden
                    </span>

                    <strong>
                        Kies maximaal
                        <b>6</b>
                        oefenavonden.
                    </strong>

                    <p>
                        Houd je lidcode of
                        diplomanummer bij de hand.
                    </p>

                    <div
                        class="lesson-registration-hero__plus"
                        aria-hidden="true"
                    >
                        +
                    </div>

                </div>

            </div>


        </div>

    </section>



    <!-- ========================================
         MEMBER NOTICE
    ========================================= -->

    <section class="lesson-member-strip">

        <div class="container lesson-member-strip__inner">

            <div>

                <span>
                    Alleen voor leden
                </span>

                <strong>
                    Dit formulier is bedoeld voor leden
                    van EHBO-vereniging Petrus Donders.
                </strong>

            </div>


            <a
                class="page-text-link"
                href="<?php echo esc_url(
                    home_url('/word-lid/')
                ); ?>"
            >
                Nog geen lid?
                <span aria-hidden="true">→</span>
            </a>

        </div>

    </section>



    <!-- ========================================
         FORM
    ========================================= -->

    <section
        class="lesson-form-section page-section"
        id="lesavond-formulier"
    >

        <div class="container lesson-form-layout">


            <!-- SIDEBAR -->
            <aside class="lesson-form-sidebar reveal">

                <span class="section-eyebrow">
                    Aanmelden
                </span>

                <h2>
                    Welke avonden
                    passen jou?
                </h2>

                <p>
                    Je kunt in één keer maximaal zes
                    les- of oefenavonden doorgeven.
                </p>


                <div class="lesson-form-sidebar__note">

                    <strong>
                        Waarom vragen we om je gegevens?
                    </strong>

                    <p>
                        Je lidcode, geboortedatum en e-mailadres
                        worden gebruikt om je aanmelding te controleren.
                    </p>

                </div>


                <a
                    class="page-text-link"
                    href="<?php echo esc_url(
                        home_url('/contact/')
                    ); ?>"
                >
                    Vraag over een lesavond
                    <span aria-hidden="true">→</span>
                </a>

            </aside>



            <!-- FORM CARD -->
            <div class="lesson-form-card reveal">


                <?php if ($form_status === 'success') : ?>

                    <div
                        class="
                            lesson-form-notice
                            lesson-form-notice--success
                        "
                        role="status"
                    >

                        <strong>
                            Aanmelding ontvangen!
                        </strong>

                        <p>
                            Je gekozen les- en oefenavonden
                            zijn doorgestuurd naar Petrus Donders.
                        </p>

                    </div>


                <?php elseif ($form_status === 'invalid') : ?>

                    <div
                        class="
                            lesson-form-notice
                            lesson-form-notice--error
                        "
                        role="alert"
                    >

                        <strong>
                            Controleer je gegevens.
                        </strong>

                        <p>
                            Vul alle verplichte velden in
                            en kies minimaal één datum.
                        </p>

                    </div>


                <?php elseif ($form_status === 'error') : ?>

                    <div
                        class="
                            lesson-form-notice
                            lesson-form-notice--error
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
                    class="lesson-form"
                    method="post"
                    action="<?php echo esc_url(
                        admin_url('admin-post.php')
                    ); ?>"
                >

                    <input
                        type="hidden"
                        name="action"
                        value="ehbo_lesson_form"
                    >


                    <?php wp_nonce_field(
                        'ehbo_lesson_form',
                        'ehbo_lesson_nonce'
                    ); ?>


                    <!-- Honeypot -->
                    <div
                        class="lesson-form-honeypot"
                        aria-hidden="true"
                    >

                        <label for="lesson-website">
                            Website
                        </label>

                        <input
                            id="lesson-website"
                            type="text"
                            name="lesson_website"
                            tabindex="-1"
                            autocomplete="off"
                        >

                    </div>



                    <!-- ========================================
                         01 — MEMBER
                    ========================================= -->

                    <fieldset class="lesson-form-section-block">

                        <legend>

                            <span>
                                01
                            </span>

                            Controle lidmaatschap

                        </legend>


                        <div class="lesson-field">

                            <label for="lesson-member-code">

                                Lidcode of diplomanummer

                                <span>*</span>

                            </label>

                            <input
                                id="lesson-member-code"
                                type="text"
                                name="lesson_member_code"
                                placeholder="Bijvoorbeeld 123456"
                                required
                            >

                        </div>


                        <div class="
                            lesson-fields
                            lesson-fields--3
                        ">


                            <div class="lesson-field">

                                <label for="lesson-salutation">

                                    Aanhef

                                    <span>*</span>

                                </label>

                                <select
                                    id="lesson-salutation"
                                    name="lesson_salutation"
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


                            <div class="lesson-field">

                                <label for="lesson-initials">

                                    Voorletters

                                    <span>*</span>

                                </label>

                                <input
                                    id="lesson-initials"
                                    type="text"
                                    name="lesson_initials"
                                    required
                                >

                            </div>


                            <div class="lesson-field">

                                <label for="lesson-prefix">
                                    Tussenvoegsel
                                </label>

                                <input
                                    id="lesson-prefix"
                                    type="text"
                                    name="lesson_prefix"
                                >

                            </div>


                        </div>


                        <div class="
                            lesson-fields
                            lesson-fields--2
                        ">


                            <div class="lesson-field">

                                <label for="lesson-last-name">

                                    Achternaam

                                    <span>*</span>

                                </label>

                                <input
                                    id="lesson-last-name"
                                    type="text"
                                    name="lesson_last_name"
                                    autocomplete="family-name"
                                    required
                                >

                            </div>


                            <div class="lesson-field">

                                <label for="lesson-birthdate">

                                    Geboortedatum

                                    <span>*</span>

                                </label>

                                <input
                                    id="lesson-birthdate"
                                    type="date"
                                    name="lesson_birthdate"
                                    required
                                >

                            </div>


                        </div>


                        <div class="lesson-field">

                            <label for="lesson-email">

                                E-mailadres

                                <span>*</span>

                            </label>

                            <input
                                id="lesson-email"
                                type="email"
                                name="lesson_email"
                                autocomplete="email"
                                required
                            >

                        </div>

                    </fieldset>



                    <!-- ========================================
                         02 — DATES
                    ========================================= -->

                    <fieldset class="lesson-form-section-block">

                        <legend>

                            <span>
                                02
                            </span>

                            Kies je lesavonden

                        </legend>


                        <p class="lesson-date-intro">
                            Kies minimaal één datum.
                            Je kunt maximaal zes avonden
                            tegelijk aanmelden.
                        </p>


                        <div
                            class="lesson-date-list"
                            data-lesson-dates
                        >


                            <?php for ($i = 1; $i <= 6; $i++) : ?>

                                <div
                                    class="lesson-date-row"
                                    data-lesson-date-row
                                    <?php
                                    echo $i > 1
                                        ? 'hidden'
                                        : '';
                                    ?>
                                >

                                    <div class="lesson-date-row__number">

                                        <?php echo esc_html(
                                            str_pad(
                                                (string) $i,
                                                2,
                                                '0',
                                                STR_PAD_LEFT
                                            )
                                        ); ?>

                                    </div>


                                    <div class="lesson-field">

                                        <label
                                            for="lesson-date-<?php
                                            echo esc_attr($i);
                                            ?>"
                                        >
                                            Datum <?php
                                            echo esc_html($i);
                                            ?>

                                            <?php if ($i === 1) : ?>
                                                <span>*</span>
                                            <?php endif; ?>
                                        </label>

                                        <input
                                            id="lesson-date-<?php
                                            echo esc_attr($i);
                                            ?>"
                                            type="date"
                                            name="lesson_dates[]"
                                            <?php
                                            if (
                                                $i === 1 &&
                                                $selected_date
                                            ) :
                                            ?>
                                                value="<?php
                                                echo esc_attr(
                                                    $selected_date
                                                );
                                                ?>"
                                            <?php endif; ?>
                                            <?php
                                            echo $i === 1
                                                ? 'required'
                                                : '';
                                            ?>
                                        >

                                    </div>


                                    <?php if ($i > 1) : ?>

                                        <button
                                            type="button"
                                            class="lesson-date-remove"
                                            data-remove-lesson-date
                                            aria-label="Datum verwijderen"
                                        >
                                            ×
                                        </button>

                                    <?php endif; ?>


                                </div>

                            <?php endfor; ?>


                        </div>


                        <button
                            class="lesson-date-add"
                            type="button"
                            data-add-lesson-date
                        >
                            <span aria-hidden="true">
                                +
                            </span>

                            Nog een datum toevoegen
                        </button>

                    </fieldset>



                    <!-- ========================================
                         03 — EXTRA
                    ========================================= -->

                    <fieldset class="lesson-form-section-block">

                        <legend>

                            <span>
                                03
                            </span>

                            Nog iets doorgeven?

                        </legend>


                        <div class="lesson-field">

                            <label for="lesson-notes">
                                Opmerking
                            </label>

                            <textarea
                                id="lesson-notes"
                                name="lesson_notes"
                                rows="4"
                                placeholder="Bijvoorbeeld een vraag over een gekozen avond."
                            ></textarea>

                        </div>

                    </fieldset>



                    <!-- ========================================
                         SUBMIT
                    ========================================= -->

                    <div class="lesson-form-submit">

                        <button
                            type="submit"
                            class="lesson-form-submit__button"
                        >
                            Aanmelding versturen
                            <span aria-hidden="true">
                                →
                            </span>
                        </button>


                        <p>
                            Je gegevens worden alleen gebruikt
                            voor het verwerken en controleren
                            van deze aanmelding.
                        </p>

                    </div>


                </form>

            </div>


        </div>

    </section>


</main>

<?php get_footer(); ?>