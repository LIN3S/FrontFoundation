<?php

/* node_modules/core-js/library/modules/es6.typed.array-buffer.js */
class __TwigTemplate_a06e5d07dc08f0a290ca7b80ec324028f2b33466277c9ca103e6d79c4a9574d2 extends Twig_Template
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
        $__internal_7243dae46e5547eeceb3aa40482086ca0168c813066c88f1eed9f5da0d33b605 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7243dae46e5547eeceb3aa40482086ca0168c813066c88f1eed9f5da0d33b605->enter($__internal_7243dae46e5547eeceb3aa40482086ca0168c813066c88f1eed9f5da0d33b605_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es6.typed.array-buffer.js"));

        // line 1
        echo "'use strict';
var \$export = require('./_export');
var \$typed = require('./_typed');
var buffer = require('./_typed-buffer');
var anObject = require('./_an-object');
var toAbsoluteIndex = require('./_to-absolute-index');
var toLength = require('./_to-length');
var isObject = require('./_is-object');
var ArrayBuffer = require('./_global').ArrayBuffer;
var speciesConstructor = require('./_species-constructor');
var \$ArrayBuffer = buffer.ArrayBuffer;
var \$DataView = buffer.DataView;
var \$isView = \$typed.ABV && ArrayBuffer.isView;
var \$slice = \$ArrayBuffer.prototype.slice;
var VIEW = \$typed.VIEW;
var ARRAY_BUFFER = 'ArrayBuffer';

\$export(\$export.G + \$export.W + \$export.F * (ArrayBuffer !== \$ArrayBuffer), { ArrayBuffer: \$ArrayBuffer });

\$export(\$export.S + \$export.F * !\$typed.CONSTR, ARRAY_BUFFER, {
  // 24.1.3.1 ArrayBuffer.isView(arg)
  isView: function isView(it) {
    return \$isView && \$isView(it) || isObject(it) && VIEW in it;
  }
});

\$export(\$export.P + \$export.U + \$export.F * require('./_fails')(function () {
  return !new \$ArrayBuffer(2).slice(1, undefined).byteLength;
}), ARRAY_BUFFER, {
  // 24.1.4.3 ArrayBuffer.prototype.slice(start, end)
  slice: function slice(start, end) {
    if (\$slice !== undefined && end === undefined) return \$slice.call(anObject(this), start); // FF fix
    var len = anObject(this).byteLength;
    var first = toAbsoluteIndex(start, len);
    var final = toAbsoluteIndex(end === undefined ? len : end, len);
    var result = new (speciesConstructor(this, \$ArrayBuffer))(toLength(final - first));
    var viewS = new \$DataView(this);
    var viewT = new \$DataView(result);
    var index = 0;
    while (first < final) {
      viewT.setUint8(index++, viewS.getUint8(first++));
    } return result;
  }
});

require('./_set-species')(ARRAY_BUFFER);
";
        
        $__internal_7243dae46e5547eeceb3aa40482086ca0168c813066c88f1eed9f5da0d33b605->leave($__internal_7243dae46e5547eeceb3aa40482086ca0168c813066c88f1eed9f5da0d33b605_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es6.typed.array-buffer.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
var \$export = require('./_export');
var \$typed = require('./_typed');
var buffer = require('./_typed-buffer');
var anObject = require('./_an-object');
var toAbsoluteIndex = require('./_to-absolute-index');
var toLength = require('./_to-length');
var isObject = require('./_is-object');
var ArrayBuffer = require('./_global').ArrayBuffer;
var speciesConstructor = require('./_species-constructor');
var \$ArrayBuffer = buffer.ArrayBuffer;
var \$DataView = buffer.DataView;
var \$isView = \$typed.ABV && ArrayBuffer.isView;
var \$slice = \$ArrayBuffer.prototype.slice;
var VIEW = \$typed.VIEW;
var ARRAY_BUFFER = 'ArrayBuffer';

\$export(\$export.G + \$export.W + \$export.F * (ArrayBuffer !== \$ArrayBuffer), { ArrayBuffer: \$ArrayBuffer });

\$export(\$export.S + \$export.F * !\$typed.CONSTR, ARRAY_BUFFER, {
  // 24.1.3.1 ArrayBuffer.isView(arg)
  isView: function isView(it) {
    return \$isView && \$isView(it) || isObject(it) && VIEW in it;
  }
});

\$export(\$export.P + \$export.U + \$export.F * require('./_fails')(function () {
  return !new \$ArrayBuffer(2).slice(1, undefined).byteLength;
}), ARRAY_BUFFER, {
  // 24.1.4.3 ArrayBuffer.prototype.slice(start, end)
  slice: function slice(start, end) {
    if (\$slice !== undefined && end === undefined) return \$slice.call(anObject(this), start); // FF fix
    var len = anObject(this).byteLength;
    var first = toAbsoluteIndex(start, len);
    var final = toAbsoluteIndex(end === undefined ? len : end, len);
    var result = new (speciesConstructor(this, \$ArrayBuffer))(toLength(final - first));
    var viewS = new \$DataView(this);
    var viewT = new \$DataView(result);
    var index = 0;
    while (first < final) {
      viewT.setUint8(index++, viewS.getUint8(first++));
    } return result;
  }
});

require('./_set-species')(ARRAY_BUFFER);
", "node_modules/core-js/library/modules/es6.typed.array-buffer.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es6.typed.array-buffer.js");
    }
}
