<?php
/**
 * De twee externe EHBO-informatiebronnen, conform verzoek oktober 2026.
 */
$logo_directory = get_template_directory_uri() . '/assets/images/organisations/';
$ehbo_organisations = [
    ['name' => 'Het Oranje Kruis', 'url' => 'https://www.hetoranjekruis.nl/', 'logo' => '1.png'],
    ['name' => 'Nationale Bond voor EHBO', 'url' => 'https://www.ehbonationalebond.nl/', 'logo' => '2.png'],
];
?>
<section class="organisation-loop" aria-labelledby="organisation-loop-title">
    <div class="container organisation-loop__header">
        <div>
            <span class="section-eyebrow">Handige organisaties</span>
            <h2 id="organisation-loop-title">Meer weten over EHBO?</h2>
        </div>
        <p>Meer informatie over eerste hulp vind je bij Het Oranje Kruis en de Nationale Bond voor EHBO.</p>
    </div>
    <div class="container organisation-loop__links">
        <?php foreach ($ehbo_organisations as $organisation) : ?>
            <a class="organisation-loop__item" href="<?php echo esc_url($organisation['url']); ?>"
                target="_blank" rel="noopener noreferrer"
                aria-label="<?php echo esc_attr('Bezoek ' . $organisation['name'] . ' (opent in nieuw tabblad)'); ?>">
                <img src="<?php echo esc_url($logo_directory . $organisation['logo']); ?>" alt="" loading="lazy">
                <span class="organisation-loop__name"><?php echo esc_html($organisation['name']); ?></span>
                <span class="organisation-loop__arrow" aria-hidden="true">↗</span>
            </a>
        <?php endforeach; ?>
    </div>
</section>
