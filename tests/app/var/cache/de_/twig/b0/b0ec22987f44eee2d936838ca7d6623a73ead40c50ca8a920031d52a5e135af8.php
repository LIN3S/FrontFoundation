<?php

/* node_modules/http-signature/http_signing.md */
class __TwigTemplate_5167cd6725f8e20063802fb22e7d2927c8180402cb0618114e3f8c882b10ae20 extends Twig_Template
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
        $__internal_2da17e2333897b2fc866a325c3a5d5bbc422d45471515db4c956590e6203ac39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2da17e2333897b2fc866a325c3a5d5bbc422d45471515db4c956590e6203ac39->enter($__internal_2da17e2333897b2fc866a325c3a5d5bbc422d45471515db4c956590e6203ac39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/http-signature/http_signing.md"));

        // line 1
        echo "# Abstract

This document describes a way to add origin authentication, message integrity,
and replay resistance to HTTP REST requests.  It is intended to be used over
the HTTPS protocol.

# Copyright Notice

Copyright (c) 2011 Joyent, Inc. and the persons identified as document authors.
All rights reserved.

Code Components extracted from this document must include MIT License text.

# Introduction

This protocol is intended to provide a standard way for clients to sign HTTP
requests.  RFC2617 (HTTP Authentication) defines Basic and Digest authentication
mechanisms, and RFC5246 (TLS 1.2) defines client-auth, both of which are widely
employed on the Internet today.  However, it is common place that the burdens of
PKI prevent web service operators from deploying that methodology, and so many
fall back to Basic authentication, which has poor security characteristics.

Additionally, OAuth provides a fully-specified alternative for authorization
of web service requests, but is not (always) ideal for machine to machine
communication, as the key acquisition steps (generally) imply a fixed
infrastructure that may not make sense to a service provider (e.g., symmetric
keys).

Several web service providers have invented their own schemes for signing
HTTP requests, but to date, none have been placed in the public domain as a
standard.  This document serves that purpose.  There are no techniques in this
proposal that are novel beyond previous art, however, this aims to be a simple
mechanism for signing these requests.

# Signature Authentication Scheme

The \"signature\" authentication scheme is based on the model that the client must
authenticate itself with a digital signature produced by either a private
asymmetric key (e.g., RSA) or a shared symmetric key (e.g., HMAC).  The scheme
is parameterized enough such that it is not bound to any particular key type or
signing algorithm.  However, it does explicitly assume that clients can send an
HTTP `Date` header.

## Authorization Header

The client is expected to send an Authorization header (as defined in RFC 2617)
with the following parameterization:

    credentials := \"Signature\" params
    params := 1#(keyId | algorithm | [headers] | [ext] | signature)
    digitalSignature := plain-string

    keyId := \"keyId\" \"=\" <\"> plain-string <\">
    algorithm := \"algorithm\" \"=\" <\"> plain-string <\">
    headers := \"headers\" \"=\" <\"> 1#headers-value <\">
    ext := \"ext\" \"=\" <\"> plain-string <\">
    signature := \"signature\" \"=\" <\"> plain-string <\">

    headers-value := plain-string
    plain-string   = 1*( %x20-21 / %x23-5B / %x5D-7E )

### Signature Parameters

#### keyId

REQUIRED.  The `keyId` field is an opaque string that the server can use to look
up the component they need to validate the signature.  It could be an SSH key
fingerprint, an LDAP DN, etc.  Management of keys and assignment of `keyId` is
out of scope for this document.

#### algorithm

REQUIRED. The `algorithm` parameter is used if the client and server agree on a
non-standard digital signature algorithm.  The full list of supported signature
mechanisms is listed below.

#### headers

OPTIONAL.  The `headers` parameter is used to specify the list of HTTP headers
used to sign the request.  If specified, it should be a quoted list of HTTP
header names, separated by a single space character.  By default, only one
HTTP header is signed, which is the `Date` header.  Note that the list MUST be
specified in the order the values are concatenated together during signing. To
include the HTTP request line in the signature calculation, use the special
`request-line` value.  While this is overloading the definition of `headers` in
HTTP linguism, the request-line is defined in RFC 2616, and as the outlier from
headers in useful signature calculation, it is deemed simpler to simply use
`request-line` than to add a separate parameter for it.

#### extensions

OPTIONAL.  The `extensions` parameter is used to include additional information
which is covered by the request.  The content and format of the string is out of
scope for this document, and expected to be specified by implementors.

#### signature

REQUIRED.  The `signature` parameter is a `Base64` encoded digital signature
generated by the client. The client uses the `algorithm` and `headers` request
parameters to form a canonicalized `signing string`.  This `signing string` is
then signed with the key associated with `keyId` and the algorithm
corresponding to `algorithm`.  The `signature` parameter is then set to the
`Base64` encoding of the signature.

### Signing String Composition

In order to generate the string that is signed with a key, the client MUST take
the values of each HTTP header specified by `headers` in the order they appear.

1. If the header name is not `request-line` then append the lowercased header
   name followed with an ASCII colon `:` and an ASCII space ` `.
2. If the header name is `request-line` then append the HTTP request line,
   otherwise append the header value.
3. If value is not the last value then append an ASCII newline `\\n`. The string
   MUST NOT include a trailing ASCII newline.

# Example Requests

All requests refer to the following request (body omitted):

    POST /foo HTTP/1.1
    Host: example.org
    Date: Tue, 07 Jun 2014 20:51:35 GMT
    Content-Type: application/json
    Digest: SHA-256=X48E9qOokqqrvdts8nOJRJN3OWDUoyWxBf7kbu9DBPE=
    Content-Length: 18

The \"rsa-key-1\" keyId refers to a private key known to the client and a public
key known to the server. The \"hmac-key-1\" keyId refers to key known to the
client and server.

## Default parameterization

The authorization header and signature would be generated as:

    Authorization: Signature keyId=\"rsa-key-1\",algorithm=\"rsa-sha256\",signature=\"Base64(RSA-SHA256(signing string))\"

The client would compose the signing string as:

    date: Tue, 07 Jun 2014 20:51:35 GMT

## Header List

The authorization header and signature would be generated as:

    Authorization: Signature keyId=\"rsa-key-1\",algorithm=\"rsa-sha256\",headers=\"(request-target) date content-type digest\",signature=\"Base64(RSA-SHA256(signing string))\"

The client would compose the signing string as (`+ \"\\n\"` inserted for
readability):

    (request-target) post /foo + \"\\n\"
    date: Tue, 07 Jun 2011 20:51:35 GMT + \"\\n\"
    content-type: application/json + \"\\n\"
    digest: SHA-256=Base64(SHA256(Body))

## Algorithm

The authorization header and signature would be generated as:

    Authorization: Signature keyId=\"hmac-key-1\",algorithm=\"hmac-sha1\",signature=\"Base64(HMAC-SHA1(signing string))\"

The client would compose the signing string as:

    date: Tue, 07 Jun 2011 20:51:35 GMT

# Signing Algorithms

Currently supported algorithm names are:

* rsa-sha1
* rsa-sha256
* rsa-sha512
* dsa-sha1
* hmac-sha1
* hmac-sha256
* hmac-sha512

# Security Considerations

## Default Parameters

Note the default parameterization of the `Signature` scheme is only safe if all
requests are carried over a secure transport (i.e., TLS).  Sending the default
scheme over a non-secure transport will leave the request vulnerable to
spoofing, tampering, replay/repudiation, and integrity violations (if using the
STRIDE threat-modeling methodology).

## Insecure Transports

If sending the request over plain HTTP, service providers SHOULD require clients
to sign ALL HTTP headers, and the `request-line`.  Additionally, service
providers SHOULD require `Content-MD5` calculations to be performed to ensure
against any tampering from clients.

## Nonces

Nonces are out of scope for this document simply because many service providers
fail to implement them correctly, or do not adopt security specifications
because of the infrastructure complexity.  Given the `header` parameterization,
a service provider is fully enabled to add nonce semantics into this scheme by
using something like an `x-request-nonce` header, and ensuring it is signed
with the `Date` header.

## Clock Skew

As the default scheme is to sign the `Date` header, service providers SHOULD
protect against logged replay attacks by enforcing a clock skew.  The server
SHOULD be synchronized with NTP, and the recommendation in this specification
is to allow 300s of clock skew (in either direction).

## Required Headers to Sign

It is out of scope for this document to dictate what headers a service provider
will want to enforce, but service providers SHOULD at minimum include the
`Date` header.

# References

## Normative References

* [RFC2616] Hypertext Transfer Protocol -- HTTP/1.1
* [RFC2617] HTTP Authentication: Basic and Digest Access Authentication
* [RFC5246] The Transport Layer Security (TLS) Protocol Version 1.2

## Informative References

    Name: Mark Cavage (editor)
    Company: Joyent, Inc.
    Email: mark.cavage@joyent.com
    URI: http://www.joyent.com

# Appendix A - Test Values

The following test data uses the RSA (1024b) keys, which we will refer
to as `keyId=Test` in the following samples:

    -----BEGIN PUBLIC KEY-----
    MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDCFENGw33yGihy92pDjZQhl0C3
    6rPJj+CvfSC8+q28hxA161QFNUd13wuCTUcq0Qd2qsBe/2hFyc2DCJJg0h1L78+6
    Z4UMR7EOcpfdUE9Hf3m/hs+FUR45uBJeDK1HSFHD8bHKD6kv8FPGfJTotc+2xjJw
    oYi+1hqp1fIekaxsyQIDAQAB
    -----END PUBLIC KEY-----

    -----BEGIN RSA PRIVATE KEY-----
    MIICXgIBAAKBgQDCFENGw33yGihy92pDjZQhl0C36rPJj+CvfSC8+q28hxA161QF
    NUd13wuCTUcq0Qd2qsBe/2hFyc2DCJJg0h1L78+6Z4UMR7EOcpfdUE9Hf3m/hs+F
    UR45uBJeDK1HSFHD8bHKD6kv8FPGfJTotc+2xjJwoYi+1hqp1fIekaxsyQIDAQAB
    AoGBAJR8ZkCUvx5kzv+utdl7T5MnordT1TvoXXJGXK7ZZ+UuvMNUCdN2QPc4sBiA
    QWvLw1cSKt5DsKZ8UETpYPy8pPYnnDEz2dDYiaew9+xEpubyeW2oH4Zx71wqBtOK
    kqwrXa/pzdpiucRRjk6vE6YY7EBBs/g7uanVpGibOVAEsqH1AkEA7DkjVH28WDUg
    f1nqvfn2Kj6CT7nIcE3jGJsZZ7zlZmBmHFDONMLUrXR/Zm3pR5m0tCmBqa5RK95u
    412jt1dPIwJBANJT3v8pnkth48bQo/fKel6uEYyboRtA5/uHuHkZ6FQF7OUkGogc
    mSJluOdc5t6hI1VsLn0QZEjQZMEOWr+wKSMCQQCC4kXJEsHAve77oP6HtG/IiEn7
    kpyUXRNvFsDE0czpJJBvL/aRFUJxuRK91jhjC68sA7NsKMGg5OXb5I5Jj36xAkEA
    gIT7aFOYBFwGgQAQkWNKLvySgKbAZRTeLBacpHMuQdl1DfdntvAyqpAZ0lY0RKmW
    G6aFKaqQfOXKCyWoUiVknQJAXrlgySFci/2ueKlIE1QqIiLSZ8V8OlpFLRnb1pzI
    7U1yQXnTAEFYM560yJlzUpOb1V4cScGd365tiSMvxLOvTA==
    -----END RSA PRIVATE KEY-----

And all examples use this request:

<!-- httpreq -->

    POST /foo?param=value&pet=dog HTTP/1.1
    Host: example.com
    Date: Thu, 05 Jan 2014 21:31:40 GMT
    Content-Type: application/json
    Digest: SHA-256=X48E9qOokqqrvdts8nOJRJN3OWDUoyWxBf7kbu9DBPE=
    Content-Length: 18

    {\"hello\": \"world\"}

<!-- /httpreq -->

### Default

The string to sign would be:

<!-- sign {\"name\": \"Default\", \"options\": {\"keyId\":\"Test\", \"algorithm\": \"rsa-sha256\"}} -->
<!-- signstring -->

    date: Thu, 05 Jan 2014 21:31:40 GMT

<!-- /signstring -->

The Authorization header would be:

<!-- authz -->

    Authorization: Signature keyId=\"Test\",algorithm=\"rsa-sha256\",headers=\"date\",signature=\"jKyvPcxB4JbmYY4mByyBY7cZfNl4OW9HpFQlG7N4YcJPteKTu4MWCLyk+gIr0wDgqtLWf9NLpMAMimdfsH7FSWGfbMFSrsVTHNTk0rK3usrfFnti1dxsM4jl0kYJCKTGI/UWkqiaxwNiKqGcdlEDrTcUhhsFsOIo8VhddmZTZ8w=\"

<!-- /authz -->

### All Headers

Parameterized to include all headers, the string to sign would be (`+ \"\\n\"`
inserted for readability):

<!-- sign {\"name\": \"All Headers\", \"options\": {\"keyId\":\"Test\", \"algorithm\": \"rsa-sha256\", \"headers\": [\"(request-target)\", \"host\", \"date\", \"content-type\", \"digest\", \"content-length\"]}} -->
<!-- signstring -->

    (request-target): post /foo?param=value&pet=dog
    host: example.com
    date: Thu, 05 Jan 2014 21:31:40 GMT
    content-type: application/json
    digest: SHA-256=X48E9qOokqqrvdts8nOJRJN3OWDUoyWxBf7kbu9DBPE=
    content-length: 18

<!-- /signstring -->

The Authorization header would be:

<!-- authz -->

    Authorization: Signature keyId=\"Test\",algorithm=\"rsa-sha256\",headers=\"(request-target) host date content-type digest content-length\",signature=\"Ef7MlxLXoBovhil3AlyjtBwAL9g4TN3tibLj7uuNB3CROat/9KaeQ4hW2NiJ+pZ6HQEOx9vYZAyi+7cmIkmJszJCut5kQLAwuX+Ms/mUFvpKlSo9StS2bMXDBNjOh4Auj774GFj4gwjS+3NhFeoqyr/MuN6HsEnkvn6zdgfE2i0=\"

<!-- /authz -->

## Generating and verifying signatures using `openssl`

The `openssl` commandline tool can be used to generate or verify the signatures listed above.

Compose the signing string as usual, and pipe it into the the `openssl dgst` command, then into `openssl enc -base64`, as follows:

    \$ printf 'date: Thu, 05 Jan 2014 21:31:40 GMT' | \\
      openssl dgst -binary -sign /path/to/private.pem -sha256 | \\
      openssl enc -base64
    jKyvPcxB4JbmYY4mByyBY7cZfNl4OW9Hp...
    \$

The `-sha256` option is necessary to produce an `rsa-sha256` signature. You can select other hash algorithms such as `sha1` by changing this argument.

To verify a signature, first save the signature data, Base64-decoded, into a file, then use `openssl dgst` again with the `-verify` option:

    \$ echo 'jKyvPcxB4JbmYY4mByy...' | openssl enc -A -d -base64 > signature
    \$ printf 'date: Thu, 05 Jan 2014 21:31:40 GMT' | \\
      openssl dgst -sha256 -verify /path/to/public.pem -signature ./signature
    Verified OK
    \$

## Generating and verifying signatures using `sshpk-sign`

You can also generate and check signatures using the `sshpk-sign` tool which is
included with the `sshpk` package in `npm`.

Compose the signing string as above, and pipe it into `sshpk-sign` as follows:

    \$ printf 'date: Thu, 05 Jan 2014 21:31:40 GMT' | \\
      sshpk-sign -i /path/to/private.pem
    jKyvPcxB4JbmYY4mByyBY7cZfNl4OW9Hp...
    \$

This will produce an `rsa-sha256` signature by default, as you can see using
the `-v` option:

    sshpk-sign: using rsa-sha256 with a 1024 bit key

You can also use `sshpk-verify` in a similar manner:

    \$ printf 'date: Thu, 05 Jan 2014 21:31:40 GMT' | \\
      sshpk-verify -i ./public.pem -s 'jKyvPcxB4JbmYY...'
    OK
    \$
";
        
        $__internal_2da17e2333897b2fc866a325c3a5d5bbc422d45471515db4c956590e6203ac39->leave($__internal_2da17e2333897b2fc866a325c3a5d5bbc422d45471515db4c956590e6203ac39_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/http-signature/http_signing.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# Abstract

This document describes a way to add origin authentication, message integrity,
and replay resistance to HTTP REST requests.  It is intended to be used over
the HTTPS protocol.

# Copyright Notice

Copyright (c) 2011 Joyent, Inc. and the persons identified as document authors.
All rights reserved.

Code Components extracted from this document must include MIT License text.

# Introduction

This protocol is intended to provide a standard way for clients to sign HTTP
requests.  RFC2617 (HTTP Authentication) defines Basic and Digest authentication
mechanisms, and RFC5246 (TLS 1.2) defines client-auth, both of which are widely
employed on the Internet today.  However, it is common place that the burdens of
PKI prevent web service operators from deploying that methodology, and so many
fall back to Basic authentication, which has poor security characteristics.

Additionally, OAuth provides a fully-specified alternative for authorization
of web service requests, but is not (always) ideal for machine to machine
communication, as the key acquisition steps (generally) imply a fixed
infrastructure that may not make sense to a service provider (e.g., symmetric
keys).

Several web service providers have invented their own schemes for signing
HTTP requests, but to date, none have been placed in the public domain as a
standard.  This document serves that purpose.  There are no techniques in this
proposal that are novel beyond previous art, however, this aims to be a simple
mechanism for signing these requests.

# Signature Authentication Scheme

The \"signature\" authentication scheme is based on the model that the client must
authenticate itself with a digital signature produced by either a private
asymmetric key (e.g., RSA) or a shared symmetric key (e.g., HMAC).  The scheme
is parameterized enough such that it is not bound to any particular key type or
signing algorithm.  However, it does explicitly assume that clients can send an
HTTP `Date` header.

## Authorization Header

The client is expected to send an Authorization header (as defined in RFC 2617)
with the following parameterization:

    credentials := \"Signature\" params
    params := 1#(keyId | algorithm | [headers] | [ext] | signature)
    digitalSignature := plain-string

    keyId := \"keyId\" \"=\" <\"> plain-string <\">
    algorithm := \"algorithm\" \"=\" <\"> plain-string <\">
    headers := \"headers\" \"=\" <\"> 1#headers-value <\">
    ext := \"ext\" \"=\" <\"> plain-string <\">
    signature := \"signature\" \"=\" <\"> plain-string <\">

    headers-value := plain-string
    plain-string   = 1*( %x20-21 / %x23-5B / %x5D-7E )

### Signature Parameters

#### keyId

REQUIRED.  The `keyId` field is an opaque string that the server can use to look
up the component they need to validate the signature.  It could be an SSH key
fingerprint, an LDAP DN, etc.  Management of keys and assignment of `keyId` is
out of scope for this document.

#### algorithm

REQUIRED. The `algorithm` parameter is used if the client and server agree on a
non-standard digital signature algorithm.  The full list of supported signature
mechanisms is listed below.

#### headers

OPTIONAL.  The `headers` parameter is used to specify the list of HTTP headers
used to sign the request.  If specified, it should be a quoted list of HTTP
header names, separated by a single space character.  By default, only one
HTTP header is signed, which is the `Date` header.  Note that the list MUST be
specified in the order the values are concatenated together during signing. To
include the HTTP request line in the signature calculation, use the special
`request-line` value.  While this is overloading the definition of `headers` in
HTTP linguism, the request-line is defined in RFC 2616, and as the outlier from
headers in useful signature calculation, it is deemed simpler to simply use
`request-line` than to add a separate parameter for it.

#### extensions

OPTIONAL.  The `extensions` parameter is used to include additional information
which is covered by the request.  The content and format of the string is out of
scope for this document, and expected to be specified by implementors.

#### signature

REQUIRED.  The `signature` parameter is a `Base64` encoded digital signature
generated by the client. The client uses the `algorithm` and `headers` request
parameters to form a canonicalized `signing string`.  This `signing string` is
then signed with the key associated with `keyId` and the algorithm
corresponding to `algorithm`.  The `signature` parameter is then set to the
`Base64` encoding of the signature.

### Signing String Composition

In order to generate the string that is signed with a key, the client MUST take
the values of each HTTP header specified by `headers` in the order they appear.

1. If the header name is not `request-line` then append the lowercased header
   name followed with an ASCII colon `:` and an ASCII space ` `.
2. If the header name is `request-line` then append the HTTP request line,
   otherwise append the header value.
3. If value is not the last value then append an ASCII newline `\\n`. The string
   MUST NOT include a trailing ASCII newline.

# Example Requests

All requests refer to the following request (body omitted):

    POST /foo HTTP/1.1
    Host: example.org
    Date: Tue, 07 Jun 2014 20:51:35 GMT
    Content-Type: application/json
    Digest: SHA-256=X48E9qOokqqrvdts8nOJRJN3OWDUoyWxBf7kbu9DBPE=
    Content-Length: 18

The \"rsa-key-1\" keyId refers to a private key known to the client and a public
key known to the server. The \"hmac-key-1\" keyId refers to key known to the
client and server.

## Default parameterization

The authorization header and signature would be generated as:

    Authorization: Signature keyId=\"rsa-key-1\",algorithm=\"rsa-sha256\",signature=\"Base64(RSA-SHA256(signing string))\"

The client would compose the signing string as:

    date: Tue, 07 Jun 2014 20:51:35 GMT

## Header List

The authorization header and signature would be generated as:

    Authorization: Signature keyId=\"rsa-key-1\",algorithm=\"rsa-sha256\",headers=\"(request-target) date content-type digest\",signature=\"Base64(RSA-SHA256(signing string))\"

The client would compose the signing string as (`+ \"\\n\"` inserted for
readability):

    (request-target) post /foo + \"\\n\"
    date: Tue, 07 Jun 2011 20:51:35 GMT + \"\\n\"
    content-type: application/json + \"\\n\"
    digest: SHA-256=Base64(SHA256(Body))

## Algorithm

The authorization header and signature would be generated as:

    Authorization: Signature keyId=\"hmac-key-1\",algorithm=\"hmac-sha1\",signature=\"Base64(HMAC-SHA1(signing string))\"

The client would compose the signing string as:

    date: Tue, 07 Jun 2011 20:51:35 GMT

# Signing Algorithms

Currently supported algorithm names are:

* rsa-sha1
* rsa-sha256
* rsa-sha512
* dsa-sha1
* hmac-sha1
* hmac-sha256
* hmac-sha512

# Security Considerations

## Default Parameters

Note the default parameterization of the `Signature` scheme is only safe if all
requests are carried over a secure transport (i.e., TLS).  Sending the default
scheme over a non-secure transport will leave the request vulnerable to
spoofing, tampering, replay/repudiation, and integrity violations (if using the
STRIDE threat-modeling methodology).

## Insecure Transports

If sending the request over plain HTTP, service providers SHOULD require clients
to sign ALL HTTP headers, and the `request-line`.  Additionally, service
providers SHOULD require `Content-MD5` calculations to be performed to ensure
against any tampering from clients.

## Nonces

Nonces are out of scope for this document simply because many service providers
fail to implement them correctly, or do not adopt security specifications
because of the infrastructure complexity.  Given the `header` parameterization,
a service provider is fully enabled to add nonce semantics into this scheme by
using something like an `x-request-nonce` header, and ensuring it is signed
with the `Date` header.

## Clock Skew

As the default scheme is to sign the `Date` header, service providers SHOULD
protect against logged replay attacks by enforcing a clock skew.  The server
SHOULD be synchronized with NTP, and the recommendation in this specification
is to allow 300s of clock skew (in either direction).

## Required Headers to Sign

It is out of scope for this document to dictate what headers a service provider
will want to enforce, but service providers SHOULD at minimum include the
`Date` header.

# References

## Normative References

* [RFC2616] Hypertext Transfer Protocol -- HTTP/1.1
* [RFC2617] HTTP Authentication: Basic and Digest Access Authentication
* [RFC5246] The Transport Layer Security (TLS) Protocol Version 1.2

## Informative References

    Name: Mark Cavage (editor)
    Company: Joyent, Inc.
    Email: mark.cavage@joyent.com
    URI: http://www.joyent.com

# Appendix A - Test Values

The following test data uses the RSA (1024b) keys, which we will refer
to as `keyId=Test` in the following samples:

    -----BEGIN PUBLIC KEY-----
    MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDCFENGw33yGihy92pDjZQhl0C3
    6rPJj+CvfSC8+q28hxA161QFNUd13wuCTUcq0Qd2qsBe/2hFyc2DCJJg0h1L78+6
    Z4UMR7EOcpfdUE9Hf3m/hs+FUR45uBJeDK1HSFHD8bHKD6kv8FPGfJTotc+2xjJw
    oYi+1hqp1fIekaxsyQIDAQAB
    -----END PUBLIC KEY-----

    -----BEGIN RSA PRIVATE KEY-----
    MIICXgIBAAKBgQDCFENGw33yGihy92pDjZQhl0C36rPJj+CvfSC8+q28hxA161QF
    NUd13wuCTUcq0Qd2qsBe/2hFyc2DCJJg0h1L78+6Z4UMR7EOcpfdUE9Hf3m/hs+F
    UR45uBJeDK1HSFHD8bHKD6kv8FPGfJTotc+2xjJwoYi+1hqp1fIekaxsyQIDAQAB
    AoGBAJR8ZkCUvx5kzv+utdl7T5MnordT1TvoXXJGXK7ZZ+UuvMNUCdN2QPc4sBiA
    QWvLw1cSKt5DsKZ8UETpYPy8pPYnnDEz2dDYiaew9+xEpubyeW2oH4Zx71wqBtOK
    kqwrXa/pzdpiucRRjk6vE6YY7EBBs/g7uanVpGibOVAEsqH1AkEA7DkjVH28WDUg
    f1nqvfn2Kj6CT7nIcE3jGJsZZ7zlZmBmHFDONMLUrXR/Zm3pR5m0tCmBqa5RK95u
    412jt1dPIwJBANJT3v8pnkth48bQo/fKel6uEYyboRtA5/uHuHkZ6FQF7OUkGogc
    mSJluOdc5t6hI1VsLn0QZEjQZMEOWr+wKSMCQQCC4kXJEsHAve77oP6HtG/IiEn7
    kpyUXRNvFsDE0czpJJBvL/aRFUJxuRK91jhjC68sA7NsKMGg5OXb5I5Jj36xAkEA
    gIT7aFOYBFwGgQAQkWNKLvySgKbAZRTeLBacpHMuQdl1DfdntvAyqpAZ0lY0RKmW
    G6aFKaqQfOXKCyWoUiVknQJAXrlgySFci/2ueKlIE1QqIiLSZ8V8OlpFLRnb1pzI
    7U1yQXnTAEFYM560yJlzUpOb1V4cScGd365tiSMvxLOvTA==
    -----END RSA PRIVATE KEY-----

And all examples use this request:

<!-- httpreq -->

    POST /foo?param=value&pet=dog HTTP/1.1
    Host: example.com
    Date: Thu, 05 Jan 2014 21:31:40 GMT
    Content-Type: application/json
    Digest: SHA-256=X48E9qOokqqrvdts8nOJRJN3OWDUoyWxBf7kbu9DBPE=
    Content-Length: 18

    {\"hello\": \"world\"}

<!-- /httpreq -->

### Default

The string to sign would be:

<!-- sign {\"name\": \"Default\", \"options\": {\"keyId\":\"Test\", \"algorithm\": \"rsa-sha256\"}} -->
<!-- signstring -->

    date: Thu, 05 Jan 2014 21:31:40 GMT

<!-- /signstring -->

The Authorization header would be:

<!-- authz -->

    Authorization: Signature keyId=\"Test\",algorithm=\"rsa-sha256\",headers=\"date\",signature=\"jKyvPcxB4JbmYY4mByyBY7cZfNl4OW9HpFQlG7N4YcJPteKTu4MWCLyk+gIr0wDgqtLWf9NLpMAMimdfsH7FSWGfbMFSrsVTHNTk0rK3usrfFnti1dxsM4jl0kYJCKTGI/UWkqiaxwNiKqGcdlEDrTcUhhsFsOIo8VhddmZTZ8w=\"

<!-- /authz -->

### All Headers

Parameterized to include all headers, the string to sign would be (`+ \"\\n\"`
inserted for readability):

<!-- sign {\"name\": \"All Headers\", \"options\": {\"keyId\":\"Test\", \"algorithm\": \"rsa-sha256\", \"headers\": [\"(request-target)\", \"host\", \"date\", \"content-type\", \"digest\", \"content-length\"]}} -->
<!-- signstring -->

    (request-target): post /foo?param=value&pet=dog
    host: example.com
    date: Thu, 05 Jan 2014 21:31:40 GMT
    content-type: application/json
    digest: SHA-256=X48E9qOokqqrvdts8nOJRJN3OWDUoyWxBf7kbu9DBPE=
    content-length: 18

<!-- /signstring -->

The Authorization header would be:

<!-- authz -->

    Authorization: Signature keyId=\"Test\",algorithm=\"rsa-sha256\",headers=\"(request-target) host date content-type digest content-length\",signature=\"Ef7MlxLXoBovhil3AlyjtBwAL9g4TN3tibLj7uuNB3CROat/9KaeQ4hW2NiJ+pZ6HQEOx9vYZAyi+7cmIkmJszJCut5kQLAwuX+Ms/mUFvpKlSo9StS2bMXDBNjOh4Auj774GFj4gwjS+3NhFeoqyr/MuN6HsEnkvn6zdgfE2i0=\"

<!-- /authz -->

## Generating and verifying signatures using `openssl`

The `openssl` commandline tool can be used to generate or verify the signatures listed above.

Compose the signing string as usual, and pipe it into the the `openssl dgst` command, then into `openssl enc -base64`, as follows:

    \$ printf 'date: Thu, 05 Jan 2014 21:31:40 GMT' | \\
      openssl dgst -binary -sign /path/to/private.pem -sha256 | \\
      openssl enc -base64
    jKyvPcxB4JbmYY4mByyBY7cZfNl4OW9Hp...
    \$

The `-sha256` option is necessary to produce an `rsa-sha256` signature. You can select other hash algorithms such as `sha1` by changing this argument.

To verify a signature, first save the signature data, Base64-decoded, into a file, then use `openssl dgst` again with the `-verify` option:

    \$ echo 'jKyvPcxB4JbmYY4mByy...' | openssl enc -A -d -base64 > signature
    \$ printf 'date: Thu, 05 Jan 2014 21:31:40 GMT' | \\
      openssl dgst -sha256 -verify /path/to/public.pem -signature ./signature
    Verified OK
    \$

## Generating and verifying signatures using `sshpk-sign`

You can also generate and check signatures using the `sshpk-sign` tool which is
included with the `sshpk` package in `npm`.

Compose the signing string as above, and pipe it into `sshpk-sign` as follows:

    \$ printf 'date: Thu, 05 Jan 2014 21:31:40 GMT' | \\
      sshpk-sign -i /path/to/private.pem
    jKyvPcxB4JbmYY4mByyBY7cZfNl4OW9Hp...
    \$

This will produce an `rsa-sha256` signature by default, as you can see using
the `-v` option:

    sshpk-sign: using rsa-sha256 with a 1024 bit key

You can also use `sshpk-verify` in a similar manner:

    \$ printf 'date: Thu, 05 Jan 2014 21:31:40 GMT' | \\
      sshpk-verify -i ./public.pem -s 'jKyvPcxB4JbmYY...'
    OK
    \$
", "node_modules/http-signature/http_signing.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/http-signature/http_signing.md");
    }
}
