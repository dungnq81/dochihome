<?php
/**
 * Single Product Image
 * This template can be overridden by copying it to yourtheme/woocommerce/product-image.php.
 */

defined( 'ABSPATH' ) || exit;

// Note: `wpa_wg_get_gallery_image_html` was added in WC 3.3.2 and did not exist prior. This check protects against theme overrides being used on older versions of WC.
if ( ! function_exists( 'wpa_wg_get_gallery_image_html' ) ) {
	return;
}

global $product;

$columns           = apply_filters( 'woocommerce_product_thumbnails_columns', 4 );
$post_thumbnail_id = $product->get_image_id();
$attachment_ids = $product->get_gallery_image_ids();

$slider_class = '';

$wpawg_zoom = (get_option( 'wpawg_image_zoom' ) ? get_option( 'wpawg_image_zoom' ) : 'yes');
$wpawg_thumbnails = (get_option( 'wpawg_thumbnails' ) ? get_option( 'wpawg_thumbnails' ) : '3');
$wpawg_navigation = (get_option( 'wpawg_navigation' ) ? get_option( 'wpawg_navigation' ) : 'yes');
$wpawg_autoplay = (get_option( 'wpawg_autoplay' ) ? get_option( 'wpawg_autoplay' ) : 'no');
$wpawg_autoplay_speed = (get_option( 'wpawg_autoplay_speed' ) ? get_option( 'wpawg_autoplay_speed' ) : '2000');
$wpawg_centermode = (get_option( 'wpawg_centermode' ) ? get_option( 'wpawg_centermode' ) : 'yes');
$wpawg_adaptive_height = (get_option( 'wpawg_adaptive_height' ) ? get_option( 'wpawg_adaptive_height' ) : 'yes');
$wpawg_rtl = (get_option( 'wpawg_rtl' ) ? get_option( 'wpawg_rtl' ) : 'no');

if ($attachment_ids) {
	$slider_class = 'wpa-product-gallery';
} else {
	$slider_class = 'wpa-product-single-image';
}

$wrapper_classes   = apply_filters( 'woocommerce_single_product_image_gallery_classes', array(
	'wpa-woocommerce-product-gallery',
	'wpa-woocommerce-product-gallery--' . ( has_post_thumbnail() ? 'with-images' : 'without-images' ),
	'wpa-woocommerce-product-gallery--columns-' . absint( $columns ),
	'images'
) );

wp_enqueue_style('slick' );
wp_enqueue_style('slick-theme' );
wp_enqueue_script('slick' );
if (get_option( 'wpawg_image_popup' ) == 'yes') {
	wp_enqueue_style('magnific-popup' );
	wp_enqueue_script('magnific-popup' );
}
if ($wpawg_zoom == 'yes') {
	wp_enqueue_script('wpawg-zoom' );
}
wp_enqueue_script('wpawg-scripts' );
wp_enqueue_style('wpawg-flaticon' );

?>
<div class="<?php echo esc_attr( implode( ' ', array_map( 'sanitize_html_class', $wrapper_classes ) ) ); ?>" data-columns="<?php echo esc_attr( $columns ); ?>" style="opacity: 0; transition: opacity .25s ease-in-out;" 
	data-zoom="<?php echo esc_attr($wpawg_zoom); ?>"
	data-thumbnails="<?php echo esc_attr($wpawg_thumbnails); ?>"
	data-wpa-navigation="<?php echo esc_attr($wpawg_navigation); ?>"
	data-autoplay="<?php echo esc_attr($wpawg_autoplay); ?>"
	data-autoplay-speed="<?php echo esc_attr($wpawg_autoplay_speed); ?>"
	data-centermode="<?php echo esc_attr($wpawg_centermode); ?>"
	data-adaptive-height="<?php echo esc_attr($wpawg_adaptive_height); ?>"
	data-rtl="<?php echo esc_attr($wpawg_rtl); ?>"
	dir="<?php echo esc_attr($wpawg_rtl == 'yes' ? 'rtl' : ''); ?>"
	>

	<figure class="wpa-woocommerce-product-gallery__wrapper <?php echo esc_attr($slider_class); ?>">
		<?php
		if ( has_post_thumbnail() ) {
			$html  = wpa_wg_get_gallery_image_html( $post_thumbnail_id, true );
		} else {
			$html  = '<div class="woocommerce-product-gallery__image--placeholder">';
			$html .= sprintf( '<img src="%s" alt="%s" class="wp-post-image" />', esc_url( wc_placeholder_img_src() ), esc_html__( 'Awaiting product image', 'wpa-gallery' ) );
			$html .= '</div>';
		}

		echo apply_filters( 'woocommerce_single_product_image_thumbnail_html', $html, $post_thumbnail_id );
		
		if ( $attachment_ids && has_post_thumbnail() ) {
			foreach ( $attachment_ids as $attachment_id ) {
				echo apply_filters( 'woocommerce_single_product_image_thumbnail_html', wpa_wg_get_gallery_image_html( $attachment_id, true  ), $attachment_id );
			}
		} ?>
	</figure>

	<?php if ($attachment_ids): ?>
		<figure class="wpa-woocommerce-product-gallery__wrapper wpa-product-gallery-thumbs">
			
			<?php 
			if ( has_post_thumbnail() ) {
				$html  = wpa_wg_get_gallery_image_html( $post_thumbnail_id, false );
			} else {
				$html  = '<div class="woocommerce-product-gallery__image--placeholder">';
				$html .= sprintf( '<img src="%s" alt="%s" class="wp-post-image" />', esc_url( wc_placeholder_img_src() ), esc_html__( 'Awaiting product image', 'wpa-gallery' ) );
				$html .= '</div>';
			}
			echo apply_filters( 'woocommerce_single_product_image_thumbnail_html', $html, $attachment_ids );

			do_action( 'woocommerce_product_thumbnails' ); ?>
		</figure>
	<?php endif; ?>
</div>