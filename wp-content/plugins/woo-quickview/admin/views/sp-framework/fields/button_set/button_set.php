<?php if ( ! defined( 'ABSPATH' ) ) {
	die; } // Cannot access directly.
/**
 *
 * Field: button_set
 *
 * @since 1.0.0
 * @version 1.0.0
 */
if ( ! class_exists( 'SP_WQV_Framework_Field_button_set' ) ) {
	class SP_WQV_Framework_Field_button_set extends SP_WQV_Framework_Fields {

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
					'multiple'   => false,
					'options'    => array(),
					'query_args' => array(),
				)
			);

			$value = ( is_array( $this->value ) ) ? $this->value : array_filter( (array) $this->value );

			echo wp_kses_post( $this->field_before() );

			if ( isset( $this->field['options'] ) ) {

				$options = $this->field['options'];
				$options = ( is_array( $options ) ) ? $options : array_filter( $this->field_data( $options, false, $args['query_args'] ) );

				if ( is_array( $options ) && ! empty( $options ) ) {

					echo '<div class="sp_wqvp-siblings sp_wqvp--button-group" data-multiple="' . esc_attr( $args['multiple'] ) . '">';

					foreach ( $options as $key => $option ) {

						$type           = ( $args['multiple'] ) ? 'checkbox' : 'radio';
						$extra          = ( $args['multiple'] ) ? '[]' : '';
						$active         = ( in_array( $key, $value ) || ( empty( $value ) && empty( $key ) ) ) ? ' sp_wqvp--active' : '';
						$checked        = ( in_array( $key, $value ) || ( empty( $value ) && empty( $key ) ) ) ? ' checked' : '';
						$pro_only_class = ( isset( $option['pro_only'] ) && $option['pro_only'] == true ) ? ' only_pro' : '';

						echo '<div class="sp_wqvp--sibling sp_wqvp--button' . esc_attr( $active ) . $pro_only_class . '">';
						echo '<input type="' . esc_attr( $type ) . '" name="' . esc_attr( $this->field_name( $extra ) ) . '" value="' . esc_attr( $key ) . '"' . $this->field_attributes() . esc_attr( $checked ) . '/>';
						if ( ! empty( $option['option_name'] ) ) {
							echo $option['option_name'];
						} else {
							echo $option;
						}
						echo '</div>';

					}

					echo '</div>';

				} else {

					echo ( ! empty( $this->field['empty_message'] ) ) ? esc_attr( $this->field['empty_message'] ) : esc_html__( 'No data available.', 'woo-quickview' );

				}
			}

			echo wp_kses_post( $this->field_after() );

		}

	}
}
