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

import {onDomReady, onNodeAdded} from 'lin3s-event-bus';
import AsideSticky from './AsideSticky';

const ASIDE_STICKY_SELECTOR = '.js-aside-sticky';

const initStickies = () => {
  const stickies = document.querySelectorAll('.js-aside-sticky');

  Array.from(stickies).forEach(sticky => new AsideSticky(sticky));

  onNodeAdded({selector: ASIDE_STICKY_SELECTOR}, nodeAddedEvent =>
    nodeAddedEvent.nodes.forEach(sticky => new AsideSticky(sticky)));
};

onDomReady(initStickies, -1);
