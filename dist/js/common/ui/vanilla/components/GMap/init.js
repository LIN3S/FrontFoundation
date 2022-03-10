'use strict';

var _lin3sEventBus = require('lin3s-event-bus');

var _dom = require('./../../../../dom');

var _GMap = require('./GMap');

var _GMap2 = _interopRequireDefault(_GMap);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

var GMAP_CLASS_NAME = 'js-gmap'; /*
                                  * This file is part of the Front Foundation package.
                                  *
                                  * Copyright (c) 2017-present LIN3S <info@lin3s.com>
                                  *
                                  * For the full copyright and license information, please view the LICENSE
                                  * file that was distributed with this source code.
                                  *
                                  * @author Mikel Tuesta <mikeltuesta@gmail.com>
                                  */

var loadGMapScripts = function loadGMapScripts(apiKey) {
  var lang = document.querySelector('html').getAttribute('lang');

  (0, _dom.loadScript)('https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js').then(function () {
    return (0, _dom.loadScript)('https://maps.googleapis.com/maps/api/js?key=' + apiKey + '&callback=initGMap&language=' + lang);
  });
};

var onReady = function onReady() {
  var gmap = document.querySelector('.' + GMAP_CLASS_NAME);

  if (gmap === null) {
    return;
  }

  var apiKey = gmap.dataset.apiKey;

  loadGMapScripts(apiKey);
};

window.initGMap = function () {
  var gmaps = document.querySelectorAll('.' + GMAP_CLASS_NAME);

  Array.from(gmaps).forEach(function (map) {
    var centerLat = parseFloat(map.dataset.centerLat, 10),
        centerLng = parseFloat(map.dataset.centerLng, 10),
        initialZoom = parseInt(map.dataset.initialZoom, 10),
        maxZoom = parseInt(map.dataset.maxZoom, 10),
        markerDefaultPath = map.dataset.markerDefaultPath,
        markerSelectedPath = map.dataset.markerSelectedPath,
        markerGroupPath = map.dataset.markerGroupPath,
        markerWidth = parseInt(map.dataset.markerWidth, 10),
        markerHeight = parseInt(map.dataset.markerHeight, 10),
        clusterEnabled = parseInt(map.dataset.clusterEnabled, 10),
        clusterTextOffsetY = parseInt(map.dataset.clusterTextOffsetY, 10),
        clusterTextOffsetX = parseInt(map.dataset.clusterTextOffsetX, 10),
        clusterTextColor = map.dataset.clusterTextColor,
        clusterTextSize = parseInt(map.dataset.clusterTextSize, 10),
        mapStyle = JSON.parse(map.dataset.style);

    new _GMap2.default(map, {
      center: {
        lat: centerLat,
        lng: centerLng
      },
      zoom: {
        initial: initialZoom,
        max: maxZoom
      },
      markerDefaultPath: markerDefaultPath,
      markerSelectedPath: markerSelectedPath,
      markerGroupPath: markerGroupPath,
      markerWidth: markerWidth,
      markerHeight: markerHeight,
      clusterEnabled: clusterEnabled,
      clusterTextOffset: [clusterTextOffsetY, clusterTextOffsetX],
      clusterTextColor: clusterTextColor,
      clusterTextSize: clusterTextSize,
      mapStyle: mapStyle
    });
  });
};

(0, _lin3sEventBus.onDomReady)(onReady, -1);