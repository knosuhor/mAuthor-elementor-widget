<?php
/**
 * Plugin Name: mAuthor Embed
 * Description: The mAuthor Embed widget lets you easily embed mAuthor lessons on your wordpress page.
 * Version:     1.0.0
 * Author:      Piotrek Podwojewski
 * Author URI:  https://github.com/knosuhor
 * Text Domain: elementor-addon
 */

function my_plugin_frontend_stylesheets() {
    wp_register_style( 'frontend-style-1', plugins_url( '/style.css', __FILE__ ) );
    wp_enqueue_style( 'frontend-style-1' );
}

add_action( 'elementor/editor/after_enqueue_styles', 'my_plugin_frontend_stylesheets' );

function register_mauthor_widget( $widgets_manager ) {

	require_once( __DIR__ . '/widgets/mauthor-widget.php' );

	$widgets_manager->register( new \mauthor_widget_1() );

}
add_action( 'elementor/widgets/register', 'register_mauthor_widget' );


