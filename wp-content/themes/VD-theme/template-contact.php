<?php

get_header();

/*
Template Name: Contact Template
*/

?>

<section class="subhead-section-contact ">
    <div class="subhead-title">Kontakt
    </div>
  
</section>
<div class="form-contact justoz">
    <?php
    echo do_shortcode('[contact-form-7 id="1285" title="Untitled"]');
    ?>
</div>
<?php
get_footer();
?>
<script>
    //Module Add On First Window
var fadeImage = jQuery('.module');
fadeImage.each(function(i, elm) {
  if (jQuery(elm).visible(true)) {
    jQuery(elm).addClass('fade-in-image ');
  }
});
//Module Add Scroll
var fadeImage = jQuery('.module');
jQuery(document).on('scroll', function() {
  var scroll = jQuery(document).scrollTop();
  fadeImage.each(function(i, elm) {
    if (jQuery(elm).visible(true)) {
      jQuery(elm).addClass('fade-in-image ');
    }
  })


});

//Module Add On First Window
var modFadeIn = jQuery('.modulle-fadeIn');
modFadeIn.each(function(i, elm) {
  if (jQuery(elm).visible(true)) {
    jQuery(elm).addClass('fadeInt ');
  }
});
//Module Add Scroll
var modFadeIn = jQuery('.modulle-fadeIn');
jQuery(document).on('scroll', function() {
  var scroll = jQuery(document).scrollTop();
  modFadeIn.each(function(i, elm) {
    if (jQuery(elm).visible(true)) {
      jQuery(elm).addClass('fadeInt ');
    }
  })


});
//Module Add On First Window
var ifrightleft = jQuery('.ifrightleft');
ifrightleft.each(function(i, elm) {
  if (jQuery(elm).visible(true)) {
    jQuery(elm).addClass('rightleft ');
  }
});

//Module Add Scroll
var ifrightleft = jQuery('.ifrightleft');
jQuery(document).on('scroll', function() {
  var scroll = jQuery(document).scrollTop();
  ifrightleft.each(function(i, elm) {
    if (jQuery(elm).visible(true)) {
      jQuery(elm).addClass('rightleft');
    }
  })


});



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