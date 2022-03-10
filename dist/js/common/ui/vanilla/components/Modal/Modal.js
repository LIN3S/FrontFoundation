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

var _lin3sEventBus = require('lin3s-event-bus');

var _ModalStateChangedEvent = require('./../../../../event-bus/Modal/ModalStateChangedEvent');

var _ModalStateChangedEvent2 = _interopRequireDefault(_ModalStateChangedEvent);

var _ModalInitializedEvent = require('./../../../../event-bus/Modal/ModalInitializedEvent');

var _ModalInitializedEvent2 = _interopRequireDefault(_ModalInitializedEvent);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

var Modal = function () {
  function Modal(domNode) {
    _classCallCheck(this, Modal);

    this.domNode = domNode;
    this.closeButton = this.domNode.querySelector('.modal__close-button');
    this.content = this.domNode.querySelector('.modal__content');
    this.state = Modal.STATE.CLOSED;

    this.open = this.open.bind(this);
    this.close = this.close.bind(this);
    this.onCloseButtonClick = this.onCloseButtonClick.bind(this);
    this.onKeyDown = this.onKeyDown.bind(this);

    this.bindListeners();
    this.publishModalInitializedEvent();
  }

  _createClass(Modal, [{
    key: 'bindListeners',
    value: function bindListeners() {
      this.domNode.addEventListener('click', this.close);
      this.closeButton.addEventListener('click', this.onCloseButtonClick);
      this.content.addEventListener('click', function (event) {
        return event.stopPropagation();
      });
    }
  }, {
    key: 'onCloseButtonClick',
    value: function onCloseButtonClick(event) {
      event.preventDefault();
      event.stopPropagation();

      this.close();
    }
  }, {
    key: 'onKeyDown',
    value: function onKeyDown(keyDownEvent) {
      var key = keyDownEvent.which || keyDownEvent.keyCode;

      if (key === 27) {
        this.close();
      }
    }
  }, {
    key: 'open',
    value: function open() {
      this.domNode.classList.add(Modal.OPENED_CSS_CLASS);
      this.state = Modal.STATE.OPENED;

      document.addEventListener('keydown', this.onKeyDown);
      this.publishModalStateChangedEvent();
    }
  }, {
    key: 'close',
    value: function close() {
      this.domNode.classList.remove(Modal.OPENED_CSS_CLASS);
      this.state = Modal.STATE.CLOSED;

      document.removeEventListener('keydown', this.onKeyDown);
      this.publishModalStateChangedEvent();
    }
  }, {
    key: 'publishModalStateChangedEvent',
    value: function publishModalStateChangedEvent() {
      _lin3sEventBus.LifeTimeEventPublisher.publish(new _ModalStateChangedEvent2.default({
        open: this.open,
        close: this.close,
        domNode: this.domNode,
        state: this.state
      }));
    }
  }, {
    key: 'publishModalInitializedEvent',
    value: function publishModalInitializedEvent() {
      _lin3sEventBus.OneTimeEventPublisher.publish(new _ModalInitializedEvent2.default({
        open: this.open.bind(this),
        close: this.close.bind(this),
        domNode: this.domNode
      }));
    }
  }]);

  return Modal;
}();

Modal.OPENED_CSS_CLASS = 'modal--opened';
Modal.STATE = {
  OPENED: 'OPENED',
  CLOSED: 'CLOSED'
};
exports.default = Modal;