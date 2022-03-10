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

import {Event} from 'lin3s-event-bus';

class ModalStateChangedEvent extends Event {

  static NAME = 'MODAL_STATE_CHANGED';

  constructor({domNode, state, open, close} = {}) {
    super(ModalStateChangedEvent.NAME);

    this.domNode = domNode;
    this.state = state;
    this.open = open;
    this.close = close;
  }
}

export default ModalStateChangedEvent;
