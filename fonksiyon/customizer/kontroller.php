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
			'label'			=> __( 'Telif hakkı yazısını göster', '4Piksel' ),
			'description'	=> __( 'Sitenizde telif hakkı yazısını göstermek için burayı işaretleyin.', '4Piksel' ),
		)
	);
	
	$wp_customize->add_control(
		'telif_hakki_yazi',
		array(
			'settings'		=> 'telif_hakki_yazi',
			'section'		=> 'dpx_altalan',
			'type'			=> 'text',
			'label'			=> __( 'Telif Hakkı Yazısı', '4Piksel' ),
			'description'	=> __( 'Buradan telif hakkı yazınızı yazabilirsiniz.', '4Piksel' )
		)
	);
    
	$wp_customize->add_control(
		'facebook',
		array(
			'settings'		=> 'facebook',
			'section'		=> 'dpx_sosyal',
			'type'			=> 'url',
			'label'			=> __( 'Facebook', '4Piksel' ),
			'description'	=> __( 'Facebook profil bağlantısını buraya yazabilirsiniz.', '4Piksel' )
		)
	);
    
	$wp_customize->add_control(
		'twitter',
		array(
			'settings'		=> 'twitter',
			'section'		=> 'dpx_sosyal',
			'type'			=> 'url',
			'label'			=> __( 'Twitter', '4Piksel' ),
			'description'	=> __( 'Twitter profil bağlantısını buraya yazabilirsiniz.', '4Piksel' )
		)
	);
    
	$wp_customize->add_control(
		'gplus',
		array(
			'settings'		=> 'gplus',
			'section'		=> 'dpx_sosyal',
			'type'			=> 'url',
			'label'			=> __( 'Google+', '4Piksel' ),
			'description'	=> __( 'Google+ profil bağlantısını buraya yazabilirsiniz.', '4Piksel' )
		)
	);
    
	$wp_customize->add_control(
		'youtube',
		array(
			'settings'		=> 'youtube',
			'section'		=> 'dpx_sosyal',
			'type'			=> 'url',
			'label'			=> __( 'Youtube', '4Piksel' ),
			'description'	=> __( 'Youtube kanal bağlantısını buraya yazabilirsiniz.', '4Piksel' )
		)
	);
    
	$wp_customize->add_control(
		'linkedin',
		array(
			'settings'		=> 'linkedin',
			'section'		=> 'dpx_sosyal',
			'type'			=> 'url',
			'label'			=> __( 'Linkedin', '4Piksel' ),
			'description'	=> __( 'Linkedin profil bağlantısını buraya yazabilirsiniz.', '4Piksel' )
		)
	);
    
	$wp_customize->add_control(
		'instagram',
		array(
			'settings'		=> 'instagram',
			'section'		=> 'dpx_sosyal',
			'type'			=> 'url',
			'label'			=> __( 'Instagram', '4Piksel' ),
			'description'	=> __( 'Instagram profil bağlantısını buraya yazabilirsiniz.', '4Piksel' )
		)
	);
    
	$wp_customize->add_control(
		'tumblr',
		array(
			'settings'		=> 'tumblr',
			'section'		=> 'dpx_sosyal',
			'type'			=> 'url',
			'label'			=> __( 'Tumblr', '4Piksel' ),
			'description'	=> __( 'Tumblr profil bağlantısını buraya yazabilirsiniz.', '4Piksel' )
		)
	);
    
	$wp_customize->add_control(
		'analytics',
		array(
			'settings'		=> 'analytics',
			'section'		=> 'dpx_sosyal',
			'type'			=> 'text',
			'label'			=> __( 'Analytics', '4Piksel' ),
			'description'	=> __( 'Google Analytics izleme kimliğinizi buraya yazabilirsiniz. Örnek <code>UA-XXXXXXX-X</code>', '4Piksel' )
		)
	);

	$wp_customize->add_control(
		'gelismis_css',
		array(
			'settings'		=> 'gelismis_css',
			'section'		=> 'dpx_css',
			'type'			=> 'textarea',
			'label'			=> __( 'CSS', 'theme-slug' ),
			'description'	=> __( 'Buraya CSS kodlarınızı yazabilirsiniz. Lütfen jQuery kodlarını buraya girmeyin.', '4Piksel' ),
		)
	);

}

add_action( 'customize_register', 'dpx_kontrol' );
