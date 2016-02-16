<?php
/*
 Template Name: 85% Width
*/
$content_width = (int)$swift_design_options['wrapper_width'] * .85 - 4 * $swift_design_options['airy'];
get_header(); ?>

    <div id="content" class="_85percent" role="main">
        <div class="div-content">
            <?php while (have_posts()) : the_post(); ?>


                <?php get_template_part('display/post', 'page'); ?>

                <?php //swift_content_nav( 'nav-below' ); ?>

                <?php comments_template('', true); ?>

            <?php endwhile; // end of the loop. ?>
        </div>
        <!-- #content -->
    </div>
    <!-- #primary -->


    </div>
    <!-- left -->
    </div>
    <!-- main -->
<?php //get_sidebar(); ?>
<?php get_footer(); ?>