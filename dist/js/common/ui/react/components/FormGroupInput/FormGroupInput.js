'use strict';

Object.defineProperty(exports, "__esModule", {
  value: true
});

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

var _react = require('react');

var _react2 = _interopRequireDefault(_react);

var _propTypes = require('prop-types');

var _propTypes2 = _interopRequireDefault(_propTypes);

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
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                * @author Mikel Tuesta <mikel@gmail.com>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                */

var FormGroup = function (_React$Component) {
  _inherits(FormGroup, _React$Component);

  function FormGroup(props) {
    _classCallCheck(this, FormGroup);

    // bre-bind method's context
    var _this = _possibleConstructorReturn(this, (FormGroup.__proto__ || Object.getPrototypeOf(FormGroup)).call(this, props));

    _this.onInputChange = _this.onInputChange.bind(_this);
    return _this;
  }

  _createClass(FormGroup, [{
    key: 'onInputChange',
    value: function onInputChange(event) {
      event.persist();
      this.props.onChanged(event.target.value);
    }
  }, {
    key: 'shouldComponentUpdate',
    value: function shouldComponentUpdate(nextProps) {
      var _props = this.props,
          enabled = _props.enabled,
          id = _props.id,
          label = _props.label,
          required = _props.required,
          type = _props.type,
          validationEnabled = _props.validationEnabled,
          validationPattern = _props.validationPattern,
          validationMessageRequired = _props.validationMessageRequired,
          validationMessageNotValid = _props.validationMessageNotValid,
          validationCustomErrorMessages = _props.validationCustomErrorMessages,
          value = _props.value;


      return enabled !== nextProps.enabled || id !== nextProps.id || label !== nextProps.label || required !== nextProps.required || type !== nextProps.type || validationEnabled !== nextProps.validationEnabled || validationPattern !== nextProps.validationPattern || validationMessageRequired !== nextProps.validationMessageRequired || validationMessageNotValid !== nextProps.validationMessageNotValid || validationCustomErrorMessages !== nextProps.validationCustomErrorMessages || value !== nextProps.value;
    }
  }, {
    key: 'render',
    value: function render() {
      var _this2 = this;

      var _props2 = this.props,
          autoComplete = _props2.autoComplete,
          enabled = _props2.enabled,
          id = _props2.id,
          label = _props2.label,
          required = _props2.required,
          type = _props2.type,
          validationEnabled = _props2.validationEnabled,
          validationPattern = _props2.validationPattern,
          validationMessageRequired = _props2.validationMessageRequired,
          validationMessageNotValid = _props2.validationMessageNotValid,
          validationCustomErrorMessages = _props2.validationCustomErrorMessages,
          placeholder = _props2.placeholder,
          value = _props2.value;


      var baseClassName = 'form-group-input',
          className = '' + baseClassName + (!enabled ? ' form-group-input--disabled' : '');

      return _react2.default.createElement(
        'div',
        { className: className },
        _react2.default.createElement(
          'div',
          { className: 'form-group-input__label' },
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
        _react2.default.createElement('input', {
          autoComplete: autoComplete,
          className: 'form-input',
          'data-validate': validationEnabled ? true : null,
          'data-validate-pattern': validationEnabled ? validationPattern : null,
          disabled: !enabled,
          id: id,
          name: id,
          onChange: this.onInputChange,
          placeholder: placeholder,
          ref: function ref(input) {
            _this2.input = input;
          },
          required: required,
          type: type,
          value: value }),
        _react2.default.createElement(
          'div',
          { className: 'form-group-input__errors' },
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

  return FormGroup;
}(_react2.default.Component);

FormGroup.propTypes = {
  autoComplete: _propTypes2.default.string,
  enabled: _propTypes2.default.bool,
  id: _propTypes2.default.string.isRequired,
  label: _propTypes2.default.string.isRequired,
  onChanged: _propTypes2.default.func,
  placeholder: _propTypes2.default.string,
  required: _propTypes2.default.bool,
  type: _propTypes2.default.string,
  validationCustomErrorMessages: _propTypes2.default.arrayOf(_propTypes2.default.shape({
    errorCode: _propTypes2.default.string,
    message: _propTypes2.default.string
  })),
  validationEnabled: _propTypes2.default.bool,
  validationPattern: _propTypes2.default.string,
  validationMessageRequired: _propTypes2.default.string,
  validationMessageNotValid: _propTypes2.default.string,
  value: _propTypes2.default.string
};
FormGroup.defaultProps = {
  autoComplete: 'new-password', // This will prevent the browsers to autoComplete the input.
  enabled: true,
  onChanged: function onChanged() {},
  placeholder: '',
  required: false,
  type: 'text',
  validationCustomErrorMessages: null,
  validationEnabled: false,
  validationMessageRequired: '',
  validationMessageNotValid: '',
  validationPattern: '',
  value: ''
};
exports.default = FormGroup;