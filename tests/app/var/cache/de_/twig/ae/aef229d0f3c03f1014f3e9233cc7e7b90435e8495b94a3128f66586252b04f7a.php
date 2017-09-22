<?php

/* node_modules/extsprintf/Makefile.targ */
class __TwigTemplate_619d1ace07a054ea81b81c2731ae7add97612a4ee8efec8fd5c19093751f5843 extends Twig_Template
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
        $__internal_09e74e67222b0074d334fc700fdc7fd768d97e0689cf2e17ea92d669b1713719 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09e74e67222b0074d334fc700fdc7fd768d97e0689cf2e17ea92d669b1713719->enter($__internal_09e74e67222b0074d334fc700fdc7fd768d97e0689cf2e17ea92d669b1713719_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/extsprintf/Makefile.targ"));

        // line 1
        echo "# -*- mode: makefile -*-
#
# Copyright (c) 2012, Joyent, Inc. All rights reserved.
#
# Makefile.targ: common targets.
#
# NOTE: This makefile comes from the \"eng\" repo. It's designed to be dropped
# into other repos as-is without requiring any modifications. If you find
# yourself changing this file, you should instead update the original copy in
# eng.git and then update your repo to use the new version.
#
# This Makefile defines several useful targets and rules. You can use it by
# including it from a Makefile that specifies some of the variables below.
#
# Targets defined in this Makefile:
#
#\tcheck\tChecks JavaScript files for lint and style
#\t\tChecks bash scripts for syntax
#\t\tChecks SMF manifests for validity against the SMF DTD
#
#\tclean\tRemoves built files
#
#\tdocs\tBuilds restdown documentation in docs/
#
#\tprepush\tDepends on \"check\" and \"test\"
#
#\ttest\tDoes nothing (you should override this)
#
#\txref\tGenerates cscope (source cross-reference index)
#
# For details on what these targets are supposed to do, see the Joyent
# Engineering Guide.
#
# To make use of these targets, you'll need to set some of these variables. Any
# variables left unset will simply not be used.
#
#\tBASH_FILES\tBash scripts to check for syntax
#\t\t\t(paths relative to top-level Makefile)
#
#\tCLEAN_FILES\tFiles to remove as part of the \"clean\" target.  Note
#\t\t\tthat files generated by targets in this Makefile are
#\t\t\tautomatically included in CLEAN_FILES.  These include
#\t\t\trestdown-generated HTML and JSON files.
#
#\tDOC_FILES\tRestdown (documentation source) files. These are
#\t\t\tassumed to be contained in \"docs/\", and must NOT
#\t\t\tcontain the \"docs/\" prefix.
#
#\tJSL_CONF_NODE\tSpecify JavaScriptLint configuration files
#\tJSL_CONF_WEB\t(paths relative to top-level Makefile)
#
#\t\t\tNode.js and Web configuration files are separate
#\t\t\tbecause you'll usually want different global variable
#\t\t\tconfigurations.  If no file is specified, none is given
#\t\t\tto jsl, which causes it to use a default configuration,
#\t\t\twhich probably isn't what you want.
#
#\tJSL_FILES_NODE\tJavaScript files to check with Node config file.
#\tJSL_FILES_WEB\tJavaScript files to check with Web config file.
#
# You can also override these variables:
#
#\tBASH\t\tPath to bash (default: bash)
#
#\tCSCOPE_DIRS\tDirectories to search for source files for the cscope
#\t\t\tindex. (default: \".\")
#
#\tJSL\t\tPath to JavaScriptLint (default: \"jsl\")
#
#\tJSL_FLAGS_NODE\tAdditional flags to pass through to JSL
#\tJSL_FLAGS_WEB
#\tJSL_FLAGS
#
#\tJSSTYLE\t\tPath to jsstyle (default: jsstyle)
#
#\tJSSTYLE_FLAGS\tAdditional flags to pass through to jsstyle
#

#
# Defaults for the various tools we use.
#
BASH\t\t?= bash
BASHSTYLE\t?= tools/bashstyle
CP\t\t?= cp
CSCOPE\t\t?= cscope
CSCOPE_DIRS\t?= .
JSL\t\t?= jsl
JSSTYLE\t\t?= jsstyle
MKDIR\t\t?= mkdir -p
MV\t\t?= mv
RESTDOWN_FLAGS\t?=
RMTREE\t\t?= rm -rf
JSL_FLAGS  \t?= --nologo --nosummary

ifeq (\$(shell uname -s),SunOS)
\tTAR\t?= gtar
else
\tTAR\t?= tar
endif


#
# Defaults for other fixed values.
#
BUILD\t\t= build
DISTCLEAN_FILES += \$(BUILD)
DOC_BUILD\t= \$(BUILD)/docs/public

#
# Configure JSL_FLAGS_{NODE,WEB} based on JSL_CONF_{NODE,WEB}.
#
ifneq (\$(origin JSL_CONF_NODE), undefined)
\tJSL_FLAGS_NODE += --conf=\$(JSL_CONF_NODE)
endif

ifneq (\$(origin JSL_CONF_WEB), undefined)
\tJSL_FLAGS_WEB += --conf=\$(JSL_CONF_WEB)
endif

#
# Targets. For descriptions on what these are supposed to do, see the
# Joyent Engineering Guide.
#

#
# Instruct make to keep around temporary files. We have rules below that
# automatically update git submodules as needed, but they employ a deps/*/.git
# temporary file. Without this directive, make tries to remove these .git
# directories after the build has completed.
#
.SECONDARY: \$(\$(wildcard deps/*):%=%/.git)

#
# This rule enables other rules that use files from a git submodule to have
# those files depend on deps/module/.git and have \"make\" automatically check
# out the submodule as needed.
#
deps/%/.git:
\tgit submodule update --init deps/\$*

#
# These recipes make heavy use of dynamically-created phony targets. The parent
# Makefile defines a list of input files like BASH_FILES. We then say that each
# of these files depends on a fake target called filename.bashchk, and then we
# define a pattern rule for those targets that runs bash in check-syntax-only
# mode. This mechanism has the nice properties that if you specify zero files,
# the rule becomes a noop (unlike a single rule to check all bash files, which
# would invoke bash with zero files), and you can check individual files from
# the command line with \"make filename.bashchk\".
#
.PHONY: check-bash
check-bash: \$(BASH_FILES:%=%.bashchk) \$(BASH_FILES:%=%.bashstyle)

%.bashchk: %
\t\$(BASH) -n \$^

%.bashstyle: %
\t\$(BASHSTYLE) \$^

.PHONY: check-jsl check-jsl-node check-jsl-web
check-jsl: check-jsl-node check-jsl-web

check-jsl-node: \$(JSL_FILES_NODE:%=%.jslnodechk)

check-jsl-web: \$(JSL_FILES_WEB:%=%.jslwebchk)

%.jslnodechk: % \$(JSL_EXEC)
\t\$(JSL) \$(JSL_FLAGS) \$(JSL_FLAGS_NODE) \$<

%.jslwebchk: % \$(JSL_EXEC)
\t\$(JSL) \$(JSL_FLAGS) \$(JSL_FLAGS_WEB) \$<

.PHONY: check-jsstyle
check-jsstyle: \$(JSSTYLE_FILES:%=%.jsstylechk)

%.jsstylechk: % \$(JSSTYLE_EXEC)
\t\$(JSSTYLE) \$(JSSTYLE_FLAGS) \$<

.PHONY: check
check: check-jsl check-jsstyle check-bash
\t@echo check ok

.PHONY: clean
clean::
\t-\$(RMTREE) \$(CLEAN_FILES)

.PHONY: distclean
distclean:: clean
\t-\$(RMTREE) \$(DISTCLEAN_FILES)

CSCOPE_FILES = cscope.in.out cscope.out cscope.po.out
CLEAN_FILES += \$(CSCOPE_FILES)

.PHONY: xref
xref: cscope.files
\t\$(CSCOPE) -bqR

.PHONY: cscope.files
cscope.files:
\tfind \$(CSCOPE_DIRS) -name '*.c' -o -name '*.h' -o -name '*.cc' \\
\t    -o -name '*.js' -o -name '*.s' -o -name '*.cpp' > \$@

#
# The \"docs\" target is complicated because we do several things here:
#
#    (1) Use restdown to build HTML and JSON files from each of DOC_FILES.
#
#    (2) Copy these files into \$(DOC_BUILD) (build/docs/public), which
#        functions as a complete copy of the documentation that could be
#        mirrored or served over HTTP.
#
#    (3) Then copy any directories and media from docs/media into
#        \$(DOC_BUILD)/media. This allows projects to include their own media,
#        including files that will override same-named files provided by
#        restdown.
#
# Step (3) is the surprisingly complex part: in order to do this, we need to
# identify the subdirectories in docs/media, recreate them in
# \$(DOC_BUILD)/media, then do the same with the files.
#
DOC_MEDIA_DIRS := \$(shell find docs/media -type d 2>/dev/null | grep -v \"^docs/media\$\$\")
DOC_MEDIA_DIRS := \$(DOC_MEDIA_DIRS:docs/media/%=%)
DOC_MEDIA_DIRS_BUILD := \$(DOC_MEDIA_DIRS:%=\$(DOC_BUILD)/media/%)

DOC_MEDIA_FILES := \$(shell find docs/media -type f 2>/dev/null)
DOC_MEDIA_FILES := \$(DOC_MEDIA_FILES:docs/media/%=%)
DOC_MEDIA_FILES_BUILD := \$(DOC_MEDIA_FILES:%=\$(DOC_BUILD)/media/%)

#
# Like the other targets, \"docs\" just depends on the final files we want to
# create in \$(DOC_BUILD), leveraging other targets and recipes to define how
# to get there.
#
.PHONY: docs
docs:\t\t\t\t\t\t\t\\
    \$(DOC_FILES:%.restdown=\$(DOC_BUILD)/%.html)\t\t\\
    \$(DOC_FILES:%.restdown=\$(DOC_BUILD)/%.json)\t\t\\
    \$(DOC_MEDIA_FILES_BUILD)

#
# We keep the intermediate files so that the next build can see whether the
# files in DOC_BUILD are up to date.
#
.PRECIOUS:\t\t\t\t\t\\
    \$(DOC_FILES:%.restdown=docs/%.html)\t\t\\
    \$(DOC_FILES:%.restdown=docs/%json)

#
# We do clean those intermediate files, as well as all of DOC_BUILD.
#
CLEAN_FILES +=\t\t\t\t\t\\
    \$(DOC_BUILD)\t\t\t\t\\
    \$(DOC_FILES:%.restdown=docs/%.html)\t\t\\
    \$(DOC_FILES:%.restdown=docs/%.json)

#
# Before installing the files, we must make sure the directories exist. The |
# syntax tells make that the dependency need only exist, not be up to date.
# Otherwise, it might try to rebuild spuriously because the directory itself
# appears out of date.
#
\$(DOC_MEDIA_FILES_BUILD): | \$(DOC_MEDIA_DIRS_BUILD)

\$(DOC_BUILD)/%: docs/% | \$(DOC_BUILD)
\t\$(CP) \$< \$@

docs/%.json docs/%.html: docs/%.restdown | \$(DOC_BUILD) \$(RESTDOWN_EXEC)
\t\$(RESTDOWN) \$(RESTDOWN_FLAGS) -m \$(DOC_BUILD) \$<

\$(DOC_BUILD):
\t\$(MKDIR) \$@

\$(DOC_MEDIA_DIRS_BUILD):
\t\$(MKDIR) \$@

#
# The default \"test\" target does nothing. This should usually be overridden by
# the parent Makefile. It's included here so we can define \"prepush\" without
# requiring the repo to define \"test\".
#
.PHONY: test
test:

.PHONY: prepush
prepush: check test
";
        
        $__internal_09e74e67222b0074d334fc700fdc7fd768d97e0689cf2e17ea92d669b1713719->leave($__internal_09e74e67222b0074d334fc700fdc7fd768d97e0689cf2e17ea92d669b1713719_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/extsprintf/Makefile.targ";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# -*- mode: makefile -*-
#
# Copyright (c) 2012, Joyent, Inc. All rights reserved.
#
# Makefile.targ: common targets.
#
# NOTE: This makefile comes from the \"eng\" repo. It's designed to be dropped
# into other repos as-is without requiring any modifications. If you find
# yourself changing this file, you should instead update the original copy in
# eng.git and then update your repo to use the new version.
#
# This Makefile defines several useful targets and rules. You can use it by
# including it from a Makefile that specifies some of the variables below.
#
# Targets defined in this Makefile:
#
#\tcheck\tChecks JavaScript files for lint and style
#\t\tChecks bash scripts for syntax
#\t\tChecks SMF manifests for validity against the SMF DTD
#
#\tclean\tRemoves built files
#
#\tdocs\tBuilds restdown documentation in docs/
#
#\tprepush\tDepends on \"check\" and \"test\"
#
#\ttest\tDoes nothing (you should override this)
#
#\txref\tGenerates cscope (source cross-reference index)
#
# For details on what these targets are supposed to do, see the Joyent
# Engineering Guide.
#
# To make use of these targets, you'll need to set some of these variables. Any
# variables left unset will simply not be used.
#
#\tBASH_FILES\tBash scripts to check for syntax
#\t\t\t(paths relative to top-level Makefile)
#
#\tCLEAN_FILES\tFiles to remove as part of the \"clean\" target.  Note
#\t\t\tthat files generated by targets in this Makefile are
#\t\t\tautomatically included in CLEAN_FILES.  These include
#\t\t\trestdown-generated HTML and JSON files.
#
#\tDOC_FILES\tRestdown (documentation source) files. These are
#\t\t\tassumed to be contained in \"docs/\", and must NOT
#\t\t\tcontain the \"docs/\" prefix.
#
#\tJSL_CONF_NODE\tSpecify JavaScriptLint configuration files
#\tJSL_CONF_WEB\t(paths relative to top-level Makefile)
#
#\t\t\tNode.js and Web configuration files are separate
#\t\t\tbecause you'll usually want different global variable
#\t\t\tconfigurations.  If no file is specified, none is given
#\t\t\tto jsl, which causes it to use a default configuration,
#\t\t\twhich probably isn't what you want.
#
#\tJSL_FILES_NODE\tJavaScript files to check with Node config file.
#\tJSL_FILES_WEB\tJavaScript files to check with Web config file.
#
# You can also override these variables:
#
#\tBASH\t\tPath to bash (default: bash)
#
#\tCSCOPE_DIRS\tDirectories to search for source files for the cscope
#\t\t\tindex. (default: \".\")
#
#\tJSL\t\tPath to JavaScriptLint (default: \"jsl\")
#
#\tJSL_FLAGS_NODE\tAdditional flags to pass through to JSL
#\tJSL_FLAGS_WEB
#\tJSL_FLAGS
#
#\tJSSTYLE\t\tPath to jsstyle (default: jsstyle)
#
#\tJSSTYLE_FLAGS\tAdditional flags to pass through to jsstyle
#

#
# Defaults for the various tools we use.
#
BASH\t\t?= bash
BASHSTYLE\t?= tools/bashstyle
CP\t\t?= cp
CSCOPE\t\t?= cscope
CSCOPE_DIRS\t?= .
JSL\t\t?= jsl
JSSTYLE\t\t?= jsstyle
MKDIR\t\t?= mkdir -p
MV\t\t?= mv
RESTDOWN_FLAGS\t?=
RMTREE\t\t?= rm -rf
JSL_FLAGS  \t?= --nologo --nosummary

ifeq (\$(shell uname -s),SunOS)
\tTAR\t?= gtar
else
\tTAR\t?= tar
endif


#
# Defaults for other fixed values.
#
BUILD\t\t= build
DISTCLEAN_FILES += \$(BUILD)
DOC_BUILD\t= \$(BUILD)/docs/public

#
# Configure JSL_FLAGS_{NODE,WEB} based on JSL_CONF_{NODE,WEB}.
#
ifneq (\$(origin JSL_CONF_NODE), undefined)
\tJSL_FLAGS_NODE += --conf=\$(JSL_CONF_NODE)
endif

ifneq (\$(origin JSL_CONF_WEB), undefined)
\tJSL_FLAGS_WEB += --conf=\$(JSL_CONF_WEB)
endif

#
# Targets. For descriptions on what these are supposed to do, see the
# Joyent Engineering Guide.
#

#
# Instruct make to keep around temporary files. We have rules below that
# automatically update git submodules as needed, but they employ a deps/*/.git
# temporary file. Without this directive, make tries to remove these .git
# directories after the build has completed.
#
.SECONDARY: \$(\$(wildcard deps/*):%=%/.git)

#
# This rule enables other rules that use files from a git submodule to have
# those files depend on deps/module/.git and have \"make\" automatically check
# out the submodule as needed.
#
deps/%/.git:
\tgit submodule update --init deps/\$*

#
# These recipes make heavy use of dynamically-created phony targets. The parent
# Makefile defines a list of input files like BASH_FILES. We then say that each
# of these files depends on a fake target called filename.bashchk, and then we
# define a pattern rule for those targets that runs bash in check-syntax-only
# mode. This mechanism has the nice properties that if you specify zero files,
# the rule becomes a noop (unlike a single rule to check all bash files, which
# would invoke bash with zero files), and you can check individual files from
# the command line with \"make filename.bashchk\".
#
.PHONY: check-bash
check-bash: \$(BASH_FILES:%=%.bashchk) \$(BASH_FILES:%=%.bashstyle)

%.bashchk: %
\t\$(BASH) -n \$^

%.bashstyle: %
\t\$(BASHSTYLE) \$^

.PHONY: check-jsl check-jsl-node check-jsl-web
check-jsl: check-jsl-node check-jsl-web

check-jsl-node: \$(JSL_FILES_NODE:%=%.jslnodechk)

check-jsl-web: \$(JSL_FILES_WEB:%=%.jslwebchk)

%.jslnodechk: % \$(JSL_EXEC)
\t\$(JSL) \$(JSL_FLAGS) \$(JSL_FLAGS_NODE) \$<

%.jslwebchk: % \$(JSL_EXEC)
\t\$(JSL) \$(JSL_FLAGS) \$(JSL_FLAGS_WEB) \$<

.PHONY: check-jsstyle
check-jsstyle: \$(JSSTYLE_FILES:%=%.jsstylechk)

%.jsstylechk: % \$(JSSTYLE_EXEC)
\t\$(JSSTYLE) \$(JSSTYLE_FLAGS) \$<

.PHONY: check
check: check-jsl check-jsstyle check-bash
\t@echo check ok

.PHONY: clean
clean::
\t-\$(RMTREE) \$(CLEAN_FILES)

.PHONY: distclean
distclean:: clean
\t-\$(RMTREE) \$(DISTCLEAN_FILES)

CSCOPE_FILES = cscope.in.out cscope.out cscope.po.out
CLEAN_FILES += \$(CSCOPE_FILES)

.PHONY: xref
xref: cscope.files
\t\$(CSCOPE) -bqR

.PHONY: cscope.files
cscope.files:
\tfind \$(CSCOPE_DIRS) -name '*.c' -o -name '*.h' -o -name '*.cc' \\
\t    -o -name '*.js' -o -name '*.s' -o -name '*.cpp' > \$@

#
# The \"docs\" target is complicated because we do several things here:
#
#    (1) Use restdown to build HTML and JSON files from each of DOC_FILES.
#
#    (2) Copy these files into \$(DOC_BUILD) (build/docs/public), which
#        functions as a complete copy of the documentation that could be
#        mirrored or served over HTTP.
#
#    (3) Then copy any directories and media from docs/media into
#        \$(DOC_BUILD)/media. This allows projects to include their own media,
#        including files that will override same-named files provided by
#        restdown.
#
# Step (3) is the surprisingly complex part: in order to do this, we need to
# identify the subdirectories in docs/media, recreate them in
# \$(DOC_BUILD)/media, then do the same with the files.
#
DOC_MEDIA_DIRS := \$(shell find docs/media -type d 2>/dev/null | grep -v \"^docs/media\$\$\")
DOC_MEDIA_DIRS := \$(DOC_MEDIA_DIRS:docs/media/%=%)
DOC_MEDIA_DIRS_BUILD := \$(DOC_MEDIA_DIRS:%=\$(DOC_BUILD)/media/%)

DOC_MEDIA_FILES := \$(shell find docs/media -type f 2>/dev/null)
DOC_MEDIA_FILES := \$(DOC_MEDIA_FILES:docs/media/%=%)
DOC_MEDIA_FILES_BUILD := \$(DOC_MEDIA_FILES:%=\$(DOC_BUILD)/media/%)

#
# Like the other targets, \"docs\" just depends on the final files we want to
# create in \$(DOC_BUILD), leveraging other targets and recipes to define how
# to get there.
#
.PHONY: docs
docs:\t\t\t\t\t\t\t\\
    \$(DOC_FILES:%.restdown=\$(DOC_BUILD)/%.html)\t\t\\
    \$(DOC_FILES:%.restdown=\$(DOC_BUILD)/%.json)\t\t\\
    \$(DOC_MEDIA_FILES_BUILD)

#
# We keep the intermediate files so that the next build can see whether the
# files in DOC_BUILD are up to date.
#
.PRECIOUS:\t\t\t\t\t\\
    \$(DOC_FILES:%.restdown=docs/%.html)\t\t\\
    \$(DOC_FILES:%.restdown=docs/%json)

#
# We do clean those intermediate files, as well as all of DOC_BUILD.
#
CLEAN_FILES +=\t\t\t\t\t\\
    \$(DOC_BUILD)\t\t\t\t\\
    \$(DOC_FILES:%.restdown=docs/%.html)\t\t\\
    \$(DOC_FILES:%.restdown=docs/%.json)

#
# Before installing the files, we must make sure the directories exist. The |
# syntax tells make that the dependency need only exist, not be up to date.
# Otherwise, it might try to rebuild spuriously because the directory itself
# appears out of date.
#
\$(DOC_MEDIA_FILES_BUILD): | \$(DOC_MEDIA_DIRS_BUILD)

\$(DOC_BUILD)/%: docs/% | \$(DOC_BUILD)
\t\$(CP) \$< \$@

docs/%.json docs/%.html: docs/%.restdown | \$(DOC_BUILD) \$(RESTDOWN_EXEC)
\t\$(RESTDOWN) \$(RESTDOWN_FLAGS) -m \$(DOC_BUILD) \$<

\$(DOC_BUILD):
\t\$(MKDIR) \$@

\$(DOC_MEDIA_DIRS_BUILD):
\t\$(MKDIR) \$@

#
# The default \"test\" target does nothing. This should usually be overridden by
# the parent Makefile. It's included here so we can define \"prepush\" without
# requiring the repo to define \"test\".
#
.PHONY: test
test:

.PHONY: prepush
prepush: check test
", "node_modules/extsprintf/Makefile.targ", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/extsprintf/Makefile.targ");
    }
}
