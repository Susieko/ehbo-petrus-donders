<?php

if (!defined('ABSPATH')) {
    exit;
}

function ehbo_petrus_donders_assets() {
    $theme_uri = get_stylesheet_directory_uri();
    $theme_dir = get_stylesheet_directory();

    // Global styles.
    wp_enqueue_style(
        'ehbo-global',
        $theme_uri . '/assets/css/global.css',
        [],
        filemtime($theme_dir . '/assets/css/global.css')
    );

    wp_enqueue_style(
        'ehbo-header',
        $theme_uri . '/assets/css/header.css',
        ['ehbo-global'],
        filemtime($theme_dir . '/assets/css/header.css')
    );

    // Homepage styles.
    if (is_front_page()) {
        wp_enqueue_style(
            'ehbo-hero',
            $theme_uri . '/assets/css/hero.css',
            ['ehbo-global'],
            filemtime($theme_dir . '/assets/css/hero.css')
        );

        wp_enqueue_style(
            'ehbo-home',
            $theme_uri . '/assets/css/home.css',
            ['ehbo-hero'],
            filemtime($theme_dir . '/assets/css/home.css')
        );
    }

    wp_enqueue_style(
        'ehbo-footer',
        $theme_uri . '/assets/css/footer.css',
        ['ehbo-global'],
        filemtime($theme_dir . '/assets/css/footer.css')
    );

    wp_enqueue_style(
        'ehbo-responsive',
        $theme_uri . '/assets/css/responsive.css',
        [
            'ehbo-global',
            'ehbo-header',
            'ehbo-footer',
        ],
        filemtime($theme_dir . '/assets/css/responsive.css')
    );

    // Shared foundation for inner pages and the 404 template.
    if (!is_front_page()) {
        wp_enqueue_style(
            'ehbo-page-base',
            $theme_uri . '/assets/css/page-base.css',
            ['ehbo-responsive'],
            filemtime($theme_dir . '/assets/css/page-base.css')
        );
    }

    // Page-specific styles.
    $page_styles = [
        'over-ons' => [
            'handle' => 'ehbo-over-ons',
            'file'   => 'over-ons.css',
        ],
        'opleidingen' => [
            'handle' => 'ehbo-opleidingen',
            'file'   => 'opleidingen.css',
        ],
        'hulpverlening' => [
            'handle' => 'ehbo-hulpverlening',
            'file'   => 'hulpverlening.css',
        ],
        'informatie' => [
            'handle' => 'ehbo-informatie',
            'file'   => 'informatie.css',
        ],
        'publicaties' => [
            'handle' => 'ehbo-publicaties',
            'file'   => 'publicaties.css',
        ],
        'word-lid' => [
            'handle' => 'ehbo-word-lid',
            'file'   => 'word-lid.css',
        ],
        'fotogalerij' => [
            'handle' => 'ehbo-fotogalerij',
            'file'   => 'fotogalerij.css',
        ],
        'contact' => [
            'handle' => 'ehbo-contact-page',
            'file'   => 'contact-page.css',
        ],
        'stempelkaart-lesavonden' => [
            'handle' => 'ehbo-stempelkaart-lesavonden',
            'file'   => 'stempelkaart-lesavonden.css',
        ],
    ];

    foreach ($page_styles as $page => $style) {
        if (!is_page($page)) {
            continue;
        }

        wp_enqueue_style(
            $style['handle'],
            $theme_uri . '/assets/css/' . $style['file'],
            ['ehbo-page-base'],
            filemtime(
                $theme_dir . '/assets/css/' . $style['file']
            )
        );
    }

    // Lesavond aanmelden.
    if (is_page('lesavond-aanmelden')) {
        wp_enqueue_style(
            'ehbo-lesavond-aanmelden',
            $theme_uri . '/assets/css/lesavond-aanmelden.css',
            ['ehbo-page-base'],
            filemtime(
                $theme_dir . '/assets/css/lesavond-aanmelden.css'
            )
        );

        wp_enqueue_script(
            'ehbo-lesavond-aanmelden',
            $theme_uri . '/assets/js/lesavond-aanmelden.js',
            [],
            filemtime(
                $theme_dir . '/assets/js/lesavond-aanmelden.js'
            ),
            true
        );
    }

    // Inschrijven.
    if (is_page('inschrijven')) {
        wp_enqueue_style(
            'ehbo-inschrijven',
            $theme_uri . '/assets/css/inschrijven.css',
            ['ehbo-page-base'],
            filemtime(
                $theme_dir . '/assets/css/inschrijven.css'
            )
        );

        wp_enqueue_script(
            'ehbo-inschrijven',
            $theme_uri . '/assets/js/inschrijven.js',
            [],
            filemtime(
                $theme_dir . '/assets/js/inschrijven.js'
            ),
            true
        );
    }

    // Hulpverlening aanvragen.
    if (is_page('hulpverlening-aanvragen')) {
        wp_enqueue_style(
            'ehbo-hulpverlening-aanvragen',
            $theme_uri . '/assets/css/hulpverlening-aanvragen.css',
            ['ehbo-page-base'],
            filemtime(
                $theme_dir . '/assets/css/hulpverlening-aanvragen.css'
            )
        );

        wp_enqueue_script(
            'ehbo-hulpverlening-aanvragen',
            $theme_uri . '/assets/js/hulpverlening-aanvragen.js',
            [],
            filemtime(
                $theme_dir . '/assets/js/hulpverlening-aanvragen.js'
            ),
            true
        );
    }

    // Main JavaScript.
    wp_enqueue_script(
        'ehbo-main',
        $theme_uri . '/assets/js/main.js',
        [],
        filemtime($theme_dir . '/assets/js/main.js'),
        true
    );
}

add_action(
    'wp_enqueue_scripts',
    'ehbo_petrus_donders_assets'
);