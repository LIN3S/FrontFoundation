<?php

/* node_modules/fsevents/node_modules/verror/README.md */
class __TwigTemplate_04a800a4021d6bf10467cec7c282b3e64c206e69992ea653312c9c75513ffad2 extends Twig_Template
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
        $__internal_1a8c60bff8ee99aea445d99aa30f2c33337e5e867bb5ef451ea3ac6e663113f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a8c60bff8ee99aea445d99aa30f2c33337e5e867bb5ef451ea3ac6e663113f3->enter($__internal_1a8c60bff8ee99aea445d99aa30f2c33337e5e867bb5ef451ea3ac6e663113f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/verror/README.md"));

        // line 1
        echo "# verror: richer JavaScript errors

This module provides two classes: VError, for accretive errors, and WError, for
wrapping errors.  Both support printf-style error messages using extsprintf.

## Printf-style errors

At the most basic level, VError is just like JavaScript's Error class, but with
printf-style arguments:

    var verror = require('verror');

    var opname = 'read';
    var err = new verror.VError('\"%s\" operation failed', opname);
    console.log(err.message);
    console.log(err.stack);

This prints:

    \"read\" operation failed
    \"read\" operation failed
        at Object.<anonymous> (/Users/dap/node-verror/examples/varargs.js:4:11)
        at Module._compile (module.js:449:26)
        at Object.Module._extensions..js (module.js:467:10)
        at Module.load (module.js:356:32)
        at Function.Module._load (module.js:312:12)
        at Module.runMain (module.js:492:10)
        at process.startup.processNextTick.process._tickCallback (node.js:244:9)


## VError for accretive error messages

More interestingly, you can use VError to build up an error describing what
happened at various levels in the stack.  For example, suppose you have a
request handler that stats a file and fails if it doesn't exist:

    var fs = require('fs');
    var verror = require('verror');

    function checkFile(filename, callback) {
        fs.stat(filename, function (err) {
            if (err)
\t\t/* Annotate the \"stat\" error with what we were doing. */
\t    \treturn (callback(new verror.VError(err,
\t\t    'failed to check \"%s\"', filename)));

\t    /* ... */
        });
    }

    function handleRequest(filename, callback) {
    \tcheckFile('/nonexistent', function (err) {
    \t    if (err) {
    \t    \t/* Annotate the \"checkFile\" error with what we were doing. */
    \t    \treturn (callback(new verror.VError(err, 'request failed')));
    \t    }

    \t    /* ... */
    \t});
    }

    handleRequest('/nonexistent', function (err) {
\tif (err)
\t\tconsole.log(err.message);
\t/* ... */
    });

Since the file \"/nonexistent\" doesn't exist, this prints out:

    request failed: failed to check \"/nonexistent\": ENOENT, stat '/nonexistent'

The idea here is that the lowest level (Node's \"fs.stat\" function) generates an
arbitrary error, and each higher level (request handler and stat callback)
creates a new VError that annotates the previous error with what it was doing,
so that the result is a clear message explaining what failed at each level.

This plays nicely with extsprintf's \"%r\" specifier, which prints out a
Java-style stacktrace with the whole chain of exceptions:

    EXCEPTION: VError: request failed: failed to check \"/nonexistent\": ENOENT, stat '/nonexistent'
        at /Users/dap/work/node-verror/examples/levels.js:21:21
        at /Users/dap/work/node-verror/examples/levels.js:9:12
        at Object.oncomplete (fs.js:297:15)
    Caused by: EXCEPTION: VError: failed to check \"/nonexistent\": ENOENT, stat '/nonexistent'
        at /Users/dap/work/node-verror/examples/levels.js:9:21
        at Object.oncomplete (fs.js:297:15)
    Caused by: EXCEPTION: Error: Error: ENOENT, stat '/nonexistent'


## WError for wrapped errors

Sometimes you don't want an Error's \"message\" field to include the details of
all of the low-level errors, but you still want to be able to get at them
programmatically.  For example, in an HTTP server, you probably don't want to
spew all of the low-level errors back to the client, but you do want to include
them in the audit log entry for the request.  In that case, you can use a
WError, which is created exactly like VError (and also supports both
printf-style arguments and an optional cause), but the resulting \"message\" only
contains the top-level error.  It's also more verbose, including the class
associated with each error in the cause chain.  Using the same example above,
but replacing the VError in handleRequest with WError, we get this output:

    request failed

That's what we wanted -- just a high-level summary for the client.  But we can
get the object's toString() for the full details:

    WError: request failed; caused by WError: failed to check \"/nonexistent\";
    caused by Error: ENOENT, stat '/nonexistent'

# Contributing

Contributions welcome.  Code should be \"make check\" clean.  To run \"make check\",
you'll need these tools:

* https://github.com/davepacheco/jsstyle
* https://github.com/davepacheco/javascriptlint

If you're changing something non-trivial or user-facing, you may want to submit
an issue first.
";
        
        $__internal_1a8c60bff8ee99aea445d99aa30f2c33337e5e867bb5ef451ea3ac6e663113f3->leave($__internal_1a8c60bff8ee99aea445d99aa30f2c33337e5e867bb5ef451ea3ac6e663113f3_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/verror/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# verror: richer JavaScript errors

This module provides two classes: VError, for accretive errors, and WError, for
wrapping errors.  Both support printf-style error messages using extsprintf.

## Printf-style errors

At the most basic level, VError is just like JavaScript's Error class, but with
printf-style arguments:

    var verror = require('verror');

    var opname = 'read';
    var err = new verror.VError('\"%s\" operation failed', opname);
    console.log(err.message);
    console.log(err.stack);

This prints:

    \"read\" operation failed
    \"read\" operation failed
        at Object.<anonymous> (/Users/dap/node-verror/examples/varargs.js:4:11)
        at Module._compile (module.js:449:26)
        at Object.Module._extensions..js (module.js:467:10)
        at Module.load (module.js:356:32)
        at Function.Module._load (module.js:312:12)
        at Module.runMain (module.js:492:10)
        at process.startup.processNextTick.process._tickCallback (node.js:244:9)


## VError for accretive error messages

More interestingly, you can use VError to build up an error describing what
happened at various levels in the stack.  For example, suppose you have a
request handler that stats a file and fails if it doesn't exist:

    var fs = require('fs');
    var verror = require('verror');

    function checkFile(filename, callback) {
        fs.stat(filename, function (err) {
            if (err)
\t\t/* Annotate the \"stat\" error with what we were doing. */
\t    \treturn (callback(new verror.VError(err,
\t\t    'failed to check \"%s\"', filename)));

\t    /* ... */
        });
    }

    function handleRequest(filename, callback) {
    \tcheckFile('/nonexistent', function (err) {
    \t    if (err) {
    \t    \t/* Annotate the \"checkFile\" error with what we were doing. */
    \t    \treturn (callback(new verror.VError(err, 'request failed')));
    \t    }

    \t    /* ... */
    \t});
    }

    handleRequest('/nonexistent', function (err) {
\tif (err)
\t\tconsole.log(err.message);
\t/* ... */
    });

Since the file \"/nonexistent\" doesn't exist, this prints out:

    request failed: failed to check \"/nonexistent\": ENOENT, stat '/nonexistent'

The idea here is that the lowest level (Node's \"fs.stat\" function) generates an
arbitrary error, and each higher level (request handler and stat callback)
creates a new VError that annotates the previous error with what it was doing,
so that the result is a clear message explaining what failed at each level.

This plays nicely with extsprintf's \"%r\" specifier, which prints out a
Java-style stacktrace with the whole chain of exceptions:

    EXCEPTION: VError: request failed: failed to check \"/nonexistent\": ENOENT, stat '/nonexistent'
        at /Users/dap/work/node-verror/examples/levels.js:21:21
        at /Users/dap/work/node-verror/examples/levels.js:9:12
        at Object.oncomplete (fs.js:297:15)
    Caused by: EXCEPTION: VError: failed to check \"/nonexistent\": ENOENT, stat '/nonexistent'
        at /Users/dap/work/node-verror/examples/levels.js:9:21
        at Object.oncomplete (fs.js:297:15)
    Caused by: EXCEPTION: Error: Error: ENOENT, stat '/nonexistent'


## WError for wrapped errors

Sometimes you don't want an Error's \"message\" field to include the details of
all of the low-level errors, but you still want to be able to get at them
programmatically.  For example, in an HTTP server, you probably don't want to
spew all of the low-level errors back to the client, but you do want to include
them in the audit log entry for the request.  In that case, you can use a
WError, which is created exactly like VError (and also supports both
printf-style arguments and an optional cause), but the resulting \"message\" only
contains the top-level error.  It's also more verbose, including the class
associated with each error in the cause chain.  Using the same example above,
but replacing the VError in handleRequest with WError, we get this output:

    request failed

That's what we wanted -- just a high-level summary for the client.  But we can
get the object's toString() for the full details:

    WError: request failed; caused by WError: failed to check \"/nonexistent\";
    caused by Error: ENOENT, stat '/nonexistent'

# Contributing

Contributions welcome.  Code should be \"make check\" clean.  To run \"make check\",
you'll need these tools:

* https://github.com/davepacheco/jsstyle
* https://github.com/davepacheco/javascriptlint

If you're changing something non-trivial or user-facing, you may want to submit
an issue first.
", "node_modules/fsevents/node_modules/verror/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/verror/README.md");
    }
}
