<?php

/* node_modules/core-js/library/modules/_iter-define.js */
class __TwigTemplate_c3fe0a9bc73104b2b561de55b906ef4d098ebd40a686824ead4dac84b1eb6999 extends Twig_Template
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
        $__internal_d1d432401aedcd9df4a5999f0d7838fc11f0ffefad297e26af1fdc7226b98ad6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1d432401aedcd9df4a5999f0d7838fc11f0ffefad297e26af1fdc7226b98ad6->enter($__internal_d1d432401aedcd9df4a5999f0d7838fc11f0ffefad297e26af1fdc7226b98ad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/_iter-define.js"));

        // line 1
        echo "'use strict';
var LIBRARY = require('./_library');
var \$export = require('./_export');
var redefine = require('./_redefine');
var hide = require('./_hide');
var has = require('./_has');
var Iterators = require('./_iterators');
var \$iterCreate = require('./_iter-create');
var setToStringTag = require('./_set-to-string-tag');
var getPrototypeOf = require('./_object-gpo');
var ITERATOR = require('./_wks')('iterator');
var BUGGY = !([].keys && 'next' in [].keys()); // Safari has buggy iterators w/o `next`
var FF_ITERATOR = '@@iterator';
var KEYS = 'keys';
var VALUES = 'values';

var returnThis = function () { return this; };

module.exports = function (Base, NAME, Constructor, next, DEFAULT, IS_SET, FORCED) {
  \$iterCreate(Constructor, NAME, next);
  var getMethod = function (kind) {
    if (!BUGGY && kind in proto) return proto[kind];
    switch (kind) {
      case KEYS: return function keys() { return new Constructor(this, kind); };
      case VALUES: return function values() { return new Constructor(this, kind); };
    } return function entries() { return new Constructor(this, kind); };
  };
  var TAG = NAME + ' Iterator';
  var DEF_VALUES = DEFAULT == VALUES;
  var VALUES_BUG = false;
  var proto = Base.prototype;
  var \$native = proto[ITERATOR] || proto[FF_ITERATOR] || DEFAULT && proto[DEFAULT];
  var \$default = \$native || getMethod(DEFAULT);
  var \$entries = DEFAULT ? !DEF_VALUES ? \$default : getMethod('entries') : undefined;
  var \$anyNative = NAME == 'Array' ? proto.entries || \$native : \$native;
  var methods, key, IteratorPrototype;
  // Fix native
  if (\$anyNative) {
    IteratorPrototype = getPrototypeOf(\$anyNative.call(new Base()));
    if (IteratorPrototype !== Object.prototype && IteratorPrototype.next) {
      // Set @@toStringTag to native iterators
      setToStringTag(IteratorPrototype, TAG, true);
      // fix for some old engines
      if (!LIBRARY && !has(IteratorPrototype, ITERATOR)) hide(IteratorPrototype, ITERATOR, returnThis);
    }
  }
  // fix Array#{values, @@iterator}.name in V8 / FF
  if (DEF_VALUES && \$native && \$native.name !== VALUES) {
    VALUES_BUG = true;
    \$default = function values() { return \$native.call(this); };
  }
  // Define iterator
  if ((!LIBRARY || FORCED) && (BUGGY || VALUES_BUG || !proto[ITERATOR])) {
    hide(proto, ITERATOR, \$default);
  }
  // Plug for library
  Iterators[NAME] = \$default;
  Iterators[TAG] = returnThis;
  if (DEFAULT) {
    methods = {
      values: DEF_VALUES ? \$default : getMethod(VALUES),
      keys: IS_SET ? \$default : getMethod(KEYS),
      entries: \$entries
    };
    if (FORCED) for (key in methods) {
      if (!(key in proto)) redefine(proto, key, methods[key]);
    } else \$export(\$export.P + \$export.F * (BUGGY || VALUES_BUG), NAME, methods);
  }
  return methods;
};
";
        
        $__internal_d1d432401aedcd9df4a5999f0d7838fc11f0ffefad297e26af1fdc7226b98ad6->leave($__internal_d1d432401aedcd9df4a5999f0d7838fc11f0ffefad297e26af1fdc7226b98ad6_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/_iter-define.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
var LIBRARY = require('./_library');
var \$export = require('./_export');
var redefine = require('./_redefine');
var hide = require('./_hide');
var has = require('./_has');
var Iterators = require('./_iterators');
var \$iterCreate = require('./_iter-create');
var setToStringTag = require('./_set-to-string-tag');
var getPrototypeOf = require('./_object-gpo');
var ITERATOR = require('./_wks')('iterator');
var BUGGY = !([].keys && 'next' in [].keys()); // Safari has buggy iterators w/o `next`
var FF_ITERATOR = '@@iterator';
var KEYS = 'keys';
var VALUES = 'values';

var returnThis = function () { return this; };

module.exports = function (Base, NAME, Constructor, next, DEFAULT, IS_SET, FORCED) {
  \$iterCreate(Constructor, NAME, next);
  var getMethod = function (kind) {
    if (!BUGGY && kind in proto) return proto[kind];
    switch (kind) {
      case KEYS: return function keys() { return new Constructor(this, kind); };
      case VALUES: return function values() { return new Constructor(this, kind); };
    } return function entries() { return new Constructor(this, kind); };
  };
  var TAG = NAME + ' Iterator';
  var DEF_VALUES = DEFAULT == VALUES;
  var VALUES_BUG = false;
  var proto = Base.prototype;
  var \$native = proto[ITERATOR] || proto[FF_ITERATOR] || DEFAULT && proto[DEFAULT];
  var \$default = \$native || getMethod(DEFAULT);
  var \$entries = DEFAULT ? !DEF_VALUES ? \$default : getMethod('entries') : undefined;
  var \$anyNative = NAME == 'Array' ? proto.entries || \$native : \$native;
  var methods, key, IteratorPrototype;
  // Fix native
  if (\$anyNative) {
    IteratorPrototype = getPrototypeOf(\$anyNative.call(new Base()));
    if (IteratorPrototype !== Object.prototype && IteratorPrototype.next) {
      // Set @@toStringTag to native iterators
      setToStringTag(IteratorPrototype, TAG, true);
      // fix for some old engines
      if (!LIBRARY && !has(IteratorPrototype, ITERATOR)) hide(IteratorPrototype, ITERATOR, returnThis);
    }
  }
  // fix Array#{values, @@iterator}.name in V8 / FF
  if (DEF_VALUES && \$native && \$native.name !== VALUES) {
    VALUES_BUG = true;
    \$default = function values() { return \$native.call(this); };
  }
  // Define iterator
  if ((!LIBRARY || FORCED) && (BUGGY || VALUES_BUG || !proto[ITERATOR])) {
    hide(proto, ITERATOR, \$default);
  }
  // Plug for library
  Iterators[NAME] = \$default;
  Iterators[TAG] = returnThis;
  if (DEFAULT) {
    methods = {
      values: DEF_VALUES ? \$default : getMethod(VALUES),
      keys: IS_SET ? \$default : getMethod(KEYS),
      entries: \$entries
    };
    if (FORCED) for (key in methods) {
      if (!(key in proto)) redefine(proto, key, methods[key]);
    } else \$export(\$export.P + \$export.F * (BUGGY || VALUES_BUG), NAME, methods);
  }
  return methods;
};
", "node_modules/core-js/library/modules/_iter-define.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/_iter-define.js");
    }
}
