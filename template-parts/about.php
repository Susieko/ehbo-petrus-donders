<section class="about-section reveal-section" id="over-ons">

    <div class="container">

        <div class="about-section__inner">

            <!-- Text -->
            <div class="about-section__content">

                <span class="section-eyebrow">
                    Over onze vereniging
                </span>

                <h2>
                    Samen sterk in eerste hulp,
                    in Tilburg en omgeving.
                </h2>

                <p class="about-section__intro">
                    EHBO-vereniging Petrus Donders helpt mensen om met kennis,
                    vertrouwen en praktische vaardigheden te handelen wanneer
                    eerste hulp nodig is.
                </p>

                <p>
                    Bij ons kun je terecht voor opleidingen, oefen- en
                    lesavonden, hercertificeringen en ondersteuning bij
                    evenementen. Ook bieden we vrijwilligers de mogelijkheid
                    om zich actief in te zetten en écht het verschil te maken.
                </p>

<a
    class="text-link"
    href="<?php echo esc_url(
        home_url('/over-ons/')
    ); ?>"
>
                    Lees meer over onze vereniging

                    <span aria-hidden="true">→</span>
                </a>

            </div>


            <!-- Visual card -->
            <div class="about-section__visual">

                <div class="about-card">

                    <div
                        class="about-card__dots"
                        aria-hidden="true"
                    >
                        <?php for ($i = 0; $i < 70; $i++) : ?>
                            <span></span>
                        <?php endfor; ?>
                    </div>


                    <div class="about-card__logo">

                        <img
                            src="<?php echo esc_url(
                                get_stylesheet_directory_uri() .
                                '/assets/images/logo-petrus-donders.png'
                            ); ?>"
                            alt="Logo EHBO Petrus Donders Tilburg"
                        >

                    </div>


                    <div class="about-card__content">

                        <span class="about-card__label">
                            EHBO Petrus Donders
                        </span>

                        <h3>
                            Kennis. Oefening. Hulp wanneer het telt.
                        </h3>


                        <ul class="about-card__list">

                            <li>
                                <span class="about-card__marker about-card__marker--blue"></span>

                                Opleidingen en hercertificering
                            </li>

                            <li>
                                <span class="about-card__marker about-card__marker--red"></span>

                                Les- en oefenavonden
                            </li>

                            <li>
                                <span class="about-card__marker about-card__marker--yellow"></span>

                                Hulpverlening bij evenementen
                            </li>

                        </ul>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>