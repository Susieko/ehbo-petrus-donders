<?php
/**
 * Title: Vrijwilliger en lid worden
 * Slug: ehbo-petrus-donders/about-volunteer
 * Categories: ehbo-petrus-donders
 * Description: Donkere oproepsectie voor lidmaatschap en vrijwilligerswerk.
 * Inserter: yes
 */

$volunteer_image = get_theme_file_uri(
    '/assets/images/gallery-oefenen.jpg'
);
?>

<!-- wp:group {"tagName":"section","anchor":"vrijwilliger","className":"about-volunteer page-section","layout":{"type":"default"}} -->
<section
    id="vrijwilliger"
    class="wp-block-group about-volunteer page-section"
>

    <!-- wp:group {"className":"container about-volunteer__inner","layout":{"type":"default"}} -->
    <div class="wp-block-group container about-volunteer__inner">

        <!-- wp:group {"className":"about-volunteer__content reveal","layout":{"type":"default"}} -->
        <div class="wp-block-group about-volunteer__content reveal">

            <!-- wp:paragraph {"className":"section-eyebrow"} -->
            <p class="section-eyebrow">
                Zelf betrokken worden?
            </p>
            <!-- /wp:paragraph -->

            <!-- wp:heading -->
            <h2 class="wp-block-heading">
                Jouw EHBO-kennis kan ergens écht nodig zijn.
            </h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"className":"about-volunteer__body"} -->
            <p class="about-volunteer__body">
                Een vereniging leeft door de mensen die zich
                ervoor inzetten. Als lid of vrijwilliger kun je
                jouw kennis blijven ontwikkelen, ervaring opdoen
                en samen met anderen bijdragen aan veilige
                evenementen.
            </p>
            <!-- /wp:paragraph -->


            <!-- wp:group {"className":"about-volunteer__actions","layout":{"type":"default"}} -->
            <div class="wp-block-group about-volunteer__actions">

                <!-- wp:paragraph {"className":"about-volunteer__action"} -->
                <p class="about-volunteer__action">
                    <a
                        class="page-button page-button--yellow"
                        href="/inschrijven/?type=lidmaatschap"
                    >
                        Interesse in lidmaatschap
                        <span aria-hidden="true">→</span>
                    </a>
                </p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"className":"about-volunteer__action"} -->
                <p class="about-volunteer__action">
                    <a
                        class="page-text-link page-text-link--light"
                        href="/contact/?onderwerp=vrijwilliger"
                    >
                        Vrijwilliger worden
                        <span aria-hidden="true">→</span>
                    </a>
                </p>
                <!-- /wp:paragraph -->

            </div>
            <!-- /wp:group -->

        </div>
        <!-- /wp:group -->


        <!-- wp:group {"className":"about-volunteer__visual reveal-image","layout":{"type":"default"}} -->
        <div class="wp-block-group about-volunteer__visual reveal-image">

            <!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
            <figure class="wp-block-image size-full">
                <img
                    src="<?php echo esc_url($volunteer_image); ?>"
                    alt="EHBO'ers oefenen samen"
                >
            </figure>
            <!-- /wp:image -->


            <!-- wp:group {"className":"about-volunteer__badge","layout":{"type":"default"}} -->
            <div class="wp-block-group about-volunteer__badge">

                <!-- wp:paragraph {"className":"about-volunteer__badge-label"} -->
                <p class="about-volunteer__badge-label">
                    Samen leren
                </p>
                <!-- /wp:paragraph -->

                <!-- wp:heading {"level":3,"className":"about-volunteer__badge-title"} -->
                <h3 class="wp-block-heading about-volunteer__badge-title">
                    Samen helpen.
                </h3>
                <!-- /wp:heading -->

            </div>
            <!-- /wp:group -->

        </div>
        <!-- /wp:group -->

    </div>
    <!-- /wp:group -->

</section>
<!-- /wp:group -->