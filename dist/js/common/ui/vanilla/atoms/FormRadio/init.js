'use strict';

var _lin3sEventBus = require('lin3s-event-bus');

var _FormRadio = require('./FormRadio');

var _FormRadio2 = _interopRequireDefault(_FormRadio);

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

var initFormRadios = function initFormRadios() {
  var formRadios = document.querySelectorAll('.js-form-radio');

  Array.from(formRadios).forEach(function (formRadio) {
    return new _FormRadio2.default(formRadio);
  });
};

(0, _lin3sEventBus.onDomReady)(initFormRadios, -1);