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

import './src/js/polyfill/index';
import debounce from 'es6-promise-debounce';
import {
  Async,
  Browser,
  Cookies,
  EventBus,
  Dom
} from 'lin3s-front-foundation';
import {onDomReady, LifeTimeEventPublisher} from 'lin3s-event-bus';
import FormValidationStateChangedEvent from './src/js/validatory/FormValidationStateChangedEvent';
import FormElementValidationStateChangedEvent from './src/js/validatory/FormElementValidationStateChangedEvent';
import {onFormValidationStateChanged, onFormElementValidationStateChanged} from './src/js/validatory/Subscriptions';
import {init, STATE, validatorRegistry, asyncValidation, Validator} from 'validatory';

import './src/js/GMapGeocoderDemo';
import './src/js/FormSelectDemo';
import './src/js/React/init';
import './src/scss/app.scss';

const testAsyncCancelablePromise = () => {
  console.log('Testing Promise.cancelablePromise');

  const myPromise = new Promise(resolve => {
    setTimeout(() => {
      resolve('Promise inner process ended');
    }, 1000);
  });

  const myCancelablePromise = Async.cancelablePromise(myPromise);

  myCancelablePromise.promise.then(resolvedObject => {
    console.log('myCancelablePromise has been resolved', resolvedObject);
  }, rejectedObject => {
    console.log('myCancelablePromise has been rejected', rejectedObject);
  });

  myCancelablePromise.cancel();
};

const testBrowserIsIE11 = () => {
  console.log('Testing Browser.testIsIE11');

  const isIE11 = Browser.isIE11();

  console.log('Is IE11?', isIE11);
};

const testDomLoadScript = () => {
  console.log('Testing Dom.loadScript');

  const scriptPath = 'https://code.jquery.com/jquery-3.2.1.slim.min.js';
  const scriptLoadPromise = Dom.loadScript(scriptPath);

  scriptLoadPromise.then(resolvedObject => {
    console.log('scriptLoadPromise has been resolved. We can safely use the loaded script.', resolvedObject);
  }, rejectedObject => {
    console.log('scriptLoadPromise has been rejected', rejectedObject);
  });
};

const testDomInjectScript = () => {
  console.log('Testing Dom.injectScript');

  const mainDomNode = document.querySelector('main');

  const
    testScriptA = `console.log('This is the injected script A');`,
    testScriptB = `console.log('This is the injected script B');`;

  Dom.injectScript(testScriptA);
  Dom.injectScript(testScriptB, mainDomNode);
};

const testDomWaitImagesLoadInDomNode = () => {
  const imagesCollection = document.querySelector('.images__collection');
  const imagesLoadPromise = Dom.waitImagesLoadInDomNode(imagesCollection);

  imagesLoadPromise.then(resolvedObject => {
    console.log('imagesLoadPromise has been resolved. We know for sure that our images has been loaded.',
      resolvedObject);
  }, rejectedObject => {
    console.log('imagesLoadPromise has been rejected', rejectedObject);
  });
};

const testValidatory = () => {
  const getStateString = stateValue => {
    switch (stateValue) {
      case STATE.VALID:
        return 'VALID';
      case STATE.NOT_VALID:
        return 'NOT VALID';
      case STATE.DEFAULT:
        return 'DEFAULT';
      case STATE.NOT_FILLED:
        return 'NOT FILLED';
    }
  };

  const
    formValidationStateChangedCallback = instance => {
      LifeTimeEventPublisher.publish(new FormValidationStateChangedEvent(instance));
    },
    formElementValidationStateChangedCallback = instance => {
      LifeTimeEventPublisher.publish(new FormElementValidationStateChangedEvent(instance));
    };
  init({
    formSelector: '#validatory-form',
    formElementSelector: 'input, select, textarea',
    onFormValidationStateChanged: formValidationStateChangedCallback,
    onFormElementValidationStateChanged: formElementValidationStateChangedCallback
  });

  // The previous code is the equivalent to this one:
  /*
  Event.validatory.initWithEvents({
    formSelector: '#validatory-form',
    formElementSelector: 'input, select, textarea'
  });
  */

  init({
    formSelector: '#validatory-form-react',
    formElementSelector: 'input, select, textarea'
  });

  onFormValidationStateChanged(
    document.getElementById('validatory-form'),
    formValidationStateChangedEvent => {
      console.log(`Form state changed to: [${getStateString(formValidationStateChangedEvent.formValidatorInstance.state)}]`); // eslint-disable-line max-len
    }
  );

  onFormElementValidationStateChanged(
    document.getElementById('validatory-form'),
    formElementValidationStateChangedEvent => {
      console.log(`Form element state changed to: [${getStateString(formElementValidationStateChangedEvent.formElementValidatorInstance.state)}]`); // eslint-disable-line max-len
    }
  );
};

const testCookies = () => {
  const nonExistentCookie = Cookies.read(`${(new Date()).getTime()}-random-name`);

  if (nonExistentCookie !== undefined) {
    console.error(`Cookies.read for non-existent cookie should return undefined and returns ${nonExistentCookie}`);
  } else {
    console.log('Cookies.read for non-existent cookie returns undefined');
  }

  const testCookieName = 'test-cookie-name',
    testCookieValue = `current time: ${(new Date()).getTime()}`;

  EventBus.Cookies.onWritten(({cookie}) => {
    console.log(`Cookies.write launches an event with name ${cookie.name} and value ${cookie.value}`);
  });

  Cookies.write({
    name: testCookieName,
    value: testCookieValue,
  });
  const myCookieValue = Cookies.read(testCookieName);

  if (myCookieValue !== testCookieValue) {
    console.error(`Cookies.read for existent cookie should return ${testCookieValue} and returns ${myCookieValue}`);
  } else {
    console.log(`Cookies.read for existent cookie returns correct value: ${myCookieValue}`);
  }
};

const addAsyncValidator = () => {
  const
    debouncedValidation = debounce(node => {
      console.log('Asynchronous validation started');

      const validZipCode = /^\d{5}$/.test(node.value); // zip code format validation

      if (!validZipCode) {
        return {valid: false, errorCode: 'zip-code'};
      }

      return asyncValidation(fetch('https://jsonplaceholder.typicode.com/posts/1'), () => {
        const valid = node.value === '01005';

        return valid ? {valid} : {valid: false, errorCode: 'no-service'};
      });
    }, 500),
    asyncValidator = new Validator({
      supports: node => node.id === 'async',
      isEmpty: node => node.value === '',
      isValid: node => debouncedValidation(node),
    });

  validatorRegistry.add(asyncValidator);
};

const scrollToWithMenuLinks = () => {
  const links = document.querySelectorAll('.menu__list .menu__link');

  const handleClick = event => Dom.scrollToElement(event.target.hash, {duration: 250, offset: 10});

  Array.from(links, link => {
    link.addEventListener('click', handleClick, false);
  });
};

const testModalInitializedEvent = () => {
  console.log('Testing EventBus.Modal.onInitialized');

  EventBus.Modal.onInitialized('modal-test', modalInitializedEvent => {
    console.log('modal has been initialized!', modalInitializedEvent.domNode);
  });
};

const onReady = () => {
  testAsyncCancelablePromise();
  testBrowserIsIE11();
  testDomLoadScript();
  testDomInjectScript();
  testDomWaitImagesLoadInDomNode();
  testValidatory();
  testCookies();
  scrollToWithMenuLinks();
  testModalInitializedEvent();
};

addAsyncValidator();
onDomReady(onReady);
