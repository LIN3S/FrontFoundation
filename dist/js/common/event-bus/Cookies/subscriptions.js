'use strict';

Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.onWritten = undefined;

var _lin3sEventBus = require('lin3s-event-bus');

var _CookieWrittenEventSubscriber = require('./CookieWrittenEventSubscriber');

var _CookieWrittenEventSubscriber2 = _interopRequireDefault(_CookieWrittenEventSubscriber);

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

var onWritten = function onWritten(cookieWrittenCallback, priority) {
  var cookieWrittenEventSubscriber = new _CookieWrittenEventSubscriber2.default(cookieWrittenCallback, new _lin3sEventBus.Priority(priority));

  _lin3sEventBus.OneTimeEventPublisher.subscribe(cookieWrittenEventSubscriber);
  _lin3sEventBus.LifeTimeEventPublisher.subscribe(cookieWrittenEventSubscriber);

  return cookieWrittenEventSubscriber;
};

exports.onWritten = onWritten;