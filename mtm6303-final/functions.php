<?php
/**
 * MTM6303-final functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage MT6303_Final
 * @since MT6303 Final 1.0
 */


/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function mtm6303final_setup() {

    /*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );


	// This theme uses wp_nav_menu() in two locations.
	
	register_nav_menus( array(
		'top'    => __( 'Top Menu', 'mtm6303final' ),
		'social' => __( 'Social Links Menu', 'mtm6303final' ),
	) );

	//Main menu - Top

	function mtm6303final_getnav($theme_location = "top"){
		$nav_items_return = [];
		global $wp_query;
		$current_post_title = $wp_query->post->post_title;
		$theme_locations = get_nav_menu_locations();
	
		$menu_obj = get_term($theme_locations[$theme_location], 'nav_menu');
	
		$menu_name = $menu_obj->name;
		$nav_items = wp_get_nav_menu_items($menu_name);
		foreach ($nav_items as  $nav_item_id => $nav_item) {
			if ($nav_item->post_status == "publish") {
				$nav_items_return[$nav_item_id]["ID"] = $nav_item->ID;
				$nav_items_return[$nav_item_id]["url"] = $nav_item->url;
				$nav_items_return[$nav_item_id]["title"] = $nav_item->title;
				$nav_items_return[$nav_item_id]["classes"] = implode(" ", $nav_item->classes);
				$nav_items_return[$nav_item_id]["active"] = false;
				if ($current_post_title == $nav_item->title) {
					$nav_items_return[$nav_item_id]["active"] = true;
				}
			}
		}
		return $nav_items_return;
	}
	
	
	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	add_image_size( 'mtm6303final-featured-image', 2000, 1200, true );

	add_image_size( 'mtm6303final-thumbnail-avatar', 100, 100, true );
	
	// Enqueue Styles
	//Use wp_enqueue_styles() functions to load the styles
	// All styles
	if(!is_admin()) {
		wp_enqueue_style('mtm6303final-main-styles', get_theme_file_uri('/assets/css/main.a3f694c0.css'), '', '1.0');

		// Use wp_enqueue_script() function to load the scripts
		wp_enqueue_script( 'jquery', get_theme_file_uri( '/js/jquery.js' ), '', '1.0.0', true );
		wp_enqueue_script('parallax', get_theme_file_uri('/js/parallax.min.js'), array('jquery'), '1.0.0', true);
		wp_enqueue_script('bootstrap', get_theme_file_uri('/js/bootstrap.min.js'), array('jquery'), '1.0.0', true);
	}

}

function mtm6303final_sidebars() {
    register_sidebar( array(
        'name'          => __( 'MTM6303 Final Contact Page Sidebar-Primary', 'mtm6303final' ),
		'id'            => 'mtm6303final-sidebar',
		'description'   => 'Sidebar for contact page-primary ',
        'before_widget' => '<div id="mtm6303final-sidebar" class="widget mtm6303final-sidebar">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
 
    register_sidebar( array(
        'name'          => __( 'MTM6303 Final Contact Page Sidebar-secondary', 'mtm6303final' ),
		'id'            => 'mtm6303final-sidebar-secondary',
		'description'   => 'Sidebar for contact page-secondary',
        'before_widget' => '<div id="mtm6303final-sidebar-secondary" class="widget mtm6303final-sidebar-secondary">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
	) );
	
	register_sidebar( array(
        'name'          => __( 'MTM6303 Final Footer Sidebar', 'mtm6303final' ),
		'id'            => 'mtm6303final-sidebar-footer',
		'description'   => 'Sidebar for footer',
        'before_widget' => '<div id="mtm6303final-sidebar-footer" class="widget mtm6303final-sidebar-footer">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}

if(!function_exists('mtm6303final_get_dynamic_sidebar')){
	function mtm6303final_get_dynamic_sidebar($sidebar_id)
	{
		ob_start();
		dynamic_sidebar($sidebar_id);
		$out = ob_get_contents();
		ob_end_clean();
		return $out;
	}
}


// Call the widgets funtion
add_action( 'widgets_init', 'mtm6303final_sidebars');

// add_action( 'init', 'mtm6303final_setup' );
add_action( 'after_setup_theme', 'mtm6303final_setup' );
