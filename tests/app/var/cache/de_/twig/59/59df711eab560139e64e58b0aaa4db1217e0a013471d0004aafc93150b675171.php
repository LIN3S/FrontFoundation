<?php

/* node_modules/es6-symbol/README.md */
class __TwigTemplate_fdbf479f41977b2f7b47bcc2b6f234e941502f844eec614682da5f81bdc06d26 extends Twig_Template
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
        $__internal_50b17fcf92e8622356af8efa1bcb0d7d70d82eb49fe0dba68127363735457ca2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50b17fcf92e8622356af8efa1bcb0d7d70d82eb49fe0dba68127363735457ca2->enter($__internal_50b17fcf92e8622356af8efa1bcb0d7d70d82eb49fe0dba68127363735457ca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es6-symbol/README.md"));

        // line 1
        echo "# es6-symbol
## ECMAScript 6 Symbol polyfill

For more information about symbols see following links
- [Symbols in ECMAScript 6 by Axel Rauschmayer](http://www.2ality.com/2014/12/es6-symbols.html)
- [MDN Documentation](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Symbol)
- [Specification](http://people.mozilla.org/~jorendorff/es6-draft.html#sec-symbol-constructor)

### Limitations

Underneath it uses real string property names which can easily be retrieved, however accidental collision with other property names is unlikely.

### Usage

If you'd like to use native version when it exists and fallback to [ponyfill](https://ponyfill.com) if it doesn't, use *es6-symbol* as following:

```javascript
var Symbol = require('es6-symbol');
```

If you want to make sure your environment implements `Symbol` globally, do:

```javascript
require('es6-symbol/implement');
```

If you strictly want to use polyfill even if native `Symbol` exists (hard to find a good reason for that), do:

```javascript
var Symbol = require('es6-symbol/polyfill');
```

#### API

Best is to refer to [specification](http://people.mozilla.org/~jorendorff/es6-draft.html#sec-symbol-objects). Still if you want quick look, follow examples:

```javascript
var Symbol = require('es6-symbol');

var symbol = Symbol('My custom symbol');
var x = {};

x[symbol] = 'foo';
console.log(x[symbol]); 'foo'

// Detect iterable:
var iterator, result;
if (possiblyIterable[Symbol.iterator]) {
  iterator = possiblyIterable[Symbol.iterator]();
  result = iterator.next();
  while(!result.done) {
    console.log(result.value);
    result = iterator.next();
  }
}
```

### Installation
#### NPM

In your project path:

\t\$ npm install es6-symbol

##### Browser

To port it to Browser or any other (non CJS) environment, use your favorite CJS bundler. No favorite yet? Try: [Browserify](http://browserify.org/), [Webmake](https://github.com/medikoo/modules-webmake) or [Webpack](http://webpack.github.io/)

## Tests [![Build Status](https://travis-ci.org/medikoo/es6-symbol.png)](https://travis-ci.org/medikoo/es6-symbol)

\t\$ npm test
";
        
        $__internal_50b17fcf92e8622356af8efa1bcb0d7d70d82eb49fe0dba68127363735457ca2->leave($__internal_50b17fcf92e8622356af8efa1bcb0d7d70d82eb49fe0dba68127363735457ca2_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es6-symbol/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# es6-symbol
## ECMAScript 6 Symbol polyfill

For more information about symbols see following links
- [Symbols in ECMAScript 6 by Axel Rauschmayer](http://www.2ality.com/2014/12/es6-symbols.html)
- [MDN Documentation](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Symbol)
- [Specification](http://people.mozilla.org/~jorendorff/es6-draft.html#sec-symbol-constructor)

### Limitations

Underneath it uses real string property names which can easily be retrieved, however accidental collision with other property names is unlikely.

### Usage

If you'd like to use native version when it exists and fallback to [ponyfill](https://ponyfill.com) if it doesn't, use *es6-symbol* as following:

```javascript
var Symbol = require('es6-symbol');
```

If you want to make sure your environment implements `Symbol` globally, do:

```javascript
require('es6-symbol/implement');
```

If you strictly want to use polyfill even if native `Symbol` exists (hard to find a good reason for that), do:

```javascript
var Symbol = require('es6-symbol/polyfill');
```

#### API

Best is to refer to [specification](http://people.mozilla.org/~jorendorff/es6-draft.html#sec-symbol-objects). Still if you want quick look, follow examples:

```javascript
var Symbol = require('es6-symbol');

var symbol = Symbol('My custom symbol');
var x = {};

x[symbol] = 'foo';
console.log(x[symbol]); 'foo'

// Detect iterable:
var iterator, result;
if (possiblyIterable[Symbol.iterator]) {
  iterator = possiblyIterable[Symbol.iterator]();
  result = iterator.next();
  while(!result.done) {
    console.log(result.value);
    result = iterator.next();
  }
}
```

### Installation
#### NPM

In your project path:

\t\$ npm install es6-symbol

##### Browser

To port it to Browser or any other (non CJS) environment, use your favorite CJS bundler. No favorite yet? Try: [Browserify](http://browserify.org/), [Webmake](https://github.com/medikoo/modules-webmake) or [Webpack](http://webpack.github.io/)

## Tests [![Build Status](https://travis-ci.org/medikoo/es6-symbol.png)](https://travis-ci.org/medikoo/es6-symbol)

\t\$ npm test
", "node_modules/es6-symbol/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es6-symbol/README.md");
    }
}
