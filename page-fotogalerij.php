<?php
/*
Template Name: Fotogalerij
Template Post Type: page
*/

get_header();

$gallery_images = ehbo_get_gallery_images(
    get_queried_object_id()
);

$total_images = count($gallery_images);

$hero_images = array_slice(
    $gallery_images,
    0,
    3
);

$featured_images = array_slice(
    $gallery_images,
    0,
    min(5, $total_images)
);

$wall_images = array_slice(
    $gallery_images,
    min(5, $total_images)
);
?>

<main
    id="main-content"
    class="inner-page gallery-page"
>


    <!-- ========================================
         HERO
    ========================================= -->

    <section class="page-hero gallery-hero">

        <div class="container page-hero__inner">

            <div class="page-hero__content reveal">

                <span class="section-eyebrow">
                    Fotogalerij
                </span>

                <h1>
                    Momenten die laten zien
                    <span>waar we het voor doen.</span>
                </h1>

                <p class="page-hero__lead">
                    Van opleidingen en oefenavonden tot
                    bijzondere verenigingsmomenten:
                    in beeld zie je hoe EHBO Petrus Donders
                    samen leert, samen oefent en samen helpt.
                </p>

                <div class="page-hero__actions">

                    <a
                        class="page-button page-button--primary"
                        href="#momenten"
                    >
                        Bekijk de galerij
                        <span aria-hidden="true">↓</span>
                    </a>

                    <a
                        class="page-text-link"
                        href="<?php echo esc_url(
                            home_url('/contact/')
                        ); ?>"
                    >
                        Vraag over een foto
                        <span aria-hidden="true">→</span>
                    </a>

                </div>

            </div>


            <div class="page-hero__visual">

                <div class="gallery-hero-collage reveal-image">


                    <?php if ($hero_images) : ?>

                        <?php foreach (
                            $hero_images as $index => $image
                        ) : ?>

                            <figure
                                class="
                                    gallery-hero-collage__item
                                    gallery-hero-collage__item--<?php
                                    echo esc_attr($index + 1);
                                    ?>
                                "
                            >

                                <img
                                    src="<?php echo esc_url(
                                        $image['url']
                                    ); ?>"
                                    alt="<?php echo esc_attr(
                                        $image['alt']
                                    ); ?>"
                                >

                            </figure>

                        <?php endforeach; ?>

                    <?php else : ?>

                        <div class="gallery-hero-collage__empty">

                            <span>
                                Fotogalerij
                            </span>

                            <strong>
                                Binnenkort
                                in beeld.
                            </strong>

                        </div>

                    <?php endif; ?>


                    <div class="gallery-hero-collage__note">

                        <span>
                            In beeld
                        </span>

                        <strong>
                            <?php echo esc_html(
                                $total_images
                            ); ?>
                            <?php
                            echo $total_images === 1
                                ? 'foto'
                                : 'foto’s';
                            ?>
                        </strong>

                    </div>

                </div>

            </div>

        </div>

    </section>



    <!-- ========================================
         INTRO STRIP
    ========================================= -->

    <section class="gallery-intro-strip">

        <div class="container gallery-intro-strip__inner">

            <div>

                <strong>
                    Opleidingen
                </strong>

                <span>
                    Leren door te doen
                </span>

            </div>

            <div>

                <strong>
                    Oefenavonden
                </strong>

                <span>
                    Vaardigheden blijven oefenen
                </span>

            </div>

            <div>

                <strong>
                    Vereniging
                </strong>

                <span>
                    Samen leren en betrokken blijven
                </span>

            </div>

            <div>

                <strong>
                    Herinneringen
                </strong>

                <span>
                    Momenten om terug te kijken
                </span>

            </div>

        </div>

    </section>



    <!-- ========================================
         FEATURED MOMENTS
    ========================================= -->

    <section
        class="gallery-featured page-section"
        id="momenten"
    >

        <div class="container">

            <div class="gallery-featured__header reveal">

                <div>

                    <span class="section-eyebrow">
                        Uitgelichte momenten
                    </span>

                    <h2>
                        Een kijkje in de vereniging.
                    </h2>

                </div>

                <p>
                    Een selectie van beelden die laat zien hoe
                    leren, oefenen en samenkomen er binnen
                    Petrus Donders uitzien.
                </p>

            </div>


            <?php if ($featured_images) : ?>

                <div class="gallery-featured__grid reveal-stagger">

                    <?php foreach (
                        $featured_images as $index => $image
                    ) : ?>

                        <figure
                            class="
                                gallery-featured-card
                                gallery-featured-card--<?php
                                echo esc_attr($index + 1);
                                ?>
                            "
                        >

                            <a
                                href="<?php echo esc_url(
                                    $image['full_url']
                                ); ?>"
                                target="_blank"
                                rel="noopener noreferrer"
                            >

                                <img
                                    src="<?php echo esc_url(
                                        $image['url']
                                    ); ?>"
                                    alt="<?php echo esc_attr(
                                        $image['alt']
                                    ); ?>"
                                    loading="lazy"
                                >

                            </a>

                            <figcaption>

                                <span>
                                    <?php echo esc_html(
                                        str_pad(
                                            (string) ($index + 1),
                                            2,
                                            '0',
                                            STR_PAD_LEFT
                                        )
                                    ); ?>
                                </span>

                                <strong>
                                    <?php echo esc_html(
                                        $image['title']
                                    ); ?>
                                </strong>

                                <p>
                                    <?php echo esc_html(
                                        $image['caption']
                                    ); ?>
                                </p>

                            </figcaption>

                        </figure>

                    <?php endforeach; ?>

                </div>

            <?php else : ?>

    <div class="gallery-empty-state">

        <span aria-hidden="true">
            +
        </span>

        <h3>
            Nog geen foto’s toegevoegd.
        </h3>

        <p>
            Binnenkort vind je hier foto’s van
            opleidingen, oefenavonden en andere
            momenten uit onze vereniging.
        </p>

    </div>

<?php endif; ?>

        </div>

    </section>



    <!-- ========================================
         PHOTO WALL
    ========================================= -->

    <?php if ($wall_images) : ?>

        <section class="gallery-wall page-section page-section--soft">

            <div class="container">

                <div class="gallery-wall__header">

                    <div>

                        <span class="section-eyebrow">
                            Fotowand
                        </span>

                        <h2>
                            Meer beelden
                            uit de galerij.
                        </h2>

                    </div>

                    <p>
                        Blader verder door foto’s uit
                        opleidingen, oefenmomenten en
                        verenigingsactiviteiten.
                    </p>

                </div>


                <div class="gallery-wall__grid">

                    <?php foreach (
                        $wall_images as $index => $image
                    ) : ?>

                        <figure class="gallery-card reveal">

                            <a
                                class="gallery-card__image"
                                href="<?php echo esc_url(
                                    $image['full_url']
                                ); ?>"
                                target="_blank"
                                rel="noopener noreferrer"
                            >

                                <img
                                    src="<?php echo esc_url(
                                        $image['url']
                                    ); ?>"
                                    alt="<?php echo esc_attr(
                                        $image['alt']
                                    ); ?>"
                                    loading="lazy"
                                >

                            </a>


                            <figcaption class="gallery-card__content">

                                <span>
                                    Foto <?php echo esc_html(
                                        str_pad(
                                            (string) ($index + 6),
                                            2,
                                            '0',
                                            STR_PAD_LEFT
                                        )
                                    ); ?>
                                </span>

                                <h3>
                                    <?php echo esc_html(
                                        $image['title']
                                    ); ?>
                                </h3>

                                <p>
                                    <?php echo esc_html(
                                        $image['caption']
                                    ); ?>
                                </p>

                            </figcaption>

                        </figure>

                    <?php endforeach; ?>

                </div>

            </div>

        </section>

    <?php endif; ?>



    <!-- ========================================
         SMALL TEXT BLOCK
    ========================================= -->

    <section class="gallery-story page-section">

        <div class="container gallery-story__inner reveal">

            <div>

                <span class="section-eyebrow">
                    Waarom een galerij?
                </span>

                <h2>
                    Beelden maken
                    de vereniging tastbaar.
                </h2>

            </div>

            <div>

                <p class="gallery-story__lead">
                    Foto’s laten meer zien dan alleen een moment.
                    Ze maken zichtbaar hoe mensen samen leren,
                    oefenen en zich inzetten voor eerste hulp.
                </p>

                <p>
                    Zo krijgt de vereniging ook online een
                    persoonlijker gezicht en ontstaat er een
                    beeld van de betrokkenheid achter Petrus Donders.
                </p>

            </div>

        </div>

    </section>



    <!-- ========================================
         FINAL CTA
    ========================================= -->

    <section class="gallery-next">

        <div class="container">

            <div class="gallery-next__card reveal">

                <div>

                    <span>
                        Zelf meedoen?
                    </span>

                    <h2>
                        Beleef de vereniging
                        van dichtbij.
                    </h2>

                    <p>
                        Wil je ook leren helpen, meedoen aan
                        oefenavonden of betrokken raken bij
                        Petrus Donders? Neem gerust contact op.
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