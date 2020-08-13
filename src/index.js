/**
 * External dependencies.
 */
import { registerFieldType } from '@carbon-fields/core';

/**
 * Internal dependencies.
 */
import './style.scss';
import RichInputField from './main';

registerFieldType( 'rich_input', RichInputField );
