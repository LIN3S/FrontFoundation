'use strict';

Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.write = exports.read = undefined;

var _lin3sEventBus = require('lin3s-event-bus');

var _CookieWrittenEvent = require('./../event-bus/Cookies/CookieWrittenEvent');

var _CookieWrittenEvent2 = _interopRequireDefault(_CookieWrittenEvent);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

/*
 * This file is part of the Re_ Magazine project.
 *
 * Copyright (c) 2016-present LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Mikel Tuesta <mikel@lin3s.com>
 * @author Ander Rodriguez <AnderRodriguezVarela@gmail.com>
 */

var publishCookieWrittenEvent = function publishCookieWrittenEvent(cookie) {
  var cookieWrittenEvent = new _CookieWrittenEvent2.default(cookie);

  _lin3sEventBus.OneTimeEventPublisher.publish(cookieWrittenEvent);
  _lin3sEventBus.LifeTimeEventPublisher.publish(cookieWrittenEvent);
};

var read = function read(name) {
  var match = document.cookie.match(new RegExp(name + '=([^;]+)'));
  if (match) {
    return match[1];
  }
};

var write = function write() {
  var _ref = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : {},
      name = _ref.name,
      _ref$value = _ref.value,
      value = _ref$value === undefined ? '' : _ref$value,
      expiration = _ref.expiration,
      _ref$domain = _ref.domain,
      domain = _ref$domain === undefined ? location.hostname : _ref$domain,
      _ref$path = _ref.path,
      path = _ref$path === undefined ? '/' : _ref$path;

  var expires = void 0;

  if (expiration) {
    var cookieDate = new Date();
    cookieDate.setTime(cookieDate.getTime() + expiration);

    expires = 'expires=' + cookieDate.toGMTString();
  }

  document.cookie = name + '=' + value + '; ' + (expires ? expires + ';' : '') + domain + '; path=' + path + ';';

  publishCookieWrittenEvent({ name: name, value: value, expiration: expiration, domain: domain, path: path });
};

exports.read = read;
exports.write = write;