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

import React from 'react';
import PropTypes from 'prop-types';
import debounce from 'lodash.debounce';

class ResizeAware extends React.Component {

  static propTypes = {
    children: PropTypes.element,
    render: PropTypes.func
  };

  constructor() {
    super();

    this.state = {
      windowHeight: window.innerHeight,
      windowWidth: window.innerWidth
    };

    this.debouncedOnResize = debounce(() => {
      this.setState({
        windowHeight: window.innerHeight,
        windowWidth: window.innerWidth
      });
    }, 100);
  }

  componentDidMount() {
    window.addEventListener('resize', this.debouncedOnResize, false);
  }

  componentWillUnmount() {
    window.removeEventListener('resize', this.debouncedOnResize);
  }

  render() {
    const {children: Component, render, ...rest} = this.props;
    const {windowHeight, windowWidth} = this.state;

    if (render !== undefined) {
      return render({windowWidth, windowHeight, ...rest});
    }

    if (Component !== undefined) {
      return <Component windowHeight={windowHeight} windowWidth={windowWidth} {...rest}/>;
    }

    return null;
  }

}

export default ResizeAware;
