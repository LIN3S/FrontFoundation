<?php

/* node_modules/es5-ext/test/reg-exp/#/replace/implement.js */
class __TwigTemplate_b4c963a70eb0c899fbd32fefe5a02b44ce97a7336081ea03abde7df15c2959c2 extends Twig_Template
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
        $__internal_7062d77e05e85894248f48b0395fe2e6338d0576aae796e79cba5383aca8adec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7062d77e05e85894248f48b0395fe2e6338d0576aae796e79cba5383aca8adec->enter($__internal_7062d77e05e85894248f48b0395fe2e6338d0576aae796e79cba5383aca8adec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/reg-exp/#/replace/implement.js"));

        // line 1
        echo "\"use strict\";

var isImplemented = require(\"../../../../reg-exp/#/replace/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
";
        
        $__internal_7062d77e05e85894248f48b0395fe2e6338d0576aae796e79cba5383aca8adec->leave($__internal_7062d77e05e85894248f48b0395fe2e6338d0576aae796e79cba5383aca8adec_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/reg-exp/#/replace/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var isImplemented = require(\"../../../../reg-exp/#/replace/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
", "node_modules/es5-ext/test/reg-exp/#/replace/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/reg-exp/#/replace/implement.js");
    }
}
