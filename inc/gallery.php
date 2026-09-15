<?php

if (!defined('ABSPATH')) {
    exit;
}


function ehbo_is_gallery_page($post_id) {
    return (
        get_post_field('post_name', $post_id) === 'fotogalerij' ||
        get_page_template_slug($post_id) === 'page-fotogalerij.php'
    );
}


function ehbo_add_gallery_meta_box($post) {
    if (!ehbo_is_gallery_page($post->ID)) {
        return;
    }

    add_meta_box(
        'ehbo_gallery_images',
        'Galerijfoto’s',
        'ehbo_render_gallery_meta_box',
        'page',
        'normal',
        'high'
    );
}

add_action(
    'add_meta_boxes_page',
    'ehbo_add_gallery_meta_box'
);


function ehbo_render_gallery_meta_box($post) {
    wp_nonce_field(
        'ehbo_save_gallery',
        'ehbo_gallery_nonce'
    );

    $image_ids = get_post_meta(
        $post->ID,
        '_ehbo_gallery_image_ids',
        true
    );

    if (!is_array($image_ids)) {
        $image_ids = [];
    }
    ?>

    <div id="ehbo-gallery-editor">

        <p>
            Kies afbeeldingen uit de mediabibliotheek.
            Sleep ze om de volgorde aan te passen.
        </p>

        <input
            type="hidden"
            id="ehbo_gallery_image_ids"
            name="ehbo_gallery_image_ids"
            value="<?php echo esc_attr(
                implode(',', $image_ids)
            ); ?>"
        >

        <div
            id="ehbo-gallery-preview"
            class="ehbo-gallery-preview"
        >

            <?php foreach ($image_ids as $image_id) : ?>

                <?php
                $image_id = absint($image_id);

                if (
                    !$image_id ||
                    !wp_attachment_is_image($image_id)
                ) {
                    continue;
                }

                $thumbnail = wp_get_attachment_image_url(
                    $image_id,
                    'thumbnail'
                );

                $title = get_the_title($image_id);
                ?>

                <div
                    class="ehbo-gallery-item"
                    data-id="<?php echo esc_attr($image_id); ?>"
                >

                    <span
                        class="ehbo-gallery-drag"
                        aria-hidden="true"
                    >
                        ⋮⋮
                    </span>

                    <img
                        src="<?php echo esc_url($thumbnail); ?>"
                        alt=""
                    >

                    <div class="ehbo-gallery-item__meta">

                        <strong>
                            <?php echo esc_html($title); ?>
                        </strong>

                        <button
                            type="button"
                            class="
                                button-link-delete
                                ehbo-gallery-remove
                            "
                        >
                            Verwijderen
                        </button>

                    </div>

                </div>

            <?php endforeach; ?>

        </div>

        <p>
            <button
                type="button"
                class="button button-primary"
                id="ehbo-gallery-select"
            >
                Foto’s kiezen of wijzigen
            </button>
        </p>

    </div>

    <?php
}


function ehbo_save_gallery($post_id) {
    if (
        !isset($_POST['ehbo_gallery_nonce']) ||
        !wp_verify_nonce(
            sanitize_text_field(
                wp_unslash($_POST['ehbo_gallery_nonce'])
            ),
            'ehbo_save_gallery'
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

    if (wp_is_post_revision($post_id)) {
        return;
    }

    if (!current_user_can('edit_page', $post_id)) {
        return;
    }

    $raw_ids = isset($_POST['ehbo_gallery_image_ids'])
        ? sanitize_text_field(
            wp_unslash($_POST['ehbo_gallery_image_ids'])
        )
        : '';

    $image_ids = array_filter(
        array_map(
            'absint',
            explode(',', $raw_ids)
        )
    );

    $image_ids = array_values(
        array_unique($image_ids)
    );

    $image_ids = array_values(
        array_filter(
            $image_ids,
            'wp_attachment_is_image'
        )
    );

    if ($image_ids) {
        update_post_meta(
            $post_id,
            '_ehbo_gallery_image_ids',
            $image_ids
        );
    } else {
        delete_post_meta(
            $post_id,
            '_ehbo_gallery_image_ids'
        );
    }
}

add_action(
    'save_post_page',
    'ehbo_save_gallery'
);


function ehbo_gallery_admin_assets($hook) {
    if ($hook !== 'post.php') {
        return;
    }

    $post_id = isset($_GET['post'])
        ? absint($_GET['post'])
        : 0;

    if (
        !$post_id ||
        !ehbo_is_gallery_page($post_id)
    ) {
        return;
    }

    wp_enqueue_media();

    $script = '/assets/js/admin-gallery.js';
    $style  = '/assets/css/admin-gallery.css';

    wp_enqueue_script(
        'ehbo-admin-gallery',
        get_theme_file_uri($script),
        [
            'jquery',
            'jquery-ui-sortable',
            'media-editor',
        ],
        filemtime(get_theme_file_path($script)),
        true
    );

    wp_enqueue_style(
        'ehbo-admin-gallery',
        get_theme_file_uri($style),
        [],
        filemtime(get_theme_file_path($style))
    );
}

add_action(
    'admin_enqueue_scripts',
    'ehbo_gallery_admin_assets'
);


function ehbo_get_gallery_images($page_id) {
    $image_ids = get_post_meta(
        $page_id,
        '_ehbo_gallery_image_ids',
        true
    );

    if (!is_array($image_ids)) {
        return [];
    }

    $images = [];

    foreach ($image_ids as $image_id) {
        $image_id = absint($image_id);

        if (
            !$image_id ||
            !wp_attachment_is_image($image_id)
        ) {
            continue;
        }

        $url = wp_get_attachment_image_url(
            $image_id,
            'large'
        );

        if (!$url) {
            continue;
        }

        $full_url = wp_get_attachment_image_url(
            $image_id,
            'full'
        );

        $title = trim(
            get_the_title($image_id)
        );

        $caption = trim(
            wp_get_attachment_caption($image_id)
        );

        $alt = trim(
            get_post_meta(
                $image_id,
                '_wp_attachment_image_alt',
                true
            )
        );

        $images[] = [
            'id'       => $image_id,
            'url'      => $url,
            'full_url' => $full_url ?: $url,

            'title' =>
                $title ?: 'Moment uit de vereniging',

            'caption' =>
                $caption ?:
                'Een moment uit de vereniging, vastgelegd in beeld.',

            'alt' =>
                $alt ?:
                (
                    $title
                        ? $title . ' - EHBO Petrus Donders'
                        : 'Foto van EHBO Petrus Donders'
                ),
        ];
    }

    return $images;
}