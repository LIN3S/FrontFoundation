<?php

/* node_modules/lodash/fp/map.js */
class __TwigTemplate_7a77f9d6955c78048a6911d361f7192834ba8ddb2098788be3117016f05f7918 extends Twig_Template
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
        $__internal_897aa2c838dcc0da30ad3593f71796bf44e59d34864f5ec63df787dd4eedfbc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_897aa2c838dcc0da30ad3593f71796bf44e59d34864f5ec63df787dd4eedfbc7->enter($__internal_897aa2c838dcc0da30ad3593f71796bf44e59d34864f5ec63df787dd4eedfbc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/map.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('map', require('../map'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_897aa2c838dcc0da30ad3593f71796bf44e59d34864f5ec63df787dd4eedfbc7->leave($__internal_897aa2c838dcc0da30ad3593f71796bf44e59d34864f5ec63df787dd4eedfbc7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/map.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('map', require('../map'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/map.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/map.js");
    }
}
