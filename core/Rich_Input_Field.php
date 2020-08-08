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
}
