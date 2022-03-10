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

import * as Cookies from './Cookies/subscriptions';
import * as DomNodeUpdated from './DomNodeUpdated/subscriptions';
import * as FormSelect from './FormSelect/subscriptions';
import * as GMap from './GMap/subscriptions';
import * as Modal from './Modal/subscriptions';
import * as validatorySubscriptions from './validatory/subscriptions';
import {initWithEvents} from './validatory/initWithEvents';

const validatory = {
  initWithEvents,
  onFormStateChanged: validatorySubscriptions.onFormStateChanged,
  onFormElementStateChanged: validatorySubscriptions.onFormElementStateChanged
};

export {
  Cookies,
  DomNodeUpdated,
  FormSelect,
  GMap,
  Modal,
  validatory
};
