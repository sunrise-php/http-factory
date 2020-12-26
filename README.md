## HTTP factory for PHP 7.1+ (incl. PHP 8) based on PSR-17

[![Gitter](https://badges.gitter.im/sunrise-php/support.png)](https://gitter.im/sunrise-php/support)
[![Build Status](https://scrutinizer-ci.com/g/sunrise-php/http-factory/badges/build.png?b=master)](https://scrutinizer-ci.com/g/sunrise-php/http-factory/build-status/master)
[![Latest Stable Version](https://poser.pugx.org/sunrise/http-factory/v/stable)](https://packagist.org/packages/sunrise/http-factory)
[![Total Downloads](https://poser.pugx.org/sunrise/http-factory/downloads)](https://packagist.org/packages/sunrise/http-factory)
[![License](https://poser.pugx.org/sunrise/http-factory/license)](https://packagist.org/packages/sunrise/http-factory)

## Installation

```bash
composer require sunrise/http-factory
```

## How to use?

```php
use Sunrise\Http\Factory\RequestFactory;
use Sunrise\Http\Factory\ResponseFactory;
use Sunrise\Http\Factory\ServerRequestFactory;
use Sunrise\Http\Factory\StreamFactory;
use Sunrise\Http\Factory\UploadedFileFactory;
use Sunrise\Http\Factory\UriFactory;

// just use PSR-17 methods...
```

## Based on the following packages

* https://github.com/sunrise-php/http-message
* https://github.com/sunrise-php/http-server-request
* https://github.com/sunrise-php/stream
* https://github.com/sunrise-php/uri

## Test run

```bash
php vendor/bin/phpunit
```

## Useful links

* https://www.php-fig.org/psr/psr-17/
