<?php

function theme_slug_sanitize_checkbox( $checked ) {
	return ( ( isset( $checked ) && true == $checked ) ? true : false );
}

function theme_slug_sanitize_css( $css ) {
	return wp_strip_all_tags( $css );
}

function theme_slug_sanitize_dropdown_pages( $page_id, $setting ) {
	$page_id = absint( $page_id );
	
	return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
}

function theme_slug_sanitize_email( $email, $setting ) {
	$email = sanitize_email( $email );
	
	return ( ! null( $email ) ? $email : $setting->default );
}

function theme_slug_sanitize_html( $html ) {
	return wp_filter_post_kses( $html );
}

function theme_slug_sanitize_image( $image, $setting ) {
    $mimes = array(
        'jpg|jpeg|jpe' => 'image/jpeg',
        'gif'          => 'image/gif',
        'png'          => 'image/png',
        'bmp'          => 'image/bmp',
        'tif|tiff'     => 'image/tiff',
        'ico'          => 'image/x-icon'
    );

    $file = wp_check_filetype( $image, $mimes );
    return ( $file['ext'] ? $image : $setting->default );
}

function theme_slug_sanitize_nohtml( $nohtml ) {
	return wp_filter_nohtml_kses( $nohtml );
}

function theme_slug_sanitize_number_absint( $number, $setting ) {
	$number = absint( $number );
	
	return ( $number ? $number : $setting->default );
}

function theme_slug_sanitize_number_range( $number, $setting ) {

	$number = absint( $number );

	$atts = $setting->manager->get_control( $setting->id )->input_attrs;
	
	$min = ( isset( $atts['min'] ) ? $atts['min'] : $number );

	$max = ( isset( $atts['max'] ) ? $atts['max'] : $number );

	$step = ( isset( $atts['step'] ) ? $atts['step'] : 1 );

	return ( $min <= $number && $number <= $max && is_int( $number / $step ) ? $number : $setting->default );
}

function theme_slug_sanitize_select( $input, $setting ) {	
	$input = sanitize_key( $input );
	$choices = $setting->manager->get_control( $setting->id )->choices;
	return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
}

function theme_slug_sanitize_url( $url ) {
	return esc_url_raw( $url );
}
