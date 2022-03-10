'use strict';

Object.defineProperty(exports, "__esModule", {
  value: true
});
/*
 * This file is part of the Re_ Magazine project.
 *
 * Copyright (c) 2016-present LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author David Lores <david@lin3s.com>
 * @author Ander Rodriguez <AnderRodriguezVarela@gmail.com>
 * https://gist.github.com/likewinter/3f4cdf79f7efc360e0d9de6194b81ab4
 */

var easeInOutQuad = function easeInOutQuad(currentTime, start, change, duration) {
  var value = currentTime /= duration / 2;
  if (value < 1) {
    return change / 2 * currentTime * currentTime + start;
  }

  return -change / 2 * (--currentTime * (currentTime - 2) - 1) + start;
};

var requestAnimFrame = function () {
  return window.requestAnimationFrame || window.webkitRequestAnimationFrame || window.mozRequestAnimationFrame || function (callback) {
    return window.setTimeout(callback, 1000 / 60);
  };
}();

var scrollTo = function scrollTo(to, duration, callback) {
  var move = function move(amount) {
    document.documentElement.scrollTop = amount;
    document.body.parentNode.scrollTop = amount;
    document.body.scrollTop = amount;
  };
  var start = document.documentElement.scrollTop || document.body.parentNode.scrollTop || document.body.scrollTop;
  var change = to - start;
  var increment = 20;
  var currentTime = 0;

  var animateScroll = function animateScroll() {
    currentTime += increment;
    var val = easeInOutQuad(currentTime, start, change, duration);
    move(val);
    if (currentTime < duration) {
      requestAnimFrame(animateScroll);
    } else if (callback && typeof callback === 'function') {
      callback();
    }
  };
  animateScroll();
};

var scrollToElement = function scrollToElement(toSelector) {
  var _ref = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : {},
      _ref$duration = _ref.duration,
      duration = _ref$duration === undefined ? 500 : _ref$duration,
      _ref$offset = _ref.offset,
      offset = _ref$offset === undefined ? 0 : _ref$offset,
      _ref$callback = _ref.callback,
      callback = _ref$callback === undefined ? null : _ref$callback;

  var element = document.querySelector(toSelector);
  if (!element) {
    return;
  }

  scrollTo(element.getBoundingClientRect().top - offset + window.pageYOffset, duration, callback);
};

exports.default = scrollToElement;