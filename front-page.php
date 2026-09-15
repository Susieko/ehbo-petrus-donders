<?php get_header(); ?>

<main>

<?php get_template_part('template-parts/hero'); ?>

<?php get_template_part('template-parts/anniversary-ribbon'); ?>

<?php get_template_part('template-parts/praktische-informatie'); ?>

    <?php get_template_part('template-parts/about'); ?>

    <?php get_template_part('template-parts/opleidingen'); ?>

    <?php get_template_part('template-parts/oefenavonden'); ?>

    <?php get_template_part('template-parts/hulpverlening'); ?>

<?php get_template_part('template-parts/vrijwilliger'); ?>

<?php get_template_part('template-parts/publicaties-preview'); ?>

<?php get_template_part('template-parts/gallery-preview'); ?>

<?php get_template_part('template-parts/contact'); ?>
</main>

<?php
get_template_part(
    'template-parts/external-organisations'
);
?>

<?php get_footer(); ?>