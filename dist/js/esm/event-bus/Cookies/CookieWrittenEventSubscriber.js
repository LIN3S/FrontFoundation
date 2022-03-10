/*
 * This file is part of the Re_ Magazine project.
 *
 * Copyright (c) 2016-present LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Mikel Tuesta <mikel@lin3s.com>
 */

import {EventSubscriber} from 'lin3s-event-bus';
import CookieWrittenEvent from './CookieWrittenEvent';

class CookieWrittenEventSubscriber extends EventSubscriber {
  isSubscribedTo(anEvent) {
    const event = new CookieWrittenEvent();

    return anEvent.getName() === event.getName();
  }
}

export default CookieWrittenEventSubscriber;
