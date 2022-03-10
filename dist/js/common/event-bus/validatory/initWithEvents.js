'use strict';

Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.initWithEvents = undefined;

var _validatory = require('validatory');

var Validatory = _interopRequireWildcard(_validatory);

var _lin3sEventBus = require('lin3s-event-bus');

var _FormValidationStateChangedEvent = require('./FormValidationStateChangedEvent');

var _FormValidationStateChangedEvent2 = _interopRequireDefault(_FormValidationStateChangedEvent);

var _FormElementValidationStateChangedEvent = require('./FormElementValidationStateChangedEvent');

var _FormElementValidationStateChangedEvent2 = _interopRequireDefault(_FormElementValidationStateChangedEvent);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

function _interopRequireWildcard(obj) { if (obj && obj.__esModule) { return obj; } else { var newObj = {}; if (obj != null) { for (var key in obj) { if (Object.prototype.hasOwnProperty.call(obj, key)) newObj[key] = obj[key]; } } newObj.default = obj; return newObj; } }

/*
 * This file is part of the Front Foundation package.
 *
 * Copyright (c) 2018-present LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Mikel Tuesta <mikeltuesta@gmail.com>
 * @author Ander Rodriguez <AnderRodriguezVarela@gmail.com>
 */

var initWithEvents = function initWithEvents() {
  var _ref = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : {},
      _ref$formSelector = _ref.formSelector,
      formSelector = _ref$formSelector === undefined ? 'form' : _ref$formSelector,
      _ref$formElementSelec = _ref.formElementSelector,
      formElementSelector = _ref$formElementSelec === undefined ? 'input, select, textarea' : _ref$formElementSelec;

  Validatory.init({
    formSelector: formSelector,
    formElementSelector: formElementSelector,
    onFormValidationStateChanged: function onFormValidationStateChanged(formValidatorInstance) {
      return _lin3sEventBus.LifeTimeEventPublisher.publish(new _FormValidationStateChangedEvent2.default(formValidatorInstance));
    },
    onFormElementValidationStateChanged: function onFormElementValidationStateChanged(formElementValidatorInstance) {
      return _lin3sEventBus.LifeTimeEventPublisher.publish(new _FormElementValidationStateChangedEvent2.default(formElementValidatorInstance));
    }
  });
};

exports.initWithEvents = initWithEvents;