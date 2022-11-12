<?php
$group_color = 'Typo & Color';
$group_image = 'Image';

vc_map( array(
	'base'          => 'penci_pricing_table',
	'icon'          => get_template_directory_uri() . '/images/vc-icon.png',
	'category'      => penci_get_theme_name( 'Soledad' ),
	'html_template' => get_template_directory() . '/inc/js_composer/shortcodes/pricing_table/frontend.php',
	'weight'        => 700,
	'name'          => penci_get_theme_name( 'Penci' ) . ' ' . esc_html__( 'Pricing Table', 'soledad' ),
	'description'   => __( 'Pricing Table Block', 'soledad' ),
	'controls'      => 'full',
	'params'        => array_merge( array(
			array(
				'type'        => 'penci_switch',
				'heading'     => __( 'Use image', 'soledad' ),
				'param_name'  => '_use_img',
				'true_state'  => 'yes',
				'false_state' => 'no',
				'default'     => 'no',
				'std'         => 'no',
			),
			array(
				'type'       => 'attach_image',
				'heading'    => esc_html__( 'Image', 'soledad' ),
				'param_name' => '_image',
				'dependency' => array( 'element' => '_use_img', 'value' => 'true', ),
				'group'      => $group_image,
			),
			array(
				'type'       => 'penci_responsive_sizes',
				'param_name' => 'image_width',
				'heading'    => __( 'Image width', 'soledad' ),
				'value'      => '',
				'std'        => '',
				'suffix'     => 'px',
				'min'        => 1,
				'dependency' => array( 'element' => '_use_img', 'value' => 'true', ),
				'group'      => $group_image,
			),
			array(
				'type'       => 'penci_responsive_sizes',
				'param_name' => 'image_height',
				'heading'    => __( 'Image height', 'soledad' ),
				'value'      => '',
				'std'        => '',
				'suffix'     => 'px',
				'min'        => 1,
				'dependency' => array( 'element' => '_use_img', 'value' => 'true', ),
				'group'      => $group_image,
			),
			array(
				'type'       => 'penci_responsive_sizes',
				'param_name' => 'image_mar_top',
				'heading'    => __( 'Image margin top', 'soledad' ),
				'value'      => '',
				'std'        => '',
				'suffix'     => 'px',
				'min'        => 1,
				'dependency' => array( 'element' => '_use_img', 'value' => 'true', ),
				'group'      => $group_image,
			),
			array(
				'type'       => 'penci_responsive_sizes',
				'param_name' => 'image_mar_bottom',
				'heading'    => __( 'Image margin bottom', 'soledad' ),
				'value'      => '',
				'std'        => '',
				'suffix'     => 'px',
				'min'        => 1,
				'dependency' => array( 'element' => '_use_img', 'value' => 'true', ),
				'group'      => $group_image,
			),
			array(
				'type'        => 'textfield',
				'heading'     => __( 'Pricing Name / Title', 'soledad' ),
				'param_name'  => '_heading',
				'description' => __( 'Enter the pricing name', 'soledad' ),
			),
			array(
				'type'        => 'textfield',
				'heading'     => __( 'Pricing  Subtitle', 'soledad' ),
				'param_name'  => '_subheading',
				'description' => __( 'Enter short description', 'soledad' ),
			),
			array(
				'type'        => 'textfield',
				'heading'     => __( 'Price', 'soledad' ),
				'param_name'  => '_price',
				'description' => __( 'Enter the price', 'soledad' ),
			),
			array(
				'type'        => 'textfield',
				'heading'     => __( 'Price Unit', 'soledad' ),
				'param_name'  => '_unit',
				'description' => __( 'Enter the price unit for this package. e.g. per month', 'soledad' ),
			),
			array(
				'type'        => 'textarea_html',
				'class'       => '',
				'heading'     => __( 'Features', 'ultimate_vc' ),
				'param_name'  => 'content',
				'value'       => '',
				'description' => __( 'Create the features list using un-ordered list elements.', 'soledad' ),
			),
			array(
				'type'        => 'textfield',
				'heading'     => __( 'Button Text', 'soledad' ),
				'param_name'  => '_btn_text',
				'description' => __( 'Enter call to action button text', 'soledad' ),
			),
			array(
				'type'        => 'vc_link',
				'class'       => '',
				'heading'     => __( 'Button Link', 'smile' ),
				'param_name'  => '_btn_link',
				'value'       => '',
				'description' => __( 'Select / enter the link for call to action button', 'ultimate_vc' ),
			),
			array(
				'type'       => 'penci_switch',
				'heading'    => esc_html__( 'Make this pricing box as featured', 'soledad' ),
				'param_name' => '_featured',
				'value'      => 'no',
			),
			array(
				'type'       => 'penci_only_number',
				'param_name' => 'min_height',
				'heading'    => __( 'Minimum height for pricing item', 'soledad' ),
				'value'      => '',
				'std'        => '',
				'suffix'     => 'px',
				'min'        => 1,
				'max'        => 1000,
			),
			array(
				'type'             => 'penci_responsive_sizes',
				'param_name'       => '_heading_mar_bottom',
				'heading'          => __( 'Pricing title margin bottom', 'soledad' ),
				'value'            => '',
				'std'              => '',
				'suffix'           => 'px',
				'min'              => 1,
				'edit_field_class' => 'vc_col-sm-6',
			),
			array(
				'type'             => 'penci_responsive_sizes',
				'param_name'       => '_subheading_mar_b',
				'heading'          => __( 'Pricing subtitle margin bottom', 'soledad' ),
				'value'            => '',
				'std'              => '',
				'suffix'           => 'px',
				'min'              => 1,
				'edit_field_class' => 'vc_col-sm-6',
			),
			array(
				'type'             => 'penci_responsive_sizes',
				'param_name'       => '_price_mar_bottom',
				'heading'          => __( 'Pricing margin bottom', 'soledad' ),
				'value'            => '',
				'std'              => '',
				'suffix'           => 'px',
				'min'              => 1,
				'edit_field_class' => 'vc_col-sm-6',
			),
			array(
				'type'             => 'penci_responsive_sizes',
				'param_name'       => '_unit_mar_bottom',
				'heading'          => __( 'Price unit margin bottom', 'soledad' ),
				'value'            => '',
				'std'              => '',
				'suffix'           => 'px',
				'min'              => 1,
				'edit_field_class' => 'vc_col-sm-6',
			),
			array(
				'type'             => 'penci_responsive_sizes',
				'param_name'       => '_features_martop',
				'heading'          => __( 'Features margin top', 'soledad' ),
				'value'            => '',
				'std'              => '',
				'suffix'           => 'px',
				'min'              => 1,
				'edit_field_class' => 'vc_col-sm-6',
			),
			array(
				'type'             => 'penci_responsive_sizes',
				'param_name'       => '_features_bottom',
				'heading'          => __( 'Features margin bottom', 'soledad' ),
				'value'            => '',
				'std'              => '',
				'suffix'           => 'px',
				'min'              => 1,
				'edit_field_class' => 'vc_col-sm-6',
			),
			array(
				'type'             => 'penci_responsive_sizes',
				'param_name'       => 'item_fea_bottom',
				'heading'          => __( 'Item of list features margin bottom', 'soledad' ),
				'value'            => '',
				'std'              => '',
				'suffix'           => 'px',
				'min'              => 1,
				'edit_field_class' => 'vc_col-sm-6',
			),
			array(
				'type'             => 'penci_responsive_sizes',
				'param_name'       => 'btn_mar_top',
				'heading'          => __( 'Button margin top', 'soledad' ),
				'value'            => '',
				'std'              => '',
				'suffix'           => 'px',
				'min'              => 1,
				'edit_field_class' => 'vc_col-sm-6',
			),
			array(
				'type'             => 'penci_responsive_sizes',
				'param_name'       => 'btn_width',
				'heading'          => __( 'Button width', 'soledad' ),
				'value'            => '',
				'std'              => '',
				'suffix'           => 'px',
				'min'              => 1,
				'edit_field_class' => 'vc_col-sm-6',
			),
			array(
				'type'             => 'penci_responsive_sizes',
				'param_name'       => 'btn_height',
				'heading'          => __( 'Button Height', 'soledad' ),
				'value'            => '',
				'std'              => '',
				'suffix'           => 'px',
				'min'              => 1,
				'edit_field_class' => 'vc_col-sm-6',
			),

			// Title
			array(
				'type'             => 'textfield',
				'param_name'       => '_heading_settings',
				'heading'          => esc_html__( 'Title', 'soledad' ),
				'value'            => '',
				'group'            => $group_color,
				'edit_field_class' => 'penci-param-heading-wrapper no-top-margin vc_column vc_col-sm-12',
			),
			array(
				'type'             => 'colorpicker',
				'heading'          => esc_html__( 'Title color', 'soledad' ),
				'param_name'       => '_heading_color',
				'group'            => $group_color,
				'edit_field_class' => 'vc_col-sm-6',
			),
			array(
				'type'             => 'penci_responsive_sizes',
				'param_name'       => '_heading_fsize',
				'heading'          => __( 'Font Size for Pricing Title', 'soledad' ),
				'value'            => '',
				'std'              => '',
				'suffix'           => 'px',
				'min'              => 1,
				'group'            => $group_color,
				'edit_field_class' => 'vc_col-sm-6',
			),
			array(
				'type'       => 'google_fonts',
				'group'      => $group_color,
				'param_name' => '_heading_typo',
				'value'      => '',
			),

			// Typo & Color
			array(
				'type'             => 'colorpicker',
				'heading'          => esc_html__( 'Background color for pricing item', 'soledad' ),
				'param_name'       => 'bg_color',
				'group'            => $group_color,
				'edit_field_class' => 'vc_col-sm-6',
			),
			array(
				'type'             => 'colorpicker',
				'heading'          => esc_html__( 'Border color for pricing item', 'soledad' ),
				'param_name'       => 'border_color',
				'group'            => $group_color,
				'edit_field_class' => 'vc_col-sm-6',
			),


			// Sub title
			array(
				'type'             => 'textfield',
				'param_name'       => '_heading_settings',
				'heading'          => esc_html__( 'Pricing Subtitle', 'soledad' ),
				'value'            => '',
				'group'            => $group_color,
				'edit_field_class' => 'penci-param-heading-wrapper no-top-margin vc_column vc_col-sm-12',
			),
			array(
				'type'             => 'colorpicker',
				'heading'          => esc_html__( 'Pricing Subtitle', 'soledad' ),
				'param_name'       => '_subheading_color',
				'group'            => $group_color,
				'edit_field_class' => 'vc_col-sm-6',
			),
			array(
				'type'             => 'penci_responsive_sizes',
				'param_name'       => '_subheading_fsize',
				'heading'          => __( 'Font Size for Pricing Title', 'soledad' ),
				'value'            => '',
				'std'              => '',
				'suffix'           => 'px',
				'min'              => 1,
				'group'            => $group_color,
				'edit_field_class' => 'vc_col-sm-6',
			),
			array(
				'type'       => 'google_fonts',
				'group'      => $group_color,
				'param_name' => '_subheading_typo',
				'value'      => '',
			),

			// Pricing table
			array(
				'type'             => 'textfield',
				'param_name'       => '_price_settings',
				'heading'          => esc_html__( 'Price', 'soledad' ),
				'value'            => '',
				'group'            => $group_color,
				'edit_field_class' => 'penci-param-heading-wrapper no-top-margin vc_column vc_col-sm-12',
			),
			array(
				'type'             => 'colorpicker',
				'heading'          => esc_html__( 'Price color', 'soledad' ),
				'param_name'       => '_price_color',
				'group'            => $group_color,
				'edit_field_class' => 'vc_col-sm-6',
			),
			array(
				'type'             => 'penci_responsive_sizes',
				'param_name'       => '_price_fsize',
				'heading'          => __( 'Font Size for Pricing', 'soledad' ),
				'value'            => '',
				'std'              => '',
				'suffix'           => 'px',
				'min'              => 1,
				'group'            => $group_color,
				'edit_field_class' => 'vc_col-sm-6',
			),
			array(
				'type'       => 'google_fonts',
				'group'      => $group_color,
				'param_name' => '_price_typo',
				'value'      => '',
			),

			// Unit table
			array(
				'type'             => 'textfield',
				'param_name'       => '_price_settings',
				'heading'          => esc_html__( 'Price Unit', 'soledad' ),
				'value'            => '',
				'group'            => $group_color,
				'edit_field_class' => 'penci-param-heading-wrapper no-top-margin vc_column vc_col-sm-12',
			),
			array(
				'type'             => 'colorpicker',
				'heading'          => esc_html__( 'Price Unit color', 'soledad' ),
				'param_name'       => '_unit_color',
				'group'            => $group_color,
				'edit_field_class' => 'vc_col-sm-6',
			),
			array(
				'type'             => 'penci_responsive_sizes',
				'param_name'       => '_unit_fsize',
				'heading'          => __( 'Font Size for Price Unit', 'soledad' ),
				'value'            => '',
				'std'              => '',
				'suffix'           => 'px',
				'min'              => 1,
				'group'            => $group_color,
				'edit_field_class' => 'vc_col-sm-6',
			),
			array(
				'type'       => 'google_fonts',
				'group'      => $group_color,
				'param_name' => '_unit_typo',
				'value'      => '',
			),
			// Features
			array(
				'type'             => 'textfield',
				'param_name'       => '_features_settings',
				'heading'          => esc_html__( 'Features', 'soledad' ),
				'value'            => '',
				'group'            => $group_color,
				'edit_field_class' => 'penci-param-heading-wrapper no-top-margin vc_column vc_col-sm-12',
			),
			array(
				'type'             => 'colorpicker',
				'heading'          => esc_html__( 'Features color', 'soledad' ),
				'param_name'       => 'features_color',
				'group'            => $group_color,
				'edit_field_class' => 'vc_col-sm-6',
			),
			array(
				'type'             => 'penci_responsive_sizes',
				'param_name'       => 'features_fsize',
				'heading'          => __( 'Font Size for Pricing', 'soledad' ),
				'value'            => '',
				'std'              => '',
				'suffix'           => 'px',
				'min'              => 1,
				'group'            => $group_color,
				'edit_field_class' => 'vc_col-sm-6',
			),
			array(
				'type'       => 'google_fonts',
				'group'      => $group_color,
				'param_name' => 'features_typo',
				'value'      => '',
			),

			// Button
			array(
				'type'             => 'textfield',
				'param_name'       => '_btn_settings',
				'heading'          => esc_html__( 'Button', 'soledad' ),
				'value'            => '',
				'group'            => $group_color,
				'edit_field_class' => 'penci-param-heading-wrapper no-top-margin vc_column vc_col-sm-12',
			),
			array(
				'type'             => 'colorpicker',
				'heading'          => esc_html__( 'Button background color', 'soledad' ),
				'param_name'       => 'btn_bgcolor',
				'group'            => $group_color,
				'edit_field_class' => 'vc_col-sm-6',
			),
			array(
				'type'             => 'colorpicker',
				'heading'          => esc_html__( 'Button border color', 'soledad' ),
				'param_name'       => 'btn_borcolor',
				'group'            => $group_color,
				'edit_field_class' => 'vc_col-sm-6',
			),
			array(
				'type'             => 'colorpicker',
				'heading'          => esc_html__( 'Button text color', 'soledad' ),
				'param_name'       => 'btn_text_color',
				'group'            => $group_color,
				'edit_field_class' => 'vc_col-sm-6',
			),
			array(
				'type'             => 'colorpicker',
				'heading'          => esc_html__( 'Button background hover color', 'soledad' ),
				'param_name'       => 'btn_hbgcolor',
				'group'            => $group_color,
				'edit_field_class' => 'vc_col-sm-6',
			),
			array(
				'type'             => 'colorpicker',
				'heading'          => esc_html__( 'Button border hover color', 'soledad' ),
				'param_name'       => 'btn_hborcolor',
				'group'            => $group_color,
				'edit_field_class' => 'vc_col-sm-6',
			),
			array(
				'type'             => 'colorpicker',
				'heading'          => esc_html__( 'Button text hover color', 'soledad' ),
				'param_name'       => 'btn_text_hcolor',
				'group'            => $group_color,
				'edit_field_class' => 'vc_col-sm-6',
			),
			array(
				'type'             => 'penci_responsive_sizes',
				'param_name'       => '_btn_fsize',
				'heading'          => __( 'Font Size for Pricing', 'soledad' ),
				'value'            => '',
				'std'              => '',
				'suffix'           => 'px',
				'min'              => 1,
				'group'            => $group_color,
				'edit_field_class' => 'vc_col-sm-6',
			),
			array(
				'type'       => 'google_fonts',
				'group'      => $group_color,
				'param_name' => '_btn_typo',
				'value'      => '',
			),
		), Penci_Vc_Params_Helper::extra_params() )
) );
