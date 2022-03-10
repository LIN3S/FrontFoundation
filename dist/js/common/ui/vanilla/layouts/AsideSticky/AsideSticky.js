'use strict';

Object.defineProperty(exports, "__esModule", {
  value: true
});

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }(); /*
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      * This file is part of the Front Foundation package.
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      *
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      * Copyright (c) 2017-present LIN3S <info@lin3s.com>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      *
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      * For the full copyright and license information, please view the LICENSE
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      * file that was distributed with this source code.
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      *
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      * @author Mikel Tuesta <mikeltuesta@gmail.com>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      */

var _lin3sEventBus = require('lin3s-event-bus');

var _foesScrollproxy = require('foes-scrollproxy');

var _subscriptions = require('../../../../event-bus/DomNodeUpdated/subscriptions');

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

var AsideSticky = function () {
  function AsideSticky(domNode) {
    _classCallCheck(this, AsideSticky);

    this.domNode = domNode;
    this.stickyAside = this.domNode.querySelector('.js-aside-sticky-aside');
    this.stickyArticle = this.domNode.querySelector('.js-aside-sticky-article');
    this.stickyConfigParameters = this.getStickyConfigParametersFromDomDataValues();

    this.mobileBreakpoint = parseInt(this.domNode.dataset.mobileBreakpoint, 10);

    this.bindListeners();
  }

  _createClass(AsideSticky, [{
    key: 'getStickyConfigParametersFromDomDataValues',
    value: function getStickyConfigParametersFromDomDataValues() {
      return {
        triggerOffset: parseInt(this.domNode.dataset.triggerOffset, 10),
        stickyOffsetTop: parseInt(this.domNode.dataset.offsetTop, 10),
        stickyOffsetBottom: parseInt(this.domNode.dataset.offsetBottom, 10),
        stickyInnerOffsetTop: parseInt(this.domNode.dataset.innerOffsetTop, 10),
        stickyInnerOffsetBottom: parseInt(this.domNode.dataset.innerOffsetBottom, 10)
      };
    }
  }, {
    key: 'bindListeners',
    value: function bindListeners() {
      (0, _lin3sEventBus.onDomLoaded)(this.handleWindowResize.bind(this));
      (0, _lin3sEventBus.onWindowResized)(this.handleWindowResize.bind(this));
      (0, _subscriptions.onUpdated)(this.domNode, this.onStickyContentUpdated.bind(this));
    }
  }, {
    key: 'onStickyContentUpdated',
    value: function onStickyContentUpdated() {
      if (this.stickyObserver === undefined) {
        return;
      }

      this.stickyObserver.init();
    }
  }, {
    key: 'handleWindowResize',
    value: function handleWindowResize(windowResizedEvent) {
      var windowWidth = windowResizedEvent !== undefined ? windowResizedEvent.windowWidth : undefined,
          newBreakpoint = this.getBreakpointByWindowWidth(windowWidth);

      if (this.breakpoint !== newBreakpoint) {
        this.breakpoint = newBreakpoint;

        if (this.breakpoint === AsideSticky.BREAKPOINT.MOBILE) {
          if (this.stickyObserver !== undefined) {
            this.stickyObserver.destroy();
            this.stickyObserver = undefined;
          }
        } else if (this.stickyObserver === undefined) {
          this.stickyObserver = new _foesScrollproxy.ScrollAdvancedStickyObserver(this.stickyAside, this.stickyArticle, this.domNode, this.stickyConfigParameters);
        }
      }
    }
  }, {
    key: 'getBreakpointByWindowWidth',
    value: function getBreakpointByWindowWidth() {
      var windowWidth = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : window.innerWidth;

      return windowWidth < this.mobileBreakpoint ? AsideSticky.BREAKPOINT.MOBILE : AsideSticky.BREAKPOINT.DESKTOP;
    }
  }]);

  return AsideSticky;
}();

AsideSticky.BREAKPOINT = {
  MOBILE: 'MOBILE',
  DESKTOP: 'DESKTOP'
};
exports.default = AsideSticky;