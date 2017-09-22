<?php

/* node_modules/parsleyjs/doc/annotated-source/ui.html */
class __TwigTemplate_d452caec055cffd5940d73a9171637c5660ddefc3d434adce17c9c19ed57fd9a extends Twig_Template
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
        $__internal_3e06b5cb632b8b5e8b925c876358cc056bd2f06c6c1bc0cbd3f4df442f781334 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e06b5cb632b8b5e8b925c876358cc056bd2f06c6c1bc0cbd3f4df442f781334->enter($__internal_3e06b5cb632b8b5e8b925c876358cc056bd2f06c6c1bc0cbd3f4df442f781334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/doc/annotated-source/ui.html"));

        // line 1
        echo "<!DOCTYPE html>

<html>
<head>
  <title>ui.js</title>
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
                  <h1>ui.js</h1>
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

<span class=\"hljs-keyword\">var</span> UI = {};

<span class=\"hljs-keyword\">var</span> diffResults = <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">newResult, oldResult, deep</span>) </span>{
  <span class=\"hljs-keyword\">var</span> added = [];
  <span class=\"hljs-keyword\">var</span> kept = [];

  <span class=\"hljs-keyword\">for</span> (<span class=\"hljs-keyword\">var</span> i = <span class=\"hljs-number\">0</span>; i &lt; newResult.length; i++) {
    <span class=\"hljs-keyword\">var</span> found = <span class=\"hljs-literal\">false</span>;

    <span class=\"hljs-keyword\">for</span> (<span class=\"hljs-keyword\">var</span> j = <span class=\"hljs-number\">0</span>; j &lt; oldResult.length; j++)
      <span class=\"hljs-keyword\">if</span> (newResult[i].assert.name === oldResult[j].assert.name) {
        found = <span class=\"hljs-literal\">true</span>;
        <span class=\"hljs-keyword\">break</span>;
      }

    <span class=\"hljs-keyword\">if</span> (found)
      kept.push(newResult[i]);
    <span class=\"hljs-keyword\">else</span>
      added.push(newResult[i]);
  }

  <span class=\"hljs-keyword\">return</span> {
    <span class=\"hljs-attr\">kept</span>: kept,
    <span class=\"hljs-attr\">added</span>: added,
    <span class=\"hljs-attr\">removed</span>: !deep ? diffResults(oldResult, newResult, <span class=\"hljs-literal\">true</span>).added : []
  };
};

UI.Form = {

  <span class=\"hljs-attr\">_actualizeTriggers</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\"></span>) </span>{
    <span class=\"hljs-keyword\">this</span>.\$element.on(<span class=\"hljs-string\">'submit.Parsley'</span>, evt =&gt; { <span class=\"hljs-keyword\">this</span>.onSubmitValidate(evt); });
    <span class=\"hljs-keyword\">this</span>.\$element.on(<span class=\"hljs-string\">'click.Parsley'</span>, Utils._SubmitSelector, evt =&gt; { <span class=\"hljs-keyword\">this</span>.onSubmitButton(evt); });</pre></div></div>
            
        </li>
        
        
        <li id=\"section-2\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-2\">&#182;</a>
              </div>
              <p>UI could be disabled</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-literal\">false</span> === <span class=\"hljs-keyword\">this</span>.options.uiEnabled)
      <span class=\"hljs-keyword\">return</span>;

    <span class=\"hljs-keyword\">this</span>.element.setAttribute(<span class=\"hljs-string\">'novalidate'</span>, <span class=\"hljs-string\">''</span>);
  },

  <span class=\"hljs-attr\">focus</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\"></span>) </span>{
    <span class=\"hljs-keyword\">this</span>._focusedField = <span class=\"hljs-literal\">null</span>;

    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-literal\">true</span> === <span class=\"hljs-keyword\">this</span>.validationResult || <span class=\"hljs-string\">'none'</span> === <span class=\"hljs-keyword\">this</span>.options.focus)
      <span class=\"hljs-keyword\">return</span> <span class=\"hljs-literal\">null</span>;

    <span class=\"hljs-keyword\">for</span> (<span class=\"hljs-keyword\">var</span> i = <span class=\"hljs-number\">0</span>; i &lt; <span class=\"hljs-keyword\">this</span>.fields.length; i++) {
      <span class=\"hljs-keyword\">var</span> field = <span class=\"hljs-keyword\">this</span>.fields[i];
      <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-literal\">true</span> !== field.validationResult &amp;&amp; field.validationResult.length &gt; <span class=\"hljs-number\">0</span> &amp;&amp; <span class=\"hljs-string\">'undefined'</span> === <span class=\"hljs-keyword\">typeof</span> field.options.noFocus) {
        <span class=\"hljs-keyword\">this</span>._focusedField = field.\$element;
        <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-string\">'first'</span> === <span class=\"hljs-keyword\">this</span>.options.focus)
          <span class=\"hljs-keyword\">break</span>;
      }
    }

    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-literal\">null</span> === <span class=\"hljs-keyword\">this</span>._focusedField)
      <span class=\"hljs-keyword\">return</span> <span class=\"hljs-literal\">null</span>;

    <span class=\"hljs-keyword\">return</span> <span class=\"hljs-keyword\">this</span>._focusedField.focus();
  },

  <span class=\"hljs-attr\">_destroyUI</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\"></span>) </span>{</pre></div></div>
            
        </li>
        
        
        <li id=\"section-3\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-3\">&#182;</a>
              </div>
              <p>Reset all event listeners</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">this</span>.\$element.off(<span class=\"hljs-string\">'.Parsley'</span>);
  }

};

