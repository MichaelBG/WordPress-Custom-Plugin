<?php
/*
* Plugin Name: Simple LMS Plugin
* Description: This is a learning management system plugin
* Version: 1.0
* Author: Michael Bekele
* Author URI: bit.ly/michael_bekele
*/


/* Register Custom Post Type - Courses */

function create_course_cpt() {

	$labels = array(
		'name' => _x( 'Courses', 'Post Type General Name', 'textdomain' ),
		'singular_name' => _x( 'Course', 'Post Type Singular Name', 'textdomain' ),
	);
	$args = array(
		'labels' => $labels,
		'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => false,
        'menu_icon' => 'dashicons-book',
        'query_var' => true,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
        'rewrite' => array('slug' => 'course') ,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'courses', $args );

}
add_action( 'init', 'create_course_cpt', 0 );


/* Add Custom Fields - Courses */
function CF_Courses_Main(){
    add_meta_box(
        "cf_courses_id",                    // ID
        "Course Custom Fields",            // Title of the Custom Field
        "CF_Courses",                      // Function
        "courses",                          // Custom Post Type
        "normal",                          // Priority
        "low",                             // Position
    );
}

function CF_Courses(){

	wp_head();
    ?>
		<div class="BG-Blue-1">
			<br>
			<div class="BG-Blue-2 col-90 MA center BR">
				<p> Subtitle</p>
				<input type="text" name="" class="col-90">
				<br><br>
		</div>
		<br>
		</div>

		<div class="BG-Blue-1">
			<br>
			<div class="BG-Blue-2 col-90 MA center BR">
				<p> Price </p>
				<input type="text" name="" class="col-90">
				<br><br>
		</div>
		<br>
		</div>

		<div class="BG-Blue-1">
			<br>
			<div class="BG-Blue-2 col-90 MA center BR">
				<p> Video Trailer </p>
				<input type="text" name="" class="col-90">
				<br><br>
		</div>
		<br>
		</div>

		<div class="BG-Blue-1">
			<br>
			<div class="BG-Blue-2 col-90 MA center BR">
				<p> Curriculum </p>
				<input type="text" name="" class="col-90">
				<br><br>
		</div>
		<br>
		</div>



    <?php
}

add_action('admin_init', 'CF_Courses_Main');

/* Include CSS file */

function add_style(){
    wp_register_style('style', plugin_dir_url(__FILE__).'assets/style.css');
    wp_enqueue_style('style', plugin_dir_url(__FILE__).'assets/style.css');
}

add_action('wp_enqueue_scripts','add_style');

/* Load Course Template */

function template_courses($template){
global $post;
if('courses'===$post -> post_type && locate_template(array('template-courses')) !== $template){
	return plugin_dir_path(__FILE__).'templates/template-courses.php';
}
return $template;

}

/* Filter the single_template with the custom function
*/

add_filter('single_template', 'template_courses');


/* Create a Database Table - Course Details */ 
function database_table(){
	global $wpdb;
	$database_table_name = $wpdb->prefix."lms_course_details";
	$charset = $wpdb->get_charset_collate;
	$course_det = "CREATE TABLE $database_table_name (
		ID 			int(9) not null,
		title 		text(100) not null,
		subtitle	text(500) not null,
		video 		varchar(100) not null,
		price 		int(9) not null,
		thumbnail 	text not null,
		content 	text not null,
		primary key(ID)
	) $charset; ";

	require_once(ABSPATH.'wp-admin/includes/upgrade.php');
	dbDelta($course_det);

}

register_activation_hook(__FILE__,'database_table');