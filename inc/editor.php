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