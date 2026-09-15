<?php

if (!defined('ABSPATH')) {
    exit;
}

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
        'public'        => false,
        'show_ui'       => true,
        'show_in_menu'  => true,
        'show_in_rest'  => false,
        'menu_icon'     => 'dashicons-media-document',
        'menu_position' => 21,
        'supports'      => ['title'],
        'has_archive'   => false,
        'rewrite'       => false,
    ]);
}

add_action('init', 'ehbo_register_publications');


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
            Deze tekst gebruiken we op de publicatiekaart.
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
                Geselecteerd:
                <strong><?php echo esc_html($pdf_name); ?></strong>
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

    <?php
}


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

    $script = '/assets/js/admin-publications.js';

    wp_enqueue_script(
        'ehbo-admin-publications',
        get_theme_file_uri($script),
        ['media-editor'],
        filemtime(get_theme_file_path($script)),
        true
    );
}

add_action(
    'admin_enqueue_scripts',
    'ehbo_publication_admin_assets'
);


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

    $description = isset(
        $_POST['ehbo_publication_description']
    )
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

        echo esc_html(
            $type === 'dondersteentje'
                ? 'Het Dondersteentje'
                : 'Nieuwsbrief'
        );
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
            echo esc_html__('Geen PDF', 'ehbo-petrus-donders');
        }
    }
}

add_action(
    'manage_ehbo_publicatie_posts_custom_column',
    'ehbo_publication_column_content',
    10,
    2
);