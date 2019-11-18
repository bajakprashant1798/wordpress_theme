<?php
/*
    ===============================
    Custom Post Type
    ===============================
*/    
function wpportfolio1_register_post_type(){

    $labels = array(
		'name'               => 'portfolio',
		'singular_name'      => 'portfolio',
		'menu_name'          => 'portfolio',
		'add_new'            => 'Add portfolio word',
		'add_new_item'       => 'Add Item',
		'new_item'           => 'New Item',
		'edit_item'          => 'Edit Item',
		'view_item'          => 'View Item',
		'all_items'          => 'All Item',
		'search_items'       => 'Search portfolio',
		'parent_item_colon'  => '',
		'not_found'          => 'No portfolio found',
		'not_found_in_trash' => 'No portfolio found in Trash'
	);

	$args = array(
		'labels'             => $labels,
		'description'        => 'This is portfolio post type',
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'book' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);

    register_post_type( 'portfolio', $args );
}
add_action( 'init', 'wpportfolio1_register_post_type' );





/*
======================================================
Include scripts
======================================================
*/
function prashant_script_enqueue(){
    //css
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '4.3.1', 'all');
    wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/prashant.css', array(), '1.0.0', 'all');
    //js
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '4.3.1', true);
    wp_enqueue_script('customsjs', get_template_directory_uri() . '/js/prashant.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'prashant_script_enqueue');

/*
======================================================
Activate manus
======================================================
*/
function prashant_theme_setup(){
     add_theme_support('menus');

    register_nav_menu('primary', 'Primary Header Navigation');
    register_nav_menu('secondary', 'Footer Navigation');
}

add_action('init', 'prashant_theme_setup');

/*
======================================================
Theme support function
======================================================
*/

add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');

add_theme_support('post-formats',array('aside','image','video'));

/*
======================================================
Sidebar functions
======================================================
*/
function prashant_widget_setup(){
    register_sidebar(
        array(
            'name' => 'Sidebar',
            'id' => 'sidebar-1',
            'class' => 'custom',
            'description' => 'Standard Sidebar',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => '<aside>',
            'before_title' => '<h1 class="widget-title">',
            'after_title' => '</h1>',
        )
    );
}
add_action('widgets_init', 'prashant_widget_setup');





