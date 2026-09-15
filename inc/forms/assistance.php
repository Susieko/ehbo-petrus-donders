<?php

if (!defined('ABSPATH')) {
    exit;
}

function ehbo_handle_event_request_form() {
    $redirect_url = home_url(
        '/hulpverlening-aanvragen/#aanvraagformulier'
    );

    if (
        !isset($_POST['ehbo_event_request_nonce']) ||
        !wp_verify_nonce(
            sanitize_text_field(
                wp_unslash($_POST['ehbo_event_request_nonce'])
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

    $text_field = static function ($key) {
        return isset($_POST[$key])
            ? sanitize_text_field(
                wp_unslash($_POST[$key])
            )
            : '';
    };

    $textarea_field = static function ($key) {
        return isset($_POST[$key])
            ? sanitize_textarea_field(
                wp_unslash($_POST[$key])
            )
            : '';
    };

    // Organisation and contact.
    $organisation = $text_field(
        'event_organisation'
    );

    $contact_name = $text_field(
        'event_contact_name'
    );

    $contact_phone = $text_field(
        'event_contact_phone'
    );

    $contact_email = isset($_POST['event_contact_email'])
        ? sanitize_email(
            wp_unslash($_POST['event_contact_email'])
        )
        : '';

    $contact_address = $text_field(
        'event_contact_address'
    );

    $contact_postcode = $text_field(
        'event_contact_postcode'
    );

    $contact_city = $text_field(
        'event_contact_city'
    );

    // Event.
    $event_name = $text_field(
        'event_name'
    );

    $day_contact = $text_field(
        'event_day_contact'
    );

    $day_phone = $text_field(
        'event_day_phone'
    );

    $location = $text_field(
        'event_location'
    );

    $event_address = $text_field(
        'event_address'
    );

    $event_postcode = $text_field(
        'event_postcode'
    );

    $event_city = $text_field(
        'event_city'
    );

    $description = $textarea_field(
        'event_description'
    );

    // Planning.
    $duration = $text_field(
        'event_duration'
    );

    $start_date = $text_field(
        'event_start_date'
    );

    $end_date = $text_field(
        'event_end_date'
    );

    $start_time = $text_field(
        'event_start_time'
    );

    $end_time = $text_field(
        'event_end_time'
    );

    $different_times = $textarea_field(
        'event_different_times'
    );

    $visitors = absint(
        $_POST['event_visitors'] ?? 0
    );

    $alcohol = $text_field(
        'event_alcohol'
    );

    $public_role = $text_field(
        'event_public_role'
    );

    // First aid.
    $first_aiders = absint(
        $_POST['event_first_aiders'] ?? 0
    );

    $extra_notes = $textarea_field(
        'event_extra_notes'
    );

    // Care post.
    $care_post = $text_field(
        'event_care_post'
    );

    $map_info = $textarea_field(
        'event_map_info'
    );

    $confirm_care_post = !empty(
        $_POST['event_confirm_care_post']
    );

    $confirm_conditions = !empty(
        $_POST['event_confirm_conditions']
    );

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

    $duration_label =
        $duration === 'meerdaags'
            ? 'Meerdaags'
            : 'Eendaags';

    $alcohol_labels = [
        'ja'       => 'Ja',
        'nee'      => 'Nee',
        'onbekend' => 'Nog onbekend',
    ];

    $care_labels = [
        'ja'             => 'Ja',
        'nog-te-regelen' => 'Nog te regelen',
    ];

    $recipient = sanitize_email(
        get_option('admin_email')
    );

    $subject =
        'Nieuwe aanvraag hulpverlening - ' .
        $event_name;

    $message = [
        'AANVRAAG HULPVERLENING BIJ EVENEMENT',
        '',
        'ORGANISATIE & CONTACT',
        'Organisatie: ' . $organisation,
        'Contactpersoon: ' . $contact_name,
        'Telefoon: ' . $contact_phone,
        'E-mail: ' . $contact_email,
        'Adres: ' . $contact_address,
        'Postcode / plaats: ' .
            $contact_postcode .
            ' ' .
            $contact_city,
        '',
        'EVENEMENT',
        'Naam: ' . $event_name,
        'Contact tijdens evenement: ' .
            $day_contact,
        'Telefoon tijdens evenement: ' .
            $day_phone,
        'Locatie: ' . $location,
        'Adres: ' . $event_address,
        'Postcode / plaats: ' .
            $event_postcode .
            ' ' .
            $event_city,
        'Omschrijving:',
        $description,
        '',
        'PLANNING & OMVANG',
        'Duur: ' . $duration_label,
        'Startdatum: ' . $start_date,
    ];

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
        $message[] = 'Afwijkende tijden:';
        $message[] = $different_times;
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
        ($public_role ?: 'Niet ingevuld');

    $message[] = '';
    $message[] = 'EHBO-INZET';

    $message[] =
        'Gewenst aantal EHBO’ers: ' .
        $first_aiders;

    $message[] = 'Opmerkingen:';
    $message[] = $extra_notes ?: 'Geen';

    $message[] = '';
    $message[] = 'ZORGPOST';

    $message[] =
        'Organisatie zorgt voor zorgpost: ' .
        (
            $care_labels[$care_post]
            ?? $care_post
        );

    $message[] = 'Plattegrond / situering:';
    $message[] = $map_info ?: 'Niet ingevuld';

    $message[] =
        'Zorgpostvoorwaarden bevestigd: JA';

    $message[] =
        'Voorwaarden hulpverlening bevestigd: JA';

    $headers = [
        'Content-Type: text/plain; charset=UTF-8',
        sprintf(
            'Reply-To: %s <%s>',
            $contact_name,
            $contact_email
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
            'hulpverlening_status',
            $sent ? 'success' : 'error',
            $redirect_url
        )
    );

    exit;
}

add_action(
    'admin_post_nopriv_ehbo_event_request_form',
    'ehbo_handle_event_request_form'
);

add_action(
    'admin_post_ehbo_event_request_form',
    'ehbo_handle_event_request_form'
);