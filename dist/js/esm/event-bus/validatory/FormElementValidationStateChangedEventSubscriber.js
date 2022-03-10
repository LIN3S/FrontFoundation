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

import {EventSubscriber} from 'lin3s-event-bus';
import FormElementValidationStateChangedEvent from './FormElementValidationStateChangedEvent';

class FormElementValidationStateChangedEventSubscriber extends EventSubscriber {

  constructor(domNode, callback, priority) {
    super(callback, priority);

    this.domNode = domNode;
  }

  isSubscribedTo(anEvent) {
    const event = new FormElementValidationStateChangedEvent();

    return anEvent.getName() === event.getName()
      && this.domNode === anEvent.formElementValidatorInstance.formElementDomNode;
  }
}

export default FormElementValidationStateChangedEventSubscriber;
