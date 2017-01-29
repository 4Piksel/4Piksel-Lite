<?php

function dpx_ayar( $wp_customize ){
    
	if ( ! isset( $wp_customize ) ) {
		return;
	}

	$wp_customize->add_setting(
		'gelismis_css',
		array(
			'default'			=> '',
			'type'				=> 'theme_mod',
			'capability'		=> 'edit_theme_options',
			'sanitize_callback'	=> 'theme_slug_sanitize_css'
		)
	);

	$wp_customize->add_setting(
		'telif_hakki',
		array(
			'default'			=> true,
			'type'				=> 'theme_mod',
			'capability'		=> 'edit_theme_options',
			'sanitize_callback'	=> 'theme_slug_sanitize_checkbox'
		)
	);

	$wp_customize->add_setting(
		'telif_hakki_yazi',
		array(
			'default'			=> '',
			'type'				=> 'theme_mod',
			'capability'		=> 'edit_theme_options',
			'sanitize_callback'	=> 'theme_slug_sanitize_html'
		)
	);

	$wp_customize->add_setting(
		'baslik_renk',
		array(
			'default'			=> '#666',
			'type'				=> 'theme_mod',
			'capability'		=> 'edit_theme_options',
			'sanitize_callback'	=> 'sanitize_hex_color'
		)
	);

	$wp_customize->add_setting(
		'site_logo',
		array(
			'default'			=> '',
			'type'				=> 'theme_mod',
			'capability'		=> 'edit_theme_options',
			'sanitize_callback'	=> 'theme_slug_sanitize_image'
		)
	);
    
	$wp_customize->add_setting(
		'facebook',
		array(
			'default'			=> '',
			'type'				=> 'theme_mod',
			'capability'		=> 'edit_theme_options',
			'sanitize_callback'	=> 'theme_slug_sanitize_url'
		)
	);
    
	$wp_customize->add_setting(
		'twitter',
		array(
			'default'			=> '',
			'type'				=> 'theme_mod',
			'capability'		=> 'edit_theme_options',
			'sanitize_callback'	=> 'theme_slug_sanitize_url'
		)
	);
    
	$wp_customize->add_setting(
		'gplus',
		array(
			'default'			=> '',
			'type'				=> 'theme_mod',
			'capability'		=> 'edit_theme_options',
			'sanitize_callback'	=> 'theme_slug_sanitize_url'
		)
	);
    
	$wp_customize->add_setting(
		'youtube',
		array(
			'default'			=> '',
			'type'				=> 'theme_mod',
			'capability'		=> 'edit_theme_options',
			'sanitize_callback'	=> 'theme_slug_sanitize_url'
		)
	);
    
	$wp_customize->add_setting(
		'linkedin',
		array(
			'default'			=> '',
			'type'				=> 'theme_mod',
			'capability'		=> 'edit_theme_options',
			'sanitize_callback'	=> 'theme_slug_sanitize_url'
		)
	);
    
    
	$wp_customize->add_setting(
		'instagram',
		array(
			'default'			=> '',
			'type'				=> 'theme_mod',
			'capability'		=> 'edit_theme_options',
			'sanitize_callback'	=> 'theme_slug_sanitize_url'
		)
	);
    
    
	$wp_customize->add_setting(
		'tumblr',
		array(
			'default'			=> '',
			'type'				=> 'theme_mod',
			'capability'		=> 'edit_theme_options',
			'sanitize_callback'	=> 'theme_slug_sanitize_url'
		)
	);
    
	$wp_customize->add_setting(
		'analytics',
		array(
			'default'			=> '',
			'type'				=> 'theme_mod',
			'capability'		=> 'edit_theme_options',
            'sanitize_callback' => 'theme_slug_sanitize_nohtml'
		)
	); 
    
	$wp_customize->add_setting(
		'yazi-reklam',
		array(
			'default'			=> '',
			'type'				=> 'theme_mod',
			'capability'		=> 'edit_theme_options',
            'sanitize_callback' => 'theme_slug_sanitize_html'
		)
	);
    
	$wp_customize->add_setting(
		'yazi-ic-reklam',
		array(
			'default'			=> '',
			'type'				=> 'theme_mod',
			'capability'		=> 'edit_theme_options',
            'sanitize_callback' => 'theme_slug_sanitize_html'
		)
	); 
    
	$wp_customize->add_setting(
		'reklam_paragraf',
		array(
			'default'			=> 2,
			'type'				=> 'theme_mod',
			'capability'		=> 'edit_theme_options',
			'sanitize_callback'	=> 'theme_slug_sanitize_number_absint'
		)
	);
}

add_action( 'customize_register', 'dpx_ayar' );