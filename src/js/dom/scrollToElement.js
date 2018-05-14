/*
 * This file is part of the Re_ Magazine project.
 *
 * Copyright (c) 2016-present LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author David Lores <david@lin3s.com>
 * @author Ander Rodriguez <AnderRodriguezVarela@gmail.com>
 * https://gist.github.com/likewinter/3f4cdf79f7efc360e0d9de6194b81ab4
 */

const easeInOutQuad = (currentTime, start, change, duration) => {
  const value = currentTime /= duration / 2;
  if (value < 1) {
    return change / 2 * currentTime * currentTime + start;
  }

  return -change / 2 * ((--currentTime) * (currentTime - 2) - 1) + start;
};

const requestAnimFrame = (
  () => window.requestAnimationFrame ||
    window.webkitRequestAnimationFrame ||
    window.mozRequestAnimationFrame || (callback => window.setTimeout(callback, 1000 / 60))
)();

const scrollTo = (to, duration, callback) => {
  const move = (amount) => {
    document.documentElement.scrollTop = amount;
    document.body.parentNode.scrollTop = amount;
    document.body.scrollTop = amount;
  };
  const start = document.documentElement.scrollTop || document.body.parentNode.scrollTop || document.body.scrollTop;
  const change = to - start;
  const increment = 20;
  let currentTime = 0;

  const animateScroll = () => {
    currentTime += increment;
    const val = easeInOutQuad(currentTime, start, change, duration);
    move(val);
    if (currentTime < duration) {
      requestAnimFrame(animateScroll);
    } else if (callback && typeof callback === 'function') {
      callback();
    }
  };
  animateScroll();
};

const scrollToElement = (toSelector, {duration = 500, offset = 0, callback = null} = {}) => {
  const element = document.querySelector(toSelector);
  if (!element) {
    return;
  }

  scrollTo(element.getBoundingClientRect().top - offset + window.pageYOffset, duration, callback);
};

export default scrollToElement;
