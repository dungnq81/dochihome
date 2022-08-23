<?php if ( ! defined( 'ABSPATH' ) ) { exit; }  // if direct access

/**
 * Scripts and styles Class
 */
class WPA_WG_Scripts_Lite{

	/**
	 * @var null
	 * @since 1.0
	 */
	protected static $_instance = null;

	/**
	 * @return WPA_WG_Scripts
	 * @since 1.0
	 */
	public static function instance() {
		if ( is_null( self::$_instance ) ) {
			self::$_instance = new self();
		}

		return self::$_instance;
	}

	/**
	 * Initialize the class
	 */
	public function __construct() {
		add_action( 'wp_enqueue_scripts', array( $this, 'front_scripts' ) );
		add_action( 'admin_enqueue_scripts', array( $this, 'admin_scripts' ) );
	}

	/**
	 * Plugin Scripts and Styles
	 *
	 */
	public function front_scripts() {
		// CSS Files
		wp_register_style( 'wpawg-flaticon', WPA_WG_URL_LITE . 'assets/font/flaticon.css', array(), '1.0' );
		wp_register_style( 'slick', WPA_WG_URL_LITE . 'assets/css/slick.css', array(), '1.9.0' );
		wp_register_style( 'slick-theme', WPA_WG_URL_LITE . 'assets/css/slick-theme.css', array(), '1.9.0' );
		wp_register_style( 'magnific-popup', WPA_WG_URL_LITE . 'assets/css/magnific-popup.css', array(), '1.1.0' );
		wp_enqueue_style( 'wpawg-style', WPA_WG_URL_LITE . 'assets/css/style.css', array(), WPA_WG_VERSION_LITE );
		wp_enqueue_style( 'wpawg-custom-style', WPA_WG_URL_LITE . 'assets/css/custom-style.css', array(), WPA_WG_VERSION_LITE );

		// popup icon color
		$wpawg_image_popup_color = get_option( 'wpawg_image_popup_color' );
		// gallery arrow color
		$wpawg_navigation_color = get_option( 'wpawg_navigation_color' );

        $custom_css = "
            .wpawg-image-popup{
                color: {$wpawg_image_popup_color};
            }
			.wpa-product-gallery button.wpawg-next,
			.wpa-product-gallery button.wpawg-prev,
			.wpa-product-gallery-thumbs button.wpawg-next,
			.wpa-product-gallery-thumbs button.wpawg-prev{
				color: {$wpawg_navigation_color};
			}
            ";
        wp_add_inline_style( 'wpawg-custom-style', $custom_css );

		//JS Files
		wp_register_script( 'slick', WPA_WG_URL_LITE . 'assets/js/slick.min.js', array( 'jquery' ), '1.9.0', true );
		wp_register_script( 'magnific-popup', WPA_WG_URL_LITE . 'assets/js/jquery.magnific-popup.min.js', array( 'jquery' ), '1.1.0', true );
		wp_register_script( 'wpawg-zoom', WPA_WG_URL_LITE . 'assets/js/jquery.zoom.js', array( 'jquery' ), '1.7.21', true );
		wp_register_script( 'wpawg-scripts', WPA_WG_URL_LITE . 'assets/js/scripts.js', array( 'jquery' ), WPA_WG_VERSION_LITE, true );
	}


	/**
	 * Plugin Admin Scripts and Styles
	 *
	 */
	public function admin_scripts() {
		// CSS Files
		wp_enqueue_style( 'wpawg-admin-style', WPA_WG_URL_LITE . 'assets/css/admin-style.css', array(), WPA_WG_VERSION_LITE );
	}
}
new WPA_WG_Scripts_Lite();