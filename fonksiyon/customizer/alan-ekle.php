<?php

function dpx_alan( $wp_customize ){

	if ( ! isset( $wp_customize ) ) {
		return;
	}
    
	$wp_customize->add_section(
		'dpx_ustalan',
		array(
			'title'			=> __( 'Header Settings', '4Piksel' ),
			'description'	=> __( 'Here you can set the top area.', '4Piksel' ),
			'panel'			=> 'dpx_genel'
		)
	);

	$wp_customize->add_section(
		'dpx_altalan',
		array(
			'title'			=> __( 'Footer Settings', '4Piksel' ),
			'description'	=> __( 'Here you can set the footer.', '4Piksel' ),
			'panel'			=> 'dpx_genel'
		)
	);
    
	$wp_customize->add_section(
		'dpx_sosyal',
		array(
			'title'			=> __( 'Social Network Settings', '4Piksel' ),
			'description'	=> __( 'Here you can set social networks.', '4Piksel' ),
			'panel'			=> 'dpx_genel'
		)
	);
    
	$wp_customize->add_section(
		'dpx_reklam',
		array(
			'title'			=> __( 'Ad Settings', '4Piksel' ),
			'description'	=> __( 'You can configure your ads here.', '4Piksel' ),
			'panel'			=> 'dpx_genel'
		)
	);

	$wp_customize->add_section(
		'dpx_renkalan',
		array(
			'title'			=> __( 'Color Settings', '4Piksel' ),
			'description'	=> __( 'Here you can adjust the color settings of your theme.', '4Piksel' ),
			'panel'			=> 'dpx_renk'
		)
	);

	$wp_customize->add_section(
		'dpx_css',
		array(
			'title'			=> __( 'CSS Settings', '4Piksel' ),
			'description'	=> __( 'You can write your own CSS code in this field.', '4Piksel' ),
			'panel'			=> 'dpx_gelismis'
		)
	);
    
    $wp_customize -> remove_section( 'static_front_page' );
}

add_action( 'customize_register', 'dpx_alan' );