<?php

/* node_modules/parsleyjs/doc/annotated-source/validator_registry.html */
class __TwigTemplate_494947539d3cbe501246c13d2b4c0496b50e5971cb0880fbd189a8da5ab4cf67 extends Twig_Template
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
        $__internal_cab0d60f549ca90ad975e91097d8f1a87aa4f2ca9f073a8b1f2e0f63efca0229 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cab0d60f549ca90ad975e91097d8f1a87aa4f2ca9f073a8b1f2e0f63efca0229->enter($__internal_cab0d60f549ca90ad975e91097d8f1a87aa4f2ca9f073a8b1f2e0f63efca0229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/doc/annotated-source/validator_registry.html"));

        // line 1
        echo "<!DOCTYPE html>

<html>
<head>
  <title>validator_registry.js</title>
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
                  <h1>validator_registry.js</h1>
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
<span class=\"hljs-keyword\">import</span> Defaults <span class=\"hljs-keyword\">from</span> <span class=\"hljs-string\">'./defaults'</span>;
<span class=\"hljs-keyword\">import</span> Validator <span class=\"hljs-keyword\">from</span> <span class=\"hljs-string\">'./validator'</span>;

<span class=\"hljs-keyword\">var</span> ValidatorRegistry = <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">validators, catalog</span>) </span>{
  <span class=\"hljs-keyword\">this</span>.__class__ = <span class=\"hljs-string\">'ValidatorRegistry'</span>;</pre></div></div>
            
        </li>
        
        
        <li id=\"section-2\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-2\">&#182;</a>
              </div>
              <p>Default Parsley locale is en</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  <span class=\"hljs-keyword\">this</span>.locale = <span class=\"hljs-string\">'en'</span>;

  <span class=\"hljs-keyword\">this</span>.init(validators || {}, catalog || {});
};

<span class=\"hljs-keyword\">var</span> typeTesters =  {
  <span class=\"hljs-attr\">email</span>: <span class=\"hljs-regexp\">/^((([a-z]|\\d|[!#\\\$%&amp;'\\*\\+\\-\\/=\\?\\^_`{\\|}~]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])+(\\.([a-z]|\\d|[!#\\\$%&amp;'\\*\\+\\-\\/=\\?\\^_`{\\|}~]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])+)*)|((\\x22)((((\\x20|\\x09)*(\\x0d\\x0a))?(\\x20|\\x09)+)?(([\\x01-\\x08\\x0b\\x0c\\x0e-\\x1f\\x7f]|\\x21|[\\x23-\\x5b]|[\\x5d-\\x7e]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])|(\\\\([\\x01-\\x09\\x0b\\x0c\\x0d-\\x7f]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF]))))*(((\\x20|\\x09)*(\\x0d\\x0a))?(\\x20|\\x09)+)?(\\x22)))@((([a-z]|\\d|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])|(([a-z]|\\d|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])([a-z]|\\d|-|\\.|_|~|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])*([a-z]|\\d|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])))\\.)+(([a-z]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])|(([a-z]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])([a-z]|\\d|-|\\.|_|~|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])*([a-z]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])))\$/i</span>,</pre></div></div>
            
        </li>
        
        
        <li id=\"section-3\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-3\">&#182;</a>
              </div>
              <p>Follow <a href=\"https://www.w3.org/TR/html5/infrastructure.html#floating-point-numbers\">https://www.w3.org/TR/html5/infrastructure.html#floating-point-numbers</a></p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  number: <span class=\"hljs-regexp\">/^-?(\\d*\\.)?\\d+(e[-+]?\\d+)?\$/i</span>,

  <span class=\"hljs-attr\">integer</span>: <span class=\"hljs-regexp\">/^-?\\d+\$/</span>,

  <span class=\"hljs-attr\">digits</span>: <span class=\"hljs-regexp\">/^\\d+\$/</span>,

  <span class=\"hljs-attr\">alphanum</span>: <span class=\"hljs-regexp\">/^\\w+\$/i</span>,

  <span class=\"hljs-attr\">date</span>: {
    <span class=\"hljs-attr\">test</span>: <span class=\"hljs-function\"><span class=\"hljs-params\">value</span> =&gt;</span> Utils.parse.date(value) !== <span class=\"hljs-literal\">null</span>
  },

  <span class=\"hljs-attr\">url</span>: <span class=\"hljs-keyword\">new</span> <span class=\"hljs-built_in\">RegExp</span>(
      <span class=\"hljs-string\">\"^\"</span> +</pre></div></div>
            
        </li>
        
        
        <li id=\"section-4\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-4\">&#182;</a>
              </div>
              <p>protocol identifier</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>        <span class=\"hljs-string\">\"(?:(?:https?|ftp)://)?\"</span> + <span class=\"hljs-comment\">// ** mod: make scheme optional</span></pre></div></div>
            
        </li>
        
        
        <li id=\"section-5\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-5\">&#182;</a>
              </div>
              <p>user:pass authentication</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>        <span class=\"hljs-string\">\"(?:\\\\S+(?::\\\\S*)?@)?\"</span> +
        <span class=\"hljs-string\">\"(?:\"</span> +</pre></div></div>
            
        </li>
        
        
        <li id=\"section-6\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-6\">&#182;</a>
              </div>
              <p>IP address exclusion
