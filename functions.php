<?php
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





