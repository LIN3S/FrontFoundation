/*
 * This file is part of the Re_ Magazine project.
 *
 * Copyright (c) 2016-present LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Mikel Tuesta <mikel@lin3s.com>
 * @author Ander Rodriguez <AnderRodriguezVarela@gmail.com>
 */

import {OneTimeEventPublisher, LifeTimeEventPublisher} from 'lin3s-event-bus';
import CookieWrittenEvent from './../event-bus/Cookies/CookieWrittenEvent';

const publishCookieWrittenEvent = (cookie) => {
  const cookieWrittenEvent = new CookieWrittenEvent(cookie);

  OneTimeEventPublisher.publish(cookieWrittenEvent);
  LifeTimeEventPublisher.publish(cookieWrittenEvent);
};

const read = (name) => {
  const match = document.cookie.match(new RegExp(`${name}=([^;]+)`));
  if (match) {
    return match[1];
  }
};

const write = ({name, value = '', expiration, domain = location.hostname, path = '/'} = {}) => {
  let expires;

  if (expiration) {
    const cookieDate = new Date();
    cookieDate.setTime(cookieDate.getTime() + expiration);

    expires = `expires=${cookieDate.toGMTString()}`;
  }

  document.cookie = `${name}=${value}; ${expires ? `${expires};` : '' }${domain}; path=${path};`;

  publishCookieWrittenEvent({name, value, expiration, domain, path});
};

export {
  read,
  write
};
