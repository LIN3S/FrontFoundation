'use strict';

Object.defineProperty(exports, "__esModule", {
  value: true
});

var _lin3sEventBus = require('lin3s-event-bus');

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

var FormSelectOptionSelectedEvent = function (_Event) {
  _inherits(FormSelectOptionSelectedEvent, _Event);

  function FormSelectOptionSelectedEvent(formSelectInstance, optionValue) {
    _classCallCheck(this, FormSelectOptionSelectedEvent);

    var _this = _possibleConstructorReturn(this, (FormSelectOptionSelectedEvent.__proto__ || Object.getPrototypeOf(FormSelectOptionSelectedEvent)).call(this, FormSelectOptionSelectedEvent.NAME));

    _this.formSelectInstance = formSelectInstance;
    _this.optionValue = optionValue;
    return _this;
  }

  return FormSelectOptionSelectedEvent;
}(_lin3sEventBus.Event);

FormSelectOptionSelectedEvent.NAME = 'FORM_SELECT_OPTION_SELECTED';
exports.default = FormSelectOptionSelectedEvent;