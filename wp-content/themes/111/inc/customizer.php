<?php
/**
 * Theme Customizer.
 *
 * @package Malcolmy_Lite
 */

/**
 * Retrieve a holder for Customizer options.
 *
 * @since  1.0.0
 * @return array
 */
function malcolmy_lite_get_customizer_options() {
	/**
	 * Filter a holder for Customizer options (for theme/plugin developer customization).
	 *
	 * @since 1.0.0
	 */
	return apply_filters( 'malcolmy_lite_get_customizer_options', array(
		'prefix'     => 'malcolmy_lite',
		'capability' => 'edit_theme_options',
		'type'       => 'theme_mod',
		'options'    => array(

			/** `Site Indentity` section */
			'show_tagline'                     => array(
				'title'    => esc_html__( 'Show tagline after logo', 'malcolmy_lite' ),
				'section'  => 'title_tagline',
				'priority' => 60,
				'default'  => true,
				'field'    => 'checkbox',
				'type'     => 'control',
			),
			'totop_visibility'                 => array(
				'title'    => esc_html__( 'Show ToTop button', 'malcolmy_lite' ),
				'section'  => 'title_tagline',
				'priority' => 61,
				'default'  => true,
				'field'    => 'checkbox',
				'type'     => 'control',
			),
			'page_preloader'                   => array(
				'title'    => esc_html__( 'Show page preloader', 'malcolmy_lite' ),
				'section'  => 'title_tagline',
				'priority' => 62,
				'default'  => true,
				'field'    => 'checkbox',
				'type'     => 'control',
			),
			'general_settings'                 => array(
				'title'    => esc_html__( 'General Site settings', 'malcolmy_lite' ),
				'priority' => 40,
				'type'     => 'panel',
			),

			/** `Logo & Favicon` section */
			'logo_favicon'                     => array(
				'title'    => esc_html__( 'Logo &amp; Favicon', 'malcolmy_lite' ),
				'priority' => 25,
				'panel'    => 'general_settings',
				'type'     => 'section',
			),
			'header_logo_type'                 => array(
				'title'   => esc_html__( 'Logo Type', 'malcolmy_lite' ),
				'section' => 'logo_favicon',
				'default' => 'image',
				'field'   => 'radio',
				'choices' => array(
					'image' => esc_html__( 'Image', 'malcolmy_lite' ),
					'text'  => esc_html__( 'Text', 'malcolmy_lite' ),
				),
				'type'    => 'control',
			),
			'header_logo_url'                  => array(
				'title'           => esc_html__( 'Logo Upload', 'malcolmy_lite' ),
				'description'     => esc_html__( 'Upload logo image', 'malcolmy_lite' ),
				'section'         => 'logo_favicon',
				'default'         => '%s/assets/images/logo.png',
				'field'           => 'image',
				'type'            => 'control',
				'active_callback' => 'malcolmy_lite_is_header_logo_image',
			),
			'retina_header_logo_url'           => array(
				'title'           => esc_html__( 'Retina Logo Upload', 'malcolmy_lite' ),
				'description'     => esc_html__( 'Upload logo for retina-ready devices', 'malcolmy_lite' ),
				'section'         => 'logo_favicon',
				'field'           => 'image',
				'type'            => 'control',
				'active_callback' => 'malcolmy_lite_is_header_logo_image',
			),
			'header_logo_font_family'          => array(
				'title'           => esc_html__( 'Font Family', 'malcolmy_lite' ),
				'section'         => 'logo_favicon',
				'default'         => 'Poppins, sans-serif',
				'field'           => 'fonts',
				'type'            => 'control',
				'active_callback' => 'malcolmy_lite_is_header_logo_text',
			),
			'header_logo_font_style'           => array(
				'title'           => esc_html__( 'Font Style', 'malcolmy_lite' ),
				'section'         => 'logo_favicon',
				'default'         => 'normal',
				'field'           => 'select',
				'choices'         => malcolmy_lite_get_font_styles(),
				'type'            => 'control',
				'active_callback' => 'malcolmy_lite_is_header_logo_text',
			),
			'header_logo_font_weight'          => array(
				'title'           => esc_html__( 'Font Weight', 'malcolmy_lite' ),
				'section'         => 'logo_favicon',
				'default'         => '400',
				'field'           => 'select',
				'choices'         => malcolmy_lite_get_font_weight(),
				'type'            => 'control',
				'active_callback' => 'malcolmy_lite_is_header_logo_text',
			),
			'header_logo_font_size'            => array(
				'title'           => esc_html__( 'Font Size, px', 'malcolmy_lite' ),
				'section'         => 'logo_favicon',
				'default'         => '27',
				'field'           => 'number',
				'input_attrs'     => array(
					'min'  => 6,
					'max'  => 50,
					'step' => 1,
				),
				'type'            => 'control',
				'active_callback' => 'malcolmy_lite_is_header_logo_text',
			),
			'header_logo_character_set'        => array(
				'title'           => esc_html__( 'Character Set', 'malcolmy_lite' ),
				'section'         => 'logo_favicon',
				'default'         => 'latin',
				'field'           => 'select',
				'choices'         => malcolmy_lite_get_character_sets(),
				'type'            => 'control',
				'active_callback' => 'malcolmy_lite_is_header_logo_text',
			),

			/** `Breadcrumbs` section */
			'breadcrumbs'                      => array(
				'title'    => esc_html__( 'Breadcrumbs', 'malcolmy_lite' ),
				'priority' => 30,
				'type'     => 'section',
				'panel'    => 'general_settings',
			),
			'breadcrumbs_visibillity'          => array(
				'title'   => esc_html__( 'Enable Breadcrumbs', 'malcolmy_lite' ),
				'section' => 'breadcrumbs',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'breadcrumbs_front_visibillity'    => array(
				'title'   => esc_html__( 'Enable Breadcrumbs on front page', 'malcolmy_lite' ),
				'section' => 'breadcrumbs',
				'default' => false,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'breadcrumbs_page_title'           => array(
				'title'   => esc_html__( 'Enable page title in breadcrumbs area', 'malcolmy_lite' ),
				'section' => 'breadcrumbs',
				'default' => false,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'breadcrumbs_path_type'            => array(
				'title'   => esc_html__( 'Show full/minified path', 'malcolmy_lite' ),
				'section' => 'breadcrumbs',
				'default' => 'minified',
				'field'   => 'select',
				'choices' => array(
					'full'     => esc_html__( 'Full', 'malcolmy_lite' ),
					'minified' => esc_html__( 'Minified', 'malcolmy_lite' ),
				),
				'type'    => 'control',
			),

			/** `Social links` section */
			'social_links'                     => array(
				'title'    => esc_html__( 'Social links', 'malcolmy_lite' ),
				'priority' => 50,
				'type'     => 'section',
				'panel'    => 'general_settings',
			),
			'header_social_links'              => array(
				'title'   => esc_html__( 'Show social links in header', 'malcolmy_lite' ),
				'section' => 'social_links',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'footer_social_links'              => array(
				'title'   => esc_html__( 'Show social links in footer', 'malcolmy_lite' ),
				'section' => 'social_links',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'blog_post_share_buttons'          => array(
				'title'   => esc_html__( 'Show social sharing to blog posts', 'malcolmy_lite' ),
				'section' => 'social_links',
				'default' => false,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'single_post_share_buttons'        => array(
				'title'   => esc_html__( 'Show social sharing to single blog post', 'malcolmy_lite' ),
				'section' => 'social_links',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),

			/** `Page Layout` section */
			'page_layout'                      => array(
				'title'    => esc_html__( 'Page Layout', 'malcolmy_lite' ),
				'priority' => 55,
				'type'     => 'section',
				'panel'    => 'general_settings',
			),
			'header_container_type'            => array(
				'title'   => esc_html__( 'Header type', 'malcolmy_lite' ),
				'section' => 'page_layout',
				'default' => 'fullwidth',
				'field'   => 'select',
				'choices' => array(
					'boxed'     => esc_html__( 'Boxed', 'malcolmy_lite' ),
					'fullwidth' => esc_html__( 'Fullwidth', 'malcolmy_lite' ),
				),
				'type'    => 'control',
			),
			'content_container_type'           => array(
				'title'   => esc_html__( 'Content type', 'malcolmy_lite' ),
				'section' => 'page_layout',
				'default' => 'boxed',
				'field'   => 'select',
				'choices' => array(
					'boxed'     => esc_html__( 'Boxed', 'malcolmy_lite' ),
					'fullwidth' => esc_html__( 'Fullwidth', 'malcolmy_lite' ),
				),
				'type'    => 'control',
			),
			'footer_container_type'            => array(
				'title'   => esc_html__( 'Footer type', 'malcolmy_lite' ),
				'section' => 'page_layout',
				'default' => 'fullwidth',
				'field'   => 'select',
				'choices' => array(
					'boxed'     => esc_html__( 'Boxed', 'malcolmy_lite' ),
					'fullwidth' => esc_html__( 'Fullwidth', 'malcolmy_lite' ),
				),
				'type'    => 'control',
			),
			'container_width'                  => array(
				'title'       => esc_html__( 'Container width (px)', 'malcolmy_lite' ),
				'section'     => 'page_layout',
				'default'     => 1410,
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 960,
					'max'  => 1760,
					'step' => 1,
				),
				'type'        => 'control',
			),
			'sidebar_width'                    => array(
				'title'             => esc_html__( 'Sidebar width', 'malcolmy_lite' ),
				'section'           => 'page_layout',
				'default'           => '1/4',
				'field'             => 'select',
				'choices'           => array(
					'1/3' => '1/3',
					'1/4' => '1/4',
				),
				'sanitize_callback' => 'sanitize_text_field',
				'type'              => 'control',
			),

			/** `Color Scheme` panel */
			'color_scheme'                     => array(
				'title'       => esc_html__( 'Color Scheme', 'malcolmy_lite' ),
				'description' => esc_html__( 'Configure Color Scheme', 'malcolmy_lite' ),
				'priority'    => 40,
				'type'        => 'panel',
			),

			/** `Regular scheme` section */
			'regular_scheme'                   => array(
				'title'    => esc_html__( 'Regular scheme', 'malcolmy_lite' ),
				'priority' => 1,
				'panel'    => 'color_scheme',
				'type'     => 'section',
			),
			'regular_accent_color_1'           => array(
				'title'   => esc_html__( 'Accent color (1)', 'malcolmy_lite' ),
				'section' => 'regular_scheme',
				'default' => '#91d7cb',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'regular_accent_color_2'           => array(
				'title'   => esc_html__( 'Accent color (2)', 'malcolmy_lite' ),
				'section' => 'regular_scheme',
				'default' => '#262626',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'regular_accent_color_3'           => array(
				'title'   => esc_html__( 'Accent color (3)', 'malcolmy_lite' ),
				'section' => 'regular_scheme',
				'default' => '#91d7cb',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'regular_accent_color_4'           => array(
				'title'   => esc_html__( 'Accent color (4)', 'malcolmy_lite' ),
				'section' => 'regular_scheme',
				'default' => '#000000',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'regular_text_color'               => array(
				'title'   => esc_html__( 'Text color', 'malcolmy_lite' ),
				'section' => 'regular_scheme',
				'default' => '#3a3a50',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'regular_link_color'               => array(
				'title'   => esc_html__( 'Link color', 'malcolmy_lite' ),
				'section' => 'regular_scheme',
				'default' => '#91d7cb',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'regular_link_hover_color'         => array(
				'title'   => esc_html__( 'Link hover color', 'malcolmy_lite' ),
				'section' => 'regular_scheme',
				'default' => '#888888',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'regular_h1_color'                 => array(
				'title'   => esc_html__( 'H1 color', 'malcolmy_lite' ),
				'section' => 'regular_scheme',
				'default' => '#3a3a50',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'regular_h2_color'                 => array(
				'title'   => esc_html__( 'H2 color', 'malcolmy_lite' ),
				'section' => 'regular_scheme',
				'default' => '#3a3a50',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'regular_h3_color'                 => array(
				'title'   => esc_html__( 'H3 color', 'malcolmy_lite' ),
				'section' => 'regular_scheme',
				'default' => '#3a3a50',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'regular_h4_color'                 => array(
				'title'   => esc_html__( 'H4 color', 'malcolmy_lite' ),
				'section' => 'regular_scheme',
				'default' => '#3a3a50',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'regular_h5_color'                 => array(
				'title'   => esc_html__( 'H5 color', 'malcolmy_lite' ),
				'section' => 'regular_scheme',
				'default' => '#3a3a50',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'regular_h6_color'                 => array(
				'title'   => esc_html__( 'H6 color', 'malcolmy_lite' ),
				'section' => 'regular_scheme',
				'default' => '#3a3a50',
				'field'   => 'hex_color',
				'type'    => 'control',
			),

			/** `Invert scheme` section */
			'invert_scheme'                    => array(
				'title'    => esc_html__( 'Invert scheme', 'malcolmy_lite' ),
				'priority' => 1,
				'panel'    => 'color_scheme',
				'type'     => 'section',
			),
			'invert_accent_color_1'            => array(
				'title'   => esc_html__( 'Accent color (1)', 'malcolmy_lite' ),
				'section' => 'invert_scheme',
				'default' => '#ffffff',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'invert_accent_color_2'            => array(
				'title'   => esc_html__( 'Accent color (2)', 'malcolmy_lite' ),
				'section' => 'invert_scheme',
				'default' => '#3a3a50',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'invert_accent_color_3'            => array(
				'title'   => esc_html__( 'Accent color (3)', 'malcolmy_lite' ),
				'section' => 'invert_scheme',
				'default' => '#f4f7fc',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'invert_accent_color_4'            => array(
				'title'   => esc_html__( 'Accent color (4)', 'malcolmy_lite' ),
				'section' => 'invert_scheme',
				'default' => '#acacad',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'invert_text_color'                => array(
				'title'   => esc_html__( 'Text color', 'malcolmy_lite' ),
				'section' => 'invert_scheme',
				'default' => '#fff',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'invert_link_color'                => array(
				'title'   => esc_html__( 'Link color', 'malcolmy_lite' ),
				'section' => 'invert_scheme',
				'default' => '#fff',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'invert_link_hover_color'          => array(
				'title'   => esc_html__( 'Link hover color', 'malcolmy_lite' ),
				'section' => 'invert_scheme',
				'default' => '#91d7cb',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'invert_h1_color'                  => array(
				'title'   => esc_html__( 'H1 color', 'malcolmy_lite' ),
				'section' => 'invert_scheme',
				'default' => '#fff',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'invert_h2_color'                  => array(
				'title'   => esc_html__( 'H2 color', 'malcolmy_lite' ),
				'section' => 'invert_scheme',
				'default' => '#fff',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'invert_h3_color'                  => array(
				'title'   => esc_html__( 'H3 color', 'malcolmy_lite' ),
				'section' => 'invert_scheme',
				'default' => '#fff',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'invert_h4_color'                  => array(
				'title'   => esc_html__( 'H4 color', 'malcolmy_lite' ),
				'section' => 'invert_scheme',
				'default' => '#ffffff',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'invert_h5_color'                  => array(
				'title'   => esc_html__( 'H5 color', 'malcolmy_lite' ),
				'section' => 'invert_scheme',
				'default' => '#fff',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'invert_h6_color'                  => array(
				'title'   => esc_html__( 'H6 color', 'malcolmy_lite' ),
				'section' => 'invert_scheme',
				'default' => '#fff',
				'field'   => 'hex_color',
				'type'    => 'control',
			),

			/** `Typography Settings` panel */
			'typography'                       => array(
				'title'       => esc_html__( 'Typography', 'malcolmy_lite' ),
				'description' => esc_html__( 'Configure typography settings', 'malcolmy_lite' ),
				'priority'    => 45,
				'type'        => 'panel',
			),

			/** `Body text` section */
			'body_typography'                  => array(
				'title'    => esc_html__( 'Body text', 'malcolmy_lite' ),
				'priority' => 5,
				'panel'    => 'typography',
				'type'     => 'section',
			),
			'body_font_family'                 => array(
				'title'   => esc_html__( 'Font Family', 'malcolmy_lite' ),
				'section' => 'body_typography',
				'default' => 'Poppins, sans-serif',
				'field'   => 'fonts',
				'type'    => 'control',
			),
			'body_font_style'                  => array(
				'title'   => esc_html__( 'Font Style', 'malcolmy_lite' ),
				'section' => 'body_typography',
				'default' => 'normal',
				'field'   => 'select',
				'choices' => malcolmy_lite_get_font_styles(),
				'type'    => 'control',
			),
			'body_font_weight'                 => array(
				'title'   => esc_html__( 'Font Weight', 'malcolmy_lite' ),
				'section' => 'body_typography',
				'default' => '300',
				'field'   => 'select',
				'choices' => malcolmy_lite_get_font_weight(),
				'type'    => 'control',
			),
			'body_font_size'                   => array(
				'title'       => esc_html__( 'Font Size, px', 'malcolmy_lite' ),
				'section'     => 'body_typography',
				'default'     => '17',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 6,
					'max'  => 50,
					'step' => 1,
				),
				'type'        => 'control',
			),
			'body_line_height'                 => array(
				'title'       => esc_html__( 'Line Height', 'malcolmy_lite' ),
				'description' => esc_html__( 'Relative to the font-size of the element', 'malcolmy_lite' ),
				'section'     => 'body_typography',
				'default'     => '1.8',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 1.0,
					'max'  => 3.0,
					'step' => 0.1,
				),
				'type'        => 'control',
			),
			'body_letter_spacing'              => array(
				'title'       => esc_html__( 'Letter Spacing, px', 'malcolmy_lite' ),
				'section'     => 'body_typography',
				'default'     => '0',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => -10,
					'max'  => 10,
					'step' => 1,
				),
				'type'        => 'control',
			),
			'body_character_set'               => array(
				'title'   => esc_html__( 'Character Set', 'malcolmy_lite' ),
				'section' => 'body_typography',
				'default' => 'latin',
				'field'   => 'select',
				'choices' => malcolmy_lite_get_character_sets(),
				'type'    => 'control',
			),
			'body_text_align'                  => array(
				'title'   => esc_html__( 'Text Align', 'malcolmy_lite' ),
				'section' => 'body_typography',
				'default' => 'left',
				'field'   => 'select',
				'choices' => malcolmy_lite_get_text_aligns(),
				'type'    => 'control',
			),

			/** `H1 Heading` section */
			'h1_typography'                    => array(
				'title'    => esc_html__( 'H1 Heading', 'malcolmy_lite' ),
				'priority' => 10,
				'panel'    => 'typography',
				'type'     => 'section',
			),
			'h1_font_family'                   => array(
				'title'   => esc_html__( 'Font Family', 'malcolmy_lite' ),
				'section' => 'h1_typography',
				'default' => 'Poppins, sans-serif',
				'field'   => 'fonts',
				'type'    => 'control',
			),
			'h1_font_style'                    => array(
				'title'   => esc_html__( 'Font Style', 'malcolmy_lite' ),
				'section' => 'h1_typography',
				'default' => 'normal',
				'field'   => 'select',
				'choices' => malcolmy_lite_get_font_styles(),
				'type'    => 'control',
			),
			'h1_font_weight'                   => array(
				'title'   => esc_html__( 'Font Weight', 'malcolmy_lite' ),
				'section' => 'h1_typography',
				'default' => '700',
				'field'   => 'select',
				'choices' => malcolmy_lite_get_font_weight(),
				'type'    => 'control',
			),
			'h1_font_size'                     => array(
				'title'       => esc_html__( 'Font Size, px', 'malcolmy_lite' ),
				'section'     => 'h1_typography',
				'default'     => '48',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 10,
					'max'  => 200,
					'step' => 1,
				),
				'type'        => 'control',
			),
			'h1_line_height'                   => array(
				'title'       => esc_html__( 'Line Height', 'malcolmy_lite' ),
				'description' => esc_html__( 'Relative to the font-size of the element', 'malcolmy_lite' ),
				'section'     => 'h1_typography',
				'default'     => '1.029',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 1.0,
					'max'  => 3.0,
					'step' => 0.1,
				),
				'type'        => 'control',
			),
			'h1_letter_spacing'                => array(
				'title'       => esc_html__( 'Letter Spacing, px', 'malcolmy_lite' ),
				'section'     => 'h1_typography',
				'default'     => '0',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => -10,
					'max'  => 10,
					'step' => 1,
				),
				'type'        => 'control',
			),
			'h1_character_set'                 => array(
				'title'   => esc_html__( 'Character Set', 'malcolmy_lite' ),
				'section' => 'h1_typography',
				'default' => 'latin',
				'field'   => 'select',
				'choices' => malcolmy_lite_get_character_sets(),
				'type'    => 'control',
			),
			'h1_text_align'                    => array(
				'title'   => esc_html__( 'Text Align', 'malcolmy_lite' ),
				'section' => 'h1_typography',
				'default' => 'inherit',
				'field'   => 'select',
				'choices' => malcolmy_lite_get_text_aligns(),
				'type'    => 'control',
			),

			/** `H2 Heading` section */
			'h2_typography'                    => array(
				'title'    => esc_html__( 'H2 Heading', 'malcolmy_lite' ),
				'priority' => 15,
				'panel'    => 'typography',
				'type'     => 'section',
			),
			'h2_font_family'                   => array(
				'title'   => esc_html__( 'Font Family', 'malcolmy_lite' ),
				'section' => 'h2_typography',
				'default' => 'Poppins, sans-serif',
				'field'   => 'fonts',
				'type'    => 'control',
			),
			'h2_font_style'                    => array(
				'title'   => esc_html__( 'Font Style', 'malcolmy_lite' ),
				'section' => 'h2_typography',
				'default' => 'normal',
				'field'   => 'select',
				'choices' => malcolmy_lite_get_font_styles(),
				'type'    => 'control',
			),
			'h2_font_weight'                   => array(
				'title'   => esc_html__( 'Font Weight', 'malcolmy_lite' ),
				'section' => 'h2_typography',
				'default' => '700',
				'field'   => 'select',
				'choices' => malcolmy_lite_get_font_weight(),
				'type'    => 'control',
			),
			'h2_font_size'                     => array(
				'title'       => esc_html__( 'Font Size, px', 'malcolmy_lite' ),
				'section'     => 'h2_typography',
				'default'     => '42',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 10,
					'max'  => 200,
					'step' => 1,
				),
				'type'        => 'control',
			),
			'h2_line_height'                   => array(
				'title'       => esc_html__( 'Line Height', 'malcolmy_lite' ),
				'description' => esc_html__( 'Relative to the font-size of the element', 'malcolmy_lite' ),
				'section'     => 'h2_typography',
				'default'     => '1.25',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 1.0,
					'max'  => 3.0,
					'step' => 0.1,
				),
				'type'        => 'control',
			),
			'h2_letter_spacing'                => array(
				'title'       => esc_html__( 'Letter Spacing, px', 'malcolmy_lite' ),
				'section'     => 'h2_typography',
				'default'     => '0',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => -10,
					'max'  => 10,
					'step' => 1,
				),
				'type'        => 'control',
			),
			'h2_character_set'                 => array(
				'title'   => esc_html__( 'Character Set', 'malcolmy_lite' ),
				'section' => 'h2_typography',
				'default' => 'latin',
				'field'   => 'select',
				'choices' => malcolmy_lite_get_character_sets(),
				'type'    => 'control',
			),
			'h2_text_align'                    => array(
				'title'   => esc_html__( 'Text Align', 'malcolmy_lite' ),
				'section' => 'h2_typography',
				'default' => 'inherit',
				'field'   => 'select',
				'choices' => malcolmy_lite_get_text_aligns(),
				'type'    => 'control',
			),

			/** `H3 Heading` section */
			'h3_typography'                    => array(
				'title'    => esc_html__( 'H3 Heading', 'malcolmy_lite' ),
				'priority' => 20,
				'panel'    => 'typography',
				'type'     => 'section',
			),
			'h3_font_family'                   => array(
				'title'   => esc_html__( 'Font Family', 'malcolmy_lite' ),
				'section' => 'h3_typography',
				'default' => 'Poppins, sans-serif',
				'field'   => 'fonts',
				'type'    => 'control',
			),
			'h3_font_style'                    => array(
				'title'   => esc_html__( 'Font Style', 'malcolmy_lite' ),
				'section' => 'h3_typography',
				'default' => 'normal',
				'field'   => 'select',
				'choices' => malcolmy_lite_get_font_styles(),
				'type'    => 'control',
			),
			'h3_font_weight'                   => array(
				'title'   => esc_html__( 'Font Weight', 'malcolmy_lite' ),
				'section' => 'h3_typography',
				'default' => '500',
				'field'   => 'select',
				'choices' => malcolmy_lite_get_font_weight(),
				'type'    => 'control',
			),
			'h3_font_size'                     => array(
				'title'       => esc_html__( 'Font Size, px', 'malcolmy_lite' ),
				'section'     => 'h3_typography',
				'default'     => '42',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 10,
					'max'  => 200,
					'step' => 1,
				),
				'type'        => 'control',
			),
			'h3_line_height'                   => array(
				'title'       => esc_html__( 'Line Height', 'malcolmy_lite' ),
				'description' => esc_html__( 'Relative to the font-size of the element', 'malcolmy_lite' ),
				'section'     => 'h3_typography',
				'default'     => '1.179',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 1.0,
					'max'  => 3.0,
					'step' => 0.1,
				),
				'type'        => 'control',
			),
			'h3_letter_spacing'                => array(
				'title'       => esc_html__( 'Letter Spacing, px', 'malcolmy_lite' ),
				'section'     => 'h3_typography',
				'default'     => '0',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => -10,
					'max'  => 10,
					'step' => 1,
				),
				'type'        => 'control',
			),
			'h3_character_set'                 => array(
				'title'   => esc_html__( 'Character Set', 'malcolmy_lite' ),
				'section' => 'h3_typography',
				'default' => 'latin',
				'field'   => 'select',
				'choices' => malcolmy_lite_get_character_sets(),
				'type'    => 'control',
			),
			'h3_text_align'                    => array(
				'title'   => esc_html__( 'Text Align', 'malcolmy_lite' ),
				'section' => 'h3_typography',
				'default' => 'inherit',
				'field'   => 'select',
				'choices' => malcolmy_lite_get_text_aligns(),
				'type'    => 'control',
			),

			/** `H4 Heading` section */
			'h4_typography'                    => array(
				'title'    => esc_html__( 'H4 Heading', 'malcolmy_lite' ),
				'priority' => 25,
				'panel'    => 'typography',
				'type'     => 'section',
			),
			'h4_font_family'                   => array(
				'title'   => esc_html__( 'Font Family', 'malcolmy_lite' ),
				'section' => 'h4_typography',
				'default' => 'Poppins, sans-serif',
				'field'   => 'fonts',
				'type'    => 'control',
			),
			'h4_font_style'                    => array(
				'title'   => esc_html__( 'Font Style', 'malcolmy_lite' ),
				'section' => 'h4_typography',
				'default' => 'normal',
				'field'   => 'select',
				'choices' => malcolmy_lite_get_font_styles(),
				'type'    => 'control',
			),
			'h4_font_weight'                   => array(
				'title'   => esc_html__( 'Font Weight', 'malcolmy_lite' ),
				'section' => 'h4_typography',
				'default' => '700',
				'field'   => 'select',
				'choices' => malcolmy_lite_get_font_weight(),
				'type'    => 'control',
			),
			'h4_font_size'                     => array(
				'title'       => esc_html__( 'Font Size, px', 'malcolmy_lite' ),
				'section'     => 'h4_typography',
				'default'     => '30',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 10,
					'max'  => 200,
					'step' => 1,
				),
				'type'        => 'control',
			),
			'h4_line_height'                   => array(
				'title'       => esc_html__( 'Line Height', 'malcolmy_lite' ),
				'description' => esc_html__( 'Relative to the font-size of the element', 'malcolmy_lite' ),
				'section'     => 'h4_typography',
				'default'     => '1.28',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 1.0,
					'max'  => 3.0,
					'step' => 0.1,
				),
				'type'        => 'control',
			),
			'h4_letter_spacing'                => array(
				'title'       => esc_html__( 'Letter Spacing, px', 'malcolmy_lite' ),
				'section'     => 'h4_typography',
				'default'     => '0',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => -10,
					'max'  => 10,
					'step' => 1,
				),
				'type'        => 'control',
			),
			'h4_character_set'                 => array(
				'title'   => esc_html__( 'Character Set', 'malcolmy_lite' ),
				'section' => 'h4_typography',
				'default' => 'latin',
				'field'   => 'select',
				'choices' => malcolmy_lite_get_character_sets(),
				'type'    => 'control',
			),
			'h4_text_align'                    => array(
				'title'   => esc_html__( 'Text Align', 'malcolmy_lite' ),
				'section' => 'h4_typography',
				'default' => 'inherit',
				'field'   => 'select',
				'choices' => malcolmy_lite_get_text_aligns(),
				'type'    => 'control',
			),

			/** `H5 Heading` section */
			'h5_typography'                    => array(
				'title'    => esc_html__( 'H5 Heading', 'malcolmy_lite' ),
				'priority' => 30,
				'panel'    => 'typography',
				'type'     => 'section',
			),
			'h5_font_family'                   => array(
				'title'   => esc_html__( 'Font Family', 'malcolmy_lite' ),
				'section' => 'h5_typography',
				'default' => 'Poppins, sans-serif',
				'field'   => 'fonts',
				'type'    => 'control',
			),
			'h5_font_style'                    => array(
				'title'   => esc_html__( 'Font Style', 'malcolmy_lite' ),
				'section' => 'h5_typography',
				'default' => 'normal',
				'field'   => 'select',
				'choices' => malcolmy_lite_get_font_styles(),
				'type'    => 'control',
			),
			'h5_font_weight'                   => array(
				'title'   => esc_html__( 'Font Weight', 'malcolmy_lite' ),
				'section' => 'h5_typography',
				'default' => '700',
				'field'   => 'select',
				'choices' => malcolmy_lite_get_font_weight(),
				'type'    => 'control',
			),
			'h5_font_size'                     => array(
				'title'       => esc_html__( 'Font Size, px', 'malcolmy_lite' ),
				'section'     => 'h5_typography',
				'default'     => '24',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 10,
					'max'  => 200,
					'step' => 1,
				),
				'type'        => 'control',
			),
			'h5_line_height'                   => array(
				'title'       => esc_html__( 'Line Height', 'malcolmy_lite' ),
				'description' => esc_html__( 'Relative to the font-size of the element', 'malcolmy_lite' ),
				'section'     => 'h5_typography',
				'default'     => '1.58',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 1.0,
					'max'  => 3.0,
					'step' => 0.1,
				),
				'type'        => 'control',
			),
			'h5_letter_spacing'                => array(
				'title'       => esc_html__( 'Letter Spacing, px', 'malcolmy_lite' ),
				'section'     => 'h5_typography',
				'default'     => '0',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => -10,
					'max'  => 10,
					'step' => 1,
				),
				'type'        => 'control',
			),
			'h5_character_set'                 => array(
				'title'   => esc_html__( 'Character Set', 'malcolmy_lite' ),
				'section' => 'h5_typography',
				'default' => 'latin',
				'field'   => 'select',
				'choices' => malcolmy_lite_get_character_sets(),
				'type'    => 'control',
			),
			'h5_text_align'                    => array(
				'title'   => esc_html__( 'Text Align', 'malcolmy_lite' ),
				'section' => 'h5_typography',
				'default' => 'inherit',
				'field'   => 'select',
				'choices' => malcolmy_lite_get_text_aligns(),
				'type'    => 'control',
			),

			/** `H6 Heading` section */
			'h6_typography'                    => array(
				'title'    => esc_html__( 'H6 Heading', 'malcolmy_lite' ),
				'priority' => 35,
				'panel'    => 'typography',
				'type'     => 'section',
			),
			'h6_font_family'                   => array(
				'title'   => esc_html__( 'Font Family', 'malcolmy_lite' ),
				'section' => 'h6_typography',
				'default' => 'Poppins, sans-serif',
				'field'   => 'fonts',
				'type'    => 'control',
			),
			'h6_font_style'                    => array(
				'title'   => esc_html__( 'Font Style', 'malcolmy_lite' ),
				'section' => 'h6_typography',
				'default' => 'normal',
				'field'   => 'select',
				'choices' => malcolmy_lite_get_font_styles(),
				'type'    => 'control',
			),
			'h6_font_weight'                   => array(
				'title'   => esc_html__( 'Font Weight', 'malcolmy_lite' ),
				'section' => 'h6_typography',
				'default' => '600',
				'field'   => 'select',
				'choices' => malcolmy_lite_get_font_weight(),
				'type'    => 'control',
			),
			'h6_font_size'                     => array(
				'title'       => esc_html__( 'Font Size, px', 'malcolmy_lite' ),
				'section'     => 'h6_typography',
				'default'     => '17',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 10,
					'max'  => 200,
					'step' => 1,
				),
				'type'        => 'control',
			),
			'h6_line_height'                   => array(
				'title'       => esc_html__( 'Line Height', 'malcolmy_lite' ),
				'description' => esc_html__( 'Relative to the font-size of the element', 'malcolmy_lite' ),
				'section'     => 'h6_typography',
				'default'     => '1.75',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 1.0,
					'max'  => 3.0,
					'step' => 0.1,
				),
				'type'        => 'control',
			),
			'h6_letter_spacing'                => array(
				'title'       => esc_html__( 'Letter Spacing, px', 'malcolmy_lite' ),
				'section'     => 'h6_typography',
				'default'     => '0',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => -10,
					'max'  => 10,
					'step' => 1,
				),
				'type'        => 'control',
			),
			'h6_character_set'                 => array(
				'title'   => esc_html__( 'Character Set', 'malcolmy_lite' ),
				'section' => 'h6_typography',
				'default' => 'latin',
				'field'   => 'select',
				'choices' => malcolmy_lite_get_character_sets(),
				'type'    => 'control',
			),
			'h6_text_align'                    => array(
				'title'   => esc_html__( 'Text Align', 'malcolmy_lite' ),
				'section' => 'h6_typography',
				'default' => 'inherit',
				'field'   => 'select',
				'choices' => malcolmy_lite_get_text_aligns(),
				'type'    => 'control',
			),

			/** `Breadcrumbs` section */
			'breadcrumbs_typography'           => array(
				'title'    => esc_html__( 'Breadcrumbs', 'malcolmy_lite' ),
				'priority' => 45,
				'panel'    => 'typography',
				'type'     => 'section',
			),
			'breadcrumbs_font_family'          => array(
				'title'   => esc_html__( 'Font Family', 'malcolmy_lite' ),
				'section' => 'breadcrumbs_typography',
				'default' => 'Poppins, sans-serif',
				'field'   => 'fonts',
				'type'    => 'control',
			),
			'breadcrumbs_font_style'           => array(
				'title'   => esc_html__( 'Font Style', 'malcolmy_lite' ),
				'section' => 'breadcrumbs_typography',
				'default' => 'normal',
				'field'   => 'select',
				'choices' => malcolmy_lite_get_font_styles(),
				'type'    => 'control',
			),
			'breadcrumbs_font_weight'          => array(
				'title'   => esc_html__( 'Font Weight', 'malcolmy_lite' ),
				'section' => 'breadcrumbs_typography',
				'default' => '600',
				'field'   => 'select',
				'choices' => malcolmy_lite_get_font_weight(),
				'type'    => 'control',
			),
			'breadcrumbs_font_size'            => array(
				'title'       => esc_html__( 'Font Size, px', 'malcolmy_lite' ),
				'section'     => 'breadcrumbs_typography',
				'default'     => '13',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 6,
					'max'  => 50,
					'step' => 1,
				),
				'type'        => 'control',
			),
			'breadcrumbs_line_height'          => array(
				'title'       => esc_html__( 'Line Height', 'malcolmy_lite' ),
				'description' => esc_html__( 'Relative to the font-size of the element', 'malcolmy_lite' ),
				'section'     => 'breadcrumbs_typography',
				'default'     => '1.6',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 1.0,
					'max'  => 3.0,
					'step' => 0.1,
				),
				'type'        => 'control',
			),
			'breadcrumbs_letter_spacing'       => array(
				'title'       => esc_html__( 'Letter Spacing, px', 'malcolmy_lite' ),
				'section'     => 'breadcrumbs_typography',
				'default'     => '0',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => -10,
					'max'  => 10,
					'step' => 1,
				),
				'type'        => 'control',
			),
			'breadcrumbs_character_set'        => array(
				'title'   => esc_html__( 'Character Set', 'malcolmy_lite' ),
				'section' => 'breadcrumbs_typography',
				'default' => 'latin',
				'field'   => 'select',
				'choices' => malcolmy_lite_get_character_sets(),
				'type'    => 'control',
			),

			/** `Header` panel */
			'header_options'                   => array(
				'title'    => esc_html__( 'Header', 'malcolmy_lite' ),
				'priority' => 60,
				'type'     => 'panel',
			),

			/** `Header styles` section */
			'header_styles'                    => array(
				'title'    => esc_html__( 'Styles', 'malcolmy_lite' ),
				'priority' => 5,
				'panel'    => 'header_options',
				'type'     => 'section',
			),
			'header_bg_color'                  => array(
				'title'   => esc_html__( 'Background Color', 'malcolmy_lite' ),
				'section' => 'header_styles',
				'field'   => 'hex_color',
				'default' => '#ffffff',
				'type'    => 'control',
			),
			'header_bg_repeat'                 => array(
				'title'   => esc_html__( 'Background Repeat', 'malcolmy_lite' ),
				'section' => 'header_styles',
				'default' => 'repeat',
				'field'   => 'select',
				'choices' => array(
					'no-repeat' => esc_html__( 'No Repeat', 'malcolmy_lite' ),
					'repeat'    => esc_html__( 'Tile', 'malcolmy_lite' ),
					'repeat-x'  => esc_html__( 'Tile Horizontally', 'malcolmy_lite' ),
					'repeat-y'  => esc_html__( 'Tile Vertically', 'malcolmy_lite' ),
				),
				'type'    => 'control',
			),
			'header_bg_position_x'             => array(
				'title'   => esc_html__( 'Background Position', 'malcolmy_lite' ),
				'section' => 'header_styles',
				'default' => 'left',
				'field'   => 'select',
				'choices' => array(
					'left'   => esc_html__( 'Left', 'malcolmy_lite' ),
					'center' => esc_html__( 'Center', 'malcolmy_lite' ),
					'right'  => esc_html__( 'Right', 'malcolmy_lite' ),
				),
				'type'    => 'control',
			),
			'header_bg_attachment'             => array(
				'title'   => esc_html__( 'Background Attachment', 'malcolmy_lite' ),
				'section' => 'header_styles',
				'default' => 'scroll',
				'field'   => 'select',
				'choices' => array(
					'scroll' => esc_html__( 'Scroll', 'malcolmy_lite' ),
					'fixed'  => esc_html__( 'Fixed', 'malcolmy_lite' ),
				),
				'type'    => 'control',
			),
			'header_layout_type'               => array(
				'title'   => esc_html__( 'Layout', 'malcolmy_lite' ),
				'section' => 'header_styles',
				'default' => 'minimal',
				'field'   => 'select',
				'type'    => 'control',
			),

			/** `Top Panel` section */
			'header_top_panel'                 => array(
				'title'    => esc_html__( 'Top Panel', 'malcolmy_lite' ),
				'priority' => 10,
				'panel'    => 'header_options',
				'type'     => 'section',
			),
			'top_panel_text'                   => array(
				'title'       => esc_html__( 'Disclaimer Text', 'malcolmy_lite' ),
				'description' => esc_html__( 'HTML formatting support', 'malcolmy_lite' ),
				'section'     => 'header_top_panel',
				'default'     => malcolmy_lite_get_default_top_panel_text(),
				'field'       => 'textarea',
				'type'        => 'control',
			),
			'top_panel_search'                 => array(
				'title'   => esc_html__( 'Enable search', 'malcolmy_lite' ),
				'section' => 'header_main_menu',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'top_panel_bg'                     => array(
				'title'   => esc_html__( 'Background color', 'malcolmy_lite' ),
				'section' => 'header_top_panel',
				'default' => '#262626',
				'field'   => 'hex_color',
				'type'    => 'control',
			),


			/** `Main Menu` section */
			'header_main_menu'                 => array(
				'title'    => esc_html__( 'Main Menu', 'malcolmy_lite' ),
				'priority' => 15,
				'panel'    => 'header_options',
				'type'     => 'section',
			),
			'header_menu_sticky'               => array(
				'title'   => esc_html__( 'Enable sticky menu', 'malcolmy_lite' ),
				'section' => 'header_main_menu',
				'default' => false,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'header_menu_attributes'           => array(
				'title'   => esc_html__( 'Enable title attributes', 'malcolmy_lite' ),
				'section' => 'header_main_menu',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'more_button_type'                 => array(
				'title'   => esc_html__( 'More Menu Button Type', 'malcolmy_lite' ),
				'section' => 'header_main_menu',
				'default' => 'text',
				'field'   => 'radio',
				'choices' => array(
					'image' => esc_html__( 'Image', 'malcolmy_lite' ),
					'icon'  => esc_html__( 'Icon', 'malcolmy_lite' ),
					'text'  => esc_html__( 'Text', 'malcolmy_lite' ),
				),
				'type'    => 'control',
			),
			'more_button_text'                 => array(
				'title'           => esc_html__( 'More Menu Button Text', 'malcolmy_lite' ),
				'section'         => 'header_main_menu',
				'default'         => esc_html__( '...', 'malcolmy_lite' ),
				'field'           => 'input',
				'type'            => 'control',
				'active_callback' => 'malcolmy_lite_is_more_button_type_text',
			),
			'more_button_icon'                 => array(
				'title'           => esc_html__( 'More Menu Button Icon', 'malcolmy_lite' ),
				'section'         => 'header_main_menu',
				'field'           => 'iconpicker',
				'type'            => 'control',
				'active_callback' => 'malcolmy_lite_is_more_button_type_icon',
				'icon_data'       => array(
					'icon_set'    => 'moreButtonFontAwesome',
					'icon_css'    => MALCOLMY_LITE_THEME_URI . '/assets/css/font-awesome.min.css',
					'icon_base'   => 'fa',
					'icon_prefix' => 'fa-',
					'icons'       => malcolmy_lite_get_icons_set(),
				),
			),
			'more_button_image_url'            => array(
				'title'           => esc_html__( 'More Button Image Upload', 'malcolmy_lite' ),
				'description'     => esc_html__( 'Upload More Button image', 'malcolmy_lite' ),
				'section'         => 'header_main_menu',
				'default'         => ' ',
				'field'           => 'image',
				'type'            => 'control',
				'active_callback' => 'malcolmy_lite_is_more_button_type_image',
			),
			'retina_more_button_image_url'     => array(
				'title'           => esc_html__( 'Retina More Button Image Upload', 'malcolmy_lite' ),
				'description'     => esc_html__( 'Upload More Button image for retina-ready devices', 'malcolmy_lite' ),
				'section'         => 'header_main_menu',
				'field'           => 'image',
				'type'            => 'control',
				'active_callback' => 'malcolmy_lite_is_more_button_type_image',
			),

			/** `Sidebar` section */
			'sidebar_settings'                 => array(
				'title'    => esc_html__( 'Sidebar', 'malcolmy_lite' ),
				'priority' => 105,
				'type'     => 'section',
			),
			'sidebar_position'                 => array(
				'title'   => esc_html__( 'Sidebar Position', 'malcolmy_lite' ),
				'section' => 'sidebar_settings',
				'default' => 'fullwidth',
				'field'   => 'select',
				'choices' => array(
					'one-left-sidebar'  => esc_html__( 'Sidebar on left side', 'malcolmy_lite' ),
					'one-right-sidebar' => esc_html__( 'Sidebar on right side', 'malcolmy_lite' ),
					'fullwidth'         => esc_html__( 'No sidebars', 'malcolmy_lite' ),
				),
				'type'    => 'control',
			),

			/** `MailChimp` section */
			'mailchimp'                        => array(
				'title'       => esc_html__( 'MailChimp', 'malcolmy_lite' ),
				'description' => esc_html__( 'Setup MailChimp settings for subscribe widget', 'malcolmy_lite' ),
				'priority'    => 109,
				'type'        => 'section',
			),
			'mailchimp_api_key'                => array(
				'title'   => esc_html__( 'MailChimp API key', 'malcolmy_lite' ),
				'section' => 'mailchimp',
				'field'   => 'text',
				'type'    => 'control',
			),
			'mailchimp_list_id'                => array(
				'title'   => esc_html__( 'MailChimp list ID', 'malcolmy_lite' ),
				'section' => 'mailchimp',
				'field'   => 'text',
				'type'    => 'control',
			),

			/** `Ads Management` panel */
			'ads_management'                   => array(
				'title'    => esc_html__( 'Ads Management', 'malcolmy_lite' ),
				'priority' => 110,
				'type'     => 'section',
			),
			'ads_header'                       => array(
				'title'             => esc_html__( 'Header', 'malcolmy_lite' ),
				'section'           => 'ads_management',
				'field'             => 'textarea',
				'default'           => '',
				'sanitize_callback' => 'esc_html',
				'type'              => 'control',
			),
			'ads_home_before_loop'             => array(
				'title'             => esc_html__( 'Front Page Before Loop', 'malcolmy_lite' ),
				'section'           => 'ads_management',
				'field'             => 'textarea',
				'default'           => '',
				'sanitize_callback' => 'esc_html',
				'type'              => 'control',
			),
			'ads_post_before_content'          => array(
				'title'             => esc_html__( 'Post Before Content', 'malcolmy_lite' ),
				'section'           => 'ads_management',
				'field'             => 'textarea',
				'default'           => '',
				'sanitize_callback' => 'esc_html',
				'type'              => 'control',
			),
			'ads_post_before_comments'         => array(
				'title'             => esc_html__( 'Post Before Comments', 'malcolmy_lite' ),
				'section'           => 'ads_management',
				'field'             => 'textarea',
				'default'           => '',
				'sanitize_callback' => 'esc_html',
				'type'              => 'control',
			),

			/** `Footer` panel */
			'footer_options'                   => array(
				'title'    => esc_html__( 'Footer', 'malcolmy_lite' ),
				'priority' => 110,
				'type'     => 'section',
			),
			'footer_logo_url'                  => array(
				'title'   => esc_html__( 'Logo upload', 'malcolmy_lite' ),
				'section' => 'footer_options',
				'field'   => 'image',
				'default' => '%s/assets/images/footer-logo1.png',
				'type'    => 'control',
			),
			'footer_copyright'                 => array(
				'title'   => esc_html__( 'Copyright text', 'malcolmy_lite' ),
				'section' => 'footer_options',
				'default' => malcolmy_lite_get_default_footer_copyright(),
				'field'   => 'textarea',
				'type'    => 'control',
			),
			'footer_widget_area_visibility'    => array(
			    'title'   => esc_html__( 'Show Footer Widgets Area', 'malcolmy_lite' ),
			    'section' => 'footer_options',
			    'default' => false,
			    'field'   => 'checkbox',
			    'type'    => 'control',
			),
			'footer_widget_columns'            => array(
				'title'   => esc_html__( 'Widget Area Columns', 'malcolmy_lite' ),
				'section' => 'footer_options',
				'default' => '3',
				'field'   => 'select',
				'choices' => array(
					'1' => '1',
					'2' => '2',
					'3' => '3',
					'4' => '4',
				),
				'type'    => 'control'
			),
			'footer_layout_type'               => array(
				'title'   => esc_html__( 'Layout', 'malcolmy_lite' ),
				'section' => 'footer_options',
				'default' => 'minimal',
				'field'   => 'select',
				'type'    => 'control'
			),
			'footer_widgets_bg'                => array(
				'title'   => esc_html__( 'Footer Widgets Area color', 'malcolmy_lite' ),
				'section' => 'footer_options',
				'default' => '#dee1e7',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'footer_bg'                        => array(
				'title'   => esc_html__( 'Footer Background color', 'malcolmy_lite' ),
				'section' => 'footer_options',
				'default' => '#38384f',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'footer_logo_visibility'           => array(
				'title'   => esc_html__( 'Show Footer Logo', 'malcolmy_lite' ),
				'section' => 'footer_options',
				'default' => false,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'footer_menu_visibility'           => array(
				'title'   => esc_html__( 'Show Menu', 'malcolmy_lite' ),
				'section' => 'footer_options',
				'default' => false,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'footer_bg'                  => array(
				'title'   => esc_html__( 'Footer Background color', 'malcolmy_lite' ),
				'section' => 'footer_options',
				'default' => '#262626',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'footer_bg_image'            => array(
				'title'   => esc_html__( 'Background Image', 'malcolmy_lite' ),
				'section' => 'footer_options',
				'default' => '%s/assets/images/footer_bg.png',
				'field'   => 'image',
				'type'    => 'control',
			),
			'footer_bg_repeat'           => array(
				'title'   => esc_html__( 'Background Repeat', 'malcolmy_lite' ),
				'section' => 'footer_options',
				'default' => 'no-repeat',
				'field'   => 'select',
				'choices' => array(
					'no-repeat' => esc_html__( 'No Repeat', 'malcolmy_lite' ),
					'repeat'    => esc_html__( 'Tile', 'malcolmy_lite' ),
					'repeat-x'  => esc_html__( 'Tile Horizontally', 'malcolmy_lite' ),
					'repeat-y'  => esc_html__( 'Tile Vertically', 'malcolmy_lite' ),
				),
				'type'    => 'control',
			),
			'footer_bg_position_x'       => array(
				'title'   => esc_html__( 'Background Position', 'malcolmy_lite' ),
				'section' => 'footer_options',
				'default' => 'center',
				'field'   => 'select',
				'choices' => array(
					'left'   => esc_html__( 'Left', 'malcolmy_lite' ),
					'center' => esc_html__( 'Center', 'malcolmy_lite' ),
					'right'  => esc_html__( 'Right', 'malcolmy_lite' ),
				),
				'type'    => 'control',
			),
			'footer_bg_attachment'       => array(
				'title'   => esc_html__( 'Background Attachment', 'malcolmy_lite' ),
				'section' => 'footer_options',
				'default' => 'scroll',
				'field'   => 'select',
				'choices' => array(
					'scroll' => esc_html__( 'Scroll', 'malcolmy_lite' ),
					'fixed'  => esc_html__( 'Fixed', 'malcolmy_lite' ),
				),
				'type'    => 'control',
			),

			/** `Blog Settings` panel */
			'blog_settings'                    => array(
				'title'    => esc_html__( 'Blog Settings', 'malcolmy_lite' ),
				'priority' => 115,
				'type'     => 'panel',
			),

			/** `Blog` section */
			'blog'                             => array(
				'title'           => esc_html__( 'Blog', 'malcolmy_lite' ),
				'panel'           => 'blog_settings',
				'priority'        => 10,
				'type'            => 'section',
				'active_callback' => 'is_home',
			),
			'blog_layout_type'                 => array(
				'title'   => esc_html__( 'Layout', 'malcolmy_lite' ),
				'section' => 'blog',
				'default' => 'default',
				'field'   => 'select',
				'type'    => 'control',
			),
			'blog_sticky_label'                => array(
				'title'       => esc_html__( 'Featured Post Label', 'malcolmy_lite' ),
				'description' => esc_html__( 'Label for sticky post', 'malcolmy_lite' ),
				'section'     => 'blog',
				'default'     => 'icon:material:star_border',
				'field'       => 'text',
				'type'        => 'control',
			),
			'blog_posts_content'               => array(
				'title'   => esc_html__( 'Post content', 'malcolmy_lite' ),
				'section' => 'blog',
				'default' => 'excerpt',
				'field'   => 'select',
				'choices' => array(
					'excerpt' => esc_html__( 'Only excerpt', 'malcolmy_lite' ),
					'full'    => esc_html__( 'Full content', 'malcolmy_lite' ),
				),
				'type'    => 'control',
			),
			'blog_featured_image'              => array(
				'title'   => esc_html__( 'Featured image', 'malcolmy_lite' ),
				'section' => 'blog',
				'default' => 'fullwidth',
				'field'   => 'select',
				'choices' => array(
					'small'     => esc_html__( 'Small', 'malcolmy_lite' ),
					'fullwidth' => esc_html__( 'Fullwidth', 'malcolmy_lite' ),
				),
				'type'    => 'control',
			),
			'blog_read_more_text'              => array(
				'title'   => esc_html__( 'Read More button text', 'malcolmy_lite' ),
				'section' => 'blog',
				'default' => esc_html__( 'Read more', 'malcolmy_lite' ),
				'field'   => 'text',
				'type'    => 'control',
			),
			'blog_post_author'                 => array(
				'title'   => esc_html__( 'Show post author', 'malcolmy_lite' ),
				'section' => 'blog',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'blog_post_publish_date'           => array(
				'title'   => esc_html__( 'Show publish date', 'malcolmy_lite' ),
				'section' => 'blog',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'blog_post_categories'             => array(
				'title'   => esc_html__( 'Show categories', 'malcolmy_lite' ),
				'section' => 'blog',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'blog_post_tags'                   => array(
				'title'   => esc_html__( 'Show tags', 'malcolmy_lite' ),
				'section' => 'blog',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'blog_post_comments'               => array(
				'title'   => esc_html__( 'Show comments', 'malcolmy_lite' ),
				'section' => 'blog',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),

			/** `Post` section */
			'blog_post'                        => array(
				'title'           => esc_html__( 'Post', 'malcolmy_lite' ),
				'panel'           => 'blog_settings',
				'priority'        => 20,
				'type'            => 'section',
				'active_callback' => 'callback_single',
			),
			'single_post_author'               => array(
				'title'   => esc_html__( 'Show post author', 'malcolmy_lite' ),
				'section' => 'blog_post',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'single_post_publish_date'         => array(
				'title'   => esc_html__( 'Show publish date', 'malcolmy_lite' ),
				'section' => 'blog_post',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'single_post_categories'           => array(
				'title'   => esc_html__( 'Show categories', 'malcolmy_lite' ),
				'section' => 'blog_post',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'single_post_tags'                 => array(
				'title'   => esc_html__( 'Show tags', 'malcolmy_lite' ),
				'section' => 'blog_post',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'single_post_comments'             => array(
				'title'   => esc_html__( 'Show comments', 'malcolmy_lite' ),
				'section' => 'blog_post',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'single_author_block'              => array(
				'title'   => esc_html__( 'Enable the author block after each post', 'malcolmy_lite' ),
				'section' => 'blog_post',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
		)
	) );
}

/**
 * Return true if logo in header has image type. Otherwise - return false.
 *
 * @param  object $control
 *
 * @return bool
 */
function malcolmy_lite_is_header_logo_image( $control ) {

	if ( $control->manager->get_setting( 'header_logo_type' )->value() == 'image' ) {
		return true;
	}

	return false;
}

/**
 * Return true if logo in header has text type. Otherwise - return false.
 *
 * @param  object $control
 *
 * @return bool
 */
function malcolmy_lite_is_header_logo_text( $control ) {

	if ( $control->manager->get_setting( 'header_logo_type' )->value() == 'text' ) {
		return true;
	}

	return false;
}

// Move native `site_icon` control (based on WordPress core) in custom section.
add_action( 'customize_register', 'malcolmy_lite_customizer_change_core_controls', 20 );
function malcolmy_lite_customizer_change_core_controls( $wp_customize ) {
	$wp_customize->get_control( 'site_icon' )->section = 'malcolmy_lite_logo_favicon';
	$wp_customize->get_control( 'background_color' )->label = esc_html__( 'Body Background Color', 'malcolmy_lite' );
}

////////////////////////////////////
// Typography utility function    //
////////////////////////////////////
function malcolmy_lite_get_font_styles() {
	return apply_filters( 'malcolmy_lite_get_font_styles', array(
		'normal'  => esc_html__( 'Normal', 'malcolmy_lite' ),
		'italic'  => esc_html__( 'Italic', 'malcolmy_lite' ),
		'oblique' => esc_html__( 'Oblique', 'malcolmy_lite' ),
		'inherit' => esc_html__( 'Inherit', 'malcolmy_lite' ),
	) );
}

function malcolmy_lite_get_character_sets() {
	return apply_filters( 'malcolmy_lite_get_character_sets', array(
		'latin'        => esc_html__( 'Latin', 'malcolmy_lite' ),
		'greek'        => esc_html__( 'Greek', 'malcolmy_lite' ),
		'greek-ext'    => esc_html__( 'Greek Extended', 'malcolmy_lite' ),
		'vietnamese'   => esc_html__( 'Vietnamese', 'malcolmy_lite' ),
		'cyrillic-ext' => esc_html__( 'Cyrillic Extended', 'malcolmy_lite' ),
		'latin-ext'    => esc_html__( 'Latin Extended', 'malcolmy_lite' ),
		'cyrillic'     => esc_html__( 'Cyrillic', 'malcolmy_lite' ),
	) );
}

function malcolmy_lite_get_text_aligns() {
	return apply_filters( 'malcolmy_lite_get_text_aligns', array(
		'inherit' => esc_html__( 'Inherit', 'malcolmy_lite' ),
		'center'  => esc_html__( 'Center', 'malcolmy_lite' ),
		'justify' => esc_html__( 'Justify', 'malcolmy_lite' ),
		'left'    => esc_html__( 'Left', 'malcolmy_lite' ),
		'right'   => esc_html__( 'Right', 'malcolmy_lite' ),
	) );
}

function malcolmy_lite_get_font_weight() {
	return apply_filters( 'malcolmy_lite_get_font_weight', array(
		'100' => '100',
		'200' => '200',
		'300' => '300',
		'400' => '400',
		'500' => '500',
		'600' => '600',
		'700' => '700',
		'800' => '800',
		'900' => '900',
	) );
}

function malcolmy_lite_get_text_transform() {
	return apply_filters( 'malcolmy_lite_get_text_transform', array(
		'none'       => esc_html__( 'None ', 'malcolmy_lite' ),
		'uppercase'  => esc_html__( 'Uppercase ', 'malcolmy_lite' ),
		'lowercase'  => esc_html__( 'Lowercase', 'malcolmy_lite' ),
		'capitalize' => esc_html__( 'Capitalize', 'malcolmy_lite' ),
	) );
}

/**
 * Return array of arguments for dynamic CSS module
 *
 * @return array
 */
function malcolmy_lite_get_dynamic_css_options() {
	return apply_filters( 'malcolmy_lite_get_dynamic_css_options', array(
		'prefix'    => 'malcolmy_lite',
		'type'      => 'theme_mod',
		'single'    => true,
		'css_files' => array(
			MALCOLMY_LITE_THEME_DIR . '/assets/css/dynamic.css',
			MALCOLMY_LITE_THEME_DIR . '/assets/css/dynamic/builder/brands-showcase-module.css',
			MALCOLMY_LITE_THEME_DIR . '/assets/css/dynamic/site/elements.css',
			MALCOLMY_LITE_THEME_DIR . '/assets/css/dynamic/site/header.css',
			MALCOLMY_LITE_THEME_DIR . '/assets/css/dynamic/site/forms.css',
			MALCOLMY_LITE_THEME_DIR . '/assets/css/dynamic/site/social.css',
			MALCOLMY_LITE_THEME_DIR . '/assets/css/dynamic/site/menus.css',
			MALCOLMY_LITE_THEME_DIR . '/assets/css/dynamic/site/post.css',
			MALCOLMY_LITE_THEME_DIR . '/assets/css/dynamic/site/navigation.css',
			MALCOLMY_LITE_THEME_DIR . '/assets/css/dynamic/site/footer.css',
			MALCOLMY_LITE_THEME_DIR . '/assets/css/dynamic/site/misc.css',
			MALCOLMY_LITE_THEME_DIR . '/assets/css/dynamic/site/buttons.css',
			MALCOLMY_LITE_THEME_DIR . '/assets/css/dynamic/builder/projects.css',
			MALCOLMY_LITE_THEME_DIR . '/assets/css/dynamic/site/map.css',
			MALCOLMY_LITE_THEME_DIR . '/assets/css/dynamic/widgets/widget-default.css',
			MALCOLMY_LITE_THEME_DIR . '/assets/css/dynamic/widgets/carousel.css',
			MALCOLMY_LITE_THEME_DIR . '/assets/css/dynamic/widgets/subscribe.css',
			MALCOLMY_LITE_THEME_DIR . '/assets/css/dynamic/builder/devider.css',
			MALCOLMY_LITE_THEME_DIR . '/assets/css/dynamic/builder/blog.css',
			MALCOLMY_LITE_THEME_DIR . '/assets/css/dynamic/builder/person.css',
		),
		'options'   => array(
			'header_logo_font_style',
			'header_logo_font_weight',
			'header_logo_font_size',
			'header_logo_font_family',

			'body_font_style',
			'body_font_weight',
			'body_font_size',
			'body_line_height',
			'body_font_family',
			'body_letter_spacing',
			'body_text_align',

			'h1_font_style',
			'h1_font_weight',
			'h1_font_size',
			'h1_line_height',
			'h1_font_family',
			'h1_letter_spacing',
			'h1_text_align',

			'h2_font_style',
			'h2_font_weight',
			'h2_font_size',
			'h2_line_height',
			'h2_font_family',
			'h2_letter_spacing',
			'h2_text_align',

			'h3_font_style',
			'h3_font_weight',
			'h3_font_size',
			'h3_line_height',
			'h3_font_family',
			'h3_letter_spacing',
			'h3_text_align',

			'h4_font_style',
			'h4_font_weight',
			'h4_font_size',
			'h4_line_height',
			'h4_font_family',
			'h4_letter_spacing',
			'h4_text_align',

			'h5_font_style',
			'h5_font_weight',
			'h5_font_size',
			'h5_line_height',
			'h5_font_family',
			'h5_letter_spacing',
			'h5_text_align',

			'h6_font_style',
			'h6_font_weight',
			'h6_font_size',
			'h6_line_height',
			'h6_font_family',
			'h6_letter_spacing',
			'h6_text_align',

			'breadcrumbs_font_style',
			'breadcrumbs_font_weight',
			'breadcrumbs_font_size',
			'breadcrumbs_line_height',
			'breadcrumbs_font_family',
			'breadcrumbs_letter_spacing',
			'breadcrumbs_text_align',

			'regular_accent_color_1',
			'regular_accent_color_2',
			'regular_accent_color_3',
			'regular_accent_color_4',
			'regular_text_color',
			'regular_link_color',
			'regular_link_hover_color',
			'regular_h1_color',
			'regular_h2_color',
			'regular_h3_color',
			'regular_h4_color',
			'regular_h5_color',
			'regular_h6_color',

			'invert_accent_color_1',
			'invert_accent_color_2',
			'invert_accent_color_3',
			'invert_accent_color_4',
			'invert_text_color',
			'invert_link_color',
			'invert_link_hover_color',
			'invert_h1_color',
			'invert_h2_color',
			'invert_h3_color',
			'invert_h4_color',
			'invert_h5_color',
			'invert_h6_color',

			'header_bg_color',
			'header_bg_repeat',
			'header_bg_position_x',
			'header_bg_attachment',

			'top_panel_bg',

			'container_width',

			'footer_widgets_bg',
			'footer_bg',
			'footer_bg',
			'footer_bg_repeat',
			'footer_bg_position_x',
			'footer_bg_attachment',
		),
	) );
}

/**
 * Return array of arguments for Google Font loader module.
 *
 * @since  1.0.0
 * @return array
 */
function malcolmy_lite_get_fonts_options() {
	return apply_filters( 'malcolmy_lite_get_fonts_options', array(
		'prefix'  => 'malcolmy_lite',
		'type'    => 'theme_mod',
		'single'  => true,
		'options' => array(
			'body'              => array(
				'family'  => 'body_font_family',
				'style'   => 'body_font_style',
				'weight'  => 'body_font_weight',
				'charset' => 'body_character_set',
			),
			'h1'                => array(
				'family'  => 'h1_font_family',
				'style'   => 'h1_font_style',
				'weight'  => 'h1_font_weight',
				'charset' => 'h1_character_set',
			),
			'h2'                => array(
				'family'  => 'h2_font_family',
				'style'   => 'h2_font_style',
				'weight'  => 'h2_font_weight',
				'charset' => 'h2_character_set',
			),
			'h3'                => array(
				'family'  => 'h3_font_family',
				'style'   => 'h3_font_style',
				'weight'  => 'h3_font_weight',
				'charset' => 'h3_character_set',
			),
			'h4'                => array(
				'family'  => 'h4_font_family',
				'style'   => 'h4_font_style',
				'weight'  => 'h4_font_weight',
				'charset' => 'h4_character_set',
			),
			'h5'                => array(
				'family'  => 'h5_font_family',
				'style'   => 'h5_font_style',
				'weight'  => 'h5_font_weight',
				'charset' => 'h5_character_set',
			),
			'h6'                => array(
				'family'  => 'h6_font_family',
				'style'   => 'h6_font_style',
				'weight'  => 'h6_font_weight',
				'charset' => 'h6_character_set',
			),
			'header_logo'       => array(
				'family'  => 'header_logo_font_family',
				'style'   => 'header_logo_font_style',
				'weight'  => 'header_logo_font_weight',
				'charset' => 'header_logo_character_set',
			),
			'breadcrumbs'       => array(
				'family'  => 'breadcrumbs_font_family',
				'style'   => 'breadcrumbs_font_style',
				'weight'  => 'breadcrumbs_font_weight',
				'charset' => 'breadcrumbs_character_set',
			),
		)
	) );
}

/**
 * Get default top panel text.
 *
 * @since  1.0.0
 * @return string
 */
function malcolmy_lite_get_default_top_panel_text() {
	return sprintf(
		'<div class="info-block"><i class="material-icons">location_on</i> %s</div><div class="info-block"> <i class="material-icons">local_phone</i> %s</div>',
		esc_html__( '7087 Richmond hwy, Alexandria, VA', 'malcolmy_lite' ),
		esc_html__( '800-2345-6789', 'malcolmy_lite' )
	);
}

/**
 * Get default footer copyright.
 *
 * @since  1.0.0
 * @return string
 */
function malcolmy_lite_get_default_footer_copyright() {
	return esc_html__( '© %%year%% All rights reserved by MalcolmY_Lite', 'malcolmy_lite' );
}

/**
 * Get default header backgroung image.
 *
 * @since  1.0.0
 * @return string
 */
/**
 * Return true if More button (in the main menu) has image type. Otherwise - return false.
 *
 * @param  object $control
 *
 * @return bool
 */
function malcolmy_lite_is_more_button_type_image( $control ) {
	if ( $control->manager->get_setting( 'more_button_type' )->value() == 'image' ) {
		return true;
	}
	return false;
}

/**
 * Return true if More button (in the main menu) has text type. Otherwise - return false.
 *
 * @param  object $control
 *
 * @return bool
 */
function malcolmy_lite_is_more_button_type_text( $control ) {
	if ( $control->manager->get_setting( 'more_button_type' )->value() == 'text' ) {
		return true;
	}
	return false;
}

/**
 * Return true if More button (in the main menu) has icon type. Otherwise - return false.
 *
 * @param  object $control
 *
 * @return bool
 */
function malcolmy_lite_is_more_button_type_icon( $control ) {
	if ( $control->manager->get_setting( 'more_button_type' )->value() == 'icon' ) {
		return true;
	}
	return false;
}

/**
 * Get icons set
 *
 * @return array
 */
function malcolmy_lite_get_icons_set() {
	ob_start();

	include MALCOLMY_LITE_THEME_DIR . '/assets/js/icons.json';

	$json = ob_get_clean();
	$result = array();
	$icons = json_decode( $json, true );

	foreach ( $icons['icons'] as $icon ) {
		$result[] = $icon['id'];
	}

	return $result;
}
