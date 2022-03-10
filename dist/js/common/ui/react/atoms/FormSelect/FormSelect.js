'use strict';

Object.defineProperty(exports, "__esModule", {
  value: true
});

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

var _react = require('react');

var _react2 = _interopRequireDefault(_react);

var _propTypes = require('prop-types');

var _propTypes2 = _interopRequireDefault(_propTypes);

var _ArrowDown = require('./../../svg/ArrowDown');

var _ArrowDown2 = _interopRequireDefault(_ArrowDown);

var _Loader = require('./../Loader/Loader');

var _Loader2 = _interopRequireDefault(_Loader);

var _dispatchNativeEvent = require('../../../../dom/dispatchNativeEvent');

var _dispatchNativeEvent2 = _interopRequireDefault(_dispatchNativeEvent);

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

var isMobile = function isMobile(viewportWidth) {
  return viewportWidth < 1024;
};

var optionShape = _propTypes2.default.shape({
  label: _propTypes2.default.string,
  value: _propTypes2.default.string
});

var FormSelect = function (_React$Component) {
  _inherits(FormSelect, _React$Component);

  function FormSelect(props) {
    _classCallCheck(this, FormSelect);

    var _this = _possibleConstructorReturn(this, (FormSelect.__proto__ || Object.getPrototypeOf(FormSelect)).call(this, props));

    _this.optionNodesRefs = [];

    _this.state = {
      dataRendered: false,
      editingInput: false,
      focused: false,
      opened: false,
      touched: false,
      selectedOption: props.selectedOption || props.options[0],
      hoveredOption: null,
      mouseOverListenerEnabled: true
    };

    // bre-bind method's context
    _this.onFocus = _this.onFocus.bind(_this);
    _this.onClick = _this.onClick.bind(_this);
    _this.onOutsideClick = _this.onOutsideClick.bind(_this);
    _this.onLabelClick = _this.onLabelClick.bind(_this);
    _this.onInputChange = _this.onInputChange.bind(_this);
    _this.onKeyDown = _this.onKeyDown.bind(_this);
    _this.onMouseDown = _this.onMouseDown.bind(_this);
    _this.onOptionMouseMove = _this.onOptionMouseMove.bind(_this);
    _this.onInputFocus = _this.onInputFocus.bind(_this);
    return _this;
  }

  _createClass(FormSelect, [{
    key: 'onMouseDown',
    value: function onMouseDown() {
      this.mouseIsDown = true;
    }
  }, {
    key: 'onInputFocus',
    value: function onInputFocus(event) {
      event.persist();
      event.stopPropagation();
    }
  }, {
    key: 'onFocus',
    value: function onFocus() {
      this.setState({
        focused: true
      });

      if (this.tabHit) {
        return;
      }

      if (this.mouseIsDown) {
        return;
      }

      this.openSelect();
    }
  }, {
    key: 'onInputChange',
    value: function onInputChange(event) {
      event.persist();
      this.props.onInputChanged(event.target.value);
    }
  }, {
    key: 'onClick',
    value: function onClick(event) {
      this.mouseIsDown = false;

      if (!this.props.outsideClickToCloseEnabled) {
        return;
      }

      event.persist();
      event.stopPropagation();
    }
  }, {
    key: 'onLabelClick',
    value: function onLabelClick() {
      if (this.state.opened) {
        this.closeSelect();
      } else {
        this.openSelect();
      }
    }
  }, {
    key: 'onOutsideClick',
    value: function onOutsideClick() {
      this.closeSelect();
    }
  }, {
    key: 'onKeyDown',
    value: function onKeyDown(event) {
      var keyCode = event.which;

      if (!(keyCode === 40 || keyCode === 38 || keyCode === 13 || event.which === 9)) {
        return;
      }

      if (keyCode === 9) {
        // tab
        if (this.state.opened) {
          this.tabHit = true;
        }

        this.closeSelect();
        return;
      }

      if (!this.state.opened && this.state.focused && keyCode === 13) {
        this.openSelect();
        return;
      }

      var hoveredOption = this.state.hoveredOption;
      var options = this.props.options;


      var hoveredOptionIndex = options.indexOf(hoveredOption);

      if (keyCode === 40) {
        // down
        hoveredOptionIndex = hoveredOptionIndex < 0 ? 0 : hoveredOptionIndex + 1 >= options.length ? options.length - 1 : hoveredOptionIndex + 1;

        this.setState({
          hoveredOption: options[hoveredOptionIndex],
          mouseOverListenerEnabled: false
        });

        this.optionNodesRefs[hoveredOptionIndex].scrollIntoView({ behaviour: 'smooth' });
      } else if (keyCode === 38) {
        // up
        hoveredOptionIndex = hoveredOptionIndex < 0 ? 0 : hoveredOptionIndex - 1 < 0 ? 0 : hoveredOptionIndex - 1;

        this.setState({
          hoveredOption: options[hoveredOptionIndex],
          mouseOverListenerEnabled: false
        });

        this.optionNodesRefs[hoveredOptionIndex].scrollIntoView({ behaviour: 'smooth' });
      } else if (keyCode === 13) {
        // enter
        this.onOptionSelected(hoveredOption);
      }
    }
  }, {
    key: 'onOptionSelected',
    value: function onOptionSelected(option) {
      if (!this.props.enabled) {
        return;
      }

      this.setState({
        selectedOption: option
      });

      this.props.onOptionSelected(option);

      this.closeSelect();
    }
  }, {
    key: 'onOptionMouseMove',
    value: function onOptionMouseMove() {
      if (this.state.mouseOverListenerEnabled) {
        return;
      }

      this.setState({
        mouseOverListenerEnabled: true
      });
    }
  }, {
    key: 'onOptionMouseOver',
    value: function onOptionMouseOver(option) {
      if (!this.props.enabled) {
        return;
      }

      this.setState({
        hoveredOption: option
      });
    }
  }, {
    key: 'openSelect',
    value: function openSelect() {
      var _this2 = this;

      if (!this.props.enabled) {
        return;
      }

      var _state = this.state,
          hoveredOption = _state.hoveredOption,
          selectedOption = _state.selectedOption;
      var options = this.props.options;


      if (this.props.filterable) {
        this.filterInput.focus();
      }

      this.setState(function () {
        return {
          opened: true,
          touched: true,
          editingInput: _this2.props.filterable,
          hoveredOption: selectedOption !== null ? selectedOption : hoveredOption !== null ? hoveredOption : options[0]
        };
      });

      this.setSelectFocusable(false);
    }
  }, {
    key: 'closeSelect',
    value: function closeSelect() {
      if (this.props.filterable) {
        this.filterInput.blur();
      }

      this.tabHit = false;

      this.setState(function () {
        return {
          editingInput: false,
          focused: false,
          opened: false
        };
      });

      this.setSelectFocusable(true);
    }
  }, {
    key: 'setSelectFocusable',
    value: function setSelectFocusable(focusable) {
      var _this3 = this;

      setTimeout(function () {
        _this3.domNode.tabIndex = focusable ? 0 : -1;
      }, 100);
    }
  }, {
    key: 'getOptionsContainerHeight',
    value: function getOptionsContainerHeight() {
      var windowWidth = this.props.windowWidth;


      var totalHeight = this.optionNodesRefs.reduce(function (accumulatedHeight, optionNodeRef) {
        return accumulatedHeight + (optionNodeRef !== null ? optionNodeRef.getBoundingClientRect().height : 0);
      }, 0);

      if (isMobile(windowWidth) && totalHeight > FormSelect.OPTIONS_CONTAINER_MAX_HEIGHT_MOBILE) {
        return FormSelect.OPTIONS_CONTAINER_MAX_HEIGHT_MOBILE;
      } else if (!isMobile(windowWidth) && totalHeight > FormSelect.OPTIONS_CONTAINER_MAX_HEIGHT_DESKTOP) {
        return FormSelect.OPTIONS_CONTAINER_MAX_HEIGHT_DESKTOP;
      }

      return totalHeight;
    }
  }, {
    key: 'getOptionsContainerNeedsOverflow',
    value: function getOptionsContainerNeedsOverflow(optionsContainerHeight) {
      var windowWidth = this.props.windowWidth;


      return isMobile(windowWidth) && optionsContainerHeight >= FormSelect.OPTIONS_CONTAINER_MAX_HEIGHT_MOBILE || !isMobile(windowWidth) && optionsContainerHeight >= FormSelect.OPTIONS_CONTAINER_MAX_HEIGHT_DESKTOP;
    }
  }, {
    key: 'getDangerousHtml',
    value: function getDangerousHtml(rawHtml) {
      return { __html: rawHtml };
    }
  }, {
    key: 'optionsAreEqual',
    value: function optionsAreEqual(props, nextProps) {
      return props !== undefined && props.options.length === nextProps.options.length && props.options.every(function (option) {
        return nextProps.options.find(function (nextPropsOption) {
          return nextPropsOption.label === option.label && nextPropsOption.value === option.value;
        });
      });
    }
  }, {
    key: 'componentWillReceiveProps',
    value: function componentWillReceiveProps(nextProps) {
      var optionsAreEqual = this.optionsAreEqual(this.props, nextProps),
          selectedOptionIsEqual = this.props.selectedOption === nextProps.selectedOption;

      this.setState(function (prevState) {
        var selectedOption = optionsAreEqual && nextProps.enabled ? selectedOptionIsEqual ? prevState.selectedOption : nextProps.selectedOption : nextProps.selectedOption || nextProps.options[0],
            hoveredOption = optionsAreEqual && nextProps.enabled ? prevState.selectedOption !== null ? prevState.selectedOption : prevState.hoveredOption : nextProps.options[0];

        return {
          dataRendered: !optionsAreEqual,
          editingInput: nextProps.enabled && prevState.editingInput,
          opened: nextProps.enabled && prevState.opened,
          selectedOption: selectedOption,
          hoveredOption: hoveredOption
        };
      });
    }
  }, {
    key: 'componentDidMount',
    value: function componentDidMount() {
      if (this.props.outsideClickToCloseEnabled) {
        window.addEventListener('click', this.onOutsideClick);
      }

      /* eslint-disable react/no-did-mount-set-state */
      this.setState({
        dataRendered: true
      });
      /* eslint-enable react/no-did-mount-set-state */
    }
  }, {
    key: 'componentWillUnmount',
    value: function componentWillUnmount() {
      if (this.props.outsideClickToCloseEnabled) {
        window.removeEventListener('click', this.onOutsideClick);
      }
    }
  }, {
    key: 'componentDidUpdate',
    value: function componentDidUpdate(prevProps, prevState) {
      if (!this.optionsAreEqual(prevProps, this.props)) {
        /* eslint-disable react/no-did-update-set-state */
        this.setState({
          dataRendered: false
        });
        /* eslint-enable react/no-did-update-set-state */
      }

      if (prevState.selectedOption !== this.state.selectedOption) {
        (0, _dispatchNativeEvent2.default)(this.hiddenInput, 'input');
      }
    }
  }, {
    key: 'shouldComponentUpdate',
    value: function shouldComponentUpdate(nextProps, nextState) {
      var _props = this.props,
          enabled = _props.enabled,
          filterValue = _props.filterValue,
          filterable = _props.filterable,
          id = _props.id,
          loading = _props.loading,
          onInputChanged = _props.onInputChanged,
          onOptionSelected = _props.onOptionSelected,
          options = _props.options,
          outsideClickToCloseEnabled = _props.outsideClickToCloseEnabled,
          placeholder = _props.placeholder,
          validationEnabled = _props.validationEnabled,
          validationPattern = _props.validationPattern,
          required = _props.required,
          selectedOption = _props.selectedOption;
      var _state2 = this.state,
          dataRendered = _state2.dataRendered,
          editingInput = _state2.editingInput,
          focused = _state2.focused,
          opened = _state2.opened,
          touched = _state2.touched,
          hoveredOption = _state2.hoveredOption,
          mouseOverListenerEnabled = _state2.mouseOverListenerEnabled;


      return enabled !== nextProps.enabled || filterValue !== nextProps.filterValue || filterable !== nextProps.filterable || id !== nextProps.id || placeholder !== nextProps.placeholder || loading !== nextProps.loading || onInputChanged !== nextProps.onInputChanged || onOptionSelected !== nextProps.onOptionSelected || outsideClickToCloseEnabled !== nextProps.outsideClickToCloseEnabled || validationEnabled !== nextProps.validationEnabled || validationPattern !== nextProps.validationPattern || required !== nextProps.required || selectedOption !== nextProps.selectedOption || !this.optionsAreEqual(this.props, nextProps) || dataRendered !== nextState.dataRendered || editingInput !== nextState.editingInput || focused !== nextState.focused || opened !== nextState.opened || touched !== nextState.touched || this.state.selectedOption !== nextState.selectedOption || hoveredOption !== nextState.hoveredOption || mouseOverListenerEnabled !== nextState.mouseOverListenerEnabled;
    }
  }, {
    key: 'render',
    value: function render() {
      var _this4 = this;

      /* eslint-disable react/no-danger */

      var _state3 = this.state,
          dataRendered = _state3.dataRendered,
          editingInput = _state3.editingInput,
          opened = _state3.opened,
          focused = _state3.focused,
          selectedOption = _state3.selectedOption,
          hoveredOption = _state3.hoveredOption,
          mouseOverListenerEnabled = _state3.mouseOverListenerEnabled;
      var _props2 = this.props,
          enabled = _props2.enabled,
          filterable = _props2.filterable,
          filterValue = _props2.filterValue,
          id = _props2.id,
          placeholder = _props2.placeholder,
          loading = _props2.loading,
          options = _props2.options,
          required = _props2.required,
          validationEnabled = _props2.validationEnabled,
          validationPattern = _props2.validationPattern;

      var formSelectBaseClassName = 'form-select',
          formSelectClassName = formSelectBaseClassName + '\n        ' + (opened && enabled ? ' form-select--opened' : '') + '\n        ' + (loading ? ' form-select--loading' : '') + '\n        ' + (!enabled ? ' form-select--disabled' : '') + '\n        ' + (filterable && editingInput ? ' form-select--editing-input' : '') + '\n        ' + (focused ? ' form-select--focused' : ''),
          selectLabel = selectedOption !== undefined && selectedOption !== null ? this.getDangerousHtml(selectedOption.label) : this.getDangerousHtml(options[0].label),
          optionsContainerHeight = opened ? this.getOptionsContainerHeight() : 0,
          needsOverflow = this.getOptionsContainerNeedsOverflow(optionsContainerHeight),
          optionsContainerClassName = 'form-select__options-container' + (!needsOverflow ? ' form-select__options-container--no-overflow' : '');

      return _react2.default.createElement(
        'div',
        { className: formSelectClassName,
          onClick: this.onClick,
          onFocus: this.onFocus,
          onKeyDown: this.onKeyDown,
          onMouseDown: this.onMouseDown,
          ref: function ref(domNode) {
            _this4.domNode = domNode;
          },
          tabIndex: '0' },
        _react2.default.createElement(
          'div',
          { className: 'form-select__loader' },
          _react2.default.createElement(_Loader2.default, null)
        ),
        _react2.default.createElement(
          'span',
          { className: 'form-select__dropdown-icon' },
          _react2.default.createElement(_ArrowDown2.default, null)
        ),
        filterable && _react2.default.createElement(
          'div',
          { className: 'form-select__input-container' },
          _react2.default.createElement('input', { className: 'form-input form-select__input',
            onChange: this.onInputChange,
            onFocus: this.onInputFocus,
            placeholder: placeholder,
            ref: function ref(input) {
              _this4.filterInput = input;
            },
            tabIndex: '-1',
            type: 'text',
            value: filterValue })
        ),
        _react2.default.createElement('div', { className: 'form-select__label',
          dangerouslySetInnerHTML: selectLabel,
          onClick: this.onLabelClick }),
        _react2.default.createElement(
          'div',
          { className: optionsContainerClassName, style: { height: optionsContainerHeight } },
          _react2.default.createElement(
            'div',
            { className: 'form-select__options' },
            options && options.map(function (option, index) {
              var onOptionMouseOver = mouseOverListenerEnabled ? _this4.onOptionMouseOver.bind(_this4, option) : null,
                  formOptionClassName = 'form-select__option\n                  ' + (selectedOption && option.value === selectedOption.value ? ' form-select__option--active' : '') + '\n                  ' + (hoveredOption && option.value === hoveredOption.value ? ' form-select__option--hover' : ''),
                  labelHtml = _this4.getDangerousHtml(option.label);

              return _react2.default.createElement('div', { className: formOptionClassName,
                dangerouslySetInnerHTML: labelHtml,
                key: 'form-select-view-' + index,
                onClick: _this4.onOptionSelected.bind(_this4, option),
                onMouseMove: _this4.onOptionMouseMove,
                onMouseOver: onOptionMouseOver,
                ref: function ref(optionNode) {
                  _this4.optionNodesRefs[index] = optionNode;
                } });
            })
          )
        ),
        _react2.default.createElement('input', { className: 'form-select__select',
          id: id,
          name: id,
          'data-validate': validationEnabled ? true : null,
          'data-validate-pattern': validationEnabled ? validationPattern : null,
          'data-validation-state-reference-selector': validationEnabled ? '.' + formSelectBaseClassName : null,
          ref: function ref(_ref) {
            _this4.hiddenInput = _ref;
          },
          required: required,
          tabIndex: '-1',
          type: 'hidden',
          value: selectedOption !== undefined && selectedOption !== null ? selectedOption.value : '' })
      );
      /* eslint-enable react/no-danger */
    }
  }]);

  return FormSelect;
}(_react2.default.Component);

FormSelect.OPTIONS_CONTAINER_MAX_HEIGHT_MOBILE = 260;
FormSelect.OPTIONS_CONTAINER_MAX_HEIGHT_DESKTOP = 275;
FormSelect.propTypes = {
  enabled: _propTypes2.default.bool,
  filterValue: _propTypes2.default.string,
  filterable: _propTypes2.default.bool,
  id: _propTypes2.default.string.isRequired,
  loading: _propTypes2.default.bool,
  onInputChanged: _propTypes2.default.func,
  onOptionSelected: _propTypes2.default.func.isRequired,
  options: _propTypes2.default.arrayOf(optionShape),
  outsideClickToCloseEnabled: _propTypes2.default.bool,
  placeholder: _propTypes2.default.string,
  selectedOption: optionShape,
  validationEnabled: _propTypes2.default.bool,
  validationPattern: _propTypes2.default.string,
  required: _propTypes2.default.bool
};
FormSelect.defaultProps = {
  enabled: true,
  filterValue: '',
  filterable: false,
  loading: false,
  onInputChanged: function onInputChanged() {},
  outsideClickToCloseEnabled: true,
  validationEnabled: false,
  validationPattern: '',
  required: false
};
exports.default = FormSelect;