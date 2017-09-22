<?php

/* node_modules/parsleyjs/doc/annotated-source/defaults.html */
class __TwigTemplate_a758adb1143832b2088a8a08511544b6c10693bc1cbfc4b528eddb89449cadb6 extends Twig_Template
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
        $__internal_2b78b02567249c778b30e0d16c49af43d9fa1f5931e8638c93e7359196c8092e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b78b02567249c778b30e0d16c49af43d9fa1f5931e8638c93e7359196c8092e->enter($__internal_2b78b02567249c778b30e0d16c49af43d9fa1f5931e8638c93e7359196c8092e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/doc/annotated-source/defaults.html"));

        // line 1
        echo "<!DOCTYPE html>

<html>
<head>
  <title>defaults.js</title>
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
                  <h1>defaults.js</h1>
              </div>
          </li>
        
        
        
        <li id=\"section-1\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-1\">&#182;</a>
              </div>
              <p>All these options could be overriden and specified directly in DOM using
<code>data-parsley-</code> default DOM-API
eg: <code>inputs</code> can be set in DOM using <code>data-parsley-inputs=&quot;input, textarea&quot;</code>
eg: <code>data-parsley-stop-on-first-failing-constraint=&quot;false&quot;</code></p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>
<span class=\"hljs-keyword\">var</span> Defaults = {</pre></div></div>
            
        </li>
        
        
        <li id=\"section-2\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-2\">&#182;</a>
              </div>
              <h3 id=\"general\">General</h3>

            </div>
            
        </li>
        
        
        <li id=\"section-3\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-3\">&#182;</a>
              </div>
              <p>Default data-namespace for DOM API</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  namespace: <span class=\"hljs-string\">'data-parsley-'</span>,</pre></div></div>
            
        </li>
        
        
        <li id=\"section-4\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-4\">&#182;</a>
              </div>
              <p>Supported inputs by default</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  inputs: <span class=\"hljs-string\">'input, textarea, select'</span>,</pre></div></div>
            
        </li>
        
        
        <li id=\"section-5\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-5\">&#182;</a>
              </div>
              <p>Excluded inputs by default</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  excluded: <span class=\"hljs-string\">'input[type=button], input[type=submit], input[type=reset], input[type=hidden]'</span>,</pre></div></div>
            
        </li>
        
        
        <li id=\"section-6\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-6\">&#182;</a>
              </div>
              <p>Stop validating field on highest priority failing constraint</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  priorityEnabled: <span class=\"hljs-literal\">true</span>,</pre></div></div>
            
        </li>
        
        
        <li id=\"section-7\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-7\">&#182;</a>
              </div>
              <h3 id=\"field-only\">Field only</h3>

            </div>
            
        </li>
        
        
        <li id=\"section-8\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-8\">&#182;</a>
              </div>
              <p>identifier used to group together inputs (e.g. radio buttons…)</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  multiple: <span class=\"hljs-literal\">null</span>,</pre></div></div>
            
        </li>
        
        
        <li id=\"section-9\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-9\">&#182;</a>
              </div>
              <p>identifier (or array of identifiers) used to validate only a select group of inputs</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  group: <span class=\"hljs-literal\">null</span>,</pre></div></div>
            
        </li>
        
        
        <li id=\"section-10\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-10\">&#182;</a>
              </div>
              <h3 id=\"ui\">UI</h3>
<p>Enable\\Disable error messages</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  uiEnabled: <span class=\"hljs-literal\">true</span>,</pre></div></div>
            
        </li>
        
        
        <li id=\"section-11\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-11\">&#182;</a>
              </div>
              <p>Key events threshold before validation</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  validationThreshold: <span class=\"hljs-number\">3</span>,</pre></div></div>
            
        </li>
        
        
        <li id=\"section-12\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-12\">&#182;</a>
              </div>
              <p>Focused field on form validation error. ‘first’|’last’|’none’</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  focus: <span class=\"hljs-string\">'first'</span>,</pre></div></div>
            
        </li>
        
        
        <li id=\"section-13\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-13\">&#182;</a>
              </div>
              <p>event(s) that will trigger validation before first failure. eg: <code>input</code>…</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  trigger: <span class=\"hljs-literal\">false</span>,</pre></div></div>
            
        </li>
        
        
        <li id=\"section-14\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-14\">&#182;</a>
              </div>
              <p>event(s) that will trigger validation after first failure.</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  triggerAfterFailure: <span class=\"hljs-string\">'input'</span>,</pre></div></div>
            
        </li>
        
        
        <li id=\"section-15\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-15\">&#182;</a>
              </div>
              <p>Class that would be added on every failing validation Parsley field</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  errorClass: <span class=\"hljs-string\">'parsley-error'</span>,</pre></div></div>
            
        </li>
        
        
        <li id=\"section-16\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-16\">&#182;</a>
              </div>
              <p>Same for success validation</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  successClass: <span class=\"hljs-string\">'parsley-success'</span>,</pre></div></div>
            
        </li>
        
        
        <li id=\"section-17\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-17\">&#182;</a>
              </div>
              <p>Return the <code>\$element</code> that will receive these above success or error classes
Could also be (and given directly from DOM) a valid selector like <code>&#39;#div&#39;</code></p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  classHandler: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">Field</span>) </span>{},</pre></div></div>
            
        </li>
        
        
        <li id=\"section-18\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-18\">&#182;</a>
              </div>
              <p>Return the <code>\$element</code> where errors will be appended
Could also be (and given directly from DOM) a valid selector like <code>&#39;#div&#39;</code></p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  errorsContainer: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">Field</span>) </span>{},</pre></div></div>
            
        </li>
        
        
        <li id=\"section-19\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-19\">&#182;</a>
              </div>
              <p>ul elem that would receive errors’ list</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  errorsWrapper: <span class=\"hljs-string\">'&lt;ul class=\"parsley-errors-list\"&gt;&lt;/ul&gt;'</span>,</pre></div></div>
            
        </li>
        
        
        <li id=\"section-20\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-20\">&#182;</a>
              </div>
              <p>li elem that would receive error message</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  errorTemplate: <span class=\"hljs-string\">'&lt;li&gt;&lt;/li&gt;'</span>
};

<span class=\"hljs-keyword\">export</span> <span class=\"hljs-keyword\">default</span> Defaults;</pre></div></div>
            
        </li>
        
    </ul>
  </div>
<script>var _gaq=_gaq||[];_gaq.push([\"_setAccount\",\"UA-37229467-1\"]);_gaq.push([\"_trackPageview\"]);(function(){var e=document.createElement(\"script\");e.type=\"text/javascript\";e.async=true;e.src=(\"https:\"==document.location.protocol?\"https://ssl\":\"http://www\")+\".google-analytics.com/ga.js\";var t=document.getElementsByTagName(\"script\")[0];t.parentNode.insertBefore(e,t)})();</script></body>
</html>
";
        
        $__internal_2b78b02567249c778b30e0d16c49af43d9fa1f5931e8638c93e7359196c8092e->leave($__internal_2b78b02567249c778b30e0d16c49af43d9fa1f5931e8638c93e7359196c8092e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/doc/annotated-source/defaults.html";
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
  <title>defaults.js</title>
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
                  <h1>defaults.js</h1>
              </div>
          </li>
        
        
        
        <li id=\"section-1\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-1\">&#182;</a>
              </div>
              <p>All these options could be overriden and specified directly in DOM using
<code>data-parsley-</code> default DOM-API
eg: <code>inputs</code> can be set in DOM using <code>data-parsley-inputs=&quot;input, textarea&quot;</code>
eg: <code>data-parsley-stop-on-first-failing-constraint=&quot;false&quot;</code></p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>
<span class=\"hljs-keyword\">var</span> Defaults = {</pre></div></div>
            
        </li>
        
        
        <li id=\"section-2\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-2\">&#182;</a>
              </div>
              <h3 id=\"general\">General</h3>

            </div>
            
        </li>
        
        
        <li id=\"section-3\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-3\">&#182;</a>
              </div>
              <p>Default data-namespace for DOM API</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  namespace: <span class=\"hljs-string\">'data-parsley-'</span>,</pre></div></div>
            
        </li>
        
        
        <li id=\"section-4\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-4\">&#182;</a>
              </div>
              <p>Supported inputs by default</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  inputs: <span class=\"hljs-string\">'input, textarea, select'</span>,</pre></div></div>
            
        </li>
        
        
        <li id=\"section-5\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-5\">&#182;</a>
              </div>
              <p>Excluded inputs by default</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  excluded: <span class=\"hljs-string\">'input[type=button], input[type=submit], input[type=reset], input[type=hidden]'</span>,</pre></div></div>
            
        </li>
        
        
        <li id=\"section-6\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-6\">&#182;</a>
              </div>
              <p>Stop validating field on highest priority failing constraint</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  priorityEnabled: <span class=\"hljs-literal\">true</span>,</pre></div></div>
            
        </li>
        
        
        <li id=\"section-7\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-7\">&#182;</a>
              </div>
              <h3 id=\"field-only\">Field only</h3>

            </div>
            
        </li>
        
        
        <li id=\"section-8\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-8\">&#182;</a>
              </div>
              <p>identifier used to group together inputs (e.g. radio buttons…)</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  multiple: <span class=\"hljs-literal\">null</span>,</pre></div></div>
            
        </li>
        
        
        <li id=\"section-9\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-9\">&#182;</a>
              </div>
              <p>identifier (or array of identifiers) used to validate only a select group of inputs</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  group: <span class=\"hljs-literal\">null</span>,</pre></div></div>
            
        </li>
        
        
        <li id=\"section-10\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-10\">&#182;</a>
              </div>
              <h3 id=\"ui\">UI</h3>
<p>Enable\\Disable error messages</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  uiEnabled: <span class=\"hljs-literal\">true</span>,</pre></div></div>
            
        </li>
        
        
        <li id=\"section-11\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-11\">&#182;</a>
              </div>
              <p>Key events threshold before validation</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  validationThreshold: <span class=\"hljs-number\">3</span>,</pre></div></div>
            
        </li>
        
        
        <li id=\"section-12\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-12\">&#182;</a>
              </div>
              <p>Focused field on form validation error. ‘first’|’last’|’none’</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  focus: <span class=\"hljs-string\">'first'</span>,</pre></div></div>
            
        </li>
        
        
        <li id=\"section-13\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-13\">&#182;</a>
              </div>
              <p>event(s) that will trigger validation before first failure. eg: <code>input</code>…</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  trigger: <span class=\"hljs-literal\">false</span>,</pre></div></div>
            
        </li>
        
        
        <li id=\"section-14\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-14\">&#182;</a>
              </div>
              <p>event(s) that will trigger validation after first failure.</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  triggerAfterFailure: <span class=\"hljs-string\">'input'</span>,</pre></div></div>
            
        </li>
        
        
        <li id=\"section-15\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-15\">&#182;</a>
              </div>
              <p>Class that would be added on every failing validation Parsley field</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  errorClass: <span class=\"hljs-string\">'parsley-error'</span>,</pre></div></div>
            
        </li>
        
        
        <li id=\"section-16\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-16\">&#182;</a>
              </div>
              <p>Same for success validation</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  successClass: <span class=\"hljs-string\">'parsley-success'</span>,</pre></div></div>
            
        </li>
        
        
        <li id=\"section-17\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-17\">&#182;</a>
              </div>
              <p>Return the <code>\$element</code> that will receive these above success or error classes
Could also be (and given directly from DOM) a valid selector like <code>&#39;#div&#39;</code></p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  classHandler: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">Field</span>) </span>{},</pre></div></div>
            
        </li>
        
        
        <li id=\"section-18\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-18\">&#182;</a>
              </div>
              <p>Return the <code>\$element</code> where errors will be appended
Could also be (and given directly from DOM) a valid selector like <code>&#39;#div&#39;</code></p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  errorsContainer: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">Field</span>) </span>{},</pre></div></div>
            
        </li>
        
        
        <li id=\"section-19\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-19\">&#182;</a>
              </div>
              <p>ul elem that would receive errors’ list</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  errorsWrapper: <span class=\"hljs-string\">'&lt;ul class=\"parsley-errors-list\"&gt;&lt;/ul&gt;'</span>,</pre></div></div>
            
        </li>
        
        
        <li id=\"section-20\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-20\">&#182;</a>
              </div>
              <p>li elem that would receive error message</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  errorTemplate: <span class=\"hljs-string\">'&lt;li&gt;&lt;/li&gt;'</span>
};

<span class=\"hljs-keyword\">export</span> <span class=\"hljs-keyword\">default</span> Defaults;</pre></div></div>
            
        </li>
        
    </ul>
  </div>
<script>var _gaq=_gaq||[];_gaq.push([\"_setAccount\",\"UA-37229467-1\"]);_gaq.push([\"_trackPageview\"]);(function(){var e=document.createElement(\"script\");e.type=\"text/javascript\";e.async=true;e.src=(\"https:\"==document.location.protocol?\"https://ssl\":\"http://www\")+\".google-analytics.com/ga.js\";var t=document.getElementsByTagName(\"script\")[0];t.parentNode.insertBefore(e,t)})();</script></body>
</html>
", "node_modules/parsleyjs/doc/annotated-source/defaults.html", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/doc/annotated-source/defaults.html");
    }
}
