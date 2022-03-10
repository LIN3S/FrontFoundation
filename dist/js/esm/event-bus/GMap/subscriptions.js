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

import {Priority, OneTimeEventPublisher, LifeTimeEventPublisher} from 'lin3s-event-bus';
import GMapInitializedEventSubscriber from './GMapInitializedEventSubscriber';
import GMapMarkerSelectedEventSubscriber from './GMapMarkerSelectedEventSubscriber';
import GMapGeocodeEventSubscriber from './GMapGeocodeEventSubscriber';

const
  onInitialized = (domNode, onGMapInitializedCallback, priority) => {
    const gmapInitializedEventSubscriber = new GMapInitializedEventSubscriber(
      domNode,
      onGMapInitializedCallback,
      new Priority(priority)
    );

    OneTimeEventPublisher.subscribe(gmapInitializedEventSubscriber);

    return gmapInitializedEventSubscriber;
  },
  onMarkerSelected = (domNode, onGMapMarkerSelectedCallback, priority) => {
    const gmapMarkerSelectedEventSubscriber = new GMapMarkerSelectedEventSubscriber(
      domNode,
      onGMapMarkerSelectedCallback,
      new Priority(priority)
    );

    LifeTimeEventPublisher.subscribe(gmapMarkerSelectedEventSubscriber);

    return gmapMarkerSelectedEventSubscriber;
  },
  onGeocode = (domNode, onGMapGeocodeCallback, priority) => {
    const gmapGeocodeEventSubscriber = new GMapGeocodeEventSubscriber(
      domNode,
      onGMapGeocodeCallback,
      new Priority(priority)
    );

    LifeTimeEventPublisher.subscribe(gmapGeocodeEventSubscriber);

    return gmapGeocodeEventSubscriber;
  };

export {
  onInitialized,
  onMarkerSelected,
  onGeocode
};
