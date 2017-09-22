<?php

/* node_modules/jsesc/man/jsesc.1 */
class __TwigTemplate_bbd2b42809192fa89709d1e15f836bd72032a33572ba6d609793f05a6c741a6b extends Twig_Template
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
        $__internal_bf616500f2e04e86adb8974aa9dfa5a500616473743d9fb5607a3af38d3f3e11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf616500f2e04e86adb8974aa9dfa5a500616473743d9fb5607a3af38d3f3e11->enter($__internal_bf616500f2e04e86adb8974aa9dfa5a500616473743d9fb5607a3af38d3f3e11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/jsesc/man/jsesc.1"));

        // line 1
        echo ".Dd October 25, 2013
.Dt jsesc 1
.Sh NAME
.Nm jsesc
.Nd escape strings for use in JavaScript string literals
.Sh SYNOPSIS
.Nm
.Op Fl s | -single-quotes Ar string
.br
.Op Fl d | -double-quotes Ar string
.br
.Op Fl w | -wrap Ar string
.br
.Op Fl 6 | -es6 Ar string
.br
.Op Fl e | -escape-everything Ar string
.br
.Op Fl j | -json Ar string
.br
.Op Fl p | -object Ar string
.br
.Op Fl p | -pretty Ar string
.br
.Op Fl v | -version
.br
.Op Fl h | -help
.Sh DESCRIPTION
.Nm
escapes strings for use in JavaScript string literals while generating the shortest possible valid ASCII-only output.
.Sh OPTIONS
.Bl -ohang -offset
.It Sy \"-s, --single-quotes\"
Escape any occurences of ' in the input string as \\\\', so that the output can be used in a JavaScript string literal wrapped in single quotes.
.It Sy \"-d, --double-quotes\"
Escape any occurences of \" in the input string as \\\\\", so that the output can be used in a JavaScript string literal wrapped in double quotes.
.It Sy \"-w, --wrap\"
Make sure the output is a valid JavaScript string literal wrapped in quotes. The type of quotes can be specified using the
.Ar -s | --single-quotes
or
.Ar -d | --double-quotes
settings.
.It Sy \"-6, --es6\"
Escape any astral Unicode symbols using ECMAScript 6 Unicode code point escape sequences.
.It Sy \"-e, --escape-everything\"
Escape all the symbols in the output, even printable ASCII symbols.
.It Sy \"-j, --json\"
Make sure the output is valid JSON. Hexadecimal character escape sequences and the \\\\v or \\\\0 escape sequences will not be used. Setting this flag enables the
.Ar -d | --double-quotes
and
.Ar -w | --wrap
settings.
.It Sy \"-o, --object\"
Treat the input as a JavaScript object rather than a string. Accepted values are flat arrays containing only string values, and flat objects containing only string values.
.It Sy \"-p, --pretty\"
Pretty-print the output for objects, using whitespace to make it more readable. Setting this flag enables the
.Ar -o | --object
setting.
.It Sy \"-v, --version\"
Print jsesc's version.
.It Sy \"-h, --help\"
Show the help screen.
.El
.Sh EXIT STATUS
The
.Nm jsesc
utility exits with one of the following values:
.Pp
.Bl -tag -width flag -compact
.It Li 0
.Nm
successfully escaped the given string and printed the result.
.It Li 1
.Nm
wasn't instructed to escape anything (for example, the
.Ar --help
flag was set); or, an error occurred.
.El
.Sh EXAMPLES
.Bl -ohang -offset
.It Sy \"jsesc 'foo bar baz'\"
Print an escaped version of the given string.
.It Sy echo\\ 'foo bar baz'\\ |\\ jsesc
Print an escaped version of the string that gets piped in.
.El
.Sh BUGS
jsesc's bug tracker is located at <https://github.com/mathiasbynens/jsesc/issues>.
.Sh AUTHOR
Mathias Bynens <http://mathiasbynens.be/>
.Sh WWW
<http://mths.be/jsesc>
";
        
        $__internal_bf616500f2e04e86adb8974aa9dfa5a500616473743d9fb5607a3af38d3f3e11->leave($__internal_bf616500f2e04e86adb8974aa9dfa5a500616473743d9fb5607a3af38d3f3e11_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/jsesc/man/jsesc.1";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source(".Dd October 25, 2013
.Dt jsesc 1
.Sh NAME
.Nm jsesc
.Nd escape strings for use in JavaScript string literals
.Sh SYNOPSIS
.Nm
.Op Fl s | -single-quotes Ar string
.br
.Op Fl d | -double-quotes Ar string
.br
.Op Fl w | -wrap Ar string
.br
.Op Fl 6 | -es6 Ar string
.br
.Op Fl e | -escape-everything Ar string
.br
.Op Fl j | -json Ar string
.br
.Op Fl p | -object Ar string
.br
.Op Fl p | -pretty Ar string
.br
.Op Fl v | -version
.br
.Op Fl h | -help
.Sh DESCRIPTION
.Nm
escapes strings for use in JavaScript string literals while generating the shortest possible valid ASCII-only output.
.Sh OPTIONS
.Bl -ohang -offset
.It Sy \"-s, --single-quotes\"
Escape any occurences of ' in the input string as \\\\', so that the output can be used in a JavaScript string literal wrapped in single quotes.
.It Sy \"-d, --double-quotes\"
Escape any occurences of \" in the input string as \\\\\", so that the output can be used in a JavaScript string literal wrapped in double quotes.
.It Sy \"-w, --wrap\"
Make sure the output is a valid JavaScript string literal wrapped in quotes. The type of quotes can be specified using the
.Ar -s | --single-quotes
or
.Ar -d | --double-quotes
settings.
.It Sy \"-6, --es6\"
Escape any astral Unicode symbols using ECMAScript 6 Unicode code point escape sequences.
.It Sy \"-e, --escape-everything\"
Escape all the symbols in the output, even printable ASCII symbols.
.It Sy \"-j, --json\"
Make sure the output is valid JSON. Hexadecimal character escape sequences and the \\\\v or \\\\0 escape sequences will not be used. Setting this flag enables the
.Ar -d | --double-quotes
and
.Ar -w | --wrap
settings.
.It Sy \"-o, --object\"
Treat the input as a JavaScript object rather than a string. Accepted values are flat arrays containing only string values, and flat objects containing only string values.
.It Sy \"-p, --pretty\"
Pretty-print the output for objects, using whitespace to make it more readable. Setting this flag enables the
.Ar -o | --object
setting.
.It Sy \"-v, --version\"
Print jsesc's version.
.It Sy \"-h, --help\"
Show the help screen.
.El
.Sh EXIT STATUS
The
.Nm jsesc
utility exits with one of the following values:
.Pp
.Bl -tag -width flag -compact
.It Li 0
.Nm
successfully escaped the given string and printed the result.
.It Li 1
.Nm
wasn't instructed to escape anything (for example, the
.Ar --help
flag was set); or, an error occurred.
.El
.Sh EXAMPLES
.Bl -ohang -offset
.It Sy \"jsesc 'foo bar baz'\"
Print an escaped version of the given string.
.It Sy echo\\ 'foo bar baz'\\ |\\ jsesc
Print an escaped version of the string that gets piped in.
.El
.Sh BUGS
jsesc's bug tracker is located at <https://github.com/mathiasbynens/jsesc/issues>.
.Sh AUTHOR
Mathias Bynens <http://mathiasbynens.be/>
.Sh WWW
<http://mths.be/jsesc>
", "node_modules/jsesc/man/jsesc.1", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/jsesc/man/jsesc.1");
    }
}
