<?php if ( ! defined( 'ABSPATH' ) ) {
	die; } // Cannot access directly.

/**
 *
 * Get option
 *
 * @since 1.0.0
 * @version 1.0.0
 */
if ( ! function_exists( 'sp_wqv_get_option' ) ) {
	function sp_wqv_get_option( $option_name = '', $default = '' ) {

		$options = apply_filters( 'sp_wqv_get_option', get_option( '_sp_wqv_options' ), $option_name, $default );

		if ( isset( $option_name ) && isset( $options[ $option_name ] ) ) {
			return $options[ $option_name ];
		} else {
			return ( isset( $default ) ) ? $default : null;
		}

	}
}

/**
 *
 * Set option
 *
 * @since 1.0.0
 * @version 1.0.0
 */
if ( ! function_exists( 'sp_wqv_set_option' ) ) {
	function sp_wqv_set_option( $option_name = '', $new_value = '' ) {

		$options = apply_filters( 'sp_wqv_set_option', get_option( '_sp_wqv_options' ), $option_name, $new_value );

		if ( ! empty( $option_name ) ) {
			$options[ $option_name ] = $new_value;
			update_option( '_sp_wqv_options', $options );
		}

	}
}

/**
 *
 * Get all option
 *
 * @since 1.0.0
 * @version 1.0.0
 */
if ( ! function_exists( 'sp_wqv_get_all_option' ) ) {
	function sp_wqv_get_all_option() {
		return get_option( '_sp_wqv_options' );
	}
}
