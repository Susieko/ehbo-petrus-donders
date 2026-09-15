<?php

if (!defined('ABSPATH')) {
    exit;
}

function ehbo_local_mail_from($email) {
    if (wp_get_environment_type() === 'local') {
        return 'no-reply@petrusdonders.nl';
    }

    return $email;
}

function ehbo_local_mail_from_name($name) {
    if (wp_get_environment_type() === 'local') {
        return 'EHBO Petrus Donders';
    }

    return $name;
}

add_filter(
    'wp_mail_from',
    'ehbo_local_mail_from'
);

add_filter(
    'wp_mail_from_name',
    'ehbo_local_mail_from_name'
);