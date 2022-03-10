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

class GMapMarkerDetail {

  domNode;
  closeButton;
  content;

  constructor(domNode) {
    this.domNode = domNode;
    this.closeButton = this.domNode.querySelector('.gmap-marker-detail__close');
    this.content = this.domNode.querySelector('.gmap-marker-detail__content');

    this.bindListeners();
  }

  bindListeners() {
    this.closeButton.addEventListener('click', this.hide.bind(this));
  }

  updateContent(htmlContent) {
    this.showLoading();
    this.content.innerHTML = htmlContent;
    this.hideLoading();
  }

  showLoading() {
    this.domNode.classList.add('gmap-marker-detail--loading');
  }

  hideLoading() {
    this.domNode.classList.remove('gmap-marker-detail--loading');
  }

  show() {
    this.domNode.classList.add('gmap-marker-detail--visible');
  }

  hide() {
    this.domNode.classList.remove('gmap-marker-detail--visible');
  }

  setPosition({x = 0, y = 0} = {}) {
    this.domNode.style.left = `${x}px`;
    this.domNode.style.top = `${y}px`;
  }

  getRect() {
    return this.domNode.getBoundingClientRect();
  }
}

export default GMapMarkerDetail;
