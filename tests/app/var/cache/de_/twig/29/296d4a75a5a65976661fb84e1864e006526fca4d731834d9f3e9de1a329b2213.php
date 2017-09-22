<?php

/* node_modules/parsleyjs/doc/annotated-source/constraint.html */
class __TwigTemplate_aa233c32c9f31cdaa52a5af462d4856aa2967e7184e60e2290a65747cb1f856c extends Twig_Template
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
        $__internal_1d4c7c4233cb69e8ba287d237dc82dfc8d31a6a27547e078e63679e838eaf23c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d4c7c4233cb69e8ba287d237dc82dfc8d31a6a27547e078e63679e838eaf23c->enter($__internal_1d4c7c4233cb69e8ba287d237dc82dfc8d31a6a27547e078e63679e838eaf23c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/doc/annotated-source/constraint.html"));

        // line 1
        echo "<!DOCTYPE html>

<html>
<head>
  <title>constraint.js</title>
  <meta http-equiv=\"content-type\" content=\"text/html; charset=UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, target-densitydpi=160dpi, initial-scale=1.0; maximum-scale=1.0; user-scalable=0;\">
  <link rel=\"stylesheet\" media=\"all\" href=\"docco.css\" />
</head>
<body>
  <div id=\"container\">
    <div id=\"background\"></div>
    
      <ul id=\"jump_to\">
        <li>
          <a class=\"large\" href=\"javascript:void(0);\">Jump To &hellip;</a>
          <a class=\"small\" href=\"javascript:void(0);\">+</a>
          <div id=\"jump_wrapper\">
          <div id=\"jump_page\"><a class=\"source\" href=\"../index.html\">&lt;&lt;&lt; back to documentation</a>
            
              
              <a class=\"source\" href=\"base.html\">
                base.js
              </a>
            
              
              <a class=\"source\" href=\"constraint.html\">
                constraint.js
              </a>
            
              
              <a class=\"source\" href=\"defaults.html\">
                defaults.js
              </a>
            
              
              <a class=\"source\" href=\"factory.html\">
                factory.js
              </a>
            
              
              <a class=\"source\" href=\"field.html\">
                field.js
              </a>
            
              
              <a class=\"source\" href=\"form.html\">
                form.js
              </a>
            
              
              <a class=\"source\" href=\"main.html\">
                main.js
              </a>
            
              
              <a class=\"source\" href=\"multiple.html\">
                multiple.js
              </a>
            
              
              <a class=\"source\" href=\"pubsub.html\">
                pubsub.js
              </a>
            
              
              <a class=\"source\" href=\"remote.html\">
                remote.js
              </a>
            
              
              <a class=\"source\" href=\"ui.html\">
                ui.js
              </a>
            
              
              <a class=\"source\" href=\"utils.html\">
                utils.js
              </a>
            
              
              <a class=\"source\" href=\"validator.html\">
                validator.js
              </a>
            
              
              <a class=\"source\" href=\"validator_registry.html\">
                validator_registry.js
              </a>
            
          </div>
        </li>
      </ul>
    
    <ul class=\"sections\">
        
          <li id=\"title\">
              <div class=\"annotation\">
                  <h1>constraint.js</h1>
              </div>
          </li>
        
        
        
        <li id=\"section-1\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-1\">&#182;</a>
              </div>
              
            </div>
            
            <div class=\"content\"><div class='highlight'><pre><span class=\"hljs-keyword\">import</span> Utils <span class=\"hljs-keyword\">from</span> <span class=\"hljs-string\">'./utils'</span>;
<span class=\"hljs-keyword\">import</span> Validator <span class=\"hljs-keyword\">from</span> <span class=\"hljs-string\">'./validator'</span>;

<span class=\"hljs-keyword\">const</span> Constraint = <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span>(<span class=\"hljs-params\">parsleyField, name, requirements, priority, isDomConstraint</span>) </span>{
  <span class=\"hljs-keyword\">const</span> validatorSpec = <span class=\"hljs-built_in\">window</span>.Parsley._validatorRegistry.validators[name];
  <span class=\"hljs-keyword\">const</span> validator = <span class=\"hljs-keyword\">new</span> Validator(validatorSpec);
  priority = priority || parsleyField.options[name + <span class=\"hljs-string\">'Priority'</span>] || validator.priority;
  isDomConstraint = (<span class=\"hljs-literal\">true</span> === isDomConstraint);

  <span class=\"hljs-built_in\">Object</span>.assign(<span class=\"hljs-keyword\">this</span>, {
    validator,
    name,
    requirements,
    priority,
    isDomConstraint
  });
  <span class=\"hljs-keyword\">this</span>._parseRequirements(parsleyField.options);
};

<span class=\"hljs-keyword\">const</span> capitalize = <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span>(<span class=\"hljs-params\">str</span>) </span>{
  <span class=\"hljs-keyword\">const</span> cap = str[<span class=\"hljs-number\">0</span>].toUpperCase();
  <span class=\"hljs-keyword\">return</span> cap + str.slice(<span class=\"hljs-number\">1</span>);
};

Constraint.prototype = {
  <span class=\"hljs-attr\">validate</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span>(<span class=\"hljs-params\">value, instance</span>) </span>{
    <span class=\"hljs-keyword\">return</span> <span class=\"hljs-keyword\">this</span>.validator.validate(value, ...this.requirementList, instance);
  },

  <span class=\"hljs-attr\">_parseRequirements</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span>(<span class=\"hljs-params\">options</span>) </span>{
    <span class=\"hljs-keyword\">this</span>.requirementList = <span class=\"hljs-keyword\">this</span>.validator.parseRequirements(<span class=\"hljs-keyword\">this</span>.requirements,
      key =&gt; options[<span class=\"hljs-keyword\">this</span>.name + capitalize(key)]
    );
  }
};

<span class=\"hljs-keyword\">export</span> <span class=\"hljs-keyword\">default</span> Constraint;</pre></div></div>
            
        </li>
        
    </ul>
  </div>
<script>var _gaq=_gaq||[];_gaq.push([\"_setAccount\",\"UA-37229467-1\"]);_gaq.push([\"_trackPageview\"]);(function(){var e=document.createElement(\"script\");e.type=\"text/javascript\";e.async=true;e.src=(\"https:\"==document.location.protocol?\"https://ssl\":\"http://www\")+\".google-analytics.com/ga.js\";var t=document.getElementsByTagName(\"script\")[0];t.parentNode.insertBefore(e,t)})();</script></body>
</html>
";
        
        $__internal_1d4c7c4233cb69e8ba287d237dc82dfc8d31a6a27547e078e63679e838eaf23c->leave($__internal_1d4c7c4233cb69e8ba287d237dc82dfc8d31a6a27547e078e63679e838eaf23c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/doc/annotated-source/constraint.html";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>

<html>
<head>
  <title>constraint.js</title>
  <meta http-equiv=\"content-type\" content=\"text/html; charset=UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, target-densitydpi=160dpi, initial-scale=1.0; maximum-scale=1.0; user-scalable=0;\">
  <link rel=\"stylesheet\" media=\"all\" href=\"docco.css\" />
</head>
<body>
  <div id=\"container\">
    <div id=\"background\"></div>
    
      <ul id=\"jump_to\">
        <li>
          <a class=\"large\" href=\"javascript:void(0);\">Jump To &hellip;</a>
          <a class=\"small\" href=\"javascript:void(0);\">+</a>
          <div id=\"jump_wrapper\">
          <div id=\"jump_page\"><a class=\"source\" href=\"../index.html\">&lt;&lt;&lt; back to documentation</a>
            
              
              <a class=\"source\" href=\"base.html\">
                base.js
              </a>
            
              
              <a class=\"source\" href=\"constraint.html\">
                constraint.js
              </a>
            
              
              <a class=\"source\" href=\"defaults.html\">
                defaults.js
              </a>
            
              
              <a class=\"source\" href=\"factory.html\">
                factory.js
              </a>
            
              
              <a class=\"source\" href=\"field.html\">
                field.js
              </a>
            
              
              <a class=\"source\" href=\"form.html\">
                form.js
              </a>
            
              
              <a class=\"source\" href=\"main.html\">
                main.js
              </a>
            
              
              <a class=\"source\" href=\"multiple.html\">
                multiple.js
              </a>
            
              
              <a class=\"source\" href=\"pubsub.html\">
                pubsub.js
              </a>
            
              
              <a class=\"source\" href=\"remote.html\">
                remote.js
              </a>
            
              
              <a class=\"source\" href=\"ui.html\">
                ui.js
              </a>
            
              
              <a class=\"source\" href=\"utils.html\">
                utils.js
              </a>
            
              
              <a class=\"source\" href=\"validator.html\">
                validator.js
              </a>
            
              
              <a class=\"source\" href=\"validator_registry.html\">
                validator_registry.js
              </a>
            
          </div>
        </li>
      </ul>
    
    <ul class=\"sections\">
        
          <li id=\"title\">
              <div class=\"annotation\">
                  <h1>constraint.js</h1>
              </div>
          </li>
        
        
        
        <li id=\"section-1\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-1\">&#182;</a>
              </div>
              
            </div>
            
            <div class=\"content\"><div class='highlight'><pre><span class=\"hljs-keyword\">import</span> Utils <span class=\"hljs-keyword\">from</span> <span class=\"hljs-string\">'./utils'</span>;
<span class=\"hljs-keyword\">import</span> Validator <span class=\"hljs-keyword\">from</span> <span class=\"hljs-string\">'./validator'</span>;

<span class=\"hljs-keyword\">const</span> Constraint = <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span>(<span class=\"hljs-params\">parsleyField, name, requirements, priority, isDomConstraint</span>) </span>{
  <span class=\"hljs-keyword\">const</span> validatorSpec = <span class=\"hljs-built_in\">window</span>.Parsley._validatorRegistry.validators[name];
  <span class=\"hljs-keyword\">const</span> validator = <span class=\"hljs-keyword\">new</span> Validator(validatorSpec);
  priority = priority || parsleyField.options[name + <span class=\"hljs-string\">'Priority'</span>] || validator.priority;
  isDomConstraint = (<span class=\"hljs-literal\">true</span> === isDomConstraint);

  <span class=\"hljs-built_in\">Object</span>.assign(<span class=\"hljs-keyword\">this</span>, {
    validator,
    name,
    requirements,
    priority,
    isDomConstraint
  });
  <span class=\"hljs-keyword\">this</span>._parseRequirements(parsleyField.options);
};

<span class=\"hljs-keyword\">const</span> capitalize = <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span>(<span class=\"hljs-params\">str</span>) </span>{
  <span class=\"hljs-keyword\">const</span> cap = str[<span class=\"hljs-number\">0</span>].toUpperCase();
  <span class=\"hljs-keyword\">return</span> cap + str.slice(<span class=\"hljs-number\">1</span>);
};

Constraint.prototype = {
  <span class=\"hljs-attr\">validate</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span>(<span class=\"hljs-params\">value, instance</span>) </span>{
    <span class=\"hljs-keyword\">return</span> <span class=\"hljs-keyword\">this</span>.validator.validate(value, ...this.requirementList, instance);
  },

  <span class=\"hljs-attr\">_parseRequirements</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span>(<span class=\"hljs-params\">options</span>) </span>{
    <span class=\"hljs-keyword\">this</span>.requirementList = <span class=\"hljs-keyword\">this</span>.validator.parseRequirements(<span class=\"hljs-keyword\">this</span>.requirements,
      key =&gt; options[<span class=\"hljs-keyword\">this</span>.name + capitalize(key)]
    );
  }
};

<span class=\"hljs-keyword\">export</span> <span class=\"hljs-keyword\">default</span> Constraint;</pre></div></div>
            
        </li>
        
    </ul>
  </div>
<script>var _gaq=_gaq||[];_gaq.push([\"_setAccount\",\"UA-37229467-1\"]);_gaq.push([\"_trackPageview\"]);(function(){var e=document.createElement(\"script\");e.type=\"text/javascript\";e.async=true;e.src=(\"https:\"==document.location.protocol?\"https://ssl\":\"http://www\")+\".google-analytics.com/ga.js\";var t=document.getElementsByTagName(\"script\")[0];t.parentNode.insertBefore(e,t)})();</script></body>
</html>
", "node_modules/parsleyjs/doc/annotated-source/constraint.html", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/doc/annotated-source/constraint.html");
    }
}
