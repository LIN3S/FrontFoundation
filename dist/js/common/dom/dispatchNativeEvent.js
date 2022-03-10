'use strict';

Object.defineProperty(exports, "__esModule", {
  value: true
});
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

(function () {
  if (typeof window.CustomEvent === 'function') {
    return false;
  }

  var CustomEvent = function CustomEvent(event, params) {
    params = params || {
      bubbles: false,
      cancelable: false,
      detail: undefined
    };

    var customEvent = document.createEvent('CustomEvent');
    customEvent.initCustomEvent(event, params.bubbles, params.cancelable, params.detail);

    return customEvent;
  };

  CustomEvent.prototype = window.Event.prototype;

  window.CustomEvent = CustomEvent;
})();

exports.default = function (domNode, eventName) {
  var evt = new CustomEvent(eventName, { bubbles: true, cancelable: true });
  domNode.dispatchEvent(evt);
};