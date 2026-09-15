<?php

if (!defined('ABSPATH')) {
    exit;
}

function ehbo_handle_contact_form() {
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

    if (!empty($_POST['contact_website'])) {
        wp_safe_redirect(
            home_url('/contact/?contact_status=success')
        );

        exit;
    }

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

    if (
        !$name ||
        !$email ||
        !is_email($email) ||
        !$subject ||
        !$message
    ) {
        wp_safe_redirect(
            home_url('/contact/?contact_status=invalid')
        );

        exit;
    }

    $subject_names = [
        'opleiding'        => 'Opleidingen',
        'lidmaatschap'     => 'Lidmaatschap',
        'oefenavonden'     => 'Les- en oefenavonden',
        'hercertificering' => 'Hercertificering',
        'hulpverlening'    => 'Hulpverlening bij evenementen',
        'vrijwilliger'     => 'Vrijwilliger worden',
        'anders'           => 'Anders',
    ];

    if (!isset($subject_names[$subject])) {
        wp_safe_redirect(
            home_url('/contact/?contact_status=invalid')
        );

        exit;
    }

    $recipient = sanitize_email(
        get_option('admin_email')
    );

    $mail_subject =
        'Website Petrus Donders: ' .
        $subject_names[$subject];

    $body = "Nieuw bericht via petrusdonders.nl\n\n";
    $body .= "Naam: {$name}\n";
    $body .= "E-mail: {$email}\n";

    if ($phone) {
        $body .= "Telefoon: {$phone}\n";
    }

    $body .=
        'Onderwerp: ' .
        $subject_names[$subject] .
        "\n\n";

    $body .= "Bericht:\n";
    $body .= $message . "\n";

    $headers = [
        'Content-Type: text/plain; charset=UTF-8',
        'Reply-To: ' .
            $name .
            ' <' .
            $email .
            '>',
    ];

    $sent = wp_mail(
        $recipient,
        $mail_subject,
        $body,
        $headers
    );

    $status = $sent
        ? 'success'
        : 'error';

    wp_safe_redirect(
        home_url(
            '/contact/?contact_status=' . $status
        )
    );

    exit;
}

add_action(
    'admin_post_ehbo_contact_form',
    'ehbo_handle_contact_form'
);

add_action(
    'admin_post_nopriv_ehbo_contact_form',
    'ehbo_handle_contact_form'
);