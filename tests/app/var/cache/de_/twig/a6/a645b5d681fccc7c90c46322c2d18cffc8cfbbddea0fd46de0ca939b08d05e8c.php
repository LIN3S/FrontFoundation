<?php

/* node_modules/parsleyjs/doc/examples/simple.html */
class __TwigTemplate_f8a36746bfcdb04a7be313fceaa974fe4ad5f87ed48ba95e0651fe2b2ec5ac2d extends Twig_Template
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
        $__internal_b5c09c7e08b017b5bbb1b075e0c2b1a37886841bb71b35429ed3014447dec157 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5c09c7e08b017b5bbb1b075e0c2b1a37886841bb71b35429ed3014447dec157->enter($__internal_b5c09c7e08b017b5bbb1b075e0c2b1a37886841bb71b35429ed3014447dec157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/doc/examples/simple.html"));

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

    <title>Parsley - Examples | Simple form demo</title>

    <!-- Bootstrap core CSS -->
    <link href=\"../../bower_components/bootstrap/dist/css/bootstrap.css\" rel=\"stylesheet\">

    <!-- Custom styles for this template -->
    <link href=\"../assets/docs.css\" rel=\"stylesheet\">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
      <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
    <![endif]-->

    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/highlight.js/7.3/styles/github.min.css\" rel=\"stylesheet\">

    <link href=\"../../src/parsley.css\" rel=\"stylesheet\">
    <style class=\"example\">
h4 {
  margin-bottom: 10px;
}
p.parsley-success {
  color: #468847;
  background-color: #DFF0D8;
  border: 1px solid #D6E9C6;
}
p.parsley-error {
  color: #B94A48;
  background-color: #F2DEDE;
  border: 1px solid #EED3D7;
}
    </style>
  </head>

  <body class=\"examples\">

    <div class=\"container\">

      <div class=\"masthead\">
        <div class=\"header\">
          <h3 class=\"text-muted\"><a href=\"../../\">Parsley</a></h3>

          <span class=\"social-buttons inline-block\">
            <a href=\"https://twitter.com/share\" class=\"twitter-share-button\" data-url=\"http://parsleyjs.org\" data-text=\"Parsley, the ultimate javascript form validation library. #parsleyjs\" data-via=\"guillaumepotier\" data-related=\"guillaumepotier\" data-hashtags=\"parsleyjs\">Tweet</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

            <iframe src=\"http://ghbtns.com/github-btn.html?user=guillaumepotier&repo=Parsley.js&type=watch&count=true\" allowtransparency=\"true\" frameborder=\"0\" scrolling=\"0\" width=\"110\" height=\"20\"></iframe>

            <iframe src=\"http://ghbtns.com/github-btn.html?user=guillaumepotier&repo=Parsley.js&type=fork&count=true\" allowtransparency=\"true\" frameborder=\"0\" scrolling=\"0\" width=\"110\" height=\"20\"></iframe>
          </span>
        </div>
      </div>

      <ul class=\"nav nav-justified\">
        <li><a href=\"../../\">Home</a></li>
        <li class=\"active\"><a href=\"../examples.html\">Examples</a></li>
        <li><a href=\"../index.html\">Documentation</a></li>
        <li><a href=\"../download.html\">Download</a></li>
        <li><a href=\"../help.html\">Help</a></li>
        <li><a href=\"../annotated-source/main.html\">Annotated&nbsp;source</a></li>
        <li><a href=\"../tests.html\">Tests</a></li>
      </ul>

      <div class=\"row\">

        <!-- ###################### BEGINNING OF EXAMPLE ######################-->

        <div class=\"col-md-4\">
          <h2>Simple form example *</h2>
          <small class=\"pull-left\"><a href=\"../examples.html\">&lt;&lt; Back to examples</a>
          — <a href=\"#\" class=\"play\">Try it on CodePen</a>
          </small>
          <span class=\"clearfix\"></span>
          <hr>

<div class=\"form-group example\">
<div class=\"bs-callout bs-callout-warning hidden\">
  <h4>Oh snap!</h4>
  <p>This form seems to be invalid :(</p>
</div>

<div class=\"bs-callout bs-callout-info hidden\">
  <h4>Yay!</h4>
  <p>Everything seems to be ok :)</p>
</div>

<form id=\"demo-form\" data-parsley-validate>
  <label for=\"fullname\">Full Name * :</label>
  <input type=\"text\" class=\"form-control\" name=\"fullname\" required />

  <label for=\"email\">Email * :</label>
  <input type=\"email\" class=\"form-control\" name=\"email\" data-parsley-trigger=\"change\" required />

  <label for=\"gender\">Gender *:</label>
  <p>
    M: <input type=\"radio\" name=\"gender\" id=\"genderM\" value=\"M\" required />
    F: <input type=\"radio\" name=\"gender\" id=\"genderF\" value=\"F\" />
  </p>

  <label for=\"hobbies\">Hobbies (Optional, but 2 minimum):</label>
  <p>
    Skiing <input type=\"checkbox\" name=\"hobbies[]\" id=\"hobby1\" value=\"ski\" data-parsley-mincheck=\"2\" /><br>
    Running <input type=\"checkbox\" name=\"hobbies[]\" id=\"hobby2\" value=\"run\" /><br>
    Eating <input type=\"checkbox\" name=\"hobbies[]\" id=\"hobby3\" value=\"eat\" /><br>
    Sleeping <input type=\"checkbox\" name=\"hobbies[]\" id=\"hobby4\" value=\"sleep\" /><br>
    Reading <input type=\"checkbox\" name=\"hobbies[]\" id=\"hobby5\" value=\"read\" /><br>
    Coding <input type=\"checkbox\" name=\"hobbies[]\" id=\"hobby6\" value=\"code\" /><br>
  </p>

  <p>
  <label for=\"heard\">Heard about us via *:</label>
  <select id=\"heard\" required>
    <option value=\"\">Choose..</option>
    <option value=\"press\">Press</option>
    <option value=\"net\">Internet</option>
    <option value=\"mouth\">Word of mouth</option>
    <option value=\"other\">Other..</option>
  </select>
  </p>

  <p>
  <label for=\"message\">Message (20 chars min, 100 max) :</label>
  <textarea id=\"message\" class=\"form-control\" name=\"message\" data-parsley-trigger=\"keyup\" data-parsley-minlength=\"20\" data-parsley-maxlength=\"100\" data-parsley-minlength-message=\"Come on! You need to enter at least a 20 character comment..\" data-parsley-validation-threshold=\"10\"></textarea>
  </p>

  <br>
  <input type=\"submit\" class=\"btn btn-default\" value=\"validate\"/>

  <p><small>* Please, note that this demo form is not a perfect example of UX-awareness. The aim here is to show a quick overview of parsley-API and Parsley customizable behavior.</small></p>
</form>
          </div>
        </div>
        <div class=\"col-md-8\">
          <div class=\"code-block\">
<pre><code class=\"example\"></code></pre>
          </div>
        </div>
      </div>


      <!-- ###################### END OF EXAMPLE ######################-->

      <!-- Site footer -->
      <div class=\"footer\">
        <p>&copy; <a href=\"https://twitter.com/guillaumepotier\" title=\"Guillaume Potier on Twitter\">Guillaume Potier</a> 2014 - <a href=\"http://wisembly.com\">@Wisembly</a></p>
      </div>
    </div>

    <script src=\"../../bower_components/jquery/dist/jquery.min.js\"></script>
    <script src=\"../../bower_components/bootstrap/js/affix.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/highlight.js/7.3/highlight.min.js\"></script>

    <script src=\"../../dist/parsley.js\"></script>
    <script class=\"example\">
\$(function () {
  \$('#demo-form').parsley().on('field:validated', function() {
    var ok = \$('.parsley-error').length === 0;
    \$('.bs-callout-info').toggleClass('hidden', !ok);
    \$('.bs-callout-warning').toggleClass('hidden', ok);
  })
  .on('form:submit', function() {
    return false; // Don't submit form for this demo
  });
});
    </script>
    <script src=\"../assets/example.js\"></script>

  </body>
</html>
";
        
        $__internal_b5c09c7e08b017b5bbb1b075e0c2b1a37886841bb71b35429ed3014447dec157->leave($__internal_b5c09c7e08b017b5bbb1b075e0c2b1a37886841bb71b35429ed3014447dec157_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/doc/examples/simple.html";
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

    <title>Parsley - Examples | Simple form demo</title>

    <!-- Bootstrap core CSS -->
    <link href=\"../../bower_components/bootstrap/dist/css/bootstrap.css\" rel=\"stylesheet\">

    <!-- Custom styles for this template -->
    <link href=\"../assets/docs.css\" rel=\"stylesheet\">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
      <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
    <![endif]-->

    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/highlight.js/7.3/styles/github.min.css\" rel=\"stylesheet\">

    <link href=\"../../src/parsley.css\" rel=\"stylesheet\">
    <style class=\"example\">
h4 {
  margin-bottom: 10px;
}
p.parsley-success {
  color: #468847;
  background-color: #DFF0D8;
  border: 1px solid #D6E9C6;
}
p.parsley-error {
  color: #B94A48;
  background-color: #F2DEDE;
  border: 1px solid #EED3D7;
}
    </style>
  </head>

  <body class=\"examples\">

    <div class=\"container\">

      <div class=\"masthead\">
        <div class=\"header\">
          <h3 class=\"text-muted\"><a href=\"../../\">Parsley</a></h3>

          <span class=\"social-buttons inline-block\">
            <a href=\"https://twitter.com/share\" class=\"twitter-share-button\" data-url=\"http://parsleyjs.org\" data-text=\"Parsley, the ultimate javascript form validation library. #parsleyjs\" data-via=\"guillaumepotier\" data-related=\"guillaumepotier\" data-hashtags=\"parsleyjs\">Tweet</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

            <iframe src=\"http://ghbtns.com/github-btn.html?user=guillaumepotier&repo=Parsley.js&type=watch&count=true\" allowtransparency=\"true\" frameborder=\"0\" scrolling=\"0\" width=\"110\" height=\"20\"></iframe>

            <iframe src=\"http://ghbtns.com/github-btn.html?user=guillaumepotier&repo=Parsley.js&type=fork&count=true\" allowtransparency=\"true\" frameborder=\"0\" scrolling=\"0\" width=\"110\" height=\"20\"></iframe>
          </span>
        </div>
      </div>

      <ul class=\"nav nav-justified\">
        <li><a href=\"../../\">Home</a></li>
        <li class=\"active\"><a href=\"../examples.html\">Examples</a></li>
        <li><a href=\"../index.html\">Documentation</a></li>
        <li><a href=\"../download.html\">Download</a></li>
        <li><a href=\"../help.html\">Help</a></li>
        <li><a href=\"../annotated-source/main.html\">Annotated&nbsp;source</a></li>
        <li><a href=\"../tests.html\">Tests</a></li>
      </ul>

      <div class=\"row\">

        <!-- ###################### BEGINNING OF EXAMPLE ######################-->

        <div class=\"col-md-4\">
          <h2>Simple form example *</h2>
          <small class=\"pull-left\"><a href=\"../examples.html\">&lt;&lt; Back to examples</a>
          — <a href=\"#\" class=\"play\">Try it on CodePen</a>
          </small>
          <span class=\"clearfix\"></span>
          <hr>

<div class=\"form-group example\">
<div class=\"bs-callout bs-callout-warning hidden\">
  <h4>Oh snap!</h4>
  <p>This form seems to be invalid :(</p>
</div>

<div class=\"bs-callout bs-callout-info hidden\">
  <h4>Yay!</h4>
  <p>Everything seems to be ok :)</p>
</div>

<form id=\"demo-form\" data-parsley-validate>
  <label for=\"fullname\">Full Name * :</label>
  <input type=\"text\" class=\"form-control\" name=\"fullname\" required />

  <label for=\"email\">Email * :</label>
  <input type=\"email\" class=\"form-control\" name=\"email\" data-parsley-trigger=\"change\" required />

  <label for=\"gender\">Gender *:</label>
  <p>
    M: <input type=\"radio\" name=\"gender\" id=\"genderM\" value=\"M\" required />
    F: <input type=\"radio\" name=\"gender\" id=\"genderF\" value=\"F\" />
  </p>

  <label for=\"hobbies\">Hobbies (Optional, but 2 minimum):</label>
  <p>
    Skiing <input type=\"checkbox\" name=\"hobbies[]\" id=\"hobby1\" value=\"ski\" data-parsley-mincheck=\"2\" /><br>
    Running <input type=\"checkbox\" name=\"hobbies[]\" id=\"hobby2\" value=\"run\" /><br>
    Eating <input type=\"checkbox\" name=\"hobbies[]\" id=\"hobby3\" value=\"eat\" /><br>
    Sleeping <input type=\"checkbox\" name=\"hobbies[]\" id=\"hobby4\" value=\"sleep\" /><br>
    Reading <input type=\"checkbox\" name=\"hobbies[]\" id=\"hobby5\" value=\"read\" /><br>
    Coding <input type=\"checkbox\" name=\"hobbies[]\" id=\"hobby6\" value=\"code\" /><br>
  </p>

  <p>
  <label for=\"heard\">Heard about us via *:</label>
  <select id=\"heard\" required>
    <option value=\"\">Choose..</option>
    <option value=\"press\">Press</option>
    <option value=\"net\">Internet</option>
    <option value=\"mouth\">Word of mouth</option>
    <option value=\"other\">Other..</option>
  </select>
  </p>

  <p>
  <label for=\"message\">Message (20 chars min, 100 max) :</label>
  <textarea id=\"message\" class=\"form-control\" name=\"message\" data-parsley-trigger=\"keyup\" data-parsley-minlength=\"20\" data-parsley-maxlength=\"100\" data-parsley-minlength-message=\"Come on! You need to enter at least a 20 character comment..\" data-parsley-validation-threshold=\"10\"></textarea>
  </p>

  <br>
  <input type=\"submit\" class=\"btn btn-default\" value=\"validate\"/>

  <p><small>* Please, note that this demo form is not a perfect example of UX-awareness. The aim here is to show a quick overview of parsley-API and Parsley customizable behavior.</small></p>
</form>
          </div>
        </div>
        <div class=\"col-md-8\">
          <div class=\"code-block\">
<pre><code class=\"example\"></code></pre>
          </div>
        </div>
      </div>


      <!-- ###################### END OF EXAMPLE ######################-->

      <!-- Site footer -->
      <div class=\"footer\">
        <p>&copy; <a href=\"https://twitter.com/guillaumepotier\" title=\"Guillaume Potier on Twitter\">Guillaume Potier</a> 2014 - <a href=\"http://wisembly.com\">@Wisembly</a></p>
      </div>
    </div>

    <script src=\"../../bower_components/jquery/dist/jquery.min.js\"></script>
    <script src=\"../../bower_components/bootstrap/js/affix.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/highlight.js/7.3/highlight.min.js\"></script>

    <script src=\"../../dist/parsley.js\"></script>
    <script class=\"example\">
\$(function () {
  \$('#demo-form').parsley().on('field:validated', function() {
    var ok = \$('.parsley-error').length === 0;
    \$('.bs-callout-info').toggleClass('hidden', !ok);
    \$('.bs-callout-warning').toggleClass('hidden', ok);
  })
  .on('form:submit', function() {
    return false; // Don't submit form for this demo
  });
});
    </script>
    <script src=\"../assets/example.js\"></script>

  </body>
</html>
", "node_modules/parsleyjs/doc/examples/simple.html", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/doc/examples/simple.html");
    }
}