UI.Field = {

  <span class=\"hljs-attr\">_reflowUI</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\"></span>) </span>{
    <span class=\"hljs-keyword\">this</span>._buildUI();</pre></div></div>
            
        </li>
        
        
        <li id=\"section-4\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-4\">&#182;</a>
              </div>
              <p>If this field doesn’t have an active UI don’t bother doing something</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">if</span> (!<span class=\"hljs-keyword\">this</span>._ui)
      <span class=\"hljs-keyword\">return</span>;</pre></div></div>
            
        </li>
        
        
        <li id=\"section-5\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-5\">&#182;</a>
              </div>
              <p>Diff between two validation results</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">var</span> diff = diffResults(<span class=\"hljs-keyword\">this</span>.validationResult, <span class=\"hljs-keyword\">this</span>._ui.lastValidationResult);</pre></div></div>
            
        </li>
        
        
        <li id=\"section-6\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-6\">&#182;</a>
              </div>
              <p>Then store current validation result for next reflow</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">this</span>._ui.lastValidationResult = <span class=\"hljs-keyword\">this</span>.validationResult;</pre></div></div>
            
        </li>
        
        
        <li id=\"section-7\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-7\">&#182;</a>
              </div>
              <p>Handle valid / invalid / none field class</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">this</span>._manageStatusClass();</pre></div></div>
            
        </li>
        
        
        <li id=\"section-8\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-8\">&#182;</a>
              </div>
              <p>Add, remove, updated errors messages</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">this</span>._manageErrorsMessages(diff);</pre></div></div>
            
        </li>
        
        
        <li id=\"section-9\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-9\">&#182;</a>
              </div>
              <p>Triggers impl</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">this</span>._actualizeTriggers();</pre></div></div>
            
        </li>
        
        
        <li id=\"section-10\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-10\">&#182;</a>
              </div>
              <p>If field is not valid for the first time, bind keyup trigger to ease UX and quickly inform user</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">if</span> ((diff.kept.length || diff.added.length) &amp;&amp; !<span class=\"hljs-keyword\">this</span>._failedOnce) {
      <span class=\"hljs-keyword\">this</span>._failedOnce = <span class=\"hljs-literal\">true</span>;
      <span class=\"hljs-keyword\">this</span>._actualizeTriggers();
    }
  },</pre></div></div>
            
        </li>
        
        
        <li id=\"section-11\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-11\">&#182;</a>
              </div>
              <p>Returns an array of field’s error message(s)</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  getErrorsMessages: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\"></span>) </span>{</pre></div></div>
            
        </li>
        
        
        <li id=\"section-12\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-12\">&#182;</a>
              </div>
              <p>No error message, field is valid</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-literal\">true</span> === <span class=\"hljs-keyword\">this</span>.validationResult)
      <span class=\"hljs-keyword\">return</span> [];

    <span class=\"hljs-keyword\">var</span> messages = [];

    <span class=\"hljs-keyword\">for</span> (<span class=\"hljs-keyword\">var</span> i = <span class=\"hljs-number\">0</span>; i &lt; <span class=\"hljs-keyword\">this</span>.validationResult.length; i++)
      messages.push(<span class=\"hljs-keyword\">this</span>.validationResult[i].errorMessage ||
       <span class=\"hljs-keyword\">this</span>._getErrorMessage(<span class=\"hljs-keyword\">this</span>.validationResult[i].assert));

    <span class=\"hljs-keyword\">return</span> messages;
  },</pre></div></div>
            
        </li>
        
        
        <li id=\"section-13\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-13\">&#182;</a>
              </div>
              <p>It’s a goal of Parsley that this method is no longer required [#1073]</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  addError: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">name, {message, assert, updateClass = true} = {}</span>) </span>{
    <span class=\"hljs-keyword\">this</span>._buildUI();
    <span class=\"hljs-keyword\">this</span>._addError(name, {message, assert});

    <span class=\"hljs-keyword\">if</span> (updateClass)
      <span class=\"hljs-keyword\">this</span>._errorClass();
  },</pre></div></div>
            
        </li>
        
        
        <li id=\"section-14\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-14\">&#182;</a>
              </div>
              <p>It’s a goal of Parsley that this method is no longer required [#1073]</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  updateError: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">name, {message, assert, updateClass = true} = {}</span>) </span>{
    <span class=\"hljs-keyword\">this</span>._buildUI();
    <span class=\"hljs-keyword\">this</span>._updateError(name, {message, assert});

    <span class=\"hljs-keyword\">if</span> (updateClass)
      <span class=\"hljs-keyword\">this</span>._errorClass();
  },</pre></div></div>
            
        </li>
        
        
        <li id=\"section-15\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-15\">&#182;</a>
              </div>
              <p>It’s a goal of Parsley that this method is no longer required [#1073]</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  removeError: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">name, {updateClass = true} = {}</span>) </span>{
    <span class=\"hljs-keyword\">this</span>._buildUI();
    <span class=\"hljs-keyword\">this</span>._removeError(name);</pre></div></div>
            
        </li>
        
        
        <li id=\"section-16\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-16\">&#182;</a>
              </div>
              <p>edge case possible here: remove a standard Parsley error that is still failing in this.validationResult
but highly improbable cuz’ manually removing a well Parsley handled error makes no sense.</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">if</span> (updateClass)
      <span class=\"hljs-keyword\">this</span>._manageStatusClass();
  },

  <span class=\"hljs-attr\">_manageStatusClass</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\"></span>) </span>{
    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-keyword\">this</span>.hasConstraints() &amp;&amp; <span class=\"hljs-keyword\">this</span>.needsValidation() &amp;&amp; <span class=\"hljs-literal\">true</span> === <span class=\"hljs-keyword\">this</span>.validationResult)
      <span class=\"hljs-keyword\">this</span>._successClass();
    <span class=\"hljs-keyword\">else</span> <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-keyword\">this</span>.validationResult.length &gt; <span class=\"hljs-number\">0</span>)
      <span class=\"hljs-keyword\">this</span>._errorClass();
    <span class=\"hljs-keyword\">else</span>
      <span class=\"hljs-keyword\">this</span>._resetClass();
  },

  <span class=\"hljs-attr\">_manageErrorsMessages</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">diff</span>) </span>{
    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-string\">'undefined'</span> !== <span class=\"hljs-keyword\">typeof</span> <span class=\"hljs-keyword\">this</span>.options.errorsMessagesDisabled)
      <span class=\"hljs-keyword\">return</span>;</pre></div></div>
            
        </li>
        
        
        <li id=\"section-17\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-17\">&#182;</a>
              </div>
              <p>Case where we have errorMessage option that configure an unique field error message, regardless failing validators</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-string\">'undefined'</span> !== <span class=\"hljs-keyword\">typeof</span> <span class=\"hljs-keyword\">this</span>.options.errorMessage) {
      <span class=\"hljs-keyword\">if</span> ((diff.added.length || diff.kept.length)) {
        <span class=\"hljs-keyword\">this</span>._insertErrorWrapper();

        <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-number\">0</span> === <span class=\"hljs-keyword\">this</span>._ui.\$errorsWrapper.find(<span class=\"hljs-string\">'.parsley-custom-error-message'</span>).length)
          <span class=\"hljs-keyword\">this</span>._ui.\$errorsWrapper
            .append(
              \$(<span class=\"hljs-keyword\">this</span>.options.errorTemplate)
              .addClass(<span class=\"hljs-string\">'parsley-custom-error-message'</span>)
            );

        <span class=\"hljs-keyword\">return</span> <span class=\"hljs-keyword\">this</span>._ui.\$errorsWrapper
          .addClass(<span class=\"hljs-string\">'filled'</span>)
          .find(<span class=\"hljs-string\">'.parsley-custom-error-message'</span>)
          .html(<span class=\"hljs-keyword\">this</span>.options.errorMessage);
      }

      <span class=\"hljs-keyword\">return</span> <span class=\"hljs-keyword\">this</span>._ui.\$errorsWrapper
        .removeClass(<span class=\"hljs-string\">'filled'</span>)
        .find(<span class=\"hljs-string\">'.parsley-custom-error-message'</span>)
        .remove();
    }</pre></div></div>
            
        </li>
        
        
        <li id=\"section-18\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-18\">&#182;</a>
              </div>
              <p>Show, hide, update failing constraints messages</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">for</span> (<span class=\"hljs-keyword\">var</span> i = <span class=\"hljs-number\">0</span>; i &lt; diff.removed.length; i++)
      <span class=\"hljs-keyword\">this</span>._removeError(diff.removed[i].assert.name);

    <span class=\"hljs-keyword\">for</span> (i = <span class=\"hljs-number\">0</span>; i &lt; diff.added.length; i++)
      <span class=\"hljs-keyword\">this</span>._addError(diff.added[i].assert.name, {<span class=\"hljs-attr\">message</span>: diff.added[i].errorMessage, <span class=\"hljs-attr\">assert</span>: diff.added[i].assert});

    <span class=\"hljs-keyword\">for</span> (i = <span class=\"hljs-number\">0</span>; i &lt; diff.kept.length; i++)
      <span class=\"hljs-keyword\">this</span>._updateError(diff.kept[i].assert.name, {<span class=\"hljs-attr\">message</span>: diff.kept[i].errorMessage, <span class=\"hljs-attr\">assert</span>: diff.kept[i].assert});
  },


  <span class=\"hljs-attr\">_addError</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">name, {message, assert}</span>) </span>{
    <span class=\"hljs-keyword\">this</span>._insertErrorWrapper();
    <span class=\"hljs-keyword\">this</span>._ui.\$errorsWrapper
      .addClass(<span class=\"hljs-string\">'filled'</span>)
      .append(
        \$(<span class=\"hljs-keyword\">this</span>.options.errorTemplate)
        .addClass(<span class=\"hljs-string\">'parsley-'</span> + name)
        .html(message || <span class=\"hljs-keyword\">this</span>._getErrorMessage(assert))
      );
  },

  <span class=\"hljs-attr\">_updateError</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">name, {message, assert}</span>) </span>{
    <span class=\"hljs-keyword\">this</span>._ui.\$errorsWrapper
      .addClass(<span class=\"hljs-string\">'filled'</span>)
      .find(<span class=\"hljs-string\">'.parsley-'</span> + name)
      .html(message || <span class=\"hljs-keyword\">this</span>._getErrorMessage(assert));
  },

  <span class=\"hljs-attr\">_removeError</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">name</span>) </span>{
    <span class=\"hljs-keyword\">this</span>._ui.\$errorsWrapper
      .removeClass(<span class=\"hljs-string\">'filled'</span>)
      .find(<span class=\"hljs-string\">'.parsley-'</span> + name)
      .remove();
  },

  <span class=\"hljs-attr\">_getErrorMessage</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">constraint</span>) </span>{
    <span class=\"hljs-keyword\">var</span> customConstraintErrorMessage = constraint.name + <span class=\"hljs-string\">'Message'</span>;

    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-string\">'undefined'</span> !== <span class=\"hljs-keyword\">typeof</span> <span class=\"hljs-keyword\">this</span>.options[customConstraintErrorMessage])
      <span class=\"hljs-keyword\">return</span> <span class=\"hljs-built_in\">window</span>.Parsley.formatMessage(<span class=\"hljs-keyword\">this</span>.options[customConstraintErrorMessage], constraint.requirements);

    <span class=\"hljs-keyword\">return</span> <span class=\"hljs-built_in\">window</span>.Parsley.getErrorMessage(constraint);
  },

  <span class=\"hljs-attr\">_buildUI</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\"></span>) </span>{</pre></div></div>
            
        </li>
        
        
        <li id=\"section-19\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-19\">&#182;</a>
              </div>
              <p>UI could be already built or disabled</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-keyword\">this</span>._ui || <span class=\"hljs-literal\">false</span> === <span class=\"hljs-keyword\">this</span>.options.uiEnabled)
      <span class=\"hljs-keyword\">return</span>;

    <span class=\"hljs-keyword\">var</span> _ui = {};</pre></div></div>
            
        </li>
        
        
        <li id=\"section-20\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-20\">&#182;</a>
              </div>
              <p>Give field its Parsley id in DOM</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">this</span>.element.setAttribute(<span class=\"hljs-keyword\">this</span>.options.namespace + <span class=\"hljs-string\">'id'</span>, <span class=\"hljs-keyword\">this</span>.__id__);

    <span class=\"hljs-comment\">/** Generate important UI elements and store them in this **/</span></pre></div></div>
            
        </li>
        
        
        <li id=\"section-21\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-21\">&#182;</a>
              </div>
              <p>\$errorClassHandler is the \$element that woul have parsley-error and parsley-success classes</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    _ui.\$errorClassHandler = <span class=\"hljs-keyword\">this</span>._manageClassHandler();</pre></div></div>
            
        </li>
        
        
        <li id=\"section-22\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-22\">&#182;</a>
              </div>
              <p>\$errorsWrapper is a div that would contain the various field errors, it will be appended into \$errorsContainer</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    _ui.errorsWrapperId = <span class=\"hljs-string\">'parsley-id-'</span> + (<span class=\"hljs-keyword\">this</span>.options.multiple ? <span class=\"hljs-string\">'multiple-'</span> + <span class=\"hljs-keyword\">this</span>.options.multiple : <span class=\"hljs-keyword\">this</span>.__id__);
    _ui.\$errorsWrapper = \$(<span class=\"hljs-keyword\">this</span>.options.errorsWrapper).attr(<span class=\"hljs-string\">'id'</span>, _ui.errorsWrapperId);</pre></div></div>
            
        </li>
        
        
        <li id=\"section-23\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-23\">&#182;</a>
              </div>
              <p>ValidationResult UI storage to detect what have changed bwt two validations, and update DOM accordingly</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    _ui.lastValidationResult = [];
    _ui.validationInformationVisible = <span class=\"hljs-literal\">false</span>;</pre></div></div>
            
        </li>
        
        
        <li id=\"section-24\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-24\">&#182;</a>
              </div>
              <p>Store it in this for later</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">this</span>._ui = _ui;
  },</pre></div></div>
            
        </li>
        
        
        <li id=\"section-25\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-25\">&#182;</a>
              </div>
              <p>Determine which element will have <code>parsley-error</code> and <code>parsley-success</code> classes</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  _manageClassHandler: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\"></span>) </span>{</pre></div></div>
            
        </li>
        
        
        <li id=\"section-26\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-26\">&#182;</a>
              </div>
              <p>An element selector could be passed through DOM with <code>data-parsley-class-handler=#foo</code></p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-string\">'string'</span> === <span class=\"hljs-keyword\">typeof</span> <span class=\"hljs-keyword\">this</span>.options.classHandler) {
      <span class=\"hljs-keyword\">if</span> (\$(<span class=\"hljs-keyword\">this</span>.options.classHandler).length === <span class=\"hljs-number\">0</span>)
        ParsleyUtils.warn(<span class=\"hljs-string\">'No elements found that match the selector `'</span> + <span class=\"hljs-keyword\">this</span>.options.classHandler + <span class=\"hljs-string\">'` set in options.classHandler or data-parsley-class-handler'</span>);</pre></div></div>
            
        </li>
        
        
        <li id=\"section-27\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-27\">&#182;</a>
              </div>
              <p>return element or empty set</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>      <span class=\"hljs-keyword\">return</span> \$(<span class=\"hljs-keyword\">this</span>.options.classHandler);
    }</pre></div></div>
            
        </li>
        
        
        <li id=\"section-28\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-28\">&#182;</a>
              </div>
              <p>Class handled could also be determined by function given in Parsley options</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-string\">'function'</span> === <span class=\"hljs-keyword\">typeof</span> <span class=\"hljs-keyword\">this</span>.options.classHandler)
      <span class=\"hljs-keyword\">var</span> \$handler = <span class=\"hljs-keyword\">this</span>.options.classHandler.call(<span class=\"hljs-keyword\">this</span>, <span class=\"hljs-keyword\">this</span>);</pre></div></div>
            
        </li>
        
        
        <li id=\"section-29\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-29\">&#182;</a>
              </div>
              <p>If this function returned a valid existing DOM element, go for it</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-string\">'undefined'</span> !== <span class=\"hljs-keyword\">typeof</span> \$handler &amp;&amp; \$handler.length)
      <span class=\"hljs-keyword\">return</span> \$handler;

    <span class=\"hljs-keyword\">return</span> <span class=\"hljs-keyword\">this</span>._inputHolder();
  },

  <span class=\"hljs-attr\">_inputHolder</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span>(<span class=\"hljs-params\"></span>) </span>{</pre></div></div>
            
        </li>
        
        
        <li id=\"section-30\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-30\">&#182;</a>
              </div>
              <p>if simple element (input, texatrea, select…) it will perfectly host the classes and precede the error container</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">if</span> (!<span class=\"hljs-keyword\">this</span>.options.multiple || <span class=\"hljs-keyword\">this</span>.element.nodeName === <span class=\"hljs-string\">'SELECT'</span>)
      <span class=\"hljs-keyword\">return</span> <span class=\"hljs-keyword\">this</span>.\$element;</pre></div></div>
            
        </li>
        
        
        <li id=\"section-31\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-31\">&#182;</a>
              </div>
              <p>But if multiple element (radio, checkbox), that would be their parent</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">return</span> <span class=\"hljs-keyword\">this</span>.\$element.parent();
  },

  <span class=\"hljs-attr\">_insertErrorWrapper</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\"></span>) </span>{
    <span class=\"hljs-keyword\">var</span> \$errorsContainer;</pre></div></div>
            
        </li>
        
        
        <li id=\"section-32\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-32\">&#182;</a>
              </div>
              <p>Nothing to do if already inserted</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-number\">0</span> !== <span class=\"hljs-keyword\">this</span>._ui.\$errorsWrapper.parent().length)
      <span class=\"hljs-keyword\">return</span> <span class=\"hljs-keyword\">this</span>._ui.\$errorsWrapper.parent();

    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-string\">'string'</span> === <span class=\"hljs-keyword\">typeof</span> <span class=\"hljs-keyword\">this</span>.options.errorsContainer) {
      <span class=\"hljs-keyword\">if</span> (\$(<span class=\"hljs-keyword\">this</span>.options.errorsContainer).length)
        <span class=\"hljs-keyword\">return</span> \$(<span class=\"hljs-keyword\">this</span>.options.errorsContainer).append(<span class=\"hljs-keyword\">this</span>._ui.\$errorsWrapper);
      <span class=\"hljs-keyword\">else</span>
        Utils.warn(<span class=\"hljs-string\">'The errors container `'</span> + <span class=\"hljs-keyword\">this</span>.options.errorsContainer + <span class=\"hljs-string\">'` does not exist in DOM'</span>);
    } <span class=\"hljs-keyword\">else</span> <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-string\">'function'</span> === <span class=\"hljs-keyword\">typeof</span> <span class=\"hljs-keyword\">this</span>.options.errorsContainer)
      \$errorsContainer = <span class=\"hljs-keyword\">this</span>.options.errorsContainer.call(<span class=\"hljs-keyword\">this</span>, <span class=\"hljs-keyword\">this</span>);

    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-string\">'undefined'</span> !== <span class=\"hljs-keyword\">typeof</span> \$errorsContainer &amp;&amp; \$errorsContainer.length)
      <span class=\"hljs-keyword\">return</span> \$errorsContainer.append(<span class=\"hljs-keyword\">this</span>._ui.\$errorsWrapper);

    <span class=\"hljs-keyword\">return</span> <span class=\"hljs-keyword\">this</span>._inputHolder().after(<span class=\"hljs-keyword\">this</span>._ui.\$errorsWrapper);
  },

  <span class=\"hljs-attr\">_actualizeTriggers</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\"></span>) </span>{
    <span class=\"hljs-keyword\">var</span> \$toBind = <span class=\"hljs-keyword\">this</span>._findRelated();
    <span class=\"hljs-keyword\">var</span> trigger;</pre></div></div>
            
        </li>
        
        
        <li id=\"section-33\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-33\">&#182;</a>
              </div>
              <p>Remove Parsley events already bound on this field</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    \$toBind.off(<span class=\"hljs-string\">'.Parsley'</span>);
    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-keyword\">this</span>._failedOnce)
      \$toBind.on(Utils.namespaceEvents(<span class=\"hljs-keyword\">this</span>.options.triggerAfterFailure, <span class=\"hljs-string\">'Parsley'</span>), () =&gt; {
        <span class=\"hljs-keyword\">this</span>._validateIfNeeded();
      });
    <span class=\"hljs-keyword\">else</span> <span class=\"hljs-keyword\">if</span> (trigger = Utils.namespaceEvents(<span class=\"hljs-keyword\">this</span>.options.trigger, <span class=\"hljs-string\">'Parsley'</span>)) {
      \$toBind.on(trigger, event =&gt; {
        <span class=\"hljs-keyword\">this</span>._validateIfNeeded(event);
      });
    }
  },

  <span class=\"hljs-attr\">_validateIfNeeded</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">event</span>) </span>{</pre></div></div>
            
        </li>
        
        
        <li id=\"section-34\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-34\">&#182;</a>
              </div>
              <p>For keyup, keypress, keydown, input… events that could be a little bit obstrusive
do not validate if val length &lt; min threshold on first validation. Once field have been validated once and info
about success or failure have been displayed, always validate with this trigger to reflect every yalidation change.</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">if</span> (event &amp;&amp; <span class=\"hljs-regexp\">/key|input/</span>.test(event.type))
      <span class=\"hljs-keyword\">if</span> (!(<span class=\"hljs-keyword\">this</span>._ui &amp;&amp; <span class=\"hljs-keyword\">this</span>._ui.validationInformationVisible) &amp;&amp; <span class=\"hljs-keyword\">this</span>.getValue().length &lt;= <span class=\"hljs-keyword\">this</span>.options.validationThreshold)
        <span class=\"hljs-keyword\">return</span>;

    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-keyword\">this</span>.options.debounce) {
      <span class=\"hljs-built_in\">window</span>.clearTimeout(<span class=\"hljs-keyword\">this</span>._debounced);
      <span class=\"hljs-keyword\">this</span>._debounced = <span class=\"hljs-built_in\">window</span>.setTimeout(<span class=\"hljs-function\"><span class=\"hljs-params\">()</span> =&gt;</span> <span class=\"hljs-keyword\">this</span>.validate(), <span class=\"hljs-keyword\">this</span>.options.debounce);
    } <span class=\"hljs-keyword\">else</span>
      <span class=\"hljs-keyword\">this</span>.validate();
  },

  <span class=\"hljs-attr\">_resetUI</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\"></span>) </span>{</pre></div></div>
            
        </li>
        
        
        <li id=\"section-35\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-35\">&#182;</a>
              </div>
              <p>Reset all event listeners</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">this</span>._failedOnce = <span class=\"hljs-literal\">false</span>;
    <span class=\"hljs-keyword\">this</span>._actualizeTriggers();</pre></div></div>
            
        </li>
        
        
        <li id=\"section-36\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-36\">&#182;</a>
              </div>
              <p>Nothing to do if UI never initialized for this field</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-string\">'undefined'</span> === <span class=\"hljs-keyword\">typeof</span> <span class=\"hljs-keyword\">this</span>._ui)
      <span class=\"hljs-keyword\">return</span>;</pre></div></div>
            
        </li>
        
        
        <li id=\"section-37\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-37\">&#182;</a>
              </div>
              <p>Reset all errors’ li</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">this</span>._ui.\$errorsWrapper
      .removeClass(<span class=\"hljs-string\">'filled'</span>)
      .children()
      .remove();</pre></div></div>
            
        </li>
        
        
        <li id=\"section-38\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-38\">&#182;</a>
              </div>
              <p>Reset validation class</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">this</span>._resetClass();</pre></div></div>
            
        </li>
        
        
        <li id=\"section-39\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-39\">&#182;</a>
              </div>
              <p>Reset validation flags and last validation result</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">this</span>._ui.lastValidationResult = [];
    <span class=\"hljs-keyword\">this</span>._ui.validationInformationVisible = <span class=\"hljs-literal\">false</span>;
  },

  <span class=\"hljs-attr\">_destroyUI</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\"></span>) </span>{
    <span class=\"hljs-keyword\">this</span>._resetUI();

    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-string\">'undefined'</span> !== <span class=\"hljs-keyword\">typeof</span> <span class=\"hljs-keyword\">this</span>._ui)
      <span class=\"hljs-keyword\">this</span>._ui.\$errorsWrapper.remove();

    <span class=\"hljs-keyword\">delete</span> <span class=\"hljs-keyword\">this</span>._ui;
  },

  <span class=\"hljs-attr\">_successClass</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\"></span>) </span>{
    <span class=\"hljs-keyword\">this</span>._ui.validationInformationVisible = <span class=\"hljs-literal\">true</span>;
    <span class=\"hljs-keyword\">this</span>._ui.\$errorClassHandler.removeClass(<span class=\"hljs-keyword\">this</span>.options.errorClass).addClass(<span class=\"hljs-keyword\">this</span>.options.successClass);
  },
  <span class=\"hljs-attr\">_errorClass</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\"></span>) </span>{
    <span class=\"hljs-keyword\">this</span>._ui.validationInformationVisible = <span class=\"hljs-literal\">true</span>;
    <span class=\"hljs-keyword\">this</span>._ui.\$errorClassHandler.removeClass(<span class=\"hljs-keyword\">this</span>.options.successClass).addClass(<span class=\"hljs-keyword\">this</span>.options.errorClass);
  },
  <span class=\"hljs-attr\">_resetClass</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\"></span>) </span>{
    <span class=\"hljs-keyword\">this</span>._ui.\$errorClassHandler.removeClass(<span class=\"hljs-keyword\">this</span>.options.successClass).removeClass(<span class=\"hljs-keyword\">this</span>.options.errorClass);
  }
};

