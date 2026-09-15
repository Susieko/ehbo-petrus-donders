<?php
$current_year = (int) current_time('Y');
$association_age = $current_year - 1929;
?>

<section class="anniversary-ribbon" aria-label="Geschiedenis van EHBO Petrus Donders">
    <div class="anniversary-ribbon__inner container">

        <div class="anniversary-ribbon__year">
            <span>Sinds</span>
            <strong class="year-counter" data-year="1929">1929</strong>
        </div>

        <p class="anniversary-ribbon__message year-strip__text">
            <strong>Al <?php echo esc_html($association_age); ?> jaar</strong>
            actief voor eerste hulp in Tilburg
        </p>

        <div class="anniversary-ribbon__heartbeat" aria-hidden="true">
            <svg viewBox="0 0 250 54">
                <path d="M2 29h55l9-1 8-17 13 37 14-42 13 23h33l8-1 7-10 10 21 11-10h65" />
            </svg>
        </div>

    </div>
</section>