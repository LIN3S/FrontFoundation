<?php

/* node_modules/serve-static/HISTORY.md */
class __TwigTemplate_b15000e250d1e7a512813dc3e71c7b76a33424411f7940a145e5285230dd225a extends Twig_Template
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
        $__internal_f17bef7088be339e02a0cb9a2de75f442d74e98ceed289e6db3d9e8c29c83bd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f17bef7088be339e02a0cb9a2de75f442d74e98ceed289e6db3d9e8c29c83bd0->enter($__internal_f17bef7088be339e02a0cb9a2de75f442d74e98ceed289e6db3d9e8c29c83bd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/serve-static/HISTORY.md"));

        // line 1
        echo "1.12.4 / 2017-08-05
===================

  * deps: send@0.15.4
    - deps: debug@2.6.8
    - deps: depd@~1.1.1
    - deps: http-errors@~1.6.2

1.12.3 / 2017-05-16
===================

  * deps: send@0.15.3
    - deps: debug@2.6.7

1.12.2 / 2017-04-26
===================

  * deps: send@0.15.2
    - deps: debug@2.6.4

1.12.1 / 2017-03-04
===================

  * deps: send@0.15.1
    - Fix issue when `Date.parse` does not return `NaN` on invalid date
    - Fix strict violation in broken environments

1.12.0 / 2017-02-25
===================

  * Send complete HTML document in redirect response
  * Set default CSP header in redirect response
  * deps: send@0.15.0
    - Fix false detection of `no-cache` request directive
    - Fix incorrect result when `If-None-Match` has both `*` and ETags
    - Fix weak `ETag` matching to match spec
    - Remove usage of `res._headers` private field
    - Support `If-Match` and `If-Unmodified-Since` headers
    - Use `res.getHeaderNames()` when available
    - Use `res.headersSent` when available
    - deps: debug@2.6.1
    - deps: etag@~1.8.0
    - deps: fresh@0.5.0
    - deps: http-errors@~1.6.1

1.11.2 / 2017-01-23
===================

  * deps: send@0.14.2
    - deps: http-errors@~1.5.1
    - deps: ms@0.7.2
    - deps: statuses@~1.3.1

1.11.1 / 2016-06-10
===================

  * Fix redirect error when `req.url` contains raw non-URL characters
  * deps: send@0.14.1

1.11.0 / 2016-06-07
===================

  * Use status code 301 for redirects
  * deps: send@0.14.0
    - Add `acceptRanges` option
    - Add `cacheControl` option
    - Attempt to combine multiple ranges into single range
    - Correctly inherit from `Stream` class
    - Fix `Content-Range` header in 416 responses when using `start`/`end` options
    - Fix `Content-Range` header missing from default 416 responses
    - Ignore non-byte `Range` headers
    - deps: http-errors@~1.5.0
    - deps: range-parser@~1.2.0
    - deps: statuses@~1.3.0
    - perf: remove argument reassignment

1.10.3 / 2016-05-30
===================

  * deps: send@0.13.2
    - Fix invalid `Content-Type` header when `send.mime.default_type` unset

1.10.2 / 2016-01-19
===================

  * deps: parseurl@~1.3.1
    - perf: enable strict mode

1.10.1 / 2016-01-16
===================

  * deps: escape-html@~1.0.3
    - perf: enable strict mode
    - perf: optimize string replacement
    - perf: use faster string coercion
  * deps: send@0.13.1
    - deps: depd@~1.1.0
    - deps: destroy@~1.0.4
    - deps: escape-html@~1.0.3
    - deps: range-parser@~1.0.3

1.10.0 / 2015-06-17
===================

  * Add `fallthrough` option
    - Allows declaring this middleware is the final destination
    - Provides better integration with Express patterns
  * Fix reading options from options prototype
  * Improve the default redirect response headers
  * deps: escape-html@1.0.2
  * deps: send@0.13.0
    - Allow Node.js HTTP server to set `Date` response header
    - Fix incorrectly removing `Content-Location` on 304 response
    - Improve the default redirect response headers
    - Send appropriate headers on default error response
    - Use `http-errors` for standard emitted errors
    - Use `statuses` instead of `http` module for status messages
    - deps: escape-html@1.0.2
    - deps: etag@~1.7.0
    - deps: fresh@0.3.0
    - deps: on-finished@~2.3.0
    - perf: enable strict mode
    - perf: remove unnecessary array allocations
  * perf: enable strict mode
  * perf: remove argument reassignment

1.9.3 / 2015-05-14
==================

  * deps: send@0.12.3
    - deps: debug@~2.2.0
    - deps: depd@~1.0.1
    - deps: etag@~1.6.0
    - deps: ms@0.7.1
    - deps: on-finished@~2.2.1

1.9.2 / 2015-03-14
==================

  * deps: send@0.12.2
    - Throw errors early for invalid `extensions` or `index` options
    - deps: debug@~2.1.3

1.9.1 / 2015-02-17
==================

  * deps: send@0.12.1
    - Fix regression sending zero-length files

1.9.0 / 2015-02-16
==================

  * deps: send@0.12.0
    - Always read the stat size from the file
    - Fix mutating passed-in `options`
    - deps: mime@1.3.4

1.8.1 / 2015-01-20
==================

  * Fix redirect loop in Node.js 0.11.14
  * deps: send@0.11.1
    - Fix root path disclosure

1.8.0 / 2015-01-05
==================

  * deps: send@0.11.0
    - deps: debug@~2.1.1
    - deps: etag@~1.5.1
    - deps: ms@0.7.0
    - deps: on-finished@~2.2.0

1.7.2 / 2015-01-02
==================

  * Fix potential open redirect when mounted at root

1.7.1 / 2014-10-22
==================

  * deps: send@0.10.1
    - deps: on-finished@~2.1.1

1.7.0 / 2014-10-15
==================

  * deps: send@0.10.0
    - deps: debug@~2.1.0
    - deps: depd@~1.0.0
    - deps: etag@~1.5.0

1.6.5 / 2015-02-04
==================

  * Fix potential open redirect when mounted at root
    - Back-ported from v1.7.2

1.6.4 / 2014-10-08
==================

  * Fix redirect loop when index file serving disabled

1.6.3 / 2014-09-24
==================

  * deps: send@0.9.3
    - deps: etag@~1.4.0

1.6.2 / 2014-09-15
==================

  * deps: send@0.9.2
    - deps: depd@0.4.5
    - deps: etag@~1.3.1
    - deps: range-parser@~1.0.2

1.6.1 / 2014-09-07
==================

  * deps: send@0.9.1
    - deps: fresh@0.2.4

1.6.0 / 2014-09-07
==================

  * deps: send@0.9.0
    - Add `lastModified` option
    - Use `etag` to generate `ETag` header
    - deps: debug@~2.0.0

1.5.4 / 2014-09-04
==================

  * deps: send@0.8.5
    - Fix a path traversal issue when using `root`
    - Fix malicious path detection for empty string path

1.5.3 / 2014-08-17
==================

  * deps: send@0.8.3

1.5.2 / 2014-08-14
==================

  * deps: send@0.8.2
    - Work around `fd` leak in Node.js 0.10 for `fs.ReadStream`

1.5.1 / 2014-08-09
==================

  * Fix parsing of weird `req.originalUrl` values
  * deps: parseurl@~1.3.0
  * deps: utils-merge@1.0.0

1.5.0 / 2014-08-05
==================

  * deps: send@0.8.1
    - Add `extensions` option

1.4.4 / 2014-08-04
==================

  * deps: send@0.7.4
    - Fix serving index files without root dir

1.4.3 / 2014-07-29
==================

  * deps: send@0.7.3
    - Fix incorrect 403 on Windows and Node.js 0.11

1.4.2 / 2014-07-27
==================

  * deps: send@0.7.2
    - deps: depd@0.4.4

1.4.1 / 2014-07-26
==================

  * deps: send@0.7.1
    - deps: depd@0.4.3

1.4.0 / 2014-07-21
==================

  * deps: parseurl@~1.2.0
    - Cache URLs based on original value
    - Remove no-longer-needed URL mis-parse work-around
    - Simplify the \"fast-path\" `RegExp`
  * deps: send@0.7.0
    - Add `dotfiles` option
    - deps: debug@1.0.4
    - deps: depd@0.4.2

1.3.2 / 2014-07-11
==================

  * deps: send@0.6.0
    - Cap `maxAge` value to 1 year
    - deps: debug@1.0.3

1.3.1 / 2014-07-09
==================

  * deps: parseurl@~1.1.3
    - faster parsing of href-only URLs

1.3.0 / 2014-06-28
==================

  * Add `setHeaders` option
  * Include HTML link in redirect response
  * deps: send@0.5.0
    - Accept string for `maxAge` (converted by `ms`)

1.2.3 / 2014-06-11
==================

  * deps: send@0.4.3
    - Do not throw un-catchable error on file open race condition
    - Use `escape-html` for HTML escaping
    - deps: debug@1.0.2
    - deps: finished@1.2.2
    - deps: fresh@0.2.2

1.2.2 / 2014-06-09
==================

  * deps: send@0.4.2
    - fix \"event emitter leak\" warnings
    - deps: debug@1.0.1
    - deps: finished@1.2.1

1.2.1 / 2014-06-02
==================

  * use `escape-html` for escaping
  * deps: send@0.4.1
    - Send `max-age` in `Cache-Control` in correct format

1.2.0 / 2014-05-29
==================

  * deps: send@0.4.0
    - Calculate ETag with md5 for reduced collisions
    - Fix wrong behavior when index file matches directory
    - Ignore stream errors after request ends
    - Skip directories in index file search
    - deps: debug@0.8.1

1.1.0 / 2014-04-24
==================

  * Accept options directly to `send` module
  * deps: send@0.3.0

1.0.4 / 2014-04-07
==================

  * Resolve relative paths at middleware setup
  * Use parseurl to parse the URL from request

1.0.3 / 2014-03-20
==================

  * Do not rely on connect-like environments

1.0.2 / 2014-03-06
==================

  * deps: send@0.2.0

1.0.1 / 2014-03-05
==================

  * Add mime export for back-compat

1.0.0 / 2014-03-05
==================

  * Genesis from `connect`
";
        
        $__internal_f17bef7088be339e02a0cb9a2de75f442d74e98ceed289e6db3d9e8c29c83bd0->leave($__internal_f17bef7088be339e02a0cb9a2de75f442d74e98ceed289e6db3d9e8c29c83bd0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/serve-static/HISTORY.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("1.12.4 / 2017-08-05
===================

  * deps: send@0.15.4
    - deps: debug@2.6.8
    - deps: depd@~1.1.1
    - deps: http-errors@~1.6.2

1.12.3 / 2017-05-16
===================

  * deps: send@0.15.3
    - deps: debug@2.6.7

1.12.2 / 2017-04-26
===================

  * deps: send@0.15.2
    - deps: debug@2.6.4

1.12.1 / 2017-03-04
===================

  * deps: send@0.15.1
    - Fix issue when `Date.parse` does not return `NaN` on invalid date
    - Fix strict violation in broken environments

1.12.0 / 2017-02-25
===================

  * Send complete HTML document in redirect response
  * Set default CSP header in redirect response
  * deps: send@0.15.0
    - Fix false detection of `no-cache` request directive
    - Fix incorrect result when `If-None-Match` has both `*` and ETags
    - Fix weak `ETag` matching to match spec
    - Remove usage of `res._headers` private field
    - Support `If-Match` and `If-Unmodified-Since` headers
    - Use `res.getHeaderNames()` when available
    - Use `res.headersSent` when available
    - deps: debug@2.6.1
    - deps: etag@~1.8.0
    - deps: fresh@0.5.0
    - deps: http-errors@~1.6.1

1.11.2 / 2017-01-23
===================

  * deps: send@0.14.2
    - deps: http-errors@~1.5.1
    - deps: ms@0.7.2
    - deps: statuses@~1.3.1

1.11.1 / 2016-06-10
===================

  * Fix redirect error when `req.url` contains raw non-URL characters
  * deps: send@0.14.1

1.11.0 / 2016-06-07
===================

  * Use status code 301 for redirects
  * deps: send@0.14.0
    - Add `acceptRanges` option
    - Add `cacheControl` option
    - Attempt to combine multiple ranges into single range
    - Correctly inherit from `Stream` class
    - Fix `Content-Range` header in 416 responses when using `start`/`end` options
    - Fix `Content-Range` header missing from default 416 responses
    - Ignore non-byte `Range` headers
    - deps: http-errors@~1.5.0
    - deps: range-parser@~1.2.0
    - deps: statuses@~1.3.0
    - perf: remove argument reassignment

1.10.3 / 2016-05-30
===================

  * deps: send@0.13.2
    - Fix invalid `Content-Type` header when `send.mime.default_type` unset

1.10.2 / 2016-01-19
===================

  * deps: parseurl@~1.3.1
    - perf: enable strict mode

1.10.1 / 2016-01-16
===================

  * deps: escape-html@~1.0.3
    - perf: enable strict mode
    - perf: optimize string replacement
    - perf: use faster string coercion
  * deps: send@0.13.1
    - deps: depd@~1.1.0
    - deps: destroy@~1.0.4
    - deps: escape-html@~1.0.3
    - deps: range-parser@~1.0.3

1.10.0 / 2015-06-17
===================

  * Add `fallthrough` option
    - Allows declaring this middleware is the final destination
    - Provides better integration with Express patterns
  * Fix reading options from options prototype
  * Improve the default redirect response headers
  * deps: escape-html@1.0.2
  * deps: send@0.13.0
    - Allow Node.js HTTP server to set `Date` response header
    - Fix incorrectly removing `Content-Location` on 304 response
    - Improve the default redirect response headers
    - Send appropriate headers on default error response
    - Use `http-errors` for standard emitted errors
    - Use `statuses` instead of `http` module for status messages
    - deps: escape-html@1.0.2
    - deps: etag@~1.7.0
    - deps: fresh@0.3.0
    - deps: on-finished@~2.3.0
    - perf: enable strict mode
    - perf: remove unnecessary array allocations
  * perf: enable strict mode
  * perf: remove argument reassignment

1.9.3 / 2015-05-14
==================

  * deps: send@0.12.3
    - deps: debug@~2.2.0
    - deps: depd@~1.0.1
    - deps: etag@~1.6.0
    - deps: ms@0.7.1
    - deps: on-finished@~2.2.1

1.9.2 / 2015-03-14
==================

  * deps: send@0.12.2
    - Throw errors early for invalid `extensions` or `index` options
    - deps: debug@~2.1.3

1.9.1 / 2015-02-17
==================

  * deps: send@0.12.1
    - Fix regression sending zero-length files

1.9.0 / 2015-02-16
==================

  * deps: send@0.12.0
    - Always read the stat size from the file
    - Fix mutating passed-in `options`
    - deps: mime@1.3.4

1.8.1 / 2015-01-20
==================

  * Fix redirect loop in Node.js 0.11.14
  * deps: send@0.11.1
    - Fix root path disclosure

1.8.0 / 2015-01-05
==================

  * deps: send@0.11.0
    - deps: debug@~2.1.1
    - deps: etag@~1.5.1
    - deps: ms@0.7.0
    - deps: on-finished@~2.2.0

1.7.2 / 2015-01-02
==================

  * Fix potential open redirect when mounted at root

1.7.1 / 2014-10-22
==================

  * deps: send@0.10.1
    - deps: on-finished@~2.1.1

1.7.0 / 2014-10-15
==================

  * deps: send@0.10.0
    - deps: debug@~2.1.0
    - deps: depd@~1.0.0
    - deps: etag@~1.5.0

1.6.5 / 2015-02-04
==================

  * Fix potential open redirect when mounted at root
    - Back-ported from v1.7.2

1.6.4 / 2014-10-08
==================

  * Fix redirect loop when index file serving disabled

1.6.3 / 2014-09-24
==================

  * deps: send@0.9.3
    - deps: etag@~1.4.0

1.6.2 / 2014-09-15
==================

  * deps: send@0.9.2
    - deps: depd@0.4.5
    - deps: etag@~1.3.1
    - deps: range-parser@~1.0.2

1.6.1 / 2014-09-07
==================

  * deps: send@0.9.1
    - deps: fresh@0.2.4

1.6.0 / 2014-09-07
==================

  * deps: send@0.9.0
    - Add `lastModified` option
    - Use `etag` to generate `ETag` header
    - deps: debug@~2.0.0

1.5.4 / 2014-09-04
==================

  * deps: send@0.8.5
    - Fix a path traversal issue when using `root`
    - Fix malicious path detection for empty string path

1.5.3 / 2014-08-17
==================

  * deps: send@0.8.3

1.5.2 / 2014-08-14
==================

  * deps: send@0.8.2
    - Work around `fd` leak in Node.js 0.10 for `fs.ReadStream`

1.5.1 / 2014-08-09
==================

  * Fix parsing of weird `req.originalUrl` values
  * deps: parseurl@~1.3.0
  * deps: utils-merge@1.0.0

1.5.0 / 2014-08-05
==================

  * deps: send@0.8.1
    - Add `extensions` option

1.4.4 / 2014-08-04
==================

  * deps: send@0.7.4
    - Fix serving index files without root dir

1.4.3 / 2014-07-29
==================

  * deps: send@0.7.3
    - Fix incorrect 403 on Windows and Node.js 0.11

1.4.2 / 2014-07-27
==================

  * deps: send@0.7.2
    - deps: depd@0.4.4

1.4.1 / 2014-07-26
==================

  * deps: send@0.7.1
    - deps: depd@0.4.3

1.4.0 / 2014-07-21
==================

  * deps: parseurl@~1.2.0
    - Cache URLs based on original value
    - Remove no-longer-needed URL mis-parse work-around
    - Simplify the \"fast-path\" `RegExp`
  * deps: send@0.7.0
    - Add `dotfiles` option
    - deps: debug@1.0.4
    - deps: depd@0.4.2

1.3.2 / 2014-07-11
==================

  * deps: send@0.6.0
    - Cap `maxAge` value to 1 year
    - deps: debug@1.0.3

1.3.1 / 2014-07-09
==================

  * deps: parseurl@~1.1.3
    - faster parsing of href-only URLs

1.3.0 / 2014-06-28
==================

  * Add `setHeaders` option
  * Include HTML link in redirect response
  * deps: send@0.5.0
    - Accept string for `maxAge` (converted by `ms`)

1.2.3 / 2014-06-11
==================

  * deps: send@0.4.3
    - Do not throw un-catchable error on file open race condition
    - Use `escape-html` for HTML escaping
    - deps: debug@1.0.2
    - deps: finished@1.2.2
    - deps: fresh@0.2.2

1.2.2 / 2014-06-09
==================

  * deps: send@0.4.2
    - fix \"event emitter leak\" warnings
    - deps: debug@1.0.1
    - deps: finished@1.2.1

1.2.1 / 2014-06-02
==================

  * use `escape-html` for escaping
  * deps: send@0.4.1
    - Send `max-age` in `Cache-Control` in correct format

1.2.0 / 2014-05-29
==================

  * deps: send@0.4.0
    - Calculate ETag with md5 for reduced collisions
    - Fix wrong behavior when index file matches directory
    - Ignore stream errors after request ends
    - Skip directories in index file search
    - deps: debug@0.8.1

1.1.0 / 2014-04-24
==================

  * Accept options directly to `send` module
  * deps: send@0.3.0

1.0.4 / 2014-04-07
==================

  * Resolve relative paths at middleware setup
  * Use parseurl to parse the URL from request

1.0.3 / 2014-03-20
==================

  * Do not rely on connect-like environments

1.0.2 / 2014-03-06
==================

  * deps: send@0.2.0

1.0.1 / 2014-03-05
==================

  * Add mime export for back-compat

1.0.0 / 2014-03-05
==================

  * Genesis from `connect`
", "node_modules/serve-static/HISTORY.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/serve-static/HISTORY.md");
    }
}
