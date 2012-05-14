<?php

define( 'HOME_URI', home_url() );
define( 'THEME_URI', get_stylesheet_directory_uri() );
define( 'THEME_IMAGES', THEME_URI . '/img' );
define( 'THEME_CSS', THEME_URI . '/css' );
define( 'THEME_JS', THEME_URI . '/js' );
define( 'ICONPATH', THEME_IMAGES . '/icons' );

register_nav_menu( 'navigation', __( 'Navigation' ) );

add_theme_support( 'post-thumbnails' );

function home_page_menu_agrs( $args )
{
	$args['show_home'] = true;
	return $args;
}
add_filter( 'wp_page_menu_args', 'home_page_menu_agrs' );

if ( function_exists ('register_sidebar'))
{ 
	register_sidebar( array(
		'name' => __( 'Club Info' ),
		'id' => 'clubinfo',
		'description' => __( 'The sidebar for general info'),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Media' ),
		'id' => 'media',
		'description' => __( 'The sidebar for social media, photos, etc'),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
}

/*function getCategoryImage() {
	$categories = get_the_category();
	$image = 'Default.png';
	foreach ( $categories as $category ) {
		$name = $category->cat_name;
		$file = ICONFILE . DIRECTORY_SEPARATOR . $name . '.png ';
		if( file_exists( $file ) ) {
			$image = $name . '.png' ;
			break;
		}
	}
	echo ICONPATH . '/' . $image ;
} */

function getCategoryImage() {
	if (function_exists('get_cat_icon'))
	{
		get_cat_icon() ;
	}
	//else
	//{
	//	echo "<img src=\"" . ICONPATH . "/Default.png\" alt=\"RoboJackets\" />";
	//}
}

add_filter( 'the_category', 'add_nofollow_cat' ); 
function add_nofollow_cat( $text ) {
$text = str_replace('rel="category tag"', "", $text); return $text;
}

?>