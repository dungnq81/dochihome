<?php
/**
 * The dynamic style file.
 *
 * @since      1.0.7
 * @package    Woo_Quick_View
 * @subpackage Woo_Quick_View/includes
 * @author     ShapedPlugin <support@shapedplugin.com>
 */

$settings   = get_option( '_sp_wqv_options' );
$custom_css = isset( $settings['wqvpro_custom_css'] ) ? $settings['wqvpro_custom_css'] : '';

// Quick view button color.
$quick_view_button_bg     = isset( $settings['wqvpro_quick_view_button_color'] ) ? $settings['wqvpro_quick_view_button_color'] : '';
$qv_button_color          = isset( $quick_view_button_bg['color1'] ) ? $quick_view_button_bg['color1'] : '#ffffff';
$qv_button_hover_color    = isset( $quick_view_button_bg['color2'] ) ? $quick_view_button_bg['color2'] : '#ffffff';
$qv_button_bg_color       = isset( $quick_view_button_bg['color3'] ) ? $quick_view_button_bg['color3'] : '#1A79BF';
$qv_button_bg_hover_color = isset( $quick_view_button_bg['color4'] ) ? $quick_view_button_bg['color4'] : '#176AA6';

// Quick view button padding.
$quick_view_button_padding = isset( $settings['wqvpro_quick_view_button_padding'] ) ? $settings['wqvpro_quick_view_button_padding'] : '';
$quick_view_button_top     = isset( $quick_view_button_padding['top'] ) ? $quick_view_button_padding['top'] : '9';
$quick_view_button_right   = isset( $quick_view_button_padding['right'] ) ? $quick_view_button_padding['right'] : '16';
$quick_view_button_bottom  = isset( $quick_view_button_padding['bottom'] ) ? $quick_view_button_padding['bottom'] : '9';
$quick_view_button_left    = isset( $quick_view_button_padding['left'] ) ? $quick_view_button_padding['left'] : '16';
// Quick View Button border.

$quick_view_button_border     = isset( $settings['wqvpro_quick_view_button_border'] ) ? $settings['wqvpro_quick_view_button_border'] : '';
$qv_button_border             = isset( $quick_view_button_border['all'] ) ? $quick_view_button_border['all'] : '0';
$qv_button_border_style       = isset( $quick_view_button_border['style'] ) ? $quick_view_button_border['style'] : 'solid';
$qv_button_border_color       = isset( $quick_view_button_border['color'] ) ? $quick_view_button_border['color'] : '#1A79BF';
$qv_button_border_hover_color = isset( $quick_view_button_border['hover_color'] ) ? $quick_view_button_border['hover_color'] : '#176AA6';

// Add to Cart button color.
$add_to_cart_btn_color = isset( $settings['wqvpro_add_to_cart_btn_bg'] ) ? $settings['wqvpro_add_to_cart_btn_bg'] : '';
$cart_color            = isset( $add_to_cart_btn_color['color1'] ) ? $add_to_cart_btn_color['color1'] : '#ffffff';
$cart_hover_color      = isset( $add_to_cart_btn_color['color2'] ) ? $add_to_cart_btn_color['color2'] : '#ffffff';
$cart_bg_color         = isset( $add_to_cart_btn_color['color3'] ) ? $add_to_cart_btn_color['color3'] : '#333333';
$cart_bg_hover_color   = isset( $add_to_cart_btn_color['color4'] ) ? $add_to_cart_btn_color['color4'] : '#1a1a1a';

// Add to cart padding.
$add_to_cart_btn_padding = isset( $settings['wqvpro_add_to_cart_btn_padding'] ) ? $settings['wqvpro_add_to_cart_btn_padding'] : '';
$cart_top                = isset( $add_to_cart_btn_padding['top'] ) ? $add_to_cart_btn_padding['top'] : '0';
$cart_right              = isset( $add_to_cart_btn_padding['right'] ) ? $add_to_cart_btn_padding['right'] : '16';
$cart_bottom             = isset( $add_to_cart_btn_padding['bottom'] ) ? $add_to_cart_btn_padding['bottom'] : '0';
$cart_left               = isset( $add_to_cart_btn_padding['left'] ) ? $add_to_cart_btn_padding['left'] : '16';

// Rating star color.
$rating_start_color = isset( $settings['wqvpro_rating_start_color'] ) ? $settings['wqvpro_rating_start_color'] : '';
$empty_color        = isset( $rating_start_color['color1'] ) ? $rating_start_color['color1'] : '#dadada';
$full_color         = isset( $rating_start_color['color2'] ) ? $rating_start_color['color2'] : '#ff9800';
$popup_box_bg       = isset( $settings['wqvpro_popup_box_bg'] ) ? $settings['wqvpro_popup_box_bg'] : '#ffffff';
$qv_iphone_android  = isset( $settings['wqvpro_add_iphone_android'] ) ? $settings['wqvpro_add_iphone_android'] : false;
$qv_add_ipad        = isset( $settings['wqvpro_add_ipad'] ) ? $settings['wqvpro_add_ipad'] : false;

// Content Padding.
$qv_content_padding     = isset( $settings['wqvpro_content_padding'] ) ? $settings['wqvpro_content_padding'] : '';
$content_padding_top    = isset( $qv_content_padding['top'] ) ? $qv_content_padding['top'] : '20';
$content_padding_right  = isset( $qv_content_padding['right'] ) ? $qv_content_padding['right'] : '20';
$content_padding_bottom = isset( $qv_content_padding['bottom'] ) ? $qv_content_padding['bottom'] : '20';
$content_padding_left   = isset( $qv_content_padding['left'] ) ? $qv_content_padding['left'] : '20';
$modal_bg               = isset( $settings['wqvpro_popup_bg'] ) ? $settings['wqvpro_popup_bg'] : 'rgba( 0, 0, 0, 0.8)';
// Close icon color.
$popup_close_icon_color = isset( $settings['wqvpro_popup_close_color'] ) ? $settings['wqvpro_popup_close_color'] : '';
$close_icon_color       = isset( $popup_close_icon_color['color1'] ) ? $popup_close_icon_color['color1'] : '#9a9a9a';
$close_icon_hover_color = isset( $popup_close_icon_color['color2'] ) ? $popup_close_icon_color['color2'] : '#ffffff';
$popup_close_icon_size  = isset( $settings['wqvpro_popup_close_size'] ) ? $settings['wqvpro_popup_close_size'] : '18';

$wqvpro_loading_color = isset( $settings['wqvpro_loading_color'] ) ? $settings['wqvpro_loading_color'] : 'ffffff';


/**
 * Custom CSS
 */
$custom_css .= '
#wqv-quick-view-content .wqv-product-info .woocommerce-product-rating .star-rating::before{
	color: ' . $empty_color . ';
	opacity: 1;
}
#wqv-quick-view-content .wqv-product-info .woocommerce-product-rating .star-rating span:before{
	color: ' . $full_color . ';
}
#wqv-quick-view-content .wqv-product-info .single_add_to_cart_button.button:not(.components-button):not(.customize-partial-edit-shortcut-button){
	color: ' . $cart_color . ';
	background: ' . $cart_bg_color . ';
	padding: ' . $cart_top . 'px ' . $cart_right . 'px ' . $cart_bottom . 'px ' . $cart_left . 'px;
	line-height: 35px;
}
#wqv-quick-view-content .wqv-product-info .single_add_to_cart_button.button:not(.components-button):not(.customize-partial-edit-shortcut-button):hover {
	color: ' . $cart_hover_color . ';
	background: ' . $cart_bg_hover_color . ';
}
a#sp-wqv-view-button.button.sp-wqv-view-button,
#wps-slider-section .button.sp-wqv-view-button,
#wpsp-slider-section .button.sp-wqv-view-button {
	background: ' . $qv_button_bg_color . ';
	color: ' . $qv_button_color . ';
	border: ' . $qv_button_border . 'px ' . $qv_button_border_style . ' ' . $qv_button_border_color . ';
	padding: ' . $quick_view_button_top . 'px ' . $quick_view_button_right . 'px ' . $quick_view_button_bottom . 'px ' . $quick_view_button_left . 'px;
}
a#sp-wqv-view-button.button.sp-wqv-view-button:hover,
#wps-slider-section .button.sp-wqv-view-button:hover,
#wpsp-slider-section .button.sp-wqv-view-button:hover {
	background: ' . $qv_button_bg_hover_color . ';
	color: ' . $qv_button_hover_color . ';
	border-color: ' . $qv_button_border_hover_color . ';
}
#wqv-quick-view-content.sp-wqv-content {
	background: ' . $popup_box_bg . ';
}
.mfp-bg.mfp-wqv{
	background: ' . $modal_bg . ';
	opacity: 1;
}
.mfp-wqv #wqv-quick-view-content .mfp-close{
	width: 35px;
    height: 35px;
    opacity: 1;
    cursor: pointer;
    top: 0px;
    right: 0;
    position: absolute;
    background: transparent;
    font-size: 0;
}

.mfp-wqv #wqv-quick-view-content .mfp-close:before{
	color: ' . $close_icon_color . ';
	font-size: ' . $popup_close_icon_size . 'px;
    transition: .2s;
    margin-top: 8px;
}
.wqv-product-info{
	padding: ' . $content_padding_top . 'px ' . $content_padding_right . 'px ' . $content_padding_bottom . 'px ' . $content_padding_left . 'px;

}
.mfp-preloader{
	color: ' . $wqvpro_loading_color . ';
}
.mfp-wqv #wqv-quick-view-content .mfp-close:hover {
    background: #F95600;
    font-size: 0;
    border-radius: 0px;
}
.mfp-wqv #wqv-quick-view-content .mfp-close:hover:before{
	color: ' . $close_icon_hover_color . ';
}
';
if ( ! $qv_iphone_android ) {
	$custom_css .= '@media all and (max-width: 480px){
		#sp-wqv-view-button.sp-wqv-view-button.button{
		 display: none !important;
	   }
	  }';
}
if ( ! $qv_add_ipad ) {
	$custom_css .= '@media all and (min-width: 481px) and (max-width: 768px) {
		#sp-wqv-view-button.sp-wqv-view-button.button{
		  display: none !important;
		}
	  }';
}
