<?php
// Register style sheet.
function theme_name_scripts() {
	wp_enqueue_style( 'base_css', get_stylesheet_uri() );
	wp_enqueue_style( 'bootstrap_css', '//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css' );
	wp_enqueue_style( 'bootstrap_theme_css', '//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css' );
	wp_enqueue_style( 'jquery_ui_css', 'http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css' );
	wp_enqueue_style( 'social_foundations_css', get_template_directory_uri() . '/css/social_foundicons.css' );
	wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );


add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class($classes, $item){
	if( in_array('current-menu-item', $classes) ){
		$classes[] = 'active ';
	}
	return $classes;
}



//Register a nav bar-->
function register_my_menu() {
	register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );


// Regsiter a widget area -->
if (function_exists('register_sidebar')) {
	register_sidebar(array(
	'name' => 'Home Page Services',
	'id'   => 'Home Page Services',
	'description'   => 'Hild & Hild footer logo area',
	'before_widget' => '<div class="service_block col-lg-6 col-md-6 col-sm-6 col-xs-12">',
	'after_widget'  => '</div>',
	'before_title'  => '',	
	'after_title'   => ''
			));
			
			register_sidebar(array(
	'name' => 'Twitter Feed',
	'id'   => 'Twitter Feed',
	'description'   => 'Footer Twitter Feed Area',
	'before_widget' => '<ul class="col-xs-12 col-sm-6 col-md-4 col-lg-4">',
	'after_widget'  => '</ul>',
	'before_title'  => '<li class="footer_menu_header">',	
	'after_title'   => '</li>'
			));
			
			register_sidebar(array(
	'name' => 'Footer Menu',
	'id'   => 'Footer Menu',
	'description'   => 'Footer Menu',
	'before_widget' => '<ul class="col-xs-12 col-sm-6 col-md-3 col-lg-3">',
	'after_widget'  => '</ul>',
	'before_title'  => '<li class="footer_menu_header">',	
	'after_title'   => '</li>'
			));
			register_sidebar(array(
	'name' => 'Sidebar',
	'id'   => 'Sidebar',
	'description'   => 'Page sidebar only displays on pages designated as allowing a sidebar',
	'before_widget' => '',
	'after_widget'  => '',
	'before_title'  => '',	
	'after_title'   => ''
			));
}

?>