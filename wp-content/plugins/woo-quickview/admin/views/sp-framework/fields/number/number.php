<?php if ( ! defined( 'ABSPATH' ) ) {
	die; } // Cannot access directly.
/**
 *
 * Field: number
 *
 * @since 1.0.0
 * @version 1.0.0
 */
if ( ! class_exists( 'SP_WQV_Framework_Field_number' ) ) {
	class SP_WQV_Framework_Field_number extends SP_WQV_Framework_Fields {

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

			$args = wp_parse_args(
				$this->field,
				array(
					'unit' => '',
				)
			);

			echo wp_kses_post( $this->field_before() );
			echo '<div class="sp_wqv--wrap">';
			echo '<input type="number" name="' . esc_attr( $this->field_name() ) . '" value="' . esc_attr( $this->value ) . '"' . $this->field_attributes( array( 'class' => 'sp_wqv-input-number' ) ) . ' step="any" />';
			echo ( ! empty( $args['unit'] ) ) ? '<span class="sp_wqv--unit">' . esc_attr( $args['unit'] ) . '</span>' : '';
			echo '</div>';
			echo wp_kses_post( $this->field_after() );

		}

		public function output() {

			$output    = '';
			$elements  = ( is_array( $this->field['output'] ) ) ? $this->field['output'] : array_filter( (array) $this->field['output'] );
			$important = ( ! empty( $this->field['output_important'] ) ) ? '!important' : '';
			$mode      = ( ! empty( $this->field['output_mode'] ) ) ? $this->field['output_mode'] : 'width';
			$unit      = ( ! empty( $this->field['unit'] ) ) ? $this->field['unit'] : 'px';

			if ( ! empty( $elements ) && isset( $this->value ) && $this->value !== '' ) {
				foreach ( $elements as $key_property => $element ) {
					if ( is_numeric( $key_property ) ) {
						if ( $mode ) {
							  $output = implode( ',', $elements ) . '{' . $mode . ':' . $this->value . $unit . $important . ';}';
						}
						break;
					} else {
						$output .= $element . '{' . $key_property . ':' . $this->value . $unit . $important . '}';
					}
				}
			}

			$this->parent->output_css .= $output;

			return $output;

		}

	}
}
