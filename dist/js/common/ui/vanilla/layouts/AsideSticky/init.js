'use strict';

var _lin3sEventBus = require('lin3s-event-bus');

var _AsideSticky = require('./AsideSticky');

var _AsideSticky2 = _interopRequireDefault(_AsideSticky);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

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

var ASIDE_STICKY_SELECTOR = '.js-aside-sticky';

var initStickies = function initStickies() {
  var stickies = document.querySelectorAll('.js-aside-sticky');

  Array.from(stickies).forEach(function (sticky) {
    return new _AsideSticky2.default(sticky);
  });

  (0, _lin3sEventBus.onNodeAdded)({ selector: ASIDE_STICKY_SELECTOR }, function (nodeAddedEvent) {
    return nodeAddedEvent.nodes.forEach(function (sticky) {
      return new _AsideSticky2.default(sticky);
    });
  });
};

(0, _lin3sEventBus.onDomReady)(initStickies, -1);