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

exports.default = function (scriptCode) {
  var domNode = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : document.body;

  var scriptNode = document.createElement('script');
  scriptNode.type = 'text/javascript';

  scriptCode = '(function(){' + scriptCode + '})();';

  try {
    scriptNode.appendChild(document.createTextNode(scriptCode));
    domNode.appendChild(scriptNode);
  } catch (error) {
    scriptNode.text = scriptCode;
    domNode.appendChild(scriptNode);
  }
};