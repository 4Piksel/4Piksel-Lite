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
			'title' 			=> __( '4Piksel Genel Ayarlar', '4piksel' ),
			'description' 		=> __( 'Buradan temanızın genel ayarlarını yapabilirsiniz.', '4Piksel' ),
		)
	);

	$wp_customize->add_panel(
		'dpx_renk',
		array(
			'priority' 			=> 11,
			'capability' 		=> 'edit_theme_options',
			'theme_supports'	=> '',
			'title' 			=> __( '4Piksel Renk Ayarları', '4Piksel' ),
			'description' 		=> __( 'Buradan temanızın renk ayarlarını yapabilirsiniz.', '4Piksel' ),
		)
	);

	$wp_customize->add_panel(
		'dpx_gelismis',
		array(
			'priority' 			=> 12,
			'capability' 		=> 'edit_theme_options',
			'theme_supports'	=> '',
			'title' 			=> __( '4Piksel Gelişmiş Ayarlar', 'theme-slug' ),
			'description' 		=> __( 'Buradan temanızın gelişmiş ayarlarını yapabilirsiniz.', '4Piksel' ),
		)
	);
}

add_action( 'customize_register', 'dpx_panel' );
