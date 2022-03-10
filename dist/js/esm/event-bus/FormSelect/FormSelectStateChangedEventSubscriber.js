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

import {EventSubscriber} from 'lin3s-event-bus';
import FormSelectStateChangedEvent from './FormSelectStateChangedEvent';
import {isDomNodeDescendantOfDomNode} from './../../dom';

class FormSelectStateChangedEventSubscriber extends EventSubscriber {

  constructor(domNode, aCallback, aPriority) {
    super(aCallback, aPriority);

    this.domNode = domNode;
  }

  isSubscribedTo(anEvent) {
    const event = new FormSelectStateChangedEvent();

    return anEvent.getName() === event.getName() && (this.domNode === anEvent.formSelectInstance.domNode
      || isDomNodeDescendantOfDomNode(anEvent.formSelectInstance.domNode, this.domNode));
  }
}

export default FormSelectStateChangedEventSubscriber;
