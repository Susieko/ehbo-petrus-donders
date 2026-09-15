<?php

if (!defined('ABSPATH')) {
    exit;
}

function ehbo_meta_description() {
    if (is_admin()) {
        return;
    }

    $description =
        'EHBO Petrus Donders Tilburg verzorgt EHBO-opleidingen, '
        . 'oefenavonden en eerstehulpverlening bij evenementen '
        . 'in Tilburg en omgeving.';

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

    echo '<meta name="description" content="' .
        esc_attr(
            wp_strip_all_tags($description)
        ) .
        '">' .
        "\n";
}

add_action(
    'wp_head',
    'ehbo_meta_description',
    5
);