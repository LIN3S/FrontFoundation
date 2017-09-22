<?php

/* node_modules/repeat-string/README.md */
class __TwigTemplate_77534e6485ef8aa73b3fbf6862d08c5678a15529f4d83f113dbcc5bba992ce5a extends Twig_Template
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
        $__internal_75ceb75aa024a69bbc2a4ca1efc1866db4e8e6cd7695ab012b1a6b59657d8bd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75ceb75aa024a69bbc2a4ca1efc1866db4e8e6cd7695ab012b1a6b59657d8bd6->enter($__internal_75ceb75aa024a69bbc2a4ca1efc1866db4e8e6cd7695ab012b1a6b59657d8bd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/repeat-string/README.md"));

        // line 1
        echo "# repeat-string [![NPM version](https://img.shields.io/npm/v/repeat-string.svg?style=flat)](https://www.npmjs.com/package/repeat-string) [![NPM monthly downloads](https://img.shields.io/npm/dm/repeat-string.svg?style=flat)](https://npmjs.org/package/repeat-string)  [![NPM total downloads](https://img.shields.io/npm/dt/repeat-string.svg?style=flat)](https://npmjs.org/package/repeat-string) [![Linux Build Status](https://img.shields.io/travis/jonschlinkert/repeat-string.svg?style=flat&label=Travis)](https://travis-ci.org/jonschlinkert/repeat-string)

> Repeat the given string n times. Fastest implementation for repeating a string.

## Install

Install with [npm](https://www.npmjs.com/):

```sh
\$ npm install --save repeat-string
```

## Usage

### [repeat](index.js#L41)

Repeat the given `string` the specified `number` of times.

**Example:**

**Example**

```js
var repeat = require('repeat-string');
repeat('A', 5);
//=> AAAAA
```

**Params**

* `string` **{String}**: The string to repeat
* `number` **{Number}**: The number of times to repeat the string
* `returns` **{String}**: Repeated string

## Benchmarks

Repeat string is significantly faster than the native method (which is itself faster than [repeating](https://github.com/sindresorhus/repeating)):

```sh
# 2x
repeat-string  █████████████████████████  (26,953,977 ops/sec)
repeating      █████████                  (9,855,695 ops/sec)
native         ██████████████████         (19,453,895 ops/sec)

# 3x
repeat-string  █████████████████████████  (19,445,252 ops/sec)
repeating      ███████████                (8,661,565 ops/sec)
native         ████████████████████       (16,020,598 ops/sec)

# 10x
repeat-string  █████████████████████████  (23,792,521 ops/sec)
repeating      █████████                  (8,571,332 ops/sec)
native         ███████████████            (14,582,955 ops/sec)

# 50x
repeat-string  █████████████████████████  (23,640,179 ops/sec)
repeating      █████                      (5,505,509 ops/sec)
native         ██████████                 (10,085,557 ops/sec)

# 250x
repeat-string  █████████████████████████  (23,489,618 ops/sec)
repeating      ████                       (3,962,937 ops/sec)
native         ████████                   (7,724,892 ops/sec)

# 2000x
repeat-string  █████████████████████████  (20,315,172 ops/sec)
repeating      ████                       (3,297,079 ops/sec)
native         ███████                    (6,203,331 ops/sec)

# 20000x
repeat-string  █████████████████████████  (23,382,915 ops/sec)
repeating      ███                        (2,980,058 ops/sec)
native         █████                      (5,578,808 ops/sec)
```

**Run the benchmarks**

Install dev dependencies:

```sh
npm i -d && node benchmark
```

## About

### Related projects

[repeat-element](https://www.npmjs.com/package/repeat-element): Create an array by repeating the given value n times. | [homepage](https://github.com/jonschlinkert/repeat-element \"Create an array by repeating the given value n times.\")

### Contributing

Pull requests and stars are always welcome. For bugs and feature requests, [please create an issue](../../issues/new).

### Contributors

| **Commits** | **Contributor**<br/> | 
| --- | --- |
| 51 | [jonschlinkert](https://github.com/jonschlinkert) |
| 2 | [LinusU](https://github.com/LinusU) |
| 2 | [tbusser](https://github.com/tbusser) |
| 1 | [doowb](https://github.com/doowb) |
| 1 | [wooorm](https://github.com/wooorm) |

### Building docs

_(This document was generated by [verb-generate-readme](https://github.com/verbose/verb-generate-readme) (a [verb](https://github.com/verbose/verb) generator), please don't edit the readme directly. Any changes to the readme must be made in [.verb.md](.verb.md).)_

To generate the readme and API documentation with [verb](https://github.com/verbose/verb):

```sh
\$ npm install -g verb verb-generate-readme && verb
```

### Running tests

Install dev dependencies:

```sh
\$ npm install -d && npm test
```

### Author

**Jon Schlinkert**

* [github/jonschlinkert](https://github.com/jonschlinkert)
* [twitter/jonschlinkert](http://twitter.com/jonschlinkert)

### License

Copyright © 2016, [Jon Schlinkert](http://github.com/jonschlinkert).
Released under the [MIT license](https://github.com/jonschlinkert/repeat-string/blob/master/LICENSE).

***

_This file was generated by [verb-generate-readme](https://github.com/verbose/verb-generate-readme), v0.2.0, on October 23, 2016._";
        
        $__internal_75ceb75aa024a69bbc2a4ca1efc1866db4e8e6cd7695ab012b1a6b59657d8bd6->leave($__internal_75ceb75aa024a69bbc2a4ca1efc1866db4e8e6cd7695ab012b1a6b59657d8bd6_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/repeat-string/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# repeat-string [![NPM version](https://img.shields.io/npm/v/repeat-string.svg?style=flat)](https://www.npmjs.com/package/repeat-string) [![NPM monthly downloads](https://img.shields.io/npm/dm/repeat-string.svg?style=flat)](https://npmjs.org/package/repeat-string)  [![NPM total downloads](https://img.shields.io/npm/dt/repeat-string.svg?style=flat)](https://npmjs.org/package/repeat-string) [![Linux Build Status](https://img.shields.io/travis/jonschlinkert/repeat-string.svg?style=flat&label=Travis)](https://travis-ci.org/jonschlinkert/repeat-string)

> Repeat the given string n times. Fastest implementation for repeating a string.

## Install

Install with [npm](https://www.npmjs.com/):

```sh
\$ npm install --save repeat-string
```

## Usage

### [repeat](index.js#L41)

Repeat the given `string` the specified `number` of times.

**Example:**

**Example**

```js
var repeat = require('repeat-string');
repeat('A', 5);
//=> AAAAA
```

**Params**

* `string` **{String}**: The string to repeat
* `number` **{Number}**: The number of times to repeat the string
* `returns` **{String}**: Repeated string

## Benchmarks

Repeat string is significantly faster than the native method (which is itself faster than [repeating](https://github.com/sindresorhus/repeating)):

```sh
# 2x
repeat-string  █████████████████████████  (26,953,977 ops/sec)
repeating      █████████                  (9,855,695 ops/sec)
native         ██████████████████         (19,453,895 ops/sec)

# 3x
repeat-string  █████████████████████████  (19,445,252 ops/sec)
repeating      ███████████                (8,661,565 ops/sec)
native         ████████████████████       (16,020,598 ops/sec)

# 10x
repeat-string  █████████████████████████  (23,792,521 ops/sec)
repeating      █████████                  (8,571,332 ops/sec)
native         ███████████████            (14,582,955 ops/sec)

# 50x
repeat-string  █████████████████████████  (23,640,179 ops/sec)
repeating      █████                      (5,505,509 ops/sec)
native         ██████████                 (10,085,557 ops/sec)

# 250x
repeat-string  █████████████████████████  (23,489,618 ops/sec)
repeating      ████                       (3,962,937 ops/sec)
native         ████████                   (7,724,892 ops/sec)

# 2000x
repeat-string  █████████████████████████  (20,315,172 ops/sec)
repeating      ████                       (3,297,079 ops/sec)
native         ███████                    (6,203,331 ops/sec)

# 20000x
repeat-string  █████████████████████████  (23,382,915 ops/sec)
repeating      ███                        (2,980,058 ops/sec)
native         █████                      (5,578,808 ops/sec)
```

**Run the benchmarks**

Install dev dependencies:

```sh
npm i -d && node benchmark
```

## About

### Related projects

[repeat-element](https://www.npmjs.com/package/repeat-element): Create an array by repeating the given value n times. | [homepage](https://github.com/jonschlinkert/repeat-element \"Create an array by repeating the given value n times.\")

### Contributing

Pull requests and stars are always welcome. For bugs and feature requests, [please create an issue](../../issues/new).

### Contributors

| **Commits** | **Contributor**<br/> | 
| --- | --- |
| 51 | [jonschlinkert](https://github.com/jonschlinkert) |
| 2 | [LinusU](https://github.com/LinusU) |
| 2 | [tbusser](https://github.com/tbusser) |
| 1 | [doowb](https://github.com/doowb) |
| 1 | [wooorm](https://github.com/wooorm) |

### Building docs

_(This document was generated by [verb-generate-readme](https://github.com/verbose/verb-generate-readme) (a [verb](https://github.com/verbose/verb) generator), please don't edit the readme directly. Any changes to the readme must be made in [.verb.md](.verb.md).)_

To generate the readme and API documentation with [verb](https://github.com/verbose/verb):

```sh
\$ npm install -g verb verb-generate-readme && verb
```

### Running tests

Install dev dependencies:

```sh
\$ npm install -d && npm test
```

### Author

**Jon Schlinkert**

* [github/jonschlinkert](https://github.com/jonschlinkert)
* [twitter/jonschlinkert](http://twitter.com/jonschlinkert)

### License

Copyright © 2016, [Jon Schlinkert](http://github.com/jonschlinkert).
Released under the [MIT license](https://github.com/jonschlinkert/repeat-string/blob/master/LICENSE).

***

_This file was generated by [verb-generate-readme](https://github.com/verbose/verb-generate-readme), v0.2.0, on October 23, 2016._", "node_modules/repeat-string/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/repeat-string/README.md");
    }
}
