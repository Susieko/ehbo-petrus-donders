<!-- ========================================
     FOOTER
======================================== -->

<footer class="site-footer" id="site-footer">

    <div class="container">


        <div class="site-footer__main">


            <!-- ========================================
                 1. BRANDING
            ========================================= -->

            <div class="site-footer__branding">

                <a
                    class="site-footer__logo"
                    href="<?php echo esc_url(
                        home_url('/')
                    ); ?>"
                    aria-label="EHBO Petrus Donders - Home"
                >

                    <img
                        src="<?php echo esc_url(
                            get_stylesheet_directory_uri() .
                            '/assets/images/logo-petrus-donders.png'
                        ); ?>"
                        alt="EHBO Petrus Donders Tilburg"
                    >

                </a>


                <p>
                    EHBO Petrus Donders helpt mensen om met kennis,
                    vertrouwen en praktische vaardigheden te handelen
                    wanneer eerste hulp nodig is.
                </p>


                <a
                    class="site-footer__contact-link"
                    href="<?php echo esc_url(
                        home_url('/contact/')
                    ); ?>"
                >
                    Neem contact op
                    <span aria-hidden="true">→</span>
                </a>

            </div>



            <!-- ========================================
                 2. SNEL NAAR
            ========================================= -->

            <nav
                class="site-footer__column"
                aria-labelledby="footer-nav-title"
            >

                <h2 id="footer-nav-title">
                    Snel naar
                </h2>


                <ul>

                    <li>
                        <a href="<?php echo esc_url(
                            home_url('/opleidingen/')
                        ); ?>">
                            Opleidingen
                        </a>
                    </li>


                    <li>
                        <a href="<?php echo esc_url(
                            home_url(
                                '/informatie/#oefenavonden'
                            )
                        ); ?>">
                            Oefenavonden
                        </a>
                    </li>


                    <li>
                        <a href="<?php echo esc_url(
                            home_url('/hulpverlening/')
                        ); ?>">
                            Hulpverlening
                        </a>
                    </li>


                    <li>
                        <a href="<?php echo esc_url(
                            home_url(
                                '/word-lid/#mogelijkheden'
                            )
                        ); ?>">
                            Vrijwilliger worden
                        </a>
                    </li>


                    <li>
                        <a href="<?php echo esc_url(
                            home_url('/contact/')
                        ); ?>">
                            Contact
                        </a>
                    </li>

                </ul>

            </nav>



            <!-- ========================================
                 3. BELANGRIJKE LINKS
            ========================================= -->

            <nav
                class="
                    site-footer__column
                    site-footer__column--important
                "
                aria-labelledby="footer-important-title"
            >

                <h2 id="footer-important-title">
                    Belangrijke links
                </h2>


                <ul>


                    <!-- Inschrijven -->
                    <li>

                        <a href="<?php echo esc_url(
                            home_url('/inschrijven/')
                        ); ?>">

                            Lidmaatschap, opleidingen &
                            hercertificering

                            <span aria-hidden="true">
                                →
                            </span>

                        </a>

                    </li>


                    <!-- Lesavond aanmelden -->
                    <li>

                        <a href="<?php echo esc_url(
                            home_url('/lesavond-aanmelden/')
                        ); ?>">

                            Les- en oefenavonden

                            <span aria-hidden="true">
                                →
                            </span>

                        </a>

                    </li>


                    <!-- Rooster -->
                    <li>

                        <a href="<?php echo esc_url(
                            home_url(
                                '/informatie/#oefenavonden'
                            )
                        ); ?>">

                            Rooster lesavonden

                            <span aria-hidden="true">
                                →
                            </span>

                        </a>

                    </li>


                    <!-- Hulpverlening aanvragen -->
                    <li>

                        <a href="<?php echo esc_url(
                            home_url(
                                '/hulpverlening-aanvragen/'
                            )
                        ); ?>">

                            Hulpverlening aanvragen

                            <span aria-hidden="true">
                                →
                            </span>

                        </a>

                    </li>


                    <!-- ANBI -->
                    <li>

                        <a
                            href="<?php echo esc_url(
                                get_theme_file_uri(
                                    '/assets/documents/anbi-publicatie-2025.pdf'
                                )
                            ); ?>"
                            target="_blank"
                            rel="noopener noreferrer"
                        >

                            ANBI-publicatie 2025

                            <span aria-hidden="true">
                                ↗
                            </span>

                        </a>

                    </li>


                    <!-- Meerjarenbeleidsplan -->
                    <li>

                        <a
                            href="<?php echo esc_url(
                                get_theme_file_uri(
                                    '/assets/documents/meerjaren-beleidsplan-2025-2030.pdf'
                                )
                            ); ?>"
                            target="_blank"
                            rel="noopener noreferrer"
                        >

                            Meerjarenbeleidsplan 2025–2030

                            <span aria-hidden="true">
                                ↗
                            </span>

                        </a>

                    </li>


                </ul>

            </nav>



            <!-- ========================================
                 4. AANGESLOTEN BIJ
            ========================================= -->

            <div class="site-footer__association">

                <span class="site-footer__association-label">
                    Aangesloten bij
                </span>


                <img
                    src="<?php echo esc_url(
                        get_stylesheet_directory_uri() .
                        '/assets/images/logo-nationale-bond-ehbo.png'
                    ); ?>"
                    alt="Nationale Bond voor EHBO"
                >

            </div>


        </div>



        <!-- ========================================
             BOTTOM
        ========================================= -->

        <div class="site-footer__bottom">


            <p>
                &copy; 1929&ndash;<?php
                echo esc_html(date('Y'));
                ?>
                EHBO Petrus Donders Tilburg
            </p>


            <nav
                class="site-footer__legal"
                aria-label="Juridische informatie"
            >

                <a href="<?php echo esc_url(
                    home_url(
                        '/informatie/#veiligheid'
                    )
                ); ?>">
                    Privacy
                </a>


                <a href="<?php echo esc_url(
                    home_url('/contact/')
                ); ?>">
                    Contact
                </a>

            </nav>


        </div>


    </div>

</footer>


<?php wp_footer(); ?>

</body>
</html>