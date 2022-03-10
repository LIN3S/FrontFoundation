/*
 * This file is part of the Front Foundation package.
 *
 * Copyright (c) 2017-present LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Mikel Tuesta <mikeltuesta@gmail.com>
 */

import React from 'react';
import PropTypes from 'prop-types';
import FormSelect from './../../atoms/FormSelect/FormSelect';
import ResizeAware from './../../hoc/ResizeAware';

const optionShape = PropTypes.shape({
  label: PropTypes.string,
  value: PropTypes.string,
});

class FormGroupSelect extends React.Component {

  static propTypes = {
    enabled: PropTypes.bool,
    filterValue: PropTypes.string,
    filterable: PropTypes.bool,
    id: PropTypes.string.isRequired,
    label: PropTypes.string.isRequired,
    loading: PropTypes.bool,
    onInputChanged: PropTypes.func,
    onOptionSelected: PropTypes.func.isRequired,
    options: PropTypes.arrayOf(optionShape),
    outsideClickToCloseEnabled: PropTypes.bool,
    placeholder: PropTypes.string,
    required: PropTypes.bool,
    selectedOption: optionShape,
    validationCustomErrorMessages: PropTypes.arrayOf(PropTypes.shape({
      errorCode: PropTypes.string,
      message: PropTypes.string,
    })),
    validationEnabled: PropTypes.bool,
    validationPattern: PropTypes.string,
    validationMessageRequired: PropTypes.string,
    validationMessageNotValid: PropTypes.string,
  };

  static defaultProps = {
    enabled: true,
    filterValue: '',
    filterable: false,
    loading: false,
    outsideClickToCloseEnabled: true,
    required: false,
    validationEnabled: false,
    validationMessageRequired: '',
    validationMessageNotValid: '',
    validationPattern: '',
  };

  optionsAreEqual(props, nextProps) {
    return props !== undefined && props.options.length === nextProps.options.length && props.options.every(option =>
      nextProps.options.find(nextPropsOption => nextPropsOption.label === option.label && nextPropsOption.value === option.value));
  }

  shouldComponentUpdate(nextProps) {
    const {
      enabled,
      filterValue,
      filterable,
      id,
      label,
      loading,
      onInputChanged,
      onOptionSelected,
      outsideClickToCloseEnabled,
      placeholder,
      required,
      selectedOption,
      validationEnabled,
      validationPattern,
      validationMessageRequired,
      validationMessageNotValid,
      validationCustomErrorMessages,
    } = this.props;

    return enabled !== nextProps.enabled ||
      filterValue !== nextProps.filterValue ||
      filterable !== nextProps.filterable ||
      id !== nextProps.id ||
      label !== nextProps.label ||
      loading !== nextProps.loading ||
      placeholder !== nextProps.placeholder ||
      !this.optionsAreEqual(this.props, nextProps) ||
      onInputChanged !== nextProps.onInputChanged ||
      onOptionSelected !== nextProps.onOptionSelected ||
      outsideClickToCloseEnabled !== nextProps.outsideClickToCloseEnabled ||
      required !== nextProps.required ||
      selectedOption !== nextProps.selectedOption ||
      validationEnabled !== nextProps.validationEnabled ||
      validationPattern !== nextProps.validationPattern ||
      validationMessageRequired !== nextProps.validationMessageRequired ||
      validationCustomErrorMessages !== nextProps.validationCustomErrorMessages ||
      validationMessageNotValid !== nextProps.validationMessageNotValid;
  }

  render() {
    const {
      label, id, required, validationMessageRequired, validationMessageNotValid, validationCustomErrorMessages,
    } = this.props;

    return (
      <div className="form-group-select">
        <div className="form-group-select__label">
          <label className="form-label" htmlFor={id}>
            {required &&
            <span className="form-label__required">*</span>}
            {label}
          </label>
        </div>
        <ResizeAware render={(props) =>
          <FormSelect windowHeight={props.windowHeight} windowWidth={props.windowWidth} {...this.props} />
        }/>
        <div className="form-group-select__errors">
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
      </div>
    );
  }
}

export default FormGroupSelect;
