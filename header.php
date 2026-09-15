<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

    <meta charset="<?php bloginfo('charset'); ?>">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1"
    >

    <?php wp_head(); ?>

</head>


<body <?php body_class(); ?>>

<?php wp_body_open(); ?>


<a
    class="skip-link screen-reader-text"
    href="#main-content"
>
    Ga naar de inhoud
</a>


<header
    class="site-header"
    id="site-header"
>

    <div class="site-header__inner container">


        <!-- ========================================
             BRANDING
        ========================================= -->

        <div class="site-branding">

            <a
                class="site-logo"
                href="<?php echo esc_url(
                    home_url('/')
                ); ?>"
                aria-label="EHBO Petrus Donders - Home"
            >

                <img
                    src="<?php echo esc_url(
                        get_template_directory_uri() .
                        '/assets/images/logo-petrus-donders.png'
                    ); ?>"
                    alt="EHBO Petrus Donders Tilburg"
                >

            </a>


            <div class="site-branding__text">

                <span class="site-branding__text-top">
                    EHBO vereniging
                </span>

                <span class="site-branding__text-bottom">
                    Petrus Donders
                </span>

            </div>


            <div
                class="header-dot-pattern"
                aria-hidden="true"
            >

                <?php for ($i = 0; $i < 96; $i++) : ?>

                    <span></span>

                <?php endfor; ?>

            </div>

        </div>


<?php

global $wp;

$current_path = trim(
    $wp->request ?? '',
    '/'
);


/*
 * Active navigation section
 */

$is_over_ons =
    $current_path === 'over-ons';


$is_opleidingen =
    $current_path === 'opleidingen';


$is_hulpverlening =
    in_array(
        $current_path,
        [
            'hulpverlening',
            'hulpverlening-aanvragen',
        ],
        true
    );


$is_informatie =
    in_array(
        $current_path,
        [
            'informatie',
            'stempelkaart-lesavonden',
            'lesavond-aanmelden',
        ],
        true
    );


$is_publicaties =
    $current_path === 'publicaties';


$is_fotogalerij =
    $current_path === 'fotogalerij';


$is_contact =
    $current_path === 'contact';


$is_word_lid =
    $current_path === 'word-lid';

?>

        <!-- ========================================
             DESKTOP NAVIGATION
        ========================================= -->

        <nav
            class="desktop-navigation"
            aria-label="Hoofdnavigatie"
        >


            <!-- Over ons -->

            <div class="nav-dropdown">

                <a
                    class="
                        nav-link
                        nav-dropdown__trigger
                        <?php echo $is_over_ons
                            ? 'active'
                            : ''; ?>
                    "
                    href="<?php echo esc_url(
                        home_url('/over-ons/')
                    ); ?>"
                    <?php if ($is_over_ons) : ?>
                        aria-current="page"
                    <?php endif; ?>
                >

                    Over ons

                    <span
                        class="nav-dropdown__arrow"
                        aria-hidden="true"
                    >
                        ▾
                    </span>

                </a>


                <div class="nav-dropdown__menu">

                    <a
                        href="<?php echo esc_url(
                            home_url('/over-ons/')
                        ); ?>"
                    >
                        Onze vereniging
                    </a>


                    <a
                        href="<?php echo esc_url(
                            home_url(
                                '/over-ons/#geschiedenis'
                            )
                        ); ?>"
                    >
                        Geschiedenis
                    </a>


                    <a
                        href="<?php echo esc_url(
                            home_url(
                                '/over-ons/#vrijwilliger'
                            )
                        ); ?>"
                    >
                        Vrijwilliger worden
                    </a>

                </div>

            </div>


            <!-- Opleidingen -->

            <div class="nav-dropdown">

                <a
                    class="
                        nav-link
                        nav-dropdown__trigger
                        <?php echo $is_opleidingen
                            ? 'active'
                            : ''; ?>
                    "
                    href="<?php echo esc_url(
                        home_url('/opleidingen/')
                    ); ?>"
                    <?php if ($is_opleidingen) : ?>
                        aria-current="page"
                    <?php endif; ?>
                >

                    Opleidingen

                    <span
                        class="nav-dropdown__arrow"
                        aria-hidden="true"
                    >
                        ▾
                    </span>

                </a>


                <div class="nav-dropdown__menu">

                    <a
                        href="<?php echo esc_url(
                            home_url('/opleidingen/')
                        ); ?>"
                    >
                        Alle opleidingen
                    </a>


                    <a
                        href="<?php echo esc_url(
                            home_url(
                                '/opleidingen/#diploma-eerste-hulp'
                            )
                        ); ?>"
                    >
                        Diploma Eerste Hulp
                    </a>


                    <a
                        href="<?php echo esc_url(
                            home_url(
                                '/opleidingen/#eerste-hulp-kinderen'
                            )
                        ); ?>"
                    >
                        Eerste Hulp aan Kinderen
                    </a>


                    <a
                        href="<?php echo esc_url(
                            home_url(
                                '/opleidingen/#reanimatie'
                            )
                        ); ?>"
                    >
                        Reanimatie
                    </a>


                    <a
                        href="<?php echo esc_url(
                            home_url(
                                '/opleidingen/#wandelletsels'
                            )
                        ); ?>"
                    >
                        Sport- en wandelletsels
                    </a>


                    <a
                        href="<?php echo esc_url(
                            home_url(
                                '/opleidingen/#stop-de-bloeding'
                            )
                        ); ?>"
                    >
                        Stop de bloeding
                    </a>

                </div>

            </div>


            <!-- Hulpverlening -->

            <div class="nav-dropdown">

                <a
                    class="
                        nav-link
                        nav-dropdown__trigger
                        <?php echo $is_hulpverlening
                            ? 'active'
                            : ''; ?>
                    "
                    href="<?php echo esc_url(
                        home_url('/hulpverlening/')
                    ); ?>"
