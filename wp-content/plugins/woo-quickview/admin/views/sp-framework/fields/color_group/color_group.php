<?php if ( ! defined( 'ABSPATH' ) ) {
	die; } // Cannot access directly.
/**
 *
 * Field: color_group
 *
 * @since 1.0.0
 * @version 1.0.0
 */
if ( ! class_exists( 'SP_WQV_Framework_Field_color_group' ) ) {
	class SP_WQV_Framework_Field_color_group extends SP_WQV_Framework_Fields {

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

			$options = ( ! empty( $this->field['options'] ) ) ? $this->field['options'] : array();

			echo wp_kses_post( $this->field_before() );

			if ( ! empty( $options ) ) {
				foreach ( $options as $key => $option ) {

					$color_value  = ( ! empty( $this->value[ $key ] ) ) ? $this->value[ $key ] : '';
					$default_attr = ( ! empty( $this->field['default'][ $key ] ) ) ? ' data-default-color="' . esc_attr( $this->field['default'][ $key ] ) . '"' : '';

					echo '<div class="sp_wqv--left sp_wqv-field-color">';
					echo '<div class="sp_wqv--title">' . $option . '</div>';
					echo '<input type="text" name="' . esc_attr( $this->field_name( '[' . $key . ']' ) ) . '" value="' . esc_attr( $color_value ) . '" class="sp_wqv-color"' . $default_attr . $this->field_attributes() . '/>';
					echo '</div>';

				}
			}

			echo wp_kses_post( $this->field_after() );

		}

	}
}
