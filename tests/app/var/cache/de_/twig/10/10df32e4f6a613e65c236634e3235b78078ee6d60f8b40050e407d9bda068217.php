<?php

/* node_modules/hosted-git-info/index.js */
class __TwigTemplate_f64d0969924cefe8b690c60100884414c79876af2a2849dba3ffb9660be8bfd5 extends Twig_Template
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
        $__internal_133ef50f3213ccaa7d960b671c6c3096e0e2c7e2265815005713bc5b89ea075e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_133ef50f3213ccaa7d960b671c6c3096e0e2c7e2265815005713bc5b89ea075e->enter($__internal_133ef50f3213ccaa7d960b671c6c3096e0e2c7e2265815005713bc5b89ea075e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/hosted-git-info/index.js"));

        // line 1
        echo "'use strict'
var url = require('url')
var gitHosts = require('./git-host-info.js')
var GitHost = module.exports = require('./git-host.js')

var protocolToRepresentationMap = {
  'git+ssh': 'sshurl',
  'git+https': 'https',
  'ssh': 'sshurl',
  'git': 'git'
}

function protocolToRepresentation (protocol) {
  if (protocol.substr(-1) === ':') protocol = protocol.slice(0, -1)
  return protocolToRepresentationMap[protocol] || protocol
}

var authProtocols = {
  'git:': true,
  'https:': true,
  'git+https:': true,
  'http:': true,
  'git+http:': true
}

var cache = {}

module.exports.fromUrl = function (giturl, opts) {
  var key = giturl + JSON.stringify(opts || {})

  if (!(key in cache)) {
    cache[key] = fromUrl(giturl, opts)
  }

  return cache[key]
}

function fromUrl (giturl, opts) {
  if (giturl == null || giturl === '') return
  var url = fixupUnqualifiedGist(
    isGitHubShorthand(giturl) ? 'github:' + giturl : giturl
  )
  var parsed = parseGitUrl(url)
  var shortcutMatch = url.match(new RegExp('^([^:]+):(?:(?:[^@:]+(?:[^@]+)?@)?([^/]*))[/](.+?)(?:[.]git)?(\$|#)'))
  var matches = Object.keys(gitHosts).map(function (gitHostName) {
    try {
      var gitHostInfo = gitHosts[gitHostName]
      var auth = null
      if (parsed.auth && authProtocols[parsed.protocol]) {
        auth = decodeURIComponent(parsed.auth)
      }
      var committish = parsed.hash ? decodeURIComponent(parsed.hash.substr(1)) : null
      var user = null
      var project = null
      var defaultRepresentation = null
      if (shortcutMatch && shortcutMatch[1] === gitHostName) {
        user = shortcutMatch[2] && decodeURIComponent(shortcutMatch[2])
        project = decodeURIComponent(shortcutMatch[3])
        defaultRepresentation = 'shortcut'
      } else {
        if (parsed.host !== gitHostInfo.domain) return
        if (!gitHostInfo.protocols_re.test(parsed.protocol)) return
        if (!parsed.path) return
        var pathmatch = gitHostInfo.pathmatch
        var matched = parsed.path.match(pathmatch)
        if (!matched) return
        if (matched[1] != null) user = decodeURIComponent(matched[1].replace(/^:/, ''))
        if (matched[2] != null) project = decodeURIComponent(matched[2])
        defaultRepresentation = protocolToRepresentation(parsed.protocol)
      }
      return new GitHost(gitHostName, user, auth, project, committish, defaultRepresentation, opts)
    } catch (ex) {
      if (!(ex instanceof URIError)) throw ex
    }
  }).filter(function (gitHostInfo) { return gitHostInfo })
  if (matches.length !== 1) return
  return matches[0]
}

function isGitHubShorthand (arg) {
  // Note: This does not fully test the git ref format.
  // See https://www.kernel.org/pub/software/scm/git/docs/git-check-ref-format.html
  //
  // The only way to do this properly would be to shell out to
  // git-check-ref-format, and as this is a fast sync function,
  // we don't want to do that.  Just let git fail if it turns
  // out that the commit-ish is invalid.
  // GH usernames cannot start with . or -
  return /^[^:@%/\\s.-][^:@%/\\s]*[/][^:@\\s/%]+(?:#.*)?\$/.test(arg)
}

function fixupUnqualifiedGist (giturl) {
  // necessary for round-tripping gists
  var parsed = url.parse(giturl)
  if (parsed.protocol === 'gist:' && parsed.host && !parsed.path) {
    return parsed.protocol + '/' + parsed.host
  } else {
    return giturl
  }
}

function parseGitUrl (giturl) {
  if (typeof giturl !== 'string') giturl = '' + giturl
  var matched = giturl.match(/^([^@]+)@([^:/]+):[/]?((?:[^/]+[/])?[^/]+?)(?:[.]git)?(#.*)?\$/)
  if (!matched) return url.parse(giturl)
  return {
    protocol: 'git+ssh:',
    slashes: true,
    auth: matched[1],
    host: matched[2],
    port: null,
    hostname: matched[2],
    hash: matched[4],
    search: null,
    query: null,
    pathname: '/' + matched[3],
    path: '/' + matched[3],
    href: 'git+ssh://' + matched[1] + '@' + matched[2] +
          '/' + matched[3] + (matched[4] || '')
  }
}
";
        
        $__internal_133ef50f3213ccaa7d960b671c6c3096e0e2c7e2265815005713bc5b89ea075e->leave($__internal_133ef50f3213ccaa7d960b671c6c3096e0e2c7e2265815005713bc5b89ea075e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/hosted-git-info/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict'
var url = require('url')
var gitHosts = require('./git-host-info.js')
var GitHost = module.exports = require('./git-host.js')

var protocolToRepresentationMap = {
  'git+ssh': 'sshurl',
  'git+https': 'https',
  'ssh': 'sshurl',
  'git': 'git'
}

function protocolToRepresentation (protocol) {
  if (protocol.substr(-1) === ':') protocol = protocol.slice(0, -1)
  return protocolToRepresentationMap[protocol] || protocol
}

var authProtocols = {
  'git:': true,
  'https:': true,
  'git+https:': true,
  'http:': true,
  'git+http:': true
}

var cache = {}

module.exports.fromUrl = function (giturl, opts) {
  var key = giturl + JSON.stringify(opts || {})

  if (!(key in cache)) {
    cache[key] = fromUrl(giturl, opts)
  }

  return cache[key]
}

function fromUrl (giturl, opts) {
  if (giturl == null || giturl === '') return
  var url = fixupUnqualifiedGist(
    isGitHubShorthand(giturl) ? 'github:' + giturl : giturl
  )
  var parsed = parseGitUrl(url)
  var shortcutMatch = url.match(new RegExp('^([^:]+):(?:(?:[^@:]+(?:[^@]+)?@)?([^/]*))[/](.+?)(?:[.]git)?(\$|#)'))
  var matches = Object.keys(gitHosts).map(function (gitHostName) {
    try {
      var gitHostInfo = gitHosts[gitHostName]
      var auth = null
      if (parsed.auth && authProtocols[parsed.protocol]) {
        auth = decodeURIComponent(parsed.auth)
      }
      var committish = parsed.hash ? decodeURIComponent(parsed.hash.substr(1)) : null
      var user = null
      var project = null
      var defaultRepresentation = null
      if (shortcutMatch && shortcutMatch[1] === gitHostName) {
        user = shortcutMatch[2] && decodeURIComponent(shortcutMatch[2])
        project = decodeURIComponent(shortcutMatch[3])
        defaultRepresentation = 'shortcut'
      } else {
        if (parsed.host !== gitHostInfo.domain) return
        if (!gitHostInfo.protocols_re.test(parsed.protocol)) return
        if (!parsed.path) return
        var pathmatch = gitHostInfo.pathmatch
        var matched = parsed.path.match(pathmatch)
        if (!matched) return
        if (matched[1] != null) user = decodeURIComponent(matched[1].replace(/^:/, ''))
        if (matched[2] != null) project = decodeURIComponent(matched[2])
        defaultRepresentation = protocolToRepresentation(parsed.protocol)
      }
      return new GitHost(gitHostName, user, auth, project, committish, defaultRepresentation, opts)
    } catch (ex) {
      if (!(ex instanceof URIError)) throw ex
    }
  }).filter(function (gitHostInfo) { return gitHostInfo })
  if (matches.length !== 1) return
  return matches[0]
}

function isGitHubShorthand (arg) {
  // Note: This does not fully test the git ref format.
  // See https://www.kernel.org/pub/software/scm/git/docs/git-check-ref-format.html
  //
  // The only way to do this properly would be to shell out to
  // git-check-ref-format, and as this is a fast sync function,
  // we don't want to do that.  Just let git fail if it turns
  // out that the commit-ish is invalid.
  // GH usernames cannot start with . or -
  return /^[^:@%/\\s.-][^:@%/\\s]*[/][^:@\\s/%]+(?:#.*)?\$/.test(arg)
}

function fixupUnqualifiedGist (giturl) {
  // necessary for round-tripping gists
  var parsed = url.parse(giturl)
  if (parsed.protocol === 'gist:' && parsed.host && !parsed.path) {
    return parsed.protocol + '/' + parsed.host
  } else {
    return giturl
  }
}

function parseGitUrl (giturl) {
  if (typeof giturl !== 'string') giturl = '' + giturl
  var matched = giturl.match(/^([^@]+)@([^:/]+):[/]?((?:[^/]+[/])?[^/]+?)(?:[.]git)?(#.*)?\$/)
  if (!matched) return url.parse(giturl)
  return {
    protocol: 'git+ssh:',
    slashes: true,
    auth: matched[1],
    host: matched[2],
    port: null,
    hostname: matched[2],
    hash: matched[4],
    search: null,
    query: null,
    pathname: '/' + matched[3],
    path: '/' + matched[3],
    href: 'git+ssh://' + matched[1] + '@' + matched[2] +
          '/' + matched[3] + (matched[4] || '')
  }
}
", "node_modules/hosted-git-info/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/hosted-git-info/index.js");
    }
}
