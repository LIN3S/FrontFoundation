'use strict';

var _lin3sEventBus = require('lin3s-event-bus');

var _FormCheckbox = require('./FormCheckbox');

var _FormCheckbox2 = _interopRequireDefault(_FormCheckbox);

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

var initFormCheckboxes = function initFormCheckboxes() {
  var formCheckboxes = document.querySelectorAll('.js-form-checkbox');

  Array.from(formCheckboxes).forEach(function (formCheckbox) {
    return new _FormCheckbox2.default(formCheckbox);
  });
};

(0, _lin3sEventBus.onDomReady)(initFormCheckboxes, -1);