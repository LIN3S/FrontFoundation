<?php

/* node_modules/content-disposition/README.md */
class __TwigTemplate_23c77f1e3af3a13dc6d96fb7d8f32be48010898f5c8b7472f1d2f27ca9dcfc20 extends Twig_Template
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
        $__internal_173e09f5d2d6c03cd49b4c446670ca329fe3d91311e8acc9f96c29f73f7f7c9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_173e09f5d2d6c03cd49b4c446670ca329fe3d91311e8acc9f96c29f73f7f7c9d->enter($__internal_173e09f5d2d6c03cd49b4c446670ca329fe3d91311e8acc9f96c29f73f7f7c9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/content-disposition/README.md"));

        // line 1
        echo "# content-disposition

[![NPM Version][npm-image]][npm-url]
[![NPM Downloads][downloads-image]][downloads-url]
[![Node.js Version][node-version-image]][node-version-url]
[![Build Status][travis-image]][travis-url]
[![Test Coverage][coveralls-image]][coveralls-url]

Create and parse HTTP `Content-Disposition` header

## Installation

```sh
\$ npm install content-disposition
```

## API

```js
var contentDisposition = require('content-disposition')
```

### contentDisposition(filename, options)

Create an attachment `Content-Disposition` header value using the given file name,
if supplied. The `filename` is optional and if no file name is desired, but you
want to specify `options`, set `filename` to `undefined`.

```js
res.setHeader('Content-Disposition', contentDisposition('∫ maths.pdf'))
```

**note** HTTP headers are of the ISO-8859-1 character set. If you are writing this
header through a means different from `setHeader` in Node.js, you'll want to specify
the `'binary'` encoding in Node.js.

#### Options

`contentDisposition` accepts these properties in the options object.

##### fallback

If the `filename` option is outside ISO-8859-1, then the file name is actually
stored in a supplemental field for clients that support Unicode file names and
a ISO-8859-1 version of the file name is automatically generated.

This specifies the ISO-8859-1 file name to override the automatic generation or
disables the generation all together, defaults to `true`.

  - A string will specify the ISO-8859-1 file name to use in place of automatic
    generation.
  - `false` will disable including a ISO-8859-1 file name and only include the
    Unicode version (unless the file name is already ISO-8859-1).
  - `true` will enable automatic generation if the file name is outside ISO-8859-1.

If the `filename` option is ISO-8859-1 and this option is specified and has a
different value, then the `filename` option is encoded in the extended field
and this set as the fallback field, even though they are both ISO-8859-1.

##### type

Specifies the disposition type, defaults to `\"attachment\"`. This can also be
`\"inline\"`, or any other value (all values except inline are treated like
`attachment`, but can convey additional information if both parties agree to
it). The type is normalized to lower-case.

### contentDisposition.parse(string)

```js
var disposition = contentDisposition.parse('attachment; filename=\"EURO rates.txt\"; filename*=UTF-8\\'\\'%e2%82%ac%20rates.txt');
```

Parse a `Content-Disposition` header string. This automatically handles extended
(\"Unicode\") parameters by decoding them and providing them under the standard
parameter name. This will return an object with the following properties (examples
are shown for the string `'attachment; filename=\"EURO rates.txt\"; filename*=UTF-8\\'\\'%e2%82%ac%20rates.txt'`):

 - `type`: The disposition type (always lower case). Example: `'attachment'`

 - `parameters`: An object of the parameters in the disposition (name of parameter
   always lower case and extended versions replace non-extended versions). Example:
   `{filename: \"€ rates.txt\"}`

## Examples

### Send a file for download

```js
var contentDisposition = require('content-disposition')
var destroy = require('destroy')
var http = require('http')
var onFinished = require('on-finished')

var filePath = '/path/to/public/plans.pdf'

http.createServer(function onRequest(req, res) {
  // set headers
  res.setHeader('Content-Type', 'application/pdf')
  res.setHeader('Content-Disposition', contentDisposition(filePath))

  // send file
  var stream = fs.createReadStream(filePath)
  stream.pipe(res)
  onFinished(res, function (err) {
    destroy(stream)
  })
})
```

## Testing

```sh
\$ npm test
```

## References

- [RFC 2616: Hypertext Transfer Protocol -- HTTP/1.1][rfc-2616]
- [RFC 5987: Character Set and Language Encoding for Hypertext Transfer Protocol (HTTP) Header Field Parameters][rfc-5987]
- [RFC 6266: Use of the Content-Disposition Header Field in the Hypertext Transfer Protocol (HTTP)][rfc-6266]
- [Test Cases for HTTP Content-Disposition header field (RFC 6266) and the Encodings defined in RFCs 2047, 2231 and 5987][tc-2231]

[rfc-2616]: https://tools.ietf.org/html/rfc2616
[rfc-5987]: https://tools.ietf.org/html/rfc5987
[rfc-6266]: https://tools.ietf.org/html/rfc6266
[tc-2231]: http://greenbytes.de/tech/tc2231/

## License

[MIT](LICENSE)

[npm-image]: https://img.shields.io/npm/v/content-disposition.svg?style=flat
[npm-url]: https://npmjs.org/package/content-disposition
[node-version-image]: https://img.shields.io/node/v/content-disposition.svg?style=flat
[node-version-url]: https://nodejs.org/en/download
[travis-image]: https://img.shields.io/travis/jshttp/content-disposition.svg?style=flat
[travis-url]: https://travis-ci.org/jshttp/content-disposition
[coveralls-image]: https://img.shields.io/coveralls/jshttp/content-disposition.svg?style=flat
[coveralls-url]: https://coveralls.io/r/jshttp/content-disposition?branch=master
[downloads-image]: https://img.shields.io/npm/dm/content-disposition.svg?style=flat
[downloads-url]: https://npmjs.org/package/content-disposition
";
        
        $__internal_173e09f5d2d6c03cd49b4c446670ca329fe3d91311e8acc9f96c29f73f7f7c9d->leave($__internal_173e09f5d2d6c03cd49b4c446670ca329fe3d91311e8acc9f96c29f73f7f7c9d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/content-disposition/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# content-disposition

[![NPM Version][npm-image]][npm-url]
[![NPM Downloads][downloads-image]][downloads-url]
[![Node.js Version][node-version-image]][node-version-url]
[![Build Status][travis-image]][travis-url]
[![Test Coverage][coveralls-image]][coveralls-url]

Create and parse HTTP `Content-Disposition` header

## Installation

```sh
\$ npm install content-disposition
```

## API

```js
var contentDisposition = require('content-disposition')
```

### contentDisposition(filename, options)

Create an attachment `Content-Disposition` header value using the given file name,
if supplied. The `filename` is optional and if no file name is desired, but you
want to specify `options`, set `filename` to `undefined`.

```js
res.setHeader('Content-Disposition', contentDisposition('∫ maths.pdf'))
```

**note** HTTP headers are of the ISO-8859-1 character set. If you are writing this
header through a means different from `setHeader` in Node.js, you'll want to specify
the `'binary'` encoding in Node.js.

#### Options

`contentDisposition` accepts these properties in the options object.

##### fallback

If the `filename` option is outside ISO-8859-1, then the file name is actually
stored in a supplemental field for clients that support Unicode file names and
a ISO-8859-1 version of the file name is automatically generated.

This specifies the ISO-8859-1 file name to override the automatic generation or
disables the generation all together, defaults to `true`.

  - A string will specify the ISO-8859-1 file name to use in place of automatic
    generation.
  - `false` will disable including a ISO-8859-1 file name and only include the
    Unicode version (unless the file name is already ISO-8859-1).
  - `true` will enable automatic generation if the file name is outside ISO-8859-1.

If the `filename` option is ISO-8859-1 and this option is specified and has a
different value, then the `filename` option is encoded in the extended field
and this set as the fallback field, even though they are both ISO-8859-1.

##### type

Specifies the disposition type, defaults to `\"attachment\"`. This can also be
`\"inline\"`, or any other value (all values except inline are treated like
`attachment`, but can convey additional information if both parties agree to
it). The type is normalized to lower-case.

### contentDisposition.parse(string)

```js
var disposition = contentDisposition.parse('attachment; filename=\"EURO rates.txt\"; filename*=UTF-8\\'\\'%e2%82%ac%20rates.txt');
```

Parse a `Content-Disposition` header string. This automatically handles extended
(\"Unicode\") parameters by decoding them and providing them under the standard
parameter name. This will return an object with the following properties (examples
are shown for the string `'attachment; filename=\"EURO rates.txt\"; filename*=UTF-8\\'\\'%e2%82%ac%20rates.txt'`):

 - `type`: The disposition type (always lower case). Example: `'attachment'`

 - `parameters`: An object of the parameters in the disposition (name of parameter
   always lower case and extended versions replace non-extended versions). Example:
   `{filename: \"€ rates.txt\"}`

## Examples

### Send a file for download

```js
var contentDisposition = require('content-disposition')
var destroy = require('destroy')
var http = require('http')
var onFinished = require('on-finished')

var filePath = '/path/to/public/plans.pdf'

http.createServer(function onRequest(req, res) {
  // set headers
  res.setHeader('Content-Type', 'application/pdf')
  res.setHeader('Content-Disposition', contentDisposition(filePath))

  // send file
  var stream = fs.createReadStream(filePath)
  stream.pipe(res)
  onFinished(res, function (err) {
    destroy(stream)
  })
})
```

## Testing

```sh
\$ npm test
```

## References

- [RFC 2616: Hypertext Transfer Protocol -- HTTP/1.1][rfc-2616]
- [RFC 5987: Character Set and Language Encoding for Hypertext Transfer Protocol (HTTP) Header Field Parameters][rfc-5987]
- [RFC 6266: Use of the Content-Disposition Header Field in the Hypertext Transfer Protocol (HTTP)][rfc-6266]
- [Test Cases for HTTP Content-Disposition header field (RFC 6266) and the Encodings defined in RFCs 2047, 2231 and 5987][tc-2231]

[rfc-2616]: https://tools.ietf.org/html/rfc2616
[rfc-5987]: https://tools.ietf.org/html/rfc5987
[rfc-6266]: https://tools.ietf.org/html/rfc6266
[tc-2231]: http://greenbytes.de/tech/tc2231/

## License

[MIT](LICENSE)

[npm-image]: https://img.shields.io/npm/v/content-disposition.svg?style=flat
[npm-url]: https://npmjs.org/package/content-disposition
[node-version-image]: https://img.shields.io/node/v/content-disposition.svg?style=flat
[node-version-url]: https://nodejs.org/en/download
[travis-image]: https://img.shields.io/travis/jshttp/content-disposition.svg?style=flat
[travis-url]: https://travis-ci.org/jshttp/content-disposition
[coveralls-image]: https://img.shields.io/coveralls/jshttp/content-disposition.svg?style=flat
[coveralls-url]: https://coveralls.io/r/jshttp/content-disposition?branch=master
[downloads-image]: https://img.shields.io/npm/dm/content-disposition.svg?style=flat
[downloads-url]: https://npmjs.org/package/content-disposition
", "node_modules/content-disposition/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/content-disposition/README.md");
    }
}
