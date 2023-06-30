<?php

get_header();

/*
Template Name: Confirm Page Template
*/

?>
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<div class="confirm-page justopc ">
    <div class="container">
        <lottie-player src="<?php echo get_template_directory_uri(); ?>/images/ArofwBYOXA.json" background="transparent" speed="1" style="width: 300px; height: 300px;" loop autoplay></lottie-player>
        <div class="confirm-content">
            <div class="confirm-title">
                Vielen Dank für Ihre Anfrage!
            </div>
            <div class="confirm-desc">
                Sie werden drei unverbindliche Angebote von Handwerksbetrieben aus Ihrer Umgebung erhalten. Bei weiteren Fragen oder Unklarheiten werden sich die Handwerksbetriebe bei Ihnen melden.
            </div>
            <div class="confirm-button">
                <a href="<?php echo home_url(); ?>">Weitere Angebote anfordern</a>
            </div>
        </div>
    </div>
</div>
<script>
    //Module Add On First Window
    var allModules = jQuery('.justopc');
    allModules.each(function(i, elm) {
        if (jQuery(elm).visible(true)) {
            jQuery(elm).addClass('justoz ');
        }
    });

    //Module Add Scroll
    var allModules = jQuery('.justopc');
    jQuery(document).on('scroll', function() {
        var scroll = jQuery(document).scrollTop();
        allModules.each(function(i, elm) {
            if (jQuery(elm).visible(true)) {
                jQuery(elm).addClass('justoz ');
            }
        })


    });
</script>
<?php
get_footer();
?>