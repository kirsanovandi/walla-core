<?php

/**
 * walla functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package walla
 */

if (! defined('_S_VERSION')) {
	define('_S_VERSION', '1.0.0');
}

function walla_setup()
{

	add_theme_support('title-tag');

	add_theme_support('post-thumbnails');


	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	add_theme_support('customize-selective-refresh-widgets');

	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action('after_setup_theme', 'walla_setup');

function walla_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'walla'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'walla'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'walla_widgets_init');

function walla_enqueue_scripts()
{
	wp_enqueue_style(
		'walla-main-style',
		get_template_directory_uri() . '/assets/css/index.css',
		array(),
		filemtime(get_template_directory() . '/assets/css/index.css')
	);
}
add_action('wp_enqueue_scripts', 'walla_enqueue_scripts');
