/*
 * This file is part of the Front Foundation package.
 *
 * Copyright (c) 2017-present LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Mikel Tuesta <mikel@gmail.com>
 */

import React from 'react';
import PropTypes from 'prop-types';

class FormGroup extends React.Component {

  static propTypes = {
    enabled: PropTypes.bool,
    id: PropTypes.string.isRequired,
    label: PropTypes.string.isRequired,
    onChanged: PropTypes.func,
    placeholder: PropTypes.string,
    required: PropTypes.bool,
    type: PropTypes.string,
    validationCustomErrorMessages: PropTypes.arrayOf(PropTypes.shape({
      errorCode: PropTypes.string,
      message: PropTypes.string,
    })),
    validationEnabled: PropTypes.bool,
    validationPattern: PropTypes.string,
    validationMessageRequired: PropTypes.string,
    validationMessageNotValid: PropTypes.string,
    value: PropTypes.string,
  };

  static defaultProps = {
    enabled: true,
    onChanged: () => {
    },
    placeholder: '',
    required: false,
    type: 'text',
    validationCustomErrorMessages: null,
    validationEnabled: false,
    validationMessageRequired: '',
    validationMessageNotValid: '',
    validationPattern: '',
    value: '',
  };

  constructor(props) {
    super(props);

    // bre-bind method's context
    this.onInputChange = this.onInputChange.bind(this);
  }

  onInputChange(event) {
    event.persist();
    this.props.onChanged(event.target.value);
  }

  shouldComponentUpdate(nextProps) {
    const {
      enabled,
      id,
      label,
      required,
      type,
      validationEnabled,
      validationPattern,
      validationMessageRequired,
      validationMessageNotValid,
      validationCustomErrorMessages,
      value,
    } = this.props;

    return enabled !== nextProps.enabled ||
      id !== nextProps.id ||
      label !== nextProps.label ||
      required !== nextProps.required ||
      type !== nextProps.type ||
      validationEnabled !== nextProps.validationEnabled ||
      validationPattern !== nextProps.validationPattern ||
      validationMessageRequired !== nextProps.validationMessageRequired ||
      validationMessageNotValid !== nextProps.validationMessageNotValid ||
      validationCustomErrorMessages !== nextProps.validationCustomErrorMessages ||
      value !== nextProps.value;
  }

  render() {
    const {
      enabled,
      id,
      label,
      required,
      type,
      validationEnabled,
      validationPattern,
      validationMessageRequired,
      validationMessageNotValid,
      validationCustomErrorMessages,
      placeholder,
      value,
    } = this.props;

    const
      baseClassName = 'form-group-input',
      className = `${baseClassName}${!enabled ? ' form-group-input--disabled' : ''}`;

    return (<div className={className}>
      <div className="form-group-input__label">
        <label className="form-label" htmlFor={id}>
          {required && <span className="form-label__required">*</span>}
          {label}
        </label>
      </div>
      <input
        autoComplete="off"
        className="form-input"
        data-validate={validationEnabled ? true : null}
        data-validate-pattern={validationEnabled ? validationPattern : null}
        disabled={!enabled}
        id={id}
        name={id}
        onChange={this.onInputChange}
        placeholder={placeholder}
        ref={input => {
          this.input = input;
        }}
        required={required}
        type={type}
        value={value}/>
      <div className="form-group-input__errors">
        {validationMessageRequired &&
        <p className="form-error form-error--not-filled">{validationMessageRequired}</p>}
        {validationMessageNotValid &&
        <p className="form-error form-error--not-valid">{validationMessageNotValid}</p>}
        {validationCustomErrorMessages && validationCustomErrorMessages.map((customErrorMessage, index) =>
          <p
            className={`form-error form-error--${customErrorMessage.errorCode}`}
            key={`validation-custom-error-${index}`}
          >{customErrorMessage.message}</p>)}
      </div>
    </div>);
  }

}

export default FormGroup;
