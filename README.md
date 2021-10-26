## HTTP factory for PHP 7.1+ based on PSR-17

[![Build Status](https://circleci.com/gh/sunrise-php/http-factory.svg?style=shield)](https://circleci.com/gh/sunrise-php/http-factory)
[![Code Coverage](https://scrutinizer-ci.com/g/sunrise-php/http-factory/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/sunrise-php/http-factory/?branch=master)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/sunrise-php/http-factory/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/sunrise-php/http-factory/?branch=master)
[![Total Downloads](https://poser.pugx.org/sunrise/http-factory/downloads?format=flat)](https://packagist.org/packages/sunrise/http-factory)
[![Latest Stable Version](https://poser.pugx.org/sunrise/http-factory/v/stable?format=flat)](https://packagist.org/packages/sunrise/http-factory)
[![License](https://poser.pugx.org/sunrise/http-factory/license?format=flat)](https://packagist.org/packages/sunrise/http-factory)

---

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

#### HTTP headers as objects

* https://github.com/sunrise-php/http-header-kit

#### Based on the following packages

* https://github.com/sunrise-php/http-message
* https://github.com/sunrise-php/http-server-request
* https://github.com/sunrise-php/stream
* https://github.com/sunrise-php/uri

---

## Test run

```bash
composer test
```

## Useful links

* https://www.php-fig.org/psr/psr-17/
