<?php
add_action( 'wp_enqueue_scripts', 'add_style' );

function add_style(){
	wp_enqueue_style( 'stylesheet', get_stylesheet_uri(), "screen" );
	
}
register_nav_menus(
        array(
            'primary' => __('Main Menu'),
            'footer' => __('Footer Menu')
        )
);