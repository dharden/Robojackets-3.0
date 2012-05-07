<?php

define( 'HOME_URI', home_url() );
define( 'THEME_URI', get_stylesheet_directory_uri() );
define( 'THEME_IMAGES', THEME_URI . '/img' );
define( 'THEME_CSS', THEME_URI . '/css' );
define( 'THEME_JS', THEME_URI . '/js' );

register_nav_menu( 'navigation', __( 'Navigation' ) );

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

?>