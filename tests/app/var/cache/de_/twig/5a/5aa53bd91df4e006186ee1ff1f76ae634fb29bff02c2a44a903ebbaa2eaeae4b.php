<?php

/* node_modules/core-js/fn/typed/float32-array.js */
class __TwigTemplate_a2abf6751ff52aff5de01ac40062b1bdb8ac5c33a40b71fe2cf3a807f8fe560f extends Twig_Template
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
        $__internal_fb1e64c89bc06f47a2921c21e3e9acef9e103d32f2eac5ca9d679ad83c8542ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb1e64c89bc06f47a2921c21e3e9acef9e103d32f2eac5ca9d679ad83c8542ba->enter($__internal_fb1e64c89bc06f47a2921c21e3e9acef9e103d32f2eac5ca9d679ad83c8542ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/typed/float32-array.js"));

        // line 1
        echo "require('../../modules/es6.typed.float32-array');
module.exports = require('../../modules/_core').Float32Array;
";
        
        $__internal_fb1e64c89bc06f47a2921c21e3e9acef9e103d32f2eac5ca9d679ad83c8542ba->leave($__internal_fb1e64c89bc06f47a2921c21e3e9acef9e103d32f2eac5ca9d679ad83c8542ba_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/typed/float32-array.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.typed.float32-array');
module.exports = require('../../modules/_core').Float32Array;
", "node_modules/core-js/fn/typed/float32-array.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/typed/float32-array.js");
    }
}
