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

import {onDomReady} from 'lin3s-event-bus';
import FormCheckbox from './FormCheckbox';

const initFormCheckboxes = () => {
  const formCheckboxes = document.querySelectorAll('.js-form-checkbox');

  Array.from(formCheckboxes).forEach(formCheckbox => new FormCheckbox(formCheckbox));
};

onDomReady(initFormCheckboxes, -1);
