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

class FormSelectStateChangedEvent extends Event {

  static NAME = 'FORM_SELECT_STATE_CHANGED';

  constructor(formSelectInstance, state) {
    super(FormSelectStateChangedEvent.NAME);

    this.formSelectInstance = formSelectInstance;
    this.state = state;
  }
}

export default FormSelectStateChangedEvent;
