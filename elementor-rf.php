<?php
/**
 * Plugin Name: Elementor RF
 * Description: RogueFoam's Collection of Useful Elementor Custom Blocks
 * Version:     0.0.1
 * Author:      CJ Pokowitz (RogueFoam)
 * Author URI:  https://ww0cj.radio/
 * Text Domain: elementor-rf
 */

function register_relationship_widget( $widgets_manager ) {

	require_once( __DIR__ . '/widgets/relationship-widget.php' );

	$widgets_manager->register( new \Elementor_Relationship_Widget() );
}
add_action( 'elementor/widgets/register', 'register_relationship_widget' );
