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

class FormInput {

  domNode;

  constructor(domNode) {
    this.domNode = domNode;

    this.domNode.addEventListener('focus', () => {
      this.domNode.focus();
    });
  }
}

export default FormInput;
