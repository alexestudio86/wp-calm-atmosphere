<?php


// Activación de menús
if(function_exists('register_nav_menus')){
    register_nav_menus(array('nav-menu' => 'Menú principal superior'));
}

// Añadir clases a li
function add_additional_class_on_li($classes, $item, $args) {
    if ( 'nav-menu' === $args->theme_location ) {
		$classes[] = "w3-bar-item w3-button";
    }

	return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

// Añadir clases a link
function add_additional_class_on_link($atts, $item, $args) {
    if ( $args->theme_location === 'nav-menu' ) {
		$atts['class'] = "w3-button";
    }

	return $atts;
}
add_filter('nav_menu_link_attributes', 'add_additional_class_on_link', 1, 3);

?>