'use strict';

Object.defineProperty(exports, "__esModule", {
  value: true
});

var _extends = Object.assign || function (target) { for (var i = 1; i < arguments.length; i++) { var source = arguments[i]; for (var key in source) { if (Object.prototype.hasOwnProperty.call(source, key)) { target[key] = source[key]; } } } return target; };

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

var _react = require('react');

var _react2 = _interopRequireDefault(_react);

var _propTypes = require('prop-types');

var _propTypes2 = _interopRequireDefault(_propTypes);

var _lodash = require('lodash.debounce');

var _lodash2 = _interopRequireDefault(_lodash);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

function _objectWithoutProperties(obj, keys) { var target = {}; for (var i in obj) { if (keys.indexOf(i) >= 0) continue; if (!Object.prototype.hasOwnProperty.call(obj, i)) continue; target[i] = obj[i]; } return target; }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _possibleConstructorReturn(self, call) { if (!self) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return call && (typeof call === "object" || typeof call === "function") ? call : self; }

function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function, not " + typeof superClass); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, enumerable: false, writable: true, configurable: true } }); if (superClass) Object.setPrototypeOf ? Object.setPrototypeOf(subClass, superClass) : subClass.__proto__ = superClass; } /*
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                * This file is part of the Front Foundation package.
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                *
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                * Copyright (c) 2017-present LIN3S <info@lin3s.com>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                *
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                * For the full copyright and license information, please view the LICENSE
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                * file that was distributed with this source code.
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                *
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                * @author Mikel Tuesta <mikeltuesta@gmail.com>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                */

var ResizeAware = function (_React$Component) {
  _inherits(ResizeAware, _React$Component);

  function ResizeAware() {
    _classCallCheck(this, ResizeAware);

    var _this = _possibleConstructorReturn(this, (ResizeAware.__proto__ || Object.getPrototypeOf(ResizeAware)).call(this));

    _this.state = {
      windowHeight: window.innerHeight,
      windowWidth: window.innerWidth
    };

    _this.debouncedOnResize = (0, _lodash2.default)(function () {
      _this.setState({
        windowHeight: window.innerHeight,
        windowWidth: window.innerWidth
      });
    }, 100);
    return _this;
  }

  _createClass(ResizeAware, [{
    key: 'componentDidMount',
    value: function componentDidMount() {
      window.addEventListener('resize', this.debouncedOnResize, false);
    }
  }, {
    key: 'componentWillUnmount',
    value: function componentWillUnmount() {
      window.removeEventListener('resize', this.debouncedOnResize);
    }
  }, {
    key: 'render',
    value: function render() {
      var _props = this.props,
          Component = _props.children,
          render = _props.render,
          rest = _objectWithoutProperties(_props, ['children', 'render']);

      var _state = this.state,
          windowHeight = _state.windowHeight,
          windowWidth = _state.windowWidth;


      if (render !== undefined) {
        return render(_extends({ windowWidth: windowWidth, windowHeight: windowHeight }, rest));
      }

      if (Component !== undefined) {
        return _react2.default.createElement(Component, _extends({ windowHeight: windowHeight, windowWidth: windowWidth }, rest));
      }

      return null;
    }
  }]);

  return ResizeAware;
}(_react2.default.Component);

ResizeAware.propTypes = {
  children: _propTypes2.default.element,
  render: _propTypes2.default.func
};
exports.default = ResizeAware;