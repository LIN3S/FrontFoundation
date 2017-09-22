<?php

/* node_modules/expand-range/README.md */
class __TwigTemplate_65be2362e50aafb7cf072febb91c04798399bf39a837c8c3928eba05ea7fa212 extends Twig_Template
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
        $__internal_1c7de3046972aea77f8b370b67106026cd846468932e1a219c72a6ec9101ff7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c7de3046972aea77f8b370b67106026cd846468932e1a219c72a6ec9101ff7c->enter($__internal_1c7de3046972aea77f8b370b67106026cd846468932e1a219c72a6ec9101ff7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/expand-range/README.md"));

        // line 1
        echo "# expand-range [![NPM version](https://img.shields.io/npm/v/expand-range.svg?style=flat)](https://www.npmjs.com/package/expand-range) [![NPM downloads](https://img.shields.io/npm/dm/expand-range.svg?style=flat)](https://npmjs.org/package/expand-range) [![Build Status](https://img.shields.io/travis/jonschlinkert/expand-range.svg?style=flat)](https://travis-ci.org/jonschlinkert/expand-range)

Fast, bash-like range expansion. Expand a range of numbers or letters, uppercase or lowercase. See the benchmarks. Used by micromatch.

## Install

Install with [npm](https://www.npmjs.com/):

```sh
\$ npm install expand-range --save
```

Wraps [fill-range] to do range expansion using `..` separated strings. See [fill-range] for the full list of options and features.

## Example usage

```js
var expand = require('expand-range');
```

**Params**

```js
expand(start, stop, increment);
```

* `start`: the number or letter to start with
* `end`: the number or letter to end with
* `increment`: optionally pass the increment to use. works for letters or numbers

**Examples**

```js
expand('a..e')
//=> ['a', 'b', 'c', 'd', 'e']

expand('a..e..2')
//=> ['a', 'c', 'e']

expand('A..E..2')
//=> ['A', 'C', 'E']

expand('1..3')
//=> ['1', '2', '3']

expand('0..-5')
//=> [ '0', '-1', '-2', '-3', '-4', '-5' ]

expand('-9..9..3')
//=> [ '-9', '-6', '-3', '0', '3', '6', '9' ])

expand('-1..-10..-2')
//=> [ '-1', '-3', '-5', '-7', '-9' ]

expand('1..10..2')
//=> [ '1', '3', '5', '7', '9' ]
```

### Custom function

Optionally pass a custom function as the second argument:

```js
expand('a..e', function (val, isNumber, pad, i) {
  if (!isNumber) {
    return String.fromCharCode(val) + i;
  }
  return val;
});
//=> ['a0', 'b1', 'c2', 'd3', 'e4']
```

## Benchmarks

```sh
# benchmark/fixtures/alpha-lower.js (29 bytes)
  brace-expansion x 145,653 ops/sec ±0.89% (87 runs sampled)
  expand-range x 453,213 ops/sec ±1.66% (85 runs sampled)
  minimatch x 152,193 ops/sec ±1.17% (86 runs sampled)

# benchmark/fixtures/alpha-upper.js (29 bytes)
  brace-expansion x 149,975 ops/sec ±1.10% (88 runs sampled)
  expand-range x 459,390 ops/sec ±1.27% (84 runs sampled)
  minimatch x 155,253 ops/sec ±1.25% (88 runs sampled)

# benchmark/fixtures/padded.js (33 bytes)
  brace-expansion x 14,694 ops/sec ±1.37% (85 runs sampled)
  expand-range x 169,393 ops/sec ±1.76% (80 runs sampled)
  minimatch x 15,052 ops/sec ±1.15% (88 runs sampled)

# benchmark/fixtures/range.js (29 bytes)
  brace-expansion x 142,968 ops/sec ±1.35% (86 runs sampled)
  expand-range x 465,579 ops/sec ±1.43% (86 runs sampled)
  minimatch x 126,872 ops/sec ±1.18% (90 runs sampled)
```

## Related projects

You might also be interested in these projects:

* [braces](https://www.npmjs.com/package/braces): Fastest brace expansion for node.js, with the most complete support for the Bash 4.3 braces… [more](https://www.npmjs.com/package/braces) | [homepage](https://github.com/jonschlinkert/braces)
* [fill-range](https://www.npmjs.com/package/fill-range): Fill in a range of numbers or letters, optionally passing an increment or multiplier to… [more](https://www.npmjs.com/package/fill-range) | [homepage](https://github.com/jonschlinkert/fill-range)
* [micromatch](https://www.npmjs.com/package/micromatch): Glob matching for javascript/node.js. A drop-in replacement and faster alternative to minimatch and multimatch. | [homepage](https://github.com/jonschlinkert/micromatch)

## Contributing

Pull requests and stars are always welcome. For bugs and feature requests, [please create an issue](https://github.com/jonschlinkert/expand-range/issues/new).

## Building docs

Generate readme and API documentation with [verb](https://github.com/verbose/verb):

```sh
\$ npm install verb && npm run docs
```

Or, if [verb](https://github.com/verbose/verb) is installed globally:

```sh
\$ verb
```

## Running tests

Install dev dependencies:

```sh
\$ npm install -d && npm test
```

## Author

**Jon Schlinkert**

* [github/jonschlinkert](https://github.com/jonschlinkert)
* [twitter/jonschlinkert](http://twitter.com/jonschlinkert)

## License

Copyright © 2016, [Jon Schlinkert](https://github.com/jonschlinkert).
Released under the [MIT license](https://github.com/jonschlinkert/expand-range/blob/master/LICENSE).

***

_This file was generated by [verb](https://github.com/verbose/verb), v0.9.0, on May 05, 2016._";
        
        $__internal_1c7de3046972aea77f8b370b67106026cd846468932e1a219c72a6ec9101ff7c->leave($__internal_1c7de3046972aea77f8b370b67106026cd846468932e1a219c72a6ec9101ff7c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/expand-range/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# expand-range [![NPM version](https://img.shields.io/npm/v/expand-range.svg?style=flat)](https://www.npmjs.com/package/expand-range) [![NPM downloads](https://img.shields.io/npm/dm/expand-range.svg?style=flat)](https://npmjs.org/package/expand-range) [![Build Status](https://img.shields.io/travis/jonschlinkert/expand-range.svg?style=flat)](https://travis-ci.org/jonschlinkert/expand-range)

Fast, bash-like range expansion. Expand a range of numbers or letters, uppercase or lowercase. See the benchmarks. Used by micromatch.

## Install

Install with [npm](https://www.npmjs.com/):

```sh
\$ npm install expand-range --save
```

Wraps [fill-range] to do range expansion using `..` separated strings. See [fill-range] for the full list of options and features.

## Example usage

```js
var expand = require('expand-range');
```

**Params**

```js
expand(start, stop, increment);
```

* `start`: the number or letter to start with
* `end`: the number or letter to end with
* `increment`: optionally pass the increment to use. works for letters or numbers

**Examples**

```js
expand('a..e')
//=> ['a', 'b', 'c', 'd', 'e']

expand('a..e..2')
//=> ['a', 'c', 'e']

expand('A..E..2')
//=> ['A', 'C', 'E']

expand('1..3')
//=> ['1', '2', '3']

expand('0..-5')
//=> [ '0', '-1', '-2', '-3', '-4', '-5' ]

expand('-9..9..3')
//=> [ '-9', '-6', '-3', '0', '3', '6', '9' ])

expand('-1..-10..-2')
//=> [ '-1', '-3', '-5', '-7', '-9' ]

expand('1..10..2')
//=> [ '1', '3', '5', '7', '9' ]
```

### Custom function

Optionally pass a custom function as the second argument:

```js
expand('a..e', function (val, isNumber, pad, i) {
  if (!isNumber) {
    return String.fromCharCode(val) + i;
  }
  return val;
});
//=> ['a0', 'b1', 'c2', 'd3', 'e4']
```

## Benchmarks

```sh
# benchmark/fixtures/alpha-lower.js (29 bytes)
  brace-expansion x 145,653 ops/sec ±0.89% (87 runs sampled)
  expand-range x 453,213 ops/sec ±1.66% (85 runs sampled)
  minimatch x 152,193 ops/sec ±1.17% (86 runs sampled)

# benchmark/fixtures/alpha-upper.js (29 bytes)
  brace-expansion x 149,975 ops/sec ±1.10% (88 runs sampled)
  expand-range x 459,390 ops/sec ±1.27% (84 runs sampled)
  minimatch x 155,253 ops/sec ±1.25% (88 runs sampled)

# benchmark/fixtures/padded.js (33 bytes)
  brace-expansion x 14,694 ops/sec ±1.37% (85 runs sampled)
  expand-range x 169,393 ops/sec ±1.76% (80 runs sampled)
  minimatch x 15,052 ops/sec ±1.15% (88 runs sampled)

# benchmark/fixtures/range.js (29 bytes)
  brace-expansion x 142,968 ops/sec ±1.35% (86 runs sampled)
  expand-range x 465,579 ops/sec ±1.43% (86 runs sampled)
  minimatch x 126,872 ops/sec ±1.18% (90 runs sampled)
```

## Related projects

You might also be interested in these projects:

* [braces](https://www.npmjs.com/package/braces): Fastest brace expansion for node.js, with the most complete support for the Bash 4.3 braces… [more](https://www.npmjs.com/package/braces) | [homepage](https://github.com/jonschlinkert/braces)
* [fill-range](https://www.npmjs.com/package/fill-range): Fill in a range of numbers or letters, optionally passing an increment or multiplier to… [more](https://www.npmjs.com/package/fill-range) | [homepage](https://github.com/jonschlinkert/fill-range)
* [micromatch](https://www.npmjs.com/package/micromatch): Glob matching for javascript/node.js. A drop-in replacement and faster alternative to minimatch and multimatch. | [homepage](https://github.com/jonschlinkert/micromatch)

## Contributing

Pull requests and stars are always welcome. For bugs and feature requests, [please create an issue](https://github.com/jonschlinkert/expand-range/issues/new).

## Building docs

Generate readme and API documentation with [verb](https://github.com/verbose/verb):

```sh
\$ npm install verb && npm run docs
```

Or, if [verb](https://github.com/verbose/verb) is installed globally:

```sh
\$ verb
```

## Running tests

Install dev dependencies:

```sh
\$ npm install -d && npm test
```

## Author

**Jon Schlinkert**

* [github/jonschlinkert](https://github.com/jonschlinkert)
* [twitter/jonschlinkert](http://twitter.com/jonschlinkert)

## License

Copyright © 2016, [Jon Schlinkert](https://github.com/jonschlinkert).
Released under the [MIT license](https://github.com/jonschlinkert/expand-range/blob/master/LICENSE).

***

_This file was generated by [verb](https://github.com/verbose/verb), v0.9.0, on May 05, 2016._", "node_modules/expand-range/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/expand-range/README.md");
    }
}
