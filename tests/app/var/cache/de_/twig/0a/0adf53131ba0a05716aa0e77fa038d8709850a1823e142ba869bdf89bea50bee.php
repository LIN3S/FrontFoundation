<?php

/* node_modules/parsleyjs/doc/annotated-source/factory.html */
class __TwigTemplate_5335e9925bae6f632ea1323c4e26109ae1d8da0672b75346ef22a36c5bc42a03 extends Twig_Template
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
        $__internal_b4cb6acdc3056fbd6867160ad1e63b5c403318c4d7185f8b6b841abaa870f953 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4cb6acdc3056fbd6867160ad1e63b5c403318c4d7185f8b6b841abaa870f953->enter($__internal_b4cb6acdc3056fbd6867160ad1e63b5c403318c4d7185f8b6b841abaa870f953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/doc/annotated-source/factory.html"));

        // line 1
        echo "<!DOCTYPE html>

<html>
<head>
  <title>factory.js</title>
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
                  <h1>factory.js</h1>
              </div>
          </li>
        
        
        
        <li id=\"section-1\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-1\">&#182;</a>
              </div>
              
            </div>
            
            <div class=\"content\"><div class='highlight'><pre><span class=\"hljs-keyword\">import</span> \$ <span class=\"hljs-keyword\">from</span> <span class=\"hljs-string\">'jquery'</span>;
<span class=\"hljs-keyword\">import</span> Utils <span class=\"hljs-keyword\">from</span> <span class=\"hljs-string\">'./utils'</span>;
<span class=\"hljs-keyword\">import</span> Base <span class=\"hljs-keyword\">from</span> <span class=\"hljs-string\">'./base'</span>;
<span class=\"hljs-keyword\">import</span> Form <span class=\"hljs-keyword\">from</span> <span class=\"hljs-string\">'./form'</span>;
<span class=\"hljs-keyword\">import</span> Field <span class=\"hljs-keyword\">from</span> <span class=\"hljs-string\">'./field'</span>;
<span class=\"hljs-keyword\">import</span> Multiple <span class=\"hljs-keyword\">from</span> <span class=\"hljs-string\">'./multiple'</span>;

<span class=\"hljs-keyword\">var</span> Factory = <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">element, options, parsleyFormInstance</span>) </span>{
  <span class=\"hljs-keyword\">this</span>.element = element;
  <span class=\"hljs-keyword\">this</span>.\$element = \$(element);</pre></div></div>
            
        </li>
        
        
        <li id=\"section-2\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-2\">&#182;</a>
              </div>
              <p>If the element has already been bound, returns its saved Parsley instance</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  <span class=\"hljs-keyword\">var</span> savedparsleyFormInstance = <span class=\"hljs-keyword\">this</span>.\$element.data(<span class=\"hljs-string\">'Parsley'</span>);
  <span class=\"hljs-keyword\">if</span> (savedparsleyFormInstance) {</pre></div></div>
            
        </li>
        
        
        <li id=\"section-3\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-3\">&#182;</a>
              </div>
              <p>If the saved instance has been bound without a Form parent and there is one given in this call, add it</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-string\">'undefined'</span> !== <span class=\"hljs-keyword\">typeof</span> parsleyFormInstance &amp;&amp; savedparsleyFormInstance.parent === <span class=\"hljs-built_in\">window</span>.Parsley) {
      savedparsleyFormInstance.parent = parsleyFormInstance;
      savedparsleyFormInstance._resetOptions(savedparsleyFormInstance.options);
    }

    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-string\">'object'</span> === <span class=\"hljs-keyword\">typeof</span> options) {
      <span class=\"hljs-built_in\">Object</span>.assign(savedparsleyFormInstance.options, options);
    }

    <span class=\"hljs-keyword\">return</span> savedparsleyFormInstance;
  }</pre></div></div>
            
        </li>
        
        
        <li id=\"section-4\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-4\">&#182;</a>
              </div>
              <p>Parsley must be instantiated with a DOM element or jQuery \$element</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  <span class=\"hljs-keyword\">if</span> (!<span class=\"hljs-keyword\">this</span>.\$element.length)
    <span class=\"hljs-keyword\">throw</span> <span class=\"hljs-keyword\">new</span> <span class=\"hljs-built_in\">Error</span>(<span class=\"hljs-string\">'You must bind Parsley on an existing element.'</span>);

  <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-string\">'undefined'</span> !== <span class=\"hljs-keyword\">typeof</span> parsleyFormInstance &amp;&amp; <span class=\"hljs-string\">'Form'</span> !== parsleyFormInstance.__class__)
    <span class=\"hljs-keyword\">throw</span> <span class=\"hljs-keyword\">new</span> <span class=\"hljs-built_in\">Error</span>(<span class=\"hljs-string\">'Parent instance must be a Form instance'</span>);

  <span class=\"hljs-keyword\">this</span>.parent = parsleyFormInstance || <span class=\"hljs-built_in\">window</span>.Parsley;
  <span class=\"hljs-keyword\">return</span> <span class=\"hljs-keyword\">this</span>.init(options);
};

Factory.prototype = {
  <span class=\"hljs-attr\">init</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">options</span>) </span>{
    <span class=\"hljs-keyword\">this</span>.__class__ = <span class=\"hljs-string\">'Parsley'</span>;
    <span class=\"hljs-keyword\">this</span>.__version__ = <span class=\"hljs-string\">'@@version'</span>;
    <span class=\"hljs-keyword\">this</span>.__id__ = Utils.generateID();</pre></div></div>
            
        </li>
        
        
        <li id=\"section-5\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-5\">&#182;</a>
              </div>
              <p>Pre-compute options</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">this</span>._resetOptions(options);</pre></div></div>
            
        </li>
        
        
        <li id=\"section-6\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-6\">&#182;</a>
              </div>
              <p>A Form instance is obviously a <code>&lt;form&gt;</code> element but also every node that is not an input and has the <code>data-parsley-validate</code> attribute</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-keyword\">this</span>.element.nodeName === <span class=\"hljs-string\">'FORM'</span> || (Utils.checkAttr(<span class=\"hljs-keyword\">this</span>.element, <span class=\"hljs-keyword\">this</span>.options.namespace, <span class=\"hljs-string\">'validate'</span>) &amp;&amp; !<span class=\"hljs-keyword\">this</span>.\$element.is(<span class=\"hljs-keyword\">this</span>.options.inputs)))
      <span class=\"hljs-keyword\">return</span> <span class=\"hljs-keyword\">this</span>.bind(<span class=\"hljs-string\">'parsleyForm'</span>);</pre></div></div>
            
        </li>
        
        
        <li id=\"section-7\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-7\">&#182;</a>
              </div>
              <p>Every other element is bound as a <code>Field</code> or <code>FieldMultiple</code></p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">return</span> <span class=\"hljs-keyword\">this</span>.isMultiple() ? <span class=\"hljs-keyword\">this</span>.handleMultiple() : <span class=\"hljs-keyword\">this</span>.bind(<span class=\"hljs-string\">'parsleyField'</span>);
  },

  <span class=\"hljs-attr\">isMultiple</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\"></span>) </span>{
    <span class=\"hljs-keyword\">return</span> ((<span class=\"hljs-keyword\">this</span>.element.type === <span class=\"hljs-string\">'radio'</span> || <span class=\"hljs-keyword\">this</span>.element.type === <span class=\"hljs-string\">'checkbox'</span>) ||
      (<span class=\"hljs-keyword\">this</span>.element.nodeName === <span class=\"hljs-string\">'SELECT'</span> &amp;&amp; <span class=\"hljs-literal\">null</span> !== <span class=\"hljs-keyword\">this</span>.element.getAttribute(<span class=\"hljs-string\">'multiple'</span>)));
  },</pre></div></div>
            
        </li>
        
        
        <li id=\"section-8\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-8\">&#182;</a>
              </div>
              <p>Multiples fields are a real nightmare :(
Maybe some refactoring would be appreciated here…</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  handleMultiple: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\"></span>) </span>{
    <span class=\"hljs-keyword\">var</span> name;
    <span class=\"hljs-keyword\">var</span> multiple;
    <span class=\"hljs-keyword\">var</span> parsleyMultipleInstance;</pre></div></div>
            
        </li>
        
        
        <li id=\"section-9\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-9\">&#182;</a>
              </div>
              <p>Handle multiple name</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">this</span>.options.multiple = <span class=\"hljs-keyword\">this</span>.options.multiple ||
      (name = <span class=\"hljs-keyword\">this</span>.element.getAttribute(<span class=\"hljs-string\">'name'</span>)) ||
      <span class=\"hljs-keyword\">this</span>.element.getAttribute(<span class=\"hljs-string\">'id'</span>);</pre></div></div>
            
        </li>
        
        
        <li id=\"section-10\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-10\">&#182;</a>
              </div>
              <p>Special select multiple input</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-keyword\">this</span>.element.nodeName === <span class=\"hljs-string\">'SELECT'</span> &amp;&amp; <span class=\"hljs-literal\">null</span> !== <span class=\"hljs-keyword\">this</span>.element.getAttribute(<span class=\"hljs-string\">'multiple'</span>)) {
      <span class=\"hljs-keyword\">this</span>.options.multiple = <span class=\"hljs-keyword\">this</span>.options.multiple || <span class=\"hljs-keyword\">this</span>.__id__;
      <span class=\"hljs-keyword\">return</span> <span class=\"hljs-keyword\">this</span>.bind(<span class=\"hljs-string\">'parsleyFieldMultiple'</span>);</pre></div></div>
            
        </li>
        
        
        <li id=\"section-11\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-11\">&#182;</a>
              </div>
              <p>Else for radio / checkboxes, we need a <code>name</code> or <code>data-parsley-multiple</code> to properly bind it</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    } <span class=\"hljs-keyword\">else</span> <span class=\"hljs-keyword\">if</span> (!<span class=\"hljs-keyword\">this</span>.options.multiple) {
      Utils.warn(<span class=\"hljs-string\">'To be bound by Parsley, a radio, a checkbox and a multiple select input must have either a name or a multiple option.'</span>, <span class=\"hljs-keyword\">this</span>.\$element);
      <span class=\"hljs-keyword\">return</span> <span class=\"hljs-keyword\">this</span>;
    }</pre></div></div>
            
        </li>
        
        
        <li id=\"section-12\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-12\">&#182;</a>
              </div>
              <p>Remove special chars</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">this</span>.options.multiple = <span class=\"hljs-keyword\">this</span>.options.multiple.replace(<span class=\"hljs-regexp\">/(:|\\.|\\[|\\]|\\{|\\}|\\\$)/g</span>, <span class=\"hljs-string\">''</span>);</pre></div></div>
            
        </li>
        
        
        <li id=\"section-13\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-13\">&#182;</a>
              </div>
              <p>Add proper <code>data-parsley-multiple</code> to siblings if we have a valid multiple name</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">if</span> (name) {
      \$(<span class=\"hljs-string\">'input[name=\"'</span> + name + <span class=\"hljs-string\">'\"]'</span>).each(<span class=\"hljs-function\">(<span class=\"hljs-params\">i, input</span>) =&gt;</span> {
        <span class=\"hljs-keyword\">if</span> ((input.type === <span class=\"hljs-string\">'radio'</span> || input.type === <span class=\"hljs-string\">'checkbox'</span>))
          input.setAttribute(<span class=\"hljs-keyword\">this</span>.options.namespace + <span class=\"hljs-string\">'multiple'</span>, <span class=\"hljs-keyword\">this</span>.options.multiple);
      });
    }</pre></div></div>
            
        </li>
        
        
        <li id=\"section-14\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-14\">&#182;</a>
              </div>
              <p>Check here if we don’t already have a related multiple instance saved</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">var</span> \$previouslyRelated = <span class=\"hljs-keyword\">this</span>._findRelated();
    <span class=\"hljs-keyword\">for</span> (<span class=\"hljs-keyword\">var</span> i = <span class=\"hljs-number\">0</span>; i &lt; \$previouslyRelated.length; i++) {
      parsleyMultipleInstance = \$(\$previouslyRelated.get(i)).data(<span class=\"hljs-string\">'Parsley'</span>);
      <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-string\">'undefined'</span> !== <span class=\"hljs-keyword\">typeof</span> parsleyMultipleInstance) {

        <span class=\"hljs-keyword\">if</span> (!<span class=\"hljs-keyword\">this</span>.\$element.data(<span class=\"hljs-string\">'FieldMultiple'</span>)) {
          parsleyMultipleInstance.addElement(<span class=\"hljs-keyword\">this</span>.\$element);
        }

        <span class=\"hljs-keyword\">break</span>;
      }
    }</pre></div></div>
            
        </li>
        
        
        <li id=\"section-15\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-15\">&#182;</a>
              </div>
              <p>Create a secret Field instance for every multiple field. It will be stored in <code>data(&#39;FieldMultiple&#39;)</code>
And will be useful later to access classic <code>Field</code> stuff while being in a <code>FieldMultiple</code> instance</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">this</span>.bind(<span class=\"hljs-string\">'parsleyField'</span>, <span class=\"hljs-literal\">true</span>);

    <span class=\"hljs-keyword\">return</span> parsleyMultipleInstance || <span class=\"hljs-keyword\">this</span>.bind(<span class=\"hljs-string\">'parsleyFieldMultiple'</span>);
  },</pre></div></div>
            
        </li>
        
        
        <li id=\"section-16\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-16\">&#182;</a>
              </div>
              <p>Return proper <code>Form</code>, <code>Field</code> or <code>FieldMultiple</code></p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  bind: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">type, doNotStore</span>) </span>{
    <span class=\"hljs-keyword\">var</span> parsleyInstance;

    <span class=\"hljs-keyword\">switch</span> (type) {
      <span class=\"hljs-keyword\">case</span> <span class=\"hljs-string\">'parsleyForm'</span>:
        parsleyInstance = \$.extend(
          <span class=\"hljs-keyword\">new</span> Form(<span class=\"hljs-keyword\">this</span>.element, <span class=\"hljs-keyword\">this</span>.domOptions, <span class=\"hljs-keyword\">this</span>.options),
          <span class=\"hljs-keyword\">new</span> Base(),
          <span class=\"hljs-built_in\">window</span>.ParsleyExtend
        )._bindFields();
        <span class=\"hljs-keyword\">break</span>;
      <span class=\"hljs-keyword\">case</span> <span class=\"hljs-string\">'parsleyField'</span>:
        parsleyInstance = \$.extend(
          <span class=\"hljs-keyword\">new</span> Field(<span class=\"hljs-keyword\">this</span>.element, <span class=\"hljs-keyword\">this</span>.domOptions, <span class=\"hljs-keyword\">this</span>.options, <span class=\"hljs-keyword\">this</span>.parent),
          <span class=\"hljs-keyword\">new</span> Base(),
          <span class=\"hljs-built_in\">window</span>.ParsleyExtend
        );
        <span class=\"hljs-keyword\">break</span>;
      <span class=\"hljs-keyword\">case</span> <span class=\"hljs-string\">'parsleyFieldMultiple'</span>:
        parsleyInstance = \$.extend(
          <span class=\"hljs-keyword\">new</span> Field(<span class=\"hljs-keyword\">this</span>.element, <span class=\"hljs-keyword\">this</span>.domOptions, <span class=\"hljs-keyword\">this</span>.options, <span class=\"hljs-keyword\">this</span>.parent),
          <span class=\"hljs-keyword\">new</span> Multiple(),
          <span class=\"hljs-keyword\">new</span> Base(),
          <span class=\"hljs-built_in\">window</span>.ParsleyExtend
        )._init();
        <span class=\"hljs-keyword\">break</span>;
      <span class=\"hljs-keyword\">default</span>:
        <span class=\"hljs-keyword\">throw</span> <span class=\"hljs-keyword\">new</span> <span class=\"hljs-built_in\">Error</span>(type + <span class=\"hljs-string\">'is not a supported Parsley type'</span>);
    }

    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-keyword\">this</span>.options.multiple)
      Utils.setAttr(<span class=\"hljs-keyword\">this</span>.element, <span class=\"hljs-keyword\">this</span>.options.namespace, <span class=\"hljs-string\">'multiple'</span>, <span class=\"hljs-keyword\">this</span>.options.multiple);

    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-string\">'undefined'</span> !== <span class=\"hljs-keyword\">typeof</span> doNotStore) {
      <span class=\"hljs-keyword\">this</span>.\$element.data(<span class=\"hljs-string\">'FieldMultiple'</span>, parsleyInstance);

      <span class=\"hljs-keyword\">return</span> parsleyInstance;
    }</pre></div></div>
            
        </li>
        
        
        <li id=\"section-17\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-17\">&#182;</a>
              </div>
              <p>Store the freshly bound instance in a DOM element for later access using jQuery <code>data()</code></p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">this</span>.\$element.data(<span class=\"hljs-string\">'Parsley'</span>, parsleyInstance);</pre></div></div>
            
        </li>
        
        
        <li id=\"section-18\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-18\">&#182;</a>
              </div>
              <p>Tell the world we have a new Form or Field instance!</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    parsleyInstance._actualizeTriggers();
    parsleyInstance._trigger(<span class=\"hljs-string\">'init'</span>);

    <span class=\"hljs-keyword\">return</span> parsleyInstance;
  }
};

<span class=\"hljs-keyword\">export</span> <span class=\"hljs-keyword\">default</span> Factory;</pre></div></div>
            
        </li>
        
    </ul>
  </div>
<script>var _gaq=_gaq||[];_gaq.push([\"_setAccount\",\"UA-37229467-1\"]);_gaq.push([\"_trackPageview\"]);(function(){var e=document.createElement(\"script\");e.type=\"text/javascript\";e.async=true;e.src=(\"https:\"==document.location.protocol?\"https://ssl\":\"http://www\")+\".google-analytics.com/ga.js\";var t=document.getElementsByTagName(\"script\")[0];t.parentNode.insertBefore(e,t)})();</script></body>
</html>
";
        
        $__internal_b4cb6acdc3056fbd6867160ad1e63b5c403318c4d7185f8b6b841abaa870f953->leave($__internal_b4cb6acdc3056fbd6867160ad1e63b5c403318c4d7185f8b6b841abaa870f953_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/doc/annotated-source/factory.html";
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
  <title>factory.js</title>
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
                  <h1>factory.js</h1>
              </div>
          </li>
        
        
        
        <li id=\"section-1\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-1\">&#182;</a>
              </div>
              
            </div>
            
            <div class=\"content\"><div class='highlight'><pre><span class=\"hljs-keyword\">import</span> \$ <span class=\"hljs-keyword\">from</span> <span class=\"hljs-string\">'jquery'</span>;
<span class=\"hljs-keyword\">import</span> Utils <span class=\"hljs-keyword\">from</span> <span class=\"hljs-string\">'./utils'</span>;
<span class=\"hljs-keyword\">import</span> Base <span class=\"hljs-keyword\">from</span> <span class=\"hljs-string\">'./base'</span>;
<span class=\"hljs-keyword\">import</span> Form <span class=\"hljs-keyword\">from</span> <span class=\"hljs-string\">'./form'</span>;
<span class=\"hljs-keyword\">import</span> Field <span class=\"hljs-keyword\">from</span> <span class=\"hljs-string\">'./field'</span>;
<span class=\"hljs-keyword\">import</span> Multiple <span class=\"hljs-keyword\">from</span> <span class=\"hljs-string\">'./multiple'</span>;

<span class=\"hljs-keyword\">var</span> Factory = <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">element, options, parsleyFormInstance</span>) </span>{
  <span class=\"hljs-keyword\">this</span>.element = element;
  <span class=\"hljs-keyword\">this</span>.\$element = \$(element);</pre></div></div>
            
        </li>
        
        
        <li id=\"section-2\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-2\">&#182;</a>
              </div>
              <p>If the element has already been bound, returns its saved Parsley instance</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  <span class=\"hljs-keyword\">var</span> savedparsleyFormInstance = <span class=\"hljs-keyword\">this</span>.\$element.data(<span class=\"hljs-string\">'Parsley'</span>);
  <span class=\"hljs-keyword\">if</span> (savedparsleyFormInstance) {</pre></div></div>
            
        </li>
        
        
        <li id=\"section-3\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-3\">&#182;</a>
              </div>
              <p>If the saved instance has been bound without a Form parent and there is one given in this call, add it</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-string\">'undefined'</span> !== <span class=\"hljs-keyword\">typeof</span> parsleyFormInstance &amp;&amp; savedparsleyFormInstance.parent === <span class=\"hljs-built_in\">window</span>.Parsley) {
      savedparsleyFormInstance.parent = parsleyFormInstance;
      savedparsleyFormInstance._resetOptions(savedparsleyFormInstance.options);
    }

    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-string\">'object'</span> === <span class=\"hljs-keyword\">typeof</span> options) {
      <span class=\"hljs-built_in\">Object</span>.assign(savedparsleyFormInstance.options, options);
    }

    <span class=\"hljs-keyword\">return</span> savedparsleyFormInstance;
  }</pre></div></div>
            
        </li>
        
        
        <li id=\"section-4\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-4\">&#182;</a>
              </div>
              <p>Parsley must be instantiated with a DOM element or jQuery \$element</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  <span class=\"hljs-keyword\">if</span> (!<span class=\"hljs-keyword\">this</span>.\$element.length)
    <span class=\"hljs-keyword\">throw</span> <span class=\"hljs-keyword\">new</span> <span class=\"hljs-built_in\">Error</span>(<span class=\"hljs-string\">'You must bind Parsley on an existing element.'</span>);

  <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-string\">'undefined'</span> !== <span class=\"hljs-keyword\">typeof</span> parsleyFormInstance &amp;&amp; <span class=\"hljs-string\">'Form'</span> !== parsleyFormInstance.__class__)
    <span class=\"hljs-keyword\">throw</span> <span class=\"hljs-keyword\">new</span> <span class=\"hljs-built_in\">Error</span>(<span class=\"hljs-string\">'Parent instance must be a Form instance'</span>);

  <span class=\"hljs-keyword\">this</span>.parent = parsleyFormInstance || <span class=\"hljs-built_in\">window</span>.Parsley;
  <span class=\"hljs-keyword\">return</span> <span class=\"hljs-keyword\">this</span>.init(options);
};

Factory.prototype = {
  <span class=\"hljs-attr\">init</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">options</span>) </span>{
    <span class=\"hljs-keyword\">this</span>.__class__ = <span class=\"hljs-string\">'Parsley'</span>;
    <span class=\"hljs-keyword\">this</span>.__version__ = <span class=\"hljs-string\">'@@version'</span>;
    <span class=\"hljs-keyword\">this</span>.__id__ = Utils.generateID();</pre></div></div>
            
        </li>
        
        
        <li id=\"section-5\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-5\">&#182;</a>
              </div>
              <p>Pre-compute options</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">this</span>._resetOptions(options);</pre></div></div>
            
        </li>
        
        
        <li id=\"section-6\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-6\">&#182;</a>
              </div>
              <p>A Form instance is obviously a <code>&lt;form&gt;</code> element but also every node that is not an input and has the <code>data-parsley-validate</code> attribute</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-keyword\">this</span>.element.nodeName === <span class=\"hljs-string\">'FORM'</span> || (Utils.checkAttr(<span class=\"hljs-keyword\">this</span>.element, <span class=\"hljs-keyword\">this</span>.options.namespace, <span class=\"hljs-string\">'validate'</span>) &amp;&amp; !<span class=\"hljs-keyword\">this</span>.\$element.is(<span class=\"hljs-keyword\">this</span>.options.inputs)))
      <span class=\"hljs-keyword\">return</span> <span class=\"hljs-keyword\">this</span>.bind(<span class=\"hljs-string\">'parsleyForm'</span>);</pre></div></div>
            
        </li>
        
        
        <li id=\"section-7\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-7\">&#182;</a>
              </div>
              <p>Every other element is bound as a <code>Field</code> or <code>FieldMultiple</code></p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">return</span> <span class=\"hljs-keyword\">this</span>.isMultiple() ? <span class=\"hljs-keyword\">this</span>.handleMultiple() : <span class=\"hljs-keyword\">this</span>.bind(<span class=\"hljs-string\">'parsleyField'</span>);
  },

  <span class=\"hljs-attr\">isMultiple</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\"></span>) </span>{
    <span class=\"hljs-keyword\">return</span> ((<span class=\"hljs-keyword\">this</span>.element.type === <span class=\"hljs-string\">'radio'</span> || <span class=\"hljs-keyword\">this</span>.element.type === <span class=\"hljs-string\">'checkbox'</span>) ||
      (<span class=\"hljs-keyword\">this</span>.element.nodeName === <span class=\"hljs-string\">'SELECT'</span> &amp;&amp; <span class=\"hljs-literal\">null</span> !== <span class=\"hljs-keyword\">this</span>.element.getAttribute(<span class=\"hljs-string\">'multiple'</span>)));
  },</pre></div></div>
            
        </li>
        
        
        <li id=\"section-8\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-8\">&#182;</a>
              </div>
              <p>Multiples fields are a real nightmare :(
Maybe some refactoring would be appreciated here…</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  handleMultiple: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\"></span>) </span>{
    <span class=\"hljs-keyword\">var</span> name;
    <span class=\"hljs-keyword\">var</span> multiple;
    <span class=\"hljs-keyword\">var</span> parsleyMultipleInstance;</pre></div></div>
            
        </li>
        
        
        <li id=\"section-9\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-9\">&#182;</a>
              </div>
              <p>Handle multiple name</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">this</span>.options.multiple = <span class=\"hljs-keyword\">this</span>.options.multiple ||
      (name = <span class=\"hljs-keyword\">this</span>.element.getAttribute(<span class=\"hljs-string\">'name'</span>)) ||
      <span class=\"hljs-keyword\">this</span>.element.getAttribute(<span class=\"hljs-string\">'id'</span>);</pre></div></div>
            
        </li>
        
        
        <li id=\"section-10\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-10\">&#182;</a>
              </div>
              <p>Special select multiple input</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-keyword\">this</span>.element.nodeName === <span class=\"hljs-string\">'SELECT'</span> &amp;&amp; <span class=\"hljs-literal\">null</span> !== <span class=\"hljs-keyword\">this</span>.element.getAttribute(<span class=\"hljs-string\">'multiple'</span>)) {
      <span class=\"hljs-keyword\">this</span>.options.multiple = <span class=\"hljs-keyword\">this</span>.options.multiple || <span class=\"hljs-keyword\">this</span>.__id__;
      <span class=\"hljs-keyword\">return</span> <span class=\"hljs-keyword\">this</span>.bind(<span class=\"hljs-string\">'parsleyFieldMultiple'</span>);</pre></div></div>
            
        </li>
        
        
        <li id=\"section-11\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-11\">&#182;</a>
              </div>
              <p>Else for radio / checkboxes, we need a <code>name</code> or <code>data-parsley-multiple</code> to properly bind it</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    } <span class=\"hljs-keyword\">else</span> <span class=\"hljs-keyword\">if</span> (!<span class=\"hljs-keyword\">this</span>.options.multiple) {
      Utils.warn(<span class=\"hljs-string\">'To be bound by Parsley, a radio, a checkbox and a multiple select input must have either a name or a multiple option.'</span>, <span class=\"hljs-keyword\">this</span>.\$element);
      <span class=\"hljs-keyword\">return</span> <span class=\"hljs-keyword\">this</span>;
    }</pre></div></div>
            
        </li>
        
        
        <li id=\"section-12\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-12\">&#182;</a>
              </div>
              <p>Remove special chars</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">this</span>.options.multiple = <span class=\"hljs-keyword\">this</span>.options.multiple.replace(<span class=\"hljs-regexp\">/(:|\\.|\\[|\\]|\\{|\\}|\\\$)/g</span>, <span class=\"hljs-string\">''</span>);</pre></div></div>
            
        </li>
        
        
        <li id=\"section-13\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-13\">&#182;</a>
              </div>
              <p>Add proper <code>data-parsley-multiple</code> to siblings if we have a valid multiple name</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">if</span> (name) {
      \$(<span class=\"hljs-string\">'input[name=\"'</span> + name + <span class=\"hljs-string\">'\"]'</span>).each(<span class=\"hljs-function\">(<span class=\"hljs-params\">i, input</span>) =&gt;</span> {
        <span class=\"hljs-keyword\">if</span> ((input.type === <span class=\"hljs-string\">'radio'</span> || input.type === <span class=\"hljs-string\">'checkbox'</span>))
          input.setAttribute(<span class=\"hljs-keyword\">this</span>.options.namespace + <span class=\"hljs-string\">'multiple'</span>, <span class=\"hljs-keyword\">this</span>.options.multiple);
      });
    }</pre></div></div>
            
        </li>
        
        
        <li id=\"section-14\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-14\">&#182;</a>
              </div>
              <p>Check here if we don’t already have a related multiple instance saved</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">var</span> \$previouslyRelated = <span class=\"hljs-keyword\">this</span>._findRelated();
    <span class=\"hljs-keyword\">for</span> (<span class=\"hljs-keyword\">var</span> i = <span class=\"hljs-number\">0</span>; i &lt; \$previouslyRelated.length; i++) {
      parsleyMultipleInstance = \$(\$previouslyRelated.get(i)).data(<span class=\"hljs-string\">'Parsley'</span>);
      <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-string\">'undefined'</span> !== <span class=\"hljs-keyword\">typeof</span> parsleyMultipleInstance) {

        <span class=\"hljs-keyword\">if</span> (!<span class=\"hljs-keyword\">this</span>.\$element.data(<span class=\"hljs-string\">'FieldMultiple'</span>)) {
          parsleyMultipleInstance.addElement(<span class=\"hljs-keyword\">this</span>.\$element);
        }

        <span class=\"hljs-keyword\">break</span>;
      }
    }</pre></div></div>
            
        </li>
        
        
        <li id=\"section-15\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-15\">&#182;</a>
              </div>
              <p>Create a secret Field instance for every multiple field. It will be stored in <code>data(&#39;FieldMultiple&#39;)</code>
And will be useful later to access classic <code>Field</code> stuff while being in a <code>FieldMultiple</code> instance</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">this</span>.bind(<span class=\"hljs-string\">'parsleyField'</span>, <span class=\"hljs-literal\">true</span>);

    <span class=\"hljs-keyword\">return</span> parsleyMultipleInstance || <span class=\"hljs-keyword\">this</span>.bind(<span class=\"hljs-string\">'parsleyFieldMultiple'</span>);
  },</pre></div></div>
            
        </li>
        
        
        <li id=\"section-16\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-16\">&#182;</a>
              </div>
              <p>Return proper <code>Form</code>, <code>Field</code> or <code>FieldMultiple</code></p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  bind: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">type, doNotStore</span>) </span>{
    <span class=\"hljs-keyword\">var</span> parsleyInstance;

    <span class=\"hljs-keyword\">switch</span> (type) {
      <span class=\"hljs-keyword\">case</span> <span class=\"hljs-string\">'parsleyForm'</span>:
        parsleyInstance = \$.extend(
          <span class=\"hljs-keyword\">new</span> Form(<span class=\"hljs-keyword\">this</span>.element, <span class=\"hljs-keyword\">this</span>.domOptions, <span class=\"hljs-keyword\">this</span>.options),
          <span class=\"hljs-keyword\">new</span> Base(),
          <span class=\"hljs-built_in\">window</span>.ParsleyExtend
        )._bindFields();
        <span class=\"hljs-keyword\">break</span>;
      <span class=\"hljs-keyword\">case</span> <span class=\"hljs-string\">'parsleyField'</span>:
        parsleyInstance = \$.extend(
          <span class=\"hljs-keyword\">new</span> Field(<span class=\"hljs-keyword\">this</span>.element, <span class=\"hljs-keyword\">this</span>.domOptions, <span class=\"hljs-keyword\">this</span>.options, <span class=\"hljs-keyword\">this</span>.parent),
          <span class=\"hljs-keyword\">new</span> Base(),
          <span class=\"hljs-built_in\">window</span>.ParsleyExtend
        );
        <span class=\"hljs-keyword\">break</span>;
      <span class=\"hljs-keyword\">case</span> <span class=\"hljs-string\">'parsleyFieldMultiple'</span>:
        parsleyInstance = \$.extend(
          <span class=\"hljs-keyword\">new</span> Field(<span class=\"hljs-keyword\">this</span>.element, <span class=\"hljs-keyword\">this</span>.domOptions, <span class=\"hljs-keyword\">this</span>.options, <span class=\"hljs-keyword\">this</span>.parent),
          <span class=\"hljs-keyword\">new</span> Multiple(),
          <span class=\"hljs-keyword\">new</span> Base(),
          <span class=\"hljs-built_in\">window</span>.ParsleyExtend
        )._init();
        <span class=\"hljs-keyword\">break</span>;
      <span class=\"hljs-keyword\">default</span>:
        <span class=\"hljs-keyword\">throw</span> <span class=\"hljs-keyword\">new</span> <span class=\"hljs-built_in\">Error</span>(type + <span class=\"hljs-string\">'is not a supported Parsley type'</span>);
    }

    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-keyword\">this</span>.options.multiple)
      Utils.setAttr(<span class=\"hljs-keyword\">this</span>.element, <span class=\"hljs-keyword\">this</span>.options.namespace, <span class=\"hljs-string\">'multiple'</span>, <span class=\"hljs-keyword\">this</span>.options.multiple);

    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-string\">'undefined'</span> !== <span class=\"hljs-keyword\">typeof</span> doNotStore) {
      <span class=\"hljs-keyword\">this</span>.\$element.data(<span class=\"hljs-string\">'FieldMultiple'</span>, parsleyInstance);

      <span class=\"hljs-keyword\">return</span> parsleyInstance;
    }</pre></div></div>
            
        </li>
        
        
        <li id=\"section-17\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-17\">&#182;</a>
              </div>
              <p>Store the freshly bound instance in a DOM element for later access using jQuery <code>data()</code></p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">this</span>.\$element.data(<span class=\"hljs-string\">'Parsley'</span>, parsleyInstance);</pre></div></div>
            
        </li>
        
        
        <li id=\"section-18\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-18\">&#182;</a>
              </div>
              <p>Tell the world we have a new Form or Field instance!</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    parsleyInstance._actualizeTriggers();
    parsleyInstance._trigger(<span class=\"hljs-string\">'init'</span>);

    <span class=\"hljs-keyword\">return</span> parsleyInstance;
  }
};

<span class=\"hljs-keyword\">export</span> <span class=\"hljs-keyword\">default</span> Factory;</pre></div></div>
            
        </li>
        
    </ul>
  </div>
<script>var _gaq=_gaq||[];_gaq.push([\"_setAccount\",\"UA-37229467-1\"]);_gaq.push([\"_trackPageview\"]);(function(){var e=document.createElement(\"script\");e.type=\"text/javascript\";e.async=true;e.src=(\"https:\"==document.location.protocol?\"https://ssl\":\"http://www\")+\".google-analytics.com/ga.js\";var t=document.getElementsByTagName(\"script\")[0];t.parentNode.insertBefore(e,t)})();</script></body>
</html>
", "node_modules/parsleyjs/doc/annotated-source/factory.html", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/doc/annotated-source/factory.html");
    }
}
