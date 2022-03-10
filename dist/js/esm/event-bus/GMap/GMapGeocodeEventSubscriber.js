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
import GMapGeocodeEvent from './GMapGeocodeEvent';
import {isDomNodeDescendantOfDomNode} from './../../dom';

class GMapGeocodeEventSubscriber extends EventSubscriber {

  constructor(domNode, aCallback, aPriority) {
    super(aCallback, aPriority);

    this.domNode = domNode;
  }

  isSubscribedTo(anEvent) {
    const event = new GMapGeocodeEvent();

    return anEvent.getName() === event.getName() && (this.domNode === anEvent.gmapInstance.domNode
      || isDomNodeDescendantOfDomNode(anEvent.gmapInstance.domNode, this.domNode));
  }
}

export default GMapGeocodeEventSubscriber;
