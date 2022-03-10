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

import {Event} from 'lin3s-event-bus';

class GMapMarkerSelectedEvent extends Event {

  static NAME = 'GMAP_MARKER_SELECTED';

  constructor(gmapInstance, marker) {
    super(GMapMarkerSelectedEvent.NAME);

    this.gmapInstance = gmapInstance;
    this.marker = marker;
  }
}

export default GMapMarkerSelectedEvent;
