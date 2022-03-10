"use strict";

Object.defineProperty(exports, "__esModule", {
  value: true
});

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

exports.default = function (promise) {
  var hasBeenCanceled = false;

  var wrappedPromise = new Promise(function (resolve, reject) {
    promise.then(function (value) {
      return hasBeenCanceled ? reject({ isCanceled: true }) : resolve(value);
    }).catch(function (error) {
      return hasBeenCanceled ? reject({ isCanceled: true }) : reject(error);
    });
  });

  return {
    promise: wrappedPromise,
    cancel: function cancel() {
      hasBeenCanceled = true;
    }
  };
};