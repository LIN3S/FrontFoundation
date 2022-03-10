'use strict';

Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.onUpdated = undefined;

var _lin3sEventBus = require('lin3s-event-bus');

var _DomNodeUpdatedEventSubscriber = require('./DomNodeUpdatedEventSubscriber');

var _DomNodeUpdatedEventSubscriber2 = _interopRequireDefault(_DomNodeUpdatedEventSubscriber);

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

var onUpdated = function onUpdated(domNode, onDomNodeUpdatedCallback, priority) {
  var domNodeUpdatedEventSubscriber = new _DomNodeUpdatedEventSubscriber2.default(domNode, onDomNodeUpdatedCallback, new _lin3sEventBus.Priority(priority));

  _lin3sEventBus.LifeTimeEventPublisher.subscribe(domNodeUpdatedEventSubscriber);

  return domNodeUpdatedEventSubscriber;
};

exports.onUpdated = onUpdated;