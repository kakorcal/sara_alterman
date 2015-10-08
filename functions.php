<?php 

//Get styles and scripts 

function get_files() {
	// wp_enqueue_style( 'bootstrap.min', get_template_directory_uri() . '/css/bootstrap.min.css' );
	// wp_enqueue_style( 'lightbox', get_template_directory_uri() . '/css/lightbox.css' );
	wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css' );
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	
	wp_register_script( 'jquery' );
	     
    // wp_register_script( 'bootstrap.min', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ) );
    // wp_register_script( 'lightbox.min', get_template_directory_uri() . '/js/lightbox.min.js', array( 'jquery' ) );
    // wp_register_script( 'contact-val', get_template_directory_uri() . '/js/contact-val.js', array( 'jquery' ) );

    // wp_enqueue_script( 'bootstrap.min' );
    // wp_enqueue_script( 'lightbox.min' );
    // wp_enqueue_script( 'contact-val' );
}

add_action('wp_enqueue_scripts', 'get_files');

//Theme Support

function theme_setup() {

	//Navigation Menus
	register_nav_menus(array(

		'primary' => __('Primary Navigation'),
		'footer'  => __('Footer Navigation')

	));

	//Featured Image Support
	add_theme_support('post-thumbnails');
	add_image_size('selectedWorks', 345, 231, true);
	add_image_size('aboutSara', 549, 411, true);
}
add_action('after_setup_theme','theme_setup');

//Excerpt Word Count Length

// function custom_excerpt_length() {
// 	return 16;
// }
// add_filter('excerpt_length','custom_excerpt_length');

// //Add Widget Location
// function myWidget() {
// 	register_sidebar(array(
// 		'name' => 'Sidebar',
// 		'id'   => 'sidebar1'

// 		));

// 	register_sidebar(array(
// 		'name' => 'Instagram',
// 		'id'   => 'sidebar2'

// 		));

// 	register_sidebar(array(
// 		'name' => 'Twitter',
// 		'id'   => 'sidebar3'

// 		));

// }
// add_action('widgets_init','myWidget');

?>