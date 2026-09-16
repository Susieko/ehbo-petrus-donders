<?php
/**
 * Title: Samen leren
 * Slug: ehbo-petrus-donders/about-community
 * Categories: ehbo-petrus-donders
 * Description: Verenigingssectie over oefenen, leren en praktijkervaring.
 * Inserter: yes
 */

$community_image = get_theme_file_uri(
    '/assets/images/gallery-geslaagden.jpg'
);
?>

<!-- wp:group {"tagName":"section","className":"about-community page-section","layout":{"type":"default"}} -->
<section class="wp-block-group about-community page-section">

    <!-- wp:group {"className":"container about-community__inner","layout":{"type":"default"}} -->
    <div class="wp-block-group container about-community__inner">

        <!-- wp:group {"className":"about-community__content reveal","layout":{"type":"default"}} -->
        <div class="wp-block-group about-community__content reveal">

            <!-- wp:paragraph {"className":"section-eyebrow"} -->
            <p class="section-eyebrow">
                Vereniging
            </p>
            <!-- /wp:paragraph -->

            <!-- wp:heading -->
            <h2 class="wp-block-heading">
                Meer dan alleen een cursus volgen.
            </h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"className":"about-community__lead"} -->
            <p class="about-community__lead">
                Een EHBO-diploma is een begin. Vaardigheden
                blijven betrouwbaar wanneer je ze blijft
                oefenen en gebruiken.
            </p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"className":"about-community__body"} -->
            <p class="about-community__body">
                Binnen Petrus Donders ontmoeten cursisten,
                leden, instructeurs en vrijwilligers elkaar
                tijdens lessen, oefenmomenten en activiteiten.
                Zo blijft eerste hulp niet alleen theorie.
            </p>
            <!-- /wp:paragraph -->


            <!-- wp:group {"className":"about-community__points","layout":{"type":"default"}} -->
            <div class="wp-block-group about-community__points">

                <!-- wp:paragraph {"className":"about-community__point"} -->
                <p class="about-community__point">
                    Regelmatige les- en oefenavonden
                </p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"className":"about-community__point"} -->
                <p class="about-community__point">
                    Praktijkervaring op evenementen
                </p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"className":"about-community__point"} -->
                <p class="about-community__point">
                    Hercertificering en bijscholing
                </p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"className":"about-community__point"} -->
                <p class="about-community__point">
                    Samen kennis onderhouden
                </p>
                <!-- /wp:paragraph -->

            </div>
            <!-- /wp:group -->

        </div>
        <!-- /wp:group -->


        <!-- wp:group {"className":"about-community__visual reveal-image","layout":{"type":"default"}} -->
        <div class="wp-block-group about-community__visual reveal-image">

            <!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
            <figure class="wp-block-image size-full">
                <img
                    src="<?php echo esc_url($community_image); ?>"
                    alt="Geslaagde deelnemers bij Petrus Donders"
                >
            </figure>
            <!-- /wp:image -->


            <!-- wp:group {"className":"about-community__badge","layout":{"type":"default"}} -->
            <div class="wp-block-group about-community__badge">

                <!-- wp:paragraph {"className":"about-community__badge-label"} -->
                <p class="about-community__badge-label">
                    Samen leren
                </p>
                <!-- /wp:paragraph -->

                <!-- wp:heading {"level":3,"className":"about-community__badge-title"} -->
                <h3 class="wp-block-heading about-community__badge-title">
                    Samen groeien.
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