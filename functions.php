<?php

if (!defined('ABSPATH')) {
    exit;
}

/* ========================================
   STYLES & SCRIPTS
======================================== */

function ehbo_petrus_donders_assets() {


    $theme_uri = get_stylesheet_directory_uri();
    $theme_dir = get_stylesheet_directory();


    /* Global */
    wp_enqueue_style(
        'ehbo-global',
        $theme_uri . '/assets/css/global.css',
        [],
        filemtime($theme_dir . '/assets/css/global.css')
    );

    /* Lesavond aanmelden */
if (is_page('lesavond-aanmelden')) {

    wp_enqueue_style(
        'ehbo-lesavond-aanmelden',
        $theme_uri .
        '/assets/css/lesavond-aanmelden.css',
        ['ehbo-page-base'],
        filemtime(
            $theme_dir .
            '/assets/css/lesavond-aanmelden.css'
        )
    );

    wp_enqueue_script(
        'ehbo-lesavond-aanmelden',
        $theme_uri .
        '/assets/js/lesavond-aanmelden.js',
        [],
        filemtime(
            $theme_dir .
            '/assets/js/lesavond-aanmelden.js'
        ),
        true
    );

}


    /* Header */
    wp_enqueue_style(
        'ehbo-header',
        $theme_uri . '/assets/css/header.css',
        ['ehbo-global'],
        filemtime($theme_dir . '/assets/css/header.css')
    );


    /* Hero */
    wp_enqueue_style(
        'ehbo-hero',
        $theme_uri . '/assets/css/hero.css',
        ['ehbo-global'],
        filemtime($theme_dir . '/assets/css/hero.css')
    );


    /* Homepage */
    wp_enqueue_style(
        'ehbo-home',
        $theme_uri . '/assets/css/home.css',
        ['ehbo-global'],
        filemtime($theme_dir . '/assets/css/home.css')
    );

    wp_enqueue_style(
    'ehbo-footer',
    $theme_uri . '/assets/css/footer.css',
    ['ehbo-global'],
    filemtime($theme_dir . '/assets/css/footer.css')
);


wp_enqueue_style(
    'ehbo-responsive',
    $theme_uri . '/assets/css/responsive.css',
    [
        'ehbo-global',
        'ehbo-header',
        'ehbo-hero',
        'ehbo-home',
        'ehbo-footer'
    ],
    filemtime($theme_dir . '/assets/css/responsive.css')
);

/* ========================================
   INNER PAGES
======================================== */

wp_enqueue_style(
    'ehbo-page-base',
    $theme_uri . '/assets/css/page-base.css',
    ['ehbo-responsive'],
    filemtime($theme_dir . '/assets/css/page-base.css')
);


/* Over ons */
if (is_page('over-ons')) {

    wp_enqueue_style(
        'ehbo-over-ons',
        $theme_uri . '/assets/css/over-ons.css',
        ['ehbo-page-base'],
        filemtime($theme_dir . '/assets/css/over-ons.css')
    );

}

/* Opleidingen */
if (is_page('opleidingen')) {

    wp_enqueue_style(
        'ehbo-opleidingen',
        $theme_uri . '/assets/css/opleidingen.css',
        ['ehbo-page-base'],
        filemtime(
            $theme_dir . '/assets/css/opleidingen.css'
        )
    );

}

/* Hulpverlening */
if (is_page('hulpverlening')) {

    wp_enqueue_style(
        'ehbo-hulpverlening',
        $theme_uri . '/assets/css/hulpverlening.css',
        ['ehbo-page-base'],
        filemtime(
            $theme_dir . '/assets/css/hulpverlening.css'
        )
    );

}

/* Informatie */
if (is_page('informatie')) {

    wp_enqueue_style(
        'ehbo-informatie',
        $theme_uri . '/assets/css/informatie.css',
        ['ehbo-page-base'],
        filemtime(
            $theme_dir . '/assets/css/informatie.css'
        )
    );

}

/* Publicaties */
if (is_page('publicaties')) {

    wp_enqueue_style(
        'ehbo-publicaties',
        $theme_uri . '/assets/css/publicaties.css',
        ['ehbo-page-base'],
        filemtime(
            $theme_dir . '/assets/css/publicaties.css'
        )
    );

}

/* Word lid */
if (is_page('word-lid')) {

    wp_enqueue_style(
        'ehbo-word-lid',
        $theme_uri . '/assets/css/word-lid.css',
        ['ehbo-page-base'],
        filemtime(
            $theme_dir . '/assets/css/word-lid.css'
        )
    );


}
/* Fotogalerij */
if (is_page('fotogalerij')) {

    wp_enqueue_style(
        'ehbo-fotogalerij',
        $theme_uri . '/assets/css/fotogalerij.css',
        ['ehbo-page-base'],
        filemtime(
            $theme_dir . '/assets/css/fotogalerij.css'
        )
    );

}

/* Contact */
if (is_page('contact')) {

    wp_enqueue_style(
        'ehbo-contact-page',
        $theme_uri . '/assets/css/contact-page.css',
        ['ehbo-page-base'],
        filemtime(
            $theme_dir . '/assets/css/contact-page.css'
        )
    );

}


/* Inschrijven */
if (is_page('inschrijven')) {

    wp_enqueue_style(
        'ehbo-inschrijven',
        $theme_uri . '/assets/css/inschrijven.css',
        ['ehbo-page-base'],
        filemtime(
            $theme_dir . '/assets/css/inschrijven.css'
        )
    );

    wp_enqueue_script(
        'ehbo-inschrijven',
        $theme_uri . '/assets/js/inschrijven.js',
        [],
        filemtime(
            $theme_dir . '/assets/js/inschrijven.js'
        ),
        true
    );

}

/* Hulpverlening aanvragen */
if (is_page('hulpverlening-aanvragen')) {

    wp_enqueue_style(
        'ehbo-hulpverlening-aanvragen',
        $theme_uri .
        '/assets/css/hulpverlening-aanvragen.css',
        ['ehbo-page-base'],
        filemtime(
            $theme_dir .
            '/assets/css/hulpverlening-aanvragen.css'
        )
    );

    wp_enqueue_script(
        'ehbo-hulpverlening-aanvragen',
        $theme_uri .
        '/assets/js/hulpverlening-aanvragen.js',
        [],
        filemtime(
            $theme_dir .
            '/assets/js/hulpverlening-aanvragen.js'
        ),
        true
    );

}

/* JavaScript */
wp_enqueue_script(
    'ehbo-main',
    $theme_uri . '/assets/js/main.js',
    [],
    filemtime(
        $theme_dir . '/assets/js/main.js'
    ),
    true
);

} // ← ONLY close ehbo_petrus_donders_assets HERE


