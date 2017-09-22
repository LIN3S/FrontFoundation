<?php

/* node_modules/parsleyjs/doc/index.html */
class __TwigTemplate_7a4186a93a9f6415376063475b832d8cc92ccb0d3b07b827880d74dc810a6932 extends Twig_Template
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
        $__internal_edc50b0079ea98458ef7b59c63f6115a8b13509a6aead98ba3966a53355bf3dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edc50b0079ea98458ef7b59c63f6115a8b13509a6aead98ba3966a53355bf3dd->enter($__internal_edc50b0079ea98458ef7b59c63f6115a8b13509a6aead98ba3966a53355bf3dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/doc/index.html"));

        // line 1
        echo "
<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"Parsley, the ultimate frontend javascript form validation library\">
    <meta name=\"author\" content=\"Guillaume Potier\">

    <title>Parsley - The ultimate documentation</title>

    <!-- Bootstrap core CSS -->
    <link href=\"../bower_components/bootstrap/dist/css/bootstrap.min.css\" rel=\"stylesheet\">

    <!-- Custom styles for this template -->
    <link href=\"assets/docs.css\" rel=\"stylesheet\">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
      <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
    <![endif]-->
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/highlight.js/7.3/styles/github.min.css\" rel=\"stylesheet\">
    <link href=\"../src/parsley.css\" rel=\"stylesheet\">

    <style>
      #mailing-list {
        margin-top: 25px;
        width: 200px;
        text-align: justify;
      }
      #mailing-list input {
        margin: 5px 0 !important;
        width: 190px !important;
      }
      #mailing-list label {
        padding: 0px !important;
      }
    </style>
  </head>

  <body>
    <div class=\"container\">
      <div class=\"masthead\">
        <div class=\"header\">
          <h3 class=\"text-muted\"><a href=\"../\">Parsley</a></h3>

          <span class=\"social-buttons inline-block\">
            <a href=\"https://twitter.com/share\" class=\"twitter-share-button\" data-url=\"http://parsleyjs.org\" data-text=\"Parsley, the ultimate javascript form validation library. #parsleyjs\" data-via=\"guillaumepotier\" data-related=\"guillaumepotier\" data-hashtags=\"parsleyjs\">Tweet</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

            <iframe src=\"http://ghbtns.com/github-btn.html?user=guillaumepotier&repo=Parsley.js&type=watch&count=true\" allowtransparency=\"true\" frameborder=\"0\" scrolling=\"0\" width=\"110\" height=\"20\"></iframe>

            <iframe src=\"http://ghbtns.com/github-btn.html?user=guillaumepotier&repo=Parsley.js&type=fork&count=true\" allowtransparency=\"true\" frameborder=\"0\" scrolling=\"0\" width=\"110\" height=\"20\"></iframe>
          </span>

        </div>

        <ul class=\"nav nav-justified\">
          <li><a href=\"../\">Home</a></li>
          <li><a href=\"examples.html\">Examples</a></li>
          <li class=\"active\"><a href=\"index.html\">Documentation</a></li>
          <li><a href=\"download.html\">Download</a></li>
          <li><a href=\"help.html\">Help</a></li>
          <li><a href=\"annotated-source/main.html\">Annotated&nbsp;source</a></li>
          <li><a href=\"tests.html\">Tests</a></li>
          <li><a href=\"about.html\">About</a></li>
        </ul>
      </div>

      <div class=\"col-md-9\" role=\"main\">
        <div class=\"docs-section\">
          <!-- ****************** OVERVIEW ****************** -->
          <h1 id=\"overview\" class=\"page-header\">Overview</h1>
          <h3 id=\"frontend-form-validation\">Frontend form validation</h3>
          <p>
            Parsley is a javascript form validation library. It helps you provide your users with feedback on their form submission before sending it to your server. It saves you bandwidth, server load and it saves time for your users.
          </p>
          <p>
            Javascript form validation is not necessary, and if used, it <strong>does not replace strong backend server validation.</strong>
          </p>
          <p>
            That's why Parsley is here: to let you define your general form validation, implement it on the backend side, and simply port it frontend-side, with maximum respect to user experience best practices.
          </p>

          <div class=\"bs-callout bs-callout-info\">
            <h4>Parsley 1.x versions</h4>
            <p>
              Parsley's current stable and supported versions are 2.x. If you still use a 1.x version, <a href=\"http://parsleyjs.github.io/Parsley-1.x\" target=\"_blank\">here is the related doc</a>. But don't forget to <a href=\"https://github.com/guillaumepotier/Parsley.js/blob/master/UPGRADE-2.0.md\" target=\"_blank\">upgrade</a>!
            </p>
          </div>

          <h3 id=\"data-attrs\">Data attributes</h3>
          <p>
            Parsley uses a specific DOM API which allows you to configure pretty much everything directly from your DOM, without writing a single javascript configuration line or custom function. Parsley's default DOM API is <code>data-parsley-</code>. That means that if in config you see a <code>foo</code> property, it can be set/modified via DOM with <code>data-parsley-foo=\"value\"</code>.
          </p>

          <h3 id=\"configuration\">Configuration</h3>
          <p>
            You'll see along this documentation and through <a href=\"examples.html\">examples</a> various available configuration options. You can also view <a href=\"annotated-source/defaults.html\" target=\"_blank\">here</a> all of Parsley's default configuration options.
          </p>


          <!-- ****************** INSTALL ****************** -->
          <h1 id=\"installation\" class=\"page-header\">Installation</h1>
          <h3 id=\"installation-basic\">Basic installation</h3>
          <p>
            Parsley relies on <strong><a href=\"http://jquery.com/\" target=\"_blank\">jQuery</a> (&gt;= 1.8)</strong>, and it will need to be included before including Parsley.
          </p>
          <p>
            You will also need to include <strong><a href=\"https://github.com/es-shims/es5-shim\" target=\"_blank\">es5-shim</a></strong> if you want need to support IE8.
          </p>
          <p>
            Then, you can either use <code>parsley.js</code> unminified file or <code>parsley.min.js</code> minified one. These files and <a href=\"#extras\">extras</a> are <a href=\"download.html\">available here</a>.
          </p>
          <p>
            Finally, add <code>data-parsley-validate</code> to each <code>&lt;form&gt;</code> you want to be validated.
          </p>
          <p>That would look pretty much like this:
<pre><code>&lt;script src=\"jquery.js\"&gt;&lt;/script&gt;
&lt;script src=\"parsley.min.js\"&gt;&lt;/script&gt;

&lt;form data-parsley-validate&gt;
...
&lt;/form&gt;
</code></pre>
          </p>

          <div class=\"bs-callout bs-callout-info\">
            <h4>Parsley CSS</h4>
            <p>Parsley adds many classes and elements in the DOM when it validates. You are strongly encouraged to customize them in your own stylesheets, but here is the \"standard\" <a href=\"../src/parsley.css\" target=\"_blank\">Parsley css file</a> that is used here on the documentation and examples, if you want to use it to bootstrap your projects with Parsley.</p>
          </div>

          <h3 id=\"installation-javascript\">Javascript installation</h3>
          <p>Like for <a href=\"#installation-basic\">Basic installation</a>, first include <strong>jQuery</strong> and Parsley. Then, simply use <code>\$('#form').parsley(options);</code> or <code>new Parsley('#form', options);</code> (where <code>options</code> is an optional configuration object) to manually bind Parsley to your forms.</p>

          <p>That would look pretty much like this:
<pre><code>&lt;script src=\"jquery.js\"&gt;&lt;/script&gt;
&lt;script src=\"parsley.min.js\"&gt;&lt;/script&gt;

&lt;form id=\"form\"&gt;
...
&lt;/form&gt;

&lt;script&gt;
  \$('#form').parsley();
&lt;/script&gt;
</code></pre>

          <div class=\"bs-callout bs-callout-danger\">
            <h4>Do not add <code>data-parsley-validate</code> to your forms</h4>
            <p>
              Please be aware that Parsley looks at all <code>data-parsley-validate</code> occurrences in DOM on document load and automatically binds them if valid.<br>
              Once a form or field instance is bound by Parsley, doing <code>\$('#form').parsley(options);</code> will update the existing options but not replace them.
            </p>
          </div>
          </p>

          <h3 id=\"installation-localization\">Localization</h3>
          <p>
            Parsley comes with various error messages for its built-in validators. They are shipped in English by default, but many other languages are available, thanks to the awesome international Parsley community. <a href=\"https://github.com/guillaumepotier/Parsley.js/tree/master/dist/i18n\">See the available localizations here</a>.
          </p>
          <p>
            To load a different locale and its messages, include them after Parsley:
<pre><code>&lt;script src=\"jquery.js\"&gt;&lt;/script&gt;
&lt;script src=\"parsley.min.js\"&gt;&lt;/script&gt;
&lt;script src=\"i18n/fr.js\"&gt;&lt;/script&gt;
&lt;script src=\"i18n/it.js\"&gt;&lt;/script&gt;
</code></pre>
                The last loaded file will automatically set the messages locale for Parsley. In the example above, we load both French and Italian translations, and use Italian.
          </p>

          <h3 id=\"installation-plugins\">Plugins</h3>
          <p>
            Parsley strives to be highly decoupled and modular. It uses events and inheritance, and allows various plugins.
          </p>
          <p>Current available plugins are in <a href=\"#extras\">Extras</a> for additional validators.</p>

          <!-- ****************** USAGE ****************** -->
          <h1 id=\"usage\" class=\"page-header\">Usage</h1>
          <h3 id=\"usage-overview\">Overview</h3>
          <p>
            Parsley is a decoupled library that uses different classes to do the heavy work. You'll see here the different protagonists involved and how you can configure them to fit your desired validation.
          </p>
          <table class=\"table table-stripped table-bordered\">
            <thead>
              <tr>
                <th class=\"col-md-3\">\$ API</th>
                <th class=\"col-md-1\">Return</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><code>\$('#existingForm').parsley(options)</code> <version>#2.0</version></td>
                <td><code>parsleyFormInstance</code></td>
              </tr>
              <tr>
                <td><code>\$('#existingInput').parsley(options)</code> <version>#2.0</version></td>
                <td><code>parsleyFieldInstance</code></td>
              </tr>
              <tr>
                <td><code>\$('#notExistingDOMElement').parsley(options)</code> <version>#2.0</version></td>
                <td><code>undefined</code></td>
              </tr>
              <tr>
                <td><code>\$('.multipleElements').parsley(options)</code> <version>#2.0</version></td>
                <td><code>Array[Instances]</code></td>
              </tr>
            </tbody>
          </table>
          <div class=\"bs-callout bs-callout-warning\">
            <h4>Look at the source code!</h4>
            <p>
              Of course, this documentation tries to be the most exhaustive possible and relatively easy to understand. This documentation also provides the <a href=\"annotated-source/main.html\">complete annotated source</a>. Please take 5 minutes of your time to have a quick glance at it, and at least understand the architecture (Parsley, ParsleyForm, ParsleyField, ParsleyValidator, ParsleyUI, Utils, Pub/Sub..), it will heavily ease the lecture below.
            </p>
          </div>

          <h3 id=\"usage-configuration\">Configuration</h3>
          <h4>Data attributes and javascript</h4>
          <p>
            The multiple options can be specified using data attributes and javascript:
          </p>
<pre><code>&lt;input id=\"first\" data-parsley-maxlength=\"42\" value=\"hello\"/&gt;
&lt;input id=\"second\" value=\"world\"/&gt;
[...]
&lt;script&gt;
var instance = \$('#first').parsley();
console.log(instance.isValid()); // maxlength is 42, so field is valid
\$('#first').attr('data-parsley-maxlength', 4);
console.log(instance.isValid()); // No longer valid, as maxlength is 4
// You can access and override options in javascript too:
instance.options.maxlength++;
console.log(instance.isValid()); // Back to being valid, as maxlength is 5
// Alternatively, the options can be specified as:
var otherInstance = \$('#second').parsley({
  maxlength: 10
});
console.log(otherInstance.options); // Shows that maxlength will be 10 for this field
</code></pre>
          <p>
            As shown in the previous example, Parsley will actualize the options from the data attributes whenever it needs to validate a field.
          </p>
          <h4>Option inheritance</h4>
          <p>
            Field instances inherit their options from Form instances, and both inherit from the global options. This is a handy way to configure all your form's inputs in a row by passing their config through form.
          </p>
<pre><code>&lt;form&gt;
  &lt;input/&gt;
&lt;/form&gt;
[...]
&lt;script&gt;
Parsley.options.maxlength = 42;
var formInstance = \$('form').parsley();
var field = \$('input').parsley();
console.log(field.options.maxlength); // Shows that maxlength is 42
Parsley.options.maxlength = 30;
console.log(field.options.maxlength); // Shows that maxlength is automagically 30
formInstance.options.maxlength++;
console.log(field.options.maxlength); // Shows that maxlength is automagically 31
</code></pre>
          <p>
            The previous example shows that the inheritance of options is automagic. In case you are wondering, they are linked through <code>prototype</code> to achieve this.
          </p>

          <h4>Naming</h4>
          <p>
            You can change the DOM API namespace directly using the <code>namespace</code> option. Data attributes with compound names are camelcased for javascript, and their values are automatically converted to the appropriate type (boolean, integer, etc.).
            For example:
<pre><code>&lt;input data-my-namespace-priority-enabled=\"false\"&gt;
[...]
&lt;script&gt;
var instance = \$('input').parsley({namespace: 'my-namespace-'});
if (false === instance.options.priorityEnabled)
  console.log(\"priorityEnabled was set to false\");
</code></pre>
          </p>

          <h3 id=\"usage-form\">Form</h3>
          <p>
            When doing <code>\$('#target').parsley()</code> or <code>new Parsley('#target');</code> on a <code>&lt;form id=\"target\"&gt;</code> element, it will bind the whole form and its various inputs and return a <code>ParsleyForm</code> instance.
          </p>

          <h4>Options</h4>
          <table class=\"table table-stripped table-bordered\">
            <thead>
              <tr>
                <th class=\"col-md-3\">Property</th>
                <th class=\"col-md-1\">Default</th>
                <th class=\"col-md-4\">Description</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><code>data-parsley-namespace</code> <version>#2.0</version></td>
                <td><code>data-parsley-</code></td>
                <td>Namespace used by Parsley DOM API to bind options from DOM.<br><a href=\"#data-attrs\">See more</a></td>
              </tr>
              <tr>
                <td><code>data-parsley-validate</code> <version>#2.0</version></td>
                <td></td>
                <td>Auto bind your form with Parsley validation on document load.</td>
              </tr>
              <tr>
                <td><code>data-parsley-priority-enabled</code> <version>#2.0</version></td>
                <td><code>true</code></td>
                <td>Either validate higher priority constraints first and stop on first failure (<code>true</code>), or validate all constraints simultaneously and show all the failing ones (<code>false</code>).</td>
              </tr>
              <tr>
                <td><code>data-parsley-inputs</code> <version>#2.0</version></td>
                <td>
                  <code>input,</code><br>
                  <code>textarea,</code><br>
                  <code>select</code></td>
                <td>When looking for fields within a form, Parsley uses this selector.
                  The fields found will then be filtered using the <code>excluded</code> option below.</td>
              </tr>
              <tr>
                <td><code>data-parsley-excluded</code> <version>#2.0</version></td>
                <td>
                  <code>input[type=button],</code><br>
                  <code>input[type=submit],</code><br>
                  <code>input[type=reset],</code><br>
                  <code>input[type=hidden]</code></td>
                <td>Form fields that won't be validated by Parsley.  For example, if you want to add <code>disabled</code> and hidden fields to the existing list, use: <pre>data-parsley-excluded=\"input[type=button], input[type=submit], input[type=reset], input[type=hidden], [disabled], :hidden\"</pre></td>
              </tr>
            </tbody>
          </table>

          <h4>Methods</h4>
          <table class=\"table table-stripped table-bordered\">
            <thead>
              <tr>
                <th class=\"col-md-2\">Method</th>
                <th class=\"col-md-1\">Returns</th>
                <th class=\"col-md-5\">Description</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><code>whenValid({group, force})</code> <version>#2.2</version></td>
                <td><code>promise</code></td>
                <td>Returns a jQuery promise that will be fulfilled if and only if the Form is valid. <strong>Does not affect UI nor fires <a href=\"#events\">events</a>.</strong> If <code>group</code> is given, it only validates fields that belong to this group. If <code>force</code> is given, it force validates even non-required fields (<a href=\"examples/events.html\">See example</a>)</td>
              </tr>
              <tr>
                <td><code>isValid({group, force})</code> <version>#2.0</version></td>
                <td><code>boolean or null</code></td>
                <td>Similar to <code>whenValid</code> but returns <code>true</code> if the promise is already fulfilled, <code>false</code> if already rejected, and <code>null</code> if the validation is still pending.</td>
              </tr>
              <tr>
                <td><code>whenValidate({group, force})</code> <version>#2.0</version></td>
                <td>
                  <code>promise</code>
                </td>
                <td>Validate form. Prevents submission if not valid. <strong>Fires <a href=\"#events\">events</a> and affects UI.</strong>. You can only validate a certain group of fields by specifying optional <code>group</code> string parameter. If <code>group</code> is given, it only validates fields that belong to this group. If <code>force</code> is given, it force validates even non required fields (<a href=\"examples/events.html\">See example</a>). Same result as <code>whenValid</code>.</td>
              </tr>
              <tr>
                <td><code>validate({group, force})</code> <version>#2.0</version></td>
                <td>
                  <code>boolean or null</code>
                </td>
                <td>Same as <code>whenValidate</code> except it returns <code>true</code> if the promise is already fulfilled, <code>false</code> if already rejected, and <code>null</code> if the validation is still pending.</td>
              </tr>
              <tr>
                <td><code>reset()</code> <version>#2.0</version></td>
                <td></td>
                <td>Reset UI for this form and for its fields.</td>
              </tr>
              <tr>
                <td><code>destroy()</code> <version>#2.0</version></td>
                <td></td>
                <td>Disable and destroy Parsley for this form and its fields.</td>
              </tr>
            </tbody>
          </table>

          <h4>UI</h4>
          See <a href=\"#ui-for-form\">UI for Form</a> section.


          <h3 id=\"usage-field\">Field</h3>
          <p>
            When doing <code>\$('#target').parsley()</code> or <code>new Parsley('#target');</code> on a <code>&lt;input id=\"target\"&gt;</code> element (or <code>&lt;textarea&gt;</code>, <code>&lt;select&gt;</code>), it will bind the field and return a <code>ParsleyField</code> instance. Except for input types radio and checkbox that don't have a <code>name</code> attribute or a <code>data-parsley-multiple</code> attribute, they won't be bound (ignored) and will eventually raise a warning in the console.
          </p>

          <h4>Options</h4>
          <table class=\"table table-stripped table-bordered\">
            <thead>
              <tr>
                <th class=\"col-md-3\">Property</th>
                <th class=\"col-md-5\">Description</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><code>data-parsley-value</code> <version>#2.0</version></td>
                <td>Set a specific field value for Parsley validation, dissociated from the real one. eg: <code>data-parsley-value=\"foo\"</code>
                  <br>
                The JavaScript API allows one to pass a function to be called. eg:
                <code>
                  \$('&lt;input type=\"text\"&gt;').appendTo(\$('form')).<br>
                  parsley({<br>
                  &nbsp;&nbsp;value: function(parsley) { return 'foo'; }<br>
                  });
                </code></td>
              </tr>
              <tr>
                <td><code>data-parsley-group</code> <version>#2.0</version></td>
                <td>Assign a group to a field for specific group validation. eg: <code>data-parsley-group=\"signup\"</code>. This way, you could only validate a portion of a form and not all the fields. Can be multiple. eg: <code>data-parsley-group='[\"foo\", \"bar\"]'</code></td>
              </tr>
              <tr>
                <td><code>data-parsley-multiple</code> <version>#2.0</version></td>
                <td>You can add this attribute to radio / checkboxes elements like this: <code>data-parsley-multiple=\"mymultiplelink\"</code> to link them together even if they don't share the same name.</td>
              </tr>
              <tr>
                <td><code>data-parsley-validate-if-empty</code> <version>#2.0</version></td>
                <td>A field is by default not validated if it is not required and empty. By adding <code>data-parsley-validate-if-empty</code>, validation will be done even if field is empty. Useful if you need some custom validators that check something particular when a field is empty.</td>
              </tr>
              <tr>
                <td><code>data-parsley-whitespace</code> <version>#2.1</version></td>
                <td>Perform actions on whitespace in value <strong>only for Parsley validation</strong> (and not inside the input itself, data sent by your form won't be edited). Useful if your backend already does so and if extra whitespace could unnecessarily mess with your validation. <br><br>Use: <code>data-parsley-whitespace=\"trim\"</code> to trim leading and trailing whitespace characters.<br>Use: <code>data-parsley-whitespace=\"squish\"</code> to squish multiple sequential whitespace characters into a single whitespace character, and also trim leading and trailing whitespace characters.</td>
              </tr>
              <tr>
                <td><code>data-parsley-ui-enabled</code> <version>#2.0</version></td>
                <td>If set to <code>false</code>, Parsley will not affect UI for this field.</td>
              </tr>
              <tr>
                <td><code>data-parsley-errors-messages-disabled</code> <version>#2.0</version></td>
                <td>Add <code>parsley-success</code> and <code>parsley-error</code> classes on field, but no error message.</td>
              </tr>
              <tr>
                <td><code>data-parsley-excluded</code> <version>#2.1</version></td>
                <td>If set to <code>true</code>, Parsley will ignore this field when binding a form.</td>
              </tr>
              <tr>
                <td><code>data-parsley-debounce</code> <version>#2.3</version></td>
                <td>Postpones validation for a given number of milliseconds after user input has stopped arriving, eg: <code>data-parsley-debounce=\"500\"</code>. Useful for expensive validations (such as remotes) that you don't want to run on every keystroke.</td>
              </tr>
            </tbody>
          </table>

          <div class=\"bs-callout bs-callout-warning\">
            <h4>Checkbox, radio and select multiple</h4>
            <p>
              These fields are a bit different than regular <code>input</code>, <code>textarea</code> or simple <code>select</code>. They need to have either a <code>name</code> or an <code>id</code> attribute to be correctly bound and validated by Parsley. Otherwise, they will be ignored and a warning will be put in the console.
            </p>
          </div>

          <h4>Methods</h4>
          <table class=\"table table-stripped table-bordered\">
            <thead>
              <tr>
                <th class=\"col-md-2\">Method</th>
                <th class=\"col-md-2\">Returns</th>
                <th class=\"col-md-4\">Description</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><code>isValid({force})</code> <version>#2.0</version></td>
                <td>
                  <code>true</code> if all ok<br>
                  <code>null</code> if some validations are still pending<br>
                  <code>[Violation, ...]]</code> if fails
                </td>
                <td>Returns if the field is valid or not. <strong>Does not affect UI nor fires <a href=\"#events\">events</a>.</strong> If <code>force</code> is set, it forces validation even on non-required fields (<a href=\"examples/events.html\">See example</a>)</td>
              </tr>
              <tr>
                <td><code>validate({force, group})</code> <version>#2.0</version></td>
                <td>
                  <code>true</code> if all ok<br>
                  <code>null</code> if some validations are still pending<br>
                  <code>[Violation, ...]]</code> if fails
                </td>
                <td>Validate Field. <strong>Fires <a href=\"#events\">events</a> and affects UI.</strong> If <code>force</code> is set, force validate even non required fields (<a href=\"examples/events.html\">See example</a>)</td>
              </tr>
              <tr>
                <td><code>getErrorsMessages()</code> <version>#2.0</version></td>
                <td><code>array</code></td>
                <td>Returns an array of field's error messages</td>
              </tr>
              <tr>
                <td><code>reset()</code> <version>#2.0</version></td>
                <td></td>
                <td>Reset UI for this field.</td>
              </tr>
              <tr>
                <td><code>destroy()</code> <version>#2.0</version></td>
                <td></td>
                <td>Disable and destroy Parsley for this field.</td>
              </tr>
            </tbody>
          </table>

          <h4>UI</h4>
          See <a href=\"#ui-for-field\">UI for Field</a> section.

          <!-- ****************** BUILT-IN VALIDATORS ****************** -->
          <h1 id=\"validators\" class=\"page-header\">Built-in validators</h1>
          <h3 id=\"validators-overview\">Overview</h3>
          <p>
            A <i>validator</i> is a method to determine if a given <i>value</i> (or sometimes sets of values) is acceptable or not, given some <i>requirement</i> parameters.
          </p>
          <p>
            Parsley comes with many builtin validators and provides tools to specify your own.
          </p>

          <h3 id=\"validators-list\">Builtin validators list</h3>
          <table class=\"table table-stripped table-bordered\">
            <thead>
              <tr>
                <th class=\"col-md-2\">Name</th>
                <th class=\"col-md-4\">API</th>
                <th class=\"col-md-5\">Description</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <a name=\"psly-validator-required\"></a>
                  Required <version>#2.0</version>
                </td>
                <td>
                  <table class=\"table-stripped hundred\">
                    <tr>
                      <td><code>required</code></td>
                      <td><span class=\"label label-info pull-right\">HTML5</span></td>
                    </tr>
                    <tr>
                      <td><code>data-parsley-required</code></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td><code>data-parsley-required=\"true\"</code></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td><code>data-parsley-required=\"false\"</code></td>
                      <td></td>
                    </tr>
                  </table>
                </td>
                <td>Validates that a required field has been filled with a non blank value. If <code>data-parsley-required=\"false\"</code>, validator is deactivated and the field is not required.</td>
              </tr>
              <tr>
                <td>
                  <a name=\"psly-validator-email\"></a>
                  Email <version>#2.0</version>
                </td>
                <td>
                  <table class=\"table-stripped hundred\">
                    <tr>
                      <td><code>type=\"email\"</code></td>
                      <td><span class=\"label label-info pull-right\">HTML5</span></td>
                    </tr>
                    <tr>
                      <td><code>data-parsley-type=\"email\"</code></td>
                      <td></td>
                    </tr>
                  </table>
                </td>
                <td>Validates that a value is a valid email address.</td>
              </tr>
              <tr>
                <td>
                  <a name=\"psly-validator-number\"></a>
                  Number <version>#2.0</version>
                </td>
                <td><code>data-parsley-type=\"number\"</code></td>
                <td>Validates that a value is a valid number according to the given <code>step</code>, <code>min</code> and original <code>value</code>.
                  <br>The default <code>step</code> for HTML5 is \"1\", which is so counterintuive that Parsley uses a default <code>step</code> of \"any\" for <code>data-parsley-type=\"number\"</code>.
                  <span class=\"label label-warning\">Warning!</span> HTML5 <code>type=\"number\"</code> can be counterintuitive. The default step of '1' is near useless. Moreover, for browsers that support it, the value accessible from javascript in case of invalid input is <code>\"\"</code>, so you will never get an error (unless it is also <code>required</code>).</td>
              </tr>
              <tr>
                <td>
                  <a name=\"psly-validator-integer\"></a>
                  Integer <version>#2.0</version>
                </td>
                <td>
                  <table class=\"table-stripped hundred\">
                    <tr>
                      <td><code>type=\"number\"</code></td>
                      <td><span class=\"label label-info pull-right\">HTML5</span></td>
                    </tr>
                    <tr>
                      <td><code>data-parsley-type=\"integer\"</code></td>
                      <td></td>
                    </tr>
                  </table>
                </td>
                <td>Validates that a value is a valid integer.</td>
              </tr>
              <tr>
                <td>
                  <a name=\"psly-validator-digits\"></a>
                  Digits <version>#2.0</version>
                </td>
                <td><code>data-parsley-type=\"digits\"</code></td>
                <td>Validates that a value is only digits.</td>
              </tr>
              <tr>
                <td>
                  <a name=\"psly-validator-alphanum\"></a>
                  Alphanum <version>#2.0</version>
                </td>
                <td><code>data-parsley-type=\"alphanum\"</code></td>
                <td>Validates that a value is a valid alphanumeric string.</td>
              </tr>
              <tr>
                <td>
                  <a name=\"psly-validator-url\"></a>
                  Url <version>#2.0</version>
                </td>
                <td>
                  <table class=\"table-stripped hundred\">
                    <tr>
                      <td><code>type=\"url\"</code></td>
                      <td><span class=\"label label-info pull-right\">HTML5</span></td>
                    </tr>
                    <tr>
                      <td><code>data-parsley-type=\"url\"</code></td>
                      <td></td>
                    </tr>
                  </table>
                </td>
                <td>Validates that a value is a valid url.</td>
              </tr>
              <tr>
                <td>
                  <a name=\"psly-validator-minlength\"></a>
                  Minlength <version>#2.0</version>
                </td>
                <td><table class=\"table-stripped hundred\">
                    <tr>
                      <td><code>minlength=\"6\"</code></td>
                      <td><span class=\"label label-info pull-right\">HTML5</span></td>
                    </tr>
                    <tr>
                      <td><code>data-parsley-minlength=\"6\"</code></td>
                      <td></td>
                    </tr>
                  </table></td>
                <td>Validates that the length of a string is at least as long as the given limit.</td>
              </tr>
              <tr>
                <td>
                  <a name=\"psly-validator-maxlength\"></a>
                  Maxlength <version>#2.0</version>
                </td>
                <td><table class=\"table-stripped hundred\">
                    <tr>
                      <td><code>maxlength=\"6\"</code></td>
                      <td><span class=\"label label-info pull-right\">HTML5</span></td>
                    </tr>
                    <tr>
                      <td><code>data-parsley-maxlength=\"6\"</code></td>
                      <td></td>
                    </tr>
                  </table></td>
                <td>Validates that the length of a string is not longer than the given limit.</td>
              </tr>
              <tr>
                <td>
                  <a name=\"psly-validator-length\"></a>
                  Length <version>#2.0</version>
                </td>
                <td><code>data-parsley-length=\"[6, 10]\"</code></td>
                <td>Validates that a given string length is between some minimum and maximum value.</td>
              </tr>
              <tr>
                <td>
                  <a name=\"psly-validator-min\"></a>
                  Min <version>#2.0</version>
                </td>
                <td>
                  <table class=\"table-stripped hundred\">
                    <tr>
                      <td><code>min=\"6\"</code></td>
                      <td><span class=\"label label-info pull-right\">HTML5</span></td>
                    </tr>
                    <tr>
                      <td><code>data-parsley-min=\"6\"</code></td>
                      <td></td>
                    </tr>
                  </table>
                </td>
                <td>Validates that a given input (number or date) or date is greater than or equal to some minimum (number or date.)</td>
              </tr>
              <tr>
                <td>
                  <a name=\"psly-validator-max\"></a>
                  Max <version>#2.0</version>
                </td>
                <td>
                  <table class=\"table-stripped hundred\">
                    <tr>
                      <td><code>max=\"10\"</code></td>
                      <td><span class=\"label label-info pull-right\">HTML5</span></td>
                    </tr>
                    <tr>
                      <td><code>data-parsley-max=\"6\"</code></td>
                      <td></td>
                    </tr>
                  </table>
                </td>
                <td>Validates that the given input (number or date) is less than or equal to some maximum value (number or date).</td>
              </tr>
              <tr>
                <td>
                  <a name=\"psly-validator-range\"></a>
                  Range <version>#2.0</version>
                </td>
                <td>
                  <table class=\"table-stripped hundred\">
                    <tr>
                      <td><code>type=\"range\"</code></td>
                      <td><span class=\"label label-info pull-right\">HTML5</span></td>
                    </tr>
                    <tr>
                      <td><code>data-parsley-range=\"[6, 10]\"</code></td>
                      <td></td>
                    </tr>
                  </table>
                </td>
                <td>Validates that a given value (number or date) is between some minimum and maximum values (numbers or dates).</td>
              </tr>
              <tr>
                <td>
                  <a name=\"psly-validator-pattern\"></a>
                  Pattern <version>#2.0</version>
                </td>
                <td>
                  <table class=\"table-stripped hundred\">
                    <tr>
                      <td><code>pattern=\"\\d+\"</code></td>
                      <td><span class=\"label label-info pull-right\">HTML5</span></td>
                    </tr>
                    <tr>
                      <td><code>data-parsley-pattern=\"\\d+\"</code></td>
                      <td></td>
                    </tr>
                  </table>
                </td>
                <td>Validates that a value matches a specific regular expression (regex).
                  <br>Note that patterns are anchored, i.e. must match the whole string.
                  <br>Parsley deviates from the standard for patterns looking like <code>/<i>pattern</i>/<i>{flag}</i></code>; these are interpreted as literal regexp and are not anchored.
                </td>
              </tr>
              <tr>
                <td>
                  <a name=\"psly-validator-mincheck\"></a>
                  MinCheck <version>#2.0</version>
                </td>
                <td><code>data-parsley-mincheck=\"3\"</code></td>
                <td>Validates that a certain minimum number of checkboxes in a group are checked.</td>
              </tr>
              <tr>
                <td>
                  <a name=\"psly-validator-maxcheck\"></a>
                  MaxCheck <version>#2.0</version>
                </td>
                <td><code>data-parsley-maxcheck=\"3\"</code></td>
                <td>Validates that a certain maximum number of checkboxes in a group are checked.</td>
              </tr>
              <tr>
                <td>
                  <a name=\"psly-validator-check\"></a>
                  Check <version>#2.0</version>
                </td>
                <td><code>data-parsley-check=\"[1, 3]\"</code></td>
                <td>Validates that the number of checked checkboxes in a group is within a certain range.</td>
              </tr>
              <tr>
                <td>
                  <a name=\"psly-validator-equalto\"></a>
                  Equalto <version>#2.0</version>
                </td>
                <td><code>data-parsley-equalto=\"#anotherfield\"</code></td>
                <td>Validates that the value is identical to another field's value (useful for password confirmation check).</td>
              </tr>
            </tbody>
          </table>

          <p>
            These validators are shipped in <code>parsley.js</code>. Have a look at <a href=\"#extras\">Parsley Extras</a> for more validators.
          </p>

          <!-- ****************** CUSTOM VALIDATORS ****************** -->
          <h1 id=\"custom\" class=\"page-header\">Custom Validators</h1>
          <h3 id=\"custom-intro\">Craft yours</h3>
          <p>Of course, Parsley built-in validators are commonly used validators, and you'll need some more that fit your specific forms and validations. That's why Parsley lets you easily create your own validators.</p>
          <p>
          <p>The preferred way to register them (after <code>parsley.js</code> is loaded) looks like:</p>

<pre><code>&lt;input type=\"text\" data-parsley-multiple-of=\"3\" /&gt;
[...]
&lt;script&gt;
window.Parsley
  .addValidator('multipleOf', {
    requirementType: 'integer',
    validateNumber: function(value, requirement) {
      return 0 === value % requirement;
    },
    messages: {
      en: 'This value should be a multiple of %s',
      fr: 'Cette valeur doit être un multiple de %s'
    }
  });
&lt;/script&gt;
</code></pre>
          </p>
          <p>The following sections go over the details on how to define a custom validator</p>
          <h3 id=\"custom-function\">Validating function</h3>
          <p>There are many ways a validator can specify how to validate data:</p>
          <table class=\"table table-stripped table-bordered\">
            <thead>
              <tr>
                <th class=\"col-md-1\">Name</th>
                <th class=\"col-md-4\">Description</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><code>validateString</code></td>
                <td>Is passed the input's value as a string.</td>
              </tr>
              <tr>
                <td><code>validateNumber</code></td>
                <td>Use this instead of <code>validateString</code> when only numeric values are acceptable. Parsley will parse the input's value and pass the number, or reject the value if it's not an acceptable number</td>
              </tr>
              <tr>
                <td><code>validateDate</code></td>
                <td>Define this to treate date values. Parsley will parse the input's value and pass the date, or reject the value if it's not an acceptable date. The format used must be that [of the standard](https://html.spec.whatwg.org/multipage/infrastructure.html#valid-date-string), e.g. \"2017-02-28\". </td>
              </tr>
              <tr>
                <td><code>validateMultiple</code></td>
                <td>Is passed an array of values, in the case of checkboxes.</td>
              </tr>
            </tbody>
          </table>

          <p>Your custom validator must specify at least one of these. If it can validate both single inputs and multiple (i.e. checkboxes), then you can specify <i>validateMultiple</i> and one of the other two.</p>

          <p>Validating functions should return either <code>true</code> if the value is valid, or <code>false</code> otherwise. It can instead return a jQuery promise that will be resolved if the value is valid, or be rejected otherwise.</p>

          <p>Validators can reject with a custom error message as a first argument if desired.</p>

          <h3 id=\"custom-requirement\">Requirement parameters</h3>

          <p>You can specify what kind of requirement parameter your custom validator is expecting:</p>
          <table class=\"table table-stripped table-bordered\">
            <thead>
              <tr>
                <th class=\"col-md-1\">Value of <code>requirementType</code></th>
                <th class=\"col-md-4\">Description</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><code>'string'</code></td>
                <td>The most generic kind; requirement passed as is, with no checking.</td>
              </tr>
              <tr>
                <td><code>'integer'</code></td>
                <td>For integers only (e.g. used by <code>minlength</code>)</td>
              </tr>
              <tr>
                <td><code>'number'</code></td>
                <td>To be used when decimal numbers are acceptable</td>
              </tr>
              <tr>
                <td><code>'date'</code></td>
                <td>To be used for dates. The format used must be that [of the standard](https://html.spec.whatwg.org/multipage/infrastructure.html#valid-date-string), e.g. <code>\"2017-02-28\"</code>.</td>
              </tr>
              <tr>
                <td><code>'regexp'</code></td>
                <td>Requirement can be either a full regexp string (e.g. <code>/hel+o/i</code>) or just a simple expression (e.g. <code>hel+o</code>)</td>
              </tr>
              <tr>
                <td><code>'boolean'</code></td>
                <td>Any value other than <code>\"false\"</code> will be considered to <code>true</code>, including the empty string. This is so <code>data-parsley-required</code> and <code>data-parsley-required=true</code> be treated the same way.</td>
              </tr>
            </tbody>
          </table>

          <p>You can also specify an array of these kinds. For example, if a validator has <code>requirementType: ['integer', 'integer']</code>, then given the requirement string <code>\"[1, 2]\"</code> it will receive <code>1</code> and <code>2</code> as second and third arguments (the first one being the value(s) to validate).
          </p>

          <p>For cases where more complex parameters are needed, you can specify extra parameters; refer to the source and check how the <code>remote</code> validator uses that.</p>
        </div>

          <h3 id=\"custom-messages\">Error messages</h3>
          <p>You can specify error messages, in as many locales as desired, using the <code>messages</code> option.</p>
          <p>This is equivalent to calling <code>addMessage</code> for each locale.</p>

        <!-- ****************** UI/ UX ****************** -->
        <h1 id=\"ui\" class=\"page-header\">UI/UX</h1>
        <h3 id=\"ui-overview\">Overview</h3>
        <p>
        Parsley ships a UI/UX component that is the only one responsible for classes, error messages, focus or trigger events that alter your page. It strives to be the most UX friendly. Here are the main mottos for ParsleyUI:
        <ol>
          <li><strong>Min char validation</strong>: Parsley by default does not proceed with field validation when less than 3 chars have been input. Do not assault your users with error messages too soon!</li>
          <li><strong>One error at the time</strong>: constraints are prioritized in Parsley, and if several of them are not met for a field on validation, only show the most important one.</li>
          <li><strong>Quick error removal</strong>: when a field is detected and shown as invalid, further checks are done on each keypress to try to quickly remove error messages once the field is ok.</li>
          <li><strong>Control focusing on error</strong>: on form submission, the first error field is focused to allow the user to easily start fixing errors.</li>
        </ol>
        </p>
        <p>Naturally, all of this is absolutely customizable; you'll see below how to configure your desired UX behavior.</p>

        <h3 id=\"ui-classes\">Classes and templates</h3>
        <p>Parsley adds its share of classes and elements, to ease nice UI validation result display. By default, it will add <code>parsley-success</code> and <code>parsley-error</code> classes depending on the validation result, <strong>on the input itself for a simple text, textarea and select input, and on <u>the parent</u> for radio / checkboxes inputs.</strong></p>

        <div class=\"bs-callout bs-callout-info\">
          <h4>Customize your classes</h4>
          <p>You could change these classes' names in configuration, and the class holder element too.</p>
        </div>

        <h3 id=\"ui-for-form\">UI for form</h3>
        <table class=\"table table-stripped table-bordered\">
          <thead>
            <tr>
              <th class=\"col-md-3\">Name</th>
              <th class=\"col-md-1\">API</th>
              <th class=\"col-md-4\">Description</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>UI Enabled <version>#2.0</version></td>
              <td><code>data-parsley-ui-enabled=\"false\"</code></td>
              <td>Activate or deactivate UI</td>
            </tr>
            <tr>
              <td>Focus <version>#2.0</version></td>
              <td><code>data-parsley-focus=\"first\"</code></td>
              <td>Focus failing field on form validation. Possible values: <code>'first' | 'last' | 'none'</code></td>
            </tr>
          </tbody>
        </table>

        <h3 id=\"ui-for-field\">UI for field</h3>
        <table class=\"table table-stripped table-bordered\">
          <thead>
            <tr>
              <th class=\"col-md-3\">Name</th>
              <th class=\"col-md-1\">API</th>
              <th class=\"col-md-4\">Description</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Trigger <version>#2.0</version></td>
              <td><code>data-parsley-trigger=\"input\"</code></td>
              <td>Specify one or many javascript events that will trigger item validation, before any failure. To set multiple events, separate them with a space <code>data-parsley-trigger=\"focusin focusout\"</code>. Default is <code>null</code>. <a href=\"http://api.jquery.com/category/events/\" target=\"_blank\">See the various events supported by jQuery.</a></td>
            </tr>
            <tr>
              <td>Trigger After Failure <version>#2.0</version></td>
              <td><code>data-parsley-trigger-after-failure=\"focusout\"</code></td>
              <td>Specify one or many javascript events that will trigger item validation, after the first failure. Default is <a href=\"https://developer.mozilla.org/en-US/docs/Web/Events/input\"><code>'input'</code></a>.</td>
            </tr>
            <tr>
              <td>No focus <version>#2.0</version></td>
              <td><code>data-parsley-no-focus</code></td>
              <td>If this field fails, do not focus on it (if <code>first</code> focus strategy is on, next field would be focused, if <code>last</code> strategy is on, previous field would be focused)</td>
            </tr>
            <tr>
              <td>Validation threshold <version>#2.0</version></td>
              <td><code>data-parsley-validation-threshold=\"10\"</code></td>
              <td>Used with trigger option above, for all <code>key</code>- events, do not validate until the field has a certain number of characters. Default is <code>3</code></td>
            </tr>
            <tr>
              <td>Class handler <version>#2.0</version></td>
              <td><code>data-parsley-class-handler=\"#element\"</code></td>
              <td>Specify the existing DOM container where ParsleyUI should add error and success classes. It is also possible to configure it with a callback function from javascript, see <a href=\"annotated-source/defaults.html\">the annotated source</a>.</td>
            </tr>
            <tr>
              <td>Errors container <version>#2.0</version></td>
              <td><code>data-parsley-errors-container=\"#element\"</code></td>
              <td>Specify the existing DOM container where ParsleyUI should put the errors. It is also possible to configure it with a callback function from javascript, see <a href=\"annotated-source/defaults.html\">the annotated source</a>.</td>
            </tr>
            <tr>
              <td>Error message <version>#2.0</version></td>
              <td><code>data-parsley-error-message=\"my message\"</code></td>
              <td>Customize a unique global message for the field.</td>
            </tr>
            <tr>
              <td>Validator error message <version>#2.0</version></td>
              <td><code>data-parsley-`constraint`-message=\"my message\"</code></td>
              <td>Customize the error message for the field constraint. eg: <code>data-parsley-required-message=\"this field is required\"</code></td>
            </tr>
          </tbody>
        </table>

        <h3 id=\"ui-for-javascript\">UI for javascript</h3>
        <p>
          Field instances have low level methods to add, update &amp; remove manage error messages. You have to manage these errors completely manually and they should be independant with other validations. Prefer using custom validations whenever possible.
          Note that <code>getErrorsMessages</code> only return errors from validations and not manually added errors.
        </p>
        <table class=\"table table-stripped table-bordered\">
          <thead>
            <tr>
              <th class=\"col-md-3\">Name</th>
              <th class=\"col-md-1\">Method</th>
              <th class=\"col-md-4\">Description</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Add error <version>#2.0</version></td>
              <td><code>addError(name, {message: , assert: , updateClass: true});</code></td>
              <td>Add an error message.</td>
            </tr>
            <tr>
              <td>Update error <version>#2.0</version></td>
              <td><code>updateError(name, {message: , assert: , updateClass: true});</code></td>
              <td>Update an already added error message error.</td>
            </tr>
            <tr>
              <td>Remove error <version>#2.0</version></td>
              <td><code>removeError(name, {updateClass: true});</code></td>
              <td>Remove an already present error.</td>
            </tr>
          </tbody>
        </table>

        <!-- ****************** Events ****************** -->
        <h1 id=\"events\" class=\"page-header\">Events</h1>
        <h3 id=\"events-overview\">Overview</h3>
        <p>Parsley triggers events that allows ParsleyUI to work. Further more, it could allow you to do some powerful magic if you listen properly to the right events!</p>
        <p>For performance reasons, Parsley does not use jQuery events, but the API to listen to events is very similar:
<pre><code>\$('#some-input').parsley().on('field:success', function() {
  // In here, `this` is the parlsey instance of #some-input
});
</code></pre>
        </p>
        <p>Similarly to jQuery events, parsley events will bubble up. For example, if a field is about to be validated, the event <code>'field:validate'</code> will be triggerred first on the parsley field instance, then on the parsley form instance (if the field is bound in a form) and finally on the top level <code>window.Parsley</code>
<pre><code>window.Parsley.on('field:error', function() {
  // This global callback will be called for any field that fails validation.
  console.log('Validation failed for: ', this.\$element);
});
</code></pre>
        </p>.
        <h3 id=\"events-list\">Events List</h3>
        <table class=\"table table-stripped table-bordered\">
          <thead>
            <tr>
              <th class=\"col-md-2\">Name</th>
              <th class=\"col-md-1\">Instance</th>
              <th class=\"col-md-1\">Fired by</th>
              <th class=\"col-md-4\">Description</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><code>form:init</code> <version>#2.1</version></td>
              <td><code>ParsleyForm</code></td>
              <td><code>new Parsley()</code></td>
              <td>Triggered when a Form is bound for the first time.</td>
            </tr>
            <tr>
              <td><code>form:validate</code> <version>#2.1</version></td>
              <td><code>ParsleyForm</code></td>
              <td><code>.validate()</code></td>
              <td>Triggered when a form validation is triggered, <strong>before</strong> its validation.</td>
            </tr>
            <tr>
              <td><code>form:success</code> <version>#2.1</version></td>
              <td><code>ParsleyForm</code></td>
              <td><code>.validate()</code></td>
              <td>Triggered when a form validation is triggered, <strong>after</strong> its validation succeeds.</td>
            </tr>
            <tr>
              <td><code>form:error</code> <version>#2.1</version></td>
              <td><code>ParsleyForm</code></td>
              <td><code>.validate()</code></td>
              <td>Triggered when a form validation is triggered, <strong>after</strong> its validation fails.</td>
            </tr>
            <tr>
              <td><code>form:validated</code> <version>#2.1</version></td>
              <td><code>ParsleyForm</code></td>
              <td><code>.validate()</code></td>
              <td>Triggered when a form validation is triggered, <strong>after</strong> its validation finishes (with success or with errors).</td>
            </tr>
            <tr>
              <td><code>form:submit</code> <version>#2.2</version></td>
              <td><code>ParsleyForm</code></td>
              <td><code>submit()</code></td>
              <td>Triggered when after a form validation succeeds and before the form is actually submitted.<br>
                Return `false` to interrupt submission.</td>
            </tr>
            <tr>
              <td><code>field:init</code> <version>#2.1</version></td>
              <td><code>ParsleyField</code></td>
              <td><code>new Parsley()</code></td>
              <td>Triggered when a Field is bound for the first time.</td>
            </tr>
            <tr>
              <td><code>field:validate</code> <version>#2.1</version></td>
              <td><code>ParsleyField</code></td>
              <td><code>.validate()</code></td>
              <td>Triggered when a field validation is triggered, <strong>before</strong> its validation.</td>
            </tr>
            <tr>
              <td><code>field:success</code> <version>#2.1</version></td>
              <td><code>ParsleyField</code></td>
              <td><code>.validate()</code></td>
              <td>Triggered when a field validation succeeds.</td>
            </tr>
            <tr>
              <td><code>field:error</code> <version>#2.1</version></td>
              <td><code>ParsleyField</code></td>
              <td><code>.validate()</code></td>
              <td>Triggered when a field validation fails.</td>
            </tr>
            <tr>
              <td><code>field:validated</code> <version>#2.1</version></td>
              <td><code>ParsleyField</code></td>
              <td><code>.validate()</code></td>
              <td>Triggered after a field is validated (with success or with errors).</td>
            </tr>
          </tbody>
        </table>

        <!-- ****************** Remote ****************** -->
        <h1 id=\"remote\" class=\"page-header\">Parsley Remote</h1>
        <p>
          Parsley <a href=\"annotated-source/remote.html\" target=\"_blank\">remote</a> is an easy to use <strong>ajax asynchronous validator</strong>.
        </p>

        <h3 id=\"remote-options\">Options</h3>
        <table class=\"table table-stripped table-bordered\">
          <thead>
            <tr>
              <th class=\"col-md-3\">Name</th>
              <th class=\"col-md-1\">API</th>
              <th class=\"col-md-4\">Description</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Remote validator</td>
              <td><code>data-parsley-remote</code> <version>#2.0</version></td>
              <td>Define the url that will be called to validate the entered content. e.g. <code>data-parsley-remote=\"http://url.ext\"</code>.
                <br>If the url contains the string <code>\"{value}\"</code>, the value will replace it in the URL (typical of RESTful APIs),
                otherwise the value will be passed as a data parameter, with the key being the input's name or ID.</td>
            </tr>
            <tr>
              <td>Reverse</td>
              <td><code>data-parsley-remote-reverse</code> <version>#2.0</version></td>
              <td>By default, all 2xx ajax returs are considered valid, all others failure. Sometimes (when a call is needed to see if an email, a pseudo is available for example) a 404 API answer could be the right answer. Using <code>data-parsley-remote-reverse=\"true\"</code> will consider 200 response is an error, and 404 one is correct.</td>
            </tr>
            <tr>
              <td>Options</td>
              <td><code>data-parsley-remote-options</code> <version>#2.0</version></td>
              <td>You could pass a json object to the <code>\$.ajax()</code> method used by remote validator. eg: <pre>data-parsley-remote-options='{ \"type\": \"POST\", \"dataType\": \"jsonp\", \"data\": { \"token\": \"value\" } }'</pre>
              <span class=\"label label-warning\">Warning:</span> you must format your JSON string wrapping all the keys/values with <code>\"</code> like above otherwise it won't be correctly parsed by <code>\$.parseJSON()</code> used behind the scenes by remote validator (<a href=\"https://api.jquery.com/jQuery.parseJSON/\" target=\"_blank\">See jQuery doc</a>)</td>
            </tr>
            <tr>
              <td>Validator</td>
              <td><code>data-parsley-remote-validator</code> <version>#2.0</version></td>
              <td><p>Use a specific remote validator. By default, there are 2 built-in remote validators: <code>default</code> and <code>reverse</code>. Default one is used by default and Reverse one used when <code>data-parsley-remote-reverse</code> is set to true. (this is an alias, you could use <code>data-parsley-remote-validator=\"reverse\"</code>).</p>
                  <p>Inside the function, <code>this</code> keyword refers to the <code>ParsleyField</code> instance attached to the form element. You have access to the plugin as well as the element if you need to perform other actions before returning the validation result.</p>
                  <p>To learn how to craft your custom remote validators, go <a href=\"#remote-custom\">here</a>.</p></td>
            </tr>
          </tbody>
        </table>

        <h3 id=\"remote-events\">Events</h3>
        <table class=\"table table-stripped table-bordered\">
          <thead>
            <tr>
              <th class=\"col-md-2\">Name</th>
              <th class=\"col-md-1\">Instance</th>
              <th class=\"col-md-1\">Fired by</th>
              <th class=\"col-md-4\">Description</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><code>field:ajaxoptions</code> <version>#2.2</version></td>
              <td><code>ParsleyField</code></td>
              <td><code>whenIsValid</code> &amp; al.</td>
              <td>Triggered just before an ajax request is sent, so one can tweak the options passed to <code>\$.ajax</code>. Options are passed as a second parameter.</td>
            </tr>
          </tbody>
        </table>

        <h3 id=\"remote-methods\">Methods</h3>
        <table class=\"table table-stripped table-bordered\">
          <thead>
            <tr>
              <th class=\"col-md-1\">Method</th>
              <th class=\"col-md-4\">Description</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><code>Parsley.addAsyncValidator(name, fn)</code> <version>#2.0</version></td>
              <td>Specify custom validator for Ajax results.</td>
            </tr>
          </tbody>
        </table>

        <h3 id=\"remote-custom\">Custom remote validators</h3>
        <p>If you need some custom processing of Ajax responses, configure your custom remote as follows:
<pre><code>&lt;input name=\"q\" type=\"text\" data-parsley-remote data-parsley-remote-validator='mycustom' value=\"foo\" /&gt;
[...]
&lt;script href=\"parsley.remote.js\"&gt;&lt;/script&gt;
&lt;script&gt;
window.Parsley.addAsyncValidator('mycustom', function (xhr) {
    console.log(this.\$element); // jQuery Object[ input[name=\"q\"] ]

    return 404 === xhr.status;
  }, 'http://mycustomapiurl.ext');
&lt;/script&gt;
</code></pre>
        </p>

        <!-- ****************** Extras ****************** -->
        <h1 id=\"extras\" class=\"page-header\">Parsley Extras</h1>
        <p>
          You'll find in the <code>src/extra/</code> directory in Parsley .zip or Github projects many more or less useful validators crafted by the community. A doc here is coming.
        </p>
        <h3 id=\"extras-validators-list\">Validators list</h3>
        <table class=\"table table-stripped table-bordered\">
          <thead>
           <tr>
             <th class=\"col-md-2\">Name</th>
             <th class=\"col-md-4\">API</th>
             <th class=\"col-md-5\">Description</th>
           </tr>
         </thead>
         <tbody>
           <tr>
             <td>
               <a name=\"psly-validator-gt\"></a>
               Greater than <version>#2.0</version>
             </td>
             <td>
               <table class=\"table-stripped hundred\">
                 <tr>
                   <td><code>data-parsley-gt=\"#anotherfield\"</code></td>
                   <td></td>
                 </tr>
                 <tr>
                   <td><code>data-parsley-gt=\"6\"</code></td>
                   <td></td>
                 </tr>
               </table>
             </td>
             <td>Validates that the value is greater than another field's value or some strict minimum number.</td>
           </tr>
           <tr>
             <td>
               <a name=\"psly-validator-gte\"></a>
               Greater than or equal to <version>#2.0</version>
             </td>
             <td>
               <table class=\"table-stripped hundred\">
                 <tr>
                   <td><code>data-parsley-gte=\"#anotherfield\"</code></td>
                   <td></td>
                 </tr>
                 <tr>
                   <td><code>data-parsley-gte=\"6\"</code></td>
                   <td></td>
                 </tr>
               </table>
             </td>
             <td>Validates that the value is greater than or equal to another field's value or some minimum number.</td>
           </tr>
           <tr>
             <td>
               <a name=\"psly-validator-lt\"></a>
               Less than <version>#2.0</version>
             </td>
             <td>
               <table class=\"table-stripped hundred\">
                 <tr>
                   <td><code>data-parsley-lt=\"#anotherfield\"</code></td>
                   <td></td>
                 </tr>
                 <tr>
                   <td><code>data-parsley-lt=\"6\"</code></td>
                   <td></td>
                 </tr>
               </table>
             </td>
             <td>Validates that the value is less than another field's value or some strict maximum number.</td>
           </tr>
           <tr>
             <td>
               <a name=\"psly-validator-lte\"></a>
               Less than or equal to <version>#2.0</version>
             </td>
             <td>
               <table class=\"table-stripped hundred\">
                 <tr>
                   <td><code>data-parsley-lte=\"#anotherfield\"</code></td>
                   <td></td>
                 </tr>
                 <tr>
                   <td><code>data-parsley-lte=\"6\"</code></td>
                   <td></td>
                 </tr>
               </table>
             </td>
             <td>Validates that the value is less than or equal to another field's value or some maximum number.</td>
           </tr>
           <tr>
             <td>
               <a name=\"psly-validator-minwords\"></a>
               Minwords <version>#2.0</version>
             </td>
             <td>
               <table class=\"table-stripped hundred\">
                 <tr>
                   <td><code>data-parsley-minwords=\"200\"</code></td>
                   <td></td>
                 </tr>
               </table>
             </td>
             <td>Validates that the value have at least a certain amount of words</td>
           </tr>
           <tr>
             <td>
               <a name=\"psly-validator-maxwords\"></a>
               Maxwords <version>#2.0</version>
             </td>
             <td>
               <table class=\"table-stripped hundred\">
                 <tr>
                   <td><code>data-parsley-maxwords=\"200\"</code></td>
                   <td></td>
                 </tr>
               </table>
             </td>
             <td>Validates that the value have a maximum of a certain amount of words</td>
           </tr>
           <tr>
             <td>
               <a name=\"psly-validator-words\"></a>
               Words <version>#2.0</version>
             </td>
             <td>
               <table class=\"table-stripped hundred\">
                 <tr>
                   <td><code>data-parsley-words=\"[200, 600]\"</code></td>
                   <td></td>
                 </tr>
               </table>
             </td>
             <td>Validates that the value is within a certain range of words</td>
           </tr>
         </tbody>
        </table>
      </div>

      <div class=\"col-md-3\">
        <div class=\"sidebar hidden-print affix-top\" role=\"complementary\">
          <ul class=\"nav sidenav\">
              <li class=\"active\">
                <a href=\"#overview\">Overview</a>
                <ul class=\"nav\">
                  <li><a href=\"#frontend-form-validation\">Frontend form validation</a></li>
                  <li><a href=\"#data-attrs\">Data attributes</a></li>
                  <li><a href=\"#configuration\">Configuration</a></li>
                </ul>
              </li>
              <li>
                <a href=\"#installation\">Installation</a>
                <ul class=\"nav\">
                  <li><a href=\"#installation-basic\">Basic installation</a></li>
                  <li><a href=\"#installation-javascript\">Javascript installation</a></li>
                  <li><a href=\"#installation-localization\">Localization</a></li>
                  <li><a href=\"#installation-plugins\">Plugins</a></li>
                </ul>
              </li>
              <li>
                <a href=\"#usage\">Usage</a>
                <ul class=\"nav\">
                  <li><a href=\"#usage-overview\">Overview</a></li>
                  <li><a href=\"#usage-configuration\">Configuration</a></li>
                  <li><a href=\"#usage-form\">Form</a></li>
                  <li><a href=\"#usage-field\">Field</a></li>
                </ul>
              </li>
              <li>
                <a href=\"#validators\">Built-in validators</a>
                <ul class=\"nav\">
                  <li><a href=\"#validators-overview\">Overview</a></li>
                  <li><a href=\"#validators-list\">Built-in validators list</a></li>
                </ul>
              </li>
              <li>
                <a href=\"#custom\">Custom validators</a>
                <ul class=\"nav\">
                  <li><a href=\"#custom-intro\">Craft yours!</a></li>
                  <li><a href=\"#custom-function\">Validating functions</a></li>
                  <li><a href=\"#custom-requirement\">Requirement parameters</a></li>
                  <li><a href=\"#custom-messages\">Error messages</a></li>
                </ul>
              </li>
              <li>
                <a href=\"#ui\">UI/UX</a>
                <ul class=\"nav\">
                  <li><a href=\"#ui-overview\">Overview</a></li>
                  <li><a href=\"#ui-classes\">Class & templates</a></li>
                  <li><a href=\"#ui-for-form\">UI for Form</a></li>
                  <li><a href=\"#ui-for-field\">UI for Field</a></li>
                  <li><a href=\"#ui-for-javascript\">UI for javascript</a></li>
                </ul>
              </li>
              <li>
                <a href=\"#events\">Events</a>
                <ul class=\"nav\">
                  <li><a href=\"#events-overview\">Overview</a></li>
                  <li><a href=\"#events-list\">List</a></li>
                </ul>
              </li>
              <li>
                <a href=\"#remote\">Parsley Remote</a>
                <ul class=\"nav\">
                  <li><a href=\"#remote-options\">Options</a></li>
                  <li><a href=\"#remote-events\">Events</a></li>
                  <li><a href=\"#remote-methods\">Methods</a></li>
                  <li><a href=\"#remote-custom\">Custom remote validators</a></li>
                </ul>
              </li>
              <li>
                <a href=\"#extras\">Parsley Extras</a>
                <ul class=\"nav\">
                  <li><a href=\"#extras-validators-list\">Validators list</a></li>
                </ul>
              </li>
          </ul>
          <a class=\"back-to-top\" href=\"#top\">
              Back to top
          </a>

          <div id=\"mailing-list\">
            <!-- Begin MailChimp Signup Form -->
            <link href=\"//cdn-images.mailchimp.com/embedcode/slim-081711.css\" rel=\"stylesheet\">
            <style>
              #mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
              /* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
                 We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
            </style>
            <div id=\"mc_embed_signup\">
            <form action=\"http://parsleyjs.us3.list-manage.com/subscribe/post?u=a39bf787b85f4d1b576367606&amp;id=d7374bb2d8\" method=\"post\" id=\"mc-embedded-subscribe-form\" name=\"mc-embedded-subscribe-form\" class=\"validate\" target=\"_blank\" data-parsley-validate>
              <label for=\"mce-EMAIL\">Subscribe to Parsley mailing list</label>
              <small>Receive a mail each 2.x new release, and sometimes an email asking for your feedback (twice a year max!)</small>
              <input type=\"email\" data-parsley-error-message=\"<strong>What did you expect? That on Parsley's own documentation, there wouldn't be validation here? ;)</strong>\" value=\"\" name=\"EMAIL\" class=\"email\" id=\"mce-EMAIL\" placeholder=\"email address\" required>
                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                <div style=\"position: absolute; left: -5000px;\"><input type=\"text\" name=\"b_a39bf787b85f4d1b576367606_d7374bb2d8\" value=\"\"></div>
              <div class=\"clear\"><input type=\"submit\" value=\"Subscribe\" name=\"subscribe\" id=\"mc-embedded-subscribe\" class=\"button\"></div>
            </form>
            </div>
            <!--End mc_embed_signup-->
          </div>

        </div>
      </div>
      <div class=\"clearfix\"></div>

      <!-- Site footer -->
      <div class=\"footer\">
        <p>&copy; <a href=\"https://twitter.com/guillaumepotier\" title=\"Guillaume Potier on Twitter\">Guillaume Potier</a> 2014 - <a href=\"http://wisembly.com\">@Wisembly</a></p>
      </div>
    </div>

    <script src=\"../bower_components/jquery/dist/jquery.min.js\"></script>
    <script src=\"../bower_components/bootstrap/js/affix.js\"></script>
    <script src=\"../bower_components/bootstrap/js/scrollspy.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/highlight.js/7.3/highlight.min.js\"></script>
    <script src=\"assets/docs.js\"></script>
    <script src=\"../dist/parsley.min.js\"></script>

    <script>
      try {
        hljs.initHighlightingOnLoad();
      } catch ( err ) {}

      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-37229467-1']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    </script>

  </body>
</html>
";
        
        $__internal_edc50b0079ea98458ef7b59c63f6115a8b13509a6aead98ba3966a53355bf3dd->leave($__internal_edc50b0079ea98458ef7b59c63f6115a8b13509a6aead98ba3966a53355bf3dd_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/doc/index.html";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"Parsley, the ultimate frontend javascript form validation library\">
    <meta name=\"author\" content=\"Guillaume Potier\">

    <title>Parsley - The ultimate documentation</title>

    <!-- Bootstrap core CSS -->
    <link href=\"../bower_components/bootstrap/dist/css/bootstrap.min.css\" rel=\"stylesheet\">

    <!-- Custom styles for this template -->
    <link href=\"assets/docs.css\" rel=\"stylesheet\">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
      <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
    <![endif]-->
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/highlight.js/7.3/styles/github.min.css\" rel=\"stylesheet\">
    <link href=\"../src/parsley.css\" rel=\"stylesheet\">

    <style>
      #mailing-list {
        margin-top: 25px;
        width: 200px;
        text-align: justify;
      }
      #mailing-list input {
        margin: 5px 0 !important;
        width: 190px !important;
      }
      #mailing-list label {
        padding: 0px !important;
      }
    </style>
  </head>

  <body>
    <div class=\"container\">
      <div class=\"masthead\">
        <div class=\"header\">
          <h3 class=\"text-muted\"><a href=\"../\">Parsley</a></h3>

          <span class=\"social-buttons inline-block\">
            <a href=\"https://twitter.com/share\" class=\"twitter-share-button\" data-url=\"http://parsleyjs.org\" data-text=\"Parsley, the ultimate javascript form validation library. #parsleyjs\" data-via=\"guillaumepotier\" data-related=\"guillaumepotier\" data-hashtags=\"parsleyjs\">Tweet</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

            <iframe src=\"http://ghbtns.com/github-btn.html?user=guillaumepotier&repo=Parsley.js&type=watch&count=true\" allowtransparency=\"true\" frameborder=\"0\" scrolling=\"0\" width=\"110\" height=\"20\"></iframe>

            <iframe src=\"http://ghbtns.com/github-btn.html?user=guillaumepotier&repo=Parsley.js&type=fork&count=true\" allowtransparency=\"true\" frameborder=\"0\" scrolling=\"0\" width=\"110\" height=\"20\"></iframe>
          </span>

        </div>

        <ul class=\"nav nav-justified\">
          <li><a href=\"../\">Home</a></li>
          <li><a href=\"examples.html\">Examples</a></li>
          <li class=\"active\"><a href=\"index.html\">Documentation</a></li>
          <li><a href=\"download.html\">Download</a></li>
          <li><a href=\"help.html\">Help</a></li>
          <li><a href=\"annotated-source/main.html\">Annotated&nbsp;source</a></li>
          <li><a href=\"tests.html\">Tests</a></li>
          <li><a href=\"about.html\">About</a></li>
        </ul>
      </div>

      <div class=\"col-md-9\" role=\"main\">
        <div class=\"docs-section\">
          <!-- ****************** OVERVIEW ****************** -->
          <h1 id=\"overview\" class=\"page-header\">Overview</h1>
          <h3 id=\"frontend-form-validation\">Frontend form validation</h3>
          <p>
            Parsley is a javascript form validation library. It helps you provide your users with feedback on their form submission before sending it to your server. It saves you bandwidth, server load and it saves time for your users.
          </p>
          <p>
            Javascript form validation is not necessary, and if used, it <strong>does not replace strong backend server validation.</strong>
          </p>
          <p>
            That's why Parsley is here: to let you define your general form validation, implement it on the backend side, and simply port it frontend-side, with maximum respect to user experience best practices.
          </p>

          <div class=\"bs-callout bs-callout-info\">
            <h4>Parsley 1.x versions</h4>
            <p>
              Parsley's current stable and supported versions are 2.x. If you still use a 1.x version, <a href=\"http://parsleyjs.github.io/Parsley-1.x\" target=\"_blank\">here is the related doc</a>. But don't forget to <a href=\"https://github.com/guillaumepotier/Parsley.js/blob/master/UPGRADE-2.0.md\" target=\"_blank\">upgrade</a>!
            </p>
          </div>

          <h3 id=\"data-attrs\">Data attributes</h3>
          <p>
            Parsley uses a specific DOM API which allows you to configure pretty much everything directly from your DOM, without writing a single javascript configuration line or custom function. Parsley's default DOM API is <code>data-parsley-</code>. That means that if in config you see a <code>foo</code> property, it can be set/modified via DOM with <code>data-parsley-foo=\"value\"</code>.
          </p>

          <h3 id=\"configuration\">Configuration</h3>
          <p>
            You'll see along this documentation and through <a href=\"examples.html\">examples</a> various available configuration options. You can also view <a href=\"annotated-source/defaults.html\" target=\"_blank\">here</a> all of Parsley's default configuration options.
          </p>


          <!-- ****************** INSTALL ****************** -->
          <h1 id=\"installation\" class=\"page-header\">Installation</h1>
          <h3 id=\"installation-basic\">Basic installation</h3>
          <p>
            Parsley relies on <strong><a href=\"http://jquery.com/\" target=\"_blank\">jQuery</a> (&gt;= 1.8)</strong>, and it will need to be included before including Parsley.
          </p>
          <p>
            You will also need to include <strong><a href=\"https://github.com/es-shims/es5-shim\" target=\"_blank\">es5-shim</a></strong> if you want need to support IE8.
          </p>
          <p>
            Then, you can either use <code>parsley.js</code> unminified file or <code>parsley.min.js</code> minified one. These files and <a href=\"#extras\">extras</a> are <a href=\"download.html\">available here</a>.
          </p>
          <p>
            Finally, add <code>data-parsley-validate</code> to each <code>&lt;form&gt;</code> you want to be validated.
          </p>
          <p>That would look pretty much like this:
<pre><code>&lt;script src=\"jquery.js\"&gt;&lt;/script&gt;
&lt;script src=\"parsley.min.js\"&gt;&lt;/script&gt;

&lt;form data-parsley-validate&gt;
...
&lt;/form&gt;
</code></pre>
          </p>

          <div class=\"bs-callout bs-callout-info\">
            <h4>Parsley CSS</h4>
            <p>Parsley adds many classes and elements in the DOM when it validates. You are strongly encouraged to customize them in your own stylesheets, but here is the \"standard\" <a href=\"../src/parsley.css\" target=\"_blank\">Parsley css file</a> that is used here on the documentation and examples, if you want to use it to bootstrap your projects with Parsley.</p>
          </div>

          <h3 id=\"installation-javascript\">Javascript installation</h3>
          <p>Like for <a href=\"#installation-basic\">Basic installation</a>, first include <strong>jQuery</strong> and Parsley. Then, simply use <code>\$('#form').parsley(options);</code> or <code>new Parsley('#form', options);</code> (where <code>options</code> is an optional configuration object) to manually bind Parsley to your forms.</p>

          <p>That would look pretty much like this:
<pre><code>&lt;script src=\"jquery.js\"&gt;&lt;/script&gt;
&lt;script src=\"parsley.min.js\"&gt;&lt;/script&gt;

&lt;form id=\"form\"&gt;
...
&lt;/form&gt;

&lt;script&gt;
  \$('#form').parsley();
&lt;/script&gt;
</code></pre>

          <div class=\"bs-callout bs-callout-danger\">
            <h4>Do not add <code>data-parsley-validate</code> to your forms</h4>
            <p>
              Please be aware that Parsley looks at all <code>data-parsley-validate</code> occurrences in DOM on document load and automatically binds them if valid.<br>
              Once a form or field instance is bound by Parsley, doing <code>\$('#form').parsley(options);</code> will update the existing options but not replace them.
            </p>
          </div>
          </p>

          <h3 id=\"installation-localization\">Localization</h3>
          <p>
            Parsley comes with various error messages for its built-in validators. They are shipped in English by default, but many other languages are available, thanks to the awesome international Parsley community. <a href=\"https://github.com/guillaumepotier/Parsley.js/tree/master/dist/i18n\">See the available localizations here</a>.
          </p>
          <p>
            To load a different locale and its messages, include them after Parsley:
<pre><code>&lt;script src=\"jquery.js\"&gt;&lt;/script&gt;
&lt;script src=\"parsley.min.js\"&gt;&lt;/script&gt;
&lt;script src=\"i18n/fr.js\"&gt;&lt;/script&gt;
&lt;script src=\"i18n/it.js\"&gt;&lt;/script&gt;
</code></pre>
                The last loaded file will automatically set the messages locale for Parsley. In the example above, we load both French and Italian translations, and use Italian.
          </p>

          <h3 id=\"installation-plugins\">Plugins</h3>
          <p>
            Parsley strives to be highly decoupled and modular. It uses events and inheritance, and allows various plugins.
          </p>
          <p>Current available plugins are in <a href=\"#extras\">Extras</a> for additional validators.</p>

          <!-- ****************** USAGE ****************** -->
          <h1 id=\"usage\" class=\"page-header\">Usage</h1>
          <h3 id=\"usage-overview\">Overview</h3>
          <p>
            Parsley is a decoupled library that uses different classes to do the heavy work. You'll see here the different protagonists involved and how you can configure them to fit your desired validation.
          </p>
          <table class=\"table table-stripped table-bordered\">
            <thead>
              <tr>
                <th class=\"col-md-3\">\$ API</th>
                <th class=\"col-md-1\">Return</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><code>\$('#existingForm').parsley(options)</code> <version>#2.0</version></td>
                <td><code>parsleyFormInstance</code></td>
              </tr>
              <tr>
                <td><code>\$('#existingInput').parsley(options)</code> <version>#2.0</version></td>
                <td><code>parsleyFieldInstance</code></td>
              </tr>
              <tr>
                <td><code>\$('#notExistingDOMElement').parsley(options)</code> <version>#2.0</version></td>
                <td><code>undefined</code></td>
              </tr>
              <tr>
                <td><code>\$('.multipleElements').parsley(options)</code> <version>#2.0</version></td>
                <td><code>Array[Instances]</code></td>
              </tr>
            </tbody>
          </table>
          <div class=\"bs-callout bs-callout-warning\">
            <h4>Look at the source code!</h4>
            <p>
              Of course, this documentation tries to be the most exhaustive possible and relatively easy to understand. This documentation also provides the <a href=\"annotated-source/main.html\">complete annotated source</a>. Please take 5 minutes of your time to have a quick glance at it, and at least understand the architecture (Parsley, ParsleyForm, ParsleyField, ParsleyValidator, ParsleyUI, Utils, Pub/Sub..), it will heavily ease the lecture below.
            </p>
          </div>

          <h3 id=\"usage-configuration\">Configuration</h3>
          <h4>Data attributes and javascript</h4>
          <p>
            The multiple options can be specified using data attributes and javascript:
          </p>
<pre><code>&lt;input id=\"first\" data-parsley-maxlength=\"42\" value=\"hello\"/&gt;
&lt;input id=\"second\" value=\"world\"/&gt;
[...]
&lt;script&gt;
var instance = \$('#first').parsley();
console.log(instance.isValid()); // maxlength is 42, so field is valid
\$('#first').attr('data-parsley-maxlength', 4);
console.log(instance.isValid()); // No longer valid, as maxlength is 4
// You can access and override options in javascript too:
instance.options.maxlength++;
console.log(instance.isValid()); // Back to being valid, as maxlength is 5
// Alternatively, the options can be specified as:
var otherInstance = \$('#second').parsley({
  maxlength: 10
});
console.log(otherInstance.options); // Shows that maxlength will be 10 for this field
</code></pre>
          <p>
            As shown in the previous example, Parsley will actualize the options from the data attributes whenever it needs to validate a field.
          </p>
          <h4>Option inheritance</h4>
          <p>
            Field instances inherit their options from Form instances, and both inherit from the global options. This is a handy way to configure all your form's inputs in a row by passing their config through form.
          </p>
<pre><code>&lt;form&gt;
  &lt;input/&gt;
&lt;/form&gt;
[...]
&lt;script&gt;
Parsley.options.maxlength = 42;
var formInstance = \$('form').parsley();
var field = \$('input').parsley();
console.log(field.options.maxlength); // Shows that maxlength is 42
Parsley.options.maxlength = 30;
console.log(field.options.maxlength); // Shows that maxlength is automagically 30
formInstance.options.maxlength++;
console.log(field.options.maxlength); // Shows that maxlength is automagically 31
</code></pre>
          <p>
            The previous example shows that the inheritance of options is automagic. In case you are wondering, they are linked through <code>prototype</code> to achieve this.
          </p>

          <h4>Naming</h4>
          <p>
            You can change the DOM API namespace directly using the <code>namespace</code> option. Data attributes with compound names are camelcased for javascript, and their values are automatically converted to the appropriate type (boolean, integer, etc.).
            For example:
<pre><code>&lt;input data-my-namespace-priority-enabled=\"false\"&gt;
[...]
&lt;script&gt;
var instance = \$('input').parsley({namespace: 'my-namespace-'});
if (false === instance.options.priorityEnabled)
  console.log(\"priorityEnabled was set to false\");
</code></pre>
          </p>

          <h3 id=\"usage-form\">Form</h3>
          <p>
            When doing <code>\$('#target').parsley()</code> or <code>new Parsley('#target');</code> on a <code>&lt;form id=\"target\"&gt;</code> element, it will bind the whole form and its various inputs and return a <code>ParsleyForm</code> instance.
          </p>

          <h4>Options</h4>
          <table class=\"table table-stripped table-bordered\">
            <thead>
              <tr>
                <th class=\"col-md-3\">Property</th>
                <th class=\"col-md-1\">Default</th>
                <th class=\"col-md-4\">Description</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><code>data-parsley-namespace</code> <version>#2.0</version></td>
                <td><code>data-parsley-</code></td>
                <td>Namespace used by Parsley DOM API to bind options from DOM.<br><a href=\"#data-attrs\">See more</a></td>
              </tr>
              <tr>
                <td><code>data-parsley-validate</code> <version>#2.0</version></td>
                <td></td>
                <td>Auto bind your form with Parsley validation on document load.</td>
              </tr>
              <tr>
                <td><code>data-parsley-priority-enabled</code> <version>#2.0</version></td>
                <td><code>true</code></td>
                <td>Either validate higher priority constraints first and stop on first failure (<code>true</code>), or validate all constraints simultaneously and show all the failing ones (<code>false</code>).</td>
              </tr>
              <tr>
                <td><code>data-parsley-inputs</code> <version>#2.0</version></td>
                <td>
                  <code>input,</code><br>
                  <code>textarea,</code><br>
                  <code>select</code></td>
                <td>When looking for fields within a form, Parsley uses this selector.
                  The fields found will then be filtered using the <code>excluded</code> option below.</td>
              </tr>
              <tr>
                <td><code>data-parsley-excluded</code> <version>#2.0</version></td>
                <td>
                  <code>input[type=button],</code><br>
                  <code>input[type=submit],</code><br>
                  <code>input[type=reset],</code><br>
                  <code>input[type=hidden]</code></td>
                <td>Form fields that won't be validated by Parsley.  For example, if you want to add <code>disabled</code> and hidden fields to the existing list, use: <pre>data-parsley-excluded=\"input[type=button], input[type=submit], input[type=reset], input[type=hidden], [disabled], :hidden\"</pre></td>
              </tr>
            </tbody>
          </table>

          <h4>Methods</h4>
          <table class=\"table table-stripped table-bordered\">
            <thead>
              <tr>
                <th class=\"col-md-2\">Method</th>
                <th class=\"col-md-1\">Returns</th>
                <th class=\"col-md-5\">Description</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><code>whenValid({group, force})</code> <version>#2.2</version></td>
                <td><code>promise</code></td>
                <td>Returns a jQuery promise that will be fulfilled if and only if the Form is valid. <strong>Does not affect UI nor fires <a href=\"#events\">events</a>.</strong> If <code>group</code> is given, it only validates fields that belong to this group. If <code>force</code> is given, it force validates even non-required fields (<a href=\"examples/events.html\">See example</a>)</td>
              </tr>
              <tr>
                <td><code>isValid({group, force})</code> <version>#2.0</version></td>
                <td><code>boolean or null</code></td>
                <td>Similar to <code>whenValid</code> but returns <code>true</code> if the promise is already fulfilled, <code>false</code> if already rejected, and <code>null</code> if the validation is still pending.</td>
              </tr>
              <tr>
                <td><code>whenValidate({group, force})</code> <version>#2.0</version></td>
                <td>
                  <code>promise</code>
                </td>
                <td>Validate form. Prevents submission if not valid. <strong>Fires <a href=\"#events\">events</a> and affects UI.</strong>. You can only validate a certain group of fields by specifying optional <code>group</code> string parameter. If <code>group</code> is given, it only validates fields that belong to this group. If <code>force</code> is given, it force validates even non required fields (<a href=\"examples/events.html\">See example</a>). Same result as <code>whenValid</code>.</td>
              </tr>
              <tr>
                <td><code>validate({group, force})</code> <version>#2.0</version></td>
                <td>
                  <code>boolean or null</code>
                </td>
                <td>Same as <code>whenValidate</code> except it returns <code>true</code> if the promise is already fulfilled, <code>false</code> if already rejected, and <code>null</code> if the validation is still pending.</td>
              </tr>
              <tr>
                <td><code>reset()</code> <version>#2.0</version></td>
                <td></td>
                <td>Reset UI for this form and for its fields.</td>
              </tr>
              <tr>
                <td><code>destroy()</code> <version>#2.0</version></td>
                <td></td>
                <td>Disable and destroy Parsley for this form and its fields.</td>
              </tr>
            </tbody>
          </table>

          <h4>UI</h4>
          See <a href=\"#ui-for-form\">UI for Form</a> section.


          <h3 id=\"usage-field\">Field</h3>
          <p>
            When doing <code>\$('#target').parsley()</code> or <code>new Parsley('#target');</code> on a <code>&lt;input id=\"target\"&gt;</code> element (or <code>&lt;textarea&gt;</code>, <code>&lt;select&gt;</code>), it will bind the field and return a <code>ParsleyField</code> instance. Except for input types radio and checkbox that don't have a <code>name</code> attribute or a <code>data-parsley-multiple</code> attribute, they won't be bound (ignored) and will eventually raise a warning in the console.
          </p>

          <h4>Options</h4>
          <table class=\"table table-stripped table-bordered\">
            <thead>
              <tr>
                <th class=\"col-md-3\">Property</th>
                <th class=\"col-md-5\">Description</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><code>data-parsley-value</code> <version>#2.0</version></td>
                <td>Set a specific field value for Parsley validation, dissociated from the real one. eg: <code>data-parsley-value=\"foo\"</code>
                  <br>
                The JavaScript API allows one to pass a function to be called. eg:
                <code>
                  \$('&lt;input type=\"text\"&gt;').appendTo(\$('form')).<br>
                  parsley({<br>
                  &nbsp;&nbsp;value: function(parsley) { return 'foo'; }<br>
                  });
                </code></td>
              </tr>
              <tr>
                <td><code>data-parsley-group</code> <version>#2.0</version></td>
                <td>Assign a group to a field for specific group validation. eg: <code>data-parsley-group=\"signup\"</code>. This way, you could only validate a portion of a form and not all the fields. Can be multiple. eg: <code>data-parsley-group='[\"foo\", \"bar\"]'</code></td>
              </tr>
              <tr>
                <td><code>data-parsley-multiple</code> <version>#2.0</version></td>
                <td>You can add this attribute to radio / checkboxes elements like this: <code>data-parsley-multiple=\"mymultiplelink\"</code> to link them together even if they don't share the same name.</td>
              </tr>
              <tr>
                <td><code>data-parsley-validate-if-empty</code> <version>#2.0</version></td>
                <td>A field is by default not validated if it is not required and empty. By adding <code>data-parsley-validate-if-empty</code>, validation will be done even if field is empty. Useful if you need some custom validators that check something particular when a field is empty.</td>
              </tr>
              <tr>
                <td><code>data-parsley-whitespace</code> <version>#2.1</version></td>
                <td>Perform actions on whitespace in value <strong>only for Parsley validation</strong> (and not inside the input itself, data sent by your form won't be edited). Useful if your backend already does so and if extra whitespace could unnecessarily mess with your validation. <br><br>Use: <code>data-parsley-whitespace=\"trim\"</code> to trim leading and trailing whitespace characters.<br>Use: <code>data-parsley-whitespace=\"squish\"</code> to squish multiple sequential whitespace characters into a single whitespace character, and also trim leading and trailing whitespace characters.</td>
              </tr>
              <tr>
                <td><code>data-parsley-ui-enabled</code> <version>#2.0</version></td>
                <td>If set to <code>false</code>, Parsley will not affect UI for this field.</td>
              </tr>
              <tr>
                <td><code>data-parsley-errors-messages-disabled</code> <version>#2.0</version></td>
                <td>Add <code>parsley-success</code> and <code>parsley-error</code> classes on field, but no error message.</td>
              </tr>
              <tr>
                <td><code>data-parsley-excluded</code> <version>#2.1</version></td>
                <td>If set to <code>true</code>, Parsley will ignore this field when binding a form.</td>
              </tr>
              <tr>
                <td><code>data-parsley-debounce</code> <version>#2.3</version></td>
                <td>Postpones validation for a given number of milliseconds after user input has stopped arriving, eg: <code>data-parsley-debounce=\"500\"</code>. Useful for expensive validations (such as remotes) that you don't want to run on every keystroke.</td>
              </tr>
            </tbody>
          </table>

          <div class=\"bs-callout bs-callout-warning\">
            <h4>Checkbox, radio and select multiple</h4>
            <p>
              These fields are a bit different than regular <code>input</code>, <code>textarea</code> or simple <code>select</code>. They need to have either a <code>name</code> or an <code>id</code> attribute to be correctly bound and validated by Parsley. Otherwise, they will be ignored and a warning will be put in the console.
            </p>
          </div>

          <h4>Methods</h4>
          <table class=\"table table-stripped table-bordered\">
            <thead>
              <tr>
                <th class=\"col-md-2\">Method</th>
                <th class=\"col-md-2\">Returns</th>
                <th class=\"col-md-4\">Description</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><code>isValid({force})</code> <version>#2.0</version></td>
                <td>
                  <code>true</code> if all ok<br>
                  <code>null</code> if some validations are still pending<br>
                  <code>[Violation, ...]]</code> if fails
                </td>
                <td>Returns if the field is valid or not. <strong>Does not affect UI nor fires <a href=\"#events\">events</a>.</strong> If <code>force</code> is set, it forces validation even on non-required fields (<a href=\"examples/events.html\">See example</a>)</td>
              </tr>
              <tr>
                <td><code>validate({force, group})</code> <version>#2.0</version></td>
                <td>
                  <code>true</code> if all ok<br>
                  <code>null</code> if some validations are still pending<br>
                  <code>[Violation, ...]]</code> if fails
                </td>
                <td>Validate Field. <strong>Fires <a href=\"#events\">events</a> and affects UI.</strong> If <code>force</code> is set, force validate even non required fields (<a href=\"examples/events.html\">See example</a>)</td>
              </tr>
              <tr>
                <td><code>getErrorsMessages()</code> <version>#2.0</version></td>
                <td><code>array</code></td>
                <td>Returns an array of field's error messages</td>
              </tr>
              <tr>
                <td><code>reset()</code> <version>#2.0</version></td>
                <td></td>
                <td>Reset UI for this field.</td>
              </tr>
              <tr>
                <td><code>destroy()</code> <version>#2.0</version></td>
                <td></td>
                <td>Disable and destroy Parsley for this field.</td>
              </tr>
            </tbody>
          </table>

          <h4>UI</h4>
          See <a href=\"#ui-for-field\">UI for Field</a> section.

          <!-- ****************** BUILT-IN VALIDATORS ****************** -->
          <h1 id=\"validators\" class=\"page-header\">Built-in validators</h1>
          <h3 id=\"validators-overview\">Overview</h3>
          <p>
            A <i>validator</i> is a method to determine if a given <i>value</i> (or sometimes sets of values) is acceptable or not, given some <i>requirement</i> parameters.
          </p>
          <p>
            Parsley comes with many builtin validators and provides tools to specify your own.
          </p>

          <h3 id=\"validators-list\">Builtin validators list</h3>
          <table class=\"table table-stripped table-bordered\">
            <thead>
              <tr>
                <th class=\"col-md-2\">Name</th>
                <th class=\"col-md-4\">API</th>
                <th class=\"col-md-5\">Description</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <a name=\"psly-validator-required\"></a>
                  Required <version>#2.0</version>
                </td>
                <td>
                  <table class=\"table-stripped hundred\">
                    <tr>
                      <td><code>required</code></td>
                      <td><span class=\"label label-info pull-right\">HTML5</span></td>
                    </tr>
                    <tr>
                      <td><code>data-parsley-required</code></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td><code>data-parsley-required=\"true\"</code></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td><code>data-parsley-required=\"false\"</code></td>
                      <td></td>
                    </tr>
                  </table>
                </td>
                <td>Validates that a required field has been filled with a non blank value. If <code>data-parsley-required=\"false\"</code>, validator is deactivated and the field is not required.</td>
              </tr>
              <tr>
                <td>
                  <a name=\"psly-validator-email\"></a>
                  Email <version>#2.0</version>
                </td>
                <td>
                  <table class=\"table-stripped hundred\">
                    <tr>
                      <td><code>type=\"email\"</code></td>
                      <td><span class=\"label label-info pull-right\">HTML5</span></td>
                    </tr>
                    <tr>
                      <td><code>data-parsley-type=\"email\"</code></td>
                      <td></td>
                    </tr>
                  </table>
                </td>
                <td>Validates that a value is a valid email address.</td>
              </tr>
              <tr>
                <td>
                  <a name=\"psly-validator-number\"></a>
                  Number <version>#2.0</version>
                </td>
                <td><code>data-parsley-type=\"number\"</code></td>
                <td>Validates that a value is a valid number according to the given <code>step</code>, <code>min</code> and original <code>value</code>.
                  <br>The default <code>step</code> for HTML5 is \"1\", which is so counterintuive that Parsley uses a default <code>step</code> of \"any\" for <code>data-parsley-type=\"number\"</code>.
                  <span class=\"label label-warning\">Warning!</span> HTML5 <code>type=\"number\"</code> can be counterintuitive. The default step of '1' is near useless. Moreover, for browsers that support it, the value accessible from javascript in case of invalid input is <code>\"\"</code>, so you will never get an error (unless it is also <code>required</code>).</td>
              </tr>
              <tr>
                <td>
                  <a name=\"psly-validator-integer\"></a>
                  Integer <version>#2.0</version>
                </td>
                <td>
                  <table class=\"table-stripped hundred\">
                    <tr>
                      <td><code>type=\"number\"</code></td>
                      <td><span class=\"label label-info pull-right\">HTML5</span></td>
                    </tr>
                    <tr>
                      <td><code>data-parsley-type=\"integer\"</code></td>
                      <td></td>
                    </tr>
                  </table>
                </td>
                <td>Validates that a value is a valid integer.</td>
              </tr>
              <tr>
                <td>
                  <a name=\"psly-validator-digits\"></a>
                  Digits <version>#2.0</version>
                </td>
                <td><code>data-parsley-type=\"digits\"</code></td>
                <td>Validates that a value is only digits.</td>
              </tr>
              <tr>
                <td>
                  <a name=\"psly-validator-alphanum\"></a>
                  Alphanum <version>#2.0</version>
                </td>
                <td><code>data-parsley-type=\"alphanum\"</code></td>
                <td>Validates that a value is a valid alphanumeric string.</td>
              </tr>
              <tr>
                <td>
                  <a name=\"psly-validator-url\"></a>
                  Url <version>#2.0</version>
                </td>
                <td>
                  <table class=\"table-stripped hundred\">
                    <tr>
                      <td><code>type=\"url\"</code></td>
                      <td><span class=\"label label-info pull-right\">HTML5</span></td>
                    </tr>
                    <tr>
                      <td><code>data-parsley-type=\"url\"</code></td>
                      <td></td>
                    </tr>
                  </table>
                </td>
                <td>Validates that a value is a valid url.</td>
              </tr>
              <tr>
                <td>
                  <a name=\"psly-validator-minlength\"></a>
                  Minlength <version>#2.0</version>
                </td>
                <td><table class=\"table-stripped hundred\">
                    <tr>
                      <td><code>minlength=\"6\"</code></td>
                      <td><span class=\"label label-info pull-right\">HTML5</span></td>
                    </tr>
                    <tr>
                      <td><code>data-parsley-minlength=\"6\"</code></td>
                      <td></td>
                    </tr>
                  </table></td>
                <td>Validates that the length of a string is at least as long as the given limit.</td>
              </tr>
              <tr>
                <td>
                  <a name=\"psly-validator-maxlength\"></a>
                  Maxlength <version>#2.0</version>
                </td>
                <td><table class=\"table-stripped hundred\">
                    <tr>
                      <td><code>maxlength=\"6\"</code></td>
                      <td><span class=\"label label-info pull-right\">HTML5</span></td>
                    </tr>
                    <tr>
                      <td><code>data-parsley-maxlength=\"6\"</code></td>
                      <td></td>
                    </tr>
                  </table></td>
                <td>Validates that the length of a string is not longer than the given limit.</td>
              </tr>
              <tr>
                <td>
                  <a name=\"psly-validator-length\"></a>
                  Length <version>#2.0</version>
                </td>
                <td><code>data-parsley-length=\"[6, 10]\"</code></td>
                <td>Validates that a given string length is between some minimum and maximum value.</td>
              </tr>
              <tr>
                <td>
                  <a name=\"psly-validator-min\"></a>
                  Min <version>#2.0</version>
                </td>
                <td>
                  <table class=\"table-stripped hundred\">
                    <tr>
                      <td><code>min=\"6\"</code></td>
                      <td><span class=\"label label-info pull-right\">HTML5</span></td>
                    </tr>
                    <tr>
                      <td><code>data-parsley-min=\"6\"</code></td>
                      <td></td>
                    </tr>
                  </table>
                </td>
                <td>Validates that a given input (number or date) or date is greater than or equal to some minimum (number or date.)</td>
              </tr>
              <tr>
                <td>
                  <a name=\"psly-validator-max\"></a>
                  Max <version>#2.0</version>
                </td>
                <td>
                  <table class=\"table-stripped hundred\">
                    <tr>
                      <td><code>max=\"10\"</code></td>
                      <td><span class=\"label label-info pull-right\">HTML5</span></td>
                    </tr>
                    <tr>
                      <td><code>data-parsley-max=\"6\"</code></td>
                      <td></td>
                    </tr>
                  </table>
                </td>
                <td>Validates that the given input (number or date) is less than or equal to some maximum value (number or date).</td>
              </tr>
              <tr>
                <td>
                  <a name=\"psly-validator-range\"></a>
                  Range <version>#2.0</version>
                </td>
                <td>
                  <table class=\"table-stripped hundred\">
                    <tr>
                      <td><code>type=\"range\"</code></td>
                      <td><span class=\"label label-info pull-right\">HTML5</span></td>
                    </tr>
                    <tr>
                      <td><code>data-parsley-range=\"[6, 10]\"</code></td>
                      <td></td>
                    </tr>
                  </table>
                </td>
                <td>Validates that a given value (number or date) is between some minimum and maximum values (numbers or dates).</td>
              </tr>
              <tr>
                <td>
                  <a name=\"psly-validator-pattern\"></a>
                  Pattern <version>#2.0</version>
                </td>
                <td>
                  <table class=\"table-stripped hundred\">
                    <tr>
                      <td><code>pattern=\"\\d+\"</code></td>
                      <td><span class=\"label label-info pull-right\">HTML5</span></td>
                    </tr>
                    <tr>
                      <td><code>data-parsley-pattern=\"\\d+\"</code></td>
                      <td></td>
                    </tr>
                  </table>
                </td>
                <td>Validates that a value matches a specific regular expression (regex).
                  <br>Note that patterns are anchored, i.e. must match the whole string.
                  <br>Parsley deviates from the standard for patterns looking like <code>/<i>pattern</i>/<i>{flag}</i></code>; these are interpreted as literal regexp and are not anchored.
                </td>
              </tr>
              <tr>
                <td>
                  <a name=\"psly-validator-mincheck\"></a>
                  MinCheck <version>#2.0</version>
                </td>
                <td><code>data-parsley-mincheck=\"3\"</code></td>
                <td>Validates that a certain minimum number of checkboxes in a group are checked.</td>
              </tr>
              <tr>
                <td>
                  <a name=\"psly-validator-maxcheck\"></a>
                  MaxCheck <version>#2.0</version>
                </td>
                <td><code>data-parsley-maxcheck=\"3\"</code></td>
                <td>Validates that a certain maximum number of checkboxes in a group are checked.</td>
              </tr>
              <tr>
                <td>
                  <a name=\"psly-validator-check\"></a>
                  Check <version>#2.0</version>
                </td>
                <td><code>data-parsley-check=\"[1, 3]\"</code></td>
                <td>Validates that the number of checked checkboxes in a group is within a certain range.</td>
              </tr>
              <tr>
                <td>
                  <a name=\"psly-validator-equalto\"></a>
                  Equalto <version>#2.0</version>
                </td>
                <td><code>data-parsley-equalto=\"#anotherfield\"</code></td>
                <td>Validates that the value is identical to another field's value (useful for password confirmation check).</td>
              </tr>
            </tbody>
          </table>

          <p>
            These validators are shipped in <code>parsley.js</code>. Have a look at <a href=\"#extras\">Parsley Extras</a> for more validators.
          </p>

          <!-- ****************** CUSTOM VALIDATORS ****************** -->
          <h1 id=\"custom\" class=\"page-header\">Custom Validators</h1>
          <h3 id=\"custom-intro\">Craft yours</h3>
          <p>Of course, Parsley built-in validators are commonly used validators, and you'll need some more that fit your specific forms and validations. That's why Parsley lets you easily create your own validators.</p>
          <p>
          <p>The preferred way to register them (after <code>parsley.js</code> is loaded) looks like:</p>

<pre><code>&lt;input type=\"text\" data-parsley-multiple-of=\"3\" /&gt;
[...]
&lt;script&gt;
window.Parsley
  .addValidator('multipleOf', {
    requirementType: 'integer',
    validateNumber: function(value, requirement) {
      return 0 === value % requirement;
    },
    messages: {
      en: 'This value should be a multiple of %s',
      fr: 'Cette valeur doit être un multiple de %s'
    }
  });
&lt;/script&gt;
</code></pre>
          </p>
          <p>The following sections go over the details on how to define a custom validator</p>
          <h3 id=\"custom-function\">Validating function</h3>
          <p>There are many ways a validator can specify how to validate data:</p>
          <table class=\"table table-stripped table-bordered\">
            <thead>
              <tr>
                <th class=\"col-md-1\">Name</th>
                <th class=\"col-md-4\">Description</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><code>validateString</code></td>
                <td>Is passed the input's value as a string.</td>
              </tr>
              <tr>
                <td><code>validateNumber</code></td>
                <td>Use this instead of <code>validateString</code> when only numeric values are acceptable. Parsley will parse the input's value and pass the number, or reject the value if it's not an acceptable number</td>
              </tr>
              <tr>
                <td><code>validateDate</code></td>
                <td>Define this to treate date values. Parsley will parse the input's value and pass the date, or reject the value if it's not an acceptable date. The format used must be that [of the standard](https://html.spec.whatwg.org/multipage/infrastructure.html#valid-date-string), e.g. \"2017-02-28\". </td>
              </tr>
              <tr>
                <td><code>validateMultiple</code></td>
                <td>Is passed an array of values, in the case of checkboxes.</td>
              </tr>
            </tbody>
          </table>

          <p>Your custom validator must specify at least one of these. If it can validate both single inputs and multiple (i.e. checkboxes), then you can specify <i>validateMultiple</i> and one of the other two.</p>

          <p>Validating functions should return either <code>true</code> if the value is valid, or <code>false</code> otherwise. It can instead return a jQuery promise that will be resolved if the value is valid, or be rejected otherwise.</p>

          <p>Validators can reject with a custom error message as a first argument if desired.</p>

          <h3 id=\"custom-requirement\">Requirement parameters</h3>

          <p>You can specify what kind of requirement parameter your custom validator is expecting:</p>
          <table class=\"table table-stripped table-bordered\">
            <thead>
              <tr>
                <th class=\"col-md-1\">Value of <code>requirementType</code></th>
                <th class=\"col-md-4\">Description</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><code>'string'</code></td>
                <td>The most generic kind; requirement passed as is, with no checking.</td>
              </tr>
              <tr>
                <td><code>'integer'</code></td>
                <td>For integers only (e.g. used by <code>minlength</code>)</td>
              </tr>
              <tr>
                <td><code>'number'</code></td>
                <td>To be used when decimal numbers are acceptable</td>
              </tr>
              <tr>
                <td><code>'date'</code></td>
                <td>To be used for dates. The format used must be that [of the standard](https://html.spec.whatwg.org/multipage/infrastructure.html#valid-date-string), e.g. <code>\"2017-02-28\"</code>.</td>
              </tr>
              <tr>
                <td><code>'regexp'</code></td>
                <td>Requirement can be either a full regexp string (e.g. <code>/hel+o/i</code>) or just a simple expression (e.g. <code>hel+o</code>)</td>
              </tr>
              <tr>
                <td><code>'boolean'</code></td>
                <td>Any value other than <code>\"false\"</code> will be considered to <code>true</code>, including the empty string. This is so <code>data-parsley-required</code> and <code>data-parsley-required=true</code> be treated the same way.</td>
              </tr>
            </tbody>
          </table>

          <p>You can also specify an array of these kinds. For example, if a validator has <code>requirementType: ['integer', 'integer']</code>, then given the requirement string <code>\"[1, 2]\"</code> it will receive <code>1</code> and <code>2</code> as second and third arguments (the first one being the value(s) to validate).
          </p>

          <p>For cases where more complex parameters are needed, you can specify extra parameters; refer to the source and check how the <code>remote</code> validator uses that.</p>
        </div>

          <h3 id=\"custom-messages\">Error messages</h3>
          <p>You can specify error messages, in as many locales as desired, using the <code>messages</code> option.</p>
          <p>This is equivalent to calling <code>addMessage</code> for each locale.</p>

        <!-- ****************** UI/ UX ****************** -->
        <h1 id=\"ui\" class=\"page-header\">UI/UX</h1>
        <h3 id=\"ui-overview\">Overview</h3>
        <p>
        Parsley ships a UI/UX component that is the only one responsible for classes, error messages, focus or trigger events that alter your page. It strives to be the most UX friendly. Here are the main mottos for ParsleyUI:
        <ol>
          <li><strong>Min char validation</strong>: Parsley by default does not proceed with field validation when less than 3 chars have been input. Do not assault your users with error messages too soon!</li>
          <li><strong>One error at the time</strong>: constraints are prioritized in Parsley, and if several of them are not met for a field on validation, only show the most important one.</li>
          <li><strong>Quick error removal</strong>: when a field is detected and shown as invalid, further checks are done on each keypress to try to quickly remove error messages once the field is ok.</li>
          <li><strong>Control focusing on error</strong>: on form submission, the first error field is focused to allow the user to easily start fixing errors.</li>
        </ol>
        </p>
        <p>Naturally, all of this is absolutely customizable; you'll see below how to configure your desired UX behavior.</p>

        <h3 id=\"ui-classes\">Classes and templates</h3>
        <p>Parsley adds its share of classes and elements, to ease nice UI validation result display. By default, it will add <code>parsley-success</code> and <code>parsley-error</code> classes depending on the validation result, <strong>on the input itself for a simple text, textarea and select input, and on <u>the parent</u> for radio / checkboxes inputs.</strong></p>

        <div class=\"bs-callout bs-callout-info\">
          <h4>Customize your classes</h4>
          <p>You could change these classes' names in configuration, and the class holder element too.</p>
        </div>

        <h3 id=\"ui-for-form\">UI for form</h3>
        <table class=\"table table-stripped table-bordered\">
          <thead>
            <tr>
              <th class=\"col-md-3\">Name</th>
              <th class=\"col-md-1\">API</th>
              <th class=\"col-md-4\">Description</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>UI Enabled <version>#2.0</version></td>
              <td><code>data-parsley-ui-enabled=\"false\"</code></td>
              <td>Activate or deactivate UI</td>
            </tr>
            <tr>
              <td>Focus <version>#2.0</version></td>
              <td><code>data-parsley-focus=\"first\"</code></td>
              <td>Focus failing field on form validation. Possible values: <code>'first' | 'last' | 'none'</code></td>
            </tr>
          </tbody>
        </table>

        <h3 id=\"ui-for-field\">UI for field</h3>
        <table class=\"table table-stripped table-bordered\">
          <thead>
            <tr>
              <th class=\"col-md-3\">Name</th>
              <th class=\"col-md-1\">API</th>
              <th class=\"col-md-4\">Description</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Trigger <version>#2.0</version></td>
              <td><code>data-parsley-trigger=\"input\"</code></td>
              <td>Specify one or many javascript events that will trigger item validation, before any failure. To set multiple events, separate them with a space <code>data-parsley-trigger=\"focusin focusout\"</code>. Default is <code>null</code>. <a href=\"http://api.jquery.com/category/events/\" target=\"_blank\">See the various events supported by jQuery.</a></td>
            </tr>
            <tr>
              <td>Trigger After Failure <version>#2.0</version></td>
              <td><code>data-parsley-trigger-after-failure=\"focusout\"</code></td>
              <td>Specify one or many javascript events that will trigger item validation, after the first failure. Default is <a href=\"https://developer.mozilla.org/en-US/docs/Web/Events/input\"><code>'input'</code></a>.</td>
            </tr>
            <tr>
              <td>No focus <version>#2.0</version></td>
              <td><code>data-parsley-no-focus</code></td>
              <td>If this field fails, do not focus on it (if <code>first</code> focus strategy is on, next field would be focused, if <code>last</code> strategy is on, previous field would be focused)</td>
            </tr>
            <tr>
              <td>Validation threshold <version>#2.0</version></td>
              <td><code>data-parsley-validation-threshold=\"10\"</code></td>
              <td>Used with trigger option above, for all <code>key</code>- events, do not validate until the field has a certain number of characters. Default is <code>3</code></td>
            </tr>
            <tr>
              <td>Class handler <version>#2.0</version></td>
              <td><code>data-parsley-class-handler=\"#element\"</code></td>
              <td>Specify the existing DOM container where ParsleyUI should add error and success classes. It is also possible to configure it with a callback function from javascript, see <a href=\"annotated-source/defaults.html\">the annotated source</a>.</td>
            </tr>
            <tr>
              <td>Errors container <version>#2.0</version></td>
              <td><code>data-parsley-errors-container=\"#element\"</code></td>
              <td>Specify the existing DOM container where ParsleyUI should put the errors. It is also possible to configure it with a callback function from javascript, see <a href=\"annotated-source/defaults.html\">the annotated source</a>.</td>
            </tr>
            <tr>
              <td>Error message <version>#2.0</version></td>
              <td><code>data-parsley-error-message=\"my message\"</code></td>
              <td>Customize a unique global message for the field.</td>
            </tr>
            <tr>
              <td>Validator error message <version>#2.0</version></td>
              <td><code>data-parsley-`constraint`-message=\"my message\"</code></td>
              <td>Customize the error message for the field constraint. eg: <code>data-parsley-required-message=\"this field is required\"</code></td>
            </tr>
          </tbody>
        </table>

        <h3 id=\"ui-for-javascript\">UI for javascript</h3>
        <p>
          Field instances have low level methods to add, update &amp; remove manage error messages. You have to manage these errors completely manually and they should be independant with other validations. Prefer using custom validations whenever possible.
          Note that <code>getErrorsMessages</code> only return errors from validations and not manually added errors.
        </p>
        <table class=\"table table-stripped table-bordered\">
          <thead>
            <tr>
              <th class=\"col-md-3\">Name</th>
              <th class=\"col-md-1\">Method</th>
              <th class=\"col-md-4\">Description</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Add error <version>#2.0</version></td>
              <td><code>addError(name, {message: , assert: , updateClass: true});</code></td>
              <td>Add an error message.</td>
            </tr>
            <tr>
              <td>Update error <version>#2.0</version></td>
              <td><code>updateError(name, {message: , assert: , updateClass: true});</code></td>
              <td>Update an already added error message error.</td>
            </tr>
            <tr>
              <td>Remove error <version>#2.0</version></td>
              <td><code>removeError(name, {updateClass: true});</code></td>
              <td>Remove an already present error.</td>
            </tr>
          </tbody>
        </table>

        <!-- ****************** Events ****************** -->
        <h1 id=\"events\" class=\"page-header\">Events</h1>
        <h3 id=\"events-overview\">Overview</h3>
        <p>Parsley triggers events that allows ParsleyUI to work. Further more, it could allow you to do some powerful magic if you listen properly to the right events!</p>
        <p>For performance reasons, Parsley does not use jQuery events, but the API to listen to events is very similar:
<pre><code>\$('#some-input').parsley().on('field:success', function() {
  // In here, `this` is the parlsey instance of #some-input
});
</code></pre>
        </p>
        <p>Similarly to jQuery events, parsley events will bubble up. For example, if a field is about to be validated, the event <code>'field:validate'</code> will be triggerred first on the parsley field instance, then on the parsley form instance (if the field is bound in a form) and finally on the top level <code>window.Parsley</code>
<pre><code>window.Parsley.on('field:error', function() {
  // This global callback will be called for any field that fails validation.
  console.log('Validation failed for: ', this.\$element);
});
</code></pre>
        </p>.
        <h3 id=\"events-list\">Events List</h3>
        <table class=\"table table-stripped table-bordered\">
          <thead>
            <tr>
              <th class=\"col-md-2\">Name</th>
              <th class=\"col-md-1\">Instance</th>
              <th class=\"col-md-1\">Fired by</th>
              <th class=\"col-md-4\">Description</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><code>form:init</code> <version>#2.1</version></td>
              <td><code>ParsleyForm</code></td>
              <td><code>new Parsley()</code></td>
              <td>Triggered when a Form is bound for the first time.</td>
            </tr>
            <tr>
              <td><code>form:validate</code> <version>#2.1</version></td>
              <td><code>ParsleyForm</code></td>
              <td><code>.validate()</code></td>
              <td>Triggered when a form validation is triggered, <strong>before</strong> its validation.</td>
            </tr>
            <tr>
              <td><code>form:success</code> <version>#2.1</version></td>
              <td><code>ParsleyForm</code></td>
              <td><code>.validate()</code></td>
              <td>Triggered when a form validation is triggered, <strong>after</strong> its validation succeeds.</td>
            </tr>
            <tr>
              <td><code>form:error</code> <version>#2.1</version></td>
              <td><code>ParsleyForm</code></td>
              <td><code>.validate()</code></td>
              <td>Triggered when a form validation is triggered, <strong>after</strong> its validation fails.</td>
            </tr>
            <tr>
              <td><code>form:validated</code> <version>#2.1</version></td>
              <td><code>ParsleyForm</code></td>
              <td><code>.validate()</code></td>
              <td>Triggered when a form validation is triggered, <strong>after</strong> its validation finishes (with success or with errors).</td>
            </tr>
            <tr>
              <td><code>form:submit</code> <version>#2.2</version></td>
              <td><code>ParsleyForm</code></td>
              <td><code>submit()</code></td>
              <td>Triggered when after a form validation succeeds and before the form is actually submitted.<br>
                Return `false` to interrupt submission.</td>
            </tr>
            <tr>
              <td><code>field:init</code> <version>#2.1</version></td>
              <td><code>ParsleyField</code></td>
              <td><code>new Parsley()</code></td>
              <td>Triggered when a Field is bound for the first time.</td>
            </tr>
            <tr>
              <td><code>field:validate</code> <version>#2.1</version></td>
              <td><code>ParsleyField</code></td>
              <td><code>.validate()</code></td>
              <td>Triggered when a field validation is triggered, <strong>before</strong> its validation.</td>
            </tr>
            <tr>
              <td><code>field:success</code> <version>#2.1</version></td>
              <td><code>ParsleyField</code></td>
              <td><code>.validate()</code></td>
              <td>Triggered when a field validation succeeds.</td>
            </tr>
            <tr>
              <td><code>field:error</code> <version>#2.1</version></td>
              <td><code>ParsleyField</code></td>
              <td><code>.validate()</code></td>
              <td>Triggered when a field validation fails.</td>
            </tr>
            <tr>
              <td><code>field:validated</code> <version>#2.1</version></td>
              <td><code>ParsleyField</code></td>
              <td><code>.validate()</code></td>
              <td>Triggered after a field is validated (with success or with errors).</td>
            </tr>
          </tbody>
        </table>

        <!-- ****************** Remote ****************** -->
        <h1 id=\"remote\" class=\"page-header\">Parsley Remote</h1>
        <p>
          Parsley <a href=\"annotated-source/remote.html\" target=\"_blank\">remote</a> is an easy to use <strong>ajax asynchronous validator</strong>.
        </p>

        <h3 id=\"remote-options\">Options</h3>
        <table class=\"table table-stripped table-bordered\">
          <thead>
            <tr>
              <th class=\"col-md-3\">Name</th>
              <th class=\"col-md-1\">API</th>
              <th class=\"col-md-4\">Description</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Remote validator</td>
              <td><code>data-parsley-remote</code> <version>#2.0</version></td>
              <td>Define the url that will be called to validate the entered content. e.g. <code>data-parsley-remote=\"http://url.ext\"</code>.
                <br>If the url contains the string <code>\"{value}\"</code>, the value will replace it in the URL (typical of RESTful APIs),
                otherwise the value will be passed as a data parameter, with the key being the input's name or ID.</td>
            </tr>
            <tr>
              <td>Reverse</td>
              <td><code>data-parsley-remote-reverse</code> <version>#2.0</version></td>
              <td>By default, all 2xx ajax returs are considered valid, all others failure. Sometimes (when a call is needed to see if an email, a pseudo is available for example) a 404 API answer could be the right answer. Using <code>data-parsley-remote-reverse=\"true\"</code> will consider 200 response is an error, and 404 one is correct.</td>
            </tr>
            <tr>
              <td>Options</td>
              <td><code>data-parsley-remote-options</code> <version>#2.0</version></td>
              <td>You could pass a json object to the <code>\$.ajax()</code> method used by remote validator. eg: <pre>data-parsley-remote-options='{ \"type\": \"POST\", \"dataType\": \"jsonp\", \"data\": { \"token\": \"value\" } }'</pre>
              <span class=\"label label-warning\">Warning:</span> you must format your JSON string wrapping all the keys/values with <code>\"</code> like above otherwise it won't be correctly parsed by <code>\$.parseJSON()</code> used behind the scenes by remote validator (<a href=\"https://api.jquery.com/jQuery.parseJSON/\" target=\"_blank\">See jQuery doc</a>)</td>
            </tr>
            <tr>
              <td>Validator</td>
              <td><code>data-parsley-remote-validator</code> <version>#2.0</version></td>
              <td><p>Use a specific remote validator. By default, there are 2 built-in remote validators: <code>default</code> and <code>reverse</code>. Default one is used by default and Reverse one used when <code>data-parsley-remote-reverse</code> is set to true. (this is an alias, you could use <code>data-parsley-remote-validator=\"reverse\"</code>).</p>
                  <p>Inside the function, <code>this</code> keyword refers to the <code>ParsleyField</code> instance attached to the form element. You have access to the plugin as well as the element if you need to perform other actions before returning the validation result.</p>
                  <p>To learn how to craft your custom remote validators, go <a href=\"#remote-custom\">here</a>.</p></td>
            </tr>
          </tbody>
        </table>

        <h3 id=\"remote-events\">Events</h3>
        <table class=\"table table-stripped table-bordered\">
          <thead>
            <tr>
              <th class=\"col-md-2\">Name</th>
              <th class=\"col-md-1\">Instance</th>
              <th class=\"col-md-1\">Fired by</th>
              <th class=\"col-md-4\">Description</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><code>field:ajaxoptions</code> <version>#2.2</version></td>
              <td><code>ParsleyField</code></td>
              <td><code>whenIsValid</code> &amp; al.</td>
              <td>Triggered just before an ajax request is sent, so one can tweak the options passed to <code>\$.ajax</code>. Options are passed as a second parameter.</td>
            </tr>
          </tbody>
        </table>

        <h3 id=\"remote-methods\">Methods</h3>
        <table class=\"table table-stripped table-bordered\">
          <thead>
            <tr>
              <th class=\"col-md-1\">Method</th>
              <th class=\"col-md-4\">Description</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><code>Parsley.addAsyncValidator(name, fn)</code> <version>#2.0</version></td>
              <td>Specify custom validator for Ajax results.</td>
            </tr>
          </tbody>
        </table>

        <h3 id=\"remote-custom\">Custom remote validators</h3>
        <p>If you need some custom processing of Ajax responses, configure your custom remote as follows:
<pre><code>&lt;input name=\"q\" type=\"text\" data-parsley-remote data-parsley-remote-validator='mycustom' value=\"foo\" /&gt;
[...]
&lt;script href=\"parsley.remote.js\"&gt;&lt;/script&gt;
&lt;script&gt;
window.Parsley.addAsyncValidator('mycustom', function (xhr) {
    console.log(this.\$element); // jQuery Object[ input[name=\"q\"] ]

    return 404 === xhr.status;
  }, 'http://mycustomapiurl.ext');
&lt;/script&gt;
</code></pre>
        </p>

        <!-- ****************** Extras ****************** -->
        <h1 id=\"extras\" class=\"page-header\">Parsley Extras</h1>
        <p>
          You'll find in the <code>src/extra/</code> directory in Parsley .zip or Github projects many more or less useful validators crafted by the community. A doc here is coming.
        </p>
        <h3 id=\"extras-validators-list\">Validators list</h3>
        <table class=\"table table-stripped table-bordered\">
          <thead>
           <tr>
             <th class=\"col-md-2\">Name</th>
             <th class=\"col-md-4\">API</th>
             <th class=\"col-md-5\">Description</th>
           </tr>
         </thead>
         <tbody>
           <tr>
             <td>
               <a name=\"psly-validator-gt\"></a>
               Greater than <version>#2.0</version>
             </td>
             <td>
               <table class=\"table-stripped hundred\">
                 <tr>
                   <td><code>data-parsley-gt=\"#anotherfield\"</code></td>
                   <td></td>
                 </tr>
                 <tr>
                   <td><code>data-parsley-gt=\"6\"</code></td>
                   <td></td>
                 </tr>
               </table>
             </td>
             <td>Validates that the value is greater than another field's value or some strict minimum number.</td>
           </tr>
           <tr>
             <td>
               <a name=\"psly-validator-gte\"></a>
               Greater than or equal to <version>#2.0</version>
             </td>
             <td>
               <table class=\"table-stripped hundred\">
                 <tr>
                   <td><code>data-parsley-gte=\"#anotherfield\"</code></td>
                   <td></td>
                 </tr>
                 <tr>
                   <td><code>data-parsley-gte=\"6\"</code></td>
                   <td></td>
                 </tr>
               </table>
             </td>
             <td>Validates that the value is greater than or equal to another field's value or some minimum number.</td>
           </tr>
           <tr>
             <td>
               <a name=\"psly-validator-lt\"></a>
               Less than <version>#2.0</version>
             </td>
             <td>
               <table class=\"table-stripped hundred\">
                 <tr>
                   <td><code>data-parsley-lt=\"#anotherfield\"</code></td>
                   <td></td>
                 </tr>
                 <tr>
                   <td><code>data-parsley-lt=\"6\"</code></td>
                   <td></td>
                 </tr>
               </table>
             </td>
             <td>Validates that the value is less than another field's value or some strict maximum number.</td>
           </tr>
           <tr>
             <td>
               <a name=\"psly-validator-lte\"></a>
               Less than or equal to <version>#2.0</version>
             </td>
             <td>
               <table class=\"table-stripped hundred\">
                 <tr>
                   <td><code>data-parsley-lte=\"#anotherfield\"</code></td>
                   <td></td>
                 </tr>
                 <tr>
                   <td><code>data-parsley-lte=\"6\"</code></td>
                   <td></td>
                 </tr>
               </table>
             </td>
             <td>Validates that the value is less than or equal to another field's value or some maximum number.</td>
           </tr>
           <tr>
             <td>
               <a name=\"psly-validator-minwords\"></a>
               Minwords <version>#2.0</version>
             </td>
             <td>
               <table class=\"table-stripped hundred\">
                 <tr>
                   <td><code>data-parsley-minwords=\"200\"</code></td>
                   <td></td>
                 </tr>
               </table>
             </td>
             <td>Validates that the value have at least a certain amount of words</td>
           </tr>
           <tr>
             <td>
               <a name=\"psly-validator-maxwords\"></a>
               Maxwords <version>#2.0</version>
             </td>
             <td>
               <table class=\"table-stripped hundred\">
                 <tr>
                   <td><code>data-parsley-maxwords=\"200\"</code></td>
                   <td></td>
                 </tr>
               </table>
             </td>
             <td>Validates that the value have a maximum of a certain amount of words</td>
           </tr>
           <tr>
             <td>
               <a name=\"psly-validator-words\"></a>
               Words <version>#2.0</version>
             </td>
             <td>
               <table class=\"table-stripped hundred\">
                 <tr>
                   <td><code>data-parsley-words=\"[200, 600]\"</code></td>
                   <td></td>
                 </tr>
               </table>
             </td>
             <td>Validates that the value is within a certain range of words</td>
           </tr>
         </tbody>
        </table>
      </div>

      <div class=\"col-md-3\">
        <div class=\"sidebar hidden-print affix-top\" role=\"complementary\">
          <ul class=\"nav sidenav\">
              <li class=\"active\">
                <a href=\"#overview\">Overview</a>
                <ul class=\"nav\">
                  <li><a href=\"#frontend-form-validation\">Frontend form validation</a></li>
                  <li><a href=\"#data-attrs\">Data attributes</a></li>
                  <li><a href=\"#configuration\">Configuration</a></li>
                </ul>
              </li>
              <li>
                <a href=\"#installation\">Installation</a>
                <ul class=\"nav\">
                  <li><a href=\"#installation-basic\">Basic installation</a></li>
                  <li><a href=\"#installation-javascript\">Javascript installation</a></li>
                  <li><a href=\"#installation-localization\">Localization</a></li>
                  <li><a href=\"#installation-plugins\">Plugins</a></li>
                </ul>
              </li>
              <li>
                <a href=\"#usage\">Usage</a>
                <ul class=\"nav\">
                  <li><a href=\"#usage-overview\">Overview</a></li>
                  <li><a href=\"#usage-configuration\">Configuration</a></li>
                  <li><a href=\"#usage-form\">Form</a></li>
                  <li><a href=\"#usage-field\">Field</a></li>
                </ul>
              </li>
              <li>
                <a href=\"#validators\">Built-in validators</a>
                <ul class=\"nav\">
                  <li><a href=\"#validators-overview\">Overview</a></li>
                  <li><a href=\"#validators-list\">Built-in validators list</a></li>
                </ul>
              </li>
              <li>
                <a href=\"#custom\">Custom validators</a>
                <ul class=\"nav\">
                  <li><a href=\"#custom-intro\">Craft yours!</a></li>
                  <li><a href=\"#custom-function\">Validating functions</a></li>
                  <li><a href=\"#custom-requirement\">Requirement parameters</a></li>
                  <li><a href=\"#custom-messages\">Error messages</a></li>
                </ul>
              </li>
              <li>
                <a href=\"#ui\">UI/UX</a>
                <ul class=\"nav\">
                  <li><a href=\"#ui-overview\">Overview</a></li>
                  <li><a href=\"#ui-classes\">Class & templates</a></li>
                  <li><a href=\"#ui-for-form\">UI for Form</a></li>
                  <li><a href=\"#ui-for-field\">UI for Field</a></li>
                  <li><a href=\"#ui-for-javascript\">UI for javascript</a></li>
                </ul>
              </li>
              <li>
                <a href=\"#events\">Events</a>
                <ul class=\"nav\">
                  <li><a href=\"#events-overview\">Overview</a></li>
                  <li><a href=\"#events-list\">List</a></li>
                </ul>
              </li>
              <li>
                <a href=\"#remote\">Parsley Remote</a>
                <ul class=\"nav\">
                  <li><a href=\"#remote-options\">Options</a></li>
                  <li><a href=\"#remote-events\">Events</a></li>
                  <li><a href=\"#remote-methods\">Methods</a></li>
                  <li><a href=\"#remote-custom\">Custom remote validators</a></li>
                </ul>
              </li>
              <li>
                <a href=\"#extras\">Parsley Extras</a>
                <ul class=\"nav\">
                  <li><a href=\"#extras-validators-list\">Validators list</a></li>
                </ul>
              </li>
          </ul>
          <a class=\"back-to-top\" href=\"#top\">
              Back to top
          </a>

          <div id=\"mailing-list\">
            <!-- Begin MailChimp Signup Form -->
            <link href=\"//cdn-images.mailchimp.com/embedcode/slim-081711.css\" rel=\"stylesheet\">
            <style>
              #mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
              /* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
                 We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
            </style>
            <div id=\"mc_embed_signup\">
            <form action=\"http://parsleyjs.us3.list-manage.com/subscribe/post?u=a39bf787b85f4d1b576367606&amp;id=d7374bb2d8\" method=\"post\" id=\"mc-embedded-subscribe-form\" name=\"mc-embedded-subscribe-form\" class=\"validate\" target=\"_blank\" data-parsley-validate>
              <label for=\"mce-EMAIL\">Subscribe to Parsley mailing list</label>
              <small>Receive a mail each 2.x new release, and sometimes an email asking for your feedback (twice a year max!)</small>
              <input type=\"email\" data-parsley-error-message=\"<strong>What did you expect? That on Parsley's own documentation, there wouldn't be validation here? ;)</strong>\" value=\"\" name=\"EMAIL\" class=\"email\" id=\"mce-EMAIL\" placeholder=\"email address\" required>
                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                <div style=\"position: absolute; left: -5000px;\"><input type=\"text\" name=\"b_a39bf787b85f4d1b576367606_d7374bb2d8\" value=\"\"></div>
              <div class=\"clear\"><input type=\"submit\" value=\"Subscribe\" name=\"subscribe\" id=\"mc-embedded-subscribe\" class=\"button\"></div>
            </form>
            </div>
            <!--End mc_embed_signup-->
          </div>

        </div>
      </div>
      <div class=\"clearfix\"></div>

      <!-- Site footer -->
      <div class=\"footer\">
        <p>&copy; <a href=\"https://twitter.com/guillaumepotier\" title=\"Guillaume Potier on Twitter\">Guillaume Potier</a> 2014 - <a href=\"http://wisembly.com\">@Wisembly</a></p>
      </div>
    </div>

    <script src=\"../bower_components/jquery/dist/jquery.min.js\"></script>
    <script src=\"../bower_components/bootstrap/js/affix.js\"></script>
    <script src=\"../bower_components/bootstrap/js/scrollspy.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/highlight.js/7.3/highlight.min.js\"></script>
    <script src=\"assets/docs.js\"></script>
    <script src=\"../dist/parsley.min.js\"></script>

    <script>
      try {
        hljs.initHighlightingOnLoad();
      } catch ( err ) {}

      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-37229467-1']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    </script>

  </body>
</html>
", "node_modules/parsleyjs/doc/index.html", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/doc/index.html");
    }
}
