'use strict';

Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.onFormElementStateChanged = exports.onFormStateChanged = undefined;

var _lin3sEventBus = require('lin3s-event-bus');

var _FormValidationStateChangedEventSubscriber = require('./FormValidationStateChangedEventSubscriber');

var _FormValidationStateChangedEventSubscriber2 = _interopRequireDefault(_FormValidationStateChangedEventSubscriber);

var _FormElementValidationStateChangedEventSubscriber = require('./FormElementValidationStateChangedEventSubscriber');

var _FormElementValidationStateChangedEventSubscriber2 = _interopRequireDefault(_FormElementValidationStateChangedEventSubscriber);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

var onFormStateChanged = function onFormStateChanged(formDomNode, stateChangedCallback) {
  var subscriber = new _FormValidationStateChangedEventSubscriber2.default(formDomNode, stateChangedCallback);
  _lin3sEventBus.LifeTimeEventPublisher.subscribe(subscriber);

  return subscriber;
},
    onFormElementStateChanged = function onFormElementStateChanged(formElementDomNode, stateChangedCallback) {
  var subscriber = new _FormElementValidationStateChangedEventSubscriber2.default(formElementDomNode, stateChangedCallback);
  _lin3sEventBus.LifeTimeEventPublisher.subscribe(subscriber);

  return subscriber;
}; /*
    * This file is part of the Front Foundation package.
    *
    * Copyright (c) 2018-present LIN3S <info@lin3s.com>
    *
    * For the full copyright and license information, please view the LICENSE
    * file that was distributed with this source code.
    *
    * @author Mikel Tuesta <mikeltuesta@gmail.com>
    */

exports.onFormStateChanged = onFormStateChanged;
exports.onFormElementStateChanged = onFormElementStateChanged;