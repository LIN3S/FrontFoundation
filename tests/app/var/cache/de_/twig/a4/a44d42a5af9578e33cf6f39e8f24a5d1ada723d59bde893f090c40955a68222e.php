<?php

/* node_modules/node-pre-gyp/lib/util/handle_gyp_opts.js */
class __TwigTemplate_e6f208977eb89601af3db524b30efd590d7575c901d53d691605e33d6f1bd06f extends Twig_Template
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
        $__internal_b09ffcb9ef23f0ceca7712978092a98093dbbdfcd710b6979171a8f33510616a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b09ffcb9ef23f0ceca7712978092a98093dbbdfcd710b6979171a8f33510616a->enter($__internal_b09ffcb9ef23f0ceca7712978092a98093dbbdfcd710b6979171a8f33510616a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/node-pre-gyp/lib/util/handle_gyp_opts.js"));

        // line 1
        echo "\"use strict\";

module.exports = exports = handle_gyp_opts;

var fs = require('fs');
var versioning = require('./versioning.js');

/*

Here we gather node-pre-gyp generated options (from versioning) and pass them along to node-gyp.

We massage the args and options slightly to account for differences in what commands mean between
node-pre-gyp and node-gyp (e.g. see the difference between \"build\" and \"rebuild\" below)

Keep in mind: the values inside `argv` and `gyp.opts` below are different depending on whether
node-pre-gyp is called directory, or if it is called in a `run-script` phase of npm.

We also try to preserve any command line options that might have been passed to npm or node-pre-gyp.
But this is fairly difficult without passing way to much through. For example `gyp.opts` contains all
the process.env and npm pushes a lot of variables into process.env which node-pre-gyp inherits. So we have
to be very selective about what we pass through.

For example:

`npm install --build-from-source` will give:

argv == [ 'rebuild' ]
gyp.opts.argv == { remain: [ 'install' ],
  cooked: [ 'install', '--fallback-to-build' ],
  original: [ 'install', '--fallback-to-build' ] }

`./bin/node-pre-gyp build` will give:

argv == []
gyp.opts.argv == { remain: [ 'build' ],
  cooked: [ 'build' ],
  original: [ '-C', 'test/app1', 'build' ] }

*/

// select set of node-pre-gyp versioning info
// to share with node-gyp
var share_with_node_gyp = [
  'module',
  'module_name',
  'module_path',
];

function handle_gyp_opts(gyp, argv, callback) {

    // Collect node-pre-gyp specific variables to pass to node-gyp
    var node_pre_gyp_options = [];
    // generate custom node-pre-gyp versioning info
    var opts = versioning.evaluate(JSON.parse(fs.readFileSync('./package.json')), gyp.opts);
    share_with_node_gyp.forEach(function(key) {
        var val = opts[key];
        if (val) {
            node_pre_gyp_options.push('--' + key + '=' + val);
        } else {
            return callback(new Error(\"Option \" + key + \" required but not found by node-pre-gyp\"));
        }
    });

    // Collect options that follow the special -- which disables nopt parsing
    var unparsed_options = [];
    var double_hyphen_found = false;
    gyp.opts.argv.original.forEach(function(opt) {
        if (double_hyphen_found) {
            unparsed_options.push(opt);
        }
        if (opt == '--') {
            double_hyphen_found = true;
        }
    });

    // We try respect and pass through remaining command
    // line options (like --foo=bar) to node-gyp
    var cooked = gyp.opts.argv.cooked;
    var node_gyp_options = [];
    cooked.forEach(function(value) {
        if (value.length > 2 && value.slice(0,2) == '--') {
            var key = value.slice(2);
            var val = cooked[cooked.indexOf(value)+1];
            if (val && val.indexOf('--') === -1) { // handle '--foo=bar' or ['--foo','bar']
                node_gyp_options.push('--' + key + '=' + val);
            } else { // pass through --foo
                node_gyp_options.push(value);
            }
        }
    });

    var result = {'opts':opts,'gyp':node_gyp_options,'pre':node_pre_gyp_options,'unparsed':unparsed_options};
    return callback(null,result);
}
";
        
        $__internal_b09ffcb9ef23f0ceca7712978092a98093dbbdfcd710b6979171a8f33510616a->leave($__internal_b09ffcb9ef23f0ceca7712978092a98093dbbdfcd710b6979171a8f33510616a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/node-pre-gyp/lib/util/handle_gyp_opts.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = exports = handle_gyp_opts;

var fs = require('fs');
var versioning = require('./versioning.js');

/*

Here we gather node-pre-gyp generated options (from versioning) and pass them along to node-gyp.

We massage the args and options slightly to account for differences in what commands mean between
node-pre-gyp and node-gyp (e.g. see the difference between \"build\" and \"rebuild\" below)

Keep in mind: the values inside `argv` and `gyp.opts` below are different depending on whether
node-pre-gyp is called directory, or if it is called in a `run-script` phase of npm.

We also try to preserve any command line options that might have been passed to npm or node-pre-gyp.
But this is fairly difficult without passing way to much through. For example `gyp.opts` contains all
the process.env and npm pushes a lot of variables into process.env which node-pre-gyp inherits. So we have
to be very selective about what we pass through.

For example:

`npm install --build-from-source` will give:

argv == [ 'rebuild' ]
gyp.opts.argv == { remain: [ 'install' ],
  cooked: [ 'install', '--fallback-to-build' ],
  original: [ 'install', '--fallback-to-build' ] }

`./bin/node-pre-gyp build` will give:

argv == []
gyp.opts.argv == { remain: [ 'build' ],
  cooked: [ 'build' ],
  original: [ '-C', 'test/app1', 'build' ] }

*/

// select set of node-pre-gyp versioning info
// to share with node-gyp
var share_with_node_gyp = [
  'module',
  'module_name',
  'module_path',
];

function handle_gyp_opts(gyp, argv, callback) {

    // Collect node-pre-gyp specific variables to pass to node-gyp
    var node_pre_gyp_options = [];
    // generate custom node-pre-gyp versioning info
    var opts = versioning.evaluate(JSON.parse(fs.readFileSync('./package.json')), gyp.opts);
    share_with_node_gyp.forEach(function(key) {
        var val = opts[key];
        if (val) {
            node_pre_gyp_options.push('--' + key + '=' + val);
        } else {
            return callback(new Error(\"Option \" + key + \" required but not found by node-pre-gyp\"));
        }
    });

    // Collect options that follow the special -- which disables nopt parsing
    var unparsed_options = [];
    var double_hyphen_found = false;
    gyp.opts.argv.original.forEach(function(opt) {
        if (double_hyphen_found) {
            unparsed_options.push(opt);
        }
        if (opt == '--') {
            double_hyphen_found = true;
        }
    });

    // We try respect and pass through remaining command
    // line options (like --foo=bar) to node-gyp
    var cooked = gyp.opts.argv.cooked;
    var node_gyp_options = [];
    cooked.forEach(function(value) {
        if (value.length > 2 && value.slice(0,2) == '--') {
            var key = value.slice(2);
            var val = cooked[cooked.indexOf(value)+1];
            if (val && val.indexOf('--') === -1) { // handle '--foo=bar' or ['--foo','bar']
                node_gyp_options.push('--' + key + '=' + val);
            } else { // pass through --foo
                node_gyp_options.push(value);
            }
        }
    });

    var result = {'opts':opts,'gyp':node_gyp_options,'pre':node_pre_gyp_options,'unparsed':unparsed_options};
    return callback(null,result);
}
", "node_modules/node-pre-gyp/lib/util/handle_gyp_opts.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/node-pre-gyp/lib/util/handle_gyp_opts.js");
    }
}
