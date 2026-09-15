jQuery(($) => {
    const editor = $('#ehbo-gallery-editor');

    if (!editor.length || !window.wp?.media) {
        return;
    }

    const input = $('#ehbo_gallery_image_ids');
    const preview = $('#ehbo-gallery-preview');
    const selectButton = $('#ehbo-gallery-select');

    let mediaFrame;

    const syncIds = () => {
        const ids = preview
            .find('.ehbo-gallery-item')
            .map(function () {
                return $(this).data('id');
            })
            .get();

        input.val(ids.join(','));
    };

    preview.sortable({
        items: '.ehbo-gallery-item',
        handle: '.ehbo-gallery-drag',
        update: syncIds,
    });

    editor.on(
        'click',
        '.ehbo-gallery-remove',
        function () {
            $(this)
                .closest('.ehbo-gallery-item')
                .remove();

            syncIds();
        }
    );

    selectButton.on('click', (event) => {
        event.preventDefault();

        if (!mediaFrame) {
            mediaFrame = wp.media({
                title: 'Kies galerijfoto’s',

                button: {
                    text: 'Gebruik deze foto’s',
                },

                library: {
                    type: 'image',
                },

                multiple: true,
            });

            mediaFrame.on('open', () => {
                const selection = mediaFrame
                    .state()
                    .get('selection');

                selection.reset();

                const ids = input
                    .val()
                    .split(',')
                    .map(Number)
                    .filter(Boolean);

                ids.forEach((id) => {
                    const attachment =
                        wp.media.attachment(id);

                    attachment.fetch();
                    selection.add(attachment);
                });
            });

            mediaFrame.on('select', () => {
                const selection = mediaFrame
                    .state()
                    .get('selection');

                preview.empty();

                selection.each((attachment) => {
                    const data = attachment.toJSON();

                    const thumbnail =
                        data.sizes?.thumbnail?.url ||
                        data.icon ||
                        data.url;

                    const title =
                        data.title ||
                        data.filename ||
                        'Afbeelding';

                    const item = $('<div>', {
                        class: 'ehbo-gallery-item',
                        'data-id': data.id,
                    });

                    $('<span>', {
                        class: 'ehbo-gallery-drag',
                        'aria-hidden': 'true',
                        text: '⋮⋮',
                    }).appendTo(item);

                    $('<img>', {
                        src: thumbnail,
                        alt: '',
                    }).appendTo(item);

                    const meta = $('<div>', {
                        class: 'ehbo-gallery-item__meta',
                    });

                    $('<strong>')
                        .text(title)
                        .appendTo(meta);

                    $('<button>', {
                        type: 'button',
                        class:
                            'button-link-delete ' +
                            'ehbo-gallery-remove',
                        text: 'Verwijderen',
                    }).appendTo(meta);

                    meta.appendTo(item);
                    item.appendTo(preview);
                });

                syncIds();
            });
        }

        mediaFrame.open();
    });
});