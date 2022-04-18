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
    $featured_img_url = get_stylesheet_directory_uri() . "/assets/images/contact.jpg";
}
?>

 <!-- Add your content of header -->

<div class="section-container no-padding">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <img class="img-responsive" src="<?php echo $featured_img_url; ?>">
            </div>
            <div class="col-xs-12">
                
                <!-- Add content via a WordPress Widget- 'mtm6303final-sidebar' -->
                    <div class="col-md-4 ">
                        <?php if (is_active_sidebar('mtm6303final-sidebar')){
                            dynamic_sidebar('mtm6303final-sidebar'); 
                            }
                        ?>    
                        <!-- Use urlencode(strip_tags(mtm6303final_get_dynamic_sidebar to add google map in sidebar -->
                        <div class="mapouter">
                          <div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas"
                              src="https://maps.google.com/maps?q=<?php echo urlencode(strip_tags(mtm6303final_get_dynamic_sidebar('mtm6303final-sidebar'))) ?>Algonquin%20college%20Campus&t=&z=13&ie=UTF8&iwloc=&output=embed"
                              frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><br>
                            <style>
                              .mapouter {
                                position: relative;
                                text-align: right;
                                height: 300px;
                                width: 100%;
                              }
                              .gmap_canvas {
                                overflow: hidden;
                                background: none !important;
                                height: 300px;
                                width: 100%;
                              }
                            </style>
                          </div>
                        </div>
                
                    <!-- Add content via a WordPress Widget- 'mtm6303final-sidebar-secondary' -->
                        <div>
                            <?php if (is_active_sidebar('mtm6303final-sidebar-secondary')){
                                dynamic_sidebar('mtm6303final-sidebar-secondary'); 
                                }
                            ?>    
                        </div>
                       
                    </div>

                <!-- Contact Form 7 display -->
                <div class="row">
                    <div class="col-md-6 col-md-offset-1">
                    <h2 class="tm-text-secondary tm-mb-5">
                        <?php echo get_the_title();?>
                    </h2>

                    <div class="entry-content-page tm-mb-6">
                        <?php the_content(); ?>
                        <!-- Page Content -->
                    </div>
                </div>


                    
                </div>


            </div>

        </div>

    </div>
</div>