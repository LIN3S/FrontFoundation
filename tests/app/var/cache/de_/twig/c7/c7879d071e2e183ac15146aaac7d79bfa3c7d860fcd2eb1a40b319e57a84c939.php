<?php

/* node_modules/fsevents/node_modules/tar/test/dir-normalization.js */
class __TwigTemplate_5232b7daeae36435b9e0f2e5132fdac7d528e839e5a2c8289f7a4e64dae187d3 extends Twig_Template
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
        $__internal_73c791e72d2f34881f0d70dc01ec3ade734cbf38a9671ecaf62414914afa3f15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73c791e72d2f34881f0d70dc01ec3ade734cbf38a9671ecaf62414914afa3f15->enter($__internal_73c791e72d2f34881f0d70dc01ec3ade734cbf38a9671ecaf62414914afa3f15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/tar/test/dir-normalization.js"));

        // line 1
        echo "// Set the umask, so that it works the same everywhere.
process.umask(parseInt('22', 8))

var fs = require('fs')
var path = require('path')

var fstream = require('fstream')
var test = require('tap').test

var tar = require('../tar.js')
var file = path.resolve(__dirname, 'dir-normalization.tar')
var target = path.resolve(__dirname, 'tmp/dir-normalization-test')
var ee = 0

var expectEntries = [
  { path: 'fixtures/',
    mode: '755',
    type: '5',
    linkpath: ''
  },
  { path: 'fixtures/a/',
    mode: '755',
    type: '5',
    linkpath: ''
  },
  { path: 'fixtures/the-chumbler',
    mode: '755',
    type: '2',
    linkpath: path.resolve(target, 'a/b/c/d/the-chumbler'),
  },
  { path: 'fixtures/a/b/',
    mode: '755',
    type: '5',
    linkpath: ''
  },
  { path: 'fixtures/a/x',
    mode: '644',
    type: '0',
    linkpath: ''
  },
  { path: 'fixtures/a/b/c/',
    mode: '755',
    type: '5',
    linkpath: ''
  },
  { path: 'fixtures/a/b/c/y',
    mode: '755',
    type: '2',
    linkpath: '../../x',
  }
]

var ef = 0
var expectFiles = [
  { path: '',
    mode: '40755',
    type: 'Directory',
    depth: 0,
    linkpath: undefined
  },
  { path: '/fixtures',
    mode: '40755',
    type: 'Directory',
    depth: 1,
    linkpath: undefined
  },
  { path: '/fixtures/a',
    mode: '40755',
    type: 'Directory',
    depth: 2,
    linkpath: undefined
  },
  { path: '/fixtures/a/b',
    mode: '40755',
    type: 'Directory',
    depth: 3,
    linkpath: undefined
  },
  { path: '/fixtures/a/b/c',
    mode: '40755',
    type: 'Directory',
    depth: 4,
    linkpath: undefined
  },
  { path: '/fixtures/a/b/c/y',
    mode: '120755',
    type: 'SymbolicLink',
    depth: 5,
    linkpath: '../../x'
  },
  { path: '/fixtures/a/x',
    mode: '100644',
    type: 'File',
    depth: 3,
    linkpath: undefined
  },
  { path: '/fixtures/the-chumbler',
    mode: '120755',
    type: 'SymbolicLink',
    depth: 2,
    linkpath: path.resolve(target, 'a/b/c/d/the-chumbler')
  }
]

test('preclean', function (t) {
  require('rimraf').sync(path.join(__dirname, '/tmp/dir-normalization-test'))
  t.pass('cleaned!')
  t.end()
})

test('extract test', function (t) {
  var extract = tar.Extract(target)
  var inp = fs.createReadStream(file)

  inp.pipe(extract)

  extract.on('end', function () {
    t.equal(ee, expectEntries.length, 'should see ' + expectEntries.length + ' entries')

    // should get no more entries after end
    extract.removeAllListeners('entry')
    extract.on('entry', function (e) {
      t.fail('Should not get entries after end!')
    })

    next()
  })

  extract.on('entry', function (entry) {
    var mode = entry.props.mode & (~parseInt('22', 8))
    var found = {
      path: entry.path,
      mode: mode.toString(8),
      type: entry.props.type,
      linkpath: entry.props.linkpath,
    }

    var wanted = expectEntries[ee++]
    t.equivalent(found, wanted, 'tar entry ' + ee + ' ' + (wanted && wanted.path))
  })

  function next () {
    var r = fstream.Reader({
      path: target,
      type: 'Directory',
      sort: 'alpha'
    })

    r.on('ready', function () {
      foundEntry(r)
    })

    r.on('end', finish)

    function foundEntry (entry) {
      var p = entry.path.substr(target.length)
      var mode = entry.props.mode & (~parseInt('22', 8))
      var found = {
        path: p,
        mode: mode.toString(8),
        type: entry.props.type,
        depth: entry.props.depth,
        linkpath: entry.props.linkpath
      }

      var wanted = expectFiles[ef++]
      t.equivalent(found, wanted, 'unpacked file ' + ef + ' ' + (wanted && wanted.path))

      entry.on('entry', foundEntry)
    }

    function finish () {
      t.equal(ef, expectFiles.length, 'should have ' + ef + ' items')
      t.end()
    }
  }
})
";
        
        $__internal_73c791e72d2f34881f0d70dc01ec3ade734cbf38a9671ecaf62414914afa3f15->leave($__internal_73c791e72d2f34881f0d70dc01ec3ade734cbf38a9671ecaf62414914afa3f15_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/tar/test/dir-normalization.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Set the umask, so that it works the same everywhere.
process.umask(parseInt('22', 8))

var fs = require('fs')
var path = require('path')

var fstream = require('fstream')
var test = require('tap').test

var tar = require('../tar.js')
var file = path.resolve(__dirname, 'dir-normalization.tar')
var target = path.resolve(__dirname, 'tmp/dir-normalization-test')
var ee = 0

var expectEntries = [
  { path: 'fixtures/',
    mode: '755',
    type: '5',
    linkpath: ''
  },
  { path: 'fixtures/a/',
    mode: '755',
    type: '5',
    linkpath: ''
  },
  { path: 'fixtures/the-chumbler',
    mode: '755',
    type: '2',
    linkpath: path.resolve(target, 'a/b/c/d/the-chumbler'),
  },
  { path: 'fixtures/a/b/',
    mode: '755',
    type: '5',
    linkpath: ''
  },
  { path: 'fixtures/a/x',
    mode: '644',
    type: '0',
    linkpath: ''
  },
  { path: 'fixtures/a/b/c/',
    mode: '755',
    type: '5',
    linkpath: ''
  },
  { path: 'fixtures/a/b/c/y',
    mode: '755',
    type: '2',
    linkpath: '../../x',
  }
]

var ef = 0
var expectFiles = [
  { path: '',
    mode: '40755',
    type: 'Directory',
    depth: 0,
    linkpath: undefined
  },
  { path: '/fixtures',
    mode: '40755',
    type: 'Directory',
    depth: 1,
    linkpath: undefined
  },
  { path: '/fixtures/a',
    mode: '40755',
    type: 'Directory',
    depth: 2,
    linkpath: undefined
  },
  { path: '/fixtures/a/b',
    mode: '40755',
    type: 'Directory',
    depth: 3,
    linkpath: undefined
  },
  { path: '/fixtures/a/b/c',
    mode: '40755',
    type: 'Directory',
    depth: 4,
    linkpath: undefined
  },
  { path: '/fixtures/a/b/c/y',
    mode: '120755',
    type: 'SymbolicLink',
    depth: 5,
    linkpath: '../../x'
  },
  { path: '/fixtures/a/x',
    mode: '100644',
    type: 'File',
    depth: 3,
    linkpath: undefined
  },
  { path: '/fixtures/the-chumbler',
    mode: '120755',
    type: 'SymbolicLink',
    depth: 2,
    linkpath: path.resolve(target, 'a/b/c/d/the-chumbler')
  }
]

test('preclean', function (t) {
  require('rimraf').sync(path.join(__dirname, '/tmp/dir-normalization-test'))
  t.pass('cleaned!')
  t.end()
})

test('extract test', function (t) {
  var extract = tar.Extract(target)
  var inp = fs.createReadStream(file)

  inp.pipe(extract)

  extract.on('end', function () {
    t.equal(ee, expectEntries.length, 'should see ' + expectEntries.length + ' entries')

    // should get no more entries after end
    extract.removeAllListeners('entry')
    extract.on('entry', function (e) {
      t.fail('Should not get entries after end!')
    })

    next()
  })

  extract.on('entry', function (entry) {
    var mode = entry.props.mode & (~parseInt('22', 8))
    var found = {
      path: entry.path,
      mode: mode.toString(8),
      type: entry.props.type,
      linkpath: entry.props.linkpath,
    }

    var wanted = expectEntries[ee++]
    t.equivalent(found, wanted, 'tar entry ' + ee + ' ' + (wanted && wanted.path))
  })

  function next () {
    var r = fstream.Reader({
      path: target,
      type: 'Directory',
      sort: 'alpha'
    })

    r.on('ready', function () {
      foundEntry(r)
    })

    r.on('end', finish)

    function foundEntry (entry) {
      var p = entry.path.substr(target.length)
      var mode = entry.props.mode & (~parseInt('22', 8))
      var found = {
        path: p,
        mode: mode.toString(8),
        type: entry.props.type,
        depth: entry.props.depth,
        linkpath: entry.props.linkpath
      }

      var wanted = expectFiles[ef++]
      t.equivalent(found, wanted, 'unpacked file ' + ef + ' ' + (wanted && wanted.path))

      entry.on('entry', foundEntry)
    }

    function finish () {
      t.equal(ef, expectFiles.length, 'should have ' + ef + ' items')
      t.end()
    }
  }
})
", "node_modules/fsevents/node_modules/tar/test/dir-normalization.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/tar/test/dir-normalization.js");
    }
}
