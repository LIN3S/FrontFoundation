'use strict';

Object.defineProperty(exports, "__esModule", {
  value: true
});

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

var _lin3sEventBus = require('lin3s-event-bus');

var _FormElementValidationStateChangedEvent = require('./FormElementValidationStateChangedEvent');

var _FormElementValidationStateChangedEvent2 = _interopRequireDefault(_FormElementValidationStateChangedEvent);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _possibleConstructorReturn(self, call) { if (!self) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return call && (typeof call === "object" || typeof call === "function") ? call : self; }

function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function, not " + typeof superClass); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, enumerable: false, writable: true, configurable: true } }); if (superClass) Object.setPrototypeOf ? Object.setPrototypeOf(subClass, superClass) : subClass.__proto__ = superClass; } /*
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                * This file is part of the Front Foundation package.
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                *
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                * Copyright (c) 2018-present LIN3S <info@lin3s.com>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                *
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                * For the full copyright and license information, please view the LICENSE
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                * file that was distributed with this source code.
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                *
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                * @author Mikel Tuesta <mikeltuesta@gmail.com>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                */

var FormElementValidationStateChangedEventSubscriber = function (_EventSubscriber) {
  _inherits(FormElementValidationStateChangedEventSubscriber, _EventSubscriber);

  function FormElementValidationStateChangedEventSubscriber(domNode, callback, priority) {
    _classCallCheck(this, FormElementValidationStateChangedEventSubscriber);

    var _this = _possibleConstructorReturn(this, (FormElementValidationStateChangedEventSubscriber.__proto__ || Object.getPrototypeOf(FormElementValidationStateChangedEventSubscriber)).call(this, callback, priority));

    _this.domNode = domNode;
    return _this;
  }

  _createClass(FormElementValidationStateChangedEventSubscriber, [{
    key: 'isSubscribedTo',
    value: function isSubscribedTo(anEvent) {
      var event = new _FormElementValidationStateChangedEvent2.default();

      return anEvent.getName() === event.getName() && this.domNode === anEvent.formElementValidatorInstance.formElementDomNode;
    }
  }]);

  return FormElementValidationStateChangedEventSubscriber;
}(_lin3sEventBus.EventSubscriber);

exports.default = FormElementValidationStateChangedEventSubscriber;