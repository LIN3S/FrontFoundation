'use strict';

var _lin3sEventBus = require('lin3s-event-bus');

var _FormGroupRadio = require('./FormGroupRadio');

var _FormGroupRadio2 = _interopRequireDefault(_FormGroupRadio);

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

var initFormGroupRadios = function initFormGroupRadios() {
  var formGroupRadios = document.querySelectorAll('.js-form-group-radio');

  Array.from(formGroupRadios).forEach(function (formGroupRadio) {
    return new _FormGroupRadio2.default(formGroupRadio);
  });
};

(0, _lin3sEventBus.onDomReady)(initFormGroupRadios, -1);