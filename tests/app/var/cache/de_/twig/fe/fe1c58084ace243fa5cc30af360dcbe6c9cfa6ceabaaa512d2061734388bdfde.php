<?php

/* node_modules/fsevents/node_modules/qs/CHANGELOG.md */
class __TwigTemplate_511711e974d2fe2512c6d82b2a7a91f84a3b1a5767f85704b1ab35527c9f871e extends Twig_Template
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
        $__internal_195f27b7ba85ec91f6132a893f2b2b97caf75953ff26082ec26047343ec136da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_195f27b7ba85ec91f6132a893f2b2b97caf75953ff26082ec26047343ec136da->enter($__internal_195f27b7ba85ec91f6132a893f2b2b97caf75953ff26082ec26047343ec136da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/qs/CHANGELOG.md"));

        // line 1
        echo "## **6.4.0**
- [New] `qs.stringify`: add `encodeValuesOnly` option
- [Fix] follow `allowPrototypes` option during merge (#201, #201)
- [Fix] support keys starting with brackets (#202, #200)
- [Fix] chmod a-x
- [Dev Deps] update `eslint`
- [Tests] up to `node` `v7.7`, `v6.10`,` v4.8`; disable osx builds since they block linux builds
- [eslint] reduce warnings

## **6.3.1**
- [Fix] ensure that `allowPrototypes: false` does not ever shadow Object.prototype properties (thanks, @snyk!)
- [Dev Deps] update `eslint`, `@ljharb/eslint-config`, `browserify`, `iconv-lite`, `qs-iconv`, `tape`
- [Tests] on all node minors; improve test matrix
- [Docs] document stringify option `allowDots` (#195)
- [Docs] add empty object and array values example (#195)
- [Docs] Fix minor inconsistency/typo (#192)
- [Docs] document stringify option `sort` (#191)
- [Refactor] `stringify`: throw faster with an invalid encoder
- [Refactor] remove unnecessary escapes (#184)
- Remove contributing.md, since `qs` is no longer part of `hapi` (#183)

## **6.3.0**
- [New] Add support for RFC 1738 (#174, #173)
- [New] `stringify`: Add `serializeDate` option to customize Date serialization (#159)
- [Fix] ensure `utils.merge` handles merging two arrays
- [Refactor] only constructors should be capitalized
- [Refactor] capitalized var names are for constructors only
- [Refactor] avoid using a sparse array
- [Robustness] `formats`: cache `String#replace`
- [Dev Deps] update `browserify`, `eslint`, `@ljharb/eslint-config`; add `safe-publish-latest`
- [Tests] up to `node` `v6.8`, `v4.6`; improve test matrix
- [Tests] flesh out arrayLimit/arrayFormat tests (#107)
- [Tests] skip Object.create tests when null objects are not available
- [Tests] Turn on eslint for test files (#175)

## **6.2.2**
- [Fix] ensure that `allowPrototypes: false` does not ever shadow Object.prototype properties

## **6.2.1**
- [Fix] ensure `key[]=x&key[]&key[]=y` results in 3, not 2, values
- [Refactor] Be explicit and use `Object.prototype.hasOwnProperty.call`
- [Tests] remove `parallelshell` since it does not reliably report failures
- [Tests] up to `node` `v6.3`, `v5.12`
- [Dev Deps] update `tape`, `eslint`, `@ljharb/eslint-config`, `qs-iconv`

## [**6.2.0**](https://github.com/ljharb/qs/issues?milestone=36&state=closed)
- [New] pass Buffers to the encoder/decoder directly (#161)
- [New] add \"encoder\" and \"decoder\" options, for custom param encoding/decoding (#160)
- [Fix] fix compacting of nested sparse arrays (#150)

## **6.1.1**
- [Fix] ensure that `allowPrototypes: false` does not ever shadow Object.prototype properties

## [**6.1.0**](https://github.com/ljharb/qs/issues?milestone=35&state=closed)
- [New] allowDots option for `stringify` (#151)
- [Fix] \"sort\" option should work at a depth of 3 or more (#151)
- [Fix] Restore `dist` directory; will be removed in v7 (#148)

## **6.0.3**
- [Fix] ensure that `allowPrototypes: false` does not ever shadow Object.prototype properties
- [Fix] Restore `dist` directory; will be removed in v7 (#148)

## [**6.0.2**](https://github.com/ljharb/qs/issues?milestone=33&state=closed)
- Revert ES6 requirement and restore support for node down to v0.8.

## [**6.0.1**](https://github.com/ljharb/qs/issues?milestone=32&state=closed)
- [**#127**](https://github.com/ljharb/qs/pull/127) Fix engines definition in package.json

## [**6.0.0**](https://github.com/ljharb/qs/issues?milestone=31&state=closed)
- [**#124**](https://github.com/ljharb/qs/issues/124) Use ES6 and drop support for node < v4

## **5.2.1**
- [Fix] ensure `key[]=x&key[]&key[]=y` results in 3, not 2, values

## [**5.2.0**](https://github.com/ljharb/qs/issues?milestone=30&state=closed)
- [**#64**](https://github.com/ljharb/qs/issues/64) Add option to sort object keys in the query string

## [**5.1.0**](https://github.com/ljharb/qs/issues?milestone=29&state=closed)
- [**#117**](https://github.com/ljharb/qs/issues/117) make URI encoding stringified results optional
- [**#106**](https://github.com/ljharb/qs/issues/106) Add flag `skipNulls` to optionally skip null values in stringify

## [**5.0.0**](https://github.com/ljharb/qs/issues?milestone=28&state=closed)
- [**#114**](https://github.com/ljharb/qs/issues/114) default allowDots to false
- [**#100**](https://github.com/ljharb/qs/issues/100) include dist to npm

## [**4.0.0**](https://github.com/ljharb/qs/issues?milestone=26&state=closed)
- [**#98**](https://github.com/ljharb/qs/issues/98) make returning plain objects and allowing prototype overwriting properties optional

## [**3.1.0**](https://github.com/ljharb/qs/issues?milestone=24&state=closed)
- [**#89**](https://github.com/ljharb/qs/issues/89) Add option to disable \"Transform dot notation to bracket notation\"

## [**3.0.0**](https://github.com/ljharb/qs/issues?milestone=23&state=closed)
- [**#80**](https://github.com/ljharb/qs/issues/80) qs.parse silently drops properties
- [**#77**](https://github.com/ljharb/qs/issues/77) Perf boost
- [**#60**](https://github.com/ljharb/qs/issues/60) Add explicit option to disable array parsing
- [**#74**](https://github.com/ljharb/qs/issues/74) Bad parse when turning array into object
- [**#81**](https://github.com/ljharb/qs/issues/81) Add a `filter` option
- [**#68**](https://github.com/ljharb/qs/issues/68) Fixed issue with recursion and passing strings into objects.
- [**#66**](https://github.com/ljharb/qs/issues/66) Add mixed array and object dot notation support Closes: #47
- [**#76**](https://github.com/ljharb/qs/issues/76) RFC 3986
- [**#85**](https://github.com/ljharb/qs/issues/85) No equal sign
- [**#84**](https://github.com/ljharb/qs/issues/84) update license attribute

## [**2.4.1**](https://github.com/ljharb/qs/issues?milestone=20&state=closed)
- [**#73**](https://github.com/ljharb/qs/issues/73) Property 'hasOwnProperty' of object #<Object> is not a function

## [**2.4.0**](https://github.com/ljharb/qs/issues?milestone=19&state=closed)
- [**#70**](https://github.com/ljharb/qs/issues/70) Add arrayFormat option

## [**2.3.3**](https://github.com/ljharb/qs/issues?milestone=18&state=closed)
- [**#59**](https://github.com/ljharb/qs/issues/59) make sure array indexes are >= 0, closes #57
- [**#58**](https://github.com/ljharb/qs/issues/58) make qs usable for browser loader

## [**2.3.2**](https://github.com/ljharb/qs/issues?milestone=17&state=closed)
- [**#55**](https://github.com/ljharb/qs/issues/55) allow merging a string into an object

## [**2.3.1**](https://github.com/ljharb/qs/issues?milestone=16&state=closed)
- [**#52**](https://github.com/ljharb/qs/issues/52) Return \"undefined\" and \"false\" instead of throwing \"TypeError\".

## [**2.3.0**](https://github.com/ljharb/qs/issues?milestone=15&state=closed)
- [**#50**](https://github.com/ljharb/qs/issues/50) add option to omit array indices, closes #46

## [**2.2.5**](https://github.com/ljharb/qs/issues?milestone=14&state=closed)
- [**#39**](https://github.com/ljharb/qs/issues/39) Is there an alternative to Buffer.isBuffer?
- [**#49**](https://github.com/ljharb/qs/issues/49) refactor utils.merge, fixes #45
- [**#41**](https://github.com/ljharb/qs/issues/41) avoid browserifying Buffer, for #39

## [**2.2.4**](https://github.com/ljharb/qs/issues?milestone=13&state=closed)
- [**#38**](https://github.com/ljharb/qs/issues/38) how to handle object keys beginning with a number

## [**2.2.3**](https://github.com/ljharb/qs/issues?milestone=12&state=closed)
- [**#37**](https://github.com/ljharb/qs/issues/37) parser discards first empty value in array
- [**#36**](https://github.com/ljharb/qs/issues/36) Update to lab 4.x

## [**2.2.2**](https://github.com/ljharb/qs/issues?milestone=11&state=closed)
- [**#33**](https://github.com/ljharb/qs/issues/33) Error when plain object in a value
- [**#34**](https://github.com/ljharb/qs/issues/34) use Object.prototype.hasOwnProperty.call instead of obj.hasOwnProperty
- [**#24**](https://github.com/ljharb/qs/issues/24) Changelog? Semver?

## [**2.2.1**](https://github.com/ljharb/qs/issues?milestone=10&state=closed)
- [**#32**](https://github.com/ljharb/qs/issues/32) account for circular references properly, closes #31
- [**#31**](https://github.com/ljharb/qs/issues/31) qs.parse stackoverflow on circular objects

## [**2.2.0**](https://github.com/ljharb/qs/issues?milestone=9&state=closed)
- [**#26**](https://github.com/ljharb/qs/issues/26) Don't use Buffer global if it's not present
- [**#30**](https://github.com/ljharb/qs/issues/30) Bug when merging non-object values into arrays
- [**#29**](https://github.com/ljharb/qs/issues/29) Don't call Utils.clone at the top of Utils.merge
- [**#23**](https://github.com/ljharb/qs/issues/23) Ability to not limit parameters?

## [**2.1.0**](https://github.com/ljharb/qs/issues?milestone=8&state=closed)
- [**#22**](https://github.com/ljharb/qs/issues/22) Enable using a RegExp as delimiter

## [**2.0.0**](https://github.com/ljharb/qs/issues?milestone=7&state=closed)
- [**#18**](https://github.com/ljharb/qs/issues/18) Why is there arrayLimit?
- [**#20**](https://github.com/ljharb/qs/issues/20) Configurable parametersLimit
- [**#21**](https://github.com/ljharb/qs/issues/21) make all limits optional, for #18, for #20

## [**1.2.2**](https://github.com/ljharb/qs/issues?milestone=6&state=closed)
- [**#19**](https://github.com/ljharb/qs/issues/19) Don't overwrite null values

## [**1.2.1**](https://github.com/ljharb/qs/issues?milestone=5&state=closed)
- [**#16**](https://github.com/ljharb/qs/issues/16) ignore non-string delimiters
- [**#15**](https://github.com/ljharb/qs/issues/15) Close code block

## [**1.2.0**](https://github.com/ljharb/qs/issues?milestone=4&state=closed)
- [**#12**](https://github.com/ljharb/qs/issues/12) Add optional delim argument
- [**#13**](https://github.com/ljharb/qs/issues/13) fix #11: flattened keys in array are now correctly parsed

## [**1.1.0**](https://github.com/ljharb/qs/issues?milestone=3&state=closed)
- [**#7**](https://github.com/ljharb/qs/issues/7) Empty values of a POST array disappear after being submitted
- [**#9**](https://github.com/ljharb/qs/issues/9) Should not omit equals signs (=) when value is null
- [**#6**](https://github.com/ljharb/qs/issues/6) Minor grammar fix in README

## [**1.0.2**](https://github.com/ljharb/qs/issues?milestone=2&state=closed)
- [**#5**](https://github.com/ljharb/qs/issues/5) array holes incorrectly copied into object on large index
";
        
        $__internal_195f27b7ba85ec91f6132a893f2b2b97caf75953ff26082ec26047343ec136da->leave($__internal_195f27b7ba85ec91f6132a893f2b2b97caf75953ff26082ec26047343ec136da_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/qs/CHANGELOG.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("## **6.4.0**
- [New] `qs.stringify`: add `encodeValuesOnly` option
- [Fix] follow `allowPrototypes` option during merge (#201, #201)
- [Fix] support keys starting with brackets (#202, #200)
- [Fix] chmod a-x
- [Dev Deps] update `eslint`
- [Tests] up to `node` `v7.7`, `v6.10`,` v4.8`; disable osx builds since they block linux builds
- [eslint] reduce warnings

## **6.3.1**
- [Fix] ensure that `allowPrototypes: false` does not ever shadow Object.prototype properties (thanks, @snyk!)
- [Dev Deps] update `eslint`, `@ljharb/eslint-config`, `browserify`, `iconv-lite`, `qs-iconv`, `tape`
- [Tests] on all node minors; improve test matrix
- [Docs] document stringify option `allowDots` (#195)
- [Docs] add empty object and array values example (#195)
- [Docs] Fix minor inconsistency/typo (#192)
- [Docs] document stringify option `sort` (#191)
- [Refactor] `stringify`: throw faster with an invalid encoder
- [Refactor] remove unnecessary escapes (#184)
- Remove contributing.md, since `qs` is no longer part of `hapi` (#183)

## **6.3.0**
- [New] Add support for RFC 1738 (#174, #173)
- [New] `stringify`: Add `serializeDate` option to customize Date serialization (#159)
- [Fix] ensure `utils.merge` handles merging two arrays
- [Refactor] only constructors should be capitalized
- [Refactor] capitalized var names are for constructors only
- [Refactor] avoid using a sparse array
- [Robustness] `formats`: cache `String#replace`
- [Dev Deps] update `browserify`, `eslint`, `@ljharb/eslint-config`; add `safe-publish-latest`
- [Tests] up to `node` `v6.8`, `v4.6`; improve test matrix
- [Tests] flesh out arrayLimit/arrayFormat tests (#107)
- [Tests] skip Object.create tests when null objects are not available
- [Tests] Turn on eslint for test files (#175)

## **6.2.2**
- [Fix] ensure that `allowPrototypes: false` does not ever shadow Object.prototype properties

## **6.2.1**
- [Fix] ensure `key[]=x&key[]&key[]=y` results in 3, not 2, values
- [Refactor] Be explicit and use `Object.prototype.hasOwnProperty.call`
- [Tests] remove `parallelshell` since it does not reliably report failures
- [Tests] up to `node` `v6.3`, `v5.12`
- [Dev Deps] update `tape`, `eslint`, `@ljharb/eslint-config`, `qs-iconv`

## [**6.2.0**](https://github.com/ljharb/qs/issues?milestone=36&state=closed)
- [New] pass Buffers to the encoder/decoder directly (#161)
- [New] add \"encoder\" and \"decoder\" options, for custom param encoding/decoding (#160)
- [Fix] fix compacting of nested sparse arrays (#150)

## **6.1.1**
- [Fix] ensure that `allowPrototypes: false` does not ever shadow Object.prototype properties

## [**6.1.0**](https://github.com/ljharb/qs/issues?milestone=35&state=closed)
- [New] allowDots option for `stringify` (#151)
- [Fix] \"sort\" option should work at a depth of 3 or more (#151)
- [Fix] Restore `dist` directory; will be removed in v7 (#148)

## **6.0.3**
- [Fix] ensure that `allowPrototypes: false` does not ever shadow Object.prototype properties
- [Fix] Restore `dist` directory; will be removed in v7 (#148)

## [**6.0.2**](https://github.com/ljharb/qs/issues?milestone=33&state=closed)
- Revert ES6 requirement and restore support for node down to v0.8.

## [**6.0.1**](https://github.com/ljharb/qs/issues?milestone=32&state=closed)
- [**#127**](https://github.com/ljharb/qs/pull/127) Fix engines definition in package.json

## [**6.0.0**](https://github.com/ljharb/qs/issues?milestone=31&state=closed)
- [**#124**](https://github.com/ljharb/qs/issues/124) Use ES6 and drop support for node < v4

## **5.2.1**
- [Fix] ensure `key[]=x&key[]&key[]=y` results in 3, not 2, values

## [**5.2.0**](https://github.com/ljharb/qs/issues?milestone=30&state=closed)
- [**#64**](https://github.com/ljharb/qs/issues/64) Add option to sort object keys in the query string

## [**5.1.0**](https://github.com/ljharb/qs/issues?milestone=29&state=closed)
- [**#117**](https://github.com/ljharb/qs/issues/117) make URI encoding stringified results optional
- [**#106**](https://github.com/ljharb/qs/issues/106) Add flag `skipNulls` to optionally skip null values in stringify

## [**5.0.0**](https://github.com/ljharb/qs/issues?milestone=28&state=closed)
- [**#114**](https://github.com/ljharb/qs/issues/114) default allowDots to false
- [**#100**](https://github.com/ljharb/qs/issues/100) include dist to npm

## [**4.0.0**](https://github.com/ljharb/qs/issues?milestone=26&state=closed)
- [**#98**](https://github.com/ljharb/qs/issues/98) make returning plain objects and allowing prototype overwriting properties optional

## [**3.1.0**](https://github.com/ljharb/qs/issues?milestone=24&state=closed)
- [**#89**](https://github.com/ljharb/qs/issues/89) Add option to disable \"Transform dot notation to bracket notation\"

## [**3.0.0**](https://github.com/ljharb/qs/issues?milestone=23&state=closed)
- [**#80**](https://github.com/ljharb/qs/issues/80) qs.parse silently drops properties
- [**#77**](https://github.com/ljharb/qs/issues/77) Perf boost
- [**#60**](https://github.com/ljharb/qs/issues/60) Add explicit option to disable array parsing
- [**#74**](https://github.com/ljharb/qs/issues/74) Bad parse when turning array into object
- [**#81**](https://github.com/ljharb/qs/issues/81) Add a `filter` option
- [**#68**](https://github.com/ljharb/qs/issues/68) Fixed issue with recursion and passing strings into objects.
- [**#66**](https://github.com/ljharb/qs/issues/66) Add mixed array and object dot notation support Closes: #47
- [**#76**](https://github.com/ljharb/qs/issues/76) RFC 3986
- [**#85**](https://github.com/ljharb/qs/issues/85) No equal sign
- [**#84**](https://github.com/ljharb/qs/issues/84) update license attribute

## [**2.4.1**](https://github.com/ljharb/qs/issues?milestone=20&state=closed)
- [**#73**](https://github.com/ljharb/qs/issues/73) Property 'hasOwnProperty' of object #<Object> is not a function

## [**2.4.0**](https://github.com/ljharb/qs/issues?milestone=19&state=closed)
- [**#70**](https://github.com/ljharb/qs/issues/70) Add arrayFormat option

## [**2.3.3**](https://github.com/ljharb/qs/issues?milestone=18&state=closed)
- [**#59**](https://github.com/ljharb/qs/issues/59) make sure array indexes are >= 0, closes #57
- [**#58**](https://github.com/ljharb/qs/issues/58) make qs usable for browser loader

## [**2.3.2**](https://github.com/ljharb/qs/issues?milestone=17&state=closed)
- [**#55**](https://github.com/ljharb/qs/issues/55) allow merging a string into an object

## [**2.3.1**](https://github.com/ljharb/qs/issues?milestone=16&state=closed)
- [**#52**](https://github.com/ljharb/qs/issues/52) Return \"undefined\" and \"false\" instead of throwing \"TypeError\".

## [**2.3.0**](https://github.com/ljharb/qs/issues?milestone=15&state=closed)
- [**#50**](https://github.com/ljharb/qs/issues/50) add option to omit array indices, closes #46

## [**2.2.5**](https://github.com/ljharb/qs/issues?milestone=14&state=closed)
- [**#39**](https://github.com/ljharb/qs/issues/39) Is there an alternative to Buffer.isBuffer?
- [**#49**](https://github.com/ljharb/qs/issues/49) refactor utils.merge, fixes #45
- [**#41**](https://github.com/ljharb/qs/issues/41) avoid browserifying Buffer, for #39

## [**2.2.4**](https://github.com/ljharb/qs/issues?milestone=13&state=closed)
- [**#38**](https://github.com/ljharb/qs/issues/38) how to handle object keys beginning with a number

## [**2.2.3**](https://github.com/ljharb/qs/issues?milestone=12&state=closed)
- [**#37**](https://github.com/ljharb/qs/issues/37) parser discards first empty value in array
- [**#36**](https://github.com/ljharb/qs/issues/36) Update to lab 4.x

## [**2.2.2**](https://github.com/ljharb/qs/issues?milestone=11&state=closed)
- [**#33**](https://github.com/ljharb/qs/issues/33) Error when plain object in a value
- [**#34**](https://github.com/ljharb/qs/issues/34) use Object.prototype.hasOwnProperty.call instead of obj.hasOwnProperty
- [**#24**](https://github.com/ljharb/qs/issues/24) Changelog? Semver?

## [**2.2.1**](https://github.com/ljharb/qs/issues?milestone=10&state=closed)
- [**#32**](https://github.com/ljharb/qs/issues/32) account for circular references properly, closes #31
- [**#31**](https://github.com/ljharb/qs/issues/31) qs.parse stackoverflow on circular objects

## [**2.2.0**](https://github.com/ljharb/qs/issues?milestone=9&state=closed)
- [**#26**](https://github.com/ljharb/qs/issues/26) Don't use Buffer global if it's not present
- [**#30**](https://github.com/ljharb/qs/issues/30) Bug when merging non-object values into arrays
- [**#29**](https://github.com/ljharb/qs/issues/29) Don't call Utils.clone at the top of Utils.merge
- [**#23**](https://github.com/ljharb/qs/issues/23) Ability to not limit parameters?

## [**2.1.0**](https://github.com/ljharb/qs/issues?milestone=8&state=closed)
- [**#22**](https://github.com/ljharb/qs/issues/22) Enable using a RegExp as delimiter

## [**2.0.0**](https://github.com/ljharb/qs/issues?milestone=7&state=closed)
- [**#18**](https://github.com/ljharb/qs/issues/18) Why is there arrayLimit?
- [**#20**](https://github.com/ljharb/qs/issues/20) Configurable parametersLimit
- [**#21**](https://github.com/ljharb/qs/issues/21) make all limits optional, for #18, for #20

## [**1.2.2**](https://github.com/ljharb/qs/issues?milestone=6&state=closed)
- [**#19**](https://github.com/ljharb/qs/issues/19) Don't overwrite null values

## [**1.2.1**](https://github.com/ljharb/qs/issues?milestone=5&state=closed)
- [**#16**](https://github.com/ljharb/qs/issues/16) ignore non-string delimiters
- [**#15**](https://github.com/ljharb/qs/issues/15) Close code block

## [**1.2.0**](https://github.com/ljharb/qs/issues?milestone=4&state=closed)
- [**#12**](https://github.com/ljharb/qs/issues/12) Add optional delim argument
- [**#13**](https://github.com/ljharb/qs/issues/13) fix #11: flattened keys in array are now correctly parsed

## [**1.1.0**](https://github.com/ljharb/qs/issues?milestone=3&state=closed)
- [**#7**](https://github.com/ljharb/qs/issues/7) Empty values of a POST array disappear after being submitted
- [**#9**](https://github.com/ljharb/qs/issues/9) Should not omit equals signs (=) when value is null
- [**#6**](https://github.com/ljharb/qs/issues/6) Minor grammar fix in README

## [**1.0.2**](https://github.com/ljharb/qs/issues?milestone=2&state=closed)
- [**#5**](https://github.com/ljharb/qs/issues/5) array holes incorrectly copied into object on large index
", "node_modules/fsevents/node_modules/qs/CHANGELOG.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/qs/CHANGELOG.md");
    }
}
