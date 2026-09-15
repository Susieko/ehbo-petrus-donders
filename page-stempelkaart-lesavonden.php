<?php
/*
Template Name: Stempelkaart lesavonden
*/

get_header();

/*
 * Replace this URL with the URL copied from
 * the WordPress media library.
 */
$pdf_url = 'http://ehbo-petrus-donders/wp-content/uploads/2026/08/Uitleg-gebruik-stempel-presentatiekaart.pdf';
?>

<main id="main-content">

    <section class="stamp-card-hero">

        <div class="container stamp-card-hero__inner">

            <div class="stamp-card-hero__content reveal">

                <span class="section-eyebrow">
                    Informatie voor leden
                </span>

                <h1>Presentiekaart voor lesavonden</h1>

                <p>
                    Met de presentiekaart – ook wel stempelkaart genoemd –
                    houdt je eenvoudig bij welke lessen en competenties je
                    hebt gevolgd voor jouw hercertificering.
                </p>

                <a
                    class="stamp-card-hero__button"
                    href="<?php echo esc_url($pdf_url); ?>"
                    target="_blank"
                    rel="noopener noreferrer"
                >
                    Bekijk de volledige uitleg
                    <span aria-hidden="true">↗</span>
                </a>

            </div>


            <div class="stamp-card-hero__visual reveal" aria-hidden="true">

                <div class="stamp-card">

                    <div class="stamp-card__heading">
                        <span>Presentiekaart</span>
                        <strong>Lesavonden</strong>
                    </div>

                    <div class="stamp-card__years">
                        <span>20.. / 20..</span>
                        <span>20.. / 20..</span>
                    </div>

                    <div class="stamp-card__stamps">

                        <?php for ($i = 0; $i < 8; $i++) : ?>

                            <span class="<?php echo $i < 5 ? 'is-stamped' : ''; ?>">
                                <?php if ($i < 5) : ?>
                                    ✓
                                <?php endif; ?>
                            </span>

                        <?php endfor; ?>

                    </div>

                    <small>EHBO Petrus Donders</small>

                </div>

            </div>

        </div>

    </section>


    <section class="stamp-card-explanation">

        <div class="container">

            <header class="stamp-card-explanation__header reveal">

                <span class="section-eyebrow">
                    Zo werkt het
                </span>

                <h2>Je lessen overzichtelijk bijgehouden</h2>

                <p>
                    De looptijd van de kaart is gelijk aan de geldigheid
                    van jouw diploma of certificaat.
                </p>

            </header>


            <div class="stamp-card-steps reveal-stagger">

                <article class="stamp-card-step">

                    <span class="stamp-card-step__number">01</span>

                    <h3>Kaart ontvangen</h3>

                    <p>
                        Na het behalen of hercertificeren van je diploma
                        of certificaat ontvang je tijdens een lesavond
                        een nieuwe presentiekaart.
                    </p>

                </article>


                <article class="stamp-card-step">

                    <span class="stamp-card-step__number">02</span>

                    <h3>Lessen laten afstempelen</h3>

                    <p>
                        Neem de kaart mee naar de lesavonden. Een medewerker
                        stempelt de gevolgde lessen en competenties voor je af.
                    </p>

                </article>


                <article class="stamp-card-step">

                    <span class="stamp-card-step__number">03</span>

                    <h3>Kaart inleveren</h3>

                    <p>
                        Lever de kaart na twee jaar, vóór de hercertificering,
                        weer in. Daarna ontvangt je voor de nieuwe periode
                        een nieuwe kaart.
                    </p>

                </article>

            </div>

        </div>

    </section>


    <section class="stamp-card-requirements">

        <div class="container stamp-card-requirements__grid">

            <div class="stamp-card-requirements__content reveal">

                <span class="section-eyebrow">
                    Verplichte competenties
                </span>

                <h2>Wat moet worden afgestempeld?</h2>

                <p>
                    Op de voorzijde staan per tijdvak vier verplichte
                    competenties. Deze moeten gedurende beide tijdvakken
                    worden gevolgd.
                </p>

                <ul class="stamp-card-checklist">

                    <li>
                        <span aria-hidden="true">✓</span>
                        Let op gevaar en professionele hulp
                    </li>

                    <li>
                        <span aria-hidden="true">✓</span>
                        Reanimatie volwassenen
                    </li>

                    <li>
                        <span aria-hidden="true">✓</span>
                        Reanimatie kinderen
                    </li>

                    <li>
                        <span aria-hidden="true">✓</span>
                        Levensbedreigend bloedverlies
                    </li>

                </ul>

            </div>


            <aside class="stamp-card-requirements__notice reveal">

                <span class="stamp-card-requirements__icon">
                    i
                </span>

                <h3>Vergeet de achterzijde niet</h3>

                <p>
                    Op de achterzijde worden de overige gevolgde
                    lesavonden bijgehouden, zoals ademhaling, bewustzijn,
                    circulatie, warmte- en koudeletsels, bewegingsletsels
                    en kleine letsels.
                </p>

                <p>
                    Ook lezingen, buitenoefeningen en andere extra
                    bijscholingsavonden kunnen meetellen bij de beoordeling
                    voor hercertificering.
                </p>

            </aside>

        </div>

    </section>


    <section class="stamp-card-download">

        <div class="container">

            <div class="stamp-card-download__inner reveal">

                <div>
                    <span class="section-eyebrow">
                        Alle informatie bewaren?
                    </span>

                    <h2>Download de volledige uitleg</h2>

                    <p>
                        In het document vindt je een uitgebreide uitleg
                        van de voor- en achterzijde van de presentiekaart.
                    </p>
                </div>

                <a
                    class="section-button"
                    href="<?php echo esc_url($pdf_url); ?>"
                    target="_blank"
                    rel="noopener noreferrer"
                >
                    Open de PDF
                    <span aria-hidden="true">↗</span>
                </a>

            </div>

        </div>

    </section>

</main>

<?php get_footer(); ?>