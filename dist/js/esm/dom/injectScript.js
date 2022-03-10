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

export default (scriptCode, domNode = document.body) => {
  const scriptNode = document.createElement('script');
  scriptNode.type = 'text/javascript';

  scriptCode = `(function(){${scriptCode}})();`;

  try {
    scriptNode.appendChild(document.createTextNode(scriptCode));
    domNode.appendChild(scriptNode);
  } catch (error) {
    scriptNode.text = scriptCode;
    domNode.appendChild(scriptNode);
  }
};
