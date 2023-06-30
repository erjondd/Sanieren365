<?php

get_header();

/*
Template Name: Services Template
*/

?>
<section class="home-pages service-page">
    <div class="container">
        <div class="home-pages-content">
            <div class="one-page justopc">
                <div class="one-page-wrap">
                    <a href="<?php echo site_url('/projekt-wahlen/kuchen'); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/kuchen.jpg">
                        <div class="one-page-title">Küchen</div>
                    </a>
                </div>
            </div>
            <div class="one-page justopc">
                <div class="one-page-wrap">
                    <a href="<?php echo site_url('/projekt-wahlen/badezimmer'); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/bada.jpg">
                        <div class="one-page-title">Badezimmer</div>
                    </a>
                </div>
            </div>
            <div class="one-page justopc">
                <div class="one-page-wrap">
                    <a href="<?php echo site_url('/projekt-wahlen/bodenleger'); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/bodo.jpg">
                        <div class="one-page-title">Bodenleger</div>
                    </a>
                </div>
            </div>
            <div class="one-page justopc">
                <div class="one-page-wrap">
                    <a href="<?php echo site_url('/projekt-wahlen/schreiner'); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/schreiner.jpg">
                        <div class="one-page-title">Schreiner</div>
                    </a>
                </div>
            </div>
            <div class="one-page justopc">
                <div class="one-page-wrap">
                    <a href="<?php echo site_url('/projekt-wahlen/plattenleger'); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/plattenleger.jpg">
                        <div class="one-page-title">Plattenleger</div>
                    </a>
                </div>
            </div>
            <div class="one-page justopc">
                <div class="one-page-wrap">
                    <a href="<?php echo site_url('/projekt-wahlen/fenster'); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/fenster-new.jpg">
                        <div class="one-page-title">Fenster</div>
                    </a>
                </div>
            </div>
            <div class="one-page justopc">
                <div class="one-page-wrap">
                    <a href="<?php echo site_url('/projekt-wahlen/architekt'); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/architect.jpg">
                        <div class="one-page-title">Architekt</div>
                    </a>
                </div>
            </div>
            <div class="one-page justopc">
                <div class="one-page-wrap">
                    <a href="<?php echo site_url('/projekt-wahlen/maler'); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/maler.jpg">
                        <div class="one-page-title">Maler</div>
                    </a>
                </div>
            </div>
            <div class="one-page justopc">
                <div class="one-page-wrap">
                    <a href="<?php echo site_url('/projekt-wahlen/gartner'); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/gartner.jpg">
                        <div class="one-page-title">Gärtner</div>
                    </a>
                </div>
            </div>
            <div class="one-page justopc">
                <div class="one-page-wrap">
                    <a href="<?php echo site_url('/projekt-wahlen/elektriker'); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/elektrikeri.jpg">
                        <div class="one-page-title">Elektriker</div>
                    </a>
                </div>
            </div>
            <div class="one-page justopc">
                <div class="one-page-wrap">
                    <a href="<?php echo site_url('/projekt-wahlen/dachdecker'); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/dachdacker.jpg">
                        <div class="one-page-title">Dachdecker</div>
                    </a>
                </div>
            </div>
            <div class="one-page justopc">
                <div class="one-page-wrap">
                    <a href="<?php echo site_url('/projekt-wahlen/wintergarten'); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/winter.jpg">
                        <div class="one-page-title">Wintergarten</div>
                    </a>
                </div>
            </div>
            <div class="one-page justopc">
                <div class="one-page-wrap">
                    <a href="<?php echo site_url('/projekt-wahlen/Fassaden'); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/fassaden.png">
                        <div class="one-page-title">Fassaden</div>
                    </a>
                </div>
            </div>
            <div class="one-page justopc">
                <div class="one-page-wrap">
                    <a href="<?php echo site_url('/projekt-wahlen/Solar'); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/solar.png">
                        <div class="one-page-title">Solar</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
get_footer();
?>
<script>


//Module Add On First Window
var allModules = jQuery('.justopc');
allModules.each(function(i, elm) {
  if (jQuery(elm).visible(true)) {
    jQuery(elm).addClass('justoz ');
  }
});

//Module Add Scroll
var justopc = jQuery('.justopc');
jQuery(document).on('scroll', function() {
  var scroll = jQuery(document).scrollTop();
  justopc.each(function(i, elm) {
    if (jQuery(elm).visible(true)) {
      jQuery(elm).addClass('justoz ');
    }
  })


});
</script>