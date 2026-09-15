<section class="event-support reveal-section" id="hulpverlening">

    <div class="container">

        <div class="event-support__inner">

            <!-- Visual -->
            <div class="event-support__visual">

                <div class="event-support__image">

    <img
        class="event-support__photo"
        src="<?php echo esc_url(
            get_template_directory_uri() .
            '/assets/images/hero-hulpverlening.png'
        ); ?>"
        alt="EHBO-hulpverleners van Petrus Donders tijdens een evenement"
        loading="lazy"
    >

</div>


                <div class="event-support__badge">

                    <span class="event-support__badge-icon" aria-hidden="true">
                        +
                    </span>

                    <span>
                        Veiligheid voor bezoekers
                    </span>

                </div>


                <div
                    class="event-support__dots"
                    aria-hidden="true"
                >
                    <?php for ($i = 0; $i < 70; $i++) : ?>
                        <span></span>
                    <?php endfor; ?>
                </div>

            </div>


            <!-- Content -->
            <div class="event-support__content">

                <span class="section-eyebrow">
                    Hulpverlening
                </span>

                <h2>
                    Een veilig evenement begint met goede voorbereiding.
                </h2>

                <p class="event-support__intro">
                    Organiseer je een evenement in Tilburg of omgeving?
                    Onze Evenementen Zorg Organisatie helpt mee om de
                    veiligheid van bezoekers te waarborgen.
                </p>

                <p>
                    We werken samen met andere EHBO-verenigingen en leveren
                    ervaren hulpverleners die weten wat ze moeten doen wanneer
                    eerste hulp nodig is.
                </p>


                <ul class="event-support__features">

                    <li>

                        <span class="event-support__check" aria-hidden="true">
                            ✓
                        </span>

                        <span>
                            EHBO-ondersteuning voor evenementen en activiteiten
                        </span>

                    </li>

                    <li>

                        <span class="event-support__check" aria-hidden="true">
                            ✓
                        </span>

                        <span>
                            Ervaren hulpverleners en samenwerking met andere verenigingen
                        </span>

                    </li>

                    <li>

                        <span class="event-support__check" aria-hidden="true">
                            ✓
                        </span>

                        <span>
                            Een aanvraag afgestemd op jouw evenement
                        </span>

                    </li>

                </ul>


                <div class="event-support__actions">

                    <a
                        class="section-button section-button--yellow"
                        href="<?php echo esc_url(
                            home_url('/hulpverlening-aanvragen/')
                        ); ?>"
                    >
                        Hulpverlening aanvragen

                        <span aria-hidden="true">→</span>
                    </a>

                    <a
                        class="text-link"
                        href="<?php echo esc_url(
                            home_url('/hulpverlening/')
                        ); ?>"
                    >
                        Meer over hulpverlening

                        <span aria-hidden="true">→</span>
                    </a>

                </div>

            </div>

        </div>

    </div>

</section>