<?php

/* node_modules/async/reject.js */
class __TwigTemplate_5d0e7d24df21adb32813c1d38be61610daebbf2462d5cb8113b04e8e30848fb6 extends Twig_Template
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
        $__internal_382daa8438057ec30f774eccc74caea0e34d912886386c36fee8812aeddbc469 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_382daa8438057ec30f774eccc74caea0e34d912886386c36fee8812aeddbc469->enter($__internal_382daa8438057ec30f774eccc74caea0e34d912886386c36fee8812aeddbc469_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/async/reject.js"));

        // line 1
        echo "'use strict';

Object.defineProperty(exports, \"__esModule\", {
  value: true
});

var _reject = require('./internal/reject');

var _reject2 = _interopRequireDefault(_reject);

var _doParallel = require('./internal/doParallel');

var _doParallel2 = _interopRequireDefault(_doParallel);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

/**
 * The opposite of [`filter`]{@link module:Collections.filter}. Removes values that pass an `async` truth test.
 *
 * @name reject
 * @static
 * @memberOf module:Collections
 * @method
 * @see [async.filter]{@link module:Collections.filter}
 * @category Collection
 * @param {Array|Iterable|Object} coll - A collection to iterate over.
 * @param {Function} iteratee - An async truth test to apply to each item in
 * `coll`.
 * The should complete with a boolean value as its `result`.
 * Invoked with (item, callback).
 * @param {Function} [callback] - A callback which is called after all the
 * `iteratee` functions have finished. Invoked with (err, results).
 * @example
 *
 * async.reject(['file1','file2','file3'], function(filePath, callback) {
 *     fs.access(filePath, function(err) {
 *         callback(null, !err)
 *     });
 * }, function(err, results) {
 *     // results now equals an array of missing files
 *     createFiles(results);
 * });
 */
exports.default = (0, _doParallel2.default)(_reject2.default);
module.exports = exports['default'];";
        
        $__internal_382daa8438057ec30f774eccc74caea0e34d912886386c36fee8812aeddbc469->leave($__internal_382daa8438057ec30f774eccc74caea0e34d912886386c36fee8812aeddbc469_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/async/reject.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

Object.defineProperty(exports, \"__esModule\", {
  value: true
});

var _reject = require('./internal/reject');

var _reject2 = _interopRequireDefault(_reject);

var _doParallel = require('./internal/doParallel');

var _doParallel2 = _interopRequireDefault(_doParallel);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

/**
 * The opposite of [`filter`]{@link module:Collections.filter}. Removes values that pass an `async` truth test.
 *
 * @name reject
 * @static
 * @memberOf module:Collections
 * @method
 * @see [async.filter]{@link module:Collections.filter}
 * @category Collection
 * @param {Array|Iterable|Object} coll - A collection to iterate over.
 * @param {Function} iteratee - An async truth test to apply to each item in
 * `coll`.
 * The should complete with a boolean value as its `result`.
 * Invoked with (item, callback).
 * @param {Function} [callback] - A callback which is called after all the
 * `iteratee` functions have finished. Invoked with (err, results).
 * @example
 *
 * async.reject(['file1','file2','file3'], function(filePath, callback) {
 *     fs.access(filePath, function(err) {
 *         callback(null, !err)
 *     });
 * }, function(err, results) {
 *     // results now equals an array of missing files
 *     createFiles(results);
 * });
 */
exports.default = (0, _doParallel2.default)(_reject2.default);
module.exports = exports['default'];", "node_modules/async/reject.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/async/reject.js");
    }
}
