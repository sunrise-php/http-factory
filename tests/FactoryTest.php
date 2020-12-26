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
        $factory = new RequestFactory();

        $this->assertInstanceOf(RequestFactoryInterface::class, $factory);
    }

    /**
     * @return void
     */
    public function testResponseFactory() : void
    {
        $factory = new ResponseFactory();

        $this->assertInstanceOf(ResponseFactoryInterface::class, $factory);
    }

    public function testServerRequestFactory() : void
    {
        $factory = new ServerRequestFactory();

        $this->assertInstanceOf(ServerRequestFactoryInterface::class, $factory);
    }

    /**
     * @return void
     */
    public function testStreamFactory() : void
    {
        $factory = new StreamFactory();

        $this->assertInstanceOf(StreamFactoryInterface::class, $factory);
    }

    /**
     * @return void
     */
    public function testUploadedFileFactory() : void
    {
        $factory = new UploadedFileFactory();

        $this->assertInstanceOf(UploadedFileFactoryInterface::class, $factory);
    }

    /**
     * @return void
     */
    public function testUriFactory() : void
    {
        $factory = new UriFactory();

        $this->assertInstanceOf(UriFactoryInterface::class, $factory);
    }
}
