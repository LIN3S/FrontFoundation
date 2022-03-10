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

class GMapGeocodeEvent extends Event {

  static NAME = 'GMAP_GEOCODE_EVENT';

  constructor(gmapInstance, status, results) {
    super(GMapGeocodeEvent.NAME);

    this.gmapInstance = gmapInstance;
    this.status = status;
    this.results = results;
  }
}

export default GMapGeocodeEvent;
