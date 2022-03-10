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

export default () => {
  const
    ua = window.navigator.userAgent,
    trident = ua.indexOf('Trident/');

  let result = false;
  if (trident > 0) {
    const rv = ua.indexOf('rv:');

    result = parseInt(ua.substring(rv + 3, ua.indexOf('.', rv)), 10);
  }

  return result === 11;
};
