<?php

/* node_modules/event-emitter/CHANGES */
class __TwigTemplate_c6f0f52611e47e170601e09cecc1047d018e494f90a8786917c1023d8672d72b extends Twig_Template
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
        $__internal_d99a231e0df9caf5f3a6e0f8b749286f48d8fb1d553e8c2403eb94972c2944d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d99a231e0df9caf5f3a6e0f8b749286f48d8fb1d553e8c2403eb94972c2944d0->enter($__internal_d99a231e0df9caf5f3a6e0f8b749286f48d8fb1d553e8c2403eb94972c2944d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/event-emitter/CHANGES"));

        // line 1
        echo "v0.3.5  --  2017.03.15
* Improve documentation
* Update dependencies

v0.3.4  --  2015.10.02
* Add `emitError` extension

v0.3.3  --  2015.01.30
* Fix reference to module in benchmarks

v0.3.2  --  2015.01.20
* Improve documentation
* Configure lint scripts
* Fix spelling of LICENSE

v0.3.1  --  2014.04.25
* Fix redefinition of emit method in `pipe`
* Allow custom emit method name in `pipe`

v0.3.0  --  2014.04.24
* Move out from lib folder
* Do not expose all utilities on main module
* Support objects which do not inherit from Object.prototype
* Improve arguments validation
* Improve internals
* Remove Makefile
* Improve documentation

v0.2.2  --  2013.06.05
* `unify` functionality

v0.2.1  --  2012.09.21
* hasListeners module
* Simplified internal id (improves performance a little), now it starts with
  underscore (hint it's private). Abstracted it to external module to have it
  one place
* Documentation cleanup

v0.2.0  --  2012.09.19
* Trashed poor implementation of v0.1 and came up with something solid

Changes:
* Improved performance
* Fixed bugs event-emitter is now cross-prototype safe and not affected by
  unexpected methods attached to Object.prototype
* Removed support for optional \"emitter\" argument in `emit` method, it was
  cumbersome to use, and should be solved just with event objects

v0.1.5  --  2012.08.06
* (maintanance) Do not use descriptors for internal objects, it exposes V8 bugs
  (only Node v0.6 branch)

v0.1.4  --  2012.06.13
* Fix detachment of listeners added with 'once'

v0.1.3  --  2012.05.28
* Updated es5-ext to latest version (v0.8)
* Cleared package.json so it's in npm friendly format

v0.1.2  --  2012.01.22
* Support for emitter argument in emit function, this allows some listeners not
  to be notified about event
* allOff - removes all listeners from object
* All methods returns self object
* Internal fixes
* Travis CI integration

v0.1.1  --  2011.08.08
* Added TAD test suite to devDependencies, configured test commands.
  Tests can be run with 'make test' or 'npm test'

v0.1.0  --  2011.08.08
Initial version
";
        
        $__internal_d99a231e0df9caf5f3a6e0f8b749286f48d8fb1d553e8c2403eb94972c2944d0->leave($__internal_d99a231e0df9caf5f3a6e0f8b749286f48d8fb1d553e8c2403eb94972c2944d0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/event-emitter/CHANGES";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("v0.3.5  --  2017.03.15
* Improve documentation
* Update dependencies

v0.3.4  --  2015.10.02
* Add `emitError` extension

v0.3.3  --  2015.01.30
* Fix reference to module in benchmarks

v0.3.2  --  2015.01.20
* Improve documentation
* Configure lint scripts
* Fix spelling of LICENSE

v0.3.1  --  2014.04.25
* Fix redefinition of emit method in `pipe`
* Allow custom emit method name in `pipe`

v0.3.0  --  2014.04.24
* Move out from lib folder
* Do not expose all utilities on main module
* Support objects which do not inherit from Object.prototype
* Improve arguments validation
* Improve internals
* Remove Makefile
* Improve documentation

v0.2.2  --  2013.06.05
* `unify` functionality

v0.2.1  --  2012.09.21
* hasListeners module
* Simplified internal id (improves performance a little), now it starts with
  underscore (hint it's private). Abstracted it to external module to have it
  one place
* Documentation cleanup

v0.2.0  --  2012.09.19
* Trashed poor implementation of v0.1 and came up with something solid

Changes:
* Improved performance
* Fixed bugs event-emitter is now cross-prototype safe and not affected by
  unexpected methods attached to Object.prototype
* Removed support for optional \"emitter\" argument in `emit` method, it was
  cumbersome to use, and should be solved just with event objects

v0.1.5  --  2012.08.06
* (maintanance) Do not use descriptors for internal objects, it exposes V8 bugs
  (only Node v0.6 branch)

v0.1.4  --  2012.06.13
* Fix detachment of listeners added with 'once'

v0.1.3  --  2012.05.28
* Updated es5-ext to latest version (v0.8)
* Cleared package.json so it's in npm friendly format

v0.1.2  --  2012.01.22
* Support for emitter argument in emit function, this allows some listeners not
  to be notified about event
* allOff - removes all listeners from object
* All methods returns self object
* Internal fixes
* Travis CI integration

v0.1.1  --  2011.08.08
* Added TAD test suite to devDependencies, configured test commands.
  Tests can be run with 'make test' or 'npm test'

v0.1.0  --  2011.08.08
Initial version
", "node_modules/event-emitter/CHANGES", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/event-emitter/CHANGES");
    }
}
