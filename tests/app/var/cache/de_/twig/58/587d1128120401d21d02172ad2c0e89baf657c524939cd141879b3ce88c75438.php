<?php

/* node_modules/fsevents/node_modules/hoek/test/escaper.js */
class __TwigTemplate_682ca0f823b4713ba225bda4739be88f8bcb4a7dba55857be0fbb4f7a5d1e22b extends Twig_Template
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
        $__internal_1edbd6b6fa4a2d7a9585db42b1ce2a1f3c5340269e3b1bd6ecc442c366e5d130 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1edbd6b6fa4a2d7a9585db42b1ce2a1f3c5340269e3b1bd6ecc442c366e5d130->enter($__internal_1edbd6b6fa4a2d7a9585db42b1ce2a1f3c5340269e3b1bd6ecc442c366e5d130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/hoek/test/escaper.js"));

        // line 1
        echo "// Load modules

var Code = require('code');
var Hoek = require('../lib');
var Lab = require('lab');


// Declare internals

var internals = {};


// Test shortcuts

var lab = exports.lab = Lab.script();
var describe = lab.experiment;
var it = lab.test;
var expect = Code.expect;


describe('escapeJavaScript()', function () {

    it('encodes / characters', function (done) {

        var encoded = Hoek.escapeJavaScript('<script>alert(1)</script>');
        expect(encoded).to.equal('\\\\x3cscript\\\\x3ealert\\\\x281\\\\x29\\\\x3c\\\\x2fscript\\\\x3e');
        done();
    });

    it('encodes \\' characters', function (done) {

        var encoded = Hoek.escapeJavaScript('something(\\'param\\')');
        expect(encoded).to.equal('something\\\\x28\\\\x27param\\\\x27\\\\x29');
        done();
    });

    it('encodes large unicode characters with the correct padding', function (done) {

        var encoded = Hoek.escapeJavaScript(String.fromCharCode(500) + String.fromCharCode(1000));
        expect(encoded).to.equal('\\\\u0500\\\\u1000');
        done();
    });

    it('doesn\\'t throw an exception when passed null', function (done) {

        var encoded = Hoek.escapeJavaScript(null);
        expect(encoded).to.equal('');
        done();
    });
});

describe('escapeHtml()', function () {

    it('encodes / characters', function (done) {

        var encoded = Hoek.escapeHtml('<script>alert(1)</script>');
        expect(encoded).to.equal('&lt;script&gt;alert&#x28;1&#x29;&lt;&#x2f;script&gt;');
        done();
    });

    it('encodes < and > as named characters', function (done) {

        var encoded = Hoek.escapeHtml('<script><>');
        expect(encoded).to.equal('&lt;script&gt;&lt;&gt;');
        done();
    });

    it('encodes large unicode characters', function (done) {

        var encoded = Hoek.escapeHtml(String.fromCharCode(500) + String.fromCharCode(1000));
        expect(encoded).to.equal('&#500;&#1000;');
        done();
    });

    it('doesn\\'t throw an exception when passed null', function (done) {

        var encoded = Hoek.escapeHtml(null);
        expect(encoded).to.equal('');
        done();
    });

    it('encodes {} characters', function (done) {

        var encoded = Hoek.escapeHtml('{}');
        expect(encoded).to.equal('&#x7b;&#x7d;');
        done();
    });
});
";
        
        $__internal_1edbd6b6fa4a2d7a9585db42b1ce2a1f3c5340269e3b1bd6ecc442c366e5d130->leave($__internal_1edbd6b6fa4a2d7a9585db42b1ce2a1f3c5340269e3b1bd6ecc442c366e5d130_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/hoek/test/escaper.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Load modules

var Code = require('code');
var Hoek = require('../lib');
var Lab = require('lab');


// Declare internals

var internals = {};


// Test shortcuts

var lab = exports.lab = Lab.script();
var describe = lab.experiment;
var it = lab.test;
var expect = Code.expect;


describe('escapeJavaScript()', function () {

    it('encodes / characters', function (done) {

        var encoded = Hoek.escapeJavaScript('<script>alert(1)</script>');
        expect(encoded).to.equal('\\\\x3cscript\\\\x3ealert\\\\x281\\\\x29\\\\x3c\\\\x2fscript\\\\x3e');
        done();
    });

    it('encodes \\' characters', function (done) {

        var encoded = Hoek.escapeJavaScript('something(\\'param\\')');
        expect(encoded).to.equal('something\\\\x28\\\\x27param\\\\x27\\\\x29');
        done();
    });

    it('encodes large unicode characters with the correct padding', function (done) {

        var encoded = Hoek.escapeJavaScript(String.fromCharCode(500) + String.fromCharCode(1000));
        expect(encoded).to.equal('\\\\u0500\\\\u1000');
        done();
    });

    it('doesn\\'t throw an exception when passed null', function (done) {

        var encoded = Hoek.escapeJavaScript(null);
        expect(encoded).to.equal('');
        done();
    });
});

describe('escapeHtml()', function () {

    it('encodes / characters', function (done) {

        var encoded = Hoek.escapeHtml('<script>alert(1)</script>');
        expect(encoded).to.equal('&lt;script&gt;alert&#x28;1&#x29;&lt;&#x2f;script&gt;');
        done();
    });

    it('encodes < and > as named characters', function (done) {

        var encoded = Hoek.escapeHtml('<script><>');
        expect(encoded).to.equal('&lt;script&gt;&lt;&gt;');
        done();
    });

    it('encodes large unicode characters', function (done) {

        var encoded = Hoek.escapeHtml(String.fromCharCode(500) + String.fromCharCode(1000));
        expect(encoded).to.equal('&#500;&#1000;');
        done();
    });

    it('doesn\\'t throw an exception when passed null', function (done) {

        var encoded = Hoek.escapeHtml(null);
        expect(encoded).to.equal('');
        done();
    });

    it('encodes {} characters', function (done) {

        var encoded = Hoek.escapeHtml('{}');
        expect(encoded).to.equal('&#x7b;&#x7d;');
        done();
    });
});
", "node_modules/fsevents/node_modules/hoek/test/escaper.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/hoek/test/escaper.js");
    }
}
