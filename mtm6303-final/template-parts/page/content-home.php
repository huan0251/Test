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

<?php
$featured_img_url = get_the_post_thumbnail_url();
if (empty($featured_img_url)) {
    $featured_img_url = get_stylesheet_directory_uri() . "/assets/images/img-home.jpg";
}
?>

<div class="white-text-container background-image-container" style="background-image: url('<?php echo $featured_img_url; ?>')">
    <div class="opacity"></div>
    <div class="container">
        <div class="row">
           
            <div class="col-md-6">
                <h1>Posuere lorem Ipsum</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Adipiscing commodo elit at imperdiet dui accumsan sit. Ipsum dolor sit
                    amet consectetur adipiscing elit. </p>
                 <a href="./page.php" title="" class="btn btn-lg btn-primary">About Us</a>
            </div>

        </div>
    </div>
</div>

<!-- user input content -->
<div class="section-container background-color-container white-text-container">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="text-center">
                    <h2>
                        <?php echo get_the_title();?>
                    </h2>
                    <p> 
                        <?php the_content(); ?><!-- Page Content -->
                    </p><!-- .entry-content-page -->
                </div>
            </div>
        </div>
     </div>
 </div>