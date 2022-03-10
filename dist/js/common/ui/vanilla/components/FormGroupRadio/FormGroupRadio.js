'use strict';

Object.defineProperty(exports, "__esModule", {
  value: true
});

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }(); /*
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      * This file is part of the Front Foundation package.
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      *
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      * Copyright (c) 2017-present LIN3S <info@lin3s.com>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      *
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      * For the full copyright and license information, please view the LICENSE
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      * file that was distributed with this source code.
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      *
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      * @author Mikel Tuesta <mikeltuesta@gmail.com>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      */

var _dispatchNativeEvent = require('../../../../dom/dispatchNativeEvent');

var _dispatchNativeEvent2 = _interopRequireDefault(_dispatchNativeEvent);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

var FormGroupRadio = function () {
  function FormGroupRadio(domNode) {
    var _this = this;

    _classCallCheck(this, FormGroupRadio);

    this.domNode = domNode;
    this.hiddenInput = this.domNode.querySelector('.form-group-radio__hidden');
    this.radios = Array.from(this.domNode.querySelectorAll('.form-radio__circle'));

    if (this.hiddenInput === undefined) {
      return;
    }

    this.onRadioChanged = this.onRadioChanged.bind(this);

    this.radios.forEach(function (radio) {
      radio.addEventListener('change', _this.onRadioChanged);
    });
  }

  _createClass(FormGroupRadio, [{
    key: 'onRadioChanged',
    value: function onRadioChanged() {
      var checkedRadio = this.radios.find(function (radio) {
        return radio.checked;
      });

      this.hiddenInput.value = checkedRadio !== undefined ? checkedRadio.value : '';
      (0, _dispatchNativeEvent2.default)(this.hiddenInput, 'change');
    }
  }]);

  return FormGroupRadio;
}();

exports.default = FormGroupRadio;