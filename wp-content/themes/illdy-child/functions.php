<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}


function child_theme_enqueue_scripts(){	
		wp_enqueue_script( 'appear-js', get_stylesheet_directory_uri() . '/js/jquery.appear.js', array('jquery'), '1.0.0', true); 
        wp_enqueue_script( 'bootstrap-buckslocks', get_stylesheet_directory_uri() . '/js/bootstrap/bootstrap.js', array('jquery'), '4.3.1', true); 
        wp_enqueue_script( 'scripts-buckslocks', get_stylesheet_directory_uri() . '/js/scripts.min.js', array('jquery'), '2.0.0', true); 
}
add_action( 'wp_enqueue_scripts', 'child_theme_enqueue_scripts' );

function child_theme_remove_scripts() {
    wp_deregister_script( 'jquery-ui-progressbar' );

	wp_deregister_script( 'illdy-count-to' );

	wp_deregister_script( 'illdy-pace' );
	wp_dequeue_style('illdy-pace');
	
	wp_deregister_script( 'illdy-parallax' );

	wp_deregister_script( 'illdy-owl-carousel' );
	wp_dequeue_style( 'owl-carousel' );

	wp_deregister_script( 'illdy-visible' );

	wp_deregister_script( 'illdy-plugins' );

	wp_deregister_script( 'illdy-custom' );

	wp_deregister_script( 'illdy-google-fonts' );
	wp_deregister_script( 'illdy-bootstrap' );
	wp_deregister_script( 'illdy-scripts' );

}
add_action( 'wp_enqueue_scripts', 'child_theme_remove_scripts', 20 );

?>