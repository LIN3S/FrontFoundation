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

export default (domNode, eventName, selector, callback) => {
  domNode.addEventListener(eventName, event => {
    const matchingSelectorChildNodes = Array.from(domNode.querySelectorAll(selector));

    if (matchingSelectorChildNodes.find(childNode => childNode === event.target) === undefined) {
      return;
    }

    callback(event);
  });
};
