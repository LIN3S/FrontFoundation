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
import CookieWrittenEventSubscriber from './CookieWrittenEventSubscriber';

const
  onWritten = (cookieWrittenCallback, priority) => {
    const cookieWrittenEventSubscriber = new CookieWrittenEventSubscriber(
      cookieWrittenCallback,
      new Priority(priority)
    );

    OneTimeEventPublisher.subscribe(cookieWrittenEventSubscriber);
    LifeTimeEventPublisher.subscribe(cookieWrittenEventSubscriber);

    return cookieWrittenEventSubscriber;
  };

export {
  onWritten
};
