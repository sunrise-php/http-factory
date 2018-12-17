<?php

namespace Sunrise\Http\Factory\Tests;

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

class FactoryTest extends TestCase
{
	public function testRequestFactory()
	{
		$factory = new RequestFactory();

		$this->assertInstanceOf(RequestFactoryInterface::class, $factory);
	}

	public function testResponseFactory()
	{
		$factory = new ResponseFactory();

		$this->assertInstanceOf(ResponseFactoryInterface::class, $factory);
	}

	public function testServerRequestFactory()
	{
		$factory = new ServerRequestFactory();

		$this->assertInstanceOf(ServerRequestFactoryInterface::class, $factory);
	}

	public function testStreamFactory()
	{
		$factory = new StreamFactory();

		$this->assertInstanceOf(StreamFactoryInterface::class, $factory);
	}

	public function testUploadedFileFactory()
	{
		$factory = new UploadedFileFactory();

		$this->assertInstanceOf(UploadedFileFactoryInterface::class, $factory);
	}

	public function testUriFactory()
	{
		$factory = new UriFactory();

		$this->assertInstanceOf(UriFactoryInterface::class, $factory);
	}
}
