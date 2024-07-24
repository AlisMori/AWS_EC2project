<?php
/**
 * Photography Elementor manage the Customizer panels.
 *
 * @subpackage photography-elementor
 * @since 1.0 
 */

/**
 * General Settings Panel
 */
Kirki::add_panel( 'photography_elementor_general_panel', array(
	'priority' => 10,
	'title'    => __( 'General Settings', 'photography-elementor' ),
) );

/**
 * Photography Elementor Options
 */
Kirki::add_panel( 'photography_elementor_options_panel', array(
	'priority' => 20,
	'title'    => __( 'Photography Elementor Theme Options', 'photography-elementor' ),
) );