<?php

/* node_modules/lodash/fp/value.js */
class __TwigTemplate_0cfacdd7689712fa40c631aeef2c2b18eebc1c808e087f31b921a22a69773320 extends Twig_Template
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
        $__internal_9462d9ca5c94421d52cc7445c190a600b1e7e6a8a0ad92dea7e927a34b3ca0c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9462d9ca5c94421d52cc7445c190a600b1e7e6a8a0ad92dea7e927a34b3ca0c5->enter($__internal_9462d9ca5c94421d52cc7445c190a600b1e7e6a8a0ad92dea7e927a34b3ca0c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/value.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('value', require('../value'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_9462d9ca5c94421d52cc7445c190a600b1e7e6a8a0ad92dea7e927a34b3ca0c5->leave($__internal_9462d9ca5c94421d52cc7445c190a600b1e7e6a8a0ad92dea7e927a34b3ca0c5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/value.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('value', require('../value'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/value.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/value.js");
    }
}