add_action(
    'wp_enqueue_scripts',
    'ehbo_petrus_donders_assets'
);




/* ========================================
   PUBLICATIES
   Nieuwsbrieven & Het Dondersteentje
======================================== */

function ehbo_register_publications() {

    register_post_type('ehbo_publicatie', [
        'labels' => [
            'name'               => 'Publicaties',
            'singular_name'      => 'Publicatie',
            'menu_name'          => 'Publicaties',
            'add_new'            => 'Nieuwe publicatie',
            'add_new_item'       => 'Nieuwe publicatie toevoegen',
            'edit_item'          => 'Publicatie bewerken',
            'new_item'           => 'Nieuwe publicatie',
            'view_item'          => 'Publicatie bekijken',
            'search_items'       => 'Publicaties zoeken',
            'not_found'          => 'Geen publicaties gevonden',
            'not_found_in_trash' => 'Geen publicaties in de prullenbak',
        ],

        'public'             => false,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_rest'       => false,
        'menu_icon'          => 'dashicons-media-document',
        'menu_position'      => 21,
        'supports'           => ['title'],
        'has_archive'        => false,
        'rewrite'            => false,
    ]);
}

add_action(
    'init',
    'ehbo_register_publications'
);


/* ========================================
   PUBLICATIEGEGEVENS
======================================== */

function ehbo_add_publication_meta_box() {

    add_meta_box(
        'ehbo_publication_details',
        'Publicatiegegevens',
        'ehbo_render_publication_meta_box',
        'ehbo_publicatie',
        'normal',
        'high'
    );
}

add_action(
    'add_meta_boxes',
    'ehbo_add_publication_meta_box'
);


function ehbo_render_publication_meta_box($post) {

    wp_nonce_field(
        'ehbo_save_publication',
        'ehbo_publication_nonce'
    );

    $type = get_post_meta(
        $post->ID,
        '_ehbo_publication_type',
        true
    );

    $description = get_post_meta(
        $post->ID,
        '_ehbo_publication_description',
        true
    );

    $pdf_id = (int) get_post_meta(
        $post->ID,
        '_ehbo_publication_pdf_id',
        true
    );

    $pdf_name = $pdf_id
        ? get_the_title($pdf_id)
        : '';
    ?>

    <div class="ehbo-publication-fields">

        <p>
            <strong>Soort publicatie</strong>
        </p>

        <p>
            <label>
                <input
                    type="radio"
                    name="ehbo_publication_type"
                    value="nieuwsbrief"
                    <?php checked($type, 'nieuwsbrief'); ?>
                    required
                >
                Nieuwsbrief
            </label>
        </p>

        <p>
            <label>
                <input
                    type="radio"
                    name="ehbo_publication_type"
                    value="dondersteentje"
                    <?php checked($type, 'dondersteentje'); ?>
                    required
                >
                Het Dondersteentje
            </label>
        </p>


        <hr style="margin: 24px 0;">


        <p>
            <label for="ehbo_publication_description">
                <strong>Korte beschrijving</strong>
            </label>
        </p>

        <textarea
            id="ehbo_publication_description"
            name="ehbo_publication_description"
            rows="4"
            style="width: 100%;"
            placeholder="Bijvoorbeeld: In deze editie leest u meer over tekenbeten en eerste hulp bij epilepsie."
        ><?php echo esc_textarea($description); ?></textarea>

        <p class="description">
            Deze tekst gebruiken we later op de publicatiekaart.
        </p>


        <hr style="margin: 24px 0;">


        <p>
            <strong>PDF-bestand</strong>
        </p>

        <input
            type="hidden"
            id="ehbo_publication_pdf_id"
            name="ehbo_publication_pdf_id"
            value="<?php echo esc_attr($pdf_id); ?>"
        >

        <p id="ehbo-publication-pdf-name">
            <?php if ($pdf_name) : ?>
                Geselecteerd: <strong><?php echo esc_html($pdf_name); ?></strong>
            <?php else : ?>
                Nog geen PDF geselecteerd.
            <?php endif; ?>
        </p>

        <p>
            <button
                type="button"
                class="button button-primary"
                id="ehbo-select-publication-pdf"
            >
                PDF kiezen of uploaden
            </button>

            <button
                type="button"
                class="button"
                id="ehbo-remove-publication-pdf"
                <?php echo $pdf_id ? '' : 'style="display:none;"'; ?>
            >
                PDF verwijderen
            </button>
        </p>

    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {

            const selectButton = document.getElementById(
                'ehbo-select-publication-pdf'
            );

            const removeButton = document.getElementById(
                'ehbo-remove-publication-pdf'
            );

            const pdfInput = document.getElementById(
                'ehbo_publication_pdf_id'
            );

            const pdfName = document.getElementById(
                'ehbo-publication-pdf-name'
            );

            let mediaFrame;

            selectButton.addEventListener('click', function (event) {
                event.preventDefault();

                if (mediaFrame) {
                    mediaFrame.open();
                    return;
                }

                mediaFrame = wp.media({
                    title: 'Kies een PDF-bestand',
                    button: {
                        text: 'Deze PDF gebruiken'
                    },
                    library: {
                        type: 'application/pdf'
                    },
                    multiple: false
                });

                mediaFrame.on('select', function () {

                    const attachment = mediaFrame
                        .state()
                        .get('selection')
                        .first()
                        .toJSON();

                    pdfInput.value = attachment.id;

                    pdfName.innerHTML =
                        'Geselecteerd: <strong>' +
                        attachment.filename +
                        '</strong>';

                    removeButton.style.display = '';
                });

                mediaFrame.open();
            });

            removeButton.addEventListener('click', function (event) {
                event.preventDefault();

                pdfInput.value = '';
                pdfName.textContent = 'Nog geen PDF geselecteerd.';
                removeButton.style.display = 'none';
            });
        });
    </script>

    <?php
}


