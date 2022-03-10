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

var htmlLang = void 0;
var getHtmlLang = function getHtmlLang() {
  if (htmlLang === undefined) {
    htmlLang = document.getElementsByTagName('html')[0].getAttribute('lang');
  }

  return htmlLang;
};

exports.default = getHtmlLang;