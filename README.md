PhpTelzio: a PHP client for the Telzio API
==============================================================

Introduction
------------

This library is a client for the
[Telzio API](https://telzio.com/support/api-calls/)
### Features

This library’s features include the following.

* Get the Live calls at this moment
* Get the call log with call details
* Get specific call details

Installation
------------

The recommended way to install this library is through [Composer](http://getcomposer.org):

```bash
$ php composer.phar require wpeereboom/php-telzio dev-master
```

Usage
-----

### The client

Use the client to get the call data. First construct a client and call the methods to receive the data:

```php
$telzioClient = new TelzioClient($username, $password);

// To get the live calls
$liveCalls = $telzioClient->getLiveCalls();

// To get the first 20 records of the call log
$logResult = $telzioClient->getLog();

// To get the details of a specific call
$call = $telzioClient->getCallDetails('sd35wegwe-b32we3-23b1c-4583e-ec1338asdc45e'); // CallUUID
```
