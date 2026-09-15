<?php
get_header();
?>

<main
    id="main-content"
    class="inner-page error-page"
>

    <section class="error-hero page-section">

        <div class="container error-hero__inner">

            <div class="error-hero__content">

                <span class="section-eyebrow">
                    Pagina niet gevonden
                </span>

                <span
                    class="error-hero__code"
                    aria-hidden="true"
                >
                    404
                </span>

                <h1>
                    Oeps.
                    <span>
                        Deze pagina bestaat niet.
                    </span>
                </h1>

                <p class="error-hero__lead">
                    Misschien is de link verouderd,
                    is de pagina verplaatst of is er
                    iets verkeerd getypt.
                </p>

                <div class="error-hero__actions">

                    <a
                        class="page-button page-button--primary"
                        href="<?php echo esc_url(
                            home_url('/')
                        ); ?>"
                    >
                        Terug naar home
                        <span aria-hidden="true">→</span>
                    </a>

                    <a
                        class="page-text-link"
                        href="<?php echo esc_url(
                            home_url('/contact/')
                        ); ?>"
                    >
                        Neem contact op
                        <span aria-hidden="true">→</span>
                    </a>

                </div>

            </div>


            <div
                class="error-hero__visual"
                aria-hidden="true"
            >

                <div class="error-symbol">

                    <span class="error-symbol__cross">
                        +
                    </span>

                    <strong>
                        404
                    </strong>

                    <small>
                        Eerste hulp voor
                        verdwaalde pagina’s
                    </small>

                </div>

            </div>

        </div>

    </section>

</main>

<?php
get_footer();