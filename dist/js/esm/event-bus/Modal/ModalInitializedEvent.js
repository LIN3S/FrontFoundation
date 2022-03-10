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

import {Event} from 'lin3s-event-bus';

class ModalInitializedEvent extends Event {

  static NAME = 'MODAL_INITIALIZED';

  constructor({domNode, open, close} = {}) {
    super(ModalInitializedEvent.NAME);

    this.domNode = domNode;
    this.open = open;
    this.close = close;
  }
}

export default ModalInitializedEvent;
