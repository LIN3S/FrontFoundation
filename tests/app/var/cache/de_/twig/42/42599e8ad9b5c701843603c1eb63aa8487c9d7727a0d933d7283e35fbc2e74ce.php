<?php

/* node_modules/parsleyjs/bower_components/jquery/dist/jquery.js */
class __TwigTemplate_cb9c9b30d69f1814e0173ddf15b1461258b05b648401ee58ed5eec67c6931afa extends Twig_Template
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
        $__internal_31233a9f167c9a7bfad321c5cb102bf53186d196d8c61ccaf8546206812bbd77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31233a9f167c9a7bfad321c5cb102bf53186d196d8c61ccaf8546206812bbd77->enter($__internal_31233a9f167c9a7bfad321c5cb102bf53186d196d8c61ccaf8546206812bbd77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/bower_components/jquery/dist/jquery.js"));

        // line 1
        echo "/*!
 * jQuery JavaScript Library v2.1.4
 * http://jquery.com/
 *
 * Includes Sizzle.js
 * http://sizzlejs.com/
 *
 * Copyright 2005, 2014 jQuery Foundation, Inc. and other contributors
 * Released under the MIT license
 * http://jquery.org/license
 *
 * Date: 2015-04-28T16:01Z
 */

(function( global, factory ) {

\tif ( typeof module === \"object\" && typeof module.exports === \"object\" ) {
\t\t// For CommonJS and CommonJS-like environments where a proper `window`
\t\t// is present, execute the factory and get jQuery.
\t\t// For environments that do not have a `window` with a `document`
\t\t// (such as Node.js), expose a factory as module.exports.
\t\t// This accentuates the need for the creation of a real `window`.
\t\t// e.g. var jQuery = require(\"jquery\")(window);
\t\t// See ticket #14549 for more info.
\t\tmodule.exports = global.document ?
\t\t\tfactory( global, true ) :
\t\t\tfunction( w ) {
\t\t\t\tif ( !w.document ) {
\t\t\t\t\tthrow new Error( \"jQuery requires a window with a document\" );
\t\t\t\t}
\t\t\t\treturn factory( w );
\t\t\t};
\t} else {
\t\tfactory( global );
\t}

// Pass this if window is not defined yet
}(typeof window !== \"undefined\" ? window : this, function( window, noGlobal ) {

// Support: Firefox 18+
// Can't be in strict mode, several libs including ASP.NET trace
// the stack via arguments.caller.callee and Firefox dies if
// you try to trace through \"use strict\" call chains. (#13335)
//

var arr = [];

var slice = arr.slice;

var concat = arr.concat;

var push = arr.push;

var indexOf = arr.indexOf;

var class2type = {};

var toString = class2type.toString;

var hasOwn = class2type.hasOwnProperty;

var support = {};



var
\t// Use the correct document accordingly with window argument (sandbox)
\tdocument = window.document,

\tversion = \"2.1.4\",

\t// Define a local copy of jQuery
\tjQuery = function( selector, context ) {
\t\t// The jQuery object is actually just the init constructor 'enhanced'
\t\t// Need init if jQuery is called (just allow error to be thrown if not included)
\t\treturn new jQuery.fn.init( selector, context );
\t},

\t// Support: Android<4.1
\t// Make sure we trim BOM and NBSP
\trtrim = /^[\\s\\uFEFF\\xA0]+|[\\s\\uFEFF\\xA0]+\$/g,

\t// Matches dashed string for camelizing
\trmsPrefix = /^-ms-/,
\trdashAlpha = /-([\\da-z])/gi,

\t// Used by jQuery.camelCase as callback to replace()
\tfcamelCase = function( all, letter ) {
\t\treturn letter.toUpperCase();
\t};

jQuery.fn = jQuery.prototype = {
\t// The current version of jQuery being used
\tjquery: version,

\tconstructor: jQuery,

\t// Start with an empty selector
\tselector: \"\",

\t// The default length of a jQuery object is 0
\tlength: 0,

\ttoArray: function() {
\t\treturn slice.call( this );
\t},

\t// Get the Nth element in the matched element set OR
\t// Get the whole matched element set as a clean array
\tget: function( num ) {
\t\treturn num != null ?

\t\t\t// Return just the one element from the set
\t\t\t( num < 0 ? this[ num + this.length ] : this[ num ] ) :

\t\t\t// Return all the elements in a clean array
\t\t\tslice.call( this );
\t},

\t// Take an array of elements and push it onto the stack
\t// (returning the new matched element set)
\tpushStack: function( elems ) {

\t\t// Build a new jQuery matched element set
\t\tvar ret = jQuery.merge( this.constructor(), elems );

\t\t// Add the old object onto the stack (as a reference)
\t\tret.prevObject = this;
\t\tret.context = this.context;

\t\t// Return the newly-formed element set
\t\treturn ret;
\t},

\t// Execute a callback for every element in the matched set.
\t// (You can seed the arguments with an array of args, but this is
\t// only used internally.)
\teach: function( callback, args ) {
\t\treturn jQuery.each( this, callback, args );
\t},

\tmap: function( callback ) {
\t\treturn this.pushStack( jQuery.map(this, function( elem, i ) {
\t\t\treturn callback.call( elem, i, elem );
\t\t}));
\t},

\tslice: function() {
\t\treturn this.pushStack( slice.apply( this, arguments ) );
\t},

\tfirst: function() {
\t\treturn this.eq( 0 );
\t},

\tlast: function() {
\t\treturn this.eq( -1 );
\t},

\teq: function( i ) {
\t\tvar len = this.length,
\t\t\tj = +i + ( i < 0 ? len : 0 );
\t\treturn this.pushStack( j >= 0 && j < len ? [ this[j] ] : [] );
\t},

\tend: function() {
\t\treturn this.prevObject || this.constructor(null);
\t},

\t// For internal use only.
\t// Behaves like an Array's method, not like a jQuery method.
\tpush: push,
\tsort: arr.sort,
\tsplice: arr.splice
};

jQuery.extend = jQuery.fn.extend = function() {
\tvar options, name, src, copy, copyIsArray, clone,
\t\ttarget = arguments[0] || {},
\t\ti = 1,
\t\tlength = arguments.length,
\t\tdeep = false;

\t// Handle a deep copy situation
\tif ( typeof target === \"boolean\" ) {
\t\tdeep = target;

\t\t// Skip the boolean and the target
\t\ttarget = arguments[ i ] || {};
\t\ti++;
\t}

\t// Handle case when target is a string or something (possible in deep copy)
\tif ( typeof target !== \"object\" && !jQuery.isFunction(target) ) {
\t\ttarget = {};
\t}

\t// Extend jQuery itself if only one argument is passed
\tif ( i === length ) {
\t\ttarget = this;
\t\ti--;
\t}

\tfor ( ; i < length; i++ ) {
\t\t// Only deal with non-null/undefined values
\t\tif ( (options = arguments[ i ]) != null ) {
\t\t\t// Extend the base object
\t\t\tfor ( name in options ) {
\t\t\t\tsrc = target[ name ];
\t\t\t\tcopy = options[ name ];

\t\t\t\t// Prevent never-ending loop
\t\t\t\tif ( target === copy ) {
\t\t\t\t\tcontinue;
\t\t\t\t}

\t\t\t\t// Recurse if we're merging plain objects or arrays
\t\t\t\tif ( deep && copy && ( jQuery.isPlainObject(copy) || (copyIsArray = jQuery.isArray(copy)) ) ) {
\t\t\t\t\tif ( copyIsArray ) {
\t\t\t\t\t\tcopyIsArray = false;
\t\t\t\t\t\tclone = src && jQuery.isArray(src) ? src : [];

\t\t\t\t\t} else {
\t\t\t\t\t\tclone = src && jQuery.isPlainObject(src) ? src : {};
\t\t\t\t\t}

\t\t\t\t\t// Never move original objects, clone them
\t\t\t\t\ttarget[ name ] = jQuery.extend( deep, clone, copy );

\t\t\t\t// Don't bring in undefined values
\t\t\t\t} else if ( copy !== undefined ) {
\t\t\t\t\ttarget[ name ] = copy;
\t\t\t\t}
\t\t\t}
\t\t}
\t}

\t// Return the modified object
\treturn target;
};

jQuery.extend({
\t// Unique for each copy of jQuery on the page
\texpando: \"jQuery\" + ( version + Math.random() ).replace( /\\D/g, \"\" ),

\t// Assume jQuery is ready without the ready module
\tisReady: true,

\terror: function( msg ) {
\t\tthrow new Error( msg );
\t},

\tnoop: function() {},

\tisFunction: function( obj ) {
\t\treturn jQuery.type(obj) === \"function\";
\t},

\tisArray: Array.isArray,

\tisWindow: function( obj ) {
\t\treturn obj != null && obj === obj.window;
\t},

\tisNumeric: function( obj ) {
\t\t// parseFloat NaNs numeric-cast false positives (null|true|false|\"\")
\t\t// ...but misinterprets leading-number strings, particularly hex literals (\"0x...\")
\t\t// subtraction forces infinities to NaN
\t\t// adding 1 corrects loss of precision from parseFloat (#15100)
\t\treturn !jQuery.isArray( obj ) && (obj - parseFloat( obj ) + 1) >= 0;
\t},

\tisPlainObject: function( obj ) {
\t\t// Not plain objects:
\t\t// - Any object or value whose internal [[Class]] property is not \"[object Object]\"
\t\t// - DOM nodes
\t\t// - window
\t\tif ( jQuery.type( obj ) !== \"object\" || obj.nodeType || jQuery.isWindow( obj ) ) {
\t\t\treturn false;
\t\t}

\t\tif ( obj.constructor &&
\t\t\t\t!hasOwn.call( obj.constructor.prototype, \"isPrototypeOf\" ) ) {
\t\t\treturn false;
\t\t}

\t\t// If the function hasn't returned already, we're confident that
\t\t// |obj| is a plain object, created by {} or constructed with new Object
\t\treturn true;
\t},

\tisEmptyObject: function( obj ) {
\t\tvar name;
\t\tfor ( name in obj ) {
\t\t\treturn false;
\t\t}
\t\treturn true;
\t},

\ttype: function( obj ) {
\t\tif ( obj == null ) {
\t\t\treturn obj + \"\";
\t\t}
\t\t// Support: Android<4.0, iOS<6 (functionish RegExp)
\t\treturn typeof obj === \"object\" || typeof obj === \"function\" ?
\t\t\tclass2type[ toString.call(obj) ] || \"object\" :
\t\t\ttypeof obj;
\t},

\t// Evaluates a script in a global context
\tglobalEval: function( code ) {
\t\tvar script,
\t\t\tindirect = eval;

\t\tcode = jQuery.trim( code );

\t\tif ( code ) {
\t\t\t// If the code includes a valid, prologue position
\t\t\t// strict mode pragma, execute code by injecting a
\t\t\t// script tag into the document.
\t\t\tif ( code.indexOf(\"use strict\") === 1 ) {
\t\t\t\tscript = document.createElement(\"script\");
\t\t\t\tscript.text = code;
\t\t\t\tdocument.head.appendChild( script ).parentNode.removeChild( script );
\t\t\t} else {
\t\t\t// Otherwise, avoid the DOM node creation, insertion
\t\t\t// and removal by using an indirect global eval
\t\t\t\tindirect( code );
\t\t\t}
\t\t}
\t},

\t// Convert dashed to camelCase; used by the css and data modules
\t// Support: IE9-11+
\t// Microsoft forgot to hump their vendor prefix (#9572)
\tcamelCase: function( string ) {
\t\treturn string.replace( rmsPrefix, \"ms-\" ).replace( rdashAlpha, fcamelCase );
\t},

\tnodeName: function( elem, name ) {
\t\treturn elem.nodeName && elem.nodeName.toLowerCase() === name.toLowerCase();
\t},

\t// args is for internal usage only
\teach: function( obj, callback, args ) {
\t\tvar value,
\t\t\ti = 0,
\t\t\tlength = obj.length,
\t\t\tisArray = isArraylike( obj );

\t\tif ( args ) {
\t\t\tif ( isArray ) {
\t\t\t\tfor ( ; i < length; i++ ) {
\t\t\t\t\tvalue = callback.apply( obj[ i ], args );

\t\t\t\t\tif ( value === false ) {
\t\t\t\t\t\tbreak;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t} else {
\t\t\t\tfor ( i in obj ) {
\t\t\t\t\tvalue = callback.apply( obj[ i ], args );

\t\t\t\t\tif ( value === false ) {
\t\t\t\t\t\tbreak;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t\t// A special, fast, case for the most common use of each
\t\t} else {
\t\t\tif ( isArray ) {
\t\t\t\tfor ( ; i < length; i++ ) {
\t\t\t\t\tvalue = callback.call( obj[ i ], i, obj[ i ] );

\t\t\t\t\tif ( value === false ) {
\t\t\t\t\t\tbreak;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t} else {
\t\t\t\tfor ( i in obj ) {
\t\t\t\t\tvalue = callback.call( obj[ i ], i, obj[ i ] );

\t\t\t\t\tif ( value === false ) {
\t\t\t\t\t\tbreak;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}

\t\treturn obj;
\t},

\t// Support: Android<4.1
\ttrim: function( text ) {
\t\treturn text == null ?
\t\t\t\"\" :
\t\t\t( text + \"\" ).replace( rtrim, \"\" );
\t},

\t// results is for internal usage only
\tmakeArray: function( arr, results ) {
\t\tvar ret = results || [];

\t\tif ( arr != null ) {
\t\t\tif ( isArraylike( Object(arr) ) ) {
\t\t\t\tjQuery.merge( ret,
\t\t\t\t\ttypeof arr === \"string\" ?
\t\t\t\t\t[ arr ] : arr
\t\t\t\t);
\t\t\t} else {
\t\t\t\tpush.call( ret, arr );
\t\t\t}
\t\t}

\t\treturn ret;
\t},

\tinArray: function( elem, arr, i ) {
\t\treturn arr == null ? -1 : indexOf.call( arr, elem, i );
\t},

\tmerge: function( first, second ) {
\t\tvar len = +second.length,
\t\t\tj = 0,
\t\t\ti = first.length;

\t\tfor ( ; j < len; j++ ) {
\t\t\tfirst[ i++ ] = second[ j ];
\t\t}

\t\tfirst.length = i;

\t\treturn first;
\t},

\tgrep: function( elems, callback, invert ) {
\t\tvar callbackInverse,
\t\t\tmatches = [],
\t\t\ti = 0,
\t\t\tlength = elems.length,
\t\t\tcallbackExpect = !invert;

\t\t// Go through the array, only saving the items
\t\t// that pass the validator function
\t\tfor ( ; i < length; i++ ) {
\t\t\tcallbackInverse = !callback( elems[ i ], i );
\t\t\tif ( callbackInverse !== callbackExpect ) {
\t\t\t\tmatches.push( elems[ i ] );
\t\t\t}
\t\t}

\t\treturn matches;
\t},

\t// arg is for internal usage only
\tmap: function( elems, callback, arg ) {
\t\tvar value,
\t\t\ti = 0,
\t\t\tlength = elems.length,
\t\t\tisArray = isArraylike( elems ),
\t\t\tret = [];

\t\t// Go through the array, translating each of the items to their new values
\t\tif ( isArray ) {
\t\t\tfor ( ; i < length; i++ ) {
\t\t\t\tvalue = callback( elems[ i ], i, arg );

\t\t\t\tif ( value != null ) {
\t\t\t\t\tret.push( value );
\t\t\t\t}
\t\t\t}

\t\t// Go through every key on the object,
\t\t} else {
\t\t\tfor ( i in elems ) {
\t\t\t\tvalue = callback( elems[ i ], i, arg );

\t\t\t\tif ( value != null ) {
\t\t\t\t\tret.push( value );
\t\t\t\t}
\t\t\t}
\t\t}

\t\t// Flatten any nested arrays
\t\treturn concat.apply( [], ret );
\t},

\t// A global GUID counter for objects
\tguid: 1,

\t// Bind a function to a context, optionally partially applying any
\t// arguments.
\tproxy: function( fn, context ) {
\t\tvar tmp, args, proxy;

\t\tif ( typeof context === \"string\" ) {
\t\t\ttmp = fn[ context ];
\t\t\tcontext = fn;
\t\t\tfn = tmp;
\t\t}

\t\t// Quick check to determine if target is callable, in the spec
\t\t// this throws a TypeError, but we will just return undefined.
\t\tif ( !jQuery.isFunction( fn ) ) {
\t\t\treturn undefined;
\t\t}

\t\t// Simulated bind
\t\targs = slice.call( arguments, 2 );
\t\tproxy = function() {
\t\t\treturn fn.apply( context || this, args.concat( slice.call( arguments ) ) );
\t\t};

\t\t// Set the guid of unique handler to the same of original handler, so it can be removed
\t\tproxy.guid = fn.guid = fn.guid || jQuery.guid++;

\t\treturn proxy;
\t},

\tnow: Date.now,

\t// jQuery.support is not used in Core but other projects attach their
\t// properties to it so it needs to exist.
\tsupport: support
});

// Populate the class2type map
jQuery.each(\"Boolean Number String Function Array Date RegExp Object Error\".split(\" \"), function(i, name) {
\tclass2type[ \"[object \" + name + \"]\" ] = name.toLowerCase();
});

function isArraylike( obj ) {

\t// Support: iOS 8.2 (not reproducible in simulator)
\t// `in` check used to prevent JIT error (gh-2145)
\t// hasOwn isn't used here due to false negatives
\t// regarding Nodelist length in IE
\tvar length = \"length\" in obj && obj.length,
\t\ttype = jQuery.type( obj );

\tif ( type === \"function\" || jQuery.isWindow( obj ) ) {
\t\treturn false;
\t}

\tif ( obj.nodeType === 1 && length ) {
\t\treturn true;
\t}

\treturn type === \"array\" || length === 0 ||
\t\ttypeof length === \"number\" && length > 0 && ( length - 1 ) in obj;
}
var Sizzle =
/*!
 * Sizzle CSS Selector Engine v2.2.0-pre
 * http://sizzlejs.com/
 *
 * Copyright 2008, 2014 jQuery Foundation, Inc. and other contributors
 * Released under the MIT license
 * http://jquery.org/license
 *
 * Date: 2014-12-16
 */
(function( window ) {

var i,
\tsupport,
\tExpr,
\tgetText,
\tisXML,
\ttokenize,
\tcompile,
\tselect,
\toutermostContext,
\tsortInput,
\thasDuplicate,

\t// Local document vars
\tsetDocument,
\tdocument,
\tdocElem,
\tdocumentIsHTML,
\trbuggyQSA,
\trbuggyMatches,
\tmatches,
\tcontains,

\t// Instance-specific data
\texpando = \"sizzle\" + 1 * new Date(),
\tpreferredDoc = window.document,
\tdirruns = 0,
\tdone = 0,
\tclassCache = createCache(),
\ttokenCache = createCache(),
\tcompilerCache = createCache(),
\tsortOrder = function( a, b ) {
\t\tif ( a === b ) {
\t\t\thasDuplicate = true;
\t\t}
\t\treturn 0;
\t},

\t// General-purpose constants
\tMAX_NEGATIVE = 1 << 31,

\t// Instance methods
\thasOwn = ({}).hasOwnProperty,
\tarr = [],
\tpop = arr.pop,
\tpush_native = arr.push,
\tpush = arr.push,
\tslice = arr.slice,
\t// Use a stripped-down indexOf as it's faster than native
\t// http://jsperf.com/thor-indexof-vs-for/5
\tindexOf = function( list, elem ) {
\t\tvar i = 0,
\t\t\tlen = list.length;
\t\tfor ( ; i < len; i++ ) {
\t\t\tif ( list[i] === elem ) {
\t\t\t\treturn i;
\t\t\t}
\t\t}
\t\treturn -1;
\t},

\tbooleans = \"checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|ismap|loop|multiple|open|readonly|required|scoped\",

\t// Regular expressions

\t// Whitespace characters http://www.w3.org/TR/css3-selectors/#whitespace
\twhitespace = \"[\\\\x20\\\\t\\\\r\\\\n\\\\f]\",
\t// http://www.w3.org/TR/css3-syntax/#characters
\tcharacterEncoding = \"(?:\\\\\\\\.|[\\\\w-]|[^\\\\x00-\\\\xa0])+\",

\t// Loosely modeled on CSS identifier characters
\t// An unquoted value should be a CSS identifier http://www.w3.org/TR/css3-selectors/#attribute-selectors
\t// Proper syntax: http://www.w3.org/TR/CSS21/syndata.html#value-def-identifier
\tidentifier = characterEncoding.replace( \"w\", \"w#\" ),

\t// Attribute selectors: http://www.w3.org/TR/selectors/#attribute-selectors
\tattributes = \"\\\\[\" + whitespace + \"*(\" + characterEncoding + \")(?:\" + whitespace +
\t\t// Operator (capture 2)
\t\t\"*([*^\$|!~]?=)\" + whitespace +
\t\t// \"Attribute values must be CSS identifiers [capture 5] or strings [capture 3 or capture 4]\"
\t\t\"*(?:'((?:\\\\\\\\.|[^\\\\\\\\'])*)'|\\\"((?:\\\\\\\\.|[^\\\\\\\\\\\"])*)\\\"|(\" + identifier + \"))|)\" + whitespace +
\t\t\"*\\\\]\",

\tpseudos = \":(\" + characterEncoding + \")(?:\\\\((\" +
\t\t// To reduce the number of selectors needing tokenize in the preFilter, prefer arguments:
\t\t// 1. quoted (capture 3; capture 4 or capture 5)
\t\t\"('((?:\\\\\\\\.|[^\\\\\\\\'])*)'|\\\"((?:\\\\\\\\.|[^\\\\\\\\\\\"])*)\\\")|\" +
\t\t// 2. simple (capture 6)
\t\t\"((?:\\\\\\\\.|[^\\\\\\\\()[\\\\]]|\" + attributes + \")*)|\" +
\t\t// 3. anything else (capture 2)
\t\t\".*\" +
\t\t\")\\\\)|)\",

\t// Leading and non-escaped trailing whitespace, capturing some non-whitespace characters preceding the latter
\trwhitespace = new RegExp( whitespace + \"+\", \"g\" ),
\trtrim = new RegExp( \"^\" + whitespace + \"+|((?:^|[^\\\\\\\\])(?:\\\\\\\\.)*)\" + whitespace + \"+\$\", \"g\" ),

\trcomma = new RegExp( \"^\" + whitespace + \"*,\" + whitespace + \"*\" ),
\trcombinators = new RegExp( \"^\" + whitespace + \"*([>+~]|\" + whitespace + \")\" + whitespace + \"*\" ),

\trattributeQuotes = new RegExp( \"=\" + whitespace + \"*([^\\\\]'\\\"]*?)\" + whitespace + \"*\\\\]\", \"g\" ),

\trpseudo = new RegExp( pseudos ),
\tridentifier = new RegExp( \"^\" + identifier + \"\$\" ),

\tmatchExpr = {
\t\t\"ID\": new RegExp( \"^#(\" + characterEncoding + \")\" ),
\t\t\"CLASS\": new RegExp( \"^\\\\.(\" + characterEncoding + \")\" ),
\t\t\"TAG\": new RegExp( \"^(\" + characterEncoding.replace( \"w\", \"w*\" ) + \")\" ),
\t\t\"ATTR\": new RegExp( \"^\" + attributes ),
\t\t\"PSEUDO\": new RegExp( \"^\" + pseudos ),
\t\t\"CHILD\": new RegExp( \"^:(only|first|last|nth|nth-last)-(child|of-type)(?:\\\\(\" + whitespace +
\t\t\t\"*(even|odd|(([+-]|)(\\\\d*)n|)\" + whitespace + \"*(?:([+-]|)\" + whitespace +
\t\t\t\"*(\\\\d+)|))\" + whitespace + \"*\\\\)|)\", \"i\" ),
\t\t\"bool\": new RegExp( \"^(?:\" + booleans + \")\$\", \"i\" ),
\t\t// For use in libraries implementing .is()
\t\t// We use this for POS matching in `select`
\t\t\"needsContext\": new RegExp( \"^\" + whitespace + \"*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\\\\(\" +
\t\t\twhitespace + \"*((?:-\\\\d)?\\\\d*)\" + whitespace + \"*\\\\)|)(?=[^-]|\$)\", \"i\" )
\t},

\trinputs = /^(?:input|select|textarea|button)\$/i,
\trheader = /^h\\d\$/i,

\trnative = /^[^{]+\\{\\s*\\[native \\w/,

\t// Easily-parseable/retrievable ID or TAG or CLASS selectors
\trquickExpr = /^(?:#([\\w-]+)|(\\w+)|\\.([\\w-]+))\$/,

\trsibling = /[+~]/,
\trescape = /'|\\\\/g,

\t// CSS escapes http://www.w3.org/TR/CSS21/syndata.html#escaped-characters
\trunescape = new RegExp( \"\\\\\\\\([\\\\da-f]{1,6}\" + whitespace + \"?|(\" + whitespace + \")|.)\", \"ig\" ),
\tfunescape = function( _, escaped, escapedWhitespace ) {
\t\tvar high = \"0x\" + escaped - 0x10000;
\t\t// NaN means non-codepoint
\t\t// Support: Firefox<24
\t\t// Workaround erroneous numeric interpretation of +\"0x\"
\t\treturn high !== high || escapedWhitespace ?
\t\t\tescaped :
\t\t\thigh < 0 ?
\t\t\t\t// BMP codepoint
\t\t\t\tString.fromCharCode( high + 0x10000 ) :
\t\t\t\t// Supplemental Plane codepoint (surrogate pair)
\t\t\t\tString.fromCharCode( high >> 10 | 0xD800, high & 0x3FF | 0xDC00 );
\t},

\t// Used for iframes
\t// See setDocument()
\t// Removing the function wrapper causes a \"Permission Denied\"
\t// error in IE
\tunloadHandler = function() {
\t\tsetDocument();
\t};

// Optimize for push.apply( _, NodeList )
try {
\tpush.apply(
\t\t(arr = slice.call( preferredDoc.childNodes )),
\t\tpreferredDoc.childNodes
\t);
\t// Support: Android<4.0
\t// Detect silently failing push.apply
\tarr[ preferredDoc.childNodes.length ].nodeType;
} catch ( e ) {
\tpush = { apply: arr.length ?

\t\t// Leverage slice if possible
\t\tfunction( target, els ) {
\t\t\tpush_native.apply( target, slice.call(els) );
\t\t} :

\t\t// Support: IE<9
\t\t// Otherwise append directly
\t\tfunction( target, els ) {
\t\t\tvar j = target.length,
\t\t\t\ti = 0;
\t\t\t// Can't trust NodeList.length
\t\t\twhile ( (target[j++] = els[i++]) ) {}
\t\t\ttarget.length = j - 1;
\t\t}
\t};
}

function Sizzle( selector, context, results, seed ) {
\tvar match, elem, m, nodeType,
\t\t// QSA vars
\t\ti, groups, old, nid, newContext, newSelector;

\tif ( ( context ? context.ownerDocument || context : preferredDoc ) !== document ) {
\t\tsetDocument( context );
\t}

\tcontext = context || document;
\tresults = results || [];
\tnodeType = context.nodeType;

\tif ( typeof selector !== \"string\" || !selector ||
\t\tnodeType !== 1 && nodeType !== 9 && nodeType !== 11 ) {

\t\treturn results;
\t}

\tif ( !seed && documentIsHTML ) {

\t\t// Try to shortcut find operations when possible (e.g., not under DocumentFragment)
\t\tif ( nodeType !== 11 && (match = rquickExpr.exec( selector )) ) {
\t\t\t// Speed-up: Sizzle(\"#ID\")
\t\t\tif ( (m = match[1]) ) {
\t\t\t\tif ( nodeType === 9 ) {
\t\t\t\t\telem = context.getElementById( m );
\t\t\t\t\t// Check parentNode to catch when Blackberry 4.6 returns
\t\t\t\t\t// nodes that are no longer in the document (jQuery #6963)
\t\t\t\t\tif ( elem && elem.parentNode ) {
\t\t\t\t\t\t// Handle the case where IE, Opera, and Webkit return items
\t\t\t\t\t\t// by name instead of ID
\t\t\t\t\t\tif ( elem.id === m ) {
\t\t\t\t\t\t\tresults.push( elem );
\t\t\t\t\t\t\treturn results;
\t\t\t\t\t\t}
\t\t\t\t\t} else {
\t\t\t\t\t\treturn results;
\t\t\t\t\t}
\t\t\t\t} else {
\t\t\t\t\t// Context is not a document
\t\t\t\t\tif ( context.ownerDocument && (elem = context.ownerDocument.getElementById( m )) &&
\t\t\t\t\t\tcontains( context, elem ) && elem.id === m ) {
\t\t\t\t\t\tresults.push( elem );
\t\t\t\t\t\treturn results;
\t\t\t\t\t}
\t\t\t\t}

\t\t\t// Speed-up: Sizzle(\"TAG\")
\t\t\t} else if ( match[2] ) {
\t\t\t\tpush.apply( results, context.getElementsByTagName( selector ) );
\t\t\t\treturn results;

\t\t\t// Speed-up: Sizzle(\".CLASS\")
\t\t\t} else if ( (m = match[3]) && support.getElementsByClassName ) {
\t\t\t\tpush.apply( results, context.getElementsByClassName( m ) );
\t\t\t\treturn results;
\t\t\t}
\t\t}

\t\t// QSA path
\t\tif ( support.qsa && (!rbuggyQSA || !rbuggyQSA.test( selector )) ) {
\t\t\tnid = old = expando;
\t\t\tnewContext = context;
\t\t\tnewSelector = nodeType !== 1 && selector;

\t\t\t// qSA works strangely on Element-rooted queries
\t\t\t// We can work around this by specifying an extra ID on the root
\t\t\t// and working up from there (Thanks to Andrew Dupont for the technique)
\t\t\t// IE 8 doesn't work on object elements
\t\t\tif ( nodeType === 1 && context.nodeName.toLowerCase() !== \"object\" ) {
\t\t\t\tgroups = tokenize( selector );

\t\t\t\tif ( (old = context.getAttribute(\"id\")) ) {
\t\t\t\t\tnid = old.replace( rescape, \"\\\\\$&\" );
\t\t\t\t} else {
\t\t\t\t\tcontext.setAttribute( \"id\", nid );
\t\t\t\t}
\t\t\t\tnid = \"[id='\" + nid + \"'] \";

\t\t\t\ti = groups.length;
\t\t\t\twhile ( i-- ) {
\t\t\t\t\tgroups[i] = nid + toSelector( groups[i] );
\t\t\t\t}
\t\t\t\tnewContext = rsibling.test( selector ) && testContext( context.parentNode ) || context;
\t\t\t\tnewSelector = groups.join(\",\");
\t\t\t}

\t\t\tif ( newSelector ) {
\t\t\t\ttry {
\t\t\t\t\tpush.apply( results,
\t\t\t\t\t\tnewContext.querySelectorAll( newSelector )
\t\t\t\t\t);
\t\t\t\t\treturn results;
\t\t\t\t} catch(qsaError) {
\t\t\t\t} finally {
\t\t\t\t\tif ( !old ) {
\t\t\t\t\t\tcontext.removeAttribute(\"id\");
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}
\t}

\t// All others
\treturn select( selector.replace( rtrim, \"\$1\" ), context, results, seed );
}

/**
 * Create key-value caches of limited size
 * @returns {Function(string, Object)} Returns the Object data after storing it on itself with
 *\tproperty name the (space-suffixed) string and (if the cache is larger than Expr.cacheLength)
 *\tdeleting the oldest entry
 */
function createCache() {
\tvar keys = [];

\tfunction cache( key, value ) {
\t\t// Use (key + \" \") to avoid collision with native prototype properties (see Issue #157)
\t\tif ( keys.push( key + \" \" ) > Expr.cacheLength ) {
\t\t\t// Only keep the most recent entries
\t\t\tdelete cache[ keys.shift() ];
\t\t}
\t\treturn (cache[ key + \" \" ] = value);
\t}
\treturn cache;
}

/**
 * Mark a function for special use by Sizzle
 * @param {Function} fn The function to mark
 */
function markFunction( fn ) {
\tfn[ expando ] = true;
\treturn fn;
}

/**
 * Support testing using an element
 * @param {Function} fn Passed the created div and expects a boolean result
 */
function assert( fn ) {
\tvar div = document.createElement(\"div\");

\ttry {
\t\treturn !!fn( div );
\t} catch (e) {
\t\treturn false;
\t} finally {
\t\t// Remove from its parent by default
\t\tif ( div.parentNode ) {
\t\t\tdiv.parentNode.removeChild( div );
\t\t}
\t\t// release memory in IE
\t\tdiv = null;
\t}
}

/**
 * Adds the same handler for all of the specified attrs
 * @param {String} attrs Pipe-separated list of attributes
 * @param {Function} handler The method that will be applied
 */
function addHandle( attrs, handler ) {
\tvar arr = attrs.split(\"|\"),
\t\ti = attrs.length;

\twhile ( i-- ) {
\t\tExpr.attrHandle[ arr[i] ] = handler;
\t}
}

/**
 * Checks document order of two siblings
 * @param {Element} a
 * @param {Element} b
 * @returns {Number} Returns less than 0 if a precedes b, greater than 0 if a follows b
 */
function siblingCheck( a, b ) {
\tvar cur = b && a,
\t\tdiff = cur && a.nodeType === 1 && b.nodeType === 1 &&
\t\t\t( ~b.sourceIndex || MAX_NEGATIVE ) -
\t\t\t( ~a.sourceIndex || MAX_NEGATIVE );

\t// Use IE sourceIndex if available on both nodes
\tif ( diff ) {
\t\treturn diff;
\t}

\t// Check if b follows a
\tif ( cur ) {
\t\twhile ( (cur = cur.nextSibling) ) {
\t\t\tif ( cur === b ) {
\t\t\t\treturn -1;
\t\t\t}
\t\t}
\t}

\treturn a ? 1 : -1;
}

/**
 * Returns a function to use in pseudos for input types
 * @param {String} type
 */
function createInputPseudo( type ) {
\treturn function( elem ) {
\t\tvar name = elem.nodeName.toLowerCase();
\t\treturn name === \"input\" && elem.type === type;
\t};
}

/**
 * Returns a function to use in pseudos for buttons
 * @param {String} type
 */
function createButtonPseudo( type ) {
\treturn function( elem ) {
\t\tvar name = elem.nodeName.toLowerCase();
\t\treturn (name === \"input\" || name === \"button\") && elem.type === type;
\t};
}

/**
 * Returns a function to use in pseudos for positionals
 * @param {Function} fn
 */
function createPositionalPseudo( fn ) {
\treturn markFunction(function( argument ) {
\t\targument = +argument;
\t\treturn markFunction(function( seed, matches ) {
\t\t\tvar j,
\t\t\t\tmatchIndexes = fn( [], seed.length, argument ),
\t\t\t\ti = matchIndexes.length;

\t\t\t// Match elements found at the specified indexes
\t\t\twhile ( i-- ) {
\t\t\t\tif ( seed[ (j = matchIndexes[i]) ] ) {
\t\t\t\t\tseed[j] = !(matches[j] = seed[j]);
\t\t\t\t}
\t\t\t}
\t\t});
\t});
}

/**
 * Checks a node for validity as a Sizzle context
 * @param {Element|Object=} context
 * @returns {Element|Object|Boolean} The input node if acceptable, otherwise a falsy value
 */
function testContext( context ) {
\treturn context && typeof context.getElementsByTagName !== \"undefined\" && context;
}

// Expose support vars for convenience
support = Sizzle.support = {};

/**
 * Detects XML nodes
 * @param {Element|Object} elem An element or a document
 * @returns {Boolean} True iff elem is a non-HTML XML node
 */
isXML = Sizzle.isXML = function( elem ) {
\t// documentElement is verified for cases where it doesn't yet exist
\t// (such as loading iframes in IE - #4833)
\tvar documentElement = elem && (elem.ownerDocument || elem).documentElement;
\treturn documentElement ? documentElement.nodeName !== \"HTML\" : false;
};

/**
 * Sets document-related variables once based on the current document
 * @param {Element|Object} [doc] An element or document object to use to set the document
 * @returns {Object} Returns the current document
 */
setDocument = Sizzle.setDocument = function( node ) {
\tvar hasCompare, parent,
\t\tdoc = node ? node.ownerDocument || node : preferredDoc;

\t// If no document and documentElement is available, return
\tif ( doc === document || doc.nodeType !== 9 || !doc.documentElement ) {
\t\treturn document;
\t}

\t// Set our document
\tdocument = doc;
\tdocElem = doc.documentElement;
\tparent = doc.defaultView;

\t// Support: IE>8
\t// If iframe document is assigned to \"document\" variable and if iframe has been reloaded,
\t// IE will throw \"permission denied\" error when accessing \"document\" variable, see jQuery #13936
\t// IE6-8 do not support the defaultView property so parent will be undefined
\tif ( parent && parent !== parent.top ) {
\t\t// IE11 does not have attachEvent, so all must suffer
\t\tif ( parent.addEventListener ) {
\t\t\tparent.addEventListener( \"unload\", unloadHandler, false );
\t\t} else if ( parent.attachEvent ) {
\t\t\tparent.attachEvent( \"onunload\", unloadHandler );
\t\t}
\t}

\t/* Support tests
\t---------------------------------------------------------------------- */
\tdocumentIsHTML = !isXML( doc );

\t/* Attributes
\t---------------------------------------------------------------------- */

\t// Support: IE<8
\t// Verify that getAttribute really returns attributes and not properties
\t// (excepting IE8 booleans)
\tsupport.attributes = assert(function( div ) {
\t\tdiv.className = \"i\";
\t\treturn !div.getAttribute(\"className\");
\t});

\t/* getElement(s)By*
\t---------------------------------------------------------------------- */

\t// Check if getElementsByTagName(\"*\") returns only elements
\tsupport.getElementsByTagName = assert(function( div ) {
\t\tdiv.appendChild( doc.createComment(\"\") );
\t\treturn !div.getElementsByTagName(\"*\").length;
\t});

\t// Support: IE<9
\tsupport.getElementsByClassName = rnative.test( doc.getElementsByClassName );

\t// Support: IE<10
\t// Check if getElementById returns elements by name
\t// The broken getElementById methods don't pick up programatically-set names,
\t// so use a roundabout getElementsByName test
\tsupport.getById = assert(function( div ) {
\t\tdocElem.appendChild( div ).id = expando;
\t\treturn !doc.getElementsByName || !doc.getElementsByName( expando ).length;
\t});

\t// ID find and filter
\tif ( support.getById ) {
\t\tExpr.find[\"ID\"] = function( id, context ) {
\t\t\tif ( typeof context.getElementById !== \"undefined\" && documentIsHTML ) {
\t\t\t\tvar m = context.getElementById( id );
\t\t\t\t// Check parentNode to catch when Blackberry 4.6 returns
\t\t\t\t// nodes that are no longer in the document #6963
\t\t\t\treturn m && m.parentNode ? [ m ] : [];
\t\t\t}
\t\t};
\t\tExpr.filter[\"ID\"] = function( id ) {
\t\t\tvar attrId = id.replace( runescape, funescape );
\t\t\treturn function( elem ) {
\t\t\t\treturn elem.getAttribute(\"id\") === attrId;
\t\t\t};
\t\t};
\t} else {
\t\t// Support: IE6/7
\t\t// getElementById is not reliable as a find shortcut
\t\tdelete Expr.find[\"ID\"];

\t\tExpr.filter[\"ID\"] =  function( id ) {
\t\t\tvar attrId = id.replace( runescape, funescape );
\t\t\treturn function( elem ) {
\t\t\t\tvar node = typeof elem.getAttributeNode !== \"undefined\" && elem.getAttributeNode(\"id\");
\t\t\t\treturn node && node.value === attrId;
\t\t\t};
\t\t};
\t}

\t// Tag
\tExpr.find[\"TAG\"] = support.getElementsByTagName ?
\t\tfunction( tag, context ) {
\t\t\tif ( typeof context.getElementsByTagName !== \"undefined\" ) {
\t\t\t\treturn context.getElementsByTagName( tag );

\t\t\t// DocumentFragment nodes don't have gEBTN
\t\t\t} else if ( support.qsa ) {
\t\t\t\treturn context.querySelectorAll( tag );
\t\t\t}
\t\t} :

\t\tfunction( tag, context ) {
\t\t\tvar elem,
\t\t\t\ttmp = [],
\t\t\t\ti = 0,
\t\t\t\t// By happy coincidence, a (broken) gEBTN appears on DocumentFragment nodes too
\t\t\t\tresults = context.getElementsByTagName( tag );

\t\t\t// Filter out possible comments
\t\t\tif ( tag === \"*\" ) {
\t\t\t\twhile ( (elem = results[i++]) ) {
\t\t\t\t\tif ( elem.nodeType === 1 ) {
\t\t\t\t\t\ttmp.push( elem );
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\treturn tmp;
\t\t\t}
\t\t\treturn results;
\t\t};

\t// Class
\tExpr.find[\"CLASS\"] = support.getElementsByClassName && function( className, context ) {
\t\tif ( documentIsHTML ) {
\t\t\treturn context.getElementsByClassName( className );
\t\t}
\t};

\t/* QSA/matchesSelector
\t---------------------------------------------------------------------- */

\t// QSA and matchesSelector support

\t// matchesSelector(:active) reports false when true (IE9/Opera 11.5)
\trbuggyMatches = [];

\t// qSa(:focus) reports false when true (Chrome 21)
\t// We allow this because of a bug in IE8/9 that throws an error
\t// whenever `document.activeElement` is accessed on an iframe
\t// So, we allow :focus to pass through QSA all the time to avoid the IE error
\t// See http://bugs.jquery.com/ticket/13378
\trbuggyQSA = [];

\tif ( (support.qsa = rnative.test( doc.querySelectorAll )) ) {
\t\t// Build QSA regex
\t\t// Regex strategy adopted from Diego Perini
\t\tassert(function( div ) {
\t\t\t// Select is set to empty string on purpose
\t\t\t// This is to test IE's treatment of not explicitly
\t\t\t// setting a boolean content attribute,
\t\t\t// since its presence should be enough
\t\t\t// http://bugs.jquery.com/ticket/12359
\t\t\tdocElem.appendChild( div ).innerHTML = \"<a id='\" + expando + \"'></a>\" +
\t\t\t\t\"<select id='\" + expando + \"-\\f]' msallowcapture=''>\" +
\t\t\t\t\"<option selected=''></option></select>\";

\t\t\t// Support: IE8, Opera 11-12.16
\t\t\t// Nothing should be selected when empty strings follow ^= or \$= or *=
\t\t\t// The test attribute must be unknown in Opera but \"safe\" for WinRT
\t\t\t// http://msdn.microsoft.com/en-us/library/ie/hh465388.aspx#attribute_section
\t\t\tif ( div.querySelectorAll(\"[msallowcapture^='']\").length ) {
\t\t\t\trbuggyQSA.push( \"[*^\$]=\" + whitespace + \"*(?:''|\\\"\\\")\" );
\t\t\t}

\t\t\t// Support: IE8
\t\t\t// Boolean attributes and \"value\" are not treated correctly
\t\t\tif ( !div.querySelectorAll(\"[selected]\").length ) {
\t\t\t\trbuggyQSA.push( \"\\\\[\" + whitespace + \"*(?:value|\" + booleans + \")\" );
\t\t\t}

\t\t\t// Support: Chrome<29, Android<4.2+, Safari<7.0+, iOS<7.0+, PhantomJS<1.9.7+
\t\t\tif ( !div.querySelectorAll( \"[id~=\" + expando + \"-]\" ).length ) {
\t\t\t\trbuggyQSA.push(\"~=\");
\t\t\t}

\t\t\t// Webkit/Opera - :checked should return selected option elements
\t\t\t// http://www.w3.org/TR/2011/REC-css3-selectors-20110929/#checked
\t\t\t// IE8 throws error here and will not see later tests
\t\t\tif ( !div.querySelectorAll(\":checked\").length ) {
\t\t\t\trbuggyQSA.push(\":checked\");
\t\t\t}

\t\t\t// Support: Safari 8+, iOS 8+
\t\t\t// https://bugs.webkit.org/show_bug.cgi?id=136851
\t\t\t// In-page `selector#id sibing-combinator selector` fails
\t\t\tif ( !div.querySelectorAll( \"a#\" + expando + \"+*\" ).length ) {
\t\t\t\trbuggyQSA.push(\".#.+[+~]\");
\t\t\t}
\t\t});

\t\tassert(function( div ) {
\t\t\t// Support: Windows 8 Native Apps
\t\t\t// The type and name attributes are restricted during .innerHTML assignment
\t\t\tvar input = doc.createElement(\"input\");
\t\t\tinput.setAttribute( \"type\", \"hidden\" );
\t\t\tdiv.appendChild( input ).setAttribute( \"name\", \"D\" );

\t\t\t// Support: IE8
\t\t\t// Enforce case-sensitivity of name attribute
\t\t\tif ( div.querySelectorAll(\"[name=d]\").length ) {
\t\t\t\trbuggyQSA.push( \"name\" + whitespace + \"*[*^\$|!~]?=\" );
\t\t\t}

\t\t\t// FF 3.5 - :enabled/:disabled and hidden elements (hidden elements are still enabled)
\t\t\t// IE8 throws error here and will not see later tests
\t\t\tif ( !div.querySelectorAll(\":enabled\").length ) {
\t\t\t\trbuggyQSA.push( \":enabled\", \":disabled\" );
\t\t\t}

\t\t\t// Opera 10-11 does not throw on post-comma invalid pseudos
\t\t\tdiv.querySelectorAll(\"*,:x\");
\t\t\trbuggyQSA.push(\",.*:\");
\t\t});
\t}

\tif ( (support.matchesSelector = rnative.test( (matches = docElem.matches ||
\t\tdocElem.webkitMatchesSelector ||
\t\tdocElem.mozMatchesSelector ||
\t\tdocElem.oMatchesSelector ||
\t\tdocElem.msMatchesSelector) )) ) {

\t\tassert(function( div ) {
\t\t\t// Check to see if it's possible to do matchesSelector
\t\t\t// on a disconnected node (IE 9)
\t\t\tsupport.disconnectedMatch = matches.call( div, \"div\" );

\t\t\t// This should fail with an exception
\t\t\t// Gecko does not error, returns false instead
\t\t\tmatches.call( div, \"[s!='']:x\" );
\t\t\trbuggyMatches.push( \"!=\", pseudos );
\t\t});
\t}

\trbuggyQSA = rbuggyQSA.length && new RegExp( rbuggyQSA.join(\"|\") );
\trbuggyMatches = rbuggyMatches.length && new RegExp( rbuggyMatches.join(\"|\") );

\t/* Contains
\t---------------------------------------------------------------------- */
\thasCompare = rnative.test( docElem.compareDocumentPosition );

\t// Element contains another
\t// Purposefully does not implement inclusive descendent
\t// As in, an element does not contain itself
\tcontains = hasCompare || rnative.test( docElem.contains ) ?
\t\tfunction( a, b ) {
\t\t\tvar adown = a.nodeType === 9 ? a.documentElement : a,
\t\t\t\tbup = b && b.parentNode;
\t\t\treturn a === bup || !!( bup && bup.nodeType === 1 && (
\t\t\t\tadown.contains ?
\t\t\t\t\tadown.contains( bup ) :
\t\t\t\t\ta.compareDocumentPosition && a.compareDocumentPosition( bup ) & 16
\t\t\t));
\t\t} :
\t\tfunction( a, b ) {
\t\t\tif ( b ) {
\t\t\t\twhile ( (b = b.parentNode) ) {
\t\t\t\t\tif ( b === a ) {
\t\t\t\t\t\treturn true;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t\treturn false;
\t\t};

\t/* Sorting
\t---------------------------------------------------------------------- */

\t// Document order sorting
\tsortOrder = hasCompare ?
\tfunction( a, b ) {

\t\t// Flag for duplicate removal
\t\tif ( a === b ) {
\t\t\thasDuplicate = true;
\t\t\treturn 0;
\t\t}

\t\t// Sort on method existence if only one input has compareDocumentPosition
\t\tvar compare = !a.compareDocumentPosition - !b.compareDocumentPosition;
\t\tif ( compare ) {
\t\t\treturn compare;
\t\t}

\t\t// Calculate position if both inputs belong to the same document
\t\tcompare = ( a.ownerDocument || a ) === ( b.ownerDocument || b ) ?
\t\t\ta.compareDocumentPosition( b ) :

\t\t\t// Otherwise we know they are disconnected
\t\t\t1;

\t\t// Disconnected nodes
\t\tif ( compare & 1 ||
\t\t\t(!support.sortDetached && b.compareDocumentPosition( a ) === compare) ) {

\t\t\t// Choose the first element that is related to our preferred document
\t\t\tif ( a === doc || a.ownerDocument === preferredDoc && contains(preferredDoc, a) ) {
\t\t\t\treturn -1;
\t\t\t}
\t\t\tif ( b === doc || b.ownerDocument === preferredDoc && contains(preferredDoc, b) ) {
\t\t\t\treturn 1;
\t\t\t}

\t\t\t// Maintain original order
\t\t\treturn sortInput ?
\t\t\t\t( indexOf( sortInput, a ) - indexOf( sortInput, b ) ) :
\t\t\t\t0;
\t\t}

\t\treturn compare & 4 ? -1 : 1;
\t} :
\tfunction( a, b ) {
\t\t// Exit early if the nodes are identical
\t\tif ( a === b ) {
\t\t\thasDuplicate = true;
\t\t\treturn 0;
\t\t}

\t\tvar cur,
\t\t\ti = 0,
\t\t\taup = a.parentNode,
\t\t\tbup = b.parentNode,
\t\t\tap = [ a ],
\t\t\tbp = [ b ];

\t\t// Parentless nodes are either documents or disconnected
\t\tif ( !aup || !bup ) {
\t\t\treturn a === doc ? -1 :
\t\t\t\tb === doc ? 1 :
\t\t\t\taup ? -1 :
\t\t\t\tbup ? 1 :
\t\t\t\tsortInput ?
\t\t\t\t( indexOf( sortInput, a ) - indexOf( sortInput, b ) ) :
\t\t\t\t0;

\t\t// If the nodes are siblings, we can do a quick check
\t\t} else if ( aup === bup ) {
\t\t\treturn siblingCheck( a, b );
\t\t}

\t\t// Otherwise we need full lists of their ancestors for comparison
\t\tcur = a;
\t\twhile ( (cur = cur.parentNode) ) {
\t\t\tap.unshift( cur );
\t\t}
\t\tcur = b;
\t\twhile ( (cur = cur.parentNode) ) {
\t\t\tbp.unshift( cur );
\t\t}

\t\t// Walk down the tree looking for a discrepancy
\t\twhile ( ap[i] === bp[i] ) {
\t\t\ti++;
\t\t}

\t\treturn i ?
\t\t\t// Do a sibling check if the nodes have a common ancestor
\t\t\tsiblingCheck( ap[i], bp[i] ) :

\t\t\t// Otherwise nodes in our document sort first
\t\t\tap[i] === preferredDoc ? -1 :
\t\t\tbp[i] === preferredDoc ? 1 :
\t\t\t0;
\t};

\treturn doc;
};

Sizzle.matches = function( expr, elements ) {
\treturn Sizzle( expr, null, null, elements );
};

Sizzle.matchesSelector = function( elem, expr ) {
\t// Set document vars if needed
\tif ( ( elem.ownerDocument || elem ) !== document ) {
\t\tsetDocument( elem );
\t}

\t// Make sure that attribute selectors are quoted
\texpr = expr.replace( rattributeQuotes, \"='\$1']\" );

\tif ( support.matchesSelector && documentIsHTML &&
\t\t( !rbuggyMatches || !rbuggyMatches.test( expr ) ) &&
\t\t( !rbuggyQSA     || !rbuggyQSA.test( expr ) ) ) {

\t\ttry {
\t\t\tvar ret = matches.call( elem, expr );

\t\t\t// IE 9's matchesSelector returns false on disconnected nodes
\t\t\tif ( ret || support.disconnectedMatch ||
\t\t\t\t\t// As well, disconnected nodes are said to be in a document
\t\t\t\t\t// fragment in IE 9
\t\t\t\t\telem.document && elem.document.nodeType !== 11 ) {
\t\t\t\treturn ret;
\t\t\t}
\t\t} catch (e) {}
\t}

\treturn Sizzle( expr, document, null, [ elem ] ).length > 0;
};

Sizzle.contains = function( context, elem ) {
\t// Set document vars if needed
\tif ( ( context.ownerDocument || context ) !== document ) {
\t\tsetDocument( context );
\t}
\treturn contains( context, elem );
};

Sizzle.attr = function( elem, name ) {
\t// Set document vars if needed
\tif ( ( elem.ownerDocument || elem ) !== document ) {
\t\tsetDocument( elem );
\t}

\tvar fn = Expr.attrHandle[ name.toLowerCase() ],
\t\t// Don't get fooled by Object.prototype properties (jQuery #13807)
\t\tval = fn && hasOwn.call( Expr.attrHandle, name.toLowerCase() ) ?
\t\t\tfn( elem, name, !documentIsHTML ) :
\t\t\tundefined;

\treturn val !== undefined ?
\t\tval :
\t\tsupport.attributes || !documentIsHTML ?
\t\t\telem.getAttribute( name ) :
\t\t\t(val = elem.getAttributeNode(name)) && val.specified ?
\t\t\t\tval.value :
\t\t\t\tnull;
};

Sizzle.error = function( msg ) {
\tthrow new Error( \"Syntax error, unrecognized expression: \" + msg );
};

/**
 * Document sorting and removing duplicates
 * @param {ArrayLike} results
 */
Sizzle.uniqueSort = function( results ) {
\tvar elem,
\t\tduplicates = [],
\t\tj = 0,
\t\ti = 0;

\t// Unless we *know* we can detect duplicates, assume their presence
\thasDuplicate = !support.detectDuplicates;
\tsortInput = !support.sortStable && results.slice( 0 );
\tresults.sort( sortOrder );

\tif ( hasDuplicate ) {
\t\twhile ( (elem = results[i++]) ) {
\t\t\tif ( elem === results[ i ] ) {
\t\t\t\tj = duplicates.push( i );
\t\t\t}
\t\t}
\t\twhile ( j-- ) {
\t\t\tresults.splice( duplicates[ j ], 1 );
\t\t}
\t}

\t// Clear input after sorting to release objects
\t// See https://github.com/jquery/sizzle/pull/225
\tsortInput = null;

\treturn results;
};

/**
 * Utility function for retrieving the text value of an array of DOM nodes
 * @param {Array|Element} elem
 */
getText = Sizzle.getText = function( elem ) {
\tvar node,
\t\tret = \"\",
\t\ti = 0,
\t\tnodeType = elem.nodeType;

\tif ( !nodeType ) {
\t\t// If no nodeType, this is expected to be an array
\t\twhile ( (node = elem[i++]) ) {
\t\t\t// Do not traverse comment nodes
\t\t\tret += getText( node );
\t\t}
\t} else if ( nodeType === 1 || nodeType === 9 || nodeType === 11 ) {
\t\t// Use textContent for elements
\t\t// innerText usage removed for consistency of new lines (jQuery #11153)
\t\tif ( typeof elem.textContent === \"string\" ) {
\t\t\treturn elem.textContent;
\t\t} else {
\t\t\t// Traverse its children
\t\t\tfor ( elem = elem.firstChild; elem; elem = elem.nextSibling ) {
\t\t\t\tret += getText( elem );
\t\t\t}
\t\t}
\t} else if ( nodeType === 3 || nodeType === 4 ) {
\t\treturn elem.nodeValue;
\t}
\t// Do not include comment or processing instruction nodes

\treturn ret;
};

Expr = Sizzle.selectors = {

\t// Can be adjusted by the user
\tcacheLength: 50,

\tcreatePseudo: markFunction,

\tmatch: matchExpr,

\tattrHandle: {},

\tfind: {},

\trelative: {
\t\t\">\": { dir: \"parentNode\", first: true },
\t\t\" \": { dir: \"parentNode\" },
\t\t\"+\": { dir: \"previousSibling\", first: true },
\t\t\"~\": { dir: \"previousSibling\" }
\t},

\tpreFilter: {
\t\t\"ATTR\": function( match ) {
\t\t\tmatch[1] = match[1].replace( runescape, funescape );

\t\t\t// Move the given value to match[3] whether quoted or unquoted
\t\t\tmatch[3] = ( match[3] || match[4] || match[5] || \"\" ).replace( runescape, funescape );

\t\t\tif ( match[2] === \"~=\" ) {
\t\t\t\tmatch[3] = \" \" + match[3] + \" \";
\t\t\t}

\t\t\treturn match.slice( 0, 4 );
\t\t},

\t\t\"CHILD\": function( match ) {
\t\t\t/* matches from matchExpr[\"CHILD\"]
\t\t\t\t1 type (only|nth|...)
\t\t\t\t2 what (child|of-type)
\t\t\t\t3 argument (even|odd|\\d*|\\d*n([+-]\\d+)?|...)
\t\t\t\t4 xn-component of xn+y argument ([+-]?\\d*n|)
\t\t\t\t5 sign of xn-component
\t\t\t\t6 x of xn-component
\t\t\t\t7 sign of y-component
\t\t\t\t8 y of y-component
\t\t\t*/
\t\t\tmatch[1] = match[1].toLowerCase();

\t\t\tif ( match[1].slice( 0, 3 ) === \"nth\" ) {
\t\t\t\t// nth-* requires argument
\t\t\t\tif ( !match[3] ) {
\t\t\t\t\tSizzle.error( match[0] );
\t\t\t\t}

\t\t\t\t// numeric x and y parameters for Expr.filter.CHILD
\t\t\t\t// remember that false/true cast respectively to 0/1
\t\t\t\tmatch[4] = +( match[4] ? match[5] + (match[6] || 1) : 2 * ( match[3] === \"even\" || match[3] === \"odd\" ) );
\t\t\t\tmatch[5] = +( ( match[7] + match[8] ) || match[3] === \"odd\" );

\t\t\t// other types prohibit arguments
\t\t\t} else if ( match[3] ) {
\t\t\t\tSizzle.error( match[0] );
\t\t\t}

\t\t\treturn match;
\t\t},

\t\t\"PSEUDO\": function( match ) {
\t\t\tvar excess,
\t\t\t\tunquoted = !match[6] && match[2];

\t\t\tif ( matchExpr[\"CHILD\"].test( match[0] ) ) {
\t\t\t\treturn null;
\t\t\t}

\t\t\t// Accept quoted arguments as-is
\t\t\tif ( match[3] ) {
\t\t\t\tmatch[2] = match[4] || match[5] || \"\";

\t\t\t// Strip excess characters from unquoted arguments
\t\t\t} else if ( unquoted && rpseudo.test( unquoted ) &&
\t\t\t\t// Get excess from tokenize (recursively)
\t\t\t\t(excess = tokenize( unquoted, true )) &&
\t\t\t\t// advance to the next closing parenthesis
\t\t\t\t(excess = unquoted.indexOf( \")\", unquoted.length - excess ) - unquoted.length) ) {

\t\t\t\t// excess is a negative index
\t\t\t\tmatch[0] = match[0].slice( 0, excess );
\t\t\t\tmatch[2] = unquoted.slice( 0, excess );
\t\t\t}

\t\t\t// Return only captures needed by the pseudo filter method (type and argument)
\t\t\treturn match.slice( 0, 3 );
\t\t}
\t},

\tfilter: {

\t\t\"TAG\": function( nodeNameSelector ) {
\t\t\tvar nodeName = nodeNameSelector.replace( runescape, funescape ).toLowerCase();
\t\t\treturn nodeNameSelector === \"*\" ?
\t\t\t\tfunction() { return true; } :
\t\t\t\tfunction( elem ) {
\t\t\t\t\treturn elem.nodeName && elem.nodeName.toLowerCase() === nodeName;
\t\t\t\t};
\t\t},

\t\t\"CLASS\": function( className ) {
\t\t\tvar pattern = classCache[ className + \" \" ];

\t\t\treturn pattern ||
\t\t\t\t(pattern = new RegExp( \"(^|\" + whitespace + \")\" + className + \"(\" + whitespace + \"|\$)\" )) &&
\t\t\t\tclassCache( className, function( elem ) {
\t\t\t\t\treturn pattern.test( typeof elem.className === \"string\" && elem.className || typeof elem.getAttribute !== \"undefined\" && elem.getAttribute(\"class\") || \"\" );
\t\t\t\t});
\t\t},

\t\t\"ATTR\": function( name, operator, check ) {
\t\t\treturn function( elem ) {
\t\t\t\tvar result = Sizzle.attr( elem, name );

\t\t\t\tif ( result == null ) {
\t\t\t\t\treturn operator === \"!=\";
\t\t\t\t}
\t\t\t\tif ( !operator ) {
\t\t\t\t\treturn true;
\t\t\t\t}

\t\t\t\tresult += \"\";

\t\t\t\treturn operator === \"=\" ? result === check :
\t\t\t\t\toperator === \"!=\" ? result !== check :
\t\t\t\t\toperator === \"^=\" ? check && result.indexOf( check ) === 0 :
\t\t\t\t\toperator === \"*=\" ? check && result.indexOf( check ) > -1 :
\t\t\t\t\toperator === \"\$=\" ? check && result.slice( -check.length ) === check :
\t\t\t\t\toperator === \"~=\" ? ( \" \" + result.replace( rwhitespace, \" \" ) + \" \" ).indexOf( check ) > -1 :
\t\t\t\t\toperator === \"|=\" ? result === check || result.slice( 0, check.length + 1 ) === check + \"-\" :
\t\t\t\t\tfalse;
\t\t\t};
\t\t},

\t\t\"CHILD\": function( type, what, argument, first, last ) {
\t\t\tvar simple = type.slice( 0, 3 ) !== \"nth\",
\t\t\t\tforward = type.slice( -4 ) !== \"last\",
\t\t\t\tofType = what === \"of-type\";

\t\t\treturn first === 1 && last === 0 ?

\t\t\t\t// Shortcut for :nth-*(n)
\t\t\t\tfunction( elem ) {
\t\t\t\t\treturn !!elem.parentNode;
\t\t\t\t} :

\t\t\t\tfunction( elem, context, xml ) {
\t\t\t\t\tvar cache, outerCache, node, diff, nodeIndex, start,
\t\t\t\t\t\tdir = simple !== forward ? \"nextSibling\" : \"previousSibling\",
\t\t\t\t\t\tparent = elem.parentNode,
\t\t\t\t\t\tname = ofType && elem.nodeName.toLowerCase(),
\t\t\t\t\t\tuseCache = !xml && !ofType;

\t\t\t\t\tif ( parent ) {

\t\t\t\t\t\t// :(first|last|only)-(child|of-type)
\t\t\t\t\t\tif ( simple ) {
\t\t\t\t\t\t\twhile ( dir ) {
\t\t\t\t\t\t\t\tnode = elem;
\t\t\t\t\t\t\t\twhile ( (node = node[ dir ]) ) {
\t\t\t\t\t\t\t\t\tif ( ofType ? node.nodeName.toLowerCase() === name : node.nodeType === 1 ) {
\t\t\t\t\t\t\t\t\t\treturn false;
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t// Reverse direction for :only-* (if we haven't yet done so)
\t\t\t\t\t\t\t\tstart = dir = type === \"only\" && !start && \"nextSibling\";
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t}

\t\t\t\t\t\tstart = [ forward ? parent.firstChild : parent.lastChild ];

\t\t\t\t\t\t// non-xml :nth-child(...) stores cache data on `parent`
\t\t\t\t\t\tif ( forward && useCache ) {
\t\t\t\t\t\t\t// Seek `elem` from a previously-cached index
\t\t\t\t\t\t\touterCache = parent[ expando ] || (parent[ expando ] = {});
\t\t\t\t\t\t\tcache = outerCache[ type ] || [];
\t\t\t\t\t\t\tnodeIndex = cache[0] === dirruns && cache[1];
\t\t\t\t\t\t\tdiff = cache[0] === dirruns && cache[2];
\t\t\t\t\t\t\tnode = nodeIndex && parent.childNodes[ nodeIndex ];

\t\t\t\t\t\t\twhile ( (node = ++nodeIndex && node && node[ dir ] ||

\t\t\t\t\t\t\t\t// Fallback to seeking `elem` from the start
\t\t\t\t\t\t\t\t(diff = nodeIndex = 0) || start.pop()) ) {

\t\t\t\t\t\t\t\t// When found, cache indexes on `parent` and break
\t\t\t\t\t\t\t\tif ( node.nodeType === 1 && ++diff && node === elem ) {
\t\t\t\t\t\t\t\t\touterCache[ type ] = [ dirruns, nodeIndex, diff ];
\t\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}

\t\t\t\t\t\t// Use previously-cached element index if available
\t\t\t\t\t\t} else if ( useCache && (cache = (elem[ expando ] || (elem[ expando ] = {}))[ type ]) && cache[0] === dirruns ) {
\t\t\t\t\t\t\tdiff = cache[1];

\t\t\t\t\t\t// xml :nth-child(...) or :nth-last-child(...) or :nth(-last)?-of-type(...)
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t// Use the same loop as above to seek `elem` from the start
\t\t\t\t\t\t\twhile ( (node = ++nodeIndex && node && node[ dir ] ||
\t\t\t\t\t\t\t\t(diff = nodeIndex = 0) || start.pop()) ) {

\t\t\t\t\t\t\t\tif ( ( ofType ? node.nodeName.toLowerCase() === name : node.nodeType === 1 ) && ++diff ) {
\t\t\t\t\t\t\t\t\t// Cache the index of each encountered element
\t\t\t\t\t\t\t\t\tif ( useCache ) {
\t\t\t\t\t\t\t\t\t\t(node[ expando ] || (node[ expando ] = {}))[ type ] = [ dirruns, diff ];
\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\tif ( node === elem ) {
\t\t\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}

\t\t\t\t\t\t// Incorporate the offset, then check against cycle size
\t\t\t\t\t\tdiff -= last;
\t\t\t\t\t\treturn diff === first || ( diff % first === 0 && diff / first >= 0 );
\t\t\t\t\t}
\t\t\t\t};
\t\t},

\t\t\"PSEUDO\": function( pseudo, argument ) {
\t\t\t// pseudo-class names are case-insensitive
\t\t\t// http://www.w3.org/TR/selectors/#pseudo-classes
\t\t\t// Prioritize by case sensitivity in case custom pseudos are added with uppercase letters
\t\t\t// Remember that setFilters inherits from pseudos
\t\t\tvar args,
\t\t\t\tfn = Expr.pseudos[ pseudo ] || Expr.setFilters[ pseudo.toLowerCase() ] ||
\t\t\t\t\tSizzle.error( \"unsupported pseudo: \" + pseudo );

\t\t\t// The user may use createPseudo to indicate that
\t\t\t// arguments are needed to create the filter function
\t\t\t// just as Sizzle does
\t\t\tif ( fn[ expando ] ) {
\t\t\t\treturn fn( argument );
\t\t\t}

\t\t\t// But maintain support for old signatures
\t\t\tif ( fn.length > 1 ) {
\t\t\t\targs = [ pseudo, pseudo, \"\", argument ];
\t\t\t\treturn Expr.setFilters.hasOwnProperty( pseudo.toLowerCase() ) ?
\t\t\t\t\tmarkFunction(function( seed, matches ) {
\t\t\t\t\t\tvar idx,
\t\t\t\t\t\t\tmatched = fn( seed, argument ),
\t\t\t\t\t\t\ti = matched.length;
\t\t\t\t\t\twhile ( i-- ) {
\t\t\t\t\t\t\tidx = indexOf( seed, matched[i] );
\t\t\t\t\t\t\tseed[ idx ] = !( matches[ idx ] = matched[i] );
\t\t\t\t\t\t}
\t\t\t\t\t}) :
\t\t\t\t\tfunction( elem ) {
\t\t\t\t\t\treturn fn( elem, 0, args );
\t\t\t\t\t};
\t\t\t}

\t\t\treturn fn;
\t\t}
\t},

\tpseudos: {
\t\t// Potentially complex pseudos
\t\t\"not\": markFunction(function( selector ) {
\t\t\t// Trim the selector passed to compile
\t\t\t// to avoid treating leading and trailing
\t\t\t// spaces as combinators
\t\t\tvar input = [],
\t\t\t\tresults = [],
\t\t\t\tmatcher = compile( selector.replace( rtrim, \"\$1\" ) );

\t\t\treturn matcher[ expando ] ?
\t\t\t\tmarkFunction(function( seed, matches, context, xml ) {
\t\t\t\t\tvar elem,
\t\t\t\t\t\tunmatched = matcher( seed, null, xml, [] ),
\t\t\t\t\t\ti = seed.length;

\t\t\t\t\t// Match elements unmatched by `matcher`
\t\t\t\t\twhile ( i-- ) {
\t\t\t\t\t\tif ( (elem = unmatched[i]) ) {
\t\t\t\t\t\t\tseed[i] = !(matches[i] = elem);
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}) :
\t\t\t\tfunction( elem, context, xml ) {
\t\t\t\t\tinput[0] = elem;
\t\t\t\t\tmatcher( input, null, xml, results );
\t\t\t\t\t// Don't keep the element (issue #299)
\t\t\t\t\tinput[0] = null;
\t\t\t\t\treturn !results.pop();
\t\t\t\t};
\t\t}),

\t\t\"has\": markFunction(function( selector ) {
\t\t\treturn function( elem ) {
\t\t\t\treturn Sizzle( selector, elem ).length > 0;
\t\t\t};
\t\t}),

\t\t\"contains\": markFunction(function( text ) {
\t\t\ttext = text.replace( runescape, funescape );
\t\t\treturn function( elem ) {
\t\t\t\treturn ( elem.textContent || elem.innerText || getText( elem ) ).indexOf( text ) > -1;
\t\t\t};
\t\t}),

\t\t// \"Whether an element is represented by a :lang() selector
\t\t// is based solely on the element's language value
\t\t// being equal to the identifier C,
\t\t// or beginning with the identifier C immediately followed by \"-\".
\t\t// The matching of C against the element's language value is performed case-insensitively.
\t\t// The identifier C does not have to be a valid language name.\"
\t\t// http://www.w3.org/TR/selectors/#lang-pseudo
\t\t\"lang\": markFunction( function( lang ) {
\t\t\t// lang value must be a valid identifier
\t\t\tif ( !ridentifier.test(lang || \"\") ) {
\t\t\t\tSizzle.error( \"unsupported lang: \" + lang );
\t\t\t}
\t\t\tlang = lang.replace( runescape, funescape ).toLowerCase();
\t\t\treturn function( elem ) {
\t\t\t\tvar elemLang;
\t\t\t\tdo {
\t\t\t\t\tif ( (elemLang = documentIsHTML ?
\t\t\t\t\t\telem.lang :
\t\t\t\t\t\telem.getAttribute(\"xml:lang\") || elem.getAttribute(\"lang\")) ) {

\t\t\t\t\t\telemLang = elemLang.toLowerCase();
\t\t\t\t\t\treturn elemLang === lang || elemLang.indexOf( lang + \"-\" ) === 0;
\t\t\t\t\t}
\t\t\t\t} while ( (elem = elem.parentNode) && elem.nodeType === 1 );
\t\t\t\treturn false;
\t\t\t};
\t\t}),

\t\t// Miscellaneous
\t\t\"target\": function( elem ) {
\t\t\tvar hash = window.location && window.location.hash;
\t\t\treturn hash && hash.slice( 1 ) === elem.id;
\t\t},

\t\t\"root\": function( elem ) {
\t\t\treturn elem === docElem;
\t\t},

\t\t\"focus\": function( elem ) {
\t\t\treturn elem === document.activeElement && (!document.hasFocus || document.hasFocus()) && !!(elem.type || elem.href || ~elem.tabIndex);
\t\t},

\t\t// Boolean properties
\t\t\"enabled\": function( elem ) {
\t\t\treturn elem.disabled === false;
\t\t},

\t\t\"disabled\": function( elem ) {
\t\t\treturn elem.disabled === true;
\t\t},

\t\t\"checked\": function( elem ) {
\t\t\t// In CSS3, :checked should return both checked and selected elements
\t\t\t// http://www.w3.org/TR/2011/REC-css3-selectors-20110929/#checked
\t\t\tvar nodeName = elem.nodeName.toLowerCase();
\t\t\treturn (nodeName === \"input\" && !!elem.checked) || (nodeName === \"option\" && !!elem.selected);
\t\t},

\t\t\"selected\": function( elem ) {
\t\t\t// Accessing this property makes selected-by-default
\t\t\t// options in Safari work properly
\t\t\tif ( elem.parentNode ) {
\t\t\t\telem.parentNode.selectedIndex;
\t\t\t}

\t\t\treturn elem.selected === true;
\t\t},

\t\t// Contents
\t\t\"empty\": function( elem ) {
\t\t\t// http://www.w3.org/TR/selectors/#empty-pseudo
\t\t\t// :empty is negated by element (1) or content nodes (text: 3; cdata: 4; entity ref: 5),
\t\t\t//   but not by others (comment: 8; processing instruction: 7; etc.)
\t\t\t// nodeType < 6 works because attributes (2) do not appear as children
\t\t\tfor ( elem = elem.firstChild; elem; elem = elem.nextSibling ) {
\t\t\t\tif ( elem.nodeType < 6 ) {
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t}
\t\t\treturn true;
\t\t},

\t\t\"parent\": function( elem ) {
\t\t\treturn !Expr.pseudos[\"empty\"]( elem );
\t\t},

\t\t// Element/input types
\t\t\"header\": function( elem ) {
\t\t\treturn rheader.test( elem.nodeName );
\t\t},

\t\t\"input\": function( elem ) {
\t\t\treturn rinputs.test( elem.nodeName );
\t\t},

\t\t\"button\": function( elem ) {
\t\t\tvar name = elem.nodeName.toLowerCase();
\t\t\treturn name === \"input\" && elem.type === \"button\" || name === \"button\";
\t\t},

\t\t\"text\": function( elem ) {
\t\t\tvar attr;
\t\t\treturn elem.nodeName.toLowerCase() === \"input\" &&
\t\t\t\telem.type === \"text\" &&

\t\t\t\t// Support: IE<8
\t\t\t\t// New HTML5 attribute values (e.g., \"search\") appear with elem.type === \"text\"
\t\t\t\t( (attr = elem.getAttribute(\"type\")) == null || attr.toLowerCase() === \"text\" );
\t\t},

\t\t// Position-in-collection
\t\t\"first\": createPositionalPseudo(function() {
\t\t\treturn [ 0 ];
\t\t}),

\t\t\"last\": createPositionalPseudo(function( matchIndexes, length ) {
\t\t\treturn [ length - 1 ];
\t\t}),

\t\t\"eq\": createPositionalPseudo(function( matchIndexes, length, argument ) {
\t\t\treturn [ argument < 0 ? argument + length : argument ];
\t\t}),

\t\t\"even\": createPositionalPseudo(function( matchIndexes, length ) {
\t\t\tvar i = 0;
\t\t\tfor ( ; i < length; i += 2 ) {
\t\t\t\tmatchIndexes.push( i );
\t\t\t}
\t\t\treturn matchIndexes;
\t\t}),

\t\t\"odd\": createPositionalPseudo(function( matchIndexes, length ) {
\t\t\tvar i = 1;
\t\t\tfor ( ; i < length; i += 2 ) {
\t\t\t\tmatchIndexes.push( i );
\t\t\t}
\t\t\treturn matchIndexes;
\t\t}),

\t\t\"lt\": createPositionalPseudo(function( matchIndexes, length, argument ) {
\t\t\tvar i = argument < 0 ? argument + length : argument;
\t\t\tfor ( ; --i >= 0; ) {
\t\t\t\tmatchIndexes.push( i );
\t\t\t}
\t\t\treturn matchIndexes;
\t\t}),

\t\t\"gt\": createPositionalPseudo(function( matchIndexes, length, argument ) {
\t\t\tvar i = argument < 0 ? argument + length : argument;
\t\t\tfor ( ; ++i < length; ) {
\t\t\t\tmatchIndexes.push( i );
\t\t\t}
\t\t\treturn matchIndexes;
\t\t})
\t}
};

Expr.pseudos[\"nth\"] = Expr.pseudos[\"eq\"];

// Add button/input type pseudos
for ( i in { radio: true, checkbox: true, file: true, password: true, image: true } ) {
\tExpr.pseudos[ i ] = createInputPseudo( i );
}
for ( i in { submit: true, reset: true } ) {
\tExpr.pseudos[ i ] = createButtonPseudo( i );
}

// Easy API for creating new setFilters
function setFilters() {}
setFilters.prototype = Expr.filters = Expr.pseudos;
Expr.setFilters = new setFilters();

tokenize = Sizzle.tokenize = function( selector, parseOnly ) {
\tvar matched, match, tokens, type,
\t\tsoFar, groups, preFilters,
\t\tcached = tokenCache[ selector + \" \" ];

\tif ( cached ) {
\t\treturn parseOnly ? 0 : cached.slice( 0 );
\t}

\tsoFar = selector;
\tgroups = [];
\tpreFilters = Expr.preFilter;

\twhile ( soFar ) {

\t\t// Comma and first run
\t\tif ( !matched || (match = rcomma.exec( soFar )) ) {
\t\t\tif ( match ) {
\t\t\t\t// Don't consume trailing commas as valid
\t\t\t\tsoFar = soFar.slice( match[0].length ) || soFar;
\t\t\t}
\t\t\tgroups.push( (tokens = []) );
\t\t}

\t\tmatched = false;

\t\t// Combinators
\t\tif ( (match = rcombinators.exec( soFar )) ) {
\t\t\tmatched = match.shift();
\t\t\ttokens.push({
\t\t\t\tvalue: matched,
\t\t\t\t// Cast descendant combinators to space
\t\t\t\ttype: match[0].replace( rtrim, \" \" )
\t\t\t});
\t\t\tsoFar = soFar.slice( matched.length );
\t\t}

\t\t// Filters
\t\tfor ( type in Expr.filter ) {
\t\t\tif ( (match = matchExpr[ type ].exec( soFar )) && (!preFilters[ type ] ||
\t\t\t\t(match = preFilters[ type ]( match ))) ) {
\t\t\t\tmatched = match.shift();
\t\t\t\ttokens.push({
\t\t\t\t\tvalue: matched,
\t\t\t\t\ttype: type,
\t\t\t\t\tmatches: match
\t\t\t\t});
\t\t\t\tsoFar = soFar.slice( matched.length );
\t\t\t}
\t\t}

\t\tif ( !matched ) {
\t\t\tbreak;
\t\t}
\t}

\t// Return the length of the invalid excess
\t// if we're just parsing
\t// Otherwise, throw an error or return tokens
\treturn parseOnly ?
\t\tsoFar.length :
\t\tsoFar ?
\t\t\tSizzle.error( selector ) :
\t\t\t// Cache the tokens
\t\t\ttokenCache( selector, groups ).slice( 0 );
};

function toSelector( tokens ) {
\tvar i = 0,
\t\tlen = tokens.length,
\t\tselector = \"\";
\tfor ( ; i < len; i++ ) {
\t\tselector += tokens[i].value;
\t}
\treturn selector;
}

function addCombinator( matcher, combinator, base ) {
\tvar dir = combinator.dir,
\t\tcheckNonElements = base && dir === \"parentNode\",
\t\tdoneName = done++;

\treturn combinator.first ?
\t\t// Check against closest ancestor/preceding element
\t\tfunction( elem, context, xml ) {
\t\t\twhile ( (elem = elem[ dir ]) ) {
\t\t\t\tif ( elem.nodeType === 1 || checkNonElements ) {
\t\t\t\t\treturn matcher( elem, context, xml );
\t\t\t\t}
\t\t\t}
\t\t} :

\t\t// Check against all ancestor/preceding elements
\t\tfunction( elem, context, xml ) {
\t\t\tvar oldCache, outerCache,
\t\t\t\tnewCache = [ dirruns, doneName ];

\t\t\t// We can't set arbitrary data on XML nodes, so they don't benefit from dir caching
\t\t\tif ( xml ) {
\t\t\t\twhile ( (elem = elem[ dir ]) ) {
\t\t\t\t\tif ( elem.nodeType === 1 || checkNonElements ) {
\t\t\t\t\t\tif ( matcher( elem, context, xml ) ) {
\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t} else {
\t\t\t\twhile ( (elem = elem[ dir ]) ) {
\t\t\t\t\tif ( elem.nodeType === 1 || checkNonElements ) {
\t\t\t\t\t\touterCache = elem[ expando ] || (elem[ expando ] = {});
\t\t\t\t\t\tif ( (oldCache = outerCache[ dir ]) &&
\t\t\t\t\t\t\toldCache[ 0 ] === dirruns && oldCache[ 1 ] === doneName ) {

\t\t\t\t\t\t\t// Assign to newCache so results back-propagate to previous elements
\t\t\t\t\t\t\treturn (newCache[ 2 ] = oldCache[ 2 ]);
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t// Reuse newcache so results back-propagate to previous elements
\t\t\t\t\t\t\touterCache[ dir ] = newCache;

\t\t\t\t\t\t\t// A match means we're done; a fail means we have to keep checking
\t\t\t\t\t\t\tif ( (newCache[ 2 ] = matcher( elem, context, xml )) ) {
\t\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t};
}

function elementMatcher( matchers ) {
\treturn matchers.length > 1 ?
\t\tfunction( elem, context, xml ) {
\t\t\tvar i = matchers.length;
\t\t\twhile ( i-- ) {
\t\t\t\tif ( !matchers[i]( elem, context, xml ) ) {
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t}
\t\t\treturn true;
\t\t} :
\t\tmatchers[0];
}

function multipleContexts( selector, contexts, results ) {
\tvar i = 0,
\t\tlen = contexts.length;
\tfor ( ; i < len; i++ ) {
\t\tSizzle( selector, contexts[i], results );
\t}
\treturn results;
}

function condense( unmatched, map, filter, context, xml ) {
\tvar elem,
\t\tnewUnmatched = [],
\t\ti = 0,
\t\tlen = unmatched.length,
\t\tmapped = map != null;

\tfor ( ; i < len; i++ ) {
\t\tif ( (elem = unmatched[i]) ) {
\t\t\tif ( !filter || filter( elem, context, xml ) ) {
\t\t\t\tnewUnmatched.push( elem );
\t\t\t\tif ( mapped ) {
\t\t\t\t\tmap.push( i );
\t\t\t\t}
\t\t\t}
\t\t}
\t}

\treturn newUnmatched;
}

function setMatcher( preFilter, selector, matcher, postFilter, postFinder, postSelector ) {
\tif ( postFilter && !postFilter[ expando ] ) {
\t\tpostFilter = setMatcher( postFilter );
\t}
\tif ( postFinder && !postFinder[ expando ] ) {
\t\tpostFinder = setMatcher( postFinder, postSelector );
\t}
\treturn markFunction(function( seed, results, context, xml ) {
\t\tvar temp, i, elem,
\t\t\tpreMap = [],
\t\t\tpostMap = [],
\t\t\tpreexisting = results.length,

\t\t\t// Get initial elements from seed or context
\t\t\telems = seed || multipleContexts( selector || \"*\", context.nodeType ? [ context ] : context, [] ),

\t\t\t// Prefilter to get matcher input, preserving a map for seed-results synchronization
\t\t\tmatcherIn = preFilter && ( seed || !selector ) ?
\t\t\t\tcondense( elems, preMap, preFilter, context, xml ) :
\t\t\t\telems,

\t\t\tmatcherOut = matcher ?
\t\t\t\t// If we have a postFinder, or filtered seed, or non-seed postFilter or preexisting results,
\t\t\t\tpostFinder || ( seed ? preFilter : preexisting || postFilter ) ?

\t\t\t\t\t// ...intermediate processing is necessary
\t\t\t\t\t[] :

\t\t\t\t\t// ...otherwise use results directly
\t\t\t\t\tresults :
\t\t\t\tmatcherIn;

\t\t// Find primary matches
\t\tif ( matcher ) {
\t\t\tmatcher( matcherIn, matcherOut, context, xml );
\t\t}

\t\t// Apply postFilter
\t\tif ( postFilter ) {
\t\t\ttemp = condense( matcherOut, postMap );
\t\t\tpostFilter( temp, [], context, xml );

\t\t\t// Un-match failing elements by moving them back to matcherIn
\t\t\ti = temp.length;
\t\t\twhile ( i-- ) {
\t\t\t\tif ( (elem = temp[i]) ) {
\t\t\t\t\tmatcherOut[ postMap[i] ] = !(matcherIn[ postMap[i] ] = elem);
\t\t\t\t}
\t\t\t}
\t\t}

\t\tif ( seed ) {
\t\t\tif ( postFinder || preFilter ) {
\t\t\t\tif ( postFinder ) {
\t\t\t\t\t// Get the final matcherOut by condensing this intermediate into postFinder contexts
\t\t\t\t\ttemp = [];
\t\t\t\t\ti = matcherOut.length;
\t\t\t\t\twhile ( i-- ) {
\t\t\t\t\t\tif ( (elem = matcherOut[i]) ) {
\t\t\t\t\t\t\t// Restore matcherIn since elem is not yet a final match
\t\t\t\t\t\t\ttemp.push( (matcherIn[i] = elem) );
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\tpostFinder( null, (matcherOut = []), temp, xml );
\t\t\t\t}

\t\t\t\t// Move matched elements from seed to results to keep them synchronized
\t\t\t\ti = matcherOut.length;
\t\t\t\twhile ( i-- ) {
\t\t\t\t\tif ( (elem = matcherOut[i]) &&
\t\t\t\t\t\t(temp = postFinder ? indexOf( seed, elem ) : preMap[i]) > -1 ) {

\t\t\t\t\t\tseed[temp] = !(results[temp] = elem);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t\t// Add elements to results, through postFinder if defined
\t\t} else {
\t\t\tmatcherOut = condense(
\t\t\t\tmatcherOut === results ?
\t\t\t\t\tmatcherOut.splice( preexisting, matcherOut.length ) :
\t\t\t\t\tmatcherOut
\t\t\t);
\t\t\tif ( postFinder ) {
\t\t\t\tpostFinder( null, results, matcherOut, xml );
\t\t\t} else {
\t\t\t\tpush.apply( results, matcherOut );
\t\t\t}
\t\t}
\t});
}

function matcherFromTokens( tokens ) {
\tvar checkContext, matcher, j,
\t\tlen = tokens.length,
\t\tleadingRelative = Expr.relative[ tokens[0].type ],
\t\timplicitRelative = leadingRelative || Expr.relative[\" \"],
\t\ti = leadingRelative ? 1 : 0,

\t\t// The foundational matcher ensures that elements are reachable from top-level context(s)
\t\tmatchContext = addCombinator( function( elem ) {
\t\t\treturn elem === checkContext;
\t\t}, implicitRelative, true ),
\t\tmatchAnyContext = addCombinator( function( elem ) {
\t\t\treturn indexOf( checkContext, elem ) > -1;
\t\t}, implicitRelative, true ),
\t\tmatchers = [ function( elem, context, xml ) {
\t\t\tvar ret = ( !leadingRelative && ( xml || context !== outermostContext ) ) || (
\t\t\t\t(checkContext = context).nodeType ?
\t\t\t\t\tmatchContext( elem, context, xml ) :
\t\t\t\t\tmatchAnyContext( elem, context, xml ) );
\t\t\t// Avoid hanging onto element (issue #299)
\t\t\tcheckContext = null;
\t\t\treturn ret;
\t\t} ];

\tfor ( ; i < len; i++ ) {
\t\tif ( (matcher = Expr.relative[ tokens[i].type ]) ) {
\t\t\tmatchers = [ addCombinator(elementMatcher( matchers ), matcher) ];
\t\t} else {
\t\t\tmatcher = Expr.filter[ tokens[i].type ].apply( null, tokens[i].matches );

\t\t\t// Return special upon seeing a positional matcher
\t\t\tif ( matcher[ expando ] ) {
\t\t\t\t// Find the next relative operator (if any) for proper handling
\t\t\t\tj = ++i;
\t\t\t\tfor ( ; j < len; j++ ) {
\t\t\t\t\tif ( Expr.relative[ tokens[j].type ] ) {
\t\t\t\t\t\tbreak;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\treturn setMatcher(
\t\t\t\t\ti > 1 && elementMatcher( matchers ),
\t\t\t\t\ti > 1 && toSelector(
\t\t\t\t\t\t// If the preceding token was a descendant combinator, insert an implicit any-element `*`
\t\t\t\t\t\ttokens.slice( 0, i - 1 ).concat({ value: tokens[ i - 2 ].type === \" \" ? \"*\" : \"\" })
\t\t\t\t\t).replace( rtrim, \"\$1\" ),
\t\t\t\t\tmatcher,
\t\t\t\t\ti < j && matcherFromTokens( tokens.slice( i, j ) ),
\t\t\t\t\tj < len && matcherFromTokens( (tokens = tokens.slice( j )) ),
\t\t\t\t\tj < len && toSelector( tokens )
\t\t\t\t);
\t\t\t}
\t\t\tmatchers.push( matcher );
\t\t}
\t}

\treturn elementMatcher( matchers );
}

function matcherFromGroupMatchers( elementMatchers, setMatchers ) {
\tvar bySet = setMatchers.length > 0,
\t\tbyElement = elementMatchers.length > 0,
\t\tsuperMatcher = function( seed, context, xml, results, outermost ) {
\t\t\tvar elem, j, matcher,
\t\t\t\tmatchedCount = 0,
\t\t\t\ti = \"0\",
\t\t\t\tunmatched = seed && [],
\t\t\t\tsetMatched = [],
\t\t\t\tcontextBackup = outermostContext,
\t\t\t\t// We must always have either seed elements or outermost context
\t\t\t\telems = seed || byElement && Expr.find[\"TAG\"]( \"*\", outermost ),
\t\t\t\t// Use integer dirruns iff this is the outermost matcher
\t\t\t\tdirrunsUnique = (dirruns += contextBackup == null ? 1 : Math.random() || 0.1),
\t\t\t\tlen = elems.length;

\t\t\tif ( outermost ) {
\t\t\t\toutermostContext = context !== document && context;
\t\t\t}

\t\t\t// Add elements passing elementMatchers directly to results
\t\t\t// Keep `i` a string if there are no elements so `matchedCount` will be \"00\" below
\t\t\t// Support: IE<9, Safari
\t\t\t// Tolerate NodeList properties (IE: \"length\"; Safari: <number>) matching elements by id
\t\t\tfor ( ; i !== len && (elem = elems[i]) != null; i++ ) {
\t\t\t\tif ( byElement && elem ) {
\t\t\t\t\tj = 0;
\t\t\t\t\twhile ( (matcher = elementMatchers[j++]) ) {
\t\t\t\t\t\tif ( matcher( elem, context, xml ) ) {
\t\t\t\t\t\t\tresults.push( elem );
\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\tif ( outermost ) {
\t\t\t\t\t\tdirruns = dirrunsUnique;
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// Track unmatched elements for set filters
\t\t\t\tif ( bySet ) {
\t\t\t\t\t// They will have gone through all possible matchers
\t\t\t\t\tif ( (elem = !matcher && elem) ) {
\t\t\t\t\t\tmatchedCount--;
\t\t\t\t\t}

\t\t\t\t\t// Lengthen the array for every element, matched or not
\t\t\t\t\tif ( seed ) {
\t\t\t\t\t\tunmatched.push( elem );
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t\t\t// Apply set filters to unmatched elements
\t\t\tmatchedCount += i;
\t\t\tif ( bySet && i !== matchedCount ) {
\t\t\t\tj = 0;
\t\t\t\twhile ( (matcher = setMatchers[j++]) ) {
\t\t\t\t\tmatcher( unmatched, setMatched, context, xml );
\t\t\t\t}

\t\t\t\tif ( seed ) {
\t\t\t\t\t// Reintegrate element matches to eliminate the need for sorting
\t\t\t\t\tif ( matchedCount > 0 ) {
\t\t\t\t\t\twhile ( i-- ) {
\t\t\t\t\t\t\tif ( !(unmatched[i] || setMatched[i]) ) {
\t\t\t\t\t\t\t\tsetMatched[i] = pop.call( results );
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\t// Discard index placeholder values to get only actual matches
\t\t\t\t\tsetMatched = condense( setMatched );
\t\t\t\t}

\t\t\t\t// Add matches to results
\t\t\t\tpush.apply( results, setMatched );

\t\t\t\t// Seedless set matches succeeding multiple successful matchers stipulate sorting
\t\t\t\tif ( outermost && !seed && setMatched.length > 0 &&
\t\t\t\t\t( matchedCount + setMatchers.length ) > 1 ) {

\t\t\t\t\tSizzle.uniqueSort( results );
\t\t\t\t}
\t\t\t}

\t\t\t// Override manipulation of globals by nested matchers
\t\t\tif ( outermost ) {
\t\t\t\tdirruns = dirrunsUnique;
\t\t\t\toutermostContext = contextBackup;
\t\t\t}

\t\t\treturn unmatched;
\t\t};

\treturn bySet ?
\t\tmarkFunction( superMatcher ) :
\t\tsuperMatcher;
}

compile = Sizzle.compile = function( selector, match /* Internal Use Only */ ) {
\tvar i,
\t\tsetMatchers = [],
\t\telementMatchers = [],
\t\tcached = compilerCache[ selector + \" \" ];

\tif ( !cached ) {
\t\t// Generate a function of recursive functions that can be used to check each element
\t\tif ( !match ) {
\t\t\tmatch = tokenize( selector );
\t\t}
\t\ti = match.length;
\t\twhile ( i-- ) {
\t\t\tcached = matcherFromTokens( match[i] );
\t\t\tif ( cached[ expando ] ) {
\t\t\t\tsetMatchers.push( cached );
\t\t\t} else {
\t\t\t\telementMatchers.push( cached );
\t\t\t}
\t\t}

\t\t// Cache the compiled function
\t\tcached = compilerCache( selector, matcherFromGroupMatchers( elementMatchers, setMatchers ) );

\t\t// Save selector and tokenization
\t\tcached.selector = selector;
\t}
\treturn cached;
};

/**
 * A low-level selection function that works with Sizzle's compiled
 *  selector functions
 * @param {String|Function} selector A selector or a pre-compiled
 *  selector function built with Sizzle.compile
 * @param {Element} context
 * @param {Array} [results]
 * @param {Array} [seed] A set of elements to match against
 */
select = Sizzle.select = function( selector, context, results, seed ) {
\tvar i, tokens, token, type, find,
\t\tcompiled = typeof selector === \"function\" && selector,
\t\tmatch = !seed && tokenize( (selector = compiled.selector || selector) );

\tresults = results || [];

\t// Try to minimize operations if there is no seed and only one group
\tif ( match.length === 1 ) {

\t\t// Take a shortcut and set the context if the root selector is an ID
\t\ttokens = match[0] = match[0].slice( 0 );
\t\tif ( tokens.length > 2 && (token = tokens[0]).type === \"ID\" &&
\t\t\t\tsupport.getById && context.nodeType === 9 && documentIsHTML &&
\t\t\t\tExpr.relative[ tokens[1].type ] ) {

\t\t\tcontext = ( Expr.find[\"ID\"]( token.matches[0].replace(runescape, funescape), context ) || [] )[0];
\t\t\tif ( !context ) {
\t\t\t\treturn results;

\t\t\t// Precompiled matchers will still verify ancestry, so step up a level
\t\t\t} else if ( compiled ) {
\t\t\t\tcontext = context.parentNode;
\t\t\t}

\t\t\tselector = selector.slice( tokens.shift().value.length );
\t\t}

\t\t// Fetch a seed set for right-to-left matching
\t\ti = matchExpr[\"needsContext\"].test( selector ) ? 0 : tokens.length;
\t\twhile ( i-- ) {
\t\t\ttoken = tokens[i];

\t\t\t// Abort if we hit a combinator
\t\t\tif ( Expr.relative[ (type = token.type) ] ) {
\t\t\t\tbreak;
\t\t\t}
\t\t\tif ( (find = Expr.find[ type ]) ) {
\t\t\t\t// Search, expanding context for leading sibling combinators
\t\t\t\tif ( (seed = find(
\t\t\t\t\ttoken.matches[0].replace( runescape, funescape ),
\t\t\t\t\trsibling.test( tokens[0].type ) && testContext( context.parentNode ) || context
\t\t\t\t)) ) {

\t\t\t\t\t// If seed is empty or no tokens remain, we can return early
\t\t\t\t\ttokens.splice( i, 1 );
\t\t\t\t\tselector = seed.length && toSelector( tokens );
\t\t\t\t\tif ( !selector ) {
\t\t\t\t\t\tpush.apply( results, seed );
\t\t\t\t\t\treturn results;
\t\t\t\t\t}

\t\t\t\t\tbreak;
\t\t\t\t}
\t\t\t}
\t\t}
\t}

\t// Compile and execute a filtering function if one is not provided
\t// Provide `match` to avoid retokenization if we modified the selector above
\t( compiled || compile( selector, match ) )(
\t\tseed,
\t\tcontext,
\t\t!documentIsHTML,
\t\tresults,
\t\trsibling.test( selector ) && testContext( context.parentNode ) || context
\t);
\treturn results;
};

// One-time assignments

// Sort stability
support.sortStable = expando.split(\"\").sort( sortOrder ).join(\"\") === expando;

// Support: Chrome 14-35+
// Always assume duplicates if they aren't passed to the comparison function
support.detectDuplicates = !!hasDuplicate;

// Initialize against the default document
setDocument();

// Support: Webkit<537.32 - Safari 6.0.3/Chrome 25 (fixed in Chrome 27)
// Detached nodes confoundingly follow *each other*
support.sortDetached = assert(function( div1 ) {
\t// Should return 1, but returns 4 (following)
\treturn div1.compareDocumentPosition( document.createElement(\"div\") ) & 1;
});

// Support: IE<8
// Prevent attribute/property \"interpolation\"
// http://msdn.microsoft.com/en-us/library/ms536429%28VS.85%29.aspx
if ( !assert(function( div ) {
\tdiv.innerHTML = \"<a href='#'></a>\";
\treturn div.firstChild.getAttribute(\"href\") === \"#\" ;
}) ) {
\taddHandle( \"type|href|height|width\", function( elem, name, isXML ) {
\t\tif ( !isXML ) {
\t\t\treturn elem.getAttribute( name, name.toLowerCase() === \"type\" ? 1 : 2 );
\t\t}
\t});
}

// Support: IE<9
// Use defaultValue in place of getAttribute(\"value\")
if ( !support.attributes || !assert(function( div ) {
\tdiv.innerHTML = \"<input/>\";
\tdiv.firstChild.setAttribute( \"value\", \"\" );
\treturn div.firstChild.getAttribute( \"value\" ) === \"\";
}) ) {
\taddHandle( \"value\", function( elem, name, isXML ) {
\t\tif ( !isXML && elem.nodeName.toLowerCase() === \"input\" ) {
\t\t\treturn elem.defaultValue;
\t\t}
\t});
}

// Support: IE<9
// Use getAttributeNode to fetch booleans when getAttribute lies
if ( !assert(function( div ) {
\treturn div.getAttribute(\"disabled\") == null;
}) ) {
\taddHandle( booleans, function( elem, name, isXML ) {
\t\tvar val;
\t\tif ( !isXML ) {
\t\t\treturn elem[ name ] === true ? name.toLowerCase() :
\t\t\t\t\t(val = elem.getAttributeNode( name )) && val.specified ?
\t\t\t\t\tval.value :
\t\t\t\tnull;
\t\t}
\t});
}

return Sizzle;

})( window );



jQuery.find = Sizzle;
jQuery.expr = Sizzle.selectors;
jQuery.expr[\":\"] = jQuery.expr.pseudos;
jQuery.unique = Sizzle.uniqueSort;
jQuery.text = Sizzle.getText;
jQuery.isXMLDoc = Sizzle.isXML;
jQuery.contains = Sizzle.contains;



var rneedsContext = jQuery.expr.match.needsContext;

var rsingleTag = (/^<(\\w+)\\s*\\/?>(?:<\\/\\1>|)\$/);



var risSimple = /^.[^:#\\[\\.,]*\$/;

// Implement the identical functionality for filter and not
function winnow( elements, qualifier, not ) {
\tif ( jQuery.isFunction( qualifier ) ) {
\t\treturn jQuery.grep( elements, function( elem, i ) {
\t\t\t/* jshint -W018 */
\t\t\treturn !!qualifier.call( elem, i, elem ) !== not;
\t\t});

\t}

\tif ( qualifier.nodeType ) {
\t\treturn jQuery.grep( elements, function( elem ) {
\t\t\treturn ( elem === qualifier ) !== not;
\t\t});

\t}

\tif ( typeof qualifier === \"string\" ) {
\t\tif ( risSimple.test( qualifier ) ) {
\t\t\treturn jQuery.filter( qualifier, elements, not );
\t\t}

\t\tqualifier = jQuery.filter( qualifier, elements );
\t}

\treturn jQuery.grep( elements, function( elem ) {
\t\treturn ( indexOf.call( qualifier, elem ) >= 0 ) !== not;
\t});
}

jQuery.filter = function( expr, elems, not ) {
\tvar elem = elems[ 0 ];

\tif ( not ) {
\t\texpr = \":not(\" + expr + \")\";
\t}

\treturn elems.length === 1 && elem.nodeType === 1 ?
\t\tjQuery.find.matchesSelector( elem, expr ) ? [ elem ] : [] :
\t\tjQuery.find.matches( expr, jQuery.grep( elems, function( elem ) {
\t\t\treturn elem.nodeType === 1;
\t\t}));
};

jQuery.fn.extend({
\tfind: function( selector ) {
\t\tvar i,
\t\t\tlen = this.length,
\t\t\tret = [],
\t\t\tself = this;

\t\tif ( typeof selector !== \"string\" ) {
\t\t\treturn this.pushStack( jQuery( selector ).filter(function() {
\t\t\t\tfor ( i = 0; i < len; i++ ) {
\t\t\t\t\tif ( jQuery.contains( self[ i ], this ) ) {
\t\t\t\t\t\treturn true;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}) );
\t\t}

\t\tfor ( i = 0; i < len; i++ ) {
\t\t\tjQuery.find( selector, self[ i ], ret );
\t\t}

\t\t// Needed because \$( selector, context ) becomes \$( context ).find( selector )
\t\tret = this.pushStack( len > 1 ? jQuery.unique( ret ) : ret );
\t\tret.selector = this.selector ? this.selector + \" \" + selector : selector;
\t\treturn ret;
\t},
\tfilter: function( selector ) {
\t\treturn this.pushStack( winnow(this, selector || [], false) );
\t},
\tnot: function( selector ) {
\t\treturn this.pushStack( winnow(this, selector || [], true) );
\t},
\tis: function( selector ) {
\t\treturn !!winnow(
\t\t\tthis,

\t\t\t// If this is a positional/relative selector, check membership in the returned set
\t\t\t// so \$(\"p:first\").is(\"p:last\") won't return true for a doc with two \"p\".
\t\t\ttypeof selector === \"string\" && rneedsContext.test( selector ) ?
\t\t\t\tjQuery( selector ) :
\t\t\t\tselector || [],
\t\t\tfalse
\t\t).length;
\t}
});


// Initialize a jQuery object


// A central reference to the root jQuery(document)
var rootjQuery,

\t// A simple way to check for HTML strings
\t// Prioritize #id over <tag> to avoid XSS via location.hash (#9521)
\t// Strict HTML recognition (#11290: must start with <)
\trquickExpr = /^(?:\\s*(<[\\w\\W]+>)[^>]*|#([\\w-]*))\$/,

\tinit = jQuery.fn.init = function( selector, context ) {
\t\tvar match, elem;

\t\t// HANDLE: \$(\"\"), \$(null), \$(undefined), \$(false)
\t\tif ( !selector ) {
\t\t\treturn this;
\t\t}

\t\t// Handle HTML strings
\t\tif ( typeof selector === \"string\" ) {
\t\t\tif ( selector[0] === \"<\" && selector[ selector.length - 1 ] === \">\" && selector.length >= 3 ) {
\t\t\t\t// Assume that strings that start and end with <> are HTML and skip the regex check
\t\t\t\tmatch = [ null, selector, null ];

\t\t\t} else {
\t\t\t\tmatch = rquickExpr.exec( selector );
\t\t\t}

\t\t\t// Match html or make sure no context is specified for #id
\t\t\tif ( match && (match[1] || !context) ) {

\t\t\t\t// HANDLE: \$(html) -> \$(array)
\t\t\t\tif ( match[1] ) {
\t\t\t\t\tcontext = context instanceof jQuery ? context[0] : context;

\t\t\t\t\t// Option to run scripts is true for back-compat
\t\t\t\t\t// Intentionally let the error be thrown if parseHTML is not present
\t\t\t\t\tjQuery.merge( this, jQuery.parseHTML(
\t\t\t\t\t\tmatch[1],
\t\t\t\t\t\tcontext && context.nodeType ? context.ownerDocument || context : document,
\t\t\t\t\t\ttrue
\t\t\t\t\t) );

\t\t\t\t\t// HANDLE: \$(html, props)
\t\t\t\t\tif ( rsingleTag.test( match[1] ) && jQuery.isPlainObject( context ) ) {
\t\t\t\t\t\tfor ( match in context ) {
\t\t\t\t\t\t\t// Properties of context are called as methods if possible
\t\t\t\t\t\t\tif ( jQuery.isFunction( this[ match ] ) ) {
\t\t\t\t\t\t\t\tthis[ match ]( context[ match ] );

\t\t\t\t\t\t\t// ...and otherwise set as attributes
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\tthis.attr( match, context[ match ] );
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\treturn this;

\t\t\t\t// HANDLE: \$(#id)
\t\t\t\t} else {
\t\t\t\t\telem = document.getElementById( match[2] );

\t\t\t\t\t// Support: Blackberry 4.6
\t\t\t\t\t// gEBID returns nodes no longer in the document (#6963)
\t\t\t\t\tif ( elem && elem.parentNode ) {
\t\t\t\t\t\t// Inject the element directly into the jQuery object
\t\t\t\t\t\tthis.length = 1;
\t\t\t\t\t\tthis[0] = elem;
\t\t\t\t\t}

\t\t\t\t\tthis.context = document;
\t\t\t\t\tthis.selector = selector;
\t\t\t\t\treturn this;
\t\t\t\t}

\t\t\t// HANDLE: \$(expr, \$(...))
\t\t\t} else if ( !context || context.jquery ) {
\t\t\t\treturn ( context || rootjQuery ).find( selector );

\t\t\t// HANDLE: \$(expr, context)
\t\t\t// (which is just equivalent to: \$(context).find(expr)
\t\t\t} else {
\t\t\t\treturn this.constructor( context ).find( selector );
\t\t\t}

\t\t// HANDLE: \$(DOMElement)
\t\t} else if ( selector.nodeType ) {
\t\t\tthis.context = this[0] = selector;
\t\t\tthis.length = 1;
\t\t\treturn this;

\t\t// HANDLE: \$(function)
\t\t// Shortcut for document ready
\t\t} else if ( jQuery.isFunction( selector ) ) {
\t\t\treturn typeof rootjQuery.ready !== \"undefined\" ?
\t\t\t\trootjQuery.ready( selector ) :
\t\t\t\t// Execute immediately if ready is not present
\t\t\t\tselector( jQuery );
\t\t}

\t\tif ( selector.selector !== undefined ) {
\t\t\tthis.selector = selector.selector;
\t\t\tthis.context = selector.context;
\t\t}

\t\treturn jQuery.makeArray( selector, this );
\t};

// Give the init function the jQuery prototype for later instantiation
init.prototype = jQuery.fn;

// Initialize central reference
rootjQuery = jQuery( document );


var rparentsprev = /^(?:parents|prev(?:Until|All))/,
\t// Methods guaranteed to produce a unique set when starting from a unique set
\tguaranteedUnique = {
\t\tchildren: true,
\t\tcontents: true,
\t\tnext: true,
\t\tprev: true
\t};

jQuery.extend({
\tdir: function( elem, dir, until ) {
\t\tvar matched = [],
\t\t\ttruncate = until !== undefined;

\t\twhile ( (elem = elem[ dir ]) && elem.nodeType !== 9 ) {
\t\t\tif ( elem.nodeType === 1 ) {
\t\t\t\tif ( truncate && jQuery( elem ).is( until ) ) {
\t\t\t\t\tbreak;
\t\t\t\t}
\t\t\t\tmatched.push( elem );
\t\t\t}
\t\t}
\t\treturn matched;
\t},

\tsibling: function( n, elem ) {
\t\tvar matched = [];

\t\tfor ( ; n; n = n.nextSibling ) {
\t\t\tif ( n.nodeType === 1 && n !== elem ) {
\t\t\t\tmatched.push( n );
\t\t\t}
\t\t}

\t\treturn matched;
\t}
});

jQuery.fn.extend({
\thas: function( target ) {
\t\tvar targets = jQuery( target, this ),
\t\t\tl = targets.length;

\t\treturn this.filter(function() {
\t\t\tvar i = 0;
\t\t\tfor ( ; i < l; i++ ) {
\t\t\t\tif ( jQuery.contains( this, targets[i] ) ) {
\t\t\t\t\treturn true;
\t\t\t\t}
\t\t\t}
\t\t});
\t},

\tclosest: function( selectors, context ) {
\t\tvar cur,
\t\t\ti = 0,
\t\t\tl = this.length,
\t\t\tmatched = [],
\t\t\tpos = rneedsContext.test( selectors ) || typeof selectors !== \"string\" ?
\t\t\t\tjQuery( selectors, context || this.context ) :
\t\t\t\t0;

\t\tfor ( ; i < l; i++ ) {
\t\t\tfor ( cur = this[i]; cur && cur !== context; cur = cur.parentNode ) {
\t\t\t\t// Always skip document fragments
\t\t\t\tif ( cur.nodeType < 11 && (pos ?
\t\t\t\t\tpos.index(cur) > -1 :

\t\t\t\t\t// Don't pass non-elements to Sizzle
\t\t\t\t\tcur.nodeType === 1 &&
\t\t\t\t\t\tjQuery.find.matchesSelector(cur, selectors)) ) {

\t\t\t\t\tmatched.push( cur );
\t\t\t\t\tbreak;
\t\t\t\t}
\t\t\t}
\t\t}

\t\treturn this.pushStack( matched.length > 1 ? jQuery.unique( matched ) : matched );
\t},

\t// Determine the position of an element within the set
\tindex: function( elem ) {

\t\t// No argument, return index in parent
\t\tif ( !elem ) {
\t\t\treturn ( this[ 0 ] && this[ 0 ].parentNode ) ? this.first().prevAll().length : -1;
\t\t}

\t\t// Index in selector
\t\tif ( typeof elem === \"string\" ) {
\t\t\treturn indexOf.call( jQuery( elem ), this[ 0 ] );
\t\t}

\t\t// Locate the position of the desired element
\t\treturn indexOf.call( this,

\t\t\t// If it receives a jQuery object, the first element is used
\t\t\telem.jquery ? elem[ 0 ] : elem
\t\t);
\t},

\tadd: function( selector, context ) {
\t\treturn this.pushStack(
\t\t\tjQuery.unique(
\t\t\t\tjQuery.merge( this.get(), jQuery( selector, context ) )
\t\t\t)
\t\t);
\t},

\taddBack: function( selector ) {
\t\treturn this.add( selector == null ?
\t\t\tthis.prevObject : this.prevObject.filter(selector)
\t\t);
\t}
});

function sibling( cur, dir ) {
\twhile ( (cur = cur[dir]) && cur.nodeType !== 1 ) {}
\treturn cur;
}

jQuery.each({
\tparent: function( elem ) {
\t\tvar parent = elem.parentNode;
\t\treturn parent && parent.nodeType !== 11 ? parent : null;
\t},
\tparents: function( elem ) {
\t\treturn jQuery.dir( elem, \"parentNode\" );
\t},
\tparentsUntil: function( elem, i, until ) {
\t\treturn jQuery.dir( elem, \"parentNode\", until );
\t},
\tnext: function( elem ) {
\t\treturn sibling( elem, \"nextSibling\" );
\t},
\tprev: function( elem ) {
\t\treturn sibling( elem, \"previousSibling\" );
\t},
\tnextAll: function( elem ) {
\t\treturn jQuery.dir( elem, \"nextSibling\" );
\t},
\tprevAll: function( elem ) {
\t\treturn jQuery.dir( elem, \"previousSibling\" );
\t},
\tnextUntil: function( elem, i, until ) {
\t\treturn jQuery.dir( elem, \"nextSibling\", until );
\t},
\tprevUntil: function( elem, i, until ) {
\t\treturn jQuery.dir( elem, \"previousSibling\", until );
\t},
\tsiblings: function( elem ) {
\t\treturn jQuery.sibling( ( elem.parentNode || {} ).firstChild, elem );
\t},
\tchildren: function( elem ) {
\t\treturn jQuery.sibling( elem.firstChild );
\t},
\tcontents: function( elem ) {
\t\treturn elem.contentDocument || jQuery.merge( [], elem.childNodes );
\t}
}, function( name, fn ) {
\tjQuery.fn[ name ] = function( until, selector ) {
\t\tvar matched = jQuery.map( this, fn, until );

\t\tif ( name.slice( -5 ) !== \"Until\" ) {
\t\t\tselector = until;
\t\t}

\t\tif ( selector && typeof selector === \"string\" ) {
\t\t\tmatched = jQuery.filter( selector, matched );
\t\t}

\t\tif ( this.length > 1 ) {
\t\t\t// Remove duplicates
\t\t\tif ( !guaranteedUnique[ name ] ) {
\t\t\t\tjQuery.unique( matched );
\t\t\t}

\t\t\t// Reverse order for parents* and prev-derivatives
\t\t\tif ( rparentsprev.test( name ) ) {
\t\t\t\tmatched.reverse();
\t\t\t}
\t\t}

\t\treturn this.pushStack( matched );
\t};
});
var rnotwhite = (/\\S+/g);



// String to Object options format cache
var optionsCache = {};

// Convert String-formatted options into Object-formatted ones and store in cache
function createOptions( options ) {
\tvar object = optionsCache[ options ] = {};
\tjQuery.each( options.match( rnotwhite ) || [], function( _, flag ) {
\t\tobject[ flag ] = true;
\t});
\treturn object;
}

/*
 * Create a callback list using the following parameters:
 *
 *\toptions: an optional list of space-separated options that will change how
 *\t\t\tthe callback list behaves or a more traditional option object
 *
 * By default a callback list will act like an event callback list and can be
 * \"fired\" multiple times.
 *
 * Possible options:
 *
 *\tonce:\t\t\twill ensure the callback list can only be fired once (like a Deferred)
 *
 *\tmemory:\t\t\twill keep track of previous values and will call any callback added
 *\t\t\t\t\tafter the list has been fired right away with the latest \"memorized\"
 *\t\t\t\t\tvalues (like a Deferred)
 *
 *\tunique:\t\t\twill ensure a callback can only be added once (no duplicate in the list)
 *
 *\tstopOnFalse:\tinterrupt callings when a callback returns false
 *
 */
jQuery.Callbacks = function( options ) {

\t// Convert options from String-formatted to Object-formatted if needed
\t// (we check in cache first)
\toptions = typeof options === \"string\" ?
\t\t( optionsCache[ options ] || createOptions( options ) ) :
\t\tjQuery.extend( {}, options );

\tvar // Last fire value (for non-forgettable lists)
\t\tmemory,
\t\t// Flag to know if list was already fired
\t\tfired,
\t\t// Flag to know if list is currently firing
\t\tfiring,
\t\t// First callback to fire (used internally by add and fireWith)
\t\tfiringStart,
\t\t// End of the loop when firing
\t\tfiringLength,
\t\t// Index of currently firing callback (modified by remove if needed)
\t\tfiringIndex,
\t\t// Actual callback list
\t\tlist = [],
\t\t// Stack of fire calls for repeatable lists
\t\tstack = !options.once && [],
\t\t// Fire callbacks
\t\tfire = function( data ) {
\t\t\tmemory = options.memory && data;
\t\t\tfired = true;
\t\t\tfiringIndex = firingStart || 0;
\t\t\tfiringStart = 0;
\t\t\tfiringLength = list.length;
\t\t\tfiring = true;
\t\t\tfor ( ; list && firingIndex < firingLength; firingIndex++ ) {
\t\t\t\tif ( list[ firingIndex ].apply( data[ 0 ], data[ 1 ] ) === false && options.stopOnFalse ) {
\t\t\t\t\tmemory = false; // To prevent further calls using add
\t\t\t\t\tbreak;
\t\t\t\t}
\t\t\t}
\t\t\tfiring = false;
\t\t\tif ( list ) {
\t\t\t\tif ( stack ) {
\t\t\t\t\tif ( stack.length ) {
\t\t\t\t\t\tfire( stack.shift() );
\t\t\t\t\t}
\t\t\t\t} else if ( memory ) {
\t\t\t\t\tlist = [];
\t\t\t\t} else {
\t\t\t\t\tself.disable();
\t\t\t\t}
\t\t\t}
\t\t},
\t\t// Actual Callbacks object
\t\tself = {
\t\t\t// Add a callback or a collection of callbacks to the list
\t\t\tadd: function() {
\t\t\t\tif ( list ) {
\t\t\t\t\t// First, we save the current length
\t\t\t\t\tvar start = list.length;
\t\t\t\t\t(function add( args ) {
\t\t\t\t\t\tjQuery.each( args, function( _, arg ) {
\t\t\t\t\t\t\tvar type = jQuery.type( arg );
\t\t\t\t\t\t\tif ( type === \"function\" ) {
\t\t\t\t\t\t\t\tif ( !options.unique || !self.has( arg ) ) {
\t\t\t\t\t\t\t\t\tlist.push( arg );
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t} else if ( arg && arg.length && type !== \"string\" ) {
\t\t\t\t\t\t\t\t// Inspect recursively
\t\t\t\t\t\t\t\tadd( arg );
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t})( arguments );
\t\t\t\t\t// Do we need to add the callbacks to the
\t\t\t\t\t// current firing batch?
\t\t\t\t\tif ( firing ) {
\t\t\t\t\t\tfiringLength = list.length;
\t\t\t\t\t// With memory, if we're not firing then
\t\t\t\t\t// we should call right away
\t\t\t\t\t} else if ( memory ) {
\t\t\t\t\t\tfiringStart = start;
\t\t\t\t\t\tfire( memory );
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\treturn this;
\t\t\t},
\t\t\t// Remove a callback from the list
\t\t\tremove: function() {
\t\t\t\tif ( list ) {
\t\t\t\t\tjQuery.each( arguments, function( _, arg ) {
\t\t\t\t\t\tvar index;
\t\t\t\t\t\twhile ( ( index = jQuery.inArray( arg, list, index ) ) > -1 ) {
\t\t\t\t\t\t\tlist.splice( index, 1 );
\t\t\t\t\t\t\t// Handle firing indexes
\t\t\t\t\t\t\tif ( firing ) {
\t\t\t\t\t\t\t\tif ( index <= firingLength ) {
\t\t\t\t\t\t\t\t\tfiringLength--;
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\tif ( index <= firingIndex ) {
\t\t\t\t\t\t\t\t\tfiringIndex--;
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t}
\t\t\t\treturn this;
\t\t\t},
\t\t\t// Check if a given callback is in the list.
\t\t\t// If no argument is given, return whether or not list has callbacks attached.
\t\t\thas: function( fn ) {
\t\t\t\treturn fn ? jQuery.inArray( fn, list ) > -1 : !!( list && list.length );
\t\t\t},
\t\t\t// Remove all callbacks from the list
\t\t\tempty: function() {
\t\t\t\tlist = [];
\t\t\t\tfiringLength = 0;
\t\t\t\treturn this;
\t\t\t},
\t\t\t// Have the list do nothing anymore
\t\t\tdisable: function() {
\t\t\t\tlist = stack = memory = undefined;
\t\t\t\treturn this;
\t\t\t},
\t\t\t// Is it disabled?
\t\t\tdisabled: function() {
\t\t\t\treturn !list;
\t\t\t},
\t\t\t// Lock the list in its current state
\t\t\tlock: function() {
\t\t\t\tstack = undefined;
\t\t\t\tif ( !memory ) {
\t\t\t\t\tself.disable();
\t\t\t\t}
\t\t\t\treturn this;
\t\t\t},
\t\t\t// Is it locked?
\t\t\tlocked: function() {
\t\t\t\treturn !stack;
\t\t\t},
\t\t\t// Call all callbacks with the given context and arguments
\t\t\tfireWith: function( context, args ) {
\t\t\t\tif ( list && ( !fired || stack ) ) {
\t\t\t\t\targs = args || [];
\t\t\t\t\targs = [ context, args.slice ? args.slice() : args ];
\t\t\t\t\tif ( firing ) {
\t\t\t\t\t\tstack.push( args );
\t\t\t\t\t} else {
\t\t\t\t\t\tfire( args );
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\treturn this;
\t\t\t},
\t\t\t// Call all the callbacks with the given arguments
\t\t\tfire: function() {
\t\t\t\tself.fireWith( this, arguments );
\t\t\t\treturn this;
\t\t\t},
\t\t\t// To know if the callbacks have already been called at least once
\t\t\tfired: function() {
\t\t\t\treturn !!fired;
\t\t\t}
\t\t};

\treturn self;
};


jQuery.extend({

\tDeferred: function( func ) {
\t\tvar tuples = [
\t\t\t\t// action, add listener, listener list, final state
\t\t\t\t[ \"resolve\", \"done\", jQuery.Callbacks(\"once memory\"), \"resolved\" ],
\t\t\t\t[ \"reject\", \"fail\", jQuery.Callbacks(\"once memory\"), \"rejected\" ],
\t\t\t\t[ \"notify\", \"progress\", jQuery.Callbacks(\"memory\") ]
\t\t\t],
\t\t\tstate = \"pending\",
\t\t\tpromise = {
\t\t\t\tstate: function() {
\t\t\t\t\treturn state;
\t\t\t\t},
\t\t\t\talways: function() {
\t\t\t\t\tdeferred.done( arguments ).fail( arguments );
\t\t\t\t\treturn this;
\t\t\t\t},
\t\t\t\tthen: function( /* fnDone, fnFail, fnProgress */ ) {
\t\t\t\t\tvar fns = arguments;
\t\t\t\t\treturn jQuery.Deferred(function( newDefer ) {
\t\t\t\t\t\tjQuery.each( tuples, function( i, tuple ) {
\t\t\t\t\t\t\tvar fn = jQuery.isFunction( fns[ i ] ) && fns[ i ];
\t\t\t\t\t\t\t// deferred[ done | fail | progress ] for forwarding actions to newDefer
\t\t\t\t\t\t\tdeferred[ tuple[1] ](function() {
\t\t\t\t\t\t\t\tvar returned = fn && fn.apply( this, arguments );
\t\t\t\t\t\t\t\tif ( returned && jQuery.isFunction( returned.promise ) ) {
\t\t\t\t\t\t\t\t\treturned.promise()
\t\t\t\t\t\t\t\t\t\t.done( newDefer.resolve )
\t\t\t\t\t\t\t\t\t\t.fail( newDefer.reject )
\t\t\t\t\t\t\t\t\t\t.progress( newDefer.notify );
\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\tnewDefer[ tuple[ 0 ] + \"With\" ]( this === promise ? newDefer.promise() : this, fn ? [ returned ] : arguments );
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t});
\t\t\t\t\t\t});
\t\t\t\t\t\tfns = null;
\t\t\t\t\t}).promise();
\t\t\t\t},
\t\t\t\t// Get a promise for this deferred
\t\t\t\t// If obj is provided, the promise aspect is added to the object
\t\t\t\tpromise: function( obj ) {
\t\t\t\t\treturn obj != null ? jQuery.extend( obj, promise ) : promise;
\t\t\t\t}
\t\t\t},
\t\t\tdeferred = {};

\t\t// Keep pipe for back-compat
\t\tpromise.pipe = promise.then;

\t\t// Add list-specific methods
\t\tjQuery.each( tuples, function( i, tuple ) {
\t\t\tvar list = tuple[ 2 ],
\t\t\t\tstateString = tuple[ 3 ];

\t\t\t// promise[ done | fail | progress ] = list.add
\t\t\tpromise[ tuple[1] ] = list.add;

\t\t\t// Handle state
\t\t\tif ( stateString ) {
\t\t\t\tlist.add(function() {
\t\t\t\t\t// state = [ resolved | rejected ]
\t\t\t\t\tstate = stateString;

\t\t\t\t// [ reject_list | resolve_list ].disable; progress_list.lock
\t\t\t\t}, tuples[ i ^ 1 ][ 2 ].disable, tuples[ 2 ][ 2 ].lock );
\t\t\t}

\t\t\t// deferred[ resolve | reject | notify ]
\t\t\tdeferred[ tuple[0] ] = function() {
\t\t\t\tdeferred[ tuple[0] + \"With\" ]( this === deferred ? promise : this, arguments );
\t\t\t\treturn this;
\t\t\t};
\t\t\tdeferred[ tuple[0] + \"With\" ] = list.fireWith;
\t\t});

\t\t// Make the deferred a promise
\t\tpromise.promise( deferred );

\t\t// Call given func if any
\t\tif ( func ) {
\t\t\tfunc.call( deferred, deferred );
\t\t}

\t\t// All done!
\t\treturn deferred;
\t},

\t// Deferred helper
\twhen: function( subordinate /* , ..., subordinateN */ ) {
\t\tvar i = 0,
\t\t\tresolveValues = slice.call( arguments ),
\t\t\tlength = resolveValues.length,

\t\t\t// the count of uncompleted subordinates
\t\t\tremaining = length !== 1 || ( subordinate && jQuery.isFunction( subordinate.promise ) ) ? length : 0,

\t\t\t// the master Deferred. If resolveValues consist of only a single Deferred, just use that.
\t\t\tdeferred = remaining === 1 ? subordinate : jQuery.Deferred(),

\t\t\t// Update function for both resolve and progress values
\t\t\tupdateFunc = function( i, contexts, values ) {
\t\t\t\treturn function( value ) {
\t\t\t\t\tcontexts[ i ] = this;
\t\t\t\t\tvalues[ i ] = arguments.length > 1 ? slice.call( arguments ) : value;
\t\t\t\t\tif ( values === progressValues ) {
\t\t\t\t\t\tdeferred.notifyWith( contexts, values );
\t\t\t\t\t} else if ( !( --remaining ) ) {
\t\t\t\t\t\tdeferred.resolveWith( contexts, values );
\t\t\t\t\t}
\t\t\t\t};
\t\t\t},

\t\t\tprogressValues, progressContexts, resolveContexts;

\t\t// Add listeners to Deferred subordinates; treat others as resolved
\t\tif ( length > 1 ) {
\t\t\tprogressValues = new Array( length );
\t\t\tprogressContexts = new Array( length );
\t\t\tresolveContexts = new Array( length );
\t\t\tfor ( ; i < length; i++ ) {
\t\t\t\tif ( resolveValues[ i ] && jQuery.isFunction( resolveValues[ i ].promise ) ) {
\t\t\t\t\tresolveValues[ i ].promise()
\t\t\t\t\t\t.done( updateFunc( i, resolveContexts, resolveValues ) )
\t\t\t\t\t\t.fail( deferred.reject )
\t\t\t\t\t\t.progress( updateFunc( i, progressContexts, progressValues ) );
\t\t\t\t} else {
\t\t\t\t\t--remaining;
\t\t\t\t}
\t\t\t}
\t\t}

\t\t// If we're not waiting on anything, resolve the master
\t\tif ( !remaining ) {
\t\t\tdeferred.resolveWith( resolveContexts, resolveValues );
\t\t}

\t\treturn deferred.promise();
\t}
});


// The deferred used on DOM ready
var readyList;

jQuery.fn.ready = function( fn ) {
\t// Add the callback
\tjQuery.ready.promise().done( fn );

\treturn this;
};

jQuery.extend({
\t// Is the DOM ready to be used? Set to true once it occurs.
\tisReady: false,

\t// A counter to track how many items to wait for before
\t// the ready event fires. See #6781
\treadyWait: 1,

\t// Hold (or release) the ready event
\tholdReady: function( hold ) {
\t\tif ( hold ) {
\t\t\tjQuery.readyWait++;
\t\t} else {
\t\t\tjQuery.ready( true );
\t\t}
\t},

\t// Handle when the DOM is ready
\tready: function( wait ) {

\t\t// Abort if there are pending holds or we're already ready
\t\tif ( wait === true ? --jQuery.readyWait : jQuery.isReady ) {
\t\t\treturn;
\t\t}

\t\t// Remember that the DOM is ready
\t\tjQuery.isReady = true;

\t\t// If a normal DOM Ready event fired, decrement, and wait if need be
\t\tif ( wait !== true && --jQuery.readyWait > 0 ) {
\t\t\treturn;
\t\t}

\t\t// If there are functions bound, to execute
\t\treadyList.resolveWith( document, [ jQuery ] );

\t\t// Trigger any bound ready events
\t\tif ( jQuery.fn.triggerHandler ) {
\t\t\tjQuery( document ).triggerHandler( \"ready\" );
\t\t\tjQuery( document ).off( \"ready\" );
\t\t}
\t}
});

/**
 * The ready event handler and self cleanup method
 */
function completed() {
\tdocument.removeEventListener( \"DOMContentLoaded\", completed, false );
\twindow.removeEventListener( \"load\", completed, false );
\tjQuery.ready();
}

jQuery.ready.promise = function( obj ) {
\tif ( !readyList ) {

\t\treadyList = jQuery.Deferred();

\t\t// Catch cases where \$(document).ready() is called after the browser event has already occurred.
\t\t// We once tried to use readyState \"interactive\" here, but it caused issues like the one
\t\t// discovered by ChrisS here: http://bugs.jquery.com/ticket/12282#comment:15
\t\tif ( document.readyState === \"complete\" ) {
\t\t\t// Handle it asynchronously to allow scripts the opportunity to delay ready
\t\t\tsetTimeout( jQuery.ready );

\t\t} else {

\t\t\t// Use the handy event callback
\t\t\tdocument.addEventListener( \"DOMContentLoaded\", completed, false );

\t\t\t// A fallback to window.onload, that will always work
\t\t\twindow.addEventListener( \"load\", completed, false );
\t\t}
\t}
\treturn readyList.promise( obj );
};

// Kick off the DOM ready check even if the user does not
jQuery.ready.promise();




// Multifunctional method to get and set values of a collection
// The value/s can optionally be executed if it's a function
var access = jQuery.access = function( elems, fn, key, value, chainable, emptyGet, raw ) {
\tvar i = 0,
\t\tlen = elems.length,
\t\tbulk = key == null;

\t// Sets many values
\tif ( jQuery.type( key ) === \"object\" ) {
\t\tchainable = true;
\t\tfor ( i in key ) {
\t\t\tjQuery.access( elems, fn, i, key[i], true, emptyGet, raw );
\t\t}

\t// Sets one value
\t} else if ( value !== undefined ) {
\t\tchainable = true;

\t\tif ( !jQuery.isFunction( value ) ) {
\t\t\traw = true;
\t\t}

\t\tif ( bulk ) {
\t\t\t// Bulk operations run against the entire set
\t\t\tif ( raw ) {
\t\t\t\tfn.call( elems, value );
\t\t\t\tfn = null;

\t\t\t// ...except when executing function values
\t\t\t} else {
\t\t\t\tbulk = fn;
\t\t\t\tfn = function( elem, key, value ) {
\t\t\t\t\treturn bulk.call( jQuery( elem ), value );
\t\t\t\t};
\t\t\t}
\t\t}

\t\tif ( fn ) {
\t\t\tfor ( ; i < len; i++ ) {
\t\t\t\tfn( elems[i], key, raw ? value : value.call( elems[i], i, fn( elems[i], key ) ) );
\t\t\t}
\t\t}
\t}

\treturn chainable ?
\t\telems :

\t\t// Gets
\t\tbulk ?
\t\t\tfn.call( elems ) :
\t\t\tlen ? fn( elems[0], key ) : emptyGet;
};


/**
 * Determines whether an object can have data
 */
jQuery.acceptData = function( owner ) {
\t// Accepts only:
\t//  - Node
\t//    - Node.ELEMENT_NODE
\t//    - Node.DOCUMENT_NODE
\t//  - Object
\t//    - Any
\t/* jshint -W018 */
\treturn owner.nodeType === 1 || owner.nodeType === 9 || !( +owner.nodeType );
};


function Data() {
\t// Support: Android<4,
\t// Old WebKit does not have Object.preventExtensions/freeze method,
\t// return new empty object instead with no [[set]] accessor
\tObject.defineProperty( this.cache = {}, 0, {
\t\tget: function() {
\t\t\treturn {};
\t\t}
\t});

\tthis.expando = jQuery.expando + Data.uid++;
}

Data.uid = 1;
Data.accepts = jQuery.acceptData;

Data.prototype = {
\tkey: function( owner ) {
\t\t// We can accept data for non-element nodes in modern browsers,
\t\t// but we should not, see #8335.
\t\t// Always return the key for a frozen object.
\t\tif ( !Data.accepts( owner ) ) {
\t\t\treturn 0;
\t\t}

\t\tvar descriptor = {},
\t\t\t// Check if the owner object already has a cache key
\t\t\tunlock = owner[ this.expando ];

\t\t// If not, create one
\t\tif ( !unlock ) {
\t\t\tunlock = Data.uid++;

\t\t\t// Secure it in a non-enumerable, non-writable property
\t\t\ttry {
\t\t\t\tdescriptor[ this.expando ] = { value: unlock };
\t\t\t\tObject.defineProperties( owner, descriptor );

\t\t\t// Support: Android<4
\t\t\t// Fallback to a less secure definition
\t\t\t} catch ( e ) {
\t\t\t\tdescriptor[ this.expando ] = unlock;
\t\t\t\tjQuery.extend( owner, descriptor );
\t\t\t}
\t\t}

\t\t// Ensure the cache object
\t\tif ( !this.cache[ unlock ] ) {
\t\t\tthis.cache[ unlock ] = {};
\t\t}

\t\treturn unlock;
\t},
\tset: function( owner, data, value ) {
\t\tvar prop,
\t\t\t// There may be an unlock assigned to this node,
\t\t\t// if there is no entry for this \"owner\", create one inline
\t\t\t// and set the unlock as though an owner entry had always existed
\t\t\tunlock = this.key( owner ),
\t\t\tcache = this.cache[ unlock ];

\t\t// Handle: [ owner, key, value ] args
\t\tif ( typeof data === \"string\" ) {
\t\t\tcache[ data ] = value;

\t\t// Handle: [ owner, { properties } ] args
\t\t} else {
\t\t\t// Fresh assignments by object are shallow copied
\t\t\tif ( jQuery.isEmptyObject( cache ) ) {
\t\t\t\tjQuery.extend( this.cache[ unlock ], data );
\t\t\t// Otherwise, copy the properties one-by-one to the cache object
\t\t\t} else {
\t\t\t\tfor ( prop in data ) {
\t\t\t\t\tcache[ prop ] = data[ prop ];
\t\t\t\t}
\t\t\t}
\t\t}
\t\treturn cache;
\t},
\tget: function( owner, key ) {
\t\t// Either a valid cache is found, or will be created.
\t\t// New caches will be created and the unlock returned,
\t\t// allowing direct access to the newly created
\t\t// empty data object. A valid owner object must be provided.
\t\tvar cache = this.cache[ this.key( owner ) ];

\t\treturn key === undefined ?
\t\t\tcache : cache[ key ];
\t},
\taccess: function( owner, key, value ) {
\t\tvar stored;
\t\t// In cases where either:
\t\t//
\t\t//   1. No key was specified
\t\t//   2. A string key was specified, but no value provided
\t\t//
\t\t// Take the \"read\" path and allow the get method to determine
\t\t// which value to return, respectively either:
\t\t//
\t\t//   1. The entire cache object
\t\t//   2. The data stored at the key
\t\t//
\t\tif ( key === undefined ||
\t\t\t\t((key && typeof key === \"string\") && value === undefined) ) {

\t\t\tstored = this.get( owner, key );

\t\t\treturn stored !== undefined ?
\t\t\t\tstored : this.get( owner, jQuery.camelCase(key) );
\t\t}

\t\t// [*]When the key is not a string, or both a key and value
\t\t// are specified, set or extend (existing objects) with either:
\t\t//
\t\t//   1. An object of properties
\t\t//   2. A key and value
\t\t//
\t\tthis.set( owner, key, value );

\t\t// Since the \"set\" path can have two possible entry points
\t\t// return the expected data based on which path was taken[*]
\t\treturn value !== undefined ? value : key;
\t},
\tremove: function( owner, key ) {
\t\tvar i, name, camel,
\t\t\tunlock = this.key( owner ),
\t\t\tcache = this.cache[ unlock ];

\t\tif ( key === undefined ) {
\t\t\tthis.cache[ unlock ] = {};

\t\t} else {
\t\t\t// Support array or space separated string of keys
\t\t\tif ( jQuery.isArray( key ) ) {
\t\t\t\t// If \"name\" is an array of keys...
\t\t\t\t// When data is initially created, via (\"key\", \"val\") signature,
\t\t\t\t// keys will be converted to camelCase.
\t\t\t\t// Since there is no way to tell _how_ a key was added, remove
\t\t\t\t// both plain key and camelCase key. #12786
\t\t\t\t// This will only penalize the array argument path.
\t\t\t\tname = key.concat( key.map( jQuery.camelCase ) );
\t\t\t} else {
\t\t\t\tcamel = jQuery.camelCase( key );
\t\t\t\t// Try the string as a key before any manipulation
\t\t\t\tif ( key in cache ) {
\t\t\t\t\tname = [ key, camel ];
\t\t\t\t} else {
\t\t\t\t\t// If a key with the spaces exists, use it.
\t\t\t\t\t// Otherwise, create an array by matching non-whitespace
\t\t\t\t\tname = camel;
\t\t\t\t\tname = name in cache ?
\t\t\t\t\t\t[ name ] : ( name.match( rnotwhite ) || [] );
\t\t\t\t}
\t\t\t}

\t\t\ti = name.length;
\t\t\twhile ( i-- ) {
\t\t\t\tdelete cache[ name[ i ] ];
\t\t\t}
\t\t}
\t},
\thasData: function( owner ) {
\t\treturn !jQuery.isEmptyObject(
\t\t\tthis.cache[ owner[ this.expando ] ] || {}
\t\t);
\t},
\tdiscard: function( owner ) {
\t\tif ( owner[ this.expando ] ) {
\t\t\tdelete this.cache[ owner[ this.expando ] ];
\t\t}
\t}
};
var data_priv = new Data();

var data_user = new Data();



//\tImplementation Summary
//
//\t1. Enforce API surface and semantic compatibility with 1.9.x branch
//\t2. Improve the module's maintainability by reducing the storage
//\t\tpaths to a single mechanism.
//\t3. Use the same single mechanism to support \"private\" and \"user\" data.
//\t4. _Never_ expose \"private\" data to user code (TODO: Drop _data, _removeData)
//\t5. Avoid exposing implementation details on user objects (eg. expando properties)
//\t6. Provide a clear path for implementation upgrade to WeakMap in 2014

var rbrace = /^(?:\\{[\\w\\W]*\\}|\\[[\\w\\W]*\\])\$/,
\trmultiDash = /([A-Z])/g;

function dataAttr( elem, key, data ) {
\tvar name;

\t// If nothing was found internally, try to fetch any
\t// data from the HTML5 data-* attribute
\tif ( data === undefined && elem.nodeType === 1 ) {
\t\tname = \"data-\" + key.replace( rmultiDash, \"-\$1\" ).toLowerCase();
\t\tdata = elem.getAttribute( name );

\t\tif ( typeof data === \"string\" ) {
\t\t\ttry {
\t\t\t\tdata = data === \"true\" ? true :
\t\t\t\t\tdata === \"false\" ? false :
\t\t\t\t\tdata === \"null\" ? null :
\t\t\t\t\t// Only convert to a number if it doesn't change the string
\t\t\t\t\t+data + \"\" === data ? +data :
\t\t\t\t\trbrace.test( data ) ? jQuery.parseJSON( data ) :
\t\t\t\t\tdata;
\t\t\t} catch( e ) {}

\t\t\t// Make sure we set the data so it isn't changed later
\t\t\tdata_user.set( elem, key, data );
\t\t} else {
\t\t\tdata = undefined;
\t\t}
\t}
\treturn data;
}

jQuery.extend({
\thasData: function( elem ) {
\t\treturn data_user.hasData( elem ) || data_priv.hasData( elem );
\t},

\tdata: function( elem, name, data ) {
\t\treturn data_user.access( elem, name, data );
\t},

\tremoveData: function( elem, name ) {
\t\tdata_user.remove( elem, name );
\t},

\t// TODO: Now that all calls to _data and _removeData have been replaced
\t// with direct calls to data_priv methods, these can be deprecated.
\t_data: function( elem, name, data ) {
\t\treturn data_priv.access( elem, name, data );
\t},

\t_removeData: function( elem, name ) {
\t\tdata_priv.remove( elem, name );
\t}
});

jQuery.fn.extend({
\tdata: function( key, value ) {
\t\tvar i, name, data,
\t\t\telem = this[ 0 ],
\t\t\tattrs = elem && elem.attributes;

\t\t// Gets all values
\t\tif ( key === undefined ) {
\t\t\tif ( this.length ) {
\t\t\t\tdata = data_user.get( elem );

\t\t\t\tif ( elem.nodeType === 1 && !data_priv.get( elem, \"hasDataAttrs\" ) ) {
\t\t\t\t\ti = attrs.length;
\t\t\t\t\twhile ( i-- ) {

\t\t\t\t\t\t// Support: IE11+
\t\t\t\t\t\t// The attrs elements can be null (#14894)
\t\t\t\t\t\tif ( attrs[ i ] ) {
\t\t\t\t\t\t\tname = attrs[ i ].name;
\t\t\t\t\t\t\tif ( name.indexOf( \"data-\" ) === 0 ) {
\t\t\t\t\t\t\t\tname = jQuery.camelCase( name.slice(5) );
\t\t\t\t\t\t\t\tdataAttr( elem, name, data[ name ] );
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\tdata_priv.set( elem, \"hasDataAttrs\", true );
\t\t\t\t}
\t\t\t}

\t\t\treturn data;
\t\t}

\t\t// Sets multiple values
\t\tif ( typeof key === \"object\" ) {
\t\t\treturn this.each(function() {
\t\t\t\tdata_user.set( this, key );
\t\t\t});
\t\t}

\t\treturn access( this, function( value ) {
\t\t\tvar data,
\t\t\t\tcamelKey = jQuery.camelCase( key );

\t\t\t// The calling jQuery object (element matches) is not empty
\t\t\t// (and therefore has an element appears at this[ 0 ]) and the
\t\t\t// `value` parameter was not undefined. An empty jQuery object
\t\t\t// will result in `undefined` for elem = this[ 0 ] which will
\t\t\t// throw an exception if an attempt to read a data cache is made.
\t\t\tif ( elem && value === undefined ) {
\t\t\t\t// Attempt to get data from the cache
\t\t\t\t// with the key as-is
\t\t\t\tdata = data_user.get( elem, key );
\t\t\t\tif ( data !== undefined ) {
\t\t\t\t\treturn data;
\t\t\t\t}

\t\t\t\t// Attempt to get data from the cache
\t\t\t\t// with the key camelized
\t\t\t\tdata = data_user.get( elem, camelKey );
\t\t\t\tif ( data !== undefined ) {
\t\t\t\t\treturn data;
\t\t\t\t}

\t\t\t\t// Attempt to \"discover\" the data in
\t\t\t\t// HTML5 custom data-* attrs
\t\t\t\tdata = dataAttr( elem, camelKey, undefined );
\t\t\t\tif ( data !== undefined ) {
\t\t\t\t\treturn data;
\t\t\t\t}

\t\t\t\t// We tried really hard, but the data doesn't exist.
\t\t\t\treturn;
\t\t\t}

\t\t\t// Set the data...
\t\t\tthis.each(function() {
\t\t\t\t// First, attempt to store a copy or reference of any
\t\t\t\t// data that might've been store with a camelCased key.
\t\t\t\tvar data = data_user.get( this, camelKey );

\t\t\t\t// For HTML5 data-* attribute interop, we have to
\t\t\t\t// store property names with dashes in a camelCase form.
\t\t\t\t// This might not apply to all properties...*
\t\t\t\tdata_user.set( this, camelKey, value );

\t\t\t\t// *... In the case of properties that might _actually_
\t\t\t\t// have dashes, we need to also store a copy of that
\t\t\t\t// unchanged property.
\t\t\t\tif ( key.indexOf(\"-\") !== -1 && data !== undefined ) {
\t\t\t\t\tdata_user.set( this, key, value );
\t\t\t\t}
\t\t\t});
\t\t}, null, value, arguments.length > 1, null, true );
\t},

\tremoveData: function( key ) {
\t\treturn this.each(function() {
\t\t\tdata_user.remove( this, key );
\t\t});
\t}
});


jQuery.extend({
\tqueue: function( elem, type, data ) {
\t\tvar queue;

\t\tif ( elem ) {
\t\t\ttype = ( type || \"fx\" ) + \"queue\";
\t\t\tqueue = data_priv.get( elem, type );

\t\t\t// Speed up dequeue by getting out quickly if this is just a lookup
\t\t\tif ( data ) {
\t\t\t\tif ( !queue || jQuery.isArray( data ) ) {
\t\t\t\t\tqueue = data_priv.access( elem, type, jQuery.makeArray(data) );
\t\t\t\t} else {
\t\t\t\t\tqueue.push( data );
\t\t\t\t}
\t\t\t}
\t\t\treturn queue || [];
\t\t}
\t},

\tdequeue: function( elem, type ) {
\t\ttype = type || \"fx\";

\t\tvar queue = jQuery.queue( elem, type ),
\t\t\tstartLength = queue.length,
\t\t\tfn = queue.shift(),
\t\t\thooks = jQuery._queueHooks( elem, type ),
\t\t\tnext = function() {
\t\t\t\tjQuery.dequeue( elem, type );
\t\t\t};

\t\t// If the fx queue is dequeued, always remove the progress sentinel
\t\tif ( fn === \"inprogress\" ) {
\t\t\tfn = queue.shift();
\t\t\tstartLength--;
\t\t}

\t\tif ( fn ) {

\t\t\t// Add a progress sentinel to prevent the fx queue from being
\t\t\t// automatically dequeued
\t\t\tif ( type === \"fx\" ) {
\t\t\t\tqueue.unshift( \"inprogress\" );
\t\t\t}

\t\t\t// Clear up the last queue stop function
\t\t\tdelete hooks.stop;
\t\t\tfn.call( elem, next, hooks );
\t\t}

\t\tif ( !startLength && hooks ) {
\t\t\thooks.empty.fire();
\t\t}
\t},

\t// Not public - generate a queueHooks object, or return the current one
\t_queueHooks: function( elem, type ) {
\t\tvar key = type + \"queueHooks\";
\t\treturn data_priv.get( elem, key ) || data_priv.access( elem, key, {
\t\t\tempty: jQuery.Callbacks(\"once memory\").add(function() {
\t\t\t\tdata_priv.remove( elem, [ type + \"queue\", key ] );
\t\t\t})
\t\t});
\t}
});

jQuery.fn.extend({
\tqueue: function( type, data ) {
\t\tvar setter = 2;

\t\tif ( typeof type !== \"string\" ) {
\t\t\tdata = type;
\t\t\ttype = \"fx\";
\t\t\tsetter--;
\t\t}

\t\tif ( arguments.length < setter ) {
\t\t\treturn jQuery.queue( this[0], type );
\t\t}

\t\treturn data === undefined ?
\t\t\tthis :
\t\t\tthis.each(function() {
\t\t\t\tvar queue = jQuery.queue( this, type, data );

\t\t\t\t// Ensure a hooks for this queue
\t\t\t\tjQuery._queueHooks( this, type );

\t\t\t\tif ( type === \"fx\" && queue[0] !== \"inprogress\" ) {
\t\t\t\t\tjQuery.dequeue( this, type );
\t\t\t\t}
\t\t\t});
\t},
\tdequeue: function( type ) {
\t\treturn this.each(function() {
\t\t\tjQuery.dequeue( this, type );
\t\t});
\t},
\tclearQueue: function( type ) {
\t\treturn this.queue( type || \"fx\", [] );
\t},
\t// Get a promise resolved when queues of a certain type
\t// are emptied (fx is the type by default)
\tpromise: function( type, obj ) {
\t\tvar tmp,
\t\t\tcount = 1,
\t\t\tdefer = jQuery.Deferred(),
\t\t\telements = this,
\t\t\ti = this.length,
\t\t\tresolve = function() {
\t\t\t\tif ( !( --count ) ) {
\t\t\t\t\tdefer.resolveWith( elements, [ elements ] );
\t\t\t\t}
\t\t\t};

\t\tif ( typeof type !== \"string\" ) {
\t\t\tobj = type;
\t\t\ttype = undefined;
\t\t}
\t\ttype = type || \"fx\";

\t\twhile ( i-- ) {
\t\t\ttmp = data_priv.get( elements[ i ], type + \"queueHooks\" );
\t\t\tif ( tmp && tmp.empty ) {
\t\t\t\tcount++;
\t\t\t\ttmp.empty.add( resolve );
\t\t\t}
\t\t}
\t\tresolve();
\t\treturn defer.promise( obj );
\t}
});
var pnum = (/[+-]?(?:\\d*\\.|)\\d+(?:[eE][+-]?\\d+|)/).source;

var cssExpand = [ \"Top\", \"Right\", \"Bottom\", \"Left\" ];

var isHidden = function( elem, el ) {
\t\t// isHidden might be called from jQuery#filter function;
\t\t// in that case, element will be second argument
\t\telem = el || elem;
\t\treturn jQuery.css( elem, \"display\" ) === \"none\" || !jQuery.contains( elem.ownerDocument, elem );
\t};

var rcheckableType = (/^(?:checkbox|radio)\$/i);



(function() {
\tvar fragment = document.createDocumentFragment(),
\t\tdiv = fragment.appendChild( document.createElement( \"div\" ) ),
\t\tinput = document.createElement( \"input\" );

\t// Support: Safari<=5.1
\t// Check state lost if the name is set (#11217)
\t// Support: Windows Web Apps (WWA)
\t// `name` and `type` must use .setAttribute for WWA (#14901)
\tinput.setAttribute( \"type\", \"radio\" );
\tinput.setAttribute( \"checked\", \"checked\" );
\tinput.setAttribute( \"name\", \"t\" );

\tdiv.appendChild( input );

\t// Support: Safari<=5.1, Android<4.2
\t// Older WebKit doesn't clone checked state correctly in fragments
\tsupport.checkClone = div.cloneNode( true ).cloneNode( true ).lastChild.checked;

\t// Support: IE<=11+
\t// Make sure textarea (and checkbox) defaultValue is properly cloned
\tdiv.innerHTML = \"<textarea>x</textarea>\";
\tsupport.noCloneChecked = !!div.cloneNode( true ).lastChild.defaultValue;
})();
var strundefined = typeof undefined;



support.focusinBubbles = \"onfocusin\" in window;


var
\trkeyEvent = /^key/,
\trmouseEvent = /^(?:mouse|pointer|contextmenu)|click/,
\trfocusMorph = /^(?:focusinfocus|focusoutblur)\$/,
\trtypenamespace = /^([^.]*)(?:\\.(.+)|)\$/;

function returnTrue() {
\treturn true;
}

function returnFalse() {
\treturn false;
}

function safeActiveElement() {
\ttry {
\t\treturn document.activeElement;
\t} catch ( err ) { }
}

/*
 * Helper functions for managing events -- not part of the public interface.
 * Props to Dean Edwards' addEvent library for many of the ideas.
 */
jQuery.event = {

\tglobal: {},

\tadd: function( elem, types, handler, data, selector ) {

\t\tvar handleObjIn, eventHandle, tmp,
\t\t\tevents, t, handleObj,
\t\t\tspecial, handlers, type, namespaces, origType,
\t\t\telemData = data_priv.get( elem );

\t\t// Don't attach events to noData or text/comment nodes (but allow plain objects)
\t\tif ( !elemData ) {
\t\t\treturn;
\t\t}

\t\t// Caller can pass in an object of custom data in lieu of the handler
\t\tif ( handler.handler ) {
\t\t\thandleObjIn = handler;
\t\t\thandler = handleObjIn.handler;
\t\t\tselector = handleObjIn.selector;
\t\t}

\t\t// Make sure that the handler has a unique ID, used to find/remove it later
\t\tif ( !handler.guid ) {
\t\t\thandler.guid = jQuery.guid++;
\t\t}

\t\t// Init the element's event structure and main handler, if this is the first
\t\tif ( !(events = elemData.events) ) {
\t\t\tevents = elemData.events = {};
\t\t}
\t\tif ( !(eventHandle = elemData.handle) ) {
\t\t\teventHandle = elemData.handle = function( e ) {
\t\t\t\t// Discard the second event of a jQuery.event.trigger() and
\t\t\t\t// when an event is called after a page has unloaded
\t\t\t\treturn typeof jQuery !== strundefined && jQuery.event.triggered !== e.type ?
\t\t\t\t\tjQuery.event.dispatch.apply( elem, arguments ) : undefined;
\t\t\t};
\t\t}

\t\t// Handle multiple events separated by a space
\t\ttypes = ( types || \"\" ).match( rnotwhite ) || [ \"\" ];
\t\tt = types.length;
\t\twhile ( t-- ) {
\t\t\ttmp = rtypenamespace.exec( types[t] ) || [];
\t\t\ttype = origType = tmp[1];
\t\t\tnamespaces = ( tmp[2] || \"\" ).split( \".\" ).sort();

\t\t\t// There *must* be a type, no attaching namespace-only handlers
\t\t\tif ( !type ) {
\t\t\t\tcontinue;
\t\t\t}

\t\t\t// If event changes its type, use the special event handlers for the changed type
\t\t\tspecial = jQuery.event.special[ type ] || {};

\t\t\t// If selector defined, determine special event api type, otherwise given type
\t\t\ttype = ( selector ? special.delegateType : special.bindType ) || type;

\t\t\t// Update special based on newly reset type
\t\t\tspecial = jQuery.event.special[ type ] || {};

\t\t\t// handleObj is passed to all event handlers
\t\t\thandleObj = jQuery.extend({
\t\t\t\ttype: type,
\t\t\t\torigType: origType,
\t\t\t\tdata: data,
\t\t\t\thandler: handler,
\t\t\t\tguid: handler.guid,
\t\t\t\tselector: selector,
\t\t\t\tneedsContext: selector && jQuery.expr.match.needsContext.test( selector ),
\t\t\t\tnamespace: namespaces.join(\".\")
\t\t\t}, handleObjIn );

\t\t\t// Init the event handler queue if we're the first
\t\t\tif ( !(handlers = events[ type ]) ) {
\t\t\t\thandlers = events[ type ] = [];
\t\t\t\thandlers.delegateCount = 0;

\t\t\t\t// Only use addEventListener if the special events handler returns false
\t\t\t\tif ( !special.setup || special.setup.call( elem, data, namespaces, eventHandle ) === false ) {
\t\t\t\t\tif ( elem.addEventListener ) {
\t\t\t\t\t\telem.addEventListener( type, eventHandle, false );
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t\t\tif ( special.add ) {
\t\t\t\tspecial.add.call( elem, handleObj );

\t\t\t\tif ( !handleObj.handler.guid ) {
\t\t\t\t\thandleObj.handler.guid = handler.guid;
\t\t\t\t}
\t\t\t}

\t\t\t// Add to the element's handler list, delegates in front
\t\t\tif ( selector ) {
\t\t\t\thandlers.splice( handlers.delegateCount++, 0, handleObj );
\t\t\t} else {
\t\t\t\thandlers.push( handleObj );
\t\t\t}

\t\t\t// Keep track of which events have ever been used, for event optimization
\t\t\tjQuery.event.global[ type ] = true;
\t\t}

\t},

\t// Detach an event or set of events from an element
\tremove: function( elem, types, handler, selector, mappedTypes ) {

\t\tvar j, origCount, tmp,
\t\t\tevents, t, handleObj,
\t\t\tspecial, handlers, type, namespaces, origType,
\t\t\telemData = data_priv.hasData( elem ) && data_priv.get( elem );

\t\tif ( !elemData || !(events = elemData.events) ) {
\t\t\treturn;
\t\t}

\t\t// Once for each type.namespace in types; type may be omitted
\t\ttypes = ( types || \"\" ).match( rnotwhite ) || [ \"\" ];
\t\tt = types.length;
\t\twhile ( t-- ) {
\t\t\ttmp = rtypenamespace.exec( types[t] ) || [];
\t\t\ttype = origType = tmp[1];
\t\t\tnamespaces = ( tmp[2] || \"\" ).split( \".\" ).sort();

\t\t\t// Unbind all events (on this namespace, if provided) for the element
\t\t\tif ( !type ) {
\t\t\t\tfor ( type in events ) {
\t\t\t\t\tjQuery.event.remove( elem, type + types[ t ], handler, selector, true );
\t\t\t\t}
\t\t\t\tcontinue;
\t\t\t}

\t\t\tspecial = jQuery.event.special[ type ] || {};
\t\t\ttype = ( selector ? special.delegateType : special.bindType ) || type;
\t\t\thandlers = events[ type ] || [];
\t\t\ttmp = tmp[2] && new RegExp( \"(^|\\\\.)\" + namespaces.join(\"\\\\.(?:.*\\\\.|)\") + \"(\\\\.|\$)\" );

\t\t\t// Remove matching events
\t\t\torigCount = j = handlers.length;
\t\t\twhile ( j-- ) {
\t\t\t\thandleObj = handlers[ j ];

\t\t\t\tif ( ( mappedTypes || origType === handleObj.origType ) &&
\t\t\t\t\t( !handler || handler.guid === handleObj.guid ) &&
\t\t\t\t\t( !tmp || tmp.test( handleObj.namespace ) ) &&
\t\t\t\t\t( !selector || selector === handleObj.selector || selector === \"**\" && handleObj.selector ) ) {
\t\t\t\t\thandlers.splice( j, 1 );

\t\t\t\t\tif ( handleObj.selector ) {
\t\t\t\t\t\thandlers.delegateCount--;
\t\t\t\t\t}
\t\t\t\t\tif ( special.remove ) {
\t\t\t\t\t\tspecial.remove.call( elem, handleObj );
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t\t\t// Remove generic event handler if we removed something and no more handlers exist
\t\t\t// (avoids potential for endless recursion during removal of special event handlers)
\t\t\tif ( origCount && !handlers.length ) {
\t\t\t\tif ( !special.teardown || special.teardown.call( elem, namespaces, elemData.handle ) === false ) {
\t\t\t\t\tjQuery.removeEvent( elem, type, elemData.handle );
\t\t\t\t}

\t\t\t\tdelete events[ type ];
\t\t\t}
\t\t}

\t\t// Remove the expando if it's no longer used
\t\tif ( jQuery.isEmptyObject( events ) ) {
\t\t\tdelete elemData.handle;
\t\t\tdata_priv.remove( elem, \"events\" );
\t\t}
\t},

\ttrigger: function( event, data, elem, onlyHandlers ) {

\t\tvar i, cur, tmp, bubbleType, ontype, handle, special,
\t\t\teventPath = [ elem || document ],
\t\t\ttype = hasOwn.call( event, \"type\" ) ? event.type : event,
\t\t\tnamespaces = hasOwn.call( event, \"namespace\" ) ? event.namespace.split(\".\") : [];

\t\tcur = tmp = elem = elem || document;

\t\t// Don't do events on text and comment nodes
\t\tif ( elem.nodeType === 3 || elem.nodeType === 8 ) {
\t\t\treturn;
\t\t}

\t\t// focus/blur morphs to focusin/out; ensure we're not firing them right now
\t\tif ( rfocusMorph.test( type + jQuery.event.triggered ) ) {
\t\t\treturn;
\t\t}

\t\tif ( type.indexOf(\".\") >= 0 ) {
\t\t\t// Namespaced trigger; create a regexp to match event type in handle()
\t\t\tnamespaces = type.split(\".\");
\t\t\ttype = namespaces.shift();
\t\t\tnamespaces.sort();
\t\t}
\t\tontype = type.indexOf(\":\") < 0 && \"on\" + type;

\t\t// Caller can pass in a jQuery.Event object, Object, or just an event type string
\t\tevent = event[ jQuery.expando ] ?
\t\t\tevent :
\t\t\tnew jQuery.Event( type, typeof event === \"object\" && event );

\t\t// Trigger bitmask: & 1 for native handlers; & 2 for jQuery (always true)
\t\tevent.isTrigger = onlyHandlers ? 2 : 3;
\t\tevent.namespace = namespaces.join(\".\");
\t\tevent.namespace_re = event.namespace ?
\t\t\tnew RegExp( \"(^|\\\\.)\" + namespaces.join(\"\\\\.(?:.*\\\\.|)\") + \"(\\\\.|\$)\" ) :
\t\t\tnull;

\t\t// Clean up the event in case it is being reused
\t\tevent.result = undefined;
\t\tif ( !event.target ) {
\t\t\tevent.target = elem;
\t\t}

\t\t// Clone any incoming data and prepend the event, creating the handler arg list
\t\tdata = data == null ?
\t\t\t[ event ] :
\t\t\tjQuery.makeArray( data, [ event ] );

\t\t// Allow special events to draw outside the lines
\t\tspecial = jQuery.event.special[ type ] || {};
\t\tif ( !onlyHandlers && special.trigger && special.trigger.apply( elem, data ) === false ) {
\t\t\treturn;
\t\t}

\t\t// Determine event propagation path in advance, per W3C events spec (#9951)
\t\t// Bubble up to document, then to window; watch for a global ownerDocument var (#9724)
\t\tif ( !onlyHandlers && !special.noBubble && !jQuery.isWindow( elem ) ) {

\t\t\tbubbleType = special.delegateType || type;
\t\t\tif ( !rfocusMorph.test( bubbleType + type ) ) {
\t\t\t\tcur = cur.parentNode;
\t\t\t}
\t\t\tfor ( ; cur; cur = cur.parentNode ) {
\t\t\t\teventPath.push( cur );
\t\t\t\ttmp = cur;
\t\t\t}

\t\t\t// Only add window if we got to document (e.g., not plain obj or detached DOM)
\t\t\tif ( tmp === (elem.ownerDocument || document) ) {
\t\t\t\teventPath.push( tmp.defaultView || tmp.parentWindow || window );
\t\t\t}
\t\t}

\t\t// Fire handlers on the event path
\t\ti = 0;
\t\twhile ( (cur = eventPath[i++]) && !event.isPropagationStopped() ) {

\t\t\tevent.type = i > 1 ?
\t\t\t\tbubbleType :
\t\t\t\tspecial.bindType || type;

\t\t\t// jQuery handler
\t\t\thandle = ( data_priv.get( cur, \"events\" ) || {} )[ event.type ] && data_priv.get( cur, \"handle\" );
\t\t\tif ( handle ) {
\t\t\t\thandle.apply( cur, data );
\t\t\t}

\t\t\t// Native handler
\t\t\thandle = ontype && cur[ ontype ];
\t\t\tif ( handle && handle.apply && jQuery.acceptData( cur ) ) {
\t\t\t\tevent.result = handle.apply( cur, data );
\t\t\t\tif ( event.result === false ) {
\t\t\t\t\tevent.preventDefault();
\t\t\t\t}
\t\t\t}
\t\t}
\t\tevent.type = type;

\t\t// If nobody prevented the default action, do it now
\t\tif ( !onlyHandlers && !event.isDefaultPrevented() ) {

\t\t\tif ( (!special._default || special._default.apply( eventPath.pop(), data ) === false) &&
\t\t\t\tjQuery.acceptData( elem ) ) {

\t\t\t\t// Call a native DOM method on the target with the same name name as the event.
\t\t\t\t// Don't do default actions on window, that's where global variables be (#6170)
\t\t\t\tif ( ontype && jQuery.isFunction( elem[ type ] ) && !jQuery.isWindow( elem ) ) {

\t\t\t\t\t// Don't re-trigger an onFOO event when we call its FOO() method
\t\t\t\t\ttmp = elem[ ontype ];

\t\t\t\t\tif ( tmp ) {
\t\t\t\t\t\telem[ ontype ] = null;
\t\t\t\t\t}

\t\t\t\t\t// Prevent re-triggering of the same event, since we already bubbled it above
\t\t\t\t\tjQuery.event.triggered = type;
\t\t\t\t\telem[ type ]();
\t\t\t\t\tjQuery.event.triggered = undefined;

\t\t\t\t\tif ( tmp ) {
\t\t\t\t\t\telem[ ontype ] = tmp;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}

\t\treturn event.result;
\t},

\tdispatch: function( event ) {

\t\t// Make a writable jQuery.Event from the native event object
\t\tevent = jQuery.event.fix( event );

\t\tvar i, j, ret, matched, handleObj,
\t\t\thandlerQueue = [],
\t\t\targs = slice.call( arguments ),
\t\t\thandlers = ( data_priv.get( this, \"events\" ) || {} )[ event.type ] || [],
\t\t\tspecial = jQuery.event.special[ event.type ] || {};

\t\t// Use the fix-ed jQuery.Event rather than the (read-only) native event
\t\targs[0] = event;
\t\tevent.delegateTarget = this;

\t\t// Call the preDispatch hook for the mapped type, and let it bail if desired
\t\tif ( special.preDispatch && special.preDispatch.call( this, event ) === false ) {
\t\t\treturn;
\t\t}

\t\t// Determine handlers
\t\thandlerQueue = jQuery.event.handlers.call( this, event, handlers );

\t\t// Run delegates first; they may want to stop propagation beneath us
\t\ti = 0;
\t\twhile ( (matched = handlerQueue[ i++ ]) && !event.isPropagationStopped() ) {
\t\t\tevent.currentTarget = matched.elem;

\t\t\tj = 0;
\t\t\twhile ( (handleObj = matched.handlers[ j++ ]) && !event.isImmediatePropagationStopped() ) {

\t\t\t\t// Triggered event must either 1) have no namespace, or 2) have namespace(s)
\t\t\t\t// a subset or equal to those in the bound event (both can have no namespace).
\t\t\t\tif ( !event.namespace_re || event.namespace_re.test( handleObj.namespace ) ) {

\t\t\t\t\tevent.handleObj = handleObj;
\t\t\t\t\tevent.data = handleObj.data;

\t\t\t\t\tret = ( (jQuery.event.special[ handleObj.origType ] || {}).handle || handleObj.handler )
\t\t\t\t\t\t\t.apply( matched.elem, args );

\t\t\t\t\tif ( ret !== undefined ) {
\t\t\t\t\t\tif ( (event.result = ret) === false ) {
\t\t\t\t\t\t\tevent.preventDefault();
\t\t\t\t\t\t\tevent.stopPropagation();
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}

\t\t// Call the postDispatch hook for the mapped type
\t\tif ( special.postDispatch ) {
\t\t\tspecial.postDispatch.call( this, event );
\t\t}

\t\treturn event.result;
\t},

\thandlers: function( event, handlers ) {
\t\tvar i, matches, sel, handleObj,
\t\t\thandlerQueue = [],
\t\t\tdelegateCount = handlers.delegateCount,
\t\t\tcur = event.target;

\t\t// Find delegate handlers
\t\t// Black-hole SVG <use> instance trees (#13180)
\t\t// Avoid non-left-click bubbling in Firefox (#3861)
\t\tif ( delegateCount && cur.nodeType && (!event.button || event.type !== \"click\") ) {

\t\t\tfor ( ; cur !== this; cur = cur.parentNode || this ) {

\t\t\t\t// Don't process clicks on disabled elements (#6911, #8165, #11382, #11764)
\t\t\t\tif ( cur.disabled !== true || event.type !== \"click\" ) {
\t\t\t\t\tmatches = [];
\t\t\t\t\tfor ( i = 0; i < delegateCount; i++ ) {
\t\t\t\t\t\thandleObj = handlers[ i ];

\t\t\t\t\t\t// Don't conflict with Object.prototype properties (#13203)
\t\t\t\t\t\tsel = handleObj.selector + \" \";

\t\t\t\t\t\tif ( matches[ sel ] === undefined ) {
\t\t\t\t\t\t\tmatches[ sel ] = handleObj.needsContext ?
\t\t\t\t\t\t\t\tjQuery( sel, this ).index( cur ) >= 0 :
\t\t\t\t\t\t\t\tjQuery.find( sel, this, null, [ cur ] ).length;
\t\t\t\t\t\t}
\t\t\t\t\t\tif ( matches[ sel ] ) {
\t\t\t\t\t\t\tmatches.push( handleObj );
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\tif ( matches.length ) {
\t\t\t\t\t\thandlerQueue.push({ elem: cur, handlers: matches });
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}

\t\t// Add the remaining (directly-bound) handlers
\t\tif ( delegateCount < handlers.length ) {
\t\t\thandlerQueue.push({ elem: this, handlers: handlers.slice( delegateCount ) });
\t\t}

\t\treturn handlerQueue;
\t},

\t// Includes some event props shared by KeyEvent and MouseEvent
\tprops: \"altKey bubbles cancelable ctrlKey currentTarget eventPhase metaKey relatedTarget shiftKey target timeStamp view which\".split(\" \"),

\tfixHooks: {},

\tkeyHooks: {
\t\tprops: \"char charCode key keyCode\".split(\" \"),
\t\tfilter: function( event, original ) {

\t\t\t// Add which for key events
\t\t\tif ( event.which == null ) {
\t\t\t\tevent.which = original.charCode != null ? original.charCode : original.keyCode;
\t\t\t}

\t\t\treturn event;
\t\t}
\t},

\tmouseHooks: {
\t\tprops: \"button buttons clientX clientY offsetX offsetY pageX pageY screenX screenY toElement\".split(\" \"),
\t\tfilter: function( event, original ) {
\t\t\tvar eventDoc, doc, body,
\t\t\t\tbutton = original.button;

\t\t\t// Calculate pageX/Y if missing and clientX/Y available
\t\t\tif ( event.pageX == null && original.clientX != null ) {
\t\t\t\teventDoc = event.target.ownerDocument || document;
\t\t\t\tdoc = eventDoc.documentElement;
\t\t\t\tbody = eventDoc.body;

\t\t\t\tevent.pageX = original.clientX + ( doc && doc.scrollLeft || body && body.scrollLeft || 0 ) - ( doc && doc.clientLeft || body && body.clientLeft || 0 );
\t\t\t\tevent.pageY = original.clientY + ( doc && doc.scrollTop  || body && body.scrollTop  || 0 ) - ( doc && doc.clientTop  || body && body.clientTop  || 0 );
\t\t\t}

\t\t\t// Add which for click: 1 === left; 2 === middle; 3 === right
\t\t\t// Note: button is not normalized, so don't use it
\t\t\tif ( !event.which && button !== undefined ) {
\t\t\t\tevent.which = ( button & 1 ? 1 : ( button & 2 ? 3 : ( button & 4 ? 2 : 0 ) ) );
\t\t\t}

\t\t\treturn event;
\t\t}
\t},

\tfix: function( event ) {
\t\tif ( event[ jQuery.expando ] ) {
\t\t\treturn event;
\t\t}

\t\t// Create a writable copy of the event object and normalize some properties
\t\tvar i, prop, copy,
\t\t\ttype = event.type,
\t\t\toriginalEvent = event,
\t\t\tfixHook = this.fixHooks[ type ];

\t\tif ( !fixHook ) {
\t\t\tthis.fixHooks[ type ] = fixHook =
\t\t\t\trmouseEvent.test( type ) ? this.mouseHooks :
\t\t\t\trkeyEvent.test( type ) ? this.keyHooks :
\t\t\t\t{};
\t\t}
\t\tcopy = fixHook.props ? this.props.concat( fixHook.props ) : this.props;

\t\tevent = new jQuery.Event( originalEvent );

\t\ti = copy.length;
\t\twhile ( i-- ) {
\t\t\tprop = copy[ i ];
\t\t\tevent[ prop ] = originalEvent[ prop ];
\t\t}

\t\t// Support: Cordova 2.5 (WebKit) (#13255)
\t\t// All events should have a target; Cordova deviceready doesn't
\t\tif ( !event.target ) {
\t\t\tevent.target = document;
\t\t}

\t\t// Support: Safari 6.0+, Chrome<28
\t\t// Target should not be a text node (#504, #13143)
\t\tif ( event.target.nodeType === 3 ) {
\t\t\tevent.target = event.target.parentNode;
\t\t}

\t\treturn fixHook.filter ? fixHook.filter( event, originalEvent ) : event;
\t},

\tspecial: {
\t\tload: {
\t\t\t// Prevent triggered image.load events from bubbling to window.load
\t\t\tnoBubble: true
\t\t},
\t\tfocus: {
\t\t\t// Fire native event if possible so blur/focus sequence is correct
\t\t\ttrigger: function() {
\t\t\t\tif ( this !== safeActiveElement() && this.focus ) {
\t\t\t\t\tthis.focus();
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t},
\t\t\tdelegateType: \"focusin\"
\t\t},
\t\tblur: {
\t\t\ttrigger: function() {
\t\t\t\tif ( this === safeActiveElement() && this.blur ) {
\t\t\t\t\tthis.blur();
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t},
\t\t\tdelegateType: \"focusout\"
\t\t},
\t\tclick: {
\t\t\t// For checkbox, fire native event so checked state will be right
\t\t\ttrigger: function() {
\t\t\t\tif ( this.type === \"checkbox\" && this.click && jQuery.nodeName( this, \"input\" ) ) {
\t\t\t\t\tthis.click();
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t},

\t\t\t// For cross-browser consistency, don't fire native .click() on links
\t\t\t_default: function( event ) {
\t\t\t\treturn jQuery.nodeName( event.target, \"a\" );
\t\t\t}
\t\t},

\t\tbeforeunload: {
\t\t\tpostDispatch: function( event ) {

\t\t\t\t// Support: Firefox 20+
\t\t\t\t// Firefox doesn't alert if the returnValue field is not set.
\t\t\t\tif ( event.result !== undefined && event.originalEvent ) {
\t\t\t\t\tevent.originalEvent.returnValue = event.result;
\t\t\t\t}
\t\t\t}
\t\t}
\t},

\tsimulate: function( type, elem, event, bubble ) {
\t\t// Piggyback on a donor event to simulate a different one.
\t\t// Fake originalEvent to avoid donor's stopPropagation, but if the
\t\t// simulated event prevents default then we do the same on the donor.
\t\tvar e = jQuery.extend(
\t\t\tnew jQuery.Event(),
\t\t\tevent,
\t\t\t{
\t\t\t\ttype: type,
\t\t\t\tisSimulated: true,
\t\t\t\toriginalEvent: {}
\t\t\t}
\t\t);
\t\tif ( bubble ) {
\t\t\tjQuery.event.trigger( e, null, elem );
\t\t} else {
\t\t\tjQuery.event.dispatch.call( elem, e );
\t\t}
\t\tif ( e.isDefaultPrevented() ) {
\t\t\tevent.preventDefault();
\t\t}
\t}
};

jQuery.removeEvent = function( elem, type, handle ) {
\tif ( elem.removeEventListener ) {
\t\telem.removeEventListener( type, handle, false );
\t}
};

jQuery.Event = function( src, props ) {
\t// Allow instantiation without the 'new' keyword
\tif ( !(this instanceof jQuery.Event) ) {
\t\treturn new jQuery.Event( src, props );
\t}

\t// Event object
\tif ( src && src.type ) {
\t\tthis.originalEvent = src;
\t\tthis.type = src.type;

\t\t// Events bubbling up the document may have been marked as prevented
\t\t// by a handler lower down the tree; reflect the correct value.
\t\tthis.isDefaultPrevented = src.defaultPrevented ||
\t\t\t\tsrc.defaultPrevented === undefined &&
\t\t\t\t// Support: Android<4.0
\t\t\t\tsrc.returnValue === false ?
\t\t\treturnTrue :
\t\t\treturnFalse;

\t// Event type
\t} else {
\t\tthis.type = src;
\t}

\t// Put explicitly provided properties onto the event object
\tif ( props ) {
\t\tjQuery.extend( this, props );
\t}

\t// Create a timestamp if incoming event doesn't have one
\tthis.timeStamp = src && src.timeStamp || jQuery.now();

\t// Mark it as fixed
\tthis[ jQuery.expando ] = true;
};

// jQuery.Event is based on DOM3 Events as specified by the ECMAScript Language Binding
// http://www.w3.org/TR/2003/WD-DOM-Level-3-Events-20030331/ecma-script-binding.html
jQuery.Event.prototype = {
\tisDefaultPrevented: returnFalse,
\tisPropagationStopped: returnFalse,
\tisImmediatePropagationStopped: returnFalse,

\tpreventDefault: function() {
\t\tvar e = this.originalEvent;

\t\tthis.isDefaultPrevented = returnTrue;

\t\tif ( e && e.preventDefault ) {
\t\t\te.preventDefault();
\t\t}
\t},
\tstopPropagation: function() {
\t\tvar e = this.originalEvent;

\t\tthis.isPropagationStopped = returnTrue;

\t\tif ( e && e.stopPropagation ) {
\t\t\te.stopPropagation();
\t\t}
\t},
\tstopImmediatePropagation: function() {
\t\tvar e = this.originalEvent;

\t\tthis.isImmediatePropagationStopped = returnTrue;

\t\tif ( e && e.stopImmediatePropagation ) {
\t\t\te.stopImmediatePropagation();
\t\t}

\t\tthis.stopPropagation();
\t}
};

// Create mouseenter/leave events using mouseover/out and event-time checks
// Support: Chrome 15+
jQuery.each({
\tmouseenter: \"mouseover\",
\tmouseleave: \"mouseout\",
\tpointerenter: \"pointerover\",
\tpointerleave: \"pointerout\"
}, function( orig, fix ) {
\tjQuery.event.special[ orig ] = {
\t\tdelegateType: fix,
\t\tbindType: fix,

\t\thandle: function( event ) {
\t\t\tvar ret,
\t\t\t\ttarget = this,
\t\t\t\trelated = event.relatedTarget,
\t\t\t\thandleObj = event.handleObj;

\t\t\t// For mousenter/leave call the handler if related is outside the target.
\t\t\t// NB: No relatedTarget if the mouse left/entered the browser window
\t\t\tif ( !related || (related !== target && !jQuery.contains( target, related )) ) {
\t\t\t\tevent.type = handleObj.origType;
\t\t\t\tret = handleObj.handler.apply( this, arguments );
\t\t\t\tevent.type = fix;
\t\t\t}
\t\t\treturn ret;
\t\t}
\t};
});

// Support: Firefox, Chrome, Safari
// Create \"bubbling\" focus and blur events
if ( !support.focusinBubbles ) {
\tjQuery.each({ focus: \"focusin\", blur: \"focusout\" }, function( orig, fix ) {

\t\t// Attach a single capturing handler on the document while someone wants focusin/focusout
\t\tvar handler = function( event ) {
\t\t\t\tjQuery.event.simulate( fix, event.target, jQuery.event.fix( event ), true );
\t\t\t};

\t\tjQuery.event.special[ fix ] = {
\t\t\tsetup: function() {
\t\t\t\tvar doc = this.ownerDocument || this,
\t\t\t\t\tattaches = data_priv.access( doc, fix );

\t\t\t\tif ( !attaches ) {
\t\t\t\t\tdoc.addEventListener( orig, handler, true );
\t\t\t\t}
\t\t\t\tdata_priv.access( doc, fix, ( attaches || 0 ) + 1 );
\t\t\t},
\t\t\tteardown: function() {
\t\t\t\tvar doc = this.ownerDocument || this,
\t\t\t\t\tattaches = data_priv.access( doc, fix ) - 1;

\t\t\t\tif ( !attaches ) {
\t\t\t\t\tdoc.removeEventListener( orig, handler, true );
\t\t\t\t\tdata_priv.remove( doc, fix );

\t\t\t\t} else {
\t\t\t\t\tdata_priv.access( doc, fix, attaches );
\t\t\t\t}
\t\t\t}
\t\t};
\t});
}

jQuery.fn.extend({

\ton: function( types, selector, data, fn, /*INTERNAL*/ one ) {
\t\tvar origFn, type;

\t\t// Types can be a map of types/handlers
\t\tif ( typeof types === \"object\" ) {
\t\t\t// ( types-Object, selector, data )
\t\t\tif ( typeof selector !== \"string\" ) {
\t\t\t\t// ( types-Object, data )
\t\t\t\tdata = data || selector;
\t\t\t\tselector = undefined;
\t\t\t}
\t\t\tfor ( type in types ) {
\t\t\t\tthis.on( type, selector, data, types[ type ], one );
\t\t\t}
\t\t\treturn this;
\t\t}

\t\tif ( data == null && fn == null ) {
\t\t\t// ( types, fn )
\t\t\tfn = selector;
\t\t\tdata = selector = undefined;
\t\t} else if ( fn == null ) {
\t\t\tif ( typeof selector === \"string\" ) {
\t\t\t\t// ( types, selector, fn )
\t\t\t\tfn = data;
\t\t\t\tdata = undefined;
\t\t\t} else {
\t\t\t\t// ( types, data, fn )
\t\t\t\tfn = data;
\t\t\t\tdata = selector;
\t\t\t\tselector = undefined;
\t\t\t}
\t\t}
\t\tif ( fn === false ) {
\t\t\tfn = returnFalse;
\t\t} else if ( !fn ) {
\t\t\treturn this;
\t\t}

\t\tif ( one === 1 ) {
\t\t\torigFn = fn;
\t\t\tfn = function( event ) {
\t\t\t\t// Can use an empty set, since event contains the info
\t\t\t\tjQuery().off( event );
\t\t\t\treturn origFn.apply( this, arguments );
\t\t\t};
\t\t\t// Use same guid so caller can remove using origFn
\t\t\tfn.guid = origFn.guid || ( origFn.guid = jQuery.guid++ );
\t\t}
\t\treturn this.each( function() {
\t\t\tjQuery.event.add( this, types, fn, data, selector );
\t\t});
\t},
\tone: function( types, selector, data, fn ) {
\t\treturn this.on( types, selector, data, fn, 1 );
\t},
\toff: function( types, selector, fn ) {
\t\tvar handleObj, type;
\t\tif ( types && types.preventDefault && types.handleObj ) {
\t\t\t// ( event )  dispatched jQuery.Event
\t\t\thandleObj = types.handleObj;
\t\t\tjQuery( types.delegateTarget ).off(
\t\t\t\thandleObj.namespace ? handleObj.origType + \".\" + handleObj.namespace : handleObj.origType,
\t\t\t\thandleObj.selector,
\t\t\t\thandleObj.handler
\t\t\t);
\t\t\treturn this;
\t\t}
\t\tif ( typeof types === \"object\" ) {
\t\t\t// ( types-object [, selector] )
\t\t\tfor ( type in types ) {
\t\t\t\tthis.off( type, selector, types[ type ] );
\t\t\t}
\t\t\treturn this;
\t\t}
\t\tif ( selector === false || typeof selector === \"function\" ) {
\t\t\t// ( types [, fn] )
\t\t\tfn = selector;
\t\t\tselector = undefined;
\t\t}
\t\tif ( fn === false ) {
\t\t\tfn = returnFalse;
\t\t}
\t\treturn this.each(function() {
\t\t\tjQuery.event.remove( this, types, fn, selector );
\t\t});
\t},

\ttrigger: function( type, data ) {
\t\treturn this.each(function() {
\t\t\tjQuery.event.trigger( type, data, this );
\t\t});
\t},
\ttriggerHandler: function( type, data ) {
\t\tvar elem = this[0];
\t\tif ( elem ) {
\t\t\treturn jQuery.event.trigger( type, data, elem, true );
\t\t}
\t}
});


var
\trxhtmlTag = /<(?!area|br|col|embed|hr|img|input|link|meta|param)(([\\w:]+)[^>]*)\\/>/gi,
\trtagName = /<([\\w:]+)/,
\trhtml = /<|&#?\\w+;/,
\trnoInnerhtml = /<(?:script|style|link)/i,
\t// checked=\"checked\" or checked
\trchecked = /checked\\s*(?:[^=]|=\\s*.checked.)/i,
\trscriptType = /^\$|\\/(?:java|ecma)script/i,
\trscriptTypeMasked = /^true\\/(.*)/,
\trcleanScript = /^\\s*<!(?:\\[CDATA\\[|--)|(?:\\]\\]|--)>\\s*\$/g,

\t// We have to close these tags to support XHTML (#13200)
\twrapMap = {

\t\t// Support: IE9
\t\toption: [ 1, \"<select multiple='multiple'>\", \"</select>\" ],

\t\tthead: [ 1, \"<table>\", \"</table>\" ],
\t\tcol: [ 2, \"<table><colgroup>\", \"</colgroup></table>\" ],
\t\ttr: [ 2, \"<table><tbody>\", \"</tbody></table>\" ],
\t\ttd: [ 3, \"<table><tbody><tr>\", \"</tr></tbody></table>\" ],

\t\t_default: [ 0, \"\", \"\" ]
\t};

// Support: IE9
wrapMap.optgroup = wrapMap.option;

wrapMap.tbody = wrapMap.tfoot = wrapMap.colgroup = wrapMap.caption = wrapMap.thead;
wrapMap.th = wrapMap.td;

// Support: 1.x compatibility
// Manipulating tables requires a tbody
function manipulationTarget( elem, content ) {
\treturn jQuery.nodeName( elem, \"table\" ) &&
\t\tjQuery.nodeName( content.nodeType !== 11 ? content : content.firstChild, \"tr\" ) ?

\t\telem.getElementsByTagName(\"tbody\")[0] ||
\t\t\telem.appendChild( elem.ownerDocument.createElement(\"tbody\") ) :
\t\telem;
}

// Replace/restore the type attribute of script elements for safe DOM manipulation
function disableScript( elem ) {
\telem.type = (elem.getAttribute(\"type\") !== null) + \"/\" + elem.type;
\treturn elem;
}
function restoreScript( elem ) {
\tvar match = rscriptTypeMasked.exec( elem.type );

\tif ( match ) {
\t\telem.type = match[ 1 ];
\t} else {
\t\telem.removeAttribute(\"type\");
\t}

\treturn elem;
}

// Mark scripts as having already been evaluated
function setGlobalEval( elems, refElements ) {
\tvar i = 0,
\t\tl = elems.length;

\tfor ( ; i < l; i++ ) {
\t\tdata_priv.set(
\t\t\telems[ i ], \"globalEval\", !refElements || data_priv.get( refElements[ i ], \"globalEval\" )
\t\t);
\t}
}

function cloneCopyEvent( src, dest ) {
\tvar i, l, type, pdataOld, pdataCur, udataOld, udataCur, events;

\tif ( dest.nodeType !== 1 ) {
\t\treturn;
\t}

\t// 1. Copy private data: events, handlers, etc.
\tif ( data_priv.hasData( src ) ) {
\t\tpdataOld = data_priv.access( src );
\t\tpdataCur = data_priv.set( dest, pdataOld );
\t\tevents = pdataOld.events;

\t\tif ( events ) {
\t\t\tdelete pdataCur.handle;
\t\t\tpdataCur.events = {};

\t\t\tfor ( type in events ) {
\t\t\t\tfor ( i = 0, l = events[ type ].length; i < l; i++ ) {
\t\t\t\t\tjQuery.event.add( dest, type, events[ type ][ i ] );
\t\t\t\t}
\t\t\t}
\t\t}
\t}

\t// 2. Copy user data
\tif ( data_user.hasData( src ) ) {
\t\tudataOld = data_user.access( src );
\t\tudataCur = jQuery.extend( {}, udataOld );

\t\tdata_user.set( dest, udataCur );
\t}
}

function getAll( context, tag ) {
\tvar ret = context.getElementsByTagName ? context.getElementsByTagName( tag || \"*\" ) :
\t\t\tcontext.querySelectorAll ? context.querySelectorAll( tag || \"*\" ) :
\t\t\t[];

\treturn tag === undefined || tag && jQuery.nodeName( context, tag ) ?
\t\tjQuery.merge( [ context ], ret ) :
\t\tret;
}

// Fix IE bugs, see support tests
function fixInput( src, dest ) {
\tvar nodeName = dest.nodeName.toLowerCase();

\t// Fails to persist the checked state of a cloned checkbox or radio button.
\tif ( nodeName === \"input\" && rcheckableType.test( src.type ) ) {
\t\tdest.checked = src.checked;

\t// Fails to return the selected option to the default selected state when cloning options
\t} else if ( nodeName === \"input\" || nodeName === \"textarea\" ) {
\t\tdest.defaultValue = src.defaultValue;
\t}
}

jQuery.extend({
\tclone: function( elem, dataAndEvents, deepDataAndEvents ) {
\t\tvar i, l, srcElements, destElements,
\t\t\tclone = elem.cloneNode( true ),
\t\t\tinPage = jQuery.contains( elem.ownerDocument, elem );

\t\t// Fix IE cloning issues
\t\tif ( !support.noCloneChecked && ( elem.nodeType === 1 || elem.nodeType === 11 ) &&
\t\t\t\t!jQuery.isXMLDoc( elem ) ) {

\t\t\t// We eschew Sizzle here for performance reasons: http://jsperf.com/getall-vs-sizzle/2
\t\t\tdestElements = getAll( clone );
\t\t\tsrcElements = getAll( elem );

\t\t\tfor ( i = 0, l = srcElements.length; i < l; i++ ) {
\t\t\t\tfixInput( srcElements[ i ], destElements[ i ] );
\t\t\t}
\t\t}

\t\t// Copy the events from the original to the clone
\t\tif ( dataAndEvents ) {
\t\t\tif ( deepDataAndEvents ) {
\t\t\t\tsrcElements = srcElements || getAll( elem );
\t\t\t\tdestElements = destElements || getAll( clone );

\t\t\t\tfor ( i = 0, l = srcElements.length; i < l; i++ ) {
\t\t\t\t\tcloneCopyEvent( srcElements[ i ], destElements[ i ] );
\t\t\t\t}
\t\t\t} else {
\t\t\t\tcloneCopyEvent( elem, clone );
\t\t\t}
\t\t}

\t\t// Preserve script evaluation history
\t\tdestElements = getAll( clone, \"script\" );
\t\tif ( destElements.length > 0 ) {
\t\t\tsetGlobalEval( destElements, !inPage && getAll( elem, \"script\" ) );
\t\t}

\t\t// Return the cloned set
\t\treturn clone;
\t},

\tbuildFragment: function( elems, context, scripts, selection ) {
\t\tvar elem, tmp, tag, wrap, contains, j,
\t\t\tfragment = context.createDocumentFragment(),
\t\t\tnodes = [],
\t\t\ti = 0,
\t\t\tl = elems.length;

\t\tfor ( ; i < l; i++ ) {
\t\t\telem = elems[ i ];

\t\t\tif ( elem || elem === 0 ) {

\t\t\t\t// Add nodes directly
\t\t\t\tif ( jQuery.type( elem ) === \"object\" ) {
\t\t\t\t\t// Support: QtWebKit, PhantomJS
\t\t\t\t\t// push.apply(_, arraylike) throws on ancient WebKit
\t\t\t\t\tjQuery.merge( nodes, elem.nodeType ? [ elem ] : elem );

\t\t\t\t// Convert non-html into a text node
\t\t\t\t} else if ( !rhtml.test( elem ) ) {
\t\t\t\t\tnodes.push( context.createTextNode( elem ) );

\t\t\t\t// Convert html into DOM nodes
\t\t\t\t} else {
\t\t\t\t\ttmp = tmp || fragment.appendChild( context.createElement(\"div\") );

\t\t\t\t\t// Deserialize a standard representation
\t\t\t\t\ttag = ( rtagName.exec( elem ) || [ \"\", \"\" ] )[ 1 ].toLowerCase();
\t\t\t\t\twrap = wrapMap[ tag ] || wrapMap._default;
\t\t\t\t\ttmp.innerHTML = wrap[ 1 ] + elem.replace( rxhtmlTag, \"<\$1></\$2>\" ) + wrap[ 2 ];

\t\t\t\t\t// Descend through wrappers to the right content
\t\t\t\t\tj = wrap[ 0 ];
\t\t\t\t\twhile ( j-- ) {
\t\t\t\t\t\ttmp = tmp.lastChild;
\t\t\t\t\t}

\t\t\t\t\t// Support: QtWebKit, PhantomJS
\t\t\t\t\t// push.apply(_, arraylike) throws on ancient WebKit
\t\t\t\t\tjQuery.merge( nodes, tmp.childNodes );

\t\t\t\t\t// Remember the top-level container
\t\t\t\t\ttmp = fragment.firstChild;

\t\t\t\t\t// Ensure the created nodes are orphaned (#12392)
\t\t\t\t\ttmp.textContent = \"\";
\t\t\t\t}
\t\t\t}
\t\t}

\t\t// Remove wrapper from fragment
\t\tfragment.textContent = \"\";

\t\ti = 0;
\t\twhile ( (elem = nodes[ i++ ]) ) {

\t\t\t// #4087 - If origin and destination elements are the same, and this is
\t\t\t// that element, do not do anything
\t\t\tif ( selection && jQuery.inArray( elem, selection ) !== -1 ) {
\t\t\t\tcontinue;
\t\t\t}

\t\t\tcontains = jQuery.contains( elem.ownerDocument, elem );

\t\t\t// Append to fragment
\t\t\ttmp = getAll( fragment.appendChild( elem ), \"script\" );

\t\t\t// Preserve script evaluation history
\t\t\tif ( contains ) {
\t\t\t\tsetGlobalEval( tmp );
\t\t\t}

\t\t\t// Capture executables
\t\t\tif ( scripts ) {
\t\t\t\tj = 0;
\t\t\t\twhile ( (elem = tmp[ j++ ]) ) {
\t\t\t\t\tif ( rscriptType.test( elem.type || \"\" ) ) {
\t\t\t\t\t\tscripts.push( elem );
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}

\t\treturn fragment;
\t},

\tcleanData: function( elems ) {
\t\tvar data, elem, type, key,
\t\t\tspecial = jQuery.event.special,
\t\t\ti = 0;

\t\tfor ( ; (elem = elems[ i ]) !== undefined; i++ ) {
\t\t\tif ( jQuery.acceptData( elem ) ) {
\t\t\t\tkey = elem[ data_priv.expando ];

\t\t\t\tif ( key && (data = data_priv.cache[ key ]) ) {
\t\t\t\t\tif ( data.events ) {
\t\t\t\t\t\tfor ( type in data.events ) {
\t\t\t\t\t\t\tif ( special[ type ] ) {
\t\t\t\t\t\t\t\tjQuery.event.remove( elem, type );

\t\t\t\t\t\t\t// This is a shortcut to avoid jQuery.event.remove's overhead
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\tjQuery.removeEvent( elem, type, data.handle );
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\tif ( data_priv.cache[ key ] ) {
\t\t\t\t\t\t// Discard any remaining `private` data
\t\t\t\t\t\tdelete data_priv.cache[ key ];
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t\t// Discard any remaining `user` data
\t\t\tdelete data_user.cache[ elem[ data_user.expando ] ];
\t\t}
\t}
});

jQuery.fn.extend({
\ttext: function( value ) {
\t\treturn access( this, function( value ) {
\t\t\treturn value === undefined ?
\t\t\t\tjQuery.text( this ) :
\t\t\t\tthis.empty().each(function() {
\t\t\t\t\tif ( this.nodeType === 1 || this.nodeType === 11 || this.nodeType === 9 ) {
\t\t\t\t\t\tthis.textContent = value;
\t\t\t\t\t}
\t\t\t\t});
\t\t}, null, value, arguments.length );
\t},

\tappend: function() {
\t\treturn this.domManip( arguments, function( elem ) {
\t\t\tif ( this.nodeType === 1 || this.nodeType === 11 || this.nodeType === 9 ) {
\t\t\t\tvar target = manipulationTarget( this, elem );
\t\t\t\ttarget.appendChild( elem );
\t\t\t}
\t\t});
\t},

\tprepend: function() {
\t\treturn this.domManip( arguments, function( elem ) {
\t\t\tif ( this.nodeType === 1 || this.nodeType === 11 || this.nodeType === 9 ) {
\t\t\t\tvar target = manipulationTarget( this, elem );
\t\t\t\ttarget.insertBefore( elem, target.firstChild );
\t\t\t}
\t\t});
\t},

\tbefore: function() {
\t\treturn this.domManip( arguments, function( elem ) {
\t\t\tif ( this.parentNode ) {
\t\t\t\tthis.parentNode.insertBefore( elem, this );
\t\t\t}
\t\t});
\t},

\tafter: function() {
\t\treturn this.domManip( arguments, function( elem ) {
\t\t\tif ( this.parentNode ) {
\t\t\t\tthis.parentNode.insertBefore( elem, this.nextSibling );
\t\t\t}
\t\t});
\t},

\tremove: function( selector, keepData /* Internal Use Only */ ) {
\t\tvar elem,
\t\t\telems = selector ? jQuery.filter( selector, this ) : this,
\t\t\ti = 0;

\t\tfor ( ; (elem = elems[i]) != null; i++ ) {
\t\t\tif ( !keepData && elem.nodeType === 1 ) {
\t\t\t\tjQuery.cleanData( getAll( elem ) );
\t\t\t}

\t\t\tif ( elem.parentNode ) {
\t\t\t\tif ( keepData && jQuery.contains( elem.ownerDocument, elem ) ) {
\t\t\t\t\tsetGlobalEval( getAll( elem, \"script\" ) );
\t\t\t\t}
\t\t\t\telem.parentNode.removeChild( elem );
\t\t\t}
\t\t}

\t\treturn this;
\t},

\tempty: function() {
\t\tvar elem,
\t\t\ti = 0;

\t\tfor ( ; (elem = this[i]) != null; i++ ) {
\t\t\tif ( elem.nodeType === 1 ) {

\t\t\t\t// Prevent memory leaks
\t\t\t\tjQuery.cleanData( getAll( elem, false ) );

\t\t\t\t// Remove any remaining nodes
\t\t\t\telem.textContent = \"\";
\t\t\t}
\t\t}

\t\treturn this;
\t},

\tclone: function( dataAndEvents, deepDataAndEvents ) {
\t\tdataAndEvents = dataAndEvents == null ? false : dataAndEvents;
\t\tdeepDataAndEvents = deepDataAndEvents == null ? dataAndEvents : deepDataAndEvents;

\t\treturn this.map(function() {
\t\t\treturn jQuery.clone( this, dataAndEvents, deepDataAndEvents );
\t\t});
\t},

\thtml: function( value ) {
\t\treturn access( this, function( value ) {
\t\t\tvar elem = this[ 0 ] || {},
\t\t\t\ti = 0,
\t\t\t\tl = this.length;

\t\t\tif ( value === undefined && elem.nodeType === 1 ) {
\t\t\t\treturn elem.innerHTML;
\t\t\t}

\t\t\t// See if we can take a shortcut and just use innerHTML
\t\t\tif ( typeof value === \"string\" && !rnoInnerhtml.test( value ) &&
\t\t\t\t!wrapMap[ ( rtagName.exec( value ) || [ \"\", \"\" ] )[ 1 ].toLowerCase() ] ) {

\t\t\t\tvalue = value.replace( rxhtmlTag, \"<\$1></\$2>\" );

\t\t\t\ttry {
\t\t\t\t\tfor ( ; i < l; i++ ) {
\t\t\t\t\t\telem = this[ i ] || {};

\t\t\t\t\t\t// Remove element nodes and prevent memory leaks
\t\t\t\t\t\tif ( elem.nodeType === 1 ) {
\t\t\t\t\t\t\tjQuery.cleanData( getAll( elem, false ) );
\t\t\t\t\t\t\telem.innerHTML = value;
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\telem = 0;

\t\t\t\t// If using innerHTML throws an exception, use the fallback method
\t\t\t\t} catch( e ) {}
\t\t\t}

\t\t\tif ( elem ) {
\t\t\t\tthis.empty().append( value );
\t\t\t}
\t\t}, null, value, arguments.length );
\t},

\treplaceWith: function() {
\t\tvar arg = arguments[ 0 ];

\t\t// Make the changes, replacing each context element with the new content
\t\tthis.domManip( arguments, function( elem ) {
\t\t\targ = this.parentNode;

\t\t\tjQuery.cleanData( getAll( this ) );

\t\t\tif ( arg ) {
\t\t\t\targ.replaceChild( elem, this );
\t\t\t}
\t\t});

\t\t// Force removal if there was no new content (e.g., from empty arguments)
\t\treturn arg && (arg.length || arg.nodeType) ? this : this.remove();
\t},

\tdetach: function( selector ) {
\t\treturn this.remove( selector, true );
\t},

\tdomManip: function( args, callback ) {

\t\t// Flatten any nested arrays
\t\targs = concat.apply( [], args );

\t\tvar fragment, first, scripts, hasScripts, node, doc,
\t\t\ti = 0,
\t\t\tl = this.length,
\t\t\tset = this,
\t\t\tiNoClone = l - 1,
\t\t\tvalue = args[ 0 ],
\t\t\tisFunction = jQuery.isFunction( value );

\t\t// We can't cloneNode fragments that contain checked, in WebKit
\t\tif ( isFunction ||
\t\t\t\t( l > 1 && typeof value === \"string\" &&
\t\t\t\t\t!support.checkClone && rchecked.test( value ) ) ) {
\t\t\treturn this.each(function( index ) {
\t\t\t\tvar self = set.eq( index );
\t\t\t\tif ( isFunction ) {
\t\t\t\t\targs[ 0 ] = value.call( this, index, self.html() );
\t\t\t\t}
\t\t\t\tself.domManip( args, callback );
\t\t\t});
\t\t}

\t\tif ( l ) {
\t\t\tfragment = jQuery.buildFragment( args, this[ 0 ].ownerDocument, false, this );
\t\t\tfirst = fragment.firstChild;

\t\t\tif ( fragment.childNodes.length === 1 ) {
\t\t\t\tfragment = first;
\t\t\t}

\t\t\tif ( first ) {
\t\t\t\tscripts = jQuery.map( getAll( fragment, \"script\" ), disableScript );
\t\t\t\thasScripts = scripts.length;

\t\t\t\t// Use the original fragment for the last item instead of the first because it can end up
\t\t\t\t// being emptied incorrectly in certain situations (#8070).
\t\t\t\tfor ( ; i < l; i++ ) {
\t\t\t\t\tnode = fragment;

\t\t\t\t\tif ( i !== iNoClone ) {
\t\t\t\t\t\tnode = jQuery.clone( node, true, true );

\t\t\t\t\t\t// Keep references to cloned scripts for later restoration
\t\t\t\t\t\tif ( hasScripts ) {
\t\t\t\t\t\t\t// Support: QtWebKit
\t\t\t\t\t\t\t// jQuery.merge because push.apply(_, arraylike) throws
\t\t\t\t\t\t\tjQuery.merge( scripts, getAll( node, \"script\" ) );
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\tcallback.call( this[ i ], node, i );
\t\t\t\t}

\t\t\t\tif ( hasScripts ) {
\t\t\t\t\tdoc = scripts[ scripts.length - 1 ].ownerDocument;

\t\t\t\t\t// Reenable scripts
\t\t\t\t\tjQuery.map( scripts, restoreScript );

\t\t\t\t\t// Evaluate executable scripts on first document insertion
\t\t\t\t\tfor ( i = 0; i < hasScripts; i++ ) {
\t\t\t\t\t\tnode = scripts[ i ];
\t\t\t\t\t\tif ( rscriptType.test( node.type || \"\" ) &&
\t\t\t\t\t\t\t!data_priv.access( node, \"globalEval\" ) && jQuery.contains( doc, node ) ) {

\t\t\t\t\t\t\tif ( node.src ) {
\t\t\t\t\t\t\t\t// Optional AJAX dependency, but won't run scripts if not present
\t\t\t\t\t\t\t\tif ( jQuery._evalUrl ) {
\t\t\t\t\t\t\t\t\tjQuery._evalUrl( node.src );
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\tjQuery.globalEval( node.textContent.replace( rcleanScript, \"\" ) );
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}

\t\treturn this;
\t}
});

jQuery.each({
\tappendTo: \"append\",
\tprependTo: \"prepend\",
\tinsertBefore: \"before\",
\tinsertAfter: \"after\",
\treplaceAll: \"replaceWith\"
}, function( name, original ) {
\tjQuery.fn[ name ] = function( selector ) {
\t\tvar elems,
\t\t\tret = [],
\t\t\tinsert = jQuery( selector ),
\t\t\tlast = insert.length - 1,
\t\t\ti = 0;

\t\tfor ( ; i <= last; i++ ) {
\t\t\telems = i === last ? this : this.clone( true );
\t\t\tjQuery( insert[ i ] )[ original ]( elems );

\t\t\t// Support: QtWebKit
\t\t\t// .get() because push.apply(_, arraylike) throws
\t\t\tpush.apply( ret, elems.get() );
\t\t}

\t\treturn this.pushStack( ret );
\t};
});


var iframe,
\telemdisplay = {};

/**
 * Retrieve the actual display of a element
 * @param {String} name nodeName of the element
 * @param {Object} doc Document object
 */
// Called only from within defaultDisplay
function actualDisplay( name, doc ) {
\tvar style,
\t\telem = jQuery( doc.createElement( name ) ).appendTo( doc.body ),

\t\t// getDefaultComputedStyle might be reliably used only on attached element
\t\tdisplay = window.getDefaultComputedStyle && ( style = window.getDefaultComputedStyle( elem[ 0 ] ) ) ?

\t\t\t// Use of this method is a temporary fix (more like optimization) until something better comes along,
\t\t\t// since it was removed from specification and supported only in FF
\t\t\tstyle.display : jQuery.css( elem[ 0 ], \"display\" );

\t// We don't have any data stored on the element,
\t// so use \"detach\" method as fast way to get rid of the element
\telem.detach();

\treturn display;
}

/**
 * Try to determine the default display value of an element
 * @param {String} nodeName
 */
function defaultDisplay( nodeName ) {
\tvar doc = document,
\t\tdisplay = elemdisplay[ nodeName ];

\tif ( !display ) {
\t\tdisplay = actualDisplay( nodeName, doc );

\t\t// If the simple way fails, read from inside an iframe
\t\tif ( display === \"none\" || !display ) {

\t\t\t// Use the already-created iframe if possible
\t\t\tiframe = (iframe || jQuery( \"<iframe frameborder='0' width='0' height='0'/>\" )).appendTo( doc.documentElement );

\t\t\t// Always write a new HTML skeleton so Webkit and Firefox don't choke on reuse
\t\t\tdoc = iframe[ 0 ].contentDocument;

\t\t\t// Support: IE
\t\t\tdoc.write();
\t\t\tdoc.close();

\t\t\tdisplay = actualDisplay( nodeName, doc );
\t\t\tiframe.detach();
\t\t}

\t\t// Store the correct default display
\t\telemdisplay[ nodeName ] = display;
\t}

\treturn display;
}
var rmargin = (/^margin/);

var rnumnonpx = new RegExp( \"^(\" + pnum + \")(?!px)[a-z%]+\$\", \"i\" );

var getStyles = function( elem ) {
\t\t// Support: IE<=11+, Firefox<=30+ (#15098, #14150)
\t\t// IE throws on elements created in popups
\t\t// FF meanwhile throws on frame elements through \"defaultView.getComputedStyle\"
\t\tif ( elem.ownerDocument.defaultView.opener ) {
\t\t\treturn elem.ownerDocument.defaultView.getComputedStyle( elem, null );
\t\t}

\t\treturn window.getComputedStyle( elem, null );
\t};



function curCSS( elem, name, computed ) {
\tvar width, minWidth, maxWidth, ret,
\t\tstyle = elem.style;

\tcomputed = computed || getStyles( elem );

\t// Support: IE9
\t// getPropertyValue is only needed for .css('filter') (#12537)
\tif ( computed ) {
\t\tret = computed.getPropertyValue( name ) || computed[ name ];
\t}

\tif ( computed ) {

\t\tif ( ret === \"\" && !jQuery.contains( elem.ownerDocument, elem ) ) {
\t\t\tret = jQuery.style( elem, name );
\t\t}

\t\t// Support: iOS < 6
\t\t// A tribute to the \"awesome hack by Dean Edwards\"
\t\t// iOS < 6 (at least) returns percentage for a larger set of values, but width seems to be reliably pixels
\t\t// this is against the CSSOM draft spec: http://dev.w3.org/csswg/cssom/#resolved-values
\t\tif ( rnumnonpx.test( ret ) && rmargin.test( name ) ) {

\t\t\t// Remember the original values
\t\t\twidth = style.width;
\t\t\tminWidth = style.minWidth;
\t\t\tmaxWidth = style.maxWidth;

\t\t\t// Put in the new values to get a computed value out
\t\t\tstyle.minWidth = style.maxWidth = style.width = ret;
\t\t\tret = computed.width;

\t\t\t// Revert the changed values
\t\t\tstyle.width = width;
\t\t\tstyle.minWidth = minWidth;
\t\t\tstyle.maxWidth = maxWidth;
\t\t}
\t}

\treturn ret !== undefined ?
\t\t// Support: IE
\t\t// IE returns zIndex value as an integer.
\t\tret + \"\" :
\t\tret;
}


function addGetHookIf( conditionFn, hookFn ) {
\t// Define the hook, we'll check on the first run if it's really needed.
\treturn {
\t\tget: function() {
\t\t\tif ( conditionFn() ) {
\t\t\t\t// Hook not needed (or it's not possible to use it due
\t\t\t\t// to missing dependency), remove it.
\t\t\t\tdelete this.get;
\t\t\t\treturn;
\t\t\t}

\t\t\t// Hook needed; redefine it so that the support test is not executed again.
\t\t\treturn (this.get = hookFn).apply( this, arguments );
\t\t}
\t};
}


(function() {
\tvar pixelPositionVal, boxSizingReliableVal,
\t\tdocElem = document.documentElement,
\t\tcontainer = document.createElement( \"div\" ),
\t\tdiv = document.createElement( \"div\" );

\tif ( !div.style ) {
\t\treturn;
\t}

\t// Support: IE9-11+
\t// Style of cloned element affects source element cloned (#8908)
\tdiv.style.backgroundClip = \"content-box\";
\tdiv.cloneNode( true ).style.backgroundClip = \"\";
\tsupport.clearCloneStyle = div.style.backgroundClip === \"content-box\";

\tcontainer.style.cssText = \"border:0;width:0;height:0;top:0;left:-9999px;margin-top:1px;\" +
\t\t\"position:absolute\";
\tcontainer.appendChild( div );

\t// Executing both pixelPosition & boxSizingReliable tests require only one layout
\t// so they're executed at the same time to save the second computation.
\tfunction computePixelPositionAndBoxSizingReliable() {
\t\tdiv.style.cssText =
\t\t\t// Support: Firefox<29, Android 2.3
\t\t\t// Vendor-prefix box-sizing
\t\t\t\"-webkit-box-sizing:border-box;-moz-box-sizing:border-box;\" +
\t\t\t\"box-sizing:border-box;display:block;margin-top:1%;top:1%;\" +
\t\t\t\"border:1px;padding:1px;width:4px;position:absolute\";
\t\tdiv.innerHTML = \"\";
\t\tdocElem.appendChild( container );

\t\tvar divStyle = window.getComputedStyle( div, null );
\t\tpixelPositionVal = divStyle.top !== \"1%\";
\t\tboxSizingReliableVal = divStyle.width === \"4px\";

\t\tdocElem.removeChild( container );
\t}

\t// Support: node.js jsdom
\t// Don't assume that getComputedStyle is a property of the global object
\tif ( window.getComputedStyle ) {
\t\tjQuery.extend( support, {
\t\t\tpixelPosition: function() {

\t\t\t\t// This test is executed only once but we still do memoizing
\t\t\t\t// since we can use the boxSizingReliable pre-computing.
\t\t\t\t// No need to check if the test was already performed, though.
\t\t\t\tcomputePixelPositionAndBoxSizingReliable();
\t\t\t\treturn pixelPositionVal;
\t\t\t},
\t\t\tboxSizingReliable: function() {
\t\t\t\tif ( boxSizingReliableVal == null ) {
\t\t\t\t\tcomputePixelPositionAndBoxSizingReliable();
\t\t\t\t}
\t\t\t\treturn boxSizingReliableVal;
\t\t\t},
\t\t\treliableMarginRight: function() {

\t\t\t\t// Support: Android 2.3
\t\t\t\t// Check if div with explicit width and no margin-right incorrectly
\t\t\t\t// gets computed margin-right based on width of container. (#3333)
\t\t\t\t// WebKit Bug 13343 - getComputedStyle returns wrong value for margin-right
\t\t\t\t// This support function is only executed once so no memoizing is needed.
\t\t\t\tvar ret,
\t\t\t\t\tmarginDiv = div.appendChild( document.createElement( \"div\" ) );

\t\t\t\t// Reset CSS: box-sizing; display; margin; border; padding
\t\t\t\tmarginDiv.style.cssText = div.style.cssText =
\t\t\t\t\t// Support: Firefox<29, Android 2.3
\t\t\t\t\t// Vendor-prefix box-sizing
\t\t\t\t\t\"-webkit-box-sizing:content-box;-moz-box-sizing:content-box;\" +
\t\t\t\t\t\"box-sizing:content-box;display:block;margin:0;border:0;padding:0\";
\t\t\t\tmarginDiv.style.marginRight = marginDiv.style.width = \"0\";
\t\t\t\tdiv.style.width = \"1px\";
\t\t\t\tdocElem.appendChild( container );

\t\t\t\tret = !parseFloat( window.getComputedStyle( marginDiv, null ).marginRight );

\t\t\t\tdocElem.removeChild( container );
\t\t\t\tdiv.removeChild( marginDiv );

\t\t\t\treturn ret;
\t\t\t}
\t\t});
\t}
})();


// A method for quickly swapping in/out CSS properties to get correct calculations.
jQuery.swap = function( elem, options, callback, args ) {
\tvar ret, name,
\t\told = {};

\t// Remember the old values, and insert the new ones
\tfor ( name in options ) {
\t\told[ name ] = elem.style[ name ];
\t\telem.style[ name ] = options[ name ];
\t}

\tret = callback.apply( elem, args || [] );

\t// Revert the old values
\tfor ( name in options ) {
\t\telem.style[ name ] = old[ name ];
\t}

\treturn ret;
};


var
\t// Swappable if display is none or starts with table except \"table\", \"table-cell\", or \"table-caption\"
\t// See here for display values: https://developer.mozilla.org/en-US/docs/CSS/display
\trdisplayswap = /^(none|table(?!-c[ea]).+)/,
\trnumsplit = new RegExp( \"^(\" + pnum + \")(.*)\$\", \"i\" ),
\trrelNum = new RegExp( \"^([+-])=(\" + pnum + \")\", \"i\" ),

\tcssShow = { position: \"absolute\", visibility: \"hidden\", display: \"block\" },
\tcssNormalTransform = {
\t\tletterSpacing: \"0\",
\t\tfontWeight: \"400\"
\t},

\tcssPrefixes = [ \"Webkit\", \"O\", \"Moz\", \"ms\" ];

// Return a css property mapped to a potentially vendor prefixed property
function vendorPropName( style, name ) {

\t// Shortcut for names that are not vendor prefixed
\tif ( name in style ) {
\t\treturn name;
\t}

\t// Check for vendor prefixed names
\tvar capName = name[0].toUpperCase() + name.slice(1),
\t\torigName = name,
\t\ti = cssPrefixes.length;

\twhile ( i-- ) {
\t\tname = cssPrefixes[ i ] + capName;
\t\tif ( name in style ) {
\t\t\treturn name;
\t\t}
\t}

\treturn origName;
}

function setPositiveNumber( elem, value, subtract ) {
\tvar matches = rnumsplit.exec( value );
\treturn matches ?
\t\t// Guard against undefined \"subtract\", e.g., when used as in cssHooks
\t\tMath.max( 0, matches[ 1 ] - ( subtract || 0 ) ) + ( matches[ 2 ] || \"px\" ) :
\t\tvalue;
}

function augmentWidthOrHeight( elem, name, extra, isBorderBox, styles ) {
\tvar i = extra === ( isBorderBox ? \"border\" : \"content\" ) ?
\t\t// If we already have the right measurement, avoid augmentation
\t\t4 :
\t\t// Otherwise initialize for horizontal or vertical properties
\t\tname === \"width\" ? 1 : 0,

\t\tval = 0;

\tfor ( ; i < 4; i += 2 ) {
\t\t// Both box models exclude margin, so add it if we want it
\t\tif ( extra === \"margin\" ) {
\t\t\tval += jQuery.css( elem, extra + cssExpand[ i ], true, styles );
\t\t}

\t\tif ( isBorderBox ) {
\t\t\t// border-box includes padding, so remove it if we want content
\t\t\tif ( extra === \"content\" ) {
\t\t\t\tval -= jQuery.css( elem, \"padding\" + cssExpand[ i ], true, styles );
\t\t\t}

\t\t\t// At this point, extra isn't border nor margin, so remove border
\t\t\tif ( extra !== \"margin\" ) {
\t\t\t\tval -= jQuery.css( elem, \"border\" + cssExpand[ i ] + \"Width\", true, styles );
\t\t\t}
\t\t} else {
\t\t\t// At this point, extra isn't content, so add padding
\t\t\tval += jQuery.css( elem, \"padding\" + cssExpand[ i ], true, styles );

\t\t\t// At this point, extra isn't content nor padding, so add border
\t\t\tif ( extra !== \"padding\" ) {
\t\t\t\tval += jQuery.css( elem, \"border\" + cssExpand[ i ] + \"Width\", true, styles );
\t\t\t}
\t\t}
\t}

\treturn val;
}

function getWidthOrHeight( elem, name, extra ) {

\t// Start with offset property, which is equivalent to the border-box value
\tvar valueIsBorderBox = true,
\t\tval = name === \"width\" ? elem.offsetWidth : elem.offsetHeight,
\t\tstyles = getStyles( elem ),
\t\tisBorderBox = jQuery.css( elem, \"boxSizing\", false, styles ) === \"border-box\";

\t// Some non-html elements return undefined for offsetWidth, so check for null/undefined
\t// svg - https://bugzilla.mozilla.org/show_bug.cgi?id=649285
\t// MathML - https://bugzilla.mozilla.org/show_bug.cgi?id=491668
\tif ( val <= 0 || val == null ) {
\t\t// Fall back to computed then uncomputed css if necessary
\t\tval = curCSS( elem, name, styles );
\t\tif ( val < 0 || val == null ) {
\t\t\tval = elem.style[ name ];
\t\t}

\t\t// Computed unit is not pixels. Stop here and return.
\t\tif ( rnumnonpx.test(val) ) {
\t\t\treturn val;
\t\t}

\t\t// Check for style in case a browser which returns unreliable values
\t\t// for getComputedStyle silently falls back to the reliable elem.style
\t\tvalueIsBorderBox = isBorderBox &&
\t\t\t( support.boxSizingReliable() || val === elem.style[ name ] );

\t\t// Normalize \"\", auto, and prepare for extra
\t\tval = parseFloat( val ) || 0;
\t}

\t// Use the active box-sizing model to add/subtract irrelevant styles
\treturn ( val +
\t\taugmentWidthOrHeight(
\t\t\telem,
\t\t\tname,
\t\t\textra || ( isBorderBox ? \"border\" : \"content\" ),
\t\t\tvalueIsBorderBox,
\t\t\tstyles
\t\t)
\t) + \"px\";
}

function showHide( elements, show ) {
\tvar display, elem, hidden,
\t\tvalues = [],
\t\tindex = 0,
\t\tlength = elements.length;

\tfor ( ; index < length; index++ ) {
\t\telem = elements[ index ];
\t\tif ( !elem.style ) {
\t\t\tcontinue;
\t\t}

\t\tvalues[ index ] = data_priv.get( elem, \"olddisplay\" );
\t\tdisplay = elem.style.display;
\t\tif ( show ) {
\t\t\t// Reset the inline display of this element to learn if it is
\t\t\t// being hidden by cascaded rules or not
\t\t\tif ( !values[ index ] && display === \"none\" ) {
\t\t\t\telem.style.display = \"\";
\t\t\t}

\t\t\t// Set elements which have been overridden with display: none
\t\t\t// in a stylesheet to whatever the default browser style is
\t\t\t// for such an element
\t\t\tif ( elem.style.display === \"\" && isHidden( elem ) ) {
\t\t\t\tvalues[ index ] = data_priv.access( elem, \"olddisplay\", defaultDisplay(elem.nodeName) );
\t\t\t}
\t\t} else {
\t\t\thidden = isHidden( elem );

\t\t\tif ( display !== \"none\" || !hidden ) {
\t\t\t\tdata_priv.set( elem, \"olddisplay\", hidden ? display : jQuery.css( elem, \"display\" ) );
\t\t\t}
\t\t}
\t}

\t// Set the display of most of the elements in a second loop
\t// to avoid the constant reflow
\tfor ( index = 0; index < length; index++ ) {
\t\telem = elements[ index ];
\t\tif ( !elem.style ) {
\t\t\tcontinue;
\t\t}
\t\tif ( !show || elem.style.display === \"none\" || elem.style.display === \"\" ) {
\t\t\telem.style.display = show ? values[ index ] || \"\" : \"none\";
\t\t}
\t}

\treturn elements;
}

jQuery.extend({

\t// Add in style property hooks for overriding the default
\t// behavior of getting and setting a style property
\tcssHooks: {
\t\topacity: {
\t\t\tget: function( elem, computed ) {
\t\t\t\tif ( computed ) {

\t\t\t\t\t// We should always get a number back from opacity
\t\t\t\t\tvar ret = curCSS( elem, \"opacity\" );
\t\t\t\t\treturn ret === \"\" ? \"1\" : ret;
\t\t\t\t}
\t\t\t}
\t\t}
\t},

\t// Don't automatically add \"px\" to these possibly-unitless properties
\tcssNumber: {
\t\t\"columnCount\": true,
\t\t\"fillOpacity\": true,
\t\t\"flexGrow\": true,
\t\t\"flexShrink\": true,
\t\t\"fontWeight\": true,
\t\t\"lineHeight\": true,
\t\t\"opacity\": true,
\t\t\"order\": true,
\t\t\"orphans\": true,
\t\t\"widows\": true,
\t\t\"zIndex\": true,
\t\t\"zoom\": true
\t},

\t// Add in properties whose names you wish to fix before
\t// setting or getting the value
\tcssProps: {
\t\t\"float\": \"cssFloat\"
\t},

\t// Get and set the style property on a DOM Node
\tstyle: function( elem, name, value, extra ) {

\t\t// Don't set styles on text and comment nodes
\t\tif ( !elem || elem.nodeType === 3 || elem.nodeType === 8 || !elem.style ) {
\t\t\treturn;
\t\t}

\t\t// Make sure that we're working with the right name
\t\tvar ret, type, hooks,
\t\t\torigName = jQuery.camelCase( name ),
\t\t\tstyle = elem.style;

\t\tname = jQuery.cssProps[ origName ] || ( jQuery.cssProps[ origName ] = vendorPropName( style, origName ) );

\t\t// Gets hook for the prefixed version, then unprefixed version
\t\thooks = jQuery.cssHooks[ name ] || jQuery.cssHooks[ origName ];

\t\t// Check if we're setting a value
\t\tif ( value !== undefined ) {
\t\t\ttype = typeof value;

\t\t\t// Convert \"+=\" or \"-=\" to relative numbers (#7345)
\t\t\tif ( type === \"string\" && (ret = rrelNum.exec( value )) ) {
\t\t\t\tvalue = ( ret[1] + 1 ) * ret[2] + parseFloat( jQuery.css( elem, name ) );
\t\t\t\t// Fixes bug #9237
\t\t\t\ttype = \"number\";
\t\t\t}

\t\t\t// Make sure that null and NaN values aren't set (#7116)
\t\t\tif ( value == null || value !== value ) {
\t\t\t\treturn;
\t\t\t}

\t\t\t// If a number, add 'px' to the (except for certain CSS properties)
\t\t\tif ( type === \"number\" && !jQuery.cssNumber[ origName ] ) {
\t\t\t\tvalue += \"px\";
\t\t\t}

\t\t\t// Support: IE9-11+
\t\t\t// background-* props affect original clone's values
\t\t\tif ( !support.clearCloneStyle && value === \"\" && name.indexOf( \"background\" ) === 0 ) {
\t\t\t\tstyle[ name ] = \"inherit\";
\t\t\t}

\t\t\t// If a hook was provided, use that value, otherwise just set the specified value
\t\t\tif ( !hooks || !(\"set\" in hooks) || (value = hooks.set( elem, value, extra )) !== undefined ) {
\t\t\t\tstyle[ name ] = value;
\t\t\t}

\t\t} else {
\t\t\t// If a hook was provided get the non-computed value from there
\t\t\tif ( hooks && \"get\" in hooks && (ret = hooks.get( elem, false, extra )) !== undefined ) {
\t\t\t\treturn ret;
\t\t\t}

\t\t\t// Otherwise just get the value from the style object
\t\t\treturn style[ name ];
\t\t}
\t},

\tcss: function( elem, name, extra, styles ) {
\t\tvar val, num, hooks,
\t\t\torigName = jQuery.camelCase( name );

\t\t// Make sure that we're working with the right name
\t\tname = jQuery.cssProps[ origName ] || ( jQuery.cssProps[ origName ] = vendorPropName( elem.style, origName ) );

\t\t// Try prefixed name followed by the unprefixed name
\t\thooks = jQuery.cssHooks[ name ] || jQuery.cssHooks[ origName ];

\t\t// If a hook was provided get the computed value from there
\t\tif ( hooks && \"get\" in hooks ) {
\t\t\tval = hooks.get( elem, true, extra );
\t\t}

\t\t// Otherwise, if a way to get the computed value exists, use that
\t\tif ( val === undefined ) {
\t\t\tval = curCSS( elem, name, styles );
\t\t}

\t\t// Convert \"normal\" to computed value
\t\tif ( val === \"normal\" && name in cssNormalTransform ) {
\t\t\tval = cssNormalTransform[ name ];
\t\t}

\t\t// Make numeric if forced or a qualifier was provided and val looks numeric
\t\tif ( extra === \"\" || extra ) {
\t\t\tnum = parseFloat( val );
\t\t\treturn extra === true || jQuery.isNumeric( num ) ? num || 0 : val;
\t\t}
\t\treturn val;
\t}
});

jQuery.each([ \"height\", \"width\" ], function( i, name ) {
\tjQuery.cssHooks[ name ] = {
\t\tget: function( elem, computed, extra ) {
\t\t\tif ( computed ) {

\t\t\t\t// Certain elements can have dimension info if we invisibly show them
\t\t\t\t// but it must have a current display style that would benefit
\t\t\t\treturn rdisplayswap.test( jQuery.css( elem, \"display\" ) ) && elem.offsetWidth === 0 ?
\t\t\t\t\tjQuery.swap( elem, cssShow, function() {
\t\t\t\t\t\treturn getWidthOrHeight( elem, name, extra );
\t\t\t\t\t}) :
\t\t\t\t\tgetWidthOrHeight( elem, name, extra );
\t\t\t}
\t\t},

\t\tset: function( elem, value, extra ) {
\t\t\tvar styles = extra && getStyles( elem );
\t\t\treturn setPositiveNumber( elem, value, extra ?
\t\t\t\taugmentWidthOrHeight(
\t\t\t\t\telem,
\t\t\t\t\tname,
\t\t\t\t\textra,
\t\t\t\t\tjQuery.css( elem, \"boxSizing\", false, styles ) === \"border-box\",
\t\t\t\t\tstyles
\t\t\t\t) : 0
\t\t\t);
\t\t}
\t};
});

// Support: Android 2.3
jQuery.cssHooks.marginRight = addGetHookIf( support.reliableMarginRight,
\tfunction( elem, computed ) {
\t\tif ( computed ) {
\t\t\treturn jQuery.swap( elem, { \"display\": \"inline-block\" },
\t\t\t\tcurCSS, [ elem, \"marginRight\" ] );
\t\t}
\t}
);

// These hooks are used by animate to expand properties
jQuery.each({
\tmargin: \"\",
\tpadding: \"\",
\tborder: \"Width\"
}, function( prefix, suffix ) {
\tjQuery.cssHooks[ prefix + suffix ] = {
\t\texpand: function( value ) {
\t\t\tvar i = 0,
\t\t\t\texpanded = {},

\t\t\t\t// Assumes a single number if not a string
\t\t\t\tparts = typeof value === \"string\" ? value.split(\" \") : [ value ];

\t\t\tfor ( ; i < 4; i++ ) {
\t\t\t\texpanded[ prefix + cssExpand[ i ] + suffix ] =
\t\t\t\t\tparts[ i ] || parts[ i - 2 ] || parts[ 0 ];
\t\t\t}

\t\t\treturn expanded;
\t\t}
\t};

\tif ( !rmargin.test( prefix ) ) {
\t\tjQuery.cssHooks[ prefix + suffix ].set = setPositiveNumber;
\t}
});

jQuery.fn.extend({
\tcss: function( name, value ) {
\t\treturn access( this, function( elem, name, value ) {
\t\t\tvar styles, len,
\t\t\t\tmap = {},
\t\t\t\ti = 0;

\t\t\tif ( jQuery.isArray( name ) ) {
\t\t\t\tstyles = getStyles( elem );
\t\t\t\tlen = name.length;

\t\t\t\tfor ( ; i < len; i++ ) {
\t\t\t\t\tmap[ name[ i ] ] = jQuery.css( elem, name[ i ], false, styles );
\t\t\t\t}

\t\t\t\treturn map;
\t\t\t}

\t\t\treturn value !== undefined ?
\t\t\t\tjQuery.style( elem, name, value ) :
\t\t\t\tjQuery.css( elem, name );
\t\t}, name, value, arguments.length > 1 );
\t},
\tshow: function() {
\t\treturn showHide( this, true );
\t},
\thide: function() {
\t\treturn showHide( this );
\t},
\ttoggle: function( state ) {
\t\tif ( typeof state === \"boolean\" ) {
\t\t\treturn state ? this.show() : this.hide();
\t\t}

\t\treturn this.each(function() {
\t\t\tif ( isHidden( this ) ) {
\t\t\t\tjQuery( this ).show();
\t\t\t} else {
\t\t\t\tjQuery( this ).hide();
\t\t\t}
\t\t});
\t}
});


function Tween( elem, options, prop, end, easing ) {
\treturn new Tween.prototype.init( elem, options, prop, end, easing );
}
jQuery.Tween = Tween;

Tween.prototype = {
\tconstructor: Tween,
\tinit: function( elem, options, prop, end, easing, unit ) {
\t\tthis.elem = elem;
\t\tthis.prop = prop;
\t\tthis.easing = easing || \"swing\";
\t\tthis.options = options;
\t\tthis.start = this.now = this.cur();
\t\tthis.end = end;
\t\tthis.unit = unit || ( jQuery.cssNumber[ prop ] ? \"\" : \"px\" );
\t},
\tcur: function() {
\t\tvar hooks = Tween.propHooks[ this.prop ];

\t\treturn hooks && hooks.get ?
\t\t\thooks.get( this ) :
\t\t\tTween.propHooks._default.get( this );
\t},
\trun: function( percent ) {
\t\tvar eased,
\t\t\thooks = Tween.propHooks[ this.prop ];

\t\tif ( this.options.duration ) {
\t\t\tthis.pos = eased = jQuery.easing[ this.easing ](
\t\t\t\tpercent, this.options.duration * percent, 0, 1, this.options.duration
\t\t\t);
\t\t} else {
\t\t\tthis.pos = eased = percent;
\t\t}
\t\tthis.now = ( this.end - this.start ) * eased + this.start;

\t\tif ( this.options.step ) {
\t\t\tthis.options.step.call( this.elem, this.now, this );
\t\t}

\t\tif ( hooks && hooks.set ) {
\t\t\thooks.set( this );
\t\t} else {
\t\t\tTween.propHooks._default.set( this );
\t\t}
\t\treturn this;
\t}
};

Tween.prototype.init.prototype = Tween.prototype;

Tween.propHooks = {
\t_default: {
\t\tget: function( tween ) {
\t\t\tvar result;

\t\t\tif ( tween.elem[ tween.prop ] != null &&
\t\t\t\t(!tween.elem.style || tween.elem.style[ tween.prop ] == null) ) {
\t\t\t\treturn tween.elem[ tween.prop ];
\t\t\t}

\t\t\t// Passing an empty string as a 3rd parameter to .css will automatically
\t\t\t// attempt a parseFloat and fallback to a string if the parse fails.
\t\t\t// Simple values such as \"10px\" are parsed to Float;
\t\t\t// complex values such as \"rotate(1rad)\" are returned as-is.
\t\t\tresult = jQuery.css( tween.elem, tween.prop, \"\" );
\t\t\t// Empty strings, null, undefined and \"auto\" are converted to 0.
\t\t\treturn !result || result === \"auto\" ? 0 : result;
\t\t},
\t\tset: function( tween ) {
\t\t\t// Use step hook for back compat.
\t\t\t// Use cssHook if its there.
\t\t\t// Use .style if available and use plain properties where available.
\t\t\tif ( jQuery.fx.step[ tween.prop ] ) {
\t\t\t\tjQuery.fx.step[ tween.prop ]( tween );
\t\t\t} else if ( tween.elem.style && ( tween.elem.style[ jQuery.cssProps[ tween.prop ] ] != null || jQuery.cssHooks[ tween.prop ] ) ) {
\t\t\t\tjQuery.style( tween.elem, tween.prop, tween.now + tween.unit );
\t\t\t} else {
\t\t\t\ttween.elem[ tween.prop ] = tween.now;
\t\t\t}
\t\t}
\t}
};

// Support: IE9
// Panic based approach to setting things on disconnected nodes
Tween.propHooks.scrollTop = Tween.propHooks.scrollLeft = {
\tset: function( tween ) {
\t\tif ( tween.elem.nodeType && tween.elem.parentNode ) {
\t\t\ttween.elem[ tween.prop ] = tween.now;
\t\t}
\t}
};

jQuery.easing = {
\tlinear: function( p ) {
\t\treturn p;
\t},
\tswing: function( p ) {
\t\treturn 0.5 - Math.cos( p * Math.PI ) / 2;
\t}
};

jQuery.fx = Tween.prototype.init;

// Back Compat <1.8 extension point
jQuery.fx.step = {};




var
\tfxNow, timerId,
\trfxtypes = /^(?:toggle|show|hide)\$/,
\trfxnum = new RegExp( \"^(?:([+-])=|)(\" + pnum + \")([a-z%]*)\$\", \"i\" ),
\trrun = /queueHooks\$/,
\tanimationPrefilters = [ defaultPrefilter ],
\ttweeners = {
\t\t\"*\": [ function( prop, value ) {
\t\t\tvar tween = this.createTween( prop, value ),
\t\t\t\ttarget = tween.cur(),
\t\t\t\tparts = rfxnum.exec( value ),
\t\t\t\tunit = parts && parts[ 3 ] || ( jQuery.cssNumber[ prop ] ? \"\" : \"px\" ),

\t\t\t\t// Starting value computation is required for potential unit mismatches
\t\t\t\tstart = ( jQuery.cssNumber[ prop ] || unit !== \"px\" && +target ) &&
\t\t\t\t\trfxnum.exec( jQuery.css( tween.elem, prop ) ),
\t\t\t\tscale = 1,
\t\t\t\tmaxIterations = 20;

\t\t\tif ( start && start[ 3 ] !== unit ) {
\t\t\t\t// Trust units reported by jQuery.css
\t\t\t\tunit = unit || start[ 3 ];

\t\t\t\t// Make sure we update the tween properties later on
\t\t\t\tparts = parts || [];

\t\t\t\t// Iteratively approximate from a nonzero starting point
\t\t\t\tstart = +target || 1;

\t\t\t\tdo {
\t\t\t\t\t// If previous iteration zeroed out, double until we get *something*.
\t\t\t\t\t// Use string for doubling so we don't accidentally see scale as unchanged below
\t\t\t\t\tscale = scale || \".5\";

\t\t\t\t\t// Adjust and apply
\t\t\t\t\tstart = start / scale;
\t\t\t\t\tjQuery.style( tween.elem, prop, start + unit );

\t\t\t\t// Update scale, tolerating zero or NaN from tween.cur(),
\t\t\t\t// break the loop if scale is unchanged or perfect, or if we've just had enough
\t\t\t\t} while ( scale !== (scale = tween.cur() / target) && scale !== 1 && --maxIterations );
\t\t\t}

\t\t\t// Update tween properties
\t\t\tif ( parts ) {
\t\t\t\tstart = tween.start = +start || +target || 0;
\t\t\t\ttween.unit = unit;
\t\t\t\t// If a +=/-= token was provided, we're doing a relative animation
\t\t\t\ttween.end = parts[ 1 ] ?
\t\t\t\t\tstart + ( parts[ 1 ] + 1 ) * parts[ 2 ] :
\t\t\t\t\t+parts[ 2 ];
\t\t\t}

\t\t\treturn tween;
\t\t} ]
\t};

// Animations created synchronously will run synchronously
function createFxNow() {
\tsetTimeout(function() {
\t\tfxNow = undefined;
\t});
\treturn ( fxNow = jQuery.now() );
}

// Generate parameters to create a standard animation
function genFx( type, includeWidth ) {
\tvar which,
\t\ti = 0,
\t\tattrs = { height: type };

\t// If we include width, step value is 1 to do all cssExpand values,
\t// otherwise step value is 2 to skip over Left and Right
\tincludeWidth = includeWidth ? 1 : 0;
\tfor ( ; i < 4 ; i += 2 - includeWidth ) {
\t\twhich = cssExpand[ i ];
\t\tattrs[ \"margin\" + which ] = attrs[ \"padding\" + which ] = type;
\t}

\tif ( includeWidth ) {
\t\tattrs.opacity = attrs.width = type;
\t}

\treturn attrs;
}

function createTween( value, prop, animation ) {
\tvar tween,
\t\tcollection = ( tweeners[ prop ] || [] ).concat( tweeners[ \"*\" ] ),
\t\tindex = 0,
\t\tlength = collection.length;
\tfor ( ; index < length; index++ ) {
\t\tif ( (tween = collection[ index ].call( animation, prop, value )) ) {

\t\t\t// We're done with this property
\t\t\treturn tween;
\t\t}
\t}
}

function defaultPrefilter( elem, props, opts ) {
\t/* jshint validthis: true */
\tvar prop, value, toggle, tween, hooks, oldfire, display, checkDisplay,
\t\tanim = this,
\t\torig = {},
\t\tstyle = elem.style,
\t\thidden = elem.nodeType && isHidden( elem ),
\t\tdataShow = data_priv.get( elem, \"fxshow\" );

\t// Handle queue: false promises
\tif ( !opts.queue ) {
\t\thooks = jQuery._queueHooks( elem, \"fx\" );
\t\tif ( hooks.unqueued == null ) {
\t\t\thooks.unqueued = 0;
\t\t\toldfire = hooks.empty.fire;
\t\t\thooks.empty.fire = function() {
\t\t\t\tif ( !hooks.unqueued ) {
\t\t\t\t\toldfire();
\t\t\t\t}
\t\t\t};
\t\t}
\t\thooks.unqueued++;

\t\tanim.always(function() {
\t\t\t// Ensure the complete handler is called before this completes
\t\t\tanim.always(function() {
\t\t\t\thooks.unqueued--;
\t\t\t\tif ( !jQuery.queue( elem, \"fx\" ).length ) {
\t\t\t\t\thooks.empty.fire();
\t\t\t\t}
\t\t\t});
\t\t});
\t}

\t// Height/width overflow pass
\tif ( elem.nodeType === 1 && ( \"height\" in props || \"width\" in props ) ) {
\t\t// Make sure that nothing sneaks out
\t\t// Record all 3 overflow attributes because IE9-10 do not
\t\t// change the overflow attribute when overflowX and
\t\t// overflowY are set to the same value
\t\topts.overflow = [ style.overflow, style.overflowX, style.overflowY ];

\t\t// Set display property to inline-block for height/width
\t\t// animations on inline elements that are having width/height animated
\t\tdisplay = jQuery.css( elem, \"display\" );

\t\t// Test default display if display is currently \"none\"
\t\tcheckDisplay = display === \"none\" ?
\t\t\tdata_priv.get( elem, \"olddisplay\" ) || defaultDisplay( elem.nodeName ) : display;

\t\tif ( checkDisplay === \"inline\" && jQuery.css( elem, \"float\" ) === \"none\" ) {
\t\t\tstyle.display = \"inline-block\";
\t\t}
\t}

\tif ( opts.overflow ) {
\t\tstyle.overflow = \"hidden\";
\t\tanim.always(function() {
\t\t\tstyle.overflow = opts.overflow[ 0 ];
\t\t\tstyle.overflowX = opts.overflow[ 1 ];
\t\t\tstyle.overflowY = opts.overflow[ 2 ];
\t\t});
\t}

\t// show/hide pass
\tfor ( prop in props ) {
\t\tvalue = props[ prop ];
\t\tif ( rfxtypes.exec( value ) ) {
\t\t\tdelete props[ prop ];
\t\t\ttoggle = toggle || value === \"toggle\";
\t\t\tif ( value === ( hidden ? \"hide\" : \"show\" ) ) {

\t\t\t\t// If there is dataShow left over from a stopped hide or show and we are going to proceed with show, we should pretend to be hidden
\t\t\t\tif ( value === \"show\" && dataShow && dataShow[ prop ] !== undefined ) {
\t\t\t\t\thidden = true;
\t\t\t\t} else {
\t\t\t\t\tcontinue;
\t\t\t\t}
\t\t\t}
\t\t\torig[ prop ] = dataShow && dataShow[ prop ] || jQuery.style( elem, prop );

\t\t// Any non-fx value stops us from restoring the original display value
\t\t} else {
\t\t\tdisplay = undefined;
\t\t}
\t}

\tif ( !jQuery.isEmptyObject( orig ) ) {
\t\tif ( dataShow ) {
\t\t\tif ( \"hidden\" in dataShow ) {
\t\t\t\thidden = dataShow.hidden;
\t\t\t}
\t\t} else {
\t\t\tdataShow = data_priv.access( elem, \"fxshow\", {} );
\t\t}

\t\t// Store state if its toggle - enables .stop().toggle() to \"reverse\"
\t\tif ( toggle ) {
\t\t\tdataShow.hidden = !hidden;
\t\t}
\t\tif ( hidden ) {
\t\t\tjQuery( elem ).show();
\t\t} else {
\t\t\tanim.done(function() {
\t\t\t\tjQuery( elem ).hide();
\t\t\t});
\t\t}
\t\tanim.done(function() {
\t\t\tvar prop;

\t\t\tdata_priv.remove( elem, \"fxshow\" );
\t\t\tfor ( prop in orig ) {
\t\t\t\tjQuery.style( elem, prop, orig[ prop ] );
\t\t\t}
\t\t});
\t\tfor ( prop in orig ) {
\t\t\ttween = createTween( hidden ? dataShow[ prop ] : 0, prop, anim );

\t\t\tif ( !( prop in dataShow ) ) {
\t\t\t\tdataShow[ prop ] = tween.start;
\t\t\t\tif ( hidden ) {
\t\t\t\t\ttween.end = tween.start;
\t\t\t\t\ttween.start = prop === \"width\" || prop === \"height\" ? 1 : 0;
\t\t\t\t}
\t\t\t}
\t\t}

\t// If this is a noop like .hide().hide(), restore an overwritten display value
\t} else if ( (display === \"none\" ? defaultDisplay( elem.nodeName ) : display) === \"inline\" ) {
\t\tstyle.display = display;
\t}
}

function propFilter( props, specialEasing ) {
\tvar index, name, easing, value, hooks;

\t// camelCase, specialEasing and expand cssHook pass
\tfor ( index in props ) {
\t\tname = jQuery.camelCase( index );
\t\teasing = specialEasing[ name ];
\t\tvalue = props[ index ];
\t\tif ( jQuery.isArray( value ) ) {
\t\t\teasing = value[ 1 ];
\t\t\tvalue = props[ index ] = value[ 0 ];
\t\t}

\t\tif ( index !== name ) {
\t\t\tprops[ name ] = value;
\t\t\tdelete props[ index ];
\t\t}

\t\thooks = jQuery.cssHooks[ name ];
\t\tif ( hooks && \"expand\" in hooks ) {
\t\t\tvalue = hooks.expand( value );
\t\t\tdelete props[ name ];

\t\t\t// Not quite \$.extend, this won't overwrite existing keys.
\t\t\t// Reusing 'index' because we have the correct \"name\"
\t\t\tfor ( index in value ) {
\t\t\t\tif ( !( index in props ) ) {
\t\t\t\t\tprops[ index ] = value[ index ];
\t\t\t\t\tspecialEasing[ index ] = easing;
\t\t\t\t}
\t\t\t}
\t\t} else {
\t\t\tspecialEasing[ name ] = easing;
\t\t}
\t}
}

function Animation( elem, properties, options ) {
\tvar result,
\t\tstopped,
\t\tindex = 0,
\t\tlength = animationPrefilters.length,
\t\tdeferred = jQuery.Deferred().always( function() {
\t\t\t// Don't match elem in the :animated selector
\t\t\tdelete tick.elem;
\t\t}),
\t\ttick = function() {
\t\t\tif ( stopped ) {
\t\t\t\treturn false;
\t\t\t}
\t\t\tvar currentTime = fxNow || createFxNow(),
\t\t\t\tremaining = Math.max( 0, animation.startTime + animation.duration - currentTime ),
\t\t\t\t// Support: Android 2.3
\t\t\t\t// Archaic crash bug won't allow us to use `1 - ( 0.5 || 0 )` (#12497)
\t\t\t\ttemp = remaining / animation.duration || 0,
\t\t\t\tpercent = 1 - temp,
\t\t\t\tindex = 0,
\t\t\t\tlength = animation.tweens.length;

\t\t\tfor ( ; index < length ; index++ ) {
\t\t\t\tanimation.tweens[ index ].run( percent );
\t\t\t}

\t\t\tdeferred.notifyWith( elem, [ animation, percent, remaining ]);

\t\t\tif ( percent < 1 && length ) {
\t\t\t\treturn remaining;
\t\t\t} else {
\t\t\t\tdeferred.resolveWith( elem, [ animation ] );
\t\t\t\treturn false;
\t\t\t}
\t\t},
\t\tanimation = deferred.promise({
\t\t\telem: elem,
\t\t\tprops: jQuery.extend( {}, properties ),
\t\t\topts: jQuery.extend( true, { specialEasing: {} }, options ),
\t\t\toriginalProperties: properties,
\t\t\toriginalOptions: options,
\t\t\tstartTime: fxNow || createFxNow(),
\t\t\tduration: options.duration,
\t\t\ttweens: [],
\t\t\tcreateTween: function( prop, end ) {
\t\t\t\tvar tween = jQuery.Tween( elem, animation.opts, prop, end,
\t\t\t\t\t\tanimation.opts.specialEasing[ prop ] || animation.opts.easing );
\t\t\t\tanimation.tweens.push( tween );
\t\t\t\treturn tween;
\t\t\t},
\t\t\tstop: function( gotoEnd ) {
\t\t\t\tvar index = 0,
\t\t\t\t\t// If we are going to the end, we want to run all the tweens
\t\t\t\t\t// otherwise we skip this part
\t\t\t\t\tlength = gotoEnd ? animation.tweens.length : 0;
\t\t\t\tif ( stopped ) {
\t\t\t\t\treturn this;
\t\t\t\t}
\t\t\t\tstopped = true;
\t\t\t\tfor ( ; index < length ; index++ ) {
\t\t\t\t\tanimation.tweens[ index ].run( 1 );
\t\t\t\t}

\t\t\t\t// Resolve when we played the last frame; otherwise, reject
\t\t\t\tif ( gotoEnd ) {
\t\t\t\t\tdeferred.resolveWith( elem, [ animation, gotoEnd ] );
\t\t\t\t} else {
\t\t\t\t\tdeferred.rejectWith( elem, [ animation, gotoEnd ] );
\t\t\t\t}
\t\t\t\treturn this;
\t\t\t}
\t\t}),
\t\tprops = animation.props;

\tpropFilter( props, animation.opts.specialEasing );

\tfor ( ; index < length ; index++ ) {
\t\tresult = animationPrefilters[ index ].call( animation, elem, props, animation.opts );
\t\tif ( result ) {
\t\t\treturn result;
\t\t}
\t}

\tjQuery.map( props, createTween, animation );

\tif ( jQuery.isFunction( animation.opts.start ) ) {
\t\tanimation.opts.start.call( elem, animation );
\t}

\tjQuery.fx.timer(
\t\tjQuery.extend( tick, {
\t\t\telem: elem,
\t\t\tanim: animation,
\t\t\tqueue: animation.opts.queue
\t\t})
\t);

\t// attach callbacks from options
\treturn animation.progress( animation.opts.progress )
\t\t.done( animation.opts.done, animation.opts.complete )
\t\t.fail( animation.opts.fail )
\t\t.always( animation.opts.always );
}

jQuery.Animation = jQuery.extend( Animation, {

\ttweener: function( props, callback ) {
\t\tif ( jQuery.isFunction( props ) ) {
\t\t\tcallback = props;
\t\t\tprops = [ \"*\" ];
\t\t} else {
\t\t\tprops = props.split(\" \");
\t\t}

\t\tvar prop,
\t\t\tindex = 0,
\t\t\tlength = props.length;

\t\tfor ( ; index < length ; index++ ) {
\t\t\tprop = props[ index ];
\t\t\ttweeners[ prop ] = tweeners[ prop ] || [];
\t\t\ttweeners[ prop ].unshift( callback );
\t\t}
\t},

\tprefilter: function( callback, prepend ) {
\t\tif ( prepend ) {
\t\t\tanimationPrefilters.unshift( callback );
\t\t} else {
\t\t\tanimationPrefilters.push( callback );
\t\t}
\t}
});

jQuery.speed = function( speed, easing, fn ) {
\tvar opt = speed && typeof speed === \"object\" ? jQuery.extend( {}, speed ) : {
\t\tcomplete: fn || !fn && easing ||
\t\t\tjQuery.isFunction( speed ) && speed,
\t\tduration: speed,
\t\teasing: fn && easing || easing && !jQuery.isFunction( easing ) && easing
\t};

\topt.duration = jQuery.fx.off ? 0 : typeof opt.duration === \"number\" ? opt.duration :
\t\topt.duration in jQuery.fx.speeds ? jQuery.fx.speeds[ opt.duration ] : jQuery.fx.speeds._default;

\t// Normalize opt.queue - true/undefined/null -> \"fx\"
\tif ( opt.queue == null || opt.queue === true ) {
\t\topt.queue = \"fx\";
\t}

\t// Queueing
\topt.old = opt.complete;

\topt.complete = function() {
\t\tif ( jQuery.isFunction( opt.old ) ) {
\t\t\topt.old.call( this );
\t\t}

\t\tif ( opt.queue ) {
\t\t\tjQuery.dequeue( this, opt.queue );
\t\t}
\t};

\treturn opt;
};

jQuery.fn.extend({
\tfadeTo: function( speed, to, easing, callback ) {

\t\t// Show any hidden elements after setting opacity to 0
\t\treturn this.filter( isHidden ).css( \"opacity\", 0 ).show()

\t\t\t// Animate to the value specified
\t\t\t.end().animate({ opacity: to }, speed, easing, callback );
\t},
\tanimate: function( prop, speed, easing, callback ) {
\t\tvar empty = jQuery.isEmptyObject( prop ),
\t\t\toptall = jQuery.speed( speed, easing, callback ),
\t\t\tdoAnimation = function() {
\t\t\t\t// Operate on a copy of prop so per-property easing won't be lost
\t\t\t\tvar anim = Animation( this, jQuery.extend( {}, prop ), optall );

\t\t\t\t// Empty animations, or finishing resolves immediately
\t\t\t\tif ( empty || data_priv.get( this, \"finish\" ) ) {
\t\t\t\t\tanim.stop( true );
\t\t\t\t}
\t\t\t};
\t\t\tdoAnimation.finish = doAnimation;

\t\treturn empty || optall.queue === false ?
\t\t\tthis.each( doAnimation ) :
\t\t\tthis.queue( optall.queue, doAnimation );
\t},
\tstop: function( type, clearQueue, gotoEnd ) {
\t\tvar stopQueue = function( hooks ) {
\t\t\tvar stop = hooks.stop;
\t\t\tdelete hooks.stop;
\t\t\tstop( gotoEnd );
\t\t};

\t\tif ( typeof type !== \"string\" ) {
\t\t\tgotoEnd = clearQueue;
\t\t\tclearQueue = type;
\t\t\ttype = undefined;
\t\t}
\t\tif ( clearQueue && type !== false ) {
\t\t\tthis.queue( type || \"fx\", [] );
\t\t}

\t\treturn this.each(function() {
\t\t\tvar dequeue = true,
\t\t\t\tindex = type != null && type + \"queueHooks\",
\t\t\t\ttimers = jQuery.timers,
\t\t\t\tdata = data_priv.get( this );

\t\t\tif ( index ) {
\t\t\t\tif ( data[ index ] && data[ index ].stop ) {
\t\t\t\t\tstopQueue( data[ index ] );
\t\t\t\t}
\t\t\t} else {
\t\t\t\tfor ( index in data ) {
\t\t\t\t\tif ( data[ index ] && data[ index ].stop && rrun.test( index ) ) {
\t\t\t\t\t\tstopQueue( data[ index ] );
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t\t\tfor ( index = timers.length; index--; ) {
\t\t\t\tif ( timers[ index ].elem === this && (type == null || timers[ index ].queue === type) ) {
\t\t\t\t\ttimers[ index ].anim.stop( gotoEnd );
\t\t\t\t\tdequeue = false;
\t\t\t\t\ttimers.splice( index, 1 );
\t\t\t\t}
\t\t\t}

\t\t\t// Start the next in the queue if the last step wasn't forced.
\t\t\t// Timers currently will call their complete callbacks, which
\t\t\t// will dequeue but only if they were gotoEnd.
\t\t\tif ( dequeue || !gotoEnd ) {
\t\t\t\tjQuery.dequeue( this, type );
\t\t\t}
\t\t});
\t},
\tfinish: function( type ) {
\t\tif ( type !== false ) {
\t\t\ttype = type || \"fx\";
\t\t}
\t\treturn this.each(function() {
\t\t\tvar index,
\t\t\t\tdata = data_priv.get( this ),
\t\t\t\tqueue = data[ type + \"queue\" ],
\t\t\t\thooks = data[ type + \"queueHooks\" ],
\t\t\t\ttimers = jQuery.timers,
\t\t\t\tlength = queue ? queue.length : 0;

\t\t\t// Enable finishing flag on private data
\t\t\tdata.finish = true;

\t\t\t// Empty the queue first
\t\t\tjQuery.queue( this, type, [] );

\t\t\tif ( hooks && hooks.stop ) {
\t\t\t\thooks.stop.call( this, true );
\t\t\t}

\t\t\t// Look for any active animations, and finish them
\t\t\tfor ( index = timers.length; index--; ) {
\t\t\t\tif ( timers[ index ].elem === this && timers[ index ].queue === type ) {
\t\t\t\t\ttimers[ index ].anim.stop( true );
\t\t\t\t\ttimers.splice( index, 1 );
\t\t\t\t}
\t\t\t}

\t\t\t// Look for any animations in the old queue and finish them
\t\t\tfor ( index = 0; index < length; index++ ) {
\t\t\t\tif ( queue[ index ] && queue[ index ].finish ) {
\t\t\t\t\tqueue[ index ].finish.call( this );
\t\t\t\t}
\t\t\t}

\t\t\t// Turn off finishing flag
\t\t\tdelete data.finish;
\t\t});
\t}
});

jQuery.each([ \"toggle\", \"show\", \"hide\" ], function( i, name ) {
\tvar cssFn = jQuery.fn[ name ];
\tjQuery.fn[ name ] = function( speed, easing, callback ) {
\t\treturn speed == null || typeof speed === \"boolean\" ?
\t\t\tcssFn.apply( this, arguments ) :
\t\t\tthis.animate( genFx( name, true ), speed, easing, callback );
\t};
});

// Generate shortcuts for custom animations
jQuery.each({
\tslideDown: genFx(\"show\"),
\tslideUp: genFx(\"hide\"),
\tslideToggle: genFx(\"toggle\"),
\tfadeIn: { opacity: \"show\" },
\tfadeOut: { opacity: \"hide\" },
\tfadeToggle: { opacity: \"toggle\" }
}, function( name, props ) {
\tjQuery.fn[ name ] = function( speed, easing, callback ) {
\t\treturn this.animate( props, speed, easing, callback );
\t};
});

jQuery.timers = [];
jQuery.fx.tick = function() {
\tvar timer,
\t\ti = 0,
\t\ttimers = jQuery.timers;

\tfxNow = jQuery.now();

\tfor ( ; i < timers.length; i++ ) {
\t\ttimer = timers[ i ];
\t\t// Checks the timer has not already been removed
\t\tif ( !timer() && timers[ i ] === timer ) {
\t\t\ttimers.splice( i--, 1 );
\t\t}
\t}

\tif ( !timers.length ) {
\t\tjQuery.fx.stop();
\t}
\tfxNow = undefined;
};

jQuery.fx.timer = function( timer ) {
\tjQuery.timers.push( timer );
\tif ( timer() ) {
\t\tjQuery.fx.start();
\t} else {
\t\tjQuery.timers.pop();
\t}
};

jQuery.fx.interval = 13;

jQuery.fx.start = function() {
\tif ( !timerId ) {
\t\ttimerId = setInterval( jQuery.fx.tick, jQuery.fx.interval );
\t}
};

jQuery.fx.stop = function() {
\tclearInterval( timerId );
\ttimerId = null;
};

jQuery.fx.speeds = {
\tslow: 600,
\tfast: 200,
\t// Default speed
\t_default: 400
};


// Based off of the plugin by Clint Helfers, with permission.
// http://blindsignals.com/index.php/2009/07/jquery-delay/
jQuery.fn.delay = function( time, type ) {
\ttime = jQuery.fx ? jQuery.fx.speeds[ time ] || time : time;
\ttype = type || \"fx\";

\treturn this.queue( type, function( next, hooks ) {
\t\tvar timeout = setTimeout( next, time );
\t\thooks.stop = function() {
\t\t\tclearTimeout( timeout );
\t\t};
\t});
};


(function() {
\tvar input = document.createElement( \"input\" ),
\t\tselect = document.createElement( \"select\" ),
\t\topt = select.appendChild( document.createElement( \"option\" ) );

\tinput.type = \"checkbox\";

\t// Support: iOS<=5.1, Android<=4.2+
\t// Default value for a checkbox should be \"on\"
\tsupport.checkOn = input.value !== \"\";

\t// Support: IE<=11+
\t// Must access selectedIndex to make default options select
\tsupport.optSelected = opt.selected;

\t// Support: Android<=2.3
\t// Options inside disabled selects are incorrectly marked as disabled
\tselect.disabled = true;
\tsupport.optDisabled = !opt.disabled;

\t// Support: IE<=11+
\t// An input loses its value after becoming a radio
\tinput = document.createElement( \"input\" );
\tinput.value = \"t\";
\tinput.type = \"radio\";
\tsupport.radioValue = input.value === \"t\";
})();


var nodeHook, boolHook,
\tattrHandle = jQuery.expr.attrHandle;

jQuery.fn.extend({
\tattr: function( name, value ) {
\t\treturn access( this, jQuery.attr, name, value, arguments.length > 1 );
\t},

\tremoveAttr: function( name ) {
\t\treturn this.each(function() {
\t\t\tjQuery.removeAttr( this, name );
\t\t});
\t}
});

jQuery.extend({
\tattr: function( elem, name, value ) {
\t\tvar hooks, ret,
\t\t\tnType = elem.nodeType;

\t\t// don't get/set attributes on text, comment and attribute nodes
\t\tif ( !elem || nType === 3 || nType === 8 || nType === 2 ) {
\t\t\treturn;
\t\t}

\t\t// Fallback to prop when attributes are not supported
\t\tif ( typeof elem.getAttribute === strundefined ) {
\t\t\treturn jQuery.prop( elem, name, value );
\t\t}

\t\t// All attributes are lowercase
\t\t// Grab necessary hook if one is defined
\t\tif ( nType !== 1 || !jQuery.isXMLDoc( elem ) ) {
\t\t\tname = name.toLowerCase();
\t\t\thooks = jQuery.attrHooks[ name ] ||
\t\t\t\t( jQuery.expr.match.bool.test( name ) ? boolHook : nodeHook );
\t\t}

\t\tif ( value !== undefined ) {

\t\t\tif ( value === null ) {
\t\t\t\tjQuery.removeAttr( elem, name );

\t\t\t} else if ( hooks && \"set\" in hooks && (ret = hooks.set( elem, value, name )) !== undefined ) {
\t\t\t\treturn ret;

\t\t\t} else {
\t\t\t\telem.setAttribute( name, value + \"\" );
\t\t\t\treturn value;
\t\t\t}

\t\t} else if ( hooks && \"get\" in hooks && (ret = hooks.get( elem, name )) !== null ) {
\t\t\treturn ret;

\t\t} else {
\t\t\tret = jQuery.find.attr( elem, name );

\t\t\t// Non-existent attributes return null, we normalize to undefined
\t\t\treturn ret == null ?
\t\t\t\tundefined :
\t\t\t\tret;
\t\t}
\t},

\tremoveAttr: function( elem, value ) {
\t\tvar name, propName,
\t\t\ti = 0,
\t\t\tattrNames = value && value.match( rnotwhite );

\t\tif ( attrNames && elem.nodeType === 1 ) {
\t\t\twhile ( (name = attrNames[i++]) ) {
\t\t\t\tpropName = jQuery.propFix[ name ] || name;

\t\t\t\t// Boolean attributes get special treatment (#10870)
\t\t\t\tif ( jQuery.expr.match.bool.test( name ) ) {
\t\t\t\t\t// Set corresponding property to false
\t\t\t\t\telem[ propName ] = false;
\t\t\t\t}

\t\t\t\telem.removeAttribute( name );
\t\t\t}
\t\t}
\t},

\tattrHooks: {
\t\ttype: {
\t\t\tset: function( elem, value ) {
\t\t\t\tif ( !support.radioValue && value === \"radio\" &&
\t\t\t\t\tjQuery.nodeName( elem, \"input\" ) ) {
\t\t\t\t\tvar val = elem.value;
\t\t\t\t\telem.setAttribute( \"type\", value );
\t\t\t\t\tif ( val ) {
\t\t\t\t\t\telem.value = val;
\t\t\t\t\t}
\t\t\t\t\treturn value;
\t\t\t\t}
\t\t\t}
\t\t}
\t}
});

// Hooks for boolean attributes
boolHook = {
\tset: function( elem, value, name ) {
\t\tif ( value === false ) {
\t\t\t// Remove boolean attributes when set to false
\t\t\tjQuery.removeAttr( elem, name );
\t\t} else {
\t\t\telem.setAttribute( name, name );
\t\t}
\t\treturn name;
\t}
};
jQuery.each( jQuery.expr.match.bool.source.match( /\\w+/g ), function( i, name ) {
\tvar getter = attrHandle[ name ] || jQuery.find.attr;

\tattrHandle[ name ] = function( elem, name, isXML ) {
\t\tvar ret, handle;
\t\tif ( !isXML ) {
\t\t\t// Avoid an infinite loop by temporarily removing this function from the getter
\t\t\thandle = attrHandle[ name ];
\t\t\tattrHandle[ name ] = ret;
\t\t\tret = getter( elem, name, isXML ) != null ?
\t\t\t\tname.toLowerCase() :
\t\t\t\tnull;
\t\t\tattrHandle[ name ] = handle;
\t\t}
\t\treturn ret;
\t};
});




var rfocusable = /^(?:input|select|textarea|button)\$/i;

jQuery.fn.extend({
\tprop: function( name, value ) {
\t\treturn access( this, jQuery.prop, name, value, arguments.length > 1 );
\t},

\tremoveProp: function( name ) {
\t\treturn this.each(function() {
\t\t\tdelete this[ jQuery.propFix[ name ] || name ];
\t\t});
\t}
});

jQuery.extend({
\tpropFix: {
\t\t\"for\": \"htmlFor\",
\t\t\"class\": \"className\"
\t},

\tprop: function( elem, name, value ) {
\t\tvar ret, hooks, notxml,
\t\t\tnType = elem.nodeType;

\t\t// Don't get/set properties on text, comment and attribute nodes
\t\tif ( !elem || nType === 3 || nType === 8 || nType === 2 ) {
\t\t\treturn;
\t\t}

\t\tnotxml = nType !== 1 || !jQuery.isXMLDoc( elem );

\t\tif ( notxml ) {
\t\t\t// Fix name and attach hooks
\t\t\tname = jQuery.propFix[ name ] || name;
\t\t\thooks = jQuery.propHooks[ name ];
\t\t}

\t\tif ( value !== undefined ) {
\t\t\treturn hooks && \"set\" in hooks && (ret = hooks.set( elem, value, name )) !== undefined ?
\t\t\t\tret :
\t\t\t\t( elem[ name ] = value );

\t\t} else {
\t\t\treturn hooks && \"get\" in hooks && (ret = hooks.get( elem, name )) !== null ?
\t\t\t\tret :
\t\t\t\telem[ name ];
\t\t}
\t},

\tpropHooks: {
\t\ttabIndex: {
\t\t\tget: function( elem ) {
\t\t\t\treturn elem.hasAttribute( \"tabindex\" ) || rfocusable.test( elem.nodeName ) || elem.href ?
\t\t\t\t\telem.tabIndex :
\t\t\t\t\t-1;
\t\t\t}
\t\t}
\t}
});

if ( !support.optSelected ) {
\tjQuery.propHooks.selected = {
\t\tget: function( elem ) {
\t\t\tvar parent = elem.parentNode;
\t\t\tif ( parent && parent.parentNode ) {
\t\t\t\tparent.parentNode.selectedIndex;
\t\t\t}
\t\t\treturn null;
\t\t}
\t};
}

jQuery.each([
\t\"tabIndex\",
\t\"readOnly\",
\t\"maxLength\",
\t\"cellSpacing\",
\t\"cellPadding\",
\t\"rowSpan\",
\t\"colSpan\",
\t\"useMap\",
\t\"frameBorder\",
\t\"contentEditable\"
], function() {
\tjQuery.propFix[ this.toLowerCase() ] = this;
});




var rclass = /[\\t\\r\\n\\f]/g;

jQuery.fn.extend({
\taddClass: function( value ) {
\t\tvar classes, elem, cur, clazz, j, finalValue,
\t\t\tproceed = typeof value === \"string\" && value,
\t\t\ti = 0,
\t\t\tlen = this.length;

\t\tif ( jQuery.isFunction( value ) ) {
\t\t\treturn this.each(function( j ) {
\t\t\t\tjQuery( this ).addClass( value.call( this, j, this.className ) );
\t\t\t});
\t\t}

\t\tif ( proceed ) {
\t\t\t// The disjunction here is for better compressibility (see removeClass)
\t\t\tclasses = ( value || \"\" ).match( rnotwhite ) || [];

\t\t\tfor ( ; i < len; i++ ) {
\t\t\t\telem = this[ i ];
\t\t\t\tcur = elem.nodeType === 1 && ( elem.className ?
\t\t\t\t\t( \" \" + elem.className + \" \" ).replace( rclass, \" \" ) :
\t\t\t\t\t\" \"
\t\t\t\t);

\t\t\t\tif ( cur ) {
\t\t\t\t\tj = 0;
\t\t\t\t\twhile ( (clazz = classes[j++]) ) {
\t\t\t\t\t\tif ( cur.indexOf( \" \" + clazz + \" \" ) < 0 ) {
\t\t\t\t\t\t\tcur += clazz + \" \";
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\t// only assign if different to avoid unneeded rendering.
\t\t\t\t\tfinalValue = jQuery.trim( cur );
\t\t\t\t\tif ( elem.className !== finalValue ) {
\t\t\t\t\t\telem.className = finalValue;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}

\t\treturn this;
\t},

\tremoveClass: function( value ) {
\t\tvar classes, elem, cur, clazz, j, finalValue,
\t\t\tproceed = arguments.length === 0 || typeof value === \"string\" && value,
\t\t\ti = 0,
\t\t\tlen = this.length;

\t\tif ( jQuery.isFunction( value ) ) {
\t\t\treturn this.each(function( j ) {
\t\t\t\tjQuery( this ).removeClass( value.call( this, j, this.className ) );
\t\t\t});
\t\t}
\t\tif ( proceed ) {
\t\t\tclasses = ( value || \"\" ).match( rnotwhite ) || [];

\t\t\tfor ( ; i < len; i++ ) {
\t\t\t\telem = this[ i ];
\t\t\t\t// This expression is here for better compressibility (see addClass)
\t\t\t\tcur = elem.nodeType === 1 && ( elem.className ?
\t\t\t\t\t( \" \" + elem.className + \" \" ).replace( rclass, \" \" ) :
\t\t\t\t\t\"\"
\t\t\t\t);

\t\t\t\tif ( cur ) {
\t\t\t\t\tj = 0;
\t\t\t\t\twhile ( (clazz = classes[j++]) ) {
\t\t\t\t\t\t// Remove *all* instances
\t\t\t\t\t\twhile ( cur.indexOf( \" \" + clazz + \" \" ) >= 0 ) {
\t\t\t\t\t\t\tcur = cur.replace( \" \" + clazz + \" \", \" \" );
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\t// Only assign if different to avoid unneeded rendering.
\t\t\t\t\tfinalValue = value ? jQuery.trim( cur ) : \"\";
\t\t\t\t\tif ( elem.className !== finalValue ) {
\t\t\t\t\t\telem.className = finalValue;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}

\t\treturn this;
\t},

\ttoggleClass: function( value, stateVal ) {
\t\tvar type = typeof value;

\t\tif ( typeof stateVal === \"boolean\" && type === \"string\" ) {
\t\t\treturn stateVal ? this.addClass( value ) : this.removeClass( value );
\t\t}

\t\tif ( jQuery.isFunction( value ) ) {
\t\t\treturn this.each(function( i ) {
\t\t\t\tjQuery( this ).toggleClass( value.call(this, i, this.className, stateVal), stateVal );
\t\t\t});
\t\t}

\t\treturn this.each(function() {
\t\t\tif ( type === \"string\" ) {
\t\t\t\t// Toggle individual class names
\t\t\t\tvar className,
\t\t\t\t\ti = 0,
\t\t\t\t\tself = jQuery( this ),
\t\t\t\t\tclassNames = value.match( rnotwhite ) || [];

\t\t\t\twhile ( (className = classNames[ i++ ]) ) {
\t\t\t\t\t// Check each className given, space separated list
\t\t\t\t\tif ( self.hasClass( className ) ) {
\t\t\t\t\t\tself.removeClass( className );
\t\t\t\t\t} else {
\t\t\t\t\t\tself.addClass( className );
\t\t\t\t\t}
\t\t\t\t}

\t\t\t// Toggle whole class name
\t\t\t} else if ( type === strundefined || type === \"boolean\" ) {
\t\t\t\tif ( this.className ) {
\t\t\t\t\t// store className if set
\t\t\t\t\tdata_priv.set( this, \"__className__\", this.className );
\t\t\t\t}

\t\t\t\t// If the element has a class name or if we're passed `false`,
\t\t\t\t// then remove the whole classname (if there was one, the above saved it).
\t\t\t\t// Otherwise bring back whatever was previously saved (if anything),
\t\t\t\t// falling back to the empty string if nothing was stored.
\t\t\t\tthis.className = this.className || value === false ? \"\" : data_priv.get( this, \"__className__\" ) || \"\";
\t\t\t}
\t\t});
\t},

\thasClass: function( selector ) {
\t\tvar className = \" \" + selector + \" \",
\t\t\ti = 0,
\t\t\tl = this.length;
\t\tfor ( ; i < l; i++ ) {
\t\t\tif ( this[i].nodeType === 1 && (\" \" + this[i].className + \" \").replace(rclass, \" \").indexOf( className ) >= 0 ) {
\t\t\t\treturn true;
\t\t\t}
\t\t}

\t\treturn false;
\t}
});




var rreturn = /\\r/g;

jQuery.fn.extend({
\tval: function( value ) {
\t\tvar hooks, ret, isFunction,
\t\t\telem = this[0];

\t\tif ( !arguments.length ) {
\t\t\tif ( elem ) {
\t\t\t\thooks = jQuery.valHooks[ elem.type ] || jQuery.valHooks[ elem.nodeName.toLowerCase() ];

\t\t\t\tif ( hooks && \"get\" in hooks && (ret = hooks.get( elem, \"value\" )) !== undefined ) {
\t\t\t\t\treturn ret;
\t\t\t\t}

\t\t\t\tret = elem.value;

\t\t\t\treturn typeof ret === \"string\" ?
\t\t\t\t\t// Handle most common string cases
\t\t\t\t\tret.replace(rreturn, \"\") :
\t\t\t\t\t// Handle cases where value is null/undef or number
\t\t\t\t\tret == null ? \"\" : ret;
\t\t\t}

\t\t\treturn;
\t\t}

\t\tisFunction = jQuery.isFunction( value );

\t\treturn this.each(function( i ) {
\t\t\tvar val;

\t\t\tif ( this.nodeType !== 1 ) {
\t\t\t\treturn;
\t\t\t}

\t\t\tif ( isFunction ) {
\t\t\t\tval = value.call( this, i, jQuery( this ).val() );
\t\t\t} else {
\t\t\t\tval = value;
\t\t\t}

\t\t\t// Treat null/undefined as \"\"; convert numbers to string
\t\t\tif ( val == null ) {
\t\t\t\tval = \"\";

\t\t\t} else if ( typeof val === \"number\" ) {
\t\t\t\tval += \"\";

\t\t\t} else if ( jQuery.isArray( val ) ) {
\t\t\t\tval = jQuery.map( val, function( value ) {
\t\t\t\t\treturn value == null ? \"\" : value + \"\";
\t\t\t\t});
\t\t\t}

\t\t\thooks = jQuery.valHooks[ this.type ] || jQuery.valHooks[ this.nodeName.toLowerCase() ];

\t\t\t// If set returns undefined, fall back to normal setting
\t\t\tif ( !hooks || !(\"set\" in hooks) || hooks.set( this, val, \"value\" ) === undefined ) {
\t\t\t\tthis.value = val;
\t\t\t}
\t\t});
\t}
});

jQuery.extend({
\tvalHooks: {
\t\toption: {
\t\t\tget: function( elem ) {
\t\t\t\tvar val = jQuery.find.attr( elem, \"value\" );
\t\t\t\treturn val != null ?
\t\t\t\t\tval :
\t\t\t\t\t// Support: IE10-11+
\t\t\t\t\t// option.text throws exceptions (#14686, #14858)
\t\t\t\t\tjQuery.trim( jQuery.text( elem ) );
\t\t\t}
\t\t},
\t\tselect: {
\t\t\tget: function( elem ) {
\t\t\t\tvar value, option,
\t\t\t\t\toptions = elem.options,
\t\t\t\t\tindex = elem.selectedIndex,
\t\t\t\t\tone = elem.type === \"select-one\" || index < 0,
\t\t\t\t\tvalues = one ? null : [],
\t\t\t\t\tmax = one ? index + 1 : options.length,
\t\t\t\t\ti = index < 0 ?
\t\t\t\t\t\tmax :
\t\t\t\t\t\tone ? index : 0;

\t\t\t\t// Loop through all the selected options
\t\t\t\tfor ( ; i < max; i++ ) {
\t\t\t\t\toption = options[ i ];

\t\t\t\t\t// IE6-9 doesn't update selected after form reset (#2551)
\t\t\t\t\tif ( ( option.selected || i === index ) &&
\t\t\t\t\t\t\t// Don't return options that are disabled or in a disabled optgroup
\t\t\t\t\t\t\t( support.optDisabled ? !option.disabled : option.getAttribute( \"disabled\" ) === null ) &&
\t\t\t\t\t\t\t( !option.parentNode.disabled || !jQuery.nodeName( option.parentNode, \"optgroup\" ) ) ) {

\t\t\t\t\t\t// Get the specific value for the option
\t\t\t\t\t\tvalue = jQuery( option ).val();

\t\t\t\t\t\t// We don't need an array for one selects
\t\t\t\t\t\tif ( one ) {
\t\t\t\t\t\t\treturn value;
\t\t\t\t\t\t}

\t\t\t\t\t\t// Multi-Selects return an array
\t\t\t\t\t\tvalues.push( value );
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\treturn values;
\t\t\t},

\t\t\tset: function( elem, value ) {
\t\t\t\tvar optionSet, option,
\t\t\t\t\toptions = elem.options,
\t\t\t\t\tvalues = jQuery.makeArray( value ),
\t\t\t\t\ti = options.length;

\t\t\t\twhile ( i-- ) {
\t\t\t\t\toption = options[ i ];
\t\t\t\t\tif ( (option.selected = jQuery.inArray( option.value, values ) >= 0) ) {
\t\t\t\t\t\toptionSet = true;
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// Force browsers to behave consistently when non-matching value is set
\t\t\t\tif ( !optionSet ) {
\t\t\t\t\telem.selectedIndex = -1;
\t\t\t\t}
\t\t\t\treturn values;
\t\t\t}
\t\t}
\t}
});

// Radios and checkboxes getter/setter
jQuery.each([ \"radio\", \"checkbox\" ], function() {
\tjQuery.valHooks[ this ] = {
\t\tset: function( elem, value ) {
\t\t\tif ( jQuery.isArray( value ) ) {
\t\t\t\treturn ( elem.checked = jQuery.inArray( jQuery(elem).val(), value ) >= 0 );
\t\t\t}
\t\t}
\t};
\tif ( !support.checkOn ) {
\t\tjQuery.valHooks[ this ].get = function( elem ) {
\t\t\treturn elem.getAttribute(\"value\") === null ? \"on\" : elem.value;
\t\t};
\t}
});




// Return jQuery for attributes-only inclusion


jQuery.each( (\"blur focus focusin focusout load resize scroll unload click dblclick \" +
\t\"mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave \" +
\t\"change select submit keydown keypress keyup error contextmenu\").split(\" \"), function( i, name ) {

\t// Handle event binding
\tjQuery.fn[ name ] = function( data, fn ) {
\t\treturn arguments.length > 0 ?
\t\t\tthis.on( name, null, data, fn ) :
\t\t\tthis.trigger( name );
\t};
});

jQuery.fn.extend({
\thover: function( fnOver, fnOut ) {
\t\treturn this.mouseenter( fnOver ).mouseleave( fnOut || fnOver );
\t},

\tbind: function( types, data, fn ) {
\t\treturn this.on( types, null, data, fn );
\t},
\tunbind: function( types, fn ) {
\t\treturn this.off( types, null, fn );
\t},

\tdelegate: function( selector, types, data, fn ) {
\t\treturn this.on( types, selector, data, fn );
\t},
\tundelegate: function( selector, types, fn ) {
\t\t// ( namespace ) or ( selector, types [, fn] )
\t\treturn arguments.length === 1 ? this.off( selector, \"**\" ) : this.off( types, selector || \"**\", fn );
\t}
});


var nonce = jQuery.now();

var rquery = (/\\?/);



// Support: Android 2.3
// Workaround failure to string-cast null input
jQuery.parseJSON = function( data ) {
\treturn JSON.parse( data + \"\" );
};


// Cross-browser xml parsing
jQuery.parseXML = function( data ) {
\tvar xml, tmp;
\tif ( !data || typeof data !== \"string\" ) {
\t\treturn null;
\t}

\t// Support: IE9
\ttry {
\t\ttmp = new DOMParser();
\t\txml = tmp.parseFromString( data, \"text/xml\" );
\t} catch ( e ) {
\t\txml = undefined;
\t}

\tif ( !xml || xml.getElementsByTagName( \"parsererror\" ).length ) {
\t\tjQuery.error( \"Invalid XML: \" + data );
\t}
\treturn xml;
};


var
\trhash = /#.*\$/,
\trts = /([?&])_=[^&]*/,
\trheaders = /^(.*?):[ \\t]*([^\\r\\n]*)\$/mg,
\t// #7653, #8125, #8152: local protocol detection
\trlocalProtocol = /^(?:about|app|app-storage|.+-extension|file|res|widget):\$/,
\trnoContent = /^(?:GET|HEAD)\$/,
\trprotocol = /^\\/\\//,
\trurl = /^([\\w.+-]+:)(?:\\/\\/(?:[^\\/?#]*@|)([^\\/?#:]*)(?::(\\d+)|)|)/,

\t/* Prefilters
\t * 1) They are useful to introduce custom dataTypes (see ajax/jsonp.js for an example)
\t * 2) These are called:
\t *    - BEFORE asking for a transport
\t *    - AFTER param serialization (s.data is a string if s.processData is true)
\t * 3) key is the dataType
\t * 4) the catchall symbol \"*\" can be used
\t * 5) execution will start with transport dataType and THEN continue down to \"*\" if needed
\t */
\tprefilters = {},

\t/* Transports bindings
\t * 1) key is the dataType
\t * 2) the catchall symbol \"*\" can be used
\t * 3) selection will start with transport dataType and THEN go to \"*\" if needed
\t */
\ttransports = {},

\t// Avoid comment-prolog char sequence (#10098); must appease lint and evade compression
\tallTypes = \"*/\".concat( \"*\" ),

\t// Document location
\tajaxLocation = window.location.href,

\t// Segment location into parts
\tajaxLocParts = rurl.exec( ajaxLocation.toLowerCase() ) || [];

// Base \"constructor\" for jQuery.ajaxPrefilter and jQuery.ajaxTransport
function addToPrefiltersOrTransports( structure ) {

\t// dataTypeExpression is optional and defaults to \"*\"
\treturn function( dataTypeExpression, func ) {

\t\tif ( typeof dataTypeExpression !== \"string\" ) {
\t\t\tfunc = dataTypeExpression;
\t\t\tdataTypeExpression = \"*\";
\t\t}

\t\tvar dataType,
\t\t\ti = 0,
\t\t\tdataTypes = dataTypeExpression.toLowerCase().match( rnotwhite ) || [];

\t\tif ( jQuery.isFunction( func ) ) {
\t\t\t// For each dataType in the dataTypeExpression
\t\t\twhile ( (dataType = dataTypes[i++]) ) {
\t\t\t\t// Prepend if requested
\t\t\t\tif ( dataType[0] === \"+\" ) {
\t\t\t\t\tdataType = dataType.slice( 1 ) || \"*\";
\t\t\t\t\t(structure[ dataType ] = structure[ dataType ] || []).unshift( func );

\t\t\t\t// Otherwise append
\t\t\t\t} else {
\t\t\t\t\t(structure[ dataType ] = structure[ dataType ] || []).push( func );
\t\t\t\t}
\t\t\t}
\t\t}
\t};
}

// Base inspection function for prefilters and transports
function inspectPrefiltersOrTransports( structure, options, originalOptions, jqXHR ) {

\tvar inspected = {},
\t\tseekingTransport = ( structure === transports );

\tfunction inspect( dataType ) {
\t\tvar selected;
\t\tinspected[ dataType ] = true;
\t\tjQuery.each( structure[ dataType ] || [], function( _, prefilterOrFactory ) {
\t\t\tvar dataTypeOrTransport = prefilterOrFactory( options, originalOptions, jqXHR );
\t\t\tif ( typeof dataTypeOrTransport === \"string\" && !seekingTransport && !inspected[ dataTypeOrTransport ] ) {
\t\t\t\toptions.dataTypes.unshift( dataTypeOrTransport );
\t\t\t\tinspect( dataTypeOrTransport );
\t\t\t\treturn false;
\t\t\t} else if ( seekingTransport ) {
\t\t\t\treturn !( selected = dataTypeOrTransport );
\t\t\t}
\t\t});
\t\treturn selected;
\t}

\treturn inspect( options.dataTypes[ 0 ] ) || !inspected[ \"*\" ] && inspect( \"*\" );
}

// A special extend for ajax options
// that takes \"flat\" options (not to be deep extended)
// Fixes #9887
function ajaxExtend( target, src ) {
\tvar key, deep,
\t\tflatOptions = jQuery.ajaxSettings.flatOptions || {};

\tfor ( key in src ) {
\t\tif ( src[ key ] !== undefined ) {
\t\t\t( flatOptions[ key ] ? target : ( deep || (deep = {}) ) )[ key ] = src[ key ];
\t\t}
\t}
\tif ( deep ) {
\t\tjQuery.extend( true, target, deep );
\t}

\treturn target;
}

/* Handles responses to an ajax request:
 * - finds the right dataType (mediates between content-type and expected dataType)
 * - returns the corresponding response
 */
function ajaxHandleResponses( s, jqXHR, responses ) {

\tvar ct, type, finalDataType, firstDataType,
\t\tcontents = s.contents,
\t\tdataTypes = s.dataTypes;

\t// Remove auto dataType and get content-type in the process
\twhile ( dataTypes[ 0 ] === \"*\" ) {
\t\tdataTypes.shift();
\t\tif ( ct === undefined ) {
\t\t\tct = s.mimeType || jqXHR.getResponseHeader(\"Content-Type\");
\t\t}
\t}

\t// Check if we're dealing with a known content-type
\tif ( ct ) {
\t\tfor ( type in contents ) {
\t\t\tif ( contents[ type ] && contents[ type ].test( ct ) ) {
\t\t\t\tdataTypes.unshift( type );
\t\t\t\tbreak;
\t\t\t}
\t\t}
\t}

\t// Check to see if we have a response for the expected dataType
\tif ( dataTypes[ 0 ] in responses ) {
\t\tfinalDataType = dataTypes[ 0 ];
\t} else {
\t\t// Try convertible dataTypes
\t\tfor ( type in responses ) {
\t\t\tif ( !dataTypes[ 0 ] || s.converters[ type + \" \" + dataTypes[0] ] ) {
\t\t\t\tfinalDataType = type;
\t\t\t\tbreak;
\t\t\t}
\t\t\tif ( !firstDataType ) {
\t\t\t\tfirstDataType = type;
\t\t\t}
\t\t}
\t\t// Or just use first one
\t\tfinalDataType = finalDataType || firstDataType;
\t}

\t// If we found a dataType
\t// We add the dataType to the list if needed
\t// and return the corresponding response
\tif ( finalDataType ) {
\t\tif ( finalDataType !== dataTypes[ 0 ] ) {
\t\t\tdataTypes.unshift( finalDataType );
\t\t}
\t\treturn responses[ finalDataType ];
\t}
}

/* Chain conversions given the request and the original response
 * Also sets the responseXXX fields on the jqXHR instance
 */
function ajaxConvert( s, response, jqXHR, isSuccess ) {
\tvar conv2, current, conv, tmp, prev,
\t\tconverters = {},
\t\t// Work with a copy of dataTypes in case we need to modify it for conversion
\t\tdataTypes = s.dataTypes.slice();

\t// Create converters map with lowercased keys
\tif ( dataTypes[ 1 ] ) {
\t\tfor ( conv in s.converters ) {
\t\t\tconverters[ conv.toLowerCase() ] = s.converters[ conv ];
\t\t}
\t}

\tcurrent = dataTypes.shift();

\t// Convert to each sequential dataType
\twhile ( current ) {

\t\tif ( s.responseFields[ current ] ) {
\t\t\tjqXHR[ s.responseFields[ current ] ] = response;
\t\t}

\t\t// Apply the dataFilter if provided
\t\tif ( !prev && isSuccess && s.dataFilter ) {
\t\t\tresponse = s.dataFilter( response, s.dataType );
\t\t}

\t\tprev = current;
\t\tcurrent = dataTypes.shift();

\t\tif ( current ) {

\t\t// There's only work to do if current dataType is non-auto
\t\t\tif ( current === \"*\" ) {

\t\t\t\tcurrent = prev;

\t\t\t// Convert response if prev dataType is non-auto and differs from current
\t\t\t} else if ( prev !== \"*\" && prev !== current ) {

\t\t\t\t// Seek a direct converter
\t\t\t\tconv = converters[ prev + \" \" + current ] || converters[ \"* \" + current ];

\t\t\t\t// If none found, seek a pair
\t\t\t\tif ( !conv ) {
\t\t\t\t\tfor ( conv2 in converters ) {

\t\t\t\t\t\t// If conv2 outputs current
\t\t\t\t\t\ttmp = conv2.split( \" \" );
\t\t\t\t\t\tif ( tmp[ 1 ] === current ) {

\t\t\t\t\t\t\t// If prev can be converted to accepted input
\t\t\t\t\t\t\tconv = converters[ prev + \" \" + tmp[ 0 ] ] ||
\t\t\t\t\t\t\t\tconverters[ \"* \" + tmp[ 0 ] ];
\t\t\t\t\t\t\tif ( conv ) {
\t\t\t\t\t\t\t\t// Condense equivalence converters
\t\t\t\t\t\t\t\tif ( conv === true ) {
\t\t\t\t\t\t\t\t\tconv = converters[ conv2 ];

\t\t\t\t\t\t\t\t// Otherwise, insert the intermediate dataType
\t\t\t\t\t\t\t\t} else if ( converters[ conv2 ] !== true ) {
\t\t\t\t\t\t\t\t\tcurrent = tmp[ 0 ];
\t\t\t\t\t\t\t\t\tdataTypes.unshift( tmp[ 1 ] );
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// Apply converter (if not an equivalence)
\t\t\t\tif ( conv !== true ) {

\t\t\t\t\t// Unless errors are allowed to bubble, catch and return them
\t\t\t\t\tif ( conv && s[ \"throws\" ] ) {
\t\t\t\t\t\tresponse = conv( response );
\t\t\t\t\t} else {
\t\t\t\t\t\ttry {
\t\t\t\t\t\t\tresponse = conv( response );
\t\t\t\t\t\t} catch ( e ) {
\t\t\t\t\t\t\treturn { state: \"parsererror\", error: conv ? e : \"No conversion from \" + prev + \" to \" + current };
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}
\t}

\treturn { state: \"success\", data: response };
}

jQuery.extend({

\t// Counter for holding the number of active queries
\tactive: 0,

\t// Last-Modified header cache for next request
\tlastModified: {},
\tetag: {},

\tajaxSettings: {
\t\turl: ajaxLocation,
\t\ttype: \"GET\",
\t\tisLocal: rlocalProtocol.test( ajaxLocParts[ 1 ] ),
\t\tglobal: true,
\t\tprocessData: true,
\t\tasync: true,
\t\tcontentType: \"application/x-www-form-urlencoded; charset=UTF-8\",
\t\t/*
\t\ttimeout: 0,
\t\tdata: null,
\t\tdataType: null,
\t\tusername: null,
\t\tpassword: null,
\t\tcache: null,
\t\tthrows: false,
\t\ttraditional: false,
\t\theaders: {},
\t\t*/

\t\taccepts: {
\t\t\t\"*\": allTypes,
\t\t\ttext: \"text/plain\",
\t\t\thtml: \"text/html\",
\t\t\txml: \"application/xml, text/xml\",
\t\t\tjson: \"application/json, text/javascript\"
\t\t},

\t\tcontents: {
\t\t\txml: /xml/,
\t\t\thtml: /html/,
\t\t\tjson: /json/
\t\t},

\t\tresponseFields: {
\t\t\txml: \"responseXML\",
\t\t\ttext: \"responseText\",
\t\t\tjson: \"responseJSON\"
\t\t},

\t\t// Data converters
\t\t// Keys separate source (or catchall \"*\") and destination types with a single space
\t\tconverters: {

\t\t\t// Convert anything to text
\t\t\t\"* text\": String,

\t\t\t// Text to html (true = no transformation)
\t\t\t\"text html\": true,

\t\t\t// Evaluate text as a json expression
\t\t\t\"text json\": jQuery.parseJSON,

\t\t\t// Parse text as xml
\t\t\t\"text xml\": jQuery.parseXML
\t\t},

\t\t// For options that shouldn't be deep extended:
\t\t// you can add your own custom options here if
\t\t// and when you create one that shouldn't be
\t\t// deep extended (see ajaxExtend)
\t\tflatOptions: {
\t\t\turl: true,
\t\t\tcontext: true
\t\t}
\t},

\t// Creates a full fledged settings object into target
\t// with both ajaxSettings and settings fields.
\t// If target is omitted, writes into ajaxSettings.
\tajaxSetup: function( target, settings ) {
\t\treturn settings ?

\t\t\t// Building a settings object
\t\t\tajaxExtend( ajaxExtend( target, jQuery.ajaxSettings ), settings ) :

\t\t\t// Extending ajaxSettings
\t\t\tajaxExtend( jQuery.ajaxSettings, target );
\t},

\tajaxPrefilter: addToPrefiltersOrTransports( prefilters ),
\tajaxTransport: addToPrefiltersOrTransports( transports ),

\t// Main method
\tajax: function( url, options ) {

\t\t// If url is an object, simulate pre-1.5 signature
\t\tif ( typeof url === \"object\" ) {
\t\t\toptions = url;
\t\t\turl = undefined;
\t\t}

\t\t// Force options to be an object
\t\toptions = options || {};

\t\tvar transport,
\t\t\t// URL without anti-cache param
\t\t\tcacheURL,
\t\t\t// Response headers
\t\t\tresponseHeadersString,
\t\t\tresponseHeaders,
\t\t\t// timeout handle
\t\t\ttimeoutTimer,
\t\t\t// Cross-domain detection vars
\t\t\tparts,
\t\t\t// To know if global events are to be dispatched
\t\t\tfireGlobals,
\t\t\t// Loop variable
\t\t\ti,
\t\t\t// Create the final options object
\t\t\ts = jQuery.ajaxSetup( {}, options ),
\t\t\t// Callbacks context
\t\t\tcallbackContext = s.context || s,
\t\t\t// Context for global events is callbackContext if it is a DOM node or jQuery collection
\t\t\tglobalEventContext = s.context && ( callbackContext.nodeType || callbackContext.jquery ) ?
\t\t\t\tjQuery( callbackContext ) :
\t\t\t\tjQuery.event,
\t\t\t// Deferreds
\t\t\tdeferred = jQuery.Deferred(),
\t\t\tcompleteDeferred = jQuery.Callbacks(\"once memory\"),
\t\t\t// Status-dependent callbacks
\t\t\tstatusCode = s.statusCode || {},
\t\t\t// Headers (they are sent all at once)
\t\t\trequestHeaders = {},
\t\t\trequestHeadersNames = {},
\t\t\t// The jqXHR state
\t\t\tstate = 0,
\t\t\t// Default abort message
\t\t\tstrAbort = \"canceled\",
\t\t\t// Fake xhr
\t\t\tjqXHR = {
\t\t\t\treadyState: 0,

\t\t\t\t// Builds headers hashtable if needed
\t\t\t\tgetResponseHeader: function( key ) {
\t\t\t\t\tvar match;
\t\t\t\t\tif ( state === 2 ) {
\t\t\t\t\t\tif ( !responseHeaders ) {
\t\t\t\t\t\t\tresponseHeaders = {};
\t\t\t\t\t\t\twhile ( (match = rheaders.exec( responseHeadersString )) ) {
\t\t\t\t\t\t\t\tresponseHeaders[ match[1].toLowerCase() ] = match[ 2 ];
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t\tmatch = responseHeaders[ key.toLowerCase() ];
\t\t\t\t\t}
\t\t\t\t\treturn match == null ? null : match;
\t\t\t\t},

\t\t\t\t// Raw string
\t\t\t\tgetAllResponseHeaders: function() {
\t\t\t\t\treturn state === 2 ? responseHeadersString : null;
\t\t\t\t},

\t\t\t\t// Caches the header
\t\t\t\tsetRequestHeader: function( name, value ) {
\t\t\t\t\tvar lname = name.toLowerCase();
\t\t\t\t\tif ( !state ) {
\t\t\t\t\t\tname = requestHeadersNames[ lname ] = requestHeadersNames[ lname ] || name;
\t\t\t\t\t\trequestHeaders[ name ] = value;
\t\t\t\t\t}
\t\t\t\t\treturn this;
\t\t\t\t},

\t\t\t\t// Overrides response content-type header
\t\t\t\toverrideMimeType: function( type ) {
\t\t\t\t\tif ( !state ) {
\t\t\t\t\t\ts.mimeType = type;
\t\t\t\t\t}
\t\t\t\t\treturn this;
\t\t\t\t},

\t\t\t\t// Status-dependent callbacks
\t\t\t\tstatusCode: function( map ) {
\t\t\t\t\tvar code;
\t\t\t\t\tif ( map ) {
\t\t\t\t\t\tif ( state < 2 ) {
\t\t\t\t\t\t\tfor ( code in map ) {
\t\t\t\t\t\t\t\t// Lazy-add the new callback in a way that preserves old ones
\t\t\t\t\t\t\t\tstatusCode[ code ] = [ statusCode[ code ], map[ code ] ];
\t\t\t\t\t\t\t}
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t// Execute the appropriate callbacks
\t\t\t\t\t\t\tjqXHR.always( map[ jqXHR.status ] );
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\treturn this;
\t\t\t\t},

\t\t\t\t// Cancel the request
\t\t\t\tabort: function( statusText ) {
\t\t\t\t\tvar finalText = statusText || strAbort;
\t\t\t\t\tif ( transport ) {
\t\t\t\t\t\ttransport.abort( finalText );
\t\t\t\t\t}
\t\t\t\t\tdone( 0, finalText );
\t\t\t\t\treturn this;
\t\t\t\t}
\t\t\t};

\t\t// Attach deferreds
\t\tdeferred.promise( jqXHR ).complete = completeDeferred.add;
\t\tjqXHR.success = jqXHR.done;
\t\tjqXHR.error = jqXHR.fail;

\t\t// Remove hash character (#7531: and string promotion)
\t\t// Add protocol if not provided (prefilters might expect it)
\t\t// Handle falsy url in the settings object (#10093: consistency with old signature)
\t\t// We also use the url parameter if available
\t\ts.url = ( ( url || s.url || ajaxLocation ) + \"\" ).replace( rhash, \"\" )
\t\t\t.replace( rprotocol, ajaxLocParts[ 1 ] + \"//\" );

\t\t// Alias method option to type as per ticket #12004
\t\ts.type = options.method || options.type || s.method || s.type;

\t\t// Extract dataTypes list
\t\ts.dataTypes = jQuery.trim( s.dataType || \"*\" ).toLowerCase().match( rnotwhite ) || [ \"\" ];

\t\t// A cross-domain request is in order when we have a protocol:host:port mismatch
\t\tif ( s.crossDomain == null ) {
\t\t\tparts = rurl.exec( s.url.toLowerCase() );
\t\t\ts.crossDomain = !!( parts &&
\t\t\t\t( parts[ 1 ] !== ajaxLocParts[ 1 ] || parts[ 2 ] !== ajaxLocParts[ 2 ] ||
\t\t\t\t\t( parts[ 3 ] || ( parts[ 1 ] === \"http:\" ? \"80\" : \"443\" ) ) !==
\t\t\t\t\t\t( ajaxLocParts[ 3 ] || ( ajaxLocParts[ 1 ] === \"http:\" ? \"80\" : \"443\" ) ) )
\t\t\t);
\t\t}

\t\t// Convert data if not already a string
\t\tif ( s.data && s.processData && typeof s.data !== \"string\" ) {
\t\t\ts.data = jQuery.param( s.data, s.traditional );
\t\t}

\t\t// Apply prefilters
\t\tinspectPrefiltersOrTransports( prefilters, s, options, jqXHR );

\t\t// If request was aborted inside a prefilter, stop there
\t\tif ( state === 2 ) {
\t\t\treturn jqXHR;
\t\t}

\t\t// We can fire global events as of now if asked to
\t\t// Don't fire events if jQuery.event is undefined in an AMD-usage scenario (#15118)
\t\tfireGlobals = jQuery.event && s.global;

\t\t// Watch for a new set of requests
\t\tif ( fireGlobals && jQuery.active++ === 0 ) {
\t\t\tjQuery.event.trigger(\"ajaxStart\");
\t\t}

\t\t// Uppercase the type
\t\ts.type = s.type.toUpperCase();

\t\t// Determine if request has content
\t\ts.hasContent = !rnoContent.test( s.type );

\t\t// Save the URL in case we're toying with the If-Modified-Since
\t\t// and/or If-None-Match header later on
\t\tcacheURL = s.url;

\t\t// More options handling for requests with no content
\t\tif ( !s.hasContent ) {

\t\t\t// If data is available, append data to url
\t\t\tif ( s.data ) {
\t\t\t\tcacheURL = ( s.url += ( rquery.test( cacheURL ) ? \"&\" : \"?\" ) + s.data );
\t\t\t\t// #9682: remove data so that it's not used in an eventual retry
\t\t\t\tdelete s.data;
\t\t\t}

\t\t\t// Add anti-cache in url if needed
\t\t\tif ( s.cache === false ) {
\t\t\t\ts.url = rts.test( cacheURL ) ?

\t\t\t\t\t// If there is already a '_' parameter, set its value
\t\t\t\t\tcacheURL.replace( rts, \"\$1_=\" + nonce++ ) :

\t\t\t\t\t// Otherwise add one to the end
\t\t\t\t\tcacheURL + ( rquery.test( cacheURL ) ? \"&\" : \"?\" ) + \"_=\" + nonce++;
\t\t\t}
\t\t}

\t\t// Set the If-Modified-Since and/or If-None-Match header, if in ifModified mode.
\t\tif ( s.ifModified ) {
\t\t\tif ( jQuery.lastModified[ cacheURL ] ) {
\t\t\t\tjqXHR.setRequestHeader( \"If-Modified-Since\", jQuery.lastModified[ cacheURL ] );
\t\t\t}
\t\t\tif ( jQuery.etag[ cacheURL ] ) {
\t\t\t\tjqXHR.setRequestHeader( \"If-None-Match\", jQuery.etag[ cacheURL ] );
\t\t\t}
\t\t}

\t\t// Set the correct header, if data is being sent
\t\tif ( s.data && s.hasContent && s.contentType !== false || options.contentType ) {
\t\t\tjqXHR.setRequestHeader( \"Content-Type\", s.contentType );
\t\t}

\t\t// Set the Accepts header for the server, depending on the dataType
\t\tjqXHR.setRequestHeader(
\t\t\t\"Accept\",
\t\t\ts.dataTypes[ 0 ] && s.accepts[ s.dataTypes[0] ] ?
\t\t\t\ts.accepts[ s.dataTypes[0] ] + ( s.dataTypes[ 0 ] !== \"*\" ? \", \" + allTypes + \"; q=0.01\" : \"\" ) :
\t\t\t\ts.accepts[ \"*\" ]
\t\t);

\t\t// Check for headers option
\t\tfor ( i in s.headers ) {
\t\t\tjqXHR.setRequestHeader( i, s.headers[ i ] );
\t\t}

\t\t// Allow custom headers/mimetypes and early abort
\t\tif ( s.beforeSend && ( s.beforeSend.call( callbackContext, jqXHR, s ) === false || state === 2 ) ) {
\t\t\t// Abort if not done already and return
\t\t\treturn jqXHR.abort();
\t\t}

\t\t// Aborting is no longer a cancellation
\t\tstrAbort = \"abort\";

\t\t// Install callbacks on deferreds
\t\tfor ( i in { success: 1, error: 1, complete: 1 } ) {
\t\t\tjqXHR[ i ]( s[ i ] );
\t\t}

\t\t// Get transport
\t\ttransport = inspectPrefiltersOrTransports( transports, s, options, jqXHR );

\t\t// If no transport, we auto-abort
\t\tif ( !transport ) {
\t\t\tdone( -1, \"No Transport\" );
\t\t} else {
\t\t\tjqXHR.readyState = 1;

\t\t\t// Send global event
\t\t\tif ( fireGlobals ) {
\t\t\t\tglobalEventContext.trigger( \"ajaxSend\", [ jqXHR, s ] );
\t\t\t}
\t\t\t// Timeout
\t\t\tif ( s.async && s.timeout > 0 ) {
\t\t\t\ttimeoutTimer = setTimeout(function() {
\t\t\t\t\tjqXHR.abort(\"timeout\");
\t\t\t\t}, s.timeout );
\t\t\t}

\t\t\ttry {
\t\t\t\tstate = 1;
\t\t\t\ttransport.send( requestHeaders, done );
\t\t\t} catch ( e ) {
\t\t\t\t// Propagate exception as error if not done
\t\t\t\tif ( state < 2 ) {
\t\t\t\t\tdone( -1, e );
\t\t\t\t// Simply rethrow otherwise
\t\t\t\t} else {
\t\t\t\t\tthrow e;
\t\t\t\t}
\t\t\t}
\t\t}

\t\t// Callback for when everything is done
\t\tfunction done( status, nativeStatusText, responses, headers ) {
\t\t\tvar isSuccess, success, error, response, modified,
\t\t\t\tstatusText = nativeStatusText;

\t\t\t// Called once
\t\t\tif ( state === 2 ) {
\t\t\t\treturn;
\t\t\t}

\t\t\t// State is \"done\" now
\t\t\tstate = 2;

\t\t\t// Clear timeout if it exists
\t\t\tif ( timeoutTimer ) {
\t\t\t\tclearTimeout( timeoutTimer );
\t\t\t}

\t\t\t// Dereference transport for early garbage collection
\t\t\t// (no matter how long the jqXHR object will be used)
\t\t\ttransport = undefined;

\t\t\t// Cache response headers
\t\t\tresponseHeadersString = headers || \"\";

\t\t\t// Set readyState
\t\t\tjqXHR.readyState = status > 0 ? 4 : 0;

\t\t\t// Determine if successful
\t\t\tisSuccess = status >= 200 && status < 300 || status === 304;

\t\t\t// Get response data
\t\t\tif ( responses ) {
\t\t\t\tresponse = ajaxHandleResponses( s, jqXHR, responses );
\t\t\t}

\t\t\t// Convert no matter what (that way responseXXX fields are always set)
\t\t\tresponse = ajaxConvert( s, response, jqXHR, isSuccess );

\t\t\t// If successful, handle type chaining
\t\t\tif ( isSuccess ) {

\t\t\t\t// Set the If-Modified-Since and/or If-None-Match header, if in ifModified mode.
\t\t\t\tif ( s.ifModified ) {
\t\t\t\t\tmodified = jqXHR.getResponseHeader(\"Last-Modified\");
\t\t\t\t\tif ( modified ) {
\t\t\t\t\t\tjQuery.lastModified[ cacheURL ] = modified;
\t\t\t\t\t}
\t\t\t\t\tmodified = jqXHR.getResponseHeader(\"etag\");
\t\t\t\t\tif ( modified ) {
\t\t\t\t\t\tjQuery.etag[ cacheURL ] = modified;
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// if no content
\t\t\t\tif ( status === 204 || s.type === \"HEAD\" ) {
\t\t\t\t\tstatusText = \"nocontent\";

\t\t\t\t// if not modified
\t\t\t\t} else if ( status === 304 ) {
\t\t\t\t\tstatusText = \"notmodified\";

\t\t\t\t// If we have data, let's convert it
\t\t\t\t} else {
\t\t\t\t\tstatusText = response.state;
\t\t\t\t\tsuccess = response.data;
\t\t\t\t\terror = response.error;
\t\t\t\t\tisSuccess = !error;
\t\t\t\t}
\t\t\t} else {
\t\t\t\t// Extract error from statusText and normalize for non-aborts
\t\t\t\terror = statusText;
\t\t\t\tif ( status || !statusText ) {
\t\t\t\t\tstatusText = \"error\";
\t\t\t\t\tif ( status < 0 ) {
\t\t\t\t\t\tstatus = 0;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t\t\t// Set data for the fake xhr object
\t\t\tjqXHR.status = status;
\t\t\tjqXHR.statusText = ( nativeStatusText || statusText ) + \"\";

\t\t\t// Success/Error
\t\t\tif ( isSuccess ) {
\t\t\t\tdeferred.resolveWith( callbackContext, [ success, statusText, jqXHR ] );
\t\t\t} else {
\t\t\t\tdeferred.rejectWith( callbackContext, [ jqXHR, statusText, error ] );
\t\t\t}

\t\t\t// Status-dependent callbacks
\t\t\tjqXHR.statusCode( statusCode );
\t\t\tstatusCode = undefined;

\t\t\tif ( fireGlobals ) {
\t\t\t\tglobalEventContext.trigger( isSuccess ? \"ajaxSuccess\" : \"ajaxError\",
\t\t\t\t\t[ jqXHR, s, isSuccess ? success : error ] );
\t\t\t}

\t\t\t// Complete
\t\t\tcompleteDeferred.fireWith( callbackContext, [ jqXHR, statusText ] );

\t\t\tif ( fireGlobals ) {
\t\t\t\tglobalEventContext.trigger( \"ajaxComplete\", [ jqXHR, s ] );
\t\t\t\t// Handle the global AJAX counter
\t\t\t\tif ( !( --jQuery.active ) ) {
\t\t\t\t\tjQuery.event.trigger(\"ajaxStop\");
\t\t\t\t}
\t\t\t}
\t\t}

\t\treturn jqXHR;
\t},

\tgetJSON: function( url, data, callback ) {
\t\treturn jQuery.get( url, data, callback, \"json\" );
\t},

\tgetScript: function( url, callback ) {
\t\treturn jQuery.get( url, undefined, callback, \"script\" );
\t}
});

jQuery.each( [ \"get\", \"post\" ], function( i, method ) {
\tjQuery[ method ] = function( url, data, callback, type ) {
\t\t// Shift arguments if data argument was omitted
\t\tif ( jQuery.isFunction( data ) ) {
\t\t\ttype = type || callback;
\t\t\tcallback = data;
\t\t\tdata = undefined;
\t\t}

\t\treturn jQuery.ajax({
\t\t\turl: url,
\t\t\ttype: method,
\t\t\tdataType: type,
\t\t\tdata: data,
\t\t\tsuccess: callback
\t\t});
\t};
});


jQuery._evalUrl = function( url ) {
\treturn jQuery.ajax({
\t\turl: url,
\t\ttype: \"GET\",
\t\tdataType: \"script\",
\t\tasync: false,
\t\tglobal: false,
\t\t\"throws\": true
\t});
};


jQuery.fn.extend({
\twrapAll: function( html ) {
\t\tvar wrap;

\t\tif ( jQuery.isFunction( html ) ) {
\t\t\treturn this.each(function( i ) {
\t\t\t\tjQuery( this ).wrapAll( html.call(this, i) );
\t\t\t});
\t\t}

\t\tif ( this[ 0 ] ) {

\t\t\t// The elements to wrap the target around
\t\t\twrap = jQuery( html, this[ 0 ].ownerDocument ).eq( 0 ).clone( true );

\t\t\tif ( this[ 0 ].parentNode ) {
\t\t\t\twrap.insertBefore( this[ 0 ] );
\t\t\t}

\t\t\twrap.map(function() {
\t\t\t\tvar elem = this;

\t\t\t\twhile ( elem.firstElementChild ) {
\t\t\t\t\telem = elem.firstElementChild;
\t\t\t\t}

\t\t\t\treturn elem;
\t\t\t}).append( this );
\t\t}

\t\treturn this;
\t},

\twrapInner: function( html ) {
\t\tif ( jQuery.isFunction( html ) ) {
\t\t\treturn this.each(function( i ) {
\t\t\t\tjQuery( this ).wrapInner( html.call(this, i) );
\t\t\t});
\t\t}

\t\treturn this.each(function() {
\t\t\tvar self = jQuery( this ),
\t\t\t\tcontents = self.contents();

\t\t\tif ( contents.length ) {
\t\t\t\tcontents.wrapAll( html );

\t\t\t} else {
\t\t\t\tself.append( html );
\t\t\t}
\t\t});
\t},

\twrap: function( html ) {
\t\tvar isFunction = jQuery.isFunction( html );

\t\treturn this.each(function( i ) {
\t\t\tjQuery( this ).wrapAll( isFunction ? html.call(this, i) : html );
\t\t});
\t},

\tunwrap: function() {
\t\treturn this.parent().each(function() {
\t\t\tif ( !jQuery.nodeName( this, \"body\" ) ) {
\t\t\t\tjQuery( this ).replaceWith( this.childNodes );
\t\t\t}
\t\t}).end();
\t}
});


jQuery.expr.filters.hidden = function( elem ) {
\t// Support: Opera <= 12.12
\t// Opera reports offsetWidths and offsetHeights less than zero on some elements
\treturn elem.offsetWidth <= 0 && elem.offsetHeight <= 0;
};
jQuery.expr.filters.visible = function( elem ) {
\treturn !jQuery.expr.filters.hidden( elem );
};




var r20 = /%20/g,
\trbracket = /\\[\\]\$/,
\trCRLF = /\\r?\\n/g,
\trsubmitterTypes = /^(?:submit|button|image|reset|file)\$/i,
\trsubmittable = /^(?:input|select|textarea|keygen)/i;

function buildParams( prefix, obj, traditional, add ) {
\tvar name;

\tif ( jQuery.isArray( obj ) ) {
\t\t// Serialize array item.
\t\tjQuery.each( obj, function( i, v ) {
\t\t\tif ( traditional || rbracket.test( prefix ) ) {
\t\t\t\t// Treat each array item as a scalar.
\t\t\t\tadd( prefix, v );

\t\t\t} else {
\t\t\t\t// Item is non-scalar (array or object), encode its numeric index.
\t\t\t\tbuildParams( prefix + \"[\" + ( typeof v === \"object\" ? i : \"\" ) + \"]\", v, traditional, add );
\t\t\t}
\t\t});

\t} else if ( !traditional && jQuery.type( obj ) === \"object\" ) {
\t\t// Serialize object item.
\t\tfor ( name in obj ) {
\t\t\tbuildParams( prefix + \"[\" + name + \"]\", obj[ name ], traditional, add );
\t\t}

\t} else {
\t\t// Serialize scalar item.
\t\tadd( prefix, obj );
\t}
}

// Serialize an array of form elements or a set of
// key/values into a query string
jQuery.param = function( a, traditional ) {
\tvar prefix,
\t\ts = [],
\t\tadd = function( key, value ) {
\t\t\t// If value is a function, invoke it and return its value
\t\t\tvalue = jQuery.isFunction( value ) ? value() : ( value == null ? \"\" : value );
\t\t\ts[ s.length ] = encodeURIComponent( key ) + \"=\" + encodeURIComponent( value );
\t\t};

\t// Set traditional to true for jQuery <= 1.3.2 behavior.
\tif ( traditional === undefined ) {
\t\ttraditional = jQuery.ajaxSettings && jQuery.ajaxSettings.traditional;
\t}

\t// If an array was passed in, assume that it is an array of form elements.
\tif ( jQuery.isArray( a ) || ( a.jquery && !jQuery.isPlainObject( a ) ) ) {
\t\t// Serialize the form elements
\t\tjQuery.each( a, function() {
\t\t\tadd( this.name, this.value );
\t\t});

\t} else {
\t\t// If traditional, encode the \"old\" way (the way 1.3.2 or older
\t\t// did it), otherwise encode params recursively.
\t\tfor ( prefix in a ) {
\t\t\tbuildParams( prefix, a[ prefix ], traditional, add );
\t\t}
\t}

\t// Return the resulting serialization
\treturn s.join( \"&\" ).replace( r20, \"+\" );
};

jQuery.fn.extend({
\tserialize: function() {
\t\treturn jQuery.param( this.serializeArray() );
\t},
\tserializeArray: function() {
\t\treturn this.map(function() {
\t\t\t// Can add propHook for \"elements\" to filter or add form elements
\t\t\tvar elements = jQuery.prop( this, \"elements\" );
\t\t\treturn elements ? jQuery.makeArray( elements ) : this;
\t\t})
\t\t.filter(function() {
\t\t\tvar type = this.type;

\t\t\t// Use .is( \":disabled\" ) so that fieldset[disabled] works
\t\t\treturn this.name && !jQuery( this ).is( \":disabled\" ) &&
\t\t\t\trsubmittable.test( this.nodeName ) && !rsubmitterTypes.test( type ) &&
\t\t\t\t( this.checked || !rcheckableType.test( type ) );
\t\t})
\t\t.map(function( i, elem ) {
\t\t\tvar val = jQuery( this ).val();

\t\t\treturn val == null ?
\t\t\t\tnull :
\t\t\t\tjQuery.isArray( val ) ?
\t\t\t\t\tjQuery.map( val, function( val ) {
\t\t\t\t\t\treturn { name: elem.name, value: val.replace( rCRLF, \"\\r\\n\" ) };
\t\t\t\t\t}) :
\t\t\t\t\t{ name: elem.name, value: val.replace( rCRLF, \"\\r\\n\" ) };
\t\t}).get();
\t}
});


jQuery.ajaxSettings.xhr = function() {
\ttry {
\t\treturn new XMLHttpRequest();
\t} catch( e ) {}
};

var xhrId = 0,
\txhrCallbacks = {},
\txhrSuccessStatus = {
\t\t// file protocol always yields status code 0, assume 200
\t\t0: 200,
\t\t// Support: IE9
\t\t// #1450: sometimes IE returns 1223 when it should be 204
\t\t1223: 204
\t},
\txhrSupported = jQuery.ajaxSettings.xhr();

// Support: IE9
// Open requests must be manually aborted on unload (#5280)
// See https://support.microsoft.com/kb/2856746 for more info
if ( window.attachEvent ) {
\twindow.attachEvent( \"onunload\", function() {
\t\tfor ( var key in xhrCallbacks ) {
\t\t\txhrCallbacks[ key ]();
\t\t}
\t});
}

support.cors = !!xhrSupported && ( \"withCredentials\" in xhrSupported );
support.ajax = xhrSupported = !!xhrSupported;

jQuery.ajaxTransport(function( options ) {
\tvar callback;

\t// Cross domain only allowed if supported through XMLHttpRequest
\tif ( support.cors || xhrSupported && !options.crossDomain ) {
\t\treturn {
\t\t\tsend: function( headers, complete ) {
\t\t\t\tvar i,
\t\t\t\t\txhr = options.xhr(),
\t\t\t\t\tid = ++xhrId;

\t\t\t\txhr.open( options.type, options.url, options.async, options.username, options.password );

\t\t\t\t// Apply custom fields if provided
\t\t\t\tif ( options.xhrFields ) {
\t\t\t\t\tfor ( i in options.xhrFields ) {
\t\t\t\t\t\txhr[ i ] = options.xhrFields[ i ];
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// Override mime type if needed
\t\t\t\tif ( options.mimeType && xhr.overrideMimeType ) {
\t\t\t\t\txhr.overrideMimeType( options.mimeType );
\t\t\t\t}

\t\t\t\t// X-Requested-With header
\t\t\t\t// For cross-domain requests, seeing as conditions for a preflight are
\t\t\t\t// akin to a jigsaw puzzle, we simply never set it to be sure.
\t\t\t\t// (it can always be set on a per-request basis or even using ajaxSetup)
\t\t\t\t// For same-domain requests, won't change header if already provided.
\t\t\t\tif ( !options.crossDomain && !headers[\"X-Requested-With\"] ) {
\t\t\t\t\theaders[\"X-Requested-With\"] = \"XMLHttpRequest\";
\t\t\t\t}

\t\t\t\t// Set headers
\t\t\t\tfor ( i in headers ) {
\t\t\t\t\txhr.setRequestHeader( i, headers[ i ] );
\t\t\t\t}

\t\t\t\t// Callback
\t\t\t\tcallback = function( type ) {
\t\t\t\t\treturn function() {
\t\t\t\t\t\tif ( callback ) {
\t\t\t\t\t\t\tdelete xhrCallbacks[ id ];
\t\t\t\t\t\t\tcallback = xhr.onload = xhr.onerror = null;

\t\t\t\t\t\t\tif ( type === \"abort\" ) {
\t\t\t\t\t\t\t\txhr.abort();
\t\t\t\t\t\t\t} else if ( type === \"error\" ) {
\t\t\t\t\t\t\t\tcomplete(
\t\t\t\t\t\t\t\t\t// file: protocol always yields status 0; see #8605, #14207
\t\t\t\t\t\t\t\t\txhr.status,
\t\t\t\t\t\t\t\t\txhr.statusText
\t\t\t\t\t\t\t\t);
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\tcomplete(
\t\t\t\t\t\t\t\t\txhrSuccessStatus[ xhr.status ] || xhr.status,
\t\t\t\t\t\t\t\t\txhr.statusText,
\t\t\t\t\t\t\t\t\t// Support: IE9
\t\t\t\t\t\t\t\t\t// Accessing binary-data responseText throws an exception
\t\t\t\t\t\t\t\t\t// (#11426)
\t\t\t\t\t\t\t\t\ttypeof xhr.responseText === \"string\" ? {
\t\t\t\t\t\t\t\t\t\ttext: xhr.responseText
\t\t\t\t\t\t\t\t\t} : undefined,
\t\t\t\t\t\t\t\t\txhr.getAllResponseHeaders()
\t\t\t\t\t\t\t\t);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t};
\t\t\t\t};

\t\t\t\t// Listen to events
\t\t\t\txhr.onload = callback();
\t\t\t\txhr.onerror = callback(\"error\");

\t\t\t\t// Create the abort callback
\t\t\t\tcallback = xhrCallbacks[ id ] = callback(\"abort\");

\t\t\t\ttry {
\t\t\t\t\t// Do send the request (this may raise an exception)
\t\t\t\t\txhr.send( options.hasContent && options.data || null );
\t\t\t\t} catch ( e ) {
\t\t\t\t\t// #14683: Only rethrow if this hasn't been notified as an error yet
\t\t\t\t\tif ( callback ) {
\t\t\t\t\t\tthrow e;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t},

\t\t\tabort: function() {
\t\t\t\tif ( callback ) {
\t\t\t\t\tcallback();
\t\t\t\t}
\t\t\t}
\t\t};
\t}
});




// Install script dataType
jQuery.ajaxSetup({
\taccepts: {
\t\tscript: \"text/javascript, application/javascript, application/ecmascript, application/x-ecmascript\"
\t},
\tcontents: {
\t\tscript: /(?:java|ecma)script/
\t},
\tconverters: {
\t\t\"text script\": function( text ) {
\t\t\tjQuery.globalEval( text );
\t\t\treturn text;
\t\t}
\t}
});

// Handle cache's special case and crossDomain
jQuery.ajaxPrefilter( \"script\", function( s ) {
\tif ( s.cache === undefined ) {
\t\ts.cache = false;
\t}
\tif ( s.crossDomain ) {
\t\ts.type = \"GET\";
\t}
});

// Bind script tag hack transport
jQuery.ajaxTransport( \"script\", function( s ) {
\t// This transport only deals with cross domain requests
\tif ( s.crossDomain ) {
\t\tvar script, callback;
\t\treturn {
\t\t\tsend: function( _, complete ) {
\t\t\t\tscript = jQuery(\"<script>\").prop({
\t\t\t\t\tasync: true,
\t\t\t\t\tcharset: s.scriptCharset,
\t\t\t\t\tsrc: s.url
\t\t\t\t}).on(
\t\t\t\t\t\"load error\",
\t\t\t\t\tcallback = function( evt ) {
\t\t\t\t\t\tscript.remove();
\t\t\t\t\t\tcallback = null;
\t\t\t\t\t\tif ( evt ) {
\t\t\t\t\t\t\tcomplete( evt.type === \"error\" ? 404 : 200, evt.type );
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t);
\t\t\t\tdocument.head.appendChild( script[ 0 ] );
\t\t\t},
\t\t\tabort: function() {
\t\t\t\tif ( callback ) {
\t\t\t\t\tcallback();
\t\t\t\t}
\t\t\t}
\t\t};
\t}
});




var oldCallbacks = [],
\trjsonp = /(=)\\?(?=&|\$)|\\?\\?/;

// Default jsonp settings
jQuery.ajaxSetup({
\tjsonp: \"callback\",
\tjsonpCallback: function() {
\t\tvar callback = oldCallbacks.pop() || ( jQuery.expando + \"_\" + ( nonce++ ) );
\t\tthis[ callback ] = true;
\t\treturn callback;
\t}
});

// Detect, normalize options and install callbacks for jsonp requests
jQuery.ajaxPrefilter( \"json jsonp\", function( s, originalSettings, jqXHR ) {

\tvar callbackName, overwritten, responseContainer,
\t\tjsonProp = s.jsonp !== false && ( rjsonp.test( s.url ) ?
\t\t\t\"url\" :
\t\t\ttypeof s.data === \"string\" && !( s.contentType || \"\" ).indexOf(\"application/x-www-form-urlencoded\") && rjsonp.test( s.data ) && \"data\"
\t\t);

\t// Handle iff the expected data type is \"jsonp\" or we have a parameter to set
\tif ( jsonProp || s.dataTypes[ 0 ] === \"jsonp\" ) {

\t\t// Get callback name, remembering preexisting value associated with it
\t\tcallbackName = s.jsonpCallback = jQuery.isFunction( s.jsonpCallback ) ?
\t\t\ts.jsonpCallback() :
\t\t\ts.jsonpCallback;

\t\t// Insert callback into url or form data
\t\tif ( jsonProp ) {
\t\t\ts[ jsonProp ] = s[ jsonProp ].replace( rjsonp, \"\$1\" + callbackName );
\t\t} else if ( s.jsonp !== false ) {
\t\t\ts.url += ( rquery.test( s.url ) ? \"&\" : \"?\" ) + s.jsonp + \"=\" + callbackName;
\t\t}

\t\t// Use data converter to retrieve json after script execution
\t\ts.converters[\"script json\"] = function() {
\t\t\tif ( !responseContainer ) {
\t\t\t\tjQuery.error( callbackName + \" was not called\" );
\t\t\t}
\t\t\treturn responseContainer[ 0 ];
\t\t};

\t\t// force json dataType
\t\ts.dataTypes[ 0 ] = \"json\";

\t\t// Install callback
\t\toverwritten = window[ callbackName ];
\t\twindow[ callbackName ] = function() {
\t\t\tresponseContainer = arguments;
\t\t};

\t\t// Clean-up function (fires after converters)
\t\tjqXHR.always(function() {
\t\t\t// Restore preexisting value
\t\t\twindow[ callbackName ] = overwritten;

\t\t\t// Save back as free
\t\t\tif ( s[ callbackName ] ) {
\t\t\t\t// make sure that re-using the options doesn't screw things around
\t\t\t\ts.jsonpCallback = originalSettings.jsonpCallback;

\t\t\t\t// save the callback name for future use
\t\t\t\toldCallbacks.push( callbackName );
\t\t\t}

\t\t\t// Call if it was a function and we have a response
\t\t\tif ( responseContainer && jQuery.isFunction( overwritten ) ) {
\t\t\t\toverwritten( responseContainer[ 0 ] );
\t\t\t}

\t\t\tresponseContainer = overwritten = undefined;
\t\t});

\t\t// Delegate to script
\t\treturn \"script\";
\t}
});




// data: string of html
// context (optional): If specified, the fragment will be created in this context, defaults to document
// keepScripts (optional): If true, will include scripts passed in the html string
jQuery.parseHTML = function( data, context, keepScripts ) {
\tif ( !data || typeof data !== \"string\" ) {
\t\treturn null;
\t}
\tif ( typeof context === \"boolean\" ) {
\t\tkeepScripts = context;
\t\tcontext = false;
\t}
\tcontext = context || document;

\tvar parsed = rsingleTag.exec( data ),
\t\tscripts = !keepScripts && [];

\t// Single tag
\tif ( parsed ) {
\t\treturn [ context.createElement( parsed[1] ) ];
\t}

\tparsed = jQuery.buildFragment( [ data ], context, scripts );

\tif ( scripts && scripts.length ) {
\t\tjQuery( scripts ).remove();
\t}

\treturn jQuery.merge( [], parsed.childNodes );
};


// Keep a copy of the old load method
var _load = jQuery.fn.load;

/**
 * Load a url into a page
 */
jQuery.fn.load = function( url, params, callback ) {
\tif ( typeof url !== \"string\" && _load ) {
\t\treturn _load.apply( this, arguments );
\t}

\tvar selector, type, response,
\t\tself = this,
\t\toff = url.indexOf(\" \");

\tif ( off >= 0 ) {
\t\tselector = jQuery.trim( url.slice( off ) );
\t\turl = url.slice( 0, off );
\t}

\t// If it's a function
\tif ( jQuery.isFunction( params ) ) {

\t\t// We assume that it's the callback
\t\tcallback = params;
\t\tparams = undefined;

\t// Otherwise, build a param string
\t} else if ( params && typeof params === \"object\" ) {
\t\ttype = \"POST\";
\t}

\t// If we have elements to modify, make the request
\tif ( self.length > 0 ) {
\t\tjQuery.ajax({
\t\t\turl: url,

\t\t\t// if \"type\" variable is undefined, then \"GET\" method will be used
\t\t\ttype: type,
\t\t\tdataType: \"html\",
\t\t\tdata: params
\t\t}).done(function( responseText ) {

\t\t\t// Save response for use in complete callback
\t\t\tresponse = arguments;

\t\t\tself.html( selector ?

\t\t\t\t// If a selector was specified, locate the right elements in a dummy div
\t\t\t\t// Exclude scripts to avoid IE 'Permission Denied' errors
\t\t\t\tjQuery(\"<div>\").append( jQuery.parseHTML( responseText ) ).find( selector ) :

\t\t\t\t// Otherwise use the full result
\t\t\t\tresponseText );

\t\t}).complete( callback && function( jqXHR, status ) {
\t\t\tself.each( callback, response || [ jqXHR.responseText, status, jqXHR ] );
\t\t});
\t}

\treturn this;
};




// Attach a bunch of functions for handling common AJAX events
jQuery.each( [ \"ajaxStart\", \"ajaxStop\", \"ajaxComplete\", \"ajaxError\", \"ajaxSuccess\", \"ajaxSend\" ], function( i, type ) {
\tjQuery.fn[ type ] = function( fn ) {
\t\treturn this.on( type, fn );
\t};
});




jQuery.expr.filters.animated = function( elem ) {
\treturn jQuery.grep(jQuery.timers, function( fn ) {
\t\treturn elem === fn.elem;
\t}).length;
};




var docElem = window.document.documentElement;

/**
 * Gets a window from an element
 */
function getWindow( elem ) {
\treturn jQuery.isWindow( elem ) ? elem : elem.nodeType === 9 && elem.defaultView;
}

jQuery.offset = {
\tsetOffset: function( elem, options, i ) {
\t\tvar curPosition, curLeft, curCSSTop, curTop, curOffset, curCSSLeft, calculatePosition,
\t\t\tposition = jQuery.css( elem, \"position\" ),
\t\t\tcurElem = jQuery( elem ),
\t\t\tprops = {};

\t\t// Set position first, in-case top/left are set even on static elem
\t\tif ( position === \"static\" ) {
\t\t\telem.style.position = \"relative\";
\t\t}

\t\tcurOffset = curElem.offset();
\t\tcurCSSTop = jQuery.css( elem, \"top\" );
\t\tcurCSSLeft = jQuery.css( elem, \"left\" );
\t\tcalculatePosition = ( position === \"absolute\" || position === \"fixed\" ) &&
\t\t\t( curCSSTop + curCSSLeft ).indexOf(\"auto\") > -1;

\t\t// Need to be able to calculate position if either
\t\t// top or left is auto and position is either absolute or fixed
\t\tif ( calculatePosition ) {
\t\t\tcurPosition = curElem.position();
\t\t\tcurTop = curPosition.top;
\t\t\tcurLeft = curPosition.left;

\t\t} else {
\t\t\tcurTop = parseFloat( curCSSTop ) || 0;
\t\t\tcurLeft = parseFloat( curCSSLeft ) || 0;
\t\t}

\t\tif ( jQuery.isFunction( options ) ) {
\t\t\toptions = options.call( elem, i, curOffset );
\t\t}

\t\tif ( options.top != null ) {
\t\t\tprops.top = ( options.top - curOffset.top ) + curTop;
\t\t}
\t\tif ( options.left != null ) {
\t\t\tprops.left = ( options.left - curOffset.left ) + curLeft;
\t\t}

\t\tif ( \"using\" in options ) {
\t\t\toptions.using.call( elem, props );

\t\t} else {
\t\t\tcurElem.css( props );
\t\t}
\t}
};

jQuery.fn.extend({
\toffset: function( options ) {
\t\tif ( arguments.length ) {
\t\t\treturn options === undefined ?
\t\t\t\tthis :
\t\t\t\tthis.each(function( i ) {
\t\t\t\t\tjQuery.offset.setOffset( this, options, i );
\t\t\t\t});
\t\t}

\t\tvar docElem, win,
\t\t\telem = this[ 0 ],
\t\t\tbox = { top: 0, left: 0 },
\t\t\tdoc = elem && elem.ownerDocument;

\t\tif ( !doc ) {
\t\t\treturn;
\t\t}

\t\tdocElem = doc.documentElement;

\t\t// Make sure it's not a disconnected DOM node
\t\tif ( !jQuery.contains( docElem, elem ) ) {
\t\t\treturn box;
\t\t}

\t\t// Support: BlackBerry 5, iOS 3 (original iPhone)
\t\t// If we don't have gBCR, just use 0,0 rather than error
\t\tif ( typeof elem.getBoundingClientRect !== strundefined ) {
\t\t\tbox = elem.getBoundingClientRect();
\t\t}
\t\twin = getWindow( doc );
\t\treturn {
\t\t\ttop: box.top + win.pageYOffset - docElem.clientTop,
\t\t\tleft: box.left + win.pageXOffset - docElem.clientLeft
\t\t};
\t},

\tposition: function() {
\t\tif ( !this[ 0 ] ) {
\t\t\treturn;
\t\t}

\t\tvar offsetParent, offset,
\t\t\telem = this[ 0 ],
\t\t\tparentOffset = { top: 0, left: 0 };

\t\t// Fixed elements are offset from window (parentOffset = {top:0, left: 0}, because it is its only offset parent
\t\tif ( jQuery.css( elem, \"position\" ) === \"fixed\" ) {
\t\t\t// Assume getBoundingClientRect is there when computed position is fixed
\t\t\toffset = elem.getBoundingClientRect();

\t\t} else {
\t\t\t// Get *real* offsetParent
\t\t\toffsetParent = this.offsetParent();

\t\t\t// Get correct offsets
\t\t\toffset = this.offset();
\t\t\tif ( !jQuery.nodeName( offsetParent[ 0 ], \"html\" ) ) {
\t\t\t\tparentOffset = offsetParent.offset();
\t\t\t}

\t\t\t// Add offsetParent borders
\t\t\tparentOffset.top += jQuery.css( offsetParent[ 0 ], \"borderTopWidth\", true );
\t\t\tparentOffset.left += jQuery.css( offsetParent[ 0 ], \"borderLeftWidth\", true );
\t\t}

\t\t// Subtract parent offsets and element margins
\t\treturn {
\t\t\ttop: offset.top - parentOffset.top - jQuery.css( elem, \"marginTop\", true ),
\t\t\tleft: offset.left - parentOffset.left - jQuery.css( elem, \"marginLeft\", true )
\t\t};
\t},

\toffsetParent: function() {
\t\treturn this.map(function() {
\t\t\tvar offsetParent = this.offsetParent || docElem;

\t\t\twhile ( offsetParent && ( !jQuery.nodeName( offsetParent, \"html\" ) && jQuery.css( offsetParent, \"position\" ) === \"static\" ) ) {
\t\t\t\toffsetParent = offsetParent.offsetParent;
\t\t\t}

\t\t\treturn offsetParent || docElem;
\t\t});
\t}
});

// Create scrollLeft and scrollTop methods
jQuery.each( { scrollLeft: \"pageXOffset\", scrollTop: \"pageYOffset\" }, function( method, prop ) {
\tvar top = \"pageYOffset\" === prop;

\tjQuery.fn[ method ] = function( val ) {
\t\treturn access( this, function( elem, method, val ) {
\t\t\tvar win = getWindow( elem );

\t\t\tif ( val === undefined ) {
\t\t\t\treturn win ? win[ prop ] : elem[ method ];
\t\t\t}

\t\t\tif ( win ) {
\t\t\t\twin.scrollTo(
\t\t\t\t\t!top ? val : window.pageXOffset,
\t\t\t\t\ttop ? val : window.pageYOffset
\t\t\t\t);

\t\t\t} else {
\t\t\t\telem[ method ] = val;
\t\t\t}
\t\t}, method, val, arguments.length, null );
\t};
});

// Support: Safari<7+, Chrome<37+
// Add the top/left cssHooks using jQuery.fn.position
// Webkit bug: https://bugs.webkit.org/show_bug.cgi?id=29084
// Blink bug: https://code.google.com/p/chromium/issues/detail?id=229280
// getComputedStyle returns percent when specified for top/left/bottom/right;
// rather than make the css module depend on the offset module, just check for it here
jQuery.each( [ \"top\", \"left\" ], function( i, prop ) {
\tjQuery.cssHooks[ prop ] = addGetHookIf( support.pixelPosition,
\t\tfunction( elem, computed ) {
\t\t\tif ( computed ) {
\t\t\t\tcomputed = curCSS( elem, prop );
\t\t\t\t// If curCSS returns percentage, fallback to offset
\t\t\t\treturn rnumnonpx.test( computed ) ?
\t\t\t\t\tjQuery( elem ).position()[ prop ] + \"px\" :
\t\t\t\t\tcomputed;
\t\t\t}
\t\t}
\t);
});


// Create innerHeight, innerWidth, height, width, outerHeight and outerWidth methods
jQuery.each( { Height: \"height\", Width: \"width\" }, function( name, type ) {
\tjQuery.each( { padding: \"inner\" + name, content: type, \"\": \"outer\" + name }, function( defaultExtra, funcName ) {
\t\t// Margin is only for outerHeight, outerWidth
\t\tjQuery.fn[ funcName ] = function( margin, value ) {
\t\t\tvar chainable = arguments.length && ( defaultExtra || typeof margin !== \"boolean\" ),
\t\t\t\textra = defaultExtra || ( margin === true || value === true ? \"margin\" : \"border\" );

\t\t\treturn access( this, function( elem, type, value ) {
\t\t\t\tvar doc;

\t\t\t\tif ( jQuery.isWindow( elem ) ) {
\t\t\t\t\t// As of 5/8/2012 this will yield incorrect results for Mobile Safari, but there
\t\t\t\t\t// isn't a whole lot we can do. See pull request at this URL for discussion:
\t\t\t\t\t// https://github.com/jquery/jquery/pull/764
\t\t\t\t\treturn elem.document.documentElement[ \"client\" + name ];
\t\t\t\t}

\t\t\t\t// Get document width or height
\t\t\t\tif ( elem.nodeType === 9 ) {
\t\t\t\t\tdoc = elem.documentElement;

\t\t\t\t\t// Either scroll[Width/Height] or offset[Width/Height] or client[Width/Height],
\t\t\t\t\t// whichever is greatest
\t\t\t\t\treturn Math.max(
\t\t\t\t\t\telem.body[ \"scroll\" + name ], doc[ \"scroll\" + name ],
\t\t\t\t\t\telem.body[ \"offset\" + name ], doc[ \"offset\" + name ],
\t\t\t\t\t\tdoc[ \"client\" + name ]
\t\t\t\t\t);
\t\t\t\t}

\t\t\t\treturn value === undefined ?
\t\t\t\t\t// Get width or height on the element, requesting but not forcing parseFloat
\t\t\t\t\tjQuery.css( elem, type, extra ) :

\t\t\t\t\t// Set width or height on the element
\t\t\t\t\tjQuery.style( elem, type, value, extra );
\t\t\t}, type, chainable ? margin : undefined, chainable, null );
\t\t};
\t});
});


// The number of elements contained in the matched element set
jQuery.fn.size = function() {
\treturn this.length;
};

jQuery.fn.andSelf = jQuery.fn.addBack;




// Register as a named AMD module, since jQuery can be concatenated with other
// files that may use define, but not via a proper concatenation script that
// understands anonymous AMD modules. A named AMD is safest and most robust
// way to register. Lowercase jquery is used because AMD module names are
// derived from file names, and jQuery is normally delivered in a lowercase
// file name. Do this after creating the global so that if an AMD module wants
// to call noConflict to hide this version of jQuery, it will work.

// Note that for maximum portability, libraries that are not jQuery should
// declare themselves as anonymous modules, and avoid setting a global if an
// AMD loader is present. jQuery is a special case. For more information, see
// https://github.com/jrburke/requirejs/wiki/Updating-existing-libraries#wiki-anon

if ( typeof define === \"function\" && define.amd ) {
\tdefine( \"jquery\", [], function() {
\t\treturn jQuery;
\t});
}




var
\t// Map over jQuery in case of overwrite
\t_jQuery = window.jQuery,

\t// Map over the \$ in case of overwrite
\t_\$ = window.\$;

jQuery.noConflict = function( deep ) {
\tif ( window.\$ === jQuery ) {
\t\twindow.\$ = _\$;
\t}

\tif ( deep && window.jQuery === jQuery ) {
\t\twindow.jQuery = _jQuery;
\t}

\treturn jQuery;
};

// Expose jQuery and \$ identifiers, even in AMD
// (#7102#comment:10, https://github.com/jquery/jquery/pull/557)
// and CommonJS for browser emulators (#13566)
if ( typeof noGlobal === strundefined ) {
\twindow.jQuery = window.\$ = jQuery;
}




return jQuery;

}));
";
        
        $__internal_31233a9f167c9a7bfad321c5cb102bf53186d196d8c61ccaf8546206812bbd77->leave($__internal_31233a9f167c9a7bfad321c5cb102bf53186d196d8c61ccaf8546206812bbd77_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/bower_components/jquery/dist/jquery.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*!
 * jQuery JavaScript Library v2.1.4
 * http://jquery.com/
 *
 * Includes Sizzle.js
 * http://sizzlejs.com/
 *
 * Copyright 2005, 2014 jQuery Foundation, Inc. and other contributors
 * Released under the MIT license
 * http://jquery.org/license
 *
 * Date: 2015-04-28T16:01Z
 */

(function( global, factory ) {

\tif ( typeof module === \"object\" && typeof module.exports === \"object\" ) {
\t\t// For CommonJS and CommonJS-like environments where a proper `window`
\t\t// is present, execute the factory and get jQuery.
\t\t// For environments that do not have a `window` with a `document`
\t\t// (such as Node.js), expose a factory as module.exports.
\t\t// This accentuates the need for the creation of a real `window`.
\t\t// e.g. var jQuery = require(\"jquery\")(window);
\t\t// See ticket #14549 for more info.
\t\tmodule.exports = global.document ?
\t\t\tfactory( global, true ) :
\t\t\tfunction( w ) {
\t\t\t\tif ( !w.document ) {
\t\t\t\t\tthrow new Error( \"jQuery requires a window with a document\" );
\t\t\t\t}
\t\t\t\treturn factory( w );
\t\t\t};
\t} else {
\t\tfactory( global );
\t}

// Pass this if window is not defined yet
}(typeof window !== \"undefined\" ? window : this, function( window, noGlobal ) {

// Support: Firefox 18+
// Can't be in strict mode, several libs including ASP.NET trace
// the stack via arguments.caller.callee and Firefox dies if
// you try to trace through \"use strict\" call chains. (#13335)
//

var arr = [];

var slice = arr.slice;

var concat = arr.concat;

var push = arr.push;

var indexOf = arr.indexOf;

var class2type = {};

var toString = class2type.toString;

var hasOwn = class2type.hasOwnProperty;

var support = {};



var
\t// Use the correct document accordingly with window argument (sandbox)
\tdocument = window.document,

\tversion = \"2.1.4\",

\t// Define a local copy of jQuery
\tjQuery = function( selector, context ) {
\t\t// The jQuery object is actually just the init constructor 'enhanced'
\t\t// Need init if jQuery is called (just allow error to be thrown if not included)
\t\treturn new jQuery.fn.init( selector, context );
\t},

\t// Support: Android<4.1
\t// Make sure we trim BOM and NBSP
\trtrim = /^[\\s\\uFEFF\\xA0]+|[\\s\\uFEFF\\xA0]+\$/g,

\t// Matches dashed string for camelizing
\trmsPrefix = /^-ms-/,
\trdashAlpha = /-([\\da-z])/gi,

\t// Used by jQuery.camelCase as callback to replace()
\tfcamelCase = function( all, letter ) {
\t\treturn letter.toUpperCase();
\t};

jQuery.fn = jQuery.prototype = {
\t// The current version of jQuery being used
\tjquery: version,

\tconstructor: jQuery,

\t// Start with an empty selector
\tselector: \"\",

\t// The default length of a jQuery object is 0
\tlength: 0,

\ttoArray: function() {
\t\treturn slice.call( this );
\t},

\t// Get the Nth element in the matched element set OR
\t// Get the whole matched element set as a clean array
\tget: function( num ) {
\t\treturn num != null ?

\t\t\t// Return just the one element from the set
\t\t\t( num < 0 ? this[ num + this.length ] : this[ num ] ) :

\t\t\t// Return all the elements in a clean array
\t\t\tslice.call( this );
\t},

\t// Take an array of elements and push it onto the stack
\t// (returning the new matched element set)
\tpushStack: function( elems ) {

\t\t// Build a new jQuery matched element set
\t\tvar ret = jQuery.merge( this.constructor(), elems );

\t\t// Add the old object onto the stack (as a reference)
\t\tret.prevObject = this;
\t\tret.context = this.context;

\t\t// Return the newly-formed element set
\t\treturn ret;
\t},

\t// Execute a callback for every element in the matched set.
\t// (You can seed the arguments with an array of args, but this is
\t// only used internally.)
\teach: function( callback, args ) {
\t\treturn jQuery.each( this, callback, args );
\t},

\tmap: function( callback ) {
\t\treturn this.pushStack( jQuery.map(this, function( elem, i ) {
\t\t\treturn callback.call( elem, i, elem );
\t\t}));
\t},

\tslice: function() {
\t\treturn this.pushStack( slice.apply( this, arguments ) );
\t},

\tfirst: function() {
\t\treturn this.eq( 0 );
\t},

\tlast: function() {
\t\treturn this.eq( -1 );
\t},

\teq: function( i ) {
\t\tvar len = this.length,
\t\t\tj = +i + ( i < 0 ? len : 0 );
\t\treturn this.pushStack( j >= 0 && j < len ? [ this[j] ] : [] );
\t},

\tend: function() {
\t\treturn this.prevObject || this.constructor(null);
\t},

\t// For internal use only.
\t// Behaves like an Array's method, not like a jQuery method.
\tpush: push,
\tsort: arr.sort,
\tsplice: arr.splice
};

jQuery.extend = jQuery.fn.extend = function() {
\tvar options, name, src, copy, copyIsArray, clone,
\t\ttarget = arguments[0] || {},
\t\ti = 1,
\t\tlength = arguments.length,
\t\tdeep = false;

\t// Handle a deep copy situation
\tif ( typeof target === \"boolean\" ) {
\t\tdeep = target;

\t\t// Skip the boolean and the target
\t\ttarget = arguments[ i ] || {};
\t\ti++;
\t}

\t// Handle case when target is a string or something (possible in deep copy)
\tif ( typeof target !== \"object\" && !jQuery.isFunction(target) ) {
\t\ttarget = {};
\t}

\t// Extend jQuery itself if only one argument is passed
\tif ( i === length ) {
\t\ttarget = this;
\t\ti--;
\t}

\tfor ( ; i < length; i++ ) {
\t\t// Only deal with non-null/undefined values
\t\tif ( (options = arguments[ i ]) != null ) {
\t\t\t// Extend the base object
\t\t\tfor ( name in options ) {
\t\t\t\tsrc = target[ name ];
\t\t\t\tcopy = options[ name ];

\t\t\t\t// Prevent never-ending loop
\t\t\t\tif ( target === copy ) {
\t\t\t\t\tcontinue;
\t\t\t\t}

\t\t\t\t// Recurse if we're merging plain objects or arrays
\t\t\t\tif ( deep && copy && ( jQuery.isPlainObject(copy) || (copyIsArray = jQuery.isArray(copy)) ) ) {
\t\t\t\t\tif ( copyIsArray ) {
\t\t\t\t\t\tcopyIsArray = false;
\t\t\t\t\t\tclone = src && jQuery.isArray(src) ? src : [];

\t\t\t\t\t} else {
\t\t\t\t\t\tclone = src && jQuery.isPlainObject(src) ? src : {};
\t\t\t\t\t}

\t\t\t\t\t// Never move original objects, clone them
\t\t\t\t\ttarget[ name ] = jQuery.extend( deep, clone, copy );

\t\t\t\t// Don't bring in undefined values
\t\t\t\t} else if ( copy !== undefined ) {
\t\t\t\t\ttarget[ name ] = copy;
\t\t\t\t}
\t\t\t}
\t\t}
\t}

\t// Return the modified object
\treturn target;
};

jQuery.extend({
\t// Unique for each copy of jQuery on the page
\texpando: \"jQuery\" + ( version + Math.random() ).replace( /\\D/g, \"\" ),

\t// Assume jQuery is ready without the ready module
\tisReady: true,

\terror: function( msg ) {
\t\tthrow new Error( msg );
\t},

\tnoop: function() {},

\tisFunction: function( obj ) {
\t\treturn jQuery.type(obj) === \"function\";
\t},

\tisArray: Array.isArray,

\tisWindow: function( obj ) {
\t\treturn obj != null && obj === obj.window;
\t},

\tisNumeric: function( obj ) {
\t\t// parseFloat NaNs numeric-cast false positives (null|true|false|\"\")
\t\t// ...but misinterprets leading-number strings, particularly hex literals (\"0x...\")
\t\t// subtraction forces infinities to NaN
\t\t// adding 1 corrects loss of precision from parseFloat (#15100)
\t\treturn !jQuery.isArray( obj ) && (obj - parseFloat( obj ) + 1) >= 0;
\t},

\tisPlainObject: function( obj ) {
\t\t// Not plain objects:
\t\t// - Any object or value whose internal [[Class]] property is not \"[object Object]\"
\t\t// - DOM nodes
\t\t// - window
\t\tif ( jQuery.type( obj ) !== \"object\" || obj.nodeType || jQuery.isWindow( obj ) ) {
\t\t\treturn false;
\t\t}

\t\tif ( obj.constructor &&
\t\t\t\t!hasOwn.call( obj.constructor.prototype, \"isPrototypeOf\" ) ) {
\t\t\treturn false;
\t\t}

\t\t// If the function hasn't returned already, we're confident that
\t\t// |obj| is a plain object, created by {} or constructed with new Object
\t\treturn true;
\t},

\tisEmptyObject: function( obj ) {
\t\tvar name;
\t\tfor ( name in obj ) {
\t\t\treturn false;
\t\t}
\t\treturn true;
\t},

\ttype: function( obj ) {
\t\tif ( obj == null ) {
\t\t\treturn obj + \"\";
\t\t}
\t\t// Support: Android<4.0, iOS<6 (functionish RegExp)
\t\treturn typeof obj === \"object\" || typeof obj === \"function\" ?
\t\t\tclass2type[ toString.call(obj) ] || \"object\" :
\t\t\ttypeof obj;
\t},

\t// Evaluates a script in a global context
\tglobalEval: function( code ) {
\t\tvar script,
\t\t\tindirect = eval;

\t\tcode = jQuery.trim( code );

\t\tif ( code ) {
\t\t\t// If the code includes a valid, prologue position
\t\t\t// strict mode pragma, execute code by injecting a
\t\t\t// script tag into the document.
\t\t\tif ( code.indexOf(\"use strict\") === 1 ) {
\t\t\t\tscript = document.createElement(\"script\");
\t\t\t\tscript.text = code;
\t\t\t\tdocument.head.appendChild( script ).parentNode.removeChild( script );
\t\t\t} else {
\t\t\t// Otherwise, avoid the DOM node creation, insertion
\t\t\t// and removal by using an indirect global eval
\t\t\t\tindirect( code );
\t\t\t}
\t\t}
\t},

\t// Convert dashed to camelCase; used by the css and data modules
\t// Support: IE9-11+
\t// Microsoft forgot to hump their vendor prefix (#9572)
\tcamelCase: function( string ) {
\t\treturn string.replace( rmsPrefix, \"ms-\" ).replace( rdashAlpha, fcamelCase );
\t},

\tnodeName: function( elem, name ) {
\t\treturn elem.nodeName && elem.nodeName.toLowerCase() === name.toLowerCase();
\t},

\t// args is for internal usage only
\teach: function( obj, callback, args ) {
\t\tvar value,
\t\t\ti = 0,
\t\t\tlength = obj.length,
\t\t\tisArray = isArraylike( obj );

\t\tif ( args ) {
\t\t\tif ( isArray ) {
\t\t\t\tfor ( ; i < length; i++ ) {
\t\t\t\t\tvalue = callback.apply( obj[ i ], args );

\t\t\t\t\tif ( value === false ) {
\t\t\t\t\t\tbreak;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t} else {
\t\t\t\tfor ( i in obj ) {
\t\t\t\t\tvalue = callback.apply( obj[ i ], args );

\t\t\t\t\tif ( value === false ) {
\t\t\t\t\t\tbreak;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t\t// A special, fast, case for the most common use of each
\t\t} else {
\t\t\tif ( isArray ) {
\t\t\t\tfor ( ; i < length; i++ ) {
\t\t\t\t\tvalue = callback.call( obj[ i ], i, obj[ i ] );

\t\t\t\t\tif ( value === false ) {
\t\t\t\t\t\tbreak;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t} else {
\t\t\t\tfor ( i in obj ) {
\t\t\t\t\tvalue = callback.call( obj[ i ], i, obj[ i ] );

\t\t\t\t\tif ( value === false ) {
\t\t\t\t\t\tbreak;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}

\t\treturn obj;
\t},

\t// Support: Android<4.1
\ttrim: function( text ) {
\t\treturn text == null ?
\t\t\t\"\" :
\t\t\t( text + \"\" ).replace( rtrim, \"\" );
\t},

\t// results is for internal usage only
\tmakeArray: function( arr, results ) {
\t\tvar ret = results || [];

\t\tif ( arr != null ) {
\t\t\tif ( isArraylike( Object(arr) ) ) {
\t\t\t\tjQuery.merge( ret,
\t\t\t\t\ttypeof arr === \"string\" ?
\t\t\t\t\t[ arr ] : arr
\t\t\t\t);
\t\t\t} else {
\t\t\t\tpush.call( ret, arr );
\t\t\t}
\t\t}

\t\treturn ret;
\t},

\tinArray: function( elem, arr, i ) {
\t\treturn arr == null ? -1 : indexOf.call( arr, elem, i );
\t},

\tmerge: function( first, second ) {
\t\tvar len = +second.length,
\t\t\tj = 0,
\t\t\ti = first.length;

\t\tfor ( ; j < len; j++ ) {
\t\t\tfirst[ i++ ] = second[ j ];
\t\t}

\t\tfirst.length = i;

\t\treturn first;
\t},

\tgrep: function( elems, callback, invert ) {
\t\tvar callbackInverse,
\t\t\tmatches = [],
\t\t\ti = 0,
\t\t\tlength = elems.length,
\t\t\tcallbackExpect = !invert;

\t\t// Go through the array, only saving the items
\t\t// that pass the validator function
\t\tfor ( ; i < length; i++ ) {
\t\t\tcallbackInverse = !callback( elems[ i ], i );
\t\t\tif ( callbackInverse !== callbackExpect ) {
\t\t\t\tmatches.push( elems[ i ] );
\t\t\t}
\t\t}

\t\treturn matches;
\t},

\t// arg is for internal usage only
\tmap: function( elems, callback, arg ) {
\t\tvar value,
\t\t\ti = 0,
\t\t\tlength = elems.length,
\t\t\tisArray = isArraylike( elems ),
\t\t\tret = [];

\t\t// Go through the array, translating each of the items to their new values
\t\tif ( isArray ) {
\t\t\tfor ( ; i < length; i++ ) {
\t\t\t\tvalue = callback( elems[ i ], i, arg );

\t\t\t\tif ( value != null ) {
\t\t\t\t\tret.push( value );
\t\t\t\t}
\t\t\t}

\t\t// Go through every key on the object,
\t\t} else {
\t\t\tfor ( i in elems ) {
\t\t\t\tvalue = callback( elems[ i ], i, arg );

\t\t\t\tif ( value != null ) {
\t\t\t\t\tret.push( value );
\t\t\t\t}
\t\t\t}
\t\t}

\t\t// Flatten any nested arrays
\t\treturn concat.apply( [], ret );
\t},

\t// A global GUID counter for objects
\tguid: 1,

\t// Bind a function to a context, optionally partially applying any
\t// arguments.
\tproxy: function( fn, context ) {
\t\tvar tmp, args, proxy;

\t\tif ( typeof context === \"string\" ) {
\t\t\ttmp = fn[ context ];
\t\t\tcontext = fn;
\t\t\tfn = tmp;
\t\t}

\t\t// Quick check to determine if target is callable, in the spec
\t\t// this throws a TypeError, but we will just return undefined.
\t\tif ( !jQuery.isFunction( fn ) ) {
\t\t\treturn undefined;
\t\t}

\t\t// Simulated bind
\t\targs = slice.call( arguments, 2 );
\t\tproxy = function() {
\t\t\treturn fn.apply( context || this, args.concat( slice.call( arguments ) ) );
\t\t};

\t\t// Set the guid of unique handler to the same of original handler, so it can be removed
\t\tproxy.guid = fn.guid = fn.guid || jQuery.guid++;

\t\treturn proxy;
\t},

\tnow: Date.now,

\t// jQuery.support is not used in Core but other projects attach their
\t// properties to it so it needs to exist.
\tsupport: support
});

// Populate the class2type map
jQuery.each(\"Boolean Number String Function Array Date RegExp Object Error\".split(\" \"), function(i, name) {
\tclass2type[ \"[object \" + name + \"]\" ] = name.toLowerCase();
});

function isArraylike( obj ) {

\t// Support: iOS 8.2 (not reproducible in simulator)
\t// `in` check used to prevent JIT error (gh-2145)
\t// hasOwn isn't used here due to false negatives
\t// regarding Nodelist length in IE
\tvar length = \"length\" in obj && obj.length,
\t\ttype = jQuery.type( obj );

\tif ( type === \"function\" || jQuery.isWindow( obj ) ) {
\t\treturn false;
\t}

\tif ( obj.nodeType === 1 && length ) {
\t\treturn true;
\t}

\treturn type === \"array\" || length === 0 ||
\t\ttypeof length === \"number\" && length > 0 && ( length - 1 ) in obj;
}
var Sizzle =
/*!
 * Sizzle CSS Selector Engine v2.2.0-pre
 * http://sizzlejs.com/
 *
 * Copyright 2008, 2014 jQuery Foundation, Inc. and other contributors
 * Released under the MIT license
 * http://jquery.org/license
 *
 * Date: 2014-12-16
 */
(function( window ) {

var i,
\tsupport,
\tExpr,
\tgetText,
\tisXML,
\ttokenize,
\tcompile,
\tselect,
\toutermostContext,
\tsortInput,
\thasDuplicate,

\t// Local document vars
\tsetDocument,
\tdocument,
\tdocElem,
\tdocumentIsHTML,
\trbuggyQSA,
\trbuggyMatches,
\tmatches,
\tcontains,

\t// Instance-specific data
\texpando = \"sizzle\" + 1 * new Date(),
\tpreferredDoc = window.document,
\tdirruns = 0,
\tdone = 0,
\tclassCache = createCache(),
\ttokenCache = createCache(),
\tcompilerCache = createCache(),
\tsortOrder = function( a, b ) {
\t\tif ( a === b ) {
\t\t\thasDuplicate = true;
\t\t}
\t\treturn 0;
\t},

\t// General-purpose constants
\tMAX_NEGATIVE = 1 << 31,

\t// Instance methods
\thasOwn = ({}).hasOwnProperty,
\tarr = [],
\tpop = arr.pop,
\tpush_native = arr.push,
\tpush = arr.push,
\tslice = arr.slice,
\t// Use a stripped-down indexOf as it's faster than native
\t// http://jsperf.com/thor-indexof-vs-for/5
\tindexOf = function( list, elem ) {
\t\tvar i = 0,
\t\t\tlen = list.length;
\t\tfor ( ; i < len; i++ ) {
\t\t\tif ( list[i] === elem ) {
\t\t\t\treturn i;
\t\t\t}
\t\t}
\t\treturn -1;
\t},

\tbooleans = \"checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|ismap|loop|multiple|open|readonly|required|scoped\",

\t// Regular expressions

\t// Whitespace characters http://www.w3.org/TR/css3-selectors/#whitespace
\twhitespace = \"[\\\\x20\\\\t\\\\r\\\\n\\\\f]\",
\t// http://www.w3.org/TR/css3-syntax/#characters
\tcharacterEncoding = \"(?:\\\\\\\\.|[\\\\w-]|[^\\\\x00-\\\\xa0])+\",

\t// Loosely modeled on CSS identifier characters
\t// An unquoted value should be a CSS identifier http://www.w3.org/TR/css3-selectors/#attribute-selectors
\t// Proper syntax: http://www.w3.org/TR/CSS21/syndata.html#value-def-identifier
\tidentifier = characterEncoding.replace( \"w\", \"w#\" ),

\t// Attribute selectors: http://www.w3.org/TR/selectors/#attribute-selectors
\tattributes = \"\\\\[\" + whitespace + \"*(\" + characterEncoding + \")(?:\" + whitespace +
\t\t// Operator (capture 2)
\t\t\"*([*^\$|!~]?=)\" + whitespace +
\t\t// \"Attribute values must be CSS identifiers [capture 5] or strings [capture 3 or capture 4]\"
\t\t\"*(?:'((?:\\\\\\\\.|[^\\\\\\\\'])*)'|\\\"((?:\\\\\\\\.|[^\\\\\\\\\\\"])*)\\\"|(\" + identifier + \"))|)\" + whitespace +
\t\t\"*\\\\]\",

\tpseudos = \":(\" + characterEncoding + \")(?:\\\\((\" +
\t\t// To reduce the number of selectors needing tokenize in the preFilter, prefer arguments:
\t\t// 1. quoted (capture 3; capture 4 or capture 5)
\t\t\"('((?:\\\\\\\\.|[^\\\\\\\\'])*)'|\\\"((?:\\\\\\\\.|[^\\\\\\\\\\\"])*)\\\")|\" +
\t\t// 2. simple (capture 6)
\t\t\"((?:\\\\\\\\.|[^\\\\\\\\()[\\\\]]|\" + attributes + \")*)|\" +
\t\t// 3. anything else (capture 2)
\t\t\".*\" +
\t\t\")\\\\)|)\",

\t// Leading and non-escaped trailing whitespace, capturing some non-whitespace characters preceding the latter
\trwhitespace = new RegExp( whitespace + \"+\", \"g\" ),
\trtrim = new RegExp( \"^\" + whitespace + \"+|((?:^|[^\\\\\\\\])(?:\\\\\\\\.)*)\" + whitespace + \"+\$\", \"g\" ),

\trcomma = new RegExp( \"^\" + whitespace + \"*,\" + whitespace + \"*\" ),
\trcombinators = new RegExp( \"^\" + whitespace + \"*([>+~]|\" + whitespace + \")\" + whitespace + \"*\" ),

\trattributeQuotes = new RegExp( \"=\" + whitespace + \"*([^\\\\]'\\\"]*?)\" + whitespace + \"*\\\\]\", \"g\" ),

\trpseudo = new RegExp( pseudos ),
\tridentifier = new RegExp( \"^\" + identifier + \"\$\" ),

\tmatchExpr = {
\t\t\"ID\": new RegExp( \"^#(\" + characterEncoding + \")\" ),
\t\t\"CLASS\": new RegExp( \"^\\\\.(\" + characterEncoding + \")\" ),
\t\t\"TAG\": new RegExp( \"^(\" + characterEncoding.replace( \"w\", \"w*\" ) + \")\" ),
\t\t\"ATTR\": new RegExp( \"^\" + attributes ),
\t\t\"PSEUDO\": new RegExp( \"^\" + pseudos ),
\t\t\"CHILD\": new RegExp( \"^:(only|first|last|nth|nth-last)-(child|of-type)(?:\\\\(\" + whitespace +
\t\t\t\"*(even|odd|(([+-]|)(\\\\d*)n|)\" + whitespace + \"*(?:([+-]|)\" + whitespace +
\t\t\t\"*(\\\\d+)|))\" + whitespace + \"*\\\\)|)\", \"i\" ),
\t\t\"bool\": new RegExp( \"^(?:\" + booleans + \")\$\", \"i\" ),
\t\t// For use in libraries implementing .is()
\t\t// We use this for POS matching in `select`
\t\t\"needsContext\": new RegExp( \"^\" + whitespace + \"*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\\\\(\" +
\t\t\twhitespace + \"*((?:-\\\\d)?\\\\d*)\" + whitespace + \"*\\\\)|)(?=[^-]|\$)\", \"i\" )
\t},

\trinputs = /^(?:input|select|textarea|button)\$/i,
\trheader = /^h\\d\$/i,

\trnative = /^[^{]+\\{\\s*\\[native \\w/,

\t// Easily-parseable/retrievable ID or TAG or CLASS selectors
\trquickExpr = /^(?:#([\\w-]+)|(\\w+)|\\.([\\w-]+))\$/,

\trsibling = /[+~]/,
\trescape = /'|\\\\/g,

\t// CSS escapes http://www.w3.org/TR/CSS21/syndata.html#escaped-characters
\trunescape = new RegExp( \"\\\\\\\\([\\\\da-f]{1,6}\" + whitespace + \"?|(\" + whitespace + \")|.)\", \"ig\" ),
\tfunescape = function( _, escaped, escapedWhitespace ) {
\t\tvar high = \"0x\" + escaped - 0x10000;
\t\t// NaN means non-codepoint
\t\t// Support: Firefox<24
\t\t// Workaround erroneous numeric interpretation of +\"0x\"
\t\treturn high !== high || escapedWhitespace ?
\t\t\tescaped :
\t\t\thigh < 0 ?
\t\t\t\t// BMP codepoint
\t\t\t\tString.fromCharCode( high + 0x10000 ) :
\t\t\t\t// Supplemental Plane codepoint (surrogate pair)
\t\t\t\tString.fromCharCode( high >> 10 | 0xD800, high & 0x3FF | 0xDC00 );
\t},

\t// Used for iframes
\t// See setDocument()
\t// Removing the function wrapper causes a \"Permission Denied\"
\t// error in IE
\tunloadHandler = function() {
\t\tsetDocument();
\t};

// Optimize for push.apply( _, NodeList )
try {
\tpush.apply(
\t\t(arr = slice.call( preferredDoc.childNodes )),
\t\tpreferredDoc.childNodes
\t);
\t// Support: Android<4.0
\t// Detect silently failing push.apply
\tarr[ preferredDoc.childNodes.length ].nodeType;
} catch ( e ) {
\tpush = { apply: arr.length ?

\t\t// Leverage slice if possible
\t\tfunction( target, els ) {
\t\t\tpush_native.apply( target, slice.call(els) );
\t\t} :

\t\t// Support: IE<9
\t\t// Otherwise append directly
\t\tfunction( target, els ) {
\t\t\tvar j = target.length,
\t\t\t\ti = 0;
\t\t\t// Can't trust NodeList.length
\t\t\twhile ( (target[j++] = els[i++]) ) {}
\t\t\ttarget.length = j - 1;
\t\t}
\t};
}

function Sizzle( selector, context, results, seed ) {
\tvar match, elem, m, nodeType,
\t\t// QSA vars
\t\ti, groups, old, nid, newContext, newSelector;

\tif ( ( context ? context.ownerDocument || context : preferredDoc ) !== document ) {
\t\tsetDocument( context );
\t}

\tcontext = context || document;
\tresults = results || [];
\tnodeType = context.nodeType;

\tif ( typeof selector !== \"string\" || !selector ||
\t\tnodeType !== 1 && nodeType !== 9 && nodeType !== 11 ) {

\t\treturn results;
\t}

\tif ( !seed && documentIsHTML ) {

\t\t// Try to shortcut find operations when possible (e.g., not under DocumentFragment)
\t\tif ( nodeType !== 11 && (match = rquickExpr.exec( selector )) ) {
\t\t\t// Speed-up: Sizzle(\"#ID\")
\t\t\tif ( (m = match[1]) ) {
\t\t\t\tif ( nodeType === 9 ) {
\t\t\t\t\telem = context.getElementById( m );
\t\t\t\t\t// Check parentNode to catch when Blackberry 4.6 returns
\t\t\t\t\t// nodes that are no longer in the document (jQuery #6963)
\t\t\t\t\tif ( elem && elem.parentNode ) {
\t\t\t\t\t\t// Handle the case where IE, Opera, and Webkit return items
\t\t\t\t\t\t// by name instead of ID
\t\t\t\t\t\tif ( elem.id === m ) {
\t\t\t\t\t\t\tresults.push( elem );
\t\t\t\t\t\t\treturn results;
\t\t\t\t\t\t}
\t\t\t\t\t} else {
\t\t\t\t\t\treturn results;
\t\t\t\t\t}
\t\t\t\t} else {
\t\t\t\t\t// Context is not a document
\t\t\t\t\tif ( context.ownerDocument && (elem = context.ownerDocument.getElementById( m )) &&
\t\t\t\t\t\tcontains( context, elem ) && elem.id === m ) {
\t\t\t\t\t\tresults.push( elem );
\t\t\t\t\t\treturn results;
\t\t\t\t\t}
\t\t\t\t}

\t\t\t// Speed-up: Sizzle(\"TAG\")
\t\t\t} else if ( match[2] ) {
\t\t\t\tpush.apply( results, context.getElementsByTagName( selector ) );
\t\t\t\treturn results;

\t\t\t// Speed-up: Sizzle(\".CLASS\")
\t\t\t} else if ( (m = match[3]) && support.getElementsByClassName ) {
\t\t\t\tpush.apply( results, context.getElementsByClassName( m ) );
\t\t\t\treturn results;
\t\t\t}
\t\t}

\t\t// QSA path
\t\tif ( support.qsa && (!rbuggyQSA || !rbuggyQSA.test( selector )) ) {
\t\t\tnid = old = expando;
\t\t\tnewContext = context;
\t\t\tnewSelector = nodeType !== 1 && selector;

\t\t\t// qSA works strangely on Element-rooted queries
\t\t\t// We can work around this by specifying an extra ID on the root
\t\t\t// and working up from there (Thanks to Andrew Dupont for the technique)
\t\t\t// IE 8 doesn't work on object elements
\t\t\tif ( nodeType === 1 && context.nodeName.toLowerCase() !== \"object\" ) {
\t\t\t\tgroups = tokenize( selector );

\t\t\t\tif ( (old = context.getAttribute(\"id\")) ) {
\t\t\t\t\tnid = old.replace( rescape, \"\\\\\$&\" );
\t\t\t\t} else {
\t\t\t\t\tcontext.setAttribute( \"id\", nid );
\t\t\t\t}
\t\t\t\tnid = \"[id='\" + nid + \"'] \";

\t\t\t\ti = groups.length;
\t\t\t\twhile ( i-- ) {
\t\t\t\t\tgroups[i] = nid + toSelector( groups[i] );
\t\t\t\t}
\t\t\t\tnewContext = rsibling.test( selector ) && testContext( context.parentNode ) || context;
\t\t\t\tnewSelector = groups.join(\",\");
\t\t\t}

\t\t\tif ( newSelector ) {
\t\t\t\ttry {
\t\t\t\t\tpush.apply( results,
\t\t\t\t\t\tnewContext.querySelectorAll( newSelector )
\t\t\t\t\t);
\t\t\t\t\treturn results;
\t\t\t\t} catch(qsaError) {
\t\t\t\t} finally {
\t\t\t\t\tif ( !old ) {
\t\t\t\t\t\tcontext.removeAttribute(\"id\");
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}
\t}

\t// All others
\treturn select( selector.replace( rtrim, \"\$1\" ), context, results, seed );
}

/**
 * Create key-value caches of limited size
 * @returns {Function(string, Object)} Returns the Object data after storing it on itself with
 *\tproperty name the (space-suffixed) string and (if the cache is larger than Expr.cacheLength)
 *\tdeleting the oldest entry
 */
function createCache() {
\tvar keys = [];

\tfunction cache( key, value ) {
\t\t// Use (key + \" \") to avoid collision with native prototype properties (see Issue #157)
\t\tif ( keys.push( key + \" \" ) > Expr.cacheLength ) {
\t\t\t// Only keep the most recent entries
\t\t\tdelete cache[ keys.shift() ];
\t\t}
\t\treturn (cache[ key + \" \" ] = value);
\t}
\treturn cache;
}

/**
 * Mark a function for special use by Sizzle
 * @param {Function} fn The function to mark
 */
function markFunction( fn ) {
\tfn[ expando ] = true;
\treturn fn;
}

/**
 * Support testing using an element
 * @param {Function} fn Passed the created div and expects a boolean result
 */
function assert( fn ) {
\tvar div = document.createElement(\"div\");

\ttry {
\t\treturn !!fn( div );
\t} catch (e) {
\t\treturn false;
\t} finally {
\t\t// Remove from its parent by default
\t\tif ( div.parentNode ) {
\t\t\tdiv.parentNode.removeChild( div );
\t\t}
\t\t// release memory in IE
\t\tdiv = null;
\t}
}

/**
 * Adds the same handler for all of the specified attrs
 * @param {String} attrs Pipe-separated list of attributes
 * @param {Function} handler The method that will be applied
 */
function addHandle( attrs, handler ) {
\tvar arr = attrs.split(\"|\"),
\t\ti = attrs.length;

\twhile ( i-- ) {
\t\tExpr.attrHandle[ arr[i] ] = handler;
\t}
}

/**
 * Checks document order of two siblings
 * @param {Element} a
 * @param {Element} b
 * @returns {Number} Returns less than 0 if a precedes b, greater than 0 if a follows b
 */
function siblingCheck( a, b ) {
\tvar cur = b && a,
\t\tdiff = cur && a.nodeType === 1 && b.nodeType === 1 &&
\t\t\t( ~b.sourceIndex || MAX_NEGATIVE ) -
\t\t\t( ~a.sourceIndex || MAX_NEGATIVE );

\t// Use IE sourceIndex if available on both nodes
\tif ( diff ) {
\t\treturn diff;
\t}

\t// Check if b follows a
\tif ( cur ) {
\t\twhile ( (cur = cur.nextSibling) ) {
\t\t\tif ( cur === b ) {
\t\t\t\treturn -1;
\t\t\t}
\t\t}
\t}

\treturn a ? 1 : -1;
}

/**
 * Returns a function to use in pseudos for input types
 * @param {String} type
 */
function createInputPseudo( type ) {
\treturn function( elem ) {
\t\tvar name = elem.nodeName.toLowerCase();
\t\treturn name === \"input\" && elem.type === type;
\t};
}

/**
 * Returns a function to use in pseudos for buttons
 * @param {String} type
 */
function createButtonPseudo( type ) {
\treturn function( elem ) {
\t\tvar name = elem.nodeName.toLowerCase();
\t\treturn (name === \"input\" || name === \"button\") && elem.type === type;
\t};
}

/**
 * Returns a function to use in pseudos for positionals
 * @param {Function} fn
 */
function createPositionalPseudo( fn ) {
\treturn markFunction(function( argument ) {
\t\targument = +argument;
\t\treturn markFunction(function( seed, matches ) {
\t\t\tvar j,
\t\t\t\tmatchIndexes = fn( [], seed.length, argument ),
\t\t\t\ti = matchIndexes.length;

\t\t\t// Match elements found at the specified indexes
\t\t\twhile ( i-- ) {
\t\t\t\tif ( seed[ (j = matchIndexes[i]) ] ) {
\t\t\t\t\tseed[j] = !(matches[j] = seed[j]);
\t\t\t\t}
\t\t\t}
\t\t});
\t});
}

/**
 * Checks a node for validity as a Sizzle context
 * @param {Element|Object=} context
 * @returns {Element|Object|Boolean} The input node if acceptable, otherwise a falsy value
 */
function testContext( context ) {
\treturn context && typeof context.getElementsByTagName !== \"undefined\" && context;
}

// Expose support vars for convenience
support = Sizzle.support = {};

/**
 * Detects XML nodes
 * @param {Element|Object} elem An element or a document
 * @returns {Boolean} True iff elem is a non-HTML XML node
 */
isXML = Sizzle.isXML = function( elem ) {
\t// documentElement is verified for cases where it doesn't yet exist
\t// (such as loading iframes in IE - #4833)
\tvar documentElement = elem && (elem.ownerDocument || elem).documentElement;
\treturn documentElement ? documentElement.nodeName !== \"HTML\" : false;
};

/**
 * Sets document-related variables once based on the current document
 * @param {Element|Object} [doc] An element or document object to use to set the document
 * @returns {Object} Returns the current document
 */
setDocument = Sizzle.setDocument = function( node ) {
\tvar hasCompare, parent,
\t\tdoc = node ? node.ownerDocument || node : preferredDoc;

\t// If no document and documentElement is available, return
\tif ( doc === document || doc.nodeType !== 9 || !doc.documentElement ) {
\t\treturn document;
\t}

\t// Set our document
\tdocument = doc;
\tdocElem = doc.documentElement;
\tparent = doc.defaultView;

\t// Support: IE>8
\t// If iframe document is assigned to \"document\" variable and if iframe has been reloaded,
\t// IE will throw \"permission denied\" error when accessing \"document\" variable, see jQuery #13936
\t// IE6-8 do not support the defaultView property so parent will be undefined
\tif ( parent && parent !== parent.top ) {
\t\t// IE11 does not have attachEvent, so all must suffer
\t\tif ( parent.addEventListener ) {
\t\t\tparent.addEventListener( \"unload\", unloadHandler, false );
\t\t} else if ( parent.attachEvent ) {
\t\t\tparent.attachEvent( \"onunload\", unloadHandler );
\t\t}
\t}

\t/* Support tests
\t---------------------------------------------------------------------- */
\tdocumentIsHTML = !isXML( doc );

\t/* Attributes
\t---------------------------------------------------------------------- */

\t// Support: IE<8
\t// Verify that getAttribute really returns attributes and not properties
\t// (excepting IE8 booleans)
\tsupport.attributes = assert(function( div ) {
\t\tdiv.className = \"i\";
\t\treturn !div.getAttribute(\"className\");
\t});

\t/* getElement(s)By*
\t---------------------------------------------------------------------- */

\t// Check if getElementsByTagName(\"*\") returns only elements
\tsupport.getElementsByTagName = assert(function( div ) {
\t\tdiv.appendChild( doc.createComment(\"\") );
\t\treturn !div.getElementsByTagName(\"*\").length;
\t});

\t// Support: IE<9
\tsupport.getElementsByClassName = rnative.test( doc.getElementsByClassName );

\t// Support: IE<10
\t// Check if getElementById returns elements by name
\t// The broken getElementById methods don't pick up programatically-set names,
\t// so use a roundabout getElementsByName test
\tsupport.getById = assert(function( div ) {
\t\tdocElem.appendChild( div ).id = expando;
\t\treturn !doc.getElementsByName || !doc.getElementsByName( expando ).length;
\t});

\t// ID find and filter
\tif ( support.getById ) {
\t\tExpr.find[\"ID\"] = function( id, context ) {
\t\t\tif ( typeof context.getElementById !== \"undefined\" && documentIsHTML ) {
\t\t\t\tvar m = context.getElementById( id );
\t\t\t\t// Check parentNode to catch when Blackberry 4.6 returns
\t\t\t\t// nodes that are no longer in the document #6963
\t\t\t\treturn m && m.parentNode ? [ m ] : [];
\t\t\t}
\t\t};
\t\tExpr.filter[\"ID\"] = function( id ) {
\t\t\tvar attrId = id.replace( runescape, funescape );
\t\t\treturn function( elem ) {
\t\t\t\treturn elem.getAttribute(\"id\") === attrId;
\t\t\t};
\t\t};
\t} else {
\t\t// Support: IE6/7
\t\t// getElementById is not reliable as a find shortcut
\t\tdelete Expr.find[\"ID\"];

\t\tExpr.filter[\"ID\"] =  function( id ) {
\t\t\tvar attrId = id.replace( runescape, funescape );
\t\t\treturn function( elem ) {
\t\t\t\tvar node = typeof elem.getAttributeNode !== \"undefined\" && elem.getAttributeNode(\"id\");
\t\t\t\treturn node && node.value === attrId;
\t\t\t};
\t\t};
\t}

\t// Tag
\tExpr.find[\"TAG\"] = support.getElementsByTagName ?
\t\tfunction( tag, context ) {
\t\t\tif ( typeof context.getElementsByTagName !== \"undefined\" ) {
\t\t\t\treturn context.getElementsByTagName( tag );

\t\t\t// DocumentFragment nodes don't have gEBTN
\t\t\t} else if ( support.qsa ) {
\t\t\t\treturn context.querySelectorAll( tag );
\t\t\t}
\t\t} :

\t\tfunction( tag, context ) {
\t\t\tvar elem,
\t\t\t\ttmp = [],
\t\t\t\ti = 0,
\t\t\t\t// By happy coincidence, a (broken) gEBTN appears on DocumentFragment nodes too
\t\t\t\tresults = context.getElementsByTagName( tag );

\t\t\t// Filter out possible comments
\t\t\tif ( tag === \"*\" ) {
\t\t\t\twhile ( (elem = results[i++]) ) {
\t\t\t\t\tif ( elem.nodeType === 1 ) {
\t\t\t\t\t\ttmp.push( elem );
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\treturn tmp;
\t\t\t}
\t\t\treturn results;
\t\t};

\t// Class
\tExpr.find[\"CLASS\"] = support.getElementsByClassName && function( className, context ) {
\t\tif ( documentIsHTML ) {
\t\t\treturn context.getElementsByClassName( className );
\t\t}
\t};

\t/* QSA/matchesSelector
\t---------------------------------------------------------------------- */

\t// QSA and matchesSelector support

\t// matchesSelector(:active) reports false when true (IE9/Opera 11.5)
\trbuggyMatches = [];

\t// qSa(:focus) reports false when true (Chrome 21)
\t// We allow this because of a bug in IE8/9 that throws an error
\t// whenever `document.activeElement` is accessed on an iframe
\t// So, we allow :focus to pass through QSA all the time to avoid the IE error
\t// See http://bugs.jquery.com/ticket/13378
\trbuggyQSA = [];

\tif ( (support.qsa = rnative.test( doc.querySelectorAll )) ) {
\t\t// Build QSA regex
\t\t// Regex strategy adopted from Diego Perini
\t\tassert(function( div ) {
\t\t\t// Select is set to empty string on purpose
\t\t\t// This is to test IE's treatment of not explicitly
\t\t\t// setting a boolean content attribute,
\t\t\t// since its presence should be enough
\t\t\t// http://bugs.jquery.com/ticket/12359
\t\t\tdocElem.appendChild( div ).innerHTML = \"<a id='\" + expando + \"'></a>\" +
\t\t\t\t\"<select id='\" + expando + \"-\\f]' msallowcapture=''>\" +
\t\t\t\t\"<option selected=''></option></select>\";

\t\t\t// Support: IE8, Opera 11-12.16
\t\t\t// Nothing should be selected when empty strings follow ^= or \$= or *=
\t\t\t// The test attribute must be unknown in Opera but \"safe\" for WinRT
\t\t\t// http://msdn.microsoft.com/en-us/library/ie/hh465388.aspx#attribute_section
\t\t\tif ( div.querySelectorAll(\"[msallowcapture^='']\").length ) {
\t\t\t\trbuggyQSA.push( \"[*^\$]=\" + whitespace + \"*(?:''|\\\"\\\")\" );
\t\t\t}

\t\t\t// Support: IE8
\t\t\t// Boolean attributes and \"value\" are not treated correctly
\t\t\tif ( !div.querySelectorAll(\"[selected]\").length ) {
\t\t\t\trbuggyQSA.push( \"\\\\[\" + whitespace + \"*(?:value|\" + booleans + \")\" );
\t\t\t}

\t\t\t// Support: Chrome<29, Android<4.2+, Safari<7.0+, iOS<7.0+, PhantomJS<1.9.7+
\t\t\tif ( !div.querySelectorAll( \"[id~=\" + expando + \"-]\" ).length ) {
\t\t\t\trbuggyQSA.push(\"~=\");
\t\t\t}

\t\t\t// Webkit/Opera - :checked should return selected option elements
\t\t\t// http://www.w3.org/TR/2011/REC-css3-selectors-20110929/#checked
\t\t\t// IE8 throws error here and will not see later tests
\t\t\tif ( !div.querySelectorAll(\":checked\").length ) {
\t\t\t\trbuggyQSA.push(\":checked\");
\t\t\t}

\t\t\t// Support: Safari 8+, iOS 8+
\t\t\t// https://bugs.webkit.org/show_bug.cgi?id=136851
\t\t\t// In-page `selector#id sibing-combinator selector` fails
\t\t\tif ( !div.querySelectorAll( \"a#\" + expando + \"+*\" ).length ) {
\t\t\t\trbuggyQSA.push(\".#.+[+~]\");
\t\t\t}
\t\t});

\t\tassert(function( div ) {
\t\t\t// Support: Windows 8 Native Apps
\t\t\t// The type and name attributes are restricted during .innerHTML assignment
\t\t\tvar input = doc.createElement(\"input\");
\t\t\tinput.setAttribute( \"type\", \"hidden\" );
\t\t\tdiv.appendChild( input ).setAttribute( \"name\", \"D\" );

\t\t\t// Support: IE8
\t\t\t// Enforce case-sensitivity of name attribute
\t\t\tif ( div.querySelectorAll(\"[name=d]\").length ) {
\t\t\t\trbuggyQSA.push( \"name\" + whitespace + \"*[*^\$|!~]?=\" );
\t\t\t}

\t\t\t// FF 3.5 - :enabled/:disabled and hidden elements (hidden elements are still enabled)
\t\t\t// IE8 throws error here and will not see later tests
\t\t\tif ( !div.querySelectorAll(\":enabled\").length ) {
\t\t\t\trbuggyQSA.push( \":enabled\", \":disabled\" );
\t\t\t}

\t\t\t// Opera 10-11 does not throw on post-comma invalid pseudos
\t\t\tdiv.querySelectorAll(\"*,:x\");
\t\t\trbuggyQSA.push(\",.*:\");
\t\t});
\t}

\tif ( (support.matchesSelector = rnative.test( (matches = docElem.matches ||
\t\tdocElem.webkitMatchesSelector ||
\t\tdocElem.mozMatchesSelector ||
\t\tdocElem.oMatchesSelector ||
\t\tdocElem.msMatchesSelector) )) ) {

\t\tassert(function( div ) {
\t\t\t// Check to see if it's possible to do matchesSelector
\t\t\t// on a disconnected node (IE 9)
\t\t\tsupport.disconnectedMatch = matches.call( div, \"div\" );

\t\t\t// This should fail with an exception
\t\t\t// Gecko does not error, returns false instead
\t\t\tmatches.call( div, \"[s!='']:x\" );
\t\t\trbuggyMatches.push( \"!=\", pseudos );
\t\t});
\t}

\trbuggyQSA = rbuggyQSA.length && new RegExp( rbuggyQSA.join(\"|\") );
\trbuggyMatches = rbuggyMatches.length && new RegExp( rbuggyMatches.join(\"|\") );

\t/* Contains
\t---------------------------------------------------------------------- */
\thasCompare = rnative.test( docElem.compareDocumentPosition );

\t// Element contains another
\t// Purposefully does not implement inclusive descendent
\t// As in, an element does not contain itself
\tcontains = hasCompare || rnative.test( docElem.contains ) ?
\t\tfunction( a, b ) {
\t\t\tvar adown = a.nodeType === 9 ? a.documentElement : a,
\t\t\t\tbup = b && b.parentNode;
\t\t\treturn a === bup || !!( bup && bup.nodeType === 1 && (
\t\t\t\tadown.contains ?
\t\t\t\t\tadown.contains( bup ) :
\t\t\t\t\ta.compareDocumentPosition && a.compareDocumentPosition( bup ) & 16
\t\t\t));
\t\t} :
\t\tfunction( a, b ) {
\t\t\tif ( b ) {
\t\t\t\twhile ( (b = b.parentNode) ) {
\t\t\t\t\tif ( b === a ) {
\t\t\t\t\t\treturn true;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t\treturn false;
\t\t};

\t/* Sorting
\t---------------------------------------------------------------------- */

\t// Document order sorting
\tsortOrder = hasCompare ?
\tfunction( a, b ) {

\t\t// Flag for duplicate removal
\t\tif ( a === b ) {
\t\t\thasDuplicate = true;
\t\t\treturn 0;
\t\t}

\t\t// Sort on method existence if only one input has compareDocumentPosition
\t\tvar compare = !a.compareDocumentPosition - !b.compareDocumentPosition;
\t\tif ( compare ) {
\t\t\treturn compare;
\t\t}

\t\t// Calculate position if both inputs belong to the same document
\t\tcompare = ( a.ownerDocument || a ) === ( b.ownerDocument || b ) ?
\t\t\ta.compareDocumentPosition( b ) :

\t\t\t// Otherwise we know they are disconnected
\t\t\t1;

\t\t// Disconnected nodes
\t\tif ( compare & 1 ||
\t\t\t(!support.sortDetached && b.compareDocumentPosition( a ) === compare) ) {

\t\t\t// Choose the first element that is related to our preferred document
\t\t\tif ( a === doc || a.ownerDocument === preferredDoc && contains(preferredDoc, a) ) {
\t\t\t\treturn -1;
\t\t\t}
\t\t\tif ( b === doc || b.ownerDocument === preferredDoc && contains(preferredDoc, b) ) {
\t\t\t\treturn 1;
\t\t\t}

\t\t\t// Maintain original order
\t\t\treturn sortInput ?
\t\t\t\t( indexOf( sortInput, a ) - indexOf( sortInput, b ) ) :
\t\t\t\t0;
\t\t}

\t\treturn compare & 4 ? -1 : 1;
\t} :
\tfunction( a, b ) {
\t\t// Exit early if the nodes are identical
\t\tif ( a === b ) {
\t\t\thasDuplicate = true;
\t\t\treturn 0;
\t\t}

\t\tvar cur,
\t\t\ti = 0,
\t\t\taup = a.parentNode,
\t\t\tbup = b.parentNode,
\t\t\tap = [ a ],
\t\t\tbp = [ b ];

\t\t// Parentless nodes are either documents or disconnected
\t\tif ( !aup || !bup ) {
\t\t\treturn a === doc ? -1 :
\t\t\t\tb === doc ? 1 :
\t\t\t\taup ? -1 :
\t\t\t\tbup ? 1 :
\t\t\t\tsortInput ?
\t\t\t\t( indexOf( sortInput, a ) - indexOf( sortInput, b ) ) :
\t\t\t\t0;

\t\t// If the nodes are siblings, we can do a quick check
\t\t} else if ( aup === bup ) {
\t\t\treturn siblingCheck( a, b );
\t\t}

\t\t// Otherwise we need full lists of their ancestors for comparison
\t\tcur = a;
\t\twhile ( (cur = cur.parentNode) ) {
\t\t\tap.unshift( cur );
\t\t}
\t\tcur = b;
\t\twhile ( (cur = cur.parentNode) ) {
\t\t\tbp.unshift( cur );
\t\t}

\t\t// Walk down the tree looking for a discrepancy
\t\twhile ( ap[i] === bp[i] ) {
\t\t\ti++;
\t\t}

\t\treturn i ?
\t\t\t// Do a sibling check if the nodes have a common ancestor
\t\t\tsiblingCheck( ap[i], bp[i] ) :

\t\t\t// Otherwise nodes in our document sort first
\t\t\tap[i] === preferredDoc ? -1 :
\t\t\tbp[i] === preferredDoc ? 1 :
\t\t\t0;
\t};

\treturn doc;
};

Sizzle.matches = function( expr, elements ) {
\treturn Sizzle( expr, null, null, elements );
};

Sizzle.matchesSelector = function( elem, expr ) {
\t// Set document vars if needed
\tif ( ( elem.ownerDocument || elem ) !== document ) {
\t\tsetDocument( elem );
\t}

\t// Make sure that attribute selectors are quoted
\texpr = expr.replace( rattributeQuotes, \"='\$1']\" );

\tif ( support.matchesSelector && documentIsHTML &&
\t\t( !rbuggyMatches || !rbuggyMatches.test( expr ) ) &&
\t\t( !rbuggyQSA     || !rbuggyQSA.test( expr ) ) ) {

\t\ttry {
\t\t\tvar ret = matches.call( elem, expr );

\t\t\t// IE 9's matchesSelector returns false on disconnected nodes
\t\t\tif ( ret || support.disconnectedMatch ||
\t\t\t\t\t// As well, disconnected nodes are said to be in a document
\t\t\t\t\t// fragment in IE 9
\t\t\t\t\telem.document && elem.document.nodeType !== 11 ) {
\t\t\t\treturn ret;
\t\t\t}
\t\t} catch (e) {}
\t}

\treturn Sizzle( expr, document, null, [ elem ] ).length > 0;
};

Sizzle.contains = function( context, elem ) {
\t// Set document vars if needed
\tif ( ( context.ownerDocument || context ) !== document ) {
\t\tsetDocument( context );
\t}
\treturn contains( context, elem );
};

Sizzle.attr = function( elem, name ) {
\t// Set document vars if needed
\tif ( ( elem.ownerDocument || elem ) !== document ) {
\t\tsetDocument( elem );
\t}

\tvar fn = Expr.attrHandle[ name.toLowerCase() ],
\t\t// Don't get fooled by Object.prototype properties (jQuery #13807)
\t\tval = fn && hasOwn.call( Expr.attrHandle, name.toLowerCase() ) ?
\t\t\tfn( elem, name, !documentIsHTML ) :
\t\t\tundefined;

\treturn val !== undefined ?
\t\tval :
\t\tsupport.attributes || !documentIsHTML ?
\t\t\telem.getAttribute( name ) :
\t\t\t(val = elem.getAttributeNode(name)) && val.specified ?
\t\t\t\tval.value :
\t\t\t\tnull;
};

Sizzle.error = function( msg ) {
\tthrow new Error( \"Syntax error, unrecognized expression: \" + msg );
};

/**
 * Document sorting and removing duplicates
 * @param {ArrayLike} results
 */
Sizzle.uniqueSort = function( results ) {
\tvar elem,
\t\tduplicates = [],
\t\tj = 0,
\t\ti = 0;

\t// Unless we *know* we can detect duplicates, assume their presence
\thasDuplicate = !support.detectDuplicates;
\tsortInput = !support.sortStable && results.slice( 0 );
\tresults.sort( sortOrder );

\tif ( hasDuplicate ) {
\t\twhile ( (elem = results[i++]) ) {
\t\t\tif ( elem === results[ i ] ) {
\t\t\t\tj = duplicates.push( i );
\t\t\t}
\t\t}
\t\twhile ( j-- ) {
\t\t\tresults.splice( duplicates[ j ], 1 );
\t\t}
\t}

\t// Clear input after sorting to release objects
\t// See https://github.com/jquery/sizzle/pull/225
\tsortInput = null;

\treturn results;
};

/**
 * Utility function for retrieving the text value of an array of DOM nodes
 * @param {Array|Element} elem
 */
getText = Sizzle.getText = function( elem ) {
\tvar node,
\t\tret = \"\",
\t\ti = 0,
\t\tnodeType = elem.nodeType;

\tif ( !nodeType ) {
\t\t// If no nodeType, this is expected to be an array
\t\twhile ( (node = elem[i++]) ) {
\t\t\t// Do not traverse comment nodes
\t\t\tret += getText( node );
\t\t}
\t} else if ( nodeType === 1 || nodeType === 9 || nodeType === 11 ) {
\t\t// Use textContent for elements
\t\t// innerText usage removed for consistency of new lines (jQuery #11153)
\t\tif ( typeof elem.textContent === \"string\" ) {
\t\t\treturn elem.textContent;
\t\t} else {
\t\t\t// Traverse its children
\t\t\tfor ( elem = elem.firstChild; elem; elem = elem.nextSibling ) {
\t\t\t\tret += getText( elem );
\t\t\t}
\t\t}
\t} else if ( nodeType === 3 || nodeType === 4 ) {
\t\treturn elem.nodeValue;
\t}
\t// Do not include comment or processing instruction nodes

\treturn ret;
};

Expr = Sizzle.selectors = {

\t// Can be adjusted by the user
\tcacheLength: 50,

\tcreatePseudo: markFunction,

\tmatch: matchExpr,

\tattrHandle: {},

\tfind: {},

\trelative: {
\t\t\">\": { dir: \"parentNode\", first: true },
\t\t\" \": { dir: \"parentNode\" },
\t\t\"+\": { dir: \"previousSibling\", first: true },
\t\t\"~\": { dir: \"previousSibling\" }
\t},

\tpreFilter: {
\t\t\"ATTR\": function( match ) {
\t\t\tmatch[1] = match[1].replace( runescape, funescape );

\t\t\t// Move the given value to match[3] whether quoted or unquoted
\t\t\tmatch[3] = ( match[3] || match[4] || match[5] || \"\" ).replace( runescape, funescape );

\t\t\tif ( match[2] === \"~=\" ) {
\t\t\t\tmatch[3] = \" \" + match[3] + \" \";
\t\t\t}

\t\t\treturn match.slice( 0, 4 );
\t\t},

\t\t\"CHILD\": function( match ) {
\t\t\t/* matches from matchExpr[\"CHILD\"]
\t\t\t\t1 type (only|nth|...)
\t\t\t\t2 what (child|of-type)
\t\t\t\t3 argument (even|odd|\\d*|\\d*n([+-]\\d+)?|...)
\t\t\t\t4 xn-component of xn+y argument ([+-]?\\d*n|)
\t\t\t\t5 sign of xn-component
\t\t\t\t6 x of xn-component
\t\t\t\t7 sign of y-component
\t\t\t\t8 y of y-component
\t\t\t*/
\t\t\tmatch[1] = match[1].toLowerCase();

\t\t\tif ( match[1].slice( 0, 3 ) === \"nth\" ) {
\t\t\t\t// nth-* requires argument
\t\t\t\tif ( !match[3] ) {
\t\t\t\t\tSizzle.error( match[0] );
\t\t\t\t}

\t\t\t\t// numeric x and y parameters for Expr.filter.CHILD
\t\t\t\t// remember that false/true cast respectively to 0/1
\t\t\t\tmatch[4] = +( match[4] ? match[5] + (match[6] || 1) : 2 * ( match[3] === \"even\" || match[3] === \"odd\" ) );
\t\t\t\tmatch[5] = +( ( match[7] + match[8] ) || match[3] === \"odd\" );

\t\t\t// other types prohibit arguments
\t\t\t} else if ( match[3] ) {
\t\t\t\tSizzle.error( match[0] );
\t\t\t}

\t\t\treturn match;
\t\t},

\t\t\"PSEUDO\": function( match ) {
\t\t\tvar excess,
\t\t\t\tunquoted = !match[6] && match[2];

\t\t\tif ( matchExpr[\"CHILD\"].test( match[0] ) ) {
\t\t\t\treturn null;
\t\t\t}

\t\t\t// Accept quoted arguments as-is
\t\t\tif ( match[3] ) {
\t\t\t\tmatch[2] = match[4] || match[5] || \"\";

\t\t\t// Strip excess characters from unquoted arguments
\t\t\t} else if ( unquoted && rpseudo.test( unquoted ) &&
\t\t\t\t// Get excess from tokenize (recursively)
\t\t\t\t(excess = tokenize( unquoted, true )) &&
\t\t\t\t// advance to the next closing parenthesis
\t\t\t\t(excess = unquoted.indexOf( \")\", unquoted.length - excess ) - unquoted.length) ) {

\t\t\t\t// excess is a negative index
\t\t\t\tmatch[0] = match[0].slice( 0, excess );
\t\t\t\tmatch[2] = unquoted.slice( 0, excess );
\t\t\t}

\t\t\t// Return only captures needed by the pseudo filter method (type and argument)
\t\t\treturn match.slice( 0, 3 );
\t\t}
\t},

\tfilter: {

\t\t\"TAG\": function( nodeNameSelector ) {
\t\t\tvar nodeName = nodeNameSelector.replace( runescape, funescape ).toLowerCase();
\t\t\treturn nodeNameSelector === \"*\" ?
\t\t\t\tfunction() { return true; } :
\t\t\t\tfunction( elem ) {
\t\t\t\t\treturn elem.nodeName && elem.nodeName.toLowerCase() === nodeName;
\t\t\t\t};
\t\t},

\t\t\"CLASS\": function( className ) {
\t\t\tvar pattern = classCache[ className + \" \" ];

\t\t\treturn pattern ||
\t\t\t\t(pattern = new RegExp( \"(^|\" + whitespace + \")\" + className + \"(\" + whitespace + \"|\$)\" )) &&
\t\t\t\tclassCache( className, function( elem ) {
\t\t\t\t\treturn pattern.test( typeof elem.className === \"string\" && elem.className || typeof elem.getAttribute !== \"undefined\" && elem.getAttribute(\"class\") || \"\" );
\t\t\t\t});
\t\t},

\t\t\"ATTR\": function( name, operator, check ) {
\t\t\treturn function( elem ) {
\t\t\t\tvar result = Sizzle.attr( elem, name );

\t\t\t\tif ( result == null ) {
\t\t\t\t\treturn operator === \"!=\";
\t\t\t\t}
\t\t\t\tif ( !operator ) {
\t\t\t\t\treturn true;
\t\t\t\t}

\t\t\t\tresult += \"\";

\t\t\t\treturn operator === \"=\" ? result === check :
\t\t\t\t\toperator === \"!=\" ? result !== check :
\t\t\t\t\toperator === \"^=\" ? check && result.indexOf( check ) === 0 :
\t\t\t\t\toperator === \"*=\" ? check && result.indexOf( check ) > -1 :
\t\t\t\t\toperator === \"\$=\" ? check && result.slice( -check.length ) === check :
\t\t\t\t\toperator === \"~=\" ? ( \" \" + result.replace( rwhitespace, \" \" ) + \" \" ).indexOf( check ) > -1 :
\t\t\t\t\toperator === \"|=\" ? result === check || result.slice( 0, check.length + 1 ) === check + \"-\" :
\t\t\t\t\tfalse;
\t\t\t};
\t\t},

\t\t\"CHILD\": function( type, what, argument, first, last ) {
\t\t\tvar simple = type.slice( 0, 3 ) !== \"nth\",
\t\t\t\tforward = type.slice( -4 ) !== \"last\",
\t\t\t\tofType = what === \"of-type\";

\t\t\treturn first === 1 && last === 0 ?

\t\t\t\t// Shortcut for :nth-*(n)
\t\t\t\tfunction( elem ) {
\t\t\t\t\treturn !!elem.parentNode;
\t\t\t\t} :

\t\t\t\tfunction( elem, context, xml ) {
\t\t\t\t\tvar cache, outerCache, node, diff, nodeIndex, start,
\t\t\t\t\t\tdir = simple !== forward ? \"nextSibling\" : \"previousSibling\",
\t\t\t\t\t\tparent = elem.parentNode,
\t\t\t\t\t\tname = ofType && elem.nodeName.toLowerCase(),
\t\t\t\t\t\tuseCache = !xml && !ofType;

\t\t\t\t\tif ( parent ) {

\t\t\t\t\t\t// :(first|last|only)-(child|of-type)
\t\t\t\t\t\tif ( simple ) {
\t\t\t\t\t\t\twhile ( dir ) {
\t\t\t\t\t\t\t\tnode = elem;
\t\t\t\t\t\t\t\twhile ( (node = node[ dir ]) ) {
\t\t\t\t\t\t\t\t\tif ( ofType ? node.nodeName.toLowerCase() === name : node.nodeType === 1 ) {
\t\t\t\t\t\t\t\t\t\treturn false;
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t// Reverse direction for :only-* (if we haven't yet done so)
\t\t\t\t\t\t\t\tstart = dir = type === \"only\" && !start && \"nextSibling\";
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t}

\t\t\t\t\t\tstart = [ forward ? parent.firstChild : parent.lastChild ];

\t\t\t\t\t\t// non-xml :nth-child(...) stores cache data on `parent`
\t\t\t\t\t\tif ( forward && useCache ) {
\t\t\t\t\t\t\t// Seek `elem` from a previously-cached index
\t\t\t\t\t\t\touterCache = parent[ expando ] || (parent[ expando ] = {});
\t\t\t\t\t\t\tcache = outerCache[ type ] || [];
\t\t\t\t\t\t\tnodeIndex = cache[0] === dirruns && cache[1];
\t\t\t\t\t\t\tdiff = cache[0] === dirruns && cache[2];
\t\t\t\t\t\t\tnode = nodeIndex && parent.childNodes[ nodeIndex ];

\t\t\t\t\t\t\twhile ( (node = ++nodeIndex && node && node[ dir ] ||

\t\t\t\t\t\t\t\t// Fallback to seeking `elem` from the start
\t\t\t\t\t\t\t\t(diff = nodeIndex = 0) || start.pop()) ) {

\t\t\t\t\t\t\t\t// When found, cache indexes on `parent` and break
\t\t\t\t\t\t\t\tif ( node.nodeType === 1 && ++diff && node === elem ) {
\t\t\t\t\t\t\t\t\touterCache[ type ] = [ dirruns, nodeIndex, diff ];
\t\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}

\t\t\t\t\t\t// Use previously-cached element index if available
\t\t\t\t\t\t} else if ( useCache && (cache = (elem[ expando ] || (elem[ expando ] = {}))[ type ]) && cache[0] === dirruns ) {
\t\t\t\t\t\t\tdiff = cache[1];

\t\t\t\t\t\t// xml :nth-child(...) or :nth-last-child(...) or :nth(-last)?-of-type(...)
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t// Use the same loop as above to seek `elem` from the start
\t\t\t\t\t\t\twhile ( (node = ++nodeIndex && node && node[ dir ] ||
\t\t\t\t\t\t\t\t(diff = nodeIndex = 0) || start.pop()) ) {

\t\t\t\t\t\t\t\tif ( ( ofType ? node.nodeName.toLowerCase() === name : node.nodeType === 1 ) && ++diff ) {
\t\t\t\t\t\t\t\t\t// Cache the index of each encountered element
\t\t\t\t\t\t\t\t\tif ( useCache ) {
\t\t\t\t\t\t\t\t\t\t(node[ expando ] || (node[ expando ] = {}))[ type ] = [ dirruns, diff ];
\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\tif ( node === elem ) {
\t\t\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}

\t\t\t\t\t\t// Incorporate the offset, then check against cycle size
\t\t\t\t\t\tdiff -= last;
\t\t\t\t\t\treturn diff === first || ( diff % first === 0 && diff / first >= 0 );
\t\t\t\t\t}
\t\t\t\t};
\t\t},

\t\t\"PSEUDO\": function( pseudo, argument ) {
\t\t\t// pseudo-class names are case-insensitive
\t\t\t// http://www.w3.org/TR/selectors/#pseudo-classes
\t\t\t// Prioritize by case sensitivity in case custom pseudos are added with uppercase letters
\t\t\t// Remember that setFilters inherits from pseudos
\t\t\tvar args,
\t\t\t\tfn = Expr.pseudos[ pseudo ] || Expr.setFilters[ pseudo.toLowerCase() ] ||
\t\t\t\t\tSizzle.error( \"unsupported pseudo: \" + pseudo );

\t\t\t// The user may use createPseudo to indicate that
\t\t\t// arguments are needed to create the filter function
\t\t\t// just as Sizzle does
\t\t\tif ( fn[ expando ] ) {
\t\t\t\treturn fn( argument );
\t\t\t}

\t\t\t// But maintain support for old signatures
\t\t\tif ( fn.length > 1 ) {
\t\t\t\targs = [ pseudo, pseudo, \"\", argument ];
\t\t\t\treturn Expr.setFilters.hasOwnProperty( pseudo.toLowerCase() ) ?
\t\t\t\t\tmarkFunction(function( seed, matches ) {
\t\t\t\t\t\tvar idx,
\t\t\t\t\t\t\tmatched = fn( seed, argument ),
\t\t\t\t\t\t\ti = matched.length;
\t\t\t\t\t\twhile ( i-- ) {
\t\t\t\t\t\t\tidx = indexOf( seed, matched[i] );
\t\t\t\t\t\t\tseed[ idx ] = !( matches[ idx ] = matched[i] );
\t\t\t\t\t\t}
\t\t\t\t\t}) :
\t\t\t\t\tfunction( elem ) {
\t\t\t\t\t\treturn fn( elem, 0, args );
\t\t\t\t\t};
\t\t\t}

\t\t\treturn fn;
\t\t}
\t},

\tpseudos: {
\t\t// Potentially complex pseudos
\t\t\"not\": markFunction(function( selector ) {
\t\t\t// Trim the selector passed to compile
\t\t\t// to avoid treating leading and trailing
\t\t\t// spaces as combinators
\t\t\tvar input = [],
\t\t\t\tresults = [],
\t\t\t\tmatcher = compile( selector.replace( rtrim, \"\$1\" ) );

\t\t\treturn matcher[ expando ] ?
\t\t\t\tmarkFunction(function( seed, matches, context, xml ) {
\t\t\t\t\tvar elem,
\t\t\t\t\t\tunmatched = matcher( seed, null, xml, [] ),
\t\t\t\t\t\ti = seed.length;

\t\t\t\t\t// Match elements unmatched by `matcher`
\t\t\t\t\twhile ( i-- ) {
\t\t\t\t\t\tif ( (elem = unmatched[i]) ) {
\t\t\t\t\t\t\tseed[i] = !(matches[i] = elem);
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}) :
\t\t\t\tfunction( elem, context, xml ) {
\t\t\t\t\tinput[0] = elem;
\t\t\t\t\tmatcher( input, null, xml, results );
\t\t\t\t\t// Don't keep the element (issue #299)
\t\t\t\t\tinput[0] = null;
\t\t\t\t\treturn !results.pop();
\t\t\t\t};
\t\t}),

\t\t\"has\": markFunction(function( selector ) {
\t\t\treturn function( elem ) {
\t\t\t\treturn Sizzle( selector, elem ).length > 0;
\t\t\t};
\t\t}),

\t\t\"contains\": markFunction(function( text ) {
\t\t\ttext = text.replace( runescape, funescape );
\t\t\treturn function( elem ) {
\t\t\t\treturn ( elem.textContent || elem.innerText || getText( elem ) ).indexOf( text ) > -1;
\t\t\t};
\t\t}),

\t\t// \"Whether an element is represented by a :lang() selector
\t\t// is based solely on the element's language value
\t\t// being equal to the identifier C,
\t\t// or beginning with the identifier C immediately followed by \"-\".
\t\t// The matching of C against the element's language value is performed case-insensitively.
\t\t// The identifier C does not have to be a valid language name.\"
\t\t// http://www.w3.org/TR/selectors/#lang-pseudo
\t\t\"lang\": markFunction( function( lang ) {
\t\t\t// lang value must be a valid identifier
\t\t\tif ( !ridentifier.test(lang || \"\") ) {
\t\t\t\tSizzle.error( \"unsupported lang: \" + lang );
\t\t\t}
\t\t\tlang = lang.replace( runescape, funescape ).toLowerCase();
\t\t\treturn function( elem ) {
\t\t\t\tvar elemLang;
\t\t\t\tdo {
\t\t\t\t\tif ( (elemLang = documentIsHTML ?
\t\t\t\t\t\telem.lang :
\t\t\t\t\t\telem.getAttribute(\"xml:lang\") || elem.getAttribute(\"lang\")) ) {

\t\t\t\t\t\telemLang = elemLang.toLowerCase();
\t\t\t\t\t\treturn elemLang === lang || elemLang.indexOf( lang + \"-\" ) === 0;
\t\t\t\t\t}
\t\t\t\t} while ( (elem = elem.parentNode) && elem.nodeType === 1 );
\t\t\t\treturn false;
\t\t\t};
\t\t}),

\t\t// Miscellaneous
\t\t\"target\": function( elem ) {
\t\t\tvar hash = window.location && window.location.hash;
\t\t\treturn hash && hash.slice( 1 ) === elem.id;
\t\t},

\t\t\"root\": function( elem ) {
\t\t\treturn elem === docElem;
\t\t},

\t\t\"focus\": function( elem ) {
\t\t\treturn elem === document.activeElement && (!document.hasFocus || document.hasFocus()) && !!(elem.type || elem.href || ~elem.tabIndex);
\t\t},

\t\t// Boolean properties
\t\t\"enabled\": function( elem ) {
\t\t\treturn elem.disabled === false;
\t\t},

\t\t\"disabled\": function( elem ) {
\t\t\treturn elem.disabled === true;
\t\t},

\t\t\"checked\": function( elem ) {
\t\t\t// In CSS3, :checked should return both checked and selected elements
\t\t\t// http://www.w3.org/TR/2011/REC-css3-selectors-20110929/#checked
\t\t\tvar nodeName = elem.nodeName.toLowerCase();
\t\t\treturn (nodeName === \"input\" && !!elem.checked) || (nodeName === \"option\" && !!elem.selected);
\t\t},

\t\t\"selected\": function( elem ) {
\t\t\t// Accessing this property makes selected-by-default
\t\t\t// options in Safari work properly
\t\t\tif ( elem.parentNode ) {
\t\t\t\telem.parentNode.selectedIndex;
\t\t\t}

\t\t\treturn elem.selected === true;
\t\t},

\t\t// Contents
\t\t\"empty\": function( elem ) {
\t\t\t// http://www.w3.org/TR/selectors/#empty-pseudo
\t\t\t// :empty is negated by element (1) or content nodes (text: 3; cdata: 4; entity ref: 5),
\t\t\t//   but not by others (comment: 8; processing instruction: 7; etc.)
\t\t\t// nodeType < 6 works because attributes (2) do not appear as children
\t\t\tfor ( elem = elem.firstChild; elem; elem = elem.nextSibling ) {
\t\t\t\tif ( elem.nodeType < 6 ) {
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t}
\t\t\treturn true;
\t\t},

\t\t\"parent\": function( elem ) {
\t\t\treturn !Expr.pseudos[\"empty\"]( elem );
\t\t},

\t\t// Element/input types
\t\t\"header\": function( elem ) {
\t\t\treturn rheader.test( elem.nodeName );
\t\t},

\t\t\"input\": function( elem ) {
\t\t\treturn rinputs.test( elem.nodeName );
\t\t},

\t\t\"button\": function( elem ) {
\t\t\tvar name = elem.nodeName.toLowerCase();
\t\t\treturn name === \"input\" && elem.type === \"button\" || name === \"button\";
\t\t},

\t\t\"text\": function( elem ) {
\t\t\tvar attr;
\t\t\treturn elem.nodeName.toLowerCase() === \"input\" &&
\t\t\t\telem.type === \"text\" &&

\t\t\t\t// Support: IE<8
\t\t\t\t// New HTML5 attribute values (e.g., \"search\") appear with elem.type === \"text\"
\t\t\t\t( (attr = elem.getAttribute(\"type\")) == null || attr.toLowerCase() === \"text\" );
\t\t},

\t\t// Position-in-collection
\t\t\"first\": createPositionalPseudo(function() {
\t\t\treturn [ 0 ];
\t\t}),

\t\t\"last\": createPositionalPseudo(function( matchIndexes, length ) {
\t\t\treturn [ length - 1 ];
\t\t}),

\t\t\"eq\": createPositionalPseudo(function( matchIndexes, length, argument ) {
\t\t\treturn [ argument < 0 ? argument + length : argument ];
\t\t}),

\t\t\"even\": createPositionalPseudo(function( matchIndexes, length ) {
\t\t\tvar i = 0;
\t\t\tfor ( ; i < length; i += 2 ) {
\t\t\t\tmatchIndexes.push( i );
\t\t\t}
\t\t\treturn matchIndexes;
\t\t}),

\t\t\"odd\": createPositionalPseudo(function( matchIndexes, length ) {
\t\t\tvar i = 1;
\t\t\tfor ( ; i < length; i += 2 ) {
\t\t\t\tmatchIndexes.push( i );
\t\t\t}
\t\t\treturn matchIndexes;
\t\t}),

\t\t\"lt\": createPositionalPseudo(function( matchIndexes, length, argument ) {
\t\t\tvar i = argument < 0 ? argument + length : argument;
\t\t\tfor ( ; --i >= 0; ) {
\t\t\t\tmatchIndexes.push( i );
\t\t\t}
\t\t\treturn matchIndexes;
\t\t}),

\t\t\"gt\": createPositionalPseudo(function( matchIndexes, length, argument ) {
\t\t\tvar i = argument < 0 ? argument + length : argument;
\t\t\tfor ( ; ++i < length; ) {
\t\t\t\tmatchIndexes.push( i );
\t\t\t}
\t\t\treturn matchIndexes;
\t\t})
\t}
};

Expr.pseudos[\"nth\"] = Expr.pseudos[\"eq\"];

// Add button/input type pseudos
for ( i in { radio: true, checkbox: true, file: true, password: true, image: true } ) {
\tExpr.pseudos[ i ] = createInputPseudo( i );
}
for ( i in { submit: true, reset: true } ) {
\tExpr.pseudos[ i ] = createButtonPseudo( i );
}

// Easy API for creating new setFilters
function setFilters() {}
setFilters.prototype = Expr.filters = Expr.pseudos;
Expr.setFilters = new setFilters();

tokenize = Sizzle.tokenize = function( selector, parseOnly ) {
\tvar matched, match, tokens, type,
\t\tsoFar, groups, preFilters,
\t\tcached = tokenCache[ selector + \" \" ];

\tif ( cached ) {
\t\treturn parseOnly ? 0 : cached.slice( 0 );
\t}

\tsoFar = selector;
\tgroups = [];
\tpreFilters = Expr.preFilter;

\twhile ( soFar ) {

\t\t// Comma and first run
\t\tif ( !matched || (match = rcomma.exec( soFar )) ) {
\t\t\tif ( match ) {
\t\t\t\t// Don't consume trailing commas as valid
\t\t\t\tsoFar = soFar.slice( match[0].length ) || soFar;
\t\t\t}
\t\t\tgroups.push( (tokens = []) );
\t\t}

\t\tmatched = false;

\t\t// Combinators
\t\tif ( (match = rcombinators.exec( soFar )) ) {
\t\t\tmatched = match.shift();
\t\t\ttokens.push({
\t\t\t\tvalue: matched,
\t\t\t\t// Cast descendant combinators to space
\t\t\t\ttype: match[0].replace( rtrim, \" \" )
\t\t\t});
\t\t\tsoFar = soFar.slice( matched.length );
\t\t}

\t\t// Filters
\t\tfor ( type in Expr.filter ) {
\t\t\tif ( (match = matchExpr[ type ].exec( soFar )) && (!preFilters[ type ] ||
\t\t\t\t(match = preFilters[ type ]( match ))) ) {
\t\t\t\tmatched = match.shift();
\t\t\t\ttokens.push({
\t\t\t\t\tvalue: matched,
\t\t\t\t\ttype: type,
\t\t\t\t\tmatches: match
\t\t\t\t});
\t\t\t\tsoFar = soFar.slice( matched.length );
\t\t\t}
\t\t}

\t\tif ( !matched ) {
\t\t\tbreak;
\t\t}
\t}

\t// Return the length of the invalid excess
\t// if we're just parsing
\t// Otherwise, throw an error or return tokens
\treturn parseOnly ?
\t\tsoFar.length :
\t\tsoFar ?
\t\t\tSizzle.error( selector ) :
\t\t\t// Cache the tokens
\t\t\ttokenCache( selector, groups ).slice( 0 );
};

function toSelector( tokens ) {
\tvar i = 0,
\t\tlen = tokens.length,
\t\tselector = \"\";
\tfor ( ; i < len; i++ ) {
\t\tselector += tokens[i].value;
\t}
\treturn selector;
}

function addCombinator( matcher, combinator, base ) {
\tvar dir = combinator.dir,
\t\tcheckNonElements = base && dir === \"parentNode\",
\t\tdoneName = done++;

\treturn combinator.first ?
\t\t// Check against closest ancestor/preceding element
\t\tfunction( elem, context, xml ) {
\t\t\twhile ( (elem = elem[ dir ]) ) {
\t\t\t\tif ( elem.nodeType === 1 || checkNonElements ) {
\t\t\t\t\treturn matcher( elem, context, xml );
\t\t\t\t}
\t\t\t}
\t\t} :

\t\t// Check against all ancestor/preceding elements
\t\tfunction( elem, context, xml ) {
\t\t\tvar oldCache, outerCache,
\t\t\t\tnewCache = [ dirruns, doneName ];

\t\t\t// We can't set arbitrary data on XML nodes, so they don't benefit from dir caching
\t\t\tif ( xml ) {
\t\t\t\twhile ( (elem = elem[ dir ]) ) {
\t\t\t\t\tif ( elem.nodeType === 1 || checkNonElements ) {
\t\t\t\t\t\tif ( matcher( elem, context, xml ) ) {
\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t} else {
\t\t\t\twhile ( (elem = elem[ dir ]) ) {
\t\t\t\t\tif ( elem.nodeType === 1 || checkNonElements ) {
\t\t\t\t\t\touterCache = elem[ expando ] || (elem[ expando ] = {});
\t\t\t\t\t\tif ( (oldCache = outerCache[ dir ]) &&
\t\t\t\t\t\t\toldCache[ 0 ] === dirruns && oldCache[ 1 ] === doneName ) {

\t\t\t\t\t\t\t// Assign to newCache so results back-propagate to previous elements
\t\t\t\t\t\t\treturn (newCache[ 2 ] = oldCache[ 2 ]);
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t// Reuse newcache so results back-propagate to previous elements
\t\t\t\t\t\t\touterCache[ dir ] = newCache;

\t\t\t\t\t\t\t// A match means we're done; a fail means we have to keep checking
\t\t\t\t\t\t\tif ( (newCache[ 2 ] = matcher( elem, context, xml )) ) {
\t\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t};
}

function elementMatcher( matchers ) {
\treturn matchers.length > 1 ?
\t\tfunction( elem, context, xml ) {
\t\t\tvar i = matchers.length;
\t\t\twhile ( i-- ) {
\t\t\t\tif ( !matchers[i]( elem, context, xml ) ) {
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t}
\t\t\treturn true;
\t\t} :
\t\tmatchers[0];
}

function multipleContexts( selector, contexts, results ) {
\tvar i = 0,
\t\tlen = contexts.length;
\tfor ( ; i < len; i++ ) {
\t\tSizzle( selector, contexts[i], results );
\t}
\treturn results;
}

function condense( unmatched, map, filter, context, xml ) {
\tvar elem,
\t\tnewUnmatched = [],
\t\ti = 0,
\t\tlen = unmatched.length,
\t\tmapped = map != null;

\tfor ( ; i < len; i++ ) {
\t\tif ( (elem = unmatched[i]) ) {
\t\t\tif ( !filter || filter( elem, context, xml ) ) {
\t\t\t\tnewUnmatched.push( elem );
\t\t\t\tif ( mapped ) {
\t\t\t\t\tmap.push( i );
\t\t\t\t}
\t\t\t}
\t\t}
\t}

\treturn newUnmatched;
}

function setMatcher( preFilter, selector, matcher, postFilter, postFinder, postSelector ) {
\tif ( postFilter && !postFilter[ expando ] ) {
\t\tpostFilter = setMatcher( postFilter );
\t}
\tif ( postFinder && !postFinder[ expando ] ) {
\t\tpostFinder = setMatcher( postFinder, postSelector );
\t}
\treturn markFunction(function( seed, results, context, xml ) {
\t\tvar temp, i, elem,
\t\t\tpreMap = [],
\t\t\tpostMap = [],
\t\t\tpreexisting = results.length,

\t\t\t// Get initial elements from seed or context
\t\t\telems = seed || multipleContexts( selector || \"*\", context.nodeType ? [ context ] : context, [] ),

\t\t\t// Prefilter to get matcher input, preserving a map for seed-results synchronization
\t\t\tmatcherIn = preFilter && ( seed || !selector ) ?
\t\t\t\tcondense( elems, preMap, preFilter, context, xml ) :
\t\t\t\telems,

\t\t\tmatcherOut = matcher ?
\t\t\t\t// If we have a postFinder, or filtered seed, or non-seed postFilter or preexisting results,
\t\t\t\tpostFinder || ( seed ? preFilter : preexisting || postFilter ) ?

\t\t\t\t\t// ...intermediate processing is necessary
\t\t\t\t\t[] :

\t\t\t\t\t// ...otherwise use results directly
\t\t\t\t\tresults :
\t\t\t\tmatcherIn;

\t\t// Find primary matches
\t\tif ( matcher ) {
\t\t\tmatcher( matcherIn, matcherOut, context, xml );
\t\t}

\t\t// Apply postFilter
\t\tif ( postFilter ) {
\t\t\ttemp = condense( matcherOut, postMap );
\t\t\tpostFilter( temp, [], context, xml );

\t\t\t// Un-match failing elements by moving them back to matcherIn
\t\t\ti = temp.length;
\t\t\twhile ( i-- ) {
\t\t\t\tif ( (elem = temp[i]) ) {
\t\t\t\t\tmatcherOut[ postMap[i] ] = !(matcherIn[ postMap[i] ] = elem);
\t\t\t\t}
\t\t\t}
\t\t}

\t\tif ( seed ) {
\t\t\tif ( postFinder || preFilter ) {
\t\t\t\tif ( postFinder ) {
\t\t\t\t\t// Get the final matcherOut by condensing this intermediate into postFinder contexts
\t\t\t\t\ttemp = [];
\t\t\t\t\ti = matcherOut.length;
\t\t\t\t\twhile ( i-- ) {
\t\t\t\t\t\tif ( (elem = matcherOut[i]) ) {
\t\t\t\t\t\t\t// Restore matcherIn since elem is not yet a final match
\t\t\t\t\t\t\ttemp.push( (matcherIn[i] = elem) );
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\tpostFinder( null, (matcherOut = []), temp, xml );
\t\t\t\t}

\t\t\t\t// Move matched elements from seed to results to keep them synchronized
\t\t\t\ti = matcherOut.length;
\t\t\t\twhile ( i-- ) {
\t\t\t\t\tif ( (elem = matcherOut[i]) &&
\t\t\t\t\t\t(temp = postFinder ? indexOf( seed, elem ) : preMap[i]) > -1 ) {

\t\t\t\t\t\tseed[temp] = !(results[temp] = elem);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t\t// Add elements to results, through postFinder if defined
\t\t} else {
\t\t\tmatcherOut = condense(
\t\t\t\tmatcherOut === results ?
\t\t\t\t\tmatcherOut.splice( preexisting, matcherOut.length ) :
\t\t\t\t\tmatcherOut
\t\t\t);
\t\t\tif ( postFinder ) {
\t\t\t\tpostFinder( null, results, matcherOut, xml );
\t\t\t} else {
\t\t\t\tpush.apply( results, matcherOut );
\t\t\t}
\t\t}
\t});
}

function matcherFromTokens( tokens ) {
\tvar checkContext, matcher, j,
\t\tlen = tokens.length,
\t\tleadingRelative = Expr.relative[ tokens[0].type ],
\t\timplicitRelative = leadingRelative || Expr.relative[\" \"],
\t\ti = leadingRelative ? 1 : 0,

\t\t// The foundational matcher ensures that elements are reachable from top-level context(s)
\t\tmatchContext = addCombinator( function( elem ) {
\t\t\treturn elem === checkContext;
\t\t}, implicitRelative, true ),
\t\tmatchAnyContext = addCombinator( function( elem ) {
\t\t\treturn indexOf( checkContext, elem ) > -1;
\t\t}, implicitRelative, true ),
\t\tmatchers = [ function( elem, context, xml ) {
\t\t\tvar ret = ( !leadingRelative && ( xml || context !== outermostContext ) ) || (
\t\t\t\t(checkContext = context).nodeType ?
\t\t\t\t\tmatchContext( elem, context, xml ) :
\t\t\t\t\tmatchAnyContext( elem, context, xml ) );
\t\t\t// Avoid hanging onto element (issue #299)
\t\t\tcheckContext = null;
\t\t\treturn ret;
\t\t} ];

\tfor ( ; i < len; i++ ) {
\t\tif ( (matcher = Expr.relative[ tokens[i].type ]) ) {
\t\t\tmatchers = [ addCombinator(elementMatcher( matchers ), matcher) ];
\t\t} else {
\t\t\tmatcher = Expr.filter[ tokens[i].type ].apply( null, tokens[i].matches );

\t\t\t// Return special upon seeing a positional matcher
\t\t\tif ( matcher[ expando ] ) {
\t\t\t\t// Find the next relative operator (if any) for proper handling
\t\t\t\tj = ++i;
\t\t\t\tfor ( ; j < len; j++ ) {
\t\t\t\t\tif ( Expr.relative[ tokens[j].type ] ) {
\t\t\t\t\t\tbreak;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\treturn setMatcher(
\t\t\t\t\ti > 1 && elementMatcher( matchers ),
\t\t\t\t\ti > 1 && toSelector(
\t\t\t\t\t\t// If the preceding token was a descendant combinator, insert an implicit any-element `*`
\t\t\t\t\t\ttokens.slice( 0, i - 1 ).concat({ value: tokens[ i - 2 ].type === \" \" ? \"*\" : \"\" })
\t\t\t\t\t).replace( rtrim, \"\$1\" ),
\t\t\t\t\tmatcher,
\t\t\t\t\ti < j && matcherFromTokens( tokens.slice( i, j ) ),
\t\t\t\t\tj < len && matcherFromTokens( (tokens = tokens.slice( j )) ),
\t\t\t\t\tj < len && toSelector( tokens )
\t\t\t\t);
\t\t\t}
\t\t\tmatchers.push( matcher );
\t\t}
\t}

\treturn elementMatcher( matchers );
}

function matcherFromGroupMatchers( elementMatchers, setMatchers ) {
\tvar bySet = setMatchers.length > 0,
\t\tbyElement = elementMatchers.length > 0,
\t\tsuperMatcher = function( seed, context, xml, results, outermost ) {
\t\t\tvar elem, j, matcher,
\t\t\t\tmatchedCount = 0,
\t\t\t\ti = \"0\",
\t\t\t\tunmatched = seed && [],
\t\t\t\tsetMatched = [],
\t\t\t\tcontextBackup = outermostContext,
\t\t\t\t// We must always have either seed elements or outermost context
\t\t\t\telems = seed || byElement && Expr.find[\"TAG\"]( \"*\", outermost ),
\t\t\t\t// Use integer dirruns iff this is the outermost matcher
\t\t\t\tdirrunsUnique = (dirruns += contextBackup == null ? 1 : Math.random() || 0.1),
\t\t\t\tlen = elems.length;

\t\t\tif ( outermost ) {
\t\t\t\toutermostContext = context !== document && context;
\t\t\t}

\t\t\t// Add elements passing elementMatchers directly to results
\t\t\t// Keep `i` a string if there are no elements so `matchedCount` will be \"00\" below
\t\t\t// Support: IE<9, Safari
\t\t\t// Tolerate NodeList properties (IE: \"length\"; Safari: <number>) matching elements by id
\t\t\tfor ( ; i !== len && (elem = elems[i]) != null; i++ ) {
\t\t\t\tif ( byElement && elem ) {
\t\t\t\t\tj = 0;
\t\t\t\t\twhile ( (matcher = elementMatchers[j++]) ) {
\t\t\t\t\t\tif ( matcher( elem, context, xml ) ) {
\t\t\t\t\t\t\tresults.push( elem );
\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\tif ( outermost ) {
\t\t\t\t\t\tdirruns = dirrunsUnique;
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// Track unmatched elements for set filters
\t\t\t\tif ( bySet ) {
\t\t\t\t\t// They will have gone through all possible matchers
\t\t\t\t\tif ( (elem = !matcher && elem) ) {
\t\t\t\t\t\tmatchedCount--;
\t\t\t\t\t}

\t\t\t\t\t// Lengthen the array for every element, matched or not
\t\t\t\t\tif ( seed ) {
\t\t\t\t\t\tunmatched.push( elem );
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t\t\t// Apply set filters to unmatched elements
\t\t\tmatchedCount += i;
\t\t\tif ( bySet && i !== matchedCount ) {
\t\t\t\tj = 0;
\t\t\t\twhile ( (matcher = setMatchers[j++]) ) {
\t\t\t\t\tmatcher( unmatched, setMatched, context, xml );
\t\t\t\t}

\t\t\t\tif ( seed ) {
\t\t\t\t\t// Reintegrate element matches to eliminate the need for sorting
\t\t\t\t\tif ( matchedCount > 0 ) {
\t\t\t\t\t\twhile ( i-- ) {
\t\t\t\t\t\t\tif ( !(unmatched[i] || setMatched[i]) ) {
\t\t\t\t\t\t\t\tsetMatched[i] = pop.call( results );
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\t// Discard index placeholder values to get only actual matches
\t\t\t\t\tsetMatched = condense( setMatched );
\t\t\t\t}

\t\t\t\t// Add matches to results
\t\t\t\tpush.apply( results, setMatched );

\t\t\t\t// Seedless set matches succeeding multiple successful matchers stipulate sorting
\t\t\t\tif ( outermost && !seed && setMatched.length > 0 &&
\t\t\t\t\t( matchedCount + setMatchers.length ) > 1 ) {

\t\t\t\t\tSizzle.uniqueSort( results );
\t\t\t\t}
\t\t\t}

\t\t\t// Override manipulation of globals by nested matchers
\t\t\tif ( outermost ) {
\t\t\t\tdirruns = dirrunsUnique;
\t\t\t\toutermostContext = contextBackup;
\t\t\t}

\t\t\treturn unmatched;
\t\t};

\treturn bySet ?
\t\tmarkFunction( superMatcher ) :
\t\tsuperMatcher;
}

compile = Sizzle.compile = function( selector, match /* Internal Use Only */ ) {
\tvar i,
\t\tsetMatchers = [],
\t\telementMatchers = [],
\t\tcached = compilerCache[ selector + \" \" ];

\tif ( !cached ) {
\t\t// Generate a function of recursive functions that can be used to check each element
\t\tif ( !match ) {
\t\t\tmatch = tokenize( selector );
\t\t}
\t\ti = match.length;
\t\twhile ( i-- ) {
\t\t\tcached = matcherFromTokens( match[i] );
\t\t\tif ( cached[ expando ] ) {
\t\t\t\tsetMatchers.push( cached );
\t\t\t} else {
\t\t\t\telementMatchers.push( cached );
\t\t\t}
\t\t}

\t\t// Cache the compiled function
\t\tcached = compilerCache( selector, matcherFromGroupMatchers( elementMatchers, setMatchers ) );

\t\t// Save selector and tokenization
\t\tcached.selector = selector;
\t}
\treturn cached;
};

/**
 * A low-level selection function that works with Sizzle's compiled
 *  selector functions
 * @param {String|Function} selector A selector or a pre-compiled
 *  selector function built with Sizzle.compile
 * @param {Element} context
 * @param {Array} [results]
 * @param {Array} [seed] A set of elements to match against
 */
select = Sizzle.select = function( selector, context, results, seed ) {
\tvar i, tokens, token, type, find,
\t\tcompiled = typeof selector === \"function\" && selector,
\t\tmatch = !seed && tokenize( (selector = compiled.selector || selector) );

\tresults = results || [];

\t// Try to minimize operations if there is no seed and only one group
\tif ( match.length === 1 ) {

\t\t// Take a shortcut and set the context if the root selector is an ID
\t\ttokens = match[0] = match[0].slice( 0 );
\t\tif ( tokens.length > 2 && (token = tokens[0]).type === \"ID\" &&
\t\t\t\tsupport.getById && context.nodeType === 9 && documentIsHTML &&
\t\t\t\tExpr.relative[ tokens[1].type ] ) {

\t\t\tcontext = ( Expr.find[\"ID\"]( token.matches[0].replace(runescape, funescape), context ) || [] )[0];
\t\t\tif ( !context ) {
\t\t\t\treturn results;

\t\t\t// Precompiled matchers will still verify ancestry, so step up a level
\t\t\t} else if ( compiled ) {
\t\t\t\tcontext = context.parentNode;
\t\t\t}

\t\t\tselector = selector.slice( tokens.shift().value.length );
\t\t}

\t\t// Fetch a seed set for right-to-left matching
\t\ti = matchExpr[\"needsContext\"].test( selector ) ? 0 : tokens.length;
\t\twhile ( i-- ) {
\t\t\ttoken = tokens[i];

\t\t\t// Abort if we hit a combinator
\t\t\tif ( Expr.relative[ (type = token.type) ] ) {
\t\t\t\tbreak;
\t\t\t}
\t\t\tif ( (find = Expr.find[ type ]) ) {
\t\t\t\t// Search, expanding context for leading sibling combinators
\t\t\t\tif ( (seed = find(
\t\t\t\t\ttoken.matches[0].replace( runescape, funescape ),
\t\t\t\t\trsibling.test( tokens[0].type ) && testContext( context.parentNode ) || context
\t\t\t\t)) ) {

\t\t\t\t\t// If seed is empty or no tokens remain, we can return early
\t\t\t\t\ttokens.splice( i, 1 );
\t\t\t\t\tselector = seed.length && toSelector( tokens );
\t\t\t\t\tif ( !selector ) {
\t\t\t\t\t\tpush.apply( results, seed );
\t\t\t\t\t\treturn results;
\t\t\t\t\t}

\t\t\t\t\tbreak;
\t\t\t\t}
\t\t\t}
\t\t}
\t}

\t// Compile and execute a filtering function if one is not provided
\t// Provide `match` to avoid retokenization if we modified the selector above
\t( compiled || compile( selector, match ) )(
\t\tseed,
\t\tcontext,
\t\t!documentIsHTML,
\t\tresults,
\t\trsibling.test( selector ) && testContext( context.parentNode ) || context
\t);
\treturn results;
};

// One-time assignments

// Sort stability
support.sortStable = expando.split(\"\").sort( sortOrder ).join(\"\") === expando;

// Support: Chrome 14-35+
// Always assume duplicates if they aren't passed to the comparison function
support.detectDuplicates = !!hasDuplicate;

// Initialize against the default document
setDocument();

// Support: Webkit<537.32 - Safari 6.0.3/Chrome 25 (fixed in Chrome 27)
// Detached nodes confoundingly follow *each other*
support.sortDetached = assert(function( div1 ) {
\t// Should return 1, but returns 4 (following)
\treturn div1.compareDocumentPosition( document.createElement(\"div\") ) & 1;
});

// Support: IE<8
// Prevent attribute/property \"interpolation\"
// http://msdn.microsoft.com/en-us/library/ms536429%28VS.85%29.aspx
if ( !assert(function( div ) {
\tdiv.innerHTML = \"<a href='#'></a>\";
\treturn div.firstChild.getAttribute(\"href\") === \"#\" ;
}) ) {
\taddHandle( \"type|href|height|width\", function( elem, name, isXML ) {
\t\tif ( !isXML ) {
\t\t\treturn elem.getAttribute( name, name.toLowerCase() === \"type\" ? 1 : 2 );
\t\t}
\t});
}

// Support: IE<9
// Use defaultValue in place of getAttribute(\"value\")
if ( !support.attributes || !assert(function( div ) {
\tdiv.innerHTML = \"<input/>\";
\tdiv.firstChild.setAttribute( \"value\", \"\" );
\treturn div.firstChild.getAttribute( \"value\" ) === \"\";
}) ) {
\taddHandle( \"value\", function( elem, name, isXML ) {
\t\tif ( !isXML && elem.nodeName.toLowerCase() === \"input\" ) {
\t\t\treturn elem.defaultValue;
\t\t}
\t});
}

// Support: IE<9
// Use getAttributeNode to fetch booleans when getAttribute lies
if ( !assert(function( div ) {
\treturn div.getAttribute(\"disabled\") == null;
}) ) {
\taddHandle( booleans, function( elem, name, isXML ) {
\t\tvar val;
\t\tif ( !isXML ) {
\t\t\treturn elem[ name ] === true ? name.toLowerCase() :
\t\t\t\t\t(val = elem.getAttributeNode( name )) && val.specified ?
\t\t\t\t\tval.value :
\t\t\t\tnull;
\t\t}
\t});
}

return Sizzle;

})( window );



jQuery.find = Sizzle;
jQuery.expr = Sizzle.selectors;
jQuery.expr[\":\"] = jQuery.expr.pseudos;
jQuery.unique = Sizzle.uniqueSort;
jQuery.text = Sizzle.getText;
jQuery.isXMLDoc = Sizzle.isXML;
jQuery.contains = Sizzle.contains;



var rneedsContext = jQuery.expr.match.needsContext;

var rsingleTag = (/^<(\\w+)\\s*\\/?>(?:<\\/\\1>|)\$/);



var risSimple = /^.[^:#\\[\\.,]*\$/;

// Implement the identical functionality for filter and not
function winnow( elements, qualifier, not ) {
\tif ( jQuery.isFunction( qualifier ) ) {
\t\treturn jQuery.grep( elements, function( elem, i ) {
\t\t\t/* jshint -W018 */
\t\t\treturn !!qualifier.call( elem, i, elem ) !== not;
\t\t});

\t}

\tif ( qualifier.nodeType ) {
\t\treturn jQuery.grep( elements, function( elem ) {
\t\t\treturn ( elem === qualifier ) !== not;
\t\t});

\t}

\tif ( typeof qualifier === \"string\" ) {
\t\tif ( risSimple.test( qualifier ) ) {
\t\t\treturn jQuery.filter( qualifier, elements, not );
\t\t}

\t\tqualifier = jQuery.filter( qualifier, elements );
\t}

\treturn jQuery.grep( elements, function( elem ) {
\t\treturn ( indexOf.call( qualifier, elem ) >= 0 ) !== not;
\t});
}

jQuery.filter = function( expr, elems, not ) {
\tvar elem = elems[ 0 ];

\tif ( not ) {
\t\texpr = \":not(\" + expr + \")\";
\t}

\treturn elems.length === 1 && elem.nodeType === 1 ?
\t\tjQuery.find.matchesSelector( elem, expr ) ? [ elem ] : [] :
\t\tjQuery.find.matches( expr, jQuery.grep( elems, function( elem ) {
\t\t\treturn elem.nodeType === 1;
\t\t}));
};

jQuery.fn.extend({
\tfind: function( selector ) {
\t\tvar i,
\t\t\tlen = this.length,
\t\t\tret = [],
\t\t\tself = this;

\t\tif ( typeof selector !== \"string\" ) {
\t\t\treturn this.pushStack( jQuery( selector ).filter(function() {
\t\t\t\tfor ( i = 0; i < len; i++ ) {
\t\t\t\t\tif ( jQuery.contains( self[ i ], this ) ) {
\t\t\t\t\t\treturn true;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}) );
\t\t}

\t\tfor ( i = 0; i < len; i++ ) {
\t\t\tjQuery.find( selector, self[ i ], ret );
\t\t}

\t\t// Needed because \$( selector, context ) becomes \$( context ).find( selector )
\t\tret = this.pushStack( len > 1 ? jQuery.unique( ret ) : ret );
\t\tret.selector = this.selector ? this.selector + \" \" + selector : selector;
\t\treturn ret;
\t},
\tfilter: function( selector ) {
\t\treturn this.pushStack( winnow(this, selector || [], false) );
\t},
\tnot: function( selector ) {
\t\treturn this.pushStack( winnow(this, selector || [], true) );
\t},
\tis: function( selector ) {
\t\treturn !!winnow(
\t\t\tthis,

\t\t\t// If this is a positional/relative selector, check membership in the returned set
\t\t\t// so \$(\"p:first\").is(\"p:last\") won't return true for a doc with two \"p\".
\t\t\ttypeof selector === \"string\" && rneedsContext.test( selector ) ?
\t\t\t\tjQuery( selector ) :
\t\t\t\tselector || [],
\t\t\tfalse
\t\t).length;
\t}
});


// Initialize a jQuery object


// A central reference to the root jQuery(document)
var rootjQuery,

\t// A simple way to check for HTML strings
\t// Prioritize #id over <tag> to avoid XSS via location.hash (#9521)
\t// Strict HTML recognition (#11290: must start with <)
\trquickExpr = /^(?:\\s*(<[\\w\\W]+>)[^>]*|#([\\w-]*))\$/,

\tinit = jQuery.fn.init = function( selector, context ) {
\t\tvar match, elem;

\t\t// HANDLE: \$(\"\"), \$(null), \$(undefined), \$(false)
\t\tif ( !selector ) {
\t\t\treturn this;
\t\t}

\t\t// Handle HTML strings
\t\tif ( typeof selector === \"string\" ) {
\t\t\tif ( selector[0] === \"<\" && selector[ selector.length - 1 ] === \">\" && selector.length >= 3 ) {
\t\t\t\t// Assume that strings that start and end with <> are HTML and skip the regex check
\t\t\t\tmatch = [ null, selector, null ];

\t\t\t} else {
\t\t\t\tmatch = rquickExpr.exec( selector );
\t\t\t}

\t\t\t// Match html or make sure no context is specified for #id
\t\t\tif ( match && (match[1] || !context) ) {

\t\t\t\t// HANDLE: \$(html) -> \$(array)
\t\t\t\tif ( match[1] ) {
\t\t\t\t\tcontext = context instanceof jQuery ? context[0] : context;

\t\t\t\t\t// Option to run scripts is true for back-compat
\t\t\t\t\t// Intentionally let the error be thrown if parseHTML is not present
\t\t\t\t\tjQuery.merge( this, jQuery.parseHTML(
\t\t\t\t\t\tmatch[1],
\t\t\t\t\t\tcontext && context.nodeType ? context.ownerDocument || context : document,
\t\t\t\t\t\ttrue
\t\t\t\t\t) );

\t\t\t\t\t// HANDLE: \$(html, props)
\t\t\t\t\tif ( rsingleTag.test( match[1] ) && jQuery.isPlainObject( context ) ) {
\t\t\t\t\t\tfor ( match in context ) {
\t\t\t\t\t\t\t// Properties of context are called as methods if possible
\t\t\t\t\t\t\tif ( jQuery.isFunction( this[ match ] ) ) {
\t\t\t\t\t\t\t\tthis[ match ]( context[ match ] );

\t\t\t\t\t\t\t// ...and otherwise set as attributes
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\tthis.attr( match, context[ match ] );
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\treturn this;

\t\t\t\t// HANDLE: \$(#id)
\t\t\t\t} else {
\t\t\t\t\telem = document.getElementById( match[2] );

\t\t\t\t\t// Support: Blackberry 4.6
\t\t\t\t\t// gEBID returns nodes no longer in the document (#6963)
\t\t\t\t\tif ( elem && elem.parentNode ) {
\t\t\t\t\t\t// Inject the element directly into the jQuery object
\t\t\t\t\t\tthis.length = 1;
\t\t\t\t\t\tthis[0] = elem;
\t\t\t\t\t}

\t\t\t\t\tthis.context = document;
\t\t\t\t\tthis.selector = selector;
\t\t\t\t\treturn this;
\t\t\t\t}

\t\t\t// HANDLE: \$(expr, \$(...))
\t\t\t} else if ( !context || context.jquery ) {
\t\t\t\treturn ( context || rootjQuery ).find( selector );

\t\t\t// HANDLE: \$(expr, context)
\t\t\t// (which is just equivalent to: \$(context).find(expr)
\t\t\t} else {
\t\t\t\treturn this.constructor( context ).find( selector );
\t\t\t}

\t\t// HANDLE: \$(DOMElement)
\t\t} else if ( selector.nodeType ) {
\t\t\tthis.context = this[0] = selector;
\t\t\tthis.length = 1;
\t\t\treturn this;

\t\t// HANDLE: \$(function)
\t\t// Shortcut for document ready
\t\t} else if ( jQuery.isFunction( selector ) ) {
\t\t\treturn typeof rootjQuery.ready !== \"undefined\" ?
\t\t\t\trootjQuery.ready( selector ) :
\t\t\t\t// Execute immediately if ready is not present
\t\t\t\tselector( jQuery );
\t\t}

\t\tif ( selector.selector !== undefined ) {
\t\t\tthis.selector = selector.selector;
\t\t\tthis.context = selector.context;
\t\t}

\t\treturn jQuery.makeArray( selector, this );
\t};

// Give the init function the jQuery prototype for later instantiation
init.prototype = jQuery.fn;

// Initialize central reference
rootjQuery = jQuery( document );


var rparentsprev = /^(?:parents|prev(?:Until|All))/,
\t// Methods guaranteed to produce a unique set when starting from a unique set
\tguaranteedUnique = {
\t\tchildren: true,
\t\tcontents: true,
\t\tnext: true,
\t\tprev: true
\t};

jQuery.extend({
\tdir: function( elem, dir, until ) {
\t\tvar matched = [],
\t\t\ttruncate = until !== undefined;

\t\twhile ( (elem = elem[ dir ]) && elem.nodeType !== 9 ) {
\t\t\tif ( elem.nodeType === 1 ) {
\t\t\t\tif ( truncate && jQuery( elem ).is( until ) ) {
\t\t\t\t\tbreak;
\t\t\t\t}
\t\t\t\tmatched.push( elem );
\t\t\t}
\t\t}
\t\treturn matched;
\t},

\tsibling: function( n, elem ) {
\t\tvar matched = [];

\t\tfor ( ; n; n = n.nextSibling ) {
\t\t\tif ( n.nodeType === 1 && n !== elem ) {
\t\t\t\tmatched.push( n );
\t\t\t}
\t\t}

\t\treturn matched;
\t}
});

jQuery.fn.extend({
\thas: function( target ) {
\t\tvar targets = jQuery( target, this ),
\t\t\tl = targets.length;

\t\treturn this.filter(function() {
\t\t\tvar i = 0;
\t\t\tfor ( ; i < l; i++ ) {
\t\t\t\tif ( jQuery.contains( this, targets[i] ) ) {
\t\t\t\t\treturn true;
\t\t\t\t}
\t\t\t}
\t\t});
\t},

\tclosest: function( selectors, context ) {
\t\tvar cur,
\t\t\ti = 0,
\t\t\tl = this.length,
\t\t\tmatched = [],
\t\t\tpos = rneedsContext.test( selectors ) || typeof selectors !== \"string\" ?
\t\t\t\tjQuery( selectors, context || this.context ) :
\t\t\t\t0;

\t\tfor ( ; i < l; i++ ) {
\t\t\tfor ( cur = this[i]; cur && cur !== context; cur = cur.parentNode ) {
\t\t\t\t// Always skip document fragments
\t\t\t\tif ( cur.nodeType < 11 && (pos ?
\t\t\t\t\tpos.index(cur) > -1 :

\t\t\t\t\t// Don't pass non-elements to Sizzle
\t\t\t\t\tcur.nodeType === 1 &&
\t\t\t\t\t\tjQuery.find.matchesSelector(cur, selectors)) ) {

\t\t\t\t\tmatched.push( cur );
\t\t\t\t\tbreak;
\t\t\t\t}
\t\t\t}
\t\t}

\t\treturn this.pushStack( matched.length > 1 ? jQuery.unique( matched ) : matched );
\t},

\t// Determine the position of an element within the set
\tindex: function( elem ) {

\t\t// No argument, return index in parent
\t\tif ( !elem ) {
\t\t\treturn ( this[ 0 ] && this[ 0 ].parentNode ) ? this.first().prevAll().length : -1;
\t\t}

\t\t// Index in selector
\t\tif ( typeof elem === \"string\" ) {
\t\t\treturn indexOf.call( jQuery( elem ), this[ 0 ] );
\t\t}

\t\t// Locate the position of the desired element
\t\treturn indexOf.call( this,

\t\t\t// If it receives a jQuery object, the first element is used
\t\t\telem.jquery ? elem[ 0 ] : elem
\t\t);
\t},

\tadd: function( selector, context ) {
\t\treturn this.pushStack(
\t\t\tjQuery.unique(
\t\t\t\tjQuery.merge( this.get(), jQuery( selector, context ) )
\t\t\t)
\t\t);
\t},

\taddBack: function( selector ) {
\t\treturn this.add( selector == null ?
\t\t\tthis.prevObject : this.prevObject.filter(selector)
\t\t);
\t}
});

function sibling( cur, dir ) {
\twhile ( (cur = cur[dir]) && cur.nodeType !== 1 ) {}
\treturn cur;
}

jQuery.each({
\tparent: function( elem ) {
\t\tvar parent = elem.parentNode;
\t\treturn parent && parent.nodeType !== 11 ? parent : null;
\t},
\tparents: function( elem ) {
\t\treturn jQuery.dir( elem, \"parentNode\" );
\t},
\tparentsUntil: function( elem, i, until ) {
\t\treturn jQuery.dir( elem, \"parentNode\", until );
\t},
\tnext: function( elem ) {
\t\treturn sibling( elem, \"nextSibling\" );
\t},
\tprev: function( elem ) {
\t\treturn sibling( elem, \"previousSibling\" );
\t},
\tnextAll: function( elem ) {
\t\treturn jQuery.dir( elem, \"nextSibling\" );
\t},
\tprevAll: function( elem ) {
\t\treturn jQuery.dir( elem, \"previousSibling\" );
\t},
\tnextUntil: function( elem, i, until ) {
\t\treturn jQuery.dir( elem, \"nextSibling\", until );
\t},
\tprevUntil: function( elem, i, until ) {
\t\treturn jQuery.dir( elem, \"previousSibling\", until );
\t},
\tsiblings: function( elem ) {
\t\treturn jQuery.sibling( ( elem.parentNode || {} ).firstChild, elem );
\t},
\tchildren: function( elem ) {
\t\treturn jQuery.sibling( elem.firstChild );
\t},
\tcontents: function( elem ) {
\t\treturn elem.contentDocument || jQuery.merge( [], elem.childNodes );
\t}
}, function( name, fn ) {
\tjQuery.fn[ name ] = function( until, selector ) {
\t\tvar matched = jQuery.map( this, fn, until );

\t\tif ( name.slice( -5 ) !== \"Until\" ) {
\t\t\tselector = until;
\t\t}

\t\tif ( selector && typeof selector === \"string\" ) {
\t\t\tmatched = jQuery.filter( selector, matched );
\t\t}

\t\tif ( this.length > 1 ) {
\t\t\t// Remove duplicates
\t\t\tif ( !guaranteedUnique[ name ] ) {
\t\t\t\tjQuery.unique( matched );
\t\t\t}

\t\t\t// Reverse order for parents* and prev-derivatives
\t\t\tif ( rparentsprev.test( name ) ) {
\t\t\t\tmatched.reverse();
\t\t\t}
\t\t}

\t\treturn this.pushStack( matched );
\t};
});
var rnotwhite = (/\\S+/g);



// String to Object options format cache
var optionsCache = {};

// Convert String-formatted options into Object-formatted ones and store in cache
function createOptions( options ) {
\tvar object = optionsCache[ options ] = {};
\tjQuery.each( options.match( rnotwhite ) || [], function( _, flag ) {
\t\tobject[ flag ] = true;
\t});
\treturn object;
}

/*
 * Create a callback list using the following parameters:
 *
 *\toptions: an optional list of space-separated options that will change how
 *\t\t\tthe callback list behaves or a more traditional option object
 *
 * By default a callback list will act like an event callback list and can be
 * \"fired\" multiple times.
 *
 * Possible options:
 *
 *\tonce:\t\t\twill ensure the callback list can only be fired once (like a Deferred)
 *
 *\tmemory:\t\t\twill keep track of previous values and will call any callback added
 *\t\t\t\t\tafter the list has been fired right away with the latest \"memorized\"
 *\t\t\t\t\tvalues (like a Deferred)
 *
 *\tunique:\t\t\twill ensure a callback can only be added once (no duplicate in the list)
 *
 *\tstopOnFalse:\tinterrupt callings when a callback returns false
 *
 */
jQuery.Callbacks = function( options ) {

\t// Convert options from String-formatted to Object-formatted if needed
\t// (we check in cache first)
\toptions = typeof options === \"string\" ?
\t\t( optionsCache[ options ] || createOptions( options ) ) :
\t\tjQuery.extend( {}, options );

\tvar // Last fire value (for non-forgettable lists)
\t\tmemory,
\t\t// Flag to know if list was already fired
\t\tfired,
\t\t// Flag to know if list is currently firing
\t\tfiring,
\t\t// First callback to fire (used internally by add and fireWith)
\t\tfiringStart,
\t\t// End of the loop when firing
\t\tfiringLength,
\t\t// Index of currently firing callback (modified by remove if needed)
\t\tfiringIndex,
\t\t// Actual callback list
\t\tlist = [],
\t\t// Stack of fire calls for repeatable lists
\t\tstack = !options.once && [],
\t\t// Fire callbacks
\t\tfire = function( data ) {
\t\t\tmemory = options.memory && data;
\t\t\tfired = true;
\t\t\tfiringIndex = firingStart || 0;
\t\t\tfiringStart = 0;
\t\t\tfiringLength = list.length;
\t\t\tfiring = true;
\t\t\tfor ( ; list && firingIndex < firingLength; firingIndex++ ) {
\t\t\t\tif ( list[ firingIndex ].apply( data[ 0 ], data[ 1 ] ) === false && options.stopOnFalse ) {
\t\t\t\t\tmemory = false; // To prevent further calls using add
\t\t\t\t\tbreak;
\t\t\t\t}
\t\t\t}
\t\t\tfiring = false;
\t\t\tif ( list ) {
\t\t\t\tif ( stack ) {
\t\t\t\t\tif ( stack.length ) {
\t\t\t\t\t\tfire( stack.shift() );
\t\t\t\t\t}
\t\t\t\t} else if ( memory ) {
\t\t\t\t\tlist = [];
\t\t\t\t} else {
\t\t\t\t\tself.disable();
\t\t\t\t}
\t\t\t}
\t\t},
\t\t// Actual Callbacks object
\t\tself = {
\t\t\t// Add a callback or a collection of callbacks to the list
\t\t\tadd: function() {
\t\t\t\tif ( list ) {
\t\t\t\t\t// First, we save the current length
\t\t\t\t\tvar start = list.length;
\t\t\t\t\t(function add( args ) {
\t\t\t\t\t\tjQuery.each( args, function( _, arg ) {
\t\t\t\t\t\t\tvar type = jQuery.type( arg );
\t\t\t\t\t\t\tif ( type === \"function\" ) {
\t\t\t\t\t\t\t\tif ( !options.unique || !self.has( arg ) ) {
\t\t\t\t\t\t\t\t\tlist.push( arg );
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t} else if ( arg && arg.length && type !== \"string\" ) {
\t\t\t\t\t\t\t\t// Inspect recursively
\t\t\t\t\t\t\t\tadd( arg );
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t})( arguments );
\t\t\t\t\t// Do we need to add the callbacks to the
\t\t\t\t\t// current firing batch?
\t\t\t\t\tif ( firing ) {
\t\t\t\t\t\tfiringLength = list.length;
\t\t\t\t\t// With memory, if we're not firing then
\t\t\t\t\t// we should call right away
\t\t\t\t\t} else if ( memory ) {
\t\t\t\t\t\tfiringStart = start;
\t\t\t\t\t\tfire( memory );
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\treturn this;
\t\t\t},
\t\t\t// Remove a callback from the list
\t\t\tremove: function() {
\t\t\t\tif ( list ) {
\t\t\t\t\tjQuery.each( arguments, function( _, arg ) {
\t\t\t\t\t\tvar index;
\t\t\t\t\t\twhile ( ( index = jQuery.inArray( arg, list, index ) ) > -1 ) {
\t\t\t\t\t\t\tlist.splice( index, 1 );
\t\t\t\t\t\t\t// Handle firing indexes
\t\t\t\t\t\t\tif ( firing ) {
\t\t\t\t\t\t\t\tif ( index <= firingLength ) {
\t\t\t\t\t\t\t\t\tfiringLength--;
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\tif ( index <= firingIndex ) {
\t\t\t\t\t\t\t\t\tfiringIndex--;
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t}
\t\t\t\treturn this;
\t\t\t},
\t\t\t// Check if a given callback is in the list.
\t\t\t// If no argument is given, return whether or not list has callbacks attached.
\t\t\thas: function( fn ) {
\t\t\t\treturn fn ? jQuery.inArray( fn, list ) > -1 : !!( list && list.length );
\t\t\t},
\t\t\t// Remove all callbacks from the list
\t\t\tempty: function() {
\t\t\t\tlist = [];
\t\t\t\tfiringLength = 0;
\t\t\t\treturn this;
\t\t\t},
\t\t\t// Have the list do nothing anymore
\t\t\tdisable: function() {
\t\t\t\tlist = stack = memory = undefined;
\t\t\t\treturn this;
\t\t\t},
\t\t\t// Is it disabled?
\t\t\tdisabled: function() {
\t\t\t\treturn !list;
\t\t\t},
\t\t\t// Lock the list in its current state
\t\t\tlock: function() {
\t\t\t\tstack = undefined;
\t\t\t\tif ( !memory ) {
\t\t\t\t\tself.disable();
\t\t\t\t}
\t\t\t\treturn this;
\t\t\t},
\t\t\t// Is it locked?
\t\t\tlocked: function() {
\t\t\t\treturn !stack;
\t\t\t},
\t\t\t// Call all callbacks with the given context and arguments
\t\t\tfireWith: function( context, args ) {
\t\t\t\tif ( list && ( !fired || stack ) ) {
\t\t\t\t\targs = args || [];
\t\t\t\t\targs = [ context, args.slice ? args.slice() : args ];
\t\t\t\t\tif ( firing ) {
\t\t\t\t\t\tstack.push( args );
\t\t\t\t\t} else {
\t\t\t\t\t\tfire( args );
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\treturn this;
\t\t\t},
\t\t\t// Call all the callbacks with the given arguments
\t\t\tfire: function() {
\t\t\t\tself.fireWith( this, arguments );
\t\t\t\treturn this;
\t\t\t},
\t\t\t// To know if the callbacks have already been called at least once
\t\t\tfired: function() {
\t\t\t\treturn !!fired;
\t\t\t}
\t\t};

\treturn self;
};


jQuery.extend({

\tDeferred: function( func ) {
\t\tvar tuples = [
\t\t\t\t// action, add listener, listener list, final state
\t\t\t\t[ \"resolve\", \"done\", jQuery.Callbacks(\"once memory\"), \"resolved\" ],
\t\t\t\t[ \"reject\", \"fail\", jQuery.Callbacks(\"once memory\"), \"rejected\" ],
\t\t\t\t[ \"notify\", \"progress\", jQuery.Callbacks(\"memory\") ]
\t\t\t],
\t\t\tstate = \"pending\",
\t\t\tpromise = {
\t\t\t\tstate: function() {
\t\t\t\t\treturn state;
\t\t\t\t},
\t\t\t\talways: function() {
\t\t\t\t\tdeferred.done( arguments ).fail( arguments );
\t\t\t\t\treturn this;
\t\t\t\t},
\t\t\t\tthen: function( /* fnDone, fnFail, fnProgress */ ) {
\t\t\t\t\tvar fns = arguments;
\t\t\t\t\treturn jQuery.Deferred(function( newDefer ) {
\t\t\t\t\t\tjQuery.each( tuples, function( i, tuple ) {
\t\t\t\t\t\t\tvar fn = jQuery.isFunction( fns[ i ] ) && fns[ i ];
\t\t\t\t\t\t\t// deferred[ done | fail | progress ] for forwarding actions to newDefer
\t\t\t\t\t\t\tdeferred[ tuple[1] ](function() {
\t\t\t\t\t\t\t\tvar returned = fn && fn.apply( this, arguments );
\t\t\t\t\t\t\t\tif ( returned && jQuery.isFunction( returned.promise ) ) {
\t\t\t\t\t\t\t\t\treturned.promise()
\t\t\t\t\t\t\t\t\t\t.done( newDefer.resolve )
\t\t\t\t\t\t\t\t\t\t.fail( newDefer.reject )
\t\t\t\t\t\t\t\t\t\t.progress( newDefer.notify );
\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\tnewDefer[ tuple[ 0 ] + \"With\" ]( this === promise ? newDefer.promise() : this, fn ? [ returned ] : arguments );
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t});
\t\t\t\t\t\t});
\t\t\t\t\t\tfns = null;
\t\t\t\t\t}).promise();
\t\t\t\t},
\t\t\t\t// Get a promise for this deferred
\t\t\t\t// If obj is provided, the promise aspect is added to the object
\t\t\t\tpromise: function( obj ) {
\t\t\t\t\treturn obj != null ? jQuery.extend( obj, promise ) : promise;
\t\t\t\t}
\t\t\t},
\t\t\tdeferred = {};

\t\t// Keep pipe for back-compat
\t\tpromise.pipe = promise.then;

\t\t// Add list-specific methods
\t\tjQuery.each( tuples, function( i, tuple ) {
\t\t\tvar list = tuple[ 2 ],
\t\t\t\tstateString = tuple[ 3 ];

\t\t\t// promise[ done | fail | progress ] = list.add
\t\t\tpromise[ tuple[1] ] = list.add;

\t\t\t// Handle state
\t\t\tif ( stateString ) {
\t\t\t\tlist.add(function() {
\t\t\t\t\t// state = [ resolved | rejected ]
\t\t\t\t\tstate = stateString;

\t\t\t\t// [ reject_list | resolve_list ].disable; progress_list.lock
\t\t\t\t}, tuples[ i ^ 1 ][ 2 ].disable, tuples[ 2 ][ 2 ].lock );
\t\t\t}

\t\t\t// deferred[ resolve | reject | notify ]
\t\t\tdeferred[ tuple[0] ] = function() {
\t\t\t\tdeferred[ tuple[0] + \"With\" ]( this === deferred ? promise : this, arguments );
\t\t\t\treturn this;
\t\t\t};
\t\t\tdeferred[ tuple[0] + \"With\" ] = list.fireWith;
\t\t});

\t\t// Make the deferred a promise
\t\tpromise.promise( deferred );

\t\t// Call given func if any
\t\tif ( func ) {
\t\t\tfunc.call( deferred, deferred );
\t\t}

\t\t// All done!
\t\treturn deferred;
\t},

\t// Deferred helper
\twhen: function( subordinate /* , ..., subordinateN */ ) {
\t\tvar i = 0,
\t\t\tresolveValues = slice.call( arguments ),
\t\t\tlength = resolveValues.length,

\t\t\t// the count of uncompleted subordinates
\t\t\tremaining = length !== 1 || ( subordinate && jQuery.isFunction( subordinate.promise ) ) ? length : 0,

\t\t\t// the master Deferred. If resolveValues consist of only a single Deferred, just use that.
\t\t\tdeferred = remaining === 1 ? subordinate : jQuery.Deferred(),

\t\t\t// Update function for both resolve and progress values
\t\t\tupdateFunc = function( i, contexts, values ) {
\t\t\t\treturn function( value ) {
\t\t\t\t\tcontexts[ i ] = this;
\t\t\t\t\tvalues[ i ] = arguments.length > 1 ? slice.call( arguments ) : value;
\t\t\t\t\tif ( values === progressValues ) {
\t\t\t\t\t\tdeferred.notifyWith( contexts, values );
\t\t\t\t\t} else if ( !( --remaining ) ) {
\t\t\t\t\t\tdeferred.resolveWith( contexts, values );
\t\t\t\t\t}
\t\t\t\t};
\t\t\t},

\t\t\tprogressValues, progressContexts, resolveContexts;

\t\t// Add listeners to Deferred subordinates; treat others as resolved
\t\tif ( length > 1 ) {
\t\t\tprogressValues = new Array( length );
\t\t\tprogressContexts = new Array( length );
\t\t\tresolveContexts = new Array( length );
\t\t\tfor ( ; i < length; i++ ) {
\t\t\t\tif ( resolveValues[ i ] && jQuery.isFunction( resolveValues[ i ].promise ) ) {
\t\t\t\t\tresolveValues[ i ].promise()
\t\t\t\t\t\t.done( updateFunc( i, resolveContexts, resolveValues ) )
\t\t\t\t\t\t.fail( deferred.reject )
\t\t\t\t\t\t.progress( updateFunc( i, progressContexts, progressValues ) );
\t\t\t\t} else {
\t\t\t\t\t--remaining;
\t\t\t\t}
\t\t\t}
\t\t}

\t\t// If we're not waiting on anything, resolve the master
\t\tif ( !remaining ) {
\t\t\tdeferred.resolveWith( resolveContexts, resolveValues );
\t\t}

\t\treturn deferred.promise();
\t}
});


// The deferred used on DOM ready
var readyList;

jQuery.fn.ready = function( fn ) {
\t// Add the callback
\tjQuery.ready.promise().done( fn );

\treturn this;
};

jQuery.extend({
\t// Is the DOM ready to be used? Set to true once it occurs.
\tisReady: false,

\t// A counter to track how many items to wait for before
\t// the ready event fires. See #6781
\treadyWait: 1,

\t// Hold (or release) the ready event
\tholdReady: function( hold ) {
\t\tif ( hold ) {
\t\t\tjQuery.readyWait++;
\t\t} else {
\t\t\tjQuery.ready( true );
\t\t}
\t},

\t// Handle when the DOM is ready
\tready: function( wait ) {

\t\t// Abort if there are pending holds or we're already ready
\t\tif ( wait === true ? --jQuery.readyWait : jQuery.isReady ) {
\t\t\treturn;
\t\t}

\t\t// Remember that the DOM is ready
\t\tjQuery.isReady = true;

\t\t// If a normal DOM Ready event fired, decrement, and wait if need be
\t\tif ( wait !== true && --jQuery.readyWait > 0 ) {
\t\t\treturn;
\t\t}

\t\t// If there are functions bound, to execute
\t\treadyList.resolveWith( document, [ jQuery ] );

\t\t// Trigger any bound ready events
\t\tif ( jQuery.fn.triggerHandler ) {
\t\t\tjQuery( document ).triggerHandler( \"ready\" );
\t\t\tjQuery( document ).off( \"ready\" );
\t\t}
\t}
});

/**
 * The ready event handler and self cleanup method
 */
function completed() {
\tdocument.removeEventListener( \"DOMContentLoaded\", completed, false );
\twindow.removeEventListener( \"load\", completed, false );
\tjQuery.ready();
}

jQuery.ready.promise = function( obj ) {
\tif ( !readyList ) {

\t\treadyList = jQuery.Deferred();

\t\t// Catch cases where \$(document).ready() is called after the browser event has already occurred.
\t\t// We once tried to use readyState \"interactive\" here, but it caused issues like the one
\t\t// discovered by ChrisS here: http://bugs.jquery.com/ticket/12282#comment:15
\t\tif ( document.readyState === \"complete\" ) {
\t\t\t// Handle it asynchronously to allow scripts the opportunity to delay ready
\t\t\tsetTimeout( jQuery.ready );

\t\t} else {

\t\t\t// Use the handy event callback
\t\t\tdocument.addEventListener( \"DOMContentLoaded\", completed, false );

\t\t\t// A fallback to window.onload, that will always work
\t\t\twindow.addEventListener( \"load\", completed, false );
\t\t}
\t}
\treturn readyList.promise( obj );
};

// Kick off the DOM ready check even if the user does not
jQuery.ready.promise();




// Multifunctional method to get and set values of a collection
// The value/s can optionally be executed if it's a function
var access = jQuery.access = function( elems, fn, key, value, chainable, emptyGet, raw ) {
\tvar i = 0,
\t\tlen = elems.length,
\t\tbulk = key == null;

\t// Sets many values
\tif ( jQuery.type( key ) === \"object\" ) {
\t\tchainable = true;
\t\tfor ( i in key ) {
\t\t\tjQuery.access( elems, fn, i, key[i], true, emptyGet, raw );
\t\t}

\t// Sets one value
\t} else if ( value !== undefined ) {
\t\tchainable = true;

\t\tif ( !jQuery.isFunction( value ) ) {
\t\t\traw = true;
\t\t}

\t\tif ( bulk ) {
\t\t\t// Bulk operations run against the entire set
\t\t\tif ( raw ) {
\t\t\t\tfn.call( elems, value );
\t\t\t\tfn = null;

\t\t\t// ...except when executing function values
\t\t\t} else {
\t\t\t\tbulk = fn;
\t\t\t\tfn = function( elem, key, value ) {
\t\t\t\t\treturn bulk.call( jQuery( elem ), value );
\t\t\t\t};
\t\t\t}
\t\t}

\t\tif ( fn ) {
\t\t\tfor ( ; i < len; i++ ) {
\t\t\t\tfn( elems[i], key, raw ? value : value.call( elems[i], i, fn( elems[i], key ) ) );
\t\t\t}
\t\t}
\t}

\treturn chainable ?
\t\telems :

\t\t// Gets
\t\tbulk ?
\t\t\tfn.call( elems ) :
\t\t\tlen ? fn( elems[0], key ) : emptyGet;
};


/**
 * Determines whether an object can have data
 */
jQuery.acceptData = function( owner ) {
\t// Accepts only:
\t//  - Node
\t//    - Node.ELEMENT_NODE
\t//    - Node.DOCUMENT_NODE
\t//  - Object
\t//    - Any
\t/* jshint -W018 */
\treturn owner.nodeType === 1 || owner.nodeType === 9 || !( +owner.nodeType );
};


function Data() {
\t// Support: Android<4,
\t// Old WebKit does not have Object.preventExtensions/freeze method,
\t// return new empty object instead with no [[set]] accessor
\tObject.defineProperty( this.cache = {}, 0, {
\t\tget: function() {
\t\t\treturn {};
\t\t}
\t});

\tthis.expando = jQuery.expando + Data.uid++;
}

Data.uid = 1;
Data.accepts = jQuery.acceptData;

Data.prototype = {
\tkey: function( owner ) {
\t\t// We can accept data for non-element nodes in modern browsers,
\t\t// but we should not, see #8335.
\t\t// Always return the key for a frozen object.
\t\tif ( !Data.accepts( owner ) ) {
\t\t\treturn 0;
\t\t}

\t\tvar descriptor = {},
\t\t\t// Check if the owner object already has a cache key
\t\t\tunlock = owner[ this.expando ];

\t\t// If not, create one
\t\tif ( !unlock ) {
\t\t\tunlock = Data.uid++;

\t\t\t// Secure it in a non-enumerable, non-writable property
\t\t\ttry {
\t\t\t\tdescriptor[ this.expando ] = { value: unlock };
\t\t\t\tObject.defineProperties( owner, descriptor );

\t\t\t// Support: Android<4
\t\t\t// Fallback to a less secure definition
\t\t\t} catch ( e ) {
\t\t\t\tdescriptor[ this.expando ] = unlock;
\t\t\t\tjQuery.extend( owner, descriptor );
\t\t\t}
\t\t}

\t\t// Ensure the cache object
\t\tif ( !this.cache[ unlock ] ) {
\t\t\tthis.cache[ unlock ] = {};
\t\t}

\t\treturn unlock;
\t},
\tset: function( owner, data, value ) {
\t\tvar prop,
\t\t\t// There may be an unlock assigned to this node,
\t\t\t// if there is no entry for this \"owner\", create one inline
\t\t\t// and set the unlock as though an owner entry had always existed
\t\t\tunlock = this.key( owner ),
\t\t\tcache = this.cache[ unlock ];

\t\t// Handle: [ owner, key, value ] args
\t\tif ( typeof data === \"string\" ) {
\t\t\tcache[ data ] = value;

\t\t// Handle: [ owner, { properties } ] args
\t\t} else {
\t\t\t// Fresh assignments by object are shallow copied
\t\t\tif ( jQuery.isEmptyObject( cache ) ) {
\t\t\t\tjQuery.extend( this.cache[ unlock ], data );
\t\t\t// Otherwise, copy the properties one-by-one to the cache object
\t\t\t} else {
\t\t\t\tfor ( prop in data ) {
\t\t\t\t\tcache[ prop ] = data[ prop ];
\t\t\t\t}
\t\t\t}
\t\t}
\t\treturn cache;
\t},
\tget: function( owner, key ) {
\t\t// Either a valid cache is found, or will be created.
\t\t// New caches will be created and the unlock returned,
\t\t// allowing direct access to the newly created
\t\t// empty data object. A valid owner object must be provided.
\t\tvar cache = this.cache[ this.key( owner ) ];

\t\treturn key === undefined ?
\t\t\tcache : cache[ key ];
\t},
\taccess: function( owner, key, value ) {
\t\tvar stored;
\t\t// In cases where either:
\t\t//
\t\t//   1. No key was specified
\t\t//   2. A string key was specified, but no value provided
\t\t//
\t\t// Take the \"read\" path and allow the get method to determine
\t\t// which value to return, respectively either:
\t\t//
\t\t//   1. The entire cache object
\t\t//   2. The data stored at the key
\t\t//
\t\tif ( key === undefined ||
\t\t\t\t((key && typeof key === \"string\") && value === undefined) ) {

\t\t\tstored = this.get( owner, key );

\t\t\treturn stored !== undefined ?
\t\t\t\tstored : this.get( owner, jQuery.camelCase(key) );
\t\t}

\t\t// [*]When the key is not a string, or both a key and value
\t\t// are specified, set or extend (existing objects) with either:
\t\t//
\t\t//   1. An object of properties
\t\t//   2. A key and value
\t\t//
\t\tthis.set( owner, key, value );

\t\t// Since the \"set\" path can have two possible entry points
\t\t// return the expected data based on which path was taken[*]
\t\treturn value !== undefined ? value : key;
\t},
\tremove: function( owner, key ) {
\t\tvar i, name, camel,
\t\t\tunlock = this.key( owner ),
\t\t\tcache = this.cache[ unlock ];

\t\tif ( key === undefined ) {
\t\t\tthis.cache[ unlock ] = {};

\t\t} else {
\t\t\t// Support array or space separated string of keys
\t\t\tif ( jQuery.isArray( key ) ) {
\t\t\t\t// If \"name\" is an array of keys...
\t\t\t\t// When data is initially created, via (\"key\", \"val\") signature,
\t\t\t\t// keys will be converted to camelCase.
\t\t\t\t// Since there is no way to tell _how_ a key was added, remove
\t\t\t\t// both plain key and camelCase key. #12786
\t\t\t\t// This will only penalize the array argument path.
\t\t\t\tname = key.concat( key.map( jQuery.camelCase ) );
\t\t\t} else {
\t\t\t\tcamel = jQuery.camelCase( key );
\t\t\t\t// Try the string as a key before any manipulation
\t\t\t\tif ( key in cache ) {
\t\t\t\t\tname = [ key, camel ];
\t\t\t\t} else {
\t\t\t\t\t// If a key with the spaces exists, use it.
\t\t\t\t\t// Otherwise, create an array by matching non-whitespace
\t\t\t\t\tname = camel;
\t\t\t\t\tname = name in cache ?
\t\t\t\t\t\t[ name ] : ( name.match( rnotwhite ) || [] );
\t\t\t\t}
\t\t\t}

\t\t\ti = name.length;
\t\t\twhile ( i-- ) {
\t\t\t\tdelete cache[ name[ i ] ];
\t\t\t}
\t\t}
\t},
\thasData: function( owner ) {
\t\treturn !jQuery.isEmptyObject(
\t\t\tthis.cache[ owner[ this.expando ] ] || {}
\t\t);
\t},
\tdiscard: function( owner ) {
\t\tif ( owner[ this.expando ] ) {
\t\t\tdelete this.cache[ owner[ this.expando ] ];
\t\t}
\t}
};
var data_priv = new Data();

var data_user = new Data();



//\tImplementation Summary
//
//\t1. Enforce API surface and semantic compatibility with 1.9.x branch
//\t2. Improve the module's maintainability by reducing the storage
//\t\tpaths to a single mechanism.
//\t3. Use the same single mechanism to support \"private\" and \"user\" data.
//\t4. _Never_ expose \"private\" data to user code (TODO: Drop _data, _removeData)
//\t5. Avoid exposing implementation details on user objects (eg. expando properties)
//\t6. Provide a clear path for implementation upgrade to WeakMap in 2014

var rbrace = /^(?:\\{[\\w\\W]*\\}|\\[[\\w\\W]*\\])\$/,
\trmultiDash = /([A-Z])/g;

function dataAttr( elem, key, data ) {
\tvar name;

\t// If nothing was found internally, try to fetch any
\t// data from the HTML5 data-* attribute
\tif ( data === undefined && elem.nodeType === 1 ) {
\t\tname = \"data-\" + key.replace( rmultiDash, \"-\$1\" ).toLowerCase();
\t\tdata = elem.getAttribute( name );

\t\tif ( typeof data === \"string\" ) {
\t\t\ttry {
\t\t\t\tdata = data === \"true\" ? true :
\t\t\t\t\tdata === \"false\" ? false :
\t\t\t\t\tdata === \"null\" ? null :
\t\t\t\t\t// Only convert to a number if it doesn't change the string
\t\t\t\t\t+data + \"\" === data ? +data :
\t\t\t\t\trbrace.test( data ) ? jQuery.parseJSON( data ) :
\t\t\t\t\tdata;
\t\t\t} catch( e ) {}

\t\t\t// Make sure we set the data so it isn't changed later
\t\t\tdata_user.set( elem, key, data );
\t\t} else {
\t\t\tdata = undefined;
\t\t}
\t}
\treturn data;
}

jQuery.extend({
\thasData: function( elem ) {
\t\treturn data_user.hasData( elem ) || data_priv.hasData( elem );
\t},

\tdata: function( elem, name, data ) {
\t\treturn data_user.access( elem, name, data );
\t},

\tremoveData: function( elem, name ) {
\t\tdata_user.remove( elem, name );
\t},

\t// TODO: Now that all calls to _data and _removeData have been replaced
\t// with direct calls to data_priv methods, these can be deprecated.
\t_data: function( elem, name, data ) {
\t\treturn data_priv.access( elem, name, data );
\t},

\t_removeData: function( elem, name ) {
\t\tdata_priv.remove( elem, name );
\t}
});

jQuery.fn.extend({
\tdata: function( key, value ) {
\t\tvar i, name, data,
\t\t\telem = this[ 0 ],
\t\t\tattrs = elem && elem.attributes;

\t\t// Gets all values
\t\tif ( key === undefined ) {
\t\t\tif ( this.length ) {
\t\t\t\tdata = data_user.get( elem );

\t\t\t\tif ( elem.nodeType === 1 && !data_priv.get( elem, \"hasDataAttrs\" ) ) {
\t\t\t\t\ti = attrs.length;
\t\t\t\t\twhile ( i-- ) {

\t\t\t\t\t\t// Support: IE11+
\t\t\t\t\t\t// The attrs elements can be null (#14894)
\t\t\t\t\t\tif ( attrs[ i ] ) {
\t\t\t\t\t\t\tname = attrs[ i ].name;
\t\t\t\t\t\t\tif ( name.indexOf( \"data-\" ) === 0 ) {
\t\t\t\t\t\t\t\tname = jQuery.camelCase( name.slice(5) );
\t\t\t\t\t\t\t\tdataAttr( elem, name, data[ name ] );
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\tdata_priv.set( elem, \"hasDataAttrs\", true );
\t\t\t\t}
\t\t\t}

\t\t\treturn data;
\t\t}

\t\t// Sets multiple values
\t\tif ( typeof key === \"object\" ) {
\t\t\treturn this.each(function() {
\t\t\t\tdata_user.set( this, key );
\t\t\t});
\t\t}

\t\treturn access( this, function( value ) {
\t\t\tvar data,
\t\t\t\tcamelKey = jQuery.camelCase( key );

\t\t\t// The calling jQuery object (element matches) is not empty
\t\t\t// (and therefore has an element appears at this[ 0 ]) and the
\t\t\t// `value` parameter was not undefined. An empty jQuery object
\t\t\t// will result in `undefined` for elem = this[ 0 ] which will
\t\t\t// throw an exception if an attempt to read a data cache is made.
\t\t\tif ( elem && value === undefined ) {
\t\t\t\t// Attempt to get data from the cache
\t\t\t\t// with the key as-is
\t\t\t\tdata = data_user.get( elem, key );
\t\t\t\tif ( data !== undefined ) {
\t\t\t\t\treturn data;
\t\t\t\t}

\t\t\t\t// Attempt to get data from the cache
\t\t\t\t// with the key camelized
\t\t\t\tdata = data_user.get( elem, camelKey );
\t\t\t\tif ( data !== undefined ) {
\t\t\t\t\treturn data;
\t\t\t\t}

\t\t\t\t// Attempt to \"discover\" the data in
\t\t\t\t// HTML5 custom data-* attrs
\t\t\t\tdata = dataAttr( elem, camelKey, undefined );
\t\t\t\tif ( data !== undefined ) {
\t\t\t\t\treturn data;
\t\t\t\t}

\t\t\t\t// We tried really hard, but the data doesn't exist.
\t\t\t\treturn;
\t\t\t}

\t\t\t// Set the data...
\t\t\tthis.each(function() {
\t\t\t\t// First, attempt to store a copy or reference of any
\t\t\t\t// data that might've been store with a camelCased key.
\t\t\t\tvar data = data_user.get( this, camelKey );

\t\t\t\t// For HTML5 data-* attribute interop, we have to
\t\t\t\t// store property names with dashes in a camelCase form.
\t\t\t\t// This might not apply to all properties...*
\t\t\t\tdata_user.set( this, camelKey, value );

\t\t\t\t// *... In the case of properties that might _actually_
\t\t\t\t// have dashes, we need to also store a copy of that
\t\t\t\t// unchanged property.
\t\t\t\tif ( key.indexOf(\"-\") !== -1 && data !== undefined ) {
\t\t\t\t\tdata_user.set( this, key, value );
\t\t\t\t}
\t\t\t});
\t\t}, null, value, arguments.length > 1, null, true );
\t},

\tremoveData: function( key ) {
\t\treturn this.each(function() {
\t\t\tdata_user.remove( this, key );
\t\t});
\t}
});


jQuery.extend({
\tqueue: function( elem, type, data ) {
\t\tvar queue;

\t\tif ( elem ) {
\t\t\ttype = ( type || \"fx\" ) + \"queue\";
\t\t\tqueue = data_priv.get( elem, type );

\t\t\t// Speed up dequeue by getting out quickly if this is just a lookup
\t\t\tif ( data ) {
\t\t\t\tif ( !queue || jQuery.isArray( data ) ) {
\t\t\t\t\tqueue = data_priv.access( elem, type, jQuery.makeArray(data) );
\t\t\t\t} else {
\t\t\t\t\tqueue.push( data );
\t\t\t\t}
\t\t\t}
\t\t\treturn queue || [];
\t\t}
\t},

\tdequeue: function( elem, type ) {
\t\ttype = type || \"fx\";

\t\tvar queue = jQuery.queue( elem, type ),
\t\t\tstartLength = queue.length,
\t\t\tfn = queue.shift(),
\t\t\thooks = jQuery._queueHooks( elem, type ),
\t\t\tnext = function() {
\t\t\t\tjQuery.dequeue( elem, type );
\t\t\t};

\t\t// If the fx queue is dequeued, always remove the progress sentinel
\t\tif ( fn === \"inprogress\" ) {
\t\t\tfn = queue.shift();
\t\t\tstartLength--;
\t\t}

\t\tif ( fn ) {

\t\t\t// Add a progress sentinel to prevent the fx queue from being
\t\t\t// automatically dequeued
\t\t\tif ( type === \"fx\" ) {
\t\t\t\tqueue.unshift( \"inprogress\" );
\t\t\t}

\t\t\t// Clear up the last queue stop function
\t\t\tdelete hooks.stop;
\t\t\tfn.call( elem, next, hooks );
\t\t}

\t\tif ( !startLength && hooks ) {
\t\t\thooks.empty.fire();
\t\t}
\t},

\t// Not public - generate a queueHooks object, or return the current one
\t_queueHooks: function( elem, type ) {
\t\tvar key = type + \"queueHooks\";
\t\treturn data_priv.get( elem, key ) || data_priv.access( elem, key, {
\t\t\tempty: jQuery.Callbacks(\"once memory\").add(function() {
\t\t\t\tdata_priv.remove( elem, [ type + \"queue\", key ] );
\t\t\t})
\t\t});
\t}
});

jQuery.fn.extend({
\tqueue: function( type, data ) {
\t\tvar setter = 2;

\t\tif ( typeof type !== \"string\" ) {
\t\t\tdata = type;
\t\t\ttype = \"fx\";
\t\t\tsetter--;
\t\t}

\t\tif ( arguments.length < setter ) {
\t\t\treturn jQuery.queue( this[0], type );
\t\t}

\t\treturn data === undefined ?
\t\t\tthis :
\t\t\tthis.each(function() {
\t\t\t\tvar queue = jQuery.queue( this, type, data );

\t\t\t\t// Ensure a hooks for this queue
\t\t\t\tjQuery._queueHooks( this, type );

\t\t\t\tif ( type === \"fx\" && queue[0] !== \"inprogress\" ) {
\t\t\t\t\tjQuery.dequeue( this, type );
\t\t\t\t}
\t\t\t});
\t},
\tdequeue: function( type ) {
\t\treturn this.each(function() {
\t\t\tjQuery.dequeue( this, type );
\t\t});
\t},
\tclearQueue: function( type ) {
\t\treturn this.queue( type || \"fx\", [] );
\t},
\t// Get a promise resolved when queues of a certain type
\t// are emptied (fx is the type by default)
\tpromise: function( type, obj ) {
\t\tvar tmp,
\t\t\tcount = 1,
\t\t\tdefer = jQuery.Deferred(),
\t\t\telements = this,
\t\t\ti = this.length,
\t\t\tresolve = function() {
\t\t\t\tif ( !( --count ) ) {
\t\t\t\t\tdefer.resolveWith( elements, [ elements ] );
\t\t\t\t}
\t\t\t};

\t\tif ( typeof type !== \"string\" ) {
\t\t\tobj = type;
\t\t\ttype = undefined;
\t\t}
\t\ttype = type || \"fx\";

\t\twhile ( i-- ) {
\t\t\ttmp = data_priv.get( elements[ i ], type + \"queueHooks\" );
\t\t\tif ( tmp && tmp.empty ) {
\t\t\t\tcount++;
\t\t\t\ttmp.empty.add( resolve );
\t\t\t}
\t\t}
\t\tresolve();
\t\treturn defer.promise( obj );
\t}
});
var pnum = (/[+-]?(?:\\d*\\.|)\\d+(?:[eE][+-]?\\d+|)/).source;

var cssExpand = [ \"Top\", \"Right\", \"Bottom\", \"Left\" ];

var isHidden = function( elem, el ) {
\t\t// isHidden might be called from jQuery#filter function;
\t\t// in that case, element will be second argument
\t\telem = el || elem;
\t\treturn jQuery.css( elem, \"display\" ) === \"none\" || !jQuery.contains( elem.ownerDocument, elem );
\t};

var rcheckableType = (/^(?:checkbox|radio)\$/i);



(function() {
\tvar fragment = document.createDocumentFragment(),
\t\tdiv = fragment.appendChild( document.createElement( \"div\" ) ),
\t\tinput = document.createElement( \"input\" );

\t// Support: Safari<=5.1
\t// Check state lost if the name is set (#11217)
\t// Support: Windows Web Apps (WWA)
\t// `name` and `type` must use .setAttribute for WWA (#14901)
\tinput.setAttribute( \"type\", \"radio\" );
\tinput.setAttribute( \"checked\", \"checked\" );
\tinput.setAttribute( \"name\", \"t\" );

\tdiv.appendChild( input );

\t// Support: Safari<=5.1, Android<4.2
\t// Older WebKit doesn't clone checked state correctly in fragments
\tsupport.checkClone = div.cloneNode( true ).cloneNode( true ).lastChild.checked;

\t// Support: IE<=11+
\t// Make sure textarea (and checkbox) defaultValue is properly cloned
\tdiv.innerHTML = \"<textarea>x</textarea>\";
\tsupport.noCloneChecked = !!div.cloneNode( true ).lastChild.defaultValue;
})();
var strundefined = typeof undefined;



support.focusinBubbles = \"onfocusin\" in window;


var
\trkeyEvent = /^key/,
\trmouseEvent = /^(?:mouse|pointer|contextmenu)|click/,
\trfocusMorph = /^(?:focusinfocus|focusoutblur)\$/,
\trtypenamespace = /^([^.]*)(?:\\.(.+)|)\$/;

function returnTrue() {
\treturn true;
}

function returnFalse() {
\treturn false;
}

function safeActiveElement() {
\ttry {
\t\treturn document.activeElement;
\t} catch ( err ) { }
}

/*
 * Helper functions for managing events -- not part of the public interface.
 * Props to Dean Edwards' addEvent library for many of the ideas.
 */
jQuery.event = {

\tglobal: {},

\tadd: function( elem, types, handler, data, selector ) {

\t\tvar handleObjIn, eventHandle, tmp,
\t\t\tevents, t, handleObj,
\t\t\tspecial, handlers, type, namespaces, origType,
\t\t\telemData = data_priv.get( elem );

\t\t// Don't attach events to noData or text/comment nodes (but allow plain objects)
\t\tif ( !elemData ) {
\t\t\treturn;
\t\t}

\t\t// Caller can pass in an object of custom data in lieu of the handler
\t\tif ( handler.handler ) {
\t\t\thandleObjIn = handler;
\t\t\thandler = handleObjIn.handler;
\t\t\tselector = handleObjIn.selector;
\t\t}

\t\t// Make sure that the handler has a unique ID, used to find/remove it later
\t\tif ( !handler.guid ) {
\t\t\thandler.guid = jQuery.guid++;
\t\t}

\t\t// Init the element's event structure and main handler, if this is the first
\t\tif ( !(events = elemData.events) ) {
\t\t\tevents = elemData.events = {};
\t\t}
\t\tif ( !(eventHandle = elemData.handle) ) {
\t\t\teventHandle = elemData.handle = function( e ) {
\t\t\t\t// Discard the second event of a jQuery.event.trigger() and
\t\t\t\t// when an event is called after a page has unloaded
\t\t\t\treturn typeof jQuery !== strundefined && jQuery.event.triggered !== e.type ?
\t\t\t\t\tjQuery.event.dispatch.apply( elem, arguments ) : undefined;
\t\t\t};
\t\t}

\t\t// Handle multiple events separated by a space
\t\ttypes = ( types || \"\" ).match( rnotwhite ) || [ \"\" ];
\t\tt = types.length;
\t\twhile ( t-- ) {
\t\t\ttmp = rtypenamespace.exec( types[t] ) || [];
\t\t\ttype = origType = tmp[1];
\t\t\tnamespaces = ( tmp[2] || \"\" ).split( \".\" ).sort();

\t\t\t// There *must* be a type, no attaching namespace-only handlers
\t\t\tif ( !type ) {
\t\t\t\tcontinue;
\t\t\t}

\t\t\t// If event changes its type, use the special event handlers for the changed type
\t\t\tspecial = jQuery.event.special[ type ] || {};

\t\t\t// If selector defined, determine special event api type, otherwise given type
\t\t\ttype = ( selector ? special.delegateType : special.bindType ) || type;

\t\t\t// Update special based on newly reset type
\t\t\tspecial = jQuery.event.special[ type ] || {};

\t\t\t// handleObj is passed to all event handlers
\t\t\thandleObj = jQuery.extend({
\t\t\t\ttype: type,
\t\t\t\torigType: origType,
\t\t\t\tdata: data,
\t\t\t\thandler: handler,
\t\t\t\tguid: handler.guid,
\t\t\t\tselector: selector,
\t\t\t\tneedsContext: selector && jQuery.expr.match.needsContext.test( selector ),
\t\t\t\tnamespace: namespaces.join(\".\")
\t\t\t}, handleObjIn );

\t\t\t// Init the event handler queue if we're the first
\t\t\tif ( !(handlers = events[ type ]) ) {
\t\t\t\thandlers = events[ type ] = [];
\t\t\t\thandlers.delegateCount = 0;

\t\t\t\t// Only use addEventListener if the special events handler returns false
\t\t\t\tif ( !special.setup || special.setup.call( elem, data, namespaces, eventHandle ) === false ) {
\t\t\t\t\tif ( elem.addEventListener ) {
\t\t\t\t\t\telem.addEventListener( type, eventHandle, false );
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t\t\tif ( special.add ) {
\t\t\t\tspecial.add.call( elem, handleObj );

\t\t\t\tif ( !handleObj.handler.guid ) {
\t\t\t\t\thandleObj.handler.guid = handler.guid;
\t\t\t\t}
\t\t\t}

\t\t\t// Add to the element's handler list, delegates in front
\t\t\tif ( selector ) {
\t\t\t\thandlers.splice( handlers.delegateCount++, 0, handleObj );
\t\t\t} else {
\t\t\t\thandlers.push( handleObj );
\t\t\t}

\t\t\t// Keep track of which events have ever been used, for event optimization
\t\t\tjQuery.event.global[ type ] = true;
\t\t}

\t},

\t// Detach an event or set of events from an element
\tremove: function( elem, types, handler, selector, mappedTypes ) {

\t\tvar j, origCount, tmp,
\t\t\tevents, t, handleObj,
\t\t\tspecial, handlers, type, namespaces, origType,
\t\t\telemData = data_priv.hasData( elem ) && data_priv.get( elem );

\t\tif ( !elemData || !(events = elemData.events) ) {
\t\t\treturn;
\t\t}

\t\t// Once for each type.namespace in types; type may be omitted
\t\ttypes = ( types || \"\" ).match( rnotwhite ) || [ \"\" ];
\t\tt = types.length;
\t\twhile ( t-- ) {
\t\t\ttmp = rtypenamespace.exec( types[t] ) || [];
\t\t\ttype = origType = tmp[1];
\t\t\tnamespaces = ( tmp[2] || \"\" ).split( \".\" ).sort();

\t\t\t// Unbind all events (on this namespace, if provided) for the element
\t\t\tif ( !type ) {
\t\t\t\tfor ( type in events ) {
\t\t\t\t\tjQuery.event.remove( elem, type + types[ t ], handler, selector, true );
\t\t\t\t}
\t\t\t\tcontinue;
\t\t\t}

\t\t\tspecial = jQuery.event.special[ type ] || {};
\t\t\ttype = ( selector ? special.delegateType : special.bindType ) || type;
\t\t\thandlers = events[ type ] || [];
\t\t\ttmp = tmp[2] && new RegExp( \"(^|\\\\.)\" + namespaces.join(\"\\\\.(?:.*\\\\.|)\") + \"(\\\\.|\$)\" );

\t\t\t// Remove matching events
\t\t\torigCount = j = handlers.length;
\t\t\twhile ( j-- ) {
\t\t\t\thandleObj = handlers[ j ];

\t\t\t\tif ( ( mappedTypes || origType === handleObj.origType ) &&
\t\t\t\t\t( !handler || handler.guid === handleObj.guid ) &&
\t\t\t\t\t( !tmp || tmp.test( handleObj.namespace ) ) &&
\t\t\t\t\t( !selector || selector === handleObj.selector || selector === \"**\" && handleObj.selector ) ) {
\t\t\t\t\thandlers.splice( j, 1 );

\t\t\t\t\tif ( handleObj.selector ) {
\t\t\t\t\t\thandlers.delegateCount--;
\t\t\t\t\t}
\t\t\t\t\tif ( special.remove ) {
\t\t\t\t\t\tspecial.remove.call( elem, handleObj );
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t\t\t// Remove generic event handler if we removed something and no more handlers exist
\t\t\t// (avoids potential for endless recursion during removal of special event handlers)
\t\t\tif ( origCount && !handlers.length ) {
\t\t\t\tif ( !special.teardown || special.teardown.call( elem, namespaces, elemData.handle ) === false ) {
\t\t\t\t\tjQuery.removeEvent( elem, type, elemData.handle );
\t\t\t\t}

\t\t\t\tdelete events[ type ];
\t\t\t}
\t\t}

\t\t// Remove the expando if it's no longer used
\t\tif ( jQuery.isEmptyObject( events ) ) {
\t\t\tdelete elemData.handle;
\t\t\tdata_priv.remove( elem, \"events\" );
\t\t}
\t},

\ttrigger: function( event, data, elem, onlyHandlers ) {

\t\tvar i, cur, tmp, bubbleType, ontype, handle, special,
\t\t\teventPath = [ elem || document ],
\t\t\ttype = hasOwn.call( event, \"type\" ) ? event.type : event,
\t\t\tnamespaces = hasOwn.call( event, \"namespace\" ) ? event.namespace.split(\".\") : [];

\t\tcur = tmp = elem = elem || document;

\t\t// Don't do events on text and comment nodes
\t\tif ( elem.nodeType === 3 || elem.nodeType === 8 ) {
\t\t\treturn;
\t\t}

\t\t// focus/blur morphs to focusin/out; ensure we're not firing them right now
\t\tif ( rfocusMorph.test( type + jQuery.event.triggered ) ) {
\t\t\treturn;
\t\t}

\t\tif ( type.indexOf(\".\") >= 0 ) {
\t\t\t// Namespaced trigger; create a regexp to match event type in handle()
\t\t\tnamespaces = type.split(\".\");
\t\t\ttype = namespaces.shift();
\t\t\tnamespaces.sort();
\t\t}
\t\tontype = type.indexOf(\":\") < 0 && \"on\" + type;

\t\t// Caller can pass in a jQuery.Event object, Object, or just an event type string
\t\tevent = event[ jQuery.expando ] ?
\t\t\tevent :
\t\t\tnew jQuery.Event( type, typeof event === \"object\" && event );

\t\t// Trigger bitmask: & 1 for native handlers; & 2 for jQuery (always true)
\t\tevent.isTrigger = onlyHandlers ? 2 : 3;
\t\tevent.namespace = namespaces.join(\".\");
\t\tevent.namespace_re = event.namespace ?
\t\t\tnew RegExp( \"(^|\\\\.)\" + namespaces.join(\"\\\\.(?:.*\\\\.|)\") + \"(\\\\.|\$)\" ) :
\t\t\tnull;

\t\t// Clean up the event in case it is being reused
\t\tevent.result = undefined;
\t\tif ( !event.target ) {
\t\t\tevent.target = elem;
\t\t}

\t\t// Clone any incoming data and prepend the event, creating the handler arg list
\t\tdata = data == null ?
\t\t\t[ event ] :
\t\t\tjQuery.makeArray( data, [ event ] );

\t\t// Allow special events to draw outside the lines
\t\tspecial = jQuery.event.special[ type ] || {};
\t\tif ( !onlyHandlers && special.trigger && special.trigger.apply( elem, data ) === false ) {
\t\t\treturn;
\t\t}

\t\t// Determine event propagation path in advance, per W3C events spec (#9951)
\t\t// Bubble up to document, then to window; watch for a global ownerDocument var (#9724)
\t\tif ( !onlyHandlers && !special.noBubble && !jQuery.isWindow( elem ) ) {

\t\t\tbubbleType = special.delegateType || type;
\t\t\tif ( !rfocusMorph.test( bubbleType + type ) ) {
\t\t\t\tcur = cur.parentNode;
\t\t\t}
\t\t\tfor ( ; cur; cur = cur.parentNode ) {
\t\t\t\teventPath.push( cur );
\t\t\t\ttmp = cur;
\t\t\t}

\t\t\t// Only add window if we got to document (e.g., not plain obj or detached DOM)
\t\t\tif ( tmp === (elem.ownerDocument || document) ) {
\t\t\t\teventPath.push( tmp.defaultView || tmp.parentWindow || window );
\t\t\t}
\t\t}

\t\t// Fire handlers on the event path
\t\ti = 0;
\t\twhile ( (cur = eventPath[i++]) && !event.isPropagationStopped() ) {

\t\t\tevent.type = i > 1 ?
\t\t\t\tbubbleType :
\t\t\t\tspecial.bindType || type;

\t\t\t// jQuery handler
\t\t\thandle = ( data_priv.get( cur, \"events\" ) || {} )[ event.type ] && data_priv.get( cur, \"handle\" );
\t\t\tif ( handle ) {
\t\t\t\thandle.apply( cur, data );
\t\t\t}

\t\t\t// Native handler
\t\t\thandle = ontype && cur[ ontype ];
\t\t\tif ( handle && handle.apply && jQuery.acceptData( cur ) ) {
\t\t\t\tevent.result = handle.apply( cur, data );
\t\t\t\tif ( event.result === false ) {
\t\t\t\t\tevent.preventDefault();
\t\t\t\t}
\t\t\t}
\t\t}
\t\tevent.type = type;

\t\t// If nobody prevented the default action, do it now
\t\tif ( !onlyHandlers && !event.isDefaultPrevented() ) {

\t\t\tif ( (!special._default || special._default.apply( eventPath.pop(), data ) === false) &&
\t\t\t\tjQuery.acceptData( elem ) ) {

\t\t\t\t// Call a native DOM method on the target with the same name name as the event.
\t\t\t\t// Don't do default actions on window, that's where global variables be (#6170)
\t\t\t\tif ( ontype && jQuery.isFunction( elem[ type ] ) && !jQuery.isWindow( elem ) ) {

\t\t\t\t\t// Don't re-trigger an onFOO event when we call its FOO() method
\t\t\t\t\ttmp = elem[ ontype ];

\t\t\t\t\tif ( tmp ) {
\t\t\t\t\t\telem[ ontype ] = null;
\t\t\t\t\t}

\t\t\t\t\t// Prevent re-triggering of the same event, since we already bubbled it above
\t\t\t\t\tjQuery.event.triggered = type;
\t\t\t\t\telem[ type ]();
\t\t\t\t\tjQuery.event.triggered = undefined;

\t\t\t\t\tif ( tmp ) {
\t\t\t\t\t\telem[ ontype ] = tmp;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}

\t\treturn event.result;
\t},

\tdispatch: function( event ) {

\t\t// Make a writable jQuery.Event from the native event object
\t\tevent = jQuery.event.fix( event );

\t\tvar i, j, ret, matched, handleObj,
\t\t\thandlerQueue = [],
\t\t\targs = slice.call( arguments ),
\t\t\thandlers = ( data_priv.get( this, \"events\" ) || {} )[ event.type ] || [],
\t\t\tspecial = jQuery.event.special[ event.type ] || {};

\t\t// Use the fix-ed jQuery.Event rather than the (read-only) native event
\t\targs[0] = event;
\t\tevent.delegateTarget = this;

\t\t// Call the preDispatch hook for the mapped type, and let it bail if desired
\t\tif ( special.preDispatch && special.preDispatch.call( this, event ) === false ) {
\t\t\treturn;
\t\t}

\t\t// Determine handlers
\t\thandlerQueue = jQuery.event.handlers.call( this, event, handlers );

\t\t// Run delegates first; they may want to stop propagation beneath us
\t\ti = 0;
\t\twhile ( (matched = handlerQueue[ i++ ]) && !event.isPropagationStopped() ) {
\t\t\tevent.currentTarget = matched.elem;

\t\t\tj = 0;
\t\t\twhile ( (handleObj = matched.handlers[ j++ ]) && !event.isImmediatePropagationStopped() ) {

\t\t\t\t// Triggered event must either 1) have no namespace, or 2) have namespace(s)
\t\t\t\t// a subset or equal to those in the bound event (both can have no namespace).
\t\t\t\tif ( !event.namespace_re || event.namespace_re.test( handleObj.namespace ) ) {

\t\t\t\t\tevent.handleObj = handleObj;
\t\t\t\t\tevent.data = handleObj.data;

\t\t\t\t\tret = ( (jQuery.event.special[ handleObj.origType ] || {}).handle || handleObj.handler )
\t\t\t\t\t\t\t.apply( matched.elem, args );

\t\t\t\t\tif ( ret !== undefined ) {
\t\t\t\t\t\tif ( (event.result = ret) === false ) {
\t\t\t\t\t\t\tevent.preventDefault();
\t\t\t\t\t\t\tevent.stopPropagation();
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}

\t\t// Call the postDispatch hook for the mapped type
\t\tif ( special.postDispatch ) {
\t\t\tspecial.postDispatch.call( this, event );
\t\t}

\t\treturn event.result;
\t},

\thandlers: function( event, handlers ) {
\t\tvar i, matches, sel, handleObj,
\t\t\thandlerQueue = [],
\t\t\tdelegateCount = handlers.delegateCount,
\t\t\tcur = event.target;

\t\t// Find delegate handlers
\t\t// Black-hole SVG <use> instance trees (#13180)
\t\t// Avoid non-left-click bubbling in Firefox (#3861)
\t\tif ( delegateCount && cur.nodeType && (!event.button || event.type !== \"click\") ) {

\t\t\tfor ( ; cur !== this; cur = cur.parentNode || this ) {

\t\t\t\t// Don't process clicks on disabled elements (#6911, #8165, #11382, #11764)
\t\t\t\tif ( cur.disabled !== true || event.type !== \"click\" ) {
\t\t\t\t\tmatches = [];
\t\t\t\t\tfor ( i = 0; i < delegateCount; i++ ) {
\t\t\t\t\t\thandleObj = handlers[ i ];

\t\t\t\t\t\t// Don't conflict with Object.prototype properties (#13203)
\t\t\t\t\t\tsel = handleObj.selector + \" \";

\t\t\t\t\t\tif ( matches[ sel ] === undefined ) {
\t\t\t\t\t\t\tmatches[ sel ] = handleObj.needsContext ?
\t\t\t\t\t\t\t\tjQuery( sel, this ).index( cur ) >= 0 :
\t\t\t\t\t\t\t\tjQuery.find( sel, this, null, [ cur ] ).length;
\t\t\t\t\t\t}
\t\t\t\t\t\tif ( matches[ sel ] ) {
\t\t\t\t\t\t\tmatches.push( handleObj );
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\tif ( matches.length ) {
\t\t\t\t\t\thandlerQueue.push({ elem: cur, handlers: matches });
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}

\t\t// Add the remaining (directly-bound) handlers
\t\tif ( delegateCount < handlers.length ) {
\t\t\thandlerQueue.push({ elem: this, handlers: handlers.slice( delegateCount ) });
\t\t}

\t\treturn handlerQueue;
\t},

\t// Includes some event props shared by KeyEvent and MouseEvent
\tprops: \"altKey bubbles cancelable ctrlKey currentTarget eventPhase metaKey relatedTarget shiftKey target timeStamp view which\".split(\" \"),

\tfixHooks: {},

\tkeyHooks: {
\t\tprops: \"char charCode key keyCode\".split(\" \"),
\t\tfilter: function( event, original ) {

\t\t\t// Add which for key events
\t\t\tif ( event.which == null ) {
\t\t\t\tevent.which = original.charCode != null ? original.charCode : original.keyCode;
\t\t\t}

\t\t\treturn event;
\t\t}
\t},

\tmouseHooks: {
\t\tprops: \"button buttons clientX clientY offsetX offsetY pageX pageY screenX screenY toElement\".split(\" \"),
\t\tfilter: function( event, original ) {
\t\t\tvar eventDoc, doc, body,
\t\t\t\tbutton = original.button;

\t\t\t// Calculate pageX/Y if missing and clientX/Y available
\t\t\tif ( event.pageX == null && original.clientX != null ) {
\t\t\t\teventDoc = event.target.ownerDocument || document;
\t\t\t\tdoc = eventDoc.documentElement;
\t\t\t\tbody = eventDoc.body;

\t\t\t\tevent.pageX = original.clientX + ( doc && doc.scrollLeft || body && body.scrollLeft || 0 ) - ( doc && doc.clientLeft || body && body.clientLeft || 0 );
\t\t\t\tevent.pageY = original.clientY + ( doc && doc.scrollTop  || body && body.scrollTop  || 0 ) - ( doc && doc.clientTop  || body && body.clientTop  || 0 );
\t\t\t}

\t\t\t// Add which for click: 1 === left; 2 === middle; 3 === right
\t\t\t// Note: button is not normalized, so don't use it
\t\t\tif ( !event.which && button !== undefined ) {
\t\t\t\tevent.which = ( button & 1 ? 1 : ( button & 2 ? 3 : ( button & 4 ? 2 : 0 ) ) );
\t\t\t}

\t\t\treturn event;
\t\t}
\t},

\tfix: function( event ) {
\t\tif ( event[ jQuery.expando ] ) {
\t\t\treturn event;
\t\t}

\t\t// Create a writable copy of the event object and normalize some properties
\t\tvar i, prop, copy,
\t\t\ttype = event.type,
\t\t\toriginalEvent = event,
\t\t\tfixHook = this.fixHooks[ type ];

\t\tif ( !fixHook ) {
\t\t\tthis.fixHooks[ type ] = fixHook =
\t\t\t\trmouseEvent.test( type ) ? this.mouseHooks :
\t\t\t\trkeyEvent.test( type ) ? this.keyHooks :
\t\t\t\t{};
\t\t}
\t\tcopy = fixHook.props ? this.props.concat( fixHook.props ) : this.props;

\t\tevent = new jQuery.Event( originalEvent );

\t\ti = copy.length;
\t\twhile ( i-- ) {
\t\t\tprop = copy[ i ];
\t\t\tevent[ prop ] = originalEvent[ prop ];
\t\t}

\t\t// Support: Cordova 2.5 (WebKit) (#13255)
\t\t// All events should have a target; Cordova deviceready doesn't
\t\tif ( !event.target ) {
\t\t\tevent.target = document;
\t\t}

\t\t// Support: Safari 6.0+, Chrome<28
\t\t// Target should not be a text node (#504, #13143)
\t\tif ( event.target.nodeType === 3 ) {
\t\t\tevent.target = event.target.parentNode;
\t\t}

\t\treturn fixHook.filter ? fixHook.filter( event, originalEvent ) : event;
\t},

\tspecial: {
\t\tload: {
\t\t\t// Prevent triggered image.load events from bubbling to window.load
\t\t\tnoBubble: true
\t\t},
\t\tfocus: {
\t\t\t// Fire native event if possible so blur/focus sequence is correct
\t\t\ttrigger: function() {
\t\t\t\tif ( this !== safeActiveElement() && this.focus ) {
\t\t\t\t\tthis.focus();
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t},
\t\t\tdelegateType: \"focusin\"
\t\t},
\t\tblur: {
\t\t\ttrigger: function() {
\t\t\t\tif ( this === safeActiveElement() && this.blur ) {
\t\t\t\t\tthis.blur();
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t},
\t\t\tdelegateType: \"focusout\"
\t\t},
\t\tclick: {
\t\t\t// For checkbox, fire native event so checked state will be right
\t\t\ttrigger: function() {
\t\t\t\tif ( this.type === \"checkbox\" && this.click && jQuery.nodeName( this, \"input\" ) ) {
\t\t\t\t\tthis.click();
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t},

\t\t\t// For cross-browser consistency, don't fire native .click() on links
\t\t\t_default: function( event ) {
\t\t\t\treturn jQuery.nodeName( event.target, \"a\" );
\t\t\t}
\t\t},

\t\tbeforeunload: {
\t\t\tpostDispatch: function( event ) {

\t\t\t\t// Support: Firefox 20+
\t\t\t\t// Firefox doesn't alert if the returnValue field is not set.
\t\t\t\tif ( event.result !== undefined && event.originalEvent ) {
\t\t\t\t\tevent.originalEvent.returnValue = event.result;
\t\t\t\t}
\t\t\t}
\t\t}
\t},

\tsimulate: function( type, elem, event, bubble ) {
\t\t// Piggyback on a donor event to simulate a different one.
\t\t// Fake originalEvent to avoid donor's stopPropagation, but if the
\t\t// simulated event prevents default then we do the same on the donor.
\t\tvar e = jQuery.extend(
\t\t\tnew jQuery.Event(),
\t\t\tevent,
\t\t\t{
\t\t\t\ttype: type,
\t\t\t\tisSimulated: true,
\t\t\t\toriginalEvent: {}
\t\t\t}
\t\t);
\t\tif ( bubble ) {
\t\t\tjQuery.event.trigger( e, null, elem );
\t\t} else {
\t\t\tjQuery.event.dispatch.call( elem, e );
\t\t}
\t\tif ( e.isDefaultPrevented() ) {
\t\t\tevent.preventDefault();
\t\t}
\t}
};

jQuery.removeEvent = function( elem, type, handle ) {
\tif ( elem.removeEventListener ) {
\t\telem.removeEventListener( type, handle, false );
\t}
};

jQuery.Event = function( src, props ) {
\t// Allow instantiation without the 'new' keyword
\tif ( !(this instanceof jQuery.Event) ) {
\t\treturn new jQuery.Event( src, props );
\t}

\t// Event object
\tif ( src && src.type ) {
\t\tthis.originalEvent = src;
\t\tthis.type = src.type;

\t\t// Events bubbling up the document may have been marked as prevented
\t\t// by a handler lower down the tree; reflect the correct value.
\t\tthis.isDefaultPrevented = src.defaultPrevented ||
\t\t\t\tsrc.defaultPrevented === undefined &&
\t\t\t\t// Support: Android<4.0
\t\t\t\tsrc.returnValue === false ?
\t\t\treturnTrue :
\t\t\treturnFalse;

\t// Event type
\t} else {
\t\tthis.type = src;
\t}

\t// Put explicitly provided properties onto the event object
\tif ( props ) {
\t\tjQuery.extend( this, props );
\t}

\t// Create a timestamp if incoming event doesn't have one
\tthis.timeStamp = src && src.timeStamp || jQuery.now();

\t// Mark it as fixed
\tthis[ jQuery.expando ] = true;
};

// jQuery.Event is based on DOM3 Events as specified by the ECMAScript Language Binding
// http://www.w3.org/TR/2003/WD-DOM-Level-3-Events-20030331/ecma-script-binding.html
jQuery.Event.prototype = {
\tisDefaultPrevented: returnFalse,
\tisPropagationStopped: returnFalse,
\tisImmediatePropagationStopped: returnFalse,

\tpreventDefault: function() {
\t\tvar e = this.originalEvent;

\t\tthis.isDefaultPrevented = returnTrue;

\t\tif ( e && e.preventDefault ) {
\t\t\te.preventDefault();
\t\t}
\t},
\tstopPropagation: function() {
\t\tvar e = this.originalEvent;

\t\tthis.isPropagationStopped = returnTrue;

\t\tif ( e && e.stopPropagation ) {
\t\t\te.stopPropagation();
\t\t}
\t},
\tstopImmediatePropagation: function() {
\t\tvar e = this.originalEvent;

\t\tthis.isImmediatePropagationStopped = returnTrue;

\t\tif ( e && e.stopImmediatePropagation ) {
\t\t\te.stopImmediatePropagation();
\t\t}

\t\tthis.stopPropagation();
\t}
};

// Create mouseenter/leave events using mouseover/out and event-time checks
// Support: Chrome 15+
jQuery.each({
\tmouseenter: \"mouseover\",
\tmouseleave: \"mouseout\",
\tpointerenter: \"pointerover\",
\tpointerleave: \"pointerout\"
}, function( orig, fix ) {
\tjQuery.event.special[ orig ] = {
\t\tdelegateType: fix,
\t\tbindType: fix,

\t\thandle: function( event ) {
\t\t\tvar ret,
\t\t\t\ttarget = this,
\t\t\t\trelated = event.relatedTarget,
\t\t\t\thandleObj = event.handleObj;

\t\t\t// For mousenter/leave call the handler if related is outside the target.
\t\t\t// NB: No relatedTarget if the mouse left/entered the browser window
\t\t\tif ( !related || (related !== target && !jQuery.contains( target, related )) ) {
\t\t\t\tevent.type = handleObj.origType;
\t\t\t\tret = handleObj.handler.apply( this, arguments );
\t\t\t\tevent.type = fix;
\t\t\t}
\t\t\treturn ret;
\t\t}
\t};
});

// Support: Firefox, Chrome, Safari
// Create \"bubbling\" focus and blur events
if ( !support.focusinBubbles ) {
\tjQuery.each({ focus: \"focusin\", blur: \"focusout\" }, function( orig, fix ) {

\t\t// Attach a single capturing handler on the document while someone wants focusin/focusout
\t\tvar handler = function( event ) {
\t\t\t\tjQuery.event.simulate( fix, event.target, jQuery.event.fix( event ), true );
\t\t\t};

\t\tjQuery.event.special[ fix ] = {
\t\t\tsetup: function() {
\t\t\t\tvar doc = this.ownerDocument || this,
\t\t\t\t\tattaches = data_priv.access( doc, fix );

\t\t\t\tif ( !attaches ) {
\t\t\t\t\tdoc.addEventListener( orig, handler, true );
\t\t\t\t}
\t\t\t\tdata_priv.access( doc, fix, ( attaches || 0 ) + 1 );
\t\t\t},
\t\t\tteardown: function() {
\t\t\t\tvar doc = this.ownerDocument || this,
\t\t\t\t\tattaches = data_priv.access( doc, fix ) - 1;

\t\t\t\tif ( !attaches ) {
\t\t\t\t\tdoc.removeEventListener( orig, handler, true );
\t\t\t\t\tdata_priv.remove( doc, fix );

\t\t\t\t} else {
\t\t\t\t\tdata_priv.access( doc, fix, attaches );
\t\t\t\t}
\t\t\t}
\t\t};
\t});
}

jQuery.fn.extend({

\ton: function( types, selector, data, fn, /*INTERNAL*/ one ) {
\t\tvar origFn, type;

\t\t// Types can be a map of types/handlers
\t\tif ( typeof types === \"object\" ) {
\t\t\t// ( types-Object, selector, data )
\t\t\tif ( typeof selector !== \"string\" ) {
\t\t\t\t// ( types-Object, data )
\t\t\t\tdata = data || selector;
\t\t\t\tselector = undefined;
\t\t\t}
\t\t\tfor ( type in types ) {
\t\t\t\tthis.on( type, selector, data, types[ type ], one );
\t\t\t}
\t\t\treturn this;
\t\t}

\t\tif ( data == null && fn == null ) {
\t\t\t// ( types, fn )
\t\t\tfn = selector;
\t\t\tdata = selector = undefined;
\t\t} else if ( fn == null ) {
\t\t\tif ( typeof selector === \"string\" ) {
\t\t\t\t// ( types, selector, fn )
\t\t\t\tfn = data;
\t\t\t\tdata = undefined;
\t\t\t} else {
\t\t\t\t// ( types, data, fn )
\t\t\t\tfn = data;
\t\t\t\tdata = selector;
\t\t\t\tselector = undefined;
\t\t\t}
\t\t}
\t\tif ( fn === false ) {
\t\t\tfn = returnFalse;
\t\t} else if ( !fn ) {
\t\t\treturn this;
\t\t}

\t\tif ( one === 1 ) {
\t\t\torigFn = fn;
\t\t\tfn = function( event ) {
\t\t\t\t// Can use an empty set, since event contains the info
\t\t\t\tjQuery().off( event );
\t\t\t\treturn origFn.apply( this, arguments );
\t\t\t};
\t\t\t// Use same guid so caller can remove using origFn
\t\t\tfn.guid = origFn.guid || ( origFn.guid = jQuery.guid++ );
\t\t}
\t\treturn this.each( function() {
\t\t\tjQuery.event.add( this, types, fn, data, selector );
\t\t});
\t},
\tone: function( types, selector, data, fn ) {
\t\treturn this.on( types, selector, data, fn, 1 );
\t},
\toff: function( types, selector, fn ) {
\t\tvar handleObj, type;
\t\tif ( types && types.preventDefault && types.handleObj ) {
\t\t\t// ( event )  dispatched jQuery.Event
\t\t\thandleObj = types.handleObj;
\t\t\tjQuery( types.delegateTarget ).off(
\t\t\t\thandleObj.namespace ? handleObj.origType + \".\" + handleObj.namespace : handleObj.origType,
\t\t\t\thandleObj.selector,
\t\t\t\thandleObj.handler
\t\t\t);
\t\t\treturn this;
\t\t}
\t\tif ( typeof types === \"object\" ) {
\t\t\t// ( types-object [, selector] )
\t\t\tfor ( type in types ) {
\t\t\t\tthis.off( type, selector, types[ type ] );
\t\t\t}
\t\t\treturn this;
\t\t}
\t\tif ( selector === false || typeof selector === \"function\" ) {
\t\t\t// ( types [, fn] )
\t\t\tfn = selector;
\t\t\tselector = undefined;
\t\t}
\t\tif ( fn === false ) {
\t\t\tfn = returnFalse;
\t\t}
\t\treturn this.each(function() {
\t\t\tjQuery.event.remove( this, types, fn, selector );
\t\t});
\t},

\ttrigger: function( type, data ) {
\t\treturn this.each(function() {
\t\t\tjQuery.event.trigger( type, data, this );
\t\t});
\t},
\ttriggerHandler: function( type, data ) {
\t\tvar elem = this[0];
\t\tif ( elem ) {
\t\t\treturn jQuery.event.trigger( type, data, elem, true );
\t\t}
\t}
});


var
\trxhtmlTag = /<(?!area|br|col|embed|hr|img|input|link|meta|param)(([\\w:]+)[^>]*)\\/>/gi,
\trtagName = /<([\\w:]+)/,
\trhtml = /<|&#?\\w+;/,
\trnoInnerhtml = /<(?:script|style|link)/i,
\t// checked=\"checked\" or checked
\trchecked = /checked\\s*(?:[^=]|=\\s*.checked.)/i,
\trscriptType = /^\$|\\/(?:java|ecma)script/i,
\trscriptTypeMasked = /^true\\/(.*)/,
\trcleanScript = /^\\s*<!(?:\\[CDATA\\[|--)|(?:\\]\\]|--)>\\s*\$/g,

\t// We have to close these tags to support XHTML (#13200)
\twrapMap = {

\t\t// Support: IE9
\t\toption: [ 1, \"<select multiple='multiple'>\", \"</select>\" ],

\t\tthead: [ 1, \"<table>\", \"</table>\" ],
\t\tcol: [ 2, \"<table><colgroup>\", \"</colgroup></table>\" ],
\t\ttr: [ 2, \"<table><tbody>\", \"</tbody></table>\" ],
\t\ttd: [ 3, \"<table><tbody><tr>\", \"</tr></tbody></table>\" ],

\t\t_default: [ 0, \"\", \"\" ]
\t};

// Support: IE9
wrapMap.optgroup = wrapMap.option;

wrapMap.tbody = wrapMap.tfoot = wrapMap.colgroup = wrapMap.caption = wrapMap.thead;
wrapMap.th = wrapMap.td;

// Support: 1.x compatibility
// Manipulating tables requires a tbody
function manipulationTarget( elem, content ) {
\treturn jQuery.nodeName( elem, \"table\" ) &&
\t\tjQuery.nodeName( content.nodeType !== 11 ? content : content.firstChild, \"tr\" ) ?

\t\telem.getElementsByTagName(\"tbody\")[0] ||
\t\t\telem.appendChild( elem.ownerDocument.createElement(\"tbody\") ) :
\t\telem;
}

// Replace/restore the type attribute of script elements for safe DOM manipulation
function disableScript( elem ) {
\telem.type = (elem.getAttribute(\"type\") !== null) + \"/\" + elem.type;
\treturn elem;
}
function restoreScript( elem ) {
\tvar match = rscriptTypeMasked.exec( elem.type );

\tif ( match ) {
\t\telem.type = match[ 1 ];
\t} else {
\t\telem.removeAttribute(\"type\");
\t}

\treturn elem;
}

// Mark scripts as having already been evaluated
function setGlobalEval( elems, refElements ) {
\tvar i = 0,
\t\tl = elems.length;

\tfor ( ; i < l; i++ ) {
\t\tdata_priv.set(
\t\t\telems[ i ], \"globalEval\", !refElements || data_priv.get( refElements[ i ], \"globalEval\" )
\t\t);
\t}
}

function cloneCopyEvent( src, dest ) {
\tvar i, l, type, pdataOld, pdataCur, udataOld, udataCur, events;

\tif ( dest.nodeType !== 1 ) {
\t\treturn;
\t}

\t// 1. Copy private data: events, handlers, etc.
\tif ( data_priv.hasData( src ) ) {
\t\tpdataOld = data_priv.access( src );
\t\tpdataCur = data_priv.set( dest, pdataOld );
\t\tevents = pdataOld.events;

\t\tif ( events ) {
\t\t\tdelete pdataCur.handle;
\t\t\tpdataCur.events = {};

\t\t\tfor ( type in events ) {
\t\t\t\tfor ( i = 0, l = events[ type ].length; i < l; i++ ) {
\t\t\t\t\tjQuery.event.add( dest, type, events[ type ][ i ] );
\t\t\t\t}
\t\t\t}
\t\t}
\t}

\t// 2. Copy user data
\tif ( data_user.hasData( src ) ) {
\t\tudataOld = data_user.access( src );
\t\tudataCur = jQuery.extend( {}, udataOld );

\t\tdata_user.set( dest, udataCur );
\t}
}

function getAll( context, tag ) {
\tvar ret = context.getElementsByTagName ? context.getElementsByTagName( tag || \"*\" ) :
\t\t\tcontext.querySelectorAll ? context.querySelectorAll( tag || \"*\" ) :
\t\t\t[];

\treturn tag === undefined || tag && jQuery.nodeName( context, tag ) ?
\t\tjQuery.merge( [ context ], ret ) :
\t\tret;
}

// Fix IE bugs, see support tests
function fixInput( src, dest ) {
\tvar nodeName = dest.nodeName.toLowerCase();

\t// Fails to persist the checked state of a cloned checkbox or radio button.
\tif ( nodeName === \"input\" && rcheckableType.test( src.type ) ) {
\t\tdest.checked = src.checked;

\t// Fails to return the selected option to the default selected state when cloning options
\t} else if ( nodeName === \"input\" || nodeName === \"textarea\" ) {
\t\tdest.defaultValue = src.defaultValue;
\t}
}

jQuery.extend({
\tclone: function( elem, dataAndEvents, deepDataAndEvents ) {
\t\tvar i, l, srcElements, destElements,
\t\t\tclone = elem.cloneNode( true ),
\t\t\tinPage = jQuery.contains( elem.ownerDocument, elem );

\t\t// Fix IE cloning issues
\t\tif ( !support.noCloneChecked && ( elem.nodeType === 1 || elem.nodeType === 11 ) &&
\t\t\t\t!jQuery.isXMLDoc( elem ) ) {

\t\t\t// We eschew Sizzle here for performance reasons: http://jsperf.com/getall-vs-sizzle/2
\t\t\tdestElements = getAll( clone );
\t\t\tsrcElements = getAll( elem );

\t\t\tfor ( i = 0, l = srcElements.length; i < l; i++ ) {
\t\t\t\tfixInput( srcElements[ i ], destElements[ i ] );
\t\t\t}
\t\t}

\t\t// Copy the events from the original to the clone
\t\tif ( dataAndEvents ) {
\t\t\tif ( deepDataAndEvents ) {
\t\t\t\tsrcElements = srcElements || getAll( elem );
\t\t\t\tdestElements = destElements || getAll( clone );

\t\t\t\tfor ( i = 0, l = srcElements.length; i < l; i++ ) {
\t\t\t\t\tcloneCopyEvent( srcElements[ i ], destElements[ i ] );
\t\t\t\t}
\t\t\t} else {
\t\t\t\tcloneCopyEvent( elem, clone );
\t\t\t}
\t\t}

\t\t// Preserve script evaluation history
\t\tdestElements = getAll( clone, \"script\" );
\t\tif ( destElements.length > 0 ) {
\t\t\tsetGlobalEval( destElements, !inPage && getAll( elem, \"script\" ) );
\t\t}

\t\t// Return the cloned set
\t\treturn clone;
\t},

\tbuildFragment: function( elems, context, scripts, selection ) {
\t\tvar elem, tmp, tag, wrap, contains, j,
\t\t\tfragment = context.createDocumentFragment(),
\t\t\tnodes = [],
\t\t\ti = 0,
\t\t\tl = elems.length;

\t\tfor ( ; i < l; i++ ) {
\t\t\telem = elems[ i ];

\t\t\tif ( elem || elem === 0 ) {

\t\t\t\t// Add nodes directly
\t\t\t\tif ( jQuery.type( elem ) === \"object\" ) {
\t\t\t\t\t// Support: QtWebKit, PhantomJS
\t\t\t\t\t// push.apply(_, arraylike) throws on ancient WebKit
\t\t\t\t\tjQuery.merge( nodes, elem.nodeType ? [ elem ] : elem );

\t\t\t\t// Convert non-html into a text node
\t\t\t\t} else if ( !rhtml.test( elem ) ) {
\t\t\t\t\tnodes.push( context.createTextNode( elem ) );

\t\t\t\t// Convert html into DOM nodes
\t\t\t\t} else {
\t\t\t\t\ttmp = tmp || fragment.appendChild( context.createElement(\"div\") );

\t\t\t\t\t// Deserialize a standard representation
\t\t\t\t\ttag = ( rtagName.exec( elem ) || [ \"\", \"\" ] )[ 1 ].toLowerCase();
\t\t\t\t\twrap = wrapMap[ tag ] || wrapMap._default;
\t\t\t\t\ttmp.innerHTML = wrap[ 1 ] + elem.replace( rxhtmlTag, \"<\$1></\$2>\" ) + wrap[ 2 ];

\t\t\t\t\t// Descend through wrappers to the right content
\t\t\t\t\tj = wrap[ 0 ];
\t\t\t\t\twhile ( j-- ) {
\t\t\t\t\t\ttmp = tmp.lastChild;
\t\t\t\t\t}

\t\t\t\t\t// Support: QtWebKit, PhantomJS
\t\t\t\t\t// push.apply(_, arraylike) throws on ancient WebKit
\t\t\t\t\tjQuery.merge( nodes, tmp.childNodes );

\t\t\t\t\t// Remember the top-level container
\t\t\t\t\ttmp = fragment.firstChild;

\t\t\t\t\t// Ensure the created nodes are orphaned (#12392)
\t\t\t\t\ttmp.textContent = \"\";
\t\t\t\t}
\t\t\t}
\t\t}

\t\t// Remove wrapper from fragment
\t\tfragment.textContent = \"\";

\t\ti = 0;
\t\twhile ( (elem = nodes[ i++ ]) ) {

\t\t\t// #4087 - If origin and destination elements are the same, and this is
\t\t\t// that element, do not do anything
\t\t\tif ( selection && jQuery.inArray( elem, selection ) !== -1 ) {
\t\t\t\tcontinue;
\t\t\t}

\t\t\tcontains = jQuery.contains( elem.ownerDocument, elem );

\t\t\t// Append to fragment
\t\t\ttmp = getAll( fragment.appendChild( elem ), \"script\" );

\t\t\t// Preserve script evaluation history
\t\t\tif ( contains ) {
\t\t\t\tsetGlobalEval( tmp );
\t\t\t}

\t\t\t// Capture executables
\t\t\tif ( scripts ) {
\t\t\t\tj = 0;
\t\t\t\twhile ( (elem = tmp[ j++ ]) ) {
\t\t\t\t\tif ( rscriptType.test( elem.type || \"\" ) ) {
\t\t\t\t\t\tscripts.push( elem );
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}

\t\treturn fragment;
\t},

\tcleanData: function( elems ) {
\t\tvar data, elem, type, key,
\t\t\tspecial = jQuery.event.special,
\t\t\ti = 0;

\t\tfor ( ; (elem = elems[ i ]) !== undefined; i++ ) {
\t\t\tif ( jQuery.acceptData( elem ) ) {
\t\t\t\tkey = elem[ data_priv.expando ];

\t\t\t\tif ( key && (data = data_priv.cache[ key ]) ) {
\t\t\t\t\tif ( data.events ) {
\t\t\t\t\t\tfor ( type in data.events ) {
\t\t\t\t\t\t\tif ( special[ type ] ) {
\t\t\t\t\t\t\t\tjQuery.event.remove( elem, type );

\t\t\t\t\t\t\t// This is a shortcut to avoid jQuery.event.remove's overhead
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\tjQuery.removeEvent( elem, type, data.handle );
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\tif ( data_priv.cache[ key ] ) {
\t\t\t\t\t\t// Discard any remaining `private` data
\t\t\t\t\t\tdelete data_priv.cache[ key ];
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t\t// Discard any remaining `user` data
\t\t\tdelete data_user.cache[ elem[ data_user.expando ] ];
\t\t}
\t}
});

jQuery.fn.extend({
\ttext: function( value ) {
\t\treturn access( this, function( value ) {
\t\t\treturn value === undefined ?
\t\t\t\tjQuery.text( this ) :
\t\t\t\tthis.empty().each(function() {
\t\t\t\t\tif ( this.nodeType === 1 || this.nodeType === 11 || this.nodeType === 9 ) {
\t\t\t\t\t\tthis.textContent = value;
\t\t\t\t\t}
\t\t\t\t});
\t\t}, null, value, arguments.length );
\t},

\tappend: function() {
\t\treturn this.domManip( arguments, function( elem ) {
\t\t\tif ( this.nodeType === 1 || this.nodeType === 11 || this.nodeType === 9 ) {
\t\t\t\tvar target = manipulationTarget( this, elem );
\t\t\t\ttarget.appendChild( elem );
\t\t\t}
\t\t});
\t},

\tprepend: function() {
\t\treturn this.domManip( arguments, function( elem ) {
\t\t\tif ( this.nodeType === 1 || this.nodeType === 11 || this.nodeType === 9 ) {
\t\t\t\tvar target = manipulationTarget( this, elem );
\t\t\t\ttarget.insertBefore( elem, target.firstChild );
\t\t\t}
\t\t});
\t},

\tbefore: function() {
\t\treturn this.domManip( arguments, function( elem ) {
\t\t\tif ( this.parentNode ) {
\t\t\t\tthis.parentNode.insertBefore( elem, this );
\t\t\t}
\t\t});
\t},

\tafter: function() {
\t\treturn this.domManip( arguments, function( elem ) {
\t\t\tif ( this.parentNode ) {
\t\t\t\tthis.parentNode.insertBefore( elem, this.nextSibling );
\t\t\t}
\t\t});
\t},

\tremove: function( selector, keepData /* Internal Use Only */ ) {
\t\tvar elem,
\t\t\telems = selector ? jQuery.filter( selector, this ) : this,
\t\t\ti = 0;

\t\tfor ( ; (elem = elems[i]) != null; i++ ) {
\t\t\tif ( !keepData && elem.nodeType === 1 ) {
\t\t\t\tjQuery.cleanData( getAll( elem ) );
\t\t\t}

\t\t\tif ( elem.parentNode ) {
\t\t\t\tif ( keepData && jQuery.contains( elem.ownerDocument, elem ) ) {
\t\t\t\t\tsetGlobalEval( getAll( elem, \"script\" ) );
\t\t\t\t}
\t\t\t\telem.parentNode.removeChild( elem );
\t\t\t}
\t\t}

\t\treturn this;
\t},

\tempty: function() {
\t\tvar elem,
\t\t\ti = 0;

\t\tfor ( ; (elem = this[i]) != null; i++ ) {
\t\t\tif ( elem.nodeType === 1 ) {

\t\t\t\t// Prevent memory leaks
\t\t\t\tjQuery.cleanData( getAll( elem, false ) );

\t\t\t\t// Remove any remaining nodes
\t\t\t\telem.textContent = \"\";
\t\t\t}
\t\t}

\t\treturn this;
\t},

\tclone: function( dataAndEvents, deepDataAndEvents ) {
\t\tdataAndEvents = dataAndEvents == null ? false : dataAndEvents;
\t\tdeepDataAndEvents = deepDataAndEvents == null ? dataAndEvents : deepDataAndEvents;

\t\treturn this.map(function() {
\t\t\treturn jQuery.clone( this, dataAndEvents, deepDataAndEvents );
\t\t});
\t},

\thtml: function( value ) {
\t\treturn access( this, function( value ) {
\t\t\tvar elem = this[ 0 ] || {},
\t\t\t\ti = 0,
\t\t\t\tl = this.length;

\t\t\tif ( value === undefined && elem.nodeType === 1 ) {
\t\t\t\treturn elem.innerHTML;
\t\t\t}

\t\t\t// See if we can take a shortcut and just use innerHTML
\t\t\tif ( typeof value === \"string\" && !rnoInnerhtml.test( value ) &&
\t\t\t\t!wrapMap[ ( rtagName.exec( value ) || [ \"\", \"\" ] )[ 1 ].toLowerCase() ] ) {

\t\t\t\tvalue = value.replace( rxhtmlTag, \"<\$1></\$2>\" );

\t\t\t\ttry {
\t\t\t\t\tfor ( ; i < l; i++ ) {
\t\t\t\t\t\telem = this[ i ] || {};

\t\t\t\t\t\t// Remove element nodes and prevent memory leaks
\t\t\t\t\t\tif ( elem.nodeType === 1 ) {
\t\t\t\t\t\t\tjQuery.cleanData( getAll( elem, false ) );
\t\t\t\t\t\t\telem.innerHTML = value;
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\telem = 0;

\t\t\t\t// If using innerHTML throws an exception, use the fallback method
\t\t\t\t} catch( e ) {}
\t\t\t}

\t\t\tif ( elem ) {
\t\t\t\tthis.empty().append( value );
\t\t\t}
\t\t}, null, value, arguments.length );
\t},

\treplaceWith: function() {
\t\tvar arg = arguments[ 0 ];

\t\t// Make the changes, replacing each context element with the new content
\t\tthis.domManip( arguments, function( elem ) {
\t\t\targ = this.parentNode;

\t\t\tjQuery.cleanData( getAll( this ) );

\t\t\tif ( arg ) {
\t\t\t\targ.replaceChild( elem, this );
\t\t\t}
\t\t});

\t\t// Force removal if there was no new content (e.g., from empty arguments)
\t\treturn arg && (arg.length || arg.nodeType) ? this : this.remove();
\t},

\tdetach: function( selector ) {
\t\treturn this.remove( selector, true );
\t},

\tdomManip: function( args, callback ) {

\t\t// Flatten any nested arrays
\t\targs = concat.apply( [], args );

\t\tvar fragment, first, scripts, hasScripts, node, doc,
\t\t\ti = 0,
\t\t\tl = this.length,
\t\t\tset = this,
\t\t\tiNoClone = l - 1,
\t\t\tvalue = args[ 0 ],
\t\t\tisFunction = jQuery.isFunction( value );

\t\t// We can't cloneNode fragments that contain checked, in WebKit
\t\tif ( isFunction ||
\t\t\t\t( l > 1 && typeof value === \"string\" &&
\t\t\t\t\t!support.checkClone && rchecked.test( value ) ) ) {
\t\t\treturn this.each(function( index ) {
\t\t\t\tvar self = set.eq( index );
\t\t\t\tif ( isFunction ) {
\t\t\t\t\targs[ 0 ] = value.call( this, index, self.html() );
\t\t\t\t}
\t\t\t\tself.domManip( args, callback );
\t\t\t});
\t\t}

\t\tif ( l ) {
\t\t\tfragment = jQuery.buildFragment( args, this[ 0 ].ownerDocument, false, this );
\t\t\tfirst = fragment.firstChild;

\t\t\tif ( fragment.childNodes.length === 1 ) {
\t\t\t\tfragment = first;
\t\t\t}

\t\t\tif ( first ) {
\t\t\t\tscripts = jQuery.map( getAll( fragment, \"script\" ), disableScript );
\t\t\t\thasScripts = scripts.length;

\t\t\t\t// Use the original fragment for the last item instead of the first because it can end up
\t\t\t\t// being emptied incorrectly in certain situations (#8070).
\t\t\t\tfor ( ; i < l; i++ ) {
\t\t\t\t\tnode = fragment;

\t\t\t\t\tif ( i !== iNoClone ) {
\t\t\t\t\t\tnode = jQuery.clone( node, true, true );

\t\t\t\t\t\t// Keep references to cloned scripts for later restoration
\t\t\t\t\t\tif ( hasScripts ) {
\t\t\t\t\t\t\t// Support: QtWebKit
\t\t\t\t\t\t\t// jQuery.merge because push.apply(_, arraylike) throws
\t\t\t\t\t\t\tjQuery.merge( scripts, getAll( node, \"script\" ) );
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\tcallback.call( this[ i ], node, i );
\t\t\t\t}

\t\t\t\tif ( hasScripts ) {
\t\t\t\t\tdoc = scripts[ scripts.length - 1 ].ownerDocument;

\t\t\t\t\t// Reenable scripts
\t\t\t\t\tjQuery.map( scripts, restoreScript );

\t\t\t\t\t// Evaluate executable scripts on first document insertion
\t\t\t\t\tfor ( i = 0; i < hasScripts; i++ ) {
\t\t\t\t\t\tnode = scripts[ i ];
\t\t\t\t\t\tif ( rscriptType.test( node.type || \"\" ) &&
\t\t\t\t\t\t\t!data_priv.access( node, \"globalEval\" ) && jQuery.contains( doc, node ) ) {

\t\t\t\t\t\t\tif ( node.src ) {
\t\t\t\t\t\t\t\t// Optional AJAX dependency, but won't run scripts if not present
\t\t\t\t\t\t\t\tif ( jQuery._evalUrl ) {
\t\t\t\t\t\t\t\t\tjQuery._evalUrl( node.src );
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\tjQuery.globalEval( node.textContent.replace( rcleanScript, \"\" ) );
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}

\t\treturn this;
\t}
});

jQuery.each({
\tappendTo: \"append\",
\tprependTo: \"prepend\",
\tinsertBefore: \"before\",
\tinsertAfter: \"after\",
\treplaceAll: \"replaceWith\"
}, function( name, original ) {
\tjQuery.fn[ name ] = function( selector ) {
\t\tvar elems,
\t\t\tret = [],
\t\t\tinsert = jQuery( selector ),
\t\t\tlast = insert.length - 1,
\t\t\ti = 0;

\t\tfor ( ; i <= last; i++ ) {
\t\t\telems = i === last ? this : this.clone( true );
\t\t\tjQuery( insert[ i ] )[ original ]( elems );

\t\t\t// Support: QtWebKit
\t\t\t// .get() because push.apply(_, arraylike) throws
\t\t\tpush.apply( ret, elems.get() );
\t\t}

\t\treturn this.pushStack( ret );
\t};
});


var iframe,
\telemdisplay = {};

/**
 * Retrieve the actual display of a element
 * @param {String} name nodeName of the element
 * @param {Object} doc Document object
 */
// Called only from within defaultDisplay
function actualDisplay( name, doc ) {
\tvar style,
\t\telem = jQuery( doc.createElement( name ) ).appendTo( doc.body ),

\t\t// getDefaultComputedStyle might be reliably used only on attached element
\t\tdisplay = window.getDefaultComputedStyle && ( style = window.getDefaultComputedStyle( elem[ 0 ] ) ) ?

\t\t\t// Use of this method is a temporary fix (more like optimization) until something better comes along,
\t\t\t// since it was removed from specification and supported only in FF
\t\t\tstyle.display : jQuery.css( elem[ 0 ], \"display\" );

\t// We don't have any data stored on the element,
\t// so use \"detach\" method as fast way to get rid of the element
\telem.detach();

\treturn display;
}

/**
 * Try to determine the default display value of an element
 * @param {String} nodeName
 */
function defaultDisplay( nodeName ) {
\tvar doc = document,
\t\tdisplay = elemdisplay[ nodeName ];

\tif ( !display ) {
\t\tdisplay = actualDisplay( nodeName, doc );

\t\t// If the simple way fails, read from inside an iframe
\t\tif ( display === \"none\" || !display ) {

\t\t\t// Use the already-created iframe if possible
\t\t\tiframe = (iframe || jQuery( \"<iframe frameborder='0' width='0' height='0'/>\" )).appendTo( doc.documentElement );

\t\t\t// Always write a new HTML skeleton so Webkit and Firefox don't choke on reuse
\t\t\tdoc = iframe[ 0 ].contentDocument;

\t\t\t// Support: IE
\t\t\tdoc.write();
\t\t\tdoc.close();

\t\t\tdisplay = actualDisplay( nodeName, doc );
\t\t\tiframe.detach();
\t\t}

\t\t// Store the correct default display
\t\telemdisplay[ nodeName ] = display;
\t}

\treturn display;
}
var rmargin = (/^margin/);

var rnumnonpx = new RegExp( \"^(\" + pnum + \")(?!px)[a-z%]+\$\", \"i\" );

var getStyles = function( elem ) {
\t\t// Support: IE<=11+, Firefox<=30+ (#15098, #14150)
\t\t// IE throws on elements created in popups
\t\t// FF meanwhile throws on frame elements through \"defaultView.getComputedStyle\"
\t\tif ( elem.ownerDocument.defaultView.opener ) {
\t\t\treturn elem.ownerDocument.defaultView.getComputedStyle( elem, null );
\t\t}

\t\treturn window.getComputedStyle( elem, null );
\t};



function curCSS( elem, name, computed ) {
\tvar width, minWidth, maxWidth, ret,
\t\tstyle = elem.style;

\tcomputed = computed || getStyles( elem );

\t// Support: IE9
\t// getPropertyValue is only needed for .css('filter') (#12537)
\tif ( computed ) {
\t\tret = computed.getPropertyValue( name ) || computed[ name ];
\t}

\tif ( computed ) {

\t\tif ( ret === \"\" && !jQuery.contains( elem.ownerDocument, elem ) ) {
\t\t\tret = jQuery.style( elem, name );
\t\t}

\t\t// Support: iOS < 6
\t\t// A tribute to the \"awesome hack by Dean Edwards\"
\t\t// iOS < 6 (at least) returns percentage for a larger set of values, but width seems to be reliably pixels
\t\t// this is against the CSSOM draft spec: http://dev.w3.org/csswg/cssom/#resolved-values
\t\tif ( rnumnonpx.test( ret ) && rmargin.test( name ) ) {

\t\t\t// Remember the original values
\t\t\twidth = style.width;
\t\t\tminWidth = style.minWidth;
\t\t\tmaxWidth = style.maxWidth;

\t\t\t// Put in the new values to get a computed value out
\t\t\tstyle.minWidth = style.maxWidth = style.width = ret;
\t\t\tret = computed.width;

\t\t\t// Revert the changed values
\t\t\tstyle.width = width;
\t\t\tstyle.minWidth = minWidth;
\t\t\tstyle.maxWidth = maxWidth;
\t\t}
\t}

\treturn ret !== undefined ?
\t\t// Support: IE
\t\t// IE returns zIndex value as an integer.
\t\tret + \"\" :
\t\tret;
}


function addGetHookIf( conditionFn, hookFn ) {
\t// Define the hook, we'll check on the first run if it's really needed.
\treturn {
\t\tget: function() {
\t\t\tif ( conditionFn() ) {
\t\t\t\t// Hook not needed (or it's not possible to use it due
\t\t\t\t// to missing dependency), remove it.
\t\t\t\tdelete this.get;
\t\t\t\treturn;
\t\t\t}

\t\t\t// Hook needed; redefine it so that the support test is not executed again.
\t\t\treturn (this.get = hookFn).apply( this, arguments );
\t\t}
\t};
}


(function() {
\tvar pixelPositionVal, boxSizingReliableVal,
\t\tdocElem = document.documentElement,
\t\tcontainer = document.createElement( \"div\" ),
\t\tdiv = document.createElement( \"div\" );

\tif ( !div.style ) {
\t\treturn;
\t}

\t// Support: IE9-11+
\t// Style of cloned element affects source element cloned (#8908)
\tdiv.style.backgroundClip = \"content-box\";
\tdiv.cloneNode( true ).style.backgroundClip = \"\";
\tsupport.clearCloneStyle = div.style.backgroundClip === \"content-box\";

\tcontainer.style.cssText = \"border:0;width:0;height:0;top:0;left:-9999px;margin-top:1px;\" +
\t\t\"position:absolute\";
\tcontainer.appendChild( div );

\t// Executing both pixelPosition & boxSizingReliable tests require only one layout
\t// so they're executed at the same time to save the second computation.
\tfunction computePixelPositionAndBoxSizingReliable() {
\t\tdiv.style.cssText =
\t\t\t// Support: Firefox<29, Android 2.3
\t\t\t// Vendor-prefix box-sizing
\t\t\t\"-webkit-box-sizing:border-box;-moz-box-sizing:border-box;\" +
\t\t\t\"box-sizing:border-box;display:block;margin-top:1%;top:1%;\" +
\t\t\t\"border:1px;padding:1px;width:4px;position:absolute\";
\t\tdiv.innerHTML = \"\";
\t\tdocElem.appendChild( container );

\t\tvar divStyle = window.getComputedStyle( div, null );
\t\tpixelPositionVal = divStyle.top !== \"1%\";
\t\tboxSizingReliableVal = divStyle.width === \"4px\";

\t\tdocElem.removeChild( container );
\t}

\t// Support: node.js jsdom
\t// Don't assume that getComputedStyle is a property of the global object
\tif ( window.getComputedStyle ) {
\t\tjQuery.extend( support, {
\t\t\tpixelPosition: function() {

\t\t\t\t// This test is executed only once but we still do memoizing
\t\t\t\t// since we can use the boxSizingReliable pre-computing.
\t\t\t\t// No need to check if the test was already performed, though.
\t\t\t\tcomputePixelPositionAndBoxSizingReliable();
\t\t\t\treturn pixelPositionVal;
\t\t\t},
\t\t\tboxSizingReliable: function() {
\t\t\t\tif ( boxSizingReliableVal == null ) {
\t\t\t\t\tcomputePixelPositionAndBoxSizingReliable();
\t\t\t\t}
\t\t\t\treturn boxSizingReliableVal;
\t\t\t},
\t\t\treliableMarginRight: function() {

\t\t\t\t// Support: Android 2.3
\t\t\t\t// Check if div with explicit width and no margin-right incorrectly
\t\t\t\t// gets computed margin-right based on width of container. (#3333)
\t\t\t\t// WebKit Bug 13343 - getComputedStyle returns wrong value for margin-right
\t\t\t\t// This support function is only executed once so no memoizing is needed.
\t\t\t\tvar ret,
\t\t\t\t\tmarginDiv = div.appendChild( document.createElement( \"div\" ) );

\t\t\t\t// Reset CSS: box-sizing; display; margin; border; padding
\t\t\t\tmarginDiv.style.cssText = div.style.cssText =
\t\t\t\t\t// Support: Firefox<29, Android 2.3
\t\t\t\t\t// Vendor-prefix box-sizing
\t\t\t\t\t\"-webkit-box-sizing:content-box;-moz-box-sizing:content-box;\" +
\t\t\t\t\t\"box-sizing:content-box;display:block;margin:0;border:0;padding:0\";
\t\t\t\tmarginDiv.style.marginRight = marginDiv.style.width = \"0\";
\t\t\t\tdiv.style.width = \"1px\";
\t\t\t\tdocElem.appendChild( container );

\t\t\t\tret = !parseFloat( window.getComputedStyle( marginDiv, null ).marginRight );

\t\t\t\tdocElem.removeChild( container );
\t\t\t\tdiv.removeChild( marginDiv );

\t\t\t\treturn ret;
\t\t\t}
\t\t});
\t}
})();


// A method for quickly swapping in/out CSS properties to get correct calculations.
jQuery.swap = function( elem, options, callback, args ) {
\tvar ret, name,
\t\told = {};

\t// Remember the old values, and insert the new ones
\tfor ( name in options ) {
\t\told[ name ] = elem.style[ name ];
\t\telem.style[ name ] = options[ name ];
\t}

\tret = callback.apply( elem, args || [] );

\t// Revert the old values
\tfor ( name in options ) {
\t\telem.style[ name ] = old[ name ];
\t}

\treturn ret;
};


var
\t// Swappable if display is none or starts with table except \"table\", \"table-cell\", or \"table-caption\"
\t// See here for display values: https://developer.mozilla.org/en-US/docs/CSS/display
\trdisplayswap = /^(none|table(?!-c[ea]).+)/,
\trnumsplit = new RegExp( \"^(\" + pnum + \")(.*)\$\", \"i\" ),
\trrelNum = new RegExp( \"^([+-])=(\" + pnum + \")\", \"i\" ),

\tcssShow = { position: \"absolute\", visibility: \"hidden\", display: \"block\" },
\tcssNormalTransform = {
\t\tletterSpacing: \"0\",
\t\tfontWeight: \"400\"
\t},

\tcssPrefixes = [ \"Webkit\", \"O\", \"Moz\", \"ms\" ];

// Return a css property mapped to a potentially vendor prefixed property
function vendorPropName( style, name ) {

\t// Shortcut for names that are not vendor prefixed
\tif ( name in style ) {
\t\treturn name;
\t}

\t// Check for vendor prefixed names
\tvar capName = name[0].toUpperCase() + name.slice(1),
\t\torigName = name,
\t\ti = cssPrefixes.length;

\twhile ( i-- ) {
\t\tname = cssPrefixes[ i ] + capName;
\t\tif ( name in style ) {
\t\t\treturn name;
\t\t}
\t}

\treturn origName;
}

function setPositiveNumber( elem, value, subtract ) {
\tvar matches = rnumsplit.exec( value );
\treturn matches ?
\t\t// Guard against undefined \"subtract\", e.g., when used as in cssHooks
\t\tMath.max( 0, matches[ 1 ] - ( subtract || 0 ) ) + ( matches[ 2 ] || \"px\" ) :
\t\tvalue;
}

function augmentWidthOrHeight( elem, name, extra, isBorderBox, styles ) {
\tvar i = extra === ( isBorderBox ? \"border\" : \"content\" ) ?
\t\t// If we already have the right measurement, avoid augmentation
\t\t4 :
\t\t// Otherwise initialize for horizontal or vertical properties
\t\tname === \"width\" ? 1 : 0,

\t\tval = 0;

\tfor ( ; i < 4; i += 2 ) {
\t\t// Both box models exclude margin, so add it if we want it
\t\tif ( extra === \"margin\" ) {
\t\t\tval += jQuery.css( elem, extra + cssExpand[ i ], true, styles );
\t\t}

\t\tif ( isBorderBox ) {
\t\t\t// border-box includes padding, so remove it if we want content
\t\t\tif ( extra === \"content\" ) {
\t\t\t\tval -= jQuery.css( elem, \"padding\" + cssExpand[ i ], true, styles );
\t\t\t}

\t\t\t// At this point, extra isn't border nor margin, so remove border
\t\t\tif ( extra !== \"margin\" ) {
\t\t\t\tval -= jQuery.css( elem, \"border\" + cssExpand[ i ] + \"Width\", true, styles );
\t\t\t}
\t\t} else {
\t\t\t// At this point, extra isn't content, so add padding
\t\t\tval += jQuery.css( elem, \"padding\" + cssExpand[ i ], true, styles );

\t\t\t// At this point, extra isn't content nor padding, so add border
\t\t\tif ( extra !== \"padding\" ) {
\t\t\t\tval += jQuery.css( elem, \"border\" + cssExpand[ i ] + \"Width\", true, styles );
\t\t\t}
\t\t}
\t}

\treturn val;
}

function getWidthOrHeight( elem, name, extra ) {

\t// Start with offset property, which is equivalent to the border-box value
\tvar valueIsBorderBox = true,
\t\tval = name === \"width\" ? elem.offsetWidth : elem.offsetHeight,
\t\tstyles = getStyles( elem ),
\t\tisBorderBox = jQuery.css( elem, \"boxSizing\", false, styles ) === \"border-box\";

\t// Some non-html elements return undefined for offsetWidth, so check for null/undefined
\t// svg - https://bugzilla.mozilla.org/show_bug.cgi?id=649285
\t// MathML - https://bugzilla.mozilla.org/show_bug.cgi?id=491668
\tif ( val <= 0 || val == null ) {
\t\t// Fall back to computed then uncomputed css if necessary
\t\tval = curCSS( elem, name, styles );
\t\tif ( val < 0 || val == null ) {
\t\t\tval = elem.style[ name ];
\t\t}

\t\t// Computed unit is not pixels. Stop here and return.
\t\tif ( rnumnonpx.test(val) ) {
\t\t\treturn val;
\t\t}

\t\t// Check for style in case a browser which returns unreliable values
\t\t// for getComputedStyle silently falls back to the reliable elem.style
\t\tvalueIsBorderBox = isBorderBox &&
\t\t\t( support.boxSizingReliable() || val === elem.style[ name ] );

\t\t// Normalize \"\", auto, and prepare for extra
\t\tval = parseFloat( val ) || 0;
\t}

\t// Use the active box-sizing model to add/subtract irrelevant styles
\treturn ( val +
\t\taugmentWidthOrHeight(
\t\t\telem,
\t\t\tname,
\t\t\textra || ( isBorderBox ? \"border\" : \"content\" ),
\t\t\tvalueIsBorderBox,
\t\t\tstyles
\t\t)
\t) + \"px\";
}

function showHide( elements, show ) {
\tvar display, elem, hidden,
\t\tvalues = [],
\t\tindex = 0,
\t\tlength = elements.length;

\tfor ( ; index < length; index++ ) {
\t\telem = elements[ index ];
\t\tif ( !elem.style ) {
\t\t\tcontinue;
\t\t}

\t\tvalues[ index ] = data_priv.get( elem, \"olddisplay\" );
\t\tdisplay = elem.style.display;
\t\tif ( show ) {
\t\t\t// Reset the inline display of this element to learn if it is
\t\t\t// being hidden by cascaded rules or not
\t\t\tif ( !values[ index ] && display === \"none\" ) {
\t\t\t\telem.style.display = \"\";
\t\t\t}

\t\t\t// Set elements which have been overridden with display: none
\t\t\t// in a stylesheet to whatever the default browser style is
\t\t\t// for such an element
\t\t\tif ( elem.style.display === \"\" && isHidden( elem ) ) {
\t\t\t\tvalues[ index ] = data_priv.access( elem, \"olddisplay\", defaultDisplay(elem.nodeName) );
\t\t\t}
\t\t} else {
\t\t\thidden = isHidden( elem );

\t\t\tif ( display !== \"none\" || !hidden ) {
\t\t\t\tdata_priv.set( elem, \"olddisplay\", hidden ? display : jQuery.css( elem, \"display\" ) );
\t\t\t}
\t\t}
\t}

\t// Set the display of most of the elements in a second loop
\t// to avoid the constant reflow
\tfor ( index = 0; index < length; index++ ) {
\t\telem = elements[ index ];
\t\tif ( !elem.style ) {
\t\t\tcontinue;
\t\t}
\t\tif ( !show || elem.style.display === \"none\" || elem.style.display === \"\" ) {
\t\t\telem.style.display = show ? values[ index ] || \"\" : \"none\";
\t\t}
\t}

\treturn elements;
}

jQuery.extend({

\t// Add in style property hooks for overriding the default
\t// behavior of getting and setting a style property
\tcssHooks: {
\t\topacity: {
\t\t\tget: function( elem, computed ) {
\t\t\t\tif ( computed ) {

\t\t\t\t\t// We should always get a number back from opacity
\t\t\t\t\tvar ret = curCSS( elem, \"opacity\" );
\t\t\t\t\treturn ret === \"\" ? \"1\" : ret;
\t\t\t\t}
\t\t\t}
\t\t}
\t},

\t// Don't automatically add \"px\" to these possibly-unitless properties
\tcssNumber: {
\t\t\"columnCount\": true,
\t\t\"fillOpacity\": true,
\t\t\"flexGrow\": true,
\t\t\"flexShrink\": true,
\t\t\"fontWeight\": true,
\t\t\"lineHeight\": true,
\t\t\"opacity\": true,
\t\t\"order\": true,
\t\t\"orphans\": true,
\t\t\"widows\": true,
\t\t\"zIndex\": true,
\t\t\"zoom\": true
\t},

\t// Add in properties whose names you wish to fix before
\t// setting or getting the value
\tcssProps: {
\t\t\"float\": \"cssFloat\"
\t},

\t// Get and set the style property on a DOM Node
\tstyle: function( elem, name, value, extra ) {

\t\t// Don't set styles on text and comment nodes
\t\tif ( !elem || elem.nodeType === 3 || elem.nodeType === 8 || !elem.style ) {
\t\t\treturn;
\t\t}

\t\t// Make sure that we're working with the right name
\t\tvar ret, type, hooks,
\t\t\torigName = jQuery.camelCase( name ),
\t\t\tstyle = elem.style;

\t\tname = jQuery.cssProps[ origName ] || ( jQuery.cssProps[ origName ] = vendorPropName( style, origName ) );

\t\t// Gets hook for the prefixed version, then unprefixed version
\t\thooks = jQuery.cssHooks[ name ] || jQuery.cssHooks[ origName ];

\t\t// Check if we're setting a value
\t\tif ( value !== undefined ) {
\t\t\ttype = typeof value;

\t\t\t// Convert \"+=\" or \"-=\" to relative numbers (#7345)
\t\t\tif ( type === \"string\" && (ret = rrelNum.exec( value )) ) {
\t\t\t\tvalue = ( ret[1] + 1 ) * ret[2] + parseFloat( jQuery.css( elem, name ) );
\t\t\t\t// Fixes bug #9237
\t\t\t\ttype = \"number\";
\t\t\t}

\t\t\t// Make sure that null and NaN values aren't set (#7116)
\t\t\tif ( value == null || value !== value ) {
\t\t\t\treturn;
\t\t\t}

\t\t\t// If a number, add 'px' to the (except for certain CSS properties)
\t\t\tif ( type === \"number\" && !jQuery.cssNumber[ origName ] ) {
\t\t\t\tvalue += \"px\";
\t\t\t}

\t\t\t// Support: IE9-11+
\t\t\t// background-* props affect original clone's values
\t\t\tif ( !support.clearCloneStyle && value === \"\" && name.indexOf( \"background\" ) === 0 ) {
\t\t\t\tstyle[ name ] = \"inherit\";
\t\t\t}

\t\t\t// If a hook was provided, use that value, otherwise just set the specified value
\t\t\tif ( !hooks || !(\"set\" in hooks) || (value = hooks.set( elem, value, extra )) !== undefined ) {
\t\t\t\tstyle[ name ] = value;
\t\t\t}

\t\t} else {
\t\t\t// If a hook was provided get the non-computed value from there
\t\t\tif ( hooks && \"get\" in hooks && (ret = hooks.get( elem, false, extra )) !== undefined ) {
\t\t\t\treturn ret;
\t\t\t}

\t\t\t// Otherwise just get the value from the style object
\t\t\treturn style[ name ];
\t\t}
\t},

\tcss: function( elem, name, extra, styles ) {
\t\tvar val, num, hooks,
\t\t\torigName = jQuery.camelCase( name );

\t\t// Make sure that we're working with the right name
\t\tname = jQuery.cssProps[ origName ] || ( jQuery.cssProps[ origName ] = vendorPropName( elem.style, origName ) );

\t\t// Try prefixed name followed by the unprefixed name
\t\thooks = jQuery.cssHooks[ name ] || jQuery.cssHooks[ origName ];

\t\t// If a hook was provided get the computed value from there
\t\tif ( hooks && \"get\" in hooks ) {
\t\t\tval = hooks.get( elem, true, extra );
\t\t}

\t\t// Otherwise, if a way to get the computed value exists, use that
\t\tif ( val === undefined ) {
\t\t\tval = curCSS( elem, name, styles );
\t\t}

\t\t// Convert \"normal\" to computed value
\t\tif ( val === \"normal\" && name in cssNormalTransform ) {
\t\t\tval = cssNormalTransform[ name ];
\t\t}

\t\t// Make numeric if forced or a qualifier was provided and val looks numeric
\t\tif ( extra === \"\" || extra ) {
\t\t\tnum = parseFloat( val );
\t\t\treturn extra === true || jQuery.isNumeric( num ) ? num || 0 : val;
\t\t}
\t\treturn val;
\t}
});

jQuery.each([ \"height\", \"width\" ], function( i, name ) {
\tjQuery.cssHooks[ name ] = {
\t\tget: function( elem, computed, extra ) {
\t\t\tif ( computed ) {

\t\t\t\t// Certain elements can have dimension info if we invisibly show them
\t\t\t\t// but it must have a current display style that would benefit
\t\t\t\treturn rdisplayswap.test( jQuery.css( elem, \"display\" ) ) && elem.offsetWidth === 0 ?
\t\t\t\t\tjQuery.swap( elem, cssShow, function() {
\t\t\t\t\t\treturn getWidthOrHeight( elem, name, extra );
\t\t\t\t\t}) :
\t\t\t\t\tgetWidthOrHeight( elem, name, extra );
\t\t\t}
\t\t},

\t\tset: function( elem, value, extra ) {
\t\t\tvar styles = extra && getStyles( elem );
\t\t\treturn setPositiveNumber( elem, value, extra ?
\t\t\t\taugmentWidthOrHeight(
\t\t\t\t\telem,
\t\t\t\t\tname,
\t\t\t\t\textra,
\t\t\t\t\tjQuery.css( elem, \"boxSizing\", false, styles ) === \"border-box\",
\t\t\t\t\tstyles
\t\t\t\t) : 0
\t\t\t);
\t\t}
\t};
});

// Support: Android 2.3
jQuery.cssHooks.marginRight = addGetHookIf( support.reliableMarginRight,
\tfunction( elem, computed ) {
\t\tif ( computed ) {
\t\t\treturn jQuery.swap( elem, { \"display\": \"inline-block\" },
\t\t\t\tcurCSS, [ elem, \"marginRight\" ] );
\t\t}
\t}
);

// These hooks are used by animate to expand properties
jQuery.each({
\tmargin: \"\",
\tpadding: \"\",
\tborder: \"Width\"
}, function( prefix, suffix ) {
\tjQuery.cssHooks[ prefix + suffix ] = {
\t\texpand: function( value ) {
\t\t\tvar i = 0,
\t\t\t\texpanded = {},

\t\t\t\t// Assumes a single number if not a string
\t\t\t\tparts = typeof value === \"string\" ? value.split(\" \") : [ value ];

\t\t\tfor ( ; i < 4; i++ ) {
\t\t\t\texpanded[ prefix + cssExpand[ i ] + suffix ] =
\t\t\t\t\tparts[ i ] || parts[ i - 2 ] || parts[ 0 ];
\t\t\t}

\t\t\treturn expanded;
\t\t}
\t};

\tif ( !rmargin.test( prefix ) ) {
\t\tjQuery.cssHooks[ prefix + suffix ].set = setPositiveNumber;
\t}
});

jQuery.fn.extend({
\tcss: function( name, value ) {
\t\treturn access( this, function( elem, name, value ) {
\t\t\tvar styles, len,
\t\t\t\tmap = {},
\t\t\t\ti = 0;

\t\t\tif ( jQuery.isArray( name ) ) {
\t\t\t\tstyles = getStyles( elem );
\t\t\t\tlen = name.length;

\t\t\t\tfor ( ; i < len; i++ ) {
\t\t\t\t\tmap[ name[ i ] ] = jQuery.css( elem, name[ i ], false, styles );
\t\t\t\t}

\t\t\t\treturn map;
\t\t\t}

\t\t\treturn value !== undefined ?
\t\t\t\tjQuery.style( elem, name, value ) :
\t\t\t\tjQuery.css( elem, name );
\t\t}, name, value, arguments.length > 1 );
\t},
\tshow: function() {
\t\treturn showHide( this, true );
\t},
\thide: function() {
\t\treturn showHide( this );
\t},
\ttoggle: function( state ) {
\t\tif ( typeof state === \"boolean\" ) {
\t\t\treturn state ? this.show() : this.hide();
\t\t}

\t\treturn this.each(function() {
\t\t\tif ( isHidden( this ) ) {
\t\t\t\tjQuery( this ).show();
\t\t\t} else {
\t\t\t\tjQuery( this ).hide();
\t\t\t}
\t\t});
\t}
});


function Tween( elem, options, prop, end, easing ) {
\treturn new Tween.prototype.init( elem, options, prop, end, easing );
}
jQuery.Tween = Tween;

Tween.prototype = {
\tconstructor: Tween,
\tinit: function( elem, options, prop, end, easing, unit ) {
\t\tthis.elem = elem;
\t\tthis.prop = prop;
\t\tthis.easing = easing || \"swing\";
\t\tthis.options = options;
\t\tthis.start = this.now = this.cur();
\t\tthis.end = end;
\t\tthis.unit = unit || ( jQuery.cssNumber[ prop ] ? \"\" : \"px\" );
\t},
\tcur: function() {
\t\tvar hooks = Tween.propHooks[ this.prop ];

\t\treturn hooks && hooks.get ?
\t\t\thooks.get( this ) :
\t\t\tTween.propHooks._default.get( this );
\t},
\trun: function( percent ) {
\t\tvar eased,
\t\t\thooks = Tween.propHooks[ this.prop ];

\t\tif ( this.options.duration ) {
\t\t\tthis.pos = eased = jQuery.easing[ this.easing ](
\t\t\t\tpercent, this.options.duration * percent, 0, 1, this.options.duration
\t\t\t);
\t\t} else {
\t\t\tthis.pos = eased = percent;
\t\t}
\t\tthis.now = ( this.end - this.start ) * eased + this.start;

\t\tif ( this.options.step ) {
\t\t\tthis.options.step.call( this.elem, this.now, this );
\t\t}

\t\tif ( hooks && hooks.set ) {
\t\t\thooks.set( this );
\t\t} else {
\t\t\tTween.propHooks._default.set( this );
\t\t}
\t\treturn this;
\t}
};

Tween.prototype.init.prototype = Tween.prototype;

Tween.propHooks = {
\t_default: {
\t\tget: function( tween ) {
\t\t\tvar result;

\t\t\tif ( tween.elem[ tween.prop ] != null &&
\t\t\t\t(!tween.elem.style || tween.elem.style[ tween.prop ] == null) ) {
\t\t\t\treturn tween.elem[ tween.prop ];
\t\t\t}

\t\t\t// Passing an empty string as a 3rd parameter to .css will automatically
\t\t\t// attempt a parseFloat and fallback to a string if the parse fails.
\t\t\t// Simple values such as \"10px\" are parsed to Float;
\t\t\t// complex values such as \"rotate(1rad)\" are returned as-is.
\t\t\tresult = jQuery.css( tween.elem, tween.prop, \"\" );
\t\t\t// Empty strings, null, undefined and \"auto\" are converted to 0.
\t\t\treturn !result || result === \"auto\" ? 0 : result;
\t\t},
\t\tset: function( tween ) {
\t\t\t// Use step hook for back compat.
\t\t\t// Use cssHook if its there.
\t\t\t// Use .style if available and use plain properties where available.
\t\t\tif ( jQuery.fx.step[ tween.prop ] ) {
\t\t\t\tjQuery.fx.step[ tween.prop ]( tween );
\t\t\t} else if ( tween.elem.style && ( tween.elem.style[ jQuery.cssProps[ tween.prop ] ] != null || jQuery.cssHooks[ tween.prop ] ) ) {
\t\t\t\tjQuery.style( tween.elem, tween.prop, tween.now + tween.unit );
\t\t\t} else {
\t\t\t\ttween.elem[ tween.prop ] = tween.now;
\t\t\t}
\t\t}
\t}
};

// Support: IE9
// Panic based approach to setting things on disconnected nodes
Tween.propHooks.scrollTop = Tween.propHooks.scrollLeft = {
\tset: function( tween ) {
\t\tif ( tween.elem.nodeType && tween.elem.parentNode ) {
\t\t\ttween.elem[ tween.prop ] = tween.now;
\t\t}
\t}
};

jQuery.easing = {
\tlinear: function( p ) {
\t\treturn p;
\t},
\tswing: function( p ) {
\t\treturn 0.5 - Math.cos( p * Math.PI ) / 2;
\t}
};

jQuery.fx = Tween.prototype.init;

// Back Compat <1.8 extension point
jQuery.fx.step = {};




var
\tfxNow, timerId,
\trfxtypes = /^(?:toggle|show|hide)\$/,
\trfxnum = new RegExp( \"^(?:([+-])=|)(\" + pnum + \")([a-z%]*)\$\", \"i\" ),
\trrun = /queueHooks\$/,
\tanimationPrefilters = [ defaultPrefilter ],
\ttweeners = {
\t\t\"*\": [ function( prop, value ) {
\t\t\tvar tween = this.createTween( prop, value ),
\t\t\t\ttarget = tween.cur(),
\t\t\t\tparts = rfxnum.exec( value ),
\t\t\t\tunit = parts && parts[ 3 ] || ( jQuery.cssNumber[ prop ] ? \"\" : \"px\" ),

\t\t\t\t// Starting value computation is required for potential unit mismatches
\t\t\t\tstart = ( jQuery.cssNumber[ prop ] || unit !== \"px\" && +target ) &&
\t\t\t\t\trfxnum.exec( jQuery.css( tween.elem, prop ) ),
\t\t\t\tscale = 1,
\t\t\t\tmaxIterations = 20;

\t\t\tif ( start && start[ 3 ] !== unit ) {
\t\t\t\t// Trust units reported by jQuery.css
\t\t\t\tunit = unit || start[ 3 ];

\t\t\t\t// Make sure we update the tween properties later on
\t\t\t\tparts = parts || [];

\t\t\t\t// Iteratively approximate from a nonzero starting point
\t\t\t\tstart = +target || 1;

\t\t\t\tdo {
\t\t\t\t\t// If previous iteration zeroed out, double until we get *something*.
\t\t\t\t\t// Use string for doubling so we don't accidentally see scale as unchanged below
\t\t\t\t\tscale = scale || \".5\";

\t\t\t\t\t// Adjust and apply
\t\t\t\t\tstart = start / scale;
\t\t\t\t\tjQuery.style( tween.elem, prop, start + unit );

\t\t\t\t// Update scale, tolerating zero or NaN from tween.cur(),
\t\t\t\t// break the loop if scale is unchanged or perfect, or if we've just had enough
\t\t\t\t} while ( scale !== (scale = tween.cur() / target) && scale !== 1 && --maxIterations );
\t\t\t}

\t\t\t// Update tween properties
\t\t\tif ( parts ) {
\t\t\t\tstart = tween.start = +start || +target || 0;
\t\t\t\ttween.unit = unit;
\t\t\t\t// If a +=/-= token was provided, we're doing a relative animation
\t\t\t\ttween.end = parts[ 1 ] ?
\t\t\t\t\tstart + ( parts[ 1 ] + 1 ) * parts[ 2 ] :
\t\t\t\t\t+parts[ 2 ];
\t\t\t}

\t\t\treturn tween;
\t\t} ]
\t};

// Animations created synchronously will run synchronously
function createFxNow() {
\tsetTimeout(function() {
\t\tfxNow = undefined;
\t});
\treturn ( fxNow = jQuery.now() );
}

// Generate parameters to create a standard animation
function genFx( type, includeWidth ) {
\tvar which,
\t\ti = 0,
\t\tattrs = { height: type };

\t// If we include width, step value is 1 to do all cssExpand values,
\t// otherwise step value is 2 to skip over Left and Right
\tincludeWidth = includeWidth ? 1 : 0;
\tfor ( ; i < 4 ; i += 2 - includeWidth ) {
\t\twhich = cssExpand[ i ];
\t\tattrs[ \"margin\" + which ] = attrs[ \"padding\" + which ] = type;
\t}

\tif ( includeWidth ) {
\t\tattrs.opacity = attrs.width = type;
\t}

\treturn attrs;
}

function createTween( value, prop, animation ) {
\tvar tween,
\t\tcollection = ( tweeners[ prop ] || [] ).concat( tweeners[ \"*\" ] ),
\t\tindex = 0,
\t\tlength = collection.length;
\tfor ( ; index < length; index++ ) {
\t\tif ( (tween = collection[ index ].call( animation, prop, value )) ) {

\t\t\t// We're done with this property
\t\t\treturn tween;
\t\t}
\t}
}

function defaultPrefilter( elem, props, opts ) {
\t/* jshint validthis: true */
\tvar prop, value, toggle, tween, hooks, oldfire, display, checkDisplay,
\t\tanim = this,
\t\torig = {},
\t\tstyle = elem.style,
\t\thidden = elem.nodeType && isHidden( elem ),
\t\tdataShow = data_priv.get( elem, \"fxshow\" );

\t// Handle queue: false promises
\tif ( !opts.queue ) {
\t\thooks = jQuery._queueHooks( elem, \"fx\" );
\t\tif ( hooks.unqueued == null ) {
\t\t\thooks.unqueued = 0;
\t\t\toldfire = hooks.empty.fire;
\t\t\thooks.empty.fire = function() {
\t\t\t\tif ( !hooks.unqueued ) {
\t\t\t\t\toldfire();
\t\t\t\t}
\t\t\t};
\t\t}
\t\thooks.unqueued++;

\t\tanim.always(function() {
\t\t\t// Ensure the complete handler is called before this completes
\t\t\tanim.always(function() {
\t\t\t\thooks.unqueued--;
\t\t\t\tif ( !jQuery.queue( elem, \"fx\" ).length ) {
\t\t\t\t\thooks.empty.fire();
\t\t\t\t}
\t\t\t});
\t\t});
\t}

\t// Height/width overflow pass
\tif ( elem.nodeType === 1 && ( \"height\" in props || \"width\" in props ) ) {
\t\t// Make sure that nothing sneaks out
\t\t// Record all 3 overflow attributes because IE9-10 do not
\t\t// change the overflow attribute when overflowX and
\t\t// overflowY are set to the same value
\t\topts.overflow = [ style.overflow, style.overflowX, style.overflowY ];

\t\t// Set display property to inline-block for height/width
\t\t// animations on inline elements that are having width/height animated
\t\tdisplay = jQuery.css( elem, \"display\" );

\t\t// Test default display if display is currently \"none\"
\t\tcheckDisplay = display === \"none\" ?
\t\t\tdata_priv.get( elem, \"olddisplay\" ) || defaultDisplay( elem.nodeName ) : display;

\t\tif ( checkDisplay === \"inline\" && jQuery.css( elem, \"float\" ) === \"none\" ) {
\t\t\tstyle.display = \"inline-block\";
\t\t}
\t}

\tif ( opts.overflow ) {
\t\tstyle.overflow = \"hidden\";
\t\tanim.always(function() {
\t\t\tstyle.overflow = opts.overflow[ 0 ];
\t\t\tstyle.overflowX = opts.overflow[ 1 ];
\t\t\tstyle.overflowY = opts.overflow[ 2 ];
\t\t});
\t}

\t// show/hide pass
\tfor ( prop in props ) {
\t\tvalue = props[ prop ];
\t\tif ( rfxtypes.exec( value ) ) {
\t\t\tdelete props[ prop ];
\t\t\ttoggle = toggle || value === \"toggle\";
\t\t\tif ( value === ( hidden ? \"hide\" : \"show\" ) ) {

\t\t\t\t// If there is dataShow left over from a stopped hide or show and we are going to proceed with show, we should pretend to be hidden
\t\t\t\tif ( value === \"show\" && dataShow && dataShow[ prop ] !== undefined ) {
\t\t\t\t\thidden = true;
\t\t\t\t} else {
\t\t\t\t\tcontinue;
\t\t\t\t}
\t\t\t}
\t\t\torig[ prop ] = dataShow && dataShow[ prop ] || jQuery.style( elem, prop );

\t\t// Any non-fx value stops us from restoring the original display value
\t\t} else {
\t\t\tdisplay = undefined;
\t\t}
\t}

\tif ( !jQuery.isEmptyObject( orig ) ) {
\t\tif ( dataShow ) {
\t\t\tif ( \"hidden\" in dataShow ) {
\t\t\t\thidden = dataShow.hidden;
\t\t\t}
\t\t} else {
\t\t\tdataShow = data_priv.access( elem, \"fxshow\", {} );
\t\t}

\t\t// Store state if its toggle - enables .stop().toggle() to \"reverse\"
\t\tif ( toggle ) {
\t\t\tdataShow.hidden = !hidden;
\t\t}
\t\tif ( hidden ) {
\t\t\tjQuery( elem ).show();
\t\t} else {
\t\t\tanim.done(function() {
\t\t\t\tjQuery( elem ).hide();
\t\t\t});
\t\t}
\t\tanim.done(function() {
\t\t\tvar prop;

\t\t\tdata_priv.remove( elem, \"fxshow\" );
\t\t\tfor ( prop in orig ) {
\t\t\t\tjQuery.style( elem, prop, orig[ prop ] );
\t\t\t}
\t\t});
\t\tfor ( prop in orig ) {
\t\t\ttween = createTween( hidden ? dataShow[ prop ] : 0, prop, anim );

\t\t\tif ( !( prop in dataShow ) ) {
\t\t\t\tdataShow[ prop ] = tween.start;
\t\t\t\tif ( hidden ) {
\t\t\t\t\ttween.end = tween.start;
\t\t\t\t\ttween.start = prop === \"width\" || prop === \"height\" ? 1 : 0;
\t\t\t\t}
\t\t\t}
\t\t}

\t// If this is a noop like .hide().hide(), restore an overwritten display value
\t} else if ( (display === \"none\" ? defaultDisplay( elem.nodeName ) : display) === \"inline\" ) {
\t\tstyle.display = display;
\t}
}

function propFilter( props, specialEasing ) {
\tvar index, name, easing, value, hooks;

\t// camelCase, specialEasing and expand cssHook pass
\tfor ( index in props ) {
\t\tname = jQuery.camelCase( index );
\t\teasing = specialEasing[ name ];
\t\tvalue = props[ index ];
\t\tif ( jQuery.isArray( value ) ) {
\t\t\teasing = value[ 1 ];
\t\t\tvalue = props[ index ] = value[ 0 ];
\t\t}

\t\tif ( index !== name ) {
\t\t\tprops[ name ] = value;
\t\t\tdelete props[ index ];
\t\t}

\t\thooks = jQuery.cssHooks[ name ];
\t\tif ( hooks && \"expand\" in hooks ) {
\t\t\tvalue = hooks.expand( value );
\t\t\tdelete props[ name ];

\t\t\t// Not quite \$.extend, this won't overwrite existing keys.
\t\t\t// Reusing 'index' because we have the correct \"name\"
\t\t\tfor ( index in value ) {
\t\t\t\tif ( !( index in props ) ) {
\t\t\t\t\tprops[ index ] = value[ index ];
\t\t\t\t\tspecialEasing[ index ] = easing;
\t\t\t\t}
\t\t\t}
\t\t} else {
\t\t\tspecialEasing[ name ] = easing;
\t\t}
\t}
}

function Animation( elem, properties, options ) {
\tvar result,
\t\tstopped,
\t\tindex = 0,
\t\tlength = animationPrefilters.length,
\t\tdeferred = jQuery.Deferred().always( function() {
\t\t\t// Don't match elem in the :animated selector
\t\t\tdelete tick.elem;
\t\t}),
\t\ttick = function() {
\t\t\tif ( stopped ) {
\t\t\t\treturn false;
\t\t\t}
\t\t\tvar currentTime = fxNow || createFxNow(),
\t\t\t\tremaining = Math.max( 0, animation.startTime + animation.duration - currentTime ),
\t\t\t\t// Support: Android 2.3
\t\t\t\t// Archaic crash bug won't allow us to use `1 - ( 0.5 || 0 )` (#12497)
\t\t\t\ttemp = remaining / animation.duration || 0,
\t\t\t\tpercent = 1 - temp,
\t\t\t\tindex = 0,
\t\t\t\tlength = animation.tweens.length;

\t\t\tfor ( ; index < length ; index++ ) {
\t\t\t\tanimation.tweens[ index ].run( percent );
\t\t\t}

\t\t\tdeferred.notifyWith( elem, [ animation, percent, remaining ]);

\t\t\tif ( percent < 1 && length ) {
\t\t\t\treturn remaining;
\t\t\t} else {
\t\t\t\tdeferred.resolveWith( elem, [ animation ] );
\t\t\t\treturn false;
\t\t\t}
\t\t},
\t\tanimation = deferred.promise({
\t\t\telem: elem,
\t\t\tprops: jQuery.extend( {}, properties ),
\t\t\topts: jQuery.extend( true, { specialEasing: {} }, options ),
\t\t\toriginalProperties: properties,
\t\t\toriginalOptions: options,
\t\t\tstartTime: fxNow || createFxNow(),
\t\t\tduration: options.duration,
\t\t\ttweens: [],
\t\t\tcreateTween: function( prop, end ) {
\t\t\t\tvar tween = jQuery.Tween( elem, animation.opts, prop, end,
\t\t\t\t\t\tanimation.opts.specialEasing[ prop ] || animation.opts.easing );
\t\t\t\tanimation.tweens.push( tween );
\t\t\t\treturn tween;
\t\t\t},
\t\t\tstop: function( gotoEnd ) {
\t\t\t\tvar index = 0,
\t\t\t\t\t// If we are going to the end, we want to run all the tweens
\t\t\t\t\t// otherwise we skip this part
\t\t\t\t\tlength = gotoEnd ? animation.tweens.length : 0;
\t\t\t\tif ( stopped ) {
\t\t\t\t\treturn this;
\t\t\t\t}
\t\t\t\tstopped = true;
\t\t\t\tfor ( ; index < length ; index++ ) {
\t\t\t\t\tanimation.tweens[ index ].run( 1 );
\t\t\t\t}

\t\t\t\t// Resolve when we played the last frame; otherwise, reject
\t\t\t\tif ( gotoEnd ) {
\t\t\t\t\tdeferred.resolveWith( elem, [ animation, gotoEnd ] );
\t\t\t\t} else {
\t\t\t\t\tdeferred.rejectWith( elem, [ animation, gotoEnd ] );
\t\t\t\t}
\t\t\t\treturn this;
\t\t\t}
\t\t}),
\t\tprops = animation.props;

\tpropFilter( props, animation.opts.specialEasing );

\tfor ( ; index < length ; index++ ) {
\t\tresult = animationPrefilters[ index ].call( animation, elem, props, animation.opts );
\t\tif ( result ) {
\t\t\treturn result;
\t\t}
\t}

\tjQuery.map( props, createTween, animation );

\tif ( jQuery.isFunction( animation.opts.start ) ) {
\t\tanimation.opts.start.call( elem, animation );
\t}

\tjQuery.fx.timer(
\t\tjQuery.extend( tick, {
\t\t\telem: elem,
\t\t\tanim: animation,
\t\t\tqueue: animation.opts.queue
\t\t})
\t);

\t// attach callbacks from options
\treturn animation.progress( animation.opts.progress )
\t\t.done( animation.opts.done, animation.opts.complete )
\t\t.fail( animation.opts.fail )
\t\t.always( animation.opts.always );
}

jQuery.Animation = jQuery.extend( Animation, {

\ttweener: function( props, callback ) {
\t\tif ( jQuery.isFunction( props ) ) {
\t\t\tcallback = props;
\t\t\tprops = [ \"*\" ];
\t\t} else {
\t\t\tprops = props.split(\" \");
\t\t}

\t\tvar prop,
\t\t\tindex = 0,
\t\t\tlength = props.length;

\t\tfor ( ; index < length ; index++ ) {
\t\t\tprop = props[ index ];
\t\t\ttweeners[ prop ] = tweeners[ prop ] || [];
\t\t\ttweeners[ prop ].unshift( callback );
\t\t}
\t},

\tprefilter: function( callback, prepend ) {
\t\tif ( prepend ) {
\t\t\tanimationPrefilters.unshift( callback );
\t\t} else {
\t\t\tanimationPrefilters.push( callback );
\t\t}
\t}
});

jQuery.speed = function( speed, easing, fn ) {
\tvar opt = speed && typeof speed === \"object\" ? jQuery.extend( {}, speed ) : {
\t\tcomplete: fn || !fn && easing ||
\t\t\tjQuery.isFunction( speed ) && speed,
\t\tduration: speed,
\t\teasing: fn && easing || easing && !jQuery.isFunction( easing ) && easing
\t};

\topt.duration = jQuery.fx.off ? 0 : typeof opt.duration === \"number\" ? opt.duration :
\t\topt.duration in jQuery.fx.speeds ? jQuery.fx.speeds[ opt.duration ] : jQuery.fx.speeds._default;

\t// Normalize opt.queue - true/undefined/null -> \"fx\"
\tif ( opt.queue == null || opt.queue === true ) {
\t\topt.queue = \"fx\";
\t}

\t// Queueing
\topt.old = opt.complete;

\topt.complete = function() {
\t\tif ( jQuery.isFunction( opt.old ) ) {
\t\t\topt.old.call( this );
\t\t}

\t\tif ( opt.queue ) {
\t\t\tjQuery.dequeue( this, opt.queue );
\t\t}
\t};

\treturn opt;
};

jQuery.fn.extend({
\tfadeTo: function( speed, to, easing, callback ) {

\t\t// Show any hidden elements after setting opacity to 0
\t\treturn this.filter( isHidden ).css( \"opacity\", 0 ).show()

\t\t\t// Animate to the value specified
\t\t\t.end().animate({ opacity: to }, speed, easing, callback );
\t},
\tanimate: function( prop, speed, easing, callback ) {
\t\tvar empty = jQuery.isEmptyObject( prop ),
\t\t\toptall = jQuery.speed( speed, easing, callback ),
\t\t\tdoAnimation = function() {
\t\t\t\t// Operate on a copy of prop so per-property easing won't be lost
\t\t\t\tvar anim = Animation( this, jQuery.extend( {}, prop ), optall );

\t\t\t\t// Empty animations, or finishing resolves immediately
\t\t\t\tif ( empty || data_priv.get( this, \"finish\" ) ) {
\t\t\t\t\tanim.stop( true );
\t\t\t\t}
\t\t\t};
\t\t\tdoAnimation.finish = doAnimation;

\t\treturn empty || optall.queue === false ?
\t\t\tthis.each( doAnimation ) :
\t\t\tthis.queue( optall.queue, doAnimation );
\t},
\tstop: function( type, clearQueue, gotoEnd ) {
\t\tvar stopQueue = function( hooks ) {
\t\t\tvar stop = hooks.stop;
\t\t\tdelete hooks.stop;
\t\t\tstop( gotoEnd );
\t\t};

\t\tif ( typeof type !== \"string\" ) {
\t\t\tgotoEnd = clearQueue;
\t\t\tclearQueue = type;
\t\t\ttype = undefined;
\t\t}
\t\tif ( clearQueue && type !== false ) {
\t\t\tthis.queue( type || \"fx\", [] );
\t\t}

\t\treturn this.each(function() {
\t\t\tvar dequeue = true,
\t\t\t\tindex = type != null && type + \"queueHooks\",
\t\t\t\ttimers = jQuery.timers,
\t\t\t\tdata = data_priv.get( this );

\t\t\tif ( index ) {
\t\t\t\tif ( data[ index ] && data[ index ].stop ) {
\t\t\t\t\tstopQueue( data[ index ] );
\t\t\t\t}
\t\t\t} else {
\t\t\t\tfor ( index in data ) {
\t\t\t\t\tif ( data[ index ] && data[ index ].stop && rrun.test( index ) ) {
\t\t\t\t\t\tstopQueue( data[ index ] );
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t\t\tfor ( index = timers.length; index--; ) {
\t\t\t\tif ( timers[ index ].elem === this && (type == null || timers[ index ].queue === type) ) {
\t\t\t\t\ttimers[ index ].anim.stop( gotoEnd );
\t\t\t\t\tdequeue = false;
\t\t\t\t\ttimers.splice( index, 1 );
\t\t\t\t}
\t\t\t}

\t\t\t// Start the next in the queue if the last step wasn't forced.
\t\t\t// Timers currently will call their complete callbacks, which
\t\t\t// will dequeue but only if they were gotoEnd.
\t\t\tif ( dequeue || !gotoEnd ) {
\t\t\t\tjQuery.dequeue( this, type );
\t\t\t}
\t\t});
\t},
\tfinish: function( type ) {
\t\tif ( type !== false ) {
\t\t\ttype = type || \"fx\";
\t\t}
\t\treturn this.each(function() {
\t\t\tvar index,
\t\t\t\tdata = data_priv.get( this ),
\t\t\t\tqueue = data[ type + \"queue\" ],
\t\t\t\thooks = data[ type + \"queueHooks\" ],
\t\t\t\ttimers = jQuery.timers,
\t\t\t\tlength = queue ? queue.length : 0;

\t\t\t// Enable finishing flag on private data
\t\t\tdata.finish = true;

\t\t\t// Empty the queue first
\t\t\tjQuery.queue( this, type, [] );

\t\t\tif ( hooks && hooks.stop ) {
\t\t\t\thooks.stop.call( this, true );
\t\t\t}

\t\t\t// Look for any active animations, and finish them
\t\t\tfor ( index = timers.length; index--; ) {
\t\t\t\tif ( timers[ index ].elem === this && timers[ index ].queue === type ) {
\t\t\t\t\ttimers[ index ].anim.stop( true );
\t\t\t\t\ttimers.splice( index, 1 );
\t\t\t\t}
\t\t\t}

\t\t\t// Look for any animations in the old queue and finish them
\t\t\tfor ( index = 0; index < length; index++ ) {
\t\t\t\tif ( queue[ index ] && queue[ index ].finish ) {
\t\t\t\t\tqueue[ index ].finish.call( this );
\t\t\t\t}
\t\t\t}

\t\t\t// Turn off finishing flag
\t\t\tdelete data.finish;
\t\t});
\t}
});

jQuery.each([ \"toggle\", \"show\", \"hide\" ], function( i, name ) {
\tvar cssFn = jQuery.fn[ name ];
\tjQuery.fn[ name ] = function( speed, easing, callback ) {
\t\treturn speed == null || typeof speed === \"boolean\" ?
\t\t\tcssFn.apply( this, arguments ) :
\t\t\tthis.animate( genFx( name, true ), speed, easing, callback );
\t};
});

// Generate shortcuts for custom animations
jQuery.each({
\tslideDown: genFx(\"show\"),
\tslideUp: genFx(\"hide\"),
\tslideToggle: genFx(\"toggle\"),
\tfadeIn: { opacity: \"show\" },
\tfadeOut: { opacity: \"hide\" },
\tfadeToggle: { opacity: \"toggle\" }
}, function( name, props ) {
\tjQuery.fn[ name ] = function( speed, easing, callback ) {
\t\treturn this.animate( props, speed, easing, callback );
\t};
});

jQuery.timers = [];
jQuery.fx.tick = function() {
\tvar timer,
\t\ti = 0,
\t\ttimers = jQuery.timers;

\tfxNow = jQuery.now();

\tfor ( ; i < timers.length; i++ ) {
\t\ttimer = timers[ i ];
\t\t// Checks the timer has not already been removed
\t\tif ( !timer() && timers[ i ] === timer ) {
\t\t\ttimers.splice( i--, 1 );
\t\t}
\t}

\tif ( !timers.length ) {
\t\tjQuery.fx.stop();
\t}
\tfxNow = undefined;
};

jQuery.fx.timer = function( timer ) {
\tjQuery.timers.push( timer );
\tif ( timer() ) {
\t\tjQuery.fx.start();
\t} else {
\t\tjQuery.timers.pop();
\t}
};

jQuery.fx.interval = 13;

jQuery.fx.start = function() {
\tif ( !timerId ) {
\t\ttimerId = setInterval( jQuery.fx.tick, jQuery.fx.interval );
\t}
};

jQuery.fx.stop = function() {
\tclearInterval( timerId );
\ttimerId = null;
};

jQuery.fx.speeds = {
\tslow: 600,
\tfast: 200,
\t// Default speed
\t_default: 400
};


// Based off of the plugin by Clint Helfers, with permission.
// http://blindsignals.com/index.php/2009/07/jquery-delay/
jQuery.fn.delay = function( time, type ) {
\ttime = jQuery.fx ? jQuery.fx.speeds[ time ] || time : time;
\ttype = type || \"fx\";

\treturn this.queue( type, function( next, hooks ) {
\t\tvar timeout = setTimeout( next, time );
\t\thooks.stop = function() {
\t\t\tclearTimeout( timeout );
\t\t};
\t});
};


(function() {
\tvar input = document.createElement( \"input\" ),
\t\tselect = document.createElement( \"select\" ),
\t\topt = select.appendChild( document.createElement( \"option\" ) );

\tinput.type = \"checkbox\";

\t// Support: iOS<=5.1, Android<=4.2+
\t// Default value for a checkbox should be \"on\"
\tsupport.checkOn = input.value !== \"\";

\t// Support: IE<=11+
\t// Must access selectedIndex to make default options select
\tsupport.optSelected = opt.selected;

\t// Support: Android<=2.3
\t// Options inside disabled selects are incorrectly marked as disabled
\tselect.disabled = true;
\tsupport.optDisabled = !opt.disabled;

\t// Support: IE<=11+
\t// An input loses its value after becoming a radio
\tinput = document.createElement( \"input\" );
\tinput.value = \"t\";
\tinput.type = \"radio\";
\tsupport.radioValue = input.value === \"t\";
})();


var nodeHook, boolHook,
\tattrHandle = jQuery.expr.attrHandle;

jQuery.fn.extend({
\tattr: function( name, value ) {
\t\treturn access( this, jQuery.attr, name, value, arguments.length > 1 );
\t},

\tremoveAttr: function( name ) {
\t\treturn this.each(function() {
\t\t\tjQuery.removeAttr( this, name );
\t\t});
\t}
});

jQuery.extend({
\tattr: function( elem, name, value ) {
\t\tvar hooks, ret,
\t\t\tnType = elem.nodeType;

\t\t// don't get/set attributes on text, comment and attribute nodes
\t\tif ( !elem || nType === 3 || nType === 8 || nType === 2 ) {
\t\t\treturn;
\t\t}

\t\t// Fallback to prop when attributes are not supported
\t\tif ( typeof elem.getAttribute === strundefined ) {
\t\t\treturn jQuery.prop( elem, name, value );
\t\t}

\t\t// All attributes are lowercase
\t\t// Grab necessary hook if one is defined
\t\tif ( nType !== 1 || !jQuery.isXMLDoc( elem ) ) {
\t\t\tname = name.toLowerCase();
\t\t\thooks = jQuery.attrHooks[ name ] ||
\t\t\t\t( jQuery.expr.match.bool.test( name ) ? boolHook : nodeHook );
\t\t}

\t\tif ( value !== undefined ) {

\t\t\tif ( value === null ) {
\t\t\t\tjQuery.removeAttr( elem, name );

\t\t\t} else if ( hooks && \"set\" in hooks && (ret = hooks.set( elem, value, name )) !== undefined ) {
\t\t\t\treturn ret;

\t\t\t} else {
\t\t\t\telem.setAttribute( name, value + \"\" );
\t\t\t\treturn value;
\t\t\t}

\t\t} else if ( hooks && \"get\" in hooks && (ret = hooks.get( elem, name )) !== null ) {
\t\t\treturn ret;

\t\t} else {
\t\t\tret = jQuery.find.attr( elem, name );

\t\t\t// Non-existent attributes return null, we normalize to undefined
\t\t\treturn ret == null ?
\t\t\t\tundefined :
\t\t\t\tret;
\t\t}
\t},

\tremoveAttr: function( elem, value ) {
\t\tvar name, propName,
\t\t\ti = 0,
\t\t\tattrNames = value && value.match( rnotwhite );

\t\tif ( attrNames && elem.nodeType === 1 ) {
\t\t\twhile ( (name = attrNames[i++]) ) {
\t\t\t\tpropName = jQuery.propFix[ name ] || name;

\t\t\t\t// Boolean attributes get special treatment (#10870)
\t\t\t\tif ( jQuery.expr.match.bool.test( name ) ) {
\t\t\t\t\t// Set corresponding property to false
\t\t\t\t\telem[ propName ] = false;
\t\t\t\t}

\t\t\t\telem.removeAttribute( name );
\t\t\t}
\t\t}
\t},

\tattrHooks: {
\t\ttype: {
\t\t\tset: function( elem, value ) {
\t\t\t\tif ( !support.radioValue && value === \"radio\" &&
\t\t\t\t\tjQuery.nodeName( elem, \"input\" ) ) {
\t\t\t\t\tvar val = elem.value;
\t\t\t\t\telem.setAttribute( \"type\", value );
\t\t\t\t\tif ( val ) {
\t\t\t\t\t\telem.value = val;
\t\t\t\t\t}
\t\t\t\t\treturn value;
\t\t\t\t}
\t\t\t}
\t\t}
\t}
});

// Hooks for boolean attributes
boolHook = {
\tset: function( elem, value, name ) {
\t\tif ( value === false ) {
\t\t\t// Remove boolean attributes when set to false
\t\t\tjQuery.removeAttr( elem, name );
\t\t} else {
\t\t\telem.setAttribute( name, name );
\t\t}
\t\treturn name;
\t}
};
jQuery.each( jQuery.expr.match.bool.source.match( /\\w+/g ), function( i, name ) {
\tvar getter = attrHandle[ name ] || jQuery.find.attr;

\tattrHandle[ name ] = function( elem, name, isXML ) {
\t\tvar ret, handle;
\t\tif ( !isXML ) {
\t\t\t// Avoid an infinite loop by temporarily removing this function from the getter
\t\t\thandle = attrHandle[ name ];
\t\t\tattrHandle[ name ] = ret;
\t\t\tret = getter( elem, name, isXML ) != null ?
\t\t\t\tname.toLowerCase() :
\t\t\t\tnull;
\t\t\tattrHandle[ name ] = handle;
\t\t}
\t\treturn ret;
\t};
});




var rfocusable = /^(?:input|select|textarea|button)\$/i;

jQuery.fn.extend({
\tprop: function( name, value ) {
\t\treturn access( this, jQuery.prop, name, value, arguments.length > 1 );
\t},

\tremoveProp: function( name ) {
\t\treturn this.each(function() {
\t\t\tdelete this[ jQuery.propFix[ name ] || name ];
\t\t});
\t}
});

jQuery.extend({
\tpropFix: {
\t\t\"for\": \"htmlFor\",
\t\t\"class\": \"className\"
\t},

\tprop: function( elem, name, value ) {
\t\tvar ret, hooks, notxml,
\t\t\tnType = elem.nodeType;

\t\t// Don't get/set properties on text, comment and attribute nodes
\t\tif ( !elem || nType === 3 || nType === 8 || nType === 2 ) {
\t\t\treturn;
\t\t}

\t\tnotxml = nType !== 1 || !jQuery.isXMLDoc( elem );

\t\tif ( notxml ) {
\t\t\t// Fix name and attach hooks
\t\t\tname = jQuery.propFix[ name ] || name;
\t\t\thooks = jQuery.propHooks[ name ];
\t\t}

\t\tif ( value !== undefined ) {
\t\t\treturn hooks && \"set\" in hooks && (ret = hooks.set( elem, value, name )) !== undefined ?
\t\t\t\tret :
\t\t\t\t( elem[ name ] = value );

\t\t} else {
\t\t\treturn hooks && \"get\" in hooks && (ret = hooks.get( elem, name )) !== null ?
\t\t\t\tret :
\t\t\t\telem[ name ];
\t\t}
\t},

\tpropHooks: {
\t\ttabIndex: {
\t\t\tget: function( elem ) {
\t\t\t\treturn elem.hasAttribute( \"tabindex\" ) || rfocusable.test( elem.nodeName ) || elem.href ?
\t\t\t\t\telem.tabIndex :
\t\t\t\t\t-1;
\t\t\t}
\t\t}
\t}
});

if ( !support.optSelected ) {
\tjQuery.propHooks.selected = {
\t\tget: function( elem ) {
\t\t\tvar parent = elem.parentNode;
\t\t\tif ( parent && parent.parentNode ) {
\t\t\t\tparent.parentNode.selectedIndex;
\t\t\t}
\t\t\treturn null;
\t\t}
\t};
}

jQuery.each([
\t\"tabIndex\",
\t\"readOnly\",
\t\"maxLength\",
\t\"cellSpacing\",
\t\"cellPadding\",
\t\"rowSpan\",
\t\"colSpan\",
\t\"useMap\",
\t\"frameBorder\",
\t\"contentEditable\"
], function() {
\tjQuery.propFix[ this.toLowerCase() ] = this;
});




var rclass = /[\\t\\r\\n\\f]/g;

jQuery.fn.extend({
\taddClass: function( value ) {
\t\tvar classes, elem, cur, clazz, j, finalValue,
\t\t\tproceed = typeof value === \"string\" && value,
\t\t\ti = 0,
\t\t\tlen = this.length;

\t\tif ( jQuery.isFunction( value ) ) {
\t\t\treturn this.each(function( j ) {
\t\t\t\tjQuery( this ).addClass( value.call( this, j, this.className ) );
\t\t\t});
\t\t}

\t\tif ( proceed ) {
\t\t\t// The disjunction here is for better compressibility (see removeClass)
\t\t\tclasses = ( value || \"\" ).match( rnotwhite ) || [];

\t\t\tfor ( ; i < len; i++ ) {
\t\t\t\telem = this[ i ];
\t\t\t\tcur = elem.nodeType === 1 && ( elem.className ?
\t\t\t\t\t( \" \" + elem.className + \" \" ).replace( rclass, \" \" ) :
\t\t\t\t\t\" \"
\t\t\t\t);

\t\t\t\tif ( cur ) {
\t\t\t\t\tj = 0;
\t\t\t\t\twhile ( (clazz = classes[j++]) ) {
\t\t\t\t\t\tif ( cur.indexOf( \" \" + clazz + \" \" ) < 0 ) {
\t\t\t\t\t\t\tcur += clazz + \" \";
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\t// only assign if different to avoid unneeded rendering.
\t\t\t\t\tfinalValue = jQuery.trim( cur );
\t\t\t\t\tif ( elem.className !== finalValue ) {
\t\t\t\t\t\telem.className = finalValue;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}

\t\treturn this;
\t},

\tremoveClass: function( value ) {
\t\tvar classes, elem, cur, clazz, j, finalValue,
\t\t\tproceed = arguments.length === 0 || typeof value === \"string\" && value,
\t\t\ti = 0,
\t\t\tlen = this.length;

\t\tif ( jQuery.isFunction( value ) ) {
\t\t\treturn this.each(function( j ) {
\t\t\t\tjQuery( this ).removeClass( value.call( this, j, this.className ) );
\t\t\t});
\t\t}
\t\tif ( proceed ) {
\t\t\tclasses = ( value || \"\" ).match( rnotwhite ) || [];

\t\t\tfor ( ; i < len; i++ ) {
\t\t\t\telem = this[ i ];
\t\t\t\t// This expression is here for better compressibility (see addClass)
\t\t\t\tcur = elem.nodeType === 1 && ( elem.className ?
\t\t\t\t\t( \" \" + elem.className + \" \" ).replace( rclass, \" \" ) :
\t\t\t\t\t\"\"
\t\t\t\t);

\t\t\t\tif ( cur ) {
\t\t\t\t\tj = 0;
\t\t\t\t\twhile ( (clazz = classes[j++]) ) {
\t\t\t\t\t\t// Remove *all* instances
\t\t\t\t\t\twhile ( cur.indexOf( \" \" + clazz + \" \" ) >= 0 ) {
\t\t\t\t\t\t\tcur = cur.replace( \" \" + clazz + \" \", \" \" );
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\t// Only assign if different to avoid unneeded rendering.
\t\t\t\t\tfinalValue = value ? jQuery.trim( cur ) : \"\";
\t\t\t\t\tif ( elem.className !== finalValue ) {
\t\t\t\t\t\telem.className = finalValue;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}

\t\treturn this;
\t},

\ttoggleClass: function( value, stateVal ) {
\t\tvar type = typeof value;

\t\tif ( typeof stateVal === \"boolean\" && type === \"string\" ) {
\t\t\treturn stateVal ? this.addClass( value ) : this.removeClass( value );
\t\t}

\t\tif ( jQuery.isFunction( value ) ) {
\t\t\treturn this.each(function( i ) {
\t\t\t\tjQuery( this ).toggleClass( value.call(this, i, this.className, stateVal), stateVal );
\t\t\t});
\t\t}

\t\treturn this.each(function() {
\t\t\tif ( type === \"string\" ) {
\t\t\t\t// Toggle individual class names
\t\t\t\tvar className,
\t\t\t\t\ti = 0,
\t\t\t\t\tself = jQuery( this ),
\t\t\t\t\tclassNames = value.match( rnotwhite ) || [];

\t\t\t\twhile ( (className = classNames[ i++ ]) ) {
\t\t\t\t\t// Check each className given, space separated list
\t\t\t\t\tif ( self.hasClass( className ) ) {
\t\t\t\t\t\tself.removeClass( className );
\t\t\t\t\t} else {
\t\t\t\t\t\tself.addClass( className );
\t\t\t\t\t}
\t\t\t\t}

\t\t\t// Toggle whole class name
\t\t\t} else if ( type === strundefined || type === \"boolean\" ) {
\t\t\t\tif ( this.className ) {
\t\t\t\t\t// store className if set
\t\t\t\t\tdata_priv.set( this, \"__className__\", this.className );
\t\t\t\t}

\t\t\t\t// If the element has a class name or if we're passed `false`,
\t\t\t\t// then remove the whole classname (if there was one, the above saved it).
\t\t\t\t// Otherwise bring back whatever was previously saved (if anything),
\t\t\t\t// falling back to the empty string if nothing was stored.
\t\t\t\tthis.className = this.className || value === false ? \"\" : data_priv.get( this, \"__className__\" ) || \"\";
\t\t\t}
\t\t});
\t},

\thasClass: function( selector ) {
\t\tvar className = \" \" + selector + \" \",
\t\t\ti = 0,
\t\t\tl = this.length;
\t\tfor ( ; i < l; i++ ) {
\t\t\tif ( this[i].nodeType === 1 && (\" \" + this[i].className + \" \").replace(rclass, \" \").indexOf( className ) >= 0 ) {
\t\t\t\treturn true;
\t\t\t}
\t\t}

\t\treturn false;
\t}
});




var rreturn = /\\r/g;

jQuery.fn.extend({
\tval: function( value ) {
\t\tvar hooks, ret, isFunction,
\t\t\telem = this[0];

\t\tif ( !arguments.length ) {
\t\t\tif ( elem ) {
\t\t\t\thooks = jQuery.valHooks[ elem.type ] || jQuery.valHooks[ elem.nodeName.toLowerCase() ];

\t\t\t\tif ( hooks && \"get\" in hooks && (ret = hooks.get( elem, \"value\" )) !== undefined ) {
\t\t\t\t\treturn ret;
\t\t\t\t}

\t\t\t\tret = elem.value;

\t\t\t\treturn typeof ret === \"string\" ?
\t\t\t\t\t// Handle most common string cases
\t\t\t\t\tret.replace(rreturn, \"\") :
\t\t\t\t\t// Handle cases where value is null/undef or number
\t\t\t\t\tret == null ? \"\" : ret;
\t\t\t}

\t\t\treturn;
\t\t}

\t\tisFunction = jQuery.isFunction( value );

\t\treturn this.each(function( i ) {
\t\t\tvar val;

\t\t\tif ( this.nodeType !== 1 ) {
\t\t\t\treturn;
\t\t\t}

\t\t\tif ( isFunction ) {
\t\t\t\tval = value.call( this, i, jQuery( this ).val() );
\t\t\t} else {
\t\t\t\tval = value;
\t\t\t}

\t\t\t// Treat null/undefined as \"\"; convert numbers to string
\t\t\tif ( val == null ) {
\t\t\t\tval = \"\";

\t\t\t} else if ( typeof val === \"number\" ) {
\t\t\t\tval += \"\";

\t\t\t} else if ( jQuery.isArray( val ) ) {
\t\t\t\tval = jQuery.map( val, function( value ) {
\t\t\t\t\treturn value == null ? \"\" : value + \"\";
\t\t\t\t});
\t\t\t}

\t\t\thooks = jQuery.valHooks[ this.type ] || jQuery.valHooks[ this.nodeName.toLowerCase() ];

\t\t\t// If set returns undefined, fall back to normal setting
\t\t\tif ( !hooks || !(\"set\" in hooks) || hooks.set( this, val, \"value\" ) === undefined ) {
\t\t\t\tthis.value = val;
\t\t\t}
\t\t});
\t}
});

jQuery.extend({
\tvalHooks: {
\t\toption: {
\t\t\tget: function( elem ) {
\t\t\t\tvar val = jQuery.find.attr( elem, \"value\" );
\t\t\t\treturn val != null ?
\t\t\t\t\tval :
\t\t\t\t\t// Support: IE10-11+
\t\t\t\t\t// option.text throws exceptions (#14686, #14858)
\t\t\t\t\tjQuery.trim( jQuery.text( elem ) );
\t\t\t}
\t\t},
\t\tselect: {
\t\t\tget: function( elem ) {
\t\t\t\tvar value, option,
\t\t\t\t\toptions = elem.options,
\t\t\t\t\tindex = elem.selectedIndex,
\t\t\t\t\tone = elem.type === \"select-one\" || index < 0,
\t\t\t\t\tvalues = one ? null : [],
\t\t\t\t\tmax = one ? index + 1 : options.length,
\t\t\t\t\ti = index < 0 ?
\t\t\t\t\t\tmax :
\t\t\t\t\t\tone ? index : 0;

\t\t\t\t// Loop through all the selected options
\t\t\t\tfor ( ; i < max; i++ ) {
\t\t\t\t\toption = options[ i ];

\t\t\t\t\t// IE6-9 doesn't update selected after form reset (#2551)
\t\t\t\t\tif ( ( option.selected || i === index ) &&
\t\t\t\t\t\t\t// Don't return options that are disabled or in a disabled optgroup
\t\t\t\t\t\t\t( support.optDisabled ? !option.disabled : option.getAttribute( \"disabled\" ) === null ) &&
\t\t\t\t\t\t\t( !option.parentNode.disabled || !jQuery.nodeName( option.parentNode, \"optgroup\" ) ) ) {

\t\t\t\t\t\t// Get the specific value for the option
\t\t\t\t\t\tvalue = jQuery( option ).val();

\t\t\t\t\t\t// We don't need an array for one selects
\t\t\t\t\t\tif ( one ) {
\t\t\t\t\t\t\treturn value;
\t\t\t\t\t\t}

\t\t\t\t\t\t// Multi-Selects return an array
\t\t\t\t\t\tvalues.push( value );
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\treturn values;
\t\t\t},

\t\t\tset: function( elem, value ) {
\t\t\t\tvar optionSet, option,
\t\t\t\t\toptions = elem.options,
\t\t\t\t\tvalues = jQuery.makeArray( value ),
\t\t\t\t\ti = options.length;

\t\t\t\twhile ( i-- ) {
\t\t\t\t\toption = options[ i ];
\t\t\t\t\tif ( (option.selected = jQuery.inArray( option.value, values ) >= 0) ) {
\t\t\t\t\t\toptionSet = true;
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// Force browsers to behave consistently when non-matching value is set
\t\t\t\tif ( !optionSet ) {
\t\t\t\t\telem.selectedIndex = -1;
\t\t\t\t}
\t\t\t\treturn values;
\t\t\t}
\t\t}
\t}
});

// Radios and checkboxes getter/setter
jQuery.each([ \"radio\", \"checkbox\" ], function() {
\tjQuery.valHooks[ this ] = {
\t\tset: function( elem, value ) {
\t\t\tif ( jQuery.isArray( value ) ) {
\t\t\t\treturn ( elem.checked = jQuery.inArray( jQuery(elem).val(), value ) >= 0 );
\t\t\t}
\t\t}
\t};
\tif ( !support.checkOn ) {
\t\tjQuery.valHooks[ this ].get = function( elem ) {
\t\t\treturn elem.getAttribute(\"value\") === null ? \"on\" : elem.value;
\t\t};
\t}
});




// Return jQuery for attributes-only inclusion


jQuery.each( (\"blur focus focusin focusout load resize scroll unload click dblclick \" +
\t\"mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave \" +
\t\"change select submit keydown keypress keyup error contextmenu\").split(\" \"), function( i, name ) {

\t// Handle event binding
\tjQuery.fn[ name ] = function( data, fn ) {
\t\treturn arguments.length > 0 ?
\t\t\tthis.on( name, null, data, fn ) :
\t\t\tthis.trigger( name );
\t};
});

jQuery.fn.extend({
\thover: function( fnOver, fnOut ) {
\t\treturn this.mouseenter( fnOver ).mouseleave( fnOut || fnOver );
\t},

\tbind: function( types, data, fn ) {
\t\treturn this.on( types, null, data, fn );
\t},
\tunbind: function( types, fn ) {
\t\treturn this.off( types, null, fn );
\t},

\tdelegate: function( selector, types, data, fn ) {
\t\treturn this.on( types, selector, data, fn );
\t},
\tundelegate: function( selector, types, fn ) {
\t\t// ( namespace ) or ( selector, types [, fn] )
\t\treturn arguments.length === 1 ? this.off( selector, \"**\" ) : this.off( types, selector || \"**\", fn );
\t}
});


var nonce = jQuery.now();

var rquery = (/\\?/);



// Support: Android 2.3
// Workaround failure to string-cast null input
jQuery.parseJSON = function( data ) {
\treturn JSON.parse( data + \"\" );
};


// Cross-browser xml parsing
jQuery.parseXML = function( data ) {
\tvar xml, tmp;
\tif ( !data || typeof data !== \"string\" ) {
\t\treturn null;
\t}

\t// Support: IE9
\ttry {
\t\ttmp = new DOMParser();
\t\txml = tmp.parseFromString( data, \"text/xml\" );
\t} catch ( e ) {
\t\txml = undefined;
\t}

\tif ( !xml || xml.getElementsByTagName( \"parsererror\" ).length ) {
\t\tjQuery.error( \"Invalid XML: \" + data );
\t}
\treturn xml;
};


var
\trhash = /#.*\$/,
\trts = /([?&])_=[^&]*/,
\trheaders = /^(.*?):[ \\t]*([^\\r\\n]*)\$/mg,
\t// #7653, #8125, #8152: local protocol detection
\trlocalProtocol = /^(?:about|app|app-storage|.+-extension|file|res|widget):\$/,
\trnoContent = /^(?:GET|HEAD)\$/,
\trprotocol = /^\\/\\//,
\trurl = /^([\\w.+-]+:)(?:\\/\\/(?:[^\\/?#]*@|)([^\\/?#:]*)(?::(\\d+)|)|)/,

\t/* Prefilters
\t * 1) They are useful to introduce custom dataTypes (see ajax/jsonp.js for an example)
\t * 2) These are called:
\t *    - BEFORE asking for a transport
\t *    - AFTER param serialization (s.data is a string if s.processData is true)
\t * 3) key is the dataType
\t * 4) the catchall symbol \"*\" can be used
\t * 5) execution will start with transport dataType and THEN continue down to \"*\" if needed
\t */
\tprefilters = {},

\t/* Transports bindings
\t * 1) key is the dataType
\t * 2) the catchall symbol \"*\" can be used
\t * 3) selection will start with transport dataType and THEN go to \"*\" if needed
\t */
\ttransports = {},

\t// Avoid comment-prolog char sequence (#10098); must appease lint and evade compression
\tallTypes = \"*/\".concat( \"*\" ),

\t// Document location
\tajaxLocation = window.location.href,

\t// Segment location into parts
\tajaxLocParts = rurl.exec( ajaxLocation.toLowerCase() ) || [];

// Base \"constructor\" for jQuery.ajaxPrefilter and jQuery.ajaxTransport
function addToPrefiltersOrTransports( structure ) {

\t// dataTypeExpression is optional and defaults to \"*\"
\treturn function( dataTypeExpression, func ) {

\t\tif ( typeof dataTypeExpression !== \"string\" ) {
\t\t\tfunc = dataTypeExpression;
\t\t\tdataTypeExpression = \"*\";
\t\t}

\t\tvar dataType,
\t\t\ti = 0,
\t\t\tdataTypes = dataTypeExpression.toLowerCase().match( rnotwhite ) || [];

\t\tif ( jQuery.isFunction( func ) ) {
\t\t\t// For each dataType in the dataTypeExpression
\t\t\twhile ( (dataType = dataTypes[i++]) ) {
\t\t\t\t// Prepend if requested
\t\t\t\tif ( dataType[0] === \"+\" ) {
\t\t\t\t\tdataType = dataType.slice( 1 ) || \"*\";
\t\t\t\t\t(structure[ dataType ] = structure[ dataType ] || []).unshift( func );

\t\t\t\t// Otherwise append
\t\t\t\t} else {
\t\t\t\t\t(structure[ dataType ] = structure[ dataType ] || []).push( func );
\t\t\t\t}
\t\t\t}
\t\t}
\t};
}

// Base inspection function for prefilters and transports
function inspectPrefiltersOrTransports( structure, options, originalOptions, jqXHR ) {

\tvar inspected = {},
\t\tseekingTransport = ( structure === transports );

\tfunction inspect( dataType ) {
\t\tvar selected;
\t\tinspected[ dataType ] = true;
\t\tjQuery.each( structure[ dataType ] || [], function( _, prefilterOrFactory ) {
\t\t\tvar dataTypeOrTransport = prefilterOrFactory( options, originalOptions, jqXHR );
\t\t\tif ( typeof dataTypeOrTransport === \"string\" && !seekingTransport && !inspected[ dataTypeOrTransport ] ) {
\t\t\t\toptions.dataTypes.unshift( dataTypeOrTransport );
\t\t\t\tinspect( dataTypeOrTransport );
\t\t\t\treturn false;
\t\t\t} else if ( seekingTransport ) {
\t\t\t\treturn !( selected = dataTypeOrTransport );
\t\t\t}
\t\t});
\t\treturn selected;
\t}

\treturn inspect( options.dataTypes[ 0 ] ) || !inspected[ \"*\" ] && inspect( \"*\" );
}

// A special extend for ajax options
// that takes \"flat\" options (not to be deep extended)
// Fixes #9887
function ajaxExtend( target, src ) {
\tvar key, deep,
\t\tflatOptions = jQuery.ajaxSettings.flatOptions || {};

\tfor ( key in src ) {
\t\tif ( src[ key ] !== undefined ) {
\t\t\t( flatOptions[ key ] ? target : ( deep || (deep = {}) ) )[ key ] = src[ key ];
\t\t}
\t}
\tif ( deep ) {
\t\tjQuery.extend( true, target, deep );
\t}

\treturn target;
}

/* Handles responses to an ajax request:
 * - finds the right dataType (mediates between content-type and expected dataType)
 * - returns the corresponding response
 */
function ajaxHandleResponses( s, jqXHR, responses ) {

\tvar ct, type, finalDataType, firstDataType,
\t\tcontents = s.contents,
\t\tdataTypes = s.dataTypes;

\t// Remove auto dataType and get content-type in the process
\twhile ( dataTypes[ 0 ] === \"*\" ) {
\t\tdataTypes.shift();
\t\tif ( ct === undefined ) {
\t\t\tct = s.mimeType || jqXHR.getResponseHeader(\"Content-Type\");
\t\t}
\t}

\t// Check if we're dealing with a known content-type
\tif ( ct ) {
\t\tfor ( type in contents ) {
\t\t\tif ( contents[ type ] && contents[ type ].test( ct ) ) {
\t\t\t\tdataTypes.unshift( type );
\t\t\t\tbreak;
\t\t\t}
\t\t}
\t}

\t// Check to see if we have a response for the expected dataType
\tif ( dataTypes[ 0 ] in responses ) {
\t\tfinalDataType = dataTypes[ 0 ];
\t} else {
\t\t// Try convertible dataTypes
\t\tfor ( type in responses ) {
\t\t\tif ( !dataTypes[ 0 ] || s.converters[ type + \" \" + dataTypes[0] ] ) {
\t\t\t\tfinalDataType = type;
\t\t\t\tbreak;
\t\t\t}
\t\t\tif ( !firstDataType ) {
\t\t\t\tfirstDataType = type;
\t\t\t}
\t\t}
\t\t// Or just use first one
\t\tfinalDataType = finalDataType || firstDataType;
\t}

\t// If we found a dataType
\t// We add the dataType to the list if needed
\t// and return the corresponding response
\tif ( finalDataType ) {
\t\tif ( finalDataType !== dataTypes[ 0 ] ) {
\t\t\tdataTypes.unshift( finalDataType );
\t\t}
\t\treturn responses[ finalDataType ];
\t}
}

/* Chain conversions given the request and the original response
 * Also sets the responseXXX fields on the jqXHR instance
 */
function ajaxConvert( s, response, jqXHR, isSuccess ) {
\tvar conv2, current, conv, tmp, prev,
\t\tconverters = {},
\t\t// Work with a copy of dataTypes in case we need to modify it for conversion
\t\tdataTypes = s.dataTypes.slice();

\t// Create converters map with lowercased keys
\tif ( dataTypes[ 1 ] ) {
\t\tfor ( conv in s.converters ) {
\t\t\tconverters[ conv.toLowerCase() ] = s.converters[ conv ];
\t\t}
\t}

\tcurrent = dataTypes.shift();

\t// Convert to each sequential dataType
\twhile ( current ) {

\t\tif ( s.responseFields[ current ] ) {
\t\t\tjqXHR[ s.responseFields[ current ] ] = response;
\t\t}

\t\t// Apply the dataFilter if provided
\t\tif ( !prev && isSuccess && s.dataFilter ) {
\t\t\tresponse = s.dataFilter( response, s.dataType );
\t\t}

\t\tprev = current;
\t\tcurrent = dataTypes.shift();

\t\tif ( current ) {

\t\t// There's only work to do if current dataType is non-auto
\t\t\tif ( current === \"*\" ) {

\t\t\t\tcurrent = prev;

\t\t\t// Convert response if prev dataType is non-auto and differs from current
\t\t\t} else if ( prev !== \"*\" && prev !== current ) {

\t\t\t\t// Seek a direct converter
\t\t\t\tconv = converters[ prev + \" \" + current ] || converters[ \"* \" + current ];

\t\t\t\t// If none found, seek a pair
\t\t\t\tif ( !conv ) {
\t\t\t\t\tfor ( conv2 in converters ) {

\t\t\t\t\t\t// If conv2 outputs current
\t\t\t\t\t\ttmp = conv2.split( \" \" );
\t\t\t\t\t\tif ( tmp[ 1 ] === current ) {

\t\t\t\t\t\t\t// If prev can be converted to accepted input
\t\t\t\t\t\t\tconv = converters[ prev + \" \" + tmp[ 0 ] ] ||
\t\t\t\t\t\t\t\tconverters[ \"* \" + tmp[ 0 ] ];
\t\t\t\t\t\t\tif ( conv ) {
\t\t\t\t\t\t\t\t// Condense equivalence converters
\t\t\t\t\t\t\t\tif ( conv === true ) {
\t\t\t\t\t\t\t\t\tconv = converters[ conv2 ];

\t\t\t\t\t\t\t\t// Otherwise, insert the intermediate dataType
\t\t\t\t\t\t\t\t} else if ( converters[ conv2 ] !== true ) {
\t\t\t\t\t\t\t\t\tcurrent = tmp[ 0 ];
\t\t\t\t\t\t\t\t\tdataTypes.unshift( tmp[ 1 ] );
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// Apply converter (if not an equivalence)
\t\t\t\tif ( conv !== true ) {

\t\t\t\t\t// Unless errors are allowed to bubble, catch and return them
\t\t\t\t\tif ( conv && s[ \"throws\" ] ) {
\t\t\t\t\t\tresponse = conv( response );
\t\t\t\t\t} else {
\t\t\t\t\t\ttry {
\t\t\t\t\t\t\tresponse = conv( response );
\t\t\t\t\t\t} catch ( e ) {
\t\t\t\t\t\t\treturn { state: \"parsererror\", error: conv ? e : \"No conversion from \" + prev + \" to \" + current };
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}
\t}

\treturn { state: \"success\", data: response };
}

jQuery.extend({

\t// Counter for holding the number of active queries
\tactive: 0,

\t// Last-Modified header cache for next request
\tlastModified: {},
\tetag: {},

\tajaxSettings: {
\t\turl: ajaxLocation,
\t\ttype: \"GET\",
\t\tisLocal: rlocalProtocol.test( ajaxLocParts[ 1 ] ),
\t\tglobal: true,
\t\tprocessData: true,
\t\tasync: true,
\t\tcontentType: \"application/x-www-form-urlencoded; charset=UTF-8\",
\t\t/*
\t\ttimeout: 0,
\t\tdata: null,
\t\tdataType: null,
\t\tusername: null,
\t\tpassword: null,
\t\tcache: null,
\t\tthrows: false,
\t\ttraditional: false,
\t\theaders: {},
\t\t*/

\t\taccepts: {
\t\t\t\"*\": allTypes,
\t\t\ttext: \"text/plain\",
\t\t\thtml: \"text/html\",
\t\t\txml: \"application/xml, text/xml\",
\t\t\tjson: \"application/json, text/javascript\"
\t\t},

\t\tcontents: {
\t\t\txml: /xml/,
\t\t\thtml: /html/,
\t\t\tjson: /json/
\t\t},

\t\tresponseFields: {
\t\t\txml: \"responseXML\",
\t\t\ttext: \"responseText\",
\t\t\tjson: \"responseJSON\"
\t\t},

\t\t// Data converters
\t\t// Keys separate source (or catchall \"*\") and destination types with a single space
\t\tconverters: {

\t\t\t// Convert anything to text
\t\t\t\"* text\": String,

\t\t\t// Text to html (true = no transformation)
\t\t\t\"text html\": true,

\t\t\t// Evaluate text as a json expression
\t\t\t\"text json\": jQuery.parseJSON,

\t\t\t// Parse text as xml
\t\t\t\"text xml\": jQuery.parseXML
\t\t},

\t\t// For options that shouldn't be deep extended:
\t\t// you can add your own custom options here if
\t\t// and when you create one that shouldn't be
\t\t// deep extended (see ajaxExtend)
\t\tflatOptions: {
\t\t\turl: true,
\t\t\tcontext: true
\t\t}
\t},

\t// Creates a full fledged settings object into target
\t// with both ajaxSettings and settings fields.
\t// If target is omitted, writes into ajaxSettings.
\tajaxSetup: function( target, settings ) {
\t\treturn settings ?

\t\t\t// Building a settings object
\t\t\tajaxExtend( ajaxExtend( target, jQuery.ajaxSettings ), settings ) :

\t\t\t// Extending ajaxSettings
\t\t\tajaxExtend( jQuery.ajaxSettings, target );
\t},

\tajaxPrefilter: addToPrefiltersOrTransports( prefilters ),
\tajaxTransport: addToPrefiltersOrTransports( transports ),

\t// Main method
\tajax: function( url, options ) {

\t\t// If url is an object, simulate pre-1.5 signature
\t\tif ( typeof url === \"object\" ) {
\t\t\toptions = url;
\t\t\turl = undefined;
\t\t}

\t\t// Force options to be an object
\t\toptions = options || {};

\t\tvar transport,
\t\t\t// URL without anti-cache param
\t\t\tcacheURL,
\t\t\t// Response headers
\t\t\tresponseHeadersString,
\t\t\tresponseHeaders,
\t\t\t// timeout handle
\t\t\ttimeoutTimer,
\t\t\t// Cross-domain detection vars
\t\t\tparts,
\t\t\t// To know if global events are to be dispatched
\t\t\tfireGlobals,
\t\t\t// Loop variable
\t\t\ti,
\t\t\t// Create the final options object
\t\t\ts = jQuery.ajaxSetup( {}, options ),
\t\t\t// Callbacks context
\t\t\tcallbackContext = s.context || s,
\t\t\t// Context for global events is callbackContext if it is a DOM node or jQuery collection
\t\t\tglobalEventContext = s.context && ( callbackContext.nodeType || callbackContext.jquery ) ?
\t\t\t\tjQuery( callbackContext ) :
\t\t\t\tjQuery.event,
\t\t\t// Deferreds
\t\t\tdeferred = jQuery.Deferred(),
\t\t\tcompleteDeferred = jQuery.Callbacks(\"once memory\"),
\t\t\t// Status-dependent callbacks
\t\t\tstatusCode = s.statusCode || {},
\t\t\t// Headers (they are sent all at once)
\t\t\trequestHeaders = {},
\t\t\trequestHeadersNames = {},
\t\t\t// The jqXHR state
\t\t\tstate = 0,
\t\t\t// Default abort message
\t\t\tstrAbort = \"canceled\",
\t\t\t// Fake xhr
\t\t\tjqXHR = {
\t\t\t\treadyState: 0,

\t\t\t\t// Builds headers hashtable if needed
\t\t\t\tgetResponseHeader: function( key ) {
\t\t\t\t\tvar match;
\t\t\t\t\tif ( state === 2 ) {
\t\t\t\t\t\tif ( !responseHeaders ) {
\t\t\t\t\t\t\tresponseHeaders = {};
\t\t\t\t\t\t\twhile ( (match = rheaders.exec( responseHeadersString )) ) {
\t\t\t\t\t\t\t\tresponseHeaders[ match[1].toLowerCase() ] = match[ 2 ];
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t\tmatch = responseHeaders[ key.toLowerCase() ];
\t\t\t\t\t}
\t\t\t\t\treturn match == null ? null : match;
\t\t\t\t},

\t\t\t\t// Raw string
\t\t\t\tgetAllResponseHeaders: function() {
\t\t\t\t\treturn state === 2 ? responseHeadersString : null;
\t\t\t\t},

\t\t\t\t// Caches the header
\t\t\t\tsetRequestHeader: function( name, value ) {
\t\t\t\t\tvar lname = name.toLowerCase();
\t\t\t\t\tif ( !state ) {
\t\t\t\t\t\tname = requestHeadersNames[ lname ] = requestHeadersNames[ lname ] || name;
\t\t\t\t\t\trequestHeaders[ name ] = value;
\t\t\t\t\t}
\t\t\t\t\treturn this;
\t\t\t\t},

\t\t\t\t// Overrides response content-type header
\t\t\t\toverrideMimeType: function( type ) {
\t\t\t\t\tif ( !state ) {
\t\t\t\t\t\ts.mimeType = type;
\t\t\t\t\t}
\t\t\t\t\treturn this;
\t\t\t\t},

\t\t\t\t// Status-dependent callbacks
\t\t\t\tstatusCode: function( map ) {
\t\t\t\t\tvar code;
\t\t\t\t\tif ( map ) {
\t\t\t\t\t\tif ( state < 2 ) {
\t\t\t\t\t\t\tfor ( code in map ) {
\t\t\t\t\t\t\t\t// Lazy-add the new callback in a way that preserves old ones
\t\t\t\t\t\t\t\tstatusCode[ code ] = [ statusCode[ code ], map[ code ] ];
\t\t\t\t\t\t\t}
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t// Execute the appropriate callbacks
\t\t\t\t\t\t\tjqXHR.always( map[ jqXHR.status ] );
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\treturn this;
\t\t\t\t},

\t\t\t\t// Cancel the request
\t\t\t\tabort: function( statusText ) {
\t\t\t\t\tvar finalText = statusText || strAbort;
\t\t\t\t\tif ( transport ) {
\t\t\t\t\t\ttransport.abort( finalText );
\t\t\t\t\t}
\t\t\t\t\tdone( 0, finalText );
\t\t\t\t\treturn this;
\t\t\t\t}
\t\t\t};

\t\t// Attach deferreds
\t\tdeferred.promise( jqXHR ).complete = completeDeferred.add;
\t\tjqXHR.success = jqXHR.done;
\t\tjqXHR.error = jqXHR.fail;

\t\t// Remove hash character (#7531: and string promotion)
\t\t// Add protocol if not provided (prefilters might expect it)
\t\t// Handle falsy url in the settings object (#10093: consistency with old signature)
\t\t// We also use the url parameter if available
\t\ts.url = ( ( url || s.url || ajaxLocation ) + \"\" ).replace( rhash, \"\" )
\t\t\t.replace( rprotocol, ajaxLocParts[ 1 ] + \"//\" );

\t\t// Alias method option to type as per ticket #12004
\t\ts.type = options.method || options.type || s.method || s.type;

\t\t// Extract dataTypes list
\t\ts.dataTypes = jQuery.trim( s.dataType || \"*\" ).toLowerCase().match( rnotwhite ) || [ \"\" ];

\t\t// A cross-domain request is in order when we have a protocol:host:port mismatch
\t\tif ( s.crossDomain == null ) {
\t\t\tparts = rurl.exec( s.url.toLowerCase() );
\t\t\ts.crossDomain = !!( parts &&
\t\t\t\t( parts[ 1 ] !== ajaxLocParts[ 1 ] || parts[ 2 ] !== ajaxLocParts[ 2 ] ||
\t\t\t\t\t( parts[ 3 ] || ( parts[ 1 ] === \"http:\" ? \"80\" : \"443\" ) ) !==
\t\t\t\t\t\t( ajaxLocParts[ 3 ] || ( ajaxLocParts[ 1 ] === \"http:\" ? \"80\" : \"443\" ) ) )
\t\t\t);
\t\t}

\t\t// Convert data if not already a string
\t\tif ( s.data && s.processData && typeof s.data !== \"string\" ) {
\t\t\ts.data = jQuery.param( s.data, s.traditional );
\t\t}

\t\t// Apply prefilters
\t\tinspectPrefiltersOrTransports( prefilters, s, options, jqXHR );

\t\t// If request was aborted inside a prefilter, stop there
\t\tif ( state === 2 ) {
\t\t\treturn jqXHR;
\t\t}

\t\t// We can fire global events as of now if asked to
\t\t// Don't fire events if jQuery.event is undefined in an AMD-usage scenario (#15118)
\t\tfireGlobals = jQuery.event && s.global;

\t\t// Watch for a new set of requests
\t\tif ( fireGlobals && jQuery.active++ === 0 ) {
\t\t\tjQuery.event.trigger(\"ajaxStart\");
\t\t}

\t\t// Uppercase the type
\t\ts.type = s.type.toUpperCase();

\t\t// Determine if request has content
\t\ts.hasContent = !rnoContent.test( s.type );

\t\t// Save the URL in case we're toying with the If-Modified-Since
\t\t// and/or If-None-Match header later on
\t\tcacheURL = s.url;

\t\t// More options handling for requests with no content
\t\tif ( !s.hasContent ) {

\t\t\t// If data is available, append data to url
\t\t\tif ( s.data ) {
\t\t\t\tcacheURL = ( s.url += ( rquery.test( cacheURL ) ? \"&\" : \"?\" ) + s.data );
\t\t\t\t// #9682: remove data so that it's not used in an eventual retry
\t\t\t\tdelete s.data;
\t\t\t}

\t\t\t// Add anti-cache in url if needed
\t\t\tif ( s.cache === false ) {
\t\t\t\ts.url = rts.test( cacheURL ) ?

\t\t\t\t\t// If there is already a '_' parameter, set its value
\t\t\t\t\tcacheURL.replace( rts, \"\$1_=\" + nonce++ ) :

\t\t\t\t\t// Otherwise add one to the end
\t\t\t\t\tcacheURL + ( rquery.test( cacheURL ) ? \"&\" : \"?\" ) + \"_=\" + nonce++;
\t\t\t}
\t\t}

\t\t// Set the If-Modified-Since and/or If-None-Match header, if in ifModified mode.
\t\tif ( s.ifModified ) {
\t\t\tif ( jQuery.lastModified[ cacheURL ] ) {
\t\t\t\tjqXHR.setRequestHeader( \"If-Modified-Since\", jQuery.lastModified[ cacheURL ] );
\t\t\t}
\t\t\tif ( jQuery.etag[ cacheURL ] ) {
\t\t\t\tjqXHR.setRequestHeader( \"If-None-Match\", jQuery.etag[ cacheURL ] );
\t\t\t}
\t\t}

\t\t// Set the correct header, if data is being sent
\t\tif ( s.data && s.hasContent && s.contentType !== false || options.contentType ) {
\t\t\tjqXHR.setRequestHeader( \"Content-Type\", s.contentType );
\t\t}

\t\t// Set the Accepts header for the server, depending on the dataType
\t\tjqXHR.setRequestHeader(
\t\t\t\"Accept\",
\t\t\ts.dataTypes[ 0 ] && s.accepts[ s.dataTypes[0] ] ?
\t\t\t\ts.accepts[ s.dataTypes[0] ] + ( s.dataTypes[ 0 ] !== \"*\" ? \", \" + allTypes + \"; q=0.01\" : \"\" ) :
\t\t\t\ts.accepts[ \"*\" ]
\t\t);

\t\t// Check for headers option
\t\tfor ( i in s.headers ) {
\t\t\tjqXHR.setRequestHeader( i, s.headers[ i ] );
\t\t}

\t\t// Allow custom headers/mimetypes and early abort
\t\tif ( s.beforeSend && ( s.beforeSend.call( callbackContext, jqXHR, s ) === false || state === 2 ) ) {
\t\t\t// Abort if not done already and return
\t\t\treturn jqXHR.abort();
\t\t}

\t\t// Aborting is no longer a cancellation
\t\tstrAbort = \"abort\";

\t\t// Install callbacks on deferreds
\t\tfor ( i in { success: 1, error: 1, complete: 1 } ) {
\t\t\tjqXHR[ i ]( s[ i ] );
\t\t}

\t\t// Get transport
\t\ttransport = inspectPrefiltersOrTransports( transports, s, options, jqXHR );

\t\t// If no transport, we auto-abort
\t\tif ( !transport ) {
\t\t\tdone( -1, \"No Transport\" );
\t\t} else {
\t\t\tjqXHR.readyState = 1;

\t\t\t// Send global event
\t\t\tif ( fireGlobals ) {
\t\t\t\tglobalEventContext.trigger( \"ajaxSend\", [ jqXHR, s ] );
\t\t\t}
\t\t\t// Timeout
\t\t\tif ( s.async && s.timeout > 0 ) {
\t\t\t\ttimeoutTimer = setTimeout(function() {
\t\t\t\t\tjqXHR.abort(\"timeout\");
\t\t\t\t}, s.timeout );
\t\t\t}

\t\t\ttry {
\t\t\t\tstate = 1;
\t\t\t\ttransport.send( requestHeaders, done );
\t\t\t} catch ( e ) {
\t\t\t\t// Propagate exception as error if not done
\t\t\t\tif ( state < 2 ) {
\t\t\t\t\tdone( -1, e );
\t\t\t\t// Simply rethrow otherwise
\t\t\t\t} else {
\t\t\t\t\tthrow e;
\t\t\t\t}
\t\t\t}
\t\t}

\t\t// Callback for when everything is done
\t\tfunction done( status, nativeStatusText, responses, headers ) {
\t\t\tvar isSuccess, success, error, response, modified,
\t\t\t\tstatusText = nativeStatusText;

\t\t\t// Called once
\t\t\tif ( state === 2 ) {
\t\t\t\treturn;
\t\t\t}

\t\t\t// State is \"done\" now
\t\t\tstate = 2;

\t\t\t// Clear timeout if it exists
\t\t\tif ( timeoutTimer ) {
\t\t\t\tclearTimeout( timeoutTimer );
\t\t\t}

\t\t\t// Dereference transport for early garbage collection
\t\t\t// (no matter how long the jqXHR object will be used)
\t\t\ttransport = undefined;

\t\t\t// Cache response headers
\t\t\tresponseHeadersString = headers || \"\";

\t\t\t// Set readyState
\t\t\tjqXHR.readyState = status > 0 ? 4 : 0;

\t\t\t// Determine if successful
\t\t\tisSuccess = status >= 200 && status < 300 || status === 304;

\t\t\t// Get response data
\t\t\tif ( responses ) {
\t\t\t\tresponse = ajaxHandleResponses( s, jqXHR, responses );
\t\t\t}

\t\t\t// Convert no matter what (that way responseXXX fields are always set)
\t\t\tresponse = ajaxConvert( s, response, jqXHR, isSuccess );

\t\t\t// If successful, handle type chaining
\t\t\tif ( isSuccess ) {

\t\t\t\t// Set the If-Modified-Since and/or If-None-Match header, if in ifModified mode.
\t\t\t\tif ( s.ifModified ) {
\t\t\t\t\tmodified = jqXHR.getResponseHeader(\"Last-Modified\");
\t\t\t\t\tif ( modified ) {
\t\t\t\t\t\tjQuery.lastModified[ cacheURL ] = modified;
\t\t\t\t\t}
\t\t\t\t\tmodified = jqXHR.getResponseHeader(\"etag\");
\t\t\t\t\tif ( modified ) {
\t\t\t\t\t\tjQuery.etag[ cacheURL ] = modified;
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// if no content
\t\t\t\tif ( status === 204 || s.type === \"HEAD\" ) {
\t\t\t\t\tstatusText = \"nocontent\";

\t\t\t\t// if not modified
\t\t\t\t} else if ( status === 304 ) {
\t\t\t\t\tstatusText = \"notmodified\";

\t\t\t\t// If we have data, let's convert it
\t\t\t\t} else {
\t\t\t\t\tstatusText = response.state;
\t\t\t\t\tsuccess = response.data;
\t\t\t\t\terror = response.error;
\t\t\t\t\tisSuccess = !error;
\t\t\t\t}
\t\t\t} else {
\t\t\t\t// Extract error from statusText and normalize for non-aborts
\t\t\t\terror = statusText;
\t\t\t\tif ( status || !statusText ) {
\t\t\t\t\tstatusText = \"error\";
\t\t\t\t\tif ( status < 0 ) {
\t\t\t\t\t\tstatus = 0;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t\t\t// Set data for the fake xhr object
\t\t\tjqXHR.status = status;
\t\t\tjqXHR.statusText = ( nativeStatusText || statusText ) + \"\";

\t\t\t// Success/Error
\t\t\tif ( isSuccess ) {
\t\t\t\tdeferred.resolveWith( callbackContext, [ success, statusText, jqXHR ] );
\t\t\t} else {
\t\t\t\tdeferred.rejectWith( callbackContext, [ jqXHR, statusText, error ] );
\t\t\t}

\t\t\t// Status-dependent callbacks
\t\t\tjqXHR.statusCode( statusCode );
\t\t\tstatusCode = undefined;

\t\t\tif ( fireGlobals ) {
\t\t\t\tglobalEventContext.trigger( isSuccess ? \"ajaxSuccess\" : \"ajaxError\",
\t\t\t\t\t[ jqXHR, s, isSuccess ? success : error ] );
\t\t\t}

\t\t\t// Complete
\t\t\tcompleteDeferred.fireWith( callbackContext, [ jqXHR, statusText ] );

\t\t\tif ( fireGlobals ) {
\t\t\t\tglobalEventContext.trigger( \"ajaxComplete\", [ jqXHR, s ] );
\t\t\t\t// Handle the global AJAX counter
\t\t\t\tif ( !( --jQuery.active ) ) {
\t\t\t\t\tjQuery.event.trigger(\"ajaxStop\");
\t\t\t\t}
\t\t\t}
\t\t}

\t\treturn jqXHR;
\t},

\tgetJSON: function( url, data, callback ) {
\t\treturn jQuery.get( url, data, callback, \"json\" );
\t},

\tgetScript: function( url, callback ) {
\t\treturn jQuery.get( url, undefined, callback, \"script\" );
\t}
});

jQuery.each( [ \"get\", \"post\" ], function( i, method ) {
\tjQuery[ method ] = function( url, data, callback, type ) {
\t\t// Shift arguments if data argument was omitted
\t\tif ( jQuery.isFunction( data ) ) {
\t\t\ttype = type || callback;
\t\t\tcallback = data;
\t\t\tdata = undefined;
\t\t}

\t\treturn jQuery.ajax({
\t\t\turl: url,
\t\t\ttype: method,
\t\t\tdataType: type,
\t\t\tdata: data,
\t\t\tsuccess: callback
\t\t});
\t};
});


jQuery._evalUrl = function( url ) {
\treturn jQuery.ajax({
\t\turl: url,
\t\ttype: \"GET\",
\t\tdataType: \"script\",
\t\tasync: false,
\t\tglobal: false,
\t\t\"throws\": true
\t});
};


jQuery.fn.extend({
\twrapAll: function( html ) {
\t\tvar wrap;

\t\tif ( jQuery.isFunction( html ) ) {
\t\t\treturn this.each(function( i ) {
\t\t\t\tjQuery( this ).wrapAll( html.call(this, i) );
\t\t\t});
\t\t}

\t\tif ( this[ 0 ] ) {

\t\t\t// The elements to wrap the target around
\t\t\twrap = jQuery( html, this[ 0 ].ownerDocument ).eq( 0 ).clone( true );

\t\t\tif ( this[ 0 ].parentNode ) {
\t\t\t\twrap.insertBefore( this[ 0 ] );
\t\t\t}

\t\t\twrap.map(function() {
\t\t\t\tvar elem = this;

\t\t\t\twhile ( elem.firstElementChild ) {
\t\t\t\t\telem = elem.firstElementChild;
\t\t\t\t}

\t\t\t\treturn elem;
\t\t\t}).append( this );
\t\t}

\t\treturn this;
\t},

\twrapInner: function( html ) {
\t\tif ( jQuery.isFunction( html ) ) {
\t\t\treturn this.each(function( i ) {
\t\t\t\tjQuery( this ).wrapInner( html.call(this, i) );
\t\t\t});
\t\t}

\t\treturn this.each(function() {
\t\t\tvar self = jQuery( this ),
\t\t\t\tcontents = self.contents();

\t\t\tif ( contents.length ) {
\t\t\t\tcontents.wrapAll( html );

\t\t\t} else {
\t\t\t\tself.append( html );
\t\t\t}
\t\t});
\t},

\twrap: function( html ) {
\t\tvar isFunction = jQuery.isFunction( html );

\t\treturn this.each(function( i ) {
\t\t\tjQuery( this ).wrapAll( isFunction ? html.call(this, i) : html );
\t\t});
\t},

\tunwrap: function() {
\t\treturn this.parent().each(function() {
\t\t\tif ( !jQuery.nodeName( this, \"body\" ) ) {
\t\t\t\tjQuery( this ).replaceWith( this.childNodes );
\t\t\t}
\t\t}).end();
\t}
});


jQuery.expr.filters.hidden = function( elem ) {
\t// Support: Opera <= 12.12
\t// Opera reports offsetWidths and offsetHeights less than zero on some elements
\treturn elem.offsetWidth <= 0 && elem.offsetHeight <= 0;
};
jQuery.expr.filters.visible = function( elem ) {
\treturn !jQuery.expr.filters.hidden( elem );
};




var r20 = /%20/g,
\trbracket = /\\[\\]\$/,
\trCRLF = /\\r?\\n/g,
\trsubmitterTypes = /^(?:submit|button|image|reset|file)\$/i,
\trsubmittable = /^(?:input|select|textarea|keygen)/i;

function buildParams( prefix, obj, traditional, add ) {
\tvar name;

\tif ( jQuery.isArray( obj ) ) {
\t\t// Serialize array item.
\t\tjQuery.each( obj, function( i, v ) {
\t\t\tif ( traditional || rbracket.test( prefix ) ) {
\t\t\t\t// Treat each array item as a scalar.
\t\t\t\tadd( prefix, v );

\t\t\t} else {
\t\t\t\t// Item is non-scalar (array or object), encode its numeric index.
\t\t\t\tbuildParams( prefix + \"[\" + ( typeof v === \"object\" ? i : \"\" ) + \"]\", v, traditional, add );
\t\t\t}
\t\t});

\t} else if ( !traditional && jQuery.type( obj ) === \"object\" ) {
\t\t// Serialize object item.
\t\tfor ( name in obj ) {
\t\t\tbuildParams( prefix + \"[\" + name + \"]\", obj[ name ], traditional, add );
\t\t}

\t} else {
\t\t// Serialize scalar item.
\t\tadd( prefix, obj );
\t}
}

// Serialize an array of form elements or a set of
// key/values into a query string
jQuery.param = function( a, traditional ) {
\tvar prefix,
\t\ts = [],
\t\tadd = function( key, value ) {
\t\t\t// If value is a function, invoke it and return its value
\t\t\tvalue = jQuery.isFunction( value ) ? value() : ( value == null ? \"\" : value );
\t\t\ts[ s.length ] = encodeURIComponent( key ) + \"=\" + encodeURIComponent( value );
\t\t};

\t// Set traditional to true for jQuery <= 1.3.2 behavior.
\tif ( traditional === undefined ) {
\t\ttraditional = jQuery.ajaxSettings && jQuery.ajaxSettings.traditional;
\t}

\t// If an array was passed in, assume that it is an array of form elements.
\tif ( jQuery.isArray( a ) || ( a.jquery && !jQuery.isPlainObject( a ) ) ) {
\t\t// Serialize the form elements
\t\tjQuery.each( a, function() {
\t\t\tadd( this.name, this.value );
\t\t});

\t} else {
\t\t// If traditional, encode the \"old\" way (the way 1.3.2 or older
\t\t// did it), otherwise encode params recursively.
\t\tfor ( prefix in a ) {
\t\t\tbuildParams( prefix, a[ prefix ], traditional, add );
\t\t}
\t}

\t// Return the resulting serialization
\treturn s.join( \"&\" ).replace( r20, \"+\" );
};

jQuery.fn.extend({
\tserialize: function() {
\t\treturn jQuery.param( this.serializeArray() );
\t},
\tserializeArray: function() {
\t\treturn this.map(function() {
\t\t\t// Can add propHook for \"elements\" to filter or add form elements
\t\t\tvar elements = jQuery.prop( this, \"elements\" );
\t\t\treturn elements ? jQuery.makeArray( elements ) : this;
\t\t})
\t\t.filter(function() {
\t\t\tvar type = this.type;

\t\t\t// Use .is( \":disabled\" ) so that fieldset[disabled] works
\t\t\treturn this.name && !jQuery( this ).is( \":disabled\" ) &&
\t\t\t\trsubmittable.test( this.nodeName ) && !rsubmitterTypes.test( type ) &&
\t\t\t\t( this.checked || !rcheckableType.test( type ) );
\t\t})
\t\t.map(function( i, elem ) {
\t\t\tvar val = jQuery( this ).val();

\t\t\treturn val == null ?
\t\t\t\tnull :
\t\t\t\tjQuery.isArray( val ) ?
\t\t\t\t\tjQuery.map( val, function( val ) {
\t\t\t\t\t\treturn { name: elem.name, value: val.replace( rCRLF, \"\\r\\n\" ) };
\t\t\t\t\t}) :
\t\t\t\t\t{ name: elem.name, value: val.replace( rCRLF, \"\\r\\n\" ) };
\t\t}).get();
\t}
});


jQuery.ajaxSettings.xhr = function() {
\ttry {
\t\treturn new XMLHttpRequest();
\t} catch( e ) {}
};

var xhrId = 0,
\txhrCallbacks = {},
\txhrSuccessStatus = {
\t\t// file protocol always yields status code 0, assume 200
\t\t0: 200,
\t\t// Support: IE9
\t\t// #1450: sometimes IE returns 1223 when it should be 204
\t\t1223: 204
\t},
\txhrSupported = jQuery.ajaxSettings.xhr();

// Support: IE9
// Open requests must be manually aborted on unload (#5280)
// See https://support.microsoft.com/kb/2856746 for more info
if ( window.attachEvent ) {
\twindow.attachEvent( \"onunload\", function() {
\t\tfor ( var key in xhrCallbacks ) {
\t\t\txhrCallbacks[ key ]();
\t\t}
\t});
}

support.cors = !!xhrSupported && ( \"withCredentials\" in xhrSupported );
support.ajax = xhrSupported = !!xhrSupported;

jQuery.ajaxTransport(function( options ) {
\tvar callback;

\t// Cross domain only allowed if supported through XMLHttpRequest
\tif ( support.cors || xhrSupported && !options.crossDomain ) {
\t\treturn {
\t\t\tsend: function( headers, complete ) {
\t\t\t\tvar i,
\t\t\t\t\txhr = options.xhr(),
\t\t\t\t\tid = ++xhrId;

\t\t\t\txhr.open( options.type, options.url, options.async, options.username, options.password );

\t\t\t\t// Apply custom fields if provided
\t\t\t\tif ( options.xhrFields ) {
\t\t\t\t\tfor ( i in options.xhrFields ) {
\t\t\t\t\t\txhr[ i ] = options.xhrFields[ i ];
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// Override mime type if needed
\t\t\t\tif ( options.mimeType && xhr.overrideMimeType ) {
\t\t\t\t\txhr.overrideMimeType( options.mimeType );
\t\t\t\t}

\t\t\t\t// X-Requested-With header
\t\t\t\t// For cross-domain requests, seeing as conditions for a preflight are
\t\t\t\t// akin to a jigsaw puzzle, we simply never set it to be sure.
\t\t\t\t// (it can always be set on a per-request basis or even using ajaxSetup)
\t\t\t\t// For same-domain requests, won't change header if already provided.
\t\t\t\tif ( !options.crossDomain && !headers[\"X-Requested-With\"] ) {
\t\t\t\t\theaders[\"X-Requested-With\"] = \"XMLHttpRequest\";
\t\t\t\t}

\t\t\t\t// Set headers
\t\t\t\tfor ( i in headers ) {
\t\t\t\t\txhr.setRequestHeader( i, headers[ i ] );
\t\t\t\t}

\t\t\t\t// Callback
\t\t\t\tcallback = function( type ) {
\t\t\t\t\treturn function() {
\t\t\t\t\t\tif ( callback ) {
\t\t\t\t\t\t\tdelete xhrCallbacks[ id ];
\t\t\t\t\t\t\tcallback = xhr.onload = xhr.onerror = null;

\t\t\t\t\t\t\tif ( type === \"abort\" ) {
\t\t\t\t\t\t\t\txhr.abort();
\t\t\t\t\t\t\t} else if ( type === \"error\" ) {
\t\t\t\t\t\t\t\tcomplete(
\t\t\t\t\t\t\t\t\t// file: protocol always yields status 0; see #8605, #14207
\t\t\t\t\t\t\t\t\txhr.status,
\t\t\t\t\t\t\t\t\txhr.statusText
\t\t\t\t\t\t\t\t);
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\tcomplete(
\t\t\t\t\t\t\t\t\txhrSuccessStatus[ xhr.status ] || xhr.status,
\t\t\t\t\t\t\t\t\txhr.statusText,
\t\t\t\t\t\t\t\t\t// Support: IE9
\t\t\t\t\t\t\t\t\t// Accessing binary-data responseText throws an exception
\t\t\t\t\t\t\t\t\t// (#11426)
\t\t\t\t\t\t\t\t\ttypeof xhr.responseText === \"string\" ? {
\t\t\t\t\t\t\t\t\t\ttext: xhr.responseText
\t\t\t\t\t\t\t\t\t} : undefined,
\t\t\t\t\t\t\t\t\txhr.getAllResponseHeaders()
\t\t\t\t\t\t\t\t);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t};
\t\t\t\t};

\t\t\t\t// Listen to events
\t\t\t\txhr.onload = callback();
\t\t\t\txhr.onerror = callback(\"error\");

\t\t\t\t// Create the abort callback
\t\t\t\tcallback = xhrCallbacks[ id ] = callback(\"abort\");

\t\t\t\ttry {
\t\t\t\t\t// Do send the request (this may raise an exception)
\t\t\t\t\txhr.send( options.hasContent && options.data || null );
\t\t\t\t} catch ( e ) {
\t\t\t\t\t// #14683: Only rethrow if this hasn't been notified as an error yet
\t\t\t\t\tif ( callback ) {
\t\t\t\t\t\tthrow e;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t},

\t\t\tabort: function() {
\t\t\t\tif ( callback ) {
\t\t\t\t\tcallback();
\t\t\t\t}
\t\t\t}
\t\t};
\t}
});




// Install script dataType
jQuery.ajaxSetup({
\taccepts: {
\t\tscript: \"text/javascript, application/javascript, application/ecmascript, application/x-ecmascript\"
\t},
\tcontents: {
\t\tscript: /(?:java|ecma)script/
\t},
\tconverters: {
\t\t\"text script\": function( text ) {
\t\t\tjQuery.globalEval( text );
\t\t\treturn text;
\t\t}
\t}
});

// Handle cache's special case and crossDomain
jQuery.ajaxPrefilter( \"script\", function( s ) {
\tif ( s.cache === undefined ) {
\t\ts.cache = false;
\t}
\tif ( s.crossDomain ) {
\t\ts.type = \"GET\";
\t}
});

// Bind script tag hack transport
jQuery.ajaxTransport( \"script\", function( s ) {
\t// This transport only deals with cross domain requests
\tif ( s.crossDomain ) {
\t\tvar script, callback;
\t\treturn {
\t\t\tsend: function( _, complete ) {
\t\t\t\tscript = jQuery(\"<script>\").prop({
\t\t\t\t\tasync: true,
\t\t\t\t\tcharset: s.scriptCharset,
\t\t\t\t\tsrc: s.url
\t\t\t\t}).on(
\t\t\t\t\t\"load error\",
\t\t\t\t\tcallback = function( evt ) {
\t\t\t\t\t\tscript.remove();
\t\t\t\t\t\tcallback = null;
\t\t\t\t\t\tif ( evt ) {
\t\t\t\t\t\t\tcomplete( evt.type === \"error\" ? 404 : 200, evt.type );
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t);
\t\t\t\tdocument.head.appendChild( script[ 0 ] );
\t\t\t},
\t\t\tabort: function() {
\t\t\t\tif ( callback ) {
\t\t\t\t\tcallback();
\t\t\t\t}
\t\t\t}
\t\t};
\t}
});




var oldCallbacks = [],
\trjsonp = /(=)\\?(?=&|\$)|\\?\\?/;

// Default jsonp settings
jQuery.ajaxSetup({
\tjsonp: \"callback\",
\tjsonpCallback: function() {
\t\tvar callback = oldCallbacks.pop() || ( jQuery.expando + \"_\" + ( nonce++ ) );
\t\tthis[ callback ] = true;
\t\treturn callback;
\t}
});

// Detect, normalize options and install callbacks for jsonp requests
jQuery.ajaxPrefilter( \"json jsonp\", function( s, originalSettings, jqXHR ) {

\tvar callbackName, overwritten, responseContainer,
\t\tjsonProp = s.jsonp !== false && ( rjsonp.test( s.url ) ?
\t\t\t\"url\" :
\t\t\ttypeof s.data === \"string\" && !( s.contentType || \"\" ).indexOf(\"application/x-www-form-urlencoded\") && rjsonp.test( s.data ) && \"data\"
\t\t);

\t// Handle iff the expected data type is \"jsonp\" or we have a parameter to set
\tif ( jsonProp || s.dataTypes[ 0 ] === \"jsonp\" ) {

\t\t// Get callback name, remembering preexisting value associated with it
\t\tcallbackName = s.jsonpCallback = jQuery.isFunction( s.jsonpCallback ) ?
\t\t\ts.jsonpCallback() :
\t\t\ts.jsonpCallback;

\t\t// Insert callback into url or form data
\t\tif ( jsonProp ) {
\t\t\ts[ jsonProp ] = s[ jsonProp ].replace( rjsonp, \"\$1\" + callbackName );
\t\t} else if ( s.jsonp !== false ) {
\t\t\ts.url += ( rquery.test( s.url ) ? \"&\" : \"?\" ) + s.jsonp + \"=\" + callbackName;
\t\t}

\t\t// Use data converter to retrieve json after script execution
\t\ts.converters[\"script json\"] = function() {
\t\t\tif ( !responseContainer ) {
\t\t\t\tjQuery.error( callbackName + \" was not called\" );
\t\t\t}
\t\t\treturn responseContainer[ 0 ];
\t\t};

\t\t// force json dataType
\t\ts.dataTypes[ 0 ] = \"json\";

\t\t// Install callback
\t\toverwritten = window[ callbackName ];
\t\twindow[ callbackName ] = function() {
\t\t\tresponseContainer = arguments;
\t\t};

\t\t// Clean-up function (fires after converters)
\t\tjqXHR.always(function() {
\t\t\t// Restore preexisting value
\t\t\twindow[ callbackName ] = overwritten;

\t\t\t// Save back as free
\t\t\tif ( s[ callbackName ] ) {
\t\t\t\t// make sure that re-using the options doesn't screw things around
\t\t\t\ts.jsonpCallback = originalSettings.jsonpCallback;

\t\t\t\t// save the callback name for future use
\t\t\t\toldCallbacks.push( callbackName );
\t\t\t}

\t\t\t// Call if it was a function and we have a response
\t\t\tif ( responseContainer && jQuery.isFunction( overwritten ) ) {
\t\t\t\toverwritten( responseContainer[ 0 ] );
\t\t\t}

\t\t\tresponseContainer = overwritten = undefined;
\t\t});

\t\t// Delegate to script
\t\treturn \"script\";
\t}
});




// data: string of html
// context (optional): If specified, the fragment will be created in this context, defaults to document
// keepScripts (optional): If true, will include scripts passed in the html string
jQuery.parseHTML = function( data, context, keepScripts ) {
\tif ( !data || typeof data !== \"string\" ) {
\t\treturn null;
\t}
\tif ( typeof context === \"boolean\" ) {
\t\tkeepScripts = context;
\t\tcontext = false;
\t}
\tcontext = context || document;

\tvar parsed = rsingleTag.exec( data ),
\t\tscripts = !keepScripts && [];

\t// Single tag
\tif ( parsed ) {
\t\treturn [ context.createElement( parsed[1] ) ];
\t}

\tparsed = jQuery.buildFragment( [ data ], context, scripts );

\tif ( scripts && scripts.length ) {
\t\tjQuery( scripts ).remove();
\t}

\treturn jQuery.merge( [], parsed.childNodes );
};


// Keep a copy of the old load method
var _load = jQuery.fn.load;

/**
 * Load a url into a page
 */
jQuery.fn.load = function( url, params, callback ) {
\tif ( typeof url !== \"string\" && _load ) {
\t\treturn _load.apply( this, arguments );
\t}

\tvar selector, type, response,
\t\tself = this,
\t\toff = url.indexOf(\" \");

\tif ( off >= 0 ) {
\t\tselector = jQuery.trim( url.slice( off ) );
\t\turl = url.slice( 0, off );
\t}

\t// If it's a function
\tif ( jQuery.isFunction( params ) ) {

\t\t// We assume that it's the callback
\t\tcallback = params;
\t\tparams = undefined;

\t// Otherwise, build a param string
\t} else if ( params && typeof params === \"object\" ) {
\t\ttype = \"POST\";
\t}

\t// If we have elements to modify, make the request
\tif ( self.length > 0 ) {
\t\tjQuery.ajax({
\t\t\turl: url,

\t\t\t// if \"type\" variable is undefined, then \"GET\" method will be used
\t\t\ttype: type,
\t\t\tdataType: \"html\",
\t\t\tdata: params
\t\t}).done(function( responseText ) {

\t\t\t// Save response for use in complete callback
\t\t\tresponse = arguments;

\t\t\tself.html( selector ?

\t\t\t\t// If a selector was specified, locate the right elements in a dummy div
\t\t\t\t// Exclude scripts to avoid IE 'Permission Denied' errors
\t\t\t\tjQuery(\"<div>\").append( jQuery.parseHTML( responseText ) ).find( selector ) :

\t\t\t\t// Otherwise use the full result
\t\t\t\tresponseText );

\t\t}).complete( callback && function( jqXHR, status ) {
\t\t\tself.each( callback, response || [ jqXHR.responseText, status, jqXHR ] );
\t\t});
\t}

\treturn this;
};




// Attach a bunch of functions for handling common AJAX events
jQuery.each( [ \"ajaxStart\", \"ajaxStop\", \"ajaxComplete\", \"ajaxError\", \"ajaxSuccess\", \"ajaxSend\" ], function( i, type ) {
\tjQuery.fn[ type ] = function( fn ) {
\t\treturn this.on( type, fn );
\t};
});




jQuery.expr.filters.animated = function( elem ) {
\treturn jQuery.grep(jQuery.timers, function( fn ) {
\t\treturn elem === fn.elem;
\t}).length;
};




var docElem = window.document.documentElement;

/**
 * Gets a window from an element
 */
function getWindow( elem ) {
\treturn jQuery.isWindow( elem ) ? elem : elem.nodeType === 9 && elem.defaultView;
}

jQuery.offset = {
\tsetOffset: function( elem, options, i ) {
\t\tvar curPosition, curLeft, curCSSTop, curTop, curOffset, curCSSLeft, calculatePosition,
\t\t\tposition = jQuery.css( elem, \"position\" ),
\t\t\tcurElem = jQuery( elem ),
\t\t\tprops = {};

\t\t// Set position first, in-case top/left are set even on static elem
\t\tif ( position === \"static\" ) {
\t\t\telem.style.position = \"relative\";
\t\t}

\t\tcurOffset = curElem.offset();
\t\tcurCSSTop = jQuery.css( elem, \"top\" );
\t\tcurCSSLeft = jQuery.css( elem, \"left\" );
\t\tcalculatePosition = ( position === \"absolute\" || position === \"fixed\" ) &&
\t\t\t( curCSSTop + curCSSLeft ).indexOf(\"auto\") > -1;

\t\t// Need to be able to calculate position if either
\t\t// top or left is auto and position is either absolute or fixed
\t\tif ( calculatePosition ) {
\t\t\tcurPosition = curElem.position();
\t\t\tcurTop = curPosition.top;
\t\t\tcurLeft = curPosition.left;

\t\t} else {
\t\t\tcurTop = parseFloat( curCSSTop ) || 0;
\t\t\tcurLeft = parseFloat( curCSSLeft ) || 0;
\t\t}

\t\tif ( jQuery.isFunction( options ) ) {
\t\t\toptions = options.call( elem, i, curOffset );
\t\t}

\t\tif ( options.top != null ) {
\t\t\tprops.top = ( options.top - curOffset.top ) + curTop;
\t\t}
\t\tif ( options.left != null ) {
\t\t\tprops.left = ( options.left - curOffset.left ) + curLeft;
\t\t}

\t\tif ( \"using\" in options ) {
\t\t\toptions.using.call( elem, props );

\t\t} else {
\t\t\tcurElem.css( props );
\t\t}
\t}
};

jQuery.fn.extend({
\toffset: function( options ) {
\t\tif ( arguments.length ) {
\t\t\treturn options === undefined ?
\t\t\t\tthis :
\t\t\t\tthis.each(function( i ) {
\t\t\t\t\tjQuery.offset.setOffset( this, options, i );
\t\t\t\t});
\t\t}

\t\tvar docElem, win,
\t\t\telem = this[ 0 ],
\t\t\tbox = { top: 0, left: 0 },
\t\t\tdoc = elem && elem.ownerDocument;

\t\tif ( !doc ) {
\t\t\treturn;
\t\t}

\t\tdocElem = doc.documentElement;

\t\t// Make sure it's not a disconnected DOM node
\t\tif ( !jQuery.contains( docElem, elem ) ) {
\t\t\treturn box;
\t\t}

\t\t// Support: BlackBerry 5, iOS 3 (original iPhone)
\t\t// If we don't have gBCR, just use 0,0 rather than error
\t\tif ( typeof elem.getBoundingClientRect !== strundefined ) {
\t\t\tbox = elem.getBoundingClientRect();
\t\t}
\t\twin = getWindow( doc );
\t\treturn {
\t\t\ttop: box.top + win.pageYOffset - docElem.clientTop,
\t\t\tleft: box.left + win.pageXOffset - docElem.clientLeft
\t\t};
\t},

\tposition: function() {
\t\tif ( !this[ 0 ] ) {
\t\t\treturn;
\t\t}

\t\tvar offsetParent, offset,
\t\t\telem = this[ 0 ],
\t\t\tparentOffset = { top: 0, left: 0 };

\t\t// Fixed elements are offset from window (parentOffset = {top:0, left: 0}, because it is its only offset parent
\t\tif ( jQuery.css( elem, \"position\" ) === \"fixed\" ) {
\t\t\t// Assume getBoundingClientRect is there when computed position is fixed
\t\t\toffset = elem.getBoundingClientRect();

\t\t} else {
\t\t\t// Get *real* offsetParent
\t\t\toffsetParent = this.offsetParent();

\t\t\t// Get correct offsets
\t\t\toffset = this.offset();
\t\t\tif ( !jQuery.nodeName( offsetParent[ 0 ], \"html\" ) ) {
\t\t\t\tparentOffset = offsetParent.offset();
\t\t\t}

\t\t\t// Add offsetParent borders
\t\t\tparentOffset.top += jQuery.css( offsetParent[ 0 ], \"borderTopWidth\", true );
\t\t\tparentOffset.left += jQuery.css( offsetParent[ 0 ], \"borderLeftWidth\", true );
\t\t}

\t\t// Subtract parent offsets and element margins
\t\treturn {
\t\t\ttop: offset.top - parentOffset.top - jQuery.css( elem, \"marginTop\", true ),
\t\t\tleft: offset.left - parentOffset.left - jQuery.css( elem, \"marginLeft\", true )
\t\t};
\t},

\toffsetParent: function() {
\t\treturn this.map(function() {
\t\t\tvar offsetParent = this.offsetParent || docElem;

\t\t\twhile ( offsetParent && ( !jQuery.nodeName( offsetParent, \"html\" ) && jQuery.css( offsetParent, \"position\" ) === \"static\" ) ) {
\t\t\t\toffsetParent = offsetParent.offsetParent;
\t\t\t}

\t\t\treturn offsetParent || docElem;
\t\t});
\t}
});

// Create scrollLeft and scrollTop methods
jQuery.each( { scrollLeft: \"pageXOffset\", scrollTop: \"pageYOffset\" }, function( method, prop ) {
\tvar top = \"pageYOffset\" === prop;

\tjQuery.fn[ method ] = function( val ) {
\t\treturn access( this, function( elem, method, val ) {
\t\t\tvar win = getWindow( elem );

\t\t\tif ( val === undefined ) {
\t\t\t\treturn win ? win[ prop ] : elem[ method ];
\t\t\t}

\t\t\tif ( win ) {
\t\t\t\twin.scrollTo(
\t\t\t\t\t!top ? val : window.pageXOffset,
\t\t\t\t\ttop ? val : window.pageYOffset
\t\t\t\t);

\t\t\t} else {
\t\t\t\telem[ method ] = val;
\t\t\t}
\t\t}, method, val, arguments.length, null );
\t};
});

// Support: Safari<7+, Chrome<37+
// Add the top/left cssHooks using jQuery.fn.position
// Webkit bug: https://bugs.webkit.org/show_bug.cgi?id=29084
// Blink bug: https://code.google.com/p/chromium/issues/detail?id=229280
// getComputedStyle returns percent when specified for top/left/bottom/right;
// rather than make the css module depend on the offset module, just check for it here
jQuery.each( [ \"top\", \"left\" ], function( i, prop ) {
\tjQuery.cssHooks[ prop ] = addGetHookIf( support.pixelPosition,
\t\tfunction( elem, computed ) {
\t\t\tif ( computed ) {
\t\t\t\tcomputed = curCSS( elem, prop );
\t\t\t\t// If curCSS returns percentage, fallback to offset
\t\t\t\treturn rnumnonpx.test( computed ) ?
\t\t\t\t\tjQuery( elem ).position()[ prop ] + \"px\" :
\t\t\t\t\tcomputed;
\t\t\t}
\t\t}
\t);
});


// Create innerHeight, innerWidth, height, width, outerHeight and outerWidth methods
jQuery.each( { Height: \"height\", Width: \"width\" }, function( name, type ) {
\tjQuery.each( { padding: \"inner\" + name, content: type, \"\": \"outer\" + name }, function( defaultExtra, funcName ) {
\t\t// Margin is only for outerHeight, outerWidth
\t\tjQuery.fn[ funcName ] = function( margin, value ) {
\t\t\tvar chainable = arguments.length && ( defaultExtra || typeof margin !== \"boolean\" ),
\t\t\t\textra = defaultExtra || ( margin === true || value === true ? \"margin\" : \"border\" );

\t\t\treturn access( this, function( elem, type, value ) {
\t\t\t\tvar doc;

\t\t\t\tif ( jQuery.isWindow( elem ) ) {
\t\t\t\t\t// As of 5/8/2012 this will yield incorrect results for Mobile Safari, but there
\t\t\t\t\t// isn't a whole lot we can do. See pull request at this URL for discussion:
\t\t\t\t\t// https://github.com/jquery/jquery/pull/764
\t\t\t\t\treturn elem.document.documentElement[ \"client\" + name ];
\t\t\t\t}

\t\t\t\t// Get document width or height
\t\t\t\tif ( elem.nodeType === 9 ) {
\t\t\t\t\tdoc = elem.documentElement;

\t\t\t\t\t// Either scroll[Width/Height] or offset[Width/Height] or client[Width/Height],
\t\t\t\t\t// whichever is greatest
\t\t\t\t\treturn Math.max(
\t\t\t\t\t\telem.body[ \"scroll\" + name ], doc[ \"scroll\" + name ],
\t\t\t\t\t\telem.body[ \"offset\" + name ], doc[ \"offset\" + name ],
\t\t\t\t\t\tdoc[ \"client\" + name ]
\t\t\t\t\t);
\t\t\t\t}

\t\t\t\treturn value === undefined ?
\t\t\t\t\t// Get width or height on the element, requesting but not forcing parseFloat
\t\t\t\t\tjQuery.css( elem, type, extra ) :

\t\t\t\t\t// Set width or height on the element
\t\t\t\t\tjQuery.style( elem, type, value, extra );
\t\t\t}, type, chainable ? margin : undefined, chainable, null );
\t\t};
\t});
});


// The number of elements contained in the matched element set
jQuery.fn.size = function() {
\treturn this.length;
};

jQuery.fn.andSelf = jQuery.fn.addBack;




// Register as a named AMD module, since jQuery can be concatenated with other
// files that may use define, but not via a proper concatenation script that
// understands anonymous AMD modules. A named AMD is safest and most robust
// way to register. Lowercase jquery is used because AMD module names are
// derived from file names, and jQuery is normally delivered in a lowercase
// file name. Do this after creating the global so that if an AMD module wants
// to call noConflict to hide this version of jQuery, it will work.

// Note that for maximum portability, libraries that are not jQuery should
// declare themselves as anonymous modules, and avoid setting a global if an
// AMD loader is present. jQuery is a special case. For more information, see
// https://github.com/jrburke/requirejs/wiki/Updating-existing-libraries#wiki-anon

if ( typeof define === \"function\" && define.amd ) {
\tdefine( \"jquery\", [], function() {
\t\treturn jQuery;
\t});
}




var
\t// Map over jQuery in case of overwrite
\t_jQuery = window.jQuery,

\t// Map over the \$ in case of overwrite
\t_\$ = window.\$;

jQuery.noConflict = function( deep ) {
\tif ( window.\$ === jQuery ) {
\t\twindow.\$ = _\$;
\t}

\tif ( deep && window.jQuery === jQuery ) {
\t\twindow.jQuery = _jQuery;
\t}

\treturn jQuery;
};

// Expose jQuery and \$ identifiers, even in AMD
// (#7102#comment:10, https://github.com/jquery/jquery/pull/557)
// and CommonJS for browser emulators (#13566)
if ( typeof noGlobal === strundefined ) {
\twindow.jQuery = window.\$ = jQuery;
}




return jQuery;

}));
", "node_modules/parsleyjs/bower_components/jquery/dist/jquery.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/bower_components/jquery/dist/jquery.js");
    }
}
