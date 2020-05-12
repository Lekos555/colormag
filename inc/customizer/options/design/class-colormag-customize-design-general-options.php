<?php
/**
 * Class to include Design General customize options.
 *
 * Class ColorMag_Customize_Design_General_Options
 *
 * @package    ThemeGrill
 * @subpackage ColorMag
 * @since      ColorMag 2.0.0
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Class to include Design General customize options.
 *
 * Class ColorMag_Customize_Design_General_Options
 */
class ColorMag_Customize_Design_General_Options  extends ColorMag_Customize_Base_Option {

	/**
	 * Include customize options.
	 *
	 * @param array                 $options      Customize options provided via the theme.
	 * @param \WP_Customize_Manager $wp_customize Theme Customizer object.
	 *
	 * @return mixed|void Customizer options for registering panels, sections as well as controls.
	 */
	public function customizer_options( $options, $wp_customize ) {

		$configs = array(

			// Default layout option.
			array(
				'name'      => 'colormag_default_layout',
				'default'   => 'right_sidebar',
				'type'      => 'control',
				'control'   => 'colormag-radio-image',
				'label'     => esc_html__( 'Default layout', 'colormag' ),
				'section'   => 'colormag_design_general_section',
				'choices'   => array(
					'right_sidebar'               => array(
						'label' => '',
						'url'   => COLORMAG_ADMIN_IMAGES_URL . '/right-sidebar.png',
					),
					'left_sidebar'                => array(
						'label' => '',
						'url'   => COLORMAG_ADMIN_IMAGES_URL . '/left-sidebar.png',
					),
					'no_sidebar_full_width'       => array(
						'label' => '',
						'url'   => COLORMAG_ADMIN_IMAGES_URL . '/no-sidebar-full-width-layout.png',
					),
					'no_sidebar_content_centered' => array(
						'label' => '',
						'url'   => COLORMAG_ADMIN_IMAGES_URL . '/no-sidebar-content-centered-layout.png',
					),
				),
				'image_col' => 2,
				'priority'  => 5,
			),

		);

		$options = array_merge( $options, $configs );

		return $options;

	}

}

return new ColorMag_Customize_Design_General_Options();
