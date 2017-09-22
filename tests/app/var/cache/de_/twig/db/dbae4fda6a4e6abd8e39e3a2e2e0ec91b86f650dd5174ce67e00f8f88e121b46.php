<?php

/* node_modules/async/package.json */
class __TwigTemplate_1bcfb621246b1956c2f05e95a9116bb2215918437545d5983a91199a06a251a2 extends Twig_Template
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
        $__internal_4df32ea120ce0c3be5bce049775c7bbbbed8f3f4041466902215640fd311a4ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4df32ea120ce0c3be5bce049775c7bbbbed8f3f4041466902215640fd311a4ba->enter($__internal_4df32ea120ce0c3be5bce049775c7bbbbed8f3f4041466902215640fd311a4ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/async/package.json"));

        // line 1
        echo "{
  \"name\": \"async\",
  \"description\": \"Higher-order functions and common patterns for asynchronous code\",
  \"version\": \"2.5.0\",
  \"main\": \"dist/async.js\",
  \"author\": \"Caolan McMahon\",
  \"repository\": {
    \"type\": \"git\",
    \"url\": \"https://github.com/caolan/async.git\"
  },
  \"bugs\": {
    \"url\": \"https://github.com/caolan/async/issues\"
  },
  \"keywords\": [
    \"async\",
    \"callback\",
    \"module\",
    \"utility\"
  ],
  \"dependencies\": {
    \"lodash\": \"^4.14.0\"
  },
  \"devDependencies\": {
    \"babel-cli\": \"^6.24.0\",
    \"babel-core\": \"^6.24.0\",
    \"babel-plugin-add-module-exports\": \"^0.2.1\",
    \"babel-plugin-istanbul\": \"^2.0.1\",
    \"babel-plugin-transform-es2015-modules-commonjs\": \"^6.3.16\",
    \"babel-preset-es2015\": \"^6.3.13\",
    \"babel-preset-es2017\": \"^6.22.0\",
    \"babelify\": \"^7.2.0\",
    \"benchmark\": \"^2.1.1\",
    \"bluebird\": \"^3.4.6\",
    \"chai\": \"^3.1.0\",
    \"cheerio\": \"^0.22.0\",
    \"coveralls\": \"^2.11.2\",
    \"es6-promise\": \"^2.3.0\",
    \"eslint\": \"^2.13.1\",
    \"fs-extra\": \"^0.26.7\",
    \"gh-pages-deploy\": \"^0.4.2\",
    \"jsdoc\": \"^3.4.0\",
    \"karma\": \"^1.3.0\",
    \"karma-browserify\": \"^5.1.0\",
    \"karma-firefox-launcher\": \"^1.0.0\",
    \"karma-mocha\": \"^1.2.0\",
    \"karma-mocha-reporter\": \"^2.2.0\",
    \"mocha\": \"^3.1.2\",
    \"native-promise-only\": \"^0.8.0-a\",
    \"nyc\": \"^7.0.0\",
    \"recursive-readdir\": \"^1.3.0\",
    \"rimraf\": \"^2.5.0\",
    \"rollup\": \"^0.36.3\",
    \"rollup-plugin-node-resolve\": \"^2.0.0\",
    \"rollup-plugin-npm\": \"^2.0.0\",
    \"rsvp\": \"^3.0.18\",
    \"semver\": \"^4.3.6\",
    \"uglify-js\": \"~2.7.3\",
    \"vinyl-buffer\": \"^1.0.0\",
    \"vinyl-source-stream\": \"^1.1.0\",
    \"watchify\": \"^3.7.0\",
    \"yargs\": \"~3.9.1\"
  },
  \"scripts\": {
    \"coverage\": \"nyc npm run mocha-node-test -- --grep @nycinvalid --invert\",
    \"coveralls\": \"npm run coverage && nyc report --reporter=text-lcov | coveralls\",
    \"jsdoc\": \"jsdoc -c ./support/jsdoc/jsdoc.json && node support/jsdoc/jsdoc-fix-html.js\",
    \"lint\": \"eslint lib/ mocha_test/ perf/memory.js perf/suites.js perf/benchmark.js support/build/ support/*.js karma.conf.js\",
    \"mocha-browser-test\": \"karma start\",
    \"mocha-node-test\": \"mocha mocha_test/ --compilers js:babel-core/register\",
    \"mocha-test\": \"npm run mocha-node-test && npm run mocha-browser-test\",
    \"test\": \"npm run lint && npm run mocha-node-test\"
  },
  \"license\": \"MIT\",
  \"gh-pages-deploy\": {
    \"staticpath\": \"docs\"
  },
  \"nyc\": {
    \"exclude\": [
      \"mocha_test\"
    ]
  }
}";
        
        $__internal_4df32ea120ce0c3be5bce049775c7bbbbed8f3f4041466902215640fd311a4ba->leave($__internal_4df32ea120ce0c3be5bce049775c7bbbbed8f3f4041466902215640fd311a4ba_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/async/package.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
  \"name\": \"async\",
  \"description\": \"Higher-order functions and common patterns for asynchronous code\",
  \"version\": \"2.5.0\",
  \"main\": \"dist/async.js\",
  \"author\": \"Caolan McMahon\",
  \"repository\": {
    \"type\": \"git\",
    \"url\": \"https://github.com/caolan/async.git\"
  },
  \"bugs\": {
    \"url\": \"https://github.com/caolan/async/issues\"
  },
  \"keywords\": [
    \"async\",
    \"callback\",
    \"module\",
    \"utility\"
  ],
  \"dependencies\": {
    \"lodash\": \"^4.14.0\"
  },
  \"devDependencies\": {
    \"babel-cli\": \"^6.24.0\",
    \"babel-core\": \"^6.24.0\",
    \"babel-plugin-add-module-exports\": \"^0.2.1\",
    \"babel-plugin-istanbul\": \"^2.0.1\",
    \"babel-plugin-transform-es2015-modules-commonjs\": \"^6.3.16\",
    \"babel-preset-es2015\": \"^6.3.13\",
    \"babel-preset-es2017\": \"^6.22.0\",
    \"babelify\": \"^7.2.0\",
    \"benchmark\": \"^2.1.1\",
    \"bluebird\": \"^3.4.6\",
    \"chai\": \"^3.1.0\",
    \"cheerio\": \"^0.22.0\",
    \"coveralls\": \"^2.11.2\",
    \"es6-promise\": \"^2.3.0\",
    \"eslint\": \"^2.13.1\",
    \"fs-extra\": \"^0.26.7\",
    \"gh-pages-deploy\": \"^0.4.2\",
    \"jsdoc\": \"^3.4.0\",
    \"karma\": \"^1.3.0\",
    \"karma-browserify\": \"^5.1.0\",
    \"karma-firefox-launcher\": \"^1.0.0\",
    \"karma-mocha\": \"^1.2.0\",
    \"karma-mocha-reporter\": \"^2.2.0\",
    \"mocha\": \"^3.1.2\",
    \"native-promise-only\": \"^0.8.0-a\",
    \"nyc\": \"^7.0.0\",
    \"recursive-readdir\": \"^1.3.0\",
    \"rimraf\": \"^2.5.0\",
    \"rollup\": \"^0.36.3\",
    \"rollup-plugin-node-resolve\": \"^2.0.0\",
    \"rollup-plugin-npm\": \"^2.0.0\",
    \"rsvp\": \"^3.0.18\",
    \"semver\": \"^4.3.6\",
    \"uglify-js\": \"~2.7.3\",
    \"vinyl-buffer\": \"^1.0.0\",
    \"vinyl-source-stream\": \"^1.1.0\",
    \"watchify\": \"^3.7.0\",
    \"yargs\": \"~3.9.1\"
  },
  \"scripts\": {
    \"coverage\": \"nyc npm run mocha-node-test -- --grep @nycinvalid --invert\",
    \"coveralls\": \"npm run coverage && nyc report --reporter=text-lcov | coveralls\",
    \"jsdoc\": \"jsdoc -c ./support/jsdoc/jsdoc.json && node support/jsdoc/jsdoc-fix-html.js\",
    \"lint\": \"eslint lib/ mocha_test/ perf/memory.js perf/suites.js perf/benchmark.js support/build/ support/*.js karma.conf.js\",
    \"mocha-browser-test\": \"karma start\",
    \"mocha-node-test\": \"mocha mocha_test/ --compilers js:babel-core/register\",
    \"mocha-test\": \"npm run mocha-node-test && npm run mocha-browser-test\",
    \"test\": \"npm run lint && npm run mocha-node-test\"
  },
  \"license\": \"MIT\",
  \"gh-pages-deploy\": {
    \"staticpath\": \"docs\"
  },
  \"nyc\": {
    \"exclude\": [
      \"mocha_test\"
    ]
  }
}", "node_modules/async/package.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/async/package.json");
    }
}
