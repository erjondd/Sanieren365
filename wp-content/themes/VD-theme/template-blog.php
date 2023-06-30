<?php

get_header();

/*
Template Name: Blog Template
*/


?>
<section class="my-blog-content module">
    <div class="container">
    <?php
        $my_query_args = array(
            'posts_per_page' => 99,
            'offset' => 0,
            'orderby' => 'post_date',
            'order' => 'ASC',
            'post_type' => 'blog_post',


        );

        $my_query = new WP_Query($my_query_args);
        $index = 0;
        if ($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post(); ?>
                <?php $index++; ?>
                
        <div class="one-blog-post module">
            <div class="one-blog-image"><a href="<?php the_permalink(); ?>">
            <img src="<?php echo get_field('blog_image'); ?>" alt=""></a></div>
            <div class="one-blog-post-title">
            <a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a>
            </div>
            <div class="one-blog-post-description">
            <?php echo wp_trim_words(get_field('blog_description'), 20, '...'); ?>
            </div>
            <div class="one-blog-post-button">
                <a href="<?php the_permalink(); ?>">Click Here</a>
            </div>
        </div>

        <?php endwhile;
        endif;
        wp_reset_postdata(); ?>
    </div>
</section>
<?php
get_footer();


?>
<script>
       jQuery(document).ready(function(){
    //Module Add On First Window
    var allModules = jQuery('.module');
    allModules.each(function (i, elm) {
        if (jQuery(elm).visible(true)) {
            jQuery(elm).addClass('module-ready');
        }
    });

    //Module Add Scroll
    var allModules = jQuery('.module');
    jQuery(document).on('scroll', function () {
        var scroll = jQuery(document).scrollTop();
        allModules.each(function (i, elm) {
            if (jQuery(elm).visible(true)) {
                jQuery(elm).addClass('module-ready');
            }
        })

        console.log(scroll);
    });

});


    //Module Add On First Window
    var allModules = jQuery('.module');
    allModules.each(function (i, elm) {
        if (jQuery(elm).visible(true)) {
            jQuery(elm).addClass('module-ready');
        }
    });

    //Module Add Scroll
    var allModules = jQuery('.module');
    jQuery(document).on('scroll', function () {
        var scroll = jQuery(document).scrollTop();
        allModules.each(function (i, elm) {
            if (jQuery(elm).visible(true)) {
                jQuery(elm).addClass('module-ready');
            }
        })

        // console.log(scroll);
    });

</script>