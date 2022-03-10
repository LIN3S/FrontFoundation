'use strict';

Object.defineProperty(exports, "__esModule", {
  value: true
});

var _lin3sEventBus = require('lin3s-event-bus');

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _possibleConstructorReturn(self, call) { if (!self) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return call && (typeof call === "object" || typeof call === "function") ? call : self; }

function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function, not " + typeof superClass); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, enumerable: false, writable: true, configurable: true } }); if (superClass) Object.setPrototypeOf ? Object.setPrototypeOf(subClass, superClass) : subClass.__proto__ = superClass; } /*
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                * This file is part of the Euskaltel project.
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                *
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                * Copyright (c) 2017 LIN3S <info@lin3s.com>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                *
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                * For the full copyright and license information, please view the LICENSE
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                * file that was distributed with this source code.
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                *
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                * @author Mikel Tuesta <mikel@lin3s.com>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                */

var ModalInitializedEvent = function (_Event) {
  _inherits(ModalInitializedEvent, _Event);

  function ModalInitializedEvent() {
    var _ref = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : {},
        domNode = _ref.domNode,
        open = _ref.open,
        close = _ref.close;

    _classCallCheck(this, ModalInitializedEvent);

    var _this = _possibleConstructorReturn(this, (ModalInitializedEvent.__proto__ || Object.getPrototypeOf(ModalInitializedEvent)).call(this, ModalInitializedEvent.NAME));

    _this.domNode = domNode;
    _this.open = open;
    _this.close = close;
    return _this;
  }

  return ModalInitializedEvent;
}(_lin3sEventBus.Event);

ModalInitializedEvent.NAME = 'MODAL_INITIALIZED';
exports.default = ModalInitializedEvent;