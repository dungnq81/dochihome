<?php if ( ! defined( 'ABSPATH' ) ) {
	die; } // Cannot access directly.
/**
 *
 * Field: image_select
 *
 * @since 1.0.0
 * @version 1.0.0
 */
if ( ! class_exists( 'SP_WQV_Framework_Field_image_select' ) ) {
	class SP_WQV_Framework_Field_image_select extends SP_WQV_Framework_Fields {

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
					'multiple' => false,
					'inline'   => false,
					'options'  => array(),
				)
			);

			$inline = ( $args['inline'] ) ? ' sp_wqv--inline-list' : '';

			$value = ( is_array( $this->value ) ) ? $this->value : array_filter( (array) $this->value );

			echo wp_kses_post( $this->field_before() );

			if ( ! empty( $args['options'] ) ) {

				echo '<div class="sp_wqv-siblings sp_wqv--image-group' . esc_attr( $inline ) . '" data-multiple="' . esc_attr( $args['multiple'] ) . '">';

				$num = 1;

				foreach ( $args['options'] as $key => $option ) {

					$type           = ( $args['multiple'] ) ? 'checkbox' : 'radio';
					$extra          = ( $args['multiple'] ) ? '[]' : '';
					$active         = ( in_array( $key, $value ) ) ? ' sp_wqv--active' : '';
					$checked        = ( in_array( $key, $value ) ) ? ' checked' : '';
					$pro_only_class = ( isset( $option['pro_only'] ) && $option['pro_only'] == true ) ? ' sp_wqv-pro-only' : '';

					echo '<div class="sp_wqv--sibling sp_wqv--image' . esc_attr( $active ) . $pro_only_class . '" title="' . ( isset( $option['option_name'] ) ? esc_html( $option['option_name'] ) : '' ) . '">';
					echo '<figure>';
					echo '<img src="' . $option['image'] . '" alt="img-' . esc_attr( $num++ ) . '" />';
					echo '<input type="' . esc_attr( $type ) . '" name="' . esc_attr( $this->field_name( $extra ) ) . '" value="' . esc_attr( $key ) . '"' . $this->field_attributes() . esc_attr( $checked ) . '/>';
					if ( isset( $option['option_name'] ) ) {
						echo '<p>' . esc_html( $option['option_name'] ) . '</p>';
					}
					echo '</figure>';
					echo '</div>';

				}

				echo '</div>';

			}

			echo wp_kses_post( $this->field_after() );

		}

		// public function output() {

		// $output    = '';
		// $bg_image  = array();
		// $important = ( ! empty( $this->field['output_important'] ) ) ? '!important' : '';
		// $elements  = ( is_array( $this->field['output'] ) ) ? join( ',', $this->field['output'] ) : $this->field['output'];

		// if ( ! empty( $elements ) && isset( $this->value ) && $this->value !== '' ) {
		// $output = $elements . '{background-image:url(' . $this->value . ')' . $important . ';}';
		// }

		// $this->parent->output_css .= $output;

		// return $output;

		// }

	}
}
