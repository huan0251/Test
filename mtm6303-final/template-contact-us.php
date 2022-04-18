<?php
/*
Template Name: Contact Page
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage MT6303_Assignment
 * @since MT6303 Assignment 1.0
 */

// Get header
get_header();?>

<?php
    while ( have_posts() ) : the_post();

        get_template_part( 'template-parts/page/content', 'contact' );

    endwhile; // End of the loop.
?>


<!-- Get footer -->
<?php get_footer() ; ?>

This ia my custom template.

