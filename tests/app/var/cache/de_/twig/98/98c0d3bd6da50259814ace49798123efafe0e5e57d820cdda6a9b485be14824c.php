<?php

/* node_modules/finalhandler/HISTORY.md */
class __TwigTemplate_51de0113ded1f7fdce35981662144dc6b651a6435f95bc18533069f2c4a11cbc extends Twig_Template
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
        $__internal_2fc85fcd8f0eaca742339d5913590f4d324b4581ae285a031357b1b7e055ed89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fc85fcd8f0eaca742339d5913590f4d324b4581ae285a031357b1b7e055ed89->enter($__internal_2fc85fcd8f0eaca742339d5913590f4d324b4581ae285a031357b1b7e055ed89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/finalhandler/HISTORY.md"));

        // line 1
        echo "1.0.4 / 2017-08-03
==================

  * deps: debug@2.6.8

1.0.3 / 2017-05-16
==================

  * deps: debug@2.6.7
    - deps: ms@2.0.0

1.0.2 / 2017-04-22
==================

  * deps: debug@2.6.4
    - deps: ms@0.7.3

1.0.1 / 2017-03-21
==================

  * Fix missing `</html>` in HTML document
  * deps: debug@2.6.3
    - Fix: `DEBUG_MAX_ARRAY_LENGTH`

1.0.0 / 2017-02-15
==================

  * Fix exception when `err` cannot be converted to a string
  * Fully URL-encode the pathname in the 404 message
  * Only include the pathname in the 404 message
  * Send complete HTML document
  * Set `Content-Security-Policy: default-src 'self'` header
  * deps: debug@2.6.1
    - Allow colors in workers
    - Deprecated `DEBUG_FD` environment variable set to `3` or higher
    - Fix error when running under React Native
    - Use same color for same namespace
    - deps: ms@0.7.2

0.5.1 / 2016-11-12
==================

  * Fix exception when `err.headers` is not an object
  * deps: statuses@~1.3.1
  * perf: hoist regular expressions
  * perf: remove duplicate validation path

0.5.0 / 2016-06-15
==================

  * Change invalid or non-numeric status code to 500
  * Overwrite status message to match set status code
  * Prefer `err.statusCode` if `err.status` is invalid
  * Set response headers from `err.headers` object
  * Use `statuses` instead of `http` module for status messages
    - Includes all defined status messages

0.4.1 / 2015-12-02
==================

  * deps: escape-html@~1.0.3
    - perf: enable strict mode
    - perf: optimize string replacement
    - perf: use faster string coercion

0.4.0 / 2015-06-14
==================

  * Fix a false-positive when unpiping in Node.js 0.8
  * Support `statusCode` property on `Error` objects
  * Use `unpipe` module for unpiping requests
  * deps: escape-html@1.0.2
  * deps: on-finished@~2.3.0
    - Add defined behavior for HTTP `CONNECT` requests
    - Add defined behavior for HTTP `Upgrade` requests
    - deps: ee-first@1.1.1
  * perf: enable strict mode
  * perf: remove argument reassignment

0.3.6 / 2015-05-11
==================

  * deps: debug@~2.2.0
    - deps: ms@0.7.1

0.3.5 / 2015-04-22
==================

  * deps: on-finished@~2.2.1
    - Fix `isFinished(req)` when data buffered

0.3.4 / 2015-03-15
==================

  * deps: debug@~2.1.3
    - Fix high intensity foreground color for bold
    - deps: ms@0.7.0

0.3.3 / 2015-01-01
==================

  * deps: debug@~2.1.1
  * deps: on-finished@~2.2.0

0.3.2 / 2014-10-22
==================

  * deps: on-finished@~2.1.1
    - Fix handling of pipelined requests

0.3.1 / 2014-10-16
==================

  * deps: debug@~2.1.0
    - Implement `DEBUG_FD` env variable support

0.3.0 / 2014-09-17
==================

  * Terminate in progress response only on error
  * Use `on-finished` to determine request status

0.2.0 / 2014-09-03
==================

  * Set `X-Content-Type-Options: nosniff` header
  * deps: debug@~2.0.0

0.1.0 / 2014-07-16
==================

  * Respond after request fully read
    - prevents hung responses and socket hang ups
  * deps: debug@1.0.4

0.0.3 / 2014-07-11
==================

  * deps: debug@1.0.3
    - Add support for multiple wildcards in namespaces

0.0.2 / 2014-06-19
==================

  * Handle invalid status codes

0.0.1 / 2014-06-05
==================

  * deps: debug@1.0.2

0.0.0 / 2014-06-05
==================

  * Extracted from connect/express
";
        
        $__internal_2fc85fcd8f0eaca742339d5913590f4d324b4581ae285a031357b1b7e055ed89->leave($__internal_2fc85fcd8f0eaca742339d5913590f4d324b4581ae285a031357b1b7e055ed89_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/finalhandler/HISTORY.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("1.0.4 / 2017-08-03
==================

  * deps: debug@2.6.8

1.0.3 / 2017-05-16
==================

  * deps: debug@2.6.7
    - deps: ms@2.0.0

1.0.2 / 2017-04-22
==================

  * deps: debug@2.6.4
    - deps: ms@0.7.3

1.0.1 / 2017-03-21
==================

  * Fix missing `</html>` in HTML document
  * deps: debug@2.6.3
    - Fix: `DEBUG_MAX_ARRAY_LENGTH`

1.0.0 / 2017-02-15
==================

  * Fix exception when `err` cannot be converted to a string
  * Fully URL-encode the pathname in the 404 message
  * Only include the pathname in the 404 message
  * Send complete HTML document
  * Set `Content-Security-Policy: default-src 'self'` header
  * deps: debug@2.6.1
    - Allow colors in workers
    - Deprecated `DEBUG_FD` environment variable set to `3` or higher
    - Fix error when running under React Native
    - Use same color for same namespace
    - deps: ms@0.7.2

0.5.1 / 2016-11-12
==================

  * Fix exception when `err.headers` is not an object
  * deps: statuses@~1.3.1
  * perf: hoist regular expressions
  * perf: remove duplicate validation path

0.5.0 / 2016-06-15
==================

  * Change invalid or non-numeric status code to 500
  * Overwrite status message to match set status code
  * Prefer `err.statusCode` if `err.status` is invalid
  * Set response headers from `err.headers` object
  * Use `statuses` instead of `http` module for status messages
    - Includes all defined status messages

0.4.1 / 2015-12-02
==================

  * deps: escape-html@~1.0.3
    - perf: enable strict mode
    - perf: optimize string replacement
    - perf: use faster string coercion

0.4.0 / 2015-06-14
==================

  * Fix a false-positive when unpiping in Node.js 0.8
  * Support `statusCode` property on `Error` objects
  * Use `unpipe` module for unpiping requests
  * deps: escape-html@1.0.2
  * deps: on-finished@~2.3.0
    - Add defined behavior for HTTP `CONNECT` requests
    - Add defined behavior for HTTP `Upgrade` requests
    - deps: ee-first@1.1.1
  * perf: enable strict mode
  * perf: remove argument reassignment

0.3.6 / 2015-05-11
==================

  * deps: debug@~2.2.0
    - deps: ms@0.7.1

0.3.5 / 2015-04-22
==================

  * deps: on-finished@~2.2.1
    - Fix `isFinished(req)` when data buffered

0.3.4 / 2015-03-15
==================

  * deps: debug@~2.1.3
    - Fix high intensity foreground color for bold
    - deps: ms@0.7.0

0.3.3 / 2015-01-01
==================

  * deps: debug@~2.1.1
  * deps: on-finished@~2.2.0

0.3.2 / 2014-10-22
==================

  * deps: on-finished@~2.1.1
    - Fix handling of pipelined requests

0.3.1 / 2014-10-16
==================

  * deps: debug@~2.1.0
    - Implement `DEBUG_FD` env variable support

0.3.0 / 2014-09-17
==================

  * Terminate in progress response only on error
  * Use `on-finished` to determine request status

0.2.0 / 2014-09-03
==================

  * Set `X-Content-Type-Options: nosniff` header
  * deps: debug@~2.0.0

0.1.0 / 2014-07-16
==================

  * Respond after request fully read
    - prevents hung responses and socket hang ups
  * deps: debug@1.0.4

0.0.3 / 2014-07-11
==================

  * deps: debug@1.0.3
    - Add support for multiple wildcards in namespaces

0.0.2 / 2014-06-19
==================

  * Handle invalid status codes

0.0.1 / 2014-06-05
==================

  * deps: debug@1.0.2

0.0.0 / 2014-06-05
==================

  * Extracted from connect/express
", "node_modules/finalhandler/HISTORY.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/finalhandler/HISTORY.md");
    }
}
