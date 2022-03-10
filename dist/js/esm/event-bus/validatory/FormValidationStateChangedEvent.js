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

import {Event} from 'lin3s-event-bus';

class FormValidationStateChangedEvent extends Event {

  static NAME = 'FORM_VALIDATION_STATE_CHANGED';

  formValidatorInstance;

  constructor(formValidatorInstance) {
    super(FormValidationStateChangedEvent.NAME);

    this.formValidatorInstance = formValidatorInstance;
  }
}

export default FormValidationStateChangedEvent;
