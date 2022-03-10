'use strict';

var _lin3sEventBus = require('lin3s-event-bus');

var _GMapMarkerDetail = require('./GMapMarkerDetail');

var _GMapMarkerDetail2 = _interopRequireDefault(_GMapMarkerDetail);

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

var initGMapMarkerDetails = function initGMapMarkerDetails() {
  var gmapMarkerDetails = document.querySelectorAll('.js-gmap-marker-detail');

  Array.from(gmapMarkerDetails).forEach(function (gmapMarkerDetail) {
    return new _GMapMarkerDetail2.default(gmapMarkerDetail);
  });
};

(0, _lin3sEventBus.onDomReady)(initGMapMarkerDetails, -1);