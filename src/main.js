/**
 * External dependencies.
 */
import { Component } from '@wordpress/element';
import Toolbar from './toolbar';

class RichInputField extends Component {

	state = {
		value: this.props.value,
		hasFocus: false
	};

	/**
	 * Handles the change of the input.
	 *
	 * @param  {Object} e
	 * @return {void}
	 */
	handleChange = ( e ) => {
		const { id, onChange } = this.props;

		this.setState({
			value: e.target.value,
		});
		onChange( id, e.target.value );
	}

	/**
	 * Handles focus/blur events.
	 *
	 * @return {void}
	 */
	handleFocus = () => {
		const { hasFocus } = this.state;

		this.setState({
			hasFocus: !hasFocus,
		});
	}

	/**
	 * Handles focus/blur events.
	 *
	 * @return {void}
	 */
	doInsert = (e) => {
		e.preventDefault();

		const { value } = this.state;

		this.setState({
			value: value + e.target.textContent.trim(),
			hasFocus: true
		})

	}

	/**
	 * Render the component.
	 *
	 * @return {Object}
	 */
	render() {
		const {
			id,
			name,
			field
		} = this.props;

		const { value, hasFocus } = this.state;

		return (
		<>
			<input
				type="text"
				id={ id }
				name={ name }
				value={ value }
				className="cf-text__input"
				onChange={ this.handleChange }
				onFocus={ this.handleFocus }
				onBlur={ this.handleFocus }
				autoComplete="off"
				{ ...field.attributes }
			/>
			{ hasFocus ? (
					<Toolbar
						doInsert={ this.doInsert }
						buttons={ field.buttons }
					/>
				) :
					null
			}
		</>
		);
	}

}

export default RichInputField;
