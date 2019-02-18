<?php
/**
** activation theme
**/

function theme_enqueue_styles() {
 wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

 wp_enqueue_script( 'editable.js', get_stylesheet_directory_uri().'/script.js',null, null, true);
}

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

//  var_dump(get_stylesheet_directory_uri().'/script.js');