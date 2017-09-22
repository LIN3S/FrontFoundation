<?php

/* node_modules/lazy-cache/README.md */
class __TwigTemplate_7fd04924730667a10e4b1e2879f2af11e0a4cb7fd56b1f312f758ec84e4691fa extends Twig_Template
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
        $__internal_50d8e2783bc6618b4a8d2202e0131d9602fa68101752188fe33b71faa0d08c2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50d8e2783bc6618b4a8d2202e0131d9602fa68101752188fe33b71faa0d08c2e->enter($__internal_50d8e2783bc6618b4a8d2202e0131d9602fa68101752188fe33b71faa0d08c2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lazy-cache/README.md"));

        // line 1
        echo "# lazy-cache [![NPM version](https://img.shields.io/npm/v/lazy-cache.svg?style=flat)](https://www.npmjs.com/package/lazy-cache) [![NPM downloads](https://img.shields.io/npm/dm/lazy-cache.svg?style=flat)](https://npmjs.org/package/lazy-cache) [![Build Status](https://img.shields.io/travis/jonschlinkert/lazy-cache.svg?style=flat)](https://travis-ci.org/jonschlinkert/lazy-cache)

> Cache requires to be lazy-loaded when needed.

## Install

Install with [npm](https://www.npmjs.com/):

```sh
\$ npm install lazy-cache --save
```

If you use webpack and are experiencing issues, try using [unlazy-loader](https://github.com/doowb/unlazy-loader), a webpack loader that fixes the bug that prevents webpack from working with native javascript getters.

## Usage

```js
var utils = require('lazy-cache')(require);
```

**Use as a property on `lazy`**

The module is also added as a property to the `lazy` function
so it can be called without having to call a function first.

```js
var utils = require('lazy-cache')(require);

// `npm install glob`
utils('glob');

// glob sync
console.log(utils.glob.sync('*.js'));

// glob async
utils.glob('*.js', function (err, files) {
  console.log(files);
});
```

**Use as a function**

```js
var utils = require('lazy-cache')(require);
var glob = utils('glob');

// `glob` is a now a function that may be called when needed
glob().sync('foo/*.js');
```

## Aliases

An alias may be passed as the second argument if you don't want to use the automatically camel-cased variable name.

**Example**

```js
var utils = require('lazy-cache')(require);

// alias `ansi-yellow` as `yellow`
utils('ansi-yellow', 'yellow');
console.log(utils.yellow('foo'));
```

## Browserify usage

**Example**

```js
var utils = require('lazy-cache')(require);
// temporarily re-assign `require` to trick browserify
var fn = require;
require = utils;
// list module dependencies (here, `require` is actually `lazy-cache`)
require('glob');
require = fn; // restore the native `require` function

/**
 * Now you can use glob with the `utils.glob` variable
 */

// sync
console.log(utils.glob.sync('*.js'));

// async
utils.glob('*.js', function (err, files) {
  console.log(files.join('\\n'));
});
```

## Kill switch

In certain rare edge cases it may be necessary to unlazy all lazy-cached dependencies (5 reported cases after ~30 million downloads).

To force lazy-cache to immediately invoke all dependencies, do:

```js
process.env.UNLAZY = true;
```

## Related projects

You might also be interested in these projects:

[lint-deps](https://www.npmjs.com/package/lint-deps): CLI tool that tells you when dependencies are missing from package.json and offers you a… [more](https://www.npmjs.com/package/lint-deps) | [homepage](https://github.com/jonschlinkert/lint-deps)

## Contributing

Pull requests and stars are always welcome. For bugs and feature requests, [please create an issue](https://github.com/jonschlinkert/lazy-cache/issues/new).

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
Released under the [MIT license](https://github.com/jonschlinkert/lazy-cache/blob/master/LICENSE).

***

_This file was generated by [verb](https://github.com/verbose/verb), v0.9.0, on April 22, 2016._";
        
        $__internal_50d8e2783bc6618b4a8d2202e0131d9602fa68101752188fe33b71faa0d08c2e->leave($__internal_50d8e2783bc6618b4a8d2202e0131d9602fa68101752188fe33b71faa0d08c2e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lazy-cache/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# lazy-cache [![NPM version](https://img.shields.io/npm/v/lazy-cache.svg?style=flat)](https://www.npmjs.com/package/lazy-cache) [![NPM downloads](https://img.shields.io/npm/dm/lazy-cache.svg?style=flat)](https://npmjs.org/package/lazy-cache) [![Build Status](https://img.shields.io/travis/jonschlinkert/lazy-cache.svg?style=flat)](https://travis-ci.org/jonschlinkert/lazy-cache)

> Cache requires to be lazy-loaded when needed.

## Install

Install with [npm](https://www.npmjs.com/):

```sh
\$ npm install lazy-cache --save
```

If you use webpack and are experiencing issues, try using [unlazy-loader](https://github.com/doowb/unlazy-loader), a webpack loader that fixes the bug that prevents webpack from working with native javascript getters.

## Usage

```js
var utils = require('lazy-cache')(require);
```

**Use as a property on `lazy`**

The module is also added as a property to the `lazy` function
so it can be called without having to call a function first.

```js
var utils = require('lazy-cache')(require);

// `npm install glob`
utils('glob');

// glob sync
console.log(utils.glob.sync('*.js'));

// glob async
utils.glob('*.js', function (err, files) {
  console.log(files);
});
```

**Use as a function**

```js
var utils = require('lazy-cache')(require);
var glob = utils('glob');

// `glob` is a now a function that may be called when needed
glob().sync('foo/*.js');
```

## Aliases

An alias may be passed as the second argument if you don't want to use the automatically camel-cased variable name.

**Example**

```js
var utils = require('lazy-cache')(require);

// alias `ansi-yellow` as `yellow`
utils('ansi-yellow', 'yellow');
console.log(utils.yellow('foo'));
```

## Browserify usage

**Example**

```js
var utils = require('lazy-cache')(require);
// temporarily re-assign `require` to trick browserify
var fn = require;
require = utils;
// list module dependencies (here, `require` is actually `lazy-cache`)
require('glob');
require = fn; // restore the native `require` function

/**
 * Now you can use glob with the `utils.glob` variable
 */

// sync
console.log(utils.glob.sync('*.js'));

// async
utils.glob('*.js', function (err, files) {
  console.log(files.join('\\n'));
});
```

## Kill switch

In certain rare edge cases it may be necessary to unlazy all lazy-cached dependencies (5 reported cases after ~30 million downloads).

To force lazy-cache to immediately invoke all dependencies, do:

```js
process.env.UNLAZY = true;
```

## Related projects

You might also be interested in these projects:

[lint-deps](https://www.npmjs.com/package/lint-deps): CLI tool that tells you when dependencies are missing from package.json and offers you a… [more](https://www.npmjs.com/package/lint-deps) | [homepage](https://github.com/jonschlinkert/lint-deps)

## Contributing

Pull requests and stars are always welcome. For bugs and feature requests, [please create an issue](https://github.com/jonschlinkert/lazy-cache/issues/new).

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
Released under the [MIT license](https://github.com/jonschlinkert/lazy-cache/blob/master/LICENSE).

***

_This file was generated by [verb](https://github.com/verbose/verb), v0.9.0, on April 22, 2016._", "node_modules/lazy-cache/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lazy-cache/README.md");
    }
}
