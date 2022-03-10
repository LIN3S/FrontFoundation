'use strict';

var _lin3sEventBus = require('lin3s-event-bus');

var _FormInput = require('./FormInput');

var _FormInput2 = _interopRequireDefault(_FormInput);

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

var initFormInputs = function initFormInputs() {
  var formInputs = document.querySelectorAll('.js-form-input');

  Array.from(formInputs).forEach(function (formInput) {
    return new _FormInput2.default(formInput);
  });
};

(0, _lin3sEventBus.onDomReady)(initFormInputs, -1);