<?php if ( ! defined( 'ABSPATH' ) ) {
	die; } // Cannot access directly.
/**
 *
 * Email validate
 *
 * @since 1.0.0
 * @version 1.0.0
 */
if ( ! function_exists( 'sp_wqv_validate_email' ) ) {
	function sp_wqv_validate_email( $value ) {

		if ( ! filter_var( $value, FILTER_VALIDATE_EMAIL ) ) {
			return esc_html__( 'Please enter a valid email address.', 'woo-quickview' );
		}

	}
}

/**
 *
 * Numeric validate
 *
 * @since 1.0.0
 * @version 1.0.0
 */
if ( ! function_exists( 'sp_wqv_validate_numeric' ) ) {
	function sp_wqv_validate_numeric( $value ) {

		if ( ! is_numeric( $value ) ) {
			return esc_html__( 'Please enter a valid number.', 'woo-quickview' );
		}

	}
}

/**
 *
 * Required validate
 *
 * @since 1.0.0
 * @version 1.0.0
 */
if ( ! function_exists( 'sp_wqv_validate_required' ) ) {
	function sp_wqv_validate_required( $value ) {

		if ( empty( $value ) ) {
			return esc_html__( 'This field is required.', 'woo-quickview' );
		}

	}
}

/**
 *
 * URL validate
 *
 * @since 1.0.0
 * @version 1.0.0
 */
if ( ! function_exists( 'sp_wqv_validate_url' ) ) {
	function sp_wqv_validate_url( $value ) {

		if ( ! filter_var( $value, FILTER_VALIDATE_URL ) ) {
			return esc_html__( 'Please enter a valid URL.', 'woo-quickview' );
		}

	}
}
