<?php
/*
Template Name: Publicaties
Template Post Type: page
*/

get_header();


/* ========================================
   PUBLICATIES OPHALEN
======================================== */

$publication_types = [
    'nieuwsbrief'    => 'Nieuwsbrief',
    'dondersteentje' => 'Het Dondersteentje',
];


$publication_ids = get_posts([
    'post_type'      => 'ehbo_publicatie',
    'post_status'    => 'publish',
    'posts_per_page' => -1,
    'orderby'        => 'date',
    'order'          => 'DESC',
    'fields'         => 'ids',
]);


$all_publications  = [];
$archive_by_year   = [];


foreach ($publication_ids as $publication_id) {

    $type = get_post_meta(
        $publication_id,
        '_ehbo_publication_type',
        true
    );

    if (!isset($publication_types[$type])) {
        continue;
    }


    $pdf_id = (int) get_post_meta(
        $publication_id,
        '_ehbo_publication_pdf_id',
        true
    );


    $description = get_post_meta(
        $publication_id,
        '_ehbo_publication_description',
        true
    );


    $pdf_url = $pdf_id
        ? wp_get_attachment_url($pdf_id)
        : '';


    /*
     * WordPress kan bij PDF's automatisch
     * een preview-afbeelding genereren.
     */
    $preview_url = $pdf_id
        ? wp_get_attachment_image_url(
            $pdf_id,
            'large'
        )
        : '';


    $year = get_the_date(
        'Y',
        $publication_id
    );


    $publication = [
        'id'          => $publication_id,
        'type'        => $type,
        'type_label'  => $publication_types[$type],
        'title'       => get_the_title($publication_id),

        'date'        => get_the_date(
            'j F Y',
            $publication_id
        ),

        'date_short'  => get_the_date(
            'j M Y',
            $publication_id
        ),

        'date_iso'    => get_the_date(
            'c',
            $publication_id
        ),

        'year'        => $year,

        'description' => $description,

        'pdf_url'     => $pdf_url,

        'preview_url' => $preview_url,
    ];


    $all_publications[] =
        $publication;


    $archive_by_year[$year][] =
        $publication;
}


krsort(
    $archive_by_year,
    SORT_NUMERIC
);


$latest_publication =
    $all_publications[0] ?? null;


$total_newsletters = 0;
$total_dondersteentjes = 0;


foreach ($all_publications as $publication) {

    if ($publication['type'] === 'nieuwsbrief') {
        $total_newsletters++;
    }

    if ($publication['type'] === 'dondersteentje') {
        $total_dondersteentjes++;
    }
}
?>


<main
    id="main-content"
    class="inner-page publications-page"
