<?php

/* node_modules/form-data/package.json */
class __TwigTemplate_32d45e759cadb48f96ac80c07a47d062d5eb763862a8fa0eccd835b7750d1895 extends Twig_Template
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
        $__internal_d1a34fbfe19ab2b5a5c21a29bc690b84fb6ee12a78b9c8ccdf6f8583eed4fd23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1a34fbfe19ab2b5a5c21a29bc690b84fb6ee12a78b9c8ccdf6f8583eed4fd23->enter($__internal_d1a34fbfe19ab2b5a5c21a29bc690b84fb6ee12a78b9c8ccdf6f8583eed4fd23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/form-data/package.json"));

        // line 1
        echo "{
  \"author\": \"Felix Geisendörfer <felix@debuggable.com> (http://debuggable.com/)\",
  \"name\": \"form-data\",
  \"description\": \"A library to create readable \\\"multipart/form-data\\\" streams. Can be used to submit forms and file uploads to other web applications.\",
  \"version\": \"2.1.4\",
  \"repository\": {
    \"type\": \"git\",
    \"url\": \"git://github.com/form-data/form-data.git\"
  },
  \"main\": \"./lib/form_data\",
  \"browser\": \"./lib/browser\",
  \"scripts\": {
    \"pretest\": \"rimraf coverage test/tmp\",
    \"test\": \"istanbul cover test/run.js\",
    \"posttest\": \"istanbul report lcov text\",
    \"lint\": \"eslint lib/*.js test/*.js test/integration/*.js\",
    \"report\": \"istanbul report lcov text\",
    \"ci-lint\": \"is-node-modern 6 && npm run lint || is-node-not-modern 6\",
    \"ci-test\": \"npm run test && npm run browser && npm run report\",
    \"predebug\": \"rimraf coverage test/tmp\",
    \"debug\": \"verbose=1 ./test/run.js\",
    \"browser\": \"browserify -t browserify-istanbul test/run-browser.js | obake --coverage\",
    \"check\": \"istanbul check-coverage coverage/coverage*.json\",
    \"files\": \"pkgfiles --sort=name\",
    \"get-version\": \"node -e \\\"console.log(require('./package.json').version)\\\"\",
    \"update-readme\": \"sed -i.bak 's/\\\\/master\\\\.svg/\\\\/v'\$(npm --silent run get-version)'.svg/g' README.md\",
    \"restore-readme\": \"mv README.md.bak README.md\",
    \"prepublish\": \"in-publish && npm run update-readme || not-in-publish\",
    \"postpublish\": \"npm run restore-readme\"
  },
  \"pre-commit\": [
    \"lint\",
    \"ci-test\",
    \"check\"
  ],
  \"engines\": {
    \"node\": \">= 0.12\"
  },
  \"dependencies\": {
    \"asynckit\": \"^0.4.0\",
    \"combined-stream\": \"^1.0.5\",
    \"mime-types\": \"^2.1.12\"
  },
  \"devDependencies\": {
    \"browserify\": \"^13.1.1\",
    \"browserify-istanbul\": \"^2.0.0\",
    \"coveralls\": \"^2.11.14\",
    \"cross-spawn\": \"^4.0.2\",
    \"eslint\": \"^3.9.1\",
    \"fake\": \"^0.2.2\",
    \"far\": \"^0.0.7\",
    \"formidable\": \"^1.0.17\",
    \"in-publish\": \"^2.0.0\",
    \"is-node-modern\": \"^1.0.0\",
    \"istanbul\": \"^0.4.5\",
    \"obake\": \"^0.1.2\",
    \"phantomjs-prebuilt\": \"^2.1.13\",
    \"pkgfiles\": \"^2.3.0\",
    \"pre-commit\": \"^1.1.3\",
    \"request\": \"2.76.0\",
    \"rimraf\": \"^2.5.4\",
    \"tape\": \"^4.6.2\"
  },
  \"license\": \"MIT\"
}
";
        
        $__internal_d1a34fbfe19ab2b5a5c21a29bc690b84fb6ee12a78b9c8ccdf6f8583eed4fd23->leave($__internal_d1a34fbfe19ab2b5a5c21a29bc690b84fb6ee12a78b9c8ccdf6f8583eed4fd23_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/form-data/package.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
  \"author\": \"Felix Geisendörfer <felix@debuggable.com> (http://debuggable.com/)\",
  \"name\": \"form-data\",
  \"description\": \"A library to create readable \\\"multipart/form-data\\\" streams. Can be used to submit forms and file uploads to other web applications.\",
  \"version\": \"2.1.4\",
  \"repository\": {
    \"type\": \"git\",
    \"url\": \"git://github.com/form-data/form-data.git\"
  },
  \"main\": \"./lib/form_data\",
  \"browser\": \"./lib/browser\",
  \"scripts\": {
    \"pretest\": \"rimraf coverage test/tmp\",
    \"test\": \"istanbul cover test/run.js\",
    \"posttest\": \"istanbul report lcov text\",
    \"lint\": \"eslint lib/*.js test/*.js test/integration/*.js\",
    \"report\": \"istanbul report lcov text\",
    \"ci-lint\": \"is-node-modern 6 && npm run lint || is-node-not-modern 6\",
    \"ci-test\": \"npm run test && npm run browser && npm run report\",
    \"predebug\": \"rimraf coverage test/tmp\",
    \"debug\": \"verbose=1 ./test/run.js\",
    \"browser\": \"browserify -t browserify-istanbul test/run-browser.js | obake --coverage\",
    \"check\": \"istanbul check-coverage coverage/coverage*.json\",
    \"files\": \"pkgfiles --sort=name\",
    \"get-version\": \"node -e \\\"console.log(require('./package.json').version)\\\"\",
    \"update-readme\": \"sed -i.bak 's/\\\\/master\\\\.svg/\\\\/v'\$(npm --silent run get-version)'.svg/g' README.md\",
    \"restore-readme\": \"mv README.md.bak README.md\",
    \"prepublish\": \"in-publish && npm run update-readme || not-in-publish\",
    \"postpublish\": \"npm run restore-readme\"
  },
  \"pre-commit\": [
    \"lint\",
    \"ci-test\",
    \"check\"
  ],
  \"engines\": {
    \"node\": \">= 0.12\"
  },
  \"dependencies\": {
    \"asynckit\": \"^0.4.0\",
    \"combined-stream\": \"^1.0.5\",
    \"mime-types\": \"^2.1.12\"
  },
  \"devDependencies\": {
    \"browserify\": \"^13.1.1\",
    \"browserify-istanbul\": \"^2.0.0\",
    \"coveralls\": \"^2.11.14\",
    \"cross-spawn\": \"^4.0.2\",
    \"eslint\": \"^3.9.1\",
    \"fake\": \"^0.2.2\",
    \"far\": \"^0.0.7\",
    \"formidable\": \"^1.0.17\",
    \"in-publish\": \"^2.0.0\",
    \"is-node-modern\": \"^1.0.0\",
    \"istanbul\": \"^0.4.5\",
    \"obake\": \"^0.1.2\",
    \"phantomjs-prebuilt\": \"^2.1.13\",
    \"pkgfiles\": \"^2.3.0\",
    \"pre-commit\": \"^1.1.3\",
    \"request\": \"2.76.0\",
    \"rimraf\": \"^2.5.4\",
    \"tape\": \"^4.6.2\"
  },
  \"license\": \"MIT\"
}
", "node_modules/form-data/package.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/form-data/package.json");
    }
}
