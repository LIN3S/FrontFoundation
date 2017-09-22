<?php

/* node_modules/ini/README.md */
class __TwigTemplate_45a8154b03a90fd5d1fff8518a72a8e25688d33b78627aaaae8040a5c83c5385 extends Twig_Template
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
        $__internal_63e3491a868bd0205b095ead0831cc8236c9d95b51a608ea0db45e7a14f0b0dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63e3491a868bd0205b095ead0831cc8236c9d95b51a608ea0db45e7a14f0b0dc->enter($__internal_63e3491a868bd0205b095ead0831cc8236c9d95b51a608ea0db45e7a14f0b0dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/ini/README.md"));

        // line 1
        echo "An ini format parser and serializer for node.

Sections are treated as nested objects.  Items before the first
heading are saved on the object directly.

## Usage

Consider an ini-file `config.ini` that looks like this:

    ; this comment is being ignored
    scope = global

    [database]
    user = dbuser
    password = dbpassword
    database = use_this_database

    [paths.default]
    datadir = /var/lib/data
    array[] = first value
    array[] = second value
    array[] = third value

You can read, manipulate and write the ini-file like so:

    var fs = require('fs')
      , ini = require('ini')

    var config = ini.parse(fs.readFileSync('./config.ini', 'utf-8'))

    config.scope = 'local'
    config.database.database = 'use_another_database'
    config.paths.default.tmpdir = '/tmp'
    delete config.paths.default.datadir
    config.paths.default.array.push('fourth value')

    fs.writeFileSync('./config_modified.ini', ini.stringify(config, { section: 'section' }))

This will result in a file called `config_modified.ini` being written
to the filesystem with the following content:

    [section]
    scope=local
    [section.database]
    user=dbuser
    password=dbpassword
    database=use_another_database
    [section.paths.default]
    tmpdir=/tmp
    array[]=first value
    array[]=second value
    array[]=third value
    array[]=fourth value


## API

### decode(inistring)

Decode the ini-style formatted `inistring` into a nested object.

### parse(inistring)

Alias for `decode(inistring)`

### encode(object, [options])

Encode the object `object` into an ini-style formatted string. If the
optional parameter `section` is given, then all top-level properties
of the object are put into this section and the `section`-string is
prepended to all sub-sections, see the usage example above.

The `options` object may contain the following:

* `section` A string which will be the first `section` in the encoded
  ini data.  Defaults to none.
* `whitespace` Boolean to specify whether to put whitespace around the
  `=` character.  By default, whitespace is omitted, to be friendly to
  some persnickety old parsers that don't tolerate it well.  But some
  find that it's more human-readable and pretty with the whitespace.

For backwards compatibility reasons, if a `string` options is passed
in, then it is assumed to be the `section` value.

### stringify(object, [options])

Alias for `encode(object, [options])`

### safe(val)

Escapes the string `val` such that it is safe to be used as a key or
value in an ini-file. Basically escapes quotes. For example

    ini.safe('\"unsafe string\"')

would result in

    \"\\\"unsafe string\\\"\"

### unsafe(val)

Unescapes the string `val`
";
        
        $__internal_63e3491a868bd0205b095ead0831cc8236c9d95b51a608ea0db45e7a14f0b0dc->leave($__internal_63e3491a868bd0205b095ead0831cc8236c9d95b51a608ea0db45e7a14f0b0dc_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/ini/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("An ini format parser and serializer for node.

Sections are treated as nested objects.  Items before the first
heading are saved on the object directly.

## Usage

Consider an ini-file `config.ini` that looks like this:

    ; this comment is being ignored
    scope = global

    [database]
    user = dbuser
    password = dbpassword
    database = use_this_database

    [paths.default]
    datadir = /var/lib/data
    array[] = first value
    array[] = second value
    array[] = third value

You can read, manipulate and write the ini-file like so:

    var fs = require('fs')
      , ini = require('ini')

    var config = ini.parse(fs.readFileSync('./config.ini', 'utf-8'))

    config.scope = 'local'
    config.database.database = 'use_another_database'
    config.paths.default.tmpdir = '/tmp'
    delete config.paths.default.datadir
    config.paths.default.array.push('fourth value')

    fs.writeFileSync('./config_modified.ini', ini.stringify(config, { section: 'section' }))

This will result in a file called `config_modified.ini` being written
to the filesystem with the following content:

    [section]
    scope=local
    [section.database]
    user=dbuser
    password=dbpassword
    database=use_another_database
    [section.paths.default]
    tmpdir=/tmp
    array[]=first value
    array[]=second value
    array[]=third value
    array[]=fourth value


## API

### decode(inistring)

Decode the ini-style formatted `inistring` into a nested object.

### parse(inistring)

Alias for `decode(inistring)`

### encode(object, [options])

Encode the object `object` into an ini-style formatted string. If the
optional parameter `section` is given, then all top-level properties
of the object are put into this section and the `section`-string is
prepended to all sub-sections, see the usage example above.

The `options` object may contain the following:

* `section` A string which will be the first `section` in the encoded
  ini data.  Defaults to none.
* `whitespace` Boolean to specify whether to put whitespace around the
  `=` character.  By default, whitespace is omitted, to be friendly to
  some persnickety old parsers that don't tolerate it well.  But some
  find that it's more human-readable and pretty with the whitespace.

For backwards compatibility reasons, if a `string` options is passed
in, then it is assumed to be the `section` value.

### stringify(object, [options])

Alias for `encode(object, [options])`

### safe(val)

Escapes the string `val` such that it is safe to be used as a key or
value in an ini-file. Basically escapes quotes. For example

    ini.safe('\"unsafe string\"')

would result in

    \"\\\"unsafe string\\\"\"

### unsafe(val)

Unescapes the string `val`
", "node_modules/ini/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/ini/README.md");
    }
}
