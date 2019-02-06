<?php  

require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php'; 

function load_assets(){
	wp_enqueue_style('style',get_stylesheet_uri());

	wp_enqueue_style( 'bootstrap_css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css' ); 
	
	wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.3.1.min.js'); 

	wp_enqueue_script( 'bootstrap_js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js');
	
	wp_enqueue_style( 'fontasome', 'https://use.fontawesome.com/releases/v5.6.3/css/all.css'); 

	//Map
	wp_enqueue_script( 'map_am', 'https://www.amcharts.com/lib/3/ammap.js');
	wp_enqueue_script( 'map_world', 'https://www.amcharts.com/lib/3/maps/js/worldLow.js');

	wp_enqueue_script( 'script_map',  get_template_directory_uri().'/assets/js/map.js');

	//slider
	wp_enqueue_style( 'slider_css', 'https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.12/jquery.bxslider.min.css' );
	wp_enqueue_script( 'slider_js', 'https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.12/jquery.bxslider.min.js'); 
	wp_enqueue_script( 'script_slider', get_template_directory_uri() . '/assets/js/slider.js'); 

}

add_action('wp_enqueue_scripts','load_assets');

register_nav_menus( array( 'primary' => __( 'Primary Menu', 'THEMENAME' ), ) );

register_nav_menus( array( 'secondary' => __( 'Secondary Menu', 'THEMENAME' ), ) );

add_theme_support( 'post-thumbnails' );

//slider code

?>