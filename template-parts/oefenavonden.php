<section class="practice-section reveal-section" id="oefenavonden">

    <div class="container">

        <div class="practice-section__inner">

            <!-- Text content -->
            <div class="practice-section__content">

                <span class="section-eyebrow">
                    Oefenen & bijblijven
                </span>

                <h2>
                    Oefenavonden & hercertificeringen.
                </h2>

                <p class="practice-section__intro">
                    Goede eerste hulp begint bij blijven oefenen. Tijdens onze
                    les- en oefenavonden houd je je kennis actueel, oefen je
                    praktische vaardigheden en blijf je voorbereid op situaties
                    waarin snel handelen nodig is.
                </p>

                <p>
                    Ook voor hercertificeringen ben je bij EHBO Petrus Donders
                    aan het juiste adres. Zo blijf je werken aan actuele kennis
                    en vaardigheden.
                </p>


                <div class="practice-section__actions">

                    <a
                        class="section-button"
                        href="<?php echo esc_url(
                            home_url('/lesavond-aanmelden/')
                        ); ?>"
                    >
                        Inschrijven voor een oefenavond

                        <span aria-hidden="true">→</span>
                    </a>

                    <a
                        class="text-link"
                        href="<?php echo esc_url(
                            home_url('/stempelkaart-lesavonden/')
                        ); ?>"
                    >
                        Bekijk het lesavondrooster

                        <span aria-hidden="true">→</span>
                    </a>

                </div>

            </div>


            <!-- Visual information panel -->
            <div class="practice-panel">

                <div
                    class="practice-panel__dots"
                    aria-hidden="true"
                >
                    <?php for ($i = 0; $i < 60; $i++) : ?>
                        <span></span>
                    <?php endfor; ?>
                </div>


                <div class="practice-panel__top">

                    <span class="practice-panel__label">
                        Blijf voorbereid
                    </span>

                    <h3>
                        Oefen vandaag. Handel met vertrouwen wanneer het telt.
                    </h3>

                </div>


                <div class="practice-panel__items">

                    <!-- Oefenavonden -->
                    <a
                        class="practice-item"
                        href="<?php echo esc_url(
                            home_url('/lesavond-aanmelden/')
                        ); ?>"
                    >

                        <span class="practice-item__icon practice-item__icon--blue">

                            <svg
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="1.8"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                aria-hidden="true"
                            >
                                <circle cx="12" cy="12" r="9"/>
                                <path d="M12 7v5l3 2"/>
                            </svg>

                        </span>

                        <span class="practice-item__content">

                            <strong>
                                Les- en oefenavonden
                            </strong>

                            <small>
                                Meld je aan voor een les- of oefenavond.
                            </small>

                        </span>

                        <span
                            class="practice-item__arrow"
                            aria-hidden="true"
                        >
                            →
                        </span>

                    </a>


                    <!-- Hercertificering -->
                    <a
                        class="practice-item"
                        href="<?php echo esc_url(
                            home_url('/informatie/#hercertificering')
                        ); ?>"
                    >

                        <span class="practice-item__icon practice-item__icon--red">

                            <svg
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="1.8"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                aria-hidden="true"
                            >
                                <path d="M20 6v6h-6"/>
                                <path d="M4 18v-6h6"/>
                                <path d="M6.5 8a7 7 0 0 1 11.8-2L20 8"/>
                                <path d="M17.5 16a7 7 0 0 1-11.8 2L4 16"/>
                            </svg>

                        </span>

                        <span class="practice-item__content">

                            <strong>
                                Hercertificeringen
                            </strong>

                            <small>
                                Houd je vaardigheden en certificering actueel.
                            </small>

                        </span>

                        <span
                            class="practice-item__arrow"
                            aria-hidden="true"
                        >
                            →
                        </span>

                    </a>


                    <!-- Rooster -->
                    <a
                        class="practice-item"
                        href="<?php echo esc_url(
                            home_url('/stempelkaart-lesavonden/')
                        ); ?>"
                    >

                        <span class="practice-item__icon practice-item__icon--yellow">

                            <svg
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="1.8"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                aria-hidden="true"
                            >
                                <rect x="3" y="5" width="18" height="16" rx="2"/>
                                <path d="M16 3v4"/>
                                <path d="M8 3v4"/>
                                <path d="M3 10h18"/>
                                <path d="M8 14h.01"/>
                                <path d="M12 14h.01"/>
                                <path d="M16 14h.01"/>
                            </svg>

                        </span>

                        <span class="practice-item__content">

                            <strong>
                                Rooster lesavonden
                            </strong>

                            <small>
                                Bekijk wanneer de volgende lesavonden plaatsvinden.
                            </small>

                        </span>

                        <span
                            class="practice-item__arrow"
                            aria-hidden="true"
                        >
                            →
                        </span>

                    </a>

                </div>

            </div>

        </div>

    </div>

</section>