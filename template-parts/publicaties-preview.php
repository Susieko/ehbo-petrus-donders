<?php
$publication_types = [
    'nieuwsbrief' => [
        'label' => 'Nieuwsbrief',
        'fallback_description' =>
            'Lees het laatste nieuws en de nieuwste ontwikkelingen binnen onze vereniging.',
    ],

    'dondersteentje' => [
        'label' => 'Het Dondersteentje',
        'fallback_description' =>
            'Ons verenigingsblad met verhalen, informatie en nieuws voor onze leden.',
    ],
];

$latest_publications = [];

$archive_url = home_url('/publicaties/');

foreach ($publication_types as $type => $settings) {

    $publication_ids = get_posts([
        'post_type'      => 'ehbo_publicatie',
        'post_status'    => 'publish',
        'posts_per_page' => 1,
        'orderby'        => 'date',
        'order'          => 'DESC',
        'fields'         => 'ids',
        'meta_query'     => [
            [
                'key'   => '_ehbo_publication_type',
                'value' => $type,
            ],
        ],
    ]);

    $publication_id = !empty($publication_ids)
        ? (int) $publication_ids[0]
        : 0;

    $pdf_id = $publication_id
        ? (int) get_post_meta(
            $publication_id,
            '_ehbo_publication_pdf_id',
            true
        )
        : 0;

    $description = $publication_id
        ? get_post_meta(
            $publication_id,
            '_ehbo_publication_description',
            true
        )
        : '';

    $latest_publications[$type] = [
        'id'          => $publication_id,
        'title'       => $publication_id
            ? get_the_title($publication_id)
            : 'Nog niet beschikbaar',
        'date'        => $publication_id
            ? get_the_date('j F Y', $publication_id)
            : '',
        'description' => $description
            ?: $settings['fallback_description'],
        'pdf_url'     => $pdf_id
            ? wp_get_attachment_url($pdf_id)
            : '',
    ];
}
?>

<section class="publications-preview reveal-section" id="publicaties">

    <div class="container">

        <header class="publications-preview__header">

            <div>
                <span class="section-eyebrow">
                    Nieuws en verhalen
                </span>

                <h2>Onze nieuwste publicaties</h2>
            </div>

<div class="publications-preview__intro">

    <p>
        Blijf op de hoogte van het laatste verenigingsnieuws,
        activiteiten en ontwikkelingen bij Petrus Donders.
    </p>

    <a
        class="section-button publications-preview__archive-link"
        href="<?php echo esc_url($archive_url); ?>"
    >
        Bekijk alle publicaties
        <span aria-hidden="true">→</span>
    </a>

</div>

        </header>


        <div class="publications-preview__grid">

            <?php foreach ($publication_types as $type => $settings) : ?>

                <?php $publication = $latest_publications[$type]; ?>

                <article class="
                    publications-preview__card
                    publications-preview__card--<?php echo esc_attr($type); ?>
                ">

                    <div class="publications-preview__card-top">

                        <span
                            class="publications-preview__icon"
                            aria-hidden="true"
                        >
                            <svg
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="1.8"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            >
                                <path d="M6 2h8l4 4v16H6z"/>
                                <path d="M14 2v5h5"/>
                                <path d="M9 12h6"/>
                                <path d="M9 16h6"/>
                            </svg>
                        </span>

                        <span class="publications-preview__type">
                            <?php echo esc_html($settings['label']); ?>
                        </span>

                    </div>


                    <?php if ($publication['id']) : ?>

                        <p class="publications-preview__date">
                            Nieuwste editie ·
                            <?php echo esc_html($publication['date']); ?>
                        </p>

                        <h3>
                            <?php echo esc_html($publication['title']); ?>
                        </h3>

                        <p class="publications-preview__description">
                            <?php echo esc_html(
                                $publication['description']
                            ); ?>
                        </p>

                        <?php if ($publication['pdf_url']) : ?>

                            <a
                                class="publications-preview__link"
                                href="<?php echo esc_url(
                                    $publication['pdf_url']
                                ); ?>"
                                target="_blank"
                                rel="noopener noreferrer"
                            >
                                Open de PDF
                                <span aria-hidden="true">↗</span>
                            </a>

                        <?php else : ?>

                            <span class="publications-preview__unavailable">
                                PDF nog niet toegevoegd
                            </span>

                        <?php endif; ?>

                    <?php else : ?>

                        <h3>Nog niet beschikbaar</h3>

                        <p class="publications-preview__description">
                            <?php echo esc_html(
                                $settings['fallback_description']
                            ); ?>
                        </p>

                        <span class="publications-preview__unavailable">
                            Binnenkort beschikbaar
                        </span>

                    <?php endif; ?>

                </article>

            <?php endforeach; ?>

        </div>

    </div>

</section>