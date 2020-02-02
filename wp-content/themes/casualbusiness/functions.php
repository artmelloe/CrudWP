<?php

function load_stylesheets(){
	wp_register_style('bootstrap', get_template_directory_uri().'/vendor/bootstrap/css/bootstrap.min.css', array(), 1, 'all');
	wp_enqueue_style('bootstrap');

	wp_register_style('business', get_template_directory_uri().'/css/business-casual.min.css', array(), 1, 'all');
	wp_enqueue_style('business');
}

add_action('wp_enqueue_scripts', 'load_stylesheets');

function load_scripts(){
	wp_register_script('jquery', get_template_directory_uri().'/vendor/jquery/jquery.min.js', array(), 1, 1, 1);
	wp_enqueue_script('jquery');
	
	wp_register_script('bundlejs', get_template_directory_uri().'/vendor/bootstrap/js/bootstrap.bundle.min.js', array(), 1, 1, 1);
	wp_enqueue_script('bundlejs');
}

add_action('wp_enqueue_scripts', 'load_scripts');

add_theme_support('menus');

register_nav_menus(
	array(
		'main_menu' => __('Main Menu', 'casualbusiness')
	)
);

function add_li_class_to_menu($ulclass) {
   return preg_replace('/<li /', '<li class="nav-item px-lg-4"', $ulclass);
}

add_filter('wp_nav_menu', 'add_li_class_to_menu');

function add_a_class_to_menu($ulclass) {
   return preg_replace('/<a /', '<a class="nav-link text-uppercase text-expanded"', $ulclass);
}

add_filter('wp_nav_menu', 'add_a_class_to_menu');
