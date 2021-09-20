<?php
function mythem_enqueue_style() {
wp_enqueue_style( 'desktop_menu', get_template_directory_uri(). '/desktop_menu.css' );
wp_enqueue_style( 'style', get_template_directory_uri(). '/style.css' );
wp_enqueue_style( 'mobile_menu', get_template_directory_uri(). '/mobile_menu.css' );
}
add_action( 'wp_enqueue_scripts', 'vamsvet_enqueue_style' );

if (function_exists('add_theme_support')) {
    add_theme_support('menus');
}
?>