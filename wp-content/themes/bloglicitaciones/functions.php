<?php 
//aqui creo mi menu
if (function_exists('register_nav_menus')) {
	register_nav_menus(array('superior' => 'Menu Principal')); 
}

//aqui creo una clse para <a>
	add_filter( 'nav_menu_link_attributes', 'clase_menu_invento', 10, 3 );

	function clase_menu_invento ($atts, $item, $args){
		$class = 'nav-link';
		$atts['class'] = $class;
		return $atts;
	}
//agregar imagenes destacadas

if (function_exists('add_theme_support') ) {
	add_theme_support( 'post_thumbnails' );
}

//agregando imagenes destacadas
if (function_exists('add_theme_support')) {
	add_theme_support( 'post-thumbnails' );
}
?>