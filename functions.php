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

add_filter( 'the_category', 'remove_rel_category' ); 
function remove_rel_category( $text ) {
$text = str_replace('rel="category"', "", $text);
$text = str_replace('rel="category tag"', "", $text);
return $text;
}

if ( function_exists( 'add_image_size' ) ) { 
	add_image_size( 'featured-image', 980, 406, true );
}


class Bootstrapifier extends Walker_Nav_Menu {

	function display_element( $element, &$children_elements, $max_depth, $depth=0, $args, &$output ){
	    if ( isset($children_elements[$element->ID]) ) {
	    	//$args[$element->ID]->link_before = "hello";
	    	$GLOBALS['after'] = 'rofl';
	    	$GLOBALS['dd_children'] = 1;
	    }
	    else {
	    	$GLOBALS['dd_children'] = 0;
	    };
	    //var_dump($args);
        parent::display_element( $element, $children_elements, $max_depth, $depth, $args, $output );
    }

	function start_lvl(&$output, $depth) {
		$indent = str_repeat("\t", $depth);
		$output .= "\n$indent<ul class=\"sub-menu dropdown-menu\">\n";
	}

	function start_el(&$output, $item, $depth, $args) {
		global $wp_query;
		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

		$class_names = $value = '';

		$classes = empty( $item->classes ) ? array() : (array) $item->classes;
		$classes[] = 'menu-item-' . $item->ID;

		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
		$class_names = ' class="' . esc_attr( $class_names ) . '"';

		$id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
		$id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';

		$output .= $indent . '<li' . $id . $value . $class_names .'>';

		$attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
		$attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
		$attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
		$attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';

		$item_output = $args->before;
		$item_output .= '<a'. $attributes .'>';
		$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;

		global  $dd_children;
     	if ($dd_children) {
     		$item_output .= ' <b class="caret"></b>';
     	}

		$item_output .= '</a>';


 		$item_output .= $args->after;

		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}
}

add_filter( 'nav_menu_css_class', 'add_parent_css', 10, 2 );

function  add_parent_css($classes, $item){
     global  $dd_children;
     if($dd_children)
         $classes[] = 'dropdown';
    return $classes;
}

?>