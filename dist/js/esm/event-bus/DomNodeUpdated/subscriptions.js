/*
 * This file is part of the Front Foundation package.
 *
 * Copyright (c) 2017-present LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Mikel Tuesta <mikeltuesta@gmail.com>
 * @author Ander Rodriguez <AnderRodriguezVarela@gmail.com>
 */

import {Priority, LifeTimeEventPublisher} from 'lin3s-event-bus';
import DomNodeUpdatedEventSubscriber from './DomNodeUpdatedEventSubscriber';

const
  onUpdated = (domNode, onDomNodeUpdatedCallback, priority) => {
    const domNodeUpdatedEventSubscriber = new DomNodeUpdatedEventSubscriber(
      domNode,
      onDomNodeUpdatedCallback,
      new Priority(priority)
    );

    LifeTimeEventPublisher.subscribe(domNodeUpdatedEventSubscriber);

    return domNodeUpdatedEventSubscriber;
  };

export {
  onUpdated
};
