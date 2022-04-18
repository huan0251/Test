<?php
/**
 * Allowed user to upload the Header image via WordPress Admin through Featured Image
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
    $featured_img_url = get_stylesheet_directory_uri() . "/assets/images/page.jpg";
}
?>

<img class="img-responsive" src="<?php echo $featured_img_url; ?>">