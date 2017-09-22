<?php

/* node_modules/fsevents/node_modules/hawk/test/index.js */
class __TwigTemplate_d7234a726ef3250b2fd811c792c9532d1ae041005030f011dd24573b45ce8510 extends Twig_Template
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
        $__internal_6cec32d49d8a4976d76ce3e17faf0d79206b93ed4cfacb9bf9ea8c07cf8cdf54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cec32d49d8a4976d76ce3e17faf0d79206b93ed4cfacb9bf9ea8c07cf8cdf54->enter($__internal_6cec32d49d8a4976d76ce3e17faf0d79206b93ed4cfacb9bf9ea8c07cf8cdf54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/hawk/test/index.js"));

        // line 1
        echo "// Load modules

var Url = require('url');
var Code = require('code');
var Hawk = require('../lib');
var Lab = require('lab');


// Declare internals

var internals = {};


// Test shortcuts

var lab = exports.lab = Lab.script();
var describe = lab.experiment;
var it = lab.test;
var expect = Code.expect;


describe('Hawk', function () {

    var credentialsFunc = function (id, callback) {

        var credentials = {
            id: id,
            key: 'werxhqb98rpaxn39848xrunpaw3489ruxnpa98w4rxn',
            algorithm: (id === '1' ? 'sha1' : 'sha256'),
            user: 'steve'
        };

        return callback(null, credentials);
    };

    it('generates a header then successfully parse it (configuration)', function (done) {

        var req = {
            method: 'GET',
            url: '/resource/4?filter=a',
            host: 'example.com',
            port: 8080
        };

        credentialsFunc('123456', function (err, credentials1) {

            req.authorization = Hawk.client.header(Url.parse('http://example.com:8080/resource/4?filter=a'), req.method, { credentials: credentials1, ext: 'some-app-data' }).field;
            expect(req.authorization).to.exist();

            Hawk.server.authenticate(req, credentialsFunc, {}, function (err, credentials2, artifacts) {

                expect(err).to.not.exist();
                expect(credentials2.user).to.equal('steve');
                expect(artifacts.ext).to.equal('some-app-data');
                done();
            });
        });
    });

    it('generates a header then successfully parse it (node request)', function (done) {

        var req = {
            method: 'POST',
            url: '/resource/4?filter=a',
            headers: {
                host: 'example.com:8080',
                'content-type': 'text/plain;x=y'
            }
        };

        var payload = 'some not so random text';

        credentialsFunc('123456', function (err, credentials1) {

            var reqHeader = Hawk.client.header('http://example.com:8080/resource/4?filter=a', req.method, { credentials: credentials1, ext: 'some-app-data', payload: payload, contentType: req.headers['content-type'] });
            req.headers.authorization = reqHeader.field;

            Hawk.server.authenticate(req, credentialsFunc, {}, function (err, credentials2, artifacts) {

                expect(err).to.not.exist();
                expect(credentials2.user).to.equal('steve');
                expect(artifacts.ext).to.equal('some-app-data');
                expect(Hawk.server.authenticatePayload(payload, credentials2, artifacts, req.headers['content-type'])).to.equal(true);

                var res = {
                    headers: {
                        'content-type': 'text/plain'
                    }
                };

                res.headers['server-authorization'] = Hawk.server.header(credentials2, artifacts, { payload: 'some reply', contentType: 'text/plain', ext: 'response-specific' });
                expect(res.headers['server-authorization']).to.exist();

                expect(Hawk.client.authenticate(res, credentials2, artifacts, { payload: 'some reply' })).to.equal(true);
                done();
            });
        });
    });

    it('generates a header then successfully parse it (absolute request uri)', function (done) {

        var req = {
            method: 'POST',
            url: 'http://example.com:8080/resource/4?filter=a',
            headers: {
                host: 'example.com:8080',
                'content-type': 'text/plain;x=y'
            }
        };

        var payload = 'some not so random text';

        credentialsFunc('123456', function (err, credentials1) {

            var reqHeader = Hawk.client.header('http://example.com:8080/resource/4?filter=a', req.method, { credentials: credentials1, ext: 'some-app-data', payload: payload, contentType: req.headers['content-type'] });
            req.headers.authorization = reqHeader.field;

            Hawk.server.authenticate(req, credentialsFunc, {}, function (err, credentials2, artifacts) {

                expect(err).to.not.exist();
                expect(credentials2.user).to.equal('steve');
                expect(artifacts.ext).to.equal('some-app-data');
                expect(Hawk.server.authenticatePayload(payload, credentials2, artifacts, req.headers['content-type'])).to.equal(true);

                var res = {
                    headers: {
                        'content-type': 'text/plain'
                    }
                };

                res.headers['server-authorization'] = Hawk.server.header(credentials2, artifacts, { payload: 'some reply', contentType: 'text/plain', ext: 'response-specific' });
                expect(res.headers['server-authorization']).to.exist();

                expect(Hawk.client.authenticate(res, credentials2, artifacts, { payload: 'some reply' })).to.equal(true);
                done();
            });
        });
    });

    it('generates a header then successfully parse it (no server header options)', function (done) {

        var req = {
            method: 'POST',
            url: '/resource/4?filter=a',
            headers: {
                host: 'example.com:8080',
                'content-type': 'text/plain;x=y'
            }
        };

        var payload = 'some not so random text';

        credentialsFunc('123456', function (err, credentials1) {

            var reqHeader = Hawk.client.header('http://example.com:8080/resource/4?filter=a', req.method, { credentials: credentials1, ext: 'some-app-data', payload: payload, contentType: req.headers['content-type'] });
            req.headers.authorization = reqHeader.field;

            Hawk.server.authenticate(req, credentialsFunc, {}, function (err, credentials2, artifacts) {

                expect(err).to.not.exist();
                expect(credentials2.user).to.equal('steve');
                expect(artifacts.ext).to.equal('some-app-data');
                expect(Hawk.server.authenticatePayload(payload, credentials2, artifacts, req.headers['content-type'])).to.equal(true);

                var res = {
                    headers: {
                        'content-type': 'text/plain'
                    }
                };

                res.headers['server-authorization'] = Hawk.server.header(credentials2, artifacts);
                expect(res.headers['server-authorization']).to.exist();

                expect(Hawk.client.authenticate(res, credentials2, artifacts)).to.equal(true);
                done();
            });
        });
    });

    it('generates a header then fails to parse it (missing server header hash)', function (done) {

        var req = {
            method: 'POST',
            url: '/resource/4?filter=a',
            headers: {
                host: 'example.com:8080',
                'content-type': 'text/plain;x=y'
            }
        };

        var payload = 'some not so random text';

        credentialsFunc('123456', function (err, credentials1) {

            var reqHeader = Hawk.client.header('http://example.com:8080/resource/4?filter=a', req.method, { credentials: credentials1, ext: 'some-app-data', payload: payload, contentType: req.headers['content-type'] });
            req.headers.authorization = reqHeader.field;

            Hawk.server.authenticate(req, credentialsFunc, {}, function (err, credentials2, artifacts) {

                expect(err).to.not.exist();
                expect(credentials2.user).to.equal('steve');
                expect(artifacts.ext).to.equal('some-app-data');
                expect(Hawk.server.authenticatePayload(payload, credentials2, artifacts, req.headers['content-type'])).to.equal(true);

                var res = {
                    headers: {
                        'content-type': 'text/plain'
                    }
                };

                res.headers['server-authorization'] = Hawk.server.header(credentials2, artifacts);
                expect(res.headers['server-authorization']).to.exist();

                expect(Hawk.client.authenticate(res, credentials2, artifacts, { payload: 'some reply' })).to.equal(false);
                done();
            });
        });
    });

    it('generates a header then successfully parse it (with hash)', function (done) {

        var req = {
            method: 'GET',
            url: '/resource/4?filter=a',
            host: 'example.com',
            port: 8080
        };

        credentialsFunc('123456', function (err, credentials1) {

            req.authorization = Hawk.client.header('http://example.com:8080/resource/4?filter=a', req.method, { credentials: credentials1, payload: 'hola!', ext: 'some-app-data' }).field;
            Hawk.server.authenticate(req, credentialsFunc, {}, function (err, credentials2, artifacts) {

                expect(err).to.not.exist();
                expect(credentials2.user).to.equal('steve');
                expect(artifacts.ext).to.equal('some-app-data');
                done();
            });
        });
    });

    it('generates a header then successfully parse it then validate payload', function (done) {

        var req = {
            method: 'GET',
            url: '/resource/4?filter=a',
            host: 'example.com',
            port: 8080
        };

        credentialsFunc('123456', function (err, credentials1) {

            req.authorization = Hawk.client.header('http://example.com:8080/resource/4?filter=a', req.method, { credentials: credentials1, payload: 'hola!', ext: 'some-app-data' }).field;
            Hawk.server.authenticate(req, credentialsFunc, {}, function (err, credentials2, artifacts) {

                expect(err).to.not.exist();
                expect(credentials2.user).to.equal('steve');
                expect(artifacts.ext).to.equal('some-app-data');
                expect(Hawk.server.authenticatePayload('hola!', credentials2, artifacts)).to.be.true();
                expect(Hawk.server.authenticatePayload('hello!', credentials2, artifacts)).to.be.false();
                done();
            });
        });
    });

    it('generates a header then successfully parses and validates payload', function (done) {

        var req = {
            method: 'GET',
            url: '/resource/4?filter=a',
            host: 'example.com',
            port: 8080
        };

        credentialsFunc('123456', function (err, credentials1) {

            req.authorization = Hawk.client.header('http://example.com:8080/resource/4?filter=a', req.method, { credentials: credentials1, payload: 'hola!', ext: 'some-app-data' }).field;
            Hawk.server.authenticate(req, credentialsFunc, { payload: 'hola!' }, function (err, credentials2, artifacts) {

                expect(err).to.not.exist();
                expect(credentials2.user).to.equal('steve');
                expect(artifacts.ext).to.equal('some-app-data');
                done();
            });
        });
    });

    it('generates a header then successfully parse it (app)', function (done) {

        var req = {
            method: 'GET',
            url: '/resource/4?filter=a',
            host: 'example.com',
            port: 8080
        };

        credentialsFunc('123456', function (err, credentials1) {

            req.authorization = Hawk.client.header('http://example.com:8080/resource/4?filter=a', req.method, { credentials: credentials1, ext: 'some-app-data', app: 'asd23ased' }).field;
            Hawk.server.authenticate(req, credentialsFunc, {}, function (err, credentials2, artifacts) {

                expect(err).to.not.exist();
                expect(credentials2.user).to.equal('steve');
                expect(artifacts.ext).to.equal('some-app-data');
                expect(artifacts.app).to.equal('asd23ased');
                done();
            });
        });
    });

    it('generates a header then successfully parse it (app, dlg)', function (done) {

        var req = {
            method: 'GET',
            url: '/resource/4?filter=a',
            host: 'example.com',
            port: 8080
        };

        credentialsFunc('123456', function (err, credentials1) {

            req.authorization = Hawk.client.header('http://example.com:8080/resource/4?filter=a', req.method, { credentials: credentials1, ext: 'some-app-data', app: 'asd23ased', dlg: '23434szr3q4d' }).field;
            Hawk.server.authenticate(req, credentialsFunc, {}, function (err, credentials2, artifacts) {

                expect(err).to.not.exist();
                expect(credentials2.user).to.equal('steve');
                expect(artifacts.ext).to.equal('some-app-data');
                expect(artifacts.app).to.equal('asd23ased');
                expect(artifacts.dlg).to.equal('23434szr3q4d');
                done();
            });
        });
    });

    it('generates a header then fail authentication due to bad hash', function (done) {

        var req = {
            method: 'GET',
            url: '/resource/4?filter=a',
            host: 'example.com',
            port: 8080
        };

        credentialsFunc('123456', function (err, credentials1) {

            req.authorization = Hawk.client.header('http://example.com:8080/resource/4?filter=a', req.method, { credentials: credentials1, payload: 'hola!', ext: 'some-app-data' }).field;
            Hawk.server.authenticate(req, credentialsFunc, { payload: 'byebye!' }, function (err, credentials2, artifacts) {

                expect(err).to.exist();
                expect(err.output.payload.message).to.equal('Bad payload hash');
                done();
            });
        });
    });

    it('generates a header for one resource then fail to authenticate another', function (done) {

        var req = {
            method: 'GET',
            url: '/resource/4?filter=a',
            host: 'example.com',
            port: 8080
        };

        credentialsFunc('123456', function (err, credentials1) {

            req.authorization = Hawk.client.header('http://example.com:8080/resource/4?filter=a', req.method, { credentials: credentials1, ext: 'some-app-data' }).field;
            req.url = '/something/else';

            Hawk.server.authenticate(req, credentialsFunc, {}, function (err, credentials2, artifacts) {

                expect(err).to.exist();
                expect(credentials2).to.exist();
                done();
            });
        });
    });
});
";
        
        $__internal_6cec32d49d8a4976d76ce3e17faf0d79206b93ed4cfacb9bf9ea8c07cf8cdf54->leave($__internal_6cec32d49d8a4976d76ce3e17faf0d79206b93ed4cfacb9bf9ea8c07cf8cdf54_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/hawk/test/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Load modules

var Url = require('url');
var Code = require('code');
var Hawk = require('../lib');
var Lab = require('lab');


// Declare internals

var internals = {};


// Test shortcuts

var lab = exports.lab = Lab.script();
var describe = lab.experiment;
var it = lab.test;
var expect = Code.expect;


describe('Hawk', function () {

    var credentialsFunc = function (id, callback) {

        var credentials = {
            id: id,
            key: 'werxhqb98rpaxn39848xrunpaw3489ruxnpa98w4rxn',
            algorithm: (id === '1' ? 'sha1' : 'sha256'),
            user: 'steve'
        };

        return callback(null, credentials);
    };

    it('generates a header then successfully parse it (configuration)', function (done) {

        var req = {
            method: 'GET',
            url: '/resource/4?filter=a',
            host: 'example.com',
            port: 8080
        };

        credentialsFunc('123456', function (err, credentials1) {

            req.authorization = Hawk.client.header(Url.parse('http://example.com:8080/resource/4?filter=a'), req.method, { credentials: credentials1, ext: 'some-app-data' }).field;
            expect(req.authorization).to.exist();

            Hawk.server.authenticate(req, credentialsFunc, {}, function (err, credentials2, artifacts) {

                expect(err).to.not.exist();
                expect(credentials2.user).to.equal('steve');
                expect(artifacts.ext).to.equal('some-app-data');
                done();
            });
        });
    });

    it('generates a header then successfully parse it (node request)', function (done) {

        var req = {
            method: 'POST',
            url: '/resource/4?filter=a',
            headers: {
                host: 'example.com:8080',
                'content-type': 'text/plain;x=y'
            }
        };

        var payload = 'some not so random text';

        credentialsFunc('123456', function (err, credentials1) {

            var reqHeader = Hawk.client.header('http://example.com:8080/resource/4?filter=a', req.method, { credentials: credentials1, ext: 'some-app-data', payload: payload, contentType: req.headers['content-type'] });
            req.headers.authorization = reqHeader.field;

            Hawk.server.authenticate(req, credentialsFunc, {}, function (err, credentials2, artifacts) {

                expect(err).to.not.exist();
                expect(credentials2.user).to.equal('steve');
                expect(artifacts.ext).to.equal('some-app-data');
                expect(Hawk.server.authenticatePayload(payload, credentials2, artifacts, req.headers['content-type'])).to.equal(true);

                var res = {
                    headers: {
                        'content-type': 'text/plain'
                    }
                };

                res.headers['server-authorization'] = Hawk.server.header(credentials2, artifacts, { payload: 'some reply', contentType: 'text/plain', ext: 'response-specific' });
                expect(res.headers['server-authorization']).to.exist();

                expect(Hawk.client.authenticate(res, credentials2, artifacts, { payload: 'some reply' })).to.equal(true);
                done();
            });
        });
    });

    it('generates a header then successfully parse it (absolute request uri)', function (done) {

        var req = {
            method: 'POST',
            url: 'http://example.com:8080/resource/4?filter=a',
            headers: {
                host: 'example.com:8080',
                'content-type': 'text/plain;x=y'
            }
        };

        var payload = 'some not so random text';

        credentialsFunc('123456', function (err, credentials1) {

            var reqHeader = Hawk.client.header('http://example.com:8080/resource/4?filter=a', req.method, { credentials: credentials1, ext: 'some-app-data', payload: payload, contentType: req.headers['content-type'] });
            req.headers.authorization = reqHeader.field;

            Hawk.server.authenticate(req, credentialsFunc, {}, function (err, credentials2, artifacts) {

                expect(err).to.not.exist();
                expect(credentials2.user).to.equal('steve');
                expect(artifacts.ext).to.equal('some-app-data');
                expect(Hawk.server.authenticatePayload(payload, credentials2, artifacts, req.headers['content-type'])).to.equal(true);

                var res = {
                    headers: {
                        'content-type': 'text/plain'
                    }
                };

                res.headers['server-authorization'] = Hawk.server.header(credentials2, artifacts, { payload: 'some reply', contentType: 'text/plain', ext: 'response-specific' });
                expect(res.headers['server-authorization']).to.exist();

                expect(Hawk.client.authenticate(res, credentials2, artifacts, { payload: 'some reply' })).to.equal(true);
                done();
            });
        });
    });

    it('generates a header then successfully parse it (no server header options)', function (done) {

        var req = {
            method: 'POST',
            url: '/resource/4?filter=a',
            headers: {
                host: 'example.com:8080',
                'content-type': 'text/plain;x=y'
            }
        };

        var payload = 'some not so random text';

        credentialsFunc('123456', function (err, credentials1) {

            var reqHeader = Hawk.client.header('http://example.com:8080/resource/4?filter=a', req.method, { credentials: credentials1, ext: 'some-app-data', payload: payload, contentType: req.headers['content-type'] });
            req.headers.authorization = reqHeader.field;

            Hawk.server.authenticate(req, credentialsFunc, {}, function (err, credentials2, artifacts) {

                expect(err).to.not.exist();
                expect(credentials2.user).to.equal('steve');
                expect(artifacts.ext).to.equal('some-app-data');
                expect(Hawk.server.authenticatePayload(payload, credentials2, artifacts, req.headers['content-type'])).to.equal(true);

                var res = {
                    headers: {
                        'content-type': 'text/plain'
                    }
                };

                res.headers['server-authorization'] = Hawk.server.header(credentials2, artifacts);
                expect(res.headers['server-authorization']).to.exist();

                expect(Hawk.client.authenticate(res, credentials2, artifacts)).to.equal(true);
                done();
            });
        });
    });

    it('generates a header then fails to parse it (missing server header hash)', function (done) {

        var req = {
            method: 'POST',
            url: '/resource/4?filter=a',
            headers: {
                host: 'example.com:8080',
                'content-type': 'text/plain;x=y'
            }
        };

        var payload = 'some not so random text';

        credentialsFunc('123456', function (err, credentials1) {

            var reqHeader = Hawk.client.header('http://example.com:8080/resource/4?filter=a', req.method, { credentials: credentials1, ext: 'some-app-data', payload: payload, contentType: req.headers['content-type'] });
            req.headers.authorization = reqHeader.field;

            Hawk.server.authenticate(req, credentialsFunc, {}, function (err, credentials2, artifacts) {

                expect(err).to.not.exist();
                expect(credentials2.user).to.equal('steve');
                expect(artifacts.ext).to.equal('some-app-data');
                expect(Hawk.server.authenticatePayload(payload, credentials2, artifacts, req.headers['content-type'])).to.equal(true);

                var res = {
                    headers: {
                        'content-type': 'text/plain'
                    }
                };

                res.headers['server-authorization'] = Hawk.server.header(credentials2, artifacts);
                expect(res.headers['server-authorization']).to.exist();

                expect(Hawk.client.authenticate(res, credentials2, artifacts, { payload: 'some reply' })).to.equal(false);
                done();
            });
        });
    });

    it('generates a header then successfully parse it (with hash)', function (done) {

        var req = {
            method: 'GET',
            url: '/resource/4?filter=a',
            host: 'example.com',
            port: 8080
        };

        credentialsFunc('123456', function (err, credentials1) {

            req.authorization = Hawk.client.header('http://example.com:8080/resource/4?filter=a', req.method, { credentials: credentials1, payload: 'hola!', ext: 'some-app-data' }).field;
            Hawk.server.authenticate(req, credentialsFunc, {}, function (err, credentials2, artifacts) {

                expect(err).to.not.exist();
                expect(credentials2.user).to.equal('steve');
                expect(artifacts.ext).to.equal('some-app-data');
                done();
            });
        });
    });

    it('generates a header then successfully parse it then validate payload', function (done) {

        var req = {
            method: 'GET',
            url: '/resource/4?filter=a',
            host: 'example.com',
            port: 8080
        };

        credentialsFunc('123456', function (err, credentials1) {

            req.authorization = Hawk.client.header('http://example.com:8080/resource/4?filter=a', req.method, { credentials: credentials1, payload: 'hola!', ext: 'some-app-data' }).field;
            Hawk.server.authenticate(req, credentialsFunc, {}, function (err, credentials2, artifacts) {

                expect(err).to.not.exist();
                expect(credentials2.user).to.equal('steve');
                expect(artifacts.ext).to.equal('some-app-data');
                expect(Hawk.server.authenticatePayload('hola!', credentials2, artifacts)).to.be.true();
                expect(Hawk.server.authenticatePayload('hello!', credentials2, artifacts)).to.be.false();
                done();
            });
        });
    });

    it('generates a header then successfully parses and validates payload', function (done) {

        var req = {
            method: 'GET',
            url: '/resource/4?filter=a',
            host: 'example.com',
            port: 8080
        };

        credentialsFunc('123456', function (err, credentials1) {

            req.authorization = Hawk.client.header('http://example.com:8080/resource/4?filter=a', req.method, { credentials: credentials1, payload: 'hola!', ext: 'some-app-data' }).field;
            Hawk.server.authenticate(req, credentialsFunc, { payload: 'hola!' }, function (err, credentials2, artifacts) {

                expect(err).to.not.exist();
                expect(credentials2.user).to.equal('steve');
                expect(artifacts.ext).to.equal('some-app-data');
                done();
            });
        });
    });

    it('generates a header then successfully parse it (app)', function (done) {

        var req = {
            method: 'GET',
            url: '/resource/4?filter=a',
            host: 'example.com',
            port: 8080
        };

        credentialsFunc('123456', function (err, credentials1) {

            req.authorization = Hawk.client.header('http://example.com:8080/resource/4?filter=a', req.method, { credentials: credentials1, ext: 'some-app-data', app: 'asd23ased' }).field;
            Hawk.server.authenticate(req, credentialsFunc, {}, function (err, credentials2, artifacts) {

                expect(err).to.not.exist();
                expect(credentials2.user).to.equal('steve');
                expect(artifacts.ext).to.equal('some-app-data');
                expect(artifacts.app).to.equal('asd23ased');
                done();
            });
        });
    });

    it('generates a header then successfully parse it (app, dlg)', function (done) {

        var req = {
            method: 'GET',
            url: '/resource/4?filter=a',
            host: 'example.com',
            port: 8080
        };

        credentialsFunc('123456', function (err, credentials1) {

            req.authorization = Hawk.client.header('http://example.com:8080/resource/4?filter=a', req.method, { credentials: credentials1, ext: 'some-app-data', app: 'asd23ased', dlg: '23434szr3q4d' }).field;
            Hawk.server.authenticate(req, credentialsFunc, {}, function (err, credentials2, artifacts) {

                expect(err).to.not.exist();
                expect(credentials2.user).to.equal('steve');
                expect(artifacts.ext).to.equal('some-app-data');
                expect(artifacts.app).to.equal('asd23ased');
                expect(artifacts.dlg).to.equal('23434szr3q4d');
                done();
            });
        });
    });

    it('generates a header then fail authentication due to bad hash', function (done) {

        var req = {
            method: 'GET',
            url: '/resource/4?filter=a',
            host: 'example.com',
            port: 8080
        };

        credentialsFunc('123456', function (err, credentials1) {

            req.authorization = Hawk.client.header('http://example.com:8080/resource/4?filter=a', req.method, { credentials: credentials1, payload: 'hola!', ext: 'some-app-data' }).field;
            Hawk.server.authenticate(req, credentialsFunc, { payload: 'byebye!' }, function (err, credentials2, artifacts) {

                expect(err).to.exist();
                expect(err.output.payload.message).to.equal('Bad payload hash');
                done();
            });
        });
    });

    it('generates a header for one resource then fail to authenticate another', function (done) {

        var req = {
            method: 'GET',
            url: '/resource/4?filter=a',
            host: 'example.com',
            port: 8080
        };

        credentialsFunc('123456', function (err, credentials1) {

            req.authorization = Hawk.client.header('http://example.com:8080/resource/4?filter=a', req.method, { credentials: credentials1, ext: 'some-app-data' }).field;
            req.url = '/something/else';

            Hawk.server.authenticate(req, credentialsFunc, {}, function (err, credentials2, artifacts) {

                expect(err).to.exist();
                expect(credentials2).to.exist();
                done();
            });
        });
    });
});
", "node_modules/fsevents/node_modules/hawk/test/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/hawk/test/index.js");
    }
}
