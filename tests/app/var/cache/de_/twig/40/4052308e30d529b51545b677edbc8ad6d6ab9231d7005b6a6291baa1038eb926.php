<?php

/* node_modules/fsevents/node_modules/console-control-strings/README.md */
class __TwigTemplate_44ee490c5b8999ab914e02475ea61d08fad79963b4259c393e74ee786832a38c extends Twig_Template
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
        $__internal_3ec6a564d6a6974f0ce8687b1b099695f4b991817ca28b012b7f4fbdd3f5f215 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ec6a564d6a6974f0ce8687b1b099695f4b991817ca28b012b7f4fbdd3f5f215->enter($__internal_3ec6a564d6a6974f0ce8687b1b099695f4b991817ca28b012b7f4fbdd3f5f215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/console-control-strings/README.md"));

        // line 1
        echo "# Console Control Strings

A library of cross-platform tested terminal/console command strings for
doing things like color and cursor positioning.  This is a subset of both
ansi and vt100.  All control codes included work on both Windows & Unix-like
OSes, except where noted.

## Usage

```js
var consoleControl = require('console-control-strings')

console.log(consoleControl.color('blue','bgRed', 'bold') + 'hi there' + consoleControl.color('reset'))
process.stdout.write(consoleControl.goto(75, 10))
```

## Why Another?

There are tons of libraries similar to this one.  I wanted one that was:

1. Very clear about compatibility goals.
2. Could emit, for instance, a start color code without an end one.
3. Returned strings w/o writing to streams.
4. Was not weighed down with other unrelated baggage.

## Functions

### var code = consoleControl.up(_num = 1_)

Returns the escape sequence to move _num_ lines up.

### var code = consoleControl.down(_num = 1_)

Returns the escape sequence to move _num_ lines down.

### var code = consoleControl.forward(_num = 1_)

Returns the escape sequence to move _num_ lines righ.

### var code = consoleControl.back(_num = 1_)

Returns the escape sequence to move _num_ lines left.

### var code = consoleControl.nextLine(_num = 1_)

Returns the escape sequence to move _num_ lines down and to the beginning of
the line.

### var code = consoleControl.previousLine(_num = 1_)

Returns the escape sequence to move _num_ lines up and to the beginning of
the line.

### var code = consoleControl.eraseData()

Returns the escape sequence to erase everything from the current cursor
position to the bottom right of the screen.  This is line based, so it
erases the remainder of the current line and all following lines.

### var code = consoleControl.eraseLine()

Returns the escape sequence to erase to the end of the current line.

### var code = consoleControl.goto(_x_, _y_)

Returns the escape sequence to move the cursor to the designated position. 
Note that the origin is _1, 1_ not _0, 0_.

### var code = consoleControl.gotoSOL()

Returns the escape sequence to move the cursor to the beginning of the
current line. (That is, it returns a carriage return, `\\r`.)

### var code = consoleControl.beep()

Returns the escape sequence to cause the termianl to beep.  (That is, it
returns unicode character `\\x0007`, a Control-G.)

### var code = consoleControl.hideCursor()

Returns the escape sequence to hide the cursor.

### var code = consoleControl.showCursor()

Returns the escape sequence to show the cursor.

### var code = consoleControl.color(_colors = []_)

### var code = consoleControl.color(_color1_, _color2_, _…_, _colorn_)

Returns the escape sequence to set the current terminal display attributes
(mostly colors).  Arguments can either be a list of attributes or an array
of attributes.  The difference between passing in an array or list of colors
and calling `.color` separately for each one, is that in the former case a
single escape sequence will be produced where as in the latter each change
will have its own distinct escape sequence.  Each attribute can be one of:

* Reset:
  * **reset** – Reset all attributes to the terminal default.
* Styles:
  * **bold** – Display text as bold.  In some terminals this means using a
    bold font, in others this means changing the color.  In some it means
    both.
  * **italic** – Display text as italic. This is not available in most Windows terminals.
  * **underline** – Underline text. This is not available in most Windows Terminals.
  * **inverse** – Invert the foreground and background colors.
  * **stopBold** – Do not display text as bold.
  * **stopItalic** – Do not display text as italic.
  * **stopUnderline** – Do not underline text.
  * **stopInverse** – Do not invert foreground and background.
* Colors:
  * **white**
  * **black**
  * **blue**
  * **cyan**
  * **green**
  * **magenta**
  * **red**
  * **yellow**
  * **grey** / **brightBlack**
  * **brightRed**
  * **brightGreen**
  * **brightYellow**
  * **brightBlue**
  * **brightMagenta**
  * **brightCyan**
  * **brightWhite**
* Background Colors:
  * **bgWhite**
  * **bgBlack**
  * **bgBlue**
  * **bgCyan**
  * **bgGreen**
  * **bgMagenta**
  * **bgRed**
  * **bgYellow**
  * **bgGrey** / **bgBrightBlack**
  * **bgBrightRed**
  * **bgBrightGreen**
  * **bgBrightYellow**
  * **bgBrightBlue**
  * **bgBrightMagenta**
  * **bgBrightCyan**
  * **bgBrightWhite**

";
        
        $__internal_3ec6a564d6a6974f0ce8687b1b099695f4b991817ca28b012b7f4fbdd3f5f215->leave($__internal_3ec6a564d6a6974f0ce8687b1b099695f4b991817ca28b012b7f4fbdd3f5f215_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/console-control-strings/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# Console Control Strings

A library of cross-platform tested terminal/console command strings for
doing things like color and cursor positioning.  This is a subset of both
ansi and vt100.  All control codes included work on both Windows & Unix-like
OSes, except where noted.

## Usage

```js
var consoleControl = require('console-control-strings')

console.log(consoleControl.color('blue','bgRed', 'bold') + 'hi there' + consoleControl.color('reset'))
process.stdout.write(consoleControl.goto(75, 10))
```

## Why Another?

There are tons of libraries similar to this one.  I wanted one that was:

1. Very clear about compatibility goals.
2. Could emit, for instance, a start color code without an end one.
3. Returned strings w/o writing to streams.
4. Was not weighed down with other unrelated baggage.

## Functions

### var code = consoleControl.up(_num = 1_)

Returns the escape sequence to move _num_ lines up.

### var code = consoleControl.down(_num = 1_)

Returns the escape sequence to move _num_ lines down.

### var code = consoleControl.forward(_num = 1_)

Returns the escape sequence to move _num_ lines righ.

### var code = consoleControl.back(_num = 1_)

Returns the escape sequence to move _num_ lines left.

### var code = consoleControl.nextLine(_num = 1_)

Returns the escape sequence to move _num_ lines down and to the beginning of
the line.

### var code = consoleControl.previousLine(_num = 1_)

Returns the escape sequence to move _num_ lines up and to the beginning of
the line.

### var code = consoleControl.eraseData()

Returns the escape sequence to erase everything from the current cursor
position to the bottom right of the screen.  This is line based, so it
erases the remainder of the current line and all following lines.

### var code = consoleControl.eraseLine()

Returns the escape sequence to erase to the end of the current line.

### var code = consoleControl.goto(_x_, _y_)

Returns the escape sequence to move the cursor to the designated position. 
Note that the origin is _1, 1_ not _0, 0_.

### var code = consoleControl.gotoSOL()

Returns the escape sequence to move the cursor to the beginning of the
current line. (That is, it returns a carriage return, `\\r`.)

### var code = consoleControl.beep()

Returns the escape sequence to cause the termianl to beep.  (That is, it
returns unicode character `\\x0007`, a Control-G.)

### var code = consoleControl.hideCursor()

Returns the escape sequence to hide the cursor.

### var code = consoleControl.showCursor()

Returns the escape sequence to show the cursor.

### var code = consoleControl.color(_colors = []_)

### var code = consoleControl.color(_color1_, _color2_, _…_, _colorn_)

Returns the escape sequence to set the current terminal display attributes
(mostly colors).  Arguments can either be a list of attributes or an array
of attributes.  The difference between passing in an array or list of colors
and calling `.color` separately for each one, is that in the former case a
single escape sequence will be produced where as in the latter each change
will have its own distinct escape sequence.  Each attribute can be one of:

* Reset:
  * **reset** – Reset all attributes to the terminal default.
* Styles:
  * **bold** – Display text as bold.  In some terminals this means using a
    bold font, in others this means changing the color.  In some it means
    both.
  * **italic** – Display text as italic. This is not available in most Windows terminals.
  * **underline** – Underline text. This is not available in most Windows Terminals.
  * **inverse** – Invert the foreground and background colors.
  * **stopBold** – Do not display text as bold.
  * **stopItalic** – Do not display text as italic.
  * **stopUnderline** – Do not underline text.
  * **stopInverse** – Do not invert foreground and background.
* Colors:
  * **white**
  * **black**
  * **blue**
  * **cyan**
  * **green**
  * **magenta**
  * **red**
  * **yellow**
  * **grey** / **brightBlack**
  * **brightRed**
  * **brightGreen**
  * **brightYellow**
  * **brightBlue**
  * **brightMagenta**
  * **brightCyan**
  * **brightWhite**
* Background Colors:
  * **bgWhite**
  * **bgBlack**
  * **bgBlue**
  * **bgCyan**
  * **bgGreen**
  * **bgMagenta**
  * **bgRed**
  * **bgYellow**
  * **bgGrey** / **bgBrightBlack**
  * **bgBrightRed**
  * **bgBrightGreen**
  * **bgBrightYellow**
  * **bgBrightBlue**
  * **bgBrightMagenta**
  * **bgBrightCyan**
  * **bgBrightWhite**

", "node_modules/fsevents/node_modules/console-control-strings/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/console-control-strings/README.md");
    }
}
