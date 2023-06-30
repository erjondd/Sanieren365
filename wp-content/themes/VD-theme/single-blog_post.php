<?php

/**
 * The template for displaying blog post
 *
 * 
 *
 
 */

get_header();
?>
<section class="section-blog">
    <div class="section-blog-image">
        <img src="<?php echo get_field('blog_image'); ?>" alt="">
    </div>
    <div class="container">
        <div class="section-blog-content module">

            <div class="section-blog-title"> <?php echo get_the_title(); ?></div>
            <div class="section-blog-description"> <?php echo get_field('blog_description'); ?></div>
            <div class="section-blog-button">
                <a href="<?php echo get_field('button_url'); ?>"><?php echo get_field('button_text'); ?></a>
            </div>
        </div>
    </div>
</section>
<section class="blog-related-posts module">
    <div class="container">
        <div class="related-posts-title">
            Related Posts
        </div>
        <div class="all-related-posts">
            <?php
            $RelatedPosts = new WP_Query(array('orderby' => 'rand',  'category__in' => wp_get_post_categories($post->ID), 'posts_per_page' => '3', 'post_type' => 'blog_post', 'post__not_in' => array(get_the_ID())));
            if ($RelatedPosts->have_posts()) :
                while ($RelatedPosts->have_posts()) :  $RelatedPosts->the_post();  ?>
                    <div class="one-blog-post">
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
            else :
            endif;
            wp_reset_postdata(); ?>
        </div>
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