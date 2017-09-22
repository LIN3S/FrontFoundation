<?php

/* node_modules/extglob/README.md */
class __TwigTemplate_5e15663e48e6aa38fc28ff128af3047d68c6bf1857fbc2bf25ca6734a30dbea7 extends Twig_Template
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
        $__internal_0e0f5492829e0f83b02da3150539a632896f2b9e978be243a982e3be4e32733c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e0f5492829e0f83b02da3150539a632896f2b9e978be243a982e3be4e32733c->enter($__internal_0e0f5492829e0f83b02da3150539a632896f2b9e978be243a982e3be4e32733c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/extglob/README.md"));

        // line 1
        echo "# extglob [![NPM version](https://badge.fury.io/js/extglob.svg)](http://badge.fury.io/js/extglob)  [![Build Status](https://travis-ci.org/jonschlinkert/extglob.svg)](https://travis-ci.org/jonschlinkert/extglob)

> Convert extended globs to regex-compatible strings. Add (almost) the expressive power of regular expressions to glob patterns.

Install with [npm](https://www.npmjs.com/)

```sh
\$ npm i extglob --save
```

Used by [micromatch](https://github.com/jonschlinkert/micromatch).

**Features**

* Convert an extglob string to a regex-compatible string. **Only converts extglobs**, to handle full globs use [micromatch](https://github.com/jonschlinkert/micromatch).
* Pass `{regex: true}` to return a regex
* Handles nested patterns
* More complete (and correct) support than [minimatch](https://github.com/isaacs/minimatch)

## Usage

```js
var extglob = require('extglob');

extglob('?(z)');
//=> '(?:z)?'
extglob('*(z)');
//=> '(?:z)*'
extglob('+(z)');
//=> '(?:z)+'
extglob('@(z)');
//=> '(?:z)'
extglob('!(z)');
//=> '(?!^(?:(?!z)[^/]*?)).*\$'
```

**Optionally return regex**

```js
extglob('!(z)', {regex: true});
//=> /(?!^(?:(?!z)[^/]*?)).*\$/
```

## Extglob patterns

To learn more about how extglobs work, see the docs for [Bash pattern matching](https://www.gnu.org/software/bash/manual/html_node/Pattern-Matching.html):

* `?(pattern)`: Match zero or one occurrence of the given pattern.
* `*(pattern)`: Match zero or more occurrences of the given pattern.
* `+(pattern)`: Match one or more occurrences of the given pattern.
* `@(pattern)`: Match one of the given pattern.
* `!(pattern)`: Match anything except one of the given pattern.

## Related

* [braces](https://github.com/jonschlinkert/braces): Fastest brace expansion for node.js, with the most complete support for the Bash 4.3 braces… [more](https://github.com/jonschlinkert/braces)
* [expand-brackets](https://github.com/jonschlinkert/expand-brackets): Expand POSIX bracket expressions (character classes) in glob patterns.
* [expand-range](https://github.com/jonschlinkert/expand-range): Fast, bash-like range expansion. Expand a range of numbers or letters, uppercase or lowercase. See… [more](https://github.com/jonschlinkert/expand-range)
* [fill-range](https://github.com/jonschlinkert/fill-range): Fill in a range of numbers or letters, optionally passing an increment or multiplier to… [more](https://github.com/jonschlinkert/fill-range)
* [micromatch](https://github.com/jonschlinkert/micromatch): Glob matching for javascript/node.js. A drop-in replacement and faster alternative to minimatch and multimatch. Just… [more](https://github.com/jonschlinkert/micromatch)

## Run tests

Install dev dependencies:

```sh
\$ npm i -d && npm test
```

## Contributing

Pull requests and stars are always welcome. For bugs and feature requests, [please create an issue](https://github.com/jonschlinkert/extglob/issues/new)

## Author

**Jon Schlinkert**

+ [github/jonschlinkert](https://github.com/jonschlinkert)
+ [twitter/jonschlinkert](http://twitter.com/jonschlinkert)

## License

Copyright © 2015 Jon Schlinkert
Released under the MIT license.

***

_This file was generated by [verb-cli](https://github.com/assemble/verb-cli) on August 01, 2015._";
        
        $__internal_0e0f5492829e0f83b02da3150539a632896f2b9e978be243a982e3be4e32733c->leave($__internal_0e0f5492829e0f83b02da3150539a632896f2b9e978be243a982e3be4e32733c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/extglob/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# extglob [![NPM version](https://badge.fury.io/js/extglob.svg)](http://badge.fury.io/js/extglob)  [![Build Status](https://travis-ci.org/jonschlinkert/extglob.svg)](https://travis-ci.org/jonschlinkert/extglob)

> Convert extended globs to regex-compatible strings. Add (almost) the expressive power of regular expressions to glob patterns.

Install with [npm](https://www.npmjs.com/)

```sh
\$ npm i extglob --save
```

Used by [micromatch](https://github.com/jonschlinkert/micromatch).

**Features**

* Convert an extglob string to a regex-compatible string. **Only converts extglobs**, to handle full globs use [micromatch](https://github.com/jonschlinkert/micromatch).
* Pass `{regex: true}` to return a regex
* Handles nested patterns
* More complete (and correct) support than [minimatch](https://github.com/isaacs/minimatch)

## Usage

```js
var extglob = require('extglob');

extglob('?(z)');
//=> '(?:z)?'
extglob('*(z)');
//=> '(?:z)*'
extglob('+(z)');
//=> '(?:z)+'
extglob('@(z)');
//=> '(?:z)'
extglob('!(z)');
//=> '(?!^(?:(?!z)[^/]*?)).*\$'
```

**Optionally return regex**

```js
extglob('!(z)', {regex: true});
//=> /(?!^(?:(?!z)[^/]*?)).*\$/
```

## Extglob patterns

To learn more about how extglobs work, see the docs for [Bash pattern matching](https://www.gnu.org/software/bash/manual/html_node/Pattern-Matching.html):

* `?(pattern)`: Match zero or one occurrence of the given pattern.
* `*(pattern)`: Match zero or more occurrences of the given pattern.
* `+(pattern)`: Match one or more occurrences of the given pattern.
* `@(pattern)`: Match one of the given pattern.
* `!(pattern)`: Match anything except one of the given pattern.

## Related

* [braces](https://github.com/jonschlinkert/braces): Fastest brace expansion for node.js, with the most complete support for the Bash 4.3 braces… [more](https://github.com/jonschlinkert/braces)
* [expand-brackets](https://github.com/jonschlinkert/expand-brackets): Expand POSIX bracket expressions (character classes) in glob patterns.
* [expand-range](https://github.com/jonschlinkert/expand-range): Fast, bash-like range expansion. Expand a range of numbers or letters, uppercase or lowercase. See… [more](https://github.com/jonschlinkert/expand-range)
* [fill-range](https://github.com/jonschlinkert/fill-range): Fill in a range of numbers or letters, optionally passing an increment or multiplier to… [more](https://github.com/jonschlinkert/fill-range)
* [micromatch](https://github.com/jonschlinkert/micromatch): Glob matching for javascript/node.js. A drop-in replacement and faster alternative to minimatch and multimatch. Just… [more](https://github.com/jonschlinkert/micromatch)

## Run tests

Install dev dependencies:

```sh
\$ npm i -d && npm test
```

## Contributing

Pull requests and stars are always welcome. For bugs and feature requests, [please create an issue](https://github.com/jonschlinkert/extglob/issues/new)

## Author

**Jon Schlinkert**

+ [github/jonschlinkert](https://github.com/jonschlinkert)
+ [twitter/jonschlinkert](http://twitter.com/jonschlinkert)

## License

Copyright © 2015 Jon Schlinkert
Released under the MIT license.

***

_This file was generated by [verb-cli](https://github.com/assemble/verb-cli) on August 01, 2015._", "node_modules/extglob/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/extglob/README.md");
    }
}
