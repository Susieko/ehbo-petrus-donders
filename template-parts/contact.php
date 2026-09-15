<section class="contact-section reveal-section" id="contact">

    <div class="container">

        <div class="contact-section__inner">

            <!-- Contact information -->
            <div class="contact-section__content">

                <span class="section-eyebrow">
                    Contact
                </span>

                <h2>
                    Een vraag?
                    We helpen je graag verder.
                </h2>

                <p class="contact-section__intro">
                    Heb je een vraag over een opleiding, oefenavond,
                    lidmaatschap, hercertificering of hulpverlening
                    bij een evenement?
                </p>

                <p>
                    Neem gerust contact met ons op. We kijken graag met je
                    mee en helpen je verder met de juiste informatie.
                </p>


                <div class="contact-section__topics">

                    <div class="contact-topic">

                        <span
                            class="contact-topic__icon contact-topic__icon--blue"
                            aria-hidden="true"
                        >
                            <svg
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="1.8"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            >
                                <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H11V5H6.5A2.5 2.5 0 0 0 4 7.5z"/>
                                <path d="M20 19.5A2.5 2.5 0 0 0 17.5 17H13V5h4.5A2.5 2.5 0 0 1 20 7.5z"/>
                            </svg>
                        </span>

                        <div>
                            <strong>
                                Opleidingen & lidmaatschap
                            </strong>

                            <small>
                                Voor vragen over cursussen, inschrijven
                                en hercertificering.
                            </small>
                        </div>

                    </div>


                    <div class="contact-topic">

                        <span
                            class="contact-topic__icon contact-topic__icon--red"
                            aria-hidden="true"
                        >
                            <svg
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="1.8"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            >
                                <rect x="3" y="7" width="18" height="14" rx="2"/>
                                <path d="M8 7V5a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/>
                                <path d="M12 11v6"/>
                                <path d="M9 14h6"/>
                            </svg>
                        </span>

                        <div>
                            <strong>
                                Hulpverlening
                            </strong>

                            <small>
                                Voor vragen over EHBO-ondersteuning
                                tijdens evenementen.
                            </small>
                        </div>

                    </div>

                </div>

            </div>


            <!-- Contact form -->
            <div class="contact-form-card">

                <div class="contact-form-card__header">

                    <span class="contact-form-card__label">
                        Contactformulier
                    </span>

                    <h3>
                        Stuur ons een bericht.
                    </h3>

                    <p>
                        Vul het formulier in en we nemen contact met je op.
                    </p>

                </div>


                <form
                    class="contact-form"
                    id="contactformulier"
                    method="post"
                    action=""
                >

                    <div class="contact-form__row">

                        <div class="contact-field">

                            <label for="contact-name">
                                Naam
                            </label>

                            <input
                                type="text"
                                id="contact-name"
                                name="contact_name"
                                autocomplete="name"
                                required
                            >

                        </div>


                        <div class="contact-field">

                            <label for="contact-email">
                                E-mailadres
                            </label>

                            <input
                                type="email"
                                id="contact-email"
                                name="contact_email"
                                autocomplete="email"
                                required
                            >

                        </div>

                    </div>


                    <div class="contact-field">

                        <label for="contact-subject">
                            Waar gaat je vraag over?
                        </label>

                        <select
                            id="contact-subject"
                            name="contact_subject"
                            required
                        >
                            <option value="">
                                Kies een onderwerp
                            </option>

                            <option value="opleiding">
                                Opleidingen
                            </option>

                            <option value="lidmaatschap">
                                Lidmaatschap
                            </option>

                            <option value="oefenavonden">
                                Les- en oefenavonden
                            </option>

                            <option value="hercertificering">
                                Hercertificering
                            </option>

                            <option value="hulpverlening">
                                Hulpverlening bij evenementen
                            </option>

                            <option value="vrijwilliger">
                                Vrijwilliger worden
                            </option>

                            <option value="anders">
                                Anders
                            </option>
                        </select>

                    </div>


                    <div class="contact-field">

                        <label for="contact-message">
                            Bericht
                        </label>

                        <textarea
                            id="contact-message"
                            name="contact_message"
                            rows="6"
                            required
                        ></textarea>

                    </div>


                    <button
                        class="contact-form__submit"
                        type="submit"
                    >
                        Bericht versturen

                        <span aria-hidden="true">→</span>
                    </button>

                </form>


                <div
                    class="contact-form-card__dots"
                    aria-hidden="true"
                >
                    <?php for ($i = 0; $i < 60; $i++) : ?>
                        <span></span>
                    <?php endfor; ?>
                </div>

            </div>

        </div>

    </div>

</section>