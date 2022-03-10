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

import {Event} from 'lin3s-event-bus';

class CookieWrittenEvent extends Event {
  static NAME = 'COOKIE_WRITTEN_EVENT';

  constructor(cookie) {
    super(CookieWrittenEvent.NAME);

    this.cookie = cookie;
  }
}

export default CookieWrittenEvent;
