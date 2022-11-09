<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

    <?php
    // Start the loop.
    while ( have_posts() ) : the_post();

        echo str_replace('&#038;', '&', apply_filters('the_content', get_the_content()));

    // End the loop.
    endwhile;
    ?>

<?php get_footer(); ?>