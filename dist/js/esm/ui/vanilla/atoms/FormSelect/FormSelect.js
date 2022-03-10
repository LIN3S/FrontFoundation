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

import debounce from 'lodash.debounce';
import {onWindowResized, OneTimeEventPublisher, LifeTimeEventPublisher} from 'lin3s-event-bus';
import {getHtmlLang} from './../../../../dom';
import FormSelectInitializedEvent from './../../../../event-bus/FormSelect/FormSelectInitializedEvent';
import FormSelectOptionSelectedEvent from './../../../../event-bus/FormSelect/FormSelectOptionSelectedEvent';
import FormSelectStateChangedEvent from './../../../../event-bus/FormSelect/FormSelectStateChangedEvent';
import addSelectorFilteredEventListener from '../../../../dom/addSelectorFilteredEventListener';
import getDomNodeIndex from '../../../../dom/getDomNodeIndex';
import removeDomNodes from '../../../../dom/removeDomNodes';
import dispatchNativeEvent from '../../../../dom/dispatchNativeEvent';

const renderSelectOption = (optionValue, optionLabel) => {
    const option = document.createElement('option');
    option.value = optionValue;
    option.textContent = optionLabel;
    return option;
  },
  renderSelectOptionView = (optionValue, optionLabel) => {
    const optionView = document.createElement('div');
    optionView.classList.add('form-select__option');
    optionView.dataset.label = optionLabel;
    optionView.dataset.value = optionValue;
    optionView.textContent = optionLabel;
    return optionView;
  };

const isMobile = (viewportWidth, mobileBreakpoint = 1024) => viewportWidth < mobileBreakpoint;

class FormSelect {

  static STATE = {
    OPENED: 'OPENED',
    CLOSED: 'CLOSED'
  };

  constructor(domNode) {
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

    this.debouncedFilter = debounce(() => this.filter(), 500);

    this.parseSelectOptions();
    this.bindListeners();
    this.setSelectOpened(this.opened);
    this.setInitiallySelectedOption();

    this.publishFormSelectInitializedEvent();
  }

  parseSelectOptions() {
    const selectOptions = this.select.querySelectorAll('option');
    this.options = Array.from(selectOptions).map(selectOption => {
      return {
        value: selectOption.value.trim(),
        label: selectOption.textContent.trim()
      };
    });
  }

  getOptionsContainerNeedsOverflow(optionsContainerHeight) {
    return isMobile(this.windowWidth, this.mobileBreakpoint) && optionsContainerHeight >= this.maxHeightMobile ||
      !isMobile(this.windowWidth, this.mobileBreakpoint) && optionsContainerHeight >= this.maxHeightDesktop;
  }

  setOptionsContainerHeight(height) {
    // Prevent overflow/scroll animation
    this.selectOptionsContainer.classList.toggle('form-select__options-container--no-overflow',
      !this.getOptionsContainerNeedsOverflow(height));

    this.selectOptionsContainer.style.height = `${height}px`;
  }

  getOptionsContainerHeight() {
    const totalHeight = Array.from(this.domNode.querySelectorAll('.form-select__option'))
      .reduce((accumulatedHeight, option) => accumulatedHeight + option.offsetHeight, 0);

    if (isMobile(this.windowWidth, this.mobileBreakpoint) && totalHeight >= this.maxHeightMobile) {
      return this.maxHeightMobile;
    } else if (!isMobile(this.windowWidth, this.mobileBreakpoint) && totalHeight >= this.maxHeightDesktop) {
      return this.maxHeightDesktop;
    }

    return totalHeight;
  }

  bindListeners() {
    if (this.isFilterable) {
      this.filterInput.addEventListener('input', () => this.debouncedFilter());

      this.filterInput.addEventListener('click', event => {
        if (this.opened) {
          event.stopPropagation();
        }
      });
    }

    if (this.outsideClickToCloseEnabled) {
      window.addEventListener('click', this.close.bind(this));
    }

    this.domNode.addEventListener('focus', () => {
      this.setSelectFocused(true);

      if (this.tabHit) {
        return;
      }

      if (!this.isFilterable && !this.opened) {
        this.openedByFocus = true;
      }
      this.open();
    });

    addSelectorFilteredEventListener(this.domNode, 'click', '.form-select__option', this.onClick.bind(this));

    this.domNode.addEventListener('click', event => {
      if (this.outsideClickToCloseEnabled) {
        event.stopPropagation();
      }

      if (event.target === this.domNode || this.openedByFocus) {
        return;
      }

      this.setSelectOpened(!this.opened);
    });

    addSelectorFilteredEventListener(this.domNode, 'mouseover', '.form-select__option', this.onMouseOver.bind(this));

    addSelectorFilteredEventListener(this.domNode, 'mousemove', '.form-select__option', this.onMouseMove.bind(this));

    this.domNode.addEventListener('keydown', this.onKeyDown.bind(this));

    onWindowResized(this.onResize.bind(this));
  }

