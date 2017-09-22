<?php

/* node_modules/es6-iterator/README.md */
class __TwigTemplate_f0cec43d7f6c64f6e95e5206c66bbecca39bb2527440b1f5223eb88653360205 extends Twig_Template
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
        $__internal_a7d5e3155484ee8b49f74367e44b29b5c00c0dc2289801d981cdf7488493e20f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7d5e3155484ee8b49f74367e44b29b5c00c0dc2289801d981cdf7488493e20f->enter($__internal_a7d5e3155484ee8b49f74367e44b29b5c00c0dc2289801d981cdf7488493e20f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es6-iterator/README.md"));

        // line 1
        echo "# es6-iterator
## ECMAScript 6 Iterator interface

### Installation

\t\$ npm install es6-iterator
\t
To port it to Browser or any other (non CJS) environment, use your favorite CJS bundler. No favorite yet? Try: [Browserify](http://browserify.org/), [Webmake](https://github.com/medikoo/modules-webmake) or [Webpack](http://webpack.github.io/)

## API

### Constructors

#### Iterator(list) _(es6-iterator)_

Abstract Iterator interface. Meant for extensions and not to be used on its own.

Accepts any _list_ object (technically object with numeric _length_ property).

_Mind it doesn't iterate strings properly, for that use dedicated [StringIterator](#string-iterator)_

```javascript
var Iterator = require('es6-iterator')
var iterator = new Iterator([1, 2, 3]);

iterator.next(); // { value: 1, done: false }
iterator.next(); // { value: 2, done: false }
iterator.next(); // { value: 3, done: false }
iterator.next(); // { value: undefined, done: true }
```


#### ArrayIterator(arrayLike[, kind]) _(es6-iterator/array)_

Dedicated for arrays and array-likes. Supports three iteration kinds:
* __value__ _(default)_ - Iterates values
* __key__ - Iterates indexes
* __key+value__ - Iterates keys and indexes, each iteration value is in _[key, value]_ form.


```javascript
var ArrayIterator = require('es6-iterator/array')
var iterator = new ArrayIterator([1, 2, 3], 'key+value');

iterator.next(); // { value: [0, 1], done: false }
iterator.next(); // { value: [1, 2], done: false }
iterator.next(); // { value: [2, 3], done: false }
iterator.next(); // { value: undefined, done: true }
```

May also be used for _arguments_ objects:

```javascript
(function () {
  var iterator = new ArrayIterator(arguments);

  iterator.next(); // { value: 1, done: false }
  iterator.next(); // { value: 2, done: false }
  iterator.next(); // { value: 3, done: false }
  iterator.next(); // { value: undefined, done: true }
}(1, 2, 3));
```

#### StringIterator(str) _(es6-iterator/string)_

Assures proper iteration over unicode symbols.  
See: http://mathiasbynens.be/notes/javascript-unicode

```javascript
var StringIterator = require('es6-iterator/string');
var iterator = new StringIterator('f🙈o🙉o🙊');

iterator.next(); // { value: 'f', done: false }
iterator.next(); // { value: '🙈', done: false }
iterator.next(); // { value: 'o', done: false }
iterator.next(); // { value: '🙉', done: false }
iterator.next(); // { value: 'o', done: false }
iterator.next(); // { value: '🙊', done: false }
iterator.next(); // { value: undefined, done: true }
```

### Function utilities

#### forOf(iterable, callback[, thisArg]) _(es6-iterator/for-of)_

Polyfill for ECMAScript 6 [`for...of`](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Statements/for...of) statement.

```
var forOf = require('es6-iterator/for-of');
var result = [];

forOf('🙈🙉🙊', function (monkey) { result.push(monkey); });
console.log(result); // ['🙈', '🙉', '🙊'];
```

Optionally you can break iteration at any point:

```javascript
var result = [];

forOf([1,2,3,4]', function (val, doBreak) {
  result.push(monkey);
  if (val >= 3) doBreak();
});
console.log(result); // [1, 2, 3];
```

#### get(obj) _(es6-iterator/get)_

Return iterator for any iterable object.

```javascript
var getIterator = require('es6-iterator/get');
var iterator = get([1,2,3]);

iterator.next(); // { value: 1, done: false }
iterator.next(); // { value: 2, done: false }
iterator.next(); // { value: 3, done: false }
iterator.next(); // { value: undefined, done: true }
```

#### isIterable(obj) _(es6-iterator/is-iterable)_

Whether _obj_ is iterable

```javascript
var isIterable = require('es6-iterator/is-iterable');

isIterable(null); // false
isIterable(true); // false
isIterable('str'); // true
isIterable(['a', 'r', 'r']); // true
isIterable(new ArrayIterator([])); // true
```

#### validIterable(obj) _(es6-iterator/valid-iterable)_

If _obj_ is an iterable it is returned. Otherwise _TypeError_ is thrown.

### Method extensions

#### iterator.chain(iterator1[, …iteratorn]) _(es6-iterator/#/chain)_

Chain multiple iterators into one.

### Tests [![Build Status](https://travis-ci.org/medikoo/es6-iterator.png)](https://travis-ci.org/medikoo/es6-iterator)

\t\$ npm test
";
        
        $__internal_a7d5e3155484ee8b49f74367e44b29b5c00c0dc2289801d981cdf7488493e20f->leave($__internal_a7d5e3155484ee8b49f74367e44b29b5c00c0dc2289801d981cdf7488493e20f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es6-iterator/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# es6-iterator
## ECMAScript 6 Iterator interface

### Installation

\t\$ npm install es6-iterator
\t
To port it to Browser or any other (non CJS) environment, use your favorite CJS bundler. No favorite yet? Try: [Browserify](http://browserify.org/), [Webmake](https://github.com/medikoo/modules-webmake) or [Webpack](http://webpack.github.io/)

## API

### Constructors

#### Iterator(list) _(es6-iterator)_

Abstract Iterator interface. Meant for extensions and not to be used on its own.

Accepts any _list_ object (technically object with numeric _length_ property).

_Mind it doesn't iterate strings properly, for that use dedicated [StringIterator](#string-iterator)_

```javascript
var Iterator = require('es6-iterator')
var iterator = new Iterator([1, 2, 3]);

iterator.next(); // { value: 1, done: false }
iterator.next(); // { value: 2, done: false }
iterator.next(); // { value: 3, done: false }
iterator.next(); // { value: undefined, done: true }
```


#### ArrayIterator(arrayLike[, kind]) _(es6-iterator/array)_

Dedicated for arrays and array-likes. Supports three iteration kinds:
* __value__ _(default)_ - Iterates values
* __key__ - Iterates indexes
* __key+value__ - Iterates keys and indexes, each iteration value is in _[key, value]_ form.


```javascript
var ArrayIterator = require('es6-iterator/array')
var iterator = new ArrayIterator([1, 2, 3], 'key+value');

iterator.next(); // { value: [0, 1], done: false }
iterator.next(); // { value: [1, 2], done: false }
iterator.next(); // { value: [2, 3], done: false }
iterator.next(); // { value: undefined, done: true }
```

May also be used for _arguments_ objects:

```javascript
(function () {
  var iterator = new ArrayIterator(arguments);

  iterator.next(); // { value: 1, done: false }
  iterator.next(); // { value: 2, done: false }
  iterator.next(); // { value: 3, done: false }
  iterator.next(); // { value: undefined, done: true }
}(1, 2, 3));
```

#### StringIterator(str) _(es6-iterator/string)_

Assures proper iteration over unicode symbols.  
See: http://mathiasbynens.be/notes/javascript-unicode

```javascript
var StringIterator = require('es6-iterator/string');
var iterator = new StringIterator('f🙈o🙉o🙊');

iterator.next(); // { value: 'f', done: false }
iterator.next(); // { value: '🙈', done: false }
iterator.next(); // { value: 'o', done: false }
iterator.next(); // { value: '🙉', done: false }
iterator.next(); // { value: 'o', done: false }
iterator.next(); // { value: '🙊', done: false }
iterator.next(); // { value: undefined, done: true }
```

### Function utilities

#### forOf(iterable, callback[, thisArg]) _(es6-iterator/for-of)_

Polyfill for ECMAScript 6 [`for...of`](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Statements/for...of) statement.

```
var forOf = require('es6-iterator/for-of');
var result = [];

forOf('🙈🙉🙊', function (monkey) { result.push(monkey); });
console.log(result); // ['🙈', '🙉', '🙊'];
```

Optionally you can break iteration at any point:

```javascript
var result = [];

forOf([1,2,3,4]', function (val, doBreak) {
  result.push(monkey);
  if (val >= 3) doBreak();
});
console.log(result); // [1, 2, 3];
```

#### get(obj) _(es6-iterator/get)_

Return iterator for any iterable object.

```javascript
var getIterator = require('es6-iterator/get');
var iterator = get([1,2,3]);

iterator.next(); // { value: 1, done: false }
iterator.next(); // { value: 2, done: false }
iterator.next(); // { value: 3, done: false }
iterator.next(); // { value: undefined, done: true }
```

#### isIterable(obj) _(es6-iterator/is-iterable)_

Whether _obj_ is iterable

```javascript
var isIterable = require('es6-iterator/is-iterable');

isIterable(null); // false
isIterable(true); // false
isIterable('str'); // true
isIterable(['a', 'r', 'r']); // true
isIterable(new ArrayIterator([])); // true
```

#### validIterable(obj) _(es6-iterator/valid-iterable)_

If _obj_ is an iterable it is returned. Otherwise _TypeError_ is thrown.

### Method extensions

#### iterator.chain(iterator1[, …iteratorn]) _(es6-iterator/#/chain)_

Chain multiple iterators into one.

### Tests [![Build Status](https://travis-ci.org/medikoo/es6-iterator.png)](https://travis-ci.org/medikoo/es6-iterator)

\t\$ npm test
", "node_modules/es6-iterator/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es6-iterator/README.md");
    }
}
