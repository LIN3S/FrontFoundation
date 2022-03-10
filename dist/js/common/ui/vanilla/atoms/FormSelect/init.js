'use strict';

var _lin3sEventBus = require('lin3s-event-bus');

var _FormSelect = require('./FormSelect');

var _FormSelect2 = _interopRequireDefault(_FormSelect);

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

var initFormSelects = function initFormSelects() {
  var formSelects = document.querySelectorAll('.js-form-select');

  Array.from(formSelects).forEach(function (formSelect) {
    return new _FormSelect2.default(formSelect);
  });
};

(0, _lin3sEventBus.onDomReady)(initFormSelects, -1);