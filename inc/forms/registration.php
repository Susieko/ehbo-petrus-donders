<?php

if (!defined('ABSPATH')) {
    exit;
}

function ehbo_handle_registration_form() {
    $redirect_url = home_url(
        '/inschrijven/#inschrijfformulier'
    );

    if (
        !isset($_POST['ehbo_registration_nonce']) ||
        !wp_verify_nonce(
            sanitize_text_field(
                wp_unslash($_POST['ehbo_registration_nonce'])
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

    if (!empty($_POST['registration_website'])) {
        wp_safe_redirect(
            add_query_arg(
                'inschrijving_status',
                'success',
                $redirect_url
            )
        );

        exit;
    }

    $text_field = static function ($key) {
        return isset($_POST[$key])
            ? sanitize_text_field(
                wp_unslash($_POST[$key])
            )
            : '';
    };

    $type = isset($_POST['registration_type'])
        ? sanitize_key(
            wp_unslash($_POST['registration_type'])
        )
        : '';

    $course = isset($_POST['registration_course'])
        ? sanitize_key(
            wp_unslash($_POST['registration_course'])
        )
        : '';

    $salutation = $text_field(
        'registration_salutation'
    );

    $initials = $text_field(
        'registration_initials'
    );

    $first_name = $text_field(
        'registration_first_name'
    );

    $prefix = $text_field(
        'registration_prefix'
    );

    $last_name = $text_field(
        'registration_last_name'
    );

    $birthdate = $text_field(
        'registration_birthdate'
    );

    $diploma = $text_field(
        'registration_diploma'
    );

    $email = isset($_POST['registration_email'])
        ? sanitize_email(
            wp_unslash($_POST['registration_email'])
        )
        : '';

    $phone = $text_field(
        'registration_phone'
    );

    $address = $text_field(
        'registration_address'
    );

    $postcode = $text_field(
        'registration_postcode'
    );

    $city = $text_field(
        'registration_city'
    );

    $physical_card = $text_field(
        'registration_physical_card'
    );

    $notes = isset($_POST['registration_notes'])
        ? sanitize_textarea_field(
            wp_unslash($_POST['registration_notes'])
        )
        : '';

    $consent_association = !empty(
        $_POST['registration_consent_association']
    );

    $consent_orange_cross = !empty(
        $_POST['registration_consent_orange_cross']
    );

    $consent_photo = !empty(
        $_POST['registration_consent_photo']
    );

    $allowed_types = [
        'lidmaatschap',
        'opleiding',
        'hercertificering',
    ];

    $courses = ehbo_get_courses();

    $allowed_courses = array_keys($courses);

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

    $requires_course = in_array(
        $type,
        [
            'opleiding',
            'hercertificering',
        ],
        true
    );

    if (
        $requires_course &&
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

    $type_labels = [
        'lidmaatschap'     => 'Lidmaatschap',
        'opleiding'        => 'Opleiding',
        'hercertificering' => 'Hercertificering',
    ];

    $type_label =
        $type_labels[$type] ?? $type;

    $course_label =
        $courses[$course] ?? $course;

    $recipient = sanitize_email(
        get_option('admin_email')
    );

    $subject =
        'Nieuwe inschrijving: ' .
        $type_label .
        ' - ' .
        $first_name .
        ' ' .
        $last_name;

    $message = [
        'NIEUWE INSCHRIJVING VIA PETRUSDONDERS.NL',
        '',
        'Aanmelding: ' . $type_label,
    ];

    if ($course_label) {
        $message[] =
            'Opleiding/certificaat: ' .
            $course_label;
    }

    $message[] = '';
    $message[] = 'PERSOONSGEGEVENS';
    $message[] = 'Aanhef: ' . $salutation;
    $message[] = 'Voorletters: ' . $initials;
    $message[] = 'Voornaam: ' . $first_name;
    $message[] = 'Tussenvoegsel: ' . $prefix;
    $message[] = 'Achternaam: ' . $last_name;
    $message[] = 'Geboortedatum: ' . $birthdate;

    $message[] =
        'Lidcode/diplomanummer: ' .
        ($diploma ?: 'Niet ingevuld');

    $message[] = '';
    $message[] = 'CONTACTGEGEVENS';
    $message[] = 'E-mail: ' . $email;
    $message[] = 'Telefoon: ' . $phone;
    $message[] = 'Adres: ' . $address;
    $message[] = 'Postcode: ' . $postcode;
    $message[] = 'Woonplaats: ' . $city;

    $message[] = '';
    $message[] = 'AANVULLEND';

    $message[] =
        'Fysiek pasje: ' .
        ($physical_card ?: 'Geen voorkeur');

    $message[] = 'Opmerkingen:';
    $message[] = $notes ?: 'Geen';

    $message[] = '';
    $message[] = 'TOESTEMMING';
    $message[] = 'Verenigingsadministratie: JA';

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
        sprintf(
            'Reply-To: %s %s <%s>',
            $first_name,
            $last_name,
            $email
        ),
    ];

    $sent = wp_mail(
        $recipient,
        $subject,
        implode("\n", $message),
        $headers
    );

    wp_safe_redirect(
        add_query_arg(
            'inschrijving_status',
            $sent ? 'success' : 'error',
            $redirect_url
        )
    );

    exit;
}

add_action(
    'admin_post_nopriv_ehbo_registration_form',
    'ehbo_handle_registration_form'
);

add_action(
    'admin_post_ehbo_registration_form',
    'ehbo_handle_registration_form'
);