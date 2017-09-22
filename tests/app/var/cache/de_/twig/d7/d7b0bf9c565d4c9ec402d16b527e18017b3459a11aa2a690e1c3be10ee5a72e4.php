<?php

/* node_modules/resolve/test/resolver.js */
class __TwigTemplate_03d21e42fb225a585404ba9733bd675234289560ee6079e76cf8b916ca6ec1a9 extends Twig_Template
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
        $__internal_a0c929530a51806e8d38e64f0ab61cd19b3a1c45bc3a689a3be0d353b8f5a9d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0c929530a51806e8d38e64f0ab61cd19b3a1c45bc3a689a3be0d353b8f5a9d8->enter($__internal_a0c929530a51806e8d38e64f0ab61cd19b3a1c45bc3a689a3be0d353b8f5a9d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/resolve/test/resolver.js"));

        // line 1
        echo "var path = require('path');
var test = require('tape');
var resolve = require('../');

test('async foo', function (t) {
    t.plan(10);
    var dir = path.join(__dirname, 'resolver');

    resolve('./foo', { basedir: dir }, function (err, res, pkg) {
        if (err) t.fail(err);
        t.equal(res, path.join(dir, 'foo.js'));
        t.equal(pkg && pkg.name, 'resolve');
    });

    resolve('./foo.js', { basedir: dir }, function (err, res, pkg) {
        if (err) t.fail(err);
        t.equal(res, path.join(dir, 'foo.js'));
        t.equal(pkg && pkg.name, 'resolve');
    });

    resolve('./foo', { basedir: dir, 'package': { main: 'resolver' } }, function (err, res, pkg) {
        if (err) t.fail(err);
        t.equal(res, path.join(dir, 'foo.js'));
        t.equal(pkg && pkg.main, 'resolver');
    });

    resolve('./foo.js', { basedir: dir, 'package': { main: 'resolver' } }, function (err, res, pkg) {
        if (err) t.fail(err);
        t.equal(res, path.join(dir, 'foo.js'));
        t.equal(pkg.main, 'resolver');
    });

    resolve('foo', { basedir: dir }, function (err) {
        t.equal(err.message, \"Cannot find module 'foo' from '\" + path.resolve(dir) + \"'\");
        t.equal(err.code, 'MODULE_NOT_FOUND');
    });
});

test('bar', function (t) {
    t.plan(6);
    var dir = path.join(__dirname, 'resolver');

    resolve('foo', { basedir: dir + '/bar' }, function (err, res, pkg) {
        if (err) t.fail(err);
        t.equal(res, path.join(dir, 'bar/node_modules/foo/index.js'));
        t.equal(pkg, undefined);
    });

    resolve('foo', { basedir: dir + '/bar' }, function (err, res, pkg) {
        if (err) t.fail(err);
        t.equal(res, path.join(dir, 'bar/node_modules/foo/index.js'));
        t.equal(pkg, undefined);
    });

    resolve('foo', { basedir: dir + '/bar', 'package': { main: 'bar' } }, function (err, res, pkg) {
        if (err) t.fail(err);
        t.equal(res, path.join(dir, 'bar/node_modules/foo/index.js'));
        t.equal(pkg, undefined);
    });
});

test('baz', function (t) {
    t.plan(4);
    var dir = path.join(__dirname, 'resolver');

    resolve('./baz', { basedir: dir }, function (err, res, pkg) {
        if (err) t.fail(err);
        t.equal(res, path.join(dir, 'baz/quux.js'));
        t.equal(pkg.main, 'quux.js');
    });

    resolve('./baz', { basedir: dir, 'package': { main: 'resolver' } }, function (err, res, pkg) {
        if (err) t.fail(err);
        t.equal(res, path.join(dir, 'baz/quux.js'));
        t.equal(pkg.main, 'quux.js');
    });
});

test('biz', function (t) {
    t.plan(24);
    var dir = path.join(__dirname, 'resolver/biz/node_modules');

    resolve('./grux', { basedir: dir }, function (err, res, pkg) {
        if (err) t.fail(err);
        t.equal(res, path.join(dir, 'grux/index.js'));
        t.equal(pkg, undefined);
    });

    resolve('./grux', { basedir: dir, 'package': { main: 'biz' } }, function (err, res, pkg) {
        if (err) t.fail(err);
        t.equal(res, path.join(dir, 'grux/index.js'));
        t.equal(pkg.main, 'biz');
    });

    resolve('./garply', { basedir: dir }, function (err, res, pkg) {
        if (err) t.fail(err);
        t.equal(res, path.join(dir, 'garply/lib/index.js'));
        t.equal(pkg.main, './lib');
    });

    resolve('./garply', { basedir: dir, 'package': { main: 'biz' } }, function (err, res, pkg) {
        if (err) t.fail(err);
        t.equal(res, path.join(dir, 'garply/lib/index.js'));
        t.equal(pkg.main, './lib');
    });

    resolve('tiv', { basedir: dir + '/grux' }, function (err, res, pkg) {
        if (err) t.fail(err);
        t.equal(res, path.join(dir, 'tiv/index.js'));
        t.equal(pkg, undefined);
    });

    resolve('tiv', { basedir: dir + '/grux', 'package': { main: 'grux' } }, function (err, res, pkg) {
        if (err) t.fail(err);
        t.equal(res, path.join(dir, 'tiv/index.js'));
        t.equal(pkg, undefined);
    });

    resolve('tiv', { basedir: dir + '/garply' }, function (err, res, pkg) {
        if (err) t.fail(err);
        t.equal(res, path.join(dir, 'tiv/index.js'));
        t.equal(pkg, undefined);
    });

    resolve('tiv', { basedir: dir + '/garply', 'package': { main: './lib' } }, function (err, res, pkg) {
        if (err) t.fail(err);
        t.equal(res, path.join(dir, 'tiv/index.js'));
        t.equal(pkg, undefined);
    });

    resolve('grux', { basedir: dir + '/tiv' }, function (err, res, pkg) {
        if (err) t.fail(err);
        t.equal(res, path.join(dir, 'grux/index.js'));
        t.equal(pkg, undefined);
    });

    resolve('grux', { basedir: dir + '/tiv', 'package': { main: 'tiv' } }, function (err, res, pkg) {
        if (err) t.fail(err);
        t.equal(res, path.join(dir, 'grux/index.js'));
        t.equal(pkg, undefined);
    });

    resolve('garply', { basedir: dir + '/tiv' }, function (err, res, pkg) {
        if (err) t.fail(err);
        t.equal(res, path.join(dir, 'garply/lib/index.js'));
        t.equal(pkg.main, './lib');
    });

    resolve('garply', { basedir: dir + '/tiv', 'package': { main: 'tiv' } }, function (err, res, pkg) {
        if (err) t.fail(err);
        t.equal(res, path.join(dir, 'garply/lib/index.js'));
        t.equal(pkg.main, './lib');
    });
});

test('quux', function (t) {
    t.plan(2);
    var dir = path.join(__dirname, 'resolver/quux');

    resolve('./foo', { basedir: dir, 'package': { main: 'quux' } }, function (err, res, pkg) {
        if (err) t.fail(err);
        t.equal(res, path.join(dir, 'foo/index.js'));
        t.equal(pkg.main, 'quux');
    });
});

test('normalize', function (t) {
    t.plan(2);
    var dir = path.join(__dirname, 'resolver/biz/node_modules/grux');

    resolve('../grux', { basedir: dir }, function (err, res, pkg) {
        if (err) t.fail(err);
        t.equal(res, path.join(dir, 'index.js'));
        t.equal(pkg, undefined);
    });
});

test('cup', function (t) {
    t.plan(4);
    var dir = path.join(__dirname, 'resolver');

    resolve('./cup', { basedir: dir, extensions: ['.js', '.coffee'] }, function (err, res) {
        if (err) t.fail(err);
        t.equal(res, path.join(dir, 'cup.coffee'));
    });

    resolve('./cup.coffee', { basedir: dir }, function (err, res) {
        if (err) t.fail(err);
        t.equal(res, path.join(dir, 'cup.coffee'));
    });

    resolve('./cup', { basedir: dir, extensions: ['.js'] }, function (err, res) {
        t.equal(err.message, \"Cannot find module './cup' from '\" + path.resolve(dir) + \"'\");
        t.equal(err.code, 'MODULE_NOT_FOUND');
    });
});

test('mug', function (t) {
    t.plan(3);
    var dir = path.join(__dirname, 'resolver');

    resolve('./mug', { basedir: dir }, function (err, res) {
        if (err) t.fail(err);
        t.equal(res, path.join(dir, 'mug.js'));
    });

    resolve('./mug', { basedir: dir, extensions: ['.coffee', '.js'] }, function (err, res) {
        if (err) t.fail(err);
        t.equal(res, path.join(dir, '/mug.coffee'));
    });

    resolve('./mug', { basedir: dir, extensions: ['.js', '.coffee'] }, function (err, res) {
        t.equal(res, path.join(dir, '/mug.js'));
    });
});

test('other path', function (t) {
    t.plan(6);
    var resolverDir = path.join(__dirname, 'resolver');
    var dir = path.join(resolverDir, 'bar');
    var otherDir = path.join(resolverDir, 'other_path');

    resolve('root', { basedir: dir, paths: [otherDir] }, function (err, res) {
        if (err) t.fail(err);
        t.equal(res, path.join(resolverDir, 'other_path/root.js'));
    });

    resolve('lib/other-lib', { basedir: dir, paths: [otherDir] }, function (err, res) {
        if (err) t.fail(err);
        t.equal(res, path.join(resolverDir, 'other_path/lib/other-lib.js'));
    });

    resolve('root', { basedir: dir }, function (err, res) {
        t.equal(err.message, \"Cannot find module 'root' from '\" + path.resolve(dir) + \"'\");
        t.equal(err.code, 'MODULE_NOT_FOUND');
    });

    resolve('zzz', { basedir: dir, paths: [otherDir] }, function (err, res) {
        t.equal(err.message, \"Cannot find module 'zzz' from '\" + path.resolve(dir) + \"'\");
        t.equal(err.code, 'MODULE_NOT_FOUND');
    });
});

test('incorrect main', function (t) {
    t.plan(1);

    var resolverDir = path.join(__dirname, 'resolver');
    var dir = path.join(resolverDir, 'incorrect_main');

    resolve('./incorrect_main', { basedir: resolverDir }, function (err, res, pkg) {
        if (err) t.fail(err);
        t.equal(res, path.join(dir, 'index.js'));
    });
});

test('without basedir', function (t) {
    t.plan(1);

    var dir = path.join(__dirname, 'resolver/without_basedir');
    var tester = require(path.join(dir, 'main.js'));

    tester(t, function (err, res, pkg) {
        if (err) {
            t.fail(err);
        } else {
            t.equal(res, path.join(dir, 'node_modules/mymodule.js'));
        }
    });
});

test('#25: node modules with the same name as node stdlib modules', function (t) {
    t.plan(1);

    var resolverDir = path.join(__dirname, 'resolver/punycode');

    resolve('punycode', { basedir: resolverDir }, function (err, res, pkg) {
        if (err) t.fail(err);
        t.equal(res, path.join(resolverDir, 'node_modules/punycode/index.js'));
    });
});

test('#52 - incorrectly resolves module-paths like \"./someFolder/\" when there is a file of the same name', function (t) {
    t.plan(2);

    var dir = path.join(__dirname, 'resolver');

    resolve('./foo', { basedir: path.join(dir, 'same_names') }, function (err, res, pkg) {
        if (err) t.fail(err);
        t.equal(res, path.join(dir, 'same_names/foo.js'));
    });

    resolve('./foo/', { basedir: path.join(dir, 'same_names') }, function (err, res, pkg) {
        if (err) t.fail(err);
        t.equal(res, path.join(dir, 'same_names/foo/index.js'));
    });
});

test('async: #121 - treating an existing file as a dir when no basedir', function (t) {
    var testFile = path.basename(__filename);

    t.test('sanity check', function (st) {
        st.plan(1);
        resolve('./' + testFile, function (err, res, pkg) {
            if (err) t.fail(err);
            st.equal(res, __filename, 'sanity check');
        });
    });

    t.test('with a fake directory', function (st) {
        st.plan(4);

        resolve('./' + testFile + '/blah', function (err, res, pkg) {
            st.ok(err, 'there is an error');
            st.notOk(res, 'no result');

            st.equal(err && err.code, 'MODULE_NOT_FOUND', 'error code matches require.resolve');
            st.equal(
                err && err.message,
                'Cannot find module \\'./' + testFile + '/blah\\' from \\'' + __dirname + '\\'',
                'can not find nonexistent module'
            );
            st.end();
        });
    });

    t.end();
});

test('async dot main', function (t) {
    var start = new Date();
    t.plan(3);
    resolve('./resolver/dot_main', function (err, ret) {
        t.notOk(err);
        t.equal(ret, path.join(__dirname, 'resolver/dot_main/index.js'));
        t.ok(new Date() - start < 50, 'resolve.sync timedout');
        t.end();
    });
});

test('async dot slash main', function (t) {
    var start = new Date();
    t.plan(3);
    resolve('./resolver/dot_slash_main', function (err, ret) {
        t.notOk(err);
        t.equal(ret, path.join(__dirname, 'resolver/dot_slash_main/index.js'));
        t.ok(new Date() - start < 50, 'resolve.sync timedout');
        t.end();
    });
});
";
        
        $__internal_a0c929530a51806e8d38e64f0ab61cd19b3a1c45bc3a689a3be0d353b8f5a9d8->leave($__internal_a0c929530a51806e8d38e64f0ab61cd19b3a1c45bc3a689a3be0d353b8f5a9d8_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/resolve/test/resolver.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var path = require('path');
var test = require('tape');
var resolve = require('../');

test('async foo', function (t) {
    t.plan(10);
    var dir = path.join(__dirname, 'resolver');

    resolve('./foo', { basedir: dir }, function (err, res, pkg) {
        if (err) t.fail(err);
        t.equal(res, path.join(dir, 'foo.js'));
        t.equal(pkg && pkg.name, 'resolve');
    });

    resolve('./foo.js', { basedir: dir }, function (err, res, pkg) {
        if (err) t.fail(err);
        t.equal(res, path.join(dir, 'foo.js'));
        t.equal(pkg && pkg.name, 'resolve');
    });

    resolve('./foo', { basedir: dir, 'package': { main: 'resolver' } }, function (err, res, pkg) {
        if (err) t.fail(err);
        t.equal(res, path.join(dir, 'foo.js'));
        t.equal(pkg && pkg.main, 'resolver');
    });

    resolve('./foo.js', { basedir: dir, 'package': { main: 'resolver' } }, function (err, res, pkg) {
        if (err) t.fail(err);
        t.equal(res, path.join(dir, 'foo.js'));
        t.equal(pkg.main, 'resolver');
    });

    resolve('foo', { basedir: dir }, function (err) {
        t.equal(err.message, \"Cannot find module 'foo' from '\" + path.resolve(dir) + \"'\");
        t.equal(err.code, 'MODULE_NOT_FOUND');
    });
});

test('bar', function (t) {
    t.plan(6);
    var dir = path.join(__dirname, 'resolver');

    resolve('foo', { basedir: dir + '/bar' }, function (err, res, pkg) {
        if (err) t.fail(err);
        t.equal(res, path.join(dir, 'bar/node_modules/foo/index.js'));
        t.equal(pkg, undefined);
    });

    resolve('foo', { basedir: dir + '/bar' }, function (err, res, pkg) {
        if (err) t.fail(err);
        t.equal(res, path.join(dir, 'bar/node_modules/foo/index.js'));
        t.equal(pkg, undefined);
    });

    resolve('foo', { basedir: dir + '/bar', 'package': { main: 'bar' } }, function (err, res, pkg) {
        if (err) t.fail(err);
        t.equal(res, path.join(dir, 'bar/node_modules/foo/index.js'));
        t.equal(pkg, undefined);
    });
});

test('baz', function (t) {
    t.plan(4);
    var dir = path.join(__dirname, 'resolver');

    resolve('./baz', { basedir: dir }, function (err, res, pkg) {
        if (err) t.fail(err);
        t.equal(res, path.join(dir, 'baz/quux.js'));
        t.equal(pkg.main, 'quux.js');
    });

    resolve('./baz', { basedir: dir, 'package': { main: 'resolver' } }, function (err, res, pkg) {
        if (err) t.fail(err);
        t.equal(res, path.join(dir, 'baz/quux.js'));
        t.equal(pkg.main, 'quux.js');
    });
});

test('biz', function (t) {
    t.plan(24);
    var dir = path.join(__dirname, 'resolver/biz/node_modules');

    resolve('./grux', { basedir: dir }, function (err, res, pkg) {
        if (err) t.fail(err);
        t.equal(res, path.join(dir, 'grux/index.js'));
        t.equal(pkg, undefined);
    });

    resolve('./grux', { basedir: dir, 'package': { main: 'biz' } }, function (err, res, pkg) {
        if (err) t.fail(err);
        t.equal(res, path.join(dir, 'grux/index.js'));
        t.equal(pkg.main, 'biz');
    });

    resolve('./garply', { basedir: dir }, function (err, res, pkg) {
        if (err) t.fail(err);
        t.equal(res, path.join(dir, 'garply/lib/index.js'));
        t.equal(pkg.main, './lib');
    });

    resolve('./garply', { basedir: dir, 'package': { main: 'biz' } }, function (err, res, pkg) {
        if (err) t.fail(err);
        t.equal(res, path.join(dir, 'garply/lib/index.js'));
        t.equal(pkg.main, './lib');
    });

    resolve('tiv', { basedir: dir + '/grux' }, function (err, res, pkg) {
        if (err) t.fail(err);
        t.equal(res, path.join(dir, 'tiv/index.js'));
        t.equal(pkg, undefined);
    });

    resolve('tiv', { basedir: dir + '/grux', 'package': { main: 'grux' } }, function (err, res, pkg) {
        if (err) t.fail(err);
        t.equal(res, path.join(dir, 'tiv/index.js'));
        t.equal(pkg, undefined);
    });

    resolve('tiv', { basedir: dir + '/garply' }, function (err, res, pkg) {
        if (err) t.fail(err);
        t.equal(res, path.join(dir, 'tiv/index.js'));
        t.equal(pkg, undefined);
    });

    resolve('tiv', { basedir: dir + '/garply', 'package': { main: './lib' } }, function (err, res, pkg) {
        if (err) t.fail(err);
        t.equal(res, path.join(dir, 'tiv/index.js'));
        t.equal(pkg, undefined);
    });

    resolve('grux', { basedir: dir + '/tiv' }, function (err, res, pkg) {
        if (err) t.fail(err);
        t.equal(res, path.join(dir, 'grux/index.js'));
        t.equal(pkg, undefined);
    });

    resolve('grux', { basedir: dir + '/tiv', 'package': { main: 'tiv' } }, function (err, res, pkg) {
        if (err) t.fail(err);
        t.equal(res, path.join(dir, 'grux/index.js'));
        t.equal(pkg, undefined);
    });

    resolve('garply', { basedir: dir + '/tiv' }, function (err, res, pkg) {
        if (err) t.fail(err);
        t.equal(res, path.join(dir, 'garply/lib/index.js'));
        t.equal(pkg.main, './lib');
    });

    resolve('garply', { basedir: dir + '/tiv', 'package': { main: 'tiv' } }, function (err, res, pkg) {
        if (err) t.fail(err);
        t.equal(res, path.join(dir, 'garply/lib/index.js'));
        t.equal(pkg.main, './lib');
    });
});

test('quux', function (t) {
    t.plan(2);
    var dir = path.join(__dirname, 'resolver/quux');

    resolve('./foo', { basedir: dir, 'package': { main: 'quux' } }, function (err, res, pkg) {
        if (err) t.fail(err);
        t.equal(res, path.join(dir, 'foo/index.js'));
        t.equal(pkg.main, 'quux');
    });
});

test('normalize', function (t) {
    t.plan(2);
    var dir = path.join(__dirname, 'resolver/biz/node_modules/grux');

    resolve('../grux', { basedir: dir }, function (err, res, pkg) {
        if (err) t.fail(err);
        t.equal(res, path.join(dir, 'index.js'));
        t.equal(pkg, undefined);
    });
});

test('cup', function (t) {
    t.plan(4);
    var dir = path.join(__dirname, 'resolver');

    resolve('./cup', { basedir: dir, extensions: ['.js', '.coffee'] }, function (err, res) {
        if (err) t.fail(err);
        t.equal(res, path.join(dir, 'cup.coffee'));
    });

    resolve('./cup.coffee', { basedir: dir }, function (err, res) {
        if (err) t.fail(err);
        t.equal(res, path.join(dir, 'cup.coffee'));
    });

    resolve('./cup', { basedir: dir, extensions: ['.js'] }, function (err, res) {
        t.equal(err.message, \"Cannot find module './cup' from '\" + path.resolve(dir) + \"'\");
        t.equal(err.code, 'MODULE_NOT_FOUND');
    });
});

test('mug', function (t) {
    t.plan(3);
    var dir = path.join(__dirname, 'resolver');

    resolve('./mug', { basedir: dir }, function (err, res) {
        if (err) t.fail(err);
        t.equal(res, path.join(dir, 'mug.js'));
    });

    resolve('./mug', { basedir: dir, extensions: ['.coffee', '.js'] }, function (err, res) {
        if (err) t.fail(err);
        t.equal(res, path.join(dir, '/mug.coffee'));
    });

    resolve('./mug', { basedir: dir, extensions: ['.js', '.coffee'] }, function (err, res) {
        t.equal(res, path.join(dir, '/mug.js'));
    });
});

test('other path', function (t) {
    t.plan(6);
    var resolverDir = path.join(__dirname, 'resolver');
    var dir = path.join(resolverDir, 'bar');
    var otherDir = path.join(resolverDir, 'other_path');

    resolve('root', { basedir: dir, paths: [otherDir] }, function (err, res) {
        if (err) t.fail(err);
        t.equal(res, path.join(resolverDir, 'other_path/root.js'));
    });

    resolve('lib/other-lib', { basedir: dir, paths: [otherDir] }, function (err, res) {
        if (err) t.fail(err);
        t.equal(res, path.join(resolverDir, 'other_path/lib/other-lib.js'));
    });

    resolve('root', { basedir: dir }, function (err, res) {
        t.equal(err.message, \"Cannot find module 'root' from '\" + path.resolve(dir) + \"'\");
        t.equal(err.code, 'MODULE_NOT_FOUND');
    });

    resolve('zzz', { basedir: dir, paths: [otherDir] }, function (err, res) {
        t.equal(err.message, \"Cannot find module 'zzz' from '\" + path.resolve(dir) + \"'\");
        t.equal(err.code, 'MODULE_NOT_FOUND');
    });
});

test('incorrect main', function (t) {
    t.plan(1);

    var resolverDir = path.join(__dirname, 'resolver');
    var dir = path.join(resolverDir, 'incorrect_main');

    resolve('./incorrect_main', { basedir: resolverDir }, function (err, res, pkg) {
        if (err) t.fail(err);
        t.equal(res, path.join(dir, 'index.js'));
    });
});

test('without basedir', function (t) {
    t.plan(1);

    var dir = path.join(__dirname, 'resolver/without_basedir');
    var tester = require(path.join(dir, 'main.js'));

    tester(t, function (err, res, pkg) {
        if (err) {
            t.fail(err);
        } else {
            t.equal(res, path.join(dir, 'node_modules/mymodule.js'));
        }
    });
});

test('#25: node modules with the same name as node stdlib modules', function (t) {
    t.plan(1);

    var resolverDir = path.join(__dirname, 'resolver/punycode');

    resolve('punycode', { basedir: resolverDir }, function (err, res, pkg) {
        if (err) t.fail(err);
        t.equal(res, path.join(resolverDir, 'node_modules/punycode/index.js'));
    });
});

test('#52 - incorrectly resolves module-paths like \"./someFolder/\" when there is a file of the same name', function (t) {
    t.plan(2);

    var dir = path.join(__dirname, 'resolver');

    resolve('./foo', { basedir: path.join(dir, 'same_names') }, function (err, res, pkg) {
        if (err) t.fail(err);
        t.equal(res, path.join(dir, 'same_names/foo.js'));
    });

    resolve('./foo/', { basedir: path.join(dir, 'same_names') }, function (err, res, pkg) {
        if (err) t.fail(err);
        t.equal(res, path.join(dir, 'same_names/foo/index.js'));
    });
});

test('async: #121 - treating an existing file as a dir when no basedir', function (t) {
    var testFile = path.basename(__filename);

    t.test('sanity check', function (st) {
        st.plan(1);
        resolve('./' + testFile, function (err, res, pkg) {
            if (err) t.fail(err);
            st.equal(res, __filename, 'sanity check');
        });
    });

    t.test('with a fake directory', function (st) {
        st.plan(4);

        resolve('./' + testFile + '/blah', function (err, res, pkg) {
            st.ok(err, 'there is an error');
            st.notOk(res, 'no result');

            st.equal(err && err.code, 'MODULE_NOT_FOUND', 'error code matches require.resolve');
            st.equal(
                err && err.message,
                'Cannot find module \\'./' + testFile + '/blah\\' from \\'' + __dirname + '\\'',
                'can not find nonexistent module'
            );
            st.end();
        });
    });

    t.end();
});

test('async dot main', function (t) {
    var start = new Date();
    t.plan(3);
    resolve('./resolver/dot_main', function (err, ret) {
        t.notOk(err);
        t.equal(ret, path.join(__dirname, 'resolver/dot_main/index.js'));
        t.ok(new Date() - start < 50, 'resolve.sync timedout');
        t.end();
    });
});

test('async dot slash main', function (t) {
    var start = new Date();
    t.plan(3);
    resolve('./resolver/dot_slash_main', function (err, ret) {
        t.notOk(err);
        t.equal(ret, path.join(__dirname, 'resolver/dot_slash_main/index.js'));
        t.ok(new Date() - start < 50, 'resolve.sync timedout');
        t.end();
    });
});
", "node_modules/resolve/test/resolver.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/resolve/test/resolver.js");
    }
}
