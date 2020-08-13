<?php

namespace Carbon_Field_Rich_Input;

use Carbon_Fields\Carbon_Fields;
use Carbon_Field_Rich_Input\Rich_Input_Field;

define( 'Carbon_Field_Rich_Input\\DIR', __DIR__ );
define( 'CARBON_RICH_INPUT_VERSION', '1.0.0');

if ( ! is_cli() ) {
	Carbon_Fields::extend(
		Rich_Input_Field::class,
		function ( $container ) {
			return new Rich_Input_Field(
				$container['arguments']['type'],
				$container['arguments']['name'],
				$container['arguments']['label']
			);
		}
	);
}

/**
 * Check if process is running in cli
 *
 * @return bool
 */

function is_cli() {
	if ( defined( 'STDIN' ) ) {
		return true;
	}
	if ( php_sapi_name() === 'cli' ) {
		return true;
	}
	if ( ! array_key_exists( 'REQUEST_METHOD', $_SERVER ) ) {
		return true;
	}

	return false;
}

