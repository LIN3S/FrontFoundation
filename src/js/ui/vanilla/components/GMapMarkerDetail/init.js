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

import {onDomReady} from 'lin3s-event-bus';
import GMapMarkerDetail from './GMapMarkerDetail';

const initGMapMarkerDetails = () => {
  const gmapMarkerDetails = document.querySelectorAll('.js-gmap-marker-detail');

  Array.from(gmapMarkerDetails).forEach(gmapMarkerDetail => new GMapMarkerDetail(gmapMarkerDetail));
};

onDomReady(initGMapMarkerDetails, -1);
