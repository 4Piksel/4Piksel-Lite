<?php

function theme_slug_register_customizer_controls_advanced( $wp_customize ){

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
				'label'			=> __( 'Başlık Rengi', '4Piksel' ),
				'description'	=> __( 'Buradan yazı başlık rengini seçebilirsiniz.', '4Piksel' )
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
				'label'			=> __( 'Site Logosu', '4Piksel' ),
				'description'	=> __( 'Buradan sitenize ait logoyu yükleyebilirsiniz.', '4Piksel' )
			)
		)
	);

}

add_action( 'customize_register', 'theme_slug_register_customizer_controls_advanced' );
