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

export default domNode => {
  const
    images = domNode.querySelectorAll('img'),
    promises = Array.from(images).map(image =>
      new Promise((resolve) => {
        const imageToLoad = new Image();

        imageToLoad.addEventListener('load', () => {
          resolve('Image successfully loaded');
        });

        imageToLoad.addEventListener('error', () => {
          resolve('Image loading error');
        });

        imageToLoad.src = image.currentSrc || image.src;
      })
    );

  return Promise.all(promises);
};
