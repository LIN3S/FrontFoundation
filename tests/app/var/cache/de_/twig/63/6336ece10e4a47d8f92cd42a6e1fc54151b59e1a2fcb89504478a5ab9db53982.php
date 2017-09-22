<?php

/* node_modules/babel-loader/package.json */
class __TwigTemplate_5570e6e7d3ed3ab52b81ad68223ce651b70520a458aad9584d18176623d2f83e extends Twig_Template
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
        $__internal_5fb7b7020060a3f0ed9a342ab54ae84dc105140d0f2d9791b8f766e0fd8cb9eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fb7b7020060a3f0ed9a342ab54ae84dc105140d0f2d9791b8f766e0fd8cb9eb->enter($__internal_5fb7b7020060a3f0ed9a342ab54ae84dc105140d0f2d9791b8f766e0fd8cb9eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-loader/package.json"));

        // line 1
        echo "{
  \"name\": \"babel-loader\",
  \"version\": \"7.1.2\",
  \"description\": \"babel module loader for webpack\",
  \"files\": [
    \"lib\"
  ],
  \"main\": \"lib/index.js\",
  \"engines\": {
    \"node\": \">=4\"
  },
  \"dependencies\": {
    \"find-cache-dir\": \"^1.0.0\",
    \"loader-utils\": \"^1.0.2\",
    \"mkdirp\": \"^0.5.1\"
  },
  \"peerDependencies\": {
    \"babel-core\": \"6 || 7 || ^7.0.0-alpha || ^7.0.0-beta || ^7.0.0-rc\",
    \"webpack\": \"2 || 3\"
  },
  \"devDependencies\": {
    \"ava\": \"^0.22.0\",
    \"babel-cli\": \"^6.18.0\",
    \"babel-core\": \"^6.0.0\",
    \"babel-eslint\": \"^7.1.0\",
    \"babel-plugin-istanbul\": \"^4.0.0\",
    \"babel-plugin-react-intl\": \"^2.1.3\",
    \"babel-preset-env\": \"^1.2.0\",
    \"babel-register\": \"^6.18.0\",
    \"cross-env\": \"^5.0.0\",
    \"eslint\": \"^4.1.0\",
    \"eslint-config-babel\": \"^7.0.0\",
    \"eslint-plugin-flowtype\": \"^2.25.0\",
    \"eslint-plugin-prettier\": \"^2.1.2\",
    \"husky\": \"^0.14.0\",
    \"lint-staged\": \"^4.0.0\",
    \"nyc\": \"^11.0.1\",
    \"prettier\": \"^1.2.2\",
    \"react\": \"^15.1.0\",
    \"react-intl\": \"^2.1.2\",
    \"react-intl-webpack-plugin\": \"^0.0.3\",
    \"rimraf\": \"^2.4.3\",
    \"webpack\": \"^3.0.0\"
  },
  \"scripts\": {
    \"clean\": \"rimraf lib/\",
    \"build\": \"babel src/ --out-dir lib/\",
    \"format\": \"prettier --write --trailing-comma all \\\"src/**/*.js\\\" \\\"test/**/*.test.js\\\" \\\"test/helpers/*.js\\\" && prettier --write --trailing-comma es5 \\\"scripts/*.js\\\"\",
    \"lint\": \"eslint src test\",
    \"precommit\": \"lint-staged\",
    \"prepublish\": \"yarn run clean && yarn run build\",
    \"preversion\": \"yarn run test\",
    \"test\": \"yarn run lint && cross-env BABEL_ENV=test yarn run build && yarn run test-only\",
    \"test-only\": \"nyc ava\"
  },
  \"repository\": {
    \"type\": \"git\",
    \"url\": \"https://github.com/babel/babel-loader.git\"
  },
  \"keywords\": [
    \"webpack\",
    \"loader\",
    \"babel\",
    \"es6\",
    \"transpiler\",
    \"module\"
  ],
  \"author\": \"Luis Couto <hello@luiscouto.pt>\",
  \"license\": \"MIT\",
  \"bugs\": {
    \"url\": \"https://github.com/babel/babel-loader/issues\"
  },
  \"homepage\": \"https://github.com/babel/babel-loader\",
  \"nyc\": {
    \"all\": true,
    \"include\": [
      \"src/**/*.js\"
    ],
    \"reporter\": [
      \"text\",
      \"json\"
    ],
    \"require\": [
      \"babel-register\"
    ],
    \"sourceMap\": false,
    \"instrument\": false
  },
  \"ava\": {
    \"files\": [
      \"test/**/*.test.js\",
      \"!test/fixtures/**/*\",
      \"!test/helpers/**/*\"
    ],
    \"source\": [
      \"src/**/*.js\"
    ],
    \"babel\": \"inherit\"
  },
  \"lint-staged\": {
    \"scripts/*.js\": [
      \"prettier --trailing-comma es5 --write\",
      \"git add\"
    ],
    \"src/**/*.js\": [
      \"prettier --trailing-comma all --write\",
      \"git add\"
    ],
    \"test/**/*.test.js\": [
      \"prettier --trailing-comma all --write\",
      \"git add\"
    ],
    \"test/helpers/*.js\": [
      \"prettier --trailing-comma all --write\",
      \"git add\"
    ],
    \"package.json\": [
      \"node ./scripts/yarn-install.js\",
      \"git add yarn.lock\"
    ]
  }
}
";
        
        $__internal_5fb7b7020060a3f0ed9a342ab54ae84dc105140d0f2d9791b8f766e0fd8cb9eb->leave($__internal_5fb7b7020060a3f0ed9a342ab54ae84dc105140d0f2d9791b8f766e0fd8cb9eb_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-loader/package.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
  \"name\": \"babel-loader\",
  \"version\": \"7.1.2\",
  \"description\": \"babel module loader for webpack\",
  \"files\": [
    \"lib\"
  ],
  \"main\": \"lib/index.js\",
  \"engines\": {
    \"node\": \">=4\"
  },
  \"dependencies\": {
    \"find-cache-dir\": \"^1.0.0\",
    \"loader-utils\": \"^1.0.2\",
    \"mkdirp\": \"^0.5.1\"
  },
  \"peerDependencies\": {
    \"babel-core\": \"6 || 7 || ^7.0.0-alpha || ^7.0.0-beta || ^7.0.0-rc\",
    \"webpack\": \"2 || 3\"
  },
  \"devDependencies\": {
    \"ava\": \"^0.22.0\",
    \"babel-cli\": \"^6.18.0\",
    \"babel-core\": \"^6.0.0\",
    \"babel-eslint\": \"^7.1.0\",
    \"babel-plugin-istanbul\": \"^4.0.0\",
    \"babel-plugin-react-intl\": \"^2.1.3\",
    \"babel-preset-env\": \"^1.2.0\",
    \"babel-register\": \"^6.18.0\",
    \"cross-env\": \"^5.0.0\",
    \"eslint\": \"^4.1.0\",
    \"eslint-config-babel\": \"^7.0.0\",
    \"eslint-plugin-flowtype\": \"^2.25.0\",
    \"eslint-plugin-prettier\": \"^2.1.2\",
    \"husky\": \"^0.14.0\",
    \"lint-staged\": \"^4.0.0\",
    \"nyc\": \"^11.0.1\",
    \"prettier\": \"^1.2.2\",
    \"react\": \"^15.1.0\",
    \"react-intl\": \"^2.1.2\",
    \"react-intl-webpack-plugin\": \"^0.0.3\",
    \"rimraf\": \"^2.4.3\",
    \"webpack\": \"^3.0.0\"
  },
  \"scripts\": {
    \"clean\": \"rimraf lib/\",
    \"build\": \"babel src/ --out-dir lib/\",
    \"format\": \"prettier --write --trailing-comma all \\\"src/**/*.js\\\" \\\"test/**/*.test.js\\\" \\\"test/helpers/*.js\\\" && prettier --write --trailing-comma es5 \\\"scripts/*.js\\\"\",
    \"lint\": \"eslint src test\",
    \"precommit\": \"lint-staged\",
    \"prepublish\": \"yarn run clean && yarn run build\",
    \"preversion\": \"yarn run test\",
    \"test\": \"yarn run lint && cross-env BABEL_ENV=test yarn run build && yarn run test-only\",
    \"test-only\": \"nyc ava\"
  },
  \"repository\": {
    \"type\": \"git\",
    \"url\": \"https://github.com/babel/babel-loader.git\"
  },
  \"keywords\": [
    \"webpack\",
    \"loader\",
    \"babel\",
    \"es6\",
    \"transpiler\",
    \"module\"
  ],
  \"author\": \"Luis Couto <hello@luiscouto.pt>\",
  \"license\": \"MIT\",
  \"bugs\": {
    \"url\": \"https://github.com/babel/babel-loader/issues\"
  },
  \"homepage\": \"https://github.com/babel/babel-loader\",
  \"nyc\": {
    \"all\": true,
    \"include\": [
      \"src/**/*.js\"
    ],
    \"reporter\": [
      \"text\",
      \"json\"
    ],
    \"require\": [
      \"babel-register\"
    ],
    \"sourceMap\": false,
    \"instrument\": false
  },
  \"ava\": {
    \"files\": [
      \"test/**/*.test.js\",
      \"!test/fixtures/**/*\",
      \"!test/helpers/**/*\"
    ],
    \"source\": [
      \"src/**/*.js\"
    ],
    \"babel\": \"inherit\"
  },
  \"lint-staged\": {
    \"scripts/*.js\": [
      \"prettier --trailing-comma es5 --write\",
      \"git add\"
    ],
    \"src/**/*.js\": [
      \"prettier --trailing-comma all --write\",
      \"git add\"
    ],
    \"test/**/*.test.js\": [
      \"prettier --trailing-comma all --write\",
      \"git add\"
    ],
    \"test/helpers/*.js\": [
      \"prettier --trailing-comma all --write\",
      \"git add\"
    ],
    \"package.json\": [
      \"node ./scripts/yarn-install.js\",
      \"git add yarn.lock\"
    ]
  }
}
", "node_modules/babel-loader/package.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-loader/package.json");
    }
}
