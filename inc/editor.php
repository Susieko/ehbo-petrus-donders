<?php

if (!defined('ABSPATH')) {
    exit;
}


/**
 * Register custom Gutenberg patterns
 * used by the EHBO theme.
 */
function ehbo_register_editor_patterns() {

    register_block_pattern_category(
        'ehbo-petrus-donders',
        [
            'label' => __(
                'EHBO Petrus Donders',
                'ehbo-petrus-donders'
            ),
        ]
    );


    $patterns = [
        'about-story' => [
            'title' => 'Onze vereniging',
            'description' =>
                'Introductie van de vereniging met drie kernactiviteiten.',
        ],

        'about-facts' => [
            'title' => 'Vereniging in het kort',
            'description' =>
                'Kerngegevens van EHBO Petrus Donders.',
        ],

        'about-history' => [
            'title' => 'Geschiedenis',
            'description' =>
                'Geschiedenis van de vereniging met afbeelding en tijdlijn.',
],

'about-community' => [
    'title' => 'Samen leren',
    'description' =>
        'Verenigingssectie over oefenen, leren en praktijkervaring.',
],

'about-volunteer' => [
    'title' => 'Vrijwilliger en lid worden',
    'description' =>
        'Donkere oproepsectie voor lidmaatschap en vrijwilligerswerk.',
],

'about-next' => [
    'title' => 'Over ons afsluiting',
    'description' =>
        'Afsluitende oproep naar de opleidingen.',
],

'about-hero' => [
    'title' => 'Over ons hero',
    'description' =>
        'Hero voor de Over ons-pagina met tekst, acties en afbeelding.',
],

'information-locations' => [
    'title' => 'Informatie - Leslocaties',
    'description' =>
        'Leslocaties, lestijden en verwijzing naar het lesrooster.',
],

'information-lessons' => [
    'title' => 'Informatie - Les- & oefenavonden',
    'description' =>
        'Informatie over lesavonden, oefenen en de presentiekaart.',
],

'information-recertification' => [
    'title' => 'Informatie - Hercertificering',
    'description' =>
        'Uitleg over hercertificering, competenties en het stappenplan.',
],

'information-prices' => [
    'title' => 'Informatie - Prijzen',
    'description' =>
        'Overzicht van cursusprijzen, lidmaatschap en prijsinformatie.',
],

'information-safety' => [
    'title' => 'Informatie - Veilig & vertrouwd',
    'description' =>
        'Informatie over gedragscode, vertrouwen, VOG en privacy.',
],

'assistance-intro' => [
    'title' => 'Hulpverlening - Intro',
    'description' =>
        'Introductie over eerstehulpverlening bij evenementen.',
],

'assistance-types' => [
    'title' => 'Hulpverlening - Type evenementen',
    'description' =>
        'Overzicht van soorten evenementen waarbij hulpverlening mogelijk is.',
],

'assistance-quality' => [
    'title' => 'Hulpverlening - Kwaliteit',
    'description' =>
        'Informatie over training, kwaliteit en veiligheid bij evenementenzorg.',
],

'assistance-process' => [
    'title' => 'Hulpverlening - Werkwijze',
    'description' =>
        'Stappenplan van aanvraag tot hulpverlening bij een evenement.',
],

'assistance-organiser' => [
    'title' => 'Hulpverlening - Organisator',
    'description' =>
        'Praktische voorwaarden voor organisatoren van evenementen.',
],
    ];


    $registry =
        WP_Block_Patterns_Registry::get_instance();


    foreach ($patterns as $name => $settings) {

        $slug =
            'ehbo-petrus-donders/' . $name;

        $pattern_file =
            get_theme_file_path(
                '/patterns/' . $name . '.php'
            );


        if (
            !file_exists($pattern_file) ||
            $registry->is_registered($slug)
        ) {
            continue;
        }


        ob_start();

        include $pattern_file;

        $pattern_content =
            ob_get_clean();


        register_block_pattern(
            $slug,
            [
                'title' => __(
                    $settings['title'],
                    'ehbo-petrus-donders'
                ),

                'description' => __(
                    $settings['description'],
                    'ehbo-petrus-donders'
                ),

                'categories' => [
                    'ehbo-petrus-donders',
                ],

                'content' =>
                    $pattern_content,
            ]
        );
    }
}

add_action(
    'init',
    'ehbo_register_editor_patterns',
    20
);