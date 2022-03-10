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

import {onWindowResized, onDomLoaded} from 'lin3s-event-bus';
import {ScrollAdvancedStickyObserver} from 'foes-scrollproxy';
import {onUpdated as onDomNodeUpdated} from '../../../../event-bus/DomNodeUpdated/subscriptions';

class AsideSticky {

  static BREAKPOINT = {
    MOBILE: 'MOBILE',
    DESKTOP: 'DESKTOP'
  };

  stickyObserver;
  stickyAside;
  stickyArticle;

  domNode;
  breakpoint;

  constructor(domNode) {
    this.domNode = domNode;
    this.stickyAside = this.domNode.querySelector('.js-aside-sticky-aside');
    this.stickyArticle = this.domNode.querySelector('.js-aside-sticky-article');
    this.stickyConfigParameters = this.getStickyConfigParametersFromDomDataValues();

    this.mobileBreakpoint = parseInt(this.domNode.dataset.mobileBreakpoint, 10);

    this.bindListeners();
  }

  getStickyConfigParametersFromDomDataValues() {
    return {
      triggerOffset: parseInt(this.domNode.dataset.triggerOffset, 10),
      stickyOffsetTop: parseInt(this.domNode.dataset.offsetTop, 10),
      stickyOffsetBottom: parseInt(this.domNode.dataset.offsetBottom, 10),
      stickyInnerOffsetTop: parseInt(this.domNode.dataset.innerOffsetTop, 10),
      stickyInnerOffsetBottom: parseInt(this.domNode.dataset.innerOffsetBottom, 10)
    };
  }

  bindListeners() {
    onDomLoaded(this.handleWindowResize.bind(this));
    onWindowResized(this.handleWindowResize.bind(this));
    onDomNodeUpdated(this.domNode, this.onStickyContentUpdated.bind(this));
  }

  onStickyContentUpdated() {
    if (this.stickyObserver === undefined) {
      return;
    }

    this.stickyObserver.init();
  }

  handleWindowResize(windowResizedEvent) {
    const
      windowWidth = windowResizedEvent !== undefined ? windowResizedEvent.windowWidth : undefined,
      newBreakpoint = this.getBreakpointByWindowWidth(windowWidth);

    if (this.breakpoint !== newBreakpoint) {
      this.breakpoint = newBreakpoint;

      if (this.breakpoint === AsideSticky.BREAKPOINT.MOBILE) {
        if (this.stickyObserver !== undefined) {
          this.stickyObserver.destroy();
          this.stickyObserver = undefined;
        }
      } else if (this.stickyObserver === undefined) {
        this.stickyObserver = new ScrollAdvancedStickyObserver(
          this.stickyAside,
          this.stickyArticle,
          this.domNode,
          this.stickyConfigParameters
        );
      }
    }
  }

  getBreakpointByWindowWidth(windowWidth = window.innerWidth) {
    return windowWidth < this.mobileBreakpoint ? AsideSticky.BREAKPOINT.MOBILE : AsideSticky.BREAKPOINT.DESKTOP;
  }

}

export default AsideSticky;
