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
import FormSelectInitializedEventSubscriber from './FormSelectInitializedEventSubscriber';
import FormSelectOptionSelectedEventSubscriber from './FormSelectOptionSelectedEventSubscriber';
import FormSelectStateChangedEventSubscriber from './FormSelectStateChangedEventSubscriber';

const
  onInitialized = (domNode, onFormSelectInitializedCallback, priority) => {
    const formSelectInitializedEventSubscriber = new FormSelectInitializedEventSubscriber(
      domNode,
      onFormSelectInitializedCallback,
      new Priority(priority)
    );

    OneTimeEventPublisher.subscribe(formSelectInitializedEventSubscriber);

    return formSelectInitializedEventSubscriber;
  },
  onOptionSelected = (domNode, onFormSelectOptionSelectedCallback, priority) => {
    const formSelectOptionSelectedEventSubscriber = new FormSelectOptionSelectedEventSubscriber(
      domNode,
      onFormSelectOptionSelectedCallback,
      new Priority(priority)
    );

    LifeTimeEventPublisher.subscribe(formSelectOptionSelectedEventSubscriber);

    return formSelectOptionSelectedEventSubscriber;
  },
  onStateChanged = (domNode, onFormSelectStateChangedCallback, priority) => {
    const formSelectStateChangedEventSubscriber = new FormSelectStateChangedEventSubscriber(
      domNode,
      onFormSelectStateChangedCallback,
      new Priority(priority)
    );

    LifeTimeEventPublisher.subscribe(formSelectStateChangedEventSubscriber);

    return formSelectStateChangedEventSubscriber;
  };

export {
  onInitialized,
  onOptionSelected,
  onStateChanged
};
