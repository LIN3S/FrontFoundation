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
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      *
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      * Mostly based on https://github.com/evyros/textarea-autogrow
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      */

var _lin3sEventBus = require('lin3s-event-bus');

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

var AUTOGROW_DATA_ATTRIBUTE = 'data-autogrow',
    AUTOGROW_MAX_LINES_DATA_ATTRIBUTE = 'data-autogrow-max-lines';

var FormTextarea = function () {
  function FormTextarea(domNode) {
    _classCallCheck(this, FormTextarea);

    this.domNode = domNode;

    this.autoGrowEnabled = this.domNode.hasAttribute(AUTOGROW_DATA_ATTRIBUTE);
    this.autoGrowMaxLines = this.domNode.hasAttribute(AUTOGROW_MAX_LINES_DATA_ATTRIBUTE) ? this.domNode.getAttribute(AUTOGROW_MAX_LINES_DATA_ATTRIBUTE) : 0;

    this.bindListeners();

    this.onInput = this.onInput.bind(this);
    this.onWindowResized = this.onWindowResized.bind(this);
    this.initAutoGrow();
  }

  _createClass(FormTextarea, [{
    key: 'bindListeners',
    value: function bindListeners() {
      var _this = this;

      this.domNode.addEventListener('focus', function () {
        _this.domNode.focus();
      });
    }
  }, {
    key: 'bindTextAreaListeners',
    value: function bindTextAreaListeners() {
      this.domNode.addEventListener('input', this.onInput);

      (0, _lin3sEventBus.onWindowResized)(this.onWindowResized);
    }
  }, {
    key: 'initAutoGrow',
    value: function initAutoGrow() {
      if (!this.autoGrowEnabled) {
        return;
      }

      this.originalScrollHeight = this.domNode.scrollHeight;
      this.rows = this.domNode.rows || 1;

      this.mapAutoGrowData();

      this.bindTextAreaListeners();
    }
  }, {
    key: 'getOffset',
    value: function getOffset() {
      var style = window.getComputedStyle(this.domNode, null),
          props = ['paddingTop', 'paddingBottom'];

      return props.reduce(function (accOffset, prop) {
        return accOffset + parseInt(style[prop]);
      }, 0);
    }
  }, {
    key: 'mapAutoGrowData',
    value: function mapAutoGrowData() {
      this.offset = this.getOffset();
      var lineHeight = this.originalScrollHeight / this.rows - this.offset / this.rows;

      this.maxAllowedHeight = lineHeight * this.autoGrowMaxLines - this.offset;
      this.minHeight = Math.min(lineHeight * this.rows + this.offset, this.maxAllowedHeight);
    }
  }, {
    key: 'onWindowResized',
    value: function onWindowResized() {
      this.mapAutoGrowData();
      this.onInput();
    }
  }, {
    key: 'onInput',
    value: function onInput() {
      var newHeight = 0,
          hasGrown = false;

      if (this.domNode.scrollHeight - this.offset > this.maxAllowedHeight) {
        this.domNode.style.overflowY = 'scroll';
        newHeight = this.maxAllowedHeight;
      } else {
        this.domNode.style.overflowY = 'hidden';
        this.domNode.style.height = 'auto';
        newHeight = Math.max(this.minHeight, this.domNode.scrollHeight);
        hasGrown = true;
      }

      this.domNode.style.height = newHeight + 'px';

      return hasGrown;
    }
  }]);

  return FormTextarea;
}();

exports.default = FormTextarea;