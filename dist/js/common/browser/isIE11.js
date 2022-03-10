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

exports.default = function () {
  var ua = window.navigator.userAgent,
      trident = ua.indexOf('Trident/');

  var result = false;
  if (trident > 0) {
    var rv = ua.indexOf('rv:');

    result = parseInt(ua.substring(rv + 3, ua.indexOf('.', rv)), 10);
  }

  return result === 11;
};