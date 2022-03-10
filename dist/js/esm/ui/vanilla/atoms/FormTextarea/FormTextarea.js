/*
 * This file is part of the Front Foundation package.
 *
 * Copyright (c) 2017-present LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Mikel Tuesta <mikeltuesta@gmail.com>
 *
 * Mostly based on https://github.com/evyros/textarea-autogrow
 */

import {onWindowResized} from 'lin3s-event-bus';

const
  AUTOGROW_DATA_ATTRIBUTE = 'data-autogrow',
  AUTOGROW_MAX_LINES_DATA_ATTRIBUTE = 'data-autogrow-max-lines';

class FormTextarea {

  domNode;

  constructor(domNode) {
    this.domNode = domNode;

    this.autoGrowEnabled = this.domNode.hasAttribute(AUTOGROW_DATA_ATTRIBUTE);
    this.autoGrowMaxLines = this.domNode.hasAttribute(AUTOGROW_MAX_LINES_DATA_ATTRIBUTE)
      ? this.domNode.getAttribute(AUTOGROW_MAX_LINES_DATA_ATTRIBUTE) : 0;

    this.bindListeners();

    this.onInput = this.onInput.bind(this);
    this.onWindowResized = this.onWindowResized.bind(this);
    this.initAutoGrow();
  }

  bindListeners() {
    this.domNode.addEventListener('focus', () => {
      this.domNode.focus();
    });
  }

  bindTextAreaListeners() {
    this.domNode.addEventListener('input', this.onInput);

    onWindowResized(this.onWindowResized);
  }

  initAutoGrow() {
    if (!this.autoGrowEnabled) {
      return;
    }

    this.originalScrollHeight = this.domNode.scrollHeight;
    this.rows = this.domNode.rows || 1;

    this.mapAutoGrowData();

    this.bindTextAreaListeners();
  }

  getOffset() {
    const
      style = window.getComputedStyle(this.domNode, null),
      props = ['paddingTop', 'paddingBottom'];

    return props.reduce((accOffset, prop) => accOffset + parseInt(style[prop]), 0);
  }

  mapAutoGrowData() {
    this.offset = this.getOffset();
    const lineHeight = (this.originalScrollHeight / this.rows) - (this.offset / this.rows);

    this.maxAllowedHeight = (lineHeight * this.autoGrowMaxLines) - this.offset;
    this.minHeight = Math.min((lineHeight * this.rows) + this.offset, this.maxAllowedHeight);
  }

  onWindowResized() {
    this.mapAutoGrowData();
    this.onInput();
  }

  onInput() {
    let
      newHeight = 0,
      hasGrown = false;

    if((this.domNode.scrollHeight - this.offset) > this.maxAllowedHeight) {
      this.domNode.style.overflowY = 'scroll';
      newHeight = this.maxAllowedHeight;
    } else {
      this.domNode.style.overflowY = 'hidden';
      this.domNode.style.height = 'auto';
      newHeight = Math.max(this.minHeight, this.domNode.scrollHeight);
      hasGrown = true;
    }

    this.domNode.style.height = newHeight + 'px';

    return hasGrown;
  }
}

export default FormTextarea;