>


    <!-- ========================================
         HERO
    ========================================= -->

    <section class="page-hero publications-hero">

        <div class="container page-hero__inner">


            <div class="page-hero__content reveal">

                <span class="section-eyebrow">
                    Publicaties
                </span>

                <h1>
                    Verhalen uit
                    <span>de vereniging.</span>
                </h1>

                <p class="page-hero__lead">
                    Nieuws, activiteiten en verhalen uit
                    EHBO-vereniging Petrus Donders.
                    Lees de nieuwste uitgave of blader terug
                    door ons publicatiearchief.
                </p>


                <div class="page-hero__actions">

                    <?php if ($latest_publication) : ?>

                        <a
                            class="page-button page-button--primary"
                            href="#nieuwste-uitgave"
                        >
                            Lees nieuwste uitgave
                            <span aria-hidden="true">↓</span>
                        </a>

                    <?php endif; ?>


                    <a
                        class="page-text-link"
                        href="#publicatiearchief"
                    >
                        Bekijk het archief
                        <span aria-hidden="true">→</span>
                    </a>

                </div>

            </div>



            <!-- HERO PUBLICATION STACK -->
            <div class="page-hero__visual">

                <div class="publications-stack reveal">


                    <?php

                    $hero_publications =
                        array_slice(
                            $all_publications,
                            0,
                            3
                        );

                    ?>


                    <?php if ($hero_publications) : ?>


                        <?php foreach (
                            array_reverse(
                                $hero_publications
                            )
                            as $index => $publication
                        ) : ?>


                            <div
                                class="
                                    publications-stack__item
                                    publications-stack__item--<?php
                                    echo esc_attr(
                                        $publication['type']
                                    );
                                    ?>
                                "
                            >


                                <?php if (
                                    $publication['preview_url']
                                ) : ?>

                                    <img
                                        src="<?php echo esc_url(
                                            $publication['preview_url']
                                        ); ?>"
                                        alt=""
                                    >

                                <?php else : ?>

                                    <div class="publication-preview-fallback">

                                        <span>
                                            Petrus Donders
                                        </span>

                                        <strong>
                                            <?php echo esc_html(
                                                $publication[
                                                    'type_label'
                                                ]
                                            ); ?>
                                        </strong>

                                        <small>
                                            <?php echo esc_html(
                                                $publication[
                                                    'date_short'
                                                ]
                                            ); ?>
                                        </small>

                                    </div>

                                <?php endif; ?>


                            </div>


                        <?php endforeach; ?>


                    <?php else : ?>


                        <div
                            class="
                                publications-stack__item
                                publications-stack__item--placeholder
                            "
                        >

                            <div class="publication-preview-fallback">

                                <span>
                                    Petrus Donders
                                </span>

                                <strong>
                                    Publicaties
                                </strong>

                                <small>
                                    Sinds 1929
                                </small>

                            </div>

                        </div>


                    <?php endif; ?>


                    <div class="publications-stack__label">

                        <span>
                            Uit het archief
                        </span>

                        <strong>
                            Nieuws om terug te lezen.
                        </strong>

                    </div>


                </div>

            </div>

        </div>

    </section>



    <!-- ========================================
         LATEST PUBLICATION
    ========================================= -->

    <?php if ($latest_publication) : ?>

        <section
            class="publication-feature page-section"
            id="nieuwste-uitgave"
        >

            <div class="container publication-feature__inner">


                <!-- PREVIEW -->
                <div class="publication-feature__preview reveal-image">


                    <?php if (
                        $latest_publication['preview_url']
                    ) : ?>

                        <img
                            src="<?php echo esc_url(
                                $latest_publication['preview_url']
                            ); ?>"
                            alt="Voorbeeld van <?php
                            echo esc_attr(
                                $latest_publication['title']
                            );
                            ?>"
                            loading="lazy"
                        >

                    <?php else : ?>

                        <div
                            class="
                                publication-feature__fallback
                                publication-feature__fallback--<?php
                                echo esc_attr(
                                    $latest_publication['type']
                                );
                                ?>
                            "
                        >

                            <span>
                                Petrus Donders
                            </span>

                            <strong>
                                <?php echo esc_html(
                                    $latest_publication[
                                        'title'
                                    ]
                                ); ?>
                            </strong>

                            <small>
                                <?php echo esc_html(
                                    $latest_publication[
                                        'date_short'
                                    ]
                                ); ?>
                            </small>

                        </div>

                    <?php endif; ?>


                    <div class="publication-feature__paper-back">
                    </div>


                </div>



                <!-- CONTENT -->
                <div class="publication-feature__content reveal">

                    <span class="section-eyebrow">
                        Nieuwste uitgave
                    </span>


                    <div class="publication-feature__meta">

                        <span>
                            <?php echo esc_html(
                                $latest_publication[
                                    'type_label'
                                ]
                            ); ?>
                        </span>

                        <time
                            datetime="<?php echo esc_attr(
                                $latest_publication[
                                    'date_iso'
                                ]
                            ); ?>"
                        >
                            <?php echo esc_html(
                                $latest_publication[
                                    'date'
                                ]
                            ); ?>
                        </time>

                    </div>


                    <h2>
                        <?php echo esc_html(
                            $latest_publication['title']
                        ); ?>
                    </h2>


                    <?php if (
                        $latest_publication['description']
                    ) : ?>

                        <p class="publication-feature__intro">

                            <?php echo esc_html(
                                $latest_publication[
                                    'description'
                                ]
                            ); ?>

                        </p>

                    <?php else : ?>

                        <p class="publication-feature__intro">
                            De nieuwste publicatie van
                            EHBO-vereniging Petrus Donders.
                            Open de uitgave en lees het laatste
                            nieuws uit de vereniging.
                        </p>

                    <?php endif; ?>


                    <div class="publication-feature__details">

                        <div>

                            <span>
                                Type
                            </span>

                            <strong>
                                <?php echo esc_html(
                                    $latest_publication[
                                        'type_label'
                                    ]
                                ); ?>
                            </strong>

                        </div>


                        <div>

                            <span>
                                Gepubliceerd
                            </span>

                            <strong>
                                <?php echo esc_html(
                                    $latest_publication[
                                        'date'
                                    ]
                                ); ?>
                            </strong>

                        </div>

                    </div>


                    <?php if (
                        $latest_publication['pdf_url']
                    ) : ?>

                        <a
                            class="page-button page-button--primary"
                            href="<?php echo esc_url(
                                $latest_publication[
                                    'pdf_url'
                                ]
                            ); ?>"
                            target="_blank"
                            rel="noopener noreferrer"
                        >
                            Lees deze uitgave
                            <span aria-hidden="true">↗</span>
                        </a>

                    <?php endif; ?>

                </div>

            </div>

        </section>

    <?php endif; ?>



    <!-- ========================================
         ARCHIVE INTRO
    ========================================= -->

    <section
        class="publication-archive page-section page-section--soft"
        id="publicatiearchief"
    >

        <div class="container">


            <div class="publication-archive__header reveal">

                <div>

                    <span class="section-eyebrow">
                        Publicatiearchief
                    </span>

                    <h2>
                        Blader terug
                        door de jaren.
                    </h2>

                </div>


                <div class="publication-archive__intro">

                    <p>
                        Bekijk eerdere nieuwsbrieven en
                        edities van Het Dondersteentje.
                    </p>


                    <div class="publication-archive__types">

                        <span class="publication-type-label">

                            <i
                                class="
                                    publication-type-label__dot
                                    publication-type-label__dot--blue
                                "
                            ></i>

                            Nieuwsbrief

                            <b>
                                <?php echo esc_html(
                                    $total_newsletters
                                ); ?>
                            </b>

                        </span>


                        <span class="publication-type-label">

                            <i
                                class="
                                    publication-type-label__dot
                                    publication-type-label__dot--yellow
                                "
                            ></i>

                            Het Dondersteentje

                            <b>
                                <?php echo esc_html(
                                    $total_dondersteentjes
                                ); ?>
                            </b>

                        </span>

                    </div>

                </div>

            </div>



            <!-- ========================================
                 YEARS
            ========================================= -->

            <?php if ($archive_by_year) : ?>


                <div class="publication-archive__years">


                    <?php foreach (
                        $archive_by_year
                        as $year => $publications
                    ) : ?>


                        <section
                            class="publication-year"
                            id="publicaties-<?php
                            echo esc_attr($year);
                            ?>"
                        >


                            <!-- YEAR HEADER -->
                            <div class="publication-year__heading reveal">

                                <h3>
                                    <?php echo esc_html($year); ?>
                                </h3>

                                <span>

                                    <?php

                                    $count =
                                        count($publications);

                                    echo esc_html($count);

                                    ?>

                                    <?php
                                    echo $count === 1
                                        ? 'uitgave'
                                        : 'uitgaven';
                                    ?>

                                </span>

                            </div>



                            <!-- PUBLICATIONS GRID -->
                            <div class="publication-grid">


                                <?php foreach (
                                    $publications
                                    as $publication
                                ) : ?>


                                    <article
                                        class="
                                            publication-card
                                            publication-card--<?php
                                            echo esc_attr(
                                                $publication['type']
                                            );
                                            ?>
                                            reveal
                                        "
                                    >


                                        <!-- IMAGE -->
                                        <a
                                            class="publication-card__visual"
                                            href="<?php echo esc_url(
                                                $publication['pdf_url']
                                            ); ?>"
                                            <?php if (
                                                $publication['pdf_url']
                                            ) : ?>
                                                target="_blank"
                                                rel="noopener noreferrer"
                                            <?php endif; ?>
                                        >


                                            <?php if (
                                                $publication[
                                                    'preview_url'
                                                ]
                                            ) : ?>

                                                <img
                                                    src="<?php
                                                    echo esc_url(
                                                        $publication[
                                                            'preview_url'
                                                        ]
                                                    );
                                                    ?>"
                                                    alt=""
                                                    loading="lazy"
                                                >

                                            <?php else : ?>

                                                <div
                                                    class="
                                                        publication-card__fallback
                                                    "
                                                >

                                                    <span>
                                                        Petrus Donders
                                                    </span>

                                                    <strong>
                                                        <?php
                                                        echo esc_html(
                                                            $publication[
                                                                'type_label'
                                                            ]
                                                        );
                                                        ?>
                                                    </strong>

                                                    <small>
                                                        <?php
                                                        echo esc_html(
                                                            $publication[
                                                                'date_short'
                                                            ]
                                                        );
                                                        ?>
                                                    </small>

                                                </div>

                                            <?php endif; ?>


                                            <span
                                                class="
                                                    publication-card__type
                                                "
                                            >
                                                <?php
                                                echo esc_html(
                                                    $publication[
                                                        'type_label'
                                                    ]
                                                );
                                                ?>
                                            </span>


                                        </a>



                                        <!-- CONTENT -->
                                        <div
                                            class="
                                                publication-card__content
                                            "
                                        >

                                            <time
                                                datetime="<?php
                                                echo esc_attr(
                                                    $publication[
                                                        'date_iso'
                                                    ]
                                                );
                                                ?>"
                                            >
                                                <?php
                                                echo esc_html(
                                                    $publication[
                                                        'date'
                                                    ]
                                                );
                                                ?>
                                            </time>


                                            <h4>
                                                <?php
                                                echo esc_html(
                                                    $publication[
                                                        'title'
                                                    ]
                                                );
                                                ?>
                                            </h4>


                                            <?php if (
                                                $publication[
                                                    'description'
                                                ]
                                            ) : ?>

                                                <p>
                                                    <?php
                                                    echo esc_html(
                                                        $publication[
                                                            'description'
                                                        ]
                                                    );
                                                    ?>
                                                </p>

                                            <?php endif; ?>


                                            <?php if (
                                                $publication[
                                                    'pdf_url'
                                                ]
                                            ) : ?>

                                                <a
                                                    class="
                                                        publication-card__link
                                                    "
                                                    href="<?php
                                                    echo esc_url(
                                                        $publication[
                                                            'pdf_url'
                                                        ]
                                                    );
                                                    ?>"
                                                    target="_blank"
                                                    rel="noopener noreferrer"
                                                >
                                                    Lees uitgave
                                                    <span
                                                        aria-hidden="true"
                                                    >
                                                        ↗
                                                    </span>
                                                </a>

                                            <?php else : ?>

                                                <span
                                                    class="
                                                        publication-card__missing
                                                    "
                                                >
                                                    PDF niet beschikbaar
                                                </span>

                                            <?php endif; ?>


                                        </div>

                                    </article>


                                <?php endforeach; ?>


                            </div>

                        </section>


                    <?php endforeach; ?>


                </div>


            <?php else : ?>


                <div class="publication-archive__empty">

                    <span aria-hidden="true">
                        +
                    </span>

                    <h3>
                        Het archief wordt gevuld.
                    </h3>

                    <p>
                        Zodra een nieuwe publicatie wordt
                        toegevoegd verschijnt deze hier automatisch.
                    </p>

                </div>


            <?php endif; ?>


        </div>

    </section>



    <!-- ========================================
         SMALL INFO STRIP
    ========================================= -->

    <section class="publication-about">

        <div class="container publication-about__inner reveal-stagger">


            <div>

                <span class="section-eyebrow">
                    Nieuwsbrief
                </span>

                <h3>
                    Kort, actueel
                    en praktisch.
                </h3>

                <p>
                    Updates over activiteiten,
                    opleidingen en ontwikkelingen
                    binnen de vereniging.
                </p>

            </div>


            <div>

                <span class="section-eyebrow">
                    Het Dondersteentje
                </span>

                <h3>
                    Verhalen vanuit
                    de vereniging.
                </h3>

                <p>
                    Verenigingsnieuws, ervaringen
                    en informatie verzameld in onze
                    eigen periodieke uitgave.
                </p>

            </div>


        </div>

    </section>



    <!-- ========================================
         FINAL CTA
    ========================================= -->

    <section class="publications-next">

        <div class="container">

            <div class="publications-next__card reveal">


                <div>

                    <span>
                        Meer weten?
                    </span>

                    <h2>
                        Blijf betrokken bij
                        Petrus Donders.
                    </h2>

                    <p>
                        Heb je een vraag over een publicatie,
                        onze vereniging of een van onze activiteiten?
                        We helpen je graag verder.
                    </p>

                </div>


                <a
                    class="page-button page-button--primary"
                    href="<?php echo esc_url(
                        home_url('/contact/')
                    ); ?>"
                >
                    Neem contact op
                    <span aria-hidden="true">→</span>
                </a>


            </div>

        </div>

    </section>


</main>

<?php get_footer(); ?>