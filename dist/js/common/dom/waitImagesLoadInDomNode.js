'use strict';

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

exports.default = function (domNode) {
  var images = domNode.querySelectorAll('img'),
      promises = Array.from(images).map(function (image) {
    return new Promise(function (resolve) {
      var imageToLoad = new Image();

      imageToLoad.addEventListener('load', function () {
        resolve('Image successfully loaded');
      });

      imageToLoad.addEventListener('error', function () {
        resolve('Image loading error');
      });

      imageToLoad.src = image.currentSrc || image.src;
    });
  });

  return Promise.all(promises);
};