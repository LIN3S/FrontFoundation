<?php

/* node_modules/core-js/library/modules/core.delay.js */
class __TwigTemplate_9a1e02350ff6214b1f545ab6cfd47fcc0cc275bbdb494d2196b245f71aca0f83 extends Twig_Template
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
        $__internal_cf817fcc7838212702af1283b63dcd41d83c583b464a5133ffe9a8157383ac72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf817fcc7838212702af1283b63dcd41d83c583b464a5133ffe9a8157383ac72->enter($__internal_cf817fcc7838212702af1283b63dcd41d83c583b464a5133ffe9a8157383ac72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/core.delay.js"));

        // line 1
        echo "var global = require('./_global');
var core = require('./_core');
var \$export = require('./_export');
var partial = require('./_partial');
// https://esdiscuss.org/topic/promise-returning-delay-function
\$export(\$export.G + \$export.F, {
  delay: function delay(time) {
    return new (core.Promise || global.Promise)(function (resolve) {
      setTimeout(partial.call(resolve, true), time);
    });
  }
});
";
        
        $__internal_cf817fcc7838212702af1283b63dcd41d83c583b464a5133ffe9a8157383ac72->leave($__internal_cf817fcc7838212702af1283b63dcd41d83c583b464a5133ffe9a8157383ac72_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/core.delay.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var global = require('./_global');
var core = require('./_core');
var \$export = require('./_export');
var partial = require('./_partial');
// https://esdiscuss.org/topic/promise-returning-delay-function
\$export(\$export.G + \$export.F, {
  delay: function delay(time) {
    return new (core.Promise || global.Promise)(function (resolve) {
      setTimeout(partial.call(resolve, true), time);
    });
  }
});
", "node_modules/core-js/library/modules/core.delay.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/core.delay.js");
    }
}