  onClick(event) {
    this.setSelectedOption(event.target);
  }

  onMouseOver(event) {
    if (!this.mouseOverListenerEnabled) {
      return;
    }

    this.setKeyboardControlledSelectedOptionView(
      this.domNode.querySelectorAll('.form-select__option'),
      event.target
    );

    this.keyboardControlledSelectedOptionIndex = getDomNodeIndex(event.target);
  }

  onMouseMove(event) {
    this.mouseOverListenerEnabled = true;
  }

  onKeyDown(event) {
    if (!(event.which === 40 || event.which === 38 || event.which === 13 || event.which === 9)) {
      return;
    }

    if (event.which === 9) { // tab
      if (this.opened) {
        this.tabHit = true;
      }

      this.close();
      return;
    }

    event.preventDefault();
    this.mouseOverListenerEnabled = false;

    const selectOptionViews = Array.from(this.domNode.querySelectorAll('.form-select__option'));

    if (event.which === 13) { // enter
      if (!this.opened && this.focused) {
        this.open();
      } else {
        this.setSelectedOption(selectOptionViews[this.keyboardControlledSelectedOptionIndex]);
        this.close();
      }
    } else if (event.which === 40) { // down
      this.keyboardControlledSelectedOptionIndex = this.keyboardControlledSelectedOptionIndex
      < selectOptionViews.length - 1
        ? this.keyboardControlledSelectedOptionIndex + 1 : selectOptionViews.length - 1;
      this.setKeyboardControlledSelectedOptionView(selectOptionViews,
        selectOptionViews[this.keyboardControlledSelectedOptionIndex],
        true);
    } else if (event.which === 38) { // up
      this.keyboardControlledSelectedOptionIndex = this.keyboardControlledSelectedOptionIndex > 0
        ? this.keyboardControlledSelectedOptionIndex - 1 : 0;
      this.setKeyboardControlledSelectedOptionView(selectOptionViews,
        selectOptionViews[this.keyboardControlledSelectedOptionIndex],
        true);
    }
  }

  onResize(windowResizedEvent) {
    this.windowWidth = windowResizedEvent.windowWidth || window.innerWidth;

    if (this.opened) {
      this.open();
    }
  }

  setInitiallySelectedOption() {
    const selectedOption = this.select.querySelector('option[selected="selected"]');

    if (selectedOption === null) {
      return;
    }

    this.onOptionSelected(selectedOption.textContent, selectedOption.value);
  }

  setSelectOpened(opened) {
    if (opened) {
      this.open();
    } else {
      this.close();
    }

    this.publishFormSelectStateChangedEvent(opened ? FormSelect.STATE.OPENED : FormSelect.STATE.CLOSED);
  }

  setSelectFocused(focused) {
    this.focused = focused;
    this.domNode.classList.toggle('form-select--focused', focused);
  }

  setSelectFocusable(focusable) {
    setTimeout(() => {
      this.domNode.tabIndex = focusable ? 0 : -1;
    }, 100);
  }

  open() {
    if (!this.enabled) {
      return;
    }

    this.domNode.classList.add('form-select--opened');
    this.domNode.classList.toggle('form-select--editing-input', this.isFilterable);
    this.setOptionsContainerHeight(this.getOptionsContainerHeight());
    this.opened = true;
    this.setSelectFocused(false);

    if (this.isFilterable) {
      setTimeout(() => {
        if (this.opened) {
          this.filterInput.focus();
        }
      }, 100);
    }

    this.setSelectFocusable(false);
  }