private &amp; local networks
“(?!(?:10|127)(?:\\.\\d{1,3}){3})” +   // <strong> mod: allow local networks
“(?!(?:169\\.254|192\\.168)(?:\\.\\d{1,3}){2})” +  // </strong> mod: allow local networks
“(?!172\\.(?:1[6-9]|2\\d|3[0-1])(?:\\.\\d{1,3}){2})” +  // ** mod: allow local networks
IP address dotted notation octets
excludes loopback network 0.0.0.0
excludes reserved space &gt;= 224.0.0.0
excludes network &amp; broacast addresses
(first &amp; last IP address of each class)</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>          <span class=\"hljs-string\">\"(?:[1-9]\\\\d?|1\\\\d\\\\d|2[01]\\\\d|22[0-3])\"</span> +
          <span class=\"hljs-string\">\"(?:\\\\.(?:1?\\\\d{1,2}|2[0-4]\\\\d|25[0-5])){2}\"</span> +
          <span class=\"hljs-string\">\"(?:\\\\.(?:[1-9]\\\\d?|1\\\\d\\\\d|2[0-4]\\\\d|25[0-4]))\"</span> +
        <span class=\"hljs-string\">\"|\"</span> +</pre></div></div>
            
        </li>
        
        
        <li id=\"section-7\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-7\">&#182;</a>
              </div>
              <p>host name</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>          <span class=\"hljs-string\">\"(?:(?:[a-z\\\\u00a1-\\\\uffff0-9]-*)*[a-z\\\\u00a1-\\\\uffff0-9]+)\"</span> +</pre></div></div>
            
        </li>
        
        
        <li id=\"section-8\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-8\">&#182;</a>
              </div>
              <p>domain name</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>          <span class=\"hljs-string\">\"(?:\\\\.(?:[a-z\\\\u00a1-\\\\uffff0-9]-*)*[a-z\\\\u00a1-\\\\uffff0-9]+)*\"</span> +</pre></div></div>
            
        </li>
        
        
        <li id=\"section-9\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-9\">&#182;</a>
              </div>
              <p>TLD identifier</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>          <span class=\"hljs-string\">\"(?:\\\\.(?:[a-z\\\\u00a1-\\\\uffff]{2,}))\"</span> +
        <span class=\"hljs-string\">\")\"</span> +</pre></div></div>
            
        </li>
        
        
        <li id=\"section-10\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-10\">&#182;</a>
              </div>
              <p>port number</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>        <span class=\"hljs-string\">\"(?::\\\\d{2,5})?\"</span> +</pre></div></div>
            
        </li>
        
        
        <li id=\"section-11\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-11\">&#182;</a>
              </div>
              <p>resource path</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>        <span class=\"hljs-string\">\"(?:/\\\\S*)?\"</span> +
      <span class=\"hljs-string\">\"\$\"</span>, <span class=\"hljs-string\">'i'</span>
    )
};
typeTesters.range = typeTesters.number;</pre></div></div>
            
        </li>
        
        
        <li id=\"section-12\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-12\">&#182;</a>
              </div>
              <p>See <a href=\"http://stackoverflow.com/a/10454560/8279\">http://stackoverflow.com/a/10454560/8279</a></p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre><span class=\"hljs-keyword\">var</span> decimalPlaces = <span class=\"hljs-function\"><span class=\"hljs-params\">num</span> =&gt;</span> {
  <span class=\"hljs-keyword\">var</span> match = (<span class=\"hljs-string\">''</span> + num).match(<span class=\"hljs-regexp\">/(?:\\.(\\d+))?(?:[eE]([+-]?\\d+))?\$/</span>);
  <span class=\"hljs-keyword\">if</span> (!match) { <span class=\"hljs-keyword\">return</span> <span class=\"hljs-number\">0</span>; }
  <span class=\"hljs-keyword\">return</span> <span class=\"hljs-built_in\">Math</span>.max(
       <span class=\"hljs-number\">0</span>,</pre></div></div>
            
        </li>
        
        
        <li id=\"section-13\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-13\">&#182;</a>
              </div>
              <p>Number of digits right of decimal point.</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>       (match[<span class=\"hljs-number\">1</span>] ? match[<span class=\"hljs-number\">1</span>].length : <span class=\"hljs-number\">0</span>) -</pre></div></div>
            
        </li>
        
        
        <li id=\"section-14\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-14\">&#182;</a>
              </div>
              <p>Adjust for scientific notation.</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>       (match[<span class=\"hljs-number\">2</span>] ? +match[<span class=\"hljs-number\">2</span>] : <span class=\"hljs-number\">0</span>));
};</pre></div></div>
            
        </li>
        
        
        <li id=\"section-15\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-15\">&#182;</a>
              </div>
              <p>parseArguments(‘number’, [‘1’, ‘2’]) =&gt; [1, 2]</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre><span class=\"hljs-keyword\">let</span> parseArguments = <span class=\"hljs-function\">(<span class=\"hljs-params\">type, args</span>) =&gt;</span> args.map(Utils.parse[type]);</pre></div></div>
            
        </li>
        
        
        <li id=\"section-16\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-16\">&#182;</a>
              </div>
              <p>operatorToValidator returns a validating function for an operator function, applied to the given type</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre><span class=\"hljs-keyword\">let</span> operatorToValidator = <span class=\"hljs-function\">(<span class=\"hljs-params\">type, operator</span>) =&gt;</span> {
  <span class=\"hljs-keyword\">return</span> <span class=\"hljs-function\">(<span class=\"hljs-params\">value, ...requirementsAndInput</span>) =&gt;</span> {
    requirementsAndInput.pop(); <span class=\"hljs-comment\">// Get rid of `input` argument</span>
    <span class=\"hljs-keyword\">return</span> operator(value, ...parseArguments(type, requirementsAndInput));
  };
};

<span class=\"hljs-keyword\">let</span> comparisonOperator = <span class=\"hljs-function\"><span class=\"hljs-params\">operator</span> =&gt;</span> ({
  <span class=\"hljs-attr\">validateDate</span>: operatorToValidator(<span class=\"hljs-string\">'date'</span>, operator),
  <span class=\"hljs-attr\">validateNumber</span>: operatorToValidator(<span class=\"hljs-string\">'number'</span>, operator),
  <span class=\"hljs-attr\">requirementType</span>: operator.length &lt;= <span class=\"hljs-number\">2</span> ? <span class=\"hljs-string\">'string'</span> : [<span class=\"hljs-string\">'string'</span>, <span class=\"hljs-string\">'string'</span>], <span class=\"hljs-comment\">// Support operators with a 1 or 2 requirement(s)</span>
  priority: <span class=\"hljs-number\">30</span>
});

ValidatorRegistry.prototype = {
  <span class=\"hljs-attr\">init</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">validators, catalog</span>) </span>{
    <span class=\"hljs-keyword\">this</span>.catalog = catalog;</pre></div></div>
            
        </li>
        
        
        <li id=\"section-17\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-17\">&#182;</a>
              </div>
              <p>Copy prototype’s validators:</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">this</span>.validators = <span class=\"hljs-built_in\">Object</span>.assign({}, <span class=\"hljs-keyword\">this</span>.validators);

    <span class=\"hljs-keyword\">for</span> (<span class=\"hljs-keyword\">var</span> name <span class=\"hljs-keyword\">in</span> validators)
      <span class=\"hljs-keyword\">this</span>.addValidator(name, validators[name].fn, validators[name].priority);

    <span class=\"hljs-built_in\">window</span>.Parsley.trigger(<span class=\"hljs-string\">'parsley:validator:init'</span>);
  },</pre></div></div>
            
        </li>
        
        
        <li id=\"section-18\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-18\">&#182;</a>
              </div>
              <p>Set new messages locale if we have dictionary loaded in ParsleyConfig.i18n</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  setLocale: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">locale</span>) </span>{
    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-string\">'undefined'</span> === <span class=\"hljs-keyword\">typeof</span> <span class=\"hljs-keyword\">this</span>.catalog[locale])
      <span class=\"hljs-keyword\">throw</span> <span class=\"hljs-keyword\">new</span> <span class=\"hljs-built_in\">Error</span>(locale + <span class=\"hljs-string\">' is not available in the catalog'</span>);

    <span class=\"hljs-keyword\">this</span>.locale = locale;

    <span class=\"hljs-keyword\">return</span> <span class=\"hljs-keyword\">this</span>;
  },</pre></div></div>
            
        </li>
        
        
        <li id=\"section-19\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-19\">&#182;</a>
              </div>
              <p>Add a new messages catalog for a given locale. Set locale for this catalog if set === <code>true</code></p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  addCatalog: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">locale, messages, set</span>) </span>{
    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-string\">'object'</span> === <span class=\"hljs-keyword\">typeof</span> messages)
      <span class=\"hljs-keyword\">this</span>.catalog[locale] = messages;

    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-literal\">true</span> === set)
      <span class=\"hljs-keyword\">return</span> <span class=\"hljs-keyword\">this</span>.setLocale(locale);

    <span class=\"hljs-keyword\">return</span> <span class=\"hljs-keyword\">this</span>;
  },</pre></div></div>
            
        </li>
        
        
        <li id=\"section-20\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-20\">&#182;</a>
              </div>
              <p>Add a specific message for a given constraint in a given locale</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  addMessage: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">locale, name, message</span>) </span>{
    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-string\">'undefined'</span> === <span class=\"hljs-keyword\">typeof</span> <span class=\"hljs-keyword\">this</span>.catalog[locale])
      <span class=\"hljs-keyword\">this</span>.catalog[locale] = {};

    <span class=\"hljs-keyword\">this</span>.catalog[locale][name] = message;

    <span class=\"hljs-keyword\">return</span> <span class=\"hljs-keyword\">this</span>;
  },</pre></div></div>
            
        </li>
        
        
        <li id=\"section-21\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-21\">&#182;</a>
              </div>
              <p>Add messages for a given locale</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  addMessages: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">locale, nameMessageObject</span>) </span>{
    <span class=\"hljs-keyword\">for</span> (<span class=\"hljs-keyword\">var</span> name <span class=\"hljs-keyword\">in</span> nameMessageObject)
      <span class=\"hljs-keyword\">this</span>.addMessage(locale, name, nameMessageObject[name]);

    <span class=\"hljs-keyword\">return</span> <span class=\"hljs-keyword\">this</span>;
  },</pre></div></div>
            
        </li>
        
        
        <li id=\"section-22\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-22\">&#182;</a>
              </div>
              <p>Add a new validator</p>
<p>   addValidator(‘custom’, {
       requirementType: [‘integer’, ‘integer’],
       validateString: function(value, from, to) {},
       priority: 22,
       messages: {
         en: “Hey, that’s no good”,
         fr: “Aye aye, pas bon du tout”,
       }
   })</p>
<p>Old API was addValidator(name, function, priority)</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  addValidator: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">name, arg1, arg2</span>) </span>{
    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-keyword\">this</span>.validators[name])
      Utils.warn(<span class=\"hljs-string\">'Validator \"'</span> + name + <span class=\"hljs-string\">'\" is already defined.'</span>);
    <span class=\"hljs-keyword\">else</span> <span class=\"hljs-keyword\">if</span> (Defaults.hasOwnProperty(name)) {
      Utils.warn(<span class=\"hljs-string\">'\"'</span> + name + <span class=\"hljs-string\">'\" is a restricted keyword and is not a valid validator name.'</span>);
      <span class=\"hljs-keyword\">return</span>;
    }
    <span class=\"hljs-keyword\">return</span> <span class=\"hljs-keyword\">this</span>._setValidator(...arguments);
  },

  <span class=\"hljs-attr\">updateValidator</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">name, arg1, arg2</span>) </span>{
    <span class=\"hljs-keyword\">if</span> (!<span class=\"hljs-keyword\">this</span>.validators[name]) {
      Utils.warn(<span class=\"hljs-string\">'Validator \"'</span> + name + <span class=\"hljs-string\">'\" is not already defined.'</span>);
      <span class=\"hljs-keyword\">return</span> <span class=\"hljs-keyword\">this</span>.addValidator(...arguments);
    }
    <span class=\"hljs-keyword\">return</span> <span class=\"hljs-keyword\">this</span>._setValidator(...arguments);
  },

  <span class=\"hljs-attr\">removeValidator</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">name</span>) </span>{
    <span class=\"hljs-keyword\">if</span> (!<span class=\"hljs-keyword\">this</span>.validators[name])
      Utils.warn(<span class=\"hljs-string\">'Validator \"'</span> + name + <span class=\"hljs-string\">'\" is not defined.'</span>);

    <span class=\"hljs-keyword\">delete</span> <span class=\"hljs-keyword\">this</span>.validators[name];

    <span class=\"hljs-keyword\">return</span> <span class=\"hljs-keyword\">this</span>;
  },

  <span class=\"hljs-attr\">_setValidator</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">name, validator, priority</span>) </span>{
    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-string\">'object'</span> !== <span class=\"hljs-keyword\">typeof</span> validator) {</pre></div></div>
            
        </li>
        
        
        <li id=\"section-23\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-23\">&#182;</a>
              </div>
              <p>Old style validator, with <code>fn</code> and <code>priority</code></p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>      validator = {
        <span class=\"hljs-attr\">fn</span>: validator,
        <span class=\"hljs-attr\">priority</span>: priority
      };
    }
    <span class=\"hljs-keyword\">if</span> (!validator.validate) {
      validator = <span class=\"hljs-keyword\">new</span> Validator(validator);
    }
    <span class=\"hljs-keyword\">this</span>.validators[name] = validator;

    <span class=\"hljs-keyword\">for</span> (<span class=\"hljs-keyword\">var</span> locale <span class=\"hljs-keyword\">in</span> validator.messages || {})
      <span class=\"hljs-keyword\">this</span>.addMessage(locale, name, validator.messages[locale]);

    <span class=\"hljs-keyword\">return</span> <span class=\"hljs-keyword\">this</span>;
  },

  <span class=\"hljs-attr\">getErrorMessage</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">constraint</span>) </span>{
    <span class=\"hljs-keyword\">var</span> message;</pre></div></div>
            
        </li>
        
        
        <li id=\"section-24\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-24\">&#182;</a>
              </div>
              <p>Type constraints are a bit different, we have to match their requirements too to find right error message</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-string\">'type'</span> === constraint.name) {
      <span class=\"hljs-keyword\">var</span> typeMessages = <span class=\"hljs-keyword\">this</span>.catalog[<span class=\"hljs-keyword\">this</span>.locale][constraint.name] || {};
      message = typeMessages[constraint.requirements];
    } <span class=\"hljs-keyword\">else</span>
      message = <span class=\"hljs-keyword\">this</span>.formatMessage(<span class=\"hljs-keyword\">this</span>.catalog[<span class=\"hljs-keyword\">this</span>.locale][constraint.name], constraint.requirements);

    <span class=\"hljs-keyword\">return</span> message || <span class=\"hljs-keyword\">this</span>.catalog[<span class=\"hljs-keyword\">this</span>.locale].defaultMessage || <span class=\"hljs-keyword\">this</span>.catalog.en.defaultMessage;
  },</pre></div></div>
            
        </li>
        
        
        <li id=\"section-25\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-25\">&#182;</a>
              </div>
              <p>Kind of light <code>sprintf()</code> implementation</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  formatMessage: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">string, parameters</span>) </span>{
    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-string\">'object'</span> === <span class=\"hljs-keyword\">typeof</span> parameters) {
      <span class=\"hljs-keyword\">for</span> (<span class=\"hljs-keyword\">var</span> i <span class=\"hljs-keyword\">in</span> parameters)
        string = <span class=\"hljs-keyword\">this</span>.formatMessage(string, parameters[i]);

      <span class=\"hljs-keyword\">return</span> string;
    }

    <span class=\"hljs-keyword\">return</span> <span class=\"hljs-string\">'string'</span> === <span class=\"hljs-keyword\">typeof</span> string ? string.replace(<span class=\"hljs-regexp\">/%s/i</span>, parameters) : <span class=\"hljs-string\">''</span>;
  },</pre></div></div>
            
        </li>
        
        
        <li id=\"section-26\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-26\">&#182;</a>
              </div>
              <p>Here is the Parsley default validators list.
A validator is an object with the following key values:</p>
<ul>
<li>priority: an integer</li>
<li>requirement: ‘string’ (default), ‘integer’, ‘number’, ‘regexp’ or an Array of these</li>
<li>validateString, validateMultiple, validateNumber: functions returning <code>true</code>, <code>false</code> or a promise
Alternatively, a validator can be a function that returns such an object</li>
</ul>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  validators: {
    <span class=\"hljs-attr\">notblank</span>: {
      <span class=\"hljs-attr\">validateString</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span>(<span class=\"hljs-params\">value</span>) </span>{
        <span class=\"hljs-keyword\">return</span> <span class=\"hljs-regexp\">/\\S/</span>.test(value);
      },
      <span class=\"hljs-attr\">priority</span>: <span class=\"hljs-number\">2</span>
    },
    <span class=\"hljs-attr\">required</span>: {
      <span class=\"hljs-attr\">validateMultiple</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span>(<span class=\"hljs-params\">values</span>) </span>{
        <span class=\"hljs-keyword\">return</span> values.length &gt; <span class=\"hljs-number\">0</span>;
      },
      <span class=\"hljs-attr\">validateString</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span>(<span class=\"hljs-params\">value</span>) </span>{
        <span class=\"hljs-keyword\">return</span> <span class=\"hljs-regexp\">/\\S/</span>.test(value);
      },
      <span class=\"hljs-attr\">priority</span>: <span class=\"hljs-number\">512</span>
    },
    <span class=\"hljs-attr\">type</span>: {
      <span class=\"hljs-attr\">validateString</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span>(<span class=\"hljs-params\">value, type, {step = <span class=\"hljs-string\">'any'</span>, base = <span class=\"hljs-number\">0</span>} = {}</span>) </span>{
        <span class=\"hljs-keyword\">var</span> tester = typeTesters[type];
        <span class=\"hljs-keyword\">if</span> (!tester) {
          <span class=\"hljs-keyword\">throw</span> <span class=\"hljs-keyword\">new</span> <span class=\"hljs-built_in\">Error</span>(<span class=\"hljs-string\">'validator type `'</span> + type + <span class=\"hljs-string\">'` is not supported'</span>);
        }
        <span class=\"hljs-keyword\">if</span> (!tester.test(value))
          <span class=\"hljs-keyword\">return</span> <span class=\"hljs-literal\">false</span>;
        <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-string\">'number'</span> === type) {
          <span class=\"hljs-keyword\">if</span> (!<span class=\"hljs-regexp\">/^any\$/i</span>.test(step || <span class=\"hljs-string\">''</span>)) {
            <span class=\"hljs-keyword\">var</span> nb = <span class=\"hljs-built_in\">Number</span>(value);
            <span class=\"hljs-keyword\">var</span> decimals = <span class=\"hljs-built_in\">Math</span>.max(decimalPlaces(step), decimalPlaces(base));
            <span class=\"hljs-keyword\">if</span> (decimalPlaces(nb) &gt; decimals) <span class=\"hljs-comment\">// Value can't have too many decimals</span>
              <span class=\"hljs-keyword\">return</span> <span class=\"hljs-literal\">false</span>;</pre></div></div>
            
        </li>
        
        
        <li id=\"section-27\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-27\">&#182;</a>
              </div>
              <p>Be careful of rounding errors by using integers.</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>            <span class=\"hljs-keyword\">var</span> toInt = <span class=\"hljs-function\"><span class=\"hljs-params\">f</span> =&gt;</span> <span class=\"hljs-built_in\">Math</span>.round(f * <span class=\"hljs-built_in\">Math</span>.pow(<span class=\"hljs-number\">10</span>, decimals));
            <span class=\"hljs-keyword\">if</span> ((toInt(nb) - toInt(base)) % toInt(step) != <span class=\"hljs-number\">0</span>)
              <span class=\"hljs-keyword\">return</span> <span class=\"hljs-literal\">false</span>;
          }
        }
        <span class=\"hljs-keyword\">return</span> <span class=\"hljs-literal\">true</span>;
      },
      <span class=\"hljs-attr\">requirementType</span>: {
        <span class=\"hljs-string\">''</span>: <span class=\"hljs-string\">'string'</span>,
        <span class=\"hljs-attr\">step</span>: <span class=\"hljs-string\">'string'</span>,
        <span class=\"hljs-attr\">base</span>: <span class=\"hljs-string\">'number'</span>
      },
      <span class=\"hljs-attr\">priority</span>: <span class=\"hljs-number\">256</span>
    },
    <span class=\"hljs-attr\">pattern</span>: {
      <span class=\"hljs-attr\">validateString</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span>(<span class=\"hljs-params\">value, regexp</span>) </span>{
        <span class=\"hljs-keyword\">return</span> regexp.test(value);
      },
      <span class=\"hljs-attr\">requirementType</span>: <span class=\"hljs-string\">'regexp'</span>,
      <span class=\"hljs-attr\">priority</span>: <span class=\"hljs-number\">64</span>
    },
    <span class=\"hljs-attr\">minlength</span>: {
      <span class=\"hljs-attr\">validateString</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">value, requirement</span>) </span>{
        <span class=\"hljs-keyword\">return</span> value.length &gt;= requirement;
      },
      <span class=\"hljs-attr\">requirementType</span>: <span class=\"hljs-string\">'integer'</span>,
      <span class=\"hljs-attr\">priority</span>: <span class=\"hljs-number\">30</span>
    },
    <span class=\"hljs-attr\">maxlength</span>: {
      <span class=\"hljs-attr\">validateString</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">value, requirement</span>) </span>{
        <span class=\"hljs-keyword\">return</span> value.length &lt;= requirement;
      },
      <span class=\"hljs-attr\">requirementType</span>: <span class=\"hljs-string\">'integer'</span>,
      <span class=\"hljs-attr\">priority</span>: <span class=\"hljs-number\">30</span>
    },
    <span class=\"hljs-attr\">length</span>: {
      <span class=\"hljs-attr\">validateString</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">value, min, max</span>) </span>{
        <span class=\"hljs-keyword\">return</span> value.length &gt;= min &amp;&amp; value.length &lt;= max;
      },
      <span class=\"hljs-attr\">requirementType</span>: [<span class=\"hljs-string\">'integer'</span>, <span class=\"hljs-string\">'integer'</span>],
      <span class=\"hljs-attr\">priority</span>: <span class=\"hljs-number\">30</span>
    },
    <span class=\"hljs-attr\">mincheck</span>: {
      <span class=\"hljs-attr\">validateMultiple</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">values, requirement</span>) </span>{
        <span class=\"hljs-keyword\">return</span> values.length &gt;= requirement;
      },
      <span class=\"hljs-attr\">requirementType</span>: <span class=\"hljs-string\">'integer'</span>,
      <span class=\"hljs-attr\">priority</span>: <span class=\"hljs-number\">30</span>
    },
    <span class=\"hljs-attr\">maxcheck</span>: {
      <span class=\"hljs-attr\">validateMultiple</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">values, requirement</span>) </span>{
        <span class=\"hljs-keyword\">return</span> values.length &lt;= requirement;
      },
      <span class=\"hljs-attr\">requirementType</span>: <span class=\"hljs-string\">'integer'</span>,
      <span class=\"hljs-attr\">priority</span>: <span class=\"hljs-number\">30</span>
    },
    <span class=\"hljs-attr\">check</span>: {
      <span class=\"hljs-attr\">validateMultiple</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">values, min, max</span>) </span>{
        <span class=\"hljs-keyword\">return</span> values.length &gt;= min &amp;&amp; values.length &lt;= max;
      },
      <span class=\"hljs-attr\">requirementType</span>: [<span class=\"hljs-string\">'integer'</span>, <span class=\"hljs-string\">'integer'</span>],
      <span class=\"hljs-attr\">priority</span>: <span class=\"hljs-number\">30</span>
    },
    <span class=\"hljs-attr\">min</span>: comparisonOperator(<span class=\"hljs-function\">(<span class=\"hljs-params\">value, requirement</span>) =&gt;</span> value &gt;= requirement),
    <span class=\"hljs-attr\">max</span>: comparisonOperator(<span class=\"hljs-function\">(<span class=\"hljs-params\">value, requirement</span>) =&gt;</span> value &lt;= requirement),
    <span class=\"hljs-attr\">range</span>: comparisonOperator(<span class=\"hljs-function\">(<span class=\"hljs-params\">value, min, max</span>) =&gt;</span> value &gt;= min &amp;&amp; value &lt;= max),
    <span class=\"hljs-attr\">equalto</span>: {
      <span class=\"hljs-attr\">validateString</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">value, refOrValue</span>) </span>{
        <span class=\"hljs-keyword\">var</span> \$reference = \$(refOrValue);
        <span class=\"hljs-keyword\">if</span> (\$reference.length)
          <span class=\"hljs-keyword\">return</span> value === \$reference.val();
        <span class=\"hljs-keyword\">else</span>
          <span class=\"hljs-keyword\">return</span> value === refOrValue;
      },
      <span class=\"hljs-attr\">priority</span>: <span class=\"hljs-number\">256</span>
    }
  }
};

<span class=\"hljs-keyword\">export</span> <span class=\"hljs-keyword\">default</span> ValidatorRegistry;</pre></div></div>
            
        </li>
        
    </ul>
  </div>
<script>var _gaq=_gaq||[];_gaq.push([\"_setAccount\",\"UA-37229467-1\"]);_gaq.push([\"_trackPageview\"]);(function(){var e=document.createElement(\"script\");e.type=\"text/javascript\";e.async=true;e.src=(\"https:\"==document.location.protocol?\"https://ssl\":\"http://www\")+\".google-analytics.com/ga.js\";var t=document.getElementsByTagName(\"script\")[0];t.parentNode.insertBefore(e,t)})();</script></body>
</html>
";
        
        $__internal_cab0d60f549ca90ad975e91097d8f1a87aa4f2ca9f073a8b1f2e0f63efca0229->leave($__internal_cab0d60f549ca90ad975e91097d8f1a87aa4f2ca9f073a8b1f2e0f63efca0229_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/doc/annotated-source/validator_registry.html";
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
  <title>validator_registry.js</title>
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
                  <h1>validator_registry.js</h1>
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
<span class=\"hljs-keyword\">import</span> Defaults <span class=\"hljs-keyword\">from</span> <span class=\"hljs-string\">'./defaults'</span>;
<span class=\"hljs-keyword\">import</span> Validator <span class=\"hljs-keyword\">from</span> <span class=\"hljs-string\">'./validator'</span>;

<span class=\"hljs-keyword\">var</span> ValidatorRegistry = <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">validators, catalog</span>) </span>{
  <span class=\"hljs-keyword\">this</span>.__class__ = <span class=\"hljs-string\">'ValidatorRegistry'</span>;</pre></div></div>
            
        </li>
        
        
        <li id=\"section-2\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-2\">&#182;</a>
              </div>
              <p>Default Parsley locale is en</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  <span class=\"hljs-keyword\">this</span>.locale = <span class=\"hljs-string\">'en'</span>;

  <span class=\"hljs-keyword\">this</span>.init(validators || {}, catalog || {});
};

<span class=\"hljs-keyword\">var</span> typeTesters =  {
  <span class=\"hljs-attr\">email</span>: <span class=\"hljs-regexp\">/^((([a-z]|\\d|[!#\\\$%&amp;'\\*\\+\\-\\/=\\?\\^_`{\\|}~]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])+(\\.([a-z]|\\d|[!#\\\$%&amp;'\\*\\+\\-\\/=\\?\\^_`{\\|}~]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])+)*)|((\\x22)((((\\x20|\\x09)*(\\x0d\\x0a))?(\\x20|\\x09)+)?(([\\x01-\\x08\\x0b\\x0c\\x0e-\\x1f\\x7f]|\\x21|[\\x23-\\x5b]|[\\x5d-\\x7e]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])|(\\\\([\\x01-\\x09\\x0b\\x0c\\x0d-\\x7f]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF]))))*(((\\x20|\\x09)*(\\x0d\\x0a))?(\\x20|\\x09)+)?(\\x22)))@((([a-z]|\\d|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])|(([a-z]|\\d|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])([a-z]|\\d|-|\\.|_|~|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])*([a-z]|\\d|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])))\\.)+(([a-z]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])|(([a-z]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])([a-z]|\\d|-|\\.|_|~|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])*([a-z]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])))\$/i</span>,</pre></div></div>
            
        </li>
        
        
        <li id=\"section-3\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-3\">&#182;</a>
              </div>
              <p>Follow <a href=\"https://www.w3.org/TR/html5/infrastructure.html#floating-point-numbers\">https://www.w3.org/TR/html5/infrastructure.html#floating-point-numbers</a></p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  number: <span class=\"hljs-regexp\">/^-?(\\d*\\.)?\\d+(e[-+]?\\d+)?\$/i</span>,

  <span class=\"hljs-attr\">integer</span>: <span class=\"hljs-regexp\">/^-?\\d+\$/</span>,

  <span class=\"hljs-attr\">digits</span>: <span class=\"hljs-regexp\">/^\\d+\$/</span>,

  <span class=\"hljs-attr\">alphanum</span>: <span class=\"hljs-regexp\">/^\\w+\$/i</span>,

  <span class=\"hljs-attr\">date</span>: {
    <span class=\"hljs-attr\">test</span>: <span class=\"hljs-function\"><span class=\"hljs-params\">value</span> =&gt;</span> Utils.parse.date(value) !== <span class=\"hljs-literal\">null</span>
  },

  <span class=\"hljs-attr\">url</span>: <span class=\"hljs-keyword\">new</span> <span class=\"hljs-built_in\">RegExp</span>(
      <span class=\"hljs-string\">\"^\"</span> +</pre></div></div>
            
        </li>
        
        
        <li id=\"section-4\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-4\">&#182;</a>
              </div>
              <p>protocol identifier</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>        <span class=\"hljs-string\">\"(?:(?:https?|ftp)://)?\"</span> + <span class=\"hljs-comment\">// ** mod: make scheme optional</span></pre></div></div>
            
        </li>
        
        
        <li id=\"section-5\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-5\">&#182;</a>
              </div>
              <p>user:pass authentication</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>        <span class=\"hljs-string\">\"(?:\\\\S+(?::\\\\S*)?@)?\"</span> +
        <span class=\"hljs-string\">\"(?:\"</span> +</pre></div></div>
            
        </li>
        
        
        <li id=\"section-6\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-6\">&#182;</a>
              </div>
              <p>IP address exclusion
private &amp; local networks
“(?!(?:10|127)(?:\\.\\d{1,3}){3})” +   // <strong> mod: allow local networks
“(?!(?:169\\.254|192\\.168)(?:\\.\\d{1,3}){2})” +  // </strong> mod: allow local networks
“(?!172\\.(?:1[6-9]|2\\d|3[0-1])(?:\\.\\d{1,3}){2})” +  // ** mod: allow local networks
IP address dotted notation octets
excludes loopback network 0.0.0.0
excludes reserved space &gt;= 224.0.0.0
excludes network &amp; broacast addresses
(first &amp; last IP address of each class)</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>          <span class=\"hljs-string\">\"(?:[1-9]\\\\d?|1\\\\d\\\\d|2[01]\\\\d|22[0-3])\"</span> +
          <span class=\"hljs-string\">\"(?:\\\\.(?:1?\\\\d{1,2}|2[0-4]\\\\d|25[0-5])){2}\"</span> +
          <span class=\"hljs-string\">\"(?:\\\\.(?:[1-9]\\\\d?|1\\\\d\\\\d|2[0-4]\\\\d|25[0-4]))\"</span> +
        <span class=\"hljs-string\">\"|\"</span> +</pre></div></div>
            
        </li>
        
        
        <li id=\"section-7\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-7\">&#182;</a>
              </div>
              <p>host name</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>          <span class=\"hljs-string\">\"(?:(?:[a-z\\\\u00a1-\\\\uffff0-9]-*)*[a-z\\\\u00a1-\\\\uffff0-9]+)\"</span> +</pre></div></div>
            
        </li>
        
        
        <li id=\"section-8\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-8\">&#182;</a>
              </div>
              <p>domain name</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>          <span class=\"hljs-string\">\"(?:\\\\.(?:[a-z\\\\u00a1-\\\\uffff0-9]-*)*[a-z\\\\u00a1-\\\\uffff0-9]+)*\"</span> +</pre></div></div>
            
        </li>
        
        
        <li id=\"section-9\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-9\">&#182;</a>
              </div>
              <p>TLD identifier</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>          <span class=\"hljs-string\">\"(?:\\\\.(?:[a-z\\\\u00a1-\\\\uffff]{2,}))\"</span> +
        <span class=\"hljs-string\">\")\"</span> +</pre></div></div>
            
        </li>
        
        
        <li id=\"section-10\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-10\">&#182;</a>
              </div>
              <p>port number</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>        <span class=\"hljs-string\">\"(?::\\\\d{2,5})?\"</span> +</pre></div></div>
            
        </li>
        
        
        <li id=\"section-11\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-11\">&#182;</a>
              </div>
              <p>resource path</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>        <span class=\"hljs-string\">\"(?:/\\\\S*)?\"</span> +
      <span class=\"hljs-string\">\"\$\"</span>, <span class=\"hljs-string\">'i'</span>
    )
};
typeTesters.range = typeTesters.number;</pre></div></div>
            
        </li>
        
        
        <li id=\"section-12\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-12\">&#182;</a>
              </div>
              <p>See <a href=\"http://stackoverflow.com/a/10454560/8279\">http://stackoverflow.com/a/10454560/8279</a></p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre><span class=\"hljs-keyword\">var</span> decimalPlaces = <span class=\"hljs-function\"><span class=\"hljs-params\">num</span> =&gt;</span> {
  <span class=\"hljs-keyword\">var</span> match = (<span class=\"hljs-string\">''</span> + num).match(<span class=\"hljs-regexp\">/(?:\\.(\\d+))?(?:[eE]([+-]?\\d+))?\$/</span>);
  <span class=\"hljs-keyword\">if</span> (!match) { <span class=\"hljs-keyword\">return</span> <span class=\"hljs-number\">0</span>; }
  <span class=\"hljs-keyword\">return</span> <span class=\"hljs-built_in\">Math</span>.max(
       <span class=\"hljs-number\">0</span>,</pre></div></div>
            
        </li>
        
        
        <li id=\"section-13\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-13\">&#182;</a>
              </div>
              <p>Number of digits right of decimal point.</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>       (match[<span class=\"hljs-number\">1</span>] ? match[<span class=\"hljs-number\">1</span>].length : <span class=\"hljs-number\">0</span>) -</pre></div></div>
            
        </li>
        
        
        <li id=\"section-14\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-14\">&#182;</a>
              </div>
              <p>Adjust for scientific notation.</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>       (match[<span class=\"hljs-number\">2</span>] ? +match[<span class=\"hljs-number\">2</span>] : <span class=\"hljs-number\">0</span>));
};</pre></div></div>
            
        </li>
        
        
        <li id=\"section-15\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-15\">&#182;</a>
              </div>
              <p>parseArguments(‘number’, [‘1’, ‘2’]) =&gt; [1, 2]</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre><span class=\"hljs-keyword\">let</span> parseArguments = <span class=\"hljs-function\">(<span class=\"hljs-params\">type, args</span>) =&gt;</span> args.map(Utils.parse[type]);</pre></div></div>
            
        </li>
        
        
        <li id=\"section-16\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-16\">&#182;</a>
              </div>
              <p>operatorToValidator returns a validating function for an operator function, applied to the given type</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre><span class=\"hljs-keyword\">let</span> operatorToValidator = <span class=\"hljs-function\">(<span class=\"hljs-params\">type, operator</span>) =&gt;</span> {
  <span class=\"hljs-keyword\">return</span> <span class=\"hljs-function\">(<span class=\"hljs-params\">value, ...requirementsAndInput</span>) =&gt;</span> {
    requirementsAndInput.pop(); <span class=\"hljs-comment\">// Get rid of `input` argument</span>
    <span class=\"hljs-keyword\">return</span> operator(value, ...parseArguments(type, requirementsAndInput));
  };
};

<span class=\"hljs-keyword\">let</span> comparisonOperator = <span class=\"hljs-function\"><span class=\"hljs-params\">operator</span> =&gt;</span> ({
  <span class=\"hljs-attr\">validateDate</span>: operatorToValidator(<span class=\"hljs-string\">'date'</span>, operator),
  <span class=\"hljs-attr\">validateNumber</span>: operatorToValidator(<span class=\"hljs-string\">'number'</span>, operator),
  <span class=\"hljs-attr\">requirementType</span>: operator.length &lt;= <span class=\"hljs-number\">2</span> ? <span class=\"hljs-string\">'string'</span> : [<span class=\"hljs-string\">'string'</span>, <span class=\"hljs-string\">'string'</span>], <span class=\"hljs-comment\">// Support operators with a 1 or 2 requirement(s)</span>
  priority: <span class=\"hljs-number\">30</span>
});

ValidatorRegistry.prototype = {
  <span class=\"hljs-attr\">init</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">validators, catalog</span>) </span>{
    <span class=\"hljs-keyword\">this</span>.catalog = catalog;</pre></div></div>
            
        </li>
        
        
        <li id=\"section-17\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-17\">&#182;</a>
              </div>
              <p>Copy prototype’s validators:</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">this</span>.validators = <span class=\"hljs-built_in\">Object</span>.assign({}, <span class=\"hljs-keyword\">this</span>.validators);

    <span class=\"hljs-keyword\">for</span> (<span class=\"hljs-keyword\">var</span> name <span class=\"hljs-keyword\">in</span> validators)
      <span class=\"hljs-keyword\">this</span>.addValidator(name, validators[name].fn, validators[name].priority);

    <span class=\"hljs-built_in\">window</span>.Parsley.trigger(<span class=\"hljs-string\">'parsley:validator:init'</span>);
  },</pre></div></div>
            
        </li>
        
        
        <li id=\"section-18\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-18\">&#182;</a>
              </div>
              <p>Set new messages locale if we have dictionary loaded in ParsleyConfig.i18n</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  setLocale: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">locale</span>) </span>{
    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-string\">'undefined'</span> === <span class=\"hljs-keyword\">typeof</span> <span class=\"hljs-keyword\">this</span>.catalog[locale])
      <span class=\"hljs-keyword\">throw</span> <span class=\"hljs-keyword\">new</span> <span class=\"hljs-built_in\">Error</span>(locale + <span class=\"hljs-string\">' is not available in the catalog'</span>);

    <span class=\"hljs-keyword\">this</span>.locale = locale;

    <span class=\"hljs-keyword\">return</span> <span class=\"hljs-keyword\">this</span>;
  },</pre></div></div>
            
        </li>
        
        
        <li id=\"section-19\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-19\">&#182;</a>
              </div>
              <p>Add a new messages catalog for a given locale. Set locale for this catalog if set === <code>true</code></p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  addCatalog: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">locale, messages, set</span>) </span>{
    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-string\">'object'</span> === <span class=\"hljs-keyword\">typeof</span> messages)
      <span class=\"hljs-keyword\">this</span>.catalog[locale] = messages;

    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-literal\">true</span> === set)
      <span class=\"hljs-keyword\">return</span> <span class=\"hljs-keyword\">this</span>.setLocale(locale);

    <span class=\"hljs-keyword\">return</span> <span class=\"hljs-keyword\">this</span>;
  },</pre></div></div>
            
        </li>
        
        
        <li id=\"section-20\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-20\">&#182;</a>
              </div>
              <p>Add a specific message for a given constraint in a given locale</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  addMessage: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">locale, name, message</span>) </span>{
    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-string\">'undefined'</span> === <span class=\"hljs-keyword\">typeof</span> <span class=\"hljs-keyword\">this</span>.catalog[locale])
      <span class=\"hljs-keyword\">this</span>.catalog[locale] = {};

    <span class=\"hljs-keyword\">this</span>.catalog[locale][name] = message;

    <span class=\"hljs-keyword\">return</span> <span class=\"hljs-keyword\">this</span>;
  },</pre></div></div>
            
        </li>
        
        
        <li id=\"section-21\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-21\">&#182;</a>
              </div>
              <p>Add messages for a given locale</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  addMessages: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">locale, nameMessageObject</span>) </span>{
    <span class=\"hljs-keyword\">for</span> (<span class=\"hljs-keyword\">var</span> name <span class=\"hljs-keyword\">in</span> nameMessageObject)
      <span class=\"hljs-keyword\">this</span>.addMessage(locale, name, nameMessageObject[name]);

    <span class=\"hljs-keyword\">return</span> <span class=\"hljs-keyword\">this</span>;
  },</pre></div></div>
            
        </li>
        
        
        <li id=\"section-22\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-22\">&#182;</a>
              </div>
              <p>Add a new validator</p>
<p>   addValidator(‘custom’, {
       requirementType: [‘integer’, ‘integer’],
       validateString: function(value, from, to) {},
       priority: 22,
       messages: {
         en: “Hey, that’s no good”,
         fr: “Aye aye, pas bon du tout”,
       }
   })</p>
<p>Old API was addValidator(name, function, priority)</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  addValidator: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">name, arg1, arg2</span>) </span>{
    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-keyword\">this</span>.validators[name])
      Utils.warn(<span class=\"hljs-string\">'Validator \"'</span> + name + <span class=\"hljs-string\">'\" is already defined.'</span>);
    <span class=\"hljs-keyword\">else</span> <span class=\"hljs-keyword\">if</span> (Defaults.hasOwnProperty(name)) {
      Utils.warn(<span class=\"hljs-string\">'\"'</span> + name + <span class=\"hljs-string\">'\" is a restricted keyword and is not a valid validator name.'</span>);
      <span class=\"hljs-keyword\">return</span>;
    }
    <span class=\"hljs-keyword\">return</span> <span class=\"hljs-keyword\">this</span>._setValidator(...arguments);
  },

  <span class=\"hljs-attr\">updateValidator</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">name, arg1, arg2</span>) </span>{
    <span class=\"hljs-keyword\">if</span> (!<span class=\"hljs-keyword\">this</span>.validators[name]) {
      Utils.warn(<span class=\"hljs-string\">'Validator \"'</span> + name + <span class=\"hljs-string\">'\" is not already defined.'</span>);
      <span class=\"hljs-keyword\">return</span> <span class=\"hljs-keyword\">this</span>.addValidator(...arguments);
    }
    <span class=\"hljs-keyword\">return</span> <span class=\"hljs-keyword\">this</span>._setValidator(...arguments);
  },

  <span class=\"hljs-attr\">removeValidator</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">name</span>) </span>{
    <span class=\"hljs-keyword\">if</span> (!<span class=\"hljs-keyword\">this</span>.validators[name])
      Utils.warn(<span class=\"hljs-string\">'Validator \"'</span> + name + <span class=\"hljs-string\">'\" is not defined.'</span>);

    <span class=\"hljs-keyword\">delete</span> <span class=\"hljs-keyword\">this</span>.validators[name];

    <span class=\"hljs-keyword\">return</span> <span class=\"hljs-keyword\">this</span>;
  },

  <span class=\"hljs-attr\">_setValidator</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">name, validator, priority</span>) </span>{
    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-string\">'object'</span> !== <span class=\"hljs-keyword\">typeof</span> validator) {</pre></div></div>
            
        </li>
        
        
        <li id=\"section-23\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-23\">&#182;</a>
              </div>
              <p>Old style validator, with <code>fn</code> and <code>priority</code></p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>      validator = {
        <span class=\"hljs-attr\">fn</span>: validator,
        <span class=\"hljs-attr\">priority</span>: priority
      };
    }
    <span class=\"hljs-keyword\">if</span> (!validator.validate) {
      validator = <span class=\"hljs-keyword\">new</span> Validator(validator);
    }
    <span class=\"hljs-keyword\">this</span>.validators[name] = validator;

    <span class=\"hljs-keyword\">for</span> (<span class=\"hljs-keyword\">var</span> locale <span class=\"hljs-keyword\">in</span> validator.messages || {})
      <span class=\"hljs-keyword\">this</span>.addMessage(locale, name, validator.messages[locale]);

    <span class=\"hljs-keyword\">return</span> <span class=\"hljs-keyword\">this</span>;
  },

  <span class=\"hljs-attr\">getErrorMessage</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">constraint</span>) </span>{
    <span class=\"hljs-keyword\">var</span> message;</pre></div></div>
            
        </li>
        
        
        <li id=\"section-24\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-24\">&#182;</a>
              </div>
              <p>Type constraints are a bit different, we have to match their requirements too to find right error message</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-string\">'type'</span> === constraint.name) {
      <span class=\"hljs-keyword\">var</span> typeMessages = <span class=\"hljs-keyword\">this</span>.catalog[<span class=\"hljs-keyword\">this</span>.locale][constraint.name] || {};
      message = typeMessages[constraint.requirements];
    } <span class=\"hljs-keyword\">else</span>
      message = <span class=\"hljs-keyword\">this</span>.formatMessage(<span class=\"hljs-keyword\">this</span>.catalog[<span class=\"hljs-keyword\">this</span>.locale][constraint.name], constraint.requirements);

    <span class=\"hljs-keyword\">return</span> message || <span class=\"hljs-keyword\">this</span>.catalog[<span class=\"hljs-keyword\">this</span>.locale].defaultMessage || <span class=\"hljs-keyword\">this</span>.catalog.en.defaultMessage;
  },</pre></div></div>
            
        </li>
        
        
        <li id=\"section-25\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-25\">&#182;</a>
              </div>
              <p>Kind of light <code>sprintf()</code> implementation</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  formatMessage: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">string, parameters</span>) </span>{
    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-string\">'object'</span> === <span class=\"hljs-keyword\">typeof</span> parameters) {
      <span class=\"hljs-keyword\">for</span> (<span class=\"hljs-keyword\">var</span> i <span class=\"hljs-keyword\">in</span> parameters)
        string = <span class=\"hljs-keyword\">this</span>.formatMessage(string, parameters[i]);

      <span class=\"hljs-keyword\">return</span> string;
    }

    <span class=\"hljs-keyword\">return</span> <span class=\"hljs-string\">'string'</span> === <span class=\"hljs-keyword\">typeof</span> string ? string.replace(<span class=\"hljs-regexp\">/%s/i</span>, parameters) : <span class=\"hljs-string\">''</span>;
  },</pre></div></div>
            
        </li>
        
        
        <li id=\"section-26\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-26\">&#182;</a>
              </div>
              <p>Here is the Parsley default validators list.
A validator is an object with the following key values:</p>
<ul>
<li>priority: an integer</li>
<li>requirement: ‘string’ (default), ‘integer’, ‘number’, ‘regexp’ or an Array of these</li>
<li>validateString, validateMultiple, validateNumber: functions returning <code>true</code>, <code>false</code> or a promise
Alternatively, a validator can be a function that returns such an object</li>
</ul>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  validators: {
    <span class=\"hljs-attr\">notblank</span>: {
      <span class=\"hljs-attr\">validateString</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span>(<span class=\"hljs-params\">value</span>) </span>{
        <span class=\"hljs-keyword\">return</span> <span class=\"hljs-regexp\">/\\S/</span>.test(value);
      },
      <span class=\"hljs-attr\">priority</span>: <span class=\"hljs-number\">2</span>
    },
    <span class=\"hljs-attr\">required</span>: {
      <span class=\"hljs-attr\">validateMultiple</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span>(<span class=\"hljs-params\">values</span>) </span>{
        <span class=\"hljs-keyword\">return</span> values.length &gt; <span class=\"hljs-number\">0</span>;
      },
      <span class=\"hljs-attr\">validateString</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span>(<span class=\"hljs-params\">value</span>) </span>{
        <span class=\"hljs-keyword\">return</span> <span class=\"hljs-regexp\">/\\S/</span>.test(value);
      },
      <span class=\"hljs-attr\">priority</span>: <span class=\"hljs-number\">512</span>
    },
    <span class=\"hljs-attr\">type</span>: {
      <span class=\"hljs-attr\">validateString</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span>(<span class=\"hljs-params\">value, type, {step = <span class=\"hljs-string\">'any'</span>, base = <span class=\"hljs-number\">0</span>} = {}</span>) </span>{
        <span class=\"hljs-keyword\">var</span> tester = typeTesters[type];
        <span class=\"hljs-keyword\">if</span> (!tester) {
          <span class=\"hljs-keyword\">throw</span> <span class=\"hljs-keyword\">new</span> <span class=\"hljs-built_in\">Error</span>(<span class=\"hljs-string\">'validator type `'</span> + type + <span class=\"hljs-string\">'` is not supported'</span>);
        }
        <span class=\"hljs-keyword\">if</span> (!tester.test(value))
          <span class=\"hljs-keyword\">return</span> <span class=\"hljs-literal\">false</span>;
        <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-string\">'number'</span> === type) {
          <span class=\"hljs-keyword\">if</span> (!<span class=\"hljs-regexp\">/^any\$/i</span>.test(step || <span class=\"hljs-string\">''</span>)) {
            <span class=\"hljs-keyword\">var</span> nb = <span class=\"hljs-built_in\">Number</span>(value);
            <span class=\"hljs-keyword\">var</span> decimals = <span class=\"hljs-built_in\">Math</span>.max(decimalPlaces(step), decimalPlaces(base));
            <span class=\"hljs-keyword\">if</span> (decimalPlaces(nb) &gt; decimals) <span class=\"hljs-comment\">// Value can't have too many decimals</span>
              <span class=\"hljs-keyword\">return</span> <span class=\"hljs-literal\">false</span>;</pre></div></div>
            
        </li>
        
        
        <li id=\"section-27\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-27\">&#182;</a>
              </div>
              <p>Be careful of rounding errors by using integers.</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>            <span class=\"hljs-keyword\">var</span> toInt = <span class=\"hljs-function\"><span class=\"hljs-params\">f</span> =&gt;</span> <span class=\"hljs-built_in\">Math</span>.round(f * <span class=\"hljs-built_in\">Math</span>.pow(<span class=\"hljs-number\">10</span>, decimals));
            <span class=\"hljs-keyword\">if</span> ((toInt(nb) - toInt(base)) % toInt(step) != <span class=\"hljs-number\">0</span>)
              <span class=\"hljs-keyword\">return</span> <span class=\"hljs-literal\">false</span>;
          }
        }
        <span class=\"hljs-keyword\">return</span> <span class=\"hljs-literal\">true</span>;
      },
      <span class=\"hljs-attr\">requirementType</span>: {
        <span class=\"hljs-string\">''</span>: <span class=\"hljs-string\">'string'</span>,
        <span class=\"hljs-attr\">step</span>: <span class=\"hljs-string\">'string'</span>,
        <span class=\"hljs-attr\">base</span>: <span class=\"hljs-string\">'number'</span>
      },
      <span class=\"hljs-attr\">priority</span>: <span class=\"hljs-number\">256</span>
    },
    <span class=\"hljs-attr\">pattern</span>: {
      <span class=\"hljs-attr\">validateString</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span>(<span class=\"hljs-params\">value, regexp</span>) </span>{
        <span class=\"hljs-keyword\">return</span> regexp.test(value);
      },
      <span class=\"hljs-attr\">requirementType</span>: <span class=\"hljs-string\">'regexp'</span>,
      <span class=\"hljs-attr\">priority</span>: <span class=\"hljs-number\">64</span>
    },
    <span class=\"hljs-attr\">minlength</span>: {
      <span class=\"hljs-attr\">validateString</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">value, requirement</span>) </span>{
        <span class=\"hljs-keyword\">return</span> value.length &gt;= requirement;
      },
      <span class=\"hljs-attr\">requirementType</span>: <span class=\"hljs-string\">'integer'</span>,
      <span class=\"hljs-attr\">priority</span>: <span class=\"hljs-number\">30</span>
    },
    <span class=\"hljs-attr\">maxlength</span>: {
      <span class=\"hljs-attr\">validateString</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">value, requirement</span>) </span>{
        <span class=\"hljs-keyword\">return</span> value.length &lt;= requirement;
      },
      <span class=\"hljs-attr\">requirementType</span>: <span class=\"hljs-string\">'integer'</span>,
      <span class=\"hljs-attr\">priority</span>: <span class=\"hljs-number\">30</span>
    },
    <span class=\"hljs-attr\">length</span>: {
      <span class=\"hljs-attr\">validateString</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">value, min, max</span>) </span>{
        <span class=\"hljs-keyword\">return</span> value.length &gt;= min &amp;&amp; value.length &lt;= max;
      },
      <span class=\"hljs-attr\">requirementType</span>: [<span class=\"hljs-string\">'integer'</span>, <span class=\"hljs-string\">'integer'</span>],
      <span class=\"hljs-attr\">priority</span>: <span class=\"hljs-number\">30</span>
    },
    <span class=\"hljs-attr\">mincheck</span>: {
      <span class=\"hljs-attr\">validateMultiple</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">values, requirement</span>) </span>{
        <span class=\"hljs-keyword\">return</span> values.length &gt;= requirement;
      },
      <span class=\"hljs-attr\">requirementType</span>: <span class=\"hljs-string\">'integer'</span>,
      <span class=\"hljs-attr\">priority</span>: <span class=\"hljs-number\">30</span>
    },
    <span class=\"hljs-attr\">maxcheck</span>: {
      <span class=\"hljs-attr\">validateMultiple</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">values, requirement</span>) </span>{
        <span class=\"hljs-keyword\">return</span> values.length &lt;= requirement;
      },
      <span class=\"hljs-attr\">requirementType</span>: <span class=\"hljs-string\">'integer'</span>,
      <span class=\"hljs-attr\">priority</span>: <span class=\"hljs-number\">30</span>
    },
    <span class=\"hljs-attr\">check</span>: {
      <span class=\"hljs-attr\">validateMultiple</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">values, min, max</span>) </span>{
        <span class=\"hljs-keyword\">return</span> values.length &gt;= min &amp;&amp; values.length &lt;= max;
      },
      <span class=\"hljs-attr\">requirementType</span>: [<span class=\"hljs-string\">'integer'</span>, <span class=\"hljs-string\">'integer'</span>],
      <span class=\"hljs-attr\">priority</span>: <span class=\"hljs-number\">30</span>
    },
    <span class=\"hljs-attr\">min</span>: comparisonOperator(<span class=\"hljs-function\">(<span class=\"hljs-params\">value, requirement</span>) =&gt;</span> value &gt;= requirement),
    <span class=\"hljs-attr\">max</span>: comparisonOperator(<span class=\"hljs-function\">(<span class=\"hljs-params\">value, requirement</span>) =&gt;</span> value &lt;= requirement),
    <span class=\"hljs-attr\">range</span>: comparisonOperator(<span class=\"hljs-function\">(<span class=\"hljs-params\">value, min, max</span>) =&gt;</span> value &gt;= min &amp;&amp; value &lt;= max),
    <span class=\"hljs-attr\">equalto</span>: {
      <span class=\"hljs-attr\">validateString</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">value, refOrValue</span>) </span>{
        <span class=\"hljs-keyword\">var</span> \$reference = \$(refOrValue);
        <span class=\"hljs-keyword\">if</span> (\$reference.length)
          <span class=\"hljs-keyword\">return</span> value === \$reference.val();
        <span class=\"hljs-keyword\">else</span>
          <span class=\"hljs-keyword\">return</span> value === refOrValue;
      },
      <span class=\"hljs-attr\">priority</span>: <span class=\"hljs-number\">256</span>
    }
  }
};

<span class=\"hljs-keyword\">export</span> <span class=\"hljs-keyword\">default</span> ValidatorRegistry;</pre></div></div>
            
        </li>
        
    </ul>
  </div>
<script>var _gaq=_gaq||[];_gaq.push([\"_setAccount\",\"UA-37229467-1\"]);_gaq.push([\"_trackPageview\"]);(function(){var e=document.createElement(\"script\");e.type=\"text/javascript\";e.async=true;e.src=(\"https:\"==document.location.protocol?\"https://ssl\":\"http://www\")+\".google-analytics.com/ga.js\";var t=document.getElementsByTagName(\"script\")[0];t.parentNode.insertBefore(e,t)})();</script></body>
</html>
", "node_modules/parsleyjs/doc/annotated-source/validator_registry.html", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/doc/annotated-source/validator_registry.html");
    }
}
