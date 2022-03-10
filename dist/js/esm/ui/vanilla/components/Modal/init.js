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

import {onDomReady, onNodeAdded} from 'lin3s-event-bus';
import Modal from './Modal';

const MODAL_SELECTOR = '.js-modal';
const MODAL_TRIGGER_LINK_SELECTOR = 'a[href^="#modal-"]';

const initModal = (modalDomNode) => {
  const
    modalId = modalDomNode.getAttribute('id').replace('modal-', ''),
    modalTriggerLinks = Array.from(document.querySelectorAll(`a[href="#modal-${modalId}"]`));

  const modal = new Modal(modalDomNode);

  if (modalTriggerLinks.length === 0) {
    return;
  }

  modalTriggerLinks.forEach(triggerLink => {
    triggerLink.addEventListener('click', event => {
      event.preventDefault();
      modal.open();
    });
  });
};

const initModals = (modalDomNodes) => {
  modalDomNodes.forEach(modal => initModal(modal));
};

const onReady = () => {
  const modals = Array.from(document.querySelectorAll(MODAL_SELECTOR));

  if (modals.length === 0) {
    return;
  }

  initModals(Array.from(modals));

  onNodeAdded({selector: MODAL_SELECTOR}, nodeAddedEvent => initModals(nodeAddedEvent.nodes));

  onNodeAdded({selector: MODAL_TRIGGER_LINK_SELECTOR}, nodeAddedEvent =>
    nodeAddedEvent.nodes.forEach(modalTriggerLinkNode => {
      const
        modalId = modalTriggerLinkNode.getAttribute('href'),
        modal = document.querySelector(modalId);

      if (modal === undefined) {
        return;
      }

      initModal(modal);
    }));
};

onDomReady(onReady);
