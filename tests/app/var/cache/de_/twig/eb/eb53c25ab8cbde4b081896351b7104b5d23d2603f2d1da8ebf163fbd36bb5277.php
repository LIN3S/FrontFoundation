<?php

/* node_modules/extend/README.md */
class __TwigTemplate_eea605bfe5e2a00a8b46d3fe808292c97ea72fbc26bc5f917b8fa569f8890afc extends Twig_Template
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
        $__internal_0d91bcc48c06ddf890266dbf6075c39d8dc0798d476f85e7243154079cc7e5a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d91bcc48c06ddf890266dbf6075c39d8dc0798d476f85e7243154079cc7e5a1->enter($__internal_0d91bcc48c06ddf890266dbf6075c39d8dc0798d476f85e7243154079cc7e5a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/extend/README.md"));

        // line 1
        echo "[![Build Status][travis-svg]][travis-url]
[![dependency status][deps-svg]][deps-url]
[![dev dependency status][dev-deps-svg]][dev-deps-url]

# extend() for Node.js <sup>[![Version Badge][npm-version-png]][npm-url]</sup>

`node-extend` is a port of the classic extend() method from jQuery. It behaves as you expect. It is simple, tried and true.

Notes:

* Since Node.js >= 4,
  [`Object.assign`](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Object/assign)
  now offers the same functionality natively (but without the \"deep copy\" option).
  See [ECMAScript 2015 (ES6) in Node.js](https://nodejs.org/en/docs/es6).
* Some native implementations of `Object.assign` in both Node.js and many
  browsers (since NPM modules are for the browser too) may not be fully
  spec-compliant.
  Check [`object.assign`](https://www.npmjs.com/package/object.assign) module for
  a compliant candidate.

## Installation

This package is available on [npm][npm-url] as: `extend`

``` sh
npm install extend
```

## Usage

**Syntax:** extend **(** [`deep`], `target`, `object1`, [`objectN`] **)**

*Extend one object with one or more others, returning the modified object.*

**Example:**

``` js
var extend = require('extend');
extend(targetObject, object1, object2);
```

Keep in mind that the target object will be modified, and will be returned from extend().

If a boolean true is specified as the first argument, extend performs a deep copy, recursively copying any objects it finds. Otherwise, the copy will share structure with the original object(s).
Undefined properties are not copied. However, properties inherited from the object's prototype will be copied over.
Warning: passing `false` as the first argument is not supported.

### Arguments

* `deep` *Boolean* (optional)
If set, the merge becomes recursive (i.e. deep copy).
* `target`\t*Object*
The object to extend.
* `object1`\t*Object*
The object that will be merged into the first.
* `objectN` *Object* (Optional)
More objects to merge into the first.

## License

`node-extend` is licensed under the [MIT License][mit-license-url].

## Acknowledgements

All credit to the jQuery authors for perfecting this amazing utility.

Ported to Node.js by [Stefan Thomas][github-justmoon] with contributions by [Jonathan Buchanan][github-insin] and [Jordan Harband][github-ljharb].

[travis-svg]: https://travis-ci.org/justmoon/node-extend.svg
[travis-url]: https://travis-ci.org/justmoon/node-extend
[npm-url]: https://npmjs.org/package/extend
[mit-license-url]: http://opensource.org/licenses/MIT
[github-justmoon]: https://github.com/justmoon
[github-insin]: https://github.com/insin
[github-ljharb]: https://github.com/ljharb
[npm-version-png]: http://versionbadg.es/justmoon/node-extend.svg
[deps-svg]: https://david-dm.org/justmoon/node-extend.svg
[deps-url]: https://david-dm.org/justmoon/node-extend
[dev-deps-svg]: https://david-dm.org/justmoon/node-extend/dev-status.svg
[dev-deps-url]: https://david-dm.org/justmoon/node-extend#info=devDependencies

";
        
        $__internal_0d91bcc48c06ddf890266dbf6075c39d8dc0798d476f85e7243154079cc7e5a1->leave($__internal_0d91bcc48c06ddf890266dbf6075c39d8dc0798d476f85e7243154079cc7e5a1_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/extend/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("[![Build Status][travis-svg]][travis-url]
[![dependency status][deps-svg]][deps-url]
[![dev dependency status][dev-deps-svg]][dev-deps-url]

# extend() for Node.js <sup>[![Version Badge][npm-version-png]][npm-url]</sup>

`node-extend` is a port of the classic extend() method from jQuery. It behaves as you expect. It is simple, tried and true.

Notes:

* Since Node.js >= 4,
  [`Object.assign`](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Object/assign)
  now offers the same functionality natively (but without the \"deep copy\" option).
  See [ECMAScript 2015 (ES6) in Node.js](https://nodejs.org/en/docs/es6).
* Some native implementations of `Object.assign` in both Node.js and many
  browsers (since NPM modules are for the browser too) may not be fully
  spec-compliant.
  Check [`object.assign`](https://www.npmjs.com/package/object.assign) module for
  a compliant candidate.

## Installation

This package is available on [npm][npm-url] as: `extend`

``` sh
npm install extend
```

## Usage

**Syntax:** extend **(** [`deep`], `target`, `object1`, [`objectN`] **)**

*Extend one object with one or more others, returning the modified object.*

**Example:**

``` js
var extend = require('extend');
extend(targetObject, object1, object2);
```

Keep in mind that the target object will be modified, and will be returned from extend().

If a boolean true is specified as the first argument, extend performs a deep copy, recursively copying any objects it finds. Otherwise, the copy will share structure with the original object(s).
Undefined properties are not copied. However, properties inherited from the object's prototype will be copied over.
Warning: passing `false` as the first argument is not supported.

### Arguments

* `deep` *Boolean* (optional)
If set, the merge becomes recursive (i.e. deep copy).
* `target`\t*Object*
The object to extend.
* `object1`\t*Object*
The object that will be merged into the first.
* `objectN` *Object* (Optional)
More objects to merge into the first.

## License

`node-extend` is licensed under the [MIT License][mit-license-url].

## Acknowledgements

All credit to the jQuery authors for perfecting this amazing utility.

Ported to Node.js by [Stefan Thomas][github-justmoon] with contributions by [Jonathan Buchanan][github-insin] and [Jordan Harband][github-ljharb].

[travis-svg]: https://travis-ci.org/justmoon/node-extend.svg
[travis-url]: https://travis-ci.org/justmoon/node-extend
[npm-url]: https://npmjs.org/package/extend
[mit-license-url]: http://opensource.org/licenses/MIT
[github-justmoon]: https://github.com/justmoon
[github-insin]: https://github.com/insin
[github-ljharb]: https://github.com/ljharb
[npm-version-png]: http://versionbadg.es/justmoon/node-extend.svg
[deps-svg]: https://david-dm.org/justmoon/node-extend.svg
[deps-url]: https://david-dm.org/justmoon/node-extend
[dev-deps-svg]: https://david-dm.org/justmoon/node-extend/dev-status.svg
[dev-deps-url]: https://david-dm.org/justmoon/node-extend#info=devDependencies

", "node_modules/extend/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/extend/README.md");
    }
}
