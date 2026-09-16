<?php
/*
Template Name: Over ons
Template Post Type: page
*/

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<main
    id="main-content"
    class="inner-page about-page"
>

    <?php
    while (have_posts()) :
        the_post();

        the_content();

    endwhile;
    ?>

</main>

<?php get_footer(); ?>