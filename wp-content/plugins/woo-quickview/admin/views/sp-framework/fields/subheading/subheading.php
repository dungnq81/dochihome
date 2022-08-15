<?php if ( ! defined( 'ABSPATH' ) ) {
	die; } // Cannot access directly.
/**
 *
 * Field: subheading
 *
 * @since 1.0.0
 * @version 1.0.0
 */
if ( ! class_exists( 'SP_WQV_Framework_Field_subheading' ) ) {
	class SP_WQV_Framework_Field_subheading extends SP_WQV_Framework_Fields {

		public function __construct( $field, $value = '', $unique = '', $where = '', $parent = '' ) {
			parent::__construct( $field, $value, $unique, $where, $parent );
		}


		/**
		 * Render
		 *
		 * @return void
		 */
		public function render() {

			echo ( ! empty( $this->field['content'] ) ) ? $this->field['content'] : '';

		}

	}
}
