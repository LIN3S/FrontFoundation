'use strict';

var _lin3sEventBus = require('lin3s-event-bus');

var _FormTextarea = require('./FormTextarea');

var _FormTextarea2 = _interopRequireDefault(_FormTextarea);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

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

var initFormTextareas = function initFormTextareas() {
  var formTextAreas = document.querySelectorAll('.js-form-textarea');

  Array.from(formTextAreas).forEach(function (formTextArea) {
    return new _FormTextarea2.default(formTextArea);
  });
};

(0, _lin3sEventBus.onDomReady)(initFormTextareas, -1);