<span class=\"hljs-keyword\">export</span> <span class=\"hljs-keyword\">default</span> UI;</pre></div></div>
            
        </li>
        
    </ul>
  </div>
<script>var _gaq=_gaq||[];_gaq.push([\"_setAccount\",\"UA-37229467-1\"]);_gaq.push([\"_trackPageview\"]);(function(){var e=document.createElement(\"script\");e.type=\"text/javascript\";e.async=true;e.src=(\"https:\"==document.location.protocol?\"https://ssl\":\"http://www\")+\".google-analytics.com/ga.js\";var t=document.getElementsByTagName(\"script\")[0];t.parentNode.insertBefore(e,t)})();</script></body>
</html>
";
        
        $__internal_3e06b5cb632b8b5e8b925c876358cc056bd2f06c6c1bc0cbd3f4df442f781334->leave($__internal_3e06b5cb632b8b5e8b925c876358cc056bd2f06c6c1bc0cbd3f4df442f781334_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/doc/annotated-source/ui.html";
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
  <title>ui.js</title>
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
                  <h1>ui.js</h1>
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

<span class=\"hljs-keyword\">var</span> UI = {};

<span class=\"hljs-keyword\">var</span> diffResults = <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">newResult, oldResult, deep</span>) </span>{
  <span class=\"hljs-keyword\">var</span> added = [];
  <span class=\"hljs-keyword\">var</span> kept = [];

  <span class=\"hljs-keyword\">for</span> (<span class=\"hljs-keyword\">var</span> i = <span class=\"hljs-number\">0</span>; i &lt; newResult.length; i++) {
    <span class=\"hljs-keyword\">var</span> found = <span class=\"hljs-literal\">false</span>;

    <span class=\"hljs-keyword\">for</span> (<span class=\"hljs-keyword\">var</span> j = <span class=\"hljs-number\">0</span>; j &lt; oldResult.length; j++)
      <span class=\"hljs-keyword\">if</span> (newResult[i].assert.name === oldResult[j].assert.name) {
        found = <span class=\"hljs-literal\">true</span>;
        <span class=\"hljs-keyword\">break</span>;
      }

    <span class=\"hljs-keyword\">if</span> (found)
      kept.push(newResult[i]);
    <span class=\"hljs-keyword\">else</span>
      added.push(newResult[i]);
  }

  <span class=\"hljs-keyword\">return</span> {
    <span class=\"hljs-attr\">kept</span>: kept,
    <span class=\"hljs-attr\">added</span>: added,
    <span class=\"hljs-attr\">removed</span>: !deep ? diffResults(oldResult, newResult, <span class=\"hljs-literal\">true</span>).added : []
  };
};

