<?php
/**
 * This class defines all code necessary to run during the popup open.
 *
 * @since      1.0.7
 * @package    Woo_Quick_View
 * @subpackage Woo_Quick_View/includes
 * @author     ShapedPlugin <support@shapedplugin.com>
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Woo Quick View- popup class
 *
 * @since 1.0
 */
class SP_WQV_Popup {

	/**
	 * GetInstance
	 *
	 * @var SP_WQV_Popup single instance of the class
	 *
	 * @since 1.0
	 */
	protected static $_instance = null;

	/**
	 * The popup self instance.
	 *
	 * @since 1.0
	 *
	 * @static
	 *
	 * @return SP_WQV_Popup
	 */
	public static function getInstance() {
		if ( ! self::$_instance ) {
			self::$_instance = new self();
		}

		return self::$_instance;
	}

	/**
	 * Initialize the class
	 */
	public function __construct() {
		add_action( 'wp_ajax_wqv_popup_content', array( $this, 'wqv_popup_content' ) );
		add_action( 'wp_ajax_nopriv_wqv_popup_content', array( $this, 'wqv_popup_content' ) );
		$plugin_setting       = get_option( '_sp_wqv_options' );
		$show_product_content = isset( $plugin_setting['wqvpro_show_product_content'] ) ? $plugin_setting['wqvpro_show_product_content'] : '';
		$show_title           = isset( $show_product_content['title'] ) ? $show_product_content['title'] : true;
		$show_price           = isset( $show_product_content['price'] ) ? $show_product_content['price'] : true;
		$show_excerpt         = isset( $show_product_content['excerpt'] ) ? $show_product_content['excerpt'] : true;
		$show_add_to_cart     = isset( $show_product_content['add_to_cart'] ) ? $show_product_content['add_to_cart'] : true;
		$show_rating          = isset( $show_product_content['rating'] ) ? $show_product_content['rating'] : true;
		$show_meta            = isset( $show_product_content['meta'] ) ? $show_product_content['meta'] : true;
		if ( $show_title ) {
			add_action( 'wqv_product_content', 'woocommerce_template_single_title', 5 );
		}
		if ( $show_rating ) {
			add_action( 'wqv_product_content', 'woocommerce_template_single_rating', 10 );
		}
		if ( $show_price ) {
			add_action( 'wqv_product_content', 'woocommerce_template_single_price', 15 );
		}
		if ( $show_excerpt ) {
			add_action( 'wqv_product_content', 'woocommerce_template_single_excerpt', 20 );
		}
		if ( $show_add_to_cart ) {
			add_action( 'wqv_product_content', 'woocommerce_template_single_add_to_cart', 25 );
		}
		if ( $show_meta ) {
			add_action( 'wqv_product_content', 'woocommerce_template_single_meta', 30 );
		}
	}

	/**
	 * Popup Content
	 *
	 * @return void
	 */
	public function wqv_popup_content() {
		check_ajax_referer( 'nonce_name' );
		global $post, $product;
		if ( isset( $_GET['product_id'] ) ) {
			$post = get_post( sanitize_text_field( wp_unslash( $_GET['product_id'] ) ) ); //phpcs:ignore
		}
		setup_postdata( $post );
		$post_id        = $post->ID;
		$product        = wc_get_product( $post_id );
		$thumb_ids      = array();
		$image_ids      = $product->get_gallery_image_ids();
		$thumb_ids      = array_merge( $thumb_ids, $image_ids );
		$plugin_setting = get_option( '_sp_wqv_options' );
		$image_lightbox = isset( $plugin_setting['wqvpro_product_image_lightbox'] ) ? $plugin_setting['wqvpro_product_image_lightbox'] : false;

		?>

		<div id="wqv-quick-view-content" class="mfp-with-anim sp-wqv-content sp-wqv-content-<?php echo esc_attr( get_the_id() ); ?>">

			<div class="wqv-product-images" data-attachments="<?php echo count( $thumb_ids ); ?>">
				<div class="wqv-product-images-slider">
					<?php
					if ( has_post_thumbnail( $post->ID ) ) {
						$attachment_id = get_post_thumbnail_id();
						$props         = wc_get_product_attachment_props( $attachment_id, $post );
						if ( $image_lightbox ) {
							$lightbox_start = '<a data-fancybox="wqvpro-gallery" " href="' . esc_url( $props['url'] ) . '">';
							$lightbox_end   = '</a>';
						} else {
							$lightbox_start = '';
							$lightbox_end   = '';
						}
						$image       = get_the_post_thumbnail( $post->ID, apply_filters( 'single_product_large_thumbnail_size', 'shop_single' ), 0, $props );
						$thumb_image = wp_get_attachment_image_src( $attachment_id, apply_filters( 'single_product_small_thumbnail_size', 'shop_thumbnail' ), 0 );

						echo apply_filters(
							'woocommerce_single_product_image_html',
							sprintf(
								'<span data-thumb="%s" class="selected" itemprop="image" title="%s">%s%s%s</span>',
								$thumb_image[0],
								esc_attr( $props['caption'] ),
								$lightbox_start,
								$image,
								$lightbox_end
							),
							$post->ID
						);

					} else {
						echo apply_filters( 'woocommerce_single_product_image_html', sprintf( '<span data-thumb="%s" class="selected" itemprop="image"><img src="%s" alt="%s" /></span>', wc_placeholder_img_src(), wc_placeholder_img_src(), __( 'Placeholder', 'woocommerce' ) ), $post->ID );
					}
					?>
				</div> <!-- wqv-product-images-slider -->	

			</div>

			<div class="wqv-product-info">
				<div class="wqv-product-content">

				<?php do_action( 'wqv_product_content' ); ?>

				</div>
			</div>

		</div>
		<?php
		wp_reset_postdata();
		die();

	}

}

new SP_WQV_Popup();
