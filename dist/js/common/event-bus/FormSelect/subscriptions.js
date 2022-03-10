'use strict';

Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.onStateChanged = exports.onOptionSelected = exports.onInitialized = undefined;

var _lin3sEventBus = require('lin3s-event-bus');

var _FormSelectInitializedEventSubscriber = require('./FormSelectInitializedEventSubscriber');

var _FormSelectInitializedEventSubscriber2 = _interopRequireDefault(_FormSelectInitializedEventSubscriber);

var _FormSelectOptionSelectedEventSubscriber = require('./FormSelectOptionSelectedEventSubscriber');

var _FormSelectOptionSelectedEventSubscriber2 = _interopRequireDefault(_FormSelectOptionSelectedEventSubscriber);

var _FormSelectStateChangedEventSubscriber = require('./FormSelectStateChangedEventSubscriber');

var _FormSelectStateChangedEventSubscriber2 = _interopRequireDefault(_FormSelectStateChangedEventSubscriber);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

/*
 * This file is part of the Front Foundation package.
 *
 * Copyright (c) 2017-present LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Mikel Tuesta <mikeltuesta@gmail.com>
 * @author Ander Rodriguez <AnderRodriguezVarela@gmail.com>
 */

var onInitialized = function onInitialized(domNode, onFormSelectInitializedCallback, priority) {
  var formSelectInitializedEventSubscriber = new _FormSelectInitializedEventSubscriber2.default(domNode, onFormSelectInitializedCallback, new _lin3sEventBus.Priority(priority));

  _lin3sEventBus.OneTimeEventPublisher.subscribe(formSelectInitializedEventSubscriber);

  return formSelectInitializedEventSubscriber;
},
    onOptionSelected = function onOptionSelected(domNode, onFormSelectOptionSelectedCallback, priority) {
  var formSelectOptionSelectedEventSubscriber = new _FormSelectOptionSelectedEventSubscriber2.default(domNode, onFormSelectOptionSelectedCallback, new _lin3sEventBus.Priority(priority));

  _lin3sEventBus.LifeTimeEventPublisher.subscribe(formSelectOptionSelectedEventSubscriber);

  return formSelectOptionSelectedEventSubscriber;
},
    onStateChanged = function onStateChanged(domNode, onFormSelectStateChangedCallback, priority) {
  var formSelectStateChangedEventSubscriber = new _FormSelectStateChangedEventSubscriber2.default(domNode, onFormSelectStateChangedCallback, new _lin3sEventBus.Priority(priority));

  _lin3sEventBus.LifeTimeEventPublisher.subscribe(formSelectStateChangedEventSubscriber);

  return formSelectStateChangedEventSubscriber;
};

exports.onInitialized = onInitialized;
exports.onOptionSelected = onOptionSelected;
exports.onStateChanged = onStateChanged;