/* Media uploader activeren bij publicaties */

function ehbo_publication_admin_assets($hook) {

    if (!in_array($hook, ['post.php', 'post-new.php'], true)) {
        return;
    }

    $screen = get_current_screen();

    if (
        !$screen ||
        $screen->post_type !== 'ehbo_publicatie'
    ) {
        return;
    }

    wp_enqueue_media();
}

add_action(
    'admin_enqueue_scripts',
    'ehbo_publication_admin_assets'
);


/* ========================================
   PUBLICATIE OPSLAAN
======================================== */

function ehbo_save_publication($post_id) {

    if (
        !isset($_POST['ehbo_publication_nonce']) ||
        !wp_verify_nonce(
            sanitize_text_field(
                wp_unslash($_POST['ehbo_publication_nonce'])
            ),
            'ehbo_save_publication'
        )
    ) {
        return;
    }

    if (
        defined('DOING_AUTOSAVE') &&
        DOING_AUTOSAVE
    ) {
        return;
    }

    if (!current_user_can('edit_post', $post_id)) {
        return;
    }


    /* Soort publicatie */

    $allowed_types = [
        'nieuwsbrief',
        'dondersteentje',
    ];

    $type = isset($_POST['ehbo_publication_type'])
        ? sanitize_key(
            wp_unslash($_POST['ehbo_publication_type'])
        )
        : '';

    if (in_array($type, $allowed_types, true)) {
        update_post_meta(
            $post_id,
            '_ehbo_publication_type',
            $type
        );
    }


    /* Beschrijving */

    $description = isset($_POST['ehbo_publication_description'])
        ? sanitize_textarea_field(
            wp_unslash(
                $_POST['ehbo_publication_description']
            )
        )
        : '';

    update_post_meta(
        $post_id,
        '_ehbo_publication_description',
        $description
    );


    /* PDF */

    $pdf_id = isset($_POST['ehbo_publication_pdf_id'])
        ? absint($_POST['ehbo_publication_pdf_id'])
        : 0;

    if (
        $pdf_id &&
        get_post_mime_type($pdf_id) === 'application/pdf'
    ) {
        update_post_meta(
            $post_id,
            '_ehbo_publication_pdf_id',
            $pdf_id
        );
    } elseif (!$pdf_id) {
        delete_post_meta(
            $post_id,
            '_ehbo_publication_pdf_id'
        );
    }
}

add_action(
    'save_post_ehbo_publicatie',
    'ehbo_save_publication'
);


/* ========================================
   KOLOMMEN IN HET OVERZICHT
======================================== */

function ehbo_publication_columns($columns) {

    return [
        'cb'               => $columns['cb'],
        'title'            => 'Titel',
        'publication_type' => 'Soort',
        'publication_pdf'  => 'PDF',
        'date'             => 'Publicatiedatum',
    ];
}

add_filter(
    'manage_ehbo_publicatie_posts_columns',
    'ehbo_publication_columns'
);


function ehbo_publication_column_content(
    $column,
    $post_id
) {

    if ($column === 'publication_type') {

        $type = get_post_meta(
            $post_id,
            '_ehbo_publication_type',
            true
        );

        echo $type === 'dondersteentje'
            ? 'Het Dondersteentje'
            : 'Nieuwsbrief';
    }


    if ($column === 'publication_pdf') {

        $pdf_id = (int) get_post_meta(
            $post_id,
            '_ehbo_publication_pdf_id',
            true
        );

        $pdf_url = $pdf_id
            ? wp_get_attachment_url($pdf_id)
            : '';

        if ($pdf_url) {
            ?>
            <a
                href="<?php echo esc_url($pdf_url); ?>"
                target="_blank"
                rel="noopener noreferrer"
            >
                PDF bekijken
            </a>
            <?php
        } else {
            echo 'Geen PDF';
        }
    }
}

add_action(
    'manage_ehbo_publicatie_posts_custom_column',
    'ehbo_publication_column_content',
    10,
    2
);

/* ========================================
   CONTACT FORM HANDLER
======================================== */

function ehbo_handle_contact_form() {

    /*
     * Security check
     */
    if (
        !isset($_POST['ehbo_contact_nonce']) ||
        !wp_verify_nonce(
            sanitize_text_field(
                wp_unslash($_POST['ehbo_contact_nonce'])
            ),
            'ehbo_contact_form'
        )
    ) {
        wp_die('Ongeldige aanvraag.');
    }


    /*
     * Honeypot
     */
    if (
        !empty($_POST['contact_website'])
    ) {
        wp_safe_redirect(
            home_url('/contact/?contact_status=success')
        );

        exit;
    }


    /*
     * Fields
     */
    $name = isset($_POST['contact_name'])
        ? sanitize_text_field(
            wp_unslash($_POST['contact_name'])
        )
        : '';

    $email = isset($_POST['contact_email'])
        ? sanitize_email(
            wp_unslash($_POST['contact_email'])
        )
        : '';

    $phone = isset($_POST['contact_phone'])
        ? sanitize_text_field(
            wp_unslash($_POST['contact_phone'])
        )
        : '';

    $subject = isset($_POST['contact_subject'])
        ? sanitize_key(
            wp_unslash($_POST['contact_subject'])
        )
        : '';

    $message = isset($_POST['contact_message'])
        ? sanitize_textarea_field(
            wp_unslash($_POST['contact_message'])
        )
        : '';


    /*
     * Validate
     */
    if (
        empty($name) ||
        empty($email) ||
        !is_email($email) ||
        empty($subject) ||
        empty($message)
    ) {

        wp_safe_redirect(
            home_url('/contact/?contact_status=invalid')
        );

        exit;
    }


    /*
     * Subject names
     */
    $subject_names = [
        'opleiding' => 'Opleidingen',
        'lidmaatschap' => 'Lidmaatschap',
        'oefenavonden' => 'Les- en oefenavonden',
        'hercertificering' => 'Hercertificering',
        'hulpverlening' => 'Hulpverlening bij evenementen',
        'vrijwilliger' => 'Vrijwilliger worden',
        'anders' => 'Anders',
    ];


    if (!isset($subject_names[$subject])) {

        wp_safe_redirect(
            home_url('/contact/?contact_status=invalid')
        );

        exit;
    }


    /*
     * Recipient
     *
     * Uses the email address set under:
     * WordPress → Settings → General
     */
    $recipient = sanitize_email(
        get_option('admin_email')
    );


    $mail_subject =
        'Website Petrus Donders: ' .
        $subject_names[$subject];


    /*
     * Email content
     */
    $body  = "Nieuw bericht via petrusdonders.nl\n\n";

    $body .= "Naam: {$name}\n";
    $body .= "E-mail: {$email}\n";

    if (!empty($phone)) {
        $body .= "Telefoon: {$phone}\n";
    }

    $body .= 'Onderwerp: ' .
        $subject_names[$subject] .
        "\n\n";

    $body .= "Bericht:\n";
    $body .= $message;
    $body .= "\n";


    /*
     * Reply directly to the visitor
     */
    $headers = [
        'Content-Type: text/plain; charset=UTF-8',
        'Reply-To: ' .
            $name .
            ' <' .
            $email .
            '>',
    ];


    /*
     * Send
     */
    $sent = wp_mail(
        $recipient,
        $mail_subject,
        $body,
        $headers
    );


    /*
     * Return to contact page
     */
    if ($sent) {

        wp_safe_redirect(
            home_url('/contact/?contact_status=success')
        );

    } else {

        wp_safe_redirect(
            home_url('/contact/?contact_status=error')
        );

    }

    exit;
}


/*
 * Logged-in visitors
 */
add_action(
    'admin_post_ehbo_contact_form',
    'ehbo_handle_contact_form'
);


/*
 * Normal visitors
 */
add_action(
    'admin_post_nopriv_ehbo_contact_form',
    'ehbo_handle_contact_form'
);

/* ========================================
   INSCHRIJFFORMULIER
======================================== */

add_action(
    'admin_post_nopriv_ehbo_registration_form',
    'ehbo_handle_registration_form'
);

add_action(
    'admin_post_ehbo_registration_form',
    'ehbo_handle_registration_form'
);


function ehbo_handle_registration_form() {

$redirect_url =
    home_url(
        '/inschrijven/#inschrijfformulier'
    );


    /* Nonce */
    if (
        !isset($_POST['ehbo_registration_nonce']) ||
        !wp_verify_nonce(
            sanitize_text_field(
                wp_unslash(
                    $_POST['ehbo_registration_nonce']
                )
            ),
            'ehbo_registration_form'
        )
    ) {

        wp_safe_redirect(
            add_query_arg(
                'inschrijving_status',
                'error',
                $redirect_url
            )
        );

        exit;
    }


    /* Honeypot */
    if (
        !empty($_POST['registration_website'])
    ) {

        wp_safe_redirect(
            add_query_arg(
                'inschrijving_status',
                'success',
                $redirect_url
            )
        );

        exit;
    }


    /* ========================================
       SANITIZE
    ========================================= */

    $type = isset($_POST['registration_type'])
        ? sanitize_key(
            wp_unslash(
                $_POST['registration_type']
            )
        )
        : '';


    $course = isset($_POST['registration_course'])
        ? sanitize_text_field(
            wp_unslash(
                $_POST['registration_course']
            )
        )
        : '';


    $salutation = isset($_POST['registration_salutation'])
        ? sanitize_text_field(
            wp_unslash(
                $_POST['registration_salutation']
            )
        )
        : '';


    $initials = isset($_POST['registration_initials'])
        ? sanitize_text_field(
            wp_unslash(
                $_POST['registration_initials']
            )
        )
        : '';


    $first_name = isset($_POST['registration_first_name'])
        ? sanitize_text_field(
            wp_unslash(
                $_POST['registration_first_name']
            )
        )
        : '';


    $prefix = isset($_POST['registration_prefix'])
        ? sanitize_text_field(
            wp_unslash(
                $_POST['registration_prefix']
            )
        )
        : '';


    $last_name = isset($_POST['registration_last_name'])
        ? sanitize_text_field(
            wp_unslash(
                $_POST['registration_last_name']
            )
        )
        : '';


    $birthdate = isset($_POST['registration_birthdate'])
        ? sanitize_text_field(
            wp_unslash(
                $_POST['registration_birthdate']
            )
        )
        : '';


    $diploma = isset($_POST['registration_diploma'])
        ? sanitize_text_field(
            wp_unslash(
                $_POST['registration_diploma']
            )
        )
        : '';


    $email = isset($_POST['registration_email'])
        ? sanitize_email(
            wp_unslash(
                $_POST['registration_email']
            )
        )
        : '';


    $phone = isset($_POST['registration_phone'])
        ? sanitize_text_field(
            wp_unslash(
                $_POST['registration_phone']
            )
        )
        : '';


    $address = isset($_POST['registration_address'])
        ? sanitize_text_field(
            wp_unslash(
                $_POST['registration_address']
            )
        )
        : '';


    $postcode = isset($_POST['registration_postcode'])
        ? sanitize_text_field(
            wp_unslash(
                $_POST['registration_postcode']
            )
        )
        : '';


    $city = isset($_POST['registration_city'])
        ? sanitize_text_field(
            wp_unslash(
                $_POST['registration_city']
            )
        )
        : '';


    $physical_card =
        isset($_POST['registration_physical_card'])
        ? sanitize_text_field(
            wp_unslash(
                $_POST['registration_physical_card']
            )
        )
        : '';


    $notes = isset($_POST['registration_notes'])
        ? sanitize_textarea_field(
            wp_unslash(
                $_POST['registration_notes']
            )
        )
        : '';


    $consent_association =
        !empty(
            $_POST['registration_consent_association']
        );


    $consent_orange_cross =
        !empty(
            $_POST['registration_consent_orange_cross']
        );


    $consent_photo =
        !empty(
            $_POST['registration_consent_photo']
        );



    /* ========================================
       VALIDATION
    ========================================= */

    $allowed_types = [
        'lidmaatschap',
        'opleiding',
        'hercertificering',
    ];

    $allowed_courses = [
    'diploma-eerste-hulp',
    'ehak',
    'reanimatie-aed',
    'stop-de-bloeding',
    'wandelletsels',
    'sportletsels',
    'in-company',
];


    if (
        !in_array($type, $allowed_types, true) ||
        !$salutation ||
        !$first_name ||
        !$last_name ||
        !$birthdate ||
        !$email ||
        !is_email($email) ||
        !$phone ||
        !$address ||
        !$postcode ||
        !$city ||
        !$consent_association
    ) {

        wp_safe_redirect(
            add_query_arg(
                'inschrijving_status',
                'invalid',
                $redirect_url
            )
        );

        exit;
    }


    /*
     * Opleiding/hercertificering:
     * opleiding én toestemming Oranje Kruis
     * verplicht.
     */
    if (
        in_array(
            $type,
            [
                'opleiding',
                'hercertificering',
            ],
            true
        )
        &&
(
    !in_array(
        $course,
        $allowed_courses,
        true
    ) ||
    !$consent_orange_cross
)
    ) {

        wp_safe_redirect(
            add_query_arg(
                'inschrijving_status',
                'invalid',
                $redirect_url
            )
        );

        exit;
    }



    /* ========================================
       FRIENDLY LABELS
    ========================================= */

    $type_labels = [
        'lidmaatschap' =>
            'Lidmaatschap',

        'opleiding' =>
            'Opleiding',

        'hercertificering' =>
            'Hercertificering',
    ];


    $course_labels = [
        'diploma-eerste-hulp' =>
            'Diploma Eerste Hulp',

        'ehak' =>
            'Eerste Hulp aan Kinderen',

        'reanimatie-aed' =>
            'Reanimatie & AED',

        'stop-de-bloeding' =>
            'Stop de bloeding',

        'wandelletsels' =>
            'Wandelletsels',

        'sportletsels' =>
            'Sportletsels',

        'in-company' =>
            'Workshop / In Company',
    ];


    $type_label =
        $type_labels[$type] ?? $type;


    $course_label =
        $course_labels[$course] ?? $course;



    /* ========================================
       MAIL
    ========================================= */

    $recipient =
        get_option('admin_email');


    $subject =
        'Nieuwe inschrijving: ' .
        $type_label .
        ' - ' .
        $first_name .
        ' ' .
        $last_name;


    $message = [];

    $message[] =
        'NIEUWE INSCHRIJVING VIA PETRUSDONDERS.NL';

    $message[] =
        '';

    $message[] =
        'Aanmelding: ' .
        $type_label;


    if ($course_label) {

        $message[] =
            'Opleiding/certificaat: ' .
            $course_label;
    }


    $message[] =
        '';

    $message[] =
        'PERSOONSGEGEVENS';

    $message[] =
        'Aanhef: ' .
        $salutation;

    $message[] =
        'Voorletters: ' .
        $initials;

    $message[] =
        'Voornaam: ' .
        $first_name;

    $message[] =
        'Tussenvoegsel: ' .
        $prefix;

    $message[] =
        'Achternaam: ' .
        $last_name;

    $message[] =
        'Geboortedatum: ' .
        $birthdate;

    $message[] =
        'Lidcode/diplomanummer: ' .
        ($diploma ?: 'Niet ingevuld');


    $message[] =
        '';

    $message[] =
        'CONTACTGEGEVENS';

    $message[] =
        'E-mail: ' .
        $email;

    $message[] =
        'Telefoon: ' .
        $phone;

    $message[] =
        'Adres: ' .
        $address;

    $message[] =
        'Postcode: ' .
        $postcode;

    $message[] =
        'Woonplaats: ' .
        $city;


    $message[] =
        '';

    $message[] =
        'AANVULLEND';

    $message[] =
        'Fysiek pasje: ' .
        ($physical_card ?: 'Geen voorkeur');

    $message[] =
        'Opmerkingen:';

    $message[] =
        $notes ?: 'Geen';


    $message[] =
        '';

    $message[] =
        'TOESTEMMING';

    $message[] =
        'Verenigingsadministratie: JA';

    $message[] =
        'Het Oranje Kruis: ' .
        (
            $consent_orange_cross
                ? 'JA'
                : 'NEE / niet van toepassing'
        );

    $message[] =
        'Beeldmateriaal: ' .
        (
            $consent_photo
                ? 'JA'
                : 'NEE'
        );


    $headers = [
        'Content-Type: text/plain; charset=UTF-8',
        'Reply-To: ' .
        $first_name .
        ' ' .
        $last_name .
        ' <' .
        $email .
        '>',
    ];


    $sent = wp_mail(
        $recipient,
        $subject,
        implode("\n", $message),
        $headers
    );


    if (!$sent) {

        wp_safe_redirect(
            add_query_arg(
                'inschrijving_status',
                'error',
                $redirect_url
            )
        );

        exit;
    }


    wp_safe_redirect(
        add_query_arg(
            'inschrijving_status',
            'success',
            $redirect_url
        )
    );

    exit;
}

/* ========================================
   HULPVERLENING AANVRAAGFORMULIER
======================================== */

add_action(
    'admin_post_nopriv_ehbo_event_request_form',
    'ehbo_handle_event_request_form'
);

add_action(
    'admin_post_ehbo_event_request_form',
    'ehbo_handle_event_request_form'
);


function ehbo_handle_event_request_form() {

$redirect_url =
    home_url(
        '/hulpverlening-aanvragen/#aanvraagformulier'
    );


    /* ========================================
       SECURITY
    ========================================= */

    if (
        !isset($_POST['ehbo_event_request_nonce']) ||
        !wp_verify_nonce(
            sanitize_text_field(
                wp_unslash(
                    $_POST['ehbo_event_request_nonce']
                )
            ),
            'ehbo_event_request_form'
        )
    ) {

        wp_safe_redirect(
            add_query_arg(
                'hulpverlening_status',
                'error',
                $redirect_url
            )
        );

        exit;
    }


    /* Honeypot */
    if (!empty($_POST['event_website'])) {

        wp_safe_redirect(
            add_query_arg(
                'hulpverlening_status',
                'success',
                $redirect_url
            )
        );

        exit;
    }


    /* ========================================
       HELPER
    ========================================= */

    $field = static function ($key) {

        return isset($_POST[$key])
            ? sanitize_text_field(
                wp_unslash($_POST[$key])
            )
            : '';
    };


    /* ========================================
       ORGANISATION
    ========================================= */

    $organisation =
        $field('event_organisation');

    $contact_name =
        $field('event_contact_name');

    $contact_phone =
        $field('event_contact_phone');

    $contact_email = isset(
        $_POST['event_contact_email']
    )
        ? sanitize_email(
            wp_unslash(
                $_POST['event_contact_email']
            )
        )
        : '';

    $contact_address =
        $field('event_contact_address');

    $contact_postcode =
        $field('event_contact_postcode');

    $contact_city =
        $field('event_contact_city');


    /* ========================================
       EVENT
    ========================================= */

    $event_name =
        $field('event_name');

    $day_contact =
        $field('event_day_contact');

    $day_phone =
        $field('event_day_phone');

    $location =
        $field('event_location');

    $event_address =
        $field('event_address');

    $event_postcode =
        $field('event_postcode');

    $event_city =
        $field('event_city');

    $description = isset(
        $_POST['event_description']
    )
        ? sanitize_textarea_field(
            wp_unslash(
                $_POST['event_description']
            )
        )
        : '';


    /* ========================================
       PLANNING
    ========================================= */

    $duration =
        $field('event_duration');

    $start_date =
        $field('event_start_date');

    $end_date =
        $field('event_end_date');

    $start_time =
        $field('event_start_time');

    $end_time =
        $field('event_end_time');

    $different_times = isset(
        $_POST['event_different_times']
    )
        ? sanitize_textarea_field(
            wp_unslash(
                $_POST['event_different_times']
            )
        )
        : '';

    $visitors =
        absint(
            $_POST['event_visitors'] ?? 0
        );

    $alcohol =
        $field('event_alcohol');

    $public_role =
        $field('event_public_role');


    /* ========================================
       FIRST AID
    ========================================= */

    $first_aiders =
        absint(
            $_POST['event_first_aiders'] ?? 0
        );

    $extra_notes = isset(
        $_POST['event_extra_notes']
    )
        ? sanitize_textarea_field(
            wp_unslash(
                $_POST['event_extra_notes']
            )
        )
        : '';


    /* ========================================
       CARE POST
    ========================================= */

    $care_post =
        $field('event_care_post');

    $map_info = isset(
        $_POST['event_map_info']
    )
        ? sanitize_textarea_field(
            wp_unslash(
                $_POST['event_map_info']
            )
        )
        : '';

    $confirm_care_post =
        !empty(
            $_POST['event_confirm_care_post']
        );

    $confirm_conditions =
        !empty(
            $_POST['event_confirm_conditions']
        );


    /* ========================================
       VALIDATION
    ========================================= */

    $allowed_durations = [
        'eendaags',
        'meerdaags',
    ];

    $allowed_alcohol = [
        'ja',
        'nee',
        'onbekend',
    ];

    $allowed_care_posts = [
        'ja',
        'nog-te-regelen',
    ];


    if (
        !$organisation ||
        !$contact_name ||
        !$contact_phone ||
        !$contact_email ||
        !is_email($contact_email) ||
        !$contact_address ||
        !$contact_postcode ||
        !$contact_city ||
        !$event_name ||
        !$day_contact ||
        !$day_phone ||
        !$location ||
        !$event_address ||
        !$event_postcode ||
        !$event_city ||
        !$description ||
        !in_array(
            $duration,
            $allowed_durations,
            true
        ) ||
        !$start_date ||
        !$start_time ||
        !$end_time ||
        !$visitors ||
        !in_array(
            $alcohol,
            $allowed_alcohol,
            true
        ) ||
        !$first_aiders ||
        !in_array(
            $care_post,
            $allowed_care_posts,
            true
        ) ||
        !$confirm_care_post ||
        !$confirm_conditions
    ) {

        wp_safe_redirect(
            add_query_arg(
                'hulpverlening_status',
                'invalid',
                $redirect_url
            )
        );

        exit;
    }


    if (
        $duration === 'meerdaags' &&
        !$end_date
    ) {

        wp_safe_redirect(
            add_query_arg(
                'hulpverlening_status',
                'invalid',
                $redirect_url
            )
        );

        exit;
    }


    /* ========================================
       LABELS
    ========================================= */

    $duration_label =
        $duration === 'meerdaags'
            ? 'Meerdaags'
            : 'Eendaags';


    $alcohol_labels = [
        'ja'      => 'Ja',
        'nee'     => 'Nee',
        'onbekend'=> 'Nog onbekend',
    ];


    $care_labels = [
        'ja'            => 'Ja',
        'nog-te-regelen'=> 'Nog te regelen',
    ];


    /* ========================================
       MAIL
    ========================================= */

    $recipient =
        sanitize_email(
            get_option('admin_email')
        );


    $subject =
        'Nieuwe aanvraag hulpverlening - ' .
        $event_name;


    $message = [];


    $message[] =
        'AANVRAAG HULPVERLENING BIJ EVENEMENT';

    $message[] = '';

    $message[] =
        'ORGANISATIE & CONTACT';

    $message[] =
        'Organisatie: ' .
        $organisation;

    $message[] =
        'Contactpersoon: ' .
        $contact_name;

    $message[] =
        'Telefoon: ' .
        $contact_phone;

    $message[] =
        'E-mail: ' .
        $contact_email;

    $message[] =
        'Adres: ' .
        $contact_address;

    $message[] =
        'Postcode / plaats: ' .
        $contact_postcode .
        ' ' .
        $contact_city;


    $message[] = '';

    $message[] =
        'EVENEMENT';

    $message[] =
        'Naam: ' .
        $event_name;

    $message[] =
        'Contact tijdens evenement: ' .
        $day_contact;

    $message[] =
        'Telefoon tijdens evenement: ' .
        $day_phone;

    $message[] =
        'Locatie: ' .
        $location;

    $message[] =
        'Adres: ' .
        $event_address;

    $message[] =
        'Postcode / plaats: ' .
        $event_postcode .
        ' ' .
        $event_city;

    $message[] =
        'Omschrijving:';

    $message[] =
        $description;


    $message[] = '';

    $message[] =
        'PLANNING & OMVANG';

    $message[] =
        'Duur: ' .
        $duration_label;

    $message[] =
        'Startdatum: ' .
        $start_date;

    if ($duration === 'meerdaags') {

        $message[] =
            'Einddatum: ' .
            $end_date;
    }

    $message[] =
        'Tijd: ' .
        $start_time .
        ' - ' .
        $end_time;

    if ($different_times) {

        $message[] =
            'Afwijkende tijden:';

        $message[] =
            $different_times;
    }

    $message[] =
        'Bezoekers/deelnemers per dag: ' .
        $visitors;

    $message[] =
        'Alcohol: ' .
        (
            $alcohol_labels[$alcohol]
            ?? $alcohol
        );

    $message[] =
        'Rol publiek: ' .
        (
            $public_role
            ?: 'Niet ingevuld'
        );


    $message[] = '';

    $message[] =
        'EHBO-INZET';

    $message[] =
        'Gewenst aantal EHBO’ers: ' .
        $first_aiders;

    $message[] =
        'Opmerkingen:';

    $message[] =
        $extra_notes ?: 'Geen';


    $message[] = '';

    $message[] =
        'ZORGPOST';

    $message[] =
        'Organisatie zorgt voor zorgpost: ' .
        (
            $care_labels[$care_post]
            ?? $care_post
        );

    $message[] =
        'Plattegrond / situering:';

    $message[] =
        $map_info ?: 'Niet ingevuld';

    $message[] =
        'Zorgpostvoorwaarden bevestigd: JA';

    $message[] =
        'Voorwaarden hulpverlening bevestigd: JA';


    $headers = [
        'Content-Type: text/plain; charset=UTF-8',
        'Reply-To: ' .
            $contact_name .
            ' <' .
            $contact_email .
            '>',
    ];


    $sent = wp_mail(
        $recipient,
        $subject,
        implode("\n", $message),
        $headers
    );


    wp_safe_redirect(
        add_query_arg(
            'hulpverlening_status',
            $sent
                ? 'success'
                : 'error',
            $redirect_url
        )
    );

    exit;
}

/* ========================================
   LOCAL MAIL SENDER
======================================== */

add_filter('wp_mail_from', function ($email) {

    if (wp_get_environment_type() === 'local') {
        return 'no-reply@petrusdonders.nl';
    }

    return $email;
});


add_filter('wp_mail_from_name', function ($name) {

    if (wp_get_environment_type() === 'local') {
        return 'EHBO Petrus Donders';
    }

    return $name;
});

/* ========================================
   LES- & OEFENAVONDEN FORMULIER
======================================== */

add_action(
    'admin_post_nopriv_ehbo_lesson_form',
    'ehbo_handle_lesson_form'
);

add_action(
    'admin_post_ehbo_lesson_form',
    'ehbo_handle_lesson_form'
);


function ehbo_handle_lesson_form() {

$redirect_url =
    home_url(
        '/lesavond-aanmelden/#lesavond-formulier'
    );


    /* Nonce */
    if (
        !isset($_POST['ehbo_lesson_nonce']) ||
        !wp_verify_nonce(
            sanitize_text_field(
                wp_unslash(
                    $_POST['ehbo_lesson_nonce']
                )
            ),
            'ehbo_lesson_form'
        )
    ) {

        wp_safe_redirect(
            add_query_arg(
                'lesavond_status',
                'error',
                $redirect_url
            )
        );

        exit;
    }


    /* Honeypot */
    if (!empty($_POST['lesson_website'])) {

        wp_safe_redirect(
            add_query_arg(
                'lesavond_status',
                'success',
                $redirect_url
            )
        );

        exit;
    }


    /* ========================================
       DATA
    ========================================= */

    $member_code = isset($_POST['lesson_member_code'])
        ? sanitize_text_field(
            wp_unslash($_POST['lesson_member_code'])
        )
        : '';

    $salutation = isset($_POST['lesson_salutation'])
        ? sanitize_text_field(
            wp_unslash($_POST['lesson_salutation'])
        )
        : '';

    $initials = isset($_POST['lesson_initials'])
        ? sanitize_text_field(
            wp_unslash($_POST['lesson_initials'])
        )
        : '';

    $prefix = isset($_POST['lesson_prefix'])
        ? sanitize_text_field(
            wp_unslash($_POST['lesson_prefix'])
        )
        : '';

    $last_name = isset($_POST['lesson_last_name'])
        ? sanitize_text_field(
            wp_unslash($_POST['lesson_last_name'])
        )
        : '';

    $birthdate = isset($_POST['lesson_birthdate'])
        ? sanitize_text_field(
            wp_unslash($_POST['lesson_birthdate'])
        )
        : '';

    $email = isset($_POST['lesson_email'])
        ? sanitize_email(
            wp_unslash($_POST['lesson_email'])
        )
        : '';

    $notes = isset($_POST['lesson_notes'])
        ? sanitize_textarea_field(
            wp_unslash($_POST['lesson_notes'])
        )
        : '';


    /* Dates */
    $dates = [];

    if (
        isset($_POST['lesson_dates']) &&
        is_array($_POST['lesson_dates'])
    ) {

        foreach (
            array_slice(
                $_POST['lesson_dates'],
                0,
                6
            )
            as $date
        ) {

            $date = sanitize_text_field(
                wp_unslash($date)
            );

            if (
                $date &&
                preg_match(
                    '/^\d{4}-\d{2}-\d{2}$/',
                    $date
                )
            ) {
                $dates[] = $date;
            }
        }
    }


    /* ========================================
       VALIDATION
    ========================================= */

    if (
        !$member_code ||
        !$salutation ||
        !$initials ||
        !$last_name ||
        !$birthdate ||
        !$email ||
        !is_email($email) ||
        empty($dates)
    ) {

        wp_safe_redirect(
            add_query_arg(
                'lesavond_status',
                'invalid',
                $redirect_url
            )
        );

        exit;
    }


    /* ========================================
       MAIL
    ========================================= */

    $recipient =
        sanitize_email(
            get_option('admin_email')
        );


    $subject =
        'Aanmelding les-/oefenavond - ' .
        $initials .
        ' ' .
        $last_name;


    $message = [];

    $message[] =
        'AANMELDING LES- / OEFENAVOND';

    $message[] =
        '';

    $message[] =
        'Lidcode / diplomanummer: ' .
        $member_code;

    $message[] =
        'Aanhef: ' .
        $salutation;

    $message[] =
        'Voorletters: ' .
        $initials;

    $message[] =
        'Tussenvoegsel: ' .
        ($prefix ?: '-');

    $message[] =
        'Achternaam: ' .
        $last_name;

    $message[] =
        'Geboortedatum: ' .
        $birthdate;

    $message[] =
        'E-mailadres: ' .
        $email;


    $message[] =
        '';

    $message[] =
        'GEKOZEN DATUMS';


    foreach ($dates as $index => $date) {

        $message[] =
            ($index + 1) .
            '. ' .
            $date;
    }


    $message[] =
        '';

    $message[] =
        'OPMERKING';

    $message[] =
        $notes ?: 'Geen';


    $headers = [
        'Content-Type: text/plain; charset=UTF-8',
        'Reply-To: ' .
            $initials .
            ' ' .
            $last_name .
            ' <' .
            $email .
            '>',
    ];


    $sent = wp_mail(
        $recipient,
        $subject,
        implode("\n", $message),
        $headers
    );


    wp_safe_redirect(
        add_query_arg(
            'lesavond_status',
            $sent
                ? 'success'
                : 'error',
            $redirect_url
        )
    );

    exit;
}

function ehbo_meta_description() {

    if (is_admin()) {
        return;
    }

    $description = '';

    if (is_singular()) {

        $post_id = get_queried_object_id();

        if ($post_id) {
            $description = get_post_field(
                'post_excerpt',
                $post_id
            );
        }
    }

    if (!$description) {
        $description = get_bloginfo('description');
    }

    if (!$description) {
        return;
    }

    echo '<meta name="description" content="' .
        esc_attr(wp_strip_all_tags($description)) .
        '">' . "\n";
}

add_action(
    'wp_head',
    'ehbo_meta_description',
    5
);

/* Meta description */

add_action('wp_head', function () {

    $default_description =
        'EHBO Petrus Donders Tilburg verzorgt EHBO-opleidingen, '
        . 'oefenavonden en eerstehulpverlening bij evenementen '
        . 'in Tilburg en omgeving.';

    $description = $default_description;

    if (is_singular()) {

        $post_id = get_queried_object_id();

        if ($post_id) {

            $excerpt = get_post_field(
                'post_excerpt',
                $post_id
            );

            if (!empty($excerpt)) {
                $description = $excerpt;
            }
        }
    }

    echo '<meta name="description" content="'
        . esc_attr(
            wp_strip_all_tags($description)
        )
        . '">' . "\n";

}, 5);