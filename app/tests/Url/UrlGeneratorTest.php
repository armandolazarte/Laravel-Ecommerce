<?php

use Ecommerce\Url\Facades\UrlGenerator;
use Laracasts\TestDummy\DbTestCase;
use Laracasts\TestDummy\Factory;

class UrlGeneratorTest extends DbTestCase {

	/**
	 * @test
	 */
	public function it_should_generate_url()
	{

		$product = Factory::create('Ecommerce\Product', ['name' => 'Pellentesque habitant morbi tristique']);

		$this->assertEquals('pellentesque-habitant-morbi-tristique', UrlGenerator::generate($product));

	}

	/**
	 * @test
	 */
	public function it_should_generate_another_url_if_url_exists()
	{
		Factory::create('Ecommerce\Product', ['name' => 'foo', 'url' => 'foo']);

		$product = new \Ecommerce\Product(['name' => 'foo']);

		$this->assertNotEquals('foo', UrlGenerator::generate($product));

	}

	/**
	 * @test
	 */
	public function it_should_not_generate_another_url_if_updating_model()
	{
		$product = Factory::create('Ecommerce\Product', ['name' => 'foo', 'url' => 'foo']);

		$this->assertEquals('foo', $product->url);
	}

} 