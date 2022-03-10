"use strict";

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

exports.default = function (domNode) {
  var selector = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : null;

  var baseNodeList = selector !== null ? domNode.parentNode.querySelectorAll(selector) : domNode.parentNode.children;

  return Array.from(baseNodeList).findIndex(function (child) {
    return child === domNode;
  });
};