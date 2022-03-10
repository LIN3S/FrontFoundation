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

var FormCheckbox = function () {
  function FormCheckbox(domNode) {
    var _this = this;

    _classCallCheck(this, FormCheckbox);

    this.domNode = domNode;
    this.checkboxNode = this.domNode.querySelector('.form-checkbox__check');

    this.domNode.addEventListener('keydown', this.onKeyDown.bind(this));
    this.domNode.addEventListener('focus', function () {
      _this.domNode.focus();
    });
  }

  _createClass(FormCheckbox, [{
    key: 'onKeyDown',
    value: function onKeyDown(event) {
      var keyCode = event.which;

      if (keyCode !== 13) {
        return;
      }

      this.checkboxNode.checked = !this.checkboxNode.checked;

      (0, _dispatchNativeEvent2.default)(this.checkboxNode, 'change');
    }
  }]);

  return FormCheckbox;
}();

exports.default = FormCheckbox;