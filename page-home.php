<?php
/**
 *
 * Template name: Home Template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package amtaxand
 */
get_header();
?>


    <!-- Video Partial-->
    <?php get_template_part('template-parts/content', 'video'); ?>
    <!-- End Video Partial-->

    <!-- About us Partial -->
    <?php get_template_part('template-parts/content', 'about'); ?>
    <!-- End About us Partial-->

    <!-- Services  Partial -->
    <?php get_template_part('template-parts/content', 'services'); ?>
    <!-- End Services Partial-->


<?php
get_footer();
