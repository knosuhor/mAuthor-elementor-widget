<?php
/**
 * Plugin Name: mAuthor Embed
 * Description: The mAuthor Embed widget lets you easily embed mAuthor lessons on your wordpress page.
 * Version:     1.0.0
 * Author:      Piotr Podwojewski
 * Author URI:  https://github.com/knosuhor
 * Text Domain: elementor-addon
 */

function register_mauthor_widget( $widgets_manager ) {

	require_once( __DIR__ . '/widgets/mauthor-widget.php' );

	$widgets_manager->register( new \mauthor_widget_1() );


}
add_action( 'elementor/widgets/register', 'register_mauthor_widget' );