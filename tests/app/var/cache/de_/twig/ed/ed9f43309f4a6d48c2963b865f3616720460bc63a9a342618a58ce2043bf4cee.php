<?php

/* node_modules/randomatic/README.md */
class __TwigTemplate_3de80b47877f6079628a4429f90ca143ce008a44eda276aa65ed64959a78c6e8 extends Twig_Template
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
        $__internal_be8ddcd4ea8cec960257bd7149f4f08eabb62fac7dc9b191b61e9c7f73a49b47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be8ddcd4ea8cec960257bd7149f4f08eabb62fac7dc9b191b61e9c7f73a49b47->enter($__internal_be8ddcd4ea8cec960257bd7149f4f08eabb62fac7dc9b191b61e9c7f73a49b47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/randomatic/README.md"));

        // line 1
        echo "# randomatic [![NPM version](https://img.shields.io/npm/v/randomatic.svg?style=flat)](https://www.npmjs.com/package/randomatic) [![NPM monthly downloads](https://img.shields.io/npm/dm/randomatic.svg?style=flat)](https://npmjs.org/package/randomatic) [![NPM total downloads](https://img.shields.io/npm/dt/randomatic.svg?style=flat)](https://npmjs.org/package/randomatic) [![Linux Build Status](https://img.shields.io/travis/jonschlinkert/randomatic.svg?style=flat&label=Travis)](https://travis-ci.org/jonschlinkert/randomatic)

> Generate randomized strings of a specified length, fast. Only the length is necessary, but you can optionally generate patterns using any combination of numeric, alpha-numeric, alphabetical, special or custom characters.

## Install

Install with [npm](https://www.npmjs.com/):

```sh
\$ npm install --save randomatic
```

## Usage

```js
var randomize = require('randomatic');
```

## API

```js
randomize(pattern, length, options);
```

* `pattern` **{String}**: The pattern to use for randomizing
* `length` **{Object}**: The length of the string to generate

### pattern

> The pattern to use for randomizing

Patterns can contain any combination of the below characters, specified in any order.

**Example:**

To generate a 10-character randomized string using all available characters:

```js
randomize('*', 10);
//=>

randomize('Aa0!', 10);
//=>
```

* `a`: Lowercase alpha characters (`abcdefghijklmnopqrstuvwxyz'`)
* `A`: Uppercase alpha characters (`ABCDEFGHIJKLMNOPQRSTUVWXYZ'`)
* `0`: Numeric characters (`0123456789'`)
* `!`: Special characters (`~!@#\$%^&()_+-={}[];\\',.`)
* `*`: All characters (all of the above combined)
* `?`: Custom characters (pass a string of custom characters to the options)

### length

> the length of the string to generate

**Examples:**

* `randomize('A', 5)` will generate a 5-character, uppercase, alphabetical, randomized string, e.g. `KDJWJ`.
* `randomize('0', 2)` will generate a 2-digit random number
* `randomize('0', 3)` will generate a 3-digit random number
* `randomize('0', 12)` will generate a 12-digit random number
* `randomize('A0', 16)` will generate a 16-character, alpha-numeric randomized string

If `length` is left undefined, the length of the pattern in the first parameter will be used. For example:

* `randomize('00')` will generate a 2-digit random number
* `randomize('000')` will generate a 3-digit random number
* `randomize('0000')` will generate a 4-digit random number...
* `randomize('AAAAA')` will generate a 5-character, uppercase alphabetical random string...

These are just examples, [see the tests](./test.js) for more use cases and examples.

#### chars

Type: `String`

Default: `undefined`

Define a custom string to be randomized.

**Example:**

* `randomize('?', 20, {chars: 'jonschlinkert'})` will generate a 20-character randomized string from the letters contained in `jonschlinkert`.
* `randomize('?', {chars: 'jonschlinkert'})` will generate a 13-character randomized string from the letters contained in `jonschlinkert`.

## Usage Examples

* `randomize('A', 4)` (_whitespace insenstive_) would result in randomized 4-digit uppercase letters, like, `ZAKH`, `UJSL`... etc.
* `randomize('AAAA')` is equivelant to `randomize('A', 4)`
* `randomize('AAA0')` and `randomize('AA00')` and `randomize('A0A0')` are equivelant to `randomize('A0', 4)`
* `randomize('aa')`: results in double-digit, randomized, lower-case letters (`abcdefghijklmnopqrstuvwxyz`)
* `randomize('AAA')`: results in triple-digit, randomized, upper-case letters (`ABCDEFGHIJKLMNOPQRSTUVWXYZ`)
* `randomize('0', 6)`: results in six-digit, randomized numbers (`0123456789`)
* `randomize('!', 5)`: results in single-digit randomized, _valid_ non-letter characters (`~!@#\$%^&()_+-={}[]
* `randomize('A!a0', 9)`: results in nine-digit, randomized characters (any of the above)

_The order in which the characters are defined is insignificant._

## About

### Related projects

* [pad-left](https://www.npmjs.com/package/pad-left): Left pad a string with zeros or a specified string. Fastest implementation. | [homepage](https://github.com/jonschlinkert/pad-left \"Left pad a string with zeros or a specified string. Fastest implementation.\")
* [pad-right](https://www.npmjs.com/package/pad-right): Right pad a string with zeros or a specified string. Fastest implementation. | [homepage](https://github.com/jonschlinkert/pad-right \"Right pad a string with zeros or a specified string. Fastest implementation.\")
* [repeat-string](https://www.npmjs.com/package/repeat-string): Repeat the given string n times. Fastest implementation for repeating a string. | [homepage](https://github.com/jonschlinkert/repeat-string \"Repeat the given string n times. Fastest implementation for repeating a string.\")

### Contributing

Pull requests and stars are always welcome. For bugs and feature requests, [please create an issue](../../issues/new).

### Contributors

| **Commits** | **Contributor** | 
| --- | --- |
| 41 | [jonschlinkert](https://github.com/jonschlinkert) |
| 1 | [TrySound](https://github.com/TrySound) |
| 1 | [Drag0s](https://github.com/Drag0s) |
| 1 | [paulmillr](https://github.com/paulmillr) |
| 1 | [sunknudsen](https://github.com/sunknudsen) |

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

_This file was generated by [verb-generate-readme](https://github.com/verbose/verb-generate-readme), v0.6.0, on June 09, 2017._";
        
        $__internal_be8ddcd4ea8cec960257bd7149f4f08eabb62fac7dc9b191b61e9c7f73a49b47->leave($__internal_be8ddcd4ea8cec960257bd7149f4f08eabb62fac7dc9b191b61e9c7f73a49b47_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/randomatic/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# randomatic [![NPM version](https://img.shields.io/npm/v/randomatic.svg?style=flat)](https://www.npmjs.com/package/randomatic) [![NPM monthly downloads](https://img.shields.io/npm/dm/randomatic.svg?style=flat)](https://npmjs.org/package/randomatic) [![NPM total downloads](https://img.shields.io/npm/dt/randomatic.svg?style=flat)](https://npmjs.org/package/randomatic) [![Linux Build Status](https://img.shields.io/travis/jonschlinkert/randomatic.svg?style=flat&label=Travis)](https://travis-ci.org/jonschlinkert/randomatic)

> Generate randomized strings of a specified length, fast. Only the length is necessary, but you can optionally generate patterns using any combination of numeric, alpha-numeric, alphabetical, special or custom characters.

## Install

Install with [npm](https://www.npmjs.com/):

```sh
\$ npm install --save randomatic
```

## Usage

```js
var randomize = require('randomatic');
```

## API

```js
randomize(pattern, length, options);
```

* `pattern` **{String}**: The pattern to use for randomizing
* `length` **{Object}**: The length of the string to generate

### pattern

> The pattern to use for randomizing

Patterns can contain any combination of the below characters, specified in any order.

**Example:**

To generate a 10-character randomized string using all available characters:

```js
randomize('*', 10);
//=>

randomize('Aa0!', 10);
//=>
```

* `a`: Lowercase alpha characters (`abcdefghijklmnopqrstuvwxyz'`)
* `A`: Uppercase alpha characters (`ABCDEFGHIJKLMNOPQRSTUVWXYZ'`)
* `0`: Numeric characters (`0123456789'`)
* `!`: Special characters (`~!@#\$%^&()_+-={}[];\\',.`)
* `*`: All characters (all of the above combined)
* `?`: Custom characters (pass a string of custom characters to the options)

### length

> the length of the string to generate

**Examples:**

* `randomize('A', 5)` will generate a 5-character, uppercase, alphabetical, randomized string, e.g. `KDJWJ`.
* `randomize('0', 2)` will generate a 2-digit random number
* `randomize('0', 3)` will generate a 3-digit random number
* `randomize('0', 12)` will generate a 12-digit random number
* `randomize('A0', 16)` will generate a 16-character, alpha-numeric randomized string

If `length` is left undefined, the length of the pattern in the first parameter will be used. For example:

* `randomize('00')` will generate a 2-digit random number
* `randomize('000')` will generate a 3-digit random number
* `randomize('0000')` will generate a 4-digit random number...
* `randomize('AAAAA')` will generate a 5-character, uppercase alphabetical random string...

These are just examples, [see the tests](./test.js) for more use cases and examples.

#### chars

Type: `String`

Default: `undefined`

Define a custom string to be randomized.

**Example:**

* `randomize('?', 20, {chars: 'jonschlinkert'})` will generate a 20-character randomized string from the letters contained in `jonschlinkert`.
* `randomize('?', {chars: 'jonschlinkert'})` will generate a 13-character randomized string from the letters contained in `jonschlinkert`.

## Usage Examples

* `randomize('A', 4)` (_whitespace insenstive_) would result in randomized 4-digit uppercase letters, like, `ZAKH`, `UJSL`... etc.
* `randomize('AAAA')` is equivelant to `randomize('A', 4)`
* `randomize('AAA0')` and `randomize('AA00')` and `randomize('A0A0')` are equivelant to `randomize('A0', 4)`
* `randomize('aa')`: results in double-digit, randomized, lower-case letters (`abcdefghijklmnopqrstuvwxyz`)
* `randomize('AAA')`: results in triple-digit, randomized, upper-case letters (`ABCDEFGHIJKLMNOPQRSTUVWXYZ`)
* `randomize('0', 6)`: results in six-digit, randomized numbers (`0123456789`)
* `randomize('!', 5)`: results in single-digit randomized, _valid_ non-letter characters (`~!@#\$%^&()_+-={}[]
* `randomize('A!a0', 9)`: results in nine-digit, randomized characters (any of the above)

_The order in which the characters are defined is insignificant._

## About

### Related projects

* [pad-left](https://www.npmjs.com/package/pad-left): Left pad a string with zeros or a specified string. Fastest implementation. | [homepage](https://github.com/jonschlinkert/pad-left \"Left pad a string with zeros or a specified string. Fastest implementation.\")
* [pad-right](https://www.npmjs.com/package/pad-right): Right pad a string with zeros or a specified string. Fastest implementation. | [homepage](https://github.com/jonschlinkert/pad-right \"Right pad a string with zeros or a specified string. Fastest implementation.\")
* [repeat-string](https://www.npmjs.com/package/repeat-string): Repeat the given string n times. Fastest implementation for repeating a string. | [homepage](https://github.com/jonschlinkert/repeat-string \"Repeat the given string n times. Fastest implementation for repeating a string.\")

### Contributing

Pull requests and stars are always welcome. For bugs and feature requests, [please create an issue](../../issues/new).

### Contributors

| **Commits** | **Contributor** | 
| --- | --- |
| 41 | [jonschlinkert](https://github.com/jonschlinkert) |
| 1 | [TrySound](https://github.com/TrySound) |
| 1 | [Drag0s](https://github.com/Drag0s) |
| 1 | [paulmillr](https://github.com/paulmillr) |
| 1 | [sunknudsen](https://github.com/sunknudsen) |

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

_This file was generated by [verb-generate-readme](https://github.com/verbose/verb-generate-readme), v0.6.0, on June 09, 2017._", "node_modules/randomatic/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/randomatic/README.md");
    }
}
