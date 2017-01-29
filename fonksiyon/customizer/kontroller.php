<?php

function dpx_kontrol( $wp_customize ){

	if ( ! isset( $wp_customize ) ) {
		return;
	}

	$wp_customize->add_control(
		'telif_hakki',
		array(
			'settings'		=> 'telif_hakki',
			'section'		=> 'dpx_altalan',
			'type'			=> 'checkbox',
			'label'			=> __( 'Show copyright text', '4Piksel' ),
			'description'	=> __( 'Select here to show the copyright text on your site.', '4Piksel' ),
		)
	);
	
	$wp_customize->add_control(
		'telif_hakki_yazi',
		array(
			'settings'		=> 'telif_hakki_yazi',
			'section'		=> 'dpx_altalan',
			'type'			=> 'text',
			'label'			=> __( 'Copyright Text', '4Piksel' ),
			'description'	=> __( 'You can write your copyright statement here.', '4Piksel' )
		)
	);
    
	$wp_customize->add_control(
		'facebook',
		array(
			'settings'		=> 'facebook',
			'section'		=> 'dpx_sosyal',
			'type'			=> 'url',
			'label'			=> __( 'Facebook', '4Piksel' ),
			'description'	=> __( 'You can write your Facebook profile link here.', '4Piksel' )
		)
	);
    
	$wp_customize->add_control(
		'twitter',
		array(
			'settings'		=> 'twitter',
			'section'		=> 'dpx_sosyal',
			'type'			=> 'url',
			'label'			=> __( 'Twitter', '4Piksel' ),
			'description'	=> __( 'You can write your Twitter profile link here.', '4Piksel' )
		)
	);
    
	$wp_customize->add_control(
		'gplus',
		array(
			'settings'		=> 'gplus',
			'section'		=> 'dpx_sosyal',
			'type'			=> 'url',
			'label'			=> __( 'Google+', '4Piksel' ),
			'description'	=> __( 'You can write your Google+ profile link here.', '4Piksel' )
		)
	);
    
	$wp_customize->add_control(
		'youtube',
		array(
			'settings'		=> 'youtube',
			'section'		=> 'dpx_sosyal',
			'type'			=> 'url',
			'label'			=> __( 'Youtube', '4Piksel' ),
			'description'	=> __( 'You can enter the YouTube channel link here.', '4Piksel' )
		)
	);
    
	$wp_customize->add_control(
		'linkedin',
		array(
			'settings'		=> 'linkedin',
			'section'		=> 'dpx_sosyal',
			'type'			=> 'url',
			'label'			=> __( 'Linkedin', '4Piksel' ),
			'description'	=> __( 'You can write your Linkedin profile link here.', '4Piksel' )
		)
	);
    
	$wp_customize->add_control(
		'instagram',
		array(
			'settings'		=> 'instagram',
			'section'		=> 'dpx_sosyal',
			'type'			=> 'url',
			'label'			=> __( 'Instagram', '4Piksel' ),
			'description'	=> __( 'You can write your Instagram profile link here.', '4Piksel' )
		)
	);
    
	$wp_customize->add_control(
		'tumblr',
		array(
			'settings'		=> 'tumblr',
			'section'		=> 'dpx_sosyal',
			'type'			=> 'url',
			'label'			=> __( 'Tumblr', '4Piksel' ),
			'description'	=> __( 'You can write your Tumblr profile link here.', '4Piksel' )
		)
	);
    
	$wp_customize->add_control(
		'analytics',
		array(
			'settings'		=> 'analytics',
			'section'		=> 'dpx_sosyal',
			'type'			=> 'text',
			'label'			=> __( 'Analytics', '4Piksel' ),
			'description'	=> __( 'You can enter your Google Analytics tracking ID here. Example: <code>UA-XXXXXXX-X</code>', '4Piksel' )
		)
	);

	$wp_customize->add_control(
		'gelismis_css',
		array(
			'settings'		=> 'gelismis_css',
			'section'		=> 'dpx_css',
			'type'			=> 'textarea',
			'label'			=> __( 'CSS', '4Piksel' ),
			'description'	=> __( 'You can write CSS code here. Please do not enter jQuery code here.', '4Piksel' ),
		)
	);
    
	$wp_customize->add_control(
		'yazi-reklam',
		array(
			'settings'		=> 'yazi-reklam',
			'section'		=> 'dpx_reklam',
			'type'			=> 'textarea',
			'label'			=> __( '468x60 Ad under article', '4Piksel' ),
			'description'	=> __( 'You can set your ad here.', '4Piksel' )
		)
	);
    
	$wp_customize->add_control(
		'yazi-ic-reklam',
		array(
			'settings'		=> 'yazi-ic-reklam',
			'section'		=> 'dpx_reklam',
			'type'			=> 'textarea',
			'label'			=> __( '468x60 or 300x250 In-text ad', '4Piksel' ),
			'description'	=> __( 'You can enter the ad code that will appear after the paragraph.', '4Piksel' )
		)
	);
    
	$wp_customize->add_control(
		'reklam_paragraf',
		array(
			'settings'		=> 'reklam_paragraf',
			'section'		=> 'dpx_reklam',
			'type'			=> 'number',
			'label'			=> __( 'Number of paragraphs', '4Piksel' ),
			'description'	=> __( 'Ads will appear after the specified number of paragraphs.', '4Piksel' )
		)
	);    

}

add_action( 'customize_register', 'dpx_kontrol' );
