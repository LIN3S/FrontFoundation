'use strict';

Object.defineProperty(exports, "__esModule", {
  value: true
});

var _extends = Object.assign || function (target) { for (var i = 1; i < arguments.length; i++) { var source = arguments[i]; for (var key in source) { if (Object.prototype.hasOwnProperty.call(source, key)) { target[key] = source[key]; } } } return target; };

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

var _react = require('react');

var _react2 = _interopRequireDefault(_react);

var _propTypes = require('prop-types');

var _propTypes2 = _interopRequireDefault(_propTypes);

var _FormSelect = require('./../../atoms/FormSelect/FormSelect');

var _FormSelect2 = _interopRequireDefault(_FormSelect);

var _ResizeAware = require('./../../hoc/ResizeAware');

var _ResizeAware2 = _interopRequireDefault(_ResizeAware);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _possibleConstructorReturn(self, call) { if (!self) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return call && (typeof call === "object" || typeof call === "function") ? call : self; }

function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function, not " + typeof superClass); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, enumerable: false, writable: true, configurable: true } }); if (superClass) Object.setPrototypeOf ? Object.setPrototypeOf(subClass, superClass) : subClass.__proto__ = superClass; } /*
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                * This file is part of the Front Foundation package.
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                *
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                * Copyright (c) 2017-present LIN3S <info@lin3s.com>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                *
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                * For the full copyright and license information, please view the LICENSE
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                * file that was distributed with this source code.
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                *
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                * @author Mikel Tuesta <mikeltuesta@gmail.com>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                */

var optionShape = _propTypes2.default.shape({
  label: _propTypes2.default.string,
  value: _propTypes2.default.string
});

var FormGroupSelect = function (_React$Component) {
  _inherits(FormGroupSelect, _React$Component);

  function FormGroupSelect() {
    _classCallCheck(this, FormGroupSelect);

    return _possibleConstructorReturn(this, (FormGroupSelect.__proto__ || Object.getPrototypeOf(FormGroupSelect)).apply(this, arguments));
  }

  _createClass(FormGroupSelect, [{
    key: 'optionsAreEqual',
    value: function optionsAreEqual(props, nextProps) {
      return props !== undefined && props.options.length === nextProps.options.length && props.options.every(function (option) {
        return nextProps.options.find(function (nextPropsOption) {
          return nextPropsOption.label === option.label && nextPropsOption.value === option.value;
        });
      });
    }
  }, {
    key: 'shouldComponentUpdate',
    value: function shouldComponentUpdate(nextProps) {
      var _props = this.props,
          enabled = _props.enabled,
          filterValue = _props.filterValue,
          filterable = _props.filterable,
          id = _props.id,
          label = _props.label,
          loading = _props.loading,
          onInputChanged = _props.onInputChanged,
          onOptionSelected = _props.onOptionSelected,
          outsideClickToCloseEnabled = _props.outsideClickToCloseEnabled,
          placeholder = _props.placeholder,
          required = _props.required,
          selectedOption = _props.selectedOption,
          validationEnabled = _props.validationEnabled,
          validationPattern = _props.validationPattern,
          validationMessageRequired = _props.validationMessageRequired,
          validationMessageNotValid = _props.validationMessageNotValid,
          validationCustomErrorMessages = _props.validationCustomErrorMessages;


      return enabled !== nextProps.enabled || filterValue !== nextProps.filterValue || filterable !== nextProps.filterable || id !== nextProps.id || label !== nextProps.label || loading !== nextProps.loading || placeholder !== nextProps.placeholder || !this.optionsAreEqual(this.props, nextProps) || onInputChanged !== nextProps.onInputChanged || onOptionSelected !== nextProps.onOptionSelected || outsideClickToCloseEnabled !== nextProps.outsideClickToCloseEnabled || required !== nextProps.required || selectedOption !== nextProps.selectedOption || validationEnabled !== nextProps.validationEnabled || validationPattern !== nextProps.validationPattern || validationMessageRequired !== nextProps.validationMessageRequired || validationCustomErrorMessages !== nextProps.validationCustomErrorMessages || validationMessageNotValid !== nextProps.validationMessageNotValid;
    }
  }, {
    key: 'render',
    value: function render() {
      var _this2 = this;

      var _props2 = this.props,
          label = _props2.label,
          id = _props2.id,
          required = _props2.required,
          validationMessageRequired = _props2.validationMessageRequired,
          validationMessageNotValid = _props2.validationMessageNotValid,
          validationCustomErrorMessages = _props2.validationCustomErrorMessages;


      return _react2.default.createElement(
        'div',
        { className: 'form-group-select' },
        _react2.default.createElement(
          'div',
          { className: 'form-group-select__label' },
          _react2.default.createElement(
            'label',
            { className: 'form-label', htmlFor: id },
            required && _react2.default.createElement(
              'span',
              { className: 'form-label__required' },
              '*'
            ),
            label
          )
        ),
        _react2.default.createElement(_ResizeAware2.default, { render: function render(props) {
            return _react2.default.createElement(_FormSelect2.default, _extends({ windowHeight: props.windowHeight, windowWidth: props.windowWidth }, _this2.props));
          } }),
        _react2.default.createElement(
          'div',
          { className: 'form-group-select__errors' },
          validationMessageRequired && _react2.default.createElement(
            'p',
            { className: 'form-error form-error--not-filled' },
            validationMessageRequired
          ),
          validationMessageNotValid && _react2.default.createElement(
            'p',
            { className: 'form-error form-error--not-valid' },
            validationMessageNotValid
          ),
          validationCustomErrorMessages && validationCustomErrorMessages.map(function (customErrorMessage, index) {
            return _react2.default.createElement(
              'p',
              {
                className: 'form-error form-error--' + customErrorMessage.errorCode,
                key: 'validation-custom-error-' + index
              },
              customErrorMessage.message
            );
          })
        )
      );
    }
  }]);

  return FormGroupSelect;
}(_react2.default.Component);

FormGroupSelect.propTypes = {
  enabled: _propTypes2.default.bool,
  filterValue: _propTypes2.default.string,
  filterable: _propTypes2.default.bool,
  id: _propTypes2.default.string.isRequired,
  label: _propTypes2.default.string.isRequired,
  loading: _propTypes2.default.bool,
  onInputChanged: _propTypes2.default.func,
  onOptionSelected: _propTypes2.default.func.isRequired,
  options: _propTypes2.default.arrayOf(optionShape),
  outsideClickToCloseEnabled: _propTypes2.default.bool,
  placeholder: _propTypes2.default.string,
  required: _propTypes2.default.bool,
  selectedOption: optionShape,
  validationCustomErrorMessages: _propTypes2.default.arrayOf(_propTypes2.default.shape({
    errorCode: _propTypes2.default.string,
    message: _propTypes2.default.string
  })),
  validationEnabled: _propTypes2.default.bool,
  validationPattern: _propTypes2.default.string,
  validationMessageRequired: _propTypes2.default.string,
  validationMessageNotValid: _propTypes2.default.string
};
FormGroupSelect.defaultProps = {
  enabled: true,
  filterValue: '',
  filterable: false,
  loading: false,
  outsideClickToCloseEnabled: true,
  required: false,
  validationEnabled: false,
  validationMessageRequired: '',
  validationMessageNotValid: '',
  validationPattern: ''
};
exports.default = FormGroupSelect;