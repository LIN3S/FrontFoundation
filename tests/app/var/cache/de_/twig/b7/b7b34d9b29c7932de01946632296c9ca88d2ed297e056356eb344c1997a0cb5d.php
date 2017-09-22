<?php

/* node_modules/fsevents/node_modules/ajv/package.json */
class __TwigTemplate_dba7152dd67d5dc40fb6bb028d0e475699c45dac3a79d32fdd47ae9bd84de24d extends Twig_Template
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
        $__internal_7afda0c316d54ebdcac60082da1c6ffaab555b1eab98723f6e474d0b77a661ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7afda0c316d54ebdcac60082da1c6ffaab555b1eab98723f6e474d0b77a661ff->enter($__internal_7afda0c316d54ebdcac60082da1c6ffaab555b1eab98723f6e474d0b77a661ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/ajv/package.json"));

        // line 1
        echo "{
  \"_args\": [
    [
      \"ajv@4.11.8\",
      \"/Users/eshanker/Code/fsevents\"
    ]
  ],
  \"_from\": \"ajv@4.11.8\",
  \"_id\": \"ajv@4.11.8\",
  \"_inBundle\": false,
  \"_integrity\": \"sha1-gv+wKynmYq5TvcIK8VlHcGc5xTY=\",
  \"_location\": \"/ajv\",
  \"_phantomChildren\": {},
  \"_requested\": {
    \"type\": \"version\",
    \"registry\": true,
    \"raw\": \"ajv@4.11.8\",
    \"name\": \"ajv\",
    \"escapedName\": \"ajv\",
    \"rawSpec\": \"4.11.8\",
    \"saveSpec\": null,
    \"fetchSpec\": \"4.11.8\"
  },
  \"_requiredBy\": [],
  \"_resolved\": \"https://registry.npmjs.org/ajv/-/ajv-4.11.8.tgz\",
  \"_spec\": \"4.11.8\",
  \"_where\": \"/Users/eshanker/Code/fsevents\",
  \"author\": {
    \"name\": \"Evgeny Poberezkin\"
  },
  \"bugs\": {
    \"url\": \"https://github.com/epoberezkin/ajv/issues\"
  },
  \"dependencies\": {
    \"co\": \"^4.6.0\",
    \"json-stable-stringify\": \"^1.0.1\"
  },
  \"description\": \"Another JSON Schema Validator\",
  \"devDependencies\": {
    \"bluebird\": \"^3.1.5\",
    \"brfs\": \"^1.4.3\",
    \"browserify\": \"^14.1.0\",
    \"chai\": \"^3.5.0\",
    \"coveralls\": \"^2.11.4\",
    \"del-cli\": \"^0.2.1\",
    \"dot\": \"^1.0.3\",
    \"eslint\": \"^3.2.2\",
    \"gh-pages-generator\": \"^0.2.0\",
    \"glob\": \"^7.0.0\",
    \"if-node-version\": \"^1.0.0\",
    \"js-beautify\": \"^1.5.6\",
    \"jshint\": \"^2.8.0\",
    \"json-schema-test\": \"^1.1.1\",
    \"karma\": \"^1.0.0\",
    \"karma-chrome-launcher\": \"^2.0.0\",
    \"karma-mocha\": \"^1.1.1\",
    \"karma-phantomjs-launcher\": \"^1.0.0\",
    \"karma-sauce-launcher\": \"^1.1.0\",
    \"mocha\": \"^3.0.0\",
    \"nodent\": \"^3.0.17\",
    \"nyc\": \"^10.0.0\",
    \"phantomjs-prebuilt\": \"^2.1.4\",
    \"pre-commit\": \"^1.1.1\",
    \"regenerator\": \"0.9.7\",
    \"require-globify\": \"^1.3.0\",
    \"typescript\": \"^2.0.3\",
    \"uglify-js\": \"^2.6.1\",
    \"watch\": \"^1.0.0\"
  },
  \"files\": [
    \"lib/\",
    \"dist/\",
    \"scripts/\",
    \"LICENSE\",
    \".tonic_example.js\"
  ],
  \"homepage\": \"https://github.com/epoberezkin/ajv\",
  \"keywords\": [
    \"JSON\",
    \"schema\",
    \"validator\",
    \"validation\",
    \"jsonschema\",
    \"json-schema\",
    \"json-schema-validator\",
    \"json-schema-validation\"
  ],
  \"license\": \"MIT\",
  \"main\": \"lib/ajv.js\",
  \"name\": \"ajv\",
  \"nyc\": {
    \"exclude\": [
      \"**/spec/**\",
      \"node_modules\"
    ],
    \"reporter\": [
      \"lcov\",
      \"text-summary\"
    ]
  },
  \"publishConfig\": {
    \"tag\": \"4.x\"
  },
  \"repository\": {
    \"type\": \"git\",
    \"url\": \"git+https://github.com/epoberezkin/ajv.git\"
  },
  \"scripts\": {
    \"build\": \"del-cli lib/dotjs/*.js && node scripts/compile-dots.js\",
    \"bundle\": \"node ./scripts/bundle.js . Ajv pure_getters\",
    \"bundle-all\": \"del-cli dist && npm run bundle && npm run bundle-regenerator && npm run bundle-nodent\",
    \"bundle-beautify\": \"node ./scripts/bundle.js js-beautify\",
    \"bundle-nodent\": \"node ./scripts/bundle.js nodent\",
    \"bundle-regenerator\": \"node ./scripts/bundle.js regenerator\",
    \"eslint\": \"if-node-version \\\">=4\\\" eslint lib/*.js lib/compile/*.js spec scripts\",
    \"jshint\": \"jshint lib/*.js lib/**/*.js --exclude lib/dotjs/**/*\",
    \"prepublish\": \"npm run build && npm run bundle-all\",
    \"test\": \"npm run jshint && npm run eslint && npm run test-ts && npm run build && npm run test-cov && if-node-version 4 npm run test-browser\",
    \"test-browser\": \"del-cli .browser && npm run bundle-all && scripts/prepare-tests && npm run test-karma\",
    \"test-cov\": \"nyc npm run test-spec\",
    \"test-debug\": \"mocha spec/*.spec.js --debug-brk -R spec\",
    \"test-fast\": \"AJV_FAST_TEST=true npm run test-spec\",
    \"test-karma\": \"karma start --single-run --browsers PhantomJS\",
    \"test-spec\": \"mocha spec/*.spec.js -R spec\",
    \"test-ts\": \"tsc --target ES5 --noImplicitAny lib/ajv.d.ts\",
    \"watch\": \"watch 'npm run build' ./lib/dot\"
  },
  \"tonicExampleFilename\": \".tonic_example.js\",
  \"typings\": \"lib/ajv.d.ts\",
  \"version\": \"4.11.8\",
  \"webpack\": \"dist/ajv.bundle.js\"
}
";
        
        $__internal_7afda0c316d54ebdcac60082da1c6ffaab555b1eab98723f6e474d0b77a661ff->leave($__internal_7afda0c316d54ebdcac60082da1c6ffaab555b1eab98723f6e474d0b77a661ff_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/ajv/package.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
  \"_args\": [
    [
      \"ajv@4.11.8\",
      \"/Users/eshanker/Code/fsevents\"
    ]
  ],
  \"_from\": \"ajv@4.11.8\",
  \"_id\": \"ajv@4.11.8\",
  \"_inBundle\": false,
  \"_integrity\": \"sha1-gv+wKynmYq5TvcIK8VlHcGc5xTY=\",
  \"_location\": \"/ajv\",
  \"_phantomChildren\": {},
  \"_requested\": {
    \"type\": \"version\",
    \"registry\": true,
    \"raw\": \"ajv@4.11.8\",
    \"name\": \"ajv\",
    \"escapedName\": \"ajv\",
    \"rawSpec\": \"4.11.8\",
    \"saveSpec\": null,
    \"fetchSpec\": \"4.11.8\"
  },
  \"_requiredBy\": [],
  \"_resolved\": \"https://registry.npmjs.org/ajv/-/ajv-4.11.8.tgz\",
  \"_spec\": \"4.11.8\",
  \"_where\": \"/Users/eshanker/Code/fsevents\",
  \"author\": {
    \"name\": \"Evgeny Poberezkin\"
  },
  \"bugs\": {
    \"url\": \"https://github.com/epoberezkin/ajv/issues\"
  },
  \"dependencies\": {
    \"co\": \"^4.6.0\",
    \"json-stable-stringify\": \"^1.0.1\"
  },
  \"description\": \"Another JSON Schema Validator\",
  \"devDependencies\": {
    \"bluebird\": \"^3.1.5\",
    \"brfs\": \"^1.4.3\",
    \"browserify\": \"^14.1.0\",
    \"chai\": \"^3.5.0\",
    \"coveralls\": \"^2.11.4\",
    \"del-cli\": \"^0.2.1\",
    \"dot\": \"^1.0.3\",
    \"eslint\": \"^3.2.2\",
    \"gh-pages-generator\": \"^0.2.0\",
    \"glob\": \"^7.0.0\",
    \"if-node-version\": \"^1.0.0\",
    \"js-beautify\": \"^1.5.6\",
    \"jshint\": \"^2.8.0\",
    \"json-schema-test\": \"^1.1.1\",
    \"karma\": \"^1.0.0\",
    \"karma-chrome-launcher\": \"^2.0.0\",
    \"karma-mocha\": \"^1.1.1\",
    \"karma-phantomjs-launcher\": \"^1.0.0\",
    \"karma-sauce-launcher\": \"^1.1.0\",
    \"mocha\": \"^3.0.0\",
    \"nodent\": \"^3.0.17\",
    \"nyc\": \"^10.0.0\",
    \"phantomjs-prebuilt\": \"^2.1.4\",
    \"pre-commit\": \"^1.1.1\",
    \"regenerator\": \"0.9.7\",
    \"require-globify\": \"^1.3.0\",
    \"typescript\": \"^2.0.3\",
    \"uglify-js\": \"^2.6.1\",
    \"watch\": \"^1.0.0\"
  },
  \"files\": [
    \"lib/\",
    \"dist/\",
    \"scripts/\",
    \"LICENSE\",
    \".tonic_example.js\"
  ],
  \"homepage\": \"https://github.com/epoberezkin/ajv\",
  \"keywords\": [
    \"JSON\",
    \"schema\",
    \"validator\",
    \"validation\",
    \"jsonschema\",
    \"json-schema\",
    \"json-schema-validator\",
    \"json-schema-validation\"
  ],
  \"license\": \"MIT\",
  \"main\": \"lib/ajv.js\",
  \"name\": \"ajv\",
  \"nyc\": {
    \"exclude\": [
      \"**/spec/**\",
      \"node_modules\"
    ],
    \"reporter\": [
      \"lcov\",
      \"text-summary\"
    ]
  },
  \"publishConfig\": {
    \"tag\": \"4.x\"
  },
  \"repository\": {
    \"type\": \"git\",
    \"url\": \"git+https://github.com/epoberezkin/ajv.git\"
  },
  \"scripts\": {
    \"build\": \"del-cli lib/dotjs/*.js && node scripts/compile-dots.js\",
    \"bundle\": \"node ./scripts/bundle.js . Ajv pure_getters\",
    \"bundle-all\": \"del-cli dist && npm run bundle && npm run bundle-regenerator && npm run bundle-nodent\",
    \"bundle-beautify\": \"node ./scripts/bundle.js js-beautify\",
    \"bundle-nodent\": \"node ./scripts/bundle.js nodent\",
    \"bundle-regenerator\": \"node ./scripts/bundle.js regenerator\",
    \"eslint\": \"if-node-version \\\">=4\\\" eslint lib/*.js lib/compile/*.js spec scripts\",
    \"jshint\": \"jshint lib/*.js lib/**/*.js --exclude lib/dotjs/**/*\",
    \"prepublish\": \"npm run build && npm run bundle-all\",
    \"test\": \"npm run jshint && npm run eslint && npm run test-ts && npm run build && npm run test-cov && if-node-version 4 npm run test-browser\",
    \"test-browser\": \"del-cli .browser && npm run bundle-all && scripts/prepare-tests && npm run test-karma\",
    \"test-cov\": \"nyc npm run test-spec\",
    \"test-debug\": \"mocha spec/*.spec.js --debug-brk -R spec\",
    \"test-fast\": \"AJV_FAST_TEST=true npm run test-spec\",
    \"test-karma\": \"karma start --single-run --browsers PhantomJS\",
    \"test-spec\": \"mocha spec/*.spec.js -R spec\",
    \"test-ts\": \"tsc --target ES5 --noImplicitAny lib/ajv.d.ts\",
    \"watch\": \"watch 'npm run build' ./lib/dot\"
  },
  \"tonicExampleFilename\": \".tonic_example.js\",
  \"typings\": \"lib/ajv.d.ts\",
  \"version\": \"4.11.8\",
  \"webpack\": \"dist/ajv.bundle.js\"
}
", "node_modules/fsevents/node_modules/ajv/package.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/ajv/package.json");
    }
}
