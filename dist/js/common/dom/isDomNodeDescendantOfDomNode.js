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

exports.default = function (needleDomNode, domNode) {
  var parentNode = needleDomNode.parentNode;

  while (parentNode !== null) {
    if (parentNode === domNode) {
      return true;
    }

    parentNode = parentNode.parentNode;
  }

  return false;
};