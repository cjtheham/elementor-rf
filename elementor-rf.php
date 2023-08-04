<?php
/**
 * Plugin Name: Elementor RF
 * Description: RogueFoam's Collection of Useful Elementor Custom Blocks
 * Version:     0.0.1
 * Author:      CJ Pokowitz (RogueFoam)
 * Author URI:  https://ww0cj.radio/
 * Text Domain: elementor-rf
 */

function register_relationship_widgets( $widgets_manager ) {

	require_once( __DIR__ . '/widgets/relationship-list-widget.php' );
	require_once( __DIR__ . '/widgets/relationship-blocks-widget.php');

	$widgets_manager->register( new \Elementor_Relationship_List_Widget() );
	$widgets_manager->register( new \Elementor_Relationship_Blocks_Widget() );
}
add_action( 'elementor/widgets/register', 'register_relationship_widgets' );
