<?php

/* node_modules/node-pre-gyp/lib/testbinary.js */
class __TwigTemplate_707e57e38b6801a1294ec69f7f823f9c38e1339388bf596ce222d35aa6c22d4d extends Twig_Template
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
        $__internal_94b6f99755672d2b33d83e75a143c0cf979d375672435c7000491afe4d238a07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94b6f99755672d2b33d83e75a143c0cf979d375672435c7000491afe4d238a07->enter($__internal_94b6f99755672d2b33d83e75a143c0cf979d375672435c7000491afe4d238a07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/node-pre-gyp/lib/testbinary.js"));

        // line 1
        echo "\"use strict\";

module.exports = exports = testbinary;

exports.usage = 'Tests that the binary.node can be required';

var fs = require('fs');
var path = require('path');
var log = require('npmlog');
var cp = require('child_process');
var versioning = require('./util/versioning.js');
var path = require('path');

function testbinary(gyp, argv, callback) {
    var args = [];
    var options = {};
    var shell_cmd = process.execPath;
    var package_json = JSON.parse(fs.readFileSync('./package.json'));
    var opts = versioning.evaluate(package_json, gyp.opts);
    // skip validation for runtimes we don't explicitly support (like electron)
    if (opts.runtime &&
        opts.runtime !== 'node-webkit' &&
        opts.runtime !== 'node') {
        return callback();
    }
    var nw = (opts.runtime && opts.runtime === 'node-webkit');
    // ensure on windows that / are used for require path
    var binary_module = opts.module.replace(/\\\\/g, '/');
    if ((process.arch != opts.target_arch) ||
        (process.platform != opts.target_platform)) {
        var msg = \"skipping validation since host platform/arch (\";
        msg += process.platform+'/'+process.arch+\")\";
        msg += \" does not match target (\";
        msg += opts.target_platform+'/'+opts.target_arch+\")\";
        log.info('validate', msg);
        return callback();
    }
    if (nw) {
        options.timeout = 5000;
        if (process.platform === 'darwin') {
            shell_cmd = 'node-webkit';
        } else if (process.platform === 'win32') {
            shell_cmd = 'nw.exe';
        } else {
            shell_cmd = 'nw';
        }
        var modulePath = path.resolve(binary_module);
        var appDir = path.join(__dirname, 'util', 'nw-pre-gyp');
        args.push(appDir);
        args.push(modulePath);
        log.info(\"validate\",\"Running test command: '\" + shell_cmd + ' ' + args.join(' ') + \"'\");
        cp.execFile(shell_cmd, args, options, function(err, stdout, stderr) {
            // check for normal timeout for node-webkit
            if (err) {
                if (err.killed === true && err.signal && err.signal.indexOf('SIG') > -1) {
                    return callback();
                }
                var stderrLog = stderr.toString();
                log.info('stderr', stderrLog);
                if( /^\\s*Xlib:\\s*extension\\s*\"RANDR\"\\s*missing\\s*on\\s*display\\s*\":\\d+\\.\\d+\"\\.\\s*\$/.test(stderrLog) ){
                    log.info('RANDR', 'stderr contains only RANDR error, ignored');
                    return callback();
                }
                return callback(err);
            }
            return callback();
        });
        return;
    }
    args.push('--eval');
    args.push(\"require('\" + binary_module.replace(/'/g, '\\'') +\"')\");
    log.info(\"validate\",\"Running test command: '\" + shell_cmd + ' ' + args.join(' ') + \"'\");
    cp.execFile(shell_cmd, args, options, function(err, stdout, stderr) {
        if (err) {
            return callback(err, { stdout:stdout, stderr:stderr});
        }
        return callback();
    });
}
";
        
        $__internal_94b6f99755672d2b33d83e75a143c0cf979d375672435c7000491afe4d238a07->leave($__internal_94b6f99755672d2b33d83e75a143c0cf979d375672435c7000491afe4d238a07_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/node-pre-gyp/lib/testbinary.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = exports = testbinary;

exports.usage = 'Tests that the binary.node can be required';

var fs = require('fs');
var path = require('path');
var log = require('npmlog');
var cp = require('child_process');
var versioning = require('./util/versioning.js');
var path = require('path');

function testbinary(gyp, argv, callback) {
    var args = [];
    var options = {};
    var shell_cmd = process.execPath;
    var package_json = JSON.parse(fs.readFileSync('./package.json'));
    var opts = versioning.evaluate(package_json, gyp.opts);
    // skip validation for runtimes we don't explicitly support (like electron)
    if (opts.runtime &&
        opts.runtime !== 'node-webkit' &&
        opts.runtime !== 'node') {
        return callback();
    }
    var nw = (opts.runtime && opts.runtime === 'node-webkit');
    // ensure on windows that / are used for require path
    var binary_module = opts.module.replace(/\\\\/g, '/');
    if ((process.arch != opts.target_arch) ||
        (process.platform != opts.target_platform)) {
        var msg = \"skipping validation since host platform/arch (\";
        msg += process.platform+'/'+process.arch+\")\";
        msg += \" does not match target (\";
        msg += opts.target_platform+'/'+opts.target_arch+\")\";
        log.info('validate', msg);
        return callback();
    }
    if (nw) {
        options.timeout = 5000;
        if (process.platform === 'darwin') {
            shell_cmd = 'node-webkit';
        } else if (process.platform === 'win32') {
            shell_cmd = 'nw.exe';
        } else {
            shell_cmd = 'nw';
        }
        var modulePath = path.resolve(binary_module);
        var appDir = path.join(__dirname, 'util', 'nw-pre-gyp');
        args.push(appDir);
        args.push(modulePath);
        log.info(\"validate\",\"Running test command: '\" + shell_cmd + ' ' + args.join(' ') + \"'\");
        cp.execFile(shell_cmd, args, options, function(err, stdout, stderr) {
            // check for normal timeout for node-webkit
            if (err) {
                if (err.killed === true && err.signal && err.signal.indexOf('SIG') > -1) {
                    return callback();
                }
                var stderrLog = stderr.toString();
                log.info('stderr', stderrLog);
                if( /^\\s*Xlib:\\s*extension\\s*\"RANDR\"\\s*missing\\s*on\\s*display\\s*\":\\d+\\.\\d+\"\\.\\s*\$/.test(stderrLog) ){
                    log.info('RANDR', 'stderr contains only RANDR error, ignored');
                    return callback();
                }
                return callback(err);
            }
            return callback();
        });
        return;
    }
    args.push('--eval');
    args.push(\"require('\" + binary_module.replace(/'/g, '\\'') +\"')\");
    log.info(\"validate\",\"Running test command: '\" + shell_cmd + ' ' + args.join(' ') + \"'\");
    cp.execFile(shell_cmd, args, options, function(err, stdout, stderr) {
        if (err) {
            return callback(err, { stdout:stdout, stderr:stderr});
        }
        return callback();
    });
}
", "node_modules/node-pre-gyp/lib/testbinary.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/node-pre-gyp/lib/testbinary.js");
    }
}
