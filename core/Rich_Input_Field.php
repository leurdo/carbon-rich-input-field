<?php

namespace Carbon_Field_Rich_Input;

use Carbon_Fields\Carbon_Fields;
use Carbon_Fields\Field\Field;

/**
 * Class Taxonomy_Field
 *
 * @package Carbon_Field_Taxonomy
 */
class Rich_Input_Field extends Field {
	/**
	 * {@inheritDoc}
	 */
	protected $allowed_attributes = array( 'list', 'max', 'maxLength', 'min', 'pattern', 'placeholder', 'readOnly', 'step', 'type' );


	/**
	 * Array of special chars for buttons
	 *
	 * @var array
	 */
	private $buttons = [];

	/**
	 * Prepare the field type for use.
	 * Called once per field type when activated.
	 *
	 * @static
	 * @access public
	 *
	 * @return void
	 */
	public static function field_type_activated() {
		$dir    = DIR . '/languages/';
		$locale = get_locale();
		$path   = $dir . $locale . '.mo';
		load_textdomain( 'carbon-field-rich-input', $path );
	}

	/**
	 * Enqueue scripts and styles in admin.
	 * Called once per field type.
	 *
	 * @static
	 * @access public
	 *
	 * @return void
	 */
	public static function admin_enqueue_scripts() {
		$root_uri = Carbon_Fields::directory_to_url( DIR );

		// Enqueue field styles.
		wp_enqueue_style( 'carbon-field-rich-input', $root_uri . '/build/bundle.min.css', array(), CARBON_RICH_INPUT_VERSION );

		// Enqueue field scripts.
		wp_enqueue_script( 'carbon-field-rich-input', $root_uri . '/build/bundle.min.js', array( 'carbon-fields-core' ), CARBON_RICH_INPUT_VERSION, true );
	}

	/**
	 * {@inheritDoc}
	 */
	public function to_json( $load ) {
		$field_data = parent::to_json( $load );
		$field_data = array_merge(
			$field_data,
			[
				'buttons' => $this->buttons
			]
		);

		return $field_data;
	}

	/**
	 * Configuration method setting array of special chars for buttons
	 *
	 * @param $buttons
	 *
	 * @return $this
	 */
	public function set_buttons( $buttons ) {
		$this->buttons = $buttons;

		return $this;
	}
}
