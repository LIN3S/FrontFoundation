<?php

/* node_modules/fsevents/node_modules/performance-now/lib/performance-now.js */
class __TwigTemplate_c63ab2de308b4adccab0b1e9e5cca667e203977ef7040c5c70ec448035c82852 extends Twig_Template
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
        $__internal_2473f30a3a13daa640864eea1776836ffdf1114294b6f43e59bcba63bae45e57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2473f30a3a13daa640864eea1776836ffdf1114294b6f43e59bcba63bae45e57->enter($__internal_2473f30a3a13daa640864eea1776836ffdf1114294b6f43e59bcba63bae45e57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/performance-now/lib/performance-now.js"));

        // line 1
        echo "// Generated by CoffeeScript 1.7.1
(function() {
  var getNanoSeconds, hrtime, loadTime;

  if ((typeof performance !== \"undefined\" && performance !== null) && performance.now) {
    module.exports = function() {
      return performance.now();
    };
  } else if ((typeof process !== \"undefined\" && process !== null) && process.hrtime) {
    module.exports = function() {
      return (getNanoSeconds() - loadTime) / 1e6;
    };
    hrtime = process.hrtime;
    getNanoSeconds = function() {
      var hr;
      hr = hrtime();
      return hr[0] * 1e9 + hr[1];
    };
    loadTime = getNanoSeconds();
  } else if (Date.now) {
    module.exports = function() {
      return Date.now() - loadTime;
    };
    loadTime = Date.now();
  } else {
    module.exports = function() {
      return new Date().getTime() - loadTime;
    };
    loadTime = new Date().getTime();
  }

}).call(this);
";
        
        $__internal_2473f30a3a13daa640864eea1776836ffdf1114294b6f43e59bcba63bae45e57->leave($__internal_2473f30a3a13daa640864eea1776836ffdf1114294b6f43e59bcba63bae45e57_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/performance-now/lib/performance-now.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Generated by CoffeeScript 1.7.1
(function() {
  var getNanoSeconds, hrtime, loadTime;

  if ((typeof performance !== \"undefined\" && performance !== null) && performance.now) {
    module.exports = function() {
      return performance.now();
    };
  } else if ((typeof process !== \"undefined\" && process !== null) && process.hrtime) {
    module.exports = function() {
      return (getNanoSeconds() - loadTime) / 1e6;
    };
    hrtime = process.hrtime;
    getNanoSeconds = function() {
      var hr;
      hr = hrtime();
      return hr[0] * 1e9 + hr[1];
    };
    loadTime = getNanoSeconds();
  } else if (Date.now) {
    module.exports = function() {
      return Date.now() - loadTime;
    };
    loadTime = Date.now();
  } else {
    module.exports = function() {
      return new Date().getTime() - loadTime;
    };
    loadTime = new Date().getTime();
  }

}).call(this);
", "node_modules/fsevents/node_modules/performance-now/lib/performance-now.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/performance-now/lib/performance-now.js");
    }
}
