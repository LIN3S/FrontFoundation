<?php

/* node_modules/anymatch/README.md */
class __TwigTemplate_c4d8648bbee5ded4e0e65e2d567b7e11dab4d914baa2b36b3d58fabc2363bb10 extends Twig_Template
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
        $__internal_6f7b5107712dd74e3128834e981b6f466f3e45dd8594e542ed701992419d8be5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f7b5107712dd74e3128834e981b6f466f3e45dd8594e542ed701992419d8be5->enter($__internal_6f7b5107712dd74e3128834e981b6f466f3e45dd8594e542ed701992419d8be5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/anymatch/README.md"));

        // line 1
        echo "anymatch [![Build Status](https://travis-ci.org/es128/anymatch.svg?branch=master)](https://travis-ci.org/es128/anymatch) [![Coverage Status](https://img.shields.io/coveralls/es128/anymatch.svg?branch=master)](https://coveralls.io/r/es128/anymatch?branch=master)
======
Javascript module to match a string against a regular expression, glob, string,
or function that takes the string as an argument and returns a truthy or falsy
value. The matcher can also be an array of any or all of these. Useful for
allowing a very flexible user-defined config to define things like file paths.

[![NPM](https://nodei.co/npm/anymatch.png?downloads=true&downloadRank=true&stars=true)](https://nodei.co/npm/anymatch/)
[![NPM](https://nodei.co/npm-dl/anymatch.png?height=3&months=9)](https://nodei.co/npm-dl/anymatch/)

Usage
-----
```sh
npm install anymatch --save
```

#### anymatch (matchers, testString, [returnIndex], [startIndex], [endIndex])
* __matchers__: (_Array|String|RegExp|Function_)
String to be directly matched, string with glob patterns, regular expression
test, function that takes the testString as an argument and returns a truthy
value if it should be matched, or an array of any number and mix of these types.
* __testString__: (_String|Array_) The string to test against the matchers. If
passed as an array, the first element of the array will be used as the
`testString` for non-function matchers, while the entire array will be applied
as the arguments for function matchers.
* __returnIndex__: (_Boolean [optional]_) If true, return the array index of
the first matcher that that testString matched, or -1 if no match, instead of a
boolean result.
* __startIndex, endIndex__: (_Integer [optional]_) Can be used to define a
subset out of the array of provided matchers to test against. Can be useful
with bound matcher functions (see below). When used with `returnIndex = true`
preserves original indexing. Behaves the same as `Array.prototype.slice` (i.e.
includes array members up to, but not including endIndex).

```js
var anymatch = require('anymatch');

var matchers = [
\t'path/to/file.js',
\t'path/anyjs/**/*.js',
\t/foo\\.js\$/,
\tfunction (string) {
\t\treturn string.indexOf('bar') !== -1 && string.length > 10
\t}
];

anymatch(matchers, 'path/to/file.js'); // true
anymatch(matchers, 'path/anyjs/baz.js'); // true
anymatch(matchers, 'path/to/foo.js'); // true
anymatch(matchers, 'path/to/bar.js'); // true
anymatch(matchers, 'bar.js'); // false

// returnIndex = true
anymatch(matchers, 'foo.js', true); // 2
anymatch(matchers, 'path/anyjs/foo.js', true); // 1

// skip matchers
anymatch(matchers, 'path/to/file.js', false, 1); // false
anymatch(matchers, 'path/anyjs/foo.js', true, 2, 3); // 2
anymatch(matchers, 'path/to/bar.js', true, 0, 3); // -1

// using globs to match directories and their children
anymatch('node_modules', 'node_modules'); // true
anymatch('node_modules', 'node_modules/somelib/index.js'); // false
anymatch('node_modules/**', 'node_modules/somelib/index.js'); // true
anymatch('node_modules/**', '/absolute/path/to/node_modules/somelib/index.js'); // false
anymatch('**/node_modules/**', '/absolute/path/to/node_modules/somelib/index.js'); // true
```

#### anymatch (matchers)
You can also pass in only your matcher(s) to get a curried function that has
already been bound to the provided matching criteria. This can be used as an
`Array.prototype.filter` callback.

```js
var matcher = anymatch(matchers);

matcher('path/to/file.js'); // true
matcher('path/anyjs/baz.js', true); // 1
matcher('path/anyjs/baz.js', true, 2); // -1

['foo.js', 'bar.js'].filter(matcher); // ['foo.js']
```

Change Log
----------
[See release notes page on GitHub](https://github.com/es128/anymatch/releases)

NOTE: As of v1.2.0, anymatch uses [micromatch](https://github.com/jonschlinkert/micromatch)
for glob pattern matching. The glob matching behavior should be functionally
equivalent to the commonly used [minimatch](https://github.com/isaacs/minimatch)
library (aside from some fixed bugs and greater performance), so a major
version bump wasn't merited. Issues with glob pattern matching should be
reported directly to the [micromatch issue tracker](https://github.com/jonschlinkert/micromatch/issues).

License
-------
[ISC](https://raw.github.com/es128/anymatch/master/LICENSE)
";
        
        $__internal_6f7b5107712dd74e3128834e981b6f466f3e45dd8594e542ed701992419d8be5->leave($__internal_6f7b5107712dd74e3128834e981b6f466f3e45dd8594e542ed701992419d8be5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/anymatch/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("anymatch [![Build Status](https://travis-ci.org/es128/anymatch.svg?branch=master)](https://travis-ci.org/es128/anymatch) [![Coverage Status](https://img.shields.io/coveralls/es128/anymatch.svg?branch=master)](https://coveralls.io/r/es128/anymatch?branch=master)
======
Javascript module to match a string against a regular expression, glob, string,
or function that takes the string as an argument and returns a truthy or falsy
value. The matcher can also be an array of any or all of these. Useful for
allowing a very flexible user-defined config to define things like file paths.

[![NPM](https://nodei.co/npm/anymatch.png?downloads=true&downloadRank=true&stars=true)](https://nodei.co/npm/anymatch/)
[![NPM](https://nodei.co/npm-dl/anymatch.png?height=3&months=9)](https://nodei.co/npm-dl/anymatch/)

Usage
-----
```sh
npm install anymatch --save
```

#### anymatch (matchers, testString, [returnIndex], [startIndex], [endIndex])
* __matchers__: (_Array|String|RegExp|Function_)
String to be directly matched, string with glob patterns, regular expression
test, function that takes the testString as an argument and returns a truthy
value if it should be matched, or an array of any number and mix of these types.
* __testString__: (_String|Array_) The string to test against the matchers. If
passed as an array, the first element of the array will be used as the
`testString` for non-function matchers, while the entire array will be applied
as the arguments for function matchers.
* __returnIndex__: (_Boolean [optional]_) If true, return the array index of
the first matcher that that testString matched, or -1 if no match, instead of a
boolean result.
* __startIndex, endIndex__: (_Integer [optional]_) Can be used to define a
subset out of the array of provided matchers to test against. Can be useful
with bound matcher functions (see below). When used with `returnIndex = true`
preserves original indexing. Behaves the same as `Array.prototype.slice` (i.e.
includes array members up to, but not including endIndex).

```js
var anymatch = require('anymatch');

var matchers = [
\t'path/to/file.js',
\t'path/anyjs/**/*.js',
\t/foo\\.js\$/,
\tfunction (string) {
\t\treturn string.indexOf('bar') !== -1 && string.length > 10
\t}
];

anymatch(matchers, 'path/to/file.js'); // true
anymatch(matchers, 'path/anyjs/baz.js'); // true
anymatch(matchers, 'path/to/foo.js'); // true
anymatch(matchers, 'path/to/bar.js'); // true
anymatch(matchers, 'bar.js'); // false

// returnIndex = true
anymatch(matchers, 'foo.js', true); // 2
anymatch(matchers, 'path/anyjs/foo.js', true); // 1

// skip matchers
anymatch(matchers, 'path/to/file.js', false, 1); // false
anymatch(matchers, 'path/anyjs/foo.js', true, 2, 3); // 2
anymatch(matchers, 'path/to/bar.js', true, 0, 3); // -1

// using globs to match directories and their children
anymatch('node_modules', 'node_modules'); // true
anymatch('node_modules', 'node_modules/somelib/index.js'); // false
anymatch('node_modules/**', 'node_modules/somelib/index.js'); // true
anymatch('node_modules/**', '/absolute/path/to/node_modules/somelib/index.js'); // false
anymatch('**/node_modules/**', '/absolute/path/to/node_modules/somelib/index.js'); // true
```

#### anymatch (matchers)
You can also pass in only your matcher(s) to get a curried function that has
already been bound to the provided matching criteria. This can be used as an
`Array.prototype.filter` callback.

```js
var matcher = anymatch(matchers);

matcher('path/to/file.js'); // true
matcher('path/anyjs/baz.js', true); // 1
matcher('path/anyjs/baz.js', true, 2); // -1

['foo.js', 'bar.js'].filter(matcher); // ['foo.js']
```

Change Log
----------
[See release notes page on GitHub](https://github.com/es128/anymatch/releases)

NOTE: As of v1.2.0, anymatch uses [micromatch](https://github.com/jonschlinkert/micromatch)
for glob pattern matching. The glob matching behavior should be functionally
equivalent to the commonly used [minimatch](https://github.com/isaacs/minimatch)
library (aside from some fixed bugs and greater performance), so a major
version bump wasn't merited. Issues with glob pattern matching should be
reported directly to the [micromatch issue tracker](https://github.com/jonschlinkert/micromatch/issues).

License
-------
[ISC](https://raw.github.com/es128/anymatch/master/LICENSE)
", "node_modules/anymatch/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/anymatch/README.md");
    }
}
