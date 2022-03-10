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

export default (domNode, selector = null) => {
  const baseNodeList = selector !== null
    ? domNode.parentNode.querySelectorAll(selector)
    : domNode.parentNode.children;

  return Array.from(baseNodeList).findIndex(child => child === domNode);
};
