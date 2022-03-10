'use strict';

Object.defineProperty(exports, "__esModule", {
  value: true
});

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }(); /*
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      * This file is part of the Front Foundation package.
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      *
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      * Copyright (c) 2017-present LIN3S <info@lin3s.com>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      *
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      * For the full copyright and license information, please view the LICENSE
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      * file that was distributed with this source code.
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      *
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      * @author Mikel Tuesta <mikeltuesta@gmail.com>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      */

var _lodash = require('lodash.debounce');

var _lodash2 = _interopRequireDefault(_lodash);

var _lin3sEventBus = require('lin3s-event-bus');

var _dom = require('./../../../../dom');

var _FormSelectInitializedEvent = require('./../../../../event-bus/FormSelect/FormSelectInitializedEvent');

var _FormSelectInitializedEvent2 = _interopRequireDefault(_FormSelectInitializedEvent);

var _FormSelectOptionSelectedEvent = require('./../../../../event-bus/FormSelect/FormSelectOptionSelectedEvent');

var _FormSelectOptionSelectedEvent2 = _interopRequireDefault(_FormSelectOptionSelectedEvent);

var _FormSelectStateChangedEvent = require('./../../../../event-bus/FormSelect/FormSelectStateChangedEvent');

var _FormSelectStateChangedEvent2 = _interopRequireDefault(_FormSelectStateChangedEvent);

var _addSelectorFilteredEventListener = require('../../../../dom/addSelectorFilteredEventListener');

var _addSelectorFilteredEventListener2 = _interopRequireDefault(_addSelectorFilteredEventListener);

var _getDomNodeIndex = require('../../../../dom/getDomNodeIndex');

var _getDomNodeIndex2 = _interopRequireDefault(_getDomNodeIndex);

var _removeDomNodes = require('../../../../dom/removeDomNodes');

var _removeDomNodes2 = _interopRequireDefault(_removeDomNodes);

var _dispatchNativeEvent = require('../../../../dom/dispatchNativeEvent');

var _dispatchNativeEvent2 = _interopRequireDefault(_dispatchNativeEvent);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

var renderSelectOption = function renderSelectOption(optionValue, optionLabel) {
  var option = document.createElement('option');
  option.value = optionValue;
  option.textContent = optionLabel;
  return option;
},
    renderSelectOptionView = function renderSelectOptionView(optionValue, optionLabel) {
  var optionView = document.createElement('div');
  optionView.classList.add('form-select__option');
  optionView.dataset.label = optionLabel;
  optionView.dataset.value = optionValue;
  optionView.textContent = optionLabel;
  return optionView;
};

var isMobile = function isMobile(viewportWidth) {
  var mobileBreakpoint = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : 1024;
  return viewportWidth < mobileBreakpoint;
};

var FormSelect = function () {
  function FormSelect(domNode) {
    var _this = this;

    _classCallCheck(this, FormSelect);

    this.domNode = domNode;
    this.opened = this.domNode.classList.contains('form-select--opened');
    this.focused = false;
    this.enabled = true;

    this.maxHeightDesktop = parseInt(this.domNode.dataset.maxHeightDesktop, 10);
    this.maxHeightMobile = parseInt(this.domNode.dataset.maxHeightMobile, 10);
    this.isFilterable = parseInt(this.domNode.dataset.filterable, 10) === 1;
    this.filterBy = this.domNode.dataset.filterOrderBy;
    this.mobileBreakpoint = parseInt(this.domNode.dataset.mobileBreakpoint, 10);
    this.outsideClickToCloseEnabled = parseInt(this.domNode.dataset.outsideClickToCloseEnabled, 10) === 1;
    this.mouseOverListenerEnabled = true;
    this.keyboardControlledSelectedOptionIndex = 0;
    this.lastFilterValue = '';
    this.openedByFocus = false;

    if (this.isFilterable) {
      this.filterInput = this.domNode.querySelector('.form-select__input');
    }

    this.select = this.domNode.querySelector('.form-select__select');
    this.selectOptionsContainer = this.domNode.querySelector('.form-select__options-container');
    this.selectOptions = this.domNode.querySelector('.form-select__options');
    this.selectLabel = this.domNode.querySelector('.form-select__label');

    this.debouncedFilter = (0, _lodash2.default)(function () {
      return _this.filter();
    }, 500);

    this.parseSelectOptions();
    this.bindListeners();
    this.setSelectOpened(this.opened);
    this.setInitiallySelectedOption();

    this.publishFormSelectInitializedEvent();
  }

  _createClass(FormSelect, [{
    key: 'parseSelectOptions',
    value: function parseSelectOptions() {
      var selectOptions = this.select.querySelectorAll('option');
      this.options = Array.from(selectOptions).map(function (selectOption) {
        return {
          value: selectOption.value.trim(),
          label: selectOption.textContent.trim()
        };
      });
    }
  }, {
    key: 'getOptionsContainerNeedsOverflow',
    value: function getOptionsContainerNeedsOverflow(optionsContainerHeight) {
      return isMobile(this.windowWidth, this.mobileBreakpoint) && optionsContainerHeight >= this.maxHeightMobile || !isMobile(this.windowWidth, this.mobileBreakpoint) && optionsContainerHeight >= this.maxHeightDesktop;
    }
  }, {
    key: 'setOptionsContainerHeight',
    value: function setOptionsContainerHeight(height) {
      // Prevent overflow/scroll animation
      this.selectOptionsContainer.classList.toggle('form-select__options-container--no-overflow', !this.getOptionsContainerNeedsOverflow(height));

      this.selectOptionsContainer.style.height = height + 'px';
    }
  }, {
    key: 'getOptionsContainerHeight',
    value: function getOptionsContainerHeight() {
      var totalHeight = Array.from(this.domNode.querySelectorAll('.form-select__option')).reduce(function (accumulatedHeight, option) {
        return accumulatedHeight + option.offsetHeight;
      }, 0);

      if (isMobile(this.windowWidth, this.mobileBreakpoint) && totalHeight >= this.maxHeightMobile) {
        return this.maxHeightMobile;
      } else if (!isMobile(this.windowWidth, this.mobileBreakpoint) && totalHeight >= this.maxHeightDesktop) {
        return this.maxHeightDesktop;
      }

      return totalHeight;
    }
  }, {
    key: 'bindListeners',
    value: function bindListeners() {
      var _this2 = this;

      if (this.isFilterable) {
        this.filterInput.addEventListener('input', function () {
          return _this2.debouncedFilter();
        });

        this.filterInput.addEventListener('click', function (event) {
          if (_this2.opened) {
            event.stopPropagation();
          }
        });
      }

      if (this.outsideClickToCloseEnabled) {
        window.addEventListener('click', this.close.bind(this));
      }

      this.domNode.addEventListener('focus', function () {
        _this2.setSelectFocused(true);

        if (_this2.tabHit) {
          return;
        }

        if (!_this2.isFilterable && !_this2.opened) {
          _this2.openedByFocus = true;
        }
        _this2.open();
      });

      (0, _addSelectorFilteredEventListener2.default)(this.domNode, 'click', '.form-select__option', this.onClick.bind(this));

      this.domNode.addEventListener('click', function (event) {
        if (_this2.outsideClickToCloseEnabled) {
          event.stopPropagation();
        }

        if (event.target === _this2.domNode || _this2.openedByFocus) {
          return;
        }

        _this2.setSelectOpened(!_this2.opened);
      });

      (0, _addSelectorFilteredEventListener2.default)(this.domNode, 'mouseover', '.form-select__option', this.onMouseOver.bind(this));

      (0, _addSelectorFilteredEventListener2.default)(this.domNode, 'mousemove', '.form-select__option', this.onMouseMove.bind(this));

      this.domNode.addEventListener('keydown', this.onKeyDown.bind(this));

      (0, _lin3sEventBus.onWindowResized)(this.onResize.bind(this));
    }
  }, {
    key: 'onClick',
    value: function onClick(event) {
      this.setSelectedOption(event.target);
    }
  }, {
    key: 'onMouseOver',
    value: function onMouseOver(event) {
      if (!this.mouseOverListenerEnabled) {
        return;
      }

      this.setKeyboardControlledSelectedOptionView(this.domNode.querySelectorAll('.form-select__option'), event.target);

      this.keyboardControlledSelectedOptionIndex = (0, _getDomNodeIndex2.default)(event.target);
    }
  }, {
    key: 'onMouseMove',
    value: function onMouseMove(event) {
      this.mouseOverListenerEnabled = true;
    }
  }, {
    key: 'onKeyDown',
    value: function onKeyDown(event) {
      if (!(event.which === 40 || event.which === 38 || event.which === 13 || event.which === 9)) {
        return;
      }

      if (event.which === 9) {
        // tab
        if (this.opened) {
          this.tabHit = true;
        }

        this.close();
        return;
      }

      event.preventDefault();
      this.mouseOverListenerEnabled = false;

      var selectOptionViews = Array.from(this.domNode.querySelectorAll('.form-select__option'));

      if (event.which === 13) {
        // enter
        if (!this.opened && this.focused) {
          this.open();
        } else {
          this.setSelectedOption(selectOptionViews[this.keyboardControlledSelectedOptionIndex]);
          this.close();
        }
      } else if (event.which === 40) {
        // down
        this.keyboardControlledSelectedOptionIndex = this.keyboardControlledSelectedOptionIndex < selectOptionViews.length - 1 ? this.keyboardControlledSelectedOptionIndex + 1 : selectOptionViews.length - 1;
        this.setKeyboardControlledSelectedOptionView(selectOptionViews, selectOptionViews[this.keyboardControlledSelectedOptionIndex], true);
      } else if (event.which === 38) {
        // up
        this.keyboardControlledSelectedOptionIndex = this.keyboardControlledSelectedOptionIndex > 0 ? this.keyboardControlledSelectedOptionIndex - 1 : 0;
        this.setKeyboardControlledSelectedOptionView(selectOptionViews, selectOptionViews[this.keyboardControlledSelectedOptionIndex], true);
      }
    }
  }, {
    key: 'onResize',
    value: function onResize(windowResizedEvent) {
      this.windowWidth = windowResizedEvent.windowWidth || window.innerWidth;

      if (this.opened) {
        this.open();
      }
    }
  }, {
    key: 'setInitiallySelectedOption',
    value: function setInitiallySelectedOption() {
      var selectedOption = this.select.querySelector('option[selected="selected"]');

      if (selectedOption === null) {
        return;
      }

      this.onOptionSelected(selectedOption.textContent, selectedOption.value);
    }
  }, {
    key: 'setSelectOpened',
    value: function setSelectOpened(opened) {
      if (opened) {
        this.open();
      } else {
        this.close();
      }

      this.publishFormSelectStateChangedEvent(opened ? FormSelect.STATE.OPENED : FormSelect.STATE.CLOSED);
    }
  }, {
    key: 'setSelectFocused',
    value: function setSelectFocused(focused) {
      this.focused = focused;
      this.domNode.classList.toggle('form-select--focused', focused);
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
    key: 'open',
    value: function open() {
      var _this4 = this;

      if (!this.enabled) {
        return;
      }

      this.domNode.classList.add('form-select--opened');
      this.domNode.classList.toggle('form-select--editing-input', this.isFilterable);
      this.setOptionsContainerHeight(this.getOptionsContainerHeight());
      this.opened = true;
      this.setSelectFocused(false);

      if (this.isFilterable) {
        setTimeout(function () {
          if (_this4.opened) {
            _this4.filterInput.focus();
          }
        }, 100);
      }

      this.setSelectFocusable(false);
    }
  }, {
    key: 'close',
    value: function close() {
      if (!this.enabled) {
        return;
      }

      this.domNode.classList.remove('form-select--opened');
      this.domNode.classList.remove('form-select--editing-input');
      this.setOptionsContainerHeight(0);
      this.opened = false;
      this.setSelectFocused(false);
      this.tabHit = false;

      if (this.isFilterable) {
        this.filterInput.blur();
      }

      this.setSelectFocusable(true);
      this.openedByFocus = false;
    }
  }, {
    key: 'onOptionSelected',
    value: function onOptionSelected(optionLabel, optionValue) {
      var publishEvent = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : true;

      if (!this.enabled) {
        return;
      }

      // Explicitly cast to String
      var label = String(optionLabel),
          value = String(optionValue);

      if (this.selectedOptionLabel === optionLabel || this.selectedOptionValue === optionValue) {
        return;
      }

      this.setSelectValue(value);
      this.setSelectLabelValue(label);
      this.setSelectActiveOption(value);

      this.selectedOptionLabel = optionLabel;
      this.selectedOptionValue = optionValue;

      if ((this.selectedOptionLabel !== undefined || this.selectedOptionValue !== undefined) && publishEvent) {
        this.publishFormSelectOptionSelectedEvent(value);
      }
      this.openedByFocus = false;
    }
  }, {
    key: 'setSelectValue',
    value: function setSelectValue(value) {
      this.select.value = value;

      (0, _dispatchNativeEvent2.default)(this.select, 'input');
    }
  }, {
    key: 'setSelectLabelValue',
    value: function setSelectLabelValue(value) {
      this.selectLabel.textContent = value;
    }
  }, {
    key: 'setSelectActiveOption',
    value: function setSelectActiveOption(optionValue) {
      Array.from(this.domNode.querySelectorAll('.form-select__option')).forEach(function (selectOption) {
        return selectOption.classList.toggle('form-select__option--active', String(selectOption.dataset.value) === String(optionValue));
      });
    }
  }, {
    key: 'setSelectedOptionByOptionValue',
    value: function setSelectedOptionByOptionValue(optionValue) {
      var option = this.domNode.querySelector('.form-select__option[data-value="' + optionValue + '"]'),
          label = option.getAttribute('data-label');
      this.onOptionSelected(label, optionValue, false);
    }
  }, {
    key: 'update',
    value: function update() {
      var _ref = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : {},
          options = _ref.options,
          _ref$publishEvent = _ref.publishEvent,
          publishEvent = _ref$publishEvent === undefined ? true : _ref$publishEvent;

      this.close();
      this.destroy();

      if (options.length === 0) {
        return;
      }

      this.build(options);
      this.setSelectedOptionDefault(publishEvent);
    }
  }, {
    key: 'destroy',
    value: function destroy() {
      (0, _removeDomNodes2.default)(this.domNode.querySelectorAll('.form-select__option:not(.form-select__option--select-no-selection), option:not(.form-select__select-no-selection)') // eslint-disable-line max-len
      );

      this.filterInput.value = '';
    }
  }, {
    key: 'build',
    value: function build(options) {
      var _this5 = this;

      this.options = options;

      this.options.forEach(function (option) {
        _this5.select.appendChild(renderSelectOption(option.value, option.label));
        _this5.selectOptions.appendChild(renderSelectOptionView(option.value, option.label));
      });

      this.setOptionsContainerHeight(this.getOptionsContainerHeight());
    }
  }, {
    key: 'filter',
    value: function filter() {
      var _this6 = this;

      var noSelectionValue = this.domNode.querySelector('.form-select__select-no-selection').value,
          filterValue = this.filterInput.value,
          filteredOptions = this.options.filter(function (option) {
        return option.label.toLowerCase().includes(filterValue.toLowerCase()) || filterValue === '' || option.value === noSelectionValue;
      });

      if (filterValue === this.lastFilterValue) {
        return;
      }

      this.lastFilterValue = filterValue;

      // Remove unnecessary ones
      this.options.forEach(function (option) {
        if (filteredOptions.indexOf(option) === -1) {
          var optionView = _this6.selectOptions.querySelectorAll('[data-value="' + option.value + '"]');
          (0, _removeDomNodes2.default)(optionView);
        }
      });

      // Add necessary ones
      filteredOptions.forEach(function (filteredOption) {
        var selectOption = _this6.domNode.querySelector('.form-select__option[data-value="' + filteredOption.value + '"]');

        if (selectOption === null) {
          // Find place to inject
          var currentSelectOptionViews = Array.from(_this6.domNode.querySelectorAll('.form-select__option + .form-select__option')),
              // eslint-disable-line max-len
          newSelectOption = renderSelectOption(filteredOption.value, filteredOption.label),
              newSelectOptionView = renderSelectOptionView(filteredOption.value, filteredOption.label);
          var found = false,
              index = 0;

          while (index < currentSelectOptionViews.length && !found) {
            var currentSelectOption = currentSelectOptionViews[index];

            var isInteger = !isNaN(parseInt(currentSelectOption.getAttribute('data-' + _this6.filterBy), 10)) && !isNaN(parseInt(filteredOption['' + _this6.filterBy], 10));

            var currentOptionIsBiggerThanFilteredOne = isInteger ? parseInt(currentSelectOption.getAttribute('data-' + _this6.filterBy), 10) > parseInt(filteredOption['' + _this6.filterBy], 10) // eslint-disable-line max-len
            : String(currentSelectOption.getAttribute('data-' + _this6.filterBy)).trim().localeCompare(filteredOption['' + _this6.filterBy], (0, _dom.getHtmlLang)(), { sensitivity: 'base' }) > 0; // eslint-disable-line max-len

            if (currentOptionIsBiggerThanFilteredOne) {
              found = true;
            }

            index++;
          }

          if (found) {
            var currentOption = Array.from(_this6.select.querySelectorAll('option'))[index],
                currentOptionView = Array.from(_this6.domNode.querySelectorAll('.form-select__option'))[index];

            _this6.select.insertBefore(newSelectOption, currentOption);
            _this6.selectOptions.insertBefore(newSelectOptionView, currentOptionView);
          } else {
            _this6.select.appendChild(newSelectOption);
            _this6.selectOptions.appendChild(newSelectOptionView);
          }
        }
      });

      this.setOptionsContainerHeight(this.getOptionsContainerHeight());

      // select none
      this.setSelectedOptionDefault(false);
    }
  }, {
    key: 'setSelectedOptionDefault',
    value: function setSelectedOptionDefault() {
      var publishEvent = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : true;

      var noSelection = this.domNode.querySelector('.form-select__select-no-selection');
      this.onOptionSelected(noSelection.textContent.trim(), noSelection.value.trim(), publishEvent);
    }
  }, {
    key: 'setSelectedOption',
    value: function setSelectedOption(option) {
      this.onOptionSelected(option.dataset.label, option.dataset.value);
    }
  }, {
    key: 'setKeyboardControlledSelectedOptionView',
    value: function setKeyboardControlledSelectedOptionView(selectOptionViews, optionView) {
      var animateScroll = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : false;

      Array.from(selectOptionViews).forEach(function (selectOptionView) {
        return selectOptionView.classList.remove('form-select__option--hover');
      });

      if (optionView === undefined) {
        return;
      }

      optionView.classList.add('form-select__option--hover');

      // Scroll to option
      if (!animateScroll) {
        return;
      }

      optionView.scrollIntoView({ behaviour: 'smooth' });
    }
  }, {
    key: 'enable',
    value: function enable() {
      this.enabled = true;
    }
  }, {
    key: 'disable',
    value: function disable() {
      this.enabled = false;
    }
  }, {
    key: 'publishFormSelectInitializedEvent',
    value: function publishFormSelectInitializedEvent() {
      _lin3sEventBus.OneTimeEventPublisher.publish(new _FormSelectInitializedEvent2.default(this));
    }
  }, {
    key: 'publishFormSelectOptionSelectedEvent',
    value: function publishFormSelectOptionSelectedEvent(value) {
      _lin3sEventBus.LifeTimeEventPublisher.publish(new _FormSelectOptionSelectedEvent2.default(this, value));
    }
  }, {
    key: 'publishFormSelectStateChangedEvent',
    value: function publishFormSelectStateChangedEvent(state) {
      _lin3sEventBus.LifeTimeEventPublisher.publish(new _FormSelectStateChangedEvent2.default(this, state));
    }
  }]);

  return FormSelect;
}();

FormSelect.STATE = {
  OPENED: 'OPENED',
  CLOSED: 'CLOSED'
};
exports.default = FormSelect;