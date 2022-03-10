'use strict';

Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.onInitialized = exports.onStateChanged = undefined;

var _lin3sEventBus = require('lin3s-event-bus');

var _ModalStateChangedEventSubscriber = require('./ModalStateChangedEventSubscriber');

var _ModalStateChangedEventSubscriber2 = _interopRequireDefault(_ModalStateChangedEventSubscriber);

var _ModalInitializedEventSubscriber = require('./ModalInitializedEventSubscriber');

var _ModalInitializedEventSubscriber2 = _interopRequireDefault(_ModalInitializedEventSubscriber);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

var onInitialized = function onInitialized(modalId, onModalInitializedCallback, priority) {
  var modalInitializedEventSubscriber = new _ModalInitializedEventSubscriber2.default(modalId, onModalInitializedCallback, new _lin3sEventBus.Priority(priority));

  _lin3sEventBus.OneTimeEventPublisher.subscribe(modalInitializedEventSubscriber);

  return modalInitializedEventSubscriber;
},
    onStateChanged = function onStateChanged(onModalStateChangedCallback, priority) {
  var modalStateChangedEventSubscriber = new _ModalStateChangedEventSubscriber2.default(onModalStateChangedCallback, new _lin3sEventBus.Priority(priority));

  _lin3sEventBus.LifeTimeEventPublisher.subscribe(modalStateChangedEventSubscriber);

  return modalStateChangedEventSubscriber;
}; /*
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

exports.onStateChanged = onStateChanged;
exports.onInitialized = onInitialized;