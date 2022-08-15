<?php if ( ! defined( 'ABSPATH' ) ) {
	die; } // Cannot access directly.

//
// Set a unique slug-like ID.
//
$prefix = '_sp_wqv_options';


if ( ! defined( 'ABSPATH' ) ) {
	die;
} // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK SETTINGS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$settings = array(
	'menu_title'       => __( 'Woo QuickView', 'woo-quickview' ),
	'menu_type'        => 'menu', // menu, submenu, options, theme, etc.
	'menu_slug'        => 'wqv_settings',
	'ajax_save'        => true,
	'show_reset_all'   => false,
	'show_search'      => false,
	'show_footer'      => false,
	'show_all_options' => false,
	'show_sub_menu'    => false,
	'nav'              => 'inline',
	'theme'            => 'light',
	'menu_position'    => 58,
	'menu_icon'        => 'data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA0NzEuMiA0NzIuNSIgZmlsbD0iI2E3YWFhZCIgeG1sbnM6dj0iaHR0cHM6Ly92ZWN0YS5pby9uYW5vIj48cGF0aCBkPSJNMzIyLjYgMjI2LjZjLTUuNyAwLTExLjUtMy4xLTE0LTkuNS0xNS45LTM3LjUtNTIuMi02MS4xLTkyLjktNjEuMXMtNzcgMjQuMi05Mi45IDYxLjFjLTMuMSA3LjYtMTIgMTEuNS0xOS43IDguMi03LjctMy4yLTExLjUtMTItOC4yLTE5LjcgMjAuNC00OC40IDY4LjEtODAuMSAxMjAuOS04MC4xczk5LjkgMzEuMSAxMjAuOSA4MC4xYzMuMSA3LjYtLjYgMTYuNi04LjIgMTkuNy0yLjEuNy00IDEuMy01LjkgMS4zeiIvPjxwYXRoIGQ9Ik0zMjIuNiAyMzEuM2MtOC4zIDAtMTUuMi00LjgtMTguMy0xMi40LTcuNC0xNy41LTE5LjctMzIuMi0zNS40LTQyLjVzLTM0LjEtMTUuNy01My4yLTE1LjdjLTM4LjYgMC03My40IDIyLjktODguNyA1OC4zLTIgNC44LTUuOSA4LjctMTAuOCAxMC43cy0xMC4yIDItMTUgMGMtNC45LTItOC43LTUuOC0xMC43LTEwLjctMi4xLTQuOS0yLjEtMTAuMyAwLTE1LjEgMTAuNC0yNC42IDI3LjctNDUuNCA1MC02MC4zIDIyLjQtMTQuOSA0OC40LTIyLjcgNzUuMi0yMi43czUyLjcgNy44IDc0LjkgMjIuNSAzOS42IDM1LjYgNTAuMiA2MC41YzIgNC45IDIgMTAuMi0uMSAxNS4yLTIuMSA0LjktNS44IDguNy0xMC43IDEwLjdsLS4zLjFjLTIgLjYtNC41IDEuNC03LjEgMS40em0tMTA2LjktNzkuOWMyMSAwIDQxLjEgNiA1OC4zIDE3LjIgMTcuMyAxMS4zIDMwLjcgMjcuNCAzOC45IDQ2Ljd2LjFjMS42IDQuMSA1LjIgNi42IDkuNyA2LjYgMS4xIDAgMi42LS41IDQuMS0xIDIuNS0xLjEgNC40LTMuMSA1LjUtNS43YTEwLjU2IDEwLjU2IDAgMCAwIC4xLThjLTkuOS0yMy4yLTI2LjEtNDIuNy00Ni44LTU2LjRTMjQwLjcgMTMwIDIxNS43IDEzMHMtNDkuMiA3LjMtNzAgMjEuMmExMjYuMjEgMTI2LjIxIDAgMCAwLTQ2LjYgNTYuMSA5Ljg3IDkuODcgMCAwIDAgMCA3LjljMS4xIDIuNiAzLjEgNC42IDUuOCA1LjcgMi41IDEuMSA1LjMgMSA3LjggMGExMS4xNCAxMS4xNCAwIDAgMCA1LjgtNS43YzE2LjgtMzguNyA1NC45LTYzLjggOTcuMi02My44eiIvPjxwYXRoIGQ9Ik0yMTUuNyAyOTguNWMtNTIuOCAwLTk5LjktMzEuMS0xMjAuOS04MC4xLTMuMS03LjYuNi0xNi42IDguMi0xOS43czE2LjYuNiAxOS43IDguMmMxNS45IDM3LjUgNTIuMiA2MS4xIDkyLjkgNjEuMXM3Ny0yNC4yIDkyLjktNjEuMWMzLjEtNy42IDEyLTExLjUgMTkuNy04LjIgNy43IDMuMiAxMS41IDEyIDguMiAxOS43LTIwLjIgNDguNC02Ny45IDgwLjEtMTIwLjcgODAuMXoiLz48cGF0aCBkPSJNMjE1LjcgMzAzLjJjLTI2LjggMC01Mi43LTcuOC03NC45LTIyLjVzLTM5LjYtMzUuNi01MC4yLTYwLjVjLTQuMS05LjkuOC0yMS43IDEwLjctMjUuOHMyMS43LjggMjUuOCAxMC44YzcuNCAxNy41IDE5LjcgMzIuMiAzNS40IDQyLjVzMzQuMSAxNS43IDUzLjIgMTUuN2MzOC42IDAgNzMuNC0yMi45IDg4LjctNTguMyAyLTQuOCA1LjktOC43IDEwLjgtMTAuN3MxMC4yLTIgMTUgMGM0LjkgMiA4LjcgNS44IDEwLjcgMTAuNyAyLjEgNC45IDIuMSAxMC4zIDAgMTUuMS0xMC40IDI0LjYtMjcuNyA0NS40LTUwIDYwLjMtMjIuNCAxNC44LTQ4LjQgMjIuNy03NS4yIDIyLjd6bS0xMDctMTAxYy0xLjMgMC0yLjYuMi0zLjguOC01LjMgMi4yLTcuOSA4LjUtNS43IDEzLjcgOS45IDIzLjIgMjYuMSA0Mi43IDQ2LjggNTYuNHM0NC44IDIwLjkgNjkuOCAyMC45IDQ5LjItNy4zIDcwLTIxLjJhMTI2LjIxIDEyNi4yMSAwIDAgMCA0Ni42LTU2LjEgOS44NyA5Ljg3IDAgMCAwIDAtNy45Yy0xLjEtMi42LTMuMS00LjYtNS44LTUuNy0yLjUtMS01LjMtMS03LjggMGExMS4xNCAxMS4xNCAwIDAgMC01LjggNS43Yy0xNi44IDM4LjgtNTQuOSA2My45LTk3LjIgNjMuOS0yMSAwLTQxLjEtNi01OC4zLTE3LjItMTcuMy0xMS4zLTMwLjctMjcuNC0zOC45LTQ2LjctMS44LTQuMS01LjgtNi42LTkuOS02LjZ6bTEwNyA1OC4yYy0yNi43IDAtNDguNC0yMS42LTQ4LjQtNDguNHMyMS42LTQ4LjQgNDguNC00OC40IDQ4LjQgMjEuNiA0OC40IDQ4LjQtMjEuNiA0OC40LTQ4LjQgNDguNHptMC02Ni44YTE4LjQgMTguNCAwIDEgMCAwIDM2LjggMTguNCAxOC40IDAgMSAwIDAtMzYuOHptMSAyMzkuOGMtNTcuOSAwLTExMi4zLTIyLjUtMTUzLjItNjMuNUMyMi41IDMyOSAwIDI3NC42IDAgMjE2LjdTMjIuNSAxMDQuNCA2My41IDYzLjVDMTA0LjQgMjIuNSAxNTguOCAwIDIxNi43IDBTMzI5IDIyLjUgMzY5LjkgNjMuNWM0MC45IDQwLjkgNjMuNSA5NS4zIDYzLjUgMTUzLjJTNDEwLjkgMzI5IDM2OS45IDM2OS45cy05NS4zIDYzLjUtMTUzLjIgNjMuNXptMC0zNzMuNEMxMzAuMyA2MCA2MCAxMzAuMyA2MCAyMTYuN3M3MC4zIDE1Ni43IDE1Ni43IDE1Ni43IDE1Ni43LTcwLjMgMTU2LjctMTU2LjdTMzAzLjEgNjAgMjE2LjcgNjB6Ii8+PHBhdGggZD0iTTQ2Mi40IDQ2My43aDBjLTExLjcgMTEuNy0zMC43IDExLjctNDIuNCAwbC02NC4zLTY0LjNjLTExLjctMTEuNy0xMS43LTMwLjcgMC00Mi40aDBjMTEuNy0xMS43IDMwLjctMTEuNyA0Mi40IDBsNjQuMyA2NC4zYzExLjcgMTEuNyAxMS43IDMwLjcgMCA0Mi40eiIvPjwvc3ZnPg==',
	'framework_title'  => __( 'Woo QuickView Settings', 'woo-quickview' ),
);
SP_WQV_Framework::createOptions( $prefix, $settings );
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
// $options = array();

// Quick View Button Settings.
SP_WQV_Framework::createSection(
	$prefix,
	array(
		'name'   => 'quick_view_btn_settings',
		'title'  => __( 'General', 'woo-quickview' ),
		'icon'   => 'fa fa-wrench',
		// begin: fields.
		'fields' => array(
			array(
				'id'         => 'wqvpro_enable_quick_view',
				'type'       => 'switcher',
				'title'      => __( ' Enable Quick View', 'woo-quickview' ),
				'subtitle'   => __( 'Enable/Disable quick view button.', 'woo-quickview' ),
				'default'    => true,
				'text_on'    => __( 'Enabled', 'woo-quickview' ),
				'text_off'   => __( 'Disabled', 'woo-quickview' ),
				'text_width' => 95,
			),
			array(
				'id'       => 'wqvpro_quick_view_layout',
				'class'    => 'wqvpro-layout-options',
				'type'     => 'image_select',
				'title'    => __( 'Layout', 'woo-quickview' ),
				'subtitle' => __( 'Select quick view layout.', 'woo-quickview' ),
				'radio'    => true,
				'options'  => array(
					'right_content'  => array(
						'image'       => SP_WQV_URL . 'admin/views/img/left-image.svg',
						'option_name' => __( 'Left Image', 'woo-quickview' ),
					),
					'left_content'   => array(
						'image'       => SP_WQV_URL . 'admin/views/img/right-image.svg',
						'option_name' => __( 'Right Image', 'woo-quickview' ),
						'pro_only'    => true,
					),
					'bottom_content' => array(
						'image'       => SP_WQV_URL . 'admin/views/img/top-image.svg',
						'option_name' => __( 'Top Image', 'woo-quickview' ),
						'pro_only'    => true,

					),
					'top_content'    => array(
						'image'       => SP_WQV_URL . 'admin/views/img/bottom-image.svg',
						'option_name' => __( 'Bottom Image', 'woo-quickview' ),
						'pro_only'    => true,
					),
				),
				'desc'     => __( 'To unlock Right, Top, and Bottom Image layout, <a href="https://shapedplugin.com/plugin/woocommerce-quick-view-pro/?ref=1" target="_blank"><strong>Upgrade To Pro!</strong></a>', 'woo-quickview' ),
				'default'  => 'right_content',
			),
			array(
				'id'       => 'wqvpro_popup_effect',
				'type'     => 'select',
				'title'    => __( 'Modal Effect', 'woo-quickview' ),
				'subtitle' => __( 'Select modal effect.', 'woo-quickview' ),
				'default'  => 'mfp-move-from-top',
				'options'  => array(
					'mfp-move-from-top'   => __( 'Move from Top', 'woo-quickview' ),
					'mfp-fade'            => __( 'Fade', 'woo-quickview' ),
					'mfp-zoom-in'         => __( 'Zoom in', 'woo-quickview' ),
					'mfp-zoom-out'        => __( 'Zoom Out', 'woo-quickview' ),
					'mfp-newspaper'       => __( 'Newspaper', 'woo-quickview' ),
					'mfp-move-horizontal' => __( 'Move Horizontal', 'woo-quickview' ),
					'mfp-3d-unfold'       => __( '3d Unfold', 'woo-quickview' ),
					'mfp-slide-bottom'    => __( 'Slide Bottom', 'woo-quickview' ),
				),
			),
			array(
				'id'       => 'wqvpro_popup_bg',
				'type'     => 'color',
				'title'    => __( 'Modal Overlay Background', 'woo-quickview' ),
				'subtitle' => __( 'Set modal overlay background color.', 'woo-quickview' ),
				'default'  => 'rgba( 0, 0, 0, 0.8)',
			),
			array(
				'id'      => 'wqvpro_qv_button',
				'type'    => 'subheading',
				'content' => __( 'Quick View Button', 'woo-quickview' ),
			),
			array(
				'id'       => 'wqvpro_quick_view_button_position',
				'type'     => 'select',
				'title'    => __( 'Quick View Button Position', 'woo-quickview' ),
				'subtitle' => __( 'Select quick view button position.', 'woo-quickview' ),
				'default'  => 'after_add_to_cart',
				'options'  => array(
					'before_add_to_cart'        => __( 'Before Add to Cart button', 'woo-quickview' ),
					'after_add_to_cart'         => __( 'After Add to Cart button', 'woo-quickview' ),
					'above_add_to_cart'         => __( 'Above Add to Cart button(Pro)', 'woo-quickview' ),
					'below_add_to_cart'         => __( 'Below Add to Cart button(Pro)', 'woo-quickview' ),
					'below_product_image'       => __( 'Below Product Image(Pro)', 'woo-quickview' ),
					'above_product_image'       => __( 'Above Product Image(Pro)', 'woo-quickview' ),
					'below_product_title'       => __( 'Below Product Title(Pro)', 'woo-quickview' ),
					'below_product_price'       => __( 'Below Product Price(Pro)', 'woo-quickview' ),
					'over_img_on_hover'         => __( 'Over Product Container on hover(Pro)', 'woo-quickview' ),
					'over_product_img_on_hover' => __( 'Over Product Image on hover(Pro)', 'woo-quickview' ),
				),
			),
			array(
				'id'       => 'wqvpro_qv_button_style',
				'type'     => 'button_set',
				'title'    => __( 'Button Style', 'woo-quickview' ),
				'subtitle' => __( 'Select quick view button style.', 'woo-quickview' ),
				'options'  => array(
					'custom_button'    => array(
						'option_name' => __( 'Custom Button', 'woo-quickview' ),
					),
					'button_css_class' => array(
						'option_name' => __( 'Button CSS Class', 'woo-quickview' ),
						'pro_only'    => true,
					),
				),
				'default'  => 'custom_button',
			),
			array(
				'id'       => 'wqvpro_quick_view_button_color',
				'type'     => 'color_group',
				'title'    => __( 'Button Color', 'woo-quickview' ),
				'subtitle' => __( 'Set quick view button color.', 'woo-quickview' ),
				'options'  => array(
					'color1' => __( 'Color', 'woo-quickview' ),
					'color2' => __( 'Hover Color', 'woo-quickview' ),
					'color3' => __( 'Background', 'woo-quickview' ),
					'color4' => __( 'Hover Background', 'woo-quickview' ),
				),
				'default'  => array(
					'color1' => '#ffffff',
					'color2' => '#ffffff',
					'color3' => '#1A79BF',
					'color4' => '#176AA6',
				),
			),
			array(
				'id'          => 'wqvpro_quick_view_button_border',
				'type'        => 'border',
				'title'       => __( 'Button Border', 'woo-quickview' ),
				'subtitle'    => __( 'Set quick view button border.', 'woo-quickview' ),
				'option'      => array(
					'all'         => __( 'Width', 'woo-quickview' ),
					'style'       => __( 'Style', 'woo-quickview' ),
					'color'       => __( 'Color', 'woo-quickview' ),
					'hover_color' => __( 'Hover Color', 'woo-quickview' ),
				),
				'default'     => array(
					'all'         => '0',
					'style'       => 'solid',
					'color'       => '#1A79BF',
					'hover_color' => '#176AA6',
				),
				'hover_color' => true,
				'all'         => true,
			),
			array(
				'id'       => 'wqvpro_quick_view_button_padding',
				'type'     => 'spacing',
				'title'    => __( 'Button Padding', 'woo-quickview' ),
				'subtitle' => __( 'Set quick view button padding.', 'woo-quickview' ),
				'default'  => array(
					'left'   => '16',
					'right'  => '16',
					'top'    => '9',
					'bottom' => '9',
				),
				'units'    => array( 'px' ),
			),
			array(
				'id'       => 'wqvpro_quick_view_button_text',
				'type'     => 'text',
				'title'    => __( 'Quick View Button Label', 'woo-quickview' ),
				'subtitle' => __( 'Type quick view button custom label.', 'woo-quickview' ),
				'default'  => 'Quick View',
			),
		), // end: fields.
	)
);

// ----------------------------------------
// Modal Settings -
// ----------------------------------------
SP_WQV_Framework::createSection(
	$prefix,
	array(
		'name'   => 'popup_settings',
		'title'  => __( 'Modal', 'woo-quickview' ),
		'icon'   => 'fas fa-external-link-alt',
		// begin: fields.
		'fields' => array(
			array(
				'id'      => 'wqvpro_qv_subheading',
				'type'    => 'subheading',
				'content' => __( 'Product Content To Show', 'woo-quickview' ),
			),
			array(
				'id'       => 'wqvpro_show_product_content',
				'type'     => 'sortable',
				'title'    => __( 'Product Content or Information', 'woo-quickview' ),
				'subtitle' => __( 'Show/Hide the fields you want to show on the modal.', 'woo-quickview' ),
				'class'    => 'style_generator_sortable',
				'default'  => array(
					'title'        => true,
					'rating'       => true,
					'price'        => true,
					'excerpt'      => true,
					'add_to_cart'  => true,
					'meta'         => true,
					'social_share' => false,
				),
				'fields'   => array(
					array(
						'id'         => 'title',
						'type'       => 'switcher',
						'title'      => __( 'Title', 'woo-quickview' ),
						'text_on'    => __( 'Show', 'woo-quickview' ),
						'text_off'   => __( 'Hide', 'woo-quickview' ),
						'text_width' => 75,
					),
					array(
						'id'         => 'rating',
						'type'       => 'switcher',
						'title'      => __( 'Rating', 'woo-quickview' ),
						'text_on'    => __( 'Show', 'woo-quickview' ),
						'text_off'   => __( 'Hide', 'woo-quickview' ),
						'text_width' => 75,
					),
					array(
						'id'         => 'price',
						'type'       => 'switcher',
						'title'      => __( 'Price', 'woo-quickview' ),
						'text_on'    => __( 'Show', 'woo-quickview' ),
						'text_off'   => __( 'Hide', 'woo-quickview' ),
						'text_width' => 75,
					),
					array(
						'id'         => 'excerpt',
						'type'       => 'switcher',
						'title'      => __( 'Excerpt', 'woo-quickview' ),
						'text_on'    => __( 'Show', 'woo-quickview' ),
						'text_off'   => __( 'Hide', 'woo-quickview' ),
						'text_width' => 75,
					),
					array(
						'id'         => 'add_to_cart',
						'type'       => 'switcher',
						'title'      => __( 'Add To Cart', 'woo-quickview' ),
						'text_on'    => __( 'Show', 'woo-quickview' ),
						'text_off'   => __( 'Hide', 'woo-quickview' ),
						'text_width' => 75,
					),
					array(
						'id'         => 'meta',
						'type'       => 'switcher',
						'title'      => __( 'Meta', 'woo-quickview' ),
						'text_on'    => __( 'Show', 'woo-quickview' ),
						'text_off'   => __( 'Hide', 'woo-quickview' ),
						'text_width' => 75,
					),
					array(
						'id'         => 'social_share',
						'type'       => 'switcher',
						'class'      => 'only_pro',
						'title'      => __( 'Social Share', 'woo-quickview' ),
						'text_on'    => __( 'Show', 'woo-quickview' ),
						'text_off'   => __( 'Hide', 'woo-quickview' ),
						'text_width' => 75,
					),
				),
				'desc'     => __( 'To unlock the social share and drag & drop sorting ability, <a href="https://shapedplugin.com/plugin/woocommerce-quick-view-pro/?ref=1" target="_blank"><strong>Upgrade To Pro!</strong></a>', 'woo-quickview' ),
			),
			array(
				'id'       => 'wqvpro_popup_box_bg',
				'type'     => 'color',
				'title'    => __( 'Modal Background', 'woo-quickview' ),
				'subtitle' => __( 'Set color for the modal background.', 'woo-quickview' ),
				'default'  => '#ffffff',
			),
			array(
				'id'       => 'wqvpro_content_padding',
				'type'     => 'spacing',
				'title'    => __( 'Content Padding', 'woo-quickview' ),
				'subtitle' => __( 'Set padding for modal content.', 'woo-quickview' ),
				'default'  => array(
					'left'   => '20',
					'right'  => '20',
					'top'    => '20',
					'bottom' => '20',
				),
				'units'    => array( 'px' ),
			),
			array(
				'id'      => 'wqvpro_qv_subheading',
				'type'    => 'subheading',
				'content' => __( 'Add to Cart and View Details', 'woo-quickview' ),
			),
			array(
				'id'         => 'wqvpro_aj_add_to_cart',
				'type'       => 'switcher',
				'class'      => 'only_pro',
				'title'      => __( ' Enable Ajax Add to Cart', 'woo-quickview' ),
				'subtitle'   => __( 'Enable/Disable ajax add to cart on the modal.', 'woo-quickview' ),
				'default'    => true,
				'text_on'    => __( 'Enabled', 'woo-quickview' ),
				'text_off'   => __( 'Disabled', 'woo-quickview' ),
				'text_width' => 95,
			),
			array(
				'id'       => 'wqvpro_add_to_cart_btn_bg',
				'type'     => 'color_group',
				'title'    => __( 'Add to Cart Button Color', 'woo-quickview' ),
				'subtitle' => __( 'Set add to cart button color.', 'woo-quickview' ),
				'default'  => array(
					'color1' => '#ffffff',
					'color2' => '#ffffff',
					'color3' => '#333333',
					'color4' => '#1a1a1a',
				),
				'options'  => array(
					'color1' => __( 'Color', 'woo-quickview' ),
					'color2' => __( 'Hover Color', 'woo-quickview' ),
					'color3' => __( 'Background', 'woo-quickview' ),
					'color4' => __( 'Hover Background', 'woo-quickview' ),
				),
			),
			array(
				'id'       => 'wqvpro_add_to_cart_btn_padding',
				'type'     => 'spacing',
				'title'    => __( 'Button Padding', 'woo-quickview' ),
				'subtitle' => __( 'Set add to cart and view details button padding.', 'woo-quickview' ),
				'default'  => array(
					'left'   => '16',
					'right'  => '16',
					'top'    => '0',
					'bottom' => '0',
				),
				'units'    => array( 'px' ),
			),
			array(
				'id'         => 'wqvpro_view_details_button',
				'type'       => 'switcher',
				'class'      => 'only_pro',
				'title'      => __( ' Add View Details Button', 'woo-quickview' ),
				'subtitle'   => __( 'Show/Hide view details button.', 'woo-quickview' ),
				'default'    => false,
				'text_on'    => __( 'Show', 'woo-quickview' ),
				'text_off'   => __( 'Hide', 'woo-quickview' ),
				'text_width' => 75,
			),
			array(
				'id'       => 'wqvpro_redirect_to_checkout_after_add_to_cart',
				'type'     => 'checkbox',
				'class'    => 'only_pro',
				'title'    => __( 'Redirect to Checkout After Add to Cart', 'woo-quickview' ),
				'subtitle' => __( 'Check to redirect the checkout page after add to cart.', 'woo-quickview' ),
				'default'  => false,
			),
			array(
				'id'         => 'wqvpro_rating_start_color',
				'type'       => 'color_group',
				'title'      => __( 'Rating Color', 'woo-quickview' ),
				'subtitle'   => __( 'Set product star rating color.', 'woo-quickview' ),
				'default'    => array(
					'color1' => '#dadada',
					'color2' => '#ff9800',
				),
				'options'    => array(
					'color1' => __( 'Empty Color', 'woo-quickview' ),
					'color2' => __( 'Full Color', 'woo-quickview' ),
				),
				'dependency' => array( 'rating', '==', 'true' ),
			),
			array(
				'id'         => 'wqvpro_enable_on_wishlist',
				'type'       => 'switcher',
				'class'      => 'only_pro',
				'title'      => __( 'Enable Quick View on Wishlist', 'woo-quickview' ),
				'subtitle'   => __( 'Enable/Disable quick view on wishlist.', 'woo-quickview' ),
				'default'    => false,
				'text_on'    => __( 'Enabled', 'woo-quickview' ),
				'text_off'   => __( 'Disabled ', 'woo-quickview' ),
				'text_width' => 95,
			),
			array(
				'id'         => 'wqvpro_product_image_lightbox',
				'type'       => 'switcher',
				'title'      => __( 'Enable Lightbox ', 'woo-quickview' ),
				'subtitle'   => __( 'Enable/Disable lightbox on click image.', 'woo-quickview' ),
				'default'    => false,
				'text_on'    => __( 'Enabled', 'woo-quickview' ),
				'text_off'   => __( 'Disabled', 'woo-quickview' ),
				'text_width' => 95,
			),
			array(
				'id'      => 'wqvpro_qv_subheading',
				'type'    => 'subheading',
				'content' => __( 'Close Button', 'woo-quickview' ),
			),
			array(
				'id'         => 'wqvpro_popup_close_button',
				'type'       => 'switcher',
				'title'      => __( 'Close Button Icon', 'woo-quickview' ),
				'subtitle'   => __( 'Show/hide modalclose button.', 'woo-quickview' ),
				'default'    => true,
				'text_on'    => __( 'Show', 'woo-quickview' ),
				'text_off'   => __( 'Hide ', 'woo-quickview' ),
				'text_width' => 75,
			),
			array(
				'id'         => 'wqvpro_popup_close_color',
				'type'       => 'color_group',
				'title'      => __( 'Icon Color', 'woo-quickview' ),
				'subtitle'   => __( 'Set modal close button icon color.', 'woo-quickview' ),
				'default'    => array(
					'color1' => '#9a9a9a',
					'color2' => '#ffffff',
				),
				'options'    => array(
					'color1' => __( 'Color', 'woo-quickview' ),
					'color2' => __( 'Hover Color', 'woo-quickview' ),
				),
				'dependency' => array( 'wqvpro_popup_close_button', '==', 'true' ),
			),
			array(
				'id'         => 'wqvpro_popup_close_size',
				'type'       => 'spinner',
				'title'      => __( 'Icon Size', 'woo-quickview' ),
				'subtitle'   => __( 'Set modal close button icon size.', 'woo-quickview' ),
				'default'    => '18',
				'unit'       => 'px',
				'min'        => 0,
				'max'        => 100,
				'dependency' => array( 'wqvpro_popup_close_button', '==', 'true' ),
			),
			array(
				'type'    => 'subheading',
				'content' => __( 'Preloader', 'woo-quickview' ),
			),
			array(
				'id'         => 'wqvpro_qv_preloader',
				'type'       => 'switcher',
				'title'      => __( ' Preloader', 'woo-quickview' ),
				'subtitle'   => __( 'Enable/Disable preloader on the modal.', 'woo-quickview' ),
				'default'    => true,
				'text_on'    => __( 'Enabled', 'woo-quickview' ),
				'text_off'   => __( 'Disabled', 'woo-quickview' ),
				'text_width' => 95,
			),
			array(
				'id'         => 'wqvpro_loading_label',
				'type'       => 'text',
				'title'      => __( 'Loading Label', 'woo-quickview' ),
				'subtitle'   => __( 'Type loading label.', 'woo-quickview' ),
				'default'    => __( 'Loading...', 'woo-quickview' ),
				'dependency' => array( 'wqvpro_qv_preloader', '==', 'true' ),
			),
			array(
				'id'         => 'wqvpro_loading_color',
				'type'       => 'color',
				'title'      => __( 'Color', 'woo-quickview' ),
				'subtitle'   => __( 'Set loading label color.', 'woo-quickview' ),
				'default'    => '#ffffff',
				'dependency' => array( 'wqvpro_qv_preloader', '==|==', 'true' ),
			),
		),
	)
);
// ----------------------------------------
// Typography Settings                    -
// ----------------------------------------
SP_WQV_Framework::createSection(
	$prefix,
	array(
		'name'   => 'typography_settings',
		'title'  => __( 'Typography', 'woo-quickview' ),
		'icon'   => 'fa fa-font',

		// begin: fields.
		'fields' => array(
			array(
				'id'      => 'wqvpro_qv_subheading',
				'type'    => 'subheading',
				'content' => __( 'To unlock the following typography (950+ Google Fonts) options, <a href="https://shapedplugin.com/plugin/woocommerce-quick-view-pro/?ref=1" target="_blank"><strong>Upgrade To Pro!</strong></a>', 'woo-quickview' ),
				'class'   => 'typography-notice',
			),
			array(
				'id'       => 'wqvpro_quick_view_button_font_load',
				'type'     => 'switcher',
				'title'    => __( 'Load Button Label Font', 'woo-quickview' ),
				'subtitle' => __( 'On/Off google font for butten label.', 'woo-quickview' ),
				'default'  => false,
				'class'    => 'typography_settings_pro',
			),
			array(
				'id'            => 'wqvpro_quick_view_button_typography',
				'type'          => 'typography',
				'title'         => __( 'Button Label', 'woo-quickview' ),
				'subtitle'      => __( 'Set quick view button font properties.', 'woo-quickview' ),
				'default'       => array(
					'font-family'    => 'Open Sans',
					'font-weight'    => '600',
					'type'           => 'google',
					'font-size'      => '14',
					'line-height'    => '19',
					'text-align'     => 'center',
					'text-transform' => 'normal',
					'letter-spacing' => '0',
				),
				'color'         => false,
				'margin-top'    => false,
				'margin-bottom' => false,
				'preview'       => 'always',
				'preview_text'  => 'Quick View',
				'class'         => 'typography_settings_pro',
			),
			array(
				'id'       => 'wqvpro_product_name_font_load',
				'type'     => 'switcher',
				'title'    => __( 'Load Product Title Font', 'woo-quickview' ),
				'subtitle' => __( 'On/Off google font for product title.', 'woo-quickview' ),
				'default'  => false,
				'class'    => 'typography_settings_pro',
			),
			array(
				'id'           => 'wqvpro_title_typography',
				'type'         => 'typography',
				'title'        => __( 'Product Name or Title', 'woo-quickview' ),
				'subtitle'     => __( 'Set product name or title font properties.', 'woo-quickview' ),
				'default'      => array(
					'font-family'    => 'Open Sans',
					'font-weight'    => '700',
					'type'           => 'google',
					'font-size'      => '24',
					'line-height'    => '32',
					'text-align'     => 'left',
					'text-transform' => 'normal',
					'letter-spacing' => 'normal',
					'color'          => '#555555',
					'margin-top'     => '0',
					'margin-bottom'  => '20',
				),
				'preview'      => 'always',
				'preview_text' => 'Product Name',
				'class'        => 'typography_settings_pro',
			),
			array(
				'id'       => 'wqvpro_price_font_load',
				'type'     => 'switcher',
				'title'    => __( 'Load Price Font', 'woo-quickview' ),
				'subtitle' => __( 'On/Off google font for price.', 'woo-quickview' ),
				'default'  => false,
				'class'    => 'typography_settings_pro',
			),
			array(
				'id'           => 'wqvpro_price_typography',
				'type'         => 'typography',
				'title'        => __( 'Price', 'woo-quickview' ),
				'subtitle'     => __( 'Set product price font properties.', 'woo-quickview' ),
				'default'      => array(
					'font-family'    => 'Open Sans',
					'font-weight'    => '600',
					'type'           => 'google',
					'font-size'      => '20',
					'line-height'    => '22',
					'text-align'     => 'left',
					'text-transform' => 'normal',
					'letter-spacing' => 'normal',
					'color'          => '#111111',
					'margin-top'     => '0',
					'margin-bottom'  => '0',
				),
				'preview'      => 'always',
				'preview_text' => '$299',
				'class'        => 'typography_settings_pro',
			),
			array(
				'id'       => 'wqvpro_excerpt_font_load',
				'type'     => 'switcher',
				'title'    => __( 'Load Excerpt or Description Font', 'woo-quickview' ),
				'subtitle' => __( 'On/Off google font for excerpt.', 'woo-quickview' ),
				'default'  => false,
				'class'    => 'typography_settings_pro',
			),
			array(
				'id'           => 'wqvpro_excerpt_typography',
				'type'         => 'typography',
				'title'        => __( 'Excerpt or Description ', 'woo-quickview' ),
				'subtitle'     => __( 'Set product excerpt font properties.', 'woo-quickview' ),
				'default'      => array(
					'font-family'    => 'Open Sans',
					'font-weight'    => 'regular',
					'type'           => 'google',
					'font-size'      => '14',
					'line-height'    => '23',
					'text-align'     => 'left',
					'text-transform' => 'normal',
					'letter-spacing' => 'normal',
					'color'          => '#777777',
					'margin-top'     => '0',
					'margin-bottom'  => '0',
				),
				'preview'      => 'always',
				'preview_text' => 'Lorem ipsum dolor sit amet.',
				'class'        => 'typography_settings_pro',
			),
			array(
				'id'       => 'wqvpro_add_to_cart_font_load',
				'type'     => 'switcher',
				'title'    => __( 'Load Add To Cart Font', 'woo-quickview' ),
				'subtitle' => __( 'On/Off google font for add to cart.', 'woo-quickview' ),
				'default'  => false,
				'class'    => 'typography_settings_pro',
			),
			array(
				'id'           => 'wqvpro_add_to_cart_typography',
				'type'         => 'typography',
				'title'        => __( 'Add to Cart', 'woo-quickview' ),
				'subtitle'     => __( 'Set product add to cart button font properties.', 'woo-quickview' ),
				'default'      => array(
					'font-family'    => 'Open Sans',
					'font-weight'    => '600',
					'type'           => 'google',
					'font-size'      => '13',
					'line-height'    => '35',
					'text-align'     => 'center',
					'text-transform' => 'capitalize',
					'letter-spacing' => 'normal',
					'color'          => '#ffffff',
					'hover_color'    => '#ffffff',
					'margin-top'     => '0',
					'margin-bottom'  => '0',
				),
				'hover_color'  => true,
				'preview'      => 'always',
				'preview_text' => 'Add to cart',
				'class'        => 'typography_settings_pro',
			),
			array(
				'id'       => 'wqvpro_view_details_font_load',
				'type'     => 'switcher',
				'title'    => __( 'Load View Details Font', 'woo-quickview' ),
				'subtitle' => __( 'On/Off google font for view details.', 'woo-quickview' ),
				'default'  => false,
				'class'    => 'typography_settings_pro',
			),
			array(
				'id'           => 'wqvpro_view_details_typography',
				'type'         => 'typography',
				'title'        => __( 'View Details', 'woo-quickview' ),
				'subtitle'     => __( 'Set product view details button font properties.', 'woo-quickview' ),
				'default'      => array(
					'font-family'    => 'Open Sans',
					'font-weight'    => '600',
					'type'           => 'google',
					'font-size'      => '13',
					'line-height'    => '35',
					'text-align'     => 'center',
					'text-transform' => 'capitalize',
					'letter-spacing' => 'normal',
					'color'          => '#ffffff',
					'hover_color'    => '#ffffff',
					'margin-top'     => '0',
					'margin-bottom'  => '0',
				),
				'hover_color'  => true,
				'preview'      => 'always',
				'preview_text' => 'View Details',
				'class'        => 'typography_settings_pro',
			),
			array(
				'id'       => 'wqvpro_meta_font_load',
				'type'     => 'switcher',
				'title'    => __( 'Load Meta Font', 'woo-quickview' ),
				'subtitle' => __( 'On/Off google font for meta.', 'woo-quickview' ),
				'default'  => false,
				'class'    => 'typography_settings_pro',
			),
			array(
				'id'           => 'wqvpro_meta_typography',
				'type'         => 'typography',
				'title'        => __( 'Meta', 'woo-quickview' ),
				'subtitle'     => __( 'Set product meta font properties.', 'woo-quickview' ),
				'default'      => array(
					'font-family'    => 'Open Sans',
					'font-weight'    => 'regular',
					'type'           => 'google',
					'font-size'      => '12',
					'line-height'    => '18',
					'text-align'     => 'left',
					'text-transform' => 'normal',
					'letter-spacing' => 'normal',
					'color'          => '#777777',
					'margin-top'     => '0',
					'margin-bottom'  => '0',
				),
				'preview'      => 'always',
				'preview_text' => 'Category: T-Shirt',
				'class'        => 'typography_settings_pro',
			),
		),
	)
);

// ------------------------------
// Other Options                -
// ------------------------------
SP_WQV_Framework::createSection(
	$prefix,
	array(
		'name'   => 'other_options_section',
		'title'  => __( 'Advanced', 'woo-quickview' ),
		'icon'   => 'fa fa-cogs',
		'fields' => array(
			array(
				'id'         => 'wqvpro_data_remove',
				'type'       => 'checkbox',
				'title'      => esc_html__( 'Clean-up Data on Deletion', 'woo-quickview' ),
				'help_title' => esc_html__( 'Check this box if you would like Quick View for WooCommerce plugin to completely remove all of its data when the plugin is deleted.', 'woo-quickview' ),
			),
			array(
				'id'         => 'wqvpro_add_iphone_android',
				'type'       => 'switcher',
				'title'      => __( 'Quick View Button on Mobile Devices', 'woo-quickview' ),
				'help_title' => __( 'Show/Hide quick view button on iphone and android devices.', 'woo-quickview' ),
				'text_on'    => __( 'Show', 'woo-quickview' ),
				'text_off'   => __( 'Hide', 'woo-quickview' ),
				'text_width' => 75,
				'default'    => false,
			),
			array(
				'id'         => 'wqvpro_add_ipad',
				'type'       => 'switcher',
				'title'      => __( ' Quick View Button on iPad', 'woo-quickview' ),
				'help_title' => __( 'Show/Hide quick view button on ipad.', 'woo-quickview' ),
				'text_on'    => __( 'Show', 'woo-quickview' ),
				'text_off'   => __( 'Hide', 'woo-quickview' ),
				'text_width' => 75,
				'default'    => false,
			),
			array(
				'id'       => 'wqvpro_custom_css',
				'type'     => 'code_editor',
				'title'    => __( 'Custom CSS', 'woo-quickview' ),
				'settings' => array(
					'theme' => 'dracula',
					'mode'  => 'css',
				),
			),
			array(
				'id'       => 'wqvpro_custom_js',
				'type'     => 'code_editor',
				'title'    => __( 'Custom JS', 'woo-quickview' ),
				'settings' => array(
					'theme' => 'dracula',
					'mode'  => 'js',
				),
			),
		),
	)
);

// ----------------------------------------
// Help Settings                    -
// ----------------------------------------
SP_WQV_Framework::createSection(
	$prefix,
	array(
		'name'   => 'help',
		'title'  => __( 'Get Help', 'woo-quickview' ),
		'icon'   => 'fa fa-life-ring',
		'fields' => array(
			array(
				'id'   => 'help',
				'type' => 'wqv_help',
			),
		),
	)
);

