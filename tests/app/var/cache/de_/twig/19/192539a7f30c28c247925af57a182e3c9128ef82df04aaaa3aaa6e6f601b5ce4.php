<?php

/* node_modules/parsleyjs/doc/annotated-source/utils.html */
class __TwigTemplate_b439a6a678250a0b03deeabf7e5e97a66bf55550acad972e221e5961f2d95e15 extends Twig_Template
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
        $__internal_f269c91217c0a4e7e564feffdd842db7481ca9735cf88e8d25c5abd14934c522 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f269c91217c0a4e7e564feffdd842db7481ca9735cf88e8d25c5abd14934c522->enter($__internal_f269c91217c0a4e7e564feffdd842db7481ca9735cf88e8d25c5abd14934c522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/doc/annotated-source/utils.html"));

        // line 1
        echo "<!DOCTYPE html>

<html>
<head>
  <title>utils.js</title>
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
                  <h1>utils.js</h1>
              </div>
          </li>
        
        
        
        <li id=\"section-1\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-1\">&#182;</a>
              </div>
              
            </div>
            
            <div class=\"content\"><div class='highlight'><pre><span class=\"hljs-keyword\">import</span> \$ <span class=\"hljs-keyword\">from</span> <span class=\"hljs-string\">'jquery'</span>;

<span class=\"hljs-keyword\">var</span> globalID = <span class=\"hljs-number\">1</span>;
<span class=\"hljs-keyword\">var</span> pastWarnings = {};

<span class=\"hljs-keyword\">var</span> Utils = {</pre></div></div>
            
        </li>
        
        
        <li id=\"section-2\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-2\">&#182;</a>
              </div>
              <p>Parsley DOM-API
returns object from dom attributes and values</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  attr: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">element, namespace, obj</span>) </span>{
    <span class=\"hljs-keyword\">var</span> i;
    <span class=\"hljs-keyword\">var</span> attribute;
    <span class=\"hljs-keyword\">var</span> attributes;
    <span class=\"hljs-keyword\">var</span> regex = <span class=\"hljs-keyword\">new</span> <span class=\"hljs-built_in\">RegExp</span>(<span class=\"hljs-string\">'^'</span> + namespace, <span class=\"hljs-string\">'i'</span>);

    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-string\">'undefined'</span> === <span class=\"hljs-keyword\">typeof</span> obj)
      obj = {};
    <span class=\"hljs-keyword\">else</span> {</pre></div></div>
            
        </li>
        
        
        <li id=\"section-3\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-3\">&#182;</a>
              </div>
              <p>Clear all own properties. This won’t affect prototype’s values</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>      <span class=\"hljs-keyword\">for</span> (i <span class=\"hljs-keyword\">in</span> obj) {
        <span class=\"hljs-keyword\">if</span> (obj.hasOwnProperty(i))
          <span class=\"hljs-keyword\">delete</span> obj[i];
      }
    }

    <span class=\"hljs-keyword\">if</span> (!element)
      <span class=\"hljs-keyword\">return</span> obj;

    attributes = element.attributes;
    <span class=\"hljs-keyword\">for</span> (i = attributes.length; i--; ) {
      attribute = attributes[i];

      <span class=\"hljs-keyword\">if</span> (attribute &amp;&amp; attribute.specified &amp;&amp; regex.test(attribute.name)) {
        obj[<span class=\"hljs-keyword\">this</span>.camelize(attribute.name.slice(namespace.length))] = <span class=\"hljs-keyword\">this</span>.deserializeValue(attribute.value);
      }
    }

    <span class=\"hljs-keyword\">return</span> obj;
  },

  <span class=\"hljs-attr\">checkAttr</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">element, namespace, checkAttr</span>) </span>{
    <span class=\"hljs-keyword\">return</span> element.hasAttribute(namespace + checkAttr);
  },

  <span class=\"hljs-attr\">setAttr</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">element, namespace, attr, value</span>) </span>{
    element.setAttribute(<span class=\"hljs-keyword\">this</span>.dasherize(namespace + attr), <span class=\"hljs-built_in\">String</span>(value));
  },

  <span class=\"hljs-attr\">generateID</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\"></span>) </span>{
    <span class=\"hljs-keyword\">return</span> <span class=\"hljs-string\">''</span> + globalID++;
  },

  <span class=\"hljs-comment\">/** Third party functions **/</span></pre></div></div>
            
        </li>
        
        
        <li id=\"section-4\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-4\">&#182;</a>
              </div>
              <p>Zepto deserialize function</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  deserializeValue: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">value</span>) </span>{
    <span class=\"hljs-keyword\">var</span> num;

    <span class=\"hljs-keyword\">try</span> {
      <span class=\"hljs-keyword\">return</span> value ?
        value == <span class=\"hljs-string\">\"true\"</span> ||
        (value == <span class=\"hljs-string\">\"false\"</span> ? <span class=\"hljs-literal\">false</span> :
        value == <span class=\"hljs-string\">\"null\"</span> ? <span class=\"hljs-literal\">null</span> :
        !<span class=\"hljs-built_in\">isNaN</span>(num = <span class=\"hljs-built_in\">Number</span>(value)) ? num :
        <span class=\"hljs-regexp\">/^[\\[\\{]/</span>.test(value) ? \$.parseJSON(value) :
        value)
        : value;
    } <span class=\"hljs-keyword\">catch</span> (e) { <span class=\"hljs-keyword\">return</span> value; }
  },</pre></div></div>
            
        </li>
        
        
        <li id=\"section-5\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-5\">&#182;</a>
              </div>
              <p>Zepto camelize function</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  camelize: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">str</span>) </span>{
    <span class=\"hljs-keyword\">return</span> str.replace(<span class=\"hljs-regexp\">/-+(.)?/g</span>, <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">match, chr</span>) </span>{
      <span class=\"hljs-keyword\">return</span> chr ? chr.toUpperCase() : <span class=\"hljs-string\">''</span>;
    });
  },</pre></div></div>
            
        </li>
        
        
        <li id=\"section-6\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-6\">&#182;</a>
              </div>
              <p>Zepto dasherize function</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  dasherize: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">str</span>) </span>{
    <span class=\"hljs-keyword\">return</span> str.replace(<span class=\"hljs-regexp\">/::/g</span>, <span class=\"hljs-string\">'/'</span>)
      .replace(<span class=\"hljs-regexp\">/([A-Z]+)([A-Z][a-z])/g</span>, <span class=\"hljs-string\">'\$1_\$2'</span>)
      .replace(<span class=\"hljs-regexp\">/([a-z\\d])([A-Z])/g</span>, <span class=\"hljs-string\">'\$1_\$2'</span>)
      .replace(<span class=\"hljs-regexp\">/_/g</span>, <span class=\"hljs-string\">'-'</span>)
      .toLowerCase();
  },

  <span class=\"hljs-attr\">warn</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\"></span>) </span>{
    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-built_in\">window</span>.console &amp;&amp; <span class=\"hljs-string\">'function'</span> === <span class=\"hljs-keyword\">typeof</span> <span class=\"hljs-built_in\">window</span>.console.warn)
      <span class=\"hljs-built_in\">window</span>.console.warn(...arguments);
  },

  <span class=\"hljs-attr\">warnOnce</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span>(<span class=\"hljs-params\">msg</span>) </span>{
    <span class=\"hljs-keyword\">if</span> (!pastWarnings[msg]) {
      pastWarnings[msg] = <span class=\"hljs-literal\">true</span>;
      <span class=\"hljs-keyword\">this</span>.warn(...arguments);
    }
  },

  <span class=\"hljs-attr\">_resetWarnings</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\"></span>) </span>{
    pastWarnings = {};
  },

  <span class=\"hljs-attr\">trimString</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span>(<span class=\"hljs-params\">string</span>) </span>{
    <span class=\"hljs-keyword\">return</span> string.replace(<span class=\"hljs-regexp\">/^\\s+|\\s+\$/g</span>, <span class=\"hljs-string\">''</span>);
  },

  <span class=\"hljs-attr\">parse</span>: {
    <span class=\"hljs-attr\">date</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span>(<span class=\"hljs-params\">string</span>) </span>{
      <span class=\"hljs-keyword\">let</span> parsed = string.match(<span class=\"hljs-regexp\">/^(\\d{4,})-(\\d\\d)-(\\d\\d)\$/</span>);
      <span class=\"hljs-keyword\">if</span> (!parsed)
        <span class=\"hljs-keyword\">return</span> <span class=\"hljs-literal\">null</span>;
      <span class=\"hljs-keyword\">let</span> [_, year, month, day] = parsed.map(<span class=\"hljs-function\"><span class=\"hljs-params\">x</span> =&gt;</span> <span class=\"hljs-built_in\">parseInt</span>(x, <span class=\"hljs-number\">10</span>));
      <span class=\"hljs-keyword\">let</span> date = <span class=\"hljs-keyword\">new</span> <span class=\"hljs-built_in\">Date</span>(year, month - <span class=\"hljs-number\">1</span>, day);
      <span class=\"hljs-keyword\">if</span> (date.getFullYear() !== year || date.getMonth() + <span class=\"hljs-number\">1</span> !== month || date.getDate() !== day)
        <span class=\"hljs-keyword\">return</span> <span class=\"hljs-literal\">null</span>;
      <span class=\"hljs-keyword\">return</span> date;
    },
    <span class=\"hljs-attr\">string</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span>(<span class=\"hljs-params\">string</span>) </span>{
      <span class=\"hljs-keyword\">return</span> string;
    },
    <span class=\"hljs-attr\">integer</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span>(<span class=\"hljs-params\">string</span>) </span>{
      <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-built_in\">isNaN</span>(string))
        <span class=\"hljs-keyword\">return</span> <span class=\"hljs-literal\">null</span>;
      <span class=\"hljs-keyword\">return</span> <span class=\"hljs-built_in\">parseInt</span>(string, <span class=\"hljs-number\">10</span>);
    },
    <span class=\"hljs-attr\">number</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span>(<span class=\"hljs-params\">string</span>) </span>{
      <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-built_in\">isNaN</span>(string))
        <span class=\"hljs-keyword\">throw</span> <span class=\"hljs-literal\">null</span>;
      <span class=\"hljs-keyword\">return</span> <span class=\"hljs-built_in\">parseFloat</span>(string);
    },
    <span class=\"hljs-string\">'boolean'</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> <span class=\"hljs-title\">_boolean</span>(<span class=\"hljs-params\">string</span>) </span>{
      <span class=\"hljs-keyword\">return</span> !(<span class=\"hljs-regexp\">/^\\s*false\\s*\$/i</span>.test(string));
    },
    <span class=\"hljs-attr\">object</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span>(<span class=\"hljs-params\">string</span>) </span>{
      <span class=\"hljs-keyword\">return</span> Utils.deserializeValue(string);
    },
    <span class=\"hljs-attr\">regexp</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span>(<span class=\"hljs-params\">regexp</span>) </span>{
      <span class=\"hljs-keyword\">var</span> flags = <span class=\"hljs-string\">''</span>;</pre></div></div>
            
        </li>
        
        
        <li id=\"section-7\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-7\">&#182;</a>
              </div>
              <p>Test if RegExp is literal, if not, nothing to be done, otherwise, we need to isolate flags and pattern</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>      <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-regexp\">/^\\/.*\\/(?:[gimy]*)\$/</span>.test(regexp)) {</pre></div></div>
            
        </li>
        
        
        <li id=\"section-8\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-8\">&#182;</a>
              </div>
              <p>Replace the regexp literal string with the first match group: ([gimy]*)
If no flag is present, this will be a blank string</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>        flags = regexp.replace(<span class=\"hljs-regexp\">/.*\\/([gimy]*)\$/</span>, <span class=\"hljs-string\">'\$1'</span>);</pre></div></div>
            
        </li>
        
        
        <li id=\"section-9\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-9\">&#182;</a>
              </div>
              <p>Again, replace the regexp literal string with the first match group:
everything excluding the opening and closing slashes and the flags</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>        regexp = regexp.replace(<span class=\"hljs-keyword\">new</span> <span class=\"hljs-built_in\">RegExp</span>(<span class=\"hljs-string\">'^/(.*?)/'</span> + flags + <span class=\"hljs-string\">'\$'</span>), <span class=\"hljs-string\">'\$1'</span>);
      } <span class=\"hljs-keyword\">else</span> {</pre></div></div>
            
        </li>
        
        
        <li id=\"section-10\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-10\">&#182;</a>
              </div>
              <p>Anchor regexp:</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>        regexp = <span class=\"hljs-string\">'^'</span> + regexp + <span class=\"hljs-string\">'\$'</span>;
      }
      <span class=\"hljs-keyword\">return</span> <span class=\"hljs-keyword\">new</span> <span class=\"hljs-built_in\">RegExp</span>(regexp, flags);
    }
  },

  <span class=\"hljs-attr\">parseRequirement</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span>(<span class=\"hljs-params\">requirementType, string</span>) </span>{
    <span class=\"hljs-keyword\">var</span> converter = <span class=\"hljs-keyword\">this</span>.parse[requirementType || <span class=\"hljs-string\">'string'</span>];
    <span class=\"hljs-keyword\">if</span> (!converter)
      <span class=\"hljs-keyword\">throw</span> <span class=\"hljs-string\">'Unknown requirement specification: \"'</span> + requirementType + <span class=\"hljs-string\">'\"'</span>;
    <span class=\"hljs-keyword\">let</span> converted = converter(string);
    <span class=\"hljs-keyword\">if</span> (converted === <span class=\"hljs-literal\">null</span>)
      <span class=\"hljs-keyword\">throw</span> <span class=\"hljs-string\">`Requirement is not a <span class=\"hljs-subst\">\${requirementType}</span>: \"<span class=\"hljs-subst\">\${string}</span>\"`</span>;
    <span class=\"hljs-keyword\">return</span> converted;
  },

  <span class=\"hljs-attr\">namespaceEvents</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span>(<span class=\"hljs-params\">events, namespace</span>) </span>{
    events = <span class=\"hljs-keyword\">this</span>.trimString(events || <span class=\"hljs-string\">''</span>).split(<span class=\"hljs-regexp\">/\\s+/</span>);
    <span class=\"hljs-keyword\">if</span> (!events[<span class=\"hljs-number\">0</span>])
      <span class=\"hljs-keyword\">return</span> <span class=\"hljs-string\">''</span>;
    <span class=\"hljs-keyword\">return</span> \$.map(events, evt =&gt; <span class=\"hljs-string\">`<span class=\"hljs-subst\">\${evt}</span>.<span class=\"hljs-subst\">\${namespace}</span>`</span>).join(<span class=\"hljs-string\">' '</span>);
  },

  <span class=\"hljs-attr\">difference</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span>(<span class=\"hljs-params\">array, remove</span>) </span>{</pre></div></div>
            
        </li>
        
        
        <li id=\"section-11\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-11\">&#182;</a>
              </div>
              <p>This is O(N^2), should be optimized</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">let</span> result = [];
    \$.each(array, (_, elem) =&gt; {
      <span class=\"hljs-keyword\">if</span> (remove.indexOf(elem) == <span class=\"hljs-number\">-1</span>)
        result.push(elem);
    });
    <span class=\"hljs-keyword\">return</span> result;
  },</pre></div></div>
            
        </li>
        
        
        <li id=\"section-12\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-12\">&#182;</a>
              </div>
              <p>Alter-ego to native Promise.all, but for jQuery</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  all: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span>(<span class=\"hljs-params\">promises</span>) </span>{</pre></div></div>
            
        </li>
        
        
        <li id=\"section-13\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-13\">&#182;</a>
              </div>
              <p>jQuery treats \$.when() and \$.when(singlePromise) differently; let’s avoid that and add spurious elements</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">return</span> \$.when(...promises, <span class=\"hljs-number\">42</span>, <span class=\"hljs-number\">42</span>);
  },</pre></div></div>
            
        </li>
        
        
        <li id=\"section-14\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-14\">&#182;</a>
              </div>
              <p>Object.create polyfill, see <a href=\"https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Object/create#Polyfill\">https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Object/create#Polyfill</a></p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  objectCreate: <span class=\"hljs-built_in\">Object</span>.create || (<span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\"></span>) </span>{
    <span class=\"hljs-keyword\">var</span> <span class=\"hljs-built_in\">Object</span> = <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\"></span>) </span>{};
    <span class=\"hljs-keyword\">return</span> <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">prototype</span>) </span>{
      <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-built_in\">arguments</span>.length &gt; <span class=\"hljs-number\">1</span>) {
        <span class=\"hljs-keyword\">throw</span> <span class=\"hljs-built_in\">Error</span>(<span class=\"hljs-string\">'Second argument not supported'</span>);
      }
      <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-keyword\">typeof</span> prototype != <span class=\"hljs-string\">'object'</span>) {
        <span class=\"hljs-keyword\">throw</span> <span class=\"hljs-built_in\">TypeError</span>(<span class=\"hljs-string\">'Argument must be an object'</span>);
      }
      <span class=\"hljs-built_in\">Object</span>.prototype = prototype;
      <span class=\"hljs-keyword\">var</span> result = <span class=\"hljs-keyword\">new</span> <span class=\"hljs-built_in\">Object</span>();
      <span class=\"hljs-built_in\">Object</span>.prototype = <span class=\"hljs-literal\">null</span>;
      <span class=\"hljs-keyword\">return</span> result;
    };
  })(),

  <span class=\"hljs-attr\">_SubmitSelector</span>: <span class=\"hljs-string\">'input[type=\"submit\"], button:submit'</span>
};

<span class=\"hljs-keyword\">export</span> <span class=\"hljs-keyword\">default</span> Utils;</pre></div></div>
            
        </li>
        
    </ul>
  </div>
<script>var _gaq=_gaq||[];_gaq.push([\"_setAccount\",\"UA-37229467-1\"]);_gaq.push([\"_trackPageview\"]);(function(){var e=document.createElement(\"script\");e.type=\"text/javascript\";e.async=true;e.src=(\"https:\"==document.location.protocol?\"https://ssl\":\"http://www\")+\".google-analytics.com/ga.js\";var t=document.getElementsByTagName(\"script\")[0];t.parentNode.insertBefore(e,t)})();</script></body>
</html>
";
        
        $__internal_f269c91217c0a4e7e564feffdd842db7481ca9735cf88e8d25c5abd14934c522->leave($__internal_f269c91217c0a4e7e564feffdd842db7481ca9735cf88e8d25c5abd14934c522_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/doc/annotated-source/utils.html";
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
  <title>utils.js</title>
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
                  <h1>utils.js</h1>
              </div>
          </li>
        
        
        
        <li id=\"section-1\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-1\">&#182;</a>
              </div>
              
            </div>
            
            <div class=\"content\"><div class='highlight'><pre><span class=\"hljs-keyword\">import</span> \$ <span class=\"hljs-keyword\">from</span> <span class=\"hljs-string\">'jquery'</span>;

<span class=\"hljs-keyword\">var</span> globalID = <span class=\"hljs-number\">1</span>;
<span class=\"hljs-keyword\">var</span> pastWarnings = {};

<span class=\"hljs-keyword\">var</span> Utils = {</pre></div></div>
            
        </li>
        
        
        <li id=\"section-2\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-2\">&#182;</a>
              </div>
              <p>Parsley DOM-API
returns object from dom attributes and values</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  attr: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">element, namespace, obj</span>) </span>{
    <span class=\"hljs-keyword\">var</span> i;
    <span class=\"hljs-keyword\">var</span> attribute;
    <span class=\"hljs-keyword\">var</span> attributes;
    <span class=\"hljs-keyword\">var</span> regex = <span class=\"hljs-keyword\">new</span> <span class=\"hljs-built_in\">RegExp</span>(<span class=\"hljs-string\">'^'</span> + namespace, <span class=\"hljs-string\">'i'</span>);

    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-string\">'undefined'</span> === <span class=\"hljs-keyword\">typeof</span> obj)
      obj = {};
    <span class=\"hljs-keyword\">else</span> {</pre></div></div>
            
        </li>
        
        
        <li id=\"section-3\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-3\">&#182;</a>
              </div>
              <p>Clear all own properties. This won’t affect prototype’s values</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>      <span class=\"hljs-keyword\">for</span> (i <span class=\"hljs-keyword\">in</span> obj) {
        <span class=\"hljs-keyword\">if</span> (obj.hasOwnProperty(i))
          <span class=\"hljs-keyword\">delete</span> obj[i];
      }
    }

    <span class=\"hljs-keyword\">if</span> (!element)
      <span class=\"hljs-keyword\">return</span> obj;

    attributes = element.attributes;
    <span class=\"hljs-keyword\">for</span> (i = attributes.length; i--; ) {
      attribute = attributes[i];

      <span class=\"hljs-keyword\">if</span> (attribute &amp;&amp; attribute.specified &amp;&amp; regex.test(attribute.name)) {
        obj[<span class=\"hljs-keyword\">this</span>.camelize(attribute.name.slice(namespace.length))] = <span class=\"hljs-keyword\">this</span>.deserializeValue(attribute.value);
      }
    }

    <span class=\"hljs-keyword\">return</span> obj;
  },

  <span class=\"hljs-attr\">checkAttr</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">element, namespace, checkAttr</span>) </span>{
    <span class=\"hljs-keyword\">return</span> element.hasAttribute(namespace + checkAttr);
  },

  <span class=\"hljs-attr\">setAttr</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">element, namespace, attr, value</span>) </span>{
    element.setAttribute(<span class=\"hljs-keyword\">this</span>.dasherize(namespace + attr), <span class=\"hljs-built_in\">String</span>(value));
  },

  <span class=\"hljs-attr\">generateID</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\"></span>) </span>{
    <span class=\"hljs-keyword\">return</span> <span class=\"hljs-string\">''</span> + globalID++;
  },

  <span class=\"hljs-comment\">/** Third party functions **/</span></pre></div></div>
            
        </li>
        
        
        <li id=\"section-4\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-4\">&#182;</a>
              </div>
              <p>Zepto deserialize function</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  deserializeValue: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">value</span>) </span>{
    <span class=\"hljs-keyword\">var</span> num;

    <span class=\"hljs-keyword\">try</span> {
      <span class=\"hljs-keyword\">return</span> value ?
        value == <span class=\"hljs-string\">\"true\"</span> ||
        (value == <span class=\"hljs-string\">\"false\"</span> ? <span class=\"hljs-literal\">false</span> :
        value == <span class=\"hljs-string\">\"null\"</span> ? <span class=\"hljs-literal\">null</span> :
        !<span class=\"hljs-built_in\">isNaN</span>(num = <span class=\"hljs-built_in\">Number</span>(value)) ? num :
        <span class=\"hljs-regexp\">/^[\\[\\{]/</span>.test(value) ? \$.parseJSON(value) :
        value)
        : value;
    } <span class=\"hljs-keyword\">catch</span> (e) { <span class=\"hljs-keyword\">return</span> value; }
  },</pre></div></div>
            
        </li>
        
        
        <li id=\"section-5\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-5\">&#182;</a>
              </div>
              <p>Zepto camelize function</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  camelize: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">str</span>) </span>{
    <span class=\"hljs-keyword\">return</span> str.replace(<span class=\"hljs-regexp\">/-+(.)?/g</span>, <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">match, chr</span>) </span>{
      <span class=\"hljs-keyword\">return</span> chr ? chr.toUpperCase() : <span class=\"hljs-string\">''</span>;
    });
  },</pre></div></div>
            
        </li>
        
        
        <li id=\"section-6\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-6\">&#182;</a>
              </div>
              <p>Zepto dasherize function</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  dasherize: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">str</span>) </span>{
    <span class=\"hljs-keyword\">return</span> str.replace(<span class=\"hljs-regexp\">/::/g</span>, <span class=\"hljs-string\">'/'</span>)
      .replace(<span class=\"hljs-regexp\">/([A-Z]+)([A-Z][a-z])/g</span>, <span class=\"hljs-string\">'\$1_\$2'</span>)
      .replace(<span class=\"hljs-regexp\">/([a-z\\d])([A-Z])/g</span>, <span class=\"hljs-string\">'\$1_\$2'</span>)
      .replace(<span class=\"hljs-regexp\">/_/g</span>, <span class=\"hljs-string\">'-'</span>)
      .toLowerCase();
  },

  <span class=\"hljs-attr\">warn</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\"></span>) </span>{
    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-built_in\">window</span>.console &amp;&amp; <span class=\"hljs-string\">'function'</span> === <span class=\"hljs-keyword\">typeof</span> <span class=\"hljs-built_in\">window</span>.console.warn)
      <span class=\"hljs-built_in\">window</span>.console.warn(...arguments);
  },

  <span class=\"hljs-attr\">warnOnce</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span>(<span class=\"hljs-params\">msg</span>) </span>{
    <span class=\"hljs-keyword\">if</span> (!pastWarnings[msg]) {
      pastWarnings[msg] = <span class=\"hljs-literal\">true</span>;
      <span class=\"hljs-keyword\">this</span>.warn(...arguments);
    }
  },

  <span class=\"hljs-attr\">_resetWarnings</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\"></span>) </span>{
    pastWarnings = {};
  },

  <span class=\"hljs-attr\">trimString</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span>(<span class=\"hljs-params\">string</span>) </span>{
    <span class=\"hljs-keyword\">return</span> string.replace(<span class=\"hljs-regexp\">/^\\s+|\\s+\$/g</span>, <span class=\"hljs-string\">''</span>);
  },

  <span class=\"hljs-attr\">parse</span>: {
    <span class=\"hljs-attr\">date</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span>(<span class=\"hljs-params\">string</span>) </span>{
      <span class=\"hljs-keyword\">let</span> parsed = string.match(<span class=\"hljs-regexp\">/^(\\d{4,})-(\\d\\d)-(\\d\\d)\$/</span>);
      <span class=\"hljs-keyword\">if</span> (!parsed)
        <span class=\"hljs-keyword\">return</span> <span class=\"hljs-literal\">null</span>;
      <span class=\"hljs-keyword\">let</span> [_, year, month, day] = parsed.map(<span class=\"hljs-function\"><span class=\"hljs-params\">x</span> =&gt;</span> <span class=\"hljs-built_in\">parseInt</span>(x, <span class=\"hljs-number\">10</span>));
      <span class=\"hljs-keyword\">let</span> date = <span class=\"hljs-keyword\">new</span> <span class=\"hljs-built_in\">Date</span>(year, month - <span class=\"hljs-number\">1</span>, day);
      <span class=\"hljs-keyword\">if</span> (date.getFullYear() !== year || date.getMonth() + <span class=\"hljs-number\">1</span> !== month || date.getDate() !== day)
        <span class=\"hljs-keyword\">return</span> <span class=\"hljs-literal\">null</span>;
      <span class=\"hljs-keyword\">return</span> date;
    },
    <span class=\"hljs-attr\">string</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span>(<span class=\"hljs-params\">string</span>) </span>{
      <span class=\"hljs-keyword\">return</span> string;
    },
    <span class=\"hljs-attr\">integer</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span>(<span class=\"hljs-params\">string</span>) </span>{
      <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-built_in\">isNaN</span>(string))
        <span class=\"hljs-keyword\">return</span> <span class=\"hljs-literal\">null</span>;
      <span class=\"hljs-keyword\">return</span> <span class=\"hljs-built_in\">parseInt</span>(string, <span class=\"hljs-number\">10</span>);
    },
    <span class=\"hljs-attr\">number</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span>(<span class=\"hljs-params\">string</span>) </span>{
      <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-built_in\">isNaN</span>(string))
        <span class=\"hljs-keyword\">throw</span> <span class=\"hljs-literal\">null</span>;
      <span class=\"hljs-keyword\">return</span> <span class=\"hljs-built_in\">parseFloat</span>(string);
    },
    <span class=\"hljs-string\">'boolean'</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> <span class=\"hljs-title\">_boolean</span>(<span class=\"hljs-params\">string</span>) </span>{
      <span class=\"hljs-keyword\">return</span> !(<span class=\"hljs-regexp\">/^\\s*false\\s*\$/i</span>.test(string));
    },
    <span class=\"hljs-attr\">object</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span>(<span class=\"hljs-params\">string</span>) </span>{
      <span class=\"hljs-keyword\">return</span> Utils.deserializeValue(string);
    },
    <span class=\"hljs-attr\">regexp</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span>(<span class=\"hljs-params\">regexp</span>) </span>{
      <span class=\"hljs-keyword\">var</span> flags = <span class=\"hljs-string\">''</span>;</pre></div></div>
            
        </li>
        
        
        <li id=\"section-7\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-7\">&#182;</a>
              </div>
              <p>Test if RegExp is literal, if not, nothing to be done, otherwise, we need to isolate flags and pattern</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>      <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-regexp\">/^\\/.*\\/(?:[gimy]*)\$/</span>.test(regexp)) {</pre></div></div>
            
        </li>
        
        
        <li id=\"section-8\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-8\">&#182;</a>
              </div>
              <p>Replace the regexp literal string with the first match group: ([gimy]*)
