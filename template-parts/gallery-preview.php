<section class="gallery-preview reveal-section" id="fotogalerij">

    <div class="container">

        <div class="gallery-preview__header">

            <div class="gallery-preview__heading">

                <span class="section-eyebrow">
                    Onze vereniging in beeld
                </span>

                <h2>Een kijkje bij Petrus Donders</h2>

                <p>
                    Van samen oefenen tot het behalen van een diploma en het
                    vieren van onze jubilarissen. Bekijk een aantal momenten
                    uit onze vereniging.
                </p>

            </div>

            <a
                class="section-button gallery-preview__button"
                href="<?php echo esc_url(
    home_url('/fotogalerij/')
); ?>">
                Bekijk de volledige fotogalerij
                <span aria-hidden="true">→</span>
            </a>

        </div>


        <div class="gallery-preview__grid">

            <!-- Oefenen -->
            <a
                class="gallery-preview__card gallery-preview__card--practice"
                href="<?php echo esc_url(
    home_url('/fotogalerij/#opleiding')
); ?>">
                <img
                    src="<?php echo esc_url(
                        get_template_directory_uri() .
                        '/assets/images/gallery-oefenen.jpg'
                    ); ?>"
                    alt="Deelnemers oefenen eerste hulp tijdens een opleiding"
                    loading="lazy"
                >

                <span class="gallery-preview__overlay"></span>

                <span class="gallery-preview__caption">
                    <small>Opleiding en oefening</small>
                    <strong>Samen leren handelen</strong>
                </span>
            </a>


            <!-- Jubilaris -->
            <a
                class="gallery-preview__card gallery-preview__card--jubilee"
                href="<?php echo esc_url(
    home_url('/fotogalerij/#vereniging')
); ?>">
                <img
                    src="<?php echo esc_url(
                        get_template_directory_uri() .
                        '/assets/images/gallery-jubilaris.jpg'
                    ); ?>"
                    alt="Een jubilaris van Petrus Donders ontvangt bloemen"
                    loading="lazy"
                >

                <span class="gallery-preview__overlay"></span>

                <span class="gallery-preview__caption">
                    <small>Verenigingsleven</small>
                    <strong>Al 97 jaar samen</strong>
                </span>
            </a>


            <!-- Geslaagden -->
            <a
                class="gallery-preview__card gallery-preview__card--graduates"
                href="<?php echo esc_url(
    home_url('/fotogalerij/#geslaagden')
); ?>">
                <img
                    src="<?php echo esc_url(
                        get_template_directory_uri() .
                        '/assets/images/gallery-geslaagden.jpg'
                    ); ?>"
                    alt="Geslaagden tonen trots hun Diploma Eerste Hulp"
                    loading="lazy"
                >

                <span class="gallery-preview__overlay"></span>

                <span class="gallery-preview__caption">
                    <small>Diploma Eerste Hulp</small>
                    <strong>Trots op onze geslaagden</strong>
                </span>
            </a>

        </div>

    </div>

</section>