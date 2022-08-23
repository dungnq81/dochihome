<?php
/*
Plugin Name: WPA Product Gallery Slider for WooCommerce
Plugin URI: https://wpaddons.net/product/wpa-woo-product-gallery-lite/
Description: The most beautiful image gallery for WooCommerce product single page, this gallery support image zoom and image popup.
Version: 1.1
Author: WPAddons
Author URI: https://wpaddons.net
Text Domain: wpa-gallery
Domain Path: /languages
License: GPL-2.0+
License URI: http://www.gnu.org/licenses/gpl-2.0.txt
Tested up to: 5.9.3
WC tested up to: 6.4.1
*/

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) :
    exit; // Exit if accessed directly
endif;


if (! class_exists( 'WPA_Woo_Gallery_Lite' )) {
	class WPA_Woo_Gallery_Lite{

		/**
		 * plugin version
		 * @var string
		 */
		public $version = '1.1';


		/**
		 * @var null
		 * @since 1.0
		 */
		protected static $_instance = null;


		/**
		 * @return WPA_Woo_Gallery_Lite
		 * @since 1.0
		 */
		public static function instance(){
			if (is_null(self::$_instance)) {
				self::$_instance = new self();
			}

			return self::$_instance;
		}

		/**
		 * WPA_Woo_Gallery_Lite constructor.
		 */
		function __construct(){
			// Define constants
			$this->define_constants();

			// Include required files
			$this->includes();

			// Initialize the hooks
			$this->init_hooks();
		}


		/**
		 * Initialize WordPress hooks
		 *
		 * @return void
		 */
		function init_hooks() {

			// filter hooks
			add_filter( 'plugin_action_links', array( $this, 'add_plugin_action_links' ), 10, 2 );

			// action hooks
			add_action( 'plugins_loaded', array( $this, 'load_text_domain' ) );
			add_action( 'activated_plugin', array( $this, 'redirect_help_page' ));
		}


		/**
		 * Define constants
		 *
		 * @since 1.0
		 */
		public function define_constants() {
			$this->define( 'WPA_WG_VERSION_LITE', $this->version );
			$this->define( 'WPA_WG_PATH_LITE', plugin_dir_path( __FILE__ ) );
			$this->define( 'WPA_WG_URL_LITE', plugin_dir_url( __FILE__ ) );
			$this->define( 'WPA_WG_BASENAME_LITE', plugin_basename( __FILE__ ) );
			$this->define( 'WPA_WG_PLUGIN_TEMPLATE_PATH_LITE', trailingslashit( plugin_dir_path( __FILE__ ) . 'templates' ) );
		}

		/**
		 * Define constant if not already set
		 *
		 * @since 1.0
		 *
		 * @param  string $name
		 * @param  string|bool $value
		 */
		public function define( $name, $value ) {
			if ( ! defined( $name ) ) {
				define( $name, $value );
			}
		}

		/**
		 * Load TextDomain for plugin.
		 *
		 * @since 1.0
		 */
		public function load_text_domain() {

			load_plugin_textdomain( 'wpa-gallery', false, WPA_WG_BASENAME_LITE . '/languages' );
		}

		/**
		 * Add plugin action menu
		 *
		 * @param array $links
		 * @param string $file
		 *
		 * @return array
		 */
		public function add_plugin_action_links( $links, $file ) {

			if ( $file == WPA_WG_BASENAME_LITE ) {
				$new_links = array(
					sprintf( '<a href="%s" style="%s" target="_blank">%s</a>', 'https://wpaddons.net/item/woocommerce-product-gallery-slider/', 'color:red;font-weight:bold', esc_html__( 'Go Pro!', 'wpa-gallery' ) ),
					sprintf( '<a href="%s">%s</a>', admin_url( 'admin.php?page=wc-settings&tab=wpa-wg-gallery' ), esc_html__( 'Settings', 'wpa-gallery' ) ),
				);

				return array_merge( $new_links, $links );
			}

			return $links;
		}


		/**
		 * Include the required files
		 *
		 * @return void
		 */
		public function includes() {
			include_once WPA_WG_PATH_LITE . 'classes/class-settings.php';
			include_once WPA_WG_PATH_LITE . 'classes/class-scripts.php';
			include_once WPA_WG_PATH_LITE . 'inc/functions.php';
			
		}

		public function template_path( $file ) {
			$file = ltrim( $file, '/' );
			
			return WPA_WG_PLUGIN_TEMPLATE_PATH_LITE . $file;
		}


		/**
		 * Redirect after active
		 * @param $plugin
		 */
		public function redirect_help_page( $plugin ) {
			if ( $plugin == WPA_WG_BASENAME_LITE ) {
				exit( wp_redirect( admin_url( 'admin.php?page=wc-settings&tab=wpa-wg-gallery' ) ) );
			}
		}
	}
}


/**
 * Returns the main instance.
 *
 * @since 1.0
 * @return WPA_Woo_Gallery_Lite
 */
function wpawg_woo_gallery_lite() {
	return WPA_Woo_Gallery_Lite::instance();
}

//WPA_Woo_Gallery_Lite instance.
wpawg_woo_gallery_lite();