  close() {
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

  onOptionSelected(optionLabel, optionValue, publishEvent = true) {
    if (!this.enabled) {
      return;
    }

    // Explicitly cast to String
    const
      label = String(optionLabel),
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

  setSelectValue(value) {
    this.select.value = value;

    dispatchNativeEvent(this.select, 'input');
  }

  setSelectLabelValue(value) {
    this.selectLabel.textContent = value;
  }

  setSelectActiveOption(optionValue) {
    Array.from(this.domNode.querySelectorAll('.form-select__option')).forEach(selectOption =>
      selectOption.classList.toggle('form-select__option--active',
        String(selectOption.dataset.value) === String(optionValue)
      ));
  }

  setSelectedOptionByOptionValue(optionValue) {
    const
      option = this.domNode.querySelector(`.form-select__option[data-value="${optionValue}"]`),
      label = option.getAttribute('data-label');
    this.onOptionSelected(label, optionValue, false);
  }

  update({options, publishEvent = true} = {}) {
    this.close();
    this.destroy();

    if (options.length === 0) {
      return;
    }

    this.build(options);
    this.setSelectedOptionDefault(publishEvent);
  }

  destroy() {
    removeDomNodes(
      this.domNode.querySelectorAll('.form-select__option:not(.form-select__option--select-no-selection), option:not(.form-select__select-no-selection)') // eslint-disable-line max-len
    );

    this.filterInput.value = '';
  }

  build(options) {
    this.options = options;

    this.options.forEach(option => {
      this.select.appendChild(renderSelectOption(option.value, option.label));
      this.selectOptions.appendChild(renderSelectOptionView(option.value, option.label));
    });

    this.setOptionsContainerHeight(this.getOptionsContainerHeight());
  }

  filter() {
    const
      noSelectionValue = this.domNode.querySelector('.form-select__select-no-selection').value,
      filterValue = this.filterInput.value,
      filteredOptions = this.options.filter(option =>
        option.label.toLowerCase().includes(filterValue.toLowerCase())
        || filterValue === ''
        || option.value === noSelectionValue
      );

    if (filterValue === this.lastFilterValue) {
      return;
    }

    this.lastFilterValue = filterValue;

    // Remove unnecessary ones
    this.options.forEach(option => {
      if (filteredOptions.indexOf(option) === -1) {
        const optionView = this.selectOptions.querySelectorAll(`[data-value="${option.value}"]`);
        removeDomNodes(optionView);
      }
    });

    // Add necessary ones
    filteredOptions.forEach(filteredOption => {
      const selectOption = this.domNode.querySelector(`.form-select__option[data-value="${filteredOption.value}"]`);

      if (selectOption === null) {
        // Find place to inject
        const
          currentSelectOptionViews = Array.from(this.domNode.querySelectorAll('.form-select__option + .form-select__option')), // eslint-disable-line max-len
          newSelectOption = renderSelectOption(filteredOption.value, filteredOption.label),
          newSelectOptionView = renderSelectOptionView(filteredOption.value, filteredOption.label);
        let
          found = false,
          index = 0;

        while (index < currentSelectOptionViews.length && !found) {
          const currentSelectOption = currentSelectOptionViews[index];

          const isInteger = (!isNaN(parseInt(currentSelectOption.getAttribute(`data-${this.filterBy}`), 10))
            && !isNaN(parseInt(filteredOption[`${this.filterBy}`], 10)));

          const currentOptionIsBiggerThanFilteredOne = isInteger
            ? parseInt(currentSelectOption.getAttribute(`data-${this.filterBy}`), 10) > parseInt(filteredOption[`${this.filterBy}`], 10) // eslint-disable-line max-len
            : String(currentSelectOption.getAttribute(`data-${this.filterBy}`)).trim().localeCompare(filteredOption[`${this.filterBy}`], getHtmlLang(), {sensitivity: 'base'}) > 0; // eslint-disable-line max-len

          if (currentOptionIsBiggerThanFilteredOne) {
            found = true;
          }

          index++;
        }

        if (found) {
          const
            currentOption = Array.from(this.select.querySelectorAll('option'))[index],
            currentOptionView = Array.from(this.domNode.querySelectorAll('.form-select__option'))[index];

          this.select.insertBefore(newSelectOption, currentOption);
          this.selectOptions.insertBefore(newSelectOptionView, currentOptionView);
        } else {
          this.select.appendChild(newSelectOption);
          this.selectOptions.appendChild(newSelectOptionView);
        }
      }
    });

    this.setOptionsContainerHeight(this.getOptionsContainerHeight());

    // select none
    this.setSelectedOptionDefault(false);
  }

  setSelectedOptionDefault(publishEvent = true) {
    const noSelection = this.domNode.querySelector('.form-select__select-no-selection');
    this.onOptionSelected(noSelection.textContent.trim(), noSelection.value.trim(), publishEvent);
  }

  setSelectedOption(option) {
    this.onOptionSelected(option.dataset.label, option.dataset.value);
  }

  setKeyboardControlledSelectedOptionView(selectOptionViews, optionView, animateScroll = false) {
    Array.from(selectOptionViews).forEach(selectOptionView =>
      selectOptionView.classList.remove('form-select__option--hover'));

    if (optionView === undefined) {
      return;
    }

    optionView.classList.add('form-select__option--hover');

    // Scroll to option
    if (!animateScroll) {
      return;
    }

    optionView.scrollIntoView({behaviour: 'smooth'});
  }

  enable() {
    this.enabled = true;
  }

  disable() {
    this.enabled = false;
  }

  publishFormSelectInitializedEvent() {
    OneTimeEventPublisher.publish(new FormSelectInitializedEvent(this));
  }

  publishFormSelectOptionSelectedEvent(value) {
    LifeTimeEventPublisher.publish(new FormSelectOptionSelectedEvent(this, value));
  }

  publishFormSelectStateChangedEvent(state) {
    LifeTimeEventPublisher.publish(new FormSelectStateChangedEvent(this, state));
  }
}

export default FormSelect;
