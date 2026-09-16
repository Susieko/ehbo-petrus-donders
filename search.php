<?php

if (!defined('ABSPATH')) {
    exit;
}

get_header();

$search_query = get_search_query();
?>

<main
    id="main-content"
    class="inner-page search-page"
>

    <section class="search-hero">

        <div class="container search-hero__inner">

            <span class="section-eyebrow">
                Zoeken
            </span>

            <h1>
                Zoekresultaten voor
                <span>
                    “<?php echo esc_html($search_query); ?>”
                </span>
            </h1>

            <form
                class="site-search"
                role="search"
                method="get"
                action="<?php echo esc_url(home_url('/')); ?>"
            >

                <label
                    class="screen-reader-text"
                    for="site-search-field"
                >
                    Zoek op de website
                </label>

                <input
                    id="site-search-field"
                    type="search"
                    name="s"
                    value="<?php echo esc_attr($search_query); ?>"
                    placeholder="Waar ben je naar op zoek?"
                >

                <button type="submit">
                    Zoeken
                    <span aria-hidden="true">→</span>
                </button>

            </form>

        </div>

    </section>


    <section class="search-results page-section">

        <div class="container">

            <?php if (have_posts()) : ?>

                <div class="search-results__header">

                    <p>
                        <?php
                        global $wp_query;

                        $result_count =
                            (int) $wp_query->found_posts;

                        printf(
                            esc_html(
                                _n(
                                    '%s resultaat gevonden',
                                    '%s resultaten gevonden',
                                    $result_count,
                                    'ehbo-petrus-donders'
                                )
                            ),
                            esc_html(
                                number_format_i18n(
                                    $result_count
                                )
                            )
                        );
                        ?>
                    </p>

                </div>


                <div class="search-results__list">

                    <?php
                    while (have_posts()) :
                        the_post();

                        $post_type =
                            get_post_type_object(
                                get_post_type()
                            );

                        $type_label =
                            $post_type
                            ? $post_type->labels->singular_name
                            : 'Pagina';
                    ?>

                        <article class="search-result">

                            <div class="search-result__meta">

                                <span>
                                    <?php
                                    echo esc_html(
                                        $type_label
                                    );
                                    ?>
                                </span>

                            </div>

                            <h2>
                                <a
                                    href="<?php
                                    echo esc_url(
                                        get_permalink()
                                    );
                                    ?>"
                                >
                                    <?php the_title(); ?>
                                </a>
                            </h2>

                            <?php
                            $excerpt =
                                get_the_excerpt();

                            if ($excerpt) :
                            ?>

                                <p>
                                    <?php
                                    echo esc_html(
                                        wp_trim_words(
                                            $excerpt,
                                            28
                                        )
                                    );
                                    ?>
                                </p>

                            <?php endif; ?>

                            <a
                                class="search-result__link"
                                href="<?php
                                echo esc_url(
                                    get_permalink()
                                );
                                ?>"
                            >
                                Bekijk pagina
                                <span aria-hidden="true">→</span>
                            </a>

                        </article>

                    <?php endwhile; ?>

                </div>


                <?php
                $pagination = paginate_links([
                    'current' => max(
                        1,
                        get_query_var('paged')
                    ),
                    'total' =>
                        $wp_query->max_num_pages,
                    'mid_size' => 1,
                    'end_size' => 1,
                    'prev_text' => '← Vorige',
                    'next_text' => 'Volgende →',
                    'type' => 'list',
                ]);
                ?>

                <?php if ($pagination) : ?>

                    <nav
                        class="search-pagination"
                        aria-label="Zoekresultaten pagina's"
                    >
                        <?php
                        echo wp_kses_post(
                            $pagination
                        );
                        ?>
                    </nav>

                <?php endif; ?>


            <?php else : ?>

                <div class="search-empty">

                    <span aria-hidden="true">
                        +
                    </span>

                    <h2>
                        Geen resultaten gevonden.
                    </h2>

                    <p>
                        We konden niets vinden voor
                        “<?php
                        echo esc_html(
                            $search_query
                        );
                        ?>”.
                        Probeer een andere zoekterm
                        of bekijk onze belangrijkste pagina's.
                    </p>

                    <div class="search-empty__actions">

                        <a
                            class="page-button page-button--primary"
                            href="<?php
                            echo esc_url(
                                home_url('/opleidingen/')
                            );
                            ?>"
                        >
                            Bekijk opleidingen
                            <span aria-hidden="true">→</span>
                        </a>

                        <a
                            class="page-text-link"
                            href="<?php
                            echo esc_url(
                                home_url('/')
                            );
                            ?>"
                        >
                            Terug naar home
                            <span aria-hidden="true">→</span>
                        </a>

                    </div>

                </div>

            <?php endif; ?>

        </div>

    </section>

</main>

<?php get_footer(); ?>