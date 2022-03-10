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

import dispatchNativeEvent from '../../../../dom/dispatchNativeEvent';

class FormGroupRadio {

  domNode;

  constructor(domNode) {
    this.domNode = domNode;
    this.hiddenInput = this.domNode.querySelector('.form-group-radio__hidden');
    this.radios = Array.from(this.domNode.querySelectorAll('.form-radio__circle'));

    if (this.hiddenInput === undefined) {
      return;
    }

    this.onRadioChanged = this.onRadioChanged.bind(this);

    this.radios.forEach(radio => {
      radio.addEventListener('change', this.onRadioChanged);
    });
  }

  onRadioChanged() {
    const checkedRadio = this.radios.find(radio => radio.checked);

    this.hiddenInput.value = checkedRadio !== undefined ? checkedRadio.value : '';
    dispatchNativeEvent(this.hiddenInput, 'change');
  }
}

export default FormGroupRadio;
