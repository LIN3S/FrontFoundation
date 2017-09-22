<?php

/* node_modules/parsleyjs/doc/examples/ajax.html */
class __TwigTemplate_992159e0e66a544a1a52e3d7f306dbcd234d10c50d0e3bc3f205d388b5ed466a extends Twig_Template
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
        $__internal_1a7df3c050378693094ed10af7bab0f729ef6940c6a58c9f3c34f5a64cc715b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a7df3c050378693094ed10af7bab0f729ef6940c6a58c9f3c34f5a64cc715b5->enter($__internal_1a7df3c050378693094ed10af7bab0f729ef6940c6a58c9f3c34f5a64cc715b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/doc/examples/ajax.html"));

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

    <title>Parsley - Examples | Custom validator</title>

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
fieldset {
  border: 1px solid #ddd;
  padding-left: 8px;
}
fieldset.parsley-success {
  border-color: #468847;
  background-color: #DFF0D8;
}
fieldset.parsley-error {
  border-color: #B94A48;
  background-color: #F2DEDE;
}
.error {
  color: #B94A48
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
          <h2>Craft your own validators demo</h2>
          <small class=\"pull-left\"><a href=\"../examples.html\">&lt;&lt; Back to examples</a>
          — <a href=\"#\" class=\"play\">Try it on CodePen</a>
          </small>
          <span class=\"clearfix\"></span>

          <hr>
          <div class=\"form-group example\">
<h1>Custom validators</h1>
<h3>Simple ajax request</h3>
<form data-parsley-validate>
  <label for=\"zip\">US Zip Code * :</label>
  <input name=\"zip\" required data-parsley-type=\"digits\"
         data-parsley-length=\"[5,5]\"
         data-parsley-zip=\"us\">
  <br>
  <input type=\"submit\" value=\"validate\">

  <p><small>* This checks the actual existence of a zip code using ajax (e.g.: 00001 is not an actual US Zip code).</small></p>
</form>

<h3>Complex ajax handling</h3>
<form class=\"complex\">
  <fieldset data-parsley-state-and-zip=\"us\" data-parsley-validate-if-empty data-parsley-errors-container=\".error\">
    <h4>Location</h4><span class=\"error\"></span>
    <label for=\"state\">US State:</label>
    <select name=\"state\" required>
      <option value=\"\" disabled selected hidden>Select a US State...</option>
      <option value=\"AL\">Alabama</option><option value=\"AK\">Alaska</option><option value=\"AZ\">Arizona</option><option value=\"AR\">Arkansas</option><option value=\"CA\">California</option><option value=\"CO\">Colorado</option><option value=\"CT\">Connecticut</option><option value=\"DE\">Delaware</option><option value=\"DC\">District Of Columbia</option><option value=\"FL\">Florida</option><option value=\"GA\">Georgia</option><option value=\"HI\">Hawaii</option><option value=\"ID\">Idaho</option><option value=\"IL\">Illinois</option><option value=\"IN\">Indiana</option><option value=\"IA\">Iowa</option><option value=\"KS\">Kansas</option><option value=\"KY\">Kentucky</option><option value=\"LA\">Louisiana</option><option value=\"ME\">Maine</option><option value=\"MD\">Maryland</option><option value=\"MA\">Massachusetts</option><option value=\"MI\">Michigan</option><option value=\"MN\">Minnesota</option><option value=\"MS\">Mississippi</option><option value=\"MO\">Missouri</option><option value=\"MT\">Montana</option><option value=\"NE\">Nebraska</option><option value=\"NV\">Nevada</option><option value=\"NH\">New Hampshire</option><option value=\"NJ\">New Jersey</option><option value=\"NM\">New Mexico</option><option value=\"NY\">New York</option><option value=\"NC\">North Carolina</option><option value=\"ND\">North Dakota</option><option value=\"OH\">Ohio</option><option value=\"OK\">Oklahoma</option><option value=\"OR\">Oregon</option><option value=\"PA\">Pennsylvania</option><option value=\"RI\">Rhode Island</option><option value=\"SC\">South Carolina</option><option value=\"SD\">South Dakota</option><option value=\"TN\">Tennessee</option><option value=\"TX\">Texas</option><option value=\"UT\">Utah</option><option value=\"VT\">Vermont</option><option value=\"VA\">Virginia</option><option value=\"WA\">Washington</option><option value=\"WV\">West Virginia</option><option value=\"WI\">Wisconsin</option><option value=\"WY\">Wyoming</option>
    </select>
    <br>
    <label for=\"state\">Zip:</label>
    <input name=\"zip\" required data-parsley-type=\"digits\"
           data-parsley-length=\"[5,5]\"
           data-parsley-zip=\"us\">
  </fieldset>
  <br>
  <input type=\"submit\" value=\"validate\">

  <p><small>* A complete example showing Ajax, promise chaining, dynamic custom error message, interdependent fields.</small></p>
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
        <p>&copy; <a href=\"https://twitter.com/malafortune\" title=\"Marc-André Lafortune on Twitter\">Marc-André Lafortune</a> 2017</p>
      </div>
    </div>

    <script src=\"../../bower_components/jquery/dist/jquery.min.js\"></script>
    <script src=\"../../bower_components/bootstrap/js/affix.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/highlight.js/7.3/highlight.min.js\"></script>

    <script src=\"../../dist/parsley.js\"></script>

    <script class=\"example\">
Parsley.addValidator('zip', {
  validateString: function(value, country) {
    // Zippopotam.us returns a status 404 for incorrect zip codes,
    // so we simply return the ajax request:
    return \$.ajax('//www.zippopotam.us/' + country + '/' + value)
  },
  messages: {en: 'There is no such zip for the country \"%s\"'}
});
Parsley.addValidator('stateAndZip', {
  validateString: function(_ignoreValue, country, instance) {
    var state = instance.\$element.find('[name=\"state\"]').val();
    var zip = instance.\$element.find('[name=\"zip\"]').val();
    var xhr = \$.ajax('//www.zippopotam.us/' + country + '/' + zip)
    // When Zippopotam.us returns the info of the given zip, check it:
    return xhr.then(function(json) {
      var actualState = json.places[0]['state abbreviation'];
      if (actualState !== state) {
        // We could return `false`, but for an even better result
        // we can fail the promise with a custom error message:
        return \$.Deferred().reject(\"The zip code \" + zip + \" is in \" + actualState + \", not in \" + state);
        // Note: in jQuery 3.0+, you can `throw('my custom error')` for the same result
      }
    })
  },
  // The following error message will still show if the xhr itself fails
  // (404 because zip does not exist, network error, etc.)
  messages: {en: 'There is no such zip for the country \"%s\"'}
});
\$(function() {
  \$('.complex').parsley({
    inputs: Parsley.options.inputs + ',fieldset'
  })
});
Parsley.on('form:submit', function() {
  return false; // Don't submit form for this demo
});
    </script>
    <script src=\"../assets/example.js\"></script>
  </body>
</html>
";
        
        $__internal_1a7df3c050378693094ed10af7bab0f729ef6940c6a58c9f3c34f5a64cc715b5->leave($__internal_1a7df3c050378693094ed10af7bab0f729ef6940c6a58c9f3c34f5a64cc715b5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/doc/examples/ajax.html";
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

    <title>Parsley - Examples | Custom validator</title>

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
fieldset {
  border: 1px solid #ddd;
  padding-left: 8px;
}
fieldset.parsley-success {
  border-color: #468847;
  background-color: #DFF0D8;
}
fieldset.parsley-error {
  border-color: #B94A48;
  background-color: #F2DEDE;
}
.error {
  color: #B94A48
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
          <h2>Craft your own validators demo</h2>
          <small class=\"pull-left\"><a href=\"../examples.html\">&lt;&lt; Back to examples</a>
          — <a href=\"#\" class=\"play\">Try it on CodePen</a>
          </small>
          <span class=\"clearfix\"></span>

          <hr>
          <div class=\"form-group example\">
<h1>Custom validators</h1>
<h3>Simple ajax request</h3>
<form data-parsley-validate>
  <label for=\"zip\">US Zip Code * :</label>
  <input name=\"zip\" required data-parsley-type=\"digits\"
         data-parsley-length=\"[5,5]\"
         data-parsley-zip=\"us\">
  <br>
  <input type=\"submit\" value=\"validate\">

  <p><small>* This checks the actual existence of a zip code using ajax (e.g.: 00001 is not an actual US Zip code).</small></p>
</form>

<h3>Complex ajax handling</h3>
<form class=\"complex\">
  <fieldset data-parsley-state-and-zip=\"us\" data-parsley-validate-if-empty data-parsley-errors-container=\".error\">
    <h4>Location</h4><span class=\"error\"></span>
    <label for=\"state\">US State:</label>
    <select name=\"state\" required>
      <option value=\"\" disabled selected hidden>Select a US State...</option>
      <option value=\"AL\">Alabama</option><option value=\"AK\">Alaska</option><option value=\"AZ\">Arizona</option><option value=\"AR\">Arkansas</option><option value=\"CA\">California</option><option value=\"CO\">Colorado</option><option value=\"CT\">Connecticut</option><option value=\"DE\">Delaware</option><option value=\"DC\">District Of Columbia</option><option value=\"FL\">Florida</option><option value=\"GA\">Georgia</option><option value=\"HI\">Hawaii</option><option value=\"ID\">Idaho</option><option value=\"IL\">Illinois</option><option value=\"IN\">Indiana</option><option value=\"IA\">Iowa</option><option value=\"KS\">Kansas</option><option value=\"KY\">Kentucky</option><option value=\"LA\">Louisiana</option><option value=\"ME\">Maine</option><option value=\"MD\">Maryland</option><option value=\"MA\">Massachusetts</option><option value=\"MI\">Michigan</option><option value=\"MN\">Minnesota</option><option value=\"MS\">Mississippi</option><option value=\"MO\">Missouri</option><option value=\"MT\">Montana</option><option value=\"NE\">Nebraska</option><option value=\"NV\">Nevada</option><option value=\"NH\">New Hampshire</option><option value=\"NJ\">New Jersey</option><option value=\"NM\">New Mexico</option><option value=\"NY\">New York</option><option value=\"NC\">North Carolina</option><option value=\"ND\">North Dakota</option><option value=\"OH\">Ohio</option><option value=\"OK\">Oklahoma</option><option value=\"OR\">Oregon</option><option value=\"PA\">Pennsylvania</option><option value=\"RI\">Rhode Island</option><option value=\"SC\">South Carolina</option><option value=\"SD\">South Dakota</option><option value=\"TN\">Tennessee</option><option value=\"TX\">Texas</option><option value=\"UT\">Utah</option><option value=\"VT\">Vermont</option><option value=\"VA\">Virginia</option><option value=\"WA\">Washington</option><option value=\"WV\">West Virginia</option><option value=\"WI\">Wisconsin</option><option value=\"WY\">Wyoming</option>
    </select>
    <br>
    <label for=\"state\">Zip:</label>
    <input name=\"zip\" required data-parsley-type=\"digits\"
           data-parsley-length=\"[5,5]\"
           data-parsley-zip=\"us\">
  </fieldset>
  <br>
  <input type=\"submit\" value=\"validate\">

  <p><small>* A complete example showing Ajax, promise chaining, dynamic custom error message, interdependent fields.</small></p>
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
        <p>&copy; <a href=\"https://twitter.com/malafortune\" title=\"Marc-André Lafortune on Twitter\">Marc-André Lafortune</a> 2017</p>
      </div>
    </div>

    <script src=\"../../bower_components/jquery/dist/jquery.min.js\"></script>
    <script src=\"../../bower_components/bootstrap/js/affix.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/highlight.js/7.3/highlight.min.js\"></script>

    <script src=\"../../dist/parsley.js\"></script>

    <script class=\"example\">
Parsley.addValidator('zip', {
  validateString: function(value, country) {
    // Zippopotam.us returns a status 404 for incorrect zip codes,
    // so we simply return the ajax request:
    return \$.ajax('//www.zippopotam.us/' + country + '/' + value)
  },
  messages: {en: 'There is no such zip for the country \"%s\"'}
});
Parsley.addValidator('stateAndZip', {
  validateString: function(_ignoreValue, country, instance) {
    var state = instance.\$element.find('[name=\"state\"]').val();
    var zip = instance.\$element.find('[name=\"zip\"]').val();
    var xhr = \$.ajax('//www.zippopotam.us/' + country + '/' + zip)
    // When Zippopotam.us returns the info of the given zip, check it:
    return xhr.then(function(json) {
      var actualState = json.places[0]['state abbreviation'];
      if (actualState !== state) {
        // We could return `false`, but for an even better result
        // we can fail the promise with a custom error message:
        return \$.Deferred().reject(\"The zip code \" + zip + \" is in \" + actualState + \", not in \" + state);
        // Note: in jQuery 3.0+, you can `throw('my custom error')` for the same result
      }
    })
  },
  // The following error message will still show if the xhr itself fails
  // (404 because zip does not exist, network error, etc.)
  messages: {en: 'There is no such zip for the country \"%s\"'}
});
\$(function() {
  \$('.complex').parsley({
    inputs: Parsley.options.inputs + ',fieldset'
  })
});
Parsley.on('form:submit', function() {
  return false; // Don't submit form for this demo
});
    </script>
    <script src=\"../assets/example.js\"></script>
  </body>
</html>
", "node_modules/parsleyjs/doc/examples/ajax.html", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/doc/examples/ajax.html");
    }
}
