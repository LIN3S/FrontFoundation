'use strict';

Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.onGeocode = exports.onMarkerSelected = exports.onInitialized = undefined;

var _lin3sEventBus = require('lin3s-event-bus');

var _GMapInitializedEventSubscriber = require('./GMapInitializedEventSubscriber');

var _GMapInitializedEventSubscriber2 = _interopRequireDefault(_GMapInitializedEventSubscriber);

var _GMapMarkerSelectedEventSubscriber = require('./GMapMarkerSelectedEventSubscriber');

var _GMapMarkerSelectedEventSubscriber2 = _interopRequireDefault(_GMapMarkerSelectedEventSubscriber);

var _GMapGeocodeEventSubscriber = require('./GMapGeocodeEventSubscriber');

var _GMapGeocodeEventSubscriber2 = _interopRequireDefault(_GMapGeocodeEventSubscriber);

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
 * @author Ander Rodriguez <AnderRodriguezVarela@gmail.com>
 */

var onInitialized = function onInitialized(domNode, onGMapInitializedCallback, priority) {
  var gmapInitializedEventSubscriber = new _GMapInitializedEventSubscriber2.default(domNode, onGMapInitializedCallback, new _lin3sEventBus.Priority(priority));

  _lin3sEventBus.OneTimeEventPublisher.subscribe(gmapInitializedEventSubscriber);

  return gmapInitializedEventSubscriber;
},
    onMarkerSelected = function onMarkerSelected(domNode, onGMapMarkerSelectedCallback, priority) {
  var gmapMarkerSelectedEventSubscriber = new _GMapMarkerSelectedEventSubscriber2.default(domNode, onGMapMarkerSelectedCallback, new _lin3sEventBus.Priority(priority));

  _lin3sEventBus.LifeTimeEventPublisher.subscribe(gmapMarkerSelectedEventSubscriber);

  return gmapMarkerSelectedEventSubscriber;
},
    onGeocode = function onGeocode(domNode, onGMapGeocodeCallback, priority) {
  var gmapGeocodeEventSubscriber = new _GMapGeocodeEventSubscriber2.default(domNode, onGMapGeocodeCallback, new _lin3sEventBus.Priority(priority));

  _lin3sEventBus.LifeTimeEventPublisher.subscribe(gmapGeocodeEventSubscriber);

  return gmapGeocodeEventSubscriber;
};

exports.onInitialized = onInitialized;
exports.onMarkerSelected = onMarkerSelected;
exports.onGeocode = onGeocode;