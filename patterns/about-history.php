<?php
/**
 * Title: Geschiedenis
 * Slug: ehbo-petrus-donders/about-history
 * Categories: ehbo-petrus-donders
 * Description: Geschiedenis van de vereniging met afbeelding en tijdlijn.
 * Inserter: yes
 */

$history_image = get_theme_file_uri(
    '/assets/images/gallery-jubilaris.jpg'
);
?>

<!-- wp:group {"tagName":"section","anchor":"geschiedenis","className":"about-history page-section page-section--soft","layout":{"type":"default"}} -->
<section
    id="geschiedenis"
    class="wp-block-group about-history page-section page-section--soft"
>

    <!-- wp:group {"className":"container about-history__inner","layout":{"type":"default"}} -->
    <div class="wp-block-group container about-history__inner">

        <!-- wp:group {"className":"about-history__visual reveal-image","layout":{"type":"default"}} -->
        <div class="wp-block-group about-history__visual reveal-image">

            <!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"about-history__image"} -->
            <figure class="wp-block-image size-full about-history__image">
                <img
                    src="<?php echo esc_url($history_image); ?>"
                    alt="Leden en jubilarissen van Petrus Donders"
                >
            </figure>
            <!-- /wp:image -->


            <!-- wp:group {"className":"about-history__date","layout":{"type":"default"}} -->
            <div class="wp-block-group about-history__date">

                <!-- wp:paragraph {"className":"about-history__date-label"} -->
                <p class="about-history__date-label">
                    Opgericht
                </p>
                <!-- /wp:paragraph -->

                <!-- wp:heading {"level":3,"className":"about-history__date-day"} -->
                <h3 class="wp-block-heading about-history__date-day">
                    23.03
                </h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"className":"about-history__date-year"} -->
                <p class="about-history__date-year">
                    1929
                </p>
                <!-- /wp:paragraph -->

            </div>
            <!-- /wp:group -->

        </div>
        <!-- /wp:group -->


        <!-- wp:group {"className":"about-history__content reveal","layout":{"type":"default"}} -->
        <div class="wp-block-group about-history__content reveal">

            <!-- wp:paragraph {"className":"section-eyebrow"} -->
            <p class="section-eyebrow">
                Geschiedenis
            </p>
            <!-- /wp:paragraph -->

            <!-- wp:heading -->
            <h2 class="wp-block-heading">
                Bijna een eeuw eerste hulp in Tilburg.
            </h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"className":"about-history__intro"} -->
            <p class="about-history__intro">
                Petrus Donders werd op 23 maart 1929 opgericht.
                Sindsdien is eerste hulp voortdurend veranderd,
                maar het doel van de vereniging is hetzelfde
                gebleven: mensen voorbereiden om te kunnen
                helpen wanneer het nodig is.
            </p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph -->
            <p>
                Richtlijnen, opleidingen en hulpmiddelen zijn
                in de loop der jaren veranderd. De vereniging
                beweegt daarin mee door kennis actueel te houden,
                regelmatig te oefenen en leden te blijven scholen.
            </p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph -->
            <p>
                Zo combineren we een lange verenigingstraditie
                met moderne eerstehulpverlening.
            </p>
            <!-- /wp:paragraph -->


            <!-- wp:group {"className":"about-history__line","layout":{"type":"default"}} -->
            <div class="wp-block-group about-history__line">

                <!-- wp:group {"className":"about-history__moment","layout":{"type":"default"}} -->
                <div class="wp-block-group about-history__moment">

                    <!-- wp:paragraph {"className":"about-history__moment-label"} -->
                    <p class="about-history__moment-label">
                        1929
                    </p>
                    <!-- /wp:paragraph -->

                    <!-- wp:heading {"level":3,"className":"about-history__moment-title"} -->
                    <h3 class="wp-block-heading about-history__moment-title">
                        Oprichting
                    </h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph -->
                    <p>
                        De start van EHBO-vereniging
                        Petrus Donders in Tilburg.
                    </p>
                    <!-- /wp:paragraph -->

                </div>
                <!-- /wp:group -->


                <!-- wp:html -->
                <div
                    class="about-history__connector"
                    aria-hidden="true"
                ></div>
                <!-- /wp:html -->


                <!-- wp:group {"className":"about-history__moment","layout":{"type":"default"}} -->
                <div class="wp-block-group about-history__moment">

                    <!-- wp:paragraph {"className":"about-history__moment-label"} -->
                    <p class="about-history__moment-label">
                        Vandaag
                    </p>
                    <!-- /wp:paragraph -->

                    <!-- wp:heading {"level":3,"className":"about-history__moment-title"} -->
                    <h3 class="wp-block-heading about-history__moment-title">
                        Nog altijd actief
                    </h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph -->
                    <p>
                        Opleidingen, oefenavonden,
                        hercertificering en hulpverlening.
                    </p>
                    <!-- /wp:paragraph -->

                </div>
                <!-- /wp:group -->

            </div>
            <!-- /wp:group -->

        </div>
        <!-- /wp:group -->

    </div>
    <!-- /wp:group -->

</section>
<!-- /wp:group -->