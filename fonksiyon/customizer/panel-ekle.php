<?php

function dpx_panel( $wp_customize ){

	if ( ! isset( $wp_customize ) ) {
		return;
	}

	$wp_customize->add_panel(
		'dpx_genel',
		array(
			'priority' 			=> 10,
			'capability' 		=> 'edit_theme_options',
			'theme_supports'	=> '',
			'title' 			=> __( '4Piksel General Settings', '4Piksel' ),
			'description' 		=> __( 'Here you can make general settings of your theme.', '4Piksel' ),
		)
	);

	$wp_customize->add_panel(
		'dpx_renk',
		array(
			'priority' 			=> 11,
			'capability' 		=> 'edit_theme_options',
			'theme_supports'	=> '',
			'title' 			=> __( '4Piksel Color Settings', '4Piksel' ),
			'description' 		=> __( 'Here you can adjust the color settings of your theme.', '4Piksel' ),
		)
	);

	$wp_customize->add_panel(
		'dpx_gelismis',
		array(
			'priority' 			=> 12,
			'capability' 		=> 'edit_theme_options',
			'theme_supports'	=> '',
			'title' 			=> __( '4Piksel Advanced Settings', '4Piksel' ),
			'description' 		=> __( 'Here you can make advanced settings of your theme.', '4Piksel' ),
		)
	);
}

add_action( 'customize_register', 'dpx_panel' );
