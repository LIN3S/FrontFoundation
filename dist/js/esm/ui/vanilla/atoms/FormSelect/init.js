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
import FormSelect from './FormSelect';

const initFormSelects = () => {
  const formSelects = document.querySelectorAll('.js-form-select');

  Array.from(formSelects).forEach(formSelect => new FormSelect(formSelect));
};

onDomReady(initFormSelects, -1);
