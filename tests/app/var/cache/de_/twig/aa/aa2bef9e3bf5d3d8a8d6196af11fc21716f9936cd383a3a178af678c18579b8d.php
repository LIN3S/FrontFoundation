<?php

/* node_modules/parsleyjs/doc/examples/events.html */
class __TwigTemplate_f30f814bc5bb74e9ff0263804e2a855683cb5e60ec74fd18a38ca3218dcfef2c extends Twig_Template
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
        $__internal_026f11abd3e8460a5f05fc0e7c73c09b98077c965ef4cfde0d580f70978dcaa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_026f11abd3e8460a5f05fc0e7c73c09b98077c965ef4cfde0d580f70978dcaa9->enter($__internal_026f11abd3e8460a5f05fc0e7c73c09b98077c965ef4cfde0d580f70978dcaa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/doc/examples/events.html"));

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

    <title>Parsley - Examples | Events</title>

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
  .first {
    padding-left: 15px;
    border-left: 2px solid #FF851B;
  }
  .second {
    padding-left: 15px;
    border-left: 2px solid #5bc0de;
  }
  .validate {
    margin-top: 10px;
  }
  h4 {
    margin-bottom: 10px;
  }
  .invalid-form-error-message {
    margin-top: 10px;
    padding: 5px;
  }
  .invalid-form-error-message.filled {
    border-left: 2px solid red;
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
          <h2>Parsley Events Demo</h2>
          <small class=\"pull-left\"><a href=\"../examples.html\">&lt;&lt; Back to examples</a>
          — <a href=\"#\" class=\"play\">Try it on CodePen</a>
          </small>
          <span class=\"clearfix\"></span>

          <hr>
          <div class=\"form-group example\">
<h4>Correctly fill at least one of these blocks</h4>
<form class=\"demo-form\" data-parsley-validate>
  <div class=\"first\">
    <label for=\"firstname\">Firstname:</label>
    <input type=\"text\" class=\"form-control\" name=\"firstname\" data-parsley-length=\"[4, 20]\" data-parsley-group=\"block1\" />

    <label for=\"lastname\">Lastname:</label>
    <input type=\"text\" class=\"form-control\" name=\"lastname\" data-parsley-length=\"[4, 20]\" data-parsley-group=\"block1\" />
  </div>
  <hr>
  <div class=\"second\">
    <label for=\"fullname\">Fullname:</label>
    <input type=\"text\" class=\"form-control\" name=\"fullname\" data-parsley-length=\"[8, 40]\" data-parsley-group=\"block2\" />
  </div>

  <div class=\"invalid-form-error-message\"></div>
  <input type=\"submit\" class=\"btn btn-default validate\" />
</form>
          </div>
        </div>
        <div class=\"col-md-8\">
          <div class=\"code-block\">
            <pre><code class=\"example\">
            </code></pre>
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
  \$('.demo-form').parsley().on('form:validate', function (formInstance) {
    var ok = formInstance.isValid({group: 'block1', force: true}) || formInstance.isValid({group: 'block2', force: true});
    \$('.invalid-form-error-message')
      .html(ok ? '' : 'You must correctly fill *at least one of these two blocks!')
      .toggleClass('filled', !ok);
    if (!ok)
      formInstance.validationResult = false;
  });
});
    </script>
    <script src=\"../assets/example.js\"></script>
  </body>
</html>
";
        
        $__internal_026f11abd3e8460a5f05fc0e7c73c09b98077c965ef4cfde0d580f70978dcaa9->leave($__internal_026f11abd3e8460a5f05fc0e7c73c09b98077c965ef4cfde0d580f70978dcaa9_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/doc/examples/events.html";
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

    <title>Parsley - Examples | Events</title>

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
  .first {
    padding-left: 15px;
    border-left: 2px solid #FF851B;
  }
  .second {
    padding-left: 15px;
    border-left: 2px solid #5bc0de;
  }
  .validate {
    margin-top: 10px;
  }
  h4 {
    margin-bottom: 10px;
  }
  .invalid-form-error-message {
    margin-top: 10px;
    padding: 5px;
  }
  .invalid-form-error-message.filled {
    border-left: 2px solid red;
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
          <h2>Parsley Events Demo</h2>
          <small class=\"pull-left\"><a href=\"../examples.html\">&lt;&lt; Back to examples</a>
          — <a href=\"#\" class=\"play\">Try it on CodePen</a>
          </small>
          <span class=\"clearfix\"></span>

          <hr>
          <div class=\"form-group example\">
<h4>Correctly fill at least one of these blocks</h4>
<form class=\"demo-form\" data-parsley-validate>
  <div class=\"first\">
    <label for=\"firstname\">Firstname:</label>
    <input type=\"text\" class=\"form-control\" name=\"firstname\" data-parsley-length=\"[4, 20]\" data-parsley-group=\"block1\" />

    <label for=\"lastname\">Lastname:</label>
    <input type=\"text\" class=\"form-control\" name=\"lastname\" data-parsley-length=\"[4, 20]\" data-parsley-group=\"block1\" />
  </div>
  <hr>
  <div class=\"second\">
    <label for=\"fullname\">Fullname:</label>
    <input type=\"text\" class=\"form-control\" name=\"fullname\" data-parsley-length=\"[8, 40]\" data-parsley-group=\"block2\" />
  </div>

  <div class=\"invalid-form-error-message\"></div>
  <input type=\"submit\" class=\"btn btn-default validate\" />
</form>
          </div>
        </div>
        <div class=\"col-md-8\">
          <div class=\"code-block\">
            <pre><code class=\"example\">
            </code></pre>
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
  \$('.demo-form').parsley().on('form:validate', function (formInstance) {
    var ok = formInstance.isValid({group: 'block1', force: true}) || formInstance.isValid({group: 'block2', force: true});
    \$('.invalid-form-error-message')
      .html(ok ? '' : 'You must correctly fill *at least one of these two blocks!')
      .toggleClass('filled', !ok);
    if (!ok)
      formInstance.validationResult = false;
  });
});
    </script>
    <script src=\"../assets/example.js\"></script>
  </body>
</html>
", "node_modules/parsleyjs/doc/examples/events.html", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/doc/examples/events.html");
    }
}
