<?php

declare(strict_types=1);

namespace Sunrise\Http\Factory\Tests;

use PHPUnit\Framework\TestCase;

class FactoryTest extends TestCase
{
    public function testRequestFactory() : void
    {
        $this->assertInstanceOf(
            \Sunrise\Http\Message\RequestFactory::class,
            new \Sunrise\Http\Factory\RequestFactory()
        );
    }

    public function testResponseFactory() : void
    {
        $this->assertInstanceOf(
            \Sunrise\Http\Message\ResponseFactory::class,
            new \Sunrise\Http\Factory\ResponseFactory()
        );
    }

    public function testServerRequestFactory() : void
    {
        $this->assertInstanceOf(
            \Sunrise\Http\ServerRequest\ServerRequestFactory::class,
            new \Sunrise\Http\Factory\ServerRequestFactory()
        );
    }

    public function testStreamFactory() : void
    {
        $this->assertInstanceOf(
            \Sunrise\Stream\StreamFactory::class,
            new \Sunrise\Http\Factory\StreamFactory()
        );
    }

    public function testUploadedFileFactory() : void
    {
        $this->assertInstanceOf(
            \Sunrise\Http\ServerRequest\UploadedFileFactory::class,
            new \Sunrise\Http\Factory\UploadedFileFactory()
        );
    }

    public function testUriFactory() : void
    {
        $this->assertInstanceOf(
            \Sunrise\Uri\UriFactory::class,
            new \Sunrise\Http\Factory\UriFactory()
        );
    }
}
