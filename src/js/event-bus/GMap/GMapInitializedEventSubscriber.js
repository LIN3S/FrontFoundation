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

import {EventSubscriber} from 'lin3s-event-bus';
import GMapInitializedEvent from './GMapInitializedEvent';
import {isDomNodeDescendantOfDomNode} from './../../dom';

class GMapInitializedEventSubscriber extends EventSubscriber {

  constructor(domNode, aCallback, aPriority) {
    super(aCallback, aPriority);

    this.domNode = domNode;
  }

  isSubscribedTo(gmapInitializedEvent) {
    const event = new GMapInitializedEvent();
    const gmapInstanceDomNode = gmapInitializedEvent.gmapInstance.domNode;

    return gmapInitializedEvent.getName() === event.getName()
      && (this.domNode === gmapInstanceDomNode || isDomNodeDescendantOfDomNode(gmapInstanceDomNode, this.domNode));
  }
}

export default GMapInitializedEventSubscriber;
