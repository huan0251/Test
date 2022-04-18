<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage MT6303_Final
 * @since MT6303 Final 1.0
 * @version 1.0
 */

?>
    <!-- <div class="row">
        <h4 class="tm-text-secondary">
            <a href="<?php echo get_permalink() ?>"><?php echo get_the_title();?></a>
        </h4>
        <div class="col-md-12">
            <?php the_post_thumbnail('medium_large') ?>
        </div>

        <div class="entry-content-page">
            <?php the_excerpt(); ?>
        </div>
    </div> -->

    
      <div class="col-md-6">
        <h2><?php echo get_the_title();?></h2>
        <div class="img-responsive">
            <?php the_post_thumbnail('medium') ?>
        </div><br>
        <p><?php the_excerpt(); ?></p>
      </div>
    
