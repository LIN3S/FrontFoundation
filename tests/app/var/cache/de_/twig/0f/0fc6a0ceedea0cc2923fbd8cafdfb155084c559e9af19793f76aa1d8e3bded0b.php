<?php

/* node_modules/parsleyjs/doc/examples/multisteps.html */
class __TwigTemplate_24b176a9c147b820d238e9f8df3d80c58a99c5f7acada1b47761121e27ad39f4 extends Twig_Template
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
        $__internal_a329c7c1f579460efa65f9584b21f90b1a740071b1e398128f458c922342510f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a329c7c1f579460efa65f9584b21f90b1a740071b1e398128f458c922342510f->enter($__internal_a329c7c1f579460efa65f9584b21f90b1a740071b1e398128f458c922342510f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/doc/examples/multisteps.html"));

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

    <title>Parsley - Examples | Multi steps form</title>

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
.form-section {
  padding-left: 15px;
  border-left: 2px solid #FF851B;
  display: none;
}
.form-section.current {
  display: inherit;
}
.btn-info, .btn-default {
  margin-top: 10px;
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
          <h2>Multi steps form demo</h2>
          <small class=\"pull-left\"><a href=\"../examples.html\">&lt;&lt; Back to examples</a>
          — <a href=\"#\" class=\"play\">Try it on CodePen</a>
          </small>
          <span class=\"clearfix\"></span>

          <hr>
          <div class=\"form-group example\">
<form class=\"demo-form\">
  <div class=\"form-section\">
    <label for=\"firstname\">First Name:</label>
    <input type=\"text\" class=\"form-control\" name=\"firstname\" required />

    <label for=\"lastname\">Last Name:</label>
    <input type=\"text\" class=\"form-control\" name=\"lastname\" required />
  </div>

  <div class=\"form-section\">
    <label for=\"email\">Email:</label>
    <input type=\"email\" class=\"form-control\" name=\"email\" required />
  </div>

  <div class=\"form-section\">
    <label for=\"color\">Favorite color:</label>
    <input type=\"text\" class=\"form-control\" name=\"color\" required />
  </div>

  <div class=\"form-navigation\">
    <button type=\"button\" class=\"previous btn btn-info pull-left\">&lt; Previous</button>
    <button type=\"button\" class=\"next btn btn-info pull-right\">Next &gt;</button>
    <input type=\"submit\" class=\"btn btn-default pull-right\" />
    <span class=\"clearfix\"></span>
  </div>

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
  var \$sections = \$('.form-section');

  function navigateTo(index) {
    // Mark the current section with the class 'current'
    \$sections
      .removeClass('current')
      .eq(index)
        .addClass('current');
    // Show only the navigation buttons that make sense for the current section:
    \$('.form-navigation .previous').toggle(index > 0);
    var atTheEnd = index >= \$sections.length - 1;
    \$('.form-navigation .next').toggle(!atTheEnd);
    \$('.form-navigation [type=submit]').toggle(atTheEnd);
  }

  function curIndex() {
    // Return the current index by looking at which section has the class 'current'
    return \$sections.index(\$sections.filter('.current'));
  }

  // Previous button is easy, just go back
  \$('.form-navigation .previous').click(function() {
    navigateTo(curIndex() - 1);
  });

  // Next button goes forward iff current block validates
  \$('.form-navigation .next').click(function() {
    if (\$('.demo-form').parsley().validate({group: 'block-' + curIndex()}))
      navigateTo(curIndex() + 1);
  });

  // Prepare sections by setting the `data-parsley-group` attribute to 'block-0', 'block-1', etc.
  \$sections.each(function(index, section) {
    \$(section).find(':input').attr('data-parsley-group', 'block-' + index);
  });
  navigateTo(0); // Start at the beginning
});
    </script>
    <script src=\"../assets/example.js\"></script>
  </body>
</html>
";
        
        $__internal_a329c7c1f579460efa65f9584b21f90b1a740071b1e398128f458c922342510f->leave($__internal_a329c7c1f579460efa65f9584b21f90b1a740071b1e398128f458c922342510f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/doc/examples/multisteps.html";
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

    <title>Parsley - Examples | Multi steps form</title>

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
.form-section {
  padding-left: 15px;
  border-left: 2px solid #FF851B;
  display: none;
}
.form-section.current {
  display: inherit;
}
.btn-info, .btn-default {
  margin-top: 10px;
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
          <h2>Multi steps form demo</h2>
          <small class=\"pull-left\"><a href=\"../examples.html\">&lt;&lt; Back to examples</a>
          — <a href=\"#\" class=\"play\">Try it on CodePen</a>
          </small>
          <span class=\"clearfix\"></span>

          <hr>
          <div class=\"form-group example\">
<form class=\"demo-form\">
  <div class=\"form-section\">
    <label for=\"firstname\">First Name:</label>
    <input type=\"text\" class=\"form-control\" name=\"firstname\" required />

    <label for=\"lastname\">Last Name:</label>
    <input type=\"text\" class=\"form-control\" name=\"lastname\" required />
  </div>

  <div class=\"form-section\">
    <label for=\"email\">Email:</label>
    <input type=\"email\" class=\"form-control\" name=\"email\" required />
  </div>

  <div class=\"form-section\">
    <label for=\"color\">Favorite color:</label>
    <input type=\"text\" class=\"form-control\" name=\"color\" required />
  </div>

  <div class=\"form-navigation\">
    <button type=\"button\" class=\"previous btn btn-info pull-left\">&lt; Previous</button>
    <button type=\"button\" class=\"next btn btn-info pull-right\">Next &gt;</button>
    <input type=\"submit\" class=\"btn btn-default pull-right\" />
    <span class=\"clearfix\"></span>
  </div>

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
  var \$sections = \$('.form-section');

  function navigateTo(index) {
    // Mark the current section with the class 'current'
    \$sections
      .removeClass('current')
      .eq(index)
        .addClass('current');
    // Show only the navigation buttons that make sense for the current section:
    \$('.form-navigation .previous').toggle(index > 0);
    var atTheEnd = index >= \$sections.length - 1;
    \$('.form-navigation .next').toggle(!atTheEnd);
    \$('.form-navigation [type=submit]').toggle(atTheEnd);
  }

  function curIndex() {
    // Return the current index by looking at which section has the class 'current'
    return \$sections.index(\$sections.filter('.current'));
  }

  // Previous button is easy, just go back
  \$('.form-navigation .previous').click(function() {
    navigateTo(curIndex() - 1);
  });

  // Next button goes forward iff current block validates
  \$('.form-navigation .next').click(function() {
    if (\$('.demo-form').parsley().validate({group: 'block-' + curIndex()}))
      navigateTo(curIndex() + 1);
  });

  // Prepare sections by setting the `data-parsley-group` attribute to 'block-0', 'block-1', etc.
  \$sections.each(function(index, section) {
    \$(section).find(':input').attr('data-parsley-group', 'block-' + index);
  });
  navigateTo(0); // Start at the beginning
});
    </script>
    <script src=\"../assets/example.js\"></script>
  </body>
</html>
", "node_modules/parsleyjs/doc/examples/multisteps.html", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/doc/examples/multisteps.html");
    }
}