If no flag is present, this will be a blank string</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>        flags = regexp.replace(<span class=\"hljs-regexp\">/.*\\/([gimy]*)\$/</span>, <span class=\"hljs-string\">'\$1'</span>);</pre></div></div>
            
        </li>
        
        
        <li id=\"section-9\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-9\">&#182;</a>
              </div>
              <p>Again, replace the regexp literal string with the first match group:
everything excluding the opening and closing slashes and the flags</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>        regexp = regexp.replace(<span class=\"hljs-keyword\">new</span> <span class=\"hljs-built_in\">RegExp</span>(<span class=\"hljs-string\">'^/(.*?)/'</span> + flags + <span class=\"hljs-string\">'\$'</span>), <span class=\"hljs-string\">'\$1'</span>);
      } <span class=\"hljs-keyword\">else</span> {</pre></div></div>
            
        </li>
        
        
        <li id=\"section-10\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-10\">&#182;</a>
              </div>
              <p>Anchor regexp:</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>        regexp = <span class=\"hljs-string\">'^'</span> + regexp + <span class=\"hljs-string\">'\$'</span>;
      }
      <span class=\"hljs-keyword\">return</span> <span class=\"hljs-keyword\">new</span> <span class=\"hljs-built_in\">RegExp</span>(regexp, flags);
    }
  },

  <span class=\"hljs-attr\">parseRequirement</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span>(<span class=\"hljs-params\">requirementType, string</span>) </span>{
    <span class=\"hljs-keyword\">var</span> converter = <span class=\"hljs-keyword\">this</span>.parse[requirementType || <span class=\"hljs-string\">'string'</span>];
    <span class=\"hljs-keyword\">if</span> (!converter)
      <span class=\"hljs-keyword\">throw</span> <span class=\"hljs-string\">'Unknown requirement specification: \"'</span> + requirementType + <span class=\"hljs-string\">'\"'</span>;
    <span class=\"hljs-keyword\">let</span> converted = converter(string);
    <span class=\"hljs-keyword\">if</span> (converted === <span class=\"hljs-literal\">null</span>)
      <span class=\"hljs-keyword\">throw</span> <span class=\"hljs-string\">`Requirement is not a <span class=\"hljs-subst\">\${requirementType}</span>: \"<span class=\"hljs-subst\">\${string}</span>\"`</span>;
    <span class=\"hljs-keyword\">return</span> converted;
  },

  <span class=\"hljs-attr\">namespaceEvents</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span>(<span class=\"hljs-params\">events, namespace</span>) </span>{
    events = <span class=\"hljs-keyword\">this</span>.trimString(events || <span class=\"hljs-string\">''</span>).split(<span class=\"hljs-regexp\">/\\s+/</span>);
    <span class=\"hljs-keyword\">if</span> (!events[<span class=\"hljs-number\">0</span>])
      <span class=\"hljs-keyword\">return</span> <span class=\"hljs-string\">''</span>;
    <span class=\"hljs-keyword\">return</span> \$.map(events, evt =&gt; <span class=\"hljs-string\">`<span class=\"hljs-subst\">\${evt}</span>.<span class=\"hljs-subst\">\${namespace}</span>`</span>).join(<span class=\"hljs-string\">' '</span>);
  },

  <span class=\"hljs-attr\">difference</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span>(<span class=\"hljs-params\">array, remove</span>) </span>{</pre></div></div>
            
        </li>
        
        
        <li id=\"section-11\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-11\">&#182;</a>
              </div>
              <p>This is O(N^2), should be optimized</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">let</span> result = [];
    \$.each(array, (_, elem) =&gt; {
      <span class=\"hljs-keyword\">if</span> (remove.indexOf(elem) == <span class=\"hljs-number\">-1</span>)
        result.push(elem);
    });
    <span class=\"hljs-keyword\">return</span> result;
  },</pre></div></div>
            
        </li>
        
        
        <li id=\"section-12\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-12\">&#182;</a>
              </div>
              <p>Alter-ego to native Promise.all, but for jQuery</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  all: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span>(<span class=\"hljs-params\">promises</span>) </span>{</pre></div></div>
            
        </li>
        
        
        <li id=\"section-13\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-13\">&#182;</a>
              </div>
              <p>jQuery treats \$.when() and \$.when(singlePromise) differently; let’s avoid that and add spurious elements</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">return</span> \$.when(...promises, <span class=\"hljs-number\">42</span>, <span class=\"hljs-number\">42</span>);
  },</pre></div></div>
            
        </li>
        
        
        <li id=\"section-14\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-14\">&#182;</a>
              </div>
              <p>Object.create polyfill, see <a href=\"https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Object/create#Polyfill\">https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Object/create#Polyfill</a></p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  objectCreate: <span class=\"hljs-built_in\">Object</span>.create || (<span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\"></span>) </span>{
    <span class=\"hljs-keyword\">var</span> <span class=\"hljs-built_in\">Object</span> = <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\"></span>) </span>{};
    <span class=\"hljs-keyword\">return</span> <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">prototype</span>) </span>{
      <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-built_in\">arguments</span>.length &gt; <span class=\"hljs-number\">1</span>) {
        <span class=\"hljs-keyword\">throw</span> <span class=\"hljs-built_in\">Error</span>(<span class=\"hljs-string\">'Second argument not supported'</span>);
      }
      <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-keyword\">typeof</span> prototype != <span class=\"hljs-string\">'object'</span>) {
        <span class=\"hljs-keyword\">throw</span> <span class=\"hljs-built_in\">TypeError</span>(<span class=\"hljs-string\">'Argument must be an object'</span>);
      }
      <span class=\"hljs-built_in\">Object</span>.prototype = prototype;
      <span class=\"hljs-keyword\">var</span> result = <span class=\"hljs-keyword\">new</span> <span class=\"hljs-built_in\">Object</span>();
      <span class=\"hljs-built_in\">Object</span>.prototype = <span class=\"hljs-literal\">null</span>;
      <span class=\"hljs-keyword\">return</span> result;
    };
  })(),

  <span class=\"hljs-attr\">_SubmitSelector</span>: <span class=\"hljs-string\">'input[type=\"submit\"], button:submit'</span>
};

<span class=\"hljs-keyword\">export</span> <span class=\"hljs-keyword\">default</span> Utils;</pre></div></div>
            
        </li>
        
    </ul>
  </div>
<script>var _gaq=_gaq||[];_gaq.push([\"_setAccount\",\"UA-37229467-1\"]);_gaq.push([\"_trackPageview\"]);(function(){var e=document.createElement(\"script\");e.type=\"text/javascript\";e.async=true;e.src=(\"https:\"==document.location.protocol?\"https://ssl\":\"http://www\")+\".google-analytics.com/ga.js\";var t=document.getElementsByTagName(\"script\")[0];t.parentNode.insertBefore(e,t)})();</script></body>
</html>
", "node_modules/parsleyjs/doc/annotated-source/utils.html", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/doc/annotated-source/utils.html");
    }
}
