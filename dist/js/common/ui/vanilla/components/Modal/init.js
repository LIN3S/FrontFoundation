'use strict';

var _lin3sEventBus = require('lin3s-event-bus');

var _Modal = require('./Modal');

var _Modal2 = _interopRequireDefault(_Modal);

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

var MODAL_SELECTOR = '.js-modal';
var MODAL_TRIGGER_LINK_SELECTOR = 'a[href^="#modal-"]';

var initModal = function initModal(modalDomNode) {
  var modalId = modalDomNode.getAttribute('id').replace('modal-', ''),
      modalTriggerLinks = Array.from(document.querySelectorAll('a[href="#modal-' + modalId + '"]'));

  var modal = new _Modal2.default(modalDomNode);

  if (modalTriggerLinks.length === 0) {
    return;
  }

  modalTriggerLinks.forEach(function (triggerLink) {
    triggerLink.addEventListener('click', function (event) {
      event.preventDefault();
      modal.open();
    });
  });
};

var initModals = function initModals(modalDomNodes) {
  modalDomNodes.forEach(function (modal) {
    return initModal(modal);
  });
};

var onReady = function onReady() {
  var modals = Array.from(document.querySelectorAll(MODAL_SELECTOR));

  if (modals.length === 0) {
    return;
  }

  initModals(Array.from(modals));

  (0, _lin3sEventBus.onNodeAdded)({ selector: MODAL_SELECTOR }, function (nodeAddedEvent) {
    return initModals(nodeAddedEvent.nodes);
  });

  (0, _lin3sEventBus.onNodeAdded)({ selector: MODAL_TRIGGER_LINK_SELECTOR }, function (nodeAddedEvent) {
    return nodeAddedEvent.nodes.forEach(function (modalTriggerLinkNode) {
      var modalId = modalTriggerLinkNode.getAttribute('href'),
          modal = document.querySelector(modalId);

      if (modal === undefined) {
        return;
      }

      initModal(modal);
    });
  });
};

(0, _lin3sEventBus.onDomReady)(onReady);