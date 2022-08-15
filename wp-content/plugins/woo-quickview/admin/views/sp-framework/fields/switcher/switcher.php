<?php if ( ! defined( 'ABSPATH' ) ) {
	die; } // Cannot access directly.
/**
 *
 * Field: switcher
 *
 * @since 1.0.0
 * @version 1.0.0
 */
if ( ! class_exists( 'SP_WQV_Framework_Field_switcher' ) ) {
	class SP_WQV_Framework_Field_switcher extends SP_WQV_Framework_Fields {

		public function __construct( $field, $value = '', $unique = '', $where = '', $parent = '' ) {
			parent::__construct( $field, $value, $unique, $where, $parent );
		}


		/**
		 * Render
		 *
		 * @return void
		 */
		public function render() {

			$active     = ( ! empty( $this->value ) ) ? ' sp_wqv--active' : '';
			$text_on    = ( ! empty( $this->field['text_on'] ) ) ? $this->field['text_on'] : esc_html__( 'On', 'woo-quickview' );
			$text_off   = ( ! empty( $this->field['text_off'] ) ) ? $this->field['text_off'] : esc_html__( 'Off', 'woo-quickview' );
			$text_width = ( ! empty( $this->field['text_width'] ) ) ? ' style="width: ' . esc_attr( $this->field['text_width'] ) . 'px;"' : '';

			echo wp_kses_post( $this->field_before() );

			echo '<div class="sp_wqv--switcher' . esc_attr( $active ) . '"' . $text_width . '>';
			echo '<span class="sp_wqv--on">' . esc_attr( $text_on ) . '</span>';
			echo '<span class="sp_wqv--off">' . esc_attr( $text_off ) . '</span>';
			echo '<span class="sp_wqv--ball"></span>';
			echo '<input type="text" name="' . esc_attr( $this->field_name() ) . '" value="' . esc_attr( $this->value ) . '"' . $this->field_attributes() . ' />';
			echo '</div>';

			echo ( ! empty( $this->field['label'] ) ) ? '<span class="sp_wqv--label">' . esc_attr( $this->field['label'] ) . '</span>' : '';

			echo wp_kses_post( $this->field_after() );

		}

	}
}
