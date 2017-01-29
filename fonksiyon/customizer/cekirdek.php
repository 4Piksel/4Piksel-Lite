<?php

function dpx_cekirdek( $wp_customize ){

	if ( ! isset( $wp_customize ) ) {
		return;
	}

	$wp_customize->add_control(
		new WP_Customize_Color_Control( 
			$wp_customize,
			'baslik_renk',
			array(
				'settings'		=> 'baslik_renk',
				'section'		=> 'dpx_renkalan',
				'label'			=> __( 'Title Color', '4Piksel' ),
				'description'	=> __( 'Here you can choose the font color.', '4Piksel' )
			)
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Image_Control( 
			$wp_customize,
			'site_logo',
			array(
				'settings'		=> 'site_logo',
				'section'		=> 'dpx_ustalan',
				'label'			=> __( 'Site Logo', '4Piksel' ),
				'description'	=> __( 'Here you can upload logo for your site.', '4Piksel' )
			)
		)
	);

}

add_action( 'customize_register', 'dpx_cekirdek' );
