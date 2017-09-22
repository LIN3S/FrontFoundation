<?php

/* node_modules/errno/README.md */
class __TwigTemplate_3ace076975df6a12dd54a07f79be3415129272589bdcb569f4d9f37614971735 extends Twig_Template
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
        $__internal_9e097c13af9c93bec6c89dcb7a276862ce42716ac7a47e3a344555010cb953d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e097c13af9c93bec6c89dcb7a276862ce42716ac7a47e3a344555010cb953d7->enter($__internal_9e097c13af9c93bec6c89dcb7a276862ce42716ac7a47e3a344555010cb953d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/errno/README.md"));

        // line 1
        echo "# node-errno

Better [libuv](https://github.com/libuv/libuv)/[Node.js](https://nodejs.org)/[io.js](https://iojs.org) error handling & reporting. Available in npm as *errno*.

* [errno exposed](#errnoexposed)
* [Custom errors](#customerrors)

<a name=\"errnoexposed\"></a>
## errno exposed

Ever find yourself needing more details about Node.js errors? Me too, so *node-errno* contains the errno mappings direct from libuv so you can use them in your code.

**By errno:**

```js
require('errno').errno[3]
// → {
//     \"errno\": 3,
//     \"code\": \"EACCES\",
//     \"description\": \"permission denied\"
//   }
```

**By code:**

```js
require('errno').code.ENOTEMPTY
// → {
//     \"errno\": 53,
//     \"code\": \"ENOTEMPTY\",
//     \"description\": \"directory not empty\"
//   }
```

**Make your errors more descriptive:**

```js
var errno = require('errno')

function errmsg(err) {
  var str = 'Error: '
  // if it's a libuv error then get the description from errno
  if (errno.errno[err.errno])
    str += errno.errno[err.errno].description
  else
    str += err.message

  // if it's a `fs` error then it'll have a 'path' property
  if (err.path)
    str += ' [' + err.path + ']'

  return str
}

var fs = require('fs')

fs.readFile('thisisnotarealfile.txt', function (err, data) {
  if (err)
    console.log(errmsg(err))
})
```

**Use as a command line tool:**

```
~ \$ errno 53
{
  \"errno\": 53,
  \"code\": \"ENOTEMPTY\",
  \"description\": \"directory not empty\"
}
~ \$ errno EROFS
{
  \"errno\": 56,
  \"code\": \"EROFS\",
  \"description\": \"read-only file system\"
}
~ \$ errno foo
No such errno/code: \"foo\"
```

Supply no arguments for the full list. Error codes are processed case-insensitive.

You will need to install with `npm install errno -g` if you want the `errno` command to be available without supplying a full path to the node_modules installation.

<a name=\"customerrors\"></a>
## Custom errors

Use `errno.custom.createError()` to create custom `Error` objects to throw around in your Node.js library. Create error heirachies so `instanceof` becomes a useful tool in tracking errors. Call-stack is correctly captured at the time you create an instance of the error object, plus a `cause` property will make available the original error object if you pass one in to the constructor.

```js
var create = require('errno').custom.createError
var MyError = create('MyError') // inherits from Error
var SpecificError = create('SpecificError', MyError) // inherits from MyError
var OtherError = create('OtherError', MyError)

// use them!
if (condition) throw new SpecificError('Eeek! Something bad happened')

if (err) return callback(new OtherError(err))
```

Also available is a `errno.custom.FilesystemError` with in-built access to errno properties:

```js
fs.readFile('foo', function (err, data) {
  if (err) return callback(new errno.custom.FilesystemError(err))
  // do something else
})
```

The resulting error object passed through the callback will have the following properties: `code`, `errno`, `path` and `message` will contain a descriptive human-readable message.

## Contributors

* [bahamas10](https://github.com/bahamas10) (Dave Eddy) - Added CLI
* [ralphtheninja](https://github.com/ralphtheninja) (Lars-Magnus Skog)

## Copyright & Licence

*Copyright (c) 2012-2015 [Rod Vagg](https://github.com/rvagg) ([@rvagg](https://twitter.com/rvagg))*

Made available under the MIT licence:

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the \"Software\"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is furnished
to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED \"AS IS\", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.";
        
        $__internal_9e097c13af9c93bec6c89dcb7a276862ce42716ac7a47e3a344555010cb953d7->leave($__internal_9e097c13af9c93bec6c89dcb7a276862ce42716ac7a47e3a344555010cb953d7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/errno/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# node-errno

Better [libuv](https://github.com/libuv/libuv)/[Node.js](https://nodejs.org)/[io.js](https://iojs.org) error handling & reporting. Available in npm as *errno*.

* [errno exposed](#errnoexposed)
* [Custom errors](#customerrors)

<a name=\"errnoexposed\"></a>
## errno exposed

Ever find yourself needing more details about Node.js errors? Me too, so *node-errno* contains the errno mappings direct from libuv so you can use them in your code.

**By errno:**

```js
require('errno').errno[3]
// → {
//     \"errno\": 3,
//     \"code\": \"EACCES\",
//     \"description\": \"permission denied\"
//   }
```

**By code:**

```js
require('errno').code.ENOTEMPTY
// → {
//     \"errno\": 53,
//     \"code\": \"ENOTEMPTY\",
//     \"description\": \"directory not empty\"
//   }
```

**Make your errors more descriptive:**

```js
var errno = require('errno')

function errmsg(err) {
  var str = 'Error: '
  // if it's a libuv error then get the description from errno
  if (errno.errno[err.errno])
    str += errno.errno[err.errno].description
  else
    str += err.message

  // if it's a `fs` error then it'll have a 'path' property
  if (err.path)
    str += ' [' + err.path + ']'

  return str
}

var fs = require('fs')

fs.readFile('thisisnotarealfile.txt', function (err, data) {
  if (err)
    console.log(errmsg(err))
})
```

**Use as a command line tool:**

```
~ \$ errno 53
{
  \"errno\": 53,
  \"code\": \"ENOTEMPTY\",
  \"description\": \"directory not empty\"
}
~ \$ errno EROFS
{
  \"errno\": 56,
  \"code\": \"EROFS\",
  \"description\": \"read-only file system\"
}
~ \$ errno foo
No such errno/code: \"foo\"
```

Supply no arguments for the full list. Error codes are processed case-insensitive.

You will need to install with `npm install errno -g` if you want the `errno` command to be available without supplying a full path to the node_modules installation.

<a name=\"customerrors\"></a>
## Custom errors

Use `errno.custom.createError()` to create custom `Error` objects to throw around in your Node.js library. Create error heirachies so `instanceof` becomes a useful tool in tracking errors. Call-stack is correctly captured at the time you create an instance of the error object, plus a `cause` property will make available the original error object if you pass one in to the constructor.

```js
var create = require('errno').custom.createError
var MyError = create('MyError') // inherits from Error
var SpecificError = create('SpecificError', MyError) // inherits from MyError
var OtherError = create('OtherError', MyError)

// use them!
if (condition) throw new SpecificError('Eeek! Something bad happened')

if (err) return callback(new OtherError(err))
```

Also available is a `errno.custom.FilesystemError` with in-built access to errno properties:

```js
fs.readFile('foo', function (err, data) {
  if (err) return callback(new errno.custom.FilesystemError(err))
  // do something else
})
```

The resulting error object passed through the callback will have the following properties: `code`, `errno`, `path` and `message` will contain a descriptive human-readable message.

## Contributors

* [bahamas10](https://github.com/bahamas10) (Dave Eddy) - Added CLI
* [ralphtheninja](https://github.com/ralphtheninja) (Lars-Magnus Skog)

## Copyright & Licence

*Copyright (c) 2012-2015 [Rod Vagg](https://github.com/rvagg) ([@rvagg](https://twitter.com/rvagg))*

Made available under the MIT licence:

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the \"Software\"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is furnished
to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED \"AS IS\", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.", "node_modules/errno/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/errno/README.md");
    }
}