UI.Form = {

  <span class=\"hljs-attr\">_actualizeTriggers</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\"></span>) </span>{
    <span class=\"hljs-keyword\">this</span>.\$element.on(<span class=\"hljs-string\">'submit.Parsley'</span>, evt =&gt; { <span class=\"hljs-keyword\">this</span>.onSubmitValidate(evt); });
    <span class=\"hljs-keyword\">this</span>.\$element.on(<span class=\"hljs-string\">'click.Parsley'</span>, Utils._SubmitSelector, evt =&gt; { <span class=\"hljs-keyword\">this</span>.onSubmitButton(evt); });</pre></div></div>
            
        </li>
        
        
        <li id=\"section-2\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-2\">&#182;</a>
              </div>
              <p>UI could be disabled</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-literal\">false</span> === <span class=\"hljs-keyword\">this</span>.options.uiEnabled)
      <span class=\"hljs-keyword\">return</span>;

    <span class=\"hljs-keyword\">this</span>.element.setAttribute(<span class=\"hljs-string\">'novalidate'</span>, <span class=\"hljs-string\">''</span>);
  },

  <span class=\"hljs-attr\">focus</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\"></span>) </span>{
    <span class=\"hljs-keyword\">this</span>._focusedField = <span class=\"hljs-literal\">null</span>;

    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-literal\">true</span> === <span class=\"hljs-keyword\">this</span>.validationResult || <span class=\"hljs-string\">'none'</span> === <span class=\"hljs-keyword\">this</span>.options.focus)
      <span class=\"hljs-keyword\">return</span> <span class=\"hljs-literal\">null</span>;

    <span class=\"hljs-keyword\">for</span> (<span class=\"hljs-keyword\">var</span> i = <span class=\"hljs-number\">0</span>; i &lt; <span class=\"hljs-keyword\">this</span>.fields.length; i++) {
      <span class=\"hljs-keyword\">var</span> field = <span class=\"hljs-keyword\">this</span>.fields[i];
      <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-literal\">true</span> !== field.validationResult &amp;&amp; field.validationResult.length &gt; <span class=\"hljs-number\">0</span> &amp;&amp; <span class=\"hljs-string\">'undefined'</span> === <span class=\"hljs-keyword\">typeof</span> field.options.noFocus) {
        <span class=\"hljs-keyword\">this</span>._focusedField = field.\$element;
        <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-string\">'first'</span> === <span class=\"hljs-keyword\">this</span>.options.focus)
          <span class=\"hljs-keyword\">break</span>;
      }
    }

    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-literal\">null</span> === <span class=\"hljs-keyword\">this</span>._focusedField)
      <span class=\"hljs-keyword\">return</span> <span class=\"hljs-literal\">null</span>;

    <span class=\"hljs-keyword\">return</span> <span class=\"hljs-keyword\">this</span>._focusedField.focus();
  },

  <span class=\"hljs-attr\">_destroyUI</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\"></span>) </span>{</pre></div></div>
            
        </li>
        
        
        <li id=\"section-3\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-3\">&#182;</a>
              </div>
              <p>Reset all event listeners</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">this</span>.\$element.off(<span class=\"hljs-string\">'.Parsley'</span>);
  }

};

