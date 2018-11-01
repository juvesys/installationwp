<?php 
 /***********************************************************************************************/
 /*vincular scripts y stilos*/
function wp_latin_excurtion_style() {
    wp_enqueue_style( 'bootstrapy', get_template_directory_uri().'/css/bootstrap.css' );
    wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css',false,'1.1','all');
    wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css',false,'1.1','all');
    wp_enqueue_style( 'Awesome', get_template_directory_uri() . '/fonts/Awesome/Awesome.css',false,'1.1','all');
    wp_enqueue_style( 'slickfont', get_template_directory_uri() . '/fonts/Awesome/Awesome.css',false,'1.1','all');
    wp_enqueue_style( 'slickbootstrap', get_template_directory_uri() . '/slick/bootstrap.css',false,'1.1','all');
    wp_enqueue_style( 'slick_js_css', get_template_directory_uri() . '/js/slick/slick.css',false,'1.1','all');
    wp_enqueue_style( 'slick_theme_css', get_template_directory_uri() . '/js/slick/slick-theme.css',false,'1.1','all');
    wp_enqueue_style( 'flexslider', get_template_directory_uri() . '/css/flexslider.css',false,'1.1','all');
	wp_enqueue_style( 'lightslider', get_template_directory_uri() . '/js/juvslider/css/lightslider.css',false,'1.1','all');
}
add_action( 'wp_enqueue_scripts', 'wp_latin_excurtion_style' );


function wp_latin_excurtion_js() {
	
	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.js', '', '',false);
    wp_enqueue_script('flexslider', get_template_directory_uri() . '/js/jquery.flexslider.js','', '',false );
    wp_enqueue_script( 'lightslider', get_template_directory_uri() . '/js/juvslider/js/lightslider.js','', '',false );
    wp_enqueue_script( 'funciones', get_template_directory_uri() . '/js/funcioneshead.js',array('jquery','bootstrap','lightslider'), '', false );
}

add_action( 'wp_enqueue_scripts', 'wp_latin_excurtion_js' );




 /***********************************************************************************************/
 /*Menus*/
/***********************************************************************************************/
add_theme_support('menus');

function register_mis_menus(){
	register_nav_menus(
		array(
			'principal-menu' => __('Menu Principal')
			)
		);
}
add_action('init','register_mis_menus')



?>

