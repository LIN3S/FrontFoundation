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

exports.default = function (scriptPath) {
  var head = document.getElementsByTagName('head')[0];

  return new Promise(function (resolve) {
    var script = document.createElement('script');
    script.type = 'text/javascript';
    script.src = scriptPath;
    script.onload = function () {
      return resolve();
    };
    head.appendChild(script);
  });
};