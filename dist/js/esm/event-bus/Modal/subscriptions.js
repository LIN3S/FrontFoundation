/*
 * This file is part of the Front Foundation package.
 *
 * Copyright (c) 2017-present LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Mikel Tuesta <mikeltuesta@gmail.com>
 * @author Ander Rodriguez <AnderRodriguezVarela@gmail.com>
 */

import {Priority, OneTimeEventPublisher, LifeTimeEventPublisher} from 'lin3s-event-bus';
import ModalStateChangedEventSubscriber from './ModalStateChangedEventSubscriber';
import ModalInitializedEventSubscriber from './ModalInitializedEventSubscriber';

const
  onInitialized = (modalId, onModalInitializedCallback, priority) => {
    const modalInitializedEventSubscriber = new ModalInitializedEventSubscriber(
      modalId,
      onModalInitializedCallback,
      new Priority(priority)
    );

    OneTimeEventPublisher.subscribe(modalInitializedEventSubscriber);

    return modalInitializedEventSubscriber;
  },
  onStateChanged = (onModalStateChangedCallback, priority) => {
    const modalStateChangedEventSubscriber = new ModalStateChangedEventSubscriber(
      onModalStateChangedCallback,
      new Priority(priority)
    );

    LifeTimeEventPublisher.subscribe(modalStateChangedEventSubscriber);

    return modalStateChangedEventSubscriber;
  };

export {
  onStateChanged,
  onInitialized,
};