<?php if ($current_path === 'hulpverlening') : ?>
    aria-current="page"
<?php endif; ?>
                >

                    Hulpverlening

                    <span
                        class="nav-dropdown__arrow"
                        aria-hidden="true"
                    >
                        ▾
                    </span>

                </a>


                <div class="nav-dropdown__menu">

                    <a
                        href="<?php echo esc_url(
                            home_url('/hulpverlening/')
                        ); ?>"
                    >
                        Hulpverlening bij evenementen
                    </a>


                    <a
                        href="<?php echo esc_url(
                            home_url(
                                '/hulpverlening-aanvragen/'
                            )
                        ); ?>"
                    >
                        Hulpverlening aanvragen
                    </a>

                </div>

            </div>


            <!-- Informatie -->

            <div class="nav-dropdown">

                <a
                    class="
                        nav-link
                        nav-dropdown__trigger
                        <?php echo $is_informatie
                            ? 'active'
                            : ''; ?>
                    "
                    href="<?php echo esc_url(
                        home_url('/informatie/')
                    ); ?>"
<?php if ($current_path === 'informatie') : ?>
    aria-current="page"
<?php endif; ?>
                >

                    Informatie

                    <span
                        class="nav-dropdown__arrow"
                        aria-hidden="true"
                    >
                        ▾
                    </span>

                </a>


                <div class="nav-dropdown__menu">

                    <a
                        href="<?php echo esc_url(
                            home_url('/informatie/')
                        ); ?>"
                    >
                        Praktische informatie
                    </a>


                    <a
                        href="<?php echo esc_url(
                            home_url(
                                '/informatie/#lidmaatschap'
                            )
                        ); ?>"
                    >
                        Lidmaatschap
                    </a>


                    <a
                        href="<?php echo esc_url(
                            home_url(
                                '/informatie/#oefenavonden'
                            )
                        ); ?>"
                    >
                        Oefenavonden & hercertificering
                    </a>


                    <a
                        href="<?php echo esc_url(
                            home_url(
                                '/stempelkaart-lesavonden/'
                            )
                        ); ?>"
                    >
                        Stempelkaart & lesavonden
                    </a>

                </div>

            </div>


            <!-- Publicaties -->

            <a
                class="
                    nav-link
                    <?php echo $is_publicaties
                        ? 'active'
                        : ''; ?>
                "
                href="<?php echo esc_url(
                    home_url('/publicaties/')
                ); ?>"
                <?php if ($is_publicaties) : ?>
                    aria-current="page"
                <?php endif; ?>
            >
                Publicaties
            </a>


            <!-- Fotogalerij -->

            <a
                class="
                    nav-link
                    <?php echo $is_fotogalerij
                        ? 'active'
                        : ''; ?>
                "
                href="<?php echo esc_url(
                    home_url('/fotogalerij/')
                ); ?>"
                <?php if ($is_fotogalerij) : ?>
                    aria-current="page"
                <?php endif; ?>
            >
                Fotogalerij
            </a>


            <!-- Contact -->

            <a
                class="
                    nav-link
                    <?php echo $is_contact
                        ? 'active'
                        : ''; ?>
                "
                href="<?php echo esc_url(
                    home_url('/contact/')
                ); ?>"
                <?php if ($is_contact) : ?>
                    aria-current="page"
                <?php endif; ?>
            >
                Contact
            </a>

        </nav>


        <!-- ========================================
             HEADER CTA
        ========================================= -->

        <a
            class="
                header-cta
                <?php echo $is_word_lid
                    ? 'active'
                    : ''; ?>
            "
            href="<?php echo esc_url(
                home_url('/word-lid/')
            ); ?>"
            <?php if ($is_word_lid) : ?>
                aria-current="page"
            <?php endif; ?>
        >
            Word lid
        </a>


        <!-- ========================================
             MOBILE MENU BUTTON
        ========================================= -->

        <button
            class="mobile-menu-toggle"
            type="button"
            aria-label="Menu openen"
            aria-expanded="false"
            aria-controls="mobile-navigation"
        >

            <span></span>
            <span></span>
            <span></span>

        </button>

    </div>


    <!-- ========================================
         MOBILE NAVIGATION
    ========================================= -->

    <nav
        class="mobile-navigation"
        id="mobile-navigation"
        aria-label="Mobiele navigatie"
    >


        <!-- Over ons -->

        <details class="mobile-nav-dropdown">

            <summary>
                Over ons
            </summary>


            <div class="mobile-nav-dropdown__menu">

                <a
                    href="<?php echo esc_url(
                        home_url('/over-ons/')
                    ); ?>"
                >
                    Onze vereniging
                </a>


                <a
                    href="<?php echo esc_url(
                        home_url(
                            '/over-ons/#geschiedenis'
                        )
                    ); ?>"
                >
                    Geschiedenis
                </a>


                <a
                    href="<?php echo esc_url(
                        home_url(
                            '/over-ons/#vrijwilliger'
                        )
                    ); ?>"
                >
                    Vrijwilliger worden
                </a>

            </div>

        </details>


        <!-- Opleidingen -->

        <details class="mobile-nav-dropdown">

            <summary>
                Opleidingen
            </summary>


            <div class="mobile-nav-dropdown__menu">

                <a
                    href="<?php echo esc_url(
                        home_url('/opleidingen/')
                    ); ?>"
                >
                    Alle opleidingen
                </a>


                <a
                    href="<?php echo esc_url(
                        home_url(
                            '/opleidingen/#diploma-eerste-hulp'
                        )
                    ); ?>"
                >
                    Diploma Eerste Hulp
                </a>


                <a
                    href="<?php echo esc_url(
                        home_url(
                            '/opleidingen/#eerste-hulp-kinderen'
                        )
                    ); ?>"
                >
                    Eerste Hulp aan Kinderen
                </a>


                <a
                    href="<?php echo esc_url(
                        home_url(
                            '/opleidingen/#reanimatie'
                        )
                    ); ?>"
                >
                    Reanimatie
                </a>


                <a
                    href="<?php echo esc_url(
                        home_url(
                            '/opleidingen/#wandelletsels'
                        )
                    ); ?>"
                >
                    Sport- en wandelletsels
                </a>


                <a
                    href="<?php echo esc_url(
                        home_url(
                            '/opleidingen/#stop-de-bloeding'
                        )
                    ); ?>"
                >
                    Stop de bloeding
                </a>

            </div>

        </details>


        <!-- Hulpverlening -->

        <details class="mobile-nav-dropdown">

            <summary>
                Hulpverlening
            </summary>


            <div class="mobile-nav-dropdown__menu">

                <a
                    href="<?php echo esc_url(
                        home_url('/hulpverlening/')
                    ); ?>"
                >
                    Hulpverlening bij evenementen
                </a>


                <a
                    href="<?php echo esc_url(
                        home_url(
                            '/hulpverlening-aanvragen/'
                        )
                    ); ?>"
                >
                    Hulpverlening aanvragen
                </a>

            </div>

        </details>


        <!-- Informatie -->

        <details class="mobile-nav-dropdown">

            <summary>
                Informatie
            </summary>


            <div class="mobile-nav-dropdown__menu">

                <a
                    href="<?php echo esc_url(
                        home_url('/informatie/')
                    ); ?>"
                >
                    Praktische informatie
                </a>


                <a
                    href="<?php echo esc_url(
                        home_url(
                            '/informatie/#lidmaatschap'
                        )
                    ); ?>"
                >
                    Lidmaatschap
                </a>


                <a
                    href="<?php echo esc_url(
                        home_url(
                            '/informatie/#oefenavonden'
                        )
                    ); ?>"
                >
                    Oefenavonden & hercertificering
                </a>


                <a
                    href="<?php echo esc_url(
                        home_url(
                            '/stempelkaart-lesavonden/'
                        )
                    ); ?>"
                >
                    Stempelkaart & lesavonden
                </a>

            </div>

        </details>


        <!-- Publicaties -->

        <a
            href="<?php echo esc_url(
                home_url('/publicaties/')
            ); ?>"
        >
            Publicaties
        </a>


        <!-- Fotogalerij -->

        <a
            href="<?php echo esc_url(
                home_url('/fotogalerij/')
            ); ?>"
        >
            Fotogalerij
        </a>


        <!-- Contact -->

        <a
            href="<?php echo esc_url(
                home_url('/contact/')
            ); ?>"
        >
            Contact
        </a>


        <!-- Word lid -->

        <a
            class="mobile-navigation__cta"
            href="<?php echo esc_url(
                home_url('/word-lid/')
            ); ?>"
        >
            Word lid
        </a>


    </nav>

</header>