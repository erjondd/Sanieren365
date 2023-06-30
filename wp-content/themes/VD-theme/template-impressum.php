<?php

get_header();

/*
Template Name: Impressum Template
*/


?>
<section class="subhead-section-partner-warden">
    <div class="subhead-title">IMPRESSUM</div>
</section>

<section>
    <div class="container">
    <?php echo get_field('impressum_text'); ?>
    </div>
</section>

<?php
get_footer();
?>
