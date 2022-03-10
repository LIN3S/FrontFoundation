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

var _browser = require('./../../../../browser');

var _GMapMarkerDetail = require('./../GMapMarkerDetail/GMapMarkerDetail');

var _GMapMarkerDetail2 = _interopRequireDefault(_GMapMarkerDetail);

var _GMapInitializedEvent = require('./../../../../event-bus/GMap/GMapInitializedEvent');

var _GMapInitializedEvent2 = _interopRequireDefault(_GMapInitializedEvent);

var _GMapMarkerSelectedEvent = require('./../../../../event-bus/GMap/GMapMarkerSelectedEvent');

var _GMapMarkerSelectedEvent2 = _interopRequireDefault(_GMapMarkerSelectedEvent);

var _GMapGeocodeEvent = require('./../../../../event-bus/GMap/GMapGeocodeEvent');

var _GMapGeocodeEvent2 = _interopRequireDefault(_GMapGeocodeEvent);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

var GMap = function () {
  function GMap(domNode) {
    var _this = this;

    var _ref = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : {},
        center = _ref.center,
        _ref$zoom = _ref.zoom,
        zoom = _ref$zoom === undefined ? { initial: 8, max: 12 } : _ref$zoom,
        markerDefaultPath = _ref.markerDefaultPath,
        markerSelectedPath = _ref.markerSelectedPath,
        markerGroupPath = _ref.markerGroupPath,
        markerWidth = _ref.markerWidth,
        markerHeight = _ref.markerHeight,
        clusterEnabled = _ref.clusterEnabled,
        clusterTextOffset = _ref.clusterTextOffset,
        clusterTextColor = _ref.clusterTextColor,
        clusterTextSize = _ref.clusterTextSize,
        mapStyle = _ref.mapStyle;

    _classCallCheck(this, GMap);

    this.mapMarkers = [];
    this.markers = [];

    this.domNode = domNode;

    this.center = center;
    this.zoom = zoom;
    this.markerDefaultPath = markerDefaultPath;
    this.markerSelectedPath = markerSelectedPath;
    this.markerGroupPath = markerGroupPath;
    this.markerWidth = markerWidth;
    this.markerHeight = markerHeight;
    this.clusterEnabled = clusterEnabled;
    this.clusterTextOffset = clusterTextOffset;
    this.clusterTextColor = clusterTextColor;
    this.clusterTextSize = clusterTextSize;
    this.mapStyle = mapStyle;

    var markerDetailView = this.domNode.querySelector('.gmap-marker-detail');

    if (markerDetailView !== null) {
      this.markerDetail = new _GMapMarkerDetail2.default(markerDetailView);
    }

    this.markerIcons = this.buildMarkerIcons();
    this.initMap();
    this.initGeocoder();
    this.bindListeners();

    var initPromise = new Promise(function (resolve) {
      google.maps.event.addListenerOnce(_this.map, 'projection_changed', function () {
        resolve();
      });
    });

    initPromise.then(function () {
      return _this.publishMapInstanceInitializedEvent();
    });
  }

  _createClass(GMap, [{
    key: 'buildMarkerIcons',
    value: function buildMarkerIcons() {
      var extension = (0, _browser.isIE11)() ? 'png' : 'svg',
          iconSize = new google.maps.Size(this.markerWidth, this.markerHeight),
          anchor = new google.maps.Point(this.markerWidth / 2, this.markerHeight),
          origin = new google.maps.Point(0, 0);

      return {
        default: {
          url: this.markerDefaultPath + '.' + extension,
          anchor: anchor,
          scaledSize: iconSize,
          optimized: false,
          origin: origin
        },
        selected: {
          url: this.markerSelectedPath + '.' + extension,
          anchor: anchor,
          scaledSize: iconSize,
          optimized: false,
          origin: origin
        },
        group: {
          url: this.markerGroupPath + '.' + extension,
          anchor: anchor,
          scaledSize: iconSize,
          optimized: false,
          origin: origin
        }
      };
    }
  }, {
    key: 'initMap',
    value: function initMap() {
      var mapContainer = this.domNode.querySelector('.gmap__map');

      this.map = new google.maps.Map(mapContainer, {
        center: this.center,
        minZoom: 3,
        maxZoom: this.zoom.max,
        zoom: this.zoom.initial,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        styles: this.mapStyle,
        scrollwheel: false,
        draggable: true
      });

      if (!this.clusterEnabled) {
        return;
      }

      this.mapMarkerClusterer = new MarkerClusterer(this.map, [], { // eslint-disable-line no-undef
        gridSize: 50,
        maxZoom: 14,
        styles: [{
          width: this.markerWidth,
          height: this.markerHeight,
          url: this.markerIcons.group.url,
          textColor: this.clusterTextColor,
          textSize: this.clusterTextSize,
          anchor: this.clusterTextOffset
        }]
      });
    }
  }, {
    key: 'initGeocoder',
    value: function initGeocoder() {
      this.geocoder = new google.maps.Geocoder();
    }
  }, {
    key: 'bindListeners',
    value: function bindListeners() {
      var _this2 = this;

      this.map.addListener('click', function () {
        return _this2.onMarkerSelected();
      });
      this.map.addListener('dragstart', function () {
        return _this2.onMarkerSelected();
      });
      this.map.addListener('zoom_changed', function () {
        return _this2.onMarkerSelected();
      });
    }
  }, {
    key: 'setCenterOffsets',
    value: function setCenterOffsets() {
      var _ref2 = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : {},
          _ref2$x = _ref2.x,
          x = _ref2$x === undefined ? 0 : _ref2$x,
          _ref2$y = _ref2.y,
          y = _ref2$y === undefined ? 0 : _ref2$y;

      this.centerOffsetX = x;
      this.centerOffsetY = y;

      this.centerMap(this.getOffsetedLatLng(this.map.getCenter()));
    }
  }, {
    key: 'setBoundsOffsets',
    value: function setBoundsOffsets() {
      var _ref3 = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : {},
          _ref3$x = _ref3.x,
          x = _ref3$x === undefined ? 0 : _ref3$x,
          _ref3$y = _ref3.y,
          y = _ref3$y === undefined ? 0 : _ref3$y;

      this.boundsOffsetX = x;
      this.boundsOffsetY = y;
    }
  }, {
    key: 'setMarkers',
    value: function setMarkers(markers) {
      this.clearMarkers();
      this.pushMarkers(markers);
    }
  }, {
    key: 'clearMarkers',
    value: function clearMarkers() {
      this.hideMarkerDetailView();

      this.bounds = undefined;

      if (this.clusterEnabled) {
        this.mapMarkerClusterer.clearMarkers();
      }

      this.mapMarkers.forEach(function (marker) {
        google.maps.event.clearListeners(marker, 'click');
        marker.setMap(null);
      });

      this.markers = [];
      this.mapMarkers = [];
    }
  }, {
    key: 'pushMarkers',
    value: function pushMarkers(markers) {
      var _this3 = this;

      this.markers = markers;

      this.bounds = new google.maps.LatLngBounds();

      this.markers.forEach(function (marker) {
        if (marker.lat === undefined || marker.lng === undefined) {
          return;
        }

        var mapMarker = new google.maps.Marker({
          id: marker.id,
          position: {
            lat: parseFloat(marker.lat),
            lng: parseFloat(marker.lng)
          },
          map: _this3.map,
          icon: _this3.markerIcons.default
        });

        mapMarker.index = _this3.markers.length;
        _this3.bounds.extend(mapMarker.position);

        _this3.mapMarkers.push(mapMarker);

        if (_this3.clusterEnabled) {
          _this3.mapMarkerClusterer.addMarker(mapMarker);
        }

        mapMarker.addListener('click', function () {
          return _this3.onMarkerSelected(marker);
        });
      });

      this.centerMapOnBounds(this.getOffsetedBounds(this.bounds));
    }
  }, {
    key: 'showMarkerDetailView',
    value: function showMarkerDetailView(markerId, markerDetailHtmlContent) {
      this.hideMarkerDetailView();

      this.selectedMarker = this.mapMarkers.find(function (marker) {
        return marker.id === markerId;
      });

      if (this.selectedMarker === undefined || this.markerDetail === undefined) {
        return;
      }

      var offsetedMarkerLatLng = this.getOffsetedLatLng(this.selectedMarker.getPosition());
      this.centerMap(offsetedMarkerLatLng);

      this.selectedMarker.setIcon(this.markerIcons.selected);
      this.markerDetail.hide();
      this.markerDetail.updateContent(markerDetailHtmlContent);

      var markerDetailRect = this.markerDetail.getRect(),
          markerPixelPosition = this.getPixelPositionFromLatLng(this.selectedMarker.getPosition());

      this.markerDetail.setPosition({
        x: markerPixelPosition.x - markerDetailRect.width / 2,
        y: markerPixelPosition.y - markerDetailRect.height - this.markerHeight - 20
      });

      this.markerDetail.show();
    }
  }, {
    key: 'hideMarkerDetailView',
    value: function hideMarkerDetailView() {
      var _this4 = this;

      if (this.selectedMarker === undefined || this.markerDetail === undefined) {
        return;
      }

      var markerToHide = this.mapMarkers.find(function (marker) {
        return marker.id === _this4.selectedMarker.id;
      });

      if (markerToHide === undefined) {
        return;
      }

      markerToHide.setIcon(this.markerIcons.default);
      this.markerDetail.hide();
    }
  }, {
    key: 'centerMap',
    value: function centerMap(latLng) {
      this.map.panTo(latLng);
    }
  }, {
    key: 'centerMapOnBounds',
    value: function centerMapOnBounds(bounds) {
      this.map.fitBounds(bounds);
      this.map.panToBounds(bounds);
    }
  }, {
    key: 'getOffsetedLatLng',
    value: function getOffsetedLatLng(latlng) {
      var _ref4 = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : {},
          _ref4$offsetX = _ref4.offsetX,
          offsetX = _ref4$offsetX === undefined ? this.centerOffsetX : _ref4$offsetX,
          _ref4$offsetY = _ref4.offsetY,
          offsetY = _ref4$offsetY === undefined ? this.centerOffsetY : _ref4$offsetY;

      var scale = Math.pow(2, this.map.getZoom()),
          pixelOffset = new google.maps.Point(offsetX / scale || 0, offsetY / scale || 0);

      var worldCoordinateCenter = this.map.getProjection().fromLatLngToPoint(latlng),
          worldCoordinateNewCenter = new google.maps.Point(worldCoordinateCenter.x + pixelOffset.x, worldCoordinateCenter.y + pixelOffset.y);

      return this.map.getProjection().fromPointToLatLng(worldCoordinateNewCenter);
    }
  }, {
    key: 'getOffsetedBounds',
    value: function getOffsetedBounds(bounds) {
      var southWest = bounds.getSouthWest(),
          northEast = bounds.getNorthEast();

      return new google.maps.LatLngBounds(this.getOffsetedLatLng({ lat: southWest.lat, lng: southWest.lng }, { offsetX: this.boundsOffsetX, offsetY: this.boundsOffsetY }), this.getOffsetedLatLng({ lat: northEast.lat, lng: northEast.lng }, { offsetX: this.boundsOffsetX, offsetY: this.boundsOffsetY }));
    }
  }, {
    key: 'getPixelPositionFromLatLng',
    value: function getPixelPositionFromLatLng(latlng) {
      var scale = Math.pow(2, this.map.getZoom()),
          nw = new google.maps.LatLng(this.map.getBounds().getNorthEast().lat(), this.map.getBounds().getSouthWest().lng()),
          worldCoordinateNW = this.map.getProjection().fromLatLngToPoint(nw),
          worldCoordinate = this.map.getProjection().fromLatLngToPoint(latlng);

      return new google.maps.Point(Math.floor((worldCoordinate.x - worldCoordinateNW.x) * scale), Math.floor((worldCoordinate.y - worldCoordinateNW.y) * scale));
    }
  }, {
    key: 'geocodeAddress',
    value: function geocodeAddress(address) {
      var _this5 = this;

      if (address === undefined || address === '') {
        this.resetMapZoomAndCenterToDefault();
      } else {
        var fullAddress = address + ', Spain';

        this.geocoder.geocode({
          address: fullAddress
        }, function (results, status) {
          if (status === google.maps.GeocoderStatus.OK) {
            var geocodeResult = results[0];

            _this5.centerMap(geocodeResult.geometry.location);
            _this5.map.setZoom(14);
          } else {
            _this5.resetMapZoomAndCenterToDefault();
          }

          _this5.publishGeocodeEvent({ status: status, results: results });
        });
      }
    }
  }, {
    key: 'resetMapZoomAndCenterToDefault',
    value: function resetMapZoomAndCenterToDefault() {
      if (this.bounds !== undefined) {
        this.centerMapOnBounds(this.getOffsetedBounds(this.bounds));
      } else {
        this.map.setZoom(this.zoom.initial);
        this.centerMap(this.getOffsetedLatLng(new google.maps.LatLng(this.center.lat, this.center.lng)));
      }
    }
  }, {
    key: 'onMarkerSelected',
    value: function onMarkerSelected(marker) {
      this.publishMarkerSelectedEvent(marker);
    }
  }, {
    key: 'publishMapInstanceInitializedEvent',
    value: function publishMapInstanceInitializedEvent() {
      _lin3sEventBus.OneTimeEventPublisher.publish(new _GMapInitializedEvent2.default(this));
    }
  }, {
    key: 'publishMarkerSelectedEvent',
    value: function publishMarkerSelectedEvent(marker) {
      _lin3sEventBus.LifeTimeEventPublisher.publish(new _GMapMarkerSelectedEvent2.default(this, marker));
    }
  }, {
    key: 'publishGeocodeEvent',
    value: function publishGeocodeEvent(_ref5) {
      var status = _ref5.status,
          results = _ref5.results;

      _lin3sEventBus.LifeTimeEventPublisher.publish(new _GMapGeocodeEvent2.default(this, status, results));
    }
  }]);

  return GMap;
}();

exports.default = GMap;