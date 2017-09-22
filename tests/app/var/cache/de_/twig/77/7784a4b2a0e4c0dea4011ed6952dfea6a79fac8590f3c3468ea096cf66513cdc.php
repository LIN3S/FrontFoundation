<?php

/* node_modules/fsevents/node_modules/bcrypt-pbkdf/README.md */
class __TwigTemplate_d1546cc7643cca404e5180f55812b9819a253ba0f87bce226b71a4827f76bb5b extends Twig_Template
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
        $__internal_90f835877ade8d3f827de76bd2fab27aa3087b7600d00d77f8771ea2d4aec34d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90f835877ade8d3f827de76bd2fab27aa3087b7600d00d77f8771ea2d4aec34d->enter($__internal_90f835877ade8d3f827de76bd2fab27aa3087b7600d00d77f8771ea2d4aec34d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/bcrypt-pbkdf/README.md"));

        // line 1
        echo "Port of the OpenBSD `bcrypt_pbkdf` function to pure Javascript. `npm`-ified
version of [Devi Mandiri's port]
(https://github.com/devi/tmp/blob/master/js/bcrypt_pbkdf.js),
with some minor performance improvements. The code is copied verbatim (and
un-styled) from Devi's work.

This product includes software developed by Niels Provos.

## API

### `bcrypt_pbkdf.pbkdf(pass, passlen, salt, saltlen, key, keylen, rounds)`

Derive a cryptographic key of arbitrary length from a given password and salt,
using the OpenBSD `bcrypt_pbkdf` function. This is a combination of Blowfish and
SHA-512.

See [this article](http://www.tedunangst.com/flak/post/bcrypt-pbkdf) for
further information.

Parameters:

 * `pass`, a Uint8Array of length `passlen`
 * `passlen`, an integer Number
 * `salt`, a Uint8Array of length `saltlen`
 * `saltlen`, an integer Number
 * `key`, a Uint8Array of length `keylen`, will be filled with output
 * `keylen`, an integer Number
 * `rounds`, an integer Number, number of rounds of the PBKDF to run

### `bcrypt_pbkdf.hash(sha2pass, sha2salt, out)`

Calculate a Blowfish hash, given SHA2-512 output of a password and salt. Used as
part of the inner round function in the PBKDF.

Parameters:

 * `sha2pass`, a Uint8Array of length 64
 * `sha2salt`, a Uint8Array of length 64
 * `out`, a Uint8Array of length 32, will be filled with output
";
        
        $__internal_90f835877ade8d3f827de76bd2fab27aa3087b7600d00d77f8771ea2d4aec34d->leave($__internal_90f835877ade8d3f827de76bd2fab27aa3087b7600d00d77f8771ea2d4aec34d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/bcrypt-pbkdf/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("Port of the OpenBSD `bcrypt_pbkdf` function to pure Javascript. `npm`-ified
version of [Devi Mandiri's port]
(https://github.com/devi/tmp/blob/master/js/bcrypt_pbkdf.js),
with some minor performance improvements. The code is copied verbatim (and
un-styled) from Devi's work.

This product includes software developed by Niels Provos.

## API

### `bcrypt_pbkdf.pbkdf(pass, passlen, salt, saltlen, key, keylen, rounds)`

Derive a cryptographic key of arbitrary length from a given password and salt,
using the OpenBSD `bcrypt_pbkdf` function. This is a combination of Blowfish and
SHA-512.

See [this article](http://www.tedunangst.com/flak/post/bcrypt-pbkdf) for
further information.

Parameters:

 * `pass`, a Uint8Array of length `passlen`
 * `passlen`, an integer Number
 * `salt`, a Uint8Array of length `saltlen`
 * `saltlen`, an integer Number
 * `key`, a Uint8Array of length `keylen`, will be filled with output
 * `keylen`, an integer Number
 * `rounds`, an integer Number, number of rounds of the PBKDF to run

### `bcrypt_pbkdf.hash(sha2pass, sha2salt, out)`

Calculate a Blowfish hash, given SHA2-512 output of a password and salt. Used as
part of the inner round function in the PBKDF.

Parameters:

 * `sha2pass`, a Uint8Array of length 64
 * `sha2salt`, a Uint8Array of length 64
 * `out`, a Uint8Array of length 32, will be filled with output
", "node_modules/fsevents/node_modules/bcrypt-pbkdf/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/bcrypt-pbkdf/README.md");
    }
}
