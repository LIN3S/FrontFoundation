<?php

/* node_modules/babel-loader/lib/index.js */
class __TwigTemplate_6702f977a46adf52db9a9d18c08204e2e1154f4e3a6416609139510ae6cf827b extends Twig_Template
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
        $__internal_172643704d40ba015850796e7523a52c58d2326965bb1476d38bdc1f5c44ad20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_172643704d40ba015850796e7523a52c58d2326965bb1476d38bdc1f5c44ad20->enter($__internal_172643704d40ba015850796e7523a52c58d2326965bb1476d38bdc1f5c44ad20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-loader/lib/index.js"));

        // line 1
        echo "\"use strict\";

var babel = require(\"babel-core\");
var loaderUtils = require(\"loader-utils\");
var path = require(\"path\");
var cache = require(\"./fs-cache.js\");
var exists = require(\"./utils/exists\");
var relative = require(\"./utils/relative\");
var read = require(\"./utils/read\");
var resolveRc = require(\"./resolve-rc.js\");
var pkg = require(\"../package.json\");
var fs = require(\"fs\");

/**
 * Error thrown by Babel formatted to conform to Webpack reporting.
 */
function BabelLoaderError(name, message, codeFrame, hideStack, error) {
  Error.call(this);

  this.name = \"BabelLoaderError\";
  this.message = formatMessage(name, message, codeFrame);
  this.hideStack = hideStack;
  this.error = error;

  Error.captureStackTrace(this, BabelLoaderError);
}

BabelLoaderError.prototype = Object.create(Error.prototype);
BabelLoaderError.prototype.constructor = BabelLoaderError;

var STRIP_FILENAME_RE = /^[^:]+: /;

var formatMessage = function formatMessage(name, message, codeFrame) {
  return (name ? name + \": \" : \"\") + message + \"\\n\\n\" + codeFrame + \"\\n\";
};

var transpile = function transpile(source, options) {
  var forceEnv = options.forceEnv;
  var tmpEnv = void 0;

  delete options.forceEnv;

  if (forceEnv) {
    tmpEnv = process.env.BABEL_ENV;
    process.env.BABEL_ENV = forceEnv;
  }

  var result = void 0;
  try {
    result = babel.transform(source, options);
  } catch (error) {
    if (forceEnv) restoreBabelEnv(tmpEnv);
    if (error.message && error.codeFrame) {
      var message = error.message;
      var name = void 0;
      var hideStack = void 0;
      if (error instanceof SyntaxError) {
        message = message.replace(STRIP_FILENAME_RE, \"\");
        name = \"SyntaxError\";
        hideStack = true;
      } else if (error instanceof TypeError) {
        message = message.replace(STRIP_FILENAME_RE, \"\");
        hideStack = true;
      }
      throw new BabelLoaderError(name, message, error.codeFrame, hideStack, error);
    } else {
      throw error;
    }
  }
  var code = result.code;
  var map = result.map;
  var metadata = result.metadata;

  if (map && (!map.sourcesContent || !map.sourcesContent.length)) {
    map.sourcesContent = [source];
  }

  if (forceEnv) restoreBabelEnv(tmpEnv);

  return {
    code: code,
    map: map,
    metadata: metadata
  };
};

function restoreBabelEnv(prevValue) {
  if (prevValue === undefined) {
    delete process.env.BABEL_ENV;
  } else {
    process.env.BABEL_ENV = prevValue;
  }
}

function passMetadata(s, context, metadata) {
  if (context[s]) {
    context[s](metadata);
  }
}

module.exports = function (source, inputSourceMap) {
  var _this = this;

  // Handle filenames (#106)
  var webpackRemainingChain = loaderUtils.getRemainingRequest(this).split(\"!\");
  var filename = webpackRemainingChain[webpackRemainingChain.length - 1];

  // Handle options
  var loaderOptions = loaderUtils.getOptions(this) || {};
  var fileSystem = this.fs ? this.fs : fs;
  var babelrcPath = null;
  if (loaderOptions.babelrc !== false) {
    babelrcPath = typeof loaderOptions.babelrc === \"string\" && exists(fileSystem, loaderOptions.babelrc) ? loaderOptions.babelrc : resolveRc(fileSystem, path.dirname(filename));
  }

  if (babelrcPath) {
    this.addDependency(babelrcPath);
  }

  var defaultOptions = {
    metadataSubscribers: [],
    inputSourceMap: inputSourceMap,
    sourceRoot: process.cwd(),
    filename: filename,
    cacheIdentifier: JSON.stringify({
      \"babel-loader\": pkg.version,
      \"babel-core\": babel.version,
      babelrc: babelrcPath ? read(fileSystem, babelrcPath) : null,
      env: loaderOptions.forceEnv || process.env.BABEL_ENV || process.env.NODE_ENV || \"development\"
    })
  };

  var options = Object.assign({}, defaultOptions, loaderOptions);

  if (loaderOptions.sourceMap === undefined) {
    options.sourceMap = this.sourceMap;
  }

  if (options.sourceFileName === undefined) {
    options.sourceFileName = relative(options.sourceRoot, options.filename);
  }

  var cacheDirectory = options.cacheDirectory;
  var cacheIdentifier = options.cacheIdentifier;
  var metadataSubscribers = options.metadataSubscribers;

  delete options.cacheDirectory;
  delete options.cacheIdentifier;
  delete options.metadataSubscribers;

  if (cacheDirectory) {
    var callback = this.async();
    return cache({
      directory: cacheDirectory,
      identifier: cacheIdentifier,
      source: source,
      options: options,
      transform: transpile
    }, function (err) {
      var _ref = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : {},
          code = _ref.code,
          map = _ref.map,
          metadata = _ref.metadata;

      if (err) return callback(err);

      metadataSubscribers.forEach(function (s) {
        return passMetadata(s, _this, metadata);
      });

      return callback(null, code, map);
    });
  }

  var _transpile = transpile(source, options),
      code = _transpile.code,
      map = _transpile.map,
      metadata = _transpile.metadata;

  metadataSubscribers.forEach(function (s) {
    return passMetadata(s, _this, metadata);
  });

  this.callback(null, code, map);
};";
        
        $__internal_172643704d40ba015850796e7523a52c58d2326965bb1476d38bdc1f5c44ad20->leave($__internal_172643704d40ba015850796e7523a52c58d2326965bb1476d38bdc1f5c44ad20_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-loader/lib/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var babel = require(\"babel-core\");
var loaderUtils = require(\"loader-utils\");
var path = require(\"path\");
var cache = require(\"./fs-cache.js\");
var exists = require(\"./utils/exists\");
var relative = require(\"./utils/relative\");
var read = require(\"./utils/read\");
var resolveRc = require(\"./resolve-rc.js\");
var pkg = require(\"../package.json\");
var fs = require(\"fs\");

/**
 * Error thrown by Babel formatted to conform to Webpack reporting.
 */
function BabelLoaderError(name, message, codeFrame, hideStack, error) {
  Error.call(this);

  this.name = \"BabelLoaderError\";
  this.message = formatMessage(name, message, codeFrame);
  this.hideStack = hideStack;
  this.error = error;

  Error.captureStackTrace(this, BabelLoaderError);
}

BabelLoaderError.prototype = Object.create(Error.prototype);
BabelLoaderError.prototype.constructor = BabelLoaderError;

var STRIP_FILENAME_RE = /^[^:]+: /;

var formatMessage = function formatMessage(name, message, codeFrame) {
  return (name ? name + \": \" : \"\") + message + \"\\n\\n\" + codeFrame + \"\\n\";
};

var transpile = function transpile(source, options) {
  var forceEnv = options.forceEnv;
  var tmpEnv = void 0;

  delete options.forceEnv;

  if (forceEnv) {
    tmpEnv = process.env.BABEL_ENV;
    process.env.BABEL_ENV = forceEnv;
  }

  var result = void 0;
  try {
    result = babel.transform(source, options);
  } catch (error) {
    if (forceEnv) restoreBabelEnv(tmpEnv);
    if (error.message && error.codeFrame) {
      var message = error.message;
      var name = void 0;
      var hideStack = void 0;
      if (error instanceof SyntaxError) {
        message = message.replace(STRIP_FILENAME_RE, \"\");
        name = \"SyntaxError\";
        hideStack = true;
      } else if (error instanceof TypeError) {
        message = message.replace(STRIP_FILENAME_RE, \"\");
        hideStack = true;
      }
      throw new BabelLoaderError(name, message, error.codeFrame, hideStack, error);
    } else {
      throw error;
    }
  }
  var code = result.code;
  var map = result.map;
  var metadata = result.metadata;

  if (map && (!map.sourcesContent || !map.sourcesContent.length)) {
    map.sourcesContent = [source];
  }

  if (forceEnv) restoreBabelEnv(tmpEnv);

  return {
    code: code,
    map: map,
    metadata: metadata
  };
};

function restoreBabelEnv(prevValue) {
  if (prevValue === undefined) {
    delete process.env.BABEL_ENV;
  } else {
    process.env.BABEL_ENV = prevValue;
  }
}

function passMetadata(s, context, metadata) {
  if (context[s]) {
    context[s](metadata);
  }
}

module.exports = function (source, inputSourceMap) {
  var _this = this;

  // Handle filenames (#106)
  var webpackRemainingChain = loaderUtils.getRemainingRequest(this).split(\"!\");
  var filename = webpackRemainingChain[webpackRemainingChain.length - 1];

  // Handle options
  var loaderOptions = loaderUtils.getOptions(this) || {};
  var fileSystem = this.fs ? this.fs : fs;
  var babelrcPath = null;
  if (loaderOptions.babelrc !== false) {
    babelrcPath = typeof loaderOptions.babelrc === \"string\" && exists(fileSystem, loaderOptions.babelrc) ? loaderOptions.babelrc : resolveRc(fileSystem, path.dirname(filename));
  }

  if (babelrcPath) {
    this.addDependency(babelrcPath);
  }

  var defaultOptions = {
    metadataSubscribers: [],
    inputSourceMap: inputSourceMap,
    sourceRoot: process.cwd(),
    filename: filename,
    cacheIdentifier: JSON.stringify({
      \"babel-loader\": pkg.version,
      \"babel-core\": babel.version,
      babelrc: babelrcPath ? read(fileSystem, babelrcPath) : null,
      env: loaderOptions.forceEnv || process.env.BABEL_ENV || process.env.NODE_ENV || \"development\"
    })
  };

  var options = Object.assign({}, defaultOptions, loaderOptions);

  if (loaderOptions.sourceMap === undefined) {
    options.sourceMap = this.sourceMap;
  }

  if (options.sourceFileName === undefined) {
    options.sourceFileName = relative(options.sourceRoot, options.filename);
  }

  var cacheDirectory = options.cacheDirectory;
  var cacheIdentifier = options.cacheIdentifier;
  var metadataSubscribers = options.metadataSubscribers;

  delete options.cacheDirectory;
  delete options.cacheIdentifier;
  delete options.metadataSubscribers;

  if (cacheDirectory) {
    var callback = this.async();
    return cache({
      directory: cacheDirectory,
      identifier: cacheIdentifier,
      source: source,
      options: options,
      transform: transpile
    }, function (err) {
      var _ref = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : {},
          code = _ref.code,
          map = _ref.map,
          metadata = _ref.metadata;

      if (err) return callback(err);

      metadataSubscribers.forEach(function (s) {
        return passMetadata(s, _this, metadata);
      });

      return callback(null, code, map);
    });
  }

  var _transpile = transpile(source, options),
      code = _transpile.code,
      map = _transpile.map,
      metadata = _transpile.metadata;

  metadataSubscribers.forEach(function (s) {
    return passMetadata(s, _this, metadata);
  });

  this.callback(null, code, map);
};", "node_modules/babel-loader/lib/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-loader/lib/index.js");
    }
}
