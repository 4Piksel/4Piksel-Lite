<?php

function theme_slug_register_customizer_control_custom_radio_image( $wp_customize ){

	if ( ! isset( $wp_customize ) ) {
		return;
	}

	class Theme_Slug_Custom_Radio_Image_Control extends WP_Customize_Control {
		
		public $type = 'radio-image';

		public function enqueue() {
			wp_enqueue_script( 'jquery-ui-button' );
		}

		public function render_content() {
			if ( empty( $this->choices ) ) {
				return;
			}			
			
			$name = '_customize-radio-' . $this->id;
			?>
			<span class="customize-control-title">
				<?php echo esc_attr( $this->label ); ?>
				<?php if ( ! empty( $this->description ) ) : ?>
					<span class="description customize-control-description"><?php echo esc_html( $this->description ); ?></span>
				<?php endif; ?>
			</span>
			<div id="input_<?php echo $this->id; ?>" class="image">
				<?php foreach ( $this->choices as $value => $label ) : ?>
					<input class="image-select" type="radio" value="<?php echo esc_attr( $value ); ?>" id="<?php echo $this->id . $value; ?>" name="<?php echo esc_attr( $name ); ?>" <?php $this->link(); checked( $this->value(), $value ); ?>>
						<label for="<?php echo $this->id . $value; ?>">
							<img src="<?php echo esc_html( $label ); ?>" alt="<?php echo esc_attr( $value ); ?>" title="<?php echo esc_attr( $value ); ?>">
						</label>
					</input>
				<?php endforeach; ?>
			</div>
			<script>jQuery(document).ready(function($) { $( '[id="input_<?php echo $this->id; ?>"]' ).buttonset(); });</script>
			<?php
		}
	}

	$wp_customize->add_control(
		new Theme_Slug_Custom_Radio_Image_Control( 
			// $wp_customize object
			$wp_customize,
			// $id
			'blog_layout',
			// $args
			array(
				'settings'		=> 'blog_layout',
				'section'		=> 'theme_slug_section_layouts',
				'label'			=> __( 'Blog Layout', '4Piksel' ),
				'description'	=> __( 'Select the layout for the blog.', '4Piksel' ),
				'choices'		=> array(
					'one-column' 		=> get_template_directory_uri() . '/images/layouts/1c.png',
					'two-column-left' 	=> get_template_directory_uri() . '/images/layouts/2cl.png',
					'two-column-right'	=> get_template_directory_uri() . '/images/layouts/2cr.png',
					'three-column' 		=> get_template_directory_uri() . '/images/layouts/3cm.png'
				)
			)
		)
	);

}

add_action( 'customize_register', 'theme_slug_register_customizer_control_custom_radio_image' );

function theme_slug_customizer_custom_control_css() { 
	?>
	<style>
	.customize-control-radio-image .image.ui-buttonset input[type=radio] {
		height: auto; 
	}
	.customize-control-radio-image .image.ui-buttonset label {
		display: inline-block;
		margin-right: 5px;
		margin-bottom: 5px; 
	}
	.customize-control-radio-image .image.ui-buttonset label.ui-state-active {
		background: none;
	}
	.customize-control-radio-image .customize-control-radio-buttonset label {
		padding: 5px 10px;
		background: #f7f7f7;
		border-left: 1px solid #dedede;
		line-height: 35px; 
	}
	.customize-control-radio-image label img {
		border: 1px solid #bbb;
		opacity: 0.5;
	}
	#customize-controls .customize-control-radio-image label img {
		max-width: 50px;
		height: auto;
	}
	.customize-control-radio-image label.ui-state-active img {
		background: #dedede; 
		border-color: #000; 
		opacity: 1;
	}
	.customize-control-radio-image label.ui-state-hover img {
		opacity: 0.9;
		border-color: #999; 
	}
	.customize-control-radio-buttonset label.ui-corner-left {
		border-radius: 3px 0 0 3px;
		border-left: 0; 
	}
	.customize-control-radio-buttonset label.ui-corner-right {
		border-radius: 0 3px 3px 0; 
	}
        
    #customize-control-gelismis_css textarea {
        min-height: 400px;
    }  
	</style>
	<?php
}
add_action( 'customize_controls_print_styles', 'theme_slug_customizer_custom_control_css' );
