/*
 * This file is part of the Euskaltel project.
 *
 * Copyright (c) 2017 LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Mikel Tuesta <mikel@lin3s.com>
 */

import {EventSubscriber} from 'lin3s-event-bus';
import ModalInitializedEvent from './ModalInitializedEvent';

class ModalInitializedEventSubscriber extends EventSubscriber {
  constructor(modalId, aCallback, aPriority) {
    super(aCallback, aPriority);

    this.modalId = modalId;
  }

  isSubscribedTo(anEvent) {
    const event = new ModalInitializedEvent();

    return anEvent.getName() === event.getName() && anEvent.domNode.id === this.modalId;
  }
}

export default ModalInitializedEventSubscriber;
