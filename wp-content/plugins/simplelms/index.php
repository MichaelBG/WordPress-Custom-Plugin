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
    ?>

    <div>
        <h3> 
        Course Price
        </h3>
        <input type="text">
   </div>
    <?php
}

add_action('admin_init', 'CF_Courses_Main');