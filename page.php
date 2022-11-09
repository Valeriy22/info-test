<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
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
