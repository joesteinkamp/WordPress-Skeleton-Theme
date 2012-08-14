<?php

add_action('init', 'register_my_menus');

function register_my_menus() {
	register_nav_menus(
		array(
			'primary-menu' => __('Primary Menu'),
			'footer-menu' => __('Footer Menu')
		)	
	);
}


// Register Widget Area for the Sidebar
register_sidebar( array(
	'name' => __( 'Primary Widget Area', 'skeleton' ),
	'id' => 'primary-widget-area',
	'description' => __( 'The primary widget area', 'skeleton' ),
	'before_widget' => '<div class="box">',
	'after_widget' => '</div>',
	'before_title' => '<h1>',
	'after_title' => '</h1>',
) );





?>