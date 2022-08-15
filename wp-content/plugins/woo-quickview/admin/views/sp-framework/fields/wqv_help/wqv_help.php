<?php if ( ! defined( 'ABSPATH' ) ) {
	die;
} // Cannot access directly.
/**
 *
 * Field: license
 *
 * @since 2.1.0
 * @version 2.1.0
 */
if ( ! class_exists( 'SP_WQV_Framework_Field_wqv_help' ) ) {
	class SP_WQV_Framework_Field_wqv_help extends SP_WQV_Framework_Fields {

		/**
		 * Create fields.
		 *
		 * @param  mixed $field field.
		 * @param  mixed $value value.
		 * @param  mixed $unique unique id.
		 * @param  mixed $where where to add.
		 * @param  mixed $parent parent.
		 * @return void
		 */
		public function __construct( $field, $value = '', $unique = '', $where = '', $parent = '' ) {

			parent::__construct( $field, $value, $unique, $where, $parent );
		}

		/**
		 * Render
		 *
		 * @return void
		 */
		public function render() {
			echo wp_kses_post( $this->field_before() );
			?>
		<div class="wrap about-wrap sp-wqv-help">
			<h1><?php echo esc_html__( 'Welcome to WooCommerce Quick View!', 'woo-quickview' ); ?></h1>
			<p class="about-text">
			<?php
			echo esc_html__( 'Get introduced to WooCommerce Quick View plugin by watching our "Getting Started" video tutorial series. This video will help you get started with the plugin.', 'woo-quickview' );
			?>
				</p>

			<div class="headline-feature-video">
			<div class="headline-feature feature-video">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/aVznU7U7Hv4?list=PLoUb-7uG-5jNpcDKwo1WNot5tGlMmzhAH" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
				</div>

			<div class="feature-section three-col">
				<div class="col">
					<div class="sp-wqv-feature ">
						<h3><i class="sp-font fas fa-headset"></i> Need Help?</h3>
						<p>Stuck with any issues? No worries! Our Expert Support Team is always ready to help you out promptly.</p>
						<a href="https://shapedplugin.com/support/" target="_blank" class="wqv-help-button">Get Support</a>
					</div>
				</div>
				<div class="col">
					<div class="sp-wqv-feature">
						<h3><i class="sp-font fa fa-file-text" ></i>Documentation</h3>
						<p>Check out our documentation page and more information about what you can do with WooCommerce Quick View.</p>
						<a href="https://docs.shapedplugin.com/docs/woocommerce-quick-view/overview/" target="_blank" class="wqv-help-button">Documentation</a>
					</div>
				</div>
				<div class="col">
					<div class="sp-wqv-feature">
						<h3><i class="sp-font fa fa-heart-o" ></i>Show Your Love</h3>
						<p>We are really thankful to choose our plugin. Take your 1 minute to review the plugin and spread the love to inspire us.</p>
						<a href="https://wordpress.org/support/plugin/woo-quickview/reviews/?filter=5" target="_blank" class="wqv-help-button">Review Now</a>
					</div>
				</div>
			</div>

			<div class="about-wrap sp-wqv-plugin-section">
				<div class="sp-plugin-section-title text-center">
					<h2>Take your shop beyond the typical with more WooCommerce plugins!</h2>
					<h4>Some more premium plugins are ready to make your online store awesome.</h4>
				</div>
				<div class="feature-section three-col">
					<div class="col">
						<div class="sp-wqv-plugin">
						<a href="https://shapedplugin.com/plugin/woocommerce-product-slider-pro/?ref=1" target="_blank"><img src="https://shapedplugin.com/wp-content/uploads/edd/2018/11/WooCommerce-Product-Slider-360x210.png" alt="WooCommerce Product Slider Pro"></a>
							<h3><a href="https://shapedplugin.com/plugin/woocommerce-product-slider-pro/" target="_blank">Product Slider Pro for WooCommerce</a></h3>
						</div>
					</div>

					<div class="col">
						<div class="sp-wqv-plugin">
						<a href="https://shapedplugin.com/plugin/woocommerce-category-slider-pro/?ref=1" target="_blank"><img src="https://shapedplugin.com/wp-content/uploads/edd/2021/03/woocommerce-category-slider-300x175.png" alt="WooCommerce category Slider Pro"></a>
							<h3><a href="https://shapedplugin.com/plugin/woocommerce-category-slider-pro/" target="_blank">Category Slider Pro for WooCommerce </a></h3>
						</div>
					</div>

					<div class="col">
						<div class="sp-wqv-plugin">
						<a href="https://shapedplugin.com/plugin/woocommerce-gallery-slider-pro/?ref=1" target="_blank"><img src="https://shapedplugin.com/wp-content/uploads/edd/2021/04/WGS-P-300x175.png" alt="WooCommerce Gallery Slider Pro"></a>
						<h3><a href="https://shapedplugin.com/plugin/woocommerce-gallery-slider-pro/" target="_blank">Gallery Slider for WooCommerce Pro</a></h3>
						</div>
					</div>
				</div>
			</div>

			</div>
			<?php
			 echo wp_kses_post( $this->field_after() );
		}

	}
}
