<?php
/**
 * Title: Over ons hero
 * Slug: ehbo-petrus-donders/about-hero
 * Categories: ehbo-petrus-donders
 * Description: Hero voor de Over ons-pagina met tekst, acties en afbeelding.
 * Inserter: yes
 */

$hero_image = get_theme_file_uri(
    '/assets/images/hero-team.png'
);
?>

<!-- wp:group {"tagName":"section","className":"page-hero about-page__hero","layout":{"type":"default"}} -->
<section class="wp-block-group page-hero about-page__hero">

    <!-- wp:group {"className":"container page-hero__inner","layout":{"type":"default"}} -->
    <div class="wp-block-group container page-hero__inner">

        <!-- wp:group {"className":"page-hero__content reveal","layout":{"type":"default"}} -->
        <div class="wp-block-group page-hero__content reveal">

            <!-- wp:paragraph {"className":"section-eyebrow"} -->
            <p class="section-eyebrow">
                Over Petrus Donders
            </p>
            <!-- /wp:paragraph -->

            <!-- wp:heading {"level":1} -->
            <h1 class="wp-block-heading">
                Al sinds 1929
                <span>klaar om te helpen.</span>
            </h1>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"className":"page-hero__lead"} -->
            <p class="page-hero__lead">
                EHBO-vereniging Petrus Donders zet zich al bijna
                een eeuw in voor eerste hulp in Tilburg en omgeving.
                Met opleidingen, oefenavonden en evenementenhulpverlening
                zorgen we dat mensen weten wat ze moeten doen wanneer
                het erop aankomt.
            </p>
            <!-- /wp:paragraph -->


            <!-- wp:group {"className":"page-hero__actions","layout":{"type":"default"}} -->
            <div class="wp-block-group page-hero__actions">

                <!-- wp:paragraph {"className":"page-hero__action"} -->
                <p class="page-hero__action">
                    <a
                        class="page-button page-button--primary"
                        href="#onze-vereniging"
                    >
                        Ontdek onze vereniging
                        <span aria-hidden="true">↓</span>
                    </a>
                </p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"className":"page-hero__action"} -->
                <p class="page-hero__action">
                    <a
                        class="page-text-link"
                        href="/contact/"
                    >
                        Neem contact op
                        <span aria-hidden="true">→</span>
                    </a>
                </p>
                <!-- /wp:paragraph -->

            </div>
            <!-- /wp:group -->

        </div>
        <!-- /wp:group -->


        <!-- wp:group {"className":"page-hero__visual","layout":{"type":"default"}} -->
        <div class="wp-block-group page-hero__visual">

            <!-- wp:group {"className":"about-hero-image reveal-image","layout":{"type":"default"}} -->
            <div class="wp-block-group about-hero-image reveal-image">

                <!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image size-full">
                    <img
                        src="<?php echo esc_url($hero_image); ?>"
                        alt="Vrijwilligers van EHBO Petrus Donders"
                    >
                </figure>
                <!-- /wp:image -->


                <!-- wp:html -->
                <div
                    class="about-hero-image__dots"
                    aria-hidden="true"
                >
                    <?php for ($i = 0; $i < 48; $i++) : ?>
                        <span></span>
                    <?php endfor; ?>
                </div>
                <!-- /wp:html -->


                <!-- wp:group {"className":"about-hero-year","layout":{"type":"default"}} -->
                <div class="wp-block-group about-hero-year">

                    <!-- wp:paragraph {"className":"about-hero-year__label"} -->
                    <p class="about-hero-year__label">
                        Sinds
                    </p>
                    <!-- /wp:paragraph -->

                    <!-- wp:paragraph {"className":"about-hero-year__value"} -->
                    <p class="about-hero-year__value">
                        1929
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