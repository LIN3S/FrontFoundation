<?php

/* node_modules/make-dir/readme.md */
class __TwigTemplate_bdeea6c5839f20b1126fb01233b1060b034f142e82930286df3441f024eed7f7 extends Twig_Template
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
        $__internal_df0f0a55a117e23ee505f080c18ff10a5b33dd97808930e0f25332d301587744 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df0f0a55a117e23ee505f080c18ff10a5b33dd97808930e0f25332d301587744->enter($__internal_df0f0a55a117e23ee505f080c18ff10a5b33dd97808930e0f25332d301587744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/make-dir/readme.md"));

        // line 1
        echo "# make-dir [![Build Status: macOS & Linux](https://travis-ci.org/sindresorhus/make-dir.svg?branch=master)](https://travis-ci.org/sindresorhus/make-dir) [![Build status: Windows](https://ci.appveyor.com/api/projects/status/e0vtt8y600w91gcs/branch/master?svg=true)](https://ci.appveyor.com/project/sindresorhus/make-dir/branch/master) [![Coverage Status](https://coveralls.io/repos/github/sindresorhus/make-dir/badge.svg)](https://coveralls.io/github/sindresorhus/make-dir)

> Make a directory and its parents if needed - Think `mkdir -p`


## Advantages over [`mkdirp`](https://github.com/substack/node-mkdirp)

- Promise API *(Async/await ready!)*
- Fixes many `mkdirp` issues: [#96](https://github.com/substack/node-mkdirp/pull/96) [#70](https://github.com/substack/node-mkdirp/issues/70) [#66](https://github.com/substack/node-mkdirp/issues/66)
- 100% test coverage
- CI-tested on macOS, Linux, and Windows
- Actively maintained
- Doesn't bundle a CLI


## Install

```
\$ npm install --save make-dir
```


## Usage

```
\$ pwd
/Users/sindresorhus/fun
\$ tree
.
```

```js
const makeDir = require('make-dir');

makeDir('unicorn/rainbow/cake').then(path => {
\tconsole.log(path);
\t//=> '/Users/sindresorhus/fun/unicorn/rainbow/cake'
});
```

```
\$ tree
.
└── unicorn
    └── rainbow
        └── cake
```

Multiple directories:

```js
const makeDir = require('make-dir');

Promise.all([
\tmakeDir('unicorn/rainbow')
\tmakeDir('foo/bar')
]).then(paths => {
\tconsole.log(paths);
\t/*
\t[
\t\t'/Users/sindresorhus/fun/unicorn/rainbow',
\t\t'/Users/sindresorhus/fun/foo/bar'
\t]
\t*/
});
```


## API

### makeDir(path, [options])

Returns a `Promise` for the path to the created directory.

### makeDir.sync(path, [options])

Returns the path to the created directory.

#### path

Type: `string`

Directory to create.

#### options

Type: `Object`

##### mode

Type: `integer`<br>
Default: `0o777 & (~process.umask())`

Directory [permissions](https://x-team.com/blog/file-system-permissions-umask-node-js/).

##### fs

Type: `Object`<br>
Default: `require('fs')`

Use a custom `fs` implementation. For example [`graceful-fs`](https://github.com/isaacs/node-graceful-fs).


## Related

- [make-dir-cli](https://github.com/sindresorhus/make-dir-cli) - CLI for this module
- [del](https://github.com/sindresorhus/del) - Delete files and directories
- [globby](https://github.com/sindresorhus/globby) - User-friendly glob matching


## License

MIT © [Sindre Sorhus](https://sindresorhus.com)
";
        
        $__internal_df0f0a55a117e23ee505f080c18ff10a5b33dd97808930e0f25332d301587744->leave($__internal_df0f0a55a117e23ee505f080c18ff10a5b33dd97808930e0f25332d301587744_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/make-dir/readme.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# make-dir [![Build Status: macOS & Linux](https://travis-ci.org/sindresorhus/make-dir.svg?branch=master)](https://travis-ci.org/sindresorhus/make-dir) [![Build status: Windows](https://ci.appveyor.com/api/projects/status/e0vtt8y600w91gcs/branch/master?svg=true)](https://ci.appveyor.com/project/sindresorhus/make-dir/branch/master) [![Coverage Status](https://coveralls.io/repos/github/sindresorhus/make-dir/badge.svg)](https://coveralls.io/github/sindresorhus/make-dir)

> Make a directory and its parents if needed - Think `mkdir -p`


## Advantages over [`mkdirp`](https://github.com/substack/node-mkdirp)

- Promise API *(Async/await ready!)*
- Fixes many `mkdirp` issues: [#96](https://github.com/substack/node-mkdirp/pull/96) [#70](https://github.com/substack/node-mkdirp/issues/70) [#66](https://github.com/substack/node-mkdirp/issues/66)
- 100% test coverage
- CI-tested on macOS, Linux, and Windows
- Actively maintained
- Doesn't bundle a CLI


## Install

```
\$ npm install --save make-dir
```


## Usage

```
\$ pwd
/Users/sindresorhus/fun
\$ tree
.
```

```js
const makeDir = require('make-dir');

makeDir('unicorn/rainbow/cake').then(path => {
\tconsole.log(path);
\t//=> '/Users/sindresorhus/fun/unicorn/rainbow/cake'
});
```

```
\$ tree
.
└── unicorn
    └── rainbow
        └── cake
```

Multiple directories:

```js
const makeDir = require('make-dir');

Promise.all([
\tmakeDir('unicorn/rainbow')
\tmakeDir('foo/bar')
]).then(paths => {
\tconsole.log(paths);
\t/*
\t[
\t\t'/Users/sindresorhus/fun/unicorn/rainbow',
\t\t'/Users/sindresorhus/fun/foo/bar'
\t]
\t*/
});
```


## API

### makeDir(path, [options])

Returns a `Promise` for the path to the created directory.

### makeDir.sync(path, [options])

Returns the path to the created directory.

#### path

Type: `string`

Directory to create.

#### options

Type: `Object`

##### mode

Type: `integer`<br>
Default: `0o777 & (~process.umask())`

Directory [permissions](https://x-team.com/blog/file-system-permissions-umask-node-js/).

##### fs

Type: `Object`<br>
Default: `require('fs')`

Use a custom `fs` implementation. For example [`graceful-fs`](https://github.com/isaacs/node-graceful-fs).


## Related

- [make-dir-cli](https://github.com/sindresorhus/make-dir-cli) - CLI for this module
- [del](https://github.com/sindresorhus/del) - Delete files and directories
- [globby](https://github.com/sindresorhus/globby) - User-friendly glob matching


## License

MIT © [Sindre Sorhus](https://sindresorhus.com)
", "node_modules/make-dir/readme.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/make-dir/readme.md");
    }
}
