<?php

/* node_modules/fsevents/node_modules/json-schema/lib/links.js */
class __TwigTemplate_dd2ea732ac735a2a1f7db941c42b43a9a0c7f64e37015f0f22cd9c11f312233e extends Twig_Template
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
        $__internal_4305d9434a52565fc8e75693fa8821747d932d33b411d1f277970683b70979c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4305d9434a52565fc8e75693fa8821747d932d33b411d1f277970683b70979c2->enter($__internal_4305d9434a52565fc8e75693fa8821747d932d33b411d1f277970683b70979c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/json-schema/lib/links.js"));

        // line 1
        echo "/** 
 * JSON Schema link handler
 * Copyright (c) 2007 Kris Zyp SitePen (www.sitepen.com)
 * Licensed under the MIT (MIT-LICENSE.txt) license.
 */
(function (root, factory) {
    if (typeof define === 'function' && define.amd) {
        // AMD. Register as an anonymous module.
        define([], function () {
            return factory();
        });
    } else if (typeof module === 'object' && module.exports) {
        // Node. Does not work with strict CommonJS, but
        // only CommonJS-like environments that support module.exports,
        // like Node.
        module.exports = factory();
    } else {
        // Browser globals
        root.jsonSchemaLinks = factory();
    }
}(this, function () {// setup primitive classes to be JSON Schema types
var exports = {};
exports.cacheLinks = true;
exports.getLink = function(relation, instance, schema){
\t// gets the URI of the link for the given relation based on the instance and schema
\t// for example:
\t// getLink(
\t// \t\t\"brother\", 
\t// \t\t{\"brother_id\":33}, 
\t// \t\t{links:[{rel:\"brother\", href:\"Brother/{brother_id}\"}]}) ->
\t//\t\"Brother/33\"
\tvar links = schema.__linkTemplates; 
\tif(!links){
\t\tlinks = {};
\t\tvar schemaLinks = schema.links;
\t\tif(schemaLinks && schemaLinks instanceof Array){
\t\t\tschemaLinks.forEach(function(link){
\t/*\t\t\t// TODO: allow for multiple same-name relations
\t\t\t\tif(links[link.rel]){
\t\t\t\t\tif(!(links[link.rel] instanceof Array)){
\t\t\t\t\t\tlinks[link.rel] = [links[link.rel]];
\t\t\t\t\t}
\t\t\t\t}*/
\t\t\t\tlinks[link.rel] = link.href;
\t\t\t});
\t\t}
\t\tif(exports.cacheLinks){
\t\t\tschema.__linkTemplates = links;
\t\t}
\t}
\tvar linkTemplate = links[relation];
\treturn linkTemplate && exports.substitute(linkTemplate, instance);
};

exports.substitute = function(linkTemplate, instance){
\treturn linkTemplate.replace(/\\{([^\\}]*)\\}/g, function(t, property){
\t\t\tvar value = instance[decodeURIComponent(property)];
\t\t\tif(value instanceof Array){
\t\t\t\t// the value is an array, it should produce a URI like /Table/(4,5,8) and store.get() should handle that as an array of values
\t\t\t\treturn '(' + value.join(',') + ')';
\t\t\t}
\t\t\treturn value;
\t\t});
};
return exports;
}));";
        
        $__internal_4305d9434a52565fc8e75693fa8821747d932d33b411d1f277970683b70979c2->leave($__internal_4305d9434a52565fc8e75693fa8821747d932d33b411d1f277970683b70979c2_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/json-schema/lib/links.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/** 
 * JSON Schema link handler
 * Copyright (c) 2007 Kris Zyp SitePen (www.sitepen.com)
 * Licensed under the MIT (MIT-LICENSE.txt) license.
 */
(function (root, factory) {
    if (typeof define === 'function' && define.amd) {
        // AMD. Register as an anonymous module.
        define([], function () {
            return factory();
        });
    } else if (typeof module === 'object' && module.exports) {
        // Node. Does not work with strict CommonJS, but
        // only CommonJS-like environments that support module.exports,
        // like Node.
        module.exports = factory();
    } else {
        // Browser globals
        root.jsonSchemaLinks = factory();
    }
}(this, function () {// setup primitive classes to be JSON Schema types
var exports = {};
exports.cacheLinks = true;
exports.getLink = function(relation, instance, schema){
\t// gets the URI of the link for the given relation based on the instance and schema
\t// for example:
\t// getLink(
\t// \t\t\"brother\", 
\t// \t\t{\"brother_id\":33}, 
\t// \t\t{links:[{rel:\"brother\", href:\"Brother/{brother_id}\"}]}) ->
\t//\t\"Brother/33\"
\tvar links = schema.__linkTemplates; 
\tif(!links){
\t\tlinks = {};
\t\tvar schemaLinks = schema.links;
\t\tif(schemaLinks && schemaLinks instanceof Array){
\t\t\tschemaLinks.forEach(function(link){
\t/*\t\t\t// TODO: allow for multiple same-name relations
\t\t\t\tif(links[link.rel]){
\t\t\t\t\tif(!(links[link.rel] instanceof Array)){
\t\t\t\t\t\tlinks[link.rel] = [links[link.rel]];
\t\t\t\t\t}
\t\t\t\t}*/
\t\t\t\tlinks[link.rel] = link.href;
\t\t\t});
\t\t}
\t\tif(exports.cacheLinks){
\t\t\tschema.__linkTemplates = links;
\t\t}
\t}
\tvar linkTemplate = links[relation];
\treturn linkTemplate && exports.substitute(linkTemplate, instance);
};

exports.substitute = function(linkTemplate, instance){
\treturn linkTemplate.replace(/\\{([^\\}]*)\\}/g, function(t, property){
\t\t\tvar value = instance[decodeURIComponent(property)];
\t\t\tif(value instanceof Array){
\t\t\t\t// the value is an array, it should produce a URI like /Table/(4,5,8) and store.get() should handle that as an array of values
\t\t\t\treturn '(' + value.join(',') + ')';
\t\t\t}
\t\t\treturn value;
\t\t});
};
return exports;
}));", "node_modules/fsevents/node_modules/json-schema/lib/links.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/json-schema/lib/links.js");
    }
}
