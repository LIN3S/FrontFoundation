<?php

/* node_modules/fsevents/node_modules/extend/index.js */
class __TwigTemplate_68f738830d4cb91dec05ed4a35fc8698d21d901d60ebb27f0c4c1e3a524f54f9 extends Twig_Template
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
        $__internal_4d6d7d8fa3414add29780f30faaf453c7b57f66cf916e76c4886b70e6ee4629d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d6d7d8fa3414add29780f30faaf453c7b57f66cf916e76c4886b70e6ee4629d->enter($__internal_4d6d7d8fa3414add29780f30faaf453c7b57f66cf916e76c4886b70e6ee4629d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/extend/index.js"));

        // line 1
        echo "'use strict';

var hasOwn = Object.prototype.hasOwnProperty;
var toStr = Object.prototype.toString;

var isArray = function isArray(arr) {
\tif (typeof Array.isArray === 'function') {
\t\treturn Array.isArray(arr);
\t}

\treturn toStr.call(arr) === '[object Array]';
};

var isPlainObject = function isPlainObject(obj) {
\tif (!obj || toStr.call(obj) !== '[object Object]') {
\t\treturn false;
\t}

\tvar hasOwnConstructor = hasOwn.call(obj, 'constructor');
\tvar hasIsPrototypeOf = obj.constructor && obj.constructor.prototype && hasOwn.call(obj.constructor.prototype, 'isPrototypeOf');
\t// Not own constructor property must be Object
\tif (obj.constructor && !hasOwnConstructor && !hasIsPrototypeOf) {
\t\treturn false;
\t}

\t// Own properties are enumerated firstly, so to speed up,
\t// if last one is own, then all properties are own.
\tvar key;
\tfor (key in obj) { /**/ }

\treturn typeof key === 'undefined' || hasOwn.call(obj, key);
};

module.exports = function extend() {
\tvar options, name, src, copy, copyIsArray, clone;
\tvar target = arguments[0];
\tvar i = 1;
\tvar length = arguments.length;
\tvar deep = false;

\t// Handle a deep copy situation
\tif (typeof target === 'boolean') {
\t\tdeep = target;
\t\ttarget = arguments[1] || {};
\t\t// skip the boolean and the target
\t\ti = 2;
\t}
\tif (target == null || (typeof target !== 'object' && typeof target !== 'function')) {
\t\ttarget = {};
\t}

\tfor (; i < length; ++i) {
\t\toptions = arguments[i];
\t\t// Only deal with non-null/undefined values
\t\tif (options != null) {
\t\t\t// Extend the base object
\t\t\tfor (name in options) {
\t\t\t\tsrc = target[name];
\t\t\t\tcopy = options[name];

\t\t\t\t// Prevent never-ending loop
\t\t\t\tif (target !== copy) {
\t\t\t\t\t// Recurse if we're merging plain objects or arrays
\t\t\t\t\tif (deep && copy && (isPlainObject(copy) || (copyIsArray = isArray(copy)))) {
\t\t\t\t\t\tif (copyIsArray) {
\t\t\t\t\t\t\tcopyIsArray = false;
\t\t\t\t\t\t\tclone = src && isArray(src) ? src : [];
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\tclone = src && isPlainObject(src) ? src : {};
\t\t\t\t\t\t}

\t\t\t\t\t\t// Never move original objects, clone them
\t\t\t\t\t\ttarget[name] = extend(deep, clone, copy);

\t\t\t\t\t// Don't bring in undefined values
\t\t\t\t\t} else if (typeof copy !== 'undefined') {
\t\t\t\t\t\ttarget[name] = copy;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}
\t}

\t// Return the modified object
\treturn target;
};
";
        
        $__internal_4d6d7d8fa3414add29780f30faaf453c7b57f66cf916e76c4886b70e6ee4629d->leave($__internal_4d6d7d8fa3414add29780f30faaf453c7b57f66cf916e76c4886b70e6ee4629d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/extend/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var hasOwn = Object.prototype.hasOwnProperty;
var toStr = Object.prototype.toString;

var isArray = function isArray(arr) {
\tif (typeof Array.isArray === 'function') {
\t\treturn Array.isArray(arr);
\t}

\treturn toStr.call(arr) === '[object Array]';
};

var isPlainObject = function isPlainObject(obj) {
\tif (!obj || toStr.call(obj) !== '[object Object]') {
\t\treturn false;
\t}

\tvar hasOwnConstructor = hasOwn.call(obj, 'constructor');
\tvar hasIsPrototypeOf = obj.constructor && obj.constructor.prototype && hasOwn.call(obj.constructor.prototype, 'isPrototypeOf');
\t// Not own constructor property must be Object
\tif (obj.constructor && !hasOwnConstructor && !hasIsPrototypeOf) {
\t\treturn false;
\t}

\t// Own properties are enumerated firstly, so to speed up,
\t// if last one is own, then all properties are own.
\tvar key;
\tfor (key in obj) { /**/ }

\treturn typeof key === 'undefined' || hasOwn.call(obj, key);
};

module.exports = function extend() {
\tvar options, name, src, copy, copyIsArray, clone;
\tvar target = arguments[0];
\tvar i = 1;
\tvar length = arguments.length;
\tvar deep = false;

\t// Handle a deep copy situation
\tif (typeof target === 'boolean') {
\t\tdeep = target;
\t\ttarget = arguments[1] || {};
\t\t// skip the boolean and the target
\t\ti = 2;
\t}
\tif (target == null || (typeof target !== 'object' && typeof target !== 'function')) {
\t\ttarget = {};
\t}

\tfor (; i < length; ++i) {
\t\toptions = arguments[i];
\t\t// Only deal with non-null/undefined values
\t\tif (options != null) {
\t\t\t// Extend the base object
\t\t\tfor (name in options) {
\t\t\t\tsrc = target[name];
\t\t\t\tcopy = options[name];

\t\t\t\t// Prevent never-ending loop
\t\t\t\tif (target !== copy) {
\t\t\t\t\t// Recurse if we're merging plain objects or arrays
\t\t\t\t\tif (deep && copy && (isPlainObject(copy) || (copyIsArray = isArray(copy)))) {
\t\t\t\t\t\tif (copyIsArray) {
\t\t\t\t\t\t\tcopyIsArray = false;
\t\t\t\t\t\t\tclone = src && isArray(src) ? src : [];
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\tclone = src && isPlainObject(src) ? src : {};
\t\t\t\t\t\t}

\t\t\t\t\t\t// Never move original objects, clone them
\t\t\t\t\t\ttarget[name] = extend(deep, clone, copy);

\t\t\t\t\t// Don't bring in undefined values
\t\t\t\t\t} else if (typeof copy !== 'undefined') {
\t\t\t\t\t\ttarget[name] = copy;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}
\t}

\t// Return the modified object
\treturn target;
};
", "node_modules/fsevents/node_modules/extend/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/extend/index.js");
    }
}
