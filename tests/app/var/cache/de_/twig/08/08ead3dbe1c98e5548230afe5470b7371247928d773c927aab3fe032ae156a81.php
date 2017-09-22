<?php

/* node_modules/vary/README.md */
class __TwigTemplate_8ffa9f800146515dd991f7b718ada5e39cb38637edf160a1164fd03818247cac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_608177b90b401649548067e85e568737ccafa26f81b96b1c1903736eb0e916ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_608177b90b401649548067e85e568737ccafa26f81b96b1c1903736eb0e916ee->enter($__internal_608177b90b401649548067e85e568737ccafa26f81b96b1c1903736eb0e916ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/vary/README.md"));

        // line 1
        echo "# vary

[![NPM Version][npm-image]][npm-url]
[![NPM Downloads][downloads-image]][downloads-url]
[![Node.js Version][node-version-image]][node-version-url]
[![Build Status][travis-image]][travis-url]
[![Test Coverage][coveralls-image]][coveralls-url]

Manipulate the HTTP Vary header

## Installation

This is a [Node.js](https://nodejs.org/en/) module available through the
[npm registry](https://www.npmjs.com/). Installation is done using the
[`npm install` command](https://docs.npmjs.com/getting-started/installing-npm-packages-locally): 

```sh
\$ npm install vary
```

## API

<!-- eslint-disable no-unused-vars -->

```js
var vary = require('vary')
```

### vary(res, field)

Adds the given header `field` to the `Vary` response header of `res`.
This can be a string of a single field, a string of a valid `Vary`
header, or an array of multiple fields.

This will append the header if not already listed, otherwise leaves
it listed in the current location.

<!-- eslint-disable no-undef -->

```js
// Append \"Origin\" to the Vary header of the response
vary(res, 'Origin')
```

### vary.append(header, field)

Adds the given header `field` to the `Vary` response header string `header`.
This can be a string of a single field, a string of a valid `Vary` header,
or an array of multiple fields.

This will append the header if not already listed, otherwise leaves
it listed in the current location. The new header string is returned.

<!-- eslint-disable no-undef -->

```js
// Get header string appending \"Origin\" to \"Accept, User-Agent\"
vary.append('Accept, User-Agent', 'Origin')
```

## Examples

### Updating the Vary header when content is based on it

```js
var http = require('http')
var vary = require('vary')

http.createServer(function onRequest (req, res) {
  // about to user-agent sniff
  vary(res, 'User-Agent')

  var ua = req.headers['user-agent'] || ''
  var isMobile = /mobi|android|touch|mini/i.test(ua)

  // serve site, depending on isMobile
  res.setHeader('Content-Type', 'text/html')
  res.end('You are (probably) ' + (isMobile ? '' : 'not ') + 'a mobile user')
})
```

## Testing

```sh
\$ npm test
```

## License

[MIT](LICENSE)

[npm-image]: https://img.shields.io/npm/v/vary.svg
[npm-url]: https://npmjs.org/package/vary
[node-version-image]: https://img.shields.io/node/v/vary.svg
[node-version-url]: https://nodejs.org/en/download
[travis-image]: https://img.shields.io/travis/jshttp/vary/master.svg
[travis-url]: https://travis-ci.org/jshttp/vary
[coveralls-image]: https://img.shields.io/coveralls/jshttp/vary/master.svg
[coveralls-url]: https://coveralls.io/r/jshttp/vary
[downloads-image]: https://img.shields.io/npm/dm/vary.svg
[downloads-url]: https://npmjs.org/package/vary
";
        
        $__internal_608177b90b401649548067e85e568737ccafa26f81b96b1c1903736eb0e916ee->leave($__internal_608177b90b401649548067e85e568737ccafa26f81b96b1c1903736eb0e916ee_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/vary/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# vary

[![NPM Version][npm-image]][npm-url]
[![NPM Downloads][downloads-image]][downloads-url]
[![Node.js Version][node-version-image]][node-version-url]
[![Build Status][travis-image]][travis-url]
[![Test Coverage][coveralls-image]][coveralls-url]

Manipulate the HTTP Vary header

## Installation

This is a [Node.js](https://nodejs.org/en/) module available through the
[npm registry](https://www.npmjs.com/). Installation is done using the
[`npm install` command](https://docs.npmjs.com/getting-started/installing-npm-packages-locally): 

```sh
\$ npm install vary
```

## API

<!-- eslint-disable no-unused-vars -->

```js
var vary = require('vary')
```

### vary(res, field)

Adds the given header `field` to the `Vary` response header of `res`.
This can be a string of a single field, a string of a valid `Vary`
header, or an array of multiple fields.

This will append the header if not already listed, otherwise leaves
it listed in the current location.

<!-- eslint-disable no-undef -->

```js
// Append \"Origin\" to the Vary header of the response
vary(res, 'Origin')
```

### vary.append(header, field)

Adds the given header `field` to the `Vary` response header string `header`.
This can be a string of a single field, a string of a valid `Vary` header,
or an array of multiple fields.

This will append the header if not already listed, otherwise leaves
it listed in the current location. The new header string is returned.

<!-- eslint-disable no-undef -->

```js
// Get header string appending \"Origin\" to \"Accept, User-Agent\"
vary.append('Accept, User-Agent', 'Origin')
```

## Examples

### Updating the Vary header when content is based on it

```js
var http = require('http')
var vary = require('vary')

http.createServer(function onRequest (req, res) {
  // about to user-agent sniff
  vary(res, 'User-Agent')

  var ua = req.headers['user-agent'] || ''
  var isMobile = /mobi|android|touch|mini/i.test(ua)

  // serve site, depending on isMobile
  res.setHeader('Content-Type', 'text/html')
  res.end('You are (probably) ' + (isMobile ? '' : 'not ') + 'a mobile user')
})
```

## Testing

```sh
\$ npm test
```

## License

[MIT](LICENSE)

[npm-image]: https://img.shields.io/npm/v/vary.svg
[npm-url]: https://npmjs.org/package/vary
[node-version-image]: https://img.shields.io/node/v/vary.svg
[node-version-url]: https://nodejs.org/en/download
[travis-image]: https://img.shields.io/travis/jshttp/vary/master.svg
[travis-url]: https://travis-ci.org/jshttp/vary
[coveralls-image]: https://img.shields.io/coveralls/jshttp/vary/master.svg
[coveralls-url]: https://coveralls.io/r/jshttp/vary
[downloads-image]: https://img.shields.io/npm/dm/vary.svg
[downloads-url]: https://npmjs.org/package/vary
", "node_modules/vary/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/vary/README.md");
    }
}
