<?php
/**
 * Compact loop with useful external organisations.
 */

$logo_directory = get_template_directory_uri()
    . '/assets/images/organisations/';

$ehbo_organisations = [
    [
        'name' => 'Het Oranje Kruis',
        'url'  => 'https://www.hetoranjekruis.nl/',
        'logo' => '1.png',
    ],
    [
        'name' => 'Nationale Bond voor EHBO',
        'url'  => 'https://www.ehbonationalebond.nl/',
        'logo' => '2.png',
    ],
    [
        'name' => 'LOTUSkring Tilburg',
        'url'  => 'https://lotuskringtilburg.nl/',
        'logo' => '3.png',
    ],
    [
        'name' => 'EHBO Tilburg-West',
        'url'  => 'https://ehbotilburgwest.nl/',
        'logo' => '4.png',
    ],
    [
        'name' => 'ContourdeTwern',
        'url'  => 'https://www.contourdetwern.nl/',
        'logo' => '5.png',
    ],
    [
        'name' => 'Nederlandse Reanimatie Raad',
        'url'  => 'https://www.reanimatieraad.nl/',
        'logo' => '6.png',
    ],
    [
        'name' => 'Hartstichting',
        'url'  => 'https://www.hartstichting.nl/',
        'logo' => '7.png',
    ],
    [
        'name' => 'HartslagNu',
        'url'  => 'https://hartslagnu.nl/',
        'logo' => '8.jpg',
    ],
    [
        'name' => 'Veldnorm Evenementenzorg',
        'url'  => 'https://www.evenementenz.org/',
        'logo' => '9.png',
    ],
    [
        'name' => 'EHBOnline / MF Medical',
        'url'  => 'https://www.mfmedical.nl/',
        'logo' => '10.png',
    ],
    [
        'name' => 'Stop de bloeding',
        'url'  => 'https://www.stopdebloedingredeenleven.nl/',
        'logo' => '11.png',
    ],
    [
        'name' => 'Brandwondenzorg Nederland',
        'url'  => 'https://brandwondenzorg.nl/',
        'logo' => '12.jpg',
    ],
    [
        'name' => 'Hersenstichting',
        'url'  => 'https://www.hersenstichting.nl/',
        'logo' => '13.png',
    ],
];
?>

<section
    class="organisation-loop"
    aria-labelledby="organisation-loop-title"
>

    <div class="container organisation-loop__header">

        <div>

            <span class="section-eyebrow">
                Handige organisaties
            </span>

            <h2 id="organisation-loop-title">
                Meer weten over EHBO?
            </h2>

        </div>

        <p>
            Bekijk betrouwbare informatie van landelijke en lokale
            organisaties op het gebied van eerste hulp en gezondheid.
        </p>

    </div>


    <div class="organisation-loop__viewport">

        <div class="organisation-loop__track">

            <div class="organisation-loop__group">

                <?php foreach ($ehbo_organisations as $organisation) : ?>

                    <a
                        class="organisation-loop__item"
                        href="<?php echo esc_url($organisation['url']); ?>"
                        target="_blank"
                        rel="noopener noreferrer"
                        aria-label="<?php echo esc_attr(
                            $organisation['name']
                            . ' – opent in een nieuw tabblad'
                        ); ?>"
                    >

                        <img
                            src="<?php echo esc_url(
                                $logo_directory
                                . $organisation['logo']
                            ); ?>"
                            alt="<?php echo esc_attr(
                                $organisation['name']
                            ); ?>"
                            loading="lazy"
                        >

                        <span
                            class="organisation-loop__arrow"
                            aria-hidden="true"
                        >
                            ↗
                        </span>

                    </a>

                <?php endforeach; ?>

            </div>


            <div
                class="organisation-loop__group"
                aria-hidden="true"
            >

                <?php foreach ($ehbo_organisations as $organisation) : ?>

                    <a
                        class="organisation-loop__item"
                        href="<?php echo esc_url($organisation['url']); ?>"
                        target="_blank"
                        rel="noopener noreferrer"
                        tabindex="-1"
                    >

                        <img
                            src="<?php echo esc_url(
                                $logo_directory
                                . $organisation['logo']
                            ); ?>"
                            alt=""
                            loading="lazy"
                        >

                        <span
                            class="organisation-loop__arrow"
                            aria-hidden="true"
                        >
                            ↗
                        </span>

                    </a>

                <?php endforeach; ?>

            </div>

        </div>

    </div>

</section>