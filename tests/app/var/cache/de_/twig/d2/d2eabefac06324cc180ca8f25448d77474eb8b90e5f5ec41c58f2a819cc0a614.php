<?php

/* node_modules/normalize-path/README.md */
class __TwigTemplate_ddab9664edca286a1d75522172065541fb83a136fbfd48efc07bb60f7b8dd18c extends Twig_Template
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
        $__internal_e9bcdbce2245ad5a9da93fce5e7b481bc2a5d1d7df57998957bdf1db0d3c8402 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9bcdbce2245ad5a9da93fce5e7b481bc2a5d1d7df57998957bdf1db0d3c8402->enter($__internal_e9bcdbce2245ad5a9da93fce5e7b481bc2a5d1d7df57998957bdf1db0d3c8402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/normalize-path/README.md"));

        // line 1
        echo "# normalize-path [![NPM version](https://img.shields.io/npm/v/normalize-path.svg?style=flat)](https://www.npmjs.com/package/normalize-path) [![NPM monthly downloads](https://img.shields.io/npm/dm/normalize-path.svg?style=flat)](https://npmjs.org/package/normalize-path)  [![NPM total downloads](https://img.shields.io/npm/dt/normalize-path.svg?style=flat)](https://npmjs.org/package/normalize-path) [![Linux Build Status](https://img.shields.io/travis/jonschlinkert/normalize-path.svg?style=flat&label=Travis)](https://travis-ci.org/jonschlinkert/normalize-path)

> Normalize file path slashes to be unix-like forward slashes. Also condenses repeat slashes to a single slash and removes and trailing slashes unless disabled.

## Install

Install with [npm](https://www.npmjs.com/):

```sh
\$ npm install --save normalize-path
```

## Usage

```js
var normalize = require('normalize-path');

normalize('\\\\foo\\\\bar\\\\baz\\\\');
//=> '/foo/bar/baz'

normalize('./foo/bar/baz/');
//=> './foo/bar/baz'
```

Pass `false` as the last argument to **keep** trailing slashes:

```js
normalize('./foo/bar/baz/', false);
//=> './foo/bar/baz/'

normalize('foo\\\\bar\\\\baz\\\\', false);
//=> 'foo/bar/baz/'
```

## About

### Related projects

* [contains-path](https://www.npmjs.com/package/contains-path): Return true if a file path contains the given path. | [homepage](https://github.com/jonschlinkert/contains-path \"Return true if a file path contains the given path.\")
* [ends-with](https://www.npmjs.com/package/ends-with): Returns `true` if the given `string` or `array` ends with `suffix` using strict equality for… [more](https://github.com/jonschlinkert/ends-with) | [homepage](https://github.com/jonschlinkert/ends-with \"Returns `true` if the given `string` or `array` ends with `suffix` using strict equality for comparisons.\")
* [is-absolute](https://www.npmjs.com/package/is-absolute): Polyfill for node.js `path.isAbolute`. Returns true if a file path is absolute. | [homepage](https://github.com/jonschlinkert/is-absolute \"Polyfill for node.js `path.isAbolute`. Returns true if a file path is absolute.\")
* [is-relative](https://www.npmjs.com/package/is-relative): Returns `true` if the path appears to be relative. | [homepage](https://github.com/jonschlinkert/is-relative \"Returns `true` if the path appears to be relative.\")
* [parse-filepath](https://www.npmjs.com/package/parse-filepath): Pollyfill for node.js `path.parse`, parses a filepath into an object. | [homepage](https://github.com/jonschlinkert/parse-filepath \"Pollyfill for node.js `path.parse`, parses a filepath into an object.\")
* [path-ends-with](https://www.npmjs.com/package/path-ends-with): Return `true` if a file path ends with the given string/suffix. | [homepage](https://github.com/jonschlinkert/path-ends-with \"Return `true` if a file path ends with the given string/suffix.\")
* [path-segments](https://www.npmjs.com/package/path-segments): Get n specific segments of a file path, e.g. first 2, last 3, etc. | [homepage](https://github.com/jonschlinkert/path-segments \"Get n specific segments of a file path, e.g. first 2, last 3, etc.\")
* [rewrite-ext](https://www.npmjs.com/package/rewrite-ext): Automatically re-write the destination extension of a filepath based on the source extension. e.g… [more](https://github.com/jonschlinkert/rewrite-ext) | [homepage](https://github.com/jonschlinkert/rewrite-ext \"Automatically re-write the destination extension of a filepath based on the source extension. e.g  `.coffee` => `.js`. This will only rename the ext, no other path parts are modified.\")
* [unixify](https://www.npmjs.com/package/unixify): Convert Windows file paths to unix paths. | [homepage](https://github.com/jonschlinkert/unixify \"Convert Windows file paths to unix paths.\")

### Contributing

Pull requests and stars are always welcome. For bugs and feature requests, [please create an issue](../../issues/new).

### Contributors

| **Commits** | **Contributor** | 
| --- | --- |
| 31 | [jonschlinkert](https://github.com/jonschlinkert) |
| 1 | [phated](https://github.com/phated) |

### Building docs

_(This project's readme.md is generated by [verb](https://github.com/verbose/verb-generate-readme), please don't edit the readme directly. Any changes to the readme must be made in the [.verb.md](.verb.md) readme template.)_

To generate the readme, run the following command:

```sh
\$ npm install -g verbose/verb#dev verb-generate-readme && verb
```

### Running tests

Running and reviewing unit tests is a great way to get familiarized with a library and its API. You can install dependencies and run tests with the following command:

```sh
\$ npm install && npm test
```

### Author

**Jon Schlinkert**

* [github/jonschlinkert](https://github.com/jonschlinkert)
* [twitter/jonschlinkert](https://twitter.com/jonschlinkert)

### License

Copyright © 2017, [Jon Schlinkert](https://github.com/jonschlinkert).
Released under the [MIT License](LICENSE).

***

_This file was generated by [verb-generate-readme](https://github.com/verbose/verb-generate-readme), v0.4.3, on March 29, 2017._";
        
        $__internal_e9bcdbce2245ad5a9da93fce5e7b481bc2a5d1d7df57998957bdf1db0d3c8402->leave($__internal_e9bcdbce2245ad5a9da93fce5e7b481bc2a5d1d7df57998957bdf1db0d3c8402_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/normalize-path/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# normalize-path [![NPM version](https://img.shields.io/npm/v/normalize-path.svg?style=flat)](https://www.npmjs.com/package/normalize-path) [![NPM monthly downloads](https://img.shields.io/npm/dm/normalize-path.svg?style=flat)](https://npmjs.org/package/normalize-path)  [![NPM total downloads](https://img.shields.io/npm/dt/normalize-path.svg?style=flat)](https://npmjs.org/package/normalize-path) [![Linux Build Status](https://img.shields.io/travis/jonschlinkert/normalize-path.svg?style=flat&label=Travis)](https://travis-ci.org/jonschlinkert/normalize-path)

> Normalize file path slashes to be unix-like forward slashes. Also condenses repeat slashes to a single slash and removes and trailing slashes unless disabled.

## Install

Install with [npm](https://www.npmjs.com/):

```sh
\$ npm install --save normalize-path
```

## Usage

```js
var normalize = require('normalize-path');

normalize('\\\\foo\\\\bar\\\\baz\\\\');
//=> '/foo/bar/baz'

normalize('./foo/bar/baz/');
//=> './foo/bar/baz'
```

Pass `false` as the last argument to **keep** trailing slashes:

```js
normalize('./foo/bar/baz/', false);
//=> './foo/bar/baz/'

normalize('foo\\\\bar\\\\baz\\\\', false);
//=> 'foo/bar/baz/'
```

## About

### Related projects

* [contains-path](https://www.npmjs.com/package/contains-path): Return true if a file path contains the given path. | [homepage](https://github.com/jonschlinkert/contains-path \"Return true if a file path contains the given path.\")
* [ends-with](https://www.npmjs.com/package/ends-with): Returns `true` if the given `string` or `array` ends with `suffix` using strict equality for… [more](https://github.com/jonschlinkert/ends-with) | [homepage](https://github.com/jonschlinkert/ends-with \"Returns `true` if the given `string` or `array` ends with `suffix` using strict equality for comparisons.\")
* [is-absolute](https://www.npmjs.com/package/is-absolute): Polyfill for node.js `path.isAbolute`. Returns true if a file path is absolute. | [homepage](https://github.com/jonschlinkert/is-absolute \"Polyfill for node.js `path.isAbolute`. Returns true if a file path is absolute.\")
* [is-relative](https://www.npmjs.com/package/is-relative): Returns `true` if the path appears to be relative. | [homepage](https://github.com/jonschlinkert/is-relative \"Returns `true` if the path appears to be relative.\")
* [parse-filepath](https://www.npmjs.com/package/parse-filepath): Pollyfill for node.js `path.parse`, parses a filepath into an object. | [homepage](https://github.com/jonschlinkert/parse-filepath \"Pollyfill for node.js `path.parse`, parses a filepath into an object.\")
* [path-ends-with](https://www.npmjs.com/package/path-ends-with): Return `true` if a file path ends with the given string/suffix. | [homepage](https://github.com/jonschlinkert/path-ends-with \"Return `true` if a file path ends with the given string/suffix.\")
* [path-segments](https://www.npmjs.com/package/path-segments): Get n specific segments of a file path, e.g. first 2, last 3, etc. | [homepage](https://github.com/jonschlinkert/path-segments \"Get n specific segments of a file path, e.g. first 2, last 3, etc.\")
* [rewrite-ext](https://www.npmjs.com/package/rewrite-ext): Automatically re-write the destination extension of a filepath based on the source extension. e.g… [more](https://github.com/jonschlinkert/rewrite-ext) | [homepage](https://github.com/jonschlinkert/rewrite-ext \"Automatically re-write the destination extension of a filepath based on the source extension. e.g  `.coffee` => `.js`. This will only rename the ext, no other path parts are modified.\")
* [unixify](https://www.npmjs.com/package/unixify): Convert Windows file paths to unix paths. | [homepage](https://github.com/jonschlinkert/unixify \"Convert Windows file paths to unix paths.\")

### Contributing

Pull requests and stars are always welcome. For bugs and feature requests, [please create an issue](../../issues/new).

### Contributors

| **Commits** | **Contributor** | 
| --- | --- |
| 31 | [jonschlinkert](https://github.com/jonschlinkert) |
| 1 | [phated](https://github.com/phated) |

### Building docs

_(This project's readme.md is generated by [verb](https://github.com/verbose/verb-generate-readme), please don't edit the readme directly. Any changes to the readme must be made in the [.verb.md](.verb.md) readme template.)_

To generate the readme, run the following command:

```sh
\$ npm install -g verbose/verb#dev verb-generate-readme && verb
```

### Running tests

Running and reviewing unit tests is a great way to get familiarized with a library and its API. You can install dependencies and run tests with the following command:

```sh
\$ npm install && npm test
```

### Author

**Jon Schlinkert**

* [github/jonschlinkert](https://github.com/jonschlinkert)
* [twitter/jonschlinkert](https://twitter.com/jonschlinkert)

### License

Copyright © 2017, [Jon Schlinkert](https://github.com/jonschlinkert).
Released under the [MIT License](LICENSE).

***

_This file was generated by [verb-generate-readme](https://github.com/verbose/verb-generate-readme), v0.4.3, on March 29, 2017._", "node_modules/normalize-path/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/normalize-path/README.md");
    }
}
