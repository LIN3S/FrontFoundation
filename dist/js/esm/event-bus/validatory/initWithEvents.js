/*
 * This file is part of the Front Foundation package.
 *
 * Copyright (c) 2018-present LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Mikel Tuesta <mikeltuesta@gmail.com>
 * @author Ander Rodriguez <AnderRodriguezVarela@gmail.com>
 */

import * as Validatory from 'validatory';
import {LifeTimeEventPublisher} from 'lin3s-event-bus';
import FormValidationStateChangedEvent from './FormValidationStateChangedEvent';
import FormElementValidationStateChangedEvent from './FormElementValidationStateChangedEvent';

const initWithEvents = ({formSelector = 'form', formElementSelector = 'input, select, textarea'} = {}) => {
  Validatory.init({
    formSelector,
    formElementSelector,
    onFormValidationStateChanged: formValidatorInstance =>
      LifeTimeEventPublisher.publish(new FormValidationStateChangedEvent(formValidatorInstance)),
    onFormElementValidationStateChanged: formElementValidatorInstance =>
      LifeTimeEventPublisher.publish(new FormElementValidationStateChangedEvent(formElementValidatorInstance))
  });
};

export {
  initWithEvents
};
