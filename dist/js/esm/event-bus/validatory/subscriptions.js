/*
 * This file is part of the Front Foundation package.
 *
 * Copyright (c) 2018-present LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Mikel Tuesta <mikeltuesta@gmail.com>
 */

import {LifeTimeEventPublisher} from 'lin3s-event-bus';
import FormValidationStateChangedEventSubscriber from './FormValidationStateChangedEventSubscriber';
import FormElementValidationStateChangedEventSubscriber from './FormElementValidationStateChangedEventSubscriber';

const
  onFormStateChanged = (formDomNode, stateChangedCallback) => {
    const subscriber = new FormValidationStateChangedEventSubscriber(formDomNode, stateChangedCallback);
    LifeTimeEventPublisher.subscribe(subscriber);

    return subscriber;
  },
  onFormElementStateChanged = (formElementDomNode, stateChangedCallback) => {
    const subscriber = new FormElementValidationStateChangedEventSubscriber(formElementDomNode, stateChangedCallback);
    LifeTimeEventPublisher.subscribe(subscriber);

    return subscriber;
  };

export {
  onFormStateChanged,
  onFormElementStateChanged
};
