<?php

/* node_modules/lin3s-front-foundation/dist/js/ui/vanilla/components/GMapMarkerDetail/GMapMarkerDetail.js */
class __TwigTemplate_222c9503fc32b2b8f26c07e37936bdf057930b08b02aedec5e19689bc5fc0ebd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2d8861bffffa12b406d3b14401b0018e8de37406ee7413c85aa8b74f8f2e0e24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d8861bffffa12b406d3b14401b0018e8de37406ee7413c85aa8b74f8f2e0e24->enter($__internal_2d8861bffffa12b406d3b14401b0018e8de37406ee7413c85aa8b74f8f2e0e24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lin3s-front-foundation/dist/js/ui/vanilla/components/GMapMarkerDetail/GMapMarkerDetail.js"));

        // line 1
        echo "'use strict';

Object.defineProperty(exports, \"__esModule\", {
  value: true
});

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if (\"value\" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError(\"Cannot call a class as a function\"); } }

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

var GMapMarkerDetail = function () {
  function GMapMarkerDetail(domNode) {
    _classCallCheck(this, GMapMarkerDetail);

    this.domNode = domNode;
    this.closeButton = this.domNode.querySelector('.gmap-marker-detail__close');
    this.content = this.domNode.querySelector('.gmap-marker-detail__content');

    this.bindListeners();
  }

  _createClass(GMapMarkerDetail, [{
    key: 'bindListeners',
    value: function bindListeners() {
      this.closeButton.addEventListener('click', this.hide.bind(this));
    }
  }, {
    key: 'updateContent',
    value: function updateContent(htmlContent) {
      this.showLoading();
      this.content.innerHTML = htmlContent;
      this.hideLoading();
    }
  }, {
    key: 'showLoading',
    value: function showLoading() {
      this.domNode.classList.add('gmap-marker-detail--loading');
    }
  }, {
    key: 'hideLoading',
    value: function hideLoading() {
      this.domNode.classList.remove('gmap-marker-detail--loading');
    }
  }, {
    key: 'show',
    value: function show() {
      this.domNode.classList.add('gmap-marker-detail--visible');
    }
  }, {
    key: 'hide',
    value: function hide() {
      this.domNode.classList.remove('gmap-marker-detail--visible');
    }
  }, {
    key: 'setPosition',
    value: function setPosition() {
      var _ref = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : {},
          _ref\$x = _ref.x,
          x = _ref\$x === undefined ? 0 : _ref\$x,
          _ref\$y = _ref.y,
          y = _ref\$y === undefined ? 0 : _ref\$y;

      this.domNode.style.left = x;
      this.domNode.style.top = y;
    }
  }, {
    key: 'getRect',
    value: function getRect() {
      return this.domNode.getBoundingClientRect();
    }
  }]);

  return GMapMarkerDetail;
}();

exports.default = GMapMarkerDetail;";
        
        $__internal_2d8861bffffa12b406d3b14401b0018e8de37406ee7413c85aa8b74f8f2e0e24->leave($__internal_2d8861bffffa12b406d3b14401b0018e8de37406ee7413c85aa8b74f8f2e0e24_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lin3s-front-foundation/dist/js/ui/vanilla/components/GMapMarkerDetail/GMapMarkerDetail.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

Object.defineProperty(exports, \"__esModule\", {
  value: true
});

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if (\"value\" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError(\"Cannot call a class as a function\"); } }

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

var GMapMarkerDetail = function () {
  function GMapMarkerDetail(domNode) {
    _classCallCheck(this, GMapMarkerDetail);

    this.domNode = domNode;
    this.closeButton = this.domNode.querySelector('.gmap-marker-detail__close');
    this.content = this.domNode.querySelector('.gmap-marker-detail__content');

    this.bindListeners();
  }

  _createClass(GMapMarkerDetail, [{
    key: 'bindListeners',
    value: function bindListeners() {
      this.closeButton.addEventListener('click', this.hide.bind(this));
    }
  }, {
    key: 'updateContent',
    value: function updateContent(htmlContent) {
      this.showLoading();
      this.content.innerHTML = htmlContent;
      this.hideLoading();
    }
  }, {
    key: 'showLoading',
    value: function showLoading() {
      this.domNode.classList.add('gmap-marker-detail--loading');
    }
  }, {
    key: 'hideLoading',
    value: function hideLoading() {
      this.domNode.classList.remove('gmap-marker-detail--loading');
    }
  }, {
    key: 'show',
    value: function show() {
      this.domNode.classList.add('gmap-marker-detail--visible');
    }
  }, {
    key: 'hide',
    value: function hide() {
      this.domNode.classList.remove('gmap-marker-detail--visible');
    }
  }, {
    key: 'setPosition',
    value: function setPosition() {
      var _ref = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : {},
          _ref\$x = _ref.x,
          x = _ref\$x === undefined ? 0 : _ref\$x,
          _ref\$y = _ref.y,
          y = _ref\$y === undefined ? 0 : _ref\$y;

      this.domNode.style.left = x;
      this.domNode.style.top = y;
    }
  }, {
    key: 'getRect',
    value: function getRect() {
      return this.domNode.getBoundingClientRect();
    }
  }]);

  return GMapMarkerDetail;
}();

exports.default = GMapMarkerDetail;", "node_modules/lin3s-front-foundation/dist/js/ui/vanilla/components/GMapMarkerDetail/GMapMarkerDetail.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lin3s-front-foundation/dist/js/ui/vanilla/components/GMapMarkerDetail/GMapMarkerDetail.js");
    }
}
