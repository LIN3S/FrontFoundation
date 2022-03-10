'use strict';

Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.Vanilla = exports.React = undefined;

var _index = require('./react/index');

var React = _interopRequireWildcard(_index);

var _index2 = require('./vanilla/index');

var Vanilla = _interopRequireWildcard(_index2);

function _interopRequireWildcard(obj) { if (obj && obj.__esModule) { return obj; } else { var newObj = {}; if (obj != null) { for (var key in obj) { if (Object.prototype.hasOwnProperty.call(obj, key)) newObj[key] = obj[key]; } } newObj.default = obj; return newObj; } }

/*
 * This file is part of the Front Foundation package.
 *
 * Copyright (c) 2017-present LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 * @author Mikel Tuesta <mikeltuesta@gmail.com>
 */

exports.React = React;
exports.Vanilla = Vanilla;