<?php

if (!defined('ABSPATH')) {
    exit;
}

function ehbo_handle_lesson_form() {
    $redirect_url = home_url(
        '/lesavond-aanmelden/#lesavond-formulier'
    );

    if (
        !isset($_POST['ehbo_lesson_nonce']) ||
        !wp_verify_nonce(
            sanitize_text_field(
                wp_unslash($_POST['ehbo_lesson_nonce'])
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

    $text_field = static function ($key) {
        return isset($_POST[$key])
            ? sanitize_text_field(
                wp_unslash($_POST[$key])
            )
            : '';
    };

    $member_code = $text_field(
        'lesson_member_code'
    );

    $salutation = $text_field(
        'lesson_salutation'
    );

    $initials = $text_field(
        'lesson_initials'
    );

    $prefix = $text_field(
        'lesson_prefix'
    );

    $last_name = $text_field(
        'lesson_last_name'
    );

    $birthdate = $text_field(
        'lesson_birthdate'
    );

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

    $recipient = sanitize_email(
        get_option('admin_email')
    );

    $subject =
        'Aanmelding les-/oefenavond - ' .
        $initials .
        ' ' .
        $last_name;

    $message = [
        'AANMELDING LES- / OEFENAVOND',
        '',
        'Lidcode / diplomanummer: ' .
            $member_code,
        'Aanhef: ' .
            $salutation,
        'Voorletters: ' .
            $initials,
        'Tussenvoegsel: ' .
            ($prefix ?: '-'),
        'Achternaam: ' .
            $last_name,
        'Geboortedatum: ' .
            $birthdate,
        'E-mailadres: ' .
            $email,
        '',
        'GEKOZEN DATUMS',
    ];

    foreach ($dates as $index => $date) {
        $message[] =
            ($index + 1) .
            '. ' .
            $date;
    }

    $message[] = '';
    $message[] = 'OPMERKING';
    $message[] = $notes ?: 'Geen';

    $headers = [
        'Content-Type: text/plain; charset=UTF-8',
        sprintf(
            'Reply-To: %s %s <%s>',
            $initials,
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
            'lesavond_status',
            $sent ? 'success' : 'error',
            $redirect_url
        )
    );

    exit;
}

add_action(
    'admin_post_nopriv_ehbo_lesson_form',
    'ehbo_handle_lesson_form'
);

add_action(
    'admin_post_ehbo_lesson_form',
    'ehbo_handle_lesson_form'
);