/**
 * External dependencies.
 */
import { Component } from '@wordpress/element';

class Toolbar extends Component {

	/**
	 * Render the component.
	 *
	 * @return {Object}
	 */
	render() {
		const { doInsert, buttons } = this.props;

		return (
			<>
				{ buttons.map(button => <button className='button' key={button} onMouseDown={ doInsert }> {button} </button>) }
			</>
		);
	}
}

export default Toolbar;
