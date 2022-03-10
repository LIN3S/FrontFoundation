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

import {onDomReady} from 'lin3s-event-bus';
import {loadScript} from './../../../../dom';
import GMap from './GMap';

const GMAP_CLASS_NAME = 'js-gmap';

const loadGMapScripts = (apiKey) => {
  const lang = document.querySelector('html').getAttribute('lang');

  loadScript('https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js')
    .then(() =>
      loadScript(`https://maps.googleapis.com/maps/api/js?key=${apiKey}&callback=initGMap&language=${lang}`)
    );
};

const onReady = () => {
  const gmap = document.querySelector(`.${GMAP_CLASS_NAME}`);

  if (gmap === null) {
    return;
  }

  const apiKey = gmap.dataset.apiKey;

  loadGMapScripts(apiKey);
};

window.initGMap = () => {
  const gmaps = document.querySelectorAll(`.${GMAP_CLASS_NAME}`);

  Array.from(gmaps).forEach(map => {
    const
      centerLat = parseFloat(map.dataset.centerLat, 10),
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

    new GMap(map, {
      center: {
        lat: centerLat,
        lng: centerLng
      },
      zoom: {
        initial: initialZoom,
        max: maxZoom
      },
      markerDefaultPath,
      markerSelectedPath,
      markerGroupPath,
      markerWidth,
      markerHeight,
      clusterEnabled,
      clusterTextOffset: [clusterTextOffsetY, clusterTextOffsetX],
      clusterTextColor,
      clusterTextSize,
      mapStyle
    });
  });
};

onDomReady(onReady, -1);
