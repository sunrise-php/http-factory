<?php declare(strict_types=1);

namespace Sunrise\Http\Factory\Tests;

/**
 * Import classes
 */
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\ResponseFactoryInterface;
use Psr\Http\Message\ServerRequestFactoryInterface;
use Psr\Http\Message\StreamFactoryInterface;
use Psr\Http\Message\UploadedFileFactoryInterface;
use Psr\Http\Message\UriFactoryInterface;
use Sunrise\Http\Factory\RequestFactory;
use Sunrise\Http\Factory\ResponseFactory;
use Sunrise\Http\Factory\ServerRequestFactory;
use Sunrise\Http\Factory\StreamFactory;
use Sunrise\Http\Factory\UploadedFileFactory;
use Sunrise\Http\Factory\UriFactory;

/**
 * FactoryTest
 */
class FactoryTest extends TestCase
{

    /**
     * @return void
     */
    public function testRequestFactory() : void
    {
        $this->assertInstanceOf(RequestFactoryInterface::class, new RequestFactory());
    }

    /**
     * @return void
     */
    public function testResponseFactory() : void
    {
        $this->assertInstanceOf(ResponseFactoryInterface::class, new ResponseFactory());
    }

    /**
     * @return void
     */
    public function testServerRequestFactory() : void
    {
        $this->assertInstanceOf(ServerRequestFactoryInterface::class, new ServerRequestFactory());
    }

    /**
     * @return void
     */
    public function testStreamFactory() : void
    {
        $this->assertInstanceOf(StreamFactoryInterface::class, new StreamFactory());
    }

    /**
     * @return void
     */
    public function testUploadedFileFactory() : void
    {
        $this->assertInstanceOf(UploadedFileFactoryInterface::class, new UploadedFileFactory());
    }

    /**
     * @return void
     */
    public function testUriFactory() : void
    {
        $this->assertInstanceOf(UriFactoryInterface::class, new UriFactory());
    }
}
