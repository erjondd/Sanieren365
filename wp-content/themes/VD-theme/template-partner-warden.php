<?php

get_header();

/*
Template Name: Partner Warden Wpform Template
*/


?>
<section class="subhead-section-partner-warden">
    <div class="subhead-title">Partner Warden</div>
</section>
<section class="partner-warden-section  ">
    <div class="container">

        <?php echo do_shortcode('[wpforms id="980"]'); ?>
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
  var allModules = jQuery('.justopc');
  jQuery(document).on('scroll', function() {
    var scroll = jQuery(document).scrollTop();
    allModules.each(function(i, elm) {
      if (jQuery(elm).visible(true)) {
        jQuery(elm).addClass('justoz ');
      }
    })


  });

    

    document.querySelector('.wpforms-page-1 .wpforms-page-button').disabled = true;
  jQuery('#wpforms-980-field_18').keyup(function() {
    if ((this.value.length) === 4) {
      jQuery(".wpforms-page-1 .wpforms-page-button").addClass("blue-button");
      document.querySelector('.wpforms-page-1 .wpforms-page-button').disabled = false;
    } else {
      jQuery(".wpforms-page-1 .wpforms-page-button").removeClass("blue-button");
      document.querySelector('.wpforms-page-1 .wpforms-page-button').disabled = true;
    }
  });

  jQuery('#wpforms-980-field_18').on('keypress', function(e) {
    // Ensure that it is a number and stop the keypress
    if (e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) {
      e.preventDefault();
    }
  });


  document.getElementById("wpforms-980-field_18").addEventListener("keyup", myFunction);
  var input = document.getElementById('wpforms-980-field_18');

  function myFunction() {
    if (input.value.length > 0) {
      jQuery("#wpforms-980-field_18").addClass("form-control is-invalid");
      jQuery("#wpforms-980-field_18 .wpforms-field-row:last-of-type").removeClass("check-icon ");

    }
    if (input.value.length == 4) {
      jQuery("#wpforms-980-field_18").removeClass("is-invalid");
      jQuery("#wpforms-980-field_18 .wpforms-field-row:last-of-type").addClass("check-icon ");
      jQuery("#wpforms-980-field_18").addClass("form-control is-valid");
    }
    if (input.value.length < 4) {
      jQuery("#wpforms-980-field_18").removeClass("is-valid");
      jQuery("#wpforms-980-field_18 .wpforms-field-row:last-of-type").removeClass("check-icon ");
    }
  }

  
</script>
