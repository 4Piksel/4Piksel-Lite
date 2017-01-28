<?php

function dpx_alan( $wp_customize ){

	if ( ! isset( $wp_customize ) ) {
		return;
	}
    
	$wp_customize->add_section(
		'dpx_ustalan',
		array(
			'title'			=> __( 'Üst Ayarlar', '4Piksel' ),
			'description'	=> __( 'Buradan üst alanı ayarlayabilirsiniz.', '4Piksel' ),
			'panel'			=> 'dpx_genel'
		)
	);

	$wp_customize->add_section(
		'dpx_altalan',
		array(
			'title'			=> __( 'Alt Ayarlar', '4Piksel' ),
			'description'	=> __( 'Buradan alt alanı ayarlayabilirsiniz.', '4Piksel' ),
			'panel'			=> 'dpx_genel'
		)
	);
    
	$wp_customize->add_section(
		'dpx_sosyal',
		array(
			'title'			=> __( 'Sosyal Ağlar', '4Piksel' ),
			'description'	=> __( 'Buradan sosyal ağları ayarlayabilirsiniz.', '4Piksel' ),
			'panel'			=> 'dpx_genel'
		)
	);

	$wp_customize->add_section(
		'dpx_renkalan',
		array(
			'title'			=> __( 'Renk Ayarları', '4Piksel' ),
			'description'	=> __( 'Buradan temanızın renk ayarlarını yapabilirsiniz.', '4Piksel' ),
			'panel'			=> 'dpx_renk'
		)
	);

	$wp_customize->add_section(
		'dpx_css',
		array(
			'title'			=> __( 'CSS Ayarları', 'theme-slug' ),
			'description'	=> __( 'Bu alandan kendi CSS\'lerinizi oluşturabilirsiniz.', 'theme-slug' ),
			'panel'			=> 'dpx_gelismis'
		)
	);
    
    $wp_customize -> remove_section( 'static_front_page' );
}

add_action( 'customize_register', 'dpx_alan' );