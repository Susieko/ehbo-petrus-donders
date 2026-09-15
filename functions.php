<?php

if (!defined('ABSPATH')) {
    exit;
}

require_once get_theme_file_path('/inc/setup.php');
require_once get_theme_file_path('/inc/assets.php');
require_once get_theme_file_path(
    '/inc/post-types/publications.php'
);
require_once get_theme_file_path(
    '/inc/forms/contact.php'
);
require_once get_theme_file_path(
    '/inc/forms/registration.php'
);
require_once get_theme_file_path(
    '/inc/forms/assistance.php'
);

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