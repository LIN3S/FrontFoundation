<?php

/* node_modules/fsevents/node_modules/performance-now/README.md */
class __TwigTemplate_ec6c1f8bfde9c739cb89c3e6a9ea0573a919709f26236e3e8fb7298ecab391db extends Twig_Template
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
        $__internal_823ff89c9ceeedb5a9fde8c9c492d9724928842942cafbf65d9d579ffe7b254c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_823ff89c9ceeedb5a9fde8c9c492d9724928842942cafbf65d9d579ffe7b254c->enter($__internal_823ff89c9ceeedb5a9fde8c9c492d9724928842942cafbf65d9d579ffe7b254c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/performance-now/README.md"));

        // line 1
        echo "# performance-now [![Build Status](https://travis-ci.org/meryn/performance-now.png?branch=master)](https://travis-ci.org/meryn/performance-now) [![Dependency Status](https://david-dm.org/meryn/performance-now.png)](https://david-dm.org/meryn/performance-now)

Implements a function similar to `performance.now` (based on `process.hrtime`).

Modern browsers have a `window.performance` object with - among others - a `now` method which gives time in miliseconds, but with sub-milisecond precision. This module offers the same function based on the Node.js native `process.hrtime` function.

According to the [High Resolution Time specification](http://www.w3.org/TR/hr-time/), the number of miliseconds reported by `performance.now` should be relative to the value of `performance.timing.navigationStart`. For this module, it's relative to when the time when this module got loaded. Right after requiring this module for the first time, the reported time is expected to have a near-zero value.

Using `process.hrtime` means that the reported time will be monotonically increasing, and not subject to clock-drift.

## Example usage

```javascript
var now = require(\"performance-now\")
var start = now()
var end = now()
console.log(start.toFixed(3)) // ~ 0.05 on my system
console.log((start-end).toFixed(3)) // ~ 0.002 on my system
```

Running the now function two times right after each other yields a time difference of a few microseconds. Given this overhead, I think it's best to assume that the precision of intervals computed with this method is not higher than 10 microseconds, if you don't know the exact overhead on your own system.

## Credits

The initial structure of this module was generated by [Jumpstart](https://github.com/meryn/jumpstart), using the [Jumpstart Black Coffee](https://github.com/meryn/jumpstart-black-coffee) template.

## License

performance-now is released under the [MIT License](http://opensource.org/licenses/MIT).  
Copyright (c) 2013 Meryn Stol  ";
        
        $__internal_823ff89c9ceeedb5a9fde8c9c492d9724928842942cafbf65d9d579ffe7b254c->leave($__internal_823ff89c9ceeedb5a9fde8c9c492d9724928842942cafbf65d9d579ffe7b254c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/performance-now/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# performance-now [![Build Status](https://travis-ci.org/meryn/performance-now.png?branch=master)](https://travis-ci.org/meryn/performance-now) [![Dependency Status](https://david-dm.org/meryn/performance-now.png)](https://david-dm.org/meryn/performance-now)

Implements a function similar to `performance.now` (based on `process.hrtime`).

Modern browsers have a `window.performance` object with - among others - a `now` method which gives time in miliseconds, but with sub-milisecond precision. This module offers the same function based on the Node.js native `process.hrtime` function.

According to the [High Resolution Time specification](http://www.w3.org/TR/hr-time/), the number of miliseconds reported by `performance.now` should be relative to the value of `performance.timing.navigationStart`. For this module, it's relative to when the time when this module got loaded. Right after requiring this module for the first time, the reported time is expected to have a near-zero value.

Using `process.hrtime` means that the reported time will be monotonically increasing, and not subject to clock-drift.

## Example usage

```javascript
var now = require(\"performance-now\")
var start = now()
var end = now()
console.log(start.toFixed(3)) // ~ 0.05 on my system
console.log((start-end).toFixed(3)) // ~ 0.002 on my system
```

Running the now function two times right after each other yields a time difference of a few microseconds. Given this overhead, I think it's best to assume that the precision of intervals computed with this method is not higher than 10 microseconds, if you don't know the exact overhead on your own system.

## Credits

The initial structure of this module was generated by [Jumpstart](https://github.com/meryn/jumpstart), using the [Jumpstart Black Coffee](https://github.com/meryn/jumpstart-black-coffee) template.

## License

performance-now is released under the [MIT License](http://opensource.org/licenses/MIT).  
Copyright (c) 2013 Meryn Stol  ", "node_modules/fsevents/node_modules/performance-now/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/performance-now/README.md");
    }
}