UI.Field = {

  <span class=\"hljs-attr\">_reflowUI</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\"></span>) </span>{
    <span class=\"hljs-keyword\">this</span>._buildUI();</pre></div></div>
            
        </li>
        
        
        <li id=\"section-4\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-4\">&#182;</a>
              </div>
              <p>If this field doesn’t have an active UI don’t bother doing something</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">if</span> (!<span class=\"hljs-keyword\">this</span>._ui)
      <span class=\"hljs-keyword\">return</span>;</pre></div></div>
            
        </li>
        
        
        <li id=\"section-5\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-5\">&#182;</a>
              </div>
              <p>Diff between two validation results</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">var</span> diff = diffResults(<span class=\"hljs-keyword\">this</span>.validationResult, <span class=\"hljs-keyword\">this</span>._ui.lastValidationResult);</pre></div></div>
            
        </li>
        
        
        <li id=\"section-6\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-6\">&#182;</a>
              </div>
              <p>Then store current validation result for next reflow</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">this</span>._ui.lastValidationResult = <span class=\"hljs-keyword\">this</span>.validationResult;</pre></div></div>
            
        </li>
        
        
        <li id=\"section-7\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-7\">&#182;</a>
              </div>
              <p>Handle valid / invalid / none field class</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">this</span>._manageStatusClass();</pre></div></div>
            
        </li>
        
        
        <li id=\"section-8\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-8\">&#182;</a>
              </div>
              <p>Add, remove, updated errors messages</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">this</span>._manageErrorsMessages(diff);</pre></div></div>
            
        </li>
        
        
        <li id=\"section-9\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-9\">&#182;</a>
              </div>
              <p>Triggers impl</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">this</span>._actualizeTriggers();</pre></div></div>
            
        </li>
        
        
        <li id=\"section-10\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-10\">&#182;</a>
              </div>
              <p>If field is not valid for the first time, bind keyup trigger to ease UX and quickly inform user</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">if</span> ((diff.kept.length || diff.added.length) &amp;&amp; !<span class=\"hljs-keyword\">this</span>._failedOnce) {
      <span class=\"hljs-keyword\">this</span>._failedOnce = <span class=\"hljs-literal\">true</span>;
      <span class=\"hljs-keyword\">this</span>._actualizeTriggers();
    }
  },</pre></div></div>
            
        </li>
        
        
        <li id=\"section-11\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-11\">&#182;</a>
              </div>
              <p>Returns an array of field’s error message(s)</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  getErrorsMessages: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\"></span>) </span>{</pre></div></div>
            
        </li>
        
        
        <li id=\"section-12\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-12\">&#182;</a>
              </div>
              <p>No error message, field is valid</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-literal\">true</span> === <span class=\"hljs-keyword\">this</span>.validationResult)
      <span class=\"hljs-keyword\">return</span> [];

    <span class=\"hljs-keyword\">var</span> messages = [];

    <span class=\"hljs-keyword\">for</span> (<span class=\"hljs-keyword\">var</span> i = <span class=\"hljs-number\">0</span>; i &lt; <span class=\"hljs-keyword\">this</span>.validationResult.length; i++)
      messages.push(<span class=\"hljs-keyword\">this</span>.validationResult[i].errorMessage ||
       <span class=\"hljs-keyword\">this</span>._getErrorMessage(<span class=\"hljs-keyword\">this</span>.validationResult[i].assert));

    <span class=\"hljs-keyword\">return</span> messages;
  },</pre></div></div>
            
        </li>
        
        
        <li id=\"section-13\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-13\">&#182;</a>
              </div>
              <p>It’s a goal of Parsley that this method is no longer required [#1073]</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  addError: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">name, {message, assert, updateClass = true} = {}</span>) </span>{
    <span class=\"hljs-keyword\">this</span>._buildUI();
    <span class=\"hljs-keyword\">this</span>._addError(name, {message, assert});

    <span class=\"hljs-keyword\">if</span> (updateClass)
      <span class=\"hljs-keyword\">this</span>._errorClass();
  },</pre></div></div>
            
        </li>
        
        
        <li id=\"section-14\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-14\">&#182;</a>
              </div>
              <p>It’s a goal of Parsley that this method is no longer required [#1073]</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  updateError: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">name, {message, assert, updateClass = true} = {}</span>) </span>{
    <span class=\"hljs-keyword\">this</span>._buildUI();
    <span class=\"hljs-keyword\">this</span>._updateError(name, {message, assert});

    <span class=\"hljs-keyword\">if</span> (updateClass)
      <span class=\"hljs-keyword\">this</span>._errorClass();
  },</pre></div></div>
            
        </li>
        
        
        <li id=\"section-15\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-15\">&#182;</a>
              </div>
              <p>It’s a goal of Parsley that this method is no longer required [#1073]</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  removeError: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">name, {updateClass = true} = {}</span>) </span>{
    <span class=\"hljs-keyword\">this</span>._buildUI();
    <span class=\"hljs-keyword\">this</span>._removeError(name);</pre></div></div>
            
        </li>
        
        
        <li id=\"section-16\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-16\">&#182;</a>
              </div>
              <p>edge case possible here: remove a standard Parsley error that is still failing in this.validationResult
but highly improbable cuz’ manually removing a well Parsley handled error makes no sense.</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">if</span> (updateClass)
      <span class=\"hljs-keyword\">this</span>._manageStatusClass();
  },

  <span class=\"hljs-attr\">_manageStatusClass</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\"></span>) </span>{
    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-keyword\">this</span>.hasConstraints() &amp;&amp; <span class=\"hljs-keyword\">this</span>.needsValidation() &amp;&amp; <span class=\"hljs-literal\">true</span> === <span class=\"hljs-keyword\">this</span>.validationResult)
      <span class=\"hljs-keyword\">this</span>._successClass();
    <span class=\"hljs-keyword\">else</span> <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-keyword\">this</span>.validationResult.length &gt; <span class=\"hljs-number\">0</span>)
      <span class=\"hljs-keyword\">this</span>._errorClass();
    <span class=\"hljs-keyword\">else</span>
      <span class=\"hljs-keyword\">this</span>._resetClass();
  },

  <span class=\"hljs-attr\">_manageErrorsMessages</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">diff</span>) </span>{
    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-string\">'undefined'</span> !== <span class=\"hljs-keyword\">typeof</span> <span class=\"hljs-keyword\">this</span>.options.errorsMessagesDisabled)
      <span class=\"hljs-keyword\">return</span>;</pre></div></div>
            
        </li>
        
        
        <li id=\"section-17\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-17\">&#182;</a>
              </div>
              <p>Case where we have errorMessage option that configure an unique field error message, regardless failing validators</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-string\">'undefined'</span> !== <span class=\"hljs-keyword\">typeof</span> <span class=\"hljs-keyword\">this</span>.options.errorMessage) {
      <span class=\"hljs-keyword\">if</span> ((diff.added.length || diff.kept.length)) {
        <span class=\"hljs-keyword\">this</span>._insertErrorWrapper();

        <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-number\">0</span> === <span class=\"hljs-keyword\">this</span>._ui.\$errorsWrapper.find(<span class=\"hljs-string\">'.parsley-custom-error-message'</span>).length)
          <span class=\"hljs-keyword\">this</span>._ui.\$errorsWrapper
            .append(
              \$(<span class=\"hljs-keyword\">this</span>.options.errorTemplate)
              .addClass(<span class=\"hljs-string\">'parsley-custom-error-message'</span>)
            );

        <span class=\"hljs-keyword\">return</span> <span class=\"hljs-keyword\">this</span>._ui.\$errorsWrapper
          .addClass(<span class=\"hljs-string\">'filled'</span>)
          .find(<span class=\"hljs-string\">'.parsley-custom-error-message'</span>)
          .html(<span class=\"hljs-keyword\">this</span>.options.errorMessage);
      }

      <span class=\"hljs-keyword\">return</span> <span class=\"hljs-keyword\">this</span>._ui.\$errorsWrapper
        .removeClass(<span class=\"hljs-string\">'filled'</span>)
        .find(<span class=\"hljs-string\">'.parsley-custom-error-message'</span>)
        .remove();
    }</pre></div></div>
            
        </li>
        
        
        <li id=\"section-18\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-18\">&#182;</a>
              </div>
              <p>Show, hide, update failing constraints messages</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">for</span> (<span class=\"hljs-keyword\">var</span> i = <span class=\"hljs-number\">0</span>; i &lt; diff.removed.length; i++)
      <span class=\"hljs-keyword\">this</span>._removeError(diff.removed[i].assert.name);

    <span class=\"hljs-keyword\">for</span> (i = <span class=\"hljs-number\">0</span>; i &lt; diff.added.length; i++)
      <span class=\"hljs-keyword\">this</span>._addError(diff.added[i].assert.name, {<span class=\"hljs-attr\">message</span>: diff.added[i].errorMessage, <span class=\"hljs-attr\">assert</span>: diff.added[i].assert});

    <span class=\"hljs-keyword\">for</span> (i = <span class=\"hljs-number\">0</span>; i &lt; diff.kept.length; i++)
      <span class=\"hljs-keyword\">this</span>._updateError(diff.kept[i].assert.name, {<span class=\"hljs-attr\">message</span>: diff.kept[i].errorMessage, <span class=\"hljs-attr\">assert</span>: diff.kept[i].assert});
  },


  <span class=\"hljs-attr\">_addError</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">name, {message, assert}</span>) </span>{
    <span class=\"hljs-keyword\">this</span>._insertErrorWrapper();
    <span class=\"hljs-keyword\">this</span>._ui.\$errorsWrapper
      .addClass(<span class=\"hljs-string\">'filled'</span>)
      .append(
        \$(<span class=\"hljs-keyword\">this</span>.options.errorTemplate)
        .addClass(<span class=\"hljs-string\">'parsley-'</span> + name)
        .html(message || <span class=\"hljs-keyword\">this</span>._getErrorMessage(assert))
      );
  },

  <span class=\"hljs-attr\">_updateError</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">name, {message, assert}</span>) </span>{
    <span class=\"hljs-keyword\">this</span>._ui.\$errorsWrapper
      .addClass(<span class=\"hljs-string\">'filled'</span>)
      .find(<span class=\"hljs-string\">'.parsley-'</span> + name)
      .html(message || <span class=\"hljs-keyword\">this</span>._getErrorMessage(assert));
  },

  <span class=\"hljs-attr\">_removeError</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">name</span>) </span>{
    <span class=\"hljs-keyword\">this</span>._ui.\$errorsWrapper
      .removeClass(<span class=\"hljs-string\">'filled'</span>)
      .find(<span class=\"hljs-string\">'.parsley-'</span> + name)
      .remove();
  },

  <span class=\"hljs-attr\">_getErrorMessage</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">constraint</span>) </span>{
    <span class=\"hljs-keyword\">var</span> customConstraintErrorMessage = constraint.name + <span class=\"hljs-string\">'Message'</span>;

    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-string\">'undefined'</span> !== <span class=\"hljs-keyword\">typeof</span> <span class=\"hljs-keyword\">this</span>.options[customConstraintErrorMessage])
      <span class=\"hljs-keyword\">return</span> <span class=\"hljs-built_in\">window</span>.Parsley.formatMessage(<span class=\"hljs-keyword\">this</span>.options[customConstraintErrorMessage], constraint.requirements);

    <span class=\"hljs-keyword\">return</span> <span class=\"hljs-built_in\">window</span>.Parsley.getErrorMessage(constraint);
  },

  <span class=\"hljs-attr\">_buildUI</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\"></span>) </span>{</pre></div></div>
            
        </li>
        
        
        <li id=\"section-19\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-19\">&#182;</a>
              </div>
              <p>UI could be already built or disabled</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-keyword\">this</span>._ui || <span class=\"hljs-literal\">false</span> === <span class=\"hljs-keyword\">this</span>.options.uiEnabled)
      <span class=\"hljs-keyword\">return</span>;

    <span class=\"hljs-keyword\">var</span> _ui = {};</pre></div></div>
            
        </li>
        
        
        <li id=\"section-20\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-20\">&#182;</a>
              </div>
              <p>Give field its Parsley id in DOM</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">this</span>.element.setAttribute(<span class=\"hljs-keyword\">this</span>.options.namespace + <span class=\"hljs-string\">'id'</span>, <span class=\"hljs-keyword\">this</span>.__id__);

    <span class=\"hljs-comment\">/** Generate important UI elements and store them in this **/</span></pre></div></div>
            
        </li>
        
        
        <li id=\"section-21\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-21\">&#182;</a>
              </div>
              <p>\$errorClassHandler is the \$element that woul have parsley-error and parsley-success classes</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    _ui.\$errorClassHandler = <span class=\"hljs-keyword\">this</span>._manageClassHandler();</pre></div></div>
            
        </li>
        
        
        <li id=\"section-22\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-22\">&#182;</a>
              </div>
              <p>\$errorsWrapper is a div that would contain the various field errors, it will be appended into \$errorsContainer</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    _ui.errorsWrapperId = <span class=\"hljs-string\">'parsley-id-'</span> + (<span class=\"hljs-keyword\">this</span>.options.multiple ? <span class=\"hljs-string\">'multiple-'</span> + <span class=\"hljs-keyword\">this</span>.options.multiple : <span class=\"hljs-keyword\">this</span>.__id__);
    _ui.\$errorsWrapper = \$(<span class=\"hljs-keyword\">this</span>.options.errorsWrapper).attr(<span class=\"hljs-string\">'id'</span>, _ui.errorsWrapperId);</pre></div></div>
            
        </li>
        
        
        <li id=\"section-23\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-23\">&#182;</a>
              </div>
              <p>ValidationResult UI storage to detect what have changed bwt two validations, and update DOM accordingly</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    _ui.lastValidationResult = [];
    _ui.validationInformationVisible = <span class=\"hljs-literal\">false</span>;</pre></div></div>
            
        </li>
        
        
        <li id=\"section-24\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-24\">&#182;</a>
              </div>
              <p>Store it in this for later</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">this</span>._ui = _ui;
  },</pre></div></div>
            
        </li>
        
        
        <li id=\"section-25\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-25\">&#182;</a>
              </div>
              <p>Determine which element will have <code>parsley-error</code> and <code>parsley-success</code> classes</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  _manageClassHandler: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\"></span>) </span>{</pre></div></div>
            
        </li>
        
        
        <li id=\"section-26\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-26\">&#182;</a>
              </div>
              <p>An element selector could be passed through DOM with <code>data-parsley-class-handler=#foo</code></p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-string\">'string'</span> === <span class=\"hljs-keyword\">typeof</span> <span class=\"hljs-keyword\">this</span>.options.classHandler) {
      <span class=\"hljs-keyword\">if</span> (\$(<span class=\"hljs-keyword\">this</span>.options.classHandler).length === <span class=\"hljs-number\">0</span>)
        ParsleyUtils.warn(<span class=\"hljs-string\">'No elements found that match the selector `'</span> + <span class=\"hljs-keyword\">this</span>.options.classHandler + <span class=\"hljs-string\">'` set in options.classHandler or data-parsley-class-handler'</span>);</pre></div></div>
            
        </li>
        
        
        <li id=\"section-27\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-27\">&#182;</a>
              </div>
              <p>return element or empty set</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>      <span class=\"hljs-keyword\">return</span> \$(<span class=\"hljs-keyword\">this</span>.options.classHandler);
    }</pre></div></div>
            
        </li>
        
        
        <li id=\"section-28\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-28\">&#182;</a>
              </div>
              <p>Class handled could also be determined by function given in Parsley options</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-string\">'function'</span> === <span class=\"hljs-keyword\">typeof</span> <span class=\"hljs-keyword\">this</span>.options.classHandler)
      <span class=\"hljs-keyword\">var</span> \$handler = <span class=\"hljs-keyword\">this</span>.options.classHandler.call(<span class=\"hljs-keyword\">this</span>, <span class=\"hljs-keyword\">this</span>);</pre></div></div>
            
        </li>
        
        
        <li id=\"section-29\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-29\">&#182;</a>
              </div>
              <p>If this function returned a valid existing DOM element, go for it</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-string\">'undefined'</span> !== <span class=\"hljs-keyword\">typeof</span> \$handler &amp;&amp; \$handler.length)
      <span class=\"hljs-keyword\">return</span> \$handler;

    <span class=\"hljs-keyword\">return</span> <span class=\"hljs-keyword\">this</span>._inputHolder();
  },

  <span class=\"hljs-attr\">_inputHolder</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span>(<span class=\"hljs-params\"></span>) </span>{</pre></div></div>
            
        </li>
        
        
        <li id=\"section-30\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-30\">&#182;</a>
              </div>
              <p>if simple element (input, texatrea, select…) it will perfectly host the classes and precede the error container</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">if</span> (!<span class=\"hljs-keyword\">this</span>.options.multiple || <span class=\"hljs-keyword\">this</span>.element.nodeName === <span class=\"hljs-string\">'SELECT'</span>)
      <span class=\"hljs-keyword\">return</span> <span class=\"hljs-keyword\">this</span>.\$element;</pre></div></div>
            
        </li>
        
        
        <li id=\"section-31\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-31\">&#182;</a>
              </div>
              <p>But if multiple element (radio, checkbox), that would be their parent</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">return</span> <span class=\"hljs-keyword\">this</span>.\$element.parent();
  },

  <span class=\"hljs-attr\">_insertErrorWrapper</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\"></span>) </span>{
    <span class=\"hljs-keyword\">var</span> \$errorsContainer;</pre></div></div>
            
        </li>
        
        
        <li id=\"section-32\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-32\">&#182;</a>
              </div>
              <p>Nothing to do if already inserted</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-number\">0</span> !== <span class=\"hljs-keyword\">this</span>._ui.\$errorsWrapper.parent().length)
      <span class=\"hljs-keyword\">return</span> <span class=\"hljs-keyword\">this</span>._ui.\$errorsWrapper.parent();

    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-string\">'string'</span> === <span class=\"hljs-keyword\">typeof</span> <span class=\"hljs-keyword\">this</span>.options.errorsContainer) {
      <span class=\"hljs-keyword\">if</span> (\$(<span class=\"hljs-keyword\">this</span>.options.errorsContainer).length)
        <span class=\"hljs-keyword\">return</span> \$(<span class=\"hljs-keyword\">this</span>.options.errorsContainer).append(<span class=\"hljs-keyword\">this</span>._ui.\$errorsWrapper);
      <span class=\"hljs-keyword\">else</span>
        Utils.warn(<span class=\"hljs-string\">'The errors container `'</span> + <span class=\"hljs-keyword\">this</span>.options.errorsContainer + <span class=\"hljs-string\">'` does not exist in DOM'</span>);
    } <span class=\"hljs-keyword\">else</span> <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-string\">'function'</span> === <span class=\"hljs-keyword\">typeof</span> <span class=\"hljs-keyword\">this</span>.options.errorsContainer)
      \$errorsContainer = <span class=\"hljs-keyword\">this</span>.options.errorsContainer.call(<span class=\"hljs-keyword\">this</span>, <span class=\"hljs-keyword\">this</span>);

    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-string\">'undefined'</span> !== <span class=\"hljs-keyword\">typeof</span> \$errorsContainer &amp;&amp; \$errorsContainer.length)
      <span class=\"hljs-keyword\">return</span> \$errorsContainer.append(<span class=\"hljs-keyword\">this</span>._ui.\$errorsWrapper);

    <span class=\"hljs-keyword\">return</span> <span class=\"hljs-keyword\">this</span>._inputHolder().after(<span class=\"hljs-keyword\">this</span>._ui.\$errorsWrapper);
  },

  <span class=\"hljs-attr\">_actualizeTriggers</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\"></span>) </span>{
    <span class=\"hljs-keyword\">var</span> \$toBind = <span class=\"hljs-keyword\">this</span>._findRelated();
    <span class=\"hljs-keyword\">var</span> trigger;</pre></div></div>
            
        </li>
        
        
        <li id=\"section-33\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-33\">&#182;</a>
              </div>
              <p>Remove Parsley events already bound on this field</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    \$toBind.off(<span class=\"hljs-string\">'.Parsley'</span>);
    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-keyword\">this</span>._failedOnce)
      \$toBind.on(Utils.namespaceEvents(<span class=\"hljs-keyword\">this</span>.options.triggerAfterFailure, <span class=\"hljs-string\">'Parsley'</span>), () =&gt; {
        <span class=\"hljs-keyword\">this</span>._validateIfNeeded();
      });
    <span class=\"hljs-keyword\">else</span> <span class=\"hljs-keyword\">if</span> (trigger = Utils.namespaceEvents(<span class=\"hljs-keyword\">this</span>.options.trigger, <span class=\"hljs-string\">'Parsley'</span>)) {
      \$toBind.on(trigger, event =&gt; {
        <span class=\"hljs-keyword\">this</span>._validateIfNeeded(event);
      });
    }
  },

  <span class=\"hljs-attr\">_validateIfNeeded</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">event</span>) </span>{</pre></div></div>
            
        </li>
        
        
        <li id=\"section-34\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-34\">&#182;</a>
              </div>
              <p>For keyup, keypress, keydown, input… events that could be a little bit obstrusive
do not validate if val length &lt; min threshold on first validation. Once field have been validated once and info
about success or failure have been displayed, always validate with this trigger to reflect every yalidation change.</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">if</span> (event &amp;&amp; <span class=\"hljs-regexp\">/key|input/</span>.test(event.type))
      <span class=\"hljs-keyword\">if</span> (!(<span class=\"hljs-keyword\">this</span>._ui &amp;&amp; <span class=\"hljs-keyword\">this</span>._ui.validationInformationVisible) &amp;&amp; <span class=\"hljs-keyword\">this</span>.getValue().length &lt;= <span class=\"hljs-keyword\">this</span>.options.validationThreshold)
        <span class=\"hljs-keyword\">return</span>;

    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-keyword\">this</span>.options.debounce) {
      <span class=\"hljs-built_in\">window</span>.clearTimeout(<span class=\"hljs-keyword\">this</span>._debounced);
      <span class=\"hljs-keyword\">this</span>._debounced = <span class=\"hljs-built_in\">window</span>.setTimeout(<span class=\"hljs-function\"><span class=\"hljs-params\">()</span> =&gt;</span> <span class=\"hljs-keyword\">this</span>.validate(), <span class=\"hljs-keyword\">this</span>.options.debounce);
    } <span class=\"hljs-keyword\">else</span>
      <span class=\"hljs-keyword\">this</span>.validate();
  },

  <span class=\"hljs-attr\">_resetUI</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\"></span>) </span>{</pre></div></div>
            
        </li>
        
        
        <li id=\"section-35\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-35\">&#182;</a>
              </div>
              <p>Reset all event listeners</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">this</span>._failedOnce = <span class=\"hljs-literal\">false</span>;
    <span class=\"hljs-keyword\">this</span>._actualizeTriggers();</pre></div></div>
            
        </li>
        
        
        <li id=\"section-36\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-36\">&#182;</a>
              </div>
              <p>Nothing to do if UI never initialized for this field</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-string\">'undefined'</span> === <span class=\"hljs-keyword\">typeof</span> <span class=\"hljs-keyword\">this</span>._ui)
      <span class=\"hljs-keyword\">return</span>;</pre></div></div>
            
        </li>
        
        
        <li id=\"section-37\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-37\">&#182;</a>
              </div>
              <p>Reset all errors’ li</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">this</span>._ui.\$errorsWrapper
      .removeClass(<span class=\"hljs-string\">'filled'</span>)
      .children()
      .remove();</pre></div></div>
            
        </li>
        
        
        <li id=\"section-38\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-38\">&#182;</a>
              </div>
              <p>Reset validation class</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">this</span>._resetClass();</pre></div></div>
            
        </li>
        
        
        <li id=\"section-39\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-39\">&#182;</a>
              </div>
              <p>Reset validation flags and last validation result</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">this</span>._ui.lastValidationResult = [];
    <span class=\"hljs-keyword\">this</span>._ui.validationInformationVisible = <span class=\"hljs-literal\">false</span>;
  },

  <span class=\"hljs-attr\">_destroyUI</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\"></span>) </span>{
    <span class=\"hljs-keyword\">this</span>._resetUI();

    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-string\">'undefined'</span> !== <span class=\"hljs-keyword\">typeof</span> <span class=\"hljs-keyword\">this</span>._ui)
      <span class=\"hljs-keyword\">this</span>._ui.\$errorsWrapper.remove();

    <span class=\"hljs-keyword\">delete</span> <span class=\"hljs-keyword\">this</span>._ui;
  },

  <span class=\"hljs-attr\">_successClass</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\"></span>) </span>{
    <span class=\"hljs-keyword\">this</span>._ui.validationInformationVisible = <span class=\"hljs-literal\">true</span>;
    <span class=\"hljs-keyword\">this</span>._ui.\$errorClassHandler.removeClass(<span class=\"hljs-keyword\">this</span>.options.errorClass).addClass(<span class=\"hljs-keyword\">this</span>.options.successClass);
  },
  <span class=\"hljs-attr\">_errorClass</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\"></span>) </span>{
    <span class=\"hljs-keyword\">this</span>._ui.validationInformationVisible = <span class=\"hljs-literal\">true</span>;
    <span class=\"hljs-keyword\">this</span>._ui.\$errorClassHandler.removeClass(<span class=\"hljs-keyword\">this</span>.options.successClass).addClass(<span class=\"hljs-keyword\">this</span>.options.errorClass);
  },
  <span class=\"hljs-attr\">_resetClass</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\"></span>) </span>{
    <span class=\"hljs-keyword\">this</span>._ui.\$errorClassHandler.removeClass(<span class=\"hljs-keyword\">this</span>.options.successClass).removeClass(<span class=\"hljs-keyword\">this</span>.options.errorClass);
  }
};

<span class=\"hljs-keyword\">export</span> <span class=\"hljs-keyword\">default</span> UI;</pre></div></div>
            
        </li>
        
    </ul>
  </div>
<script>var _gaq=_gaq||[];_gaq.push([\"_setAccount\",\"UA-37229467-1\"]);_gaq.push([\"_trackPageview\"]);(function(){var e=document.createElement(\"script\");e.type=\"text/javascript\";e.async=true;e.src=(\"https:\"==document.location.protocol?\"https://ssl\":\"http://www\")+\".google-analytics.com/ga.js\";var t=document.getElementsByTagName(\"script\")[0];t.parentNode.insertBefore(e,t)})();</script></body>
</html>
", "node_modules/parsleyjs/doc/annotated-source/ui.html", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/doc/annotated-source/ui.html");
    }
}
