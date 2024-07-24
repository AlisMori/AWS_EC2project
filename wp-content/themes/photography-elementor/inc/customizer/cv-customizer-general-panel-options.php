<?php
/**
 * Photography Elementor manage the Customizer options of general panel.
 *
 * @subpackage photography-elementor
 * @since 1.0 
 */
Kirki::add_field(
	'photography_elementor_config', array(
		'type'        => 'checkbox',
		'settings'    => 'photography_elementor_home_posts',
		'label'       => esc_attr__( 'Checked to hide latest posts in homepage.', 'photography-elementor' ),
		'section'     => 'static_front_page',
		'default'     => true,
	)
);
