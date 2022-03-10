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
import FormGroupRadio from './FormGroupRadio';

const initFormGroupRadios = () => {
  const formGroupRadios = document.querySelectorAll('.js-form-group-radio');

  Array.from(formGroupRadios).forEach(formGroupRadio => new FormGroupRadio(formGroupRadio));
};

onDomReady(initFormGroupRadios, -